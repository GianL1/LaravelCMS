@extends('adminlte::page')

@section('title', 'Páginas')

@section('content_header')
    <h1>Minhas Páginas</h1>
    <a href="{{route('pages.create')}}" class="btn btn-sm btn-success">Nova Página</a>
@endsection

@section('content')

<div class="card">

    <div class="card-body">

        <table class="table table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Titulo</th>
                    <th>Subtitulo</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pages as $page)
                    <tr>
                        <td> {{$page->id}} </td>
                        <td> {{$page->title}} </td>
                        <td> {{$page->body}} </td>

                        <td> 
                            <a href="{{route('pages.edit', ['page' => $page->id])}}" target="_blank" class="btn btn-sm btn-success">Ver</a> 
                            <a href="{{route('pages.edit', ['page' => $page->id])}}" class="btn btn-sm btn-info">Editar</a> 

                           
                                <form class ="d-inline" action="{{route('pages.destroy', ['page' => $page->id])}}" method="post" onsubmit="return confirm('Tem certeza que deseja excluir ?')">
                                    @method("DELETE")
                                    @csrf
                                    <button class="btn btn-sm btn-danger">Excluir</button>
                                </form>  
                            
                            
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</div>
    

    {{$pages->links()}}
@endsection