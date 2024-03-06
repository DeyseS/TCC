<?php 
    switch($_REQUEST["acao"]){
        case 'cadastrar';
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $senha = md5($_POST["senha"]);

        $sql = "INSERT INTO cadastro (nome,email,senha) VALUES ('{$nome}','{$email}','{$senha}')";
        
        $res = $conn->query($sql);

        if($res==true){
          print "<script>alert('Cadastrado com Sucesso');</script>";
          print "<script>location.href='?page=listar';</script>";

        }else{
          print "<script>alert('Nao foi Possivel');</script>";
          print "<script>location.href='?page=listar';</script>";
        }
        break;

        case 'editar';
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $senha = md5($_POST["senha"]);

        $sql = "UPDATE cadastro SET 
                      nome='{$nome}',
                      email='{$email}',
                      senha='{$senha}'
                   WHERE
                      id=".$_REQUEST["id"];

        $res = $conn->query($sql);

        if($res==true){
          print "<script>alert('Editado com Sucesso');</script>";
          print "<script>location.href='?page=listar';</script>";

        }else{
          print "<script>alert('Nao foi Possivel Editar');</script>";
          print "<script>location.href='?page=listar';</script>";
        }
          break;

          case "excluir";
          $sql = "DELETE FROM cadastro WHERE id=".$_REQUEST["id"];
          
          $res = $conn->query($sql);

        if($res==true){
          print "<script>alert('Excluido com Sucesso');</script>";
          print "<script>location.href='?page=listar';</script>";

        }else{
          print "<script>alert('Nao foi Possivel Excluir');</script>";
          print "<script>location.href='?page=listar';</script>";
        }
          break;

    }