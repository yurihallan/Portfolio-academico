<?php $this->load->view("header.php"); ?>
<?php $this->load->view("menu.php"); ?>        
    
    
    <br>
    <form action="<?php echo base_url(); ?>index.php/Home/Voluntario" method="post">
        
        <div class="container alert-primary text-dark borde admonitionr border-dark">
            <h2>Voluntáriado</h2>
            <p><b> Insira sua descrição sobre voluntáriado</b></p>
           
                <div class="form-group">
                <textarea class="form-control " rows="5" id="desc_volutariado " placeholder="Comentário..." name="desc_volutariado"></textarea>
                </div>
           
        
    
       
                
            <p><b>Insira seu Feedback sobre voluntáriado</b></p>
               
                    <div class="form-group">
                    <textarea class="form-control" rows="5" id="feedback_volutariado" placeholder="Comentário..." name="feedback_volutariado" ></textarea>
                    </div>
                
            
            <input type="submit" class="btn btn-dark" name="cadastro_voluntariado" id="cadastro_voluntariado" value="ENVIAR" />    
			
			<?php echo $msgAlert;?>
			
        </div>
		
    </form>

			
            <br><br>
        
      


          
        
       
<?php $this->load->view('footer.php') ?>