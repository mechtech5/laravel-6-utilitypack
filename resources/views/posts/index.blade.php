@extends('layouts.app')

@section('content')
	<div class="container">
		<a href="{{ route('post.create') }}" class="btn btn-primary">Create New</a>
		<table class="table table-hover table-striped">
			<thead>
				<tr>
					<th>ID</th>
					<th>Author</th>
					<th>Title</th>
					<th>Body</th>
					<th>Actions</th>
				</tr>
			</thead>
			<tbody>
				@foreach($posts as $post)
					<tr>
						<td>{{$loop->index + 1}}</td>
						<td>{{$post->user->name}}</td>
						<td>{{$post->title}}</td>
						<td>{{$post->body}}</td>
						<td>
							<a href="{{ route('post.show', $post->id) }}">View</a>
							<a href="{{ route('post.edit', $post->id) }}">Edit</a>
							<a href="#" onclick="event.preventDefault(); 
								if(confirm('Are your sure?')){
									getElementById('delete-form-{{$post->id}}').submit();
								}">Delete</a>
							<form id="delete-form-{{$post->id}}"  action="{{ route('post.destroy', $post->id) }}" method="POST" style="display: none">
								@csrf
								@method('DELETE')
							</form>
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>
@endsection