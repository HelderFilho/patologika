<?php
App::uses('AppController', 'Controller');
/**
 * Slides Controller
 *
 * @property Slide $Slide
 * @property PaginatorComponent $Paginator
 */
class SlidesController extends AppController {

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
                        $conditions['Slide.' . $param_name . ' LIKE'] = '%' . urldecode(urldecode($value)) . '%';
                        } else {
                        $conditions['Slide.' . $param_name . ' ='] = urldecode(urldecode($value));
                        }
                }
            }
        }
	    
		$this->Slide->recursive = 0;
		$this->paginate = array(
            'limit' => 10,
            'conditions' => $conditions
        );
		$options = array('Slide.removed' => 'N');
		$this->set('slides', $this->Paginator->paginate($options));
		
			}

/**
 * view method
 * Powered by Frame2Days
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Slide->exists($id)) {
			throw new NotFoundException(__('Invalid slide'));
		}
		$options = array('conditions' => array('Slide.' . $this->Slide->primaryKey => $id));
		$this->set('slide', $this->Slide->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Slide->create();
					     if ($this->Slide->save($this->request->data)) {
                                                                $this->Flash->success(__('slide').' '.__('has been saved.'));
                                        return $this->redirect(array('action' => 'index'));
                                    } else {
                                        $this->Flash->error(__('slide').' '.__('could not be saved. Please, try again.'));
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
		if (!$this->Slide->exists($id)) {
			throw new NotFoundException(__('Invalid slide'));
		}
		if ($this->request->is(array('post', 'put'))) {
		   			if ($this->Slide->save($this->request->data)) {
                                    $this->Flash->success(__('slide').' '.__('has been edited.'));
                    return $this->redirect(array('action' => 'index'));
                    } else {
                    $this->Flash->error(__('slide').' '.__('could not be edited. Please, try again.'));
                			}
		} else {
			$options = array('conditions' => array('Slide.' . $this->Slide->primaryKey => $id));
			$this->request->data = $this->Slide->find('first', $options);
		}
		}

/**
 * delete method
 * Powered by Frame2Days
 * @throws NotFoundException
 * @param string $id
 * @return void
 */

    public function delete($id = null) {

        if (!$this->Slide->exists($id)) {
            throw new NotFoundException(__('Invalid lamina'));
        }
        if ($this->request->is(array('post', 'put'))) {
            $this->Slide->read(null,$id);
            $this->Slide->set(array('Id'=>$id, 'Removed'=>'S'));

            if ($this->Slide->save()) {
                $this->Flash->success(__('slide').' '.__('has been deleted.'));
                       return $this->redirect(array('action' => 'index'));
            } else {
                $this->Flash->error(__('slide').' '.__('could not be deleted. Please, try again.'));
                     return $this->redirect(array('action' => 'index'));

            }
        } else {
            $options = array('conditions' => array('slide.' . $this->Slide->primaryKey => $id));
            $this->request->data = $this->Slide->find('first', $options);
        }
    }
}
