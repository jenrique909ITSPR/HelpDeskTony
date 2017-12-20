<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\HdcategoriesArticle[]|\Cake\Collection\CollectionInterface $hdcategoriesArticles  */
?>

<div class="hdcategoriesArticles index">
    <h3><?= __('Hdcategories Articles') ?></h3>
	<div class="actions">
		<ul>
			<li><?= $this->Html->link(__('New Hdcategories Article'), ['action' => 'add']) ?></li>
		</ul>
	</div>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('hdcategory_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('article_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($hdcategoriesArticles as $hdcategoriesArticle): ?>
            <tr>
                <td><?= $this->Number->format($hdcategoriesArticle->id) ?></td>
                <td><?= $hdcategoriesArticle->has('hdcategory') ? $this->Html->link($hdcategoriesArticle->hdcategory->title, ['controller' => 'Hdcategories', 'action' => 'view', $hdcategoriesArticle->hdcategory->id]) : '' ?></td>
                <td><?= $hdcategoriesArticle->has('article') ? $this->Html->link($hdcategoriesArticle->article->title, ['controller' => 'Articles', 'action' => 'view', $hdcategoriesArticle->article->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $hdcategoriesArticle->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $hdcategoriesArticle->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $hdcategoriesArticle->id], ['confirm' => __('Are you sure you want to delete # {0}?', $hdcategoriesArticle->id)]) ?>
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
