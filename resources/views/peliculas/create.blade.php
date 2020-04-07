@extends('layouts.app')

@section('content')


<div class="container">


<form action="{{url('/peliculas')}}" class="form-horizontal" method="post" enctype="multipart/form-data">
{{csrf_field()}}
@include('peliculas.form',['Modo'=>'crear'])
</div>
@endsection