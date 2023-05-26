<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Venda $venda
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Ações') ?></li>
        <li><?= $this->Html->link(__('Edita venda'), ['action' => 'edit', $venda->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Excluir Venda'), ['action' => 'delete', $venda->id], ['confirm' => __('Are you sure you want to delete # {0}?', $venda->id)]) ?> </li>
        <li><?= $this->Html->link(__('Lista vendas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Nova venda'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('Lista vendedor'), ['controller' => 'VendedorVendas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Cadastra vendedor'), ['controller' => 'VendedorVendas', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('Lista comprador'), ['controller' => 'CompradorVendas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Cadastra Comprador'), ['controller' => 'CompradorVendas', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="vendas view large-9 medium-8 columns content">
    <h3><?= h($venda->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Vendedor') ?></th>
            <td><?= $venda->has('vendedor') ? $this->Html->link($venda->vendedor_venda->id, ['controller' => 'VendedorVendas', 'action' => 'view', $venda->vendedor_venda->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Comprador') ?></th>
            <td><?= $venda->has('comprador_venda') ? $this->Html->link($venda->comprador_venda->id, ['controller' => 'CompradorVendas', 'action' => 'view', $venda->comprador_venda->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nome do item') ?></th>
            <td><?= h($venda->nome_do_item) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($venda->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Unidade de medida') ?></th>
            <td><?= $this->Number->format($venda->unidade_de_medida) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Quantidade') ?></th>
            <td><?= $this->Number->format($venda->quantidade) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Preço') ?></th>
            <td><?= $this->Number->format($venda->preco) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Data validade') ?></th>
            <td><?= h($venda->data_validade) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Data fabricacao') ?></th>
            <td><?= h($venda->data_fabricacao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Produto perecivel') ?></th>
            <td><?= $venda->produto_perecivel ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
</div>
