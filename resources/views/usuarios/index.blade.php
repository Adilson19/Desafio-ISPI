@extends('layouts.home')
@section()
    <a href="/usuarios/create" style="
        text-align: center;
        text-decoration: none;
        color: #000;
        cursor: pointer;
    ">Novo Usuario</a>
    <table border="1" width="50%"
        style="
            color: black;
            background-color: grey;
            text-align: center;
        ">
        {{-- 'name',
            'id',
            'adress',
            'numberFone',
            'email',
            'date',
            'password'--}}
        <thead>
            <tr>
                <th>Nome</th>
                <th>Endereço</th>
                <th>Número de Telefone</th>
                <th>E-mail</th>
                <th>Data de Nascimento</th>
                <th>Palavra-Passe</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($usuarios as $usuario)
                <tr>
                    <td>{{ $usuarios->name }}</td>
                    <td>{{ $usuarios->adress }}</td>
                    <td>{{ $usuarios->numberFone }}</td>
                    <td>{{ $usuarios->email }}</td>
                    <td>{{ $usuarios->date }}</td>
                    <td>{{ $usuarios->password }}</td>
                    <td><a href="/usuarios/{{$usuarios->id}}/edit"
                            style="
                                    color: black;
                                    background-color: white;
                                    border: 1px solid black;
                                    text-decoration: none;
                                    padding: 1px 3px;
                                    margin-top: 2px;
                                    margin-bottom: 2px;
                                "
                        >Editar</a>
                        {{-- Criando o botao de delete --}}
                        <form action="/usuarios/{{ $usuarios->id }}" method="post"
                            style="
                                    display-inline: block;
                                ">
                                @csrf
                                @method('DELETE')
                                <button type="submit">Eliminar</button>
                        </form>

                        <a href="/usuarios/{{ $usuarios->id }}"
                            style="
                                    color: black;
                                    background-color: white;
                                    border: 1px solid black;
                                    text-decoration: none;
                                    padding: 1px 3px;
                                    margin-top: 2px;
                                    margin-bottom: 2px;
                                "
                            >Detalhes</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
