@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <h3>Listagem de categorias</h3>
            <a href="" class="btn btn-primary">Nova categoria</a>
        </div>

        <div class="row">
            <table>
                <thead>
                    <tr>
                        <th>nome</th>
                        <th>açoes</th>
                    </tr>
                </thead>
                @foreach($categories as $category)
                <tr>
                    <td>{{$category->name}}</td>
                    <td>
                        <button class="btn btn-primary">
                            Editar
                        </button>

                        <button class="btn btn-danger">
                            Excluir
                        </button>
                    </td>
                </tr>
                    @endforeach
            </table>
        </div>
    </div>
    @endsection