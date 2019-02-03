<?php
App::uses('AppController', 'Controller');
/**
 * Medics Controller
 *
 * @property Medic $Medic
 * @property PaginatorComponent $Paginator
 */
class MedicsController extends AppController {

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
                        $conditions['Medic.' . $param_name . ' LIKE'] = '%' . urldecode(urldecode($value)) . '%';
                        } else {
                        $conditions['Medic.' . $param_name . ' ='] = urldecode(urldecode($value));
                        }
                }
            }
        }
	    
		$this->Medic->recursive = 0;
		$this->paginate = array(
            'limit' => 10,
            'conditions' => $conditions
        );
		$options = array('Medic.removed' => 'N');
		$this->set('medics', $this->Paginator->paginate($options));
		
			}

/**
 * view method
 * Powered by Frame2Days
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Medic->exists($id)) {
			throw new NotFoundException(__('Invalid medic'));
		}
		$options = array('conditions' => array('Medic.' . $this->Medic->primaryKey => $id));
		$this->set('medic', $this->Medic->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Medic->create();
			     $Created = new DateTime($this->request->data['Medic']['Created']);
                 $this->request->data['Medic']['Created'] = $Created->format('Y-m-d H:i');
                                 $Modified = new DateTime($this->request->data['Medic']['Modified']);
                 $this->request->data['Medic']['Modified'] = $Modified->format('Y-m-d H:i');
                            		     if ($this->Medic->save($this->request->data)) {
                                                                $this->Flash->success(__('medic').' '.__('has been saved.'));
                                        return $this->redirect(array('action' => 'index'));
                                    } else {
                                        $this->Flash->error(__('medic').' '.__('could not be saved. Please, try again.'));
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
		if (!$this->Medic->exists($id)) {
			throw new NotFoundException(__('Invalid medic'));
		}
		if ($this->request->is(array('post', 'put'))) {
		                                   $Created = new DateTime($this->request->data['Medic']['Created']);
                                $this->request->data['Medic']['Created'] = $Created->format('Y-m-d H:i');
                                                            $Modified = new DateTime($this->request->data['Medic']['Modified']);
                                $this->request->data['Medic']['Modified'] = $Modified->format('Y-m-d H:i');
                            			if ($this->Medic->save($this->request->data)) {
                                    $this->Flash->success(__('medic').' '.__('has been edited.'));
                    return $this->redirect(array('action' => 'index'));
                    } else {
                    $this->Flash->error(__('medic').' '.__('could not be edited. Please, try again.'));
                			}
		} else {
			$options = array('conditions' => array('Medic.' . $this->Medic->primaryKey => $id));
			$this->request->data = $this->Medic->find('first', $options);
		}
	 $Created = new DateTime($this->request->data['Medic']['Created']);
 $this->request->data['Medic']['Created'] = $Created->format('d-m-Y H:i');
                             $Modified = new DateTime($this->request->data['Medic']['Modified']);
 $this->request->data['Medic']['Modified'] = $Modified->format('d-m-Y H:i');
                            	}

/**
 * delete method
 * Powered by Frame2Days
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Medic->id = $id;
		if (!$this->Medic->exists()) {
			throw new NotFoundException(__('Invalid medic'));
		}
		$data = array('id' => $id, 'removed' => 'S');
		$this->request->allowMethod('post', 'delete');
		if ($this->Medic->save($data)) {
            $this->Flash->success(__('medic').' '.__('has been deleted.'));
		} else {
            $this->Flash->error(__('medic').' '.__('could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
