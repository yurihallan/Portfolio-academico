<?php $this->load->view("header.php"); ?>
<?php $this->load->view("menu.php"); ?>
        
    
   
        
        <div class="container alert-primary text-dark border ">
            <h2>Monitoria</h2>
            <p><b> Insira sua descrição sobre a monitoria</b></p>
            <form action="<?php echo base_url(); ?>index.php/Home/monitoria" method="post"  >
                <div class="form-group">
                <textarea class="form-control " rows="5" id="desc_monitoria" placeholder="Comentário..." name="desc_monitoria"></textarea>
                </div>
            
    
       
            
             <p><b>Insira seu Feedback sobre a monitoria</b></p>
            
                <div class="form-group">
                <textarea class="form-control" rows="5" id="feedback_monitoria" placeholder="Comentário..." name="feedback_monitoria" ></textarea>
                </div>
          
		<?php  echo $msgAlert; ?>
				<button type="submit" class="btn btn-dark" name="monitoria" style=" float:right; position:relative; right: 10px; ">Salvar</button>
				<br><br>
				
			</form>
        </div>


          
        
       
<?php $this->load->view('footer.php') ?>