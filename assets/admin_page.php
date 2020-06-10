<html>
<?php
$ip = '192.168.1.71';
$pagename = 'admin_page.php';
header('Content-type: text/html; charset=utf-8');


$db = mysql_connect (localhost,root,'');
mysql_select_db('reiki',$db);
$result = $query("SELECT * FROM info_avto",$db);

echo "<table width='100%'>";
echo "<tr><td>марка</td><td>модель</td><td>артикул</td></tr>";
while ($row=mysql_fetch_array($result)){

    $pole1=$row[0];
    $pole2=$row[1];
    $pole3=$row[2];
    $pole4=$row[3];
    $pole5=$row[4];
    echo "<tr><td>$pole1</td><td>$pole2</td><td>$pole3</td></tr>";
}
echo "</table>";
?>
</html>
