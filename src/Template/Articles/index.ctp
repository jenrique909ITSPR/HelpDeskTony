<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Article[]|\Cake\Collection\CollectionInterface $articles  */
?>

<div class="articles index">
    <h3><?= __('Articles') ?></h3>
    <div class="actions">
        <ul>
            <li><?= $this->Html->link(__('New Article'), ['action' => 'add']) ?></li>
        </ul>
    </div>
    <div class="easyui-layout"  style="width:100%;height:590px;">
        <div  id="p" data-options="region:'west',collapsible:false"style="width:20%;padding:10px">
             <div style="margin-left: 0px;" id='contentAjax2'></div>
        </div>
        <div data-options="region:'center'"  style="width:100%;">
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('title') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('selected') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($articles as $article): ?>
            <tr>
                <td><?= $this->Number->format($article->id) ?></td>
                <td><?= h($article->title) ?></td>
                <td><?= h($article->modified) ?></td>
                <td><?= $article->has('user') ? $this->Html->link($article->user->name, ['controller' => 'Users', 'action' => 'view', $article->user->id]) : '' ?></td>
                <td><?= h($article->created) ?></td>
                <td><?= $this->Number->format($article->selected) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $article->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $article->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $article->id], ['confirm' => __('Are you sure you want to delete # {0}?', $article->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
  </div>
</div>
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


<script type="text/javascript">

    var cargando = $("#contentAjax2").html("<div class='loading'></div>");
            $.ajax({
                type: 'POST',
                url:'<?= $this->Url->build(['controller' => 'Hdcategories', 'action' => 'categoriesview']) ?>',
                data: "",
                beforeSend: function() {
                                cargando.show();
                },
                success: function(data) {
                        $('#contentAjax2').html(data);
                }
            });

</script>
