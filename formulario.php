<!DOCTYPE html>
<html>
<head>
	<link href="css/formulario.css" rel="stylesheet" type="text/css">
	<title></title>
</head>
<body>
	<?php 
		$quantidade1 = 0;
		$quantidade2 = 0;
		$quantidade3 = 0;
		$quantidade4 = 0;
		$quantidade5 = 0;
		$quantidade6 = 0;

		$subtotal1 = 0;
		$subtotal2 = 0;
		$subtotal3 = 0;
		$subtotal4 = 0;
		$subtotal5 = 0;
		$subtotal6 = 0;

		$total = 0;

		$fpagamento = $_POST['fpagamento'];


		switch($fpagamento){
			case 1:
				$pagamento = "Cartão de Crédito";
				break;

			case 2:
				$pagamento = "Cartão de Débito";
				break;
		}

		$parcelas = $_POST['qntParcela'];

		switch($parcelas){
			case 1:
				$nump = 1;
				break;

			case 2:
			$nump = 2;
			break;
			
			case 3:
				$nump = 3;
				break;

			case 4:
				$nump = 4;
				break;

			case 5:
				$nump = 5;
				break;

				
		}


	 ?>

	 <div class="apresentacao">
	 	<div class="segunda">
		 	<div class="foratable">
				<table>
					<tr>
						<th>Produto</th>
						<th>Valor Quantidade</th>
						<th>Qntde</th>
						<th>SubTotal</th>
					</tr>
					<?php 

						if (isset($_POST['prod1'])) {
							$quantidade1 = $_POST['quant1'];
							$subtotal1 = $quantidade1 * 20;
							$total = $total + $subtotal1;

							echo("<tr>");
								echo("<td><center>Sofá</center></td>");
								echo("<td><center>".$quantidade1."</center></td>");
								echo("<td><center>17,00R$</center></td>");
								echo("<td><center>".$subtotal1.",00 R$</center></td>");
							echo("</tr>");
						}

						if (isset($_POST['prod2'])) {
							$quantidade2 = $_POST['quant2'];
							$subtotal2 = $quantidade2 * 40;
							$total = $total + $subtotal2;

							echo("<tr>");
								echo("<td><center>Mesa</center></td>");
								echo("<td><center>".$quantidade2."</center></td>");
								echo("<td><center>17,00R$</center></td>");
								echo("<td><center>".$subtotal2.",00 R$</center></td>");
							echo("</tr>");
						}

						if (isset($_POST['prod3'])) {
							$quantidade3 = $_POST['quant3'];
							$subtotal3 = $quantidade1 * 0;
							$total = $total + $subtotal3;

							echo("<tr>");
								echo("<td><center>Cadeira</center></td>");
								echo("<td><center>".$quantidade3."</center></td>");
								echo("<td><center>17,00R$</center></td>");
								echo("<td><center>".$subtotal3.",00 R$</center></td>");
							echo("</tr>");
						}

						if (isset($_POST['prod4'])) {
							$quantidade4 = $_POST['quant4'];
							$subtotal4 = $quantidade1 * 0;
							$total = $total + $subtotal4;

							echo("<tr>");
								echo("<td><center>Sofá</center></td>");
								echo("<td><center>".$quantidade4."</center></td>");
								echo("<td><center>17,00R$</center></td>");
								echo("<td><center>".$subtotal4.",00 R$</center></td>");
							echo("</tr>");
						}

						if (isset($_POST['prod5'])) {
							$quantidade5 = $_POST['quant5'];
							$subtotal5 = $quantidade5 * 0;
							$total = $total + $subtotal5;

							echo("<tr>");
								echo("<td><center>Sofá</center></td>");
								echo("<td><center>".$quantidade5."</center></td>");
								echo("<td><center>17,00R$</center></td>");
								echo("<td><center>".$subtotal5.",00 R$</center></td>");
							echo("</tr>");
						}

						if (isset($_POST['prod6'])) {
							$quantidade6 = $_POST['quant6'];
							$subtotal6 = $quantidade6 * 0;
							$total = $total + $subtotal6;

							echo("<tr>");
								echo("<td><center>Sofá</center></td>");
								echo("<td><center>".$quantidade6."</center></td>");
								echo("<td><center>17,00R$</center></td>");
								echo("<td><center>".$subtotal6.",00 R$</center></td>");
							echo("</tr>");
						}

					?>

				</table>
				<div>
					<label>Total</label>
					<input type="text" id="total" name="total" readonly="true" value="<?php echo($total) ?>">

				</div>
			</div>

			<div>
				<label>Forma de Pagamento</label>
				<input type="text" id="fpagamento" name="fpagamento" readonly="true" value="<?php echo($pagamento);?>">
				<div>
					<table>
						<tr>
							<th>Parcela</th>
							<th>Data</th>
							<th>Valor</th>
						</tr>	
						<?php
							$data = date('Y-m-d');
							$valor = $total / $nump;
							$valor = number_format($valor,2,'.',"");
							
							for($i = 0 ; $i < $nump ; $i++){
									$add_mes = date('d/m/Y', strtotime($i.'month', strtotime($data)));
									echo("<tr>");
										echo("<td><center>".($i+1)."º</center></td>");
										echo("<td><center>".$add_mes."</center></td>");
										echo("<td><center>".$valor."R$</center></td>");
									echo("</tr>");

						}


						?>
					
					</table>

				</div>
			</div>	
		</div>					
	 </div>

</body>
</html>