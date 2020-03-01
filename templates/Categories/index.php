<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Category[]|\Cake\Collection\CollectionInterface $categories
 */
?>

<div class="categories index content">

    <?= $this->Html->link(__('Crear nueva'), ['action' => 'add'], ['class' => 'button float-right']) ?>

    <h3><?= __('Categorías') ?></h3>

    <div class="table-responsive">

        <table>

            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('name', ['label' => __('Nombre')]) ?></th>
                    <th><?= $this->Paginator->sort('image', ['label' => __('Imagen')]) ?></th>
                    <th><?= $this->Paginator->sort('created', ['label' => __('Fecha creación')]) ?></th>
                    <th class="actions"><?= __('Acciones') ?></th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($categories as $category) : ?>
                    <tr>
                        <td><?= $this->Number->format($category->id) ?></td>
                        <td><?= h($category->name) ?></td>
                        <td><?= h($category->image) ?></td>
                        <td><?= h($category->created) ?></td>

                        <td class="actions">
                            <?= $this->element('back/actions', ['type' => 'categories', 'id' => $category->id]) ?>
                        </td>

                    </tr>
                <?php endforeach; ?>
            </tbody>

        </table>

    </div>

    <?= $this->element('back/paginator') ?>

</div>
