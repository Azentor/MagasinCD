<?php
echo "<div class='question'>";
		echo "<h2>Ajouter un artiste</h2>";
		?>
		<form method="post" action="test.php">
			<p><label for="question">Question : </label><input type="text" value="" name="prenom" /></p>
			<p><label for="reponse">Réponse : </label><input type="text" value="" name="nom" /></p>
                        <p><label for="reponse">Réponse : </label><input type="text" value="" name="pays" /></p>
			<p><input type="submit" name="bouton" value="Soumettre"></p>
		</form>
		<?php
		echo "</div>";