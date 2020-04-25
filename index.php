<?php

require_once("config.php");

/* $sql = new Sql();
$usuarios = $sql->select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios);
 */

 //Retorna um usuario de acordo com o id informdo
 //$root = new Usuario();
 //$root -> loadById(3);
 //echo $root;

 //Retorna toda a lista de usuarios cadastrados
 //$lista = Usuario::getList(); //Como o metodo getList é static, não necessita instanciar o objeto
 //echo json_encode($lista);

 //Carrega uma lista de usuarios buscando pelo login
 //$search = Usuario::search("jo");
 //echo json_encode($search);

 //Carrega um usuario autenticado
 $usuario = new Usuario;
 $usuario -> login("joao", "123456");
 echo $usuario;