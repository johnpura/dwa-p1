<?php
require_once dirname(__FILE__) . '/quotes.php';

$index = array_rand($quotes, 1);

?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>DWA | Project 1</title>
		<meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="icon" type="image/x-icon" href="favicon.ico" />
        <link href="https://fonts.googleapis.com/css?family=Bree+Serif|Montserrat|Parisienne" rel="stylesheet">
        <link rel="stylesheet" href="css/quotes.css">
	</head>
	<body>
        <main>
            <h1>Quote of the Day</h1>
            <blockquote>
                <p class="quote"><?php echo $quotes[$index]['saying']; ?></p>
            </blockquote>
            <figcaption>
                - <?php echo $quotes[$index]['author']; ?>
            </figcaption>
        </main>
	</body>
</html>