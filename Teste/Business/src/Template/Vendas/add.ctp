<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Venda $venda
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Ações') ?></li>
        <li><?= $this->Html->link(__('Listar vendas'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Listar vendedor'), ['controller' => 'VendedorVendas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Cadastra vendedor'), ['controller' => 'VendedorVendas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Listar comprador'), ['controller' => 'CompradorVendas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Cadastra comprador'), ['controller' => 'CompradorVendas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="vendas form large-9 medium-8 columns content">
    <?= $this->Form->create($venda) ?>
    <fieldset>
        <legend><?= __('Cadastra venda') ?></legend>
        <?php
            echo $this->Form->control('vendedor_venda_id', ['options' => $vendedorVendas]);
            echo $this->Form->control('comprador_venda_id', ['options' => $compradorVendas]);
            echo $this->Form->control('nome_do_item');
            echo $this->Form->control('unidade_de_medida');
            echo $this->Form->control('quantidade');
            echo $this->Form->control('preco');
            echo $this->Form->control('produto_perecivel');
            echo $this->Form->control('data_validade');
            echo $this->Form->control('data_fabricacao');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Cadastra')) ?>
    <?= $this->Form->end() ?>
</div>
