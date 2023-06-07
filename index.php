<?php
require("conn.php");

if(isset($_POST['pesquisar'])){
  $nome = $_POST['nome_pesquisa'];
  $tabela = $pdo->prepare("SELECT nome_adm, usuario_adm, email_adm FROM tb_administradores WHERE nome_adm LIKE :nome");
  $tabela->bindValue(':nome', '%' . $nome . '%');
  $tabela->execute();
  $rowTabela = $tabela->fetchAll();
} else {
  $tabela = $pdo->prepare("SELECT nome_adm, usuario_adm, email_adm FROM tb_administradores");
  $tabela->execute();
  $rowTabela = $tabela->fetchAll();
}

if (empty($rowTabela)){
  echo "<script>
    alert('Não tem Funcionarios Registrados');
  </script>";
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="stylesADM.css">
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<style>
.table {
  margin-top: 20px;
  font-size: 16px;
}
.table th {
  background-color: #f2f2f2;
  color: #555;
}
.table td {
  background-color: #fff;
  color: #333;
}
.table td, .table th {
  padding: 10px;
  border: 2px solid #ccc;
  text-align: center;
}
.form-label {
  font-weight: bold;
}
.form-control {
  border-radius: 0;
}
.btn-primary {
  border-radius: 0;
}
</style>
<body>
<div class="sidebar">
    <div class="logo-details"><i></i>
      <span class="logo_name">Senai</span>
    </div>
      <ul class="nav-links">
        <li>
          <a href="painel.php"  class="active">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Painel Administrativo</span>
          </a>
        </li>
        <li>
          <a href="registrarAdm.php">
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
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard"></span><img src="https://static.portaldaindustria.com.br/media/uploads/logotipos/logo-senai.png" alt="" height="89" width="230">
      </div>
      <div class="box-search2">
        
      </div>
      <div class="profile-details">
        <span class="admin_name">ㅤㅤAdministrador</span> 
      </div>
    </nav>
    <div class="container">
      <div class="home-content">
        <div class="sales-boxes">
          <div class="recent-sales box">
            <div class="mb-3">
              <label for="nome_pesquisa" class="form-label">Pesquisar por Nome</label>
              <div class="input-group">
                <form method="POST" action="">
                  <input type="text" class="form-control" id="nome_pesquisa" name="nome_pesquisa" required>
                  <button class="btn btn-primary" type="submit" name="pesquisar">Pesquisar</button>
                  <button class="btn btn-primary" type="button" name="resetar" onclick="window.location.href = 'index.php'">Limpar </button>
                </form>

                
              </div>
            </div>
            <div class="home-content">
              <div class="sales-details">
                <ul class="details">
                  <table class="table table-white">
                    <thead>
                      <tr>
                        <th scope="col">ㅤㅤㅤㅤNomeㅤㅤㅤㅤㅤ</th>
                        <th scope="col">ㅤㅤUsuário de Loginㅤㅤ</th>
                        <th scope="col">ㅤㅤㅤEmailㅤㅤㅤ</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      if (!empty($rowTabela)){
                        foreach($rowTabela as $linha){
                          echo '<tr>';
                          echo "<td>".$linha['nome_adm']."</td>";
                          echo "<td>".$linha['usuario_adm']."</td>";
                          echo "<td>".$linha['email_adm']."</td>";
                          echo '</tr>';
                        }
                      } else {
                        echo "<tr><td colspan='5'>Não foram encontrados resultados.</td></tr>";
                      }
                      ?>
                    </tbody>
                  </table>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>
</html>