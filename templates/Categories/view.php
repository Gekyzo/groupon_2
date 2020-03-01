<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Category $category
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Category'), ['action' => 'edit', $category->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Category'), ['action' => 'delete', $category->id], ['confirm' => __('Are you sure you want to delete # {0}?', $category->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Categories'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Category'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="categories view content">
            <h3><?= h($category->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($category->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Image') ?></th>
                    <td><?= h($category->image) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($category->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($category->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Deleted') ?></th>
                    <td><?= h($category->deleted) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Body') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($category->body)); ?>
                </blockquote>
            </div>
            <div class="related">
                <h4><?= __('Related Promotions') ?></h4>
                <?php if (!empty($category->promotions)) : ?>
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
                            <?php foreach ($category->promotions as $promotions) : ?>
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
