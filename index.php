<html>
    <head>
	  <meta charset="utf-8">
        <title>Calculadora</title> 
	  <link rel="stylesheet" href="css/bootstrap.css">	
	    <script language="javascript" type="text/javascript">
			function validar() {
				var numero1 = formulario.numero1.value;
				var numero2 = formulario.numero2.value;
				
				if(numero1 == "" ){
					alert('Preencha o campo Número 1');
					formulario.numero1.focus();
					
					return false;
				}
				if(numero2 == "" ){
					alert('Preencha o campo Número 2');
					formulario.numero2.focus();
					return false;
				}
				

			}
		</script>	
    </head>
<body>
 

	<div class=" border border-success w-50 text-center mx-auto m-5 shadow ">
		<form method="POST" action="processa.php" id="formulario">
			<center><h1>Calculadora</h1></center>
				<center> 
						<table border = 1 align = center>
							Número 1: 
							<input type=text name=numero1  size=4 id="n1"> <br/>  <br/>
							Número 2: 
							<input type=text name=numero2 size=4 id="n2"> <br/>  <br/>
					
				</center>
							<br>  <br>
							<button type="submit" class="btn btn-warning" name=acao value=soma onclick="return validar()">SOMA</button>
							<button type="submit" class="btn btn-success" name=acao value=subitrair onclick="return validar()">Subtração</button>
							<button type="submit" class="btn btn-warning" name=acao value=multiplicacao onclick="return validar()">Multiplicação</button>
							<button type="submit" class="btn btn-success" name=acao value=dividir onclick="return validar()">Dividir</button>
						</table>
		</form>		
	</div>
</body>
</html>