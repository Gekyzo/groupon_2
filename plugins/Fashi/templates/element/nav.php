<div class="nav-item">

    <div class="container">

        <nav class="nav-menu mobile-menu">
            <ul>
                <?php foreach ($categories as $category) : ?>
                    <li><?= $this->Html->link($category->name, ['controller' => 'pages', 'action' => 'category', $category->name]) ?></li>
                <?php endforeach; ?>
            </ul>
        </nav>

        <div id="mobile-menu-wrap"></div>

    </div>

</div>
