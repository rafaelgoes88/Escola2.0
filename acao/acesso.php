<?php 
	// Inicia a sessão
	session_start();
	$_SESSION['usuario'] = 1;
			  // Abre o arquivo com as conexões do BD
				include "../config.php";
			  
			  // Define as variáveis		
				$result = NULL;
				$acao = NULL;
				$query = NULL;        
				$email = $_POST["email"];
				$senha = $_POST["senha"];
				$query = mysqli_query($conexao,"SELECT * FROM usuario WHERE email = '$email' AND senha = '$senha'");      
				$result = mysqli_num_rows($query);
				if($result == 0){
					unset ($_SESSION['pri']);
					echo "<script> alert('Login e/ou Senha não Cadastradas!!'); </script>";
					echo "<script> window.location='../index.html';</script>"; 
				}
				else{
					$registro = mysqli_fetch_row($query);
					$email = $registro[0];
					$senha = $registro[1];
					echo "<script>alert('logado com sucesso');</script>";
					echo "<script> window.location='../usuario.php';</script>";
					
					}
				
?>