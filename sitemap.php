<?php

$connect = mysqli_connect("localhost","root","","printhub");

if (!$connect) {
    echo "Ошибка: Невозможно установить соединение с MySQL." . PHP_EOL;
    echo "Код ошибки errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Текст ошибки error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

$query = "SELECT * FROM sitemap";

$result = mysql_query($connect, $query);

$base_url = "http://localhost/printhub/";

header("Content-Type: application/xml; charset=utf-8");

echo '<?xml version="1.0" encoding="UTF-8"?>'.PHP_EOL;

echo '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:xhtml="http://www.w3.org/1999/xhtml" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">'.PHP_EOL;

while($row = mysqli_fetch_array($result)){
	echo '<url>' .PHP_EOL;
	echo '<loc>'.$base_url.$row["lang_code"].$row["page_url"].'</loc>'.PHP_EOL;
	echo '<xhtml:link xmlns:xhtml="http://www.w3.org/1999/xhtml" rel="alternate" hreflang="'.$row["alternate_first"].'" href="'.$base_url.$row["alternate_first"].$row["page_url"].'" />'.PHP_EOL;
	echo '<xhtml:link xmlns:xhtml="http://www.w3.org/1999/xhtml" rel="alternate" hreflang="'.$row["alternate_second"].'" href="'.$base_url.$row["alternate_second"].$row["page_url"].'" />'.PHP_EOL;
	echo '<changefreq>'.$row["changefreq"].'</changefreq>'.PHP_EOL;
	echo '</url>'.PHP_EOL;
}

echo '</urlset>'.PHP_EOL;


mysqli_close($connect);
?>