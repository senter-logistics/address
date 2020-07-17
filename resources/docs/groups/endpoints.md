# Endpoints


## Obtener un código postal de México.


Este endpoint te permite consultar la base de datos más actualizada del SEPOMEX.
<aside class="notice">Debes enviar tu <code>API_KEY</code> en esta consulta.</aside>

> Example request:

```bash
curl -X POST \
    "https://address.e-hop.mx/api/getPostalCodeData/64550" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"api_key":"ec28f5ed-91e2-4e93-8d86-030241fe2481"}'

```

```javascript
const url = new URL(
    "https://address.e-hop.mx/api/getPostalCodeData/64550"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "api_key": "ec28f5ed-91e2-4e93-8d86-030241fe2481"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'https://address.e-hop.mx/api/getPostalCodeData/64550',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
        'json' => [
            'api_key' => 'ec28f5ed-91e2-4e93-8d86-030241fe2481',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
import json

url = 'https://address.e-hop.mx/api/getPostalCodeData/64550'
payload = {
    "api_key": "ec28f5ed-91e2-4e93-8d86-030241fe2481"
}
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('POST', url, headers=headers, json=payload)
response.json()
```


> Example response (200):

```json
[
    {
        "id": 85181,
        "municipio": "Monterrey",
        "ciudad": "Monterrey",
        "estado": "Nuevo León",
        "tipo": "Colonia",
        "asentamiento": "Argentina",
        "cp": "64550"
    },
    {
        "id": 85182,
        "municipio": "Monterrey",
        "ciudad": "Monterrey",
        "estado": "Nuevo León",
        "tipo": "Colonia",
        "asentamiento": "Asarco",
        "cp": "64550"
    },
    {
        "id": 85183,
        "municipio": "Monterrey",
        "ciudad": "Monterrey",
        "estado": "Nuevo León",
        "tipo": "Colonia",
        "asentamiento": "Cantú",
        "cp": "64550"
    },
    {
        "id": 85184,
        "municipio": "Monterrey",
        "ciudad": "Monterrey",
        "estado": "Nuevo León",
        "tipo": "Colonia",
        "asentamiento": "Fabriles",
        "cp": "64550"
    },
    {
        "id": 85190,
        "municipio": "Monterrey",
        "ciudad": "Monterrey",
        "estado": "Nuevo León",
        "tipo": "Colonia",
        "asentamiento": "Jardines de Churubusco",
        "cp": "64550"
    },
    {
        "id": 85185,
        "municipio": "Monterrey",
        "ciudad": "Monterrey",
        "estado": "Nuevo León",
        "tipo": "Colonia",
        "asentamiento": "MartÍnez",
        "cp": "64550"
    },
    {
        "id": 85188,
        "municipio": "Monterrey",
        "ciudad": "Monterrey",
        "estado": "Nuevo León",
        "tipo": "Fraccionamiento",
        "asentamiento": "Privada Pinos",
        "cp": "64550"
    },
    {
        "id": 85186,
        "municipio": "Monterrey",
        "ciudad": "Monterrey",
        "estado": "Nuevo León",
        "tipo": "Colonia",
        "asentamiento": "Reforma",
        "cp": "64550"
    },
    {
        "id": 85187,
        "municipio": "Monterrey",
        "ciudad": "Monterrey",
        "estado": "Nuevo León",
        "tipo": "Colonia",
        "asentamiento": "Tampico",
        "cp": "64550"
    },
    {
        "id": 85189,
        "municipio": "Monterrey",
        "ciudad": "Monterrey",
        "estado": "Nuevo León",
        "tipo": "Colonia",
        "asentamiento": "U C Martínez",
        "cp": "64550"
    }
]
```

### Request
<small class="badge badge-black">POST</small>
 **`api/getPostalCodeData/{id}`**

<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<code><b>id</b></code>&nbsp;      <br>
    Postal code Number.

<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<code><b>api_key</b></code>&nbsp; <small>string</small>     <br>
    The Api Key provided by e-hop.



## Obtener un código postal de Cánada.


Este endpoint te permite consultar la base de datos más actualizada y oficial del país.
<aside class="notice">Debes enviar tu <code>API_KEY</code> en esta consulta.</aside>

> Example request:

```bash
curl -X POST \
    "https://address.e-hop.mx/api/getPostalCodeDataFromCanada/V2T5N7" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"api_key":"ec28f5ed-91e2-4e93-8d86-030241fe2481"}'

```

```javascript
const url = new URL(
    "https://address.e-hop.mx/api/getPostalCodeDataFromCanada/V2T5N7"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "api_key": "ec28f5ed-91e2-4e93-8d86-030241fe2481"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'https://address.e-hop.mx/api/getPostalCodeDataFromCanada/V2T5N7',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
        'json' => [
            'api_key' => 'ec28f5ed-91e2-4e93-8d86-030241fe2481',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
import json

url = 'https://address.e-hop.mx/api/getPostalCodeDataFromCanada/V2T5N7'
payload = {
    "api_key": "ec28f5ed-91e2-4e93-8d86-030241fe2481"
}
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('POST', url, headers=headers, json=payload)
response.json()
```


> Example response (200):

```json
[
    {
        "id": 604485,
        "postal_code": "V2T5N7",
        "city": "ABBOTSFORD",
        "province_abbr": "BC",
        "time_zone": "8",
        "estate": "British Columbia"
    }
]
```

### Request
<small class="badge badge-black">POST</small>
 **`api/getPostalCodeDataFromCanada/{id}`**

<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<code><b>id</b></code>&nbsp;      <br>
    Postal code Number.

<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<code><b>api_key</b></code>&nbsp; <small>string</small>     <br>
    The Api Key provided by e-hop.



## Obtener un código postal de Colombia.


Este endpoint te permite consultar la base de datos más actualizada y oficial del país.
<aside class="notice">Debes enviar tu <code>API_KEY</code> en esta consulta.</aside>

> Example request:

```bash
curl -X POST \
    "https://address.e-hop.mx/api/getPostalCodeDataFromColombia/110111" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"api_key":"ec28f5ed-91e2-4e93-8d86-030241fe2481"}'

```

```javascript
const url = new URL(
    "https://address.e-hop.mx/api/getPostalCodeDataFromColombia/110111"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "api_key": "ec28f5ed-91e2-4e93-8d86-030241fe2481"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'https://address.e-hop.mx/api/getPostalCodeDataFromColombia/110111',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
        'json' => [
            'api_key' => 'ec28f5ed-91e2-4e93-8d86-030241fe2481',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
import json

url = 'https://address.e-hop.mx/api/getPostalCodeDataFromColombia/110111'
payload = {
    "api_key": "ec28f5ed-91e2-4e93-8d86-030241fe2481"
}
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('POST', url, headers=headers, json=payload)
response.json()
```


> Example response (200):

```json
[
    {
        "place": "Escuela de Caballería I",
        "asentamiento": "Escuela de Caballería I",
        "country": "Colombia",
        "country_short": "CO",
        "estate": "BOGOTA D.C.",
        "city": "BOGOTA D.C.",
        "estate_short": "BOGOTA D.C.",
        "cp": 110111
    },
    {
        "place": " Escuela de Caballería II",
        "asentamiento": " Escuela de Caballería II",
        "country": "Colombia",
        "country_short": "CO",
        "estate": "BOGOTA D.C.",
        "city": "BOGOTA D.C.",
        "estate_short": "BOGOTA D.C.",
        "cp": 110111
    },
    {
        "place": " Escuela de Infantería",
        "asentamiento": " Escuela de Infantería",
        "country": "Colombia",
        "country_short": "CO",
        "estate": "BOGOTA D.C.",
        "city": "BOGOTA D.C.",
        "estate_short": "BOGOTA D.C.",
        "cp": 110111
    },
    {
        "place": " Molinos Norte",
        "asentamiento": " Molinos Norte",
        "country": "Colombia",
        "country_short": "CO",
        "estate": "BOGOTA D.C.",
        "city": "BOGOTA D.C.",
        "estate_short": "BOGOTA D.C.",
        "cp": 110111
    },
    {
        "place": " Páramo",
        "asentamiento": " Páramo",
        "country": "Colombia",
        "country_short": "CO",
        "estate": "BOGOTA D.C.",
        "city": "BOGOTA D.C.",
        "estate_short": "BOGOTA D.C.",
        "cp": 110111
    },
    {
        "place": " Páramo Urbano II",
        "asentamiento": " Páramo Urbano II",
        "country": "Colombia",
        "country_short": "CO",
        "estate": "BOGOTA D.C.",
        "city": "BOGOTA D.C.",
        "estate_short": "BOGOTA D.C.",
        "cp": 110111
    },
    {
        "place": " Páramo Urbano IV",
        "asentamiento": " Páramo Urbano IV",
        "country": "Colombia",
        "country_short": "CO",
        "estate": "BOGOTA D.C.",
        "city": "BOGOTA D.C.",
        "estate_short": "BOGOTA D.C.",
        "cp": 110111
    },
    {
        "place": " Rincón del Chicó",
        "asentamiento": " Rincón del Chicó",
        "country": "Colombia",
        "country_short": "CO",
        "estate": "BOGOTA D.C.",
        "city": "BOGOTA D.C.",
        "estate_short": "BOGOTA D.C.",
        "cp": 110111
    },
    {
        "place": " San Patricio",
        "asentamiento": " San Patricio",
        "country": "Colombia",
        "country_short": "CO",
        "estate": "BOGOTA D.C.",
        "city": "BOGOTA D.C.",
        "estate_short": "BOGOTA D.C.",
        "cp": 110111
    },
    {
        "place": " Santa Ana",
        "asentamiento": " Santa Ana",
        "country": "Colombia",
        "country_short": "CO",
        "estate": "BOGOTA D.C.",
        "city": "BOGOTA D.C.",
        "estate_short": "BOGOTA D.C.",
        "cp": 110111
    },
    {
        "place": " Santa Ana Occidental",
        "asentamiento": " Santa Ana Occidental",
        "country": "Colombia",
        "country_short": "CO",
        "estate": "BOGOTA D.C.",
        "city": "BOGOTA D.C.",
        "estate_short": "BOGOTA D.C.",
        "cp": 110111
    },
    {
        "place": " Santa Bibiana",
        "asentamiento": " Santa Bibiana",
        "country": "Colombia",
        "country_short": "CO",
        "estate": "BOGOTA D.C.",
        "city": "BOGOTA D.C.",
        "estate_short": "BOGOTA D.C.",
        "cp": 110111
    },
    {
        "place": " Santa Bárbara Central",
        "asentamiento": " Santa Bárbara Central",
        "country": "Colombia",
        "country_short": "CO",
        "estate": "BOGOTA D.C.",
        "city": "BOGOTA D.C.",
        "estate_short": "BOGOTA D.C.",
        "cp": 110111
    },
    {
        "place": " Santa Bárbara Occid",
        "asentamiento": " Santa Bárbara Occid",
        "country": "Colombia",
        "country_short": "CO",
        "estate": "BOGOTA D.C.",
        "city": "BOGOTA D.C.",
        "estate_short": "BOGOTA D.C.",
        "cp": 110111
    }
]
```

### Request
<small class="badge badge-black">POST</small>
 **`api/getPostalCodeDataFromColombia/{id}`**

<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<code><b>id</b></code>&nbsp;      <br>
    Postal code Number.

<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<code><b>api_key</b></code>&nbsp; <small>string</small>     <br>
    The Api Key provided by e-hop.




