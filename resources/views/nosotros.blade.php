@extends('plantillas')
@section('seccion')
    <h1>Este es mi equipo de trabajo</h1>   
    @foreach ($equipo as $persona) 
        <a href="{{route('nosotros',$persona)}}" class="h4 text-danger">{{$persona}}</a><br>
    @endforeach
    @if (!empty($nombre))
        @switch($nombre)
            @case($nombre=='Alejandro')
                <h2>El nombre es {{$nombre}}</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam provident ducimus quam sunt distinctio corporis, amet minus enim hic accusamus porro possimus modi consequatur nam ratione quidem numquam quo? Architecto!</p>
                @break
            @case($nombre=='Alexandra')
                <h2>El nombre es {{$nombre}}</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam provident ducimus quam sunt distinctio corporis, amet minus enim hic accusamus porro possimus modi consequatur nam ratione quidem numquam quo? Architecto!</p>
                @break
            @case($nombre=='Angelita')
                <h2>El nombre es {{$nombre}}</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam provident ducimus quam sunt distinctio corporis, amet minus enim hic accusamus porro possimus modi consequatur nam ratione quidem numquam quo? Architecto!</p>
                @break
            @default
                
        @endswitch
    @endif
@endsection