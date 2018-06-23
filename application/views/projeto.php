<?php include_once('header.php') ?>
<?php $this->load->view("menu.php"); ?>
   

        <center><h1 class="well" >Projeto</h1> 
        
            
        
                <h2 >Você possui algum projeto para cadastrar ?</h2> 
                
               
                <input type="radio" name="btnEscolha" value="Sim">Sim
                <input type="radio" name="btnEscolha" value="Nao" checked>Nao
                <br><br>
            
              
            <div id="form_projeto" class="border alert-primary text-dark w-50 p-3 border border-dark" >
               <?php echo form_open_multipart('/Home/file_upload.php');?>
                    <div > 
                        <h3>Insira seu projeto aqui!</h3>
                        <form  name="file_name" method="POST" enctype="multipart/form-data">
                            <span> Trabalhos (Decisões arquiteturais, Implemtação e Projeto integrado): 
                            <input type="file" required  name="userfile"></span>
                            
                        </form>
                    </div>
                    <br>
                <?php echo form_close();?>     
                        
                    <div >
                        <h3>Descreva sobre o seu projeto</h3>
                        <textarea name="desc_projeto"  class="col-sm-12" id="desc_projeto" cols="30" rows="10"></textarea>
                    </div>
					<br><br>
                    <button id="button" class="btn btn-dark">Salvar</button>
               

            </div></center>
               
      
 <script>
    
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