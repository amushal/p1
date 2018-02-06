<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
  <title>Ala Mushal</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
	<section id="page">

	    <header>

	        <h1>Ala Mushal</h1>

	        <h3>Welcome to my first PHP project</h3>

	    </header>
	<!-- start Article  -->

    <div class="line"></div>  

    <article id="article1">

        <h2>About Me</h2>

        <div class="line"></div>

        <div class="articleBody clear">

            <figure>
                <a href="#">
                    <img src="images/me.jpg" width="328" height="366" alt="Ala Mushal" />
								</a>
            </figure>

            <p>
							My wide breadth of experience gives versatility in a number of contexts.
						</p>
						<p>
						  Well-spoken, energetic, confident, and personable.
						</p>

						<section>
							<h4>
								The key strengths that I possess for success include, but are not limited to, the following:
							</h4>
							<ul>
								<li>I strive for continued excellence.</li>
								<li>Passionate about new technologies and software development.</li>
								<li>I am eager to learn new things.</li>
							</ul>
						</section>
        </div>

		<h2>Random Quote</h2>

    <?php
			function getRandomString() {

				$q = array("if I agree with you we'd both be wrong",
					"If you tell the truth, you don't have to remember anything.",
					"Get busy living or get busy dying.");

				$min = 0;
				$max = count($q);
				$randomNumber = rand($min, $max-1);

				$randomQuote = $q[$randomNumber];
				return trim($randomQuote);
			}

			echo "<br />";
			echo "<blockquote>". getRandomString() ."</blockquote>";
    ?>

    </article>

		<!-- end Article -->
		<footer> 

		    <div class="line"></div>

		    <p>Copyright 2018 - mushal.me</p>

		</footer>

    </section> 

</body>
</html>
