<?php

echo "Masukkan nama file: ";
$file = trim(fgets(STDIN));
echo "Masukkan password: ";
$key = trim(fgets(STDIN));
echo "Masukkan MAC: ";
$hash = trim(fgets(STDIN));
$hasil = hash_hmac_file('sha1',$file,$key);
if ($hasil == $hash) {
    echo "file terverifikasi";
} else {
    echo "file tidak terverifikasi";
}
?>