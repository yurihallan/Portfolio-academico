<?php $this->load->view("header.php"); ?>
<?php $this->load->view("menu.php"); ?>


<?php  echo $msgAlert; ?>
<br>
<div class="container" >
	  <h2>Perfil</h2><hr>
	<form action="<?php echo base_url(); ?>index.php/Home/perfil" method="post" class="border border-dark alert-primary" enctype="multipart/form-data" >
		<div class="form-row">  
				<div class="form-group">
					<div class="col">
					



							<label for="Curso">Curso:</label>
							<input type="text" placeholder="Ciencia da C." class="form-control" name="curso">
						</div>
				</div> 
					
					<br>

				<div class="form-group">
					<div class="col">
					
						<label for="Contato">Contato:</label>
						<input type="text" placeholder="99999999" class="form-control" name="contato">
					</div>
				</div> 

					<br>

					<div class="form-group">
						<div class="col">
							<label for="Facebook">Facebook:</label>
							<input type="text" class="form-control" name="facebook" >
						</div>
					</div>

					<br>

					<div class="form-group ">    
						<div class="col" style=""> 
							<label for="github">GitHub:</label>
							<input type="text"  class="form-control" name="github">
						</div>
					</div>

					<br><br>

					<div class="form-group">     
						<div class="col " > 
							<label for="linkedin">LinkedIn:</label>
							<input type="text" class="form-control" name="linkedin">
						</div>
					</div>

					<br><br>
					<div class="form-group">   
						<div class="col-6" > 
							<label for="periodo">Periodo:</label>
							<input type="number" placeholder="1" class="form-control"name="periodo">
						</div>
					</div>     
				   

					<div class="form-group ">   
						<div class="col-9"> 
							<label for="Descricao">Descrição Profissonal:</label><br>
							<textarea name="descricao_profissional" id="descricao_profissional" cols="90" rows="10"  class="form-control"></textarea>
						</div>
					</div>         

						 
			<div class="text-center">
					<input type="file"  class="rounded" alt="Sem imagem" name="imagem" id="imagem" onchange="previewImagem()"><br>
					<img style="width:150px; height:150px">
					<br>
				
					
				   
				<br><br>
				<div class="form-group "  >
					<div class="col-sm-2">
					<button type="submit" class="btn btn-dark" name="cadastro_perfil"  >Salvar</button>
					</div>
				</div>
				<br><br>
			 
			</div>  
		</div>
	</form>		
	<?php echo validation_errors('<div class="alert alert-danger">','</div>'); ?>
</div>


<script>
$(document).ready(function(){
    $(".close").click(function(){
        $("#myAlert").alert("close");
    });
});


function previewImagem(){
	var imagem = document.querySelector('input[name=imagem]').files[0];
	var preview = document.querySelector('img');
	
	var reader = new FileReader(); 
	 
	 reader.onloadend = function(){
		 preview.src  = reader.result;
	 }
	 
	 if(imagem){
		 reader.readAsDataURL(imagem);
	 }else{
		  preview.src = "";
	 }
}
</script>



<?php $this->load->view('footer.php') ?>