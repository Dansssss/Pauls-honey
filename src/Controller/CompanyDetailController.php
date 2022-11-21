<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * CompanyDetail Controller
 *
 * @property \App\Model\Table\CompanyDetailTable $CompanyDetail
 * @method \App\Model\Entity\CompanyDetail[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CompanyDetailController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $companyDetail = $this->paginate($this->CompanyDetail);

        $this->set(compact('companyDetail'));
    }

    /**
     * View method
     *
     * @param string|null $id Company Detail id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $companyDetail = $this->CompanyDetail->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('companyDetail'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $companyDetail = $this->CompanyDetail->newEmptyEntity();
        if ($this->request->is('post')) {
            $companyDetail = $this->CompanyDetail->patchEntity($companyDetail, $this->request->getData());
            if ($this->CompanyDetail->save($companyDetail)) {
                $this->Flash->success(__('The company detail has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The company detail could not be saved. Please, try again.'));
        }
        $this->set(compact('companyDetail'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Company Detail id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $companyDetail = $this->CompanyDetail->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $companyDetail = $this->CompanyDetail->patchEntity($companyDetail, $this->request->getData());
            if ($this->CompanyDetail->save($companyDetail)) {
                $this->Flash->success(__('The company detail has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The company detail could not be saved. Please, try again.'));
        }
        $this->set(compact('companyDetail'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Company Detail id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $companyDetail = $this->CompanyDetail->get($id);
        if ($this->CompanyDetail->delete($companyDetail)) {
            $this->Flash->success(__('The company detail has been deleted.'));
        } else {
            $this->Flash->error(__('The company detail could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
