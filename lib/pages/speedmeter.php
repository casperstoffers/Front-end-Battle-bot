<?php
$value = rand(1, 30);                                
if($value >= 1 && $value <= 10)
{
    $volume = "groen";
}
if($value >= 11 && $value <= 20)
{
    $volume = "geel";
}
if($value >= 21 && $value <= 30)
{
    $volume = "rood";
}
?>
<img style="height: 300px; width: 400px; margin-top: 40px; margin-left: 50px;" src="tpl/image/snelheid<?php echo $volume?>.jpg"/>
<?php
echo "<p style='font-size: 40px; margin-left: 230px;'>$value km/h</p>";
?>

