<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CompradorVenda $compradorVenda
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Ações') ?></li>
        <li><?= $this->Html->link(__('Edita Comprador'), ['action' => 'edit', $compradorVenda->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Excluir comprador'), ['action' => 'delete', $compradorVenda->id], ['confirm' => __('Are you sure you want to delete # {0}?', $compradorVenda->id)]) ?> </li>
        <li><?= $this->Html->link(__('Lista comprador'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Cadastra comprador'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('Lista vendas'), ['controller' => 'Vendas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Cadastra venda'), ['controller' => 'Vendas', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="compradorVendas view large-9 medium-8 columns content">
    <h3><?= h($compradorVenda->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nome do Comprador') ?></th>
            <td><?= h($compradorVenda->nome_do_comprador) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($compradorVenda->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Vendas') ?></h4>
        <?php if (!empty($compradorVenda->vendas)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Vendedor') ?></th>
                <th scope="col"><?= __('Comprador') ?></th>
                <th scope="col"><?= __('Nome do item') ?></th>
                <th scope="col"><?= __('Unidade de medida') ?></th>
                <th scope="col"><?= __('Quantidade') ?></th>
                <th scope="col"><?= __('Preço') ?></th>
                <th scope="col"><?= __('Produto perecivel') ?></th>
                <th scope="col"><?= __('Data validade') ?></th>
                <th scope="col"><?= __('Data fabricacao') ?></th>
                <th scope="col" class="actions"><?= __('Ações') ?></th>
            </tr>
            <?php foreach ($compradorVenda->vendas as $vendas): ?>
            <tr>
                <td><?= h($vendas->id) ?></td>
                <td><?= h($vendas->vendedor_venda_id) ?></td>
                <td><?= h($vendas->comprador_venda_id) ?></td>
                <td><?= h($vendas->nome_do_item) ?></td>
                <td><?= h($vendas->unidade_de_medida) ?></td>
                <td><?= h($vendas->quantidade) ?></td>
                <td><?= h($vendas->preco) ?></td>
                <td><?= h($vendas->produto_perecivel) ?></td>
                <td><?= h($vendas->data_validade) ?></td>
                <td><?= h($vendas->data_fabricacao) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Ver'), ['controller' => 'Vendas', 'action' => 'view', $vendas->id]) ?>
                    <?= $this->Html->link(__('Edita'), ['controller' => 'Vendas', 'action' => 'edit', $vendas->id]) ?>
                    <?= $this->Form->postLink(__('Excluir'), ['controller' => 'Vendas', 'action' => 'delete', $vendas->id], ['confirm' => __('Are you sure you want to delete # {0}?', $vendas->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
