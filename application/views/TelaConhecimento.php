<?php $this->load->view("header.php"); ?>
<?php $this->load->view("menu.php"); ?>     
   
    <center><h1 class="well well-sm  ">Tela do conhecimento</h1> 
                <form action="<?php echo base_url(); ?>index.php/Home/TelaConhecimento" method="post"> <!--form para enviar os dados por post  -->
                     <div class="container alert-primary text-dark border border-dark "> 
               
                        <h2 class="well">Insira a linguagem de programação conhecida!</h2>
                        <select id="Selectlinguagem" class="col- position-relative" name="Selectlinguagem">
                                <option selected value="">escolha a opção...</option>
                                <option value="C">C</option>
                                <option value="Java">Java</option>
                                <option value="C#">C#</option>
                                <option value="C++">C++</option>
                                <option value="html">Html</option>
                                <option value="php">Php</option>
                                <option value="css">CSS</option>
                                <option value="Ruby">Ruby</option>
                                <option value="JS">JavaScript</option>
                                <option value="Visualbasic">VisualBasic</option>
                                <option value="python">Python</option>
                                <option value="Shell">Shell</option>
                                <option value="haskell">Haskell</option>
                                <option  value="Outros">Outros</option>
                            </select>
                            <br><br>
                            Se caso escolheu a opção <u>Outros.</u> Digite aqui:<br>
                            <input type="text" id="outras_linguagem" name="outras_linguagem" >
                           
         
                            
                        <br/><br/>
                        <h2>Digite o framework que você conhece!</h2> <br/>
                        <input type="text" id="framework" name="framework">
                       
                        <br/><br/>
                        <button id="button" class="btn btn-dark" style= "width:80px; bottom:20px;" name="TelaConhecimento">Salvar</button>
                        <br>
                    </form>  <br>
					
				<?php  echo $msgAlert; ?>
                  </div></center>
                  <br>
  
		   

<?php $this->load->view('footer.php') ?>