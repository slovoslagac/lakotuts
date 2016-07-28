<?php

$polje = array(
		"Lakotuts" => "http://www.lakotuts.com",
		"Facebook" => "http://www.facebook.com/lakotuts",
		"Youtube" => "https://www.youtube.com/channel/UCzcRclnBSnJRPM5h4PfnqWw/featured",
		"Twitter" => "http://www.twitter.com/lakotuts"
		
);

$polje2 = array(
		"http://www.lakotuts.com",
		"http://www.facebook.com/lakotuts",
		"https://www.youtube.com/channel/UCzcRclnBSnJRPM5h4PfnqWw/featured",
		"http://www.twitter.com/lakotuts"

);

//1.foreach
echo '<h1>Foreach</h1>';
foreach ($polje as $naziv => $url) {
	echo '<a href="'.$url.'">'.$naziv.'<a></br>';
}

echo '</br>';

//2. for
echo '<h1>For</h1>';

for($i = 0; $i < count($polje2); $i++){
	echo '<a href="'.$polje2[$i].'">'.$polje2[$i].'<a></br>';
}

//3. while
echo '<h1>While</h1>';
$indeks = 0;
$duzpolja = count($polje2);
while ($duzpolja> 0) {
	
	echo '<a href="'.$polje2[$indeks].'">'.$polje2[$indeks].'<a></br>';
	$indeks ++;
	$duzpolja --;
}


//4. Do while

echo '<h1>Do While</h1>';
$indeks = 0;
$duzpolja = count($polje2);
do {
	$duzpolja --;
	if($indeks == 1) {
		$indeks ++;
		continue;
		
	} 
	echo '<a href="'.$polje2[$indeks].'">'.$polje2[$indeks].'<a></br>';
	$indeks ++;
	
} while ($duzpolja> 0) ;

?>