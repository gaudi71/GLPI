function getDataBase(){
	
	// Accès à la base de données			
	$bdd_servername = "localhost";
	$bdd_username = "root";
	$bdd_password = "root";
	$bdd_dbname =   "glpi_parc";

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
