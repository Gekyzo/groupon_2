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
            <?= $this->Html->link(__('Edit Promotion'), ['action' => 'edit', $promotion->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Promotion'), ['action' => 'delete', $promotion->id], ['confirm' => __('Are you sure you want to delete # {0}?', $promotion->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Promotions'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Promotion'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="promotions view content">
            <h3><?= h($promotion->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($promotion->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Category') ?></th>
                    <td><?= $promotion->has('category') ? $this->Html->link($promotion->category->name, ['controller' => 'Categories', 'action' => 'view', $promotion->category->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($promotion->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Price Original') ?></th>
                    <td><?= $this->Number->format($promotion->price_original) ?></td>
                </tr>
                <tr>
                    <th><?= __('Price Discount') ?></th>
                    <td><?= $this->Number->format($promotion->price_discount) ?></td>
                </tr>
                <tr>
                    <th><?= __('Available Since') ?></th>
                    <td><?= h($promotion->available_since) ?></td>
                </tr>
                <tr>
                    <th><?= __('Available Until') ?></th>
                    <td><?= h($promotion->available_until) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($promotion->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Deleted') ?></th>
                    <td><?= h($promotion->deleted) ?></td>
                </tr>
                <tr>
                    <th><?= __('State') ?></th>
                    <td><?= $promotion->state ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Body') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($promotion->body)); ?>
                </blockquote>
            </div>
            <div class="related">
                <h4><?= __('Related Images') ?></h4>
                <?php if (!empty($promotion->images)) : ?>
                    <div class="table-responsive">
                        <table>
                            <tr>
                                <th><?= __('Id') ?></th>
                                <th><?= __('Name') ?></th>
                                <th><?= __('Path') ?></th>
                                <th><?= __('Created') ?></th>
                                <th><?= __('Deleted') ?></th>
                                <th class="actions"><?= __('Actions') ?></th>
                            </tr>
                            <?php foreach ($promotion->images as $images) : ?>
                                <tr>
                                    <td><?= h($images->id) ?></td>
                                    <td><?= h($images->name) ?></td>
                                    <td><?= h($images->path) ?></td>
                                    <td><?= h($images->created) ?></td>
                                    <td><?= h($images->deleted) ?></td>
                                    <td class="actions">
                                        <?= $this->Html->link(__('View'), ['controller' => 'Images', 'action' => 'view', $images->id]) ?>
                                        <?= $this->Html->link(__('Edit'), ['controller' => 'Images', 'action' => 'edit', $images->id]) ?>
                                        <?= $this->Form->postLink(__('Delete'), ['controller' => 'Images', 'action' => 'delete', $images->id], ['confirm' => __('Are you sure you want to delete # {0}?', $images->id)]) ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </table>
                    </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Orders') ?></h4>
                <?php if (!empty($promotion->orders)) : ?>
                    <div class="table-responsive">
                        <table>
                            <tr>
                                <th><?= __('Id') ?></th>
                                <th><?= __('Promotion Id') ?></th>
                                <th><?= __('User Id') ?></th>
                                <th><?= __('Created') ?></th>
                                <th class="actions"><?= __('Actions') ?></th>
                            </tr>
                            <?php foreach ($promotion->orders as $orders) : ?>
                                <tr>
                                    <td><?= h($orders->id) ?></td>
                                    <td><?= h($orders->promotion_id) ?></td>
                                    <td><?= h($orders->user_id) ?></td>
                                    <td><?= h($orders->created) ?></td>
                                    <td class="actions">
                                        <?= $this->Html->link(__('View'), ['controller' => 'Orders', 'action' => 'view', $orders->id]) ?>
                                        <?= $this->Html->link(__('Edit'), ['controller' => 'Orders', 'action' => 'edit', $orders->id]) ?>
                                        <?= $this->Form->postLink(__('Delete'), ['controller' => 'Orders', 'action' => 'delete', $orders->id], ['confirm' => __('Are you sure you want to delete # {0}?', $orders->id)]) ?>
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
