@extends('plantillas')
@section('seccion')
    <h1>Editar nota: "{{$nota->nombre}}"</h1>
    @if (session('mensaje'))
        <div class="alert alert-success">{{session('mensaje')}}</div>
    @endif
    <form action="{{route('notas.update',$nota->id)}}" method="POST">
            @csrf
            @method('put')
            <input type="text" name="nombre" placeholder="Nombre" class="form-control mb-2" value="{{old('nombre',$nota->nombre)}}">
            @error('nombre')
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>El campo nombre es obligatorio</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @enderror
            <input type="text" name="descripcion" placeholder="Descripcion" class="form-control mb-2" value="{{old('descripcion',$nota->descripcion)}}">
            @error('descripcion')
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>El campo descripcion es obligatorio</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @enderror
            <button class="btn btn-warning btn-block" type="submit">Actualizar</button>
        </form>
@endsection