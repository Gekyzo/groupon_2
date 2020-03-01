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
                <?= $this->Html->link(
                    $this->Html->tag('i', '', ['class' => 'fa fa-user']) .
                        __('Login'),
                    ['controller' => 'users', 'action' => 'login'],
                    ['class' => 'login-panel', 'escape' => false]
                ) ?>
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

                    <ul class="nav-right">
                        <li class="cart-icon">
                            <a href="#">
                                <i class="icon_bag_alt"></i>
                                <span>3</span>
                            </a>
                            <div class="cart-hover">
                                <div class="select-items">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td class="si-pic"><?= $this->Html->image('select-product-1.jpg') ?></td>
                                                <td class="si-text">
                                                    <div class="product-selected">
                                                        <p>$60.00 x 1</p>
                                                        <h6>Kabino Bedside Table</h6>
                                                    </div>
                                                </td>
                                                <td class="si-close">
                                                    <i class="ti-close"></i>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="si-pic"><?= $this->Html->image('select-product-2.jpg') ?></td>
                                                <td class="si-text">
                                                    <div class="product-selected">
                                                        <p>$60.00 x 1</p>
                                                        <h6>Kabino Bedside Table</h6>
                                                    </div>
                                                </td>
                                                <td class="si-close">
                                                    <i class="ti-close"></i>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="select-total">
                                    <span>total:</span>
                                    <h5>$120.00</h5>
                                </div>
                                <div class="select-button">
                                    <a href="#" class="primary-btn view-card">VIEW CARD</a>
                                    <a href="#" class="primary-btn checkout-btn">CHECK OUT</a>
                                </div>
                            </div>
                        </li>
                        <li class="cart-price">$150.00</li>
                    </ul>

                </div>
            </div>
        </div>
    </div>

    <?= $this->element('nav') ?>

</header>
<!-- Header End -->
