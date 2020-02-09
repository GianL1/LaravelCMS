@extends('adminlte::page')

@section('title', 'Painel')

@section('content_header')
    <h1>Configurações</h1>
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

    @if (session('warning'))
    <div class="alert alert-info">
        
        {{session('warning')}}
        
    </div>
    @endif

    <div class="card">
        <div class="card-body">
            <form action="{{route('settings.save')}}" class="form-horizontal" method="post">
                @method('PUT')
                @csrf

                <div class="form-group row">
                        <label for="" class="col-sm-2 col-form-label">Titulo do Site</label>
                        <div class="col-sm-10">
                            <input type="text" name="title" class="form-control" value="{{$settings['title']}}">
                        </div>
                </div>

                <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">Subtitulo</label>
                    <div class="col-sm-10">
                        <input type="text" name="subtitle" class="form-control" value="{{$settings['subtitle']}}">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">Email para contato:</label>
                    <div class="col-sm-10">
                        <input type="email" name="email" class="form-control" value="{{$settings['email']}}">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">Cor do Fundo</label>
                    <div class="col-sm-10">
                        <input type="color" name="bgcolor" class="form-control" value="{{$settings['bgcolor']}}" style="width:70px">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">Cor do Texto</label>
                    <div class="col-sm-10">
                        <input type="color" name="textcolor" class="form-control" value="{{$settings['textcolor']}}" style="width:70px">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-10">
                        <input type="submit" name="salvar" class="btn btn-success">
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection