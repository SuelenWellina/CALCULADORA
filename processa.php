<html>
    <head>
	  <meta charset="utf-8">
        <title>Calculadora</title>  
		<link rel="stylesheet" href="css/bootstrap.css">	
    </head>
<body>
 <?php
 
	$numero1=$_POST["numero1"];
	$numero2=$_POST["numero2"];
	$acao=$_POST["acao"];
    
	echo "<div class=' border border-success w-50 text-center mx-auto m-5 shadow '>
			<center><h1>Resultado</h1></center>
				<p>";
					
					if ($acao == "soma"){
						$operacao= $numero1+$numero2;
						
						echo "<h2 > A soma foi:  $operacao";
						
					}
					else if ($acao == "subitrair"){
						$operacao= $numero1-$numero2;
						
						echo "<h2> A subitração foi: $operacao";
					}
					else if	($acao == "multiplicacao"){
						$operacao= $numero1*$numero2;
						
						echo "<h2> A multiplicação foi: $operacao";
					}
					else {
						$operacao= $numero1/$numero2;;
						
						echo "<h2> A divisão foi: $operacao";
					}
				
					echo "
				</p>
		</div>";
 ?>
	
</body>
</html>