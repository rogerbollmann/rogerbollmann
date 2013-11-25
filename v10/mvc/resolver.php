<?php
ini_set('display_errors', 1);
echo "<br />";
error_reporting(E_ALL);
include('controllers/kantonController.php');
include('models/kanton.php');
include('views/kantonView.php');

// $_GET und $_POST zusammenfassen, $_COOKIE interessiert uns nicht.
$request = array_merge($_GET, $_POST);
// Controller erstellen
$controller = new KantonController($request);
// Inhalt der Webanwendung ausgeben.
echo $controller->display();
/**
if( isset( $_POST['single'] ) ) {
    $output = strtoupper($_POST['output']);
    
    if ($output=='JSON'){
        
            $url ="http://localhost:8080/mvc/resolver.php?service=kantone&methode=single&id=".$this->_['Kürzel'];
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            $body = curl_exec($ch);
            curl_close($ch);

            $json = json_decode($body);

            print_r($json);
    }
    
    if ($output=='XML'){
        
            $url ="http://localhost:8080/mvc/resolver.php?service=kantone&methode=single&id=".$this->_['Kürzel'];
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            $body = curl_exec($ch);
            curl_close($ch);

            $xml = new SimpleXMLElement($body);
    } else{
        echo "wrong output format";
    }
}
**/

?>
