<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\I18n\Time;

/**
 * Media Controller
 *
 * @property \App\Model\Table\MediaTable $Media
 */
class MediaController extends AppController {

  public function initialize() {
    parent::initialize();
    $this->loadComponent('Upload');
  }

  /**
   * Index method
   *
   * @return \Cake\Network\Response|null
   */
  public function index() {
    $this->set('media', $this->Media->find('all', array('conditions' => array('Media.user_id' => $this->Auth->user('id')))));
    $this->set('_serialize', ['media']);
  }

  /**
   * View method
   *
   * @param string|null $id Media id.
   * @return \Cake\Network\Response|null
   * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
   */
  public function view($id = null) {
    $media = $this->Media->get($id, [
        'contain' => ['Users']
    ]);

    $this->set('media', $media);
    $this->set('_serialize', ['media']);
  }

  /**
   * Add method
   *
   * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
   */
  public function add() {
    $media = $this->Media->newEntity();
    if ($this->request->is('post')) {
      $media = $this->Media->patchEntity($media, $this->request->data);
      $uploadedFile = $this->request->data['uploadfile'];
      $media['src'] = $uploadedFile['name'];
      $media['type'] = $this->Upload->checkType($uploadedFile['type']);

      if ($this->Media->save($media)) {
        $this->Upload->send($this->request->data['uploadfile']);

        $this->Flash->success(__('The media has been saved.'));
        return $this->redirect(['action' => 'index']);
      } else {
        $this->Flash->error(__('The media could not be saved. Please, try again.'));
      }
    }
    $users = $this->Media->Users->find('list', ['limit' => 200]);
    $this->set(compact('media', 'users'));
    $this->set('_serialize', ['media']);
    $this->set('currentuser', $this->Auth->user('id'));
    $this->set('timenow', Time::now());
  }

  /**
   * Edit method
   *
   * @param string|null $id Media id.
   * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
   * @throws \Cake\Network\Exception\NotFoundException When record not found.
   */
  public function edit($id = null) {
    $media = $this->Media->get($id, [
        'contain' => []
    ]);
    if ($this->request->is(['patch', 'post', 'put'])) {
      $media = $this->Media->patchEntity($media, $this->request->data);
      if ($this->Media->save($media)) {
        $this->Flash->success(__('The media has been saved.'));
        return $this->redirect(['action' => 'index']);
      } else {
        $this->Flash->error(__('The media could not be saved. Please, try again.'));
      }
    }
    $users = $this->Media->Users->find('list', ['limit' => 200]);
    $this->set(compact('media', 'users'));
    $this->set('_serialize', ['media']);
    $this->set('permissions', true);
    $this->set('timenow', Time::now());
  }

  /**
   * Delete method
   *
   * @param string|null $id Media id.
   * @return \Cake\Network\Response|null Redirects to index.
   * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
   */
  public function delete($id = null) {
    $this->request->allowMethod(['post', 'delete']);
    $media = $this->Media->get($id);
    if ($this->Media->delete($media)) {
      $this->Flash->success(__('The media has been deleted.'));
    } else {
      $this->Flash->error(__('The media could not be deleted. Please, try again.'));
    }
    return $this->redirect(['action' => 'index']);
  }

}
