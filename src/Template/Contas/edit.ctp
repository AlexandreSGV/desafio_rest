<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Conta $conta
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $conta->idConta],
                ['confirm' => __('Are you sure you want to delete # {0}?', $conta->idConta)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Contas'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="contas form large-9 medium-8 columns content">
    <?= $this->Form->create($conta) ?>
    <fieldset>
        <legend><?= __('Edit Conta') ?></legend>
        <?php
            echo $this->Form->control('idPessoa');
            echo $this->Form->control('saldo');
            echo $this->Form->control('limiteSaqueDiario');
            echo $this->Form->control('flagAtivo');
            echo $this->Form->control('tipoConta');
            echo $this->Form->control('dataCriacao');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
