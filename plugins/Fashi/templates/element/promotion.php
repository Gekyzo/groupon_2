<div class="col-lg-4 col-sm-6">

    <div class="product-item">

        <div class="pi-pic">
            <img src="<?= $promotion->placeholder_image ?>" alt="">
            <div class="sale pp-sale"><?= __('Oferta') ?></div>
            <ul>
                <li class="w-icon active">
                    <?= $this->Html->link(
                        $this->Html->tag('i', '', ['class' => 'icon_bag_alt']),
                        [],
                        ['escape' => false, 'class' => 'add-form-trigger', 'data-activate-form' => $promotion->id]
                    ) ?>
                </li>
            </ul>
        </div>

        <div class="pi-text">
            <a href="#">
                <h5><?= $promotion->name ?></h5>
            </a>
            <div class="product-price">
                <?= $this->Number->currency($promotion->price_discount) ?>
                <span><?= $this->Number->currency($promotion->price_original) ?></span>
            </div>
        </div>

        <?= $this->Form->create(
            null,
            [
                'url' => [
                    'controller' => 'carts',
                    'action' => 'add',
                    $promotion->id
                ],
                'class' => 'add-form',
                'data-form-id' => $promotion->id
            ]
        ); ?>
        <?= $this->Form->end() ?>

    </div>

</div>
