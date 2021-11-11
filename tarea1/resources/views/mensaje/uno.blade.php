@extends('welcome')
@section('content')
<form action="{{ route('uno.store')}}" method="post">
@csrf
<div class="col-md-6 ">
<input type="text" name="nombre" value="{{old('nombre')}}" class="form-control" placeholder="Nombre"><br>
<button type="submit" class="btn btn-primary">enviar</button>
</div>
</form>
<br>
        <table class="table table-striped">
			<thead>
				<tr>
					<th scope="col">Nombre</th>
					<th scope="col">Tag</th>
				</tr>
			</thead>
			<tbody>
            @foreach ($nomb as $nombre)
				<tr>
					<td><a href="{{route('dos.show', $nombre->id)}}"><i class="fa fa-arrow-right"></i>{{$nombre->nombre}}</a></td>
					<td><a href="{{route('dos.edit', $nombre->id)}}">
                        editar
                    </a></td>
				</tr>
            @endforeach
			</tbody>
		</table>
@endsection