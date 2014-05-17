<?php
App::uses('AppController', 'Controller', 'MapHelper');
/**
 * Addresses Controller
 *
 */
class AddressesController extends AppController {

/**
 * Scaffold
 *
 * @var mixed
 */
	public $scaffold = 'admin';
        
        public $helpers = array('Map');

        function admin_view($id = null) {
            if (!$this->Address->exists($id)) {
			throw new NotFoundException(__('Invalid Address'));
		}
            $options = array('conditions' => array('Address.' . $this->Address->primaryKey => $id));
            $this->set('address', $this->Address->find('first', $options));
        }
}
