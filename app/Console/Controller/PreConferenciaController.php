<?php
App::uses('AppController', 'Controller');
/**
 * PreConferencia Controller
 *
 * @property PreConferencium $PreConferencium
 * @property PaginatorComponent $Paginator
 */
class PreConferenciaController extends AppController {

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
	public function index() {
		$this->PreConferencium->recursive = 0;
		$this->set('preConferencia', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->PreConferencium->exists($id)) {
			throw new NotFoundException(__('Invalid pre conferencium'));
		}
		$options = array('conditions' => array('PreConferencium.' . $this->PreConferencium->primaryKey => $id));
		$this->set('preConferencium', $this->PreConferencium->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->PreConferencium->create();
			if ($this->PreConferencium->save($this->request->data)) {
				$this->Flash->success(__('The pre conferencium has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The pre conferencium could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->PreConferencium->exists($id)) {
			throw new NotFoundException(__('Invalid pre conferencium'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->PreConferencium->save($this->request->data)) {
				$this->Flash->success(__('The pre conferencium has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The pre conferencium could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('PreConferencium.' . $this->PreConferencium->primaryKey => $id));
			$this->request->data = $this->PreConferencium->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->PreConferencium->id = $id;
		if (!$this->PreConferencium->exists()) {
			throw new NotFoundException(__('Invalid pre conferencium'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->PreConferencium->delete()) {
			$this->Flash->success(__('The pre conferencium has been deleted.'));
		} else {
			$this->Flash->error(__('The pre conferencium could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
