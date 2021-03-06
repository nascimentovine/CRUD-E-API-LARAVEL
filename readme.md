# CRUD E API-REST PHP/LARAVEL

Aplicação exibe um catalogo de usuários e faz as respectivas interações, gravando tudo em um banco de dados criado no MySQL. 


Abaixo alguns requisitos para rodar a aplicação localmente sem maiores problemas:

- Ter instalado as versões 5.8 do Laravel e >7.2 PHP
- Ter instalado o composer
- Ter instalado GuzzleHttp: composer require guzzlehttp/guzzle
- Executar: composer update --no-scripts
- Criar um banco de dados MySQL local, com o nome mobly, para nao ter problemas na execução da migration


## Inicializando a aplicação

- Navegue até a pasta mobly do repositório clonado:  <b>$ cd mobly</b>
- Execute a migration (Aqui os usuários e posts seram importados e inseridos na base de dados): <b> $ php artisan migrate </b>
- Suba o servidor local: <b> $ php artisan serve </b>

Após seguir as instruções acima, ja poderá acessar a aplicação http://localhost:8000/

## Endpoits API
- Todos os usuários: <b>/api/users</b>
- Usuário específico: <b>/api/users/{id}</b>
- Posts de um usuário: <b>/api/users/{id}/posts</b>


<h6>Qualquer dúvida ou problema na execução estou a disposição, basta abrir uma issue ou me contatar (nascimento.vines@gmail.com)</h6>

<br><br><br><hr>


## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-source software licensed under the [MIT license](https://opensource.org/licenses/MIT).
