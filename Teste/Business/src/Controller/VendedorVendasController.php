<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * VendedorVendas Controller
 *
 * @property \App\Model\Table\VendedorVendasTable $VendedorVendas
 *
 * @method \App\Model\Entity\VendedorVenda[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class VendedorVendasController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $vendedorVendas = $this->paginate($this->VendedorVendas);

        $this->set(compact('vendedorVendas'));
    }

    /**
     * View method
     *
     * @param string|null $id Vendedor Venda id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $vendedorVenda = $this->VendedorVendas->get($id, [
            'contain' => ['Vendas'],
        ]);

        $this->set('vendedorVenda', $vendedorVenda);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $vendedorVenda = $this->VendedorVendas->newEntity();
        if ($this->request->is('post')) {
            $vendedorVenda = $this->VendedorVendas->patchEntity($vendedorVenda, $this->request->getData());
            if ($this->VendedorVendas->save($vendedorVenda)) {
                $this->Flash->success(__('The vendedor venda has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The vendedor venda could not be saved. Please, try again.'));
        }
        $this->set(compact('vendedorVenda'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Vendedor Venda id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $vendedorVenda = $this->VendedorVendas->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $vendedorVenda = $this->VendedorVendas->patchEntity($vendedorVenda, $this->request->getData());
            if ($this->VendedorVendas->save($vendedorVenda)) {
                $this->Flash->success(__('The vendedor venda has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The vendedor venda could not be saved. Please, try again.'));
        }
        $this->set(compact('vendedorVenda'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Vendedor Venda id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $vendedorVenda = $this->VendedorVendas->get($id);
        if ($this->VendedorVendas->delete($vendedorVenda)) {
            $this->Flash->success(__('The vendedor venda has been deleted.'));
        } else {
            $this->Flash->error(__('The vendedor venda could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
