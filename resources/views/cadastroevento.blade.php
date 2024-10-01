@extends('layout')

@section('content')

    <style>
        .container {
            display: flex;
            flex-direction: column;
            gap: 20px;
            background-color: #f8f9fa;
            padding: 50px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #343a40;
            font-size: 30px;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        form button {
            width: 200px;
            align-self: start;
        }

        .form-container {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }


    </style>

    <div class="container mt-5">
        <h2>Liste suas tarefas</h2>
        <form method="post" action="{{ route('cadastra-evento') }}">
            @csrf
            <div class="form-container">
                <div class="form-group">
                    <label for="nomeEvento">Nome da Tarefa</label>
                    <input type="text" class="form-control" id="nomeEvento" name="nomeEvento" placeholder="Digite o nome da tarefa" required>
                </div>
                <div class="form-group">
                    <label for="dataEvento">Data da tarefa</label>
                    <input type="date" class="form-control" id="dataEvento" name="dataEvento" required>
                </div>
                <div class="form-group">
                    <label for="localEvento">Local da Tarefa</label>
                    <input type="text" class="form-control" id="localEvento" name="localEvento" placeholder="Digite o local da tarefa" required>
                </div>
                <div class="form-group">
                    <label for="imgEvento">Imagem da Taref   (URL)</label>
                    <input type="url" class="form-control" id="imgEvento" name="imgEvento" placeholder="Digite a URL da imagem" required>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Cadastrar Evento</button>
        </form>
    </div>

@endsection
