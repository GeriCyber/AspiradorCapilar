<?php
	$emailError="";
	$send="";
	$salto="\r\n\r\n"; 
	if (isset($_POST['submit'])) 
	{
		$from = 'Email del cliente: '.$_POST['email'];
		$to = 'COLOCAR AQUI EMAIL DONDE QUIEREN RECIBIR LOS PEDIDOS';
		$subject = 'Nuevo Pedido de: '.$_POST['name'];
		$body = 'Pedido: '.$_POST['pedido'].$salto.'Telefono: '.$_POST['telefono'];

		if (!$_POST['email']) 
		{
			$emailError = '<div class="text-danger"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Ingresa una dirección de correo válida</div>';
		}
		if (!$emailError)
		 {
			if (mail($to, $subject, $body, $from)) 
			{
				$send = '<div class="text-success"><i class="fa fa-check-circle" aria-hidden="true"></i> Pedido enviado. Nos comunicaremos contigo muy pronto!</div>';
			}
			else
				$send = '<div class="text-danger"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Lo sentimos, ha ocurrido un error, inténtalo de nuevo.</div>';
		}
	}
?>