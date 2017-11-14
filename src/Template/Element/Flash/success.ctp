<?php
if (!isset($params['escape']) || $params['escape'] !== false) {
    $message = h($message);
}
?>
 <script type="text/javascript">
 			mensaje= <?php echo '"'.$message.'"' ?>;
            $.messager.show({
                title:'Mensaje',
                msg: mensaje,
                showType:'fade',
                style:{
                    right:'',
                    bottom:''
                }
            });

 </script>
