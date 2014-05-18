<?php
App::uses('AppController', 'Controller');
/**
 * Accessibilityequipments Controller
 *
 * @property Accessibilityequipment $Accessibilityequipment
 * @property PaginatorComponent $Paginator
 */
class AccessibilityequipmentsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Accessibilityequipment->recursive = 0;
		$this->set('accessibilityequipments', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Accessibilityequipment->exists($id)) {
			throw new NotFoundException(__('Invalid accessibilityequipment'));
		}
		$options = array('conditions' => array('Accessibilityequipment.' . $this->Accessibilityequipment->primaryKey => $id));
		$this->set('accessibilityequipment', $this->Accessibilityequipment->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Accessibilityequipment->create();
			if ($this->Accessibilityequipment->save($this->request->data)) {
				$this->Session->setFlash(__('The accessibilityequipment has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The accessibilityequipment could not be saved. Please, try again.'));
			}
		}
		$schools = $this->Accessibilityequipment->School->find('list');
		$this->set(compact('schools'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Accessibilityequipment->exists($id)) {
			throw new NotFoundException(__('Invalid accessibilityequipment'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Accessibilityequipment->save($this->request->data)) {
				$this->Session->setFlash(__('The accessibilityequipment has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The accessibilityequipment could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Accessibilityequipment.' . $this->Accessibilityequipment->primaryKey => $id));
			$this->request->data = $this->Accessibilityequipment->find('first', $options);
		}
		$schools = $this->Accessibilityequipment->School->find('list');
		$this->set(compact('schools'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Accessibilityequipment->id = $id;
		if (!$this->Accessibilityequipment->exists()) {
			throw new NotFoundException(__('Invalid accessibilityequipment'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Accessibilityequipment->delete()) {
			$this->Session->setFlash(__('The accessibilityequipment has been deleted.'));
		} else {
			$this->Session->setFlash(__('The accessibilityequipment could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
        
    public function import() {
        if (!$this->request->is('post')) {
            return;
        }
        
        if (($fd = fopen($this->request->data['CSV']['submittedFile']['tmp_name'], 'r')) !== false) {
            //readFirstLine
            $csvHeaders = fgetcsv($fd);

            $countSchools = 0;

            $this->loadModel('School');
            $this->School->Behaviors->load('Containable');
            
            $this->Accessibilityequipment->Behaviors->load('Containable');
            
            $assocs = array();
            
            while (($data = fgetcsv($fd)) !== false) {
                $this->School->contain();
                $this->Accessibilityequipment->contain();
                $countSchools++;
                
                $csvDict = $this->makeCsvDict($csvHeaders, $data);
                
                $equipments = mb_split(",", $csvDict['Bauten']);
                
                foreach ($equipments as $accessEquip) {
                    $accessEquip = trim($accessEquip);
                    $equip = $this->Accessibilityequipment->find('first', array('conditions' => array('name' => $accessEquip)));
                    if ($equip == false) {
                        $this->Accessibilityequipment->create();
                        $this->Accessibilityequipment->set('name', $accessEquip);
                        $this->Accessibilityequipment->save();
                    }
                    $school = $this->School->find('first', array('fields' => 'id', 'conditions' => array('bsn' => $csvDict['BSN'])));
                    if ($school != false) {
                        $assocs[] = array(
                                $school['School']['id'], 
                                $equip['Accessibilityequipment']['id']);
                    }
                }
            }
            
            // TODO: quite the hack...
            $this->insertAssociations($assocs);
        }
    }
    
    function insertAssociations($assocs) {
        $query = 'INSERT INTO schools_accessibilityequipments (school_id, accessibilityequipment_id) VALUES ';
        $value_array= array();
        $assocs = array_unique($assocs, SORT_REGULAR);
        foreach ($assocs as $assoc) {
            $value_array[] = '('.implode(',', $assoc).')';
        }
        $query .= implode(',',$value_array);
        $this->Accessibilityequipment->query($query);
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
