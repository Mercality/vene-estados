@extends('master')

@section('content')
    <h1 style="line-height:70%">VenEstados <span class="grey-text text-darken-1">API &nbsp @include('github-buttons')</span></h1>
    <h5 class="grey-text text-darken-2">API con información completa de estados, municipios, parroquias y ciudades de Venezuela</h5>


 @include('index-code-example')
	<div class="row">
      <div class="col s12">


      </div>
    	<br />
    	<div class="col s12">
  		  @include('iniciativa')
  		</div>

      <div class="col s12">
        @include('call-example')
      </div>
	</div>

    <h4>API Endpoints Disponibles</h4>
    <div class="">


    <h5>Estados:</h5>
    <pre><code class="url">https://estados.venedatos.com.ve/api/v1/estados</code></pre>
    <h6>Modificadores Disponibles:</h6>
    <code>
        &mun=true //Carga los municipios del estado <br>
        &parr=true //Si &mun=true esta activo carga las parroquias de los municipios <br>
        &city=true //Carga las ciudades del estado  <br>
    </code>

    </div>

    <hr>
    <h5>Municipios:</h5>
    <pre><code class="url">https://estados.venedatos.com.ve/api/v1/municipios</code></pre>
    <h6>Modificadores Disponibles:</h6>
    <code>
        &parr=true //Carga las parroquias de los municipios <br>
        &est=true //Carga el estado al que pertenece el municipio
    </code>

    <hr>
    <h5>Parroquias:</h5>
    <pre><code class="url">https://estados.venedatos.com.ve/api/v1/parroquias</code></pre>
    <h6>Modificadores Disponibles:</h6>
    <code>
        &mun=true //Carga el municipio al que pertenece la parroquia <br>
        &est=true //Si &mun=true esta activo carga el estado al que pertenece la parroquia
    </code>

    <hr>
    <h5>Ciudades:</h5>
    <pre><code class="url">https://estados.venedatos.com.ve/api/v1/ciudades</code></pre>
    <h6>Modificadores Disponibles:</h6>
    <code>
        &est=true //Carga el estado al que pertenece cada ciudad
    </code>




@stop
