<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Article[]|\Cake\Collection\CollectionInterface $articles  */
?>

<div class="articles index">
    <h3><?= __('Articles') ?></h3>
    <!--label id="hdcategory_id"></label-->
<div class="easyui-layout"  style="width:100%;height:590px;">
    <div  id="p" data-options="region:'west',collapsible:false"style="width:20%;padding:10px">
        <ul class="easyui-tree" data-options="animate:true,lines:true" id="tt"/>
    </div>
    <div data-options="region:'center'"  style="width:100%;">
      <table cellpadding="0" cellspacing="0">
          <thead>
              <tr>

                  <th scope="col"><?= $this->Paginator->sort('title') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                  <th scope="col" class="actions"><?= __('Actions') ?></th>
              </tr>
          </thead>
          <tbody>
              <?php foreach ($articles as $article): ?>
              <tr>
                  <td><?= h($article->title) ?></td>
                  <td><?= h($article->modified) ?></td>
                  <td><?= h($article->created) ?></td>
                  <td class="actions">
                      <?= $this->Html->link(__('View'), ['action' => 'view', $article->id]) ?>
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

    $('#tt').tree({
    });
    $('#tt').tree({
    data: <?= $dataTreeJson  ?>
    });
    $('#tt').tree({
    loadFilter: function(rows){
        return convert(rows);
    }
    });
    function convert(rows){
        function exists(rows, parentId){
            for(var i=0; i<rows.length; i++){
                if (rows[i].id == parentId) return true;
            }
            return false;
        }

        var nodes = [];
        // get the top level nodes
        for(var i=0; i<rows.length; i++){
            var row = rows[i];
            if (!exists(rows, row.parentId)){
                nodes.push({
                    id:row.id,
                    text:row.name
                });
            }
        }

        var toDo = [];
        for(var i=0; i<nodes.length; i++){
            toDo.push(nodes[i]);
        }
        while(toDo.length){
            var node = toDo.shift();    // the parent node
            // get the children nodes
            for(var i=0; i<rows.length; i++){
                var row = rows[i];
                if (row.parentId == node.id){
                    var child = {id:row.id,text:row.name};
                    if (node.children){
                        node.children.push(child);
                    } else {
                        node.children = [child];
                    }
                    toDo.push(child);
                }
            }
        }
        return nodes;
    }


    $('#tt').tree({
        onDblClick: function(node){
            var node = $('#tt').tree('getSelected');
            if (node){
                var s = node.text;
                if (node.attributes){
                    s += ","+node.attributes.p1+","+node.attributes.p2;
                }
                $("#hdcategory_id").empty();
                $("#hdcategory_id").append(node.id+s);


            }
        },
        onLoadSuccess: function(node){
                $('#tt').tree('collapseAll');
            }

    });

</script>
