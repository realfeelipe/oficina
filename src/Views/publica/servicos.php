<?=$this->fetch('commons/header.php')?>

<?=$this->fetch('commons/migalha.php', $data)?>

<?php
    $data['slider_servicos'] = false;
    echo $this->fetch('commons/servicos.php', $data);
?>

<?=$this->fetch('commons/footer.php')?>