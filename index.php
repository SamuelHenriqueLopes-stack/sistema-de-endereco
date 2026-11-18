<?php 
include "./api.php";
// $endereco = buscaCEP(69905232);

// echo "<pres>";
// print_r($endereco);
// echo "</pre>";

if(isset($_GET['cep'])) {
    $cep = $_GET['cep'];
    $endereco = buscaCEP($cep);
}

?>

<form method="GET">
    <input 
        type="tex"
        placeholder="Busca cep..."
        name="cep"
    >
    <button>Buscar</button>
</form>

<?php  if(!isset($endereco['erro']) && isset($cep)):?>
<div>
    <h2>CEP encotrado</h2>
    <ul>
        <?php
        foreach($endereco as $data => $valor) {
            if(strlen($valor) > 0) {
            echo "$data: $valor <br>";
        } 

    }
        ?>
    </ul>
    <form action="salvar.php" method="POST">
        <input type="hidden"
        name="cep" 
        value="<?php echo htmlspecialchars($_GET['cep'])?>">
        <button>Salvar</button>
    </form>
</div>
<?php elseif(isset($endereco['erro'])):?>
    <h2>CEP nao encotrado</h2>
    <p> O CEP ditado pelo usuario nao existe</p>
<?php endif; ?>