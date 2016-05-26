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

    <h5>Mostrando IDs Únicos</h5>
    <p>Es posible que para la elaboración de select boxes así como para relacionar tablas en una base de datos necesitemos IDs unicos que identifiquen cada estado, municipio, parroquia o ciudad, para ello solo hay que incluir:</p>
    <code>&ids=true</code>

    <p>Con esta url:</p>
    <pre><code class="url">https://estados.venedatos.com.ve/api/v1/estados?mun=true&parr=true&city=true&ids=true</code></pre>
    <p>Se obtiene el siguiente resultado:</p>

<pre><code class="json">{  
   "id":9,
   "name":"Delta Amacuro",
   "iso":"VE-Y",
   "municipios":[  
      {  
         "id":100,
         "name":"Antonio Díaz",
         "estado_id":9,
         "parroquias":[  
            {  
               "id":309,
               "name":"Curiapo",
               "municipio_id":100
            },
            {  
               "id":310,
               "name":"Almirante Luis Brión",
               "municipio_id":100
            },
            ...
         ]
      },
      ...
   ],
   "ciudades": [
      {
         "id": 148,
         "name": "Tucupita",
         "estado_id": 9,
         "capital": 1
      }
   ]
},
...
</code></pre>