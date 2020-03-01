<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Category $category
 */
?>

<div class="column-responsive column-80">
    <div class="categories view content">
        <h3><?= h($category->name) ?></h3>
        <table>
            <tr>
                <th><?= __('Name') ?></th>
                <td><?= h($category->name) ?></td>
            </tr>
            <tr>
                <th><?= __('Id') ?></th>
                <td><?= $this->Number->format($category->id) ?></td>
            </tr>
            <tr>
                <th><?= __('Created') ?></th>
                <td><?= h($category->created) ?></td>
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
                            <th><?= __('Created') ?></th>
                            <th class="actions"><?= __('Acciones') ?></th>
                        </tr>
                        <?php foreach ($category->promotions as $promotions) : ?>
                            <tr>
                                <td><?= h($promotions->id) ?></td>
                                <td><?= h($promotions->name) ?></td>
                                <td><?= h($promotions->state) ?></td>
                                <td><?= h($promotions->created) ?></td>
                                <td class="actions">
                                    <?= $this->element('back/actions', ['type' => 'promotions', 'id' => $promotions->id]) ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>
