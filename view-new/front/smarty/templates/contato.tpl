<div class="row">
	<div class="col-sm-6 col-md-4">
		<div class="jumbotron">
			<h2 class="feature-title">Localização</h2>
			<p><span class="blue"><strong>Escritório em Toque Toque Pequeno</strong></span></p>
			<p>Rua João Marcelino Matos, 05<br />
							São Sebastião, SP
			</p>
			<dl>
				<dt>Telefone:</dt><dd>(12) 3864-9538</dd>
				<dt>Celular:</dt><dd>(11) 9 9823-5986</dd>
				<dt>Email:</dt><a href="mailto:medeiros.imoveis@ig.com.br" class="mail"><dd>medeiros.imoveis@ig.com.br</dd></a>
			</dl>
		</div>
	</div>
	<div class="col-sm-6 col-md-4">
		<h2 class="feature-title">Entre em contato</h2>
		<form id="contact" action="_lib/PHPMailer/mail.php">
			<p class="alert alert-danger error" id="name_error">Por favor, prencha seu nome!</p>
			<p class="alert alert-danger error" id="email_error">Por favor, preencha um email válido!</p>
			<p class="alert alert-danger error" id="fone_error">Por favor, preehcha seu telefone!</p>
			<p class="alert alert-danger error" id="msg_error">Por favor, entre com a mensagem!</p>

			<div class="form-group">
				<input type="text" name="name" id="name" class="form-control" placeholder="Nome" />
			</div>
			<div class="form-group">
				<input type="text" name="email" id="email" class="form-control" placeholder="Email" />
			</div>
			<div class="form-group">
				<input type="text" name="fone" id="fone" class="form-control" placeholder="Telefone"/>	
			</div>
			<div class="form-group">
				<textarea class="form-control" rows="3" name="msg" id="msg" placeholder="Sua mensagem" ></textarea>
			</div>	
			<div class="form-group">
				<input type="submit" name="submit" class="btn btn-default" id="submit_btn" value="Enviar"/>
			</div>
		</form>
	</div>
	<div class="col-sm-6 col-md-4">
		<div class="jumbotron">
			<h2 class="feature-title">Como nos encontrar</h2>
				<p>Aos finais de semana, no plantão de vendas montado em frente ao restaurante pimenta de cheiro.</p>
				<p>Ou em qualquer dia nos meios de contato ao lado.. </p>
				<p>Aliquam accumsan posuere lorem, nec mollis massa venenatis sit amet. Sed mi est, hendrerit eget rutrum in, aliquam sit amet diam. </p>
		</div>
	</div>
</div>
