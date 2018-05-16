<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Pessoa $pessoa
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Pessoa'), ['action' => 'edit', $pessoa->idPessoa]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Pessoa'), ['action' => 'delete', $pessoa->idPessoa], ['confirm' => __('Are you sure you want to delete # {0}?', $pessoa->idPessoa)]) ?> </li>
        <li><?= $this->Html->link(__('List Pessoas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Pessoa'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="pessoas view large-9 medium-8 columns content">
    <h3><?= h($pessoa->idPessoa) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nome') ?></th>
            <td><?= h($pessoa->nome) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cpf') ?></th>
            <td><?= h($pessoa->cpf) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('IdPessoa') ?></th>
            <td><?= $this->Number->format($pessoa->idPessoa) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('DataNascimento') ?></th>
            <td><?= h($pessoa->dataNascimento) ?></td>
        </tr>
    </table>
</div>
