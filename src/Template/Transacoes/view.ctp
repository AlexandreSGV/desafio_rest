<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Transaco $transaco
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Transaco'), ['action' => 'edit', $transaco->idTransacao]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Transaco'), ['action' => 'delete', $transaco->idTransacao], ['confirm' => __('Are you sure you want to delete # {0}?', $transaco->idTransacao)]) ?> </li>
        <li><?= $this->Html->link(__('List Transacoes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Transaco'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="transacoes view large-9 medium-8 columns content">
    <h3><?= h($transaco->idTransacao) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('IdTransacao') ?></th>
            <td><?= $this->Number->format($transaco->idTransacao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('IdConta') ?></th>
            <td><?= $this->Number->format($transaco->idConta) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Valor') ?></th>
            <td><?= $this->Number->format($transaco->valor) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('DataTransacao') ?></th>
            <td><?= h($transaco->dataTransacao) ?></td>
        </tr>
    </table>
</div>
