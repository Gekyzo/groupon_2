<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Promotion[]|\Cake\Collection\CollectionInterface $promotions
 */
?>
<div class="promotions index content">
    <?= $this->Html->link(__('New Promotion'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Promotions') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('state') ?></th>
                    <th><?= $this->Paginator->sort('category_id') ?></th>
                    <th><?= $this->Paginator->sort('price_original') ?></th>
                    <th><?= $this->Paginator->sort('price_discount') ?></th>
                    <th><?= $this->Paginator->sort('available_since') ?></th>
                    <th><?= $this->Paginator->sort('available_until') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('deleted') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($promotions as $promotion) : ?>
                    <tr>
                        <td><?= $this->Number->format($promotion->id) ?></td>
                        <td><?= h($promotion->name) ?></td>
                        <td><?= h($promotion->state) ?></td>
                        <td><?= $promotion->has('category') ? $this->Html->link($promotion->category->name, ['controller' => 'Categories', 'action' => 'view', $promotion->category->id]) : '' ?></td>
                        <td><?= $this->Number->format($promotion->price_original) ?></td>
                        <td><?= $this->Number->format($promotion->price_discount) ?></td>
                        <td><?= h($promotion->available_since) ?></td>
                        <td><?= h($promotion->available_until) ?></td>
                        <td><?= h($promotion->created) ?></td>
                        <td><?= h($promotion->deleted) ?></td>
                        <td class="actions">
                            <?= $this->element('back/actions', ['type' => 'promotions', 'id' => $promotion->id]) ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <?= $this->element('back/paginator') ?>

</div>
