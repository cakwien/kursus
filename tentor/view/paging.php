<div class="row">
    <div class="col-md-12">

    <?php

        if(!empty($_GET['ps']))
        {
            echo '<div class="alert alert-primary pesan" role="alert">'.bukarhs($_GET['ps']).'</div>';
        }elseif(!empty($_GET['pse']))
        {
            echo '<div class="alert alert-danger pesan" role="alert">'.bukarhs($_GET['pse']).'</div>';
        }

    ?>
    </div>
</div>

<?php

if (!empty($p)) {
    if ($p == "home") {
        require_once('home.php');
    } elseif ($p == "kelas") {
        require_once('kelas_detail.php');
    } elseif ($p == "user") {
        require_once('useraccount.php');
    } elseif ($p == "privat") {
        require_once('privat_detail.php');
    }
} else {
    header('location:?to=home');
}
