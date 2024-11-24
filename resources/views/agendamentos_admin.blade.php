<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body {
            height: 100vh;
            font-family: 'Nunito', sans-serif;
            display: flex;
            flex-direction: column;
        }

        .header {
            width: 100%;
            height: 80px;
            position: fixed;
            top: 0;
            left: 0;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 1rem;
            background-color: #7c137b;
            z-index: 100;
        }

        .nomeUsuario {
            margin-right: 10px;
            color: white;
        }

        .header_toggle {
            color: white;
            font-size: 1.5rem;
            cursor: pointer;
        }

        .profile_container {
            display: flex;
            align-items: center;
        }

        .l-navbar {
            position: fixed;
            top: 0;
            left: 0;
            width: 250px;
            height: 100vh;
            background-color: #7c137b;
            padding: 0.5rem 1rem;
            transition: 0.3s;
            z-index: 99;
        }

        .nav {
            background-color: #7c137b;
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            padding: 2rem 0;
        }

        .nav_link {
            display: grid;
            grid-template-columns: max-content max-content;
            align-items: center;
            column-gap: 1rem;
            padding: 0.5rem 1.5rem;
        }

        .nav_link {
            color: #c2c7d0;
            margin-bottom: 1.5rem;
            transition: 0.3s;
        }

        .nav_link:hover {
            color: white;
        }

        .main-content {
            margin-left: 250px;
            padding: 1rem;
            padding-top: 100px;
            transition: 0.3s;
            width: calc(100% - 250px);
            flex: 1;
        }

        @media (max-width: 768px) {
            .main-content {
                margin-left: 0;
                width: 100%;
                padding-top: 80px;
            }

            .l-navbar {
                width: 50%;
                left: -100%;
            }

            .l-navbar.show {
                left: 0;
            }
        }

        .footer-table-container {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-left: 250px;
            padding: 1rem;
            width: calc(100% - 250px);
            flex-direction: column;
        }

        @media (max-width: 768px) {
            .footer-table-container {
                margin-left: 0;
                width: 100%;
            }
        }

        .table-container {
            border: 1px solid #dee2e6;
            padding: 1rem;
            background-color: white;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            width: 100%;
            max-width: 100%;
            overflow-x: auto;
        }

        .table thead th {
            background-color: #f8f9fa;
        }

        .table th,
        .table td {
            white-space: nowrap;
            padding: 0.75rem;
        }

        .table thead th,
        .table tbody td {
            width: auto;
        }

        .table-container .btn {
            margin: 0 0.2rem;
        }

        .table-container .btn-danger {
            margin-left: 0;
        }
    </style>
</head>

<body>
    @section('content')
    @include('layouts.navbar_admin')

    <div style="padding-top: 160px;">
        <div class="footer-table-container">
            <h4>O total de Agendamentos:</h4><br>
            <div class="table-container table-responsive-sm">

                <h3 style="text-align: center">Agendamentos</h3><br>
                <table class="table table-striped table-hover table-sm">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Email</th>
                            <th scope="col">Telefone</th>
                            <th scope="col">Data</th>
                            <th scope="col">Hora</th>
                            <th scope="col">Serviço</th>
                            <th scope="col">Espécie</th>
                            <th scope="col">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($agendamentos as $agendamento)
                        <tr>
                            <td>{{ $agendamento->id }}</td>
                            <td>{{ $agendamento->nome }}</td>
                            <td>{{ $agendamento->email }}</td>
                            <td>{{ $agendamento->telefone }}</td>
                            <td>{{ $agendamento->data }}</td>
                            <td>{{ $agendamento->hora }}</td>
                            <td>{{ $agendamento->service->nome }}</td>
                            <td>{{ $agendamento->especie }}</td>
                            <td>
                                <a href="{{ route('agendamentos.edit', ['agendamento' => $agendamento->id]) }}" class="btn btn-warning text text-white">Editar</a>

                                <form action="{{ route('agendamentos.destroy', ['agendamento' => $agendamento->id]) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Excluir</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>