 <!--
 <?= $this->Form->control(__('categorySearch'),['type' => 'text','id' => 'categorySearch' , 'rel' =>  $this->Url->build(['controller' => 'Hdcategories', 'action' => 'loadcategories'])]);  ?>

<?= $this->Form->control(__('viewAll'),['type' => 'submit' ,'rel' =>  $this->Url->build(['controller' => 'Hdcategories', 'action' => 'categoriesview']) ]); ?>
-->
<ul id="tt" class="easyui-tree" url="<?= $this->Url->build(['controller' => 'Hdcategories', 'action' => 'loadcategories']) ?>">

<script type="text/javascript">
   /*
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

    */
    $('#tt').tree({
        onDblClick: function(node){
            var node = $('#tt').tree('getSelected');
            if (node){
                var s = node.text;
                if (node.attributes){
                    s += ","+node.attributes.p1+","+node.attributes.p2;
                }
                $("#hdcategory_id").empty();
                $("#hdcategory_id").append("<option value='" + node.id+"'' >"+s+"</option>");

            }
        }

    });
    /*
    $("#categorySearch").on("input", function(e) {
        if(($('#categorySearch').val()).length > 2 ){
            //var cargando = $("#contentAjax").html("<div class='loading'></div>");
            $.ajax({
                type: 'POST',
                url:$(this).attr('rel'),
                data:  'id=2',
                beforeSend: function() {
              //             cargando.show();
                },
                success: function(data) {
                        $('#tt').attr('url',data);

                }
            });
        }
        return false;
    });
*/

</script>
