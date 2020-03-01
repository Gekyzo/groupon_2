<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Category $category
 */
?>

<div class="column-responsive column-80">
    <div class="categories form content">
        <?= $this->Form->create($category) ?>
        <fieldset>
            <legend><?= __('Edit Category') ?></legend>
            <?php
            echo $this->Form->control('name');
            echo $this->Form->control('body');
            ?>
        </fieldset>
        <?= $this->Form->button(__('Submit')) ?>
        <?= $this->Form->end() ?>
    </div>
</div>
