# CATPROD


CRUD de Produtos e Categorias

# Ambiente

Crie uma base de dados com o gerenciador de preferência.
As configurações adicionais para o desenvolvimento local serão inseridas no arquivo **.env.example**. Renomeie o arquivo para **.env** e atribua um valor para as variáveis locais (APP, DB).
Após configurado, execute as migrations e gere uma chave para sua aplicação.

```sh
$ php artisan migrate
$ php artisan key:generate
``` 

# Instalação

Este projeto utiliza [PHP](https://www.php.net/downloads.php) 7.2.5+ para funcionar;

A partir da raiz do projeto, instale as dependências a inicie o servidor com o comando [Artisan](https://laravel.com/docs/8.x/artisan)

```sh
$ composer install
$ php artisan serve
``` 

Uma pequena parte desse projeto utiliza funções Javascript.

[Node.js](https://nodejs.org/) será necessário para utilizar todos os recursos do projeto.
A partir da raiz do projeto, instale as dependências.

```sh
$ npm install
$ npm run dev
``` 

Ou...

```sh
$ npm install && npm run watch
``` 

***Pronto para o uso***
