<?php
    
    $url ="http://localhost:8080/mvc/resolver.php?service=kantone&methode=single&id=".$this->_['Kürzel'];
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    $body = curl_exec($ch);
    curl_close($ch);
    
    $xml = new SimpleXMLElement($body);


?>


