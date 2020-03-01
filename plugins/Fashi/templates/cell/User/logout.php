<?= $this->Html->link(
    $this->Html->tag('i', '', ['class' => 'fa fa-user-times']) .
        __('Logout'),
    ['controller' => 'users', 'action' => 'logout'],
    ['class' => 'login-panel', 'escape' => false]
) ?>
