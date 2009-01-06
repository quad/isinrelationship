<?php header('Content-Type: application/rss+xml');

require 'iir.php';
$resp = isInRelationship();

$name = $resp['name'];
$answer = $resp['answer'];

$day = strftime("%j");
$pubdate = strftime("%a, %d %b %Y 00:00:00 -0700");
?>
<?='<?'?>xml version="1.0" encoding="UTF-8"?>
<rss version="2.0" xmlns:atom="http://www.w3.org/2005/Atom">
  <channel>
    <title>Is <?= $name ?> In a Relationship?</title>
    <link>http://is<?= $name ?>inarelationship.com</link>
    <language>en-us</language>
    <description>Is <?= $name ?> In a Relationship?</description>
    <atom:link href="http://isitchristmas.com/rss.xml" rel="self" type="application/rss+xml" />    

      <item>
        <title><?= $answer ?></title>
        <description><?= $answer ?></description>
        <link>http://is<?= $name ?>inarelationship.com#<?= $day; ?></link>
        <guid>http://is<?= $name ?>inarelationship.com#<?= $day; ?></guid>
        <pubDate><?= pubdate ?></pubDate>
      </item>

  </channel>
</rss>
