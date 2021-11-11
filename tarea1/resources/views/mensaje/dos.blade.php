@extends('welcome')
@section('content')
<form action="{{ route('dos.update',$cat->id)}}" method="post">
@csrf
@method('PUT')
<div class="row">
<div class="col-md-6 ">
<strong>Nombre</strong>
<input type="text" name="nombre" value="{{$cat->nombre}}" class="form-control">
</div>
</div>
<button type="submit" class="btn btn-primary">Guardar</button>
</div>
</form>

@endsection