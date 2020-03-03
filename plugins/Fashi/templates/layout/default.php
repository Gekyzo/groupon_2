<?= $this->element('head') ?>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <?= $this->element('header') ?>

    <div class="container">
        <?= $this->Flash->render() ?>
    </div>

    <?= $this->fetch('content') ?>

    <?= $this->element('partners') ?>

    <?= $this->element('footer') ?>

    <?= $this->element('scripts') ?>

    <?= $this->fetch('scriptBottom') ?>

</body>

</html>
