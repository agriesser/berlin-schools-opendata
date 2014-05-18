<?php
App::uses('ConnectionManager', 'Controller', 'Controller', 'School', 'District', 'Containable', 'Html');
class HomeController extends AppController {
    
    public $components = array('RequestHandler');
    
    public $helpers = array('Html');

    public $uses = array('School', 'District', 'Schoolbranchtype', 'Accessibilityequipment');
    
    public function index() {       
        $this->District->Behaviors->load('Containable');
        $this->District->contain();
        $this->set('districts', $this->District->find('all'));
        
        $this->Schoolbranchtype->contain();
        $this->set('branches', $this->Schoolbranchtype->find('all'));
        
        $this->Accessibilityequipment->Behaviors->load('Containable');
        $this->Accessibilityequipment->contain();
        $this->set('disEquip', $this->Accessibilityequipment->find('all'));
    }
    
    public function query() {
        $conditions = array();
        $joins = array();
        
        $contains = array();
        
        if (isset($this->request->query['data']['branches'])) {
            $contains['Schoolbranch'] = array(
                'fields' => 'id',
                'conditions' => array('Schoolbranch.schoolbranchtype_id' => $this->request->query['data']['branches'])
                );
            $joins[] = array(
                'table' => 'schoolbranches',
                'alias' => 'Schoolbranch',
                'type' => 'LEFT',
                'conditions' => 'Schoolbranch.school_id = School.id');
            $conditions['Schoolbranch.schoolbranchtype_id'] = $this->request->query['data']['branches'];
        }
        if (isset($this->request->query['data']['districts'])) {
            $conditions[] = array('Address.district_id' => $this->request->query['data']['districts']);
        }
        if (isset($this->request->query['data']['chkMeal'])) {
            $conditions[] = array('CHAR_LENGTH(School.meal) >' => 0);
        }
        if (isset($this->request->query['data']['disEquip'])) {
            // gosh this is so ugly!
            $validSchools = $this->getSchoolsWithAccessibility($this->request->query['data']['disEquip']);
//            $joins[] = array(
//                'table' => 'schools_accessibilityequipments',
//                'alias' => 'Accessibilityequipment',
//                'type' => 'LEFT',
//                'conditions' => 'Accessibilityequipment.school_id = School.id');
            $conditions[] = array('School.id IN' => $validSchools);
        }
        
        $contains['Address'] = array('fields' => array('latitude', 'longitude', 'district_id'));
        $this->set('results', array(
            'schools' => $this->School->find('all', array(
                'joins' => $joins,
                'fields' => array('id'),
                'contain' => $contains,
                'conditions' => $conditions
                )))
            );
    }
    
    private function getSchoolsWithAccessibility($selectedEquipment) {
        $query = 'SELECT a.school_id FROM schools_accessibilityequipments AS a ';
        $where = 'WHERE a.accessibilityequipment_id = ? ';
        $char = ord('b');
        for ($i = 1; $i < count($selectedEquipment); $i++) {
            $query .= "JOIN schools_accessibilityequipments AS ".chr($char).' ON '.chr($char-1).'.school_id = '.chr($char).'.school_id ';
            $where .= "AND ".chr($char).'.accessibilityequipment_id = ? ';
            $char++;
        }
        $query .= $where;
        $db = $this->School->getDataSource();
        $arr = $db->fetchAll($query, $selectedEquipment);
        $ids = array();
        foreach ($arr as $result) {
            $ids[] = $result['a']['school_id'];
        }
        return $ids;
    }
}