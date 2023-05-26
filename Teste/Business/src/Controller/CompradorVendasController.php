<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * CompradorVendas Controller
 *
 * @property \App\Model\Table\CompradorVendasTable $CompradorVendas
 *
 * @method \App\Model\Entity\CompradorVenda[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CompradorVendasController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $compradorVendas = $this->paginate($this->CompradorVendas);

        $this->set(compact('compradorVendas'));
    }

    /**
     * View method
     *
     * @param string|null $id Comprador Venda id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $compradorVenda = $this->CompradorVendas->get($id, [
            'contain' => ['Vendas'],
        ]);

        $this->set('compradorVenda', $compradorVenda);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $compradorVenda = $this->CompradorVendas->newEntity();
        if ($this->request->is('post')) {
            $compradorVenda = $this->CompradorVendas->patchEntity($compradorVenda, $this->request->getData());
            if ($this->CompradorVendas->save($compradorVenda)) {
                $this->Flash->success(__('The comprador venda has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The comprador venda could not be saved. Please, try again.'));
        }
        $this->set(compact('compradorVenda'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Comprador Venda id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $compradorVenda = $this->CompradorVendas->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $compradorVenda = $this->CompradorVendas->patchEntity($compradorVenda, $this->request->getData());
            if ($this->CompradorVendas->save($compradorVenda)) {
                $this->Flash->success(__('The comprador venda has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The comprador venda could not be saved. Please, try again.'));
        }
        $this->set(compact('compradorVenda'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Comprador Venda id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $compradorVenda = $this->CompradorVendas->get($id);
        if ($this->CompradorVendas->delete($compradorVenda)) {
            $this->Flash->success(__('The comprador venda has been deleted.'));
        } else {
            $this->Flash->error(__('The comprador venda could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
