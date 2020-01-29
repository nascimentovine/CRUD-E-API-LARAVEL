<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

        <title>Alterar Usuário</title>

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
            <br><br>
            <h3>Alterar Usuário</h3><hr>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif            
            <form method="POST" action="/users/{{ $user->id }}">
                {!! csrf_field() !!}                
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="name">Nome</label>
                        <input type="text" class="form-control" id="name" name="name" value='{{ $user->name }}'>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" name="username" value='{{ $user->username }}'>
                    </div>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="text" class="form-control" name="email" value='{{ $user->email }}'>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="street">Rua:</label>
                        <input type="text" class="form-control" name="street" value='{{ $user->street }}'>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="suite">Número:</label>
                        <input type="text" class="form-control" name="suite" value='{{ $user->suite }}'>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="city">Cidade:</label>
                        <input type="text" class="form-control" name="city" value='{{ $user->city }}'>
                    </div>  
                    <div class="form-group col-md-2">
                        <label for="zipcode">CEP:</label>
                        <input type="text" class="form-control" name="zipcode" value='{{ $user->zipcode }}'>   
                    </div>                                                        
                </div>   
                <div class="form-row">
                    <div class="form-group col-md-3">
                        <label for="lat">Latitude:</label>
                        <input type="text" class="form-control" name="lat" value='{{ $user->lat }}'>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="lng">Longitude:</label>
                        <input type="text" class="form-control" name="lng" value='{{ $user->lng }}'>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="phone">Telefone:</label>
                        <input type="text" class="form-control" name="phone" value='{{ $user->phone }}'>
                    </div>  
                    <div class="form-group col-md-3">
                        <label for="website">Web site:</label>
                        <input type="text" class="form-control" name="website" value='{{ $user->website }}'>   
                    </div>                                                        
                </div>         
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="name_company">Empresa:</label>
                        <input type="text" class="form-control" name="name_company" value='{{ $user->name_company }}'>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="catchPhrase">catchPhrase:</label>
                        <input type="text" class="form-control" name="catchPhrase" value='{{ $user->catchPhrase }}'>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="bs">Bs:</label>
                        <input type="text" class="form-control" name="bs" value='{{ $user->bs }}'>
                    </div>                                                       
                </div>   
                {{ method_field('PUT') }}
                <input style="float: right;" type="submit" class="btn btn-primary" value="Alterar">
                <a style="float: right;" class="btn btn-danger mr-2" href="{{url('/users')}}">Voltar</a>
            </form>
        </div>
    </body>
</html>
<script type="text/javascript">
    <?php
    if(isset($message)){
        ?>alert("{{$message}}");<?php
    }
    ?>

</script>
