<form method="POST" action="">
    Jumlah bintang yang diinginkan <input type="text" name="bintang"><br><br>
    <input type="submit" value="Proses">
</form>
<?php
$v = $_POST['bintang'];
$i=1;
do{
    $z=1;
    do{
        echo  $z;
        $z++;
    }while($z <= $i);
    echo "<br>";
    $i++;
}while($i <= $v);
echo "<br>";

$i=1;
do{
    $s=1;
    do{
        echo "&nbsp";
        $s++;
    }while($s <= $i);
    $a=$v;
    do{
        echo $v-$a+1;
    $a--;
}while($a >= $i);
echo "<br>";
$i++;
}while($i <= $v);
echo "<br>";

$i=1;
do{
    $z=1;
    do{
        echo  $v-$z+1;
        $z++;
    }while($z <= $i);
    echo "<br>";
    $i++;
}while($i <= $v);
?>