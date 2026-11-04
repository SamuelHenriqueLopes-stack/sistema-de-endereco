<?php 

function buscaCEP($cep) {
    if(strlen($cep) === 8) {
        //verifica se o CEP tem 8 caracteres

        $dados = json_decode(file_get_contents("https://viacep.com.br/ws/$cep/json/"),true);

        if(isset($dados['erro'])) {
            //verifica se existe/contem o campo "erro"
            return "Cep não encotrado!!";
        }else {
            return $dados;
        }
    }
}

?>