<!DOCTYPE HTML>
<html lang="es">

      <head>
      
        <meta charset="utf-8"/>
        <title>Impresion Auto Pago- coactiva 2016</title>
        
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
		
        
        
       <style>
            input{
                margin-top:5px;
                margin-bottom:5px;
            }
            .right{
                float:right;
            }
                
            
        </style>
       
      <script >
		$(document).ready(function(){

		    // cada vez que se cambia el valor del combo
		    $("#buscar").click(function() 
			{
		   
		    	var contenido_busqueda= $("#contenido_busqueda").val();
		    
		   				
		    	if (contenido_busqueda== "")
		    	{
			    	
		    		$("#mensaje_nombres").text("Introduzca un tipo de busqueda");
		    		$("#mensaje_nombres").fadeIn("slow"); //Muestra mensaje de error
		            return false;
			    }
		    	else 
		    	{
		    		$("#mensaje_nombres").fadeOut("slow"); //Muestra mensaje de error
		            
				}
		    	
		    	

			
		    					    

			}); 


		 
				
				$( "#contenido_busqueda" ).focus(function() {
					$("#mensaje_nombres").fadeOut("slow");
    			});
				
			
		
				
		
		      
				    
		}); 

	</script>
    
    </head>
    <body style="background-color: #d9e3e4;">
    
       <?php include("view/modulos/head.php"); ?>
       
       <?php include("view/modulos/menu.php"); ?>
       
       
       
       <?php
       $resultMenu=array(0=>"Identificacion",1=>"Titulo Credito",2=>"Juicio");
     	 		 
     			
     	
		   
		?>
 
  
  <div class="container">
  
  <div class="row" style="background-color: #ffffff;">
  
     
      <form action="<?php echo $helper->url("ImpresionAutoPago","index"); ?>" method="post" enctype="multipart/form-data"  class="col-lg-12">
    
    <div class="col-lg-5">
    <?php if ($resultEdit !="" ) { foreach($resultEdit as $resEdit) {?>
           <?php //no hay datos para editar?>
        
            <?php } } else {?>
		     
		      <h4 style="color:#ec971f;">Impresion Auto Pago</h4>
            	<hr/>
		     
		     <div class="row">
			    
			  <div class="col-xs-4 col-md-4">
			  	<p  class="formulario-subtitulo" >Selecione filtro</p>
			  	<select name="criterio_busqueda" id="criterio_busqueda"  class="form-control" >
					<?php foreach($resultMenu as $val=>$desc) {?>
						<option value="<?php echo $val; ?>"  ><?php echo $desc ?> </option>
			        <?php } ?>
				</select> 			  
			  </div>
		    
		     
             	
             	
		    <div class="col-xs-6 col-md-6">
		    	<p  class="formulario-subtitulo" style="color: #ffffff;" >--</p>
			  <input type="text" name="contenido_busqueda" id="contenido_busqueda" value="" class="form-control"/>
			  <div id="mensaje_nombres" class="errores"></div>
			  </div>
			  
			<div class="col-xs-12 col-md-12" style="margin-top: 20px; text-align: center;" >
		
			  	<input type="submit" id="buscar" name="buscar"  value="Buscar" class="btn btn-default"/>
			</div>
			
			  </div>
             	
             	
             	
             	
             	
             	
             	
		     <?php } ?>
    </div>
    
    
    <div  class="col-lg-7">
     <h4 style="color:#ec971f;">Lista de titulo</h4>
            <hr/>
    		
		<div class="col-xs-12" style="margin: 5px;">	

	</div>
	
	<div class="col-xs-12">
      
      
        
       <section   style="height:400px;overflow-y:scroll;width: 655px;">
        <table class="table table-hover ">
	         <tr >
	    		
	    		
	    		<th style="color:#456789;font-size:80%;">Titulo Credito</th>
	    		<th style="color:#456789;font-size:80%;">Juicio</th>
	    		<th style="color:#456789;font-size:80%;">Identificacion</th>
	    		<th style="color:#456789;font-size:80%;">Nombres Clientes</th>
	    		<th style="color:#456789;font-size:80%;">Total</th>
	    		<th style="color:#456789;font-size:80%;">Fecha Corte</th>
	    		<th style="color:#456789;font-size:80%;">Fecha Emision</th>
	    		<th style="color:#456789;font-size:80%;">Nombre Estado</th>
	    		<th style="color:#456789;font-size:80%;">Usuario Asignado</th>
	    		<th style="color:#456789;font-size:80%;"></th>
	    		
	    		<th></th>
	    		<th></th>
	  		</tr>
            
	            <?php if (!empty($resultDatos)) {  foreach($resultDatos as $res) {?>
	        		<tr>
	        
	                   <td style="color:#000000;font-size:80%;"> <?php echo $res->id_titulo_credito; ?></td>
		               <td style="color:#000000;font-size:80%;"> <?php echo $res->juicio_referido_titulo_credito; ?>     </td> 
		               <td style="color:#000000;font-size:80%;"> <?php echo $res->identificacion_clientes; ?>  </td>
		               <td style="color:#000000;font-size:80%;"> <?php echo $res->nombres_clientes; ?>  </td>
		               <td style="color:#000000;font-size:80%;"> <?php echo $res->total; ?>  </td>
		               <td style="color:#000000;font-size:80%;"> <?php echo $res->fecha_corte; ?>  </td>
		               <td style="color:#000000;font-size:80%;"> <?php echo $res->fecha_emision; ?>  </td>
		               <td style="color:#000000;font-size:80%;"> <?php echo $res->nombre_estado; ?>  </td>
		               <td style="color:#000000;font-size:80%;"> <?php echo $res->nombre_usuarios; ?>  </td>
		            <td>
			           		<div class="right">
			                    <a href="" onclick="window.open('<?php echo $helper->url("ImpresionAutoPago","ReporteImpresionAutoPago"); ?>')" class="btn btn-warning" style="font-size:65%;">VER</a>
			                </div>
			            
			          </td>  
		          <!-- <?php //echo $helper->url("ImpresionAutoPago","ReporteImpresionAutoPago"); ?>&id_auto_pagos=<?php //echo $res->id_titulo_credito; ?>" -->
		          
		    		</tr>
		        <?php } } ?>
		        
      
        
            
            
       	</table>     
		     
      </section>
        
        </div>
       
        
    </div>
    
    </form>
  

    </div>
   </div>
     </body>  
    </html>   