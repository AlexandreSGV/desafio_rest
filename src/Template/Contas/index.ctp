<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Conta[]|\Cake\Collection\CollectionInterface $contas
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Conta'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="contas index large-9 medium-8 columns content">
    <h3><?= __('Contas') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('idConta') ?></th>
                <th scope="col"><?= $this->Paginator->sort('idPessoa') ?></th>
                <th scope="col"><?= $this->Paginator->sort('saldo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('limiteSaqueDiario') ?></th>
                <th scope="col"><?= $this->Paginator->sort('flagAtivo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tipoConta') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dataCriacao') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($contas as $conta): ?>
            <tr>
                <td><?= $this->Number->format($conta->idConta) ?></td>
                <td><?= $this->Number->format($conta->idPessoa) ?></td>
                <td><?= $this->Number->format($conta->saldo) ?></td>
                <td><?= $this->Number->format($conta->limiteSaqueDiario) ?></td>
                <td><?= h($conta->flagAtivo) ?></td>
                <td><?= $this->Number->format($conta->tipoConta) ?></td>
                <td><?= h($conta->dataCriacao) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $conta->idConta]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $conta->idConta]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $conta->idConta], ['confirm' => __('Are you sure you want to delete # {0}?', $conta->idConta)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
