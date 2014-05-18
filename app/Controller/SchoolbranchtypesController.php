<?php
App::uses('AppController', 'Controller');
/**
 * Schoolbranchtypes Controller
 *
 */
class SchoolbranchtypesController extends AppController {
    
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

            $countSchools = 0;

            while (($data = fgetcsv($fd)) !== false) {
                $countSchools++;
                $csvDict = $this->makeCsvDict($csvHeaders, $data);
                
                $schooltype = $this->Schoolbranchtype->find('first', array('conditions' => array('name' => $csvDict['Schulzweig'])));
                if ($schooltype == false) {
                    $this->Schoolbranchtype->create();
                    $this->Schoolbranchtype->set('name', $csvDict['Schulzweig']);
                    $this->Schoolbranchtype->save();
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
