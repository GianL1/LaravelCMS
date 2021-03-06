@extends('adminlte::page')

@section('title', 'Editar Usuário')
    
@section('content_header')
    <h1>Editar Usuário</h1>    
@endsection

@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                <h5>
                    <i class="icon fas fa-ban">Ocorreu um erro</i>
                </h5>
                @foreach ($errors->all() as $error)
                    <li>
                        {{$error}}
                    </li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="card">

        <div class="card-body">
            <form action="{{route('users.update',['user'=>$user->id])}}" method="post" class="form-horizontal">
                @method('PUT')
                @csrf
                <div class="form-group row">
                    
                        <label for="" class="col-sm-2 col-form-label">Nome Completo: </label>
                        <div class="col-sm-10">
                            <input type="text" name="name" id="" value="{{$user->name}}" class="form-control @error('name') is-invalid @enderror">
                        </div>
                    
                </div>
                <div class="form-group row">
                    
                        <label for="" class="col-sm-2 col-form-label">Email: </label>
                        <div class="col-sm-10">
                            <input type="email" name="email" value="{{$user->email}}" id="" class="form-control @error('email') is-invalid @enderror">
                        </div>
                </div>
                <div class="form-group row">
                    
                        <label for="password" class="col-sm-2 col-form-label">Senha: </label>
                        <div class="col-sm-10">
                            <input type="password" name="password" id="" class="form-control @error('password') is-invalid @enderror">
                        </div>
                    
                </div>
    
                <div class="form-group row">
                    
                        <label for="" class="col-sm-2 col-form-label">Confirmação de Senha: </label>
                        <div class="col-sm-10">
                            <input type="password" name="password_confirmation" id="" class="form-control">
                        </div>
                    
                </div>
                <div class="form-group row">
    
                        <label for="" class="col-sm-2 col-form-label"></label>
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-success">Salvar</button>
                        </div>
    
                </div>
            </form>
        </div>
        
    </div>

        


@endsection