<!DOCTYPE html>
<html>
	<head>
		<title>site</title>
		<meta charset="UTF-8">
		  <link rel="stylesheet" type="text/css" href="stile.css">
	</head>
        <body>
            <div id="pagina" style="width: 100%; height: 100%">
		<header  style="background-color: white; border: solid black;">
                    <div>
                        <a href="site.php"><img src="logo.png" style="padding-left: 10px"></a>
                                <h1 style="color: #0d2c54">Trabalho de Linguagem de Programacao II</h1>
			</div>
		</header>
		<div id="botoes">
			<form name="dados" action="site.php" method="post">
				<button name="categoria">Cadastrar Doenca</button>
				<button name="produto">Cadastrar Paciente</button>
                                <button name="produto">Consulta Paciente</button>
			</form>
                    
		</div>
		<article style="margin-right: 1%;bottom: 0; height: 100%;background-color: #B8E7F1; width: 100%; height: 420px">
		<h2 style="background-color: #0d2c54; color: white">Sistema de Pacientes</h2>
				<?php
				if(isset($_POST['reg'])){
					?>
					<form name='login' action='verificalogin.php' method='post'>
                        <label>
                            Usuário:
                            </br>			
                            <input type="text" name="login" required />
                            </br>
                            </br>
                        </label>
                        <label>
                            Senha:
                            </br>
                            <input type="password" name="senha" required />
						</label>
                            </br>
                            </br>
							<label>
							Confirme a senha:
							</br>
							<input type="password" name="senhaconfirm" required />
							</label>
                            </br>
                            </br>
                            <input id="envio" type="submit" name="reg" value="Registrar">
                        </label>
                    </form>
					<?php
				}else{
				?>
				<form name='login' action='verificalogin.php' method='post'>
                        <label>
                            Usuário:
                            </br>			
                            <input type="text" name="login" required />
                            </br>
                            </br>
                        </label>
                        <label>
                            Senha:
                            </br>
                            <input type="password" name="senha" required />
                            </br>
                            </br>
                            <input id="envio" type="submit" name="log" value="Entrar">
                        </label>
                    </form>
					<form name='registro' action='index.php' method='post'>
						<input id="envio" type="submit" name="reg" value="Registrar">
					 </form>
				<?php
				}
				?>
            </article>
            <footer style="margin-right: 1%; padding-right: 0; bottom:0; width:100%;background-color: #0d2c54">
			<h3>&#174 Todos os direitos reservados</h3>
		</footer>
		</div>
	</body>
</html>