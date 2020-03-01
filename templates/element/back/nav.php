<nav class="top-nav">
    <div class="top-nav-title">
        <?= $this->Html->link(__('Admin'), ['controller' => 'promotions', 'action' => 'index']) ?>
    </div>
    <div class="top-nav-links">
        <?= $this->Html->link(__('Categorías'), ['controller' => 'categories', 'action' => 'index']) ?>
        <?= $this->Html->link(__('Promociones'), ['controller' => 'promotions', 'action' => 'index']) ?>
        <?= $this->Html->link(__('Imágenes'), ['controller' => 'images', 'action' => 'index']) ?>
        <?= $this->Html->link(__('Pedidos'), ['controller' => 'orders', 'action' => 'index']) ?>
        <?= $this->Html->link(__('Usuarios'), ['controller' => 'users', 'action' => 'index']) ?>
        <?= $this->Html->link(__('Logout'), ['controller' => 'users', 'action' => 'logout']) ?>
    </div>
</nav>
