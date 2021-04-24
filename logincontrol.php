<title>Login control</title>
<link rel="stylesheet" href="../css.css">
<div >
 <p class="conrolpanel">      
<?php
        echo "Kullancı adı: ".$_POST['username']."<br>";
        echo "Şifre: ".$_POST['passworld'];
        if($_POST['username']=="fırat"){
            header("Location: https://seyrek-meyve.github.io/");
        }
        
?>
</p>
</div>
