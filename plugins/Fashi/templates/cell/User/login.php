<?= $this->Html->link(
    $this->Html->tag('i', '', ['class' => 'fa fa-user']) .
        __('Login'),
    ['controller' => 'users', 'action' => 'login'],
    ['class' => 'login-panel', 'escape' => false]
) ?>
