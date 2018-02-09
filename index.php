<?php

$quotes = array (
    "The two most important days in your life are the day you are born and the day you find out why. - Mark Twain",
    "Risk comes from not knowing what you're doing. - Warren Buffett",
    "Love the life you live. Live the life you love. - Bob Marley",
    "Health is the greatest gift, contentment the greatest wealth, faithfulness the best relationship. - Buddha",
    "Success is not final, failure is not fatal: it is the courage to continue that counts. - Winston Churchill",
    "It is in your moments of decision that your destiny is shaped. - Tony Robbins",
    "The true sign of intelligence is not knowledge but imagination - Albert Einstein",
    "The ultimate measure of a man is not where he stands in moments of comfort and convenience, but where he stands at times of challenge and controversy. - Martin Luther King, Jr."
);

$dailyQuote = array_rand ($quotes, 1);

?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>DWA | Project 1</title>
		<meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Bree+Serif|Montserrat|Parisienne" rel="stylesheet">
        <!-- CSS -->
        <link rel="stylesheet" href="css/custom.css">
	</head>
	<body>
		<!-- Page Wrapper -->
        <div class="page-wrapper">
            <!-- Main Content -->
            <main>
                <article>
                    <h1>John Pura</h1>
                    <span><img src="images/pic.jpg" alt="" /></span>
                    <h1>About Me</h1>
                    <p>I currently live in Western Massachusetts and I am taking this class to fulfill one of my required courses for the Web Technologies Certificate at HES. I am a very passionate coder and most interested in UI/UX design and building dynamic data-driven web applications. I have some PHP coding experience, but never used it along side a framework such as Laravel. So, I am looking forward to learning Laravel and adding it to my programming repertoire. I am always looking to learn a new technology and coding technique that will elevate my skills. </p>
                </article>
                <blockquote>
                    <p class="quote"><?php echo $quotes[$dailyQuote]; ?></p>
                </blockquote>
            </main>
        </div>
	</body>
</html>