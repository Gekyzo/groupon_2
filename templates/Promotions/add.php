<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Promotion $promotion
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Promotions'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="promotions form content">
            <?= $this->Form->create($promotion) ?>
            <fieldset>
                <legend><?= __('Add Promotion') ?></legend>
                <?php
                echo $this->Form->control('name');
                echo $this->Form->control('state');
                echo $this->Form->control('category_id', ['options' => $categories, 'empty' => true]);
                echo $this->Form->control('price_original');
                echo $this->Form->control('price_discount');
                echo $this->Form->control('body');
                echo $this->Form->control('available_since');
                echo $this->Form->control('available_until', ['empty' => true]);
                echo $this->Form->control('deleted', ['empty' => true]);
                echo $this->Form->control('images._ids', ['options' => $images]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
