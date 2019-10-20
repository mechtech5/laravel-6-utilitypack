@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="card">
			<div class="card-header">Edit a post
				<a href="{{ route('post.index') }}" class="btn btn-primary btn-sm float-right">Back</a>
			</div>
			<div class="card-body">
				<form action="{{ route('post.update', $post->id) }}" method="POST">
					@csrf
					@method('PUT')

					<div class="form-group">
						<input type="text" name="title" placeholder="Title" class="form-control" value="{{ $post->title }}">
						@error('title')
		            <span class="invalid-feedback" role="alert">
		                <strong>{{ $message }}</strong>
		            </span>
		        @enderror
					</div>

					<div class="form-group">
						<textarea name="body" class="form-control" placeholder="Body" cols="30" rows="10">
							{{ $post->body }}
						</textarea>

						@error('body')
		            <span class="invalid-feedback" role="alert">
		                <strong>{{ $message }}</strong>
		            </span>
		        @enderror
					</div>

					<div class="text-center">
						<input type="submit" class="btn btn-success">
					</div>
				</form>
			</div>
		</div>
	</div>
@endsection