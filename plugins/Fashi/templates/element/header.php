<!-- Header Section Begin -->
<header class="header-section">
    <div class="header-top">
        <div class="container">
            <div class="ht-left">
                <div class="mail-service">
                    <i class="fa fa-envelope"></i>
                    hola@ciropon.com
                </div>
                <div class="phone-service">
                    <i class="fa fa-phone"></i>
                    911 234 567
                </div>
            </div>
            <div class="ht-right">

                <?= $this->cell('User::display', ['currentUser' => $currentUser]) ?>

                <div class="lan-selector">
                    <select class="language_drop" name="countries" id="countries" style="width:300px;">
                        <option value='yu' data-image="<?= $this->Url->image('flag-1.jpg') ?>" data-imagecss="flag yu" data-title="España">Español</option>
                        <option value='yt' data-image="<?= $this->Url->image('flag-2.jpg') ?>" data-imagecss="flag yt" data-title="English">English</option>
                    </select>
                </div>
                <div class="top-social">
                    <a href="#"><i class="ti-facebook"></i></a>
                    <a href="#"><i class="ti-twitter-alt"></i></a>
                    <a href="#"><i class="ti-linkedin"></i></a>
                    <a href="#"><i class="ti-pinterest"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="inner-header">
            <div class="row">
                <div class="col-md-9">
                    <div class="logo">
                        <?= $this->Html->image('logo.png', ['url' => ['controller' => 'pages', 'action' => 'home']]) ?>
                    </div>
                </div>
                <div class="text-right col-md-3">

                    <?= $this->cell('Cart::display') ?>

                </div>
            </div>
        </div>
    </div>

    <?= $this->element('nav') ?>

</header>
<!-- Header End -->
