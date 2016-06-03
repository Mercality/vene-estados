@extends('master')

@section('content')
<h2>Obtener Api Key</h2>

<p>
    Para obtener su api key por favor haga clic en "Obtener"
</p>
<button type="button" id="obtain" name="button" class="btn btn-primary">Obtener</button>
<div class="row">
        <div class="input-field col s12">
          <input id="apikey" type="text" >
          <label for="apikey">API Key</label>
        </div>
</div>

@stop
