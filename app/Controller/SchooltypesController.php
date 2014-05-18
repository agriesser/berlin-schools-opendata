<?php

App::uses('AppController', 'Controller');

/**
 * Schooltypes Controller
 *
 */
class SchooltypesController extends AppController {

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
                
                $schooltype = $this->Schooltype->find('first', array('conditions' => array('name' => $csvDict['Schulart'])));
                if ($schooltype == false) {
                    $this->Schooltype->create();
                    $this->Schooltype->set('name', $csvDict['Schulart']);
                    $this->Schooltype->save();
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
