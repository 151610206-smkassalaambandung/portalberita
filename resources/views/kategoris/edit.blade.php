@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<ul class="breadcrumb">
				<li><a href="{{url('/home')}}">Dasboard</a></li>
				<li><a href="{{url('/admin/kategoris')}}">Kategori</a></li>
				<li class="active">Ubah Kategori</li>
				</ul>
				<div class="panel panel-default">
					<div class="panel-heading">
						<h2 class="panel-title">Ubah Kategori</h2>
					</div>
					<div class="panel-body">
					{!! Form::model($kategori,['url'=> route('kategoris.update',$kategori->id),'method'=>'put','class'=>'form-horizontal']) !!}
					@include('kategoris._form')
					{!! Form::close() !!}
					</div>
				</div>
		</div>
	</div>
</div>
@endsection