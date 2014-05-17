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
 * index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Accessibilityequipment->recursive = 0;
		$this->set('accessibilityequipments', $this->Paginator->paginate());
	}

/**
 * view method
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
 * add method
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
 * edit method
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
 * delete method
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
}
