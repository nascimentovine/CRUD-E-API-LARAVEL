<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

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
        <div class="flex-center position-ref full-height">
            <div class="content">

                <form method="POST" action="/users/{{ $user->id }}">
                    {!! csrf_field() !!}
                    <input type="text" name="name" value='{{ $user->name }}'>
                    <br>
                    <input type="text" name="username" value='{{ $user->username }}'>
                    <br>
                    <input type="text" name="email" value='{{ $user->email }}'>
                    <br>
                    <input type="text" name="street" value='{{ $user->street }}'>
                    <br>
                    <input type="text" name="suite" value='{{ $user->suite }}'>
                    <br>
                    <input type="text" name="city" value='{{ $user->city }}'>
                    <br>
                    <input type="text" name="zipcode" value='{{ $user->zipcode }}'>
                    <br>
                    <input type="text" name="lat" value='{{ $user->lat }}'>
                    <br>
                    <input type="text" name="lng" value='{{ $user->lng }}'>
                    <br>
                    <input type="text" name="phone" value='{{ $user->phone }}'>
                    <br>
                    <input type="text" name="website" value='{{ $user->website }}'>
                    <br>
                    <input type="text" name="name_company" value='{{ $user->name_company }}'>
                    <br>
                    <input type="text" name="catchPhrase" value='{{ $user->catchPhrase }}'>
                    <br>
                    <input type="text" name="bs" value='{{ $user->bs }}'>
                    <br>
                            
                    {{ method_field('PUT') }}
                    <input type='submit' value="Atualizar"></input>
                    <a href="{{url('/users')}}">Voltar</a>
                </form>
                
            </div>
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
