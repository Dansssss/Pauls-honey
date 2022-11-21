<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Products Controller
 *
 * @property \App\Model\Table\ProductsTable $Products
 * @method \App\Model\Entity\Product[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProductsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */

    public function beforeFilter(\Cake\Event\EventInterface $event)
    {
        parent::beforeFilter($event);

        $this->Authentication->allowUnauthenticated(['index','index2','search','view','test']);
    }

    public function logout(): ?\Cake\Http\Response
    {
        $this->Authentication->logout();
        return $this->redirect(['controller' => 'Customers', 'action' => 'login']);
    }

    public function index()
    {

        //$this->viewBuilder()->setLayout('productLayout');
        //code for search bar
        $key = $this->request->getQuery('key');
        if($key){
            $query=$this->Products->find('all')->where(['title like'=>'%'.$key.'%']);
            $count=count($query->all());
            if($count==0){
                $query=$this->Products;
                $this->Flash->error(__(' Product not found. Please, try again.'));
            }
            else{

                $this->Flash->success(__('The product has been shown.'));
            }

        }else{
            $query=$this->Products;
        }

        $this->paginate = [
            'contain' => ['Suppliers'],
        ];
        $products = $this->paginate($query);

        $this->set(compact('products'));
    }

    /**
     * View method
     *
     * @param string|null $id Product id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $product = $this->Products->get($id, [
            'contain' => ['Suppliers'],
        ]);

        $this->set(compact('product'));
        
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $product = $this->Products->newEmptyEntity();
        if ($this->request->is('post')) {
            $product = $this->Products->patchEntity($product, $this->request->getData());
            //code for upload image
            if(!$product->getErrors){
                $image = $this->request->getData('image_file');
                $name = $image->getClientFilename();
                $targetPath = WWW_ROOT.'img'.DS.$name;
                if($name)
                    $image->moveTo($targetPath);

                $product->image = $name;
            }




            if ($this->Products->save($product)) {
                $this->Flash->success(__('The product has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The product could not be saved. Please, try again.'));
        }
        $suppliers = $this->Products->Suppliers->find('list', ['limit' => 200]);
        $this->set(compact('product', 'suppliers'));
    }

    public function add2()
    {
        $this->viewBuilder()->setLayout('inventoryLayout');
        $product = $this->Products->newEmptyEntity();
        if ($this->request->is('post')) {
            $product = $this->Products->patchEntity($product, $this->request->getData());
            //code for upload image
            if(!$product->getErrors){
                $image = $this->request->getData('image_file');
                $name = $image->getClientFilename();
                $targetPath = WWW_ROOT.'img'.DS.$name;
                if($name)
                    $image->moveTo($targetPath);

                $product->image = $name;
            }




            if ($this->Products->save($product)) {
                $this->Flash->success(__('The product has been saved.'));

                return $this->redirect(['action' => 'check']);
            }
            $this->Flash->error(__('The product could not be saved. Please, try again.'));
        }
        $suppliers = $this->Products->Suppliers->find('list', ['limit' => 200]);
        $this->set(compact('product', 'suppliers'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Product id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $product = $this->Products->get($id);

        if ($this->request->is(['patch', 'post', 'put'])) {
            $product = $this->Products->patchEntity($product, $this->request->getData());

            if(!$product->getErrors){
                $image = $this->request->getData('change_image');
                $name = $image->getClientFilename();
                $targetPath = WWW_ROOT.'img'.DS.$name;
                if($name){
                    $image->moveTo($targetPath);
                    $imgpath = WWW_ROOT.'img'.DS.$product->image;
                    if(file_exists($imgpath)){
                        unlink($imgpath);
                    }
                    $product->image = $name;

                }
                    

                
            }

            if ($this->Products->save($product)) {
                $this->Flash->success(__('The product has been saved.'));

                return $this->redirect(['action' => 'check']);
            }
            $this->Flash->error(__('The product could not be saved. Please, try again.'));
        }
        $suppliers = $this->Products->Suppliers->find('list', ['limit' => 200]);
        $this->set(compact('product', 'suppliers'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Product id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $product = $this->Products->get($id);
        if ($this->Products->delete($product)) {
            $this->Flash->success(__('The product has been deleted.'));
        } else {
            $this->Flash->error(__('The product could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'check']);
    }


    public function index2()
    {

        $key = $this->request->getQuery('key');
        if($key){
            $query=$this->Products->find('all')->where(['title like'=>'%'.$key.'%']);
            $count=count($query->all());
            if($count==0){
                $this->Flash->error(__(' Product not found. Please, try again.'));
            }
            else{

                $this->Flash->success(__('The product has been shown.'));
            }

        }else{
            $query=$this->Products;
        }

        $this->paginate = [
            'contain' => ['Suppliers'],
        ];
        $products = $this->paginate($query);

        $this->set(compact('products'));
        $this->viewBuilder()->setLayout('productLayout');

    }
    public function showcart(){
        

    }
    public function check(){
        $key = $this->request->getQuery('key');
        if($key){
            $query=$this->Products->find('all')->where(['title like'=>'%'.$key.'%']);
            $count=count($query->all());
            if($count==0){
                $this->Flash->error(__(' Product not found. Please, try again.'));
            }
            else{

                $this->Flash->success(__('The product has been shown.'));
            }

        }else{
            $query=$this->Products;
        }

        $this->paginate = [
            'contain' => ['Suppliers'],
        ];
        $products = $this->paginate($query);

        $this->set(compact('products'));
        $this->viewBuilder()->setLayout('inventoryLayout');
    }
    

    public function test($id = null){

        $product = $this->Products->get($id, [
            'contain' => ['Suppliers'],
        ]);

        $this->set(compact('product'));
        

    }


}
