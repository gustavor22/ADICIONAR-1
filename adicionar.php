<?php 
//
session_start();
//Conexão
include_once("conexao.php");

if(isset($_POST['btn-salvar'])):

        $idcolecao = mysqli_escape_string($connect, $_POST['id_colecao']);
        $idcartao = mysqli_escape_string($connect, $_POST['id_cartao']);
        $frente = mysqli_escape_string($connect, $_POST['frente']);
        $verso = mysqli_escape_string($connect, $_POST['verso']);
        $data = mysqli_escape_string($connect, $_POST['data']);

        $sql = "INSERT INTO cartao (id_cartao, id_colecao, frente, verso, data_cartao) VALUES (1, 1, '$frente', '$verso', '$data')";

        if(mysqli_query($connect, $sql)):
                $_SESSION['mensagem'] = "Salvo com sucesso!";
                header('Location: sucesso.php');
        else:
                $_SESSION['mensagem'] = "Erro ao salvar!";
                header('Location: erro.php');      
        endif;  
endif;