<?php
if (!isset($params['escape']) || $params['escape'] !== false) {
    $message = h($message);
}
?>
<!--<div class="message error" onclick="this.classList.add('hidden');"><?= $message ?></div>-->
 <script type="text/javascript">
 			mensaje= <?php echo '"'.$message.'"' ?>;
             $.messager.alert('Error',mensaje,'error');

 </script>
