<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Image $image
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Image'), ['action' => 'edit', $image->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Image'), ['action' => 'delete', $image->id], ['confirm' => __('Are you sure you want to delete # {0}?', $image->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Images'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Image'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="images view content">
            <h3><?= h($image->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($image->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Path') ?></th>
                    <td><?= h($image->path) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($image->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($image->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Deleted') ?></th>
                    <td><?= h($image->deleted) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Promotions') ?></h4>
                <?php if (!empty($image->promotions)) : ?>
                    <div class="table-responsive">
                        <table>
                            <tr>
                                <th><?= __('Id') ?></th>
                                <th><?= __('Name') ?></th>
                                <th><?= __('State') ?></th>
                                <th><?= __('Category Id') ?></th>
                                <th><?= __('Price Original') ?></th>
                                <th><?= __('Price Discount') ?></th>
                                <th><?= __('Body') ?></th>
                                <th><?= __('Available Since') ?></th>
                                <th><?= __('Available Until') ?></th>
                                <th><?= __('Created') ?></th>
                                <th><?= __('Deleted') ?></th>
                                <th class="actions"><?= __('Actions') ?></th>
                            </tr>
                            <?php foreach ($image->promotions as $promotions) : ?>
                                <tr>
                                    <td><?= h($promotions->id) ?></td>
                                    <td><?= h($promotions->name) ?></td>
                                    <td><?= h($promotions->state) ?></td>
                                    <td><?= h($promotions->category_id) ?></td>
                                    <td><?= h($promotions->price_original) ?></td>
                                    <td><?= h($promotions->price_discount) ?></td>
                                    <td><?= h($promotions->body) ?></td>
                                    <td><?= h($promotions->available_since) ?></td>
                                    <td><?= h($promotions->available_until) ?></td>
                                    <td><?= h($promotions->created) ?></td>
                                    <td><?= h($promotions->deleted) ?></td>
                                    <td class="actions">
                                        <?= $this->element('back/actions', ['type' => 'promotions', 'id' => $promotion->id]) ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </table>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
