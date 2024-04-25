<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# Projeto CRUD Básico

Bem-vindo ao projeto CRUD Básico! Este repositório contém o código-fonte para um CRUD simples em Laravel.

## Clonando o Projeto

Para começar a contribuir ou apenas testar o projeto em seu ambiente local, siga estas etapas simples:

1. Abra seu terminal (ou prompt de comando).
2. Navegue até o diretório onde deseja clonar o projeto.
3. Execute o seguinte comando:
```bash
git clone https://github.com/seu_usuario/crud-basico-laravel.git

````
Configurando o Ambiente
Antes de executar o projeto localmente, você precisará configurar o arquivo .env. Este arquivo contém variáveis de ambiente que são usadas para configurar o ambiente de desenvolvimento. Felizmente, o framework que estamos usando, Laravel, torna isso muito fácil.

Navegue até o diretório do projeto clonado no terminal.
Dentro do diretório do projeto, você encontrará um arquivo chamado .env.example. Faça uma cópia deste arquivo e renomeie-a para .env:
cd .env.example .env

Agora, abra o arquivo .env em um editor de texto e preencha as variáveis ​​com os valores apropriados, como credenciais de banco de dados, configurações de e-mail, etc.
Após preencher as variáveis, salve e feche o arquivo.
O Laravel vem com uma ferramenta de linha de comando chamada Artisan, que simplifica muitas tarefas comuns de desenvolvimento. Aqui estão alguns comandos úteis do Artisan:

1. php artisan serve: Inicia um servidor de desenvolvimento local.
2. php artisan migrate: Executa as migrações de banco de dados pendentes.
3. php artisan make:model NomeDoModelo: Cria um novo modelo.
4. php artisan make:controller NomeDoControlador: Cria um novo controlador.
5. php artisan make:middleware NomeDoMiddleware: Cria um novo middleware.
