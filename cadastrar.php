<?php
    include_once "conex.php";

    $bd = filter_input_array(INPUT_POST, FILTER_DEFAULT);

    $query = "INSERT INTO user (nome, cpf, sexo, idade, endereco, escolaridade, pai, mae, descricao) VALUES
     (:nome, :cpf, :sexo, :idade, :endereco, :escolaridade, :pai, :mae, :descricao)";
   

    $cad = $conn->prepare($query);
    $cad ->bindParam(':nome', $bd['nome']);
    $cad ->bindParam(':cpf', $bd['cpf']);
    $cad ->bindParam(':sexo', $bd['sexo']);
    $cad ->bindParam(':idade', $bd['idade']);
    $cad ->bindParam(':endereco', $bd['endereco']);
    $cad ->bindParam(':escolaridade', $bd['escolaridade']);
    $cad ->bindParam(':pai', $bd['pai']);
    $cad ->bindParam(':mae', $bd['mae']);
    $cad ->bindParam(':descricao', $bd['descricao']);
    $cad ->execute();
   

    if($cad ->rowCount()){
        $retorna = ['erro' => false, 'msg' => "Usuário cadastrado"];
    }else{
        $retorna = ['erro' => true, 'msg' => "Erro: Falha no cadastro"];
    }
    
    echo json_encode($retorna);


?>