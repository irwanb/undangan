<?php

    if(!empty($_POST['nama']) AND !empty($_POST['pesan'])) {
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $pesan = $_POST['pesan'];
        $tgl = date('D, d M Y - G:i:s');
        $text = stripslashes(htmlspecialchars($pesan));
       
        $l = rand(1,2);

        $fp = fopen("db.html", 'a');
        fwrite($fp, "<div class='list$l'><div class='hr'><div align='right'>$tgl</div></div><img src='ssd1.png'/> <a>$nama</a> : $text </div>");
        fclose($fp);
    }
   
    header('Location: ' . $_SERVER['HTTP_REFERER']);
   
?>