@extends('master')
@section('title', 'Larahub | Halaman Utama')

@section('content')
	<div class="row">
		<div class="col-md-9">
			<div class="mb-3 pull-right">
				<a href="/questions/create" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i> Buat pertanyaan</a>
			</div>
			@foreach($question as $key => $ask)
			<div class="card card-widget card-outline card-primary">
		    	<div class="card-body row">
		    		<div class="col-md-10">
		    			<a href="/questions/{{$ask->id}}" class="h4">{!! old('isi', $ask->judul) !!}</a>
		    		</div>
		    		@if(Auth::user()->id == $ask->user->id)
		    		<div class="col-md-2">
			    		<div class="float-right">
					        <button type="button" class="btn btn-tool" title="Edit">
					          	<a href="/questions/{{$ask->id}}/edit"><i class="fas fa-edit"></i></a>
					        </button>
					        <form action="/questions/{{$ask->id}}" method="post" style="display: inline;">
					          	@csrf
					          	@method('DELETE')
					        	<button type="submit" class="btn btn-tool text-danger" title="Delete">
					        		<i class="fas fa-trash"></i>
					          	</button>
					        </form>
					    </div>
		    		</div>
		    		@endif
		    	</div>
		    	<div class="card-body">
		    		@foreach($ask->tags as $val)
			    	<button class="btn btn-sm btn-success mr-1">{{$val->tags}}</button>
			   		@endforeach
		    	</div>
		    	<div class="card-footer">
		    		<div class="float-left">
	    			<span class="badge badge-warning p-2">0 Votes</span>
	    			<a href="/questions/{{$ask->id}}">
	    				<span class="badge bg-indigo p-2">{{$ask->answer->count()}} Jawaban</span>
	    			</a>
	    			<span>
	    				<button class="btn btn-xs btn-info p-1">
	    					<i class="fa fa-thumbs-up"></i> like
	    				</button>
	    			</span>
	    			<span>
	    				<button class="btn btn-xs btn-danger p-1">
	    					<i class="fa fa-thumbs-down"></i> like
	    				</button>
	    			</span>
		    		</div>
		    		<div class="float-right">
		    		<small>Diposting pada {{$ask->updated_at}} oleh {{ $ask->user->name }}</small>
		    		</div>
		    	</div>
		  	</div>
			@endforeach
			
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
