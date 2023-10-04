<?php
include_once 'menu.php';

?>
<div>
<div class="container-fluid">
    <!-- <h1>Selamat datang </h1> -->
    <?php
    // error_reporting(0);
    //membuat logik sederhana untuk mengarahkan url ke file
    //yang mempunyai extension .php
    //routing => file yg mengarahkn url
    $url = !isset($_GET['url']) ? 'dashboard' : $_GET['url'];
    if($url == 'dashboard'){
        include_once 'dashboard.php';
    } else if(!empty($url)){
        include_once ''.'.php';
    } else {
        include_once 'dashboard.php';
    }

    ?>
</div>
</div>

<?php

?>
