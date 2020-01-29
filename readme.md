# Teste-API MOBLY

Aplicação respeita os requisitos contidos na descrição do teste. Exibindo o catalogo de usuários e fazendo as respectivas interações, gravando tudo em um banco de dados criado no MySQL. 


Abaixo alguns requisitos para rodar a aplicação localmente sem maiores problemas:

- Ter instalado as versões 5.8 do Laravel e >7.2 PHP
- Ter instalado o composer
- Ter instalado GuzzleHttp via composer
- Criar um banco de dados MySQL local, com o nome mobly, para nao ter problemas na execução das migrations


## Inicializando a aplicação

- Navegue até a pasta mobly:  <b>$ cd mobly</b>
- Execute as migrations (Lembre-se de antes ter criado um BD local com o nome mobly): <b> $ mobly php artisan migrate </b>
- Suba o servidor local: <b> $ mobly php artisan serve </b>

## Endpoits API
- Todos os usuários: <b>/api/users</b>
- Usuário específico: <b>/api/users/{id}</b>
- Posts de um usuário: <b>/api/users/{id}/posts</b>

<br><br><br>
- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).


## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-source software licensed under the [MIT license](https://opensource.org/licenses/MIT).
