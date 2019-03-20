@extends('admin.template.main')

@section('title', 'Listado de tags')

@section('content')
		<a href="{{ route('admin.tags.create') }}" class="btn btn-info">Registrar nuevo tag</a><hr>
		<table class="table table-striped">
		<thead>
			<tr>
				<th>ID</th>
				<th>Nombre</th>
				<th>Acción</th>
			</tr>
		</thead>
		<tbody>
			@foreach($tags as $tag)
				<tr>
					<td>{{ $tag->id }}</td>
					<td>{{ $tag->name }}</td>
					<td>
						<a href="{{ route('admin.tags.edit', $tag->id) }}" class="btn btn-warning"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span></a>
						<a href="{{ route('admin.tags.destroy', $tag->id) }}" onclick="return confirm('Seguro que deseas eliminarlo?')" class="btn btn-danger"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
	<div class="text-center">
		{!! $tags->render() !!}
	</div>
@endsection