@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="card">
			<div class="card-header">Create a Post
				<a href="{{ route('post.index') }}" class="btn btn-primary btn-sm float-right">Back</a>
			</div>
			<div class="card-body">
				<form action="{{ route('post.store') }}" method="POST">
					@csrf
					<div class="form-group">
						<input type="text" name="title" placeholder="Title" value="{{ old('title') }}" class="form-control">
						@error('title')
		            <span class="invalid-feedback" role="alert">
		                <strong>{{ $message }}</strong>
		            </span>
		        @enderror
					</div>

					<div class="form-group">
						<textarea name="body" class="form-control" placeholder="Body" value="{{ old('body') }}" cols="30" rows="10">
							
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