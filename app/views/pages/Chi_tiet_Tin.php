<?php 
   $id = $data['idtin'];
   $tin = $data['tintuc']->getTin($id);
?>
<div>
    <?php echo $tin['noi_dung']?>
</div>