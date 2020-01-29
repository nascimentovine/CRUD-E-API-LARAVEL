<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <title>Usuários</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <br><br>
                <h2>Usuários</h2>
                <hr><br><br>
                <a href="create/" style='float: right;'class="btn btn-success">Cadastrar Usuário</a><br><br>
                <table class="table table-hover table-bordered">
                    <thead>
                        <tr>
                            <th>Usuário</th>
                            <th colspan="3">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($users as $user)
                            <tr>
                                <td>{{ $user->name }}</td>
                                <td><a class="btn btn-warning " href="users/{{ $user->id }}/posts">Visualizar Posts</a></td>
                                <td><a class="btn btn-primary btn-sm" href="users/{{ $user->id }}">Editar</a></td>
                                <td>
                                    <form method="POST" action="/users/{{ $user->id }}">
                                        {!! csrf_field() !!}
                                        
                                        {{ method_field('DELETE') }}
                                        <input type='submit' class="btn btn-danger btn-sm" value="Apagar"></input>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <p>Sem Usuários Cadastrados</p>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </body>
</html>
