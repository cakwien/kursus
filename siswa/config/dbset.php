<?php
include('db.php');

mysqli_query($con,"create table siswa(
        id_siswa int(11) NOT NULL AUTO_INCREMENT,
        nama varchar(200),
        alamat text,
        tp_lahir varchar(200),
        tgl_lahir varchar(200),
        no_hp char(20),
        email varchar(200),
        password char(20),
        PRIMARY KEY(id_siswa)
    )")

?>
