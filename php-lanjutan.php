<?php
$nama = "Aldi";

/*
$no = "10";

for ($i=0; $i<$no; $i++) {
    $n = $i + 1;
    echo $n." ".$nama. "<br>";
}*/

/*$no = "10";
$si = "0";
while ($si<$no) {
    $n = $si + 1;

    echo $n." ".$nama. "<br>";
}*/

/*$data = array ( 'kunci', 'meja', 'kursi', 'lemari');

foreach ($data as $value){
    echo $value. "<br>";
}*/


/*switch($nama) {
    case "Aldi";
        $pesan = $nama. " adalah orang Cilacap";
    break;
    case "Zikri";
        $pesan = $nama. " berasal dari Cilacap";
    default;
        $pesan = $nama. " darimana ya?";
}
echo $pesan; */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="php $_SERVER['PHP_SELF] ?>" method="post">
        <label> Nama </label>
        <input type="text" name="name">
        <label> jumlah </label>
        <input type="text" name="no">
        <input type="submit" name="submit" value="Submit">
</form>
<?php
    if(!empty($_POST["submit"] )){
       
        switch($_POST ['nama']) {
            case "Aldi";
                $pesan = $nama. " adalah orang Cilacap";
            break;
            case "Zikri";
                $pesan = $nama. " berasal dari Cilacap";
            default;
                $pesan = $nama. " darimana ya?";  
    }
    
    for ($i=0;$i<$_POST ['no'];$i++) {
        echo $pesan."<br>";
    }
} else {
    echo "Anda belum input nama dan jumlah";
} 
?>
</body>
</html>