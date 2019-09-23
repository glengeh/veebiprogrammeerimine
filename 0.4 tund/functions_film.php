<?php
function readAllFilms(){
	//loeme andmebaasist
	//loome andmebaasiühenduse (näiteks $conn)
	$conn = new mysqli($GLOBALS["serverHost"], $GLOBALS["serverUsername"], $GLOBALS["serverPassword"], $GLOBALS["dataBase"]);
	//valmistame ette päringu
	$stmt = $conn->prepare("SELECT pealkiri, aasta FROM film");
	//seome saadava tulemuse muutujaga
	$stmt->bind_result($filmTitle, $filmYear);
	//käivitame SQL päringu
	$stmt->execute();
	$filmInfoHTML = "";
	while($stmt->fetch()){
		$filmInfoHTML .= "<h3>" .$filmTitle ."</h3>";
		$filmInfoHTML .= "<p>Tootmisaasta:" .$filmYear .".</p>";
		//echo $filmTitle;
	}
	
	
	//sulgeme ühenduse
	$stmt->close();
	$conn->close();
	//väljastan väärtuse
	return $filmInfoHTML;
}
	
function saveFilmInfo($filmTitle, $filmYear, $filmDuration, $filmGenre, $filmCompany, $filmProducer){
	$conn = new mysqli($GLOBALS["serverHost"], $GLOBALS["serverUsername"], $GLOBALS["serverPassword"], $GLOBALS["dataBase"]);
	$stmt = $conn->prepare("INSERT INTO film (pealkiri, aasta, kestus, zanr, tootja, lavastaja) VALUES (?,?,?,?,?,?)");
	echo $conn->error;
	//s - string, i - integer, d - decimal
	$stmt->bind_param("siisss", $filmTitle, $filmYear, $filmDuration, $filmGenre, $filmCompany, $filmProducer);
	$stmt->execute();
	echo $stmt->error;
	
	
	$stmt->close();
	$conn->close();
}
?>
	