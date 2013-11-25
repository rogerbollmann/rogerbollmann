<?php

    $url ="http://localhost:8080/mvc/resolver.php?service=kantone&methode=single&id=".$this->_['Kürzel'];
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    $body = curl_exec($ch);
    curl_close($ch);

    $json = json_decode($body);

    print_r($json);
    


/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

