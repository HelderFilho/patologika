<?php
App::uses('AppController', 'Controller');
/**
 * Pecas Controller
 *
 * @property Peca $Peca
 * @property PaginatorComponent $Paginator
 */
class PecasController extends AppController {

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
                        $conditions['Peca.' . $param_name . ' LIKE'] = '%' . urldecode(urldecode($value)) . '%';
                        } else {
                        $conditions['Peca.' . $param_name . ' ='] = urldecode(urldecode($value));
                        }
                }
            }
        }
	    
		$this->Peca->recursive = 0;
		$this->paginate = array(
            'limit' => 10,
            'conditions' => $conditions
        );
		$options = array('Peca.removed' => 'N');
		$this->set('pecas', $this->Paginator->paginate($options));
		
			}

/**
 * view method
 * Powered by Frame2Days
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Peca->exists($id)) {
			throw new NotFoundException(__('Invalid peca'));
		}
		$options = array('conditions' => array('Peca.' . $this->Peca->primaryKey => $id));
		$this->set('peca', $this->Peca->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Peca->create();
			     $Date = new DateTime($this->request->data['Peca']['Date']);
                 $this->request->data['Peca']['Date'] = $Date->format('Y-m-d H:i');
                                 $Created = new DateTime($this->request->data['Peca']['Created']);
                 $this->request->data['Peca']['Created'] = $Created->format('Y-m-d H:i');
                                 $Modified = new DateTime($this->request->data['Peca']['Modified']);
                 $this->request->data['Peca']['Modified'] = $Modified->format('Y-m-d H:i');
                            		     if ($this->Peca->save($this->request->data)) {
                                                                $this->Flash->success(__('peca').' '.__('has been saved.'));
                                        return $this->redirect(array('action' => 'index'));
                                    } else {
                                        $this->Flash->error(__('peca').' '.__('could not be saved. Please, try again.'));
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
		if (!$this->Peca->exists($id)) {
			throw new NotFoundException(__('Invalid peca'));
		}
		if ($this->request->is(array('post', 'put'))) {
		                                   $Date = new DateTime($this->request->data['Peca']['Date']);
                                $this->request->data['Peca']['Date'] = $Date->format('Y-m-d H:i');
                                                            $Created = new DateTime($this->request->data['Peca']['Created']);
                                $this->request->data['Peca']['Created'] = $Created->format('Y-m-d H:i');
                                                            $Modified = new DateTime($this->request->data['Peca']['Modified']);
                                $this->request->data['Peca']['Modified'] = $Modified->format('Y-m-d H:i');
                            			if ($this->Peca->save($this->request->data)) {
                                    $this->Flash->success(__('peca').' '.__('has been edited.'));
                    return $this->redirect(array('action' => 'index'));
                    } else {
                    $this->Flash->error(__('peca').' '.__('could not be edited. Please, try again.'));
                			}
		} else {
			$options = array('conditions' => array('Peca.' . $this->Peca->primaryKey => $id));
			$this->request->data = $this->Peca->find('first', $options);
		}
	 $Date = new DateTime($this->request->data['Peca']['Date']);
 $this->request->data['Peca']['Date'] = $Date->format('d-m-Y H:i');
                             $Created = new DateTime($this->request->data['Peca']['Created']);
 $this->request->data['Peca']['Created'] = $Created->format('d-m-Y H:i');
                             $Modified = new DateTime($this->request->data['Peca']['Modified']);
 $this->request->data['Peca']['Modified'] = $Modified->format('d-m-Y H:i');
                            	}

/**
 * delete method
 * Powered by Frame2Days
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Peca->id = $id;
		if (!$this->Peca->exists()) {
			throw new NotFoundException(__('Invalid peca'));
		}
		$data = array('id' => $id, 'removed' => 'S');
		$this->request->allowMethod('post', 'delete');
		if ($this->Peca->save($data)) {
            $this->Flash->success(__('peca').' '.__('has been deleted.'));
		} else {
            $this->Flash->error(__('peca').' '.__('could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
