<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Custom Pages'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Custom Fields'), ['controller' => 'CustomFields', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Custom Field'), ['controller' => 'CustomFields', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="customPages form large-9 medium-8 columns content">
    <?= $this->Form->create($customPage) ?>
    <fieldset>
        <legend><?= __('Add Custom Page') ?></legend>
        <?php
            echo $this->Form->input('slug');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
