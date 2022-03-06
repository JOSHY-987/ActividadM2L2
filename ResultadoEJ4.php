<?php	
	$valor = $_POST['enlace'];

	function ValidacionEnlace($valor)
    {
		if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|](\.)[a-z]{2}/i",$valor)) {
			return false;
		}else{
			return true;
		}
	}

	if (!ValidacionEnlace($valor)) 
    {	
		echo "!Cuidado, estas fastidiando un enlace a una pagina!.";
	}else {
		echo "!Bien! Estas haciendo un favor al mundo del SEO<br><a href='$valor'>CLICK AQUI</a>";;
	}		
?>