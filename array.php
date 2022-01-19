
<?php
$name=['sumaiya','subu','sokina','karim','rahim','jodu','modu'];
$i=0;
for($i=0;$i<count($name);$i++)
{
    echo $i;
    echo "<br>";
    echo $name[$i];
    echo "<br>";
}
echo "<br>";
foreach($name as $val)
{
    echo "$val <br>";
}
?>
