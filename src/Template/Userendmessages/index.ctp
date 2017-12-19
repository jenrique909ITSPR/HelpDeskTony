<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Userendmessage[]|\Cake\Collection\CollectionInterface $userendmessages  */
?>

<div class="userendmessages index">
    <h3><?= __('Userendmessages') ?></h3>
    <div class="actions">
        <ul>
            <li><?= $this->Html->link(__('New Userendmessage'), ['action' => 'add']) ?></li>
        </ul>
    </div>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('message') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('startdate') ?></th>
                <th scope="col"><?= $this->Paginator->sort('endingdate') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($userendmessages as $userendmessage): ?>
            <tr>
                <td><?= $this->Number->format($userendmessage->id) ?></td>
                <td><?= h($userendmessage->message) ?></td>
                <td><?= $userendmessage->has('user') ? $this->Html->link($userendmessage->user->name, ['controller' => 'Users', 'action' => 'view', $userendmessage->user->id]) : '' ?></td>
                <td><?= h($userendmessage->created) ?></td>
                <td><?= h($userendmessage->modified) ?></td>
                <td><?= h($userendmessage->startdate) ?></td>
                <td><?= h($userendmessage->endingdate) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $userendmessage->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $userendmessage->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $userendmessage->id], ['confirm' => __('Are you sure you want to delete # {0}?', $userendmessage->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
