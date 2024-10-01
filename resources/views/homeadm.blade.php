@extends('layout')

@section('content')

    <style>
        .welcome-container {
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            margin-top: 50px;
        }

        .welcome-container img {
            max-width: 100%;
            height: auto;
        }

        .welcome-text {
            font-size: 1.5em;
            margin-bottom: 20px;
            width: 30rem;
            align-self: center;
        }

        .container-conteudo {
            margin-top: 200px;
            display: flex;
            justify-content: center;
        }

        img {
            width: 30rem;
        }

    </style>

    <div class="welcome-container">
        <div class="container-conteudo">
            <div class="welcome-text">
                <p>Bem-vindo ao site, onde você pode colocar suas tarefas como prioridade!</p>
            </div>
            <figure>
                <img src="{{ asset('assets/todo.svg') }}" alt="Imagem de Tarefas" />
            </figure>
        </div>
    </div>

@endsection
