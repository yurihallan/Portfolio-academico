<?php

	class Portfolio extends CI_Model{
    function __construct(){
		  parent::__construct();
    }
    
	function cadastrar_TelaConhecimento($linguagem,$framework){
		  return $this->db->query("INSERT INTO telaconhecimento(programacao,framework) VALUES('$linguagem','$framework')");
	  }

    function cadastro_voluntariado($descricao,$feedback){
		  return $this->db->query("INSERT INTO voluntariado(descricao,feedback) VALUES('$descricao','$feedback')");
	  }
	  
	function cadastro_monitoria($descricao,$feedback){
		  return $this->db->query("INSERT INTO monitoria(descricao,feedback) VALUES('$descricao','$feedback')");
	  }  

      function cadastro_perfil($curso,$contato,$facebook,$github,$linkedin,$periodo,$descricao_pessoal,$novo_nome){
        return $this->db->query("INSERT INTO perfil(curso,contato,facebook,github,linkedin,periodo,descricao_pessoal,arquivo,data) VALUES('$curso','$contato','$facebook','$github','$linkedin','$periodo','$descricao_pessoal','$novo_nome',NOW())");
    }  
	
	function cadastro_trabalho($novo_nomeCod,$novo_nomeMod){
        return $this->db->query("INSERT INTO trabalho(arquivo_codigo,arquivo_modelagem) VALUES('$novo_nomeCod','$novo_nomeMod')");
    }  
	
    function getUsuario($matricula,$senha){
		return  $this->db->query("SELECT * FROM usuario where matricula = '$matricula' &&  senha = '$senha'  limit 1");
		
	}
	
	 function Usuario($matricula,$senha, $usuario){
		return  $this->db->query("INSERT INTO usuario(usuario,matricula,senha) VALUES('$usuario','$matricula','$senha') ");
	
	}
	function  getPrincipal(){
		return $this->db->query("SELECT * FROM `perfil`,`usuario`,`TelaConhecimento`,`voluntariado`,`monitoria` WHERE id_perfil = 34 and id_usuario = 1 and id_conhecimento = 3 and id_voluntariado = 12 and id_monitoria = 6  LIMIT 1  ");
	}
 }






?>