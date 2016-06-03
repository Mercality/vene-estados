@extends('master')

@section('content')
<h2>Obtener API Key</h2>

<p>
    Para obtener su api key por favor haga clic en "Obtener"
</p>
<div id="obtener-wrap" class="">
    <button type="button" id="obtain" name="button" class="btn waves-effect waves-light">Obtener</button>
    <button type="button" id="revoke" name="button" class="btn waves-effect waves-light orange hide">Revocar</button>
    <br>
    <br>
    <div class="row">
            <div class="input-field col s6">
              <input id="apikey"  type="text" >
              <label id="apilabel" for="apikey">API Key</label>
            </div>

            <div class="col s2">
                <a style="margin-top:15px;"
                id="copy"
                data-clipboard-target="#apikey"
                type="button"
                name="button"
                class="btn-floating waves-effect waves-light tooltipped"
                data-tooltip="Copiar al portapapeles"
                data-position="top"
                data-delay="50">
                    <i style="font-size:1.4rem" class="icon icon-paste"></i>
                </a>
            </div>
    </div>
</div>

<div class="tieneWrap">

</div>


@stop
