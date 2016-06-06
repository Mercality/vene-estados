@extends('master')

@section('content')
<div id="key-page" class="">
    <h2>API Key</h2>

    <p id="obtener-parrafo hide" class="obtener hide">
        Para obtener su api key por favor haga clic en "Obtener"
    </p>

    <p id="revocar-parrafo hide" class="revocar hide">
        Para revocar su api key haga clic en "Revocar"
    </p>
    <button type="button" id="obtain" name="button" class="obtener btn waves-effect waves-light hide">Obtener</button>

    <div id="key-wrap" class="revocar hide">
        <button type="button" id="revoke" name="button" class="revocar btn waves-effect waves-light orange hide">Revocar</button>
        <br>
        <br>
        <div class="row">
                <div class="input-field col s6">
                  <input id="apikey"  type="text">
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
        <div class="row">
            <p>
                Fecha de vencimiento de esta API key: <span id="vencimiento"></span>
            </p>
        </div>

    </div>

    <div class="tieneWrap">

    </div>

</div>


@stop
