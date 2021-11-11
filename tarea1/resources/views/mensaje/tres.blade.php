@extends('welcome')
@section('content')
<div class="profile-info">
    <h1>
		<span>hola mundo # :</span>
        {{$nombre->nombre}}
    </h1>
</div>
@endsection