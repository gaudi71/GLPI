function getDataBase(){
	// chargement du fichier ini
	$ini = parse_ini_file("Connexion.ini",true);
	
	// Accès à la base de données			
	$bdd_servername = $ini['bdd_Local']['bdd_servername'];
	$bdd_username = $ini['bdd_Local']['bdd_username'];
	$bdd_password = $ini['bdd_Local']['bdd_password'];
	$bdd_dbname = $ini['bdd_Local']['bdd_dbname'];

	try {
		$bdd = new PDO("mysql:host=$bdd_servername;dbname=$bdd_dbname", $bdd_username, $bdd_password);
		$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$bdd->query("set names utf8");
	}
	catch(PDOException $e)
	{
		die("Connection failed: " . $e->getMessage());
	}
	return $bdd;
}
