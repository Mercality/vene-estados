<h4>Ejemplo de una API Call</h4>

<div class="row">
<div class="col s12 m8">
<pre><code class="url">GET https://estados.venedatos.com.ve/api/v1/estados

headers: {
    "access_token": "randomAccessTokenHere",
    "Content-Type": "json",
    "Accept": "json"
}
</code></pre>
</div>


 
 <div class="col s12 m4">                       
<pre><code class="json" data-lang="javascript">[
    {
    "name": "Amazonas",
    "iso": "VE-X"
    },
    {
    "name": "Anzoátegui",
    "iso": "VE-B"
    },
    ...
]</code></pre>
</div>
</div>