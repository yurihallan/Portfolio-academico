<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('form', 'functions', 'form_validation');
		$this->load->model('portfolio');
		$this->load->database();
		$this->load->helper('url','form', 'file');
		
	}

	

	public function login(){
		$this->load->view('v_login');
	} 
	
	public function logar(){
	
		
	 if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
	
		$this->load->library('form_validation');
	
		$dados['msgAlert'] = "";
		$this->form_validation->set_rules('matricula','Matricula', 'required|numeric');
		$this->form_validation->set_rules('senha','Senha', 'required');
		
				
				$_SESSION['logado'] = null;
		if($this->form_validation->run() == TRUE){
					
				
				$matricula  = $_POST['matricula'];
				$senha = $_POST['senha'];
				    
				$res = !$this->portfolio->getUsuario($matricula,$senha)? null :  $this->portfolio->getUsuario($matricula,$senha);
				$dados['msgAlert'] = $res->row() ? $res->row() : null;
				if ($res->num_rows() > 0){
					   foreach ($res->result() as $row)
					   {
						  
						  
						  if($row->matricula == $matricula){
							  $_SESSION['logado'] = true;
							
						  }else{
							   $_SESSION['logado'] = false;
							
						  }
					   }
					}	
				
					
					
			
						
						if($_SESSION['logado']){
						
						 // header("location:Principal"); 
						   $dados['msgAlert'] = "<div class='alert alert-success' role='alert'>
									Logado com sucesso!  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
								   <span aria-hidden='true'>&times;</span>
								   </button></div>";
							$this->load->view('principal',$dados);
								 //header("Location:Principal"); 
						}else{
							   $dados['msgAlert'] = "<div class='alert alert-warning' role='alert'>
									Login Invalido!   <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
								   <span aria-hidden='true'>&times;</span>
								   </button></div>";
						
							
								$this->load->view('v_login',$dados);
						}

			} else{
			$dados['msgAlert'] = "<div class='alert alert-warning' role='alert'>
									Usuario Invalido!   <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
								   </button></div>";
			 session_destroy();
			$this->load->view('v_login',$dados);
			}		
			
		
          
	} 

	public function index()
	{
		 	
		$this->load->view('v_login');
		
	}

	public function TelaConhecimento()
	{
		
		$dados['msgAlert'] = "";
		
		if(isset($_POST['TelaConhecimento'])){
			$framework = $_POST['framework'];
			
			$linguagem = $_POST['Selectlinguagem'] == "Outros" ? strip_tags(trim($_POST['outras_linguagem'])) : strip_tags(trim($_POST['Selectlinguagem']));
			
		
			if(empty($linguagem)
			&& empty($framework)){
					 $dados['msgAlert'] = "ERRO: Preencha todos os campos!";
				}else{
					 $res = $this->portfolio->cadastrar_TelaConhecimento($linguagem ,$framework);
					 if($res){
						 $dados['msgAlert'] = "<div class='alert alert-success' role='alert'>
						 Dados cadastrado com sucesso!  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
						 <span aria-hidden='true'>&times;</span>
					   </button></div>";
						
					 }else{
					 	$dados['msgAlert'] = "Erro ao salvar evento no banco de dados!";
					 }
				}
		}
		
		 	
		$this->load->view('TelaConhecimento',$dados);
		
	}
	public function Projeto()
	{
		$dados['msgAlert'] = "";
			
		$this->load->view('projeto');
		
	}
	
	public function Cadastro()
	{
		$this->load->library('form_validation');
	
		$dados['msgAlert'] = "";
		$this->form_validation->set_rules('matricula','Matricula', 'required|numeric');
		$this->form_validation->set_rules('senha','Senha', 'required');
		$this->form_validation->set_rules('usuario','Usuario', 'required');
		
		
		if($this->form_validation->run() == TRUE){
					
				
				$matricula  = $_POST['matricula'];
				$senha = $_POST['senha'];
				$usuario = $_POST['usuario'];
				$res = !$this->portfolio->usuario($matricula,$senha, $usuario)? null :  $this->portfolio->Usuario($matricula,$senha,$usuario);
				if($res){
						 $dados['msgAlert'] = "<div class='alert alert-success' role='alert'>
						 Dados cadastrado com sucesso!  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
						 <span aria-hidden='true'>&times;</span>
					   </button></div>";
						
					 }else{
					 	$dados['msgAlert'] = "Erro ao salvar evento no banco de dados!";
					 }
		}		
		$this->load->view('cadastro',$dados);
		
	}
	
	public function Voluntario()
	{
		$dados['msgAlert'] = "";
		
		if(isset($_POST['cadastro_voluntariado'])){
			$descricao = trim($_POST['desc_volutariado']);
			$feedback = trim($_POST['feedback_volutariado']);
			
			
			if(empty($descricao)
			&& empty($feedback)){
					 $dados['msgAlert'] = "ERRO: Preencha todos os campos!";
				}else{
					 $res = $this->portfolio->cadastro_voluntariado($descricao,$feedback);
					 if($res){
						 $dados['msgAlert'] = "<div class='alert alert-success' role='alert'>
						 Dados cadastrado com sucesso!  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
						 <span aria-hidden='true'>&times;</span>
					   </button></div>";
						
					 }else{
					 	$dados['msgAlert'] = "Erro ao salvar evento no banco de dados!";
					 }
				}
		}
		 	
		$this->load->view('volutariado', $dados);
		
	}
	public function Monitoria()
	{
		 	$dados['msgAlert'] = "";
		
		if(isset($_POST['monitoria'])){
			$descricao = trim($_POST['desc_monitoria']);
			$feedback = trim($_POST['feedback_monitoria']);
			
			
			if(empty($descricao)
			&& empty($feedback)){
					 $dados['msgAlert'] = "ERRO: Preencha todos os campos!";
				}else{
					 $res = $this->portfolio->cadastro_monitoria($descricao,$feedback);
					 if($res){
						 $dados['msgAlert'] = "<div class='alert alert-success' role='alert'>
						 Dados cadastrado com sucesso!  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
						 <span aria-hidden='true'>&times;</span>
					   </button></div>";
						
					 }else{
					 	$dados['msgAlert'] = "Erro ao salvar evento no banco de dados!";
					 }
				}
		}
		$this->load->view('monitoria',$dados);
		
	}
	public function Trabalho()
	{	
	
		$msg['msgAlert'] = ""; 
		
		if(isset($_POST['trabalho'])){
			
			
				$novo_nomeMod = null;
				$novo_nomeCod = null;
				$extensao = strtolower(substr($_FILES['modelagem']['name'],-4));	//pega a extensao do arquivo 
				$novo_nomeMod = md5(time()) . $extensao; //define o nome do arquivo
				$diretorio = './upload/'; //define o diretorio para onde enviareamos o arquivo 
			
					move_uploaded_file($_FILES['modelagem']['tmp_name'],$diretorio.$novo_nomeMod); //efetua o upload
				
			
			
			
				$extensao = strtolower(substr($_FILES['codigo']['name'],-4));	//pega a extensao do arquivo 
				$novo_nomeCod = md5(time()) . $extensao; //define o nome do arquivo
				$diretorio = './upload/'; //define o diretorio para onde enviareamos o arquivo  
				move_uploaded_file($_FILES['codigo']['tmp_name'],$diretorio.$novo_nomeCod); //efetua o upload
			
			
						if(!empty($novo_nomeMod) && !empty($novo_nomeCod)){		
							$res = $this->portfolio->cadastro_trabalho($novo_nomeCod,$novo_nomeMod);
						}
					
					
						if($res){
							$msg['msgAlert'] = "<div class='alert alert-success' role='alert'>
							Dados cadastrado com sucesso!  
							<a href='#' class='close'>&times;</a>
						</div>";
							
						}else{
							$msg['msgAlert'] = "Erro ao salvar evento no banco de dados!";
						}
			
				
			
		}
		$this->load->view('trabalho',$msg);	
	}
	public function Atividade()
	{
		$msg['msgAlert'] = "";
		$this->load->view('atividade');
		
	}
	public function Principal()
	{	
		$msg['msgAlert'] = "";
		
		$res = $this->portfolio->getPrincipal();
		
		$dados['valor'] = $res->row() ? $res->row() : null;
		
		$this->load->view('principal',$dados);
		
		
		
	}
	public function Perfil()
	{
						
			$msg['msgAlert'] = "";
	        $this->load->library('form_validation');
			$this->form_validation->set_rules('curso','Curso', 'required');
			$this->form_validation->set_rules('contato','Contato', 'required|numeric');
			$this->form_validation->set_rules('periodo', 'Periodo', 'required');
			$this->form_validation->set_rules('descricao_profissional', 'Descrição','required');	
			if($this->form_validation->run() == TRUE){
				
						
			
		

		 	
			$curso = ($_POST['curso']);
			$contato = ($_POST['contato']);
			$facebook = ($_POST['facebook']);
			$github = ($_POST['github']);
			$linkedin =	($_POST['linkedin']);
			$periodo = ($_POST['periodo']);
			$descricao_pessoal = trim($_POST['descricao_profissional']);
	
			

			$extensao = strtolower(substr($_FILES['imagem']['name'],-4));	//pega a extensao do arquivo 
			$novo_nome = md5(time()) . $extensao; //define o nome do arquivo
			$diretorio = './upload/'; //define o diretorio para onde enviareamos o arquivo  
			move_uploaded_file($_FILES['imagem']['tmp_name'],$diretorio.$novo_nome); //efetua o upload	

				
			$res = $this->portfolio->cadastro_perfil($curso,$contato,$facebook,$github,$linkedin,$periodo,$descricao_pessoal,$novo_nome);
						if($res){
							$msg['msgAlert'] = "<div class='alert alert-success' role='alert'>
							Dados cadastrado com sucesso!  
							<a href='#' class='close'>&times;</a>
						</div>";
							
						}else{
							$msg['msgAlert'] = "Erro ao salvar evento no banco de dados!";
						}
					
		}
			
		$this->load->view('perfil',$msg);
		
	}

	public function Sobre()
	{
		 	
		$this->load->view('sobre');
		
	}

	public function upload(){
		
		$target_dir = "./upload/";
		$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
		$uploadOk = 1;
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
		// Check if image file is a actual image or fake image
		if(isset($_POST["submit"])) {
			$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
			if($check !== false) {
				$msg['msgAlert'] = "File is an image - " . $check["mime"] . ".";
				
				$uploadOk = 1;
			} else {
				$msg['msgAlert'] = "File is not an image.";
				$uploadOk = 0;
			}
		}
		// Check if file already exists
		if (file_exists($target_file)) {
			echo "Sorry, file already exists.";
			$msg['msgAlert'] = "desculpe, arquivo ja existe";
			$uploadOk = 0;
		}
		// Check file size 500KB
		if ($_FILES["fileToUpload"]["size"] > 500000) {
			$msg['msgAlert'] = "Desculpe, arquivo muito grande";
			$uploadOk = 0;
		}
		// Allow certain file formats
		if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
		&& $imageFileType != "gif"  ) {
			$msg['msgAlert'] = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
			$uploadOk = 0;
		}
		// Check if $uploadOk is set to 0 by an error
		if ($uploadOk == 0) {
			$msg['msgAlert'] = "Desculpe, Seu arquivo nao foi enviado.";
		// if everything is ok, try to upload file
		} else {
			if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
				$msg['msgAlert'] = "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
				$msg['msgAlert'] = "<div class='alert alert-success' role='alert'>
							Dados cadastrado com sucesso!  
							<a href='#' class='close'>&times;</a>
						</div>";
			} else {
				$msg['msgAlert'] = "Sorry, there was an error uploading your file.";
			}
		}
	
	$this->load->view('trabalho',$msg);	


	} 

}