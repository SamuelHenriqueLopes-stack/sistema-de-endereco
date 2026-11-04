<?php 
include "./api.php";
// $endereco = buscaCEP(69905232);

// echo "<pres>";
// print_r($endereco);
// echo "</pre>";

if(isset($_GET['cep'])) {
    $cep = $GET_['cep'];
    $endereco = buscaCEP($cep);
}

?>

<form method="GET">
    <input 
        type="tex"
        placeholder="Busca cep..."
        name="cep"
    >
    <button>Buscar>/buster>
</form>

<?php  if(isset($endereco['cep']))?>
<div>
    <h2>CEP encotrado</h2>
    <ul>
        <?php
        foreach($endereco as $data => $valor) {
            echo "$data: $valor <br>";
        } 
        ?>
    </ul>
</div>