<!-- Breadcrumb Section Begin -->
<div class="breacrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text">
                    <?= $this->Html->link(
                        $this->Html->tag('i', '', ['class' => 'fa fa-home']) .
                            $this->Html->tag('span', __('Home')),
                        ['controller' => 'pages', 'action' => 'home'],
                        ['escape' => false]
                    ) ?>
                    <span><?= ucfirst($end) ?></span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Section Begin -->
