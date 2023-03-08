<?php
$cs = $_POST['cs'];
$produk = $_POST['produk'];
$jmlh = $_POST['jmlh'];

if ($produk == 'tv'){
    $total_harga = 4200000 * $jmlh;
}elseif($produk == 'kulkas'){
    $total_harga = 3100000 * $jmlh;
}elseif($produk == 'mesin cuci'){
    $total_harga = 3800000 * $jmlh;
}
?>