<?php
App::uses('AppController', 'Controller');
/**
 * Laminas Controller
 *
 * @property Lamina $Lamina
 * @property PaginatorComponent $Paginator
 */
class LaminasController extends AppController {

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
                        $conditions['Lamina.' . $param_name . ' LIKE'] = '%' . urldecode(urldecode($value)) . '%';
                        } else {
                        $conditions['Lamina.' . $param_name . ' ='] = urldecode(urldecode($value));
                        }
                }
            }
        }
	    
		$this->Lamina->recursive = 0;
		$this->paginate = array(
            'limit' => 10,
            'conditions' => $conditions
        );
		$options = array('Lamina.removed' => 'N');
		$this->set('laminas', $this->Paginator->paginate($options));
		
			}

/**
 * view method
 * Powered by Frame2Days
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Lamina->exists($id)) {
			throw new NotFoundException(__('Invalid lamina'));
		}
		$options = array('conditions' => array('Lamina.' . $this->Lamina->primaryKey => $id));
		$this->set('lamina', $this->Lamina->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Lamina->create();
			     $Date = new DateTime($this->request->data['Lamina']['Date']);
                 $this->request->data['Lamina']['Date'] = $Date->format('Y-m-d H:i');
                                 $Created = new DateTime($this->request->data['Lamina']['Created']);
                 $this->request->data['Lamina']['Created'] = $Created->format('Y-m-d H:i');
                                 $Modified = new DateTime($this->request->data['Lamina']['Modified']);
                 $this->request->data['Lamina']['Modified'] = $Modified->format('Y-m-d H:i');
                            		     if ($this->Lamina->save($this->request->data)) {
                                                                $this->Flash->success(__('lamina').' '.__('has been saved.'));
                                        return $this->redirect(array('action' => 'index'));
                                    } else {
                                        $this->Flash->error(__('lamina').' '.__('could not be saved. Please, try again.'));
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
		if (!$this->Lamina->exists($id)) {
			throw new NotFoundException(__('Invalid lamina'));
		}
		if ($this->request->is(array('post', 'put'))) {
		                                   $Date = new DateTime($this->request->data['Lamina']['Date']);
                                $this->request->data['Lamina']['Date'] = $Date->format('Y-m-d H:i');
                                                            $Created = new DateTime($this->request->data['Lamina']['Created']);
                                $this->request->data['Lamina']['Created'] = $Created->format('Y-m-d H:i');
                                                            $Modified = new DateTime($this->request->data['Lamina']['Modified']);
                                $this->request->data['Lamina']['Modified'] = $Modified->format('Y-m-d H:i');
                            			if ($this->Lamina->save($this->request->data)) {
                                    $this->Flash->success(__('lamina').' '.__('has been edited.'));
                    return $this->redirect(array('action' => 'index'));
                    } else {
                    $this->Flash->error(__('lamina').' '.__('could not be edited. Please, try again.'));
                			}
		} else {
			$options = array('conditions' => array('Lamina.' . $this->Lamina->primaryKey => $id));
			$this->request->data = $this->Lamina->find('first', $options);
		}
	 $Date = new DateTime($this->request->data['Lamina']['Date']);
 $this->request->data['Lamina']['Date'] = $Date->format('d-m-Y H:i');
                             $Created = new DateTime($this->request->data['Lamina']['Created']);
 $this->request->data['Lamina']['Created'] = $Created->format('d-m-Y H:i');
                             $Modified = new DateTime($this->request->data['Lamina']['Modified']);
 $this->request->data['Lamina']['Modified'] = $Modified->format('d-m-Y H:i');
                            	}

/**
 * delete method
 * Powered by Frame2Days
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Lamina->id = $id;
		if (!$this->Lamina->exists()) {
			throw new NotFoundException(__('Invalid lamina'));
		}
		$data = array('id' => $id, 'removed' => 'S');
		$this->request->allowMethod('post', 'delete');
		if ($this->Lamina->save($data)) {
            $this->Flash->success(__('lamina').' '.__('has been deleted.'));
		} else {
            $this->Flash->error(__('lamina').' '.__('could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
