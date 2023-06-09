<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/style.css">

  <title>Titulo do Site</title>

</head>

<body>

  <header>

    <!--================================================================================-->
    <nav class="navbar navbar-expand-lg navbar-light" id="navbar">

      <div class="container">
    
        <img src="" alt="">
        <span class="navbar-brand font-weight-bold">Titulo do Site</span>
        <button class="navbar-toggler navbar-toggler-right bg-faded" type="button" data-toggle="collapse"
          data-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false"
          aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse text-right" style="display: flex; justify-content: right; margin-right: 5vw;">

          <ul class="navbar-nav">

            <li class="nav-item">
              <a class="nav-link font-weight-bold" href="#">Botão 1</a>
            </li>

            <li class="nav-item">
              <a class="nav-link font-weight-bold" href="#">Botão 2</a>
            </li>

            <li class="nav-item">
              <a class="nav-link font-weight-bold" href="#">Botão 3</a>
            </li>

          </ul>
        
        </div>

      </div>

    </nav>
  
  <header>

<!--================================================================================-->

<main>

  <section id="Sobre">

    <div class="container my-5 d-flex justify-content-center align-items-center flex-column" style=" display: flex; justify-content: center; align-items: center; flex-direction: column">
      <div class="row">

        <div class="col-md-6 mb-4 mb-md-0">
          
          <h2 class="font-weight-bold">Sobre o site</h2>

          <p class="mt-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam vestibulum augue sed
            massa iaculis, a luctus massa congue. Etiam venenatis lobortis tellus, vel volutpat magna efficitur
            a. Sed varius enim non dolor pretium ullamcorper. Donec vel lorem eu erat dapibus suscipit. Sed
            efficitur viverra quam, quis auctor eros venenatis id. Nunc condimentum ante in purus elementum, a
            luctus velit congue. Ut dignissim vel arcu ut viverra.
                          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam vestibulum augue sed
            massa iaculis, a luctus massa congue. Etiam venenatis lobortis tellus, vel volutpat magna efficitur
            a. Sed varius enim non dolor pretium ullamcorper. Donec vel lorem eu erat dapibus suscipit. Sed
            efficitur viverra quam, quis auctor eros venenatis id. Nunc condimentum ante in purus elementum, a
            luctus velit congue. Ut dignissim vel arcu ut viverra.</p>

          <button class="btn btn-primary" id="button-sobre" type="button">Saiba Mais</button>

        </div>

      </div>
    </div>

  </section>

  <!--================================================================================-->

  <section id="projects">
    <div class="container">

      <div class="row">
        <div class="col-md-12">
          <h2 class="text-center">Projetos Prontos</h2>
        </div>
      </div>
  
      <div class="row">

        <div class="col-md-6">
          <div class="card mb-4">
            <img class="card-img-top" src="https://via.placeholder.com/300x200" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Projeto 1</h5>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam vestibulum augue sed massa iaculis.</p>
              <a href="#" class="btn btn-primary">Ver Projeto</a>
            </div>
          </div>
        </div>

        <div class="col-md-6">
          <div class="card mb-4">
            <img class="card-img-top" src="https://via.placeholder.com/300x200" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Projeto 2</h5>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam vestibulum augue sed massa iaculis.</p>
              <a href="#" class="btn btn-primary">Ver Projeto</a>
            </div>
          </div>
        </div>

        <div class="col-md-6">
          <div class="card mb-4">
            <img class="card-img-top" src="https://via.placeholder.com/300x200" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Projeto 3</h5>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam vestibulum augue sed massa iaculis.</p>
              <a href="#" class="btn btn-primary">Ver Projeto</a>
            </div>
          </div>
        </div>

        <div class="col-md-6">
          <div class="card mb-4">
            <img class="card-img-top" src="https://via.placeholder.com/300x200" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Projeto 4</h5>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam vestibulum augue sed massa iaculis.</p>
              <a href="#" class="btn btn-primary">Ver Projeto</a>
            </div>
          </div>
        </div>

      </div>

    </div>
  </section>

  <!--================================================================================-->

    <div class="container my-5">

      <section id="contact" class="bg-light">
        <div class="container">
          <div class="row">
            <div class="col-md-8 mx-auto">

              <h2 class="text-center">Entre em contato</h2>

              <form action="enviar.php" method="post">

                <div class="form-group">
                  <input type="text" name="nome" class="form-control" placeholder="Seu nome" required>
                </div>

                <div class="form-group">
                  <input type="email" name="email" class="form-control" placeholder="Seu e-mail" required>
                </div>

                <div class="form-group">
                  <input type="text" name="assunto" class="form-control" placeholder="Assunto" required>
                </div>

                <div class="form-group">
                  <textarea name="mensagem" class="form-control" rows="5" placeholder="Sua mensagem" required></textarea>
                </div>

                <button type="submit" class="btn btn-primary" id="button-form">Enviar mensagem</button>
              
              </form>

            </div>
          </div>
        </div>
      </section>

    </div>
  
  </main>

  <!--================================================================================-->

  <footer class="footer">
    <div class="container">
      <div class="row">

        <div class="col-md-6">

          <h3>Sobre o site</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed in felis sed nulla luctus ultrices.
            Sed tincidunt orci non sem laoreet efficitur.</p>

        </div>

        <div class="col-md-6">

          <h3>Links úteis</h3>

          <ul>
            <li><a href="#">Sobre o site</a></li>
            <li><a href="#">Projetos</a></li>
            <li><a href="#">Botão 3</a></li>
            <li><a href="#">Fale conosco</a></li>
          </ul>

        </div>

      </div>
    </div>
  </footer>

  <!--================================================================================-->

  <!-- Especificações -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popperjs-core.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <!--================================================================================-->

</body>

</html>