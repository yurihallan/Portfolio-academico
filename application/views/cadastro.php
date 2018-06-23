<?php $this->load->view("header.php"); ?>



<?php if(isset($msgAlert)): echo  $msgAlert; endif?>
<br>

<div class="container">
  <h2>Formulario de cadastro</h2>
  <form   class="position-relative"  method="post" action="<?php echo base_url(); ?>index.php/Home/cadastro">
    <div class="form-group ">
      <label for="usuario">Usuario:</label>
      <input type="text" class="form-control w-50 p-3" id="usuario" name="usuario" placeholder="Digite seu usuario">
    </div>
    <div class="form-group">
      <label for="matricula">Matricula:</label>
      <input type="text" class="form-control w-50 p-3" id="matricula" name="matricula" placeholder="Digite seu matricula">
    </div>
	 <div class="form-group">
      <label for="senha">Senha:</label>
      <input type="password" class="form-control w-50 p-3" id="senha" name="senha" placeholder="Digite seu senha">
    </div>
   
    <button type="submit" class="btn btn-primary" onclick="move()">Registrar</button>
	  <?php echo validation_errors('<div class="alert alert-danger">','</div>'); ?>
	
	   <a href="<?php echo base_url(); ?>index.php/Home/login"  class="btn btn-primary">Voltar</a>
  </form>
</div>

<?php $this->load->view('footer.php') ?>

