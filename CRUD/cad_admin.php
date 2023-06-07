<?php
    include ('../conn.php');

    $nome_adm = $_POST['nome_adm'];
    $email_adm = $_POST['email_adm'];
    $user_adm = $_POST['user_adm'];
    $senha_adm = $_POST['senha_adm'];
 


    if(empty($nome_adm) || empty($email_adm)|| empty($user_adm)|| empty($senha_adm)){
        echo "Voce precida preencher todos os campos";
    }else{
        $cad_pessoas = $pdo->prepare("INSERT INTO tb_administradores (nome_adm, usuario_adm , email_adm,senha_adm) 
        values (:nome_adm, :user_adm, :email_adm,:senha_adm)");
        $cad_pessoas->execute(array(
            ':nome_adm'=>$nome_adm,
            ':email_adm'=>$email_adm,
            ':user_adm'=>$user_adm,
            ':senha_adm'=>$senha_adm

        )
        );

        echo "<script>
        alert('Cadastro Realizado!');
        window.history.back();
        </script>";

    }

?>