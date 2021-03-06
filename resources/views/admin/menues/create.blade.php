@extends('adminlte::page')

@section('title', 'TEST-LV-SEBASTIAN')

@section('content_header')
    <h1>Crear un nuevo menú</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route' => 'admin.menues.store']) !!}

                <div class="form-group">
                    {!! Form::label('name', 'Nombre:') !!}
                    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre del menú']) !!}

                    @error('name')
                        <span class="text-danger">
                            {{$message}}
                        </span>
                    @enderror

                </div>

                <div class="form-group">
                    {!! Form::label('slug', 'Slug:') !!}
                    {!! Form::text('slug', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el slug del menú', 'readonly']) !!}

                    @error('slug')
                        <span class="text-danger">
                            {{$message}}
                        </span>
                    @enderror

                </div>

                <div class="form-group">
                    {!! Form::label('description', 'Descripción:') !!}
                    {!! Form::text('description', null, ['class' => 'form-control', 'placeholder' => 'Ingrese una descripción del menú',]) !!}

                    @error('description')
                        <span class="text-danger">
                            {{$message}}
                        </span>
                    @enderror
                    
                </div>

                <div class="form-group">
                    {!! Form::label('price', 'Precio:') !!}
                    {!! Form::number('price', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el precio del menú',]) !!}

                    @error('price')
                        <span class="text-danger">
                            {{$message}}
                        </span>
                    @enderror
                    
                </div>

                {!! Form::submit('Crear menu', ['class' => 'btn btn-primary']) !!}

            {!! Form::close() !!}
        </div>
    </div>
@stop

@section('js')
    <script src="{{asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js')}}"></script>

    <script>
        $(document).ready( function() {
            $("#name").stringToSlug({
                setEvents: 'keyup keydown blur',
                getPut: '#slug',
                space: '-'
            });
        });
    </script>
@endsection


