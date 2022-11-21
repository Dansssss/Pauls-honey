<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Customers Controller
 *
 * @property \App\Model\Table\CustomersTable $Customers
 * @method \App\Model\Entity\Customer[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
/**
 * Stocks Controller
 *
 * @property \App\Model\Table\StocksTable $Stocks
 * @method \App\Model\Entity\Stock[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */


class CustomersController extends AppController
{

    public function beforeFilter(\Cake\Event\EventInterface $event)
    {
        parent::beforeFilter($event);

        $this->Authentication->allowUnauthenticated(['login','home','add','about','edit', 'index']);
    }

    public function login()
    {
        $this->request->allowMethod(['get', 'post']);
        $result = $this->Authentication->getResult();

        // regardless of POST or GET, redirect if user is logged in
        if ($result->isValid()) {
            $customer = $this->Authentication->getIdentity()->getOriginalData()->user_role;



            if($customer == 1) {
                $this->redirect('/Stocks/inventory');

            }
            else {
                return $this->redirect(['Controller'=>'Customers','action'=>'home']);
                }
        }
        // display error if user submitted and authentication failed
        if ($this->request->is('post') && !$result->isValid()) {
            $this->Flash->error(__('Invalid username or password'));
        }
    }

    public function logout()
    {
        $result = $this->Authentication->getResult();
        // regardless of POST or GET, redirect if user is logged in
        if ($result->isValid()) {
            $this->Authentication->logout();
            return $this->redirect(['controller' => 'Customers', 'action' => 'home']);
        }
    }



    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $customers = $this->paginate($this->Customers);

        $this->set(compact('customers'));
    }

    /**
     * View method
     *
     * @param string|null $id Customer id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {

        $customer = $this->Customers->get($id, [
            'contain' => ['Orders'],
        ]);

        $this->set(compact('customer'));

    }

    public function view2($id = null)
    {
        $this->viewBuilder()->setLayout('accountLayout');
        $customer = $this->Customers->get($id, [
            'contain' => ['Orders'],
        ]);

        $this->set(compact('customer'));

    }


    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $customer = $this->Customers->newEmptyEntity();
        if ($this->request->is('post')) {
            $customer = $this->Customers->patchEntity($customer, $this->request->getData());
            //debug($customer);
            //debug($customer == 1);
            if ($this->Customers->save($customer)) {
                $this->Flash->success(__('Your account has been created. Please log in.'));

                return $this->redirect(['action' => 'login']);
            }
            $this->Flash->error(__('The account could not be created. Please, try again, fill in each space and select the correct date of birth. '));
        }
        $this->set(compact('customer'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Customer id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {

        $customer = $this->Customers->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $customer = $this->Customers->patchEntity($customer, $this->request->getData());
            if ($this->Customers->save($customer)) {
                $this->Flash->success(__('Your profile has been updated.'));

                    return $this->redirect(['action' => 'home']);
            }
            $this->Flash->error(__('Your profile could not be updated. Please, try again.'));
        }
        $this->set(compact('customer'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Customer id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $customer = $this->Customers->get($id);
        if ($this->Customers->delete($customer)) {
            $this->Flash->success(__('The customer has been deleted.'));
        } else {
            $this->Flash->error(__('The customer could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'home']);
    }



    public function home(){
        //exit("hello");
        $this->viewBuilder()->setLayout('custlogin');
    }
    public function about(){
        $this->viewBuilder()->setLayout('aboutLayout');
    }
    public function account(){
        $this->viewBuilder()->setLayout('accountLayout');
    }
    public function skip()
    {
        $this->redirect(['Controller' => 'Customers', 'action' => 'home']);

    }
    public function check(){
        $this->viewBuilder()->setLayout('inventoryLayout');
        $customers = $this->paginate($this->Customers);

        $this->set(compact('customers'));

    }


}
