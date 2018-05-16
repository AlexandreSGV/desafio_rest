<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Transaco[]|\Cake\Collection\CollectionInterface $transacoes
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Transaco'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="transacoes index large-9 medium-8 columns content">
    <h3><?= __('Transacoes') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('idTransacao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('idConta') ?></th>
                <th scope="col"><?= $this->Paginator->sort('valor') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dataTransacao') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($transacoes as $transaco): ?>
            <tr>
                <td><?= $this->Number->format($transaco->idTransacao) ?></td>
                <td><?= $this->Number->format($transaco->idConta) ?></td>
                <td><?= $this->Number->format($transaco->valor) ?></td>
                <td><?= h($transaco->dataTransacao) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $transaco->idTransacao]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $transaco->idTransacao]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $transaco->idTransacao], ['confirm' => __('Are you sure you want to delete # {0}?', $transaco->idTransacao)]) ?>
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
