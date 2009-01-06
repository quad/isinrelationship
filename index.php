<?php header('Content-Type: text/html'); ?>

<?php 
require 'iir.php';
$resp = isInRelationship();

$name = $resp['name'];
$answer = $resp['answer'];
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <title>Is <?= $name ?> In a Relationship?</title>
  <link rel="alternate" title="Is <?= $name ?> In a Relationship?" href="rss.php" type="application/rss+xml" />
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>

<body style="text-align: center; padding-top: 200px;">

  <a href="http://github.com/quad/isinrelationship" 
    style="font-weight: bold; 
          font-size: 120pt; 
          font-family: Arial, sans-serif; 
          text-decoration: none; 
          color: black;" 
    title="CODE"
    id="answer">
    <?= $answer ?>
  </a>
  
</body>
</html>
