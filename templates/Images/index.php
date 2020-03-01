<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Image[]|\Cake\Collection\CollectionInterface $images
 */
?>

<div class="images index content">
    <?= $this->Html->link(__('New Image'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Images') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('name', ['label' => __('Nombre')]) ?></th>
                    <th><?= $this->Paginator->sort('path', ['label' => __('Ruta')]) ?></th>
                    <th><?= $this->Paginator->sort('created', ['label' => __('Fecha creación')]) ?></th>
                    <th class="actions"><?= __('Acciones') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($images as $image) : ?>
                    <tr>
                        <td><?= $this->Number->format($image->id) ?></td>
                        <td><?= h($image->name) ?></td>
                        <td><?= h($image->path) ?></td>
                        <td><?= h($image->created) ?></td>
                        <td class="actions">
                            <?= $this->element('back/actions', ['type' => 'images', 'id' => $image->id]) ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <?= $this->element('back/paginator') ?>

</div>
