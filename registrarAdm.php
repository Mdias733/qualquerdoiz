<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="stylesADM.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
      .inputBox {
        margin-bottom: 20px;
      }

      .inputUser {
        padding: 5px;
        border: 1px solid #000000;
        border-radius: 4px;
        font-size: 15px;
        width: 100%;
      }

      .labelInput {
        font-size: 20px;
        color: #666;
        margin-bottom: 5px;
      }

      .col-md-6 {
        display: flex;
        flex-direction: column;
        align-items: flex-start;
      }

      .btn {
        padding: 10px 20px;
        background-color: #4CAF50;
        color: white;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        margin-top: 10px;
      }

      .btn:hover {
        background-color: #45a049;
      }

      .buttonFinalizar {
        margin-top: 20px;
      }
    </style>
  </head>
  <body>
    <div class="sidebar">
      <div class="logo-details">
        <i></i>
        <span class="logo_name">Senai</span>
      </div>
      <ul class="nav-links">
<li>
          <a href="index.php">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Painel Administrativo</span>
          </a>
        </li>
        <li>
          <a href="registrarAdm.php"  class="active">
          <i class='bx bx-user-plus'></i>
          <span class="links_name">Registar Admin</span>
          </a>
        </li>
        <li class="log_out">
          <a href="logout.php">
            <i class='bx bx-log-out'></i>
            <span class="links_name">Log out</span>
          </a>
        </li>
      </ul>
  </div>
<section class="home-section">
    <nav>
      <div class="sidebar-button">
        <span class="dashboard"></span><img src="https://static.portaldaindustria.com.br/media/uploads/logotipos/logo-senai.png" alt="" height="89" width="230">
      </div>
      <div class="profile-details">
        <span class="admin_name">ㅤㅤAdministrador</span> 
      </div>
    </nav>
 <div class="home-content">
        <div class="sales-boxes">
          <div class="recent-sales box">
            <div class="sales-details">
              <ul class="details">
                <form action="./CRUD/cad_admin.php" method="post">
                  <div class="inputBox">
                    <label for="nome" class="labelInput">Nome completo:</label>
                    <input type="text" name="nome_adm" id="" class="inputUser" required placeholder="">
                  </div>
                  <br><br>
                  <div class="inputBox">
                    <label for="email" class="labelInput">Email:</label>
                    <input type="text" name="email_adm" id="" class="inputUser" required class="from-control">
                  </div>
                  <br><br>
                  <div class="inputBox">
                    <label for="telefone" class="labelInput">Usuário</label>
                    <input type="tel" name="user_adm" id="" class="inputUser" required  class="from-control">
                  </div>
                  <br><br>
                  <div class="inputBox">
                    <label for="cpf" class="labelInput">Senha</label>
                    <input type="password" name="senha_adm" id="" class="inputUser" required class="from-control">
                  </div>
                  <br><br>
                  <div class="col-md-6">
                    <a href="index.php"><input type="button"  value="Voltar"></a> 
                    <br>
                    <button type="reset">Limpar</button>
                    <br>
                    <div class="buttonFinalizar">
                      <input type="submit" class="btn btn-primary" value="Finalizar cadastro">
                    </div>       
                  </div> 
                </form>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
  </body>
</html>
