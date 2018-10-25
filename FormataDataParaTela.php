<?php

function traduz_data_para_exibir($data) {
    if($data == "" OR $data == "0000-00-00") {
        return "";
    }
    $partes = explode("-", $data);
    if(count($partes) != 3) {
        return $data;
    }
    // Se quiser somente dia, mês e ano, retire o H:i:s
    $objeto_data = DateTime::createFromFormat('Y-m-d H:i:s', $data);
    
    return $objeto_data->format('d/m/Y H:i:s');
}
