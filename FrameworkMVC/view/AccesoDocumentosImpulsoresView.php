<!DOCTYPE HTML>
<html lang="es">

      <head>
      
        <meta charset="utf-8"/>
        <title>Acceso Documentos Impulsores - coactiva 2016</title>
        
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		  			   
          <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
	      <script src="//code.jquery.com/jquery-1.10.2.js"></script>
		  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
		
		<link rel="stylesheet" href="http://jqueryvalidation.org/files/demo/site-demos.css">
        <script src="http://jqueryvalidation.org/files/dist/jquery.validate.min.js"></script>
        <script src="http://jqueryvalidation.org/files/dist/additional-methods.min.js"></script>
 		
 		<script src="//cdn.jsdelivr.net/webshim/1.14.5/polyfiller.js"></script>
		
		<script>
		    webshims.setOptions('forms-ext', {types: 'date'});
			webshims.polyfill('forms forms-ext');
		</script>
		
           <!-- AQUI NOTIFICAIONES -->
		<script type="text/javascript" src="view/css/lib/alertify.js"></script>
		<link rel="stylesheet" href="view/css/themes/alertify.core.css" />
		<link rel="stylesheet" href="view/css/themes/alertify.default.css" />
		
		
		
		
		
		
		<!-- TERMINA NOTIFICAIONES -->
        
       <style>
            input{
                margin-top:5px;
                margin-bottom:5px;
            }
            .right{
                float:right;
            }
                
            
        </style>
       
         
	
    </head>
    <body style="background-color: #d9e3e4;">
    
      <?php include("view/modulos/modal.php"); ?>
    
       <?php include("view/modulos/head.php"); ?>
       
       <?php include("view/modulos/menu.php"); ?>
       
       
       
       <?php
       
       
       
		   
		?>
 
  
  <div class="container">
  
  <div class="row" style="background-color: #ffffff;">
  
       <!-- empieza el form --> 
       
      <form action="<?php echo $helper->url("ConsultaDocumentosImpulsores","index"); ?>" method="post" enctype="multipart/form-data"  class="col-lg-12">
       
            
          <div class="col-lg-12" style="margin-top: 20px">
         <h4 style="color:#ec971f;">Acceso Documentos Impulsores</h4>
       	 
       	 <div class="col-lg-4">
  			</div>
       	 
         <div class="panel panel-default">
  			<div class="panel-body">
  			
  			
  			<div class="col-xs-2 ">
			  	<p  class="formulario-subtitulo" >Firmar</p>
			  	<input type="radio"  onclick="window.location='<?php echo $helper->url("ConsultaDocumentosImpulsores","consulta_impulsores"); ?>'" class="form-control"/> 
			 </div>
          
  			<div class="col-xs-2 ">
			  	<p  class="formulario-subtitulo" >Firmados</p>
			  	<input type="radio"  onclick="window.location='<?php echo $helper->url("ConsultaDocumentosImpulsores","consulta_impulsores_firmados"); ?>'" class="form-control"/> 
			</div>
  			
  		 </div>
		   </div>
		   
		<div class="col-lg-4">
  		</div>
  			
            </div>	
		  
          
       </form>
       <!-- termina el form --> 
       
       
        
      </div>
      </div>
  
     </body>  
    </html>   