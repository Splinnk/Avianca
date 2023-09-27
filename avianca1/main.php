<?php 
include "config.php";
?>
<!DOCTYPE html>
<html lang="es" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/Estilo.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
 
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<title>Login recordarme usando PDO y PHP</title>

    </head>
    <body class="d-flex flex-column h-100">
    
    <header>
  <!-- Fixed navbar -->
  <nav class="navbar navbar-expand-md navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="#">Avianca</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">

      </ul>
      
    </div>
    </div>
  </nav>
	     <section class="banner" id="top">

        <div class="container">
            <div class="container d-flex align-items-center justify-content-lg-between">
                <section id="first-tab-group" class="tabgroup">
                    <div id="tab1">
                        <div class="submit-form">
                            <h4>Reserva tu vuelo <em>Ahora</em>!</h4>
                            <form id="form-submit" action="../Gp/Tabla/TablaVuelos.php" method="get">
                                <div class="row">
                                    <div class="col-md-6">
                                        <fieldset>
                                            <label for="from">De:</label>
                                            <select required name='from' onchange='this.form()'>
                                                <option value="">Seleciona tu localización</option>
                                                <option value="Cambodia">Aeropuerto Internacional Mariscal Sucre (Quito)</option>
                                            </select>
                                        </fieldset>
                                    </div>
                                    <div class="col-md-6">
                                        <fieldset>
                                            <label for="to">A:</label>
                                            <select required name='to' onchange='this.form()'>
                                                <option value="">Seleciona la localización</option>
                                                <option value="Cambodia">Aereopuerto George Washinton (USA)</option>
                                            </select>
                                        </fieldset>
                                    </div>
                                    <div class="col-md-6">
                                        <fieldset>
                                            <label for="departure">Fecha de Salida:</label>
                                            <input name="deparure" type="text" class="form-control date" id="deparure"
                                                placeholder="Seleciona la Fecha" required onchange='this.form()'>
                                        </fieldset>
                                    </div>
                                    <div class="col-md-6">
                                        <fieldset>
                                            <label for="return">Fecha de llegada:</label>
                                            <input name="return" type="text" class="form-control date" id="return"
                                                placeholder="Seleciona la Fecha" required onchange='this.form()'>
                                        </fieldset>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="radio-select">
                                            <div class="row">
                                                <div class="col-md-6 col-sm-6 col-xs-6">
                                                    <label for="round">Ida y Vuelta</label>
                                                    <input type="radio" name="trip" id="round" value="round"
                                                        requiredonchange='this.form.()'>
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-xs-6">
                                                    <label for="oneway">Solo ida</label>
                                                    <input type="radio" name="trip" id="oneway" value="one-way"
                                                        requiredonchange='this.form.()'>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <fieldset>
                                            <button type="submit" id="form-submit" class="btn"> Consultar Vuelos
                                                Ahora!!</button> 

                                        </fieldset>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        </div>
    </section>

</header>

<!-- Begin page content -->
<hr>
<br>
<main>
<div class="container">
      <div class="row">
      <div class="col-md-12">
        <h3>Panel de control</h3>
        <hr>
	  </div>
      <div class="col-md-6">

      
    <?php

    // Check user login or not
    if(!isset($_SESSION['userid'])){
        header('Location: index.php');
    }

    // logout
    if(isset($_POST['but_logout'])){
        session_destroy();

        // Remove cookie variables
        $days = 30;
        setcookie ("rememberme","", time() - ($days *  24 * 60 * 60 * 1000) );

        header('Location: index.php');
    }
    ?>
        <form method='post' action="">
            <input class="btn btn-danger" type="submit" value="Salir" name="but_logout">
        </form>


      </div>
      </div>
	  <footer>
    

</footer>
</div>
</main>
  </body>
</html>
