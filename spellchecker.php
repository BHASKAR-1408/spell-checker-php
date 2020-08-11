<!DOCTYPE html>
<html>
<head>
	<title>file</title>
</head>
<body style=" background-color: #81d6f0;">

	<!-- html form tag for showing input box and submit button -->

	<form action=""  method="get" style="text-align: center;">

		<h3>check words/sentences spelling:</h3>

		<input type="text" name="word" />

		<input type="submit" value="check" /><br><br>

	</form><br><br>

	<!-- form tag for inserting php code -->

	<form style="text-align: center;">

	<!-- php code for getting data from body and processing means checking the words/sentnces is correct or wrong -->

		<?php 

			// function for spellcheck

			function splittingAndSpellcheck(){

				if(isset($_GET['word'])){

					$word = $_GET['word'];

					echo "<h2>sentense<h1>/</h1>word you gave in the inputbox:-</h2>".$word;

					$myArrayFromBody = explode(' ', trim(strtolower($word)));

					$jsondataOfenglishwords = file_get_contents('englishwords.json');

					$totalenglishwords = json_decode($jsondataOfenglishwords,true);

					$countOfCorrect = 0;

					$countOfwrong = 0;

					echo "<h3>wrongs words<h1>/</h1>may be these words not in my dictionary are:-</h3>";

					foreach ($myArrayFromBody as $eachword) {

						if(in_array($eachword, $totalenglishwords)){

							$countOfCorrect++;

						}

						else{

							echo $eachword."<br>";
							$countOfwrong++;

						}

					}	

					if ($countOfwrong == 0){
						echo "There is no wrong words.";
					}
					else{
						echo "<h3>Number of wrong spelling words are:-</h3>".$countOfwrong;
					}

				}

			}

			splittingAndSpellcheck();
		?>
	</form>
</body>
</html>
