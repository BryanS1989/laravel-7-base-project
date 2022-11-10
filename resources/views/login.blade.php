<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>AREASeys</h1>
        @if ($errors->any())
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        @endif

        <form action="{{url('login')}}" method="post" id="loginForm">
            @csrf
            <fieldset>
                <label for="username">
                    username
                    <input type="email" name="username" id="username">
                </label>
                <label for="password">
                    password
                    <input type="password" name="password" id="password">
                </label>
            </fieldset>
            <button type="submit">
                LOGIN
            </button>
        </form>
    </body>
</html>
