 try {
        $bdd = new PDO('mysql:host=127.0.0.1;dbname=glpi_parc', 'root', 'root');
    } catch (Exception $e) {
        echo 'Exception reçue : ', $e->getMessage(), "\n";
        $bdd->CloseCursor;
    }
    }
?>
