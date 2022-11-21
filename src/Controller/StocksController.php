<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Stocks Controller
 *
 * @property \App\Model\Table\StocksTable $Stocks
 * @method \App\Model\Entity\Stock[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class StocksController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Products', 'Orders'],
        ];
        $stocks = $this->paginate($this->Stocks);

        $this->set(compact('stocks'));

    }

    /**
     * View method
     *
     * @param string|null $id Stock id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $stock = $this->Stocks->get($id, [
            'contain' => ['Products', 'Orders'],
        ]);

        $this->set(compact('stock'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $stock = $this->Stocks->newEmptyEntity();
        if ($this->request->is('post')) {
            $stock = $this->Stocks->patchEntity($stock, $this->request->getData());
            if ($this->Stocks->save($stock)) {
                $this->Flash->success(__('The stock has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The stock could not be saved. Please, try again.'));
        }
        $products = $this->Stocks->Products->find('list', ['limit' => 200]);
        $orders = $this->Stocks->Orders->find('list', ['limit' => 200]);
        $this->set(compact('stock', 'products', 'orders'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Stock id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $stock = $this->Stocks->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $stock = $this->Stocks->patchEntity($stock, $this->request->getData());
            if ($this->Stocks->save($stock)) {
                return $this->redirect(['action' => 'inventory']);
            }
            $this->Flash->error(__('The stock could not be saved. Please, try again.'));
        }
        $products = $this->Stocks->Products->find('list', ['limit' => 200]);
        $orders = $this->Stocks->Orders->find('list', ['limit' => 200]);
        $this->set(compact('stock', 'products', 'orders'));
    }
    public function edit2($id = null)
    {

        $stock = $this->Stocks->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $stock = $this->Stocks->patchEntity($stock, $this->request->getData());
            if ($this->Stocks->save($stock)) {
                $this->Flash->success(__('The stock has been saved.'));

                return $this->redirect(['action' => 'inventory']);
            }
            $this->Flash->error(__('The stock could not be saved. Please, try again.'));
        }
        $products = $this->Stocks->Products->find('list', ['limit' => 200]);
        $orders = $this->Stocks->Orders->find('list', ['limit' => 200]);
        $this->set(compact('stock', 'products', 'orders'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Stock id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $stock = $this->Stocks->get($id);
        if ($this->Stocks->delete($stock)) {
            $this->Flash->success(__('The stock has been deleted.'));
        } else {
            $this->Flash->error(__('The stock could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
    public function inventory(){
        $customer = $this->Authentication->getIdentity()->getOriginalData()->user_role;
        //debug($customer);
        if($customer == 0) {
            $this->redirect('/Customers/home');}
        else{
        $this->paginate = [
            'contain' => ['Products', 'Orders'],
        ];
        $stocks = $this->paginate($this->Stocks);

        $this->set(compact('stocks'));
        $this->viewBuilder()->setLayout('inventoryLayout');
    }}
}
