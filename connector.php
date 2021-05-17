<?php

    /*******************************************************************************
    * Created by: Schnoggy                                                         *
    * Date: 17/05/2021                                                             *
    * Project: Connector-JFQL                                                      *
    * Information: MIT license                                                     *             
    ********************************************************************************/

    function query($url, $name, $password, $query){
        $ch = curl_init();

        $postRequest = array(
            'name' => $name,
            'password' => $password,
            'query' => $query
        );
        
        curl_setopt($ch, CURLOPT_URL, $url);
        
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($postRequest));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        
        $output = curl_exec($ch);
        
        return $output;
        curl_close($ch);
}
