<div class="row">
    <div class="col-md-12">

        <?php

        if (!empty($_GET['ps'])) {
            echo "<script>Swal.fire(
                    'Berhasil !',
                    '".bukarhs($_GET['ps'])."',
                    'success'
                    )</script>";
        } elseif (!empty($_GET['pse'])) {
            echo "<script>Swal.fire(
                    'Ups...',
                     '" . bukarhs($_GET['pse']) . "',
                    'error'
                    )</script>";
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
