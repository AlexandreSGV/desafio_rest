<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Transaco $transaco
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Transacoes'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="transacoes form large-9 medium-8 columns content">
    <?= $this->Form->create($transaco) ?>
    <fieldset>
        <legend><?= __('Add Transaco') ?></legend>
        <?php
            echo $this->Form->control('idConta');
            echo $this->Form->control('valor');
            echo $this->Form->control('dataTransacao');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
