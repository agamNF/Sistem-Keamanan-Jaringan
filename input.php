<?php

echo "Masukkan nama file: ";
$file = trim(fgets(STDIN));
echo "Masukkan password: ";
$pass = trim(fgets(STDIN));
$hasil = hash_hmac_file('sha1',$file,$pass);
echo "Hasil HASH : ".$hasil;
?>
