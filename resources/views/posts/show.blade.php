@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="card">
			<div class="card-header">
				{{ $post->title }}
				<a href="{{ route('post.index') }}" class="btn btn-primary btn-sm float-right">Back</a>
			</div>
			<div class="card-body">{{ $post->body }}</div>
		</div>
	</div>
@endsection