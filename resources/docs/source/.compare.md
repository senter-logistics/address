---
title: API Reference

language_tabs:
- bash
- javascript
- php
- python

includes:

search: true

toc_footers:
- <a href='http://github.com/mpociot/documentarian'>Documentation Powered by Documentarian</a>
---
<!-- START_INFO -->
# Info

Welcome to the generated API reference.

<!-- END_INFO -->

#Services


<!-- START_cbe8a16c6e3a5566ed8d16192a953fa1 -->
## api/getPostalCodeData/{id}
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

### HTTP Request
`POST api/getPostalCodeData/{id}`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `id` |  required  | Postal code Number.
#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `api_key` | string |  required  | The Api Key provided by e-hop.
    
<!-- END_cbe8a16c6e3a5566ed8d16192a953fa1 -->

<!-- START_8eb259b14f03ae5f8e82052f05d78346 -->
## api/getPostalCodeDataFromCanada/{id}
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

### HTTP Request
`POST api/getPostalCodeDataFromCanada/{id}`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `id` |  required  | Postal code Number.
#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `api_key` | string |  required  | The Api Key provided by e-hop.
    
<!-- END_8eb259b14f03ae5f8e82052f05d78346 -->

<!-- START_c85f895e7e57ba3f18709107703ca8fb -->
## api/getPostalCodeDataFromColombia/{id}
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

### HTTP Request
`POST api/getPostalCodeDataFromColombia/{id}`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `id` |  required  | Postal code Number.
#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `api_key` | string |  required  | The Api Key provided by e-hop.
    
<!-- END_c85f895e7e57ba3f18709107703ca8fb -->


