<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Conta $conta
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Conta'), ['action' => 'edit', $conta->idConta]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Conta'), ['action' => 'delete', $conta->idConta], ['confirm' => __('Are you sure you want to delete # {0}?', $conta->idConta)]) ?> </li>
        <li><?= $this->Html->link(__('List Contas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Conta'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="contas view large-9 medium-8 columns content">
    <h3><?= h($conta->idConta) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('IdConta') ?></th>
            <td><?= $this->Number->format($conta->idConta) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('IdPessoa') ?></th>
            <td><?= $this->Number->format($conta->idPessoa) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Saldo') ?></th>
            <td><?= $this->Number->format($conta->saldo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('LimiteSaqueDiario') ?></th>
            <td><?= $this->Number->format($conta->limiteSaqueDiario) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('TipoConta') ?></th>
            <td><?= $this->Number->format($conta->tipoConta) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('DataCriacao') ?></th>
            <td><?= h($conta->dataCriacao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('FlagAtivo') ?></th>
            <td><?= $conta->flagAtivo ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
</div>
