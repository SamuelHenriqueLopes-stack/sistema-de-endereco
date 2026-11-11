<?php 

function buscaCEP($cep) {
    if(strlen($cep) === 8) {
        //verifica se o CEP tem 8 caracteres

        $dados = json_decode(file_get_contents("https://viacep.com.br/ws/$cep/json/"),true);

    
        return $dados;
    }

}

?>