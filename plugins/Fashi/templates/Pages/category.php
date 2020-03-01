<?= $this->element('breadcrumb', ['end' => $currentCategory->name]) ?>

<!-- Product Shop Section Begin -->
<section class="product-shop spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-8 order-2 order-lg-1 produts-sidebar-filter">
                <div class="filter-widget">
                    <h4 class="fw-title"><?= __('Categorías') ?></h4>
                    <ul class="filter-catagories">

                        <?php foreach ($categories as $category) : ?>

                            <li><?= $this->Html->link(ucfirst($category->name), ['controller' => 'pages', 'action' => 'category', $category->name]) ?></li>

                        <?php endforeach; ?>

                    </ul>
                </div>
            </div>
            <div class="col-lg-9 order-1 order-lg-2">
                <div class="product-show-option">
                    <div class="row">
                        <div class="offset-md-7 col-md-5 text-right">
                            <p><?= __('Mostrando {0} - {1} de {1} Promociones', [1, $promotions->count()]) ?></p>
                        </div>
                    </div>
                </div>
                <div class="product-list">

                    <div class="row">

                        <?php foreach ($promotions as $promotion) : ?>

                            <?= $this->element('promotion', ['promotion' => $promotion]) ?>

                        <?php endforeach; ?>

                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- Product Shop Section End -->
