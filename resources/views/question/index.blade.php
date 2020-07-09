@extends('master')
@section('title', 'Halaman Utama')

@section('content')
	<div class="row">
		<div class="col-md-9">
			<div class="mb-3">
				<a href="/questions/create" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i> Buat pertanyaan</a>
			</div>
			@for($i = 1; $i <= 5; $i++)
			<div class="card card-widget card-outline card-primary">
		    	<div class="card-body">
		    		<a href="" class="h4">Apa yang dimaksud LTS dalam Laravel 6.x ?</a>
		    		<div class="float-right">
				        <button type="button" class="btn btn-tool" title="Edit">
				          	<a href="{{ route('questions.edit', 1) }}"><i class="fas fa-edit"></i></a>
				        </button>
				        <form action="{{ route('questions.destroy', 1) }}" method="post" style="display: inline;">
				          	@csrf
				          	@method('DELETE')
				        	<button type="submit" class="btn btn-tool text-danger" title="Delete">
				        		<i class="fas fa-trash"></i>
				          	</button>
				        </form>
				    </div>
		    	</div>
		  	</div>
			@endfor
			
		</div>
		<div class="col-md-3">
			<div class="card card-success">
				<div class="card-header">
					Hello World!
				</div>
				<div class="card-body">
					Halo apa kabar semua..
					Selamat Datang di Larahub, forum tanya jawab seputar Laravel
				</div>
			</div>
		</div>
	</div>
  	
@endsection
