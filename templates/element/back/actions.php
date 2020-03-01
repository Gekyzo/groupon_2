<?=
    $this->Html->link(
        $this->Html->tag('i', '', ['class' => 'lni-eye']),
        ['controller' => $type, 'action' => 'view', $id],
        ['escape' => false],
    )
?>
<?=
    $this->Html->link(
        $this->Html->tag('i', '', ['class' => 'lni-pencil']),
        ['controller' => $type, 'action' => 'edit', $id],
        ['escape' => false],
    )
?>
<?=
    $this->Form->postLink(
        $this->Html->tag('i', '', ['class' => 'lni-trash']),
        ['controller' => $type, 'action' => 'delete', $id],
        ['escape' => false, 'confirm' => __('message.delete.confirmation', $id)]
    )
?>
