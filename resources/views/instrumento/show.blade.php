@extends('layouts.app')

@section('template_title')
    {{ $instrumento->name ?? 'Show Instrumento' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Mostrar Instrumento</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('instrumentos.index') }}"> Volver</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $instrumento->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Precio:</strong>
                            {{ $instrumento->precio }}
                        </div>
                        <div class="form-group">
                            <strong>Marca Id:</strong>
                            {{ $instrumento->marca_id }}
                        </div>
                        <div class="form-group">
                            <strong>Categoria Id:</strong>
                            {{ $instrumento->categoria_id }}
                        </div>
                        <div class="form-group">
                            <strong>Foto:</strong>
                            {{ $instrumento->foto }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
