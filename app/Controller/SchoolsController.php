<?php

App::uses('AppController', 'Controller');

/**
 * Schools Controller
 *
 */
class SchoolsController extends AppController {
    
    public $components = array('RequestHandler');
    
    public $uses = array('School', 'District', 'Address', 'Institutionprovider', 'Schooltype');

    /**
     * Scaffold
     *
     * @var mixed
     */
    public $scaffold = 'admin';
    
    public function view($id = null) {
        if (isset($this->request->query['popup'])) {
            $this->layout = 'ajax';
            $this->School->Behaviors->load('Containable');
            $this->School->contain();
            $options = array('conditions' => array('School.' . $this->School->primaryKey => $id));
            $this->set('school', $this->School->find('first', $options));
            $this->render('view_popup');
            return;
        }
        $options = array('conditions' => array('School.' . $this->School->primaryKey => $id));
        $this->set('school', $this->School->find('first', $options));
    }
    
    public function view_popup($id = null) {
        
    }
    
    public function admin_view($id = null) {
        if (!$this->School->exists($id)) {
                throw new NotFoundException(__('Invalid School'));
        }
        $options = array('conditions' => array('School.' . $this->School->primaryKey => $id));
        $this->set('school', $this->School->find('first', $options));
    }
    
    public function index() {
        $this->set('schools', $this->School->find('all', array('limit' => 100)));
        $this->set('_serialize', array('schools'));
    }

    public function import() {
        if (!$this->request->is('post')) {
            return;
        }
        $regions = array();
        $addresses = array();
        $schooltypes = array();
        $bsns = array();
        $privatId = $this->Institutionprovider->find('first', array('conditions' => array('description' => 'privat')))['Institutionprovider']['id'];
        $oeffenId = $this->Institutionprovider->find('first', array('conditions' => array('description' => 'öffentlich')))['Institutionprovider']['id'];

        if (($fd = fopen($this->request->data['CSV']['submittedFile']['tmp_name'], 'r')) !== false) {
            //readFirstLine
            $csvHeaders = fgetcsv($fd);
       
            $countSchools = 0;
            
            while (($data = fgetcsv($fd)) !== false) {
                $countSchools++;
                $csvDict = $this->makeCsvDict($csvHeaders, $data);

                $bsn = $csvDict['BSN'];
                
                if (!isset($bsns[$bsn])) {
                    $bsns[$bsn] = array();
                }
                
                // district importieren
                if (!array_key_exists($csvDict['Region'], $regions)) {
                    $dist = $this->District->find('first', array('conditions' => array('name' => $csvDict['Region'])));
                    if ($dist == false) {
                        $this->District->create();
                        $this->District->set('name', $csvDict['Region']);
                        $dist = $this->District->save();
                    }
                    $regions[$csvDict['Region']] = $dist;
                }
                
                // addresse importieren
                if (!array_key_exists('address_id', $bsns[$bsn])) {
                    $address = $this->Address->find('first', array('conditions' => array('street' => $csvDict['Strasse'])));
                    if ($address == false) {
                        $this->Address->create();
                        $this->Address->set('street', $csvDict['Strasse']);
                        $this->Address->set('zipcode', $csvDict['PLZ']);
                        
                        $reqAddress = implode("+", array($csvDict['Strasse'], $csvDict['PLZ'], "Berlin"));
                        $reqAddress = str_replace(" ", "+", $reqAddress);
                        
                        $resp = json_decode(file_get_contents("http://maps.googleapis.com/maps/api/geocode/json?address=".$reqAddress."&sensor=true"));
                        if ($resp->status == 'OK' && isset($resp->results[0]->geometry)) {
                            $this->Address->set('longitude', $resp->results[0]->geometry->location->lng);
                            $this->Address->set('latitude', $resp->results[0]->geometry->location->lat);
                        } else {
                            echo $reqAddress." didn't return a good location :(<br />";
                        }
                        $this->Address->set('district_id', $regions[$csvDict['Region']]['District']['id']);
                        $address = $this->Address->save();
                    }
                    $bsns[$bsn]['address_id'] = $address['Address']['id'];
                }
                
                if (!array_key_exists($csvDict['Schulart'], $schooltypes)) {
                    $schoolType = $this->Schooltype->find('first', array('conditions' => array('name' => $csvDict['Schulart'])));
                    if ($schoolType == false) {
                        $this->Schooltype->create();
                        $this->Schooltype->set('name', $csvDict['Schulart']);
                        $schoolType = $this->Schooltype->save();
                    }
                    $schooltypes[$csvDict['Schulart']] = $schoolType['Schooltype']['id'];
                }
                
                if (!array_key_exists($csvDict, $bsns))
                
                if (!array_key_exists('id', $bsns[$bsn])) {
                    $school = $this->School->find('first', array('conditions' => array('bsn' => $bsn)));
                    if ($school == false) {
                        $countSchools++;
                        $this->School->create();
                        $this->School->set('name', $csvDict['Schulname']);
                        $this->School->set('bsn', $bsn);
                        $traeger = $csvDict['Schultraeger'];
                        if ($traeger == "öffentlich") {
                            $this->School->set('institutionprovider_id', $oeffenId);
                        } else {
                            $this->School->set('institutionprovider_id', $privatId);
                        }
                        $this->School->set('phonenumber', $csvDict['Telefon']);
                        $this->School->set('wwwaddress', $csvDict['Internet']);
                        $this->School->set('meal', $csvDict['Mittagessen']);
                        $this->School->set('address_id', $bsns[$bsn]['address_id']);
                        $school = $this->School->save();
                    }
                    $bsns[$bsn]['id'] = $school['School']['id'];
                }
            }
            
            $this->set('importedSchools', $countSchools);
            
        } else {
            
        }
        //$fd = fopen("path", 'r')
        //$csvHeaders = array();
    }

    function makeCsvDict($csvHeaders, $data) {
        $cData = array();
        $cnt = count($data);
        for ($i = 0; $i < $cnt; $i++) {
            $cData[$csvHeaders[$i]] = $data[$i];
        }
        return $cData;
    }

}
