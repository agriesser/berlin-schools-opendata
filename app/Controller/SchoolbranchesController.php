<?php
App::uses('AppController', 'Controller');
/**
 * Schoolbranches Controller
 *
 */
class SchoolbranchesController extends AppController {
    
    public $uses = array('Schoolbranch', 'School', 'Schoolbranchtype');

/**
 * Scaffold
 *
 * @var mixed
 */
	public $scaffold = 'admin';

    public function import() {
        if (!$this->request->is('post')) {
            return;
        }

        if (($fd = fopen($this->request->data['CSV']['submittedFile']['tmp_name'], 'r')) !== false) {
            //readFirstLine
            $csvHeaders = fgetcsv($fd);

            $this->School->Behaviors->load('Containable');
            $this->School->contain();
            $this->Schoolbranchtype->Behaviors->load('Containable');
            $this->Schoolbranchtype->contain();
            
            while (($data = fgetcsv($fd)) !== false) {
                $csvDict = $this->makeCsvDict($csvHeaders, $data);
                
                $bsn = $csvDict['BSN'];
                $school = $this->School->find('first', array('conditions' => array('bsn' => $bsn)));
                if ($school == false) {
                    continue;
                }
                
                $branchType = $this->Schoolbranchtype->find('first', array('conditions' => array('name' => $csvDict['Schulzweig'])));
                if ($branchType == false) {
                    continue;
                }
                
                $branch = $this->Schoolbranch->find('first', 
                        array('conditions' => 
                            array(
                                'school_id' => $school['School']['id'], 
                                'schoolbranchtype_id' => $branchType['Schoolbranchtype']['id'])));
                if ($branch == false) {
                    $this->Schoolbranch->create();
                    $this->Schoolbranch->set('school_id', $school['School']['id']);
                    $this->Schoolbranch->set('schoolbranchtype_id', $branchType['Schoolbranchtype']['id']);
                    $this->Schoolbranch->save();
                }
            }
        }
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
