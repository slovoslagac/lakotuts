<?php

$polje = array();
$polje2 = array("Lakotuts", "Lakotuts - Facebook", "Lakotuts - Youtube", "Lakotuts - Twitter");

$polje3 = array(
		"Lakotuts" => "http://www.lakotuts.com",
		"Facebook" => "http://www.facebook.com/lakotuts",
		"Youtube" => "http://www.youtube.com/lakotuts",
		"Twitter" => "http://www.twitter.com/lakotuts"
);


?>


<h1>LakoTuts - Polja</h1>

<?php 

var_dump($polje2);

?>

</br>
<?php 

print_r($polje2);

echo '</br>'.$polje2[0];

$polje2[0]= "LAKOTUTS";


echo '</br>';
print_r($polje2);

echo '</br>'.$polje2[0];
?>

<br />
<ul>
<?php 

foreach ($polje3 as $key => $value) {

	echo '<li><a href="'.$value.'">'.$key.'</a></li>'	;
}
?>
</ul>
<br />

<ul>
<?php 
	foreach ($polje3 as $key => $value) {
	?>
		<li><a href="<?php echo $value?>"><?php echo $key?></a></li>	
	<?php 
	}
?>
</ul>
