<div class="paginator">
    <ul class="pagination">
        <?= $this->Paginator->first(
            $this->Html->tag('i', '', ['class' => 'lni-angle-doble-left']) . $this->Html->tag('span', __('primero')),
            ['escape' => false]
        ) ?>
        <?= $this->Paginator->prev(
            $this->Html->tag('i', '', ['class' => 'lni-chevron-left']) . $this->Html->tag('span', __('anterior')),
            ['escape' => false]
        ) ?>
        <?= $this->Paginator->numbers() ?>
        <?= $this->Paginator->next(
            $this->Html->tag('span', __('siguiente') . $this->Html->tag('i', '', ['class' => 'lni-chevron-right'])),
            ['escape' => false]
        ) ?>
        <?= $this->Paginator->last(
            $this->Html->tag('span', __('último') . $this->Html->tag('i', '', ['class' => 'lni-angle-doble-right'])),
            ['escape' => false]
        ) ?>
    </ul>
    <p><?= $this->Paginator->counter(__('Página {{page}} de {{pages}}, mostrando {{current}} de {{count}} total')) ?></p>
</div>
