<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>
    
    <header>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Supermercadoj1</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </nav>

    </header>

    <main>

      <div class="container">
        
            <div class="row justify-content-center">

                <div class="col-4">
                      <form class="mt-5" action="repaso.php" method="POST">
                        <h4 class="text-center">Orden de compra</h4>
                          <div class="row">
                              <div class="col">
                                <input type="text" class="form-control" placeholder="Producto1" name="producto1">
                              </div>
                            <div class="col">
                              <input type="number" class="form-control" placeholder="Precio1" name="precio1">
                            </div>
                            <div class="col">
                              <select class="form-control" name="operacion">
                                <option value="1">suma</option>
                                <option value="2">resta</option>
                                <option value="3">multiplicacion</option>
                                <option value="4">division</option>
                              </select>

                            </div>

                          </div>
                          <button type="submit" class="btn btn-primary mt-5" name="calcular">Submit</button>
                      </form>

                      <?php if(isset($_POST["calcular"])):?>
                          
                            <h4 > 
                            
                                <?php 
                                  
                                  $productoA=$_POST["producto1"];
                                  $precioA=$_POST["precio1"];
                                  $costoEnvio=8000;
                                  $total=$precioA+$costoEnvio;
                                  echo("El total es de: ".$total);
                                                             
                                ?> 
                            </h4>
                          
                      <?php endif?>



                </div>
        
            </div>

      </div>




    </mail>

    <footer>

    </footer>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>




</html>