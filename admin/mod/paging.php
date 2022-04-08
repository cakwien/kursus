

<?php



if (!empty($_GET['p'])) {
    if ($p == "datasiswa") {
        require_once('view/datasiswa.php');
    } elseif ($p == "datatentor") {
        require_once('view/datatentor.php');
    } elseif ($p == "datapembayaran") {
        require_once('view/datapembayaran.php');
    } elseif ($p == "datakelas") {
        require_once('view/datakelas.php');
    } elseif ($p == "detailsiswa") {
        require_once('view/detailsiswa.php');
    } elseif ($p == "detailtentor") {
        require_once('view/detailtentor.php');
    } elseif ($p == "lapbayar") {
        require_once('view/lapbayar.php');
    }
} else {
    require_once('view/home.php');
}


?>

