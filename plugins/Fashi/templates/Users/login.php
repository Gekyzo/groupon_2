<?php
$formTemplates = [
    'inputContainer' => '<div class="group-input">{{content}}</div>',
];
$this->Form->setTemplates($formTemplates);
?>

<?= $this->element('breadcrumb', ['end' => 'login']) ?>

<!-- Register Section Begin -->
<div class="register-login-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="login-form">

                    <h2><?= __('Login') ?></h2>

                    <?= $this->Form->create() ?>

                    <?= $this->Form->control('email', ['label' => __('Email'), 'required' => true]) ?>

                    <?= $this->Form->control('password', ['label' => __('Contraseña'), 'required' => true]) ?>

                    <?= $this->Form->submit(__('Acceder'), ['class' => 'site-btn login-btn']); ?>

                    <?= $this->Form->end() ?>

                    <div class="switch-login">
                        <?= $this->Html->link(__('O regístrate'), ['controller' => 'users', 'action' => 'register'], ['class' => 'or-login']) ?>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- Register Form Section End -->
