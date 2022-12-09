
   
    <nav class="navbar navbar-dark bg-dark">
      <div class="salva">
        <ul class="nav justify-content-end">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">inicio</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" role="button" aria-expanded="false">cursos</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="fundamental.php">ensino fundamental</a></li>
              <li><a class="dropdown-item" href="medio.php">ensino médio</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://api.whatsapp.com/send/?phone=554236351372&text&type=phone_number&app_absent=0">contato</a>
          </li>
          <?php 
          session_start();

            if($_SESSION['nome'] != ''){
              ?>
              <li class="nav-item">
                <a class="nav-link" href="app.php?acao=logout" tabindex="-1" aria-disabled="true">sair</a>
              </li>
          <?php
            }else{
              ?>

              <li class="nav-item">
                <a class="nav-link" href="login.php" tabindex="-1" aria-disabled="true">entrar</a>
              </li>
            <?php  
            } ?>
          
        </ul>
      </div>
    </nav>
    <div class="title">
    <img src="imagens/Floriano.png">
   </div>
   
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
   
