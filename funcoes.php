<?php
	$name = array();

	//FUNCAO QUE PEGA A INFORMACAO DO FORMULARIO
	if (isset($_POST['name'])) {
		$name = $_POST['name'];
	}
	
	//CONVERSAO '/' PARA '\'
	$i=0;
	for($i;$i<10;$i++){
	    if ($name[$i] !=""){
	        $name[$i]= str_replace("/","\\",$name[$i]);
	    }
	}


	//GERAR ARQUIVO
	
	$myfile = fopen("gerar_patch_qualitor.bat", "w") or die("Unable to open file!");
	
	$txt = "cd\ \n" . PHP_EOL;
	fwrite($myfile, $txt);
	fclose($myfile);
	
	$i = 0;
	for($i;$i<=9;$i++){
	    if($name[$i] !=""){
	        $myfile = fopen("gerar_patch_qualitor.bat", "a") or die("Unable to open file!");
	        $txt = "xcopy C:\inetpub\wwwroot\8.10.08\\$name[$i] C:\Users\%USERNAME%\Desktop\8.10.08\\$name[$i]* \n" . PHP_EOL;
	        fwrite($myfile, $txt);
	        fclose($myfile);
	    }
	}
	
	
	
	if ($name != NULL) {
    	//DOWNLOAD
	    $filename = 'gerar_patch_qualitor.bat'; // of course find the exact filename....
    	header('Pragma: public');
    	header('Expires: 0');
    	header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
    	header('Cache-Control: private', false); // required for certain browsers
    	header('Content-Type: application/pdf');
    	
    	header('Content-Disposition: attachment; filename="'. basename($filename) . '";');
    	header('Content-Transfer-Encoding: binary');
    	header('Content-Length: ' . filesize($filename));
    	
    	readfile($filename);
    	
    	$name=NULL;    //se o usuario der refresh: nao gera um download
    	exit;
	}
?>