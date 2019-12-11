<?php
	$username = $password = "";
	
	if(isset($_POST['submit'])){
		$username = $_POST['user'];
		$password = $_POST['pass'];
		
		//Alpha Flight
		if($username == "Alpha" and $password == "Kane"){
			header("Location: hfdsgjkhsdfjklghsdfjklghsdjkfghsdjkf.html");
		}
		//Bravo Flight
		if($username == "Bravo" and $password == "Toews"){
			header("Location: hfdsgjkhsdfjklghsdfjklghsdjkfghsdjkf.html");
		}
		//Charlie Flight
		if($username == "Charlie" and $password == "Shaw"){
			header("Location: hfdsgjkhsdfjklghsdfjklghsdjkfghsdjkf.html");
		}
		//Delta Flight
		if($username == "Delta" and $password == "Saad"){
			header("Location: hfdsgjkhsdfjklghsdfjklghsdjkfghsdjkf.html");
		}
		//POC
		if($username == "POC" and $password == "Strome"){
			header("Location: hfdsgjkhsdfjklghsdfjklghsdjkfghsdjkf.html");
		}
		//Cadre
		if($username == "Cadre" and $password == "Crawford"){
			header("Location: hfdsgjkhsdfjklghsdfjklghsdjkfghsdjkf.html");
		}
		
	}
?>