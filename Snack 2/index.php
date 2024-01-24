<?php 

if (isset($_GET['nome']) && isset($_GET['email']) && isset($_GET['eta'])) {
    $nome = $_GET['nome'];
    $email = $_GET['email'];
    $eta = $_GET['eta'];
} if (strlen($nome) < 3) &&  {
        $erroreNome = 'Il nome deve contenere almeno 3 caratteri.';
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="$_GET">
        <div class="container mt-4">
            <div class="row">
                <div class="col-4">
                    <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Nome</label>
  <input type="text" class="form-control" id="Nome" placeholder="Inserisci il tuo nome" name="nome">
  <small class="text-danger"><?php echo $erroreNome; ?></small>
</div>
                </div>
                <div class="col-4">
                    <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Email</label>
  <input type="email" class="form-control" id="Email" placeholder="Inserisci la tua email" name="email">
</div>
                </div>
                <div class="col-4">
                    <div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Età</label>
  <input type="text" class="form-control" id="Eta" placeholder="inserisci la tua età" name="eta" ></input>
</div>
                </div>
                <div class="col-4">
                 <button class="btn btn-success"> Invia i dati</button>
</div>
                </div>
                <div class="col-4">
                    <?php echo $nome . $email . $eta ?>
                </div>
            </div>
        </div>



</form>
</body>
</html>