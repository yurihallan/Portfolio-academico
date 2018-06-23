<?php $this->load->view("header.php"); ?>
<?php $this->load->view("menu.php"); ?>

<h2>TELA PRINCIPAL</h2><hr>  <?php if(isset($msgAlert)): echo  $msgAlert; endif?>
<div class="alert-primary">
	<div class="container">
  
   
    <div class="row">
      <div class="col-sm" style="right:30px;" >
        <br>
        <img type="image" src="<?php echo base_url(); ?>assets/img/usuario.jpg" class="rounded float-left" style="width:150px; " alt="imagem nao existe">

      </div>

      
     <div class="col-sm" style="right:37%; top:25px;  position:relative;">
        <label for="name">Nome:</label>					 
        <input type="text" name="nome" id="nome" value="<?php if(isset($valor->usuario)): echo  $valor->usuario; endif?>"   class="form-control" style="width:109%; ">
      </div>
    </div>


    <div class="row ">
      
         
      <div class="col-sm" style="left:13%; bottom:25px; position:relative;  ">
          <label for="Contato">Contato:</label>
          <input type="Contato" name="contato" id="contato"  class="form-control"  style="width:66%;" value="<?php if(isset($valor->contato)): echo  $valor->contato; endif?>">
        </div>

        <div class="col-sm" style=" position:relative; bottom:25px;">
        <label for="periodo">Periodo:</label>
        <input type="number" name="periodo" id="periodo"  class="form-control" value="<?php if(isset($valor->periodo)): echo  $valor->periodo; endif?>" style="width:30%; position:relative;">
      </div>
    </div>  
      
      
    <div class="row">  
      <div class="col-sm"  style="left:13%; position:relative;">
          <label for="Name">Curso:</label>
          <input type="text" name="nome" id="curso"  class="form-control" value="<?php if(isset($valor->curso)): echo  $valor->curso; endif?>" style="width:66%; position:relative; ">
        </div>
        <div class="col-sm" style="bottom:90%; position:relative;">
          <label for="gitHub">GitHub:</label>
          <input type="text" name="github" id="github"  class="form-control" value="<?php if(isset($valor->github)): echo  $valor->github; endif?>" style="width:69%;  ">
        </div>
    </div>

    <br>
    <div class="row">  
      <div class="col-sm"  style="left:13%; position:relative;">
          <label for="Facebook">Facebook:</label>
          <input type="text" name="nome" id="facebook"  class="form-control" value="<?php if(isset($valor->facebook)): echo  $valor->facebook; endif?>" style="width:66%; position:relative; ">
        </div>
        <div class="col-sm" style="bottom:90%; position:relative;">
          <label for="Linkedin">LinkedIn:</label>
          <input type="text" name="linkedin" id="linkedin"  class="form-control" value="<?php if(isset($valor->linkedin)): echo  $valor->linkedin; endif?>" style="width:69%;  ">
        </div>
    </div>

    <br>
    <div class="row">
      <div class="col-sm ">
        <label for="Descricao">Descrição Profissonal:</label>
        <textarea type="text" name="Descricao" id="descricao" cols="30" rows="10"  class="form-control"><?php if(isset($valor->descricao_pessoal)): echo  $valor->descricao_pessoal; endif?> </textarea>
      
      </div>
    </div>

    <br>
  </div>

  <hr>
  <!-- aqui comeca a aparte Tela do Conhecimento --> 
  <center>
  <div class="row" >
    <div class="col-sm" >
      <h5 style="position:center; color:black;"><b> Tela do Conhecimento </b></h5>
    </div>
  </div></center>
<!-- $TelaConheciemnto->outras_linguagem -->
	<div class="row" >
		<div class="col-sm-6 "  >
		  <table class="table table-striped table-dark" style="position:relative; left:50%;">
			<thead>
			  <tr>
				<th>Linguagem escolhida</th>
				
				
			  </tr>
			</thead>
			<tbody>
			
			<tr>
				<td><?php if(isset($valor->programacao)): echo  $valor->programacao; endif?></td>
			</tr>
			
			</tbody>
		  </table>
		</div>
	</div>

	<!-- framework -->
	<div class="row" >
		<div class="col-sm-6 "  >
		  <table class="table table-striped table-dark" style="position:relative; left:50%;">
			<thead>
			  <tr>
				<th>framework escolhido</th>
				
				
			  </tr>
			</thead>
			<tbody>
			 
			  <tr>
				<td><?php if(isset($valor->framework)): echo  $valor->framework; endif?></td>
			  </tr>
		
			</tbody>
		  </table>
		</div>
	</div>

<hr>

	<!-- comeca o voluntariado -->
	<center>
	  <div class="row" >
		<div class="col-sm" >
		  <h5 style="position:center; color:black;"><b> Tela de Voluntariado </b></h5>
		  <label for="descricao" style="right:17%; position:relative;">Descrição sobre voluntáriado</label>
		  <textarea name="desc_volutariado" id="desc_volutariado" style="width:50%;" class="form-control"> 
		  <?php if(isset($valor->descricao)): echo  $valor->descricao; endif?>
		  </textarea>
		</div>
  </div></center>

  <br>  

  <center>
  <div class="row" >
    <div class="col-sm" >
    <label for="feedback" style="right:17%; position:relative;">Feedback sobre voluntáriado</label>
      <textarea name="feedback_volutariado" id="feedback_volutariado" style="width:50%;" class="form-control"> 
      <?php if(isset($valor->feedback)): echo  $valor->feedback; endif?>
      </textarea>
    </div>
  </div></center>


  <hr>

	<!-- comeca o monitoria -->
	<center>
	  <div class="row" >
		<div class="col-sm" >
		  <h5 style="position:center; color:black;"><b> Tela de Monitoria </b></h5>
		  <label for="descricao" style="right:18%; position:relative;">Descrição sobre monitoria</label>
		  <textarea name="desc_volutariado" id="desc_monitoria" style="width:50%;" class="form-control"> 
		  <?php if(isset($valor->descricao)): echo  $valor->descricao; endif?>
		  </textarea>
		</div>
	  </div></center>

  <br>  

	  <center>
	<div class="row" >
		<div class="col-sm" >
		<label for="feedback" style="right:18%; position:relative;">Feedback sobre monitoria</label>
		  <textarea name="feedback_volutariado" id="feedback_monitoria" style="width:50%;" class="form-control"> 
		  <?php if(isset($valor->feedback)): echo  $valor->feedback; endif?>
		  </textarea>
		</div>
  </div></center>
 
	<br>
</div>
<?php $this->load->view('footer.php') ?>