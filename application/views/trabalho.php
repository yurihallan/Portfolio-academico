<?php include_once('header.php') ?>
<?php $this->load->view("menu.php"); ?>
   

        <center><h1 class="well" >Trabalho</h1> 
        <hr>
            
        
                <h2 >Você possui algum Trabalho para cadastrar ?</h2> 
                
               
                <input type="radio" name="btnEscolha" value="Sim">Sim
                <input type="radio" name="btnEscolha" value="Nao" checked>Nao
                <br><br>
            
              <?php  echo $msgAlert; ?>
            <div id="form_projeto" class="border border-dark w-50 p-3 alert-primary text-dark" >
                <form action="<?php echo base_url(); ?>index.php/Home/trabalho" method="post"  enctype="multipart/form-data" >
                      
                            <h3>Insira seu Codigo aqui!</h3>
                          
                                <span> Codigo: <input type="file" required name="codigo" id="codigo"></span>

                           
                      
                        <br> <br>
                
                            
                      
                            <h3>Insira sua modelagem </h3>
                            
                                <span> Modelagem: <input type="file" required name="modelagem" id="modelagem"></span>
                            
                            
                      <br>
                        <button id="trabalho" class="btn btn-dark" style="left:275px; position:relative" name="trabalho">Salvar</button>
					
                </form>
            </div></center>
			
			
               
      
 <script>
 
    $(document).ready(function(){
		$(".close").click(function(){
			$("#myAlert").alert("close");
		});
	});	
	
    $('#form_projeto').hide();
    $(document).ready(function(){
		$('input[name="btnEscolha"]').change(function(){
			if($('input[name="btnEscolha"]:checked').val() === "Nao") {
			$('#form_projeto').hide('slow');
			} else{
				
				$('#form_projeto').show("slow");
			}
		});
	});    
</script>
 
<?php include_once('footer.php') ?>