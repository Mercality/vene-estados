@extends('master')
   
@section('content')
    <h1 style="line-height:70%">VenEstados <span class="grey-text text-darken-1">API &nbsp @include('github-buttons')</span></h1>
    <h5 class="grey-text text-darken-2">API con información completa de estados, municipios, parroquias y ciudades de Venezuela</h5>
    
	@include('index-code-example')

	<div class="row">
    	
    	<br>
    	<div class="col s12">
  		  @include('iniciativa')
  		</div>

      <div class="col s12">
        @include('call-example')
      </div>
	</div>
@stop