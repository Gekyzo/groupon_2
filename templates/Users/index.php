<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User[]|\Cake\Collection\CollectionInterface $users
 */
?>

<div class="users index content">
    <?= $this->Html->link(__('New User'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Users') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('role_id', ['label' => __('Rol')]) ?></th>
                    <th><?= $this->Paginator->sort('first_name', ['label' => __('Nombre')]) ?></th>
                    <th><?= $this->Paginator->sort('last_name', ['label' => __('Apellidos')]) ?></th>
                    <th><?= $this->Paginator->sort('email', ['label' => __('Email')]) ?></th>
                    <th><?= $this->Paginator->sort('created', ['label' => __('Fecha creación')]) ?></th>
                    <th class="actions"><?= __('Acciones') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $user) : ?>
                    <tr>
                        <td><?= $this->Number->format($user->id) ?></td>
                        <td><?= $user->has('role') ? $this->Html->link($user->role->name, ['controller' => 'Roles', 'action' => 'view', $user->role->id]) : '' ?></td>
                        <td><?= h($user->first_name) ?></td>
                        <td><?= h($user->last_name) ?></td>
                        <td><?= h($user->email) ?></td>
                        <td><?= h($user->created) ?></td>
                        <td class="actions">
                            <?= $this->element('back/actions', ['type' => 'users', 'id' => $user->id]) ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <?= $this->element('back/paginator') ?>

</div>
