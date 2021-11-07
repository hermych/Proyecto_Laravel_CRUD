@extends('plantillas')
@section('seccion') 
    <div class="container mt-4">
        <h1 class="display-4">Notas</h1>
        @if (session('mensaje'))
            <div class="alert alert-success">
                {{session('mensaje')}}
            </div>
        @endif
        <form action="{{route('notas.crear')}}" method="POST">
            @csrf
            <input type="text" name="nombre" placeholder="Nombre" class="form-control mb-2" value="{{old('nombre')}}">
            @error('nombre')
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>El campo nombre es obligatorio</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @enderror
            <input type="text" name="descripcion" placeholder="Descripcion" class="form-control mb-2"value="{{old('descripcion')}}">
            @error('descripcion')
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>El campo descripcion es obligatorio</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @enderror
            <button class="btn btn-primary btn-block" type="submit">Agregar</button>
        </form>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Descripcion</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($notas as $nota)
                    <tr>
                        <th scope="col">{{$nota->id}}</th>
                        <td scope="col">
                            <a href="{{route('notas.detalle',$nota->id)}}">
                                {{$nota->nombre}}
                            </a>
                        </td>
                        <td scope="col">{{$nota->descripcion}}</td>
                        <td scope="col">
                            <a href="{{route('notas.editar',$nota->id)}}" class="btn btn-warning btn-sm">Editar</a>
                            <form action="{{route('notas.eliminar',$nota->id)}}" method="POST" class="d-inline">
                                @method('DELETE')
                                @csrf
                                <button class="btn btn-danger btn-sm" type="submit">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $notas->links() }}
    </div>
@endsection