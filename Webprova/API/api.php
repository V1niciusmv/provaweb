<?php 

 $cep = $_POST['cep'];

 $response = file_get_contents ("https://viacep.com.br/ws/$cep/json/");

 $response_array= json_decode($response, true);
?>

<?php foreach ($response_array as $key => $value): ?>
    <p><?= $key ?>: <?= $value ?></p>
<?php endforeach ?>

<div>
    <a href="api_request.php">Consultar novo endereço</a>
</div>

<div>
    <a href="../HOME_PAGE/home.php">Ir para home page</a>
</div>