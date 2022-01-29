<form method="POST" action="">
    Jumlah bintang yang diinginkan <input type="text" name="bintang"><br><br>
    <input type="submit" value="Proses">
</form>
<?php
$v = $_POST['bintang'];
$i=1;
while ($i <= $v)
{
    $a=1;
    while ($a <= $i)
    {
        echo  $a;
        $a++;
    }
    $i++;
    echo "<br>";
}
 echo "<br>";

$i=1;
while ($i <= $v){
    $s = 1;
    while ($s <= $i){
        echo "&nbsp";
        $s++;
    }
    $a=$v;
    while($a >= $i){
        echo $v-$a+1;
        $a--;
    }
    $i++;
    echo "<br>";
}
echo "<br>";

$i=1;
while ($i <= $v){
    $s = 1;
    while ($s <= $i){
        echo $v-$s+1;
        $s++;
    }
    $i++;
    echo "<br>";
}
?>