<?php
    if(!empty($p))
    {
        if($p=="materi"){ require_once('view/materi.php'); }
        if($p=="materi2"){ require_once('view/materi2.php'); }
        if($p=="mt-kelas"){ require_once('view/materi_kelas_tl.php'); }
        if($p=="mt-detail"){ require_once('view/materi_detail.php'); }
        if($p=="mt-edit"){ require_once('view/materi_edit.php'); }
        if($p=="kelas-saya"){ require_once('view/kelas.php'); }
        if($p=="quiz-soal"){ require_once('view/quiz_soal.php'); }
        if($p=="quiz-list"){ require_once('view/quiz_list.php'); }
        if($p=="akun"){ require_once('view/akun.php'); }
        
    }else
    {
        require_once('view/dash.php');
    }
?>