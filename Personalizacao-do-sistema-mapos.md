######################################################################
### ARBIDSOFTS LTDA
### LUZINEY ARBID LUZ
### CONTATO@ARBIDSOFTS.NET
### 10-01-2022
######################################################################

##### PERSONALIZAÇÃO DO SISTEMA DE ORDEM DE SERVIÇO MAPOS #####

#####    ARQUIVOS E PASTAS QUE PRECISAM SER ALTERADOS     #####

# PASTA RAIZ DO SISTEMA

	> ARQUIVO > index.php

		# ALTERAR A LINHA DO TIMEZONE DE ACORDO COM A REGIÃO DO PAÍS OU CONTINENTE
		# VER A DOCUMENTAÇÃO DO PHP PARA ENCONTRAR A TIMEZONE CORRETA

			> date_default_timezone_set('America/Sao_Paulo');

	> ARQUIVO > banco.sql

		# ABRIR O ARQUIVO NO EDITOR DE TEXTO 'NOTEPAD++' E ALTERAR AS LINHAS:

			> 608 > app_name > NomeDoClientePersonalizado

			> 624 > Alterar as informações do cliente:
				> CEP / RUA / NÚMERO / BAIRRO / CIDADE / ESTADO / TELEFONE / CELULAR

# PASTA install

	> ARQUIVO > settings.json
	
		# ALTERAR A LINHA

			> 2 > title > Colocar o nome do cliente
	
	> PASTA > view

		# AS LINHAS ABAIXO NÃO PRECISAR SER ALTERADAS. APENAS PARA INFORMAÇÃO

			> 10 - arquivo 'favicon.ico' pode ser alterado, tamanho do ícone 48x48px
			> 30 - arquivo 'logo.png' pode ser alterado, tamanho da imagem 300x88px

	> PASTA > assets > images
	
		# OS ARQUIVOS ABAICO DEVEM SER ALTERADOS COM AS IMAGENS DO CLIENTE
			> ARQUIVOS
				> favicon.ico
				> favicon-16x16.png
				> favicon-32x32.png
				> favicon-512x512.fw.png

# PASTA assets

	> PASTA > css
	
		> ARQUIVO > matrix-login.css
	
			# ALTERAR A LINHA 42
		
				> body > background-color > Altera a cor de fundo da página

		> ARQUIVO > matrix-style.css
		
			# ALTERAR A LINHA 56
			
				> background > logo3.png > Altera o logo do cliente, tamanho da imagem 199x60px

	> PASTA > img
	
		# ARQUIVOS DE IMAGEM QUE DEVERÃO SER ALTERADOS CONFORME LOGO DO CLIENTE
		
			> logo.png > Tamanho da imagem 300x88px
			> logo2.png > Tamanho da imagem 180x23px
			> logo3.png > Tamanho da imagem 199x60px
			> logo-emitente.png > Tamanho da imagem 300x130px
			> favicon.png > Tamanho da imagem 48x48px

# PASTA application

	> PASTA > config
	
		> ARQUIVO > config.php
	
			# ALTERAR A LINHA 12
	
				> app_name > Colocar o nome do cliente

		> ARQUIVO > email.php
	
			# ALTERAR AS LINHAS ABAIXO COM AS CONFIGURAÇÕES DO SERVIDOR SMTP DO CLIENTE

				> 4 > smtp_host
				> 5 > smtp_crypto > TLS ou SSL ou VAZIO
				> 7 > smtp_user > E-mail de envio
				> 8 > smtp_pass > Senha do e-mail

	> PASTA > database
	
		> PASTA > seeds
		
			> ARQUIVO > Usuarios.php
			
				# ALTERAR AS LINHAS ABAIXO, COM AS INFORMAÇÕES DO CLIENTE
				
					> 17 > cep
					> 18 > rua
					> 19 > numero
					> 20 > bairro
					> 21 > cidade
					> 22 > estado
					> 23 > email
					> 25 > telefone
					> 26 > celular

			> ARQUIVO > Configuracoes.php
			
				# ALTERAR A LINHA 15
				
					> valor > Colocar o nome do cliente

	> PASTA > views
	
		> PASTA > tema
		
			> ARQUIVO > rodape.php
			
				# ALTERAR A LINHA 3
				
					> href > Colocar a URL do site do cliente

# FIM DO ARQUIVO
######################################################################