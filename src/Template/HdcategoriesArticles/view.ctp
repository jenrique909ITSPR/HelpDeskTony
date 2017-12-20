<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\HdcategoriesArticle $hdcategoriesArticle  */
?>

<div class="hdcategoriesArticles view">
    <h3><?= h($hdcategoriesArticle->id) ?></h3>
	<div class="actions">
		<ul>
			<li><?= $this->Form->postLink(__('Delete Hdcategories Article'), ['action' => 'delete', $hdcategoriesArticle->id], ['confirm' => __('Are you sure you want to delete # {0}?', $hdcategoriesArticle->id)]) ?> </li>
			<li><?= $this->Html->link(__('New Hdcategories Article'), ['action' => 'add']) ?> </li>
			<li><?= $this->Html->link(__('List Hdcategories Articles'), ['action' => 'index']) ?> </li>
			<li><?= $this->Html->link(__('Edit Hdcategories Article'), ['action' => 'edit', $hdcategoriesArticle->id]) ?> </li>
		</ul>
	</div>
	<div class="viewdata">
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Hdcategory') ?></th>
            <td><?= $hdcategoriesArticle->has('hdcategory') ? $this->Html->link($hdcategoriesArticle->hdcategory->title, ['controller' => 'Hdcategories', 'action' => 'view', $hdcategoriesArticle->hdcategory->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Article') ?></th>
            <td><?= $hdcategoriesArticle->has('article') ? $this->Html->link($hdcategoriesArticle->article->title, ['controller' => 'Articles', 'action' => 'view', $hdcategoriesArticle->article->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($hdcategoriesArticle->id) ?></td>
        </tr>
    </table>
	</div>
<div class="easyui-tabs">
</div>
</div>
