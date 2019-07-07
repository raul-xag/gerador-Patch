<!DOCTYPE html>
<html>
	<head>
		<title>Gerador de patch - Qualitor 8.10.08</title>

		<style>
            body{ background-color: #EBEBEB; font-family: Arial;}
            .titulo{ font-style: bold;}
            
            .botao_download{
              background-color: #262626;
              color: white;
              padding: 16px 20px;
              border: none;
              cursor: pointer;
              margin-bottom:10px;
              opacity: 0.8;
              width: 140px;
              padding: 10px;
            }
            
            .botao_limpar{
              background-color: #ab79c7;
              color: white;
              padding: 16px 20px;
              border: none;
              cursor: pointer;
              margin-bottom:10px;
              opacity: 0.8;
              width: 140px;
              padding: 10px;
            }
		</style>
	</head>
	
	<?php require_once("funcoes.php"); ?>
	
	<body>		

		<div align="center">																		
			<form id="forms" method="post">
			<h5 class="titulo" align="center">GERADOR DE PATCH - QUALITOR 8.10.08</h5>
				<!-- FORMULARIO-->													
				<form>					  
					<input type="text" name="name[0]" placeholder="caminho relativo da 8.10.08. Ex: 'html\hd\hdchamado\cadastro_chamado.php' (sem aspas)" size=100>
			  		<br><br>
			  		<input type="text" name="name[1]"  size=100>
			  		<br><br>
			  		<input type="text" name="name[2]" value="<?php echo $name[2];?>" size=100>
			  		<br><br>
			  		<input type="text" name="name[3]" value="<?php echo $name[3];?>" size=100>
			  		<br><br>
			  		<input type="text" name="name[4]" value="<?php echo $name[4];?>" size=100>
			  		<br><br>
			  		<input type="text" name="name[5]" value="<?php echo $name[5];?>" size=100>
			  		<br><br>
			  		<input type="text" name="name[6]" value="<?php echo $name[6];?>" size=100>
			  		<br><br>
			  		<input type="text" name="name[7]" value="<?php echo $name[7];?>" size=100>
			  		<br><br>
			  		<input type="text" name="name[8]" value="<?php echo $name[8];?>" size=100>
			  		<br><br>
			  		<input type="text" name="name[9]" value="<?php echo $name[9];?>" size=100>
			  		<br><br>
			  		
			  		<!--botão "DOWNLOAD"-->
			  		<div style="float:center;">
			  		<input type="submit" id="download_button" class="botao_download" value="Download BAT">			
		  			</div>
		  		</form>
		  	</form>
		  	<!-- BOTAO LIMPAR -->
		  	<div style = "float:center;">
		  		<form method="post">
		  		<input type="submit" class="botao_limpar" value="Limpar">
		  		</form>
		  	</div>

	</body>
</html>