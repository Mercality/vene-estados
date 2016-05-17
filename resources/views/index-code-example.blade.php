<div class="row">
		<div class="col s12 m6">
		<h5>Estados de Venezuela + ISO 3166-2</h5>
		<pre><code>https://estados.venedatos.org.ve/api/v1/estados                   </code></pre>
		<p style="text-align: justify">
			Si consulta nuestra API con la url anterior, obtendra en un array la lista de los estados de Venezuela en orden alfabético incluyendo su ISO 3166-2 que es el estandar de codificacion de subdivisiones territoriales de un pais. Ejemplo de respuesta JSON:
		</p>
<pre><code class="json" data-lang="javascript">[
    {
    "name": "Amazonas",
    "iso": "VE-X"
    },
    {
    "name": "Anzoátegui",
    "iso": "VE-B"
    },
    {
    "name": "Apure",
    "iso": "VE-C"
    },
    {
    "name": "Aragua",
    "iso": "VE-D"
    },
    ...
]

</code></pre>

		</div>
<!--
		<div class="col s12 m6">
		<h5>Ciudades</h5>
<pre><code class="json" data-lang="javascript">[
    {
    "name": "Maroa",
    "capital": 0
    },
    {
    "name": "Puerto Ayacucho",
    "capital": 1
    },
    ...
]</code></pre>

		</div>
-->

		<div class="col s12 m6">
		<h5>Estado + Municipios + Parroquias</h5>

		<pre><code>https://estados.venedatos.org.ve/api/v1/estados?mun=true&parr=true</code></pre>
		<p style="text-align: justify">
			Puede adicionar parametros con un valor booleano (mun = true, parr = true) para indicar que desea incluir los municipios del estado asi como las parroquias de esos municipios, tambien puede solicitar con otra url, ciudades y municipios.
		</p>
<pre><code class="json" data-lang="javascript">[
   {
      "name":"Guárico",
      "iso":"VE-J",
      "municipios":[
         {
            "name":"Leonardo Infante",
            "parroquias":[
               {
                  "name":"Valle de la Pascua"
               },
               {
                  "name":"Espino"
               }
            ]
         }
      ]
   }
   ...
]</code></pre>

		</div>
<!--
		<div class="col s12 m6">
		<h5>Estado + Ciudades</h5>
<pre><code class="json" data-lang="javascript">{
   "name":"Distrito Capital",
   "iso":"VE-A",
   "ciudades":[
      {
         "name":"Caracas",
         "capital":1
      },
      {
         "name":"El Junquito",
         "capital":0
      }
   ]
},



</code></pre>

		</div>
-->
</div>
