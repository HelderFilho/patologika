<?php
App::uses('AppController', 'Controller');
/**
 * Macros Controller
 *
 * @property Macro $Macro
 * @property PaginatorComponent $Paginator
 */
class MacrosController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 * Powered by Frame2Days
 * @return void
 */
	public function index() {
	    $conditions = array();
        
        if(($this->request->is('post') || $this->request->is('put')) && isset($this->data['Filter'])){
            $filter_url['controller'] = $this->request->params['controller'];
            $filter_url['action'] = $this->request->params['action'];
            $filter_url['page'] = 1;

            foreach($this->data['Filter'] as $name => $value){
                if($value){
                   $filter_url[$name] = urlencode(urlencode($value));
                }
            }   
            return $this->redirect($filter_url);
        }else {
            foreach($this->params['named'] as $param_name => $value){
               
                if(!in_array($param_name, array('page','sort','direction','limit'))){
                        if (strripos($param_name, '_id') === false) {
                        $conditions['Macro.' . $param_name . ' LIKE'] = '%' . urldecode(urldecode($value)) . '%';
                        } else {
                        $conditions['Macro.' . $param_name . ' ='] = urldecode(urldecode($value));
                        }
                }
            }
        }
	    
		$this->Macro->recursive = 0;
		$this->paginate = array(
            'limit' => 10,
            'conditions' => $conditions
        );
		$options = array('Macro.removed' => 'N');
		$this->set('macros', $this->Paginator->paginate($options));
		
			}

/**
 * view method
 * Powered by Frame2Days
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Macro->exists($id)) {
			throw new NotFoundException(__('Invalid macro'));
		}
		$options = array('conditions' => array('Macro.' . $this->Macro->primaryKey => $id));
		$this->set('macro', $this->Macro->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Macro->create();
			     $Created = new DateTime($this->request->data['Macro']['Created']);
                 $this->request->data['Macro']['Created'] = $Created->format('Y-m-d H:i');
                                 $Modified = new DateTime($this->request->data['Macro']['Modified']);
                 $this->request->data['Macro']['Modified'] = $Modified->format('Y-m-d H:i');
                            		     if ($this->Macro->save($this->request->data)) {
                                                                $this->Flash->success(__('macro').' '.__('has been saved.'));
                                        return $this->redirect(array('action' => 'index'));
                                    } else {
                                        $this->Flash->error(__('macro').' '.__('could not be saved. Please, try again.'));
                        			}
		}
	}

/**
 * edit method
 * Powered by Frame2Days
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Macro->exists($id)) {
			throw new NotFoundException(__('Invalid macro'));
		}
		if ($this->request->is(array('post', 'put'))) {
		                                   $Created = new DateTime($this->request->data['Macro']['Created']);
                                $this->request->data['Macro']['Created'] = $Created->format('Y-m-d H:i');
                                                            $Modified = new DateTime($this->request->data['Macro']['Modified']);
                                $this->request->data['Macro']['Modified'] = $Modified->format('Y-m-d H:i');
                            			if ($this->Macro->save($this->request->data)) {
                                    $this->Flash->success(__('macro').' '.__('has been edited.'));
                    return $this->redirect(array('action' => 'index'));
                    } else {
                    $this->Flash->error(__('macro').' '.__('could not be edited. Please, try again.'));
                			}
		} else {
			$options = array('conditions' => array('Macro.' . $this->Macro->primaryKey => $id));
			$this->request->data = $this->Macro->find('first', $options);
		}
	 $Created = new DateTime($this->request->data['Macro']['Created']);
 $this->request->data['Macro']['Created'] = $Created->format('d-m-Y H:i');
                             $Modified = new DateTime($this->request->data['Macro']['Modified']);
 $this->request->data['Macro']['Modified'] = $Modified->format('d-m-Y H:i');
                            	}

/**
 * delete method
 * Powered by Frame2Days
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Macro->id = $id;
		if (!$this->Macro->exists()) {
			throw new NotFoundException(__('Invalid macro'));
		}
		$data = array('id' => $id, 'removed' => 'S');
		$this->request->allowMethod('post', 'delete');
		if ($this->Macro->save($data)) {
            $this->Flash->success(__('macro').' '.__('has been deleted.'));
		} else {
            $this->Flash->error(__('macro').' '.__('could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
