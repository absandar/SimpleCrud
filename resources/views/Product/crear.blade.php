@extends('layout.master')

@section('content')

<div class="container mt-5">
    <form method="POST" action="{{ url('/crear') }}">
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">Producto</label>
            <input type="text" name="name" class="form-control" id="exampleInputEmail1" value="{{ old('name') }}" aria-describedby="emailHelp"
                placeholder="Ingrese un producto">
            @if ($errors->has('name'))
                <div class="alert alert-dark">{{ $errors->first('name') }}</div>
            @endif
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Precio</label>
            <input type="text" name="price" class="form-control" value="{{ old('name') }}" id="exampleInputPassword1" placeholder="Ingrese un precio">
            @if ($errors->has('price'))
                <div class="alert alert-dark">{{ $errors->first('price') }}</div>
            @endif
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
</div>
@endsection