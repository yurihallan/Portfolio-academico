<?php $this->load->view("header.php"); ?>
<?php $this->load->view("menu.php"); ?>

<center><h2>Atividades da faculdade</h2><hr></center>
<div class="container text-dark alert-light" style="background-color: #eee;">
	  
	  
		<h5>Oficina</h5>
		<div class="list alert-primary border border-dark p-3">
		<br>
		<form action="<?php echo base_url(); ?>index.php/Home/atividade" method="post" enctype="multipart/form-data">
			Nome da oficina: <input type="text" >
			<br><br>
			Data da oficina: <input type="date" name="dt_evento" id="dt_evento" style="left:10px; position:relative;">
			<br><br>
			Imagem do certificado: <input type="file" name="oficina_imagem" id="oficina_imagem" onchange="previewImagem()">   
			<br><br> 
			<input type="button" value="Salvar" class="btn btn-dark"  style="  position:relative; left: 90%; bottom:10px;"> 
			<br><br>
			<img style="width:150px; height:150px; right:15%; left:30%; bottom:30%; position:absolute;">
			</div>
		</form>
	<hr>
		<h5>Minicursos</h5>
		<div class="list alert-primary border border-dark p-3">
		<br>
		<form action="<?php echo base_url(); ?>index.php/Home/atividade" method="post" enctype="multipart/form-data">
				Nome do minicursos: <input type="text">
				<br><br>
				Data do minicursos: <input type="date" name="dt_evento" id="dt_evento">
				<br><br>
				Imagem do certificado: <input type="file" name="minicurso_imagem" id="minicurso_imagem" onchange="previewImagem()">  
				<br><br> 
				<input type="button" value="Salvar" class="btn btn-dark"  style="  position:relative; left: 90%; bottom:10px;" >
				<br><br>
				<img name="foto_minicurso" id="foto_minicurso" style="width:150px; height:150px; right:15%; left:30%; top:100%; position:absolute;">				
				</div>
				
		</form>		
	<hr>
		<h5>Palestras</h5>
		<div class="list alert-primary border border-dark p-3">
		<br>
		
		<form action="<?php echo base_url(); ?>index.php/Home/atividade" method="post" enctype="multipart/form-data">
			Nome da palestra: <input type="text">
			<br><br>
			Data da palestra: <input type="date" name="dt_evento" id="dt_evento">
			<br><br>
			Imagem do certificado: <input type="file" name="palestra_imagem" id="palestra_imagem" onchange="previewImagem()">  
			<br><br>  
			<input type="button" value="Salvar" class="btn btn-dark"  style="  position:relative; left: 90%; bottom:10px;"> 
			<br><br>
			<img name="foto_Palestra" id="foto_Palestra" style="width:150px; height:150px; right:15%; left:30%; top:155%; position:absolute;">
			</div>
		</form>    
		<br>
</div>

<script>

 function previewImagem(){
	var imagem = document.querySelector('input[name=oficina_imagem]').files[0];
	var imagem1 = document.querySelector('input[name=minicurso_imagem]').files[0];
	var imagem2 = document.querySelector('input[name=palestra_imagem]').files[0];
	var preview = document.querySelector('img');
	var preview1 = document.querySelector('img[name=foto_minicurso]');
	var preview2 = document.querySelector('img[name=foto_Palestra]');
	
	var reader = new FileReader(); 
	 
	
	 
	 if(imagem){
			 reader.onloadend = function(){
				 preview.src  = reader.result;
			 }
		 
		 reader.readAsDataURL(imagem);
		 
		 
	 }else if(imagem1){
		reader.onloadend = function(){
			preview1.src  = reader.result;
	    }
		 
		 reader.readAsDataURL(imagem1);
	 }else if(imagem2){
		reader.onloadend = function(){
			preview2.src  = reader.result;
		}
		 
		 
		 reader.readAsDataURL(imagem2);
	 }else{
		  preview.src = "";
	}
}
</script>
<?php $this->load->view('footer.php') ?>