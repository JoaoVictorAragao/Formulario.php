<?php
    include_once "conex.php";

    $bd = filter_input_array(INPUT_POST, FILTER_DEFAULT);

    $query = "INSERT INTO user (nome, cpf, sexo, idade, endereço, escolaridade, pai, mãe, descricao) VALUES (:nome, :cpf, :sexo, :idade, :endereço, :escolaridade, :pai, :mãe, :descricao)";

    $cad = $conn ->prepare($query);
    $cad ->bindParam(':nome', $bd['nome']);
    $cad ->bindParam(':CPF', $bd['CPF']);
    $cad ->bindParam(':idade', $bd['Idade']);
    $cad ->bindParam(':sexo', $bd['Sexo']);
    $cad ->bindParam(':endereço', $bd['Endereco']);
    $cad ->bindParam(':escolaridade', $bd['Escolaridade']);
    $cad ->bindParam(':pai', $bd['Pai']);
    $cad ->bindParam(':mãe', $bd['Mae']);
    $cad ->bindParam(':descricao', $bd['desc']);

    $cad -> execute();

    if($cad ->rowCount()){
        $retorna = ['erro' => false, 'msg' => "Usuário cadastrado"];
    }else{
        $retorna = ['erro' => true, 'msg' => "Erro: Falha no cadastro"];
    }
    
    echo json_encode($retorna);


?>