<?php
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "kursus";

    // membuat koneksi
    $koneksi = new mysqli($servername, $username, $password, $dbname);

    // melakukan pengecekan koneksi
    if ($koneksi->connect_error) {
        die("Connection failed: " . $koneksi->connect_error);
    } 

    if($_POST['getDetail']) {
        $id = $_POST['getDetail'];
        // mengambil data berdasarkan id
        $sql = "SELECT * FROM tentor WHERE id_tentor = $id";
        $result = $koneksi->query($sql);
        foreach ($result as $baris) { ?>
            <table class="table">
                <tr>
                    <td>Id Tentor</td>
                    <td>:</td>
                    <td><?php echo $baris['id_tentor']; ?></td>
                </tr>
                <tr>
                    <td>Nama Barang</td>
                    <td>:</td>
                    <td><?php echo $baris['nm_tentor']; ?></td>
                </tr>
            </table>
        <?php 

        }
    }
    $koneksi->close();
?>