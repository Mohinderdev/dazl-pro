---
title: API Reference

language_tabs:
- bash
- javascript
- php

includes:

search: true

toc_footers:
- <a href='http://github.com/mpociot/documentarian'>Documentation Powered by Documentarian</a>
---
<!-- START_INFO -->
# Info

Welcome to the generated API reference.
[Get Postman Collection](localhost:5000/storage/docs/collection.json)

<!-- END_INFO -->

#Customers


APIs for managing customers
<!-- START_318b6d6329fe2210c7c236d870069fe9 -->
## Logout Customer.

> Example request:

```bash
curl -X POST \
    "localhost:5000/storage/api/customer/logout" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost:5000/storage/api/customer/logout"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'localhost:5000/storage/api/customer/logout',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```



### HTTP Request
`POST api/customer/logout`


<!-- END_318b6d6329fe2210c7c236d870069fe9 -->

<!-- START_20bc901f1af0adba03143edbc1ec9647 -->
## Register Customer.

> Example request:

```bash
curl -X POST \
    "localhost:5000/storage/api/customer/register" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"email":"aut","password":"quam","first_name":"reiciendis","last_name":"molestiae","phone_number":"quia","zip_code":"dolorem"}'

```

```javascript
const url = new URL(
    "localhost:5000/storage/api/customer/register"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "email": "aut",
    "password": "quam",
    "first_name": "reiciendis",
    "last_name": "molestiae",
    "phone_number": "quia",
    "zip_code": "dolorem"
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
    'localhost:5000/storage/api/customer/register',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
        'json' => [
            'email' => 'aut',
            'password' => 'quam',
            'first_name' => 'reiciendis',
            'last_name' => 'molestiae',
            'phone_number' => 'quia',
            'zip_code' => 'dolorem',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```



### HTTP Request
`POST api/customer/register`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `email` | string |  required  | polagorge@gmail.com
        `password` | string |  required  | 123123
        `first_name` | string |  required  | Paula
        `last_name` | string |  required  | George
        `phone_number` | string |  required  | +201272575873
        `zip_code` | string |  required  | 524587
    
<!-- END_20bc901f1af0adba03143edbc1ec9647 -->

<!-- START_34a1c6da4de2d5019aaa23abead9d739 -->
## Login Customer.

> Example request:

```bash
curl -X POST \
    "localhost:5000/storage/api/customer/login" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"email":"itaque","password":"ad"}'

```

```javascript
const url = new URL(
    "localhost:5000/storage/api/customer/login"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "email": "itaque",
    "password": "ad"
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
    'localhost:5000/storage/api/customer/login',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
        'json' => [
            'email' => 'itaque',
            'password' => 'ad',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```



### HTTP Request
`POST api/customer/login`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `email` | string |  required  | polagorge@gmail.com
        `password` | string |  required  | 123123
    
<!-- END_34a1c6da4de2d5019aaa23abead9d739 -->

#Professionals


APIs for managing professionals
<!-- START_ef9cbe9711363de3cdd1c240e1c8fcd5 -->
## Logout Professional.

> Example request:

```bash
curl -X POST \
    "localhost:5000/storage/api/professional/logout" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost:5000/storage/api/professional/logout"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'localhost:5000/storage/api/professional/logout',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```



### HTTP Request
`POST api/professional/logout`


<!-- END_ef9cbe9711363de3cdd1c240e1c8fcd5 -->

<!-- START_cd94a495665ff2b34be2bf12c8b91925 -->
## Register Professional.

> Example request:

```bash
curl -X POST \
    "localhost:5000/storage/api/professional/register" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"email":"quos","password":"sit","first_name":"est","last_name":"tempora","phone_number":"aliquid","zip_code":"voluptatum","company_name":"dolores","company_street_address":"cum","state":"enim"}'

```

```javascript
const url = new URL(
    "localhost:5000/storage/api/professional/register"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "email": "quos",
    "password": "sit",
    "first_name": "est",
    "last_name": "tempora",
    "phone_number": "aliquid",
    "zip_code": "voluptatum",
    "company_name": "dolores",
    "company_street_address": "cum",
    "state": "enim"
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
    'localhost:5000/storage/api/professional/register',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
        'json' => [
            'email' => 'quos',
            'password' => 'sit',
            'first_name' => 'est',
            'last_name' => 'tempora',
            'phone_number' => 'aliquid',
            'zip_code' => 'voluptatum',
            'company_name' => 'dolores',
            'company_street_address' => 'cum',
            'state' => 'enim',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```



### HTTP Request
`POST api/professional/register`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `email` | string |  required  | polagorge@gmail.com
        `password` | string |  required  | 123123
        `first_name` | string |  required  | Paula
        `last_name` | string |  required  | George
        `phone_number` | string |  required  | +201272575873
        `zip_code` | string |  required  | 524587
        `company_name` | string |  required  | Garden
        `company_street_address` | string |  required  | NewYork Main st
        `state` | string |  required  | NewYork
    
<!-- END_cd94a495665ff2b34be2bf12c8b91925 -->

<!-- START_f38ee5f2f7191ec7129186925ead597a -->
## Login Professional.

> Example request:

```bash
curl -X POST \
    "localhost:5000/storage/api/professional/login" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"email":"occaecati","password":"nihil"}'

```

```javascript
const url = new URL(
    "localhost:5000/storage/api/professional/login"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "email": "occaecati",
    "password": "nihil"
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
    'localhost:5000/storage/api/professional/login',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
        'json' => [
            'email' => 'occaecati',
            'password' => 'nihil',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```



### HTTP Request
`POST api/professional/login`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `email` | string |  required  | polagorge@gmail.com
        `password` | string |  required  | 123123
    
<!-- END_f38ee5f2f7191ec7129186925ead597a -->

#Realtors


APIs for managing realtors
<!-- START_474b7ecaf2603648e0c27c32c9070fd1 -->
## Logout Realtor.

> Example request:

```bash
curl -X POST \
    "localhost:5000/storage/api/realtor/logout" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost:5000/storage/api/realtor/logout"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'localhost:5000/storage/api/realtor/logout',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```



### HTTP Request
`POST api/realtor/logout`


<!-- END_474b7ecaf2603648e0c27c32c9070fd1 -->

<!-- START_da9edd2a8034411d3499d78368b7382a -->
## Register Realtor.

> Example request:

```bash
curl -X POST \
    "localhost:5000/storage/api/realtor/register" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"email":"rerum","password":"vel","first_name":"non","last_name":"voluptas","phone_number":"cum","zip_code":"quo","company_name":"cum","company_street_address":"libero","state":"repellendus"}'

```

```javascript
const url = new URL(
    "localhost:5000/storage/api/realtor/register"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "email": "rerum",
    "password": "vel",
    "first_name": "non",
    "last_name": "voluptas",
    "phone_number": "cum",
    "zip_code": "quo",
    "company_name": "cum",
    "company_street_address": "libero",
    "state": "repellendus"
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
    'localhost:5000/storage/api/realtor/register',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
        'json' => [
            'email' => 'rerum',
            'password' => 'vel',
            'first_name' => 'non',
            'last_name' => 'voluptas',
            'phone_number' => 'cum',
            'zip_code' => 'quo',
            'company_name' => 'cum',
            'company_street_address' => 'libero',
            'state' => 'repellendus',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```



### HTTP Request
`POST api/realtor/register`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `email` | string |  required  | polagorge@gmail.com
        `password` | string |  required  | 123123
        `first_name` | string |  required  | Paula
        `last_name` | string |  required  | George
        `phone_number` | string |  required  | +201272575873
        `zip_code` | string |  required  | 524587
        `company_name` | string |  required  | Garden
        `company_street_address` | string |  required  | NewYork Main st
        `state` | string |  required  | NewYork
    
<!-- END_da9edd2a8034411d3499d78368b7382a -->

<!-- START_f97e55caaa1c884943f05ea8315b33ff -->
## Login Realtor.

> Example request:

```bash
curl -X POST \
    "localhost:5000/storage/api/realtor/login" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"email":"praesentium","password":"tempora"}'

```

```javascript
const url = new URL(
    "localhost:5000/storage/api/realtor/login"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "email": "praesentium",
    "password": "tempora"
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
    'localhost:5000/storage/api/realtor/login',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
        'json' => [
            'email' => 'praesentium',
            'password' => 'tempora',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```



### HTTP Request
`POST api/realtor/login`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `email` | string |  required  | polagorge@gmail.com
        `password` | string |  required  | 123123
    
<!-- END_f97e55caaa1c884943f05ea8315b33ff -->

#Rest of endpoint


<!-- START_0c068b4037fb2e47e71bd44bd36e3e2a -->
## Authorize a client to access the user&#039;s account.

> Example request:

```bash
curl -X GET \
    -G "localhost:5000/storage/oauth/authorize" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost:5000/storage/oauth/authorize"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'localhost:5000/storage/oauth/authorize',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


> Example response (401):

```json
{
    "code": 401,
    "data": null,
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET oauth/authorize`


<!-- END_0c068b4037fb2e47e71bd44bd36e3e2a -->

<!-- START_e48cc6a0b45dd21b7076ab2c03908687 -->
## Approve the authorization request.

> Example request:

```bash
curl -X POST \
    "localhost:5000/storage/oauth/authorize" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost:5000/storage/oauth/authorize"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'localhost:5000/storage/oauth/authorize',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```



### HTTP Request
`POST oauth/authorize`


<!-- END_e48cc6a0b45dd21b7076ab2c03908687 -->

<!-- START_de5d7581ef1275fce2a229b6b6eaad9c -->
## Deny the authorization request.

> Example request:

```bash
curl -X DELETE \
    "localhost:5000/storage/oauth/authorize" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost:5000/storage/oauth/authorize"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->delete(
    'localhost:5000/storage/oauth/authorize',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```



### HTTP Request
`DELETE oauth/authorize`


<!-- END_de5d7581ef1275fce2a229b6b6eaad9c -->

<!-- START_a09d20357336aa979ecd8e3972ac9168 -->
## Authorize a client to access the user&#039;s account.

> Example request:

```bash
curl -X POST \
    "localhost:5000/storage/oauth/token" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost:5000/storage/oauth/token"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'localhost:5000/storage/oauth/token',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```



### HTTP Request
`POST oauth/token`


<!-- END_a09d20357336aa979ecd8e3972ac9168 -->

<!-- START_d6a56149547e03307199e39e03e12d1c -->
## Get all of the authorized tokens for the authenticated user.

> Example request:

```bash
curl -X GET \
    -G "localhost:5000/storage/oauth/tokens" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost:5000/storage/oauth/tokens"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'localhost:5000/storage/oauth/tokens',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


> Example response (401):

```json
{
    "code": 401,
    "data": null,
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET oauth/tokens`


<!-- END_d6a56149547e03307199e39e03e12d1c -->

<!-- START_a9a802c25737cca5324125e5f60b72a5 -->
## Delete the given token.

> Example request:

```bash
curl -X DELETE \
    "localhost:5000/storage/oauth/tokens/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost:5000/storage/oauth/tokens/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->delete(
    'localhost:5000/storage/oauth/tokens/1',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```



### HTTP Request
`DELETE oauth/tokens/{token_id}`


<!-- END_a9a802c25737cca5324125e5f60b72a5 -->

<!-- START_abe905e69f5d002aa7d26f433676d623 -->
## Get a fresh transient token cookie for the authenticated user.

> Example request:

```bash
curl -X POST \
    "localhost:5000/storage/oauth/token/refresh" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost:5000/storage/oauth/token/refresh"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'localhost:5000/storage/oauth/token/refresh',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```



### HTTP Request
`POST oauth/token/refresh`


<!-- END_abe905e69f5d002aa7d26f433676d623 -->

<!-- START_babcfe12d87b8708f5985e9d39ba8f2c -->
## Get all of the clients for the authenticated user.

> Example request:

```bash
curl -X GET \
    -G "localhost:5000/storage/oauth/clients" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost:5000/storage/oauth/clients"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'localhost:5000/storage/oauth/clients',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


> Example response (401):

```json
{
    "code": 401,
    "data": null,
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET oauth/clients`


<!-- END_babcfe12d87b8708f5985e9d39ba8f2c -->

<!-- START_9eabf8d6e4ab449c24c503fcb42fba82 -->
## Store a new client.

> Example request:

```bash
curl -X POST \
    "localhost:5000/storage/oauth/clients" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost:5000/storage/oauth/clients"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'localhost:5000/storage/oauth/clients',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```



### HTTP Request
`POST oauth/clients`


<!-- END_9eabf8d6e4ab449c24c503fcb42fba82 -->

<!-- START_784aec390a455073fc7464335c1defa1 -->
## Update the given client.

> Example request:

```bash
curl -X PUT \
    "localhost:5000/storage/oauth/clients/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost:5000/storage/oauth/clients/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->put(
    'localhost:5000/storage/oauth/clients/1',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```



### HTTP Request
`PUT oauth/clients/{client_id}`


<!-- END_784aec390a455073fc7464335c1defa1 -->

<!-- START_1f65a511dd86ba0541d7ba13ca57e364 -->
## Delete the given client.

> Example request:

```bash
curl -X DELETE \
    "localhost:5000/storage/oauth/clients/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost:5000/storage/oauth/clients/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->delete(
    'localhost:5000/storage/oauth/clients/1',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```



### HTTP Request
`DELETE oauth/clients/{client_id}`


<!-- END_1f65a511dd86ba0541d7ba13ca57e364 -->

<!-- START_9e281bd3a1eb1d9eb63190c8effb607c -->
## Get all of the available scopes for the application.

> Example request:

```bash
curl -X GET \
    -G "localhost:5000/storage/oauth/scopes" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost:5000/storage/oauth/scopes"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'localhost:5000/storage/oauth/scopes',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


> Example response (401):

```json
{
    "code": 401,
    "data": null,
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET oauth/scopes`


<!-- END_9e281bd3a1eb1d9eb63190c8effb607c -->

<!-- START_9b2a7699ce6214a79e0fd8107f8b1c9e -->
## Get all of the personal access tokens for the authenticated user.

> Example request:

```bash
curl -X GET \
    -G "localhost:5000/storage/oauth/personal-access-tokens" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost:5000/storage/oauth/personal-access-tokens"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'localhost:5000/storage/oauth/personal-access-tokens',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


> Example response (401):

```json
{
    "code": 401,
    "data": null,
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET oauth/personal-access-tokens`


<!-- END_9b2a7699ce6214a79e0fd8107f8b1c9e -->

<!-- START_a8dd9c0a5583742e671711f9bb3ee406 -->
## Create a new personal access token for the user.

> Example request:

```bash
curl -X POST \
    "localhost:5000/storage/oauth/personal-access-tokens" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost:5000/storage/oauth/personal-access-tokens"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'localhost:5000/storage/oauth/personal-access-tokens',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```



### HTTP Request
`POST oauth/personal-access-tokens`


<!-- END_a8dd9c0a5583742e671711f9bb3ee406 -->

<!-- START_bae65df80fd9d72a01439241a9ea20d0 -->
## Delete the given token.

> Example request:

```bash
curl -X DELETE \
    "localhost:5000/storage/oauth/personal-access-tokens/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost:5000/storage/oauth/personal-access-tokens/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->delete(
    'localhost:5000/storage/oauth/personal-access-tokens/1',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```



### HTTP Request
`DELETE oauth/personal-access-tokens/{token_id}`


<!-- END_bae65df80fd9d72a01439241a9ea20d0 -->

<!-- START_66df3678904adde969490f2278b8f47f -->
## Authenticate the request for channel access.

> Example request:

```bash
curl -X GET \
    -G "localhost:5000/storage/broadcasting/auth" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost:5000/storage/broadcasting/auth"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'localhost:5000/storage/broadcasting/auth',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```



### HTTP Request
`GET broadcasting/auth`

`POST broadcasting/auth`


<!-- END_66df3678904adde969490f2278b8f47f -->

<!-- START_28392b27fc5574a8090dae1b6b3d28b4 -->
## doc/.json
> Example request:

```bash
curl -X GET \
    -G "localhost:5000/storage/doc/.json" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost:5000/storage/doc/.json"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'localhost:5000/storage/doc/.json',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


> Example response (200):

```json
{
    "variables": [],
    "info": {
        "name": "Laravel API",
        "_postman_id": "261724b3-97f6-4bc5-a286-f6255d8223db",
        "description": "",
        "schema": "https:\/\/schema.getpostman.com\/json\/collection\/v2.0.0\/collection.json"
    },
    "item": [
        {
            "name": "Customers Endpoint",
            "description": "\nAPIs for managing customers",
            "item": [
                {
                    "name": "api\/customer\/logout",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:5000\/storage",
                            "path": "api\/customer\/logout",
                            "query": []
                        },
                        "method": "POST",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "api\/customer\/register",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:5000\/storage",
                            "path": "api\/customer\/register",
                            "query": []
                        },
                        "method": "POST",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Login Customer.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:5000\/storage",
                            "path": "api\/customer\/login",
                            "query": []
                        },
                        "method": "POST",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "{\n    \"email\": \"cumque\",\n    \"password\": \"dolorem\"\n}"
                        },
                        "description": "",
                        "response": []
                    }
                }
            ]
        },
        {
            "name": "User Auth",
            "description": "\nAPIs for managing user authentication",
            "item": [
                {
                    "name": "User Login",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:5000\/storage",
                            "path": "api\/auth\/login",
                            "query": []
                        },
                        "method": "POST",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "{\n    \"email\": \"tempore\",\n    \"password\": \"doloribus\"\n}"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "User Registration.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:5000\/storage",
                            "path": "api\/auth\/register",
                            "query": []
                        },
                        "method": "POST",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "api\/users\/verify\/{access_token}",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:5000\/storage",
                            "path": "api\/users\/verify\/:access_token",
                            "query": []
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "api\/users\/check\/{type}",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:5000\/storage",
                            "path": "api\/users\/check\/:type",
                            "query": []
                        },
                        "method": "POST",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                }
            ]
        },
        {
            "name": "general",
            "description": "",
            "item": [
                {
                    "name": "Authorize a client to access the user's account.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:5000\/storage",
                            "path": "oauth\/authorize",
                            "query": []
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Approve the authorization request.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:5000\/storage",
                            "path": "oauth\/authorize",
                            "query": []
                        },
                        "method": "POST",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Deny the authorization request.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:5000\/storage",
                            "path": "oauth\/authorize",
                            "query": []
                        },
                        "method": "DELETE",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Authorize a client to access the user's account.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:5000\/storage",
                            "path": "oauth\/token",
                            "query": []
                        },
                        "method": "POST",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Get all of the authorized tokens for the authenticated user.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:5000\/storage",
                            "path": "oauth\/tokens",
                            "query": []
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Delete the given token.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:5000\/storage",
                            "path": "oauth\/tokens\/:token_id",
                            "query": []
                        },
                        "method": "DELETE",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Get a fresh transient token cookie for the authenticated user.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:5000\/storage",
                            "path": "oauth\/token\/refresh",
                            "query": []
                        },
                        "method": "POST",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Get all of the clients for the authenticated user.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:5000\/storage",
                            "path": "oauth\/clients",
                            "query": []
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Store a new client.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:5000\/storage",
                            "path": "oauth\/clients",
                            "query": []
                        },
                        "method": "POST",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Update the given client.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:5000\/storage",
                            "path": "oauth\/clients\/:client_id",
                            "query": []
                        },
                        "method": "PUT",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Delete the given client.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:5000\/storage",
                            "path": "oauth\/clients\/:client_id",
                            "query": []
                        },
                        "method": "DELETE",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Get all of the available scopes for the application.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:5000\/storage",
                            "path": "oauth\/scopes",
                            "query": []
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Get all of the personal access tokens for the authenticated user.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:5000\/storage",
                            "path": "oauth\/personal-access-tokens",
                            "query": []
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Create a new personal access token for the user.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:5000\/storage",
                            "path": "oauth\/personal-access-tokens",
                            "query": []
                        },
                        "method": "POST",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Delete the given token.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:5000\/storage",
                            "path": "oauth\/personal-access-tokens\/:token_id",
                            "query": []
                        },
                        "method": "DELETE",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Authenticate the request for channel access.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:5000\/storage",
                            "path": "broadcasting\/auth",
                            "query": []
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "doc\/.json",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:5000\/storage",
                            "path": "doc\/.json",
                            "query": []
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "admin\/index",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:5000\/storage",
                            "path": "admin\/index",
                            "query": []
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Display a listing of the resource.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:5000\/storage",
                            "path": "api\/countries",
                            "query": []
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Get datatable json.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:5000\/storage",
                            "path": "admin\/countries\/data",
                            "query": []
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Display a listing of the resource.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:5000\/storage",
                            "path": "admin\/countries",
                            "query": []
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Show creation form.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:5000\/storage",
                            "path": "admin\/countries\/create",
                            "query": []
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Store a newly created resource in storage.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:5000\/storage",
                            "path": "admin\/countries",
                            "query": []
                        },
                        "method": "POST",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Show update form.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:5000\/storage",
                            "path": "admin\/countries\/:country\/edit",
                            "query": []
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Update the specified resource in storage.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:5000\/storage",
                            "path": "admin\/countries\/:country",
                            "query": []
                        },
                        "method": "PUT",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Delete the specified resource in storage.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:5000\/storage",
                            "path": "admin\/countries\/:country",
                            "query": []
                        },
                        "method": "DELETE",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Display a listing of the resource.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:5000\/storage",
                            "path": "api\/cities",
                            "query": []
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Get datatable json.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:5000\/storage",
                            "path": "admin\/cities\/data",
                            "query": []
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Display a listing of the resource.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:5000\/storage",
                            "path": "admin\/cities",
                            "query": []
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Show creation form.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:5000\/storage",
                            "path": "admin\/cities\/create",
                            "query": []
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Store a newly created resource in storage.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:5000\/storage",
                            "path": "admin\/cities",
                            "query": []
                        },
                        "method": "POST",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Show update form.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:5000\/storage",
                            "path": "admin\/cities\/:city\/edit",
                            "query": []
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Update the specified resource in storage.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:5000\/storage",
                            "path": "admin\/cities\/:city",
                            "query": []
                        },
                        "method": "PUT",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Delete the specified resource in storage.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:5000\/storage",
                            "path": "admin\/cities\/:city",
                            "query": []
                        },
                        "method": "DELETE",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Display a listing of the resource.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:5000\/storage",
                            "path": "api\/currencies",
                            "query": []
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Get datatable json.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:5000\/storage",
                            "path": "admin\/currencies\/data",
                            "query": []
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Display a listing of the resource.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:5000\/storage",
                            "path": "admin\/currencies",
                            "query": []
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Show creation form.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:5000\/storage",
                            "path": "admin\/currencies\/create",
                            "query": []
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Store a newly created resource in storage.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:5000\/storage",
                            "path": "admin\/currencies",
                            "query": []
                        },
                        "method": "POST",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Show update form.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:5000\/storage",
                            "path": "admin\/currencies\/:currency\/edit",
                            "query": []
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Update the specified resource in storage.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:5000\/storage",
                            "path": "admin\/currencies\/:currency",
                            "query": []
                        },
                        "method": "PUT",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Delete the specified resource in storage.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:5000\/storage",
                            "path": "admin\/currencies\/:currency",
                            "query": []
                        },
                        "method": "DELETE",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Show login form.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:5000\/storage",
                            "path": "admin\/login",
                            "query": []
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Api login.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:5000\/storage",
                            "path": "admin\/login",
                            "query": []
                        },
                        "method": "POST",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "admin\/logout",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:5000\/storage",
                            "path": "admin\/logout",
                            "query": []
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "send email with reset password code.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:5000\/storage",
                            "path": "api\/reset-passwords\/email",
                            "query": []
                        },
                        "method": "POST",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "check reset password code.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:5000\/storage",
                            "path": "api\/reset-passwords\/check-code",
                            "query": []
                        },
                        "method": "POST",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Reset user password.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:5000\/storage",
                            "path": "api\/reset-passwords\/reset",
                            "query": []
                        },
                        "method": "PATCH",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "get user profile.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:5000\/storage",
                            "path": "api\/profile",
                            "query": []
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "update user password.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:5000\/storage",
                            "path": "api\/profile\/update-password",
                            "query": []
                        },
                        "method": "PATCH",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "update user profile.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:5000\/storage",
                            "path": "api\/profile\/update",
                            "query": []
                        },
                        "method": "POST",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Display a listing of the normal users.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:5000\/storage",
                            "path": "admin\/users",
                            "query": []
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Get datatable json.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:5000\/storage",
                            "path": "admin\/users\/data",
                            "query": []
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "update normal user resource.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:5000\/storage",
                            "path": "admin\/users\/update-status\/:id",
                            "query": []
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Display a listing of the resource.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:5000\/storage",
                            "path": "api\/contact-us",
                            "query": []
                        },
                        "method": "POST",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Display a listing of the resource.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:5000\/storage",
                            "path": "admin\/contact-us",
                            "query": []
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Display a listing of the resource.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:5000\/storage",
                            "path": "api\/base-modules",
                            "query": []
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Get datatable json.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:5000\/storage",
                            "path": "admin\/base-modules\/data",
                            "query": []
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Display a listing of the resource.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:5000\/storage",
                            "path": "admin\/base-modules",
                            "query": []
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Show creation form.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:5000\/storage",
                            "path": "admin\/base-modules\/create",
                            "query": []
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Store a newly created resource in storage.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:5000\/storage",
                            "path": "admin\/base-modules",
                            "query": []
                        },
                        "method": "POST",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Show update form.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:5000\/storage",
                            "path": "admin\/base-modules\/:base_module\/edit",
                            "query": []
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Update the specified resource in storage.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:5000\/storage",
                            "path": "admin\/base-modules\/:base_module",
                            "query": []
                        },
                        "method": "PUT",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Delete the specified resource in storage.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:5000\/storage",
                            "path": "admin\/base-modules\/:base_module",
                            "query": []
                        },
                        "method": "DELETE",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Display a listing of the resource.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:5000\/storage",
                            "path": "api\/categories",
                            "query": []
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Get datatable json.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:5000\/storage",
                            "path": "admin\/categories\/data",
                            "query": []
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Display a listing of the resource.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:5000\/storage",
                            "path": "admin\/categories",
                            "query": []
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Show creation form.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:5000\/storage",
                            "path": "admin\/categories\/create",
                            "query": []
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Store a newly created resource in storage.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:5000\/storage",
                            "path": "admin\/categories",
                            "query": []
                        },
                        "method": "POST",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Show update form.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:5000\/storage",
                            "path": "admin\/categories\/:category\/edit",
                            "query": []
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Update the specified resource in storage.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:5000\/storage",
                            "path": "admin\/categories\/:category",
                            "query": []
                        },
                        "method": "PUT",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Delete the specified resource in storage.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:5000\/storage",
                            "path": "admin\/categories\/:category",
                            "query": []
                        },
                        "method": "DELETE",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Get datatable json.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:5000\/storage",
                            "path": "admin\/customers\/data",
                            "query": []
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Display a listing of the resource.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:5000\/storage",
                            "path": "admin\/customers",
                            "query": []
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Show creation form.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:5000\/storage",
                            "path": "admin\/customers\/create",
                            "query": []
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Store a newly created resource in storage.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:5000\/storage",
                            "path": "admin\/customers",
                            "query": []
                        },
                        "method": "POST",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Show update form.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:5000\/storage",
                            "path": "admin\/customers\/:customer\/edit",
                            "query": []
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Update the specified resource in storage.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:5000\/storage",
                            "path": "admin\/customers\/:customer",
                            "query": []
                        },
                        "method": "PUT",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Delete the specified resource in storage.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:5000\/storage",
                            "path": "admin\/customers\/:customer",
                            "query": []
                        },
                        "method": "DELETE",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "api\/professional\/logout",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:5000\/storage",
                            "path": "api\/professional\/logout",
                            "query": []
                        },
                        "method": "POST",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "api\/professional\/register",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:5000\/storage",
                            "path": "api\/professional\/register",
                            "query": []
                        },
                        "method": "POST",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "api\/professional\/login",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:5000\/storage",
                            "path": "api\/professional\/login",
                            "query": []
                        },
                        "method": "POST",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Get datatable json.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:5000\/storage",
                            "path": "admin\/professionals\/data",
                            "query": []
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Display a listing of the resource.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:5000\/storage",
                            "path": "admin\/professionals",
                            "query": []
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Show creation form.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:5000\/storage",
                            "path": "admin\/professionals\/create",
                            "query": []
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Store a newly created resource in storage.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:5000\/storage",
                            "path": "admin\/professionals",
                            "query": []
                        },
                        "method": "POST",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Show update form.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:5000\/storage",
                            "path": "admin\/professionals\/:professional\/edit",
                            "query": []
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Update the specified resource in storage.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:5000\/storage",
                            "path": "admin\/professionals\/:professional",
                            "query": []
                        },
                        "method": "PUT",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Delete the specified resource in storage.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:5000\/storage",
                            "path": "admin\/professionals\/:professional",
                            "query": []
                        },
                        "method": "DELETE",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Display a listing of the resource.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:5000\/storage",
                            "path": "api\/service-types",
                            "query": []
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Get datatable json.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:5000\/storage",
                            "path": "admin\/service-types\/data",
                            "query": []
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Display a listing of the resource.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:5000\/storage",
                            "path": "admin\/service-types",
                            "query": []
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Show creation form.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:5000\/storage",
                            "path": "admin\/service-types\/create",
                            "query": []
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Store a newly created resource in storage.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:5000\/storage",
                            "path": "admin\/service-types",
                            "query": []
                        },
                        "method": "POST",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Show update form.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:5000\/storage",
                            "path": "admin\/service-types\/:service_type\/edit",
                            "query": []
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Update the specified resource in storage.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:5000\/storage",
                            "path": "admin\/service-types\/:service_type",
                            "query": []
                        },
                        "method": "PUT",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Delete the specified resource in storage.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:5000\/storage",
                            "path": "admin\/service-types\/:service_type",
                            "query": []
                        },
                        "method": "DELETE",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Display a listing of the resource.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:5000\/storage",
                            "path": "api\/projects",
                            "query": []
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Get datatable json.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:5000\/storage",
                            "path": "admin\/projects\/data",
                            "query": []
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Display a listing of the resource.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:5000\/storage",
                            "path": "admin\/projects",
                            "query": []
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Show creation form.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:5000\/storage",
                            "path": "admin\/projects\/create",
                            "query": []
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Store a newly created resource in storage.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:5000\/storage",
                            "path": "admin\/projects",
                            "query": []
                        },
                        "method": "POST",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Show update form.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:5000\/storage",
                            "path": "admin\/projects\/:project\/edit",
                            "query": []
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Update the specified resource in storage.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:5000\/storage",
                            "path": "admin\/projects\/:project",
                            "query": []
                        },
                        "method": "PUT",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Delete the specified resource in storage.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:5000\/storage",
                            "path": "admin\/projects\/:project",
                            "query": []
                        },
                        "method": "DELETE",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Display a listing of the resource.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:5000\/storage",
                            "path": "api\/project-types",
                            "query": []
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Get datatable json.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:5000\/storage",
                            "path": "admin\/project-types\/data",
                            "query": []
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Display a listing of the resource.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:5000\/storage",
                            "path": "admin\/project-types",
                            "query": []
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Show creation form.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:5000\/storage",
                            "path": "admin\/project-types\/create",
                            "query": []
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Store a newly created resource in storage.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:5000\/storage",
                            "path": "admin\/project-types",
                            "query": []
                        },
                        "method": "POST",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Show update form.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:5000\/storage",
                            "path": "admin\/project-types\/:project_type\/edit",
                            "query": []
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Update the specified resource in storage.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:5000\/storage",
                            "path": "admin\/project-types\/:project_type",
                            "query": []
                        },
                        "method": "PUT",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Delete the specified resource in storage.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:5000\/storage",
                            "path": "admin\/project-types\/:project_type",
                            "query": []
                        },
                        "method": "DELETE",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Display a listing of the resource.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:5000\/storage",
                            "path": "api\/houses",
                            "query": []
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Get datatable json.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:5000\/storage",
                            "path": "admin\/houses\/data",
                            "query": []
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Display a listing of the resource.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:5000\/storage",
                            "path": "admin\/houses",
                            "query": []
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Show creation form.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:5000\/storage",
                            "path": "admin\/houses\/create",
                            "query": []
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Store a newly created resource in storage.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:5000\/storage",
                            "path": "admin\/houses",
                            "query": []
                        },
                        "method": "POST",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Show update form.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:5000\/storage",
                            "path": "admin\/houses\/:house\/edit",
                            "query": []
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Update the specified resource in storage.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:5000\/storage",
                            "path": "admin\/houses\/:house",
                            "query": []
                        },
                        "method": "PUT",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Delete the specified resource in storage.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:5000\/storage",
                            "path": "admin\/houses\/:house",
                            "query": []
                        },
                        "method": "DELETE",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Display a listing of the resource.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:5000\/storage",
                            "path": "api\/realtors",
                            "query": []
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Get datatable json.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:5000\/storage",
                            "path": "admin\/realtors\/data",
                            "query": []
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Display a listing of the resource.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:5000\/storage",
                            "path": "admin\/realtors",
                            "query": []
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Show creation form.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:5000\/storage",
                            "path": "admin\/realtors\/create",
                            "query": []
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Store a newly created resource in storage.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:5000\/storage",
                            "path": "admin\/realtors",
                            "query": []
                        },
                        "method": "POST",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Show update form.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:5000\/storage",
                            "path": "admin\/realtors\/:realtor\/edit",
                            "query": []
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Update the specified resource in storage.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:5000\/storage",
                            "path": "admin\/realtors\/:realtor",
                            "query": []
                        },
                        "method": "PUT",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Delete the specified resource in storage.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:5000\/storage",
                            "path": "admin\/realtors\/:realtor",
                            "query": []
                        },
                        "method": "DELETE",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Display a listing of the resource.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:5000\/storage",
                            "path": "api\/rooms",
                            "query": []
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Get datatable json.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:5000\/storage",
                            "path": "admin\/rooms\/data",
                            "query": []
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Display a listing of the resource.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:5000\/storage",
                            "path": "admin\/rooms",
                            "query": []
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Show creation form.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:5000\/storage",
                            "path": "admin\/rooms\/create",
                            "query": []
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Store a newly created resource in storage.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:5000\/storage",
                            "path": "admin\/rooms",
                            "query": []
                        },
                        "method": "POST",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Show update form.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:5000\/storage",
                            "path": "admin\/rooms\/:room\/edit",
                            "query": []
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Update the specified resource in storage.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:5000\/storage",
                            "path": "admin\/rooms\/:room",
                            "query": []
                        },
                        "method": "PUT",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Delete the specified resource in storage.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:5000\/storage",
                            "path": "admin\/rooms\/:room",
                            "query": []
                        },
                        "method": "DELETE",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Display a listing of the resource.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:5000\/storage",
                            "path": "api\/room-issues",
                            "query": []
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Get datatable json.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:5000\/storage",
                            "path": "admin\/room-issues\/data",
                            "query": []
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Display a listing of the resource.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:5000\/storage",
                            "path": "admin\/room-issues",
                            "query": []
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Show creation form.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:5000\/storage",
                            "path": "admin\/room-issues\/create",
                            "query": []
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Store a newly created resource in storage.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:5000\/storage",
                            "path": "admin\/room-issues",
                            "query": []
                        },
                        "method": "POST",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Show update form.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:5000\/storage",
                            "path": "admin\/room-issues\/:room_issue\/edit",
                            "query": []
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Update the specified resource in storage.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:5000\/storage",
                            "path": "admin\/room-issues\/:room_issue",
                            "query": []
                        },
                        "method": "PUT",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Delete the specified resource in storage.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:5000\/storage",
                            "path": "admin\/room-issues\/:room_issue",
                            "query": []
                        },
                        "method": "DELETE",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Display a listing of the resource.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:5000\/storage",
                            "path": "api\/features",
                            "query": []
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Get datatable json.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:5000\/storage",
                            "path": "admin\/features\/data",
                            "query": []
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Display a listing of the resource.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:5000\/storage",
                            "path": "admin\/features",
                            "query": []
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Show creation form.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:5000\/storage",
                            "path": "admin\/features\/create",
                            "query": []
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Store a newly created resource in storage.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:5000\/storage",
                            "path": "admin\/features",
                            "query": []
                        },
                        "method": "POST",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Show update form.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:5000\/storage",
                            "path": "admin\/features\/:feature\/edit",
                            "query": []
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Update the specified resource in storage.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:5000\/storage",
                            "path": "admin\/features\/:feature",
                            "query": []
                        },
                        "method": "PUT",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Delete the specified resource in storage.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:5000\/storage",
                            "path": "admin\/features\/:feature",
                            "query": []
                        },
                        "method": "DELETE",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Display a listing of the resource.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:5000\/storage",
                            "path": "api\/feature-options",
                            "query": []
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Get datatable json.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:5000\/storage",
                            "path": "admin\/feature-options\/data",
                            "query": []
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Display a listing of the resource.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:5000\/storage",
                            "path": "admin\/feature-options",
                            "query": []
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Show creation form.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:5000\/storage",
                            "path": "admin\/feature-options\/create",
                            "query": []
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Store a newly created resource in storage.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:5000\/storage",
                            "path": "admin\/feature-options",
                            "query": []
                        },
                        "method": "POST",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Show update form.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:5000\/storage",
                            "path": "admin\/feature-options\/:feature_option\/edit",
                            "query": []
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Update the specified resource in storage.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:5000\/storage",
                            "path": "admin\/feature-options\/:feature_option",
                            "query": []
                        },
                        "method": "PUT",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Delete the specified resource in storage.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:5000\/storage",
                            "path": "admin\/feature-options\/:feature_option",
                            "query": []
                        },
                        "method": "DELETE",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Display a listing of the resource.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:5000\/storage",
                            "path": "api\/project-opportunities",
                            "query": []
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Get datatable json.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:5000\/storage",
                            "path": "admin\/project-opportunities\/data",
                            "query": []
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Display a listing of the resource.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:5000\/storage",
                            "path": "admin\/project-opportunities",
                            "query": []
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Show creation form.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:5000\/storage",
                            "path": "admin\/project-opportunities\/create",
                            "query": []
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Store a newly created resource in storage.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:5000\/storage",
                            "path": "admin\/project-opportunities",
                            "query": []
                        },
                        "method": "POST",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Show update form.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:5000\/storage",
                            "path": "admin\/project-opportunities\/:project_opportunity\/edit",
                            "query": []
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Update the specified resource in storage.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:5000\/storage",
                            "path": "admin\/project-opportunities\/:project_opportunity",
                            "query": []
                        },
                        "method": "PUT",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Delete the specified resource in storage.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:5000\/storage",
                            "path": "admin\/project-opportunities\/:project_opportunity",
                            "query": []
                        },
                        "method": "DELETE",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Display a listing of the resource.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:5000\/storage",
                            "path": "api\/home-diagnostic-reports",
                            "query": []
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Get datatable json.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:5000\/storage",
                            "path": "admin\/home-diagnostic-reports\/data",
                            "query": []
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Display a listing of the resource.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:5000\/storage",
                            "path": "admin\/home-diagnostic-reports",
                            "query": []
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Show creation form.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:5000\/storage",
                            "path": "admin\/home-diagnostic-reports\/create",
                            "query": []
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Store a newly created resource in storage.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:5000\/storage",
                            "path": "admin\/home-diagnostic-reports",
                            "query": []
                        },
                        "method": "POST",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Show update form.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:5000\/storage",
                            "path": "admin\/home-diagnostic-reports\/:home_diagnostic_report\/edit",
                            "query": []
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Update the specified resource in storage.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:5000\/storage",
                            "path": "admin\/home-diagnostic-reports\/:home_diagnostic_report",
                            "query": []
                        },
                        "method": "PUT",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Delete the specified resource in storage.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:5000\/storage",
                            "path": "admin\/home-diagnostic-reports\/:home_diagnostic_report",
                            "query": []
                        },
                        "method": "DELETE",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                }
            ]
        }
    ]
}
```

### HTTP Request
`GET doc/.json`


<!-- END_28392b27fc5574a8090dae1b6b3d28b4 -->

<!-- START_66d0019654df7c46603b77f5ebad0c0e -->
## admin/index
> Example request:

```bash
curl -X GET \
    -G "localhost:5000/storage/admin/index" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost:5000/storage/admin/index"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'localhost:5000/storage/admin/index',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


> Example response (401):

```json
{
    "code": 401,
    "data": null,
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET admin/index`


<!-- END_66d0019654df7c46603b77f5ebad0c0e -->

<!-- START_316a4c3b4f6a4c4ff34e5893943cdebd -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "localhost:5000/storage/api/countries" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost:5000/storage/api/countries"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'localhost:5000/storage/api/countries',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


> Example response (200):

```json
{
    "data": []
}
```

### HTTP Request
`GET api/countries`


<!-- END_316a4c3b4f6a4c4ff34e5893943cdebd -->

<!-- START_ad1c709cca9e1c2520b8304d267a2518 -->
## Get datatable json.

> Example request:

```bash
curl -X GET \
    -G "localhost:5000/storage/admin/countries/data" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost:5000/storage/admin/countries/data"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'localhost:5000/storage/admin/countries/data',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


> Example response (401):

```json
{
    "code": 401,
    "data": null,
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET admin/countries/data`


<!-- END_ad1c709cca9e1c2520b8304d267a2518 -->

<!-- START_479865fb108b3d2e9b0e60a1c7de342f -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "localhost:5000/storage/admin/countries" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost:5000/storage/admin/countries"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'localhost:5000/storage/admin/countries',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


> Example response (401):

```json
{
    "code": 401,
    "data": null,
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET admin/countries`


<!-- END_479865fb108b3d2e9b0e60a1c7de342f -->

<!-- START_c56f911194f5d8d4e538d55adc23b031 -->
## Show creation form.

> Example request:

```bash
curl -X GET \
    -G "localhost:5000/storage/admin/countries/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost:5000/storage/admin/countries/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'localhost:5000/storage/admin/countries/create',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


> Example response (401):

```json
{
    "code": 401,
    "data": null,
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET admin/countries/create`


<!-- END_c56f911194f5d8d4e538d55adc23b031 -->

<!-- START_254dadcb819b90906db939287c4ff7c3 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "localhost:5000/storage/admin/countries" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost:5000/storage/admin/countries"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'localhost:5000/storage/admin/countries',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```



### HTTP Request
`POST admin/countries`


<!-- END_254dadcb819b90906db939287c4ff7c3 -->

<!-- START_381300b259bc5dd7144c87ff88424fb3 -->
## Show update form.

> Example request:

```bash
curl -X GET \
    -G "localhost:5000/storage/admin/countries/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost:5000/storage/admin/countries/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'localhost:5000/storage/admin/countries/1/edit',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


> Example response (401):

```json
{
    "code": 401,
    "data": null,
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET admin/countries/{country}/edit`


<!-- END_381300b259bc5dd7144c87ff88424fb3 -->

<!-- START_3b31d6b7aad49719ce6897bbbc1e0989 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "localhost:5000/storage/admin/countries/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost:5000/storage/admin/countries/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->put(
    'localhost:5000/storage/admin/countries/1',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```



### HTTP Request
`PUT admin/countries/{country}`

`PATCH admin/countries/{country}`


<!-- END_3b31d6b7aad49719ce6897bbbc1e0989 -->

<!-- START_db265f076f6b9a2121da0ac9414edeed -->
## Delete the specified resource in storage.

> Example request:

```bash
curl -X DELETE \
    "localhost:5000/storage/admin/countries/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost:5000/storage/admin/countries/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->delete(
    'localhost:5000/storage/admin/countries/1',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```



### HTTP Request
`DELETE admin/countries/{country}`


<!-- END_db265f076f6b9a2121da0ac9414edeed -->

<!-- START_56d7be9447e2ce39ac69b09141bf5902 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "localhost:5000/storage/api/cities" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost:5000/storage/api/cities"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'localhost:5000/storage/api/cities',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


> Example response (200):

```json
{
    "data": []
}
```

### HTTP Request
`GET api/cities`


<!-- END_56d7be9447e2ce39ac69b09141bf5902 -->

<!-- START_95aac3343269d53a924efe6ce1182cde -->
## Get datatable json.

> Example request:

```bash
curl -X GET \
    -G "localhost:5000/storage/admin/cities/data" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost:5000/storage/admin/cities/data"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'localhost:5000/storage/admin/cities/data',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


> Example response (401):

```json
{
    "code": 401,
    "data": null,
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET admin/cities/data`


<!-- END_95aac3343269d53a924efe6ce1182cde -->

<!-- START_85ecbe8414dce644682b715a532e8cfb -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "localhost:5000/storage/admin/cities" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost:5000/storage/admin/cities"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'localhost:5000/storage/admin/cities',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


> Example response (401):

```json
{
    "code": 401,
    "data": null,
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET admin/cities`


<!-- END_85ecbe8414dce644682b715a532e8cfb -->

<!-- START_5074ab2aed09a5c321670467c6cc64a0 -->
## Show creation form.

> Example request:

```bash
curl -X GET \
    -G "localhost:5000/storage/admin/cities/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost:5000/storage/admin/cities/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'localhost:5000/storage/admin/cities/create',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


> Example response (401):

```json
{
    "code": 401,
    "data": null,
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET admin/cities/create`


<!-- END_5074ab2aed09a5c321670467c6cc64a0 -->

<!-- START_2792df8d5764696d3ea3d647e803b2de -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "localhost:5000/storage/admin/cities" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost:5000/storage/admin/cities"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'localhost:5000/storage/admin/cities',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```



### HTTP Request
`POST admin/cities`


<!-- END_2792df8d5764696d3ea3d647e803b2de -->

<!-- START_83b1448ab0ba1f1a1cf6d23ddef29941 -->
## Show update form.

> Example request:

```bash
curl -X GET \
    -G "localhost:5000/storage/admin/cities/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost:5000/storage/admin/cities/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'localhost:5000/storage/admin/cities/1/edit',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


> Example response (401):

```json
{
    "code": 401,
    "data": null,
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET admin/cities/{city}/edit`


<!-- END_83b1448ab0ba1f1a1cf6d23ddef29941 -->

<!-- START_08648d4f180e91b6c44881ac20fa7a60 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "localhost:5000/storage/admin/cities/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost:5000/storage/admin/cities/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->put(
    'localhost:5000/storage/admin/cities/1',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```



### HTTP Request
`PUT admin/cities/{city}`

`PATCH admin/cities/{city}`


<!-- END_08648d4f180e91b6c44881ac20fa7a60 -->

<!-- START_48bee51bd367060dd10ec289189bc3cf -->
## Delete the specified resource in storage.

> Example request:

```bash
curl -X DELETE \
    "localhost:5000/storage/admin/cities/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost:5000/storage/admin/cities/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->delete(
    'localhost:5000/storage/admin/cities/1',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```



### HTTP Request
`DELETE admin/cities/{city}`


<!-- END_48bee51bd367060dd10ec289189bc3cf -->

<!-- START_aa2087c88a0544b7da514dfdd673acc0 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "localhost:5000/storage/api/currencies" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost:5000/storage/api/currencies"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'localhost:5000/storage/api/currencies',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


> Example response (401):

```json
{
    "code": 401,
    "data": null,
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET api/currencies`


<!-- END_aa2087c88a0544b7da514dfdd673acc0 -->

<!-- START_b11a5e62b12df5b49343c1564ef119b5 -->
## Get datatable json.

> Example request:

```bash
curl -X GET \
    -G "localhost:5000/storage/admin/currencies/data" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost:5000/storage/admin/currencies/data"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'localhost:5000/storage/admin/currencies/data',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


> Example response (401):

```json
{
    "code": 401,
    "data": null,
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET admin/currencies/data`


<!-- END_b11a5e62b12df5b49343c1564ef119b5 -->

<!-- START_7e7dd7ef370dc0d903592dc3d61a2679 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "localhost:5000/storage/admin/currencies" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost:5000/storage/admin/currencies"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'localhost:5000/storage/admin/currencies',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


> Example response (401):

```json
{
    "code": 401,
    "data": null,
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET admin/currencies`


<!-- END_7e7dd7ef370dc0d903592dc3d61a2679 -->

<!-- START_759ec66faa006361933dc6483675a593 -->
## Show creation form.

> Example request:

```bash
curl -X GET \
    -G "localhost:5000/storage/admin/currencies/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost:5000/storage/admin/currencies/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'localhost:5000/storage/admin/currencies/create',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


> Example response (401):

```json
{
    "code": 401,
    "data": null,
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET admin/currencies/create`


<!-- END_759ec66faa006361933dc6483675a593 -->

<!-- START_662455b48bf62fa564f74fe13568b573 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "localhost:5000/storage/admin/currencies" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost:5000/storage/admin/currencies"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'localhost:5000/storage/admin/currencies',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```



### HTTP Request
`POST admin/currencies`


<!-- END_662455b48bf62fa564f74fe13568b573 -->

<!-- START_c0308cdf1506c8995c0c0f631fd9e609 -->
## Show update form.

> Example request:

```bash
curl -X GET \
    -G "localhost:5000/storage/admin/currencies/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost:5000/storage/admin/currencies/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'localhost:5000/storage/admin/currencies/1/edit',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


> Example response (401):

```json
{
    "code": 401,
    "data": null,
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET admin/currencies/{currency}/edit`


<!-- END_c0308cdf1506c8995c0c0f631fd9e609 -->

<!-- START_4c5195471f7f7bab3e804fe5d033ae93 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "localhost:5000/storage/admin/currencies/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost:5000/storage/admin/currencies/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->put(
    'localhost:5000/storage/admin/currencies/1',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```



### HTTP Request
`PUT admin/currencies/{currency}`

`PATCH admin/currencies/{currency}`


<!-- END_4c5195471f7f7bab3e804fe5d033ae93 -->

<!-- START_91fb48ac3dd90af632136eac62d8b4b4 -->
## Delete the specified resource in storage.

> Example request:

```bash
curl -X DELETE \
    "localhost:5000/storage/admin/currencies/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost:5000/storage/admin/currencies/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->delete(
    'localhost:5000/storage/admin/currencies/1',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```



### HTTP Request
`DELETE admin/currencies/{currency}`


<!-- END_91fb48ac3dd90af632136eac62d8b4b4 -->

<!-- START_03a76d7b7a89853a08696bfe71bbbba7 -->
## Show login form.

> Example request:

```bash
curl -X GET \
    -G "localhost:5000/storage/admin/login" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost:5000/storage/admin/login"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'localhost:5000/storage/admin/login',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET admin/login`


<!-- END_03a76d7b7a89853a08696bfe71bbbba7 -->

<!-- START_fe5fe3a14f04e5648848f1a59ea3da82 -->
## Api login.

> Example request:

```bash
curl -X POST \
    "localhost:5000/storage/admin/login" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost:5000/storage/admin/login"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'localhost:5000/storage/admin/login',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```



### HTTP Request
`POST admin/login`


<!-- END_fe5fe3a14f04e5648848f1a59ea3da82 -->

<!-- START_b37225c1c4a9d4a9e253fecd543b79a0 -->
## admin/logout
> Example request:

```bash
curl -X GET \
    -G "localhost:5000/storage/admin/logout" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost:5000/storage/admin/logout"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'localhost:5000/storage/admin/logout',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET admin/logout`


<!-- END_b37225c1c4a9d4a9e253fecd543b79a0 -->

<!-- START_a925a8d22b3615f12fca79456d286859 -->
## api/auth/login
> Example request:

```bash
curl -X POST \
    "localhost:5000/storage/api/auth/login" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost:5000/storage/api/auth/login"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'localhost:5000/storage/api/auth/login',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```



### HTTP Request
`POST api/auth/login`


<!-- END_a925a8d22b3615f12fca79456d286859 -->

<!-- START_2e1c96dcffcfe7e0eb58d6408f1d619e -->
## api/auth/register
> Example request:

```bash
curl -X POST \
    "localhost:5000/storage/api/auth/register" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost:5000/storage/api/auth/register"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'localhost:5000/storage/api/auth/register',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```



### HTTP Request
`POST api/auth/register`


<!-- END_2e1c96dcffcfe7e0eb58d6408f1d619e -->

<!-- START_c6b158b52c0a42f53a491591542958d8 -->
## api/users/verify/{access_token}
> Example request:

```bash
curl -X GET \
    -G "localhost:5000/storage/api/users/verify/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost:5000/storage/api/users/verify/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'localhost:5000/storage/api/users/verify/1',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/users/verify/{access_token}`


<!-- END_c6b158b52c0a42f53a491591542958d8 -->

<!-- START_44ba07b044477fc63010591f3ae1a268 -->
## api/users/check/{type}
> Example request:

```bash
curl -X POST \
    "localhost:5000/storage/api/users/check/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost:5000/storage/api/users/check/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'localhost:5000/storage/api/users/check/1',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```



### HTTP Request
`POST api/users/check/{type}`


<!-- END_44ba07b044477fc63010591f3ae1a268 -->

<!-- START_b54a99dd5a947f0a64e8685146d8a083 -->
## send email with reset password code.

> Example request:

```bash
curl -X POST \
    "localhost:5000/storage/api/reset-passwords/email" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost:5000/storage/api/reset-passwords/email"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'localhost:5000/storage/api/reset-passwords/email',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```



### HTTP Request
`POST api/reset-passwords/email`


<!-- END_b54a99dd5a947f0a64e8685146d8a083 -->

<!-- START_7641e1d7b98fc444475412477cde8e97 -->
## check reset password code.

> Example request:

```bash
curl -X POST \
    "localhost:5000/storage/api/reset-passwords/check-code" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost:5000/storage/api/reset-passwords/check-code"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'localhost:5000/storage/api/reset-passwords/check-code',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```



### HTTP Request
`POST api/reset-passwords/check-code`


<!-- END_7641e1d7b98fc444475412477cde8e97 -->

<!-- START_3eec216a66781fd70cdf5e4128bd5d36 -->
## Reset user password.

> Example request:

```bash
curl -X PATCH \
    "localhost:5000/storage/api/reset-passwords/reset" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost:5000/storage/api/reset-passwords/reset"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PATCH",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->patch(
    'localhost:5000/storage/api/reset-passwords/reset',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```



### HTTP Request
`PATCH api/reset-passwords/reset`


<!-- END_3eec216a66781fd70cdf5e4128bd5d36 -->

<!-- START_3c520b0ccdbf5100b6f6994368e1b344 -->
## get user profile.

> Example request:

```bash
curl -X GET \
    -G "localhost:5000/storage/api/profile" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost:5000/storage/api/profile"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'localhost:5000/storage/api/profile',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


> Example response (401):

```json
{
    "code": 401,
    "data": null,
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET api/profile`


<!-- END_3c520b0ccdbf5100b6f6994368e1b344 -->

<!-- START_41e364bb166745de616b7092be03b18f -->
## update user password.

> Example request:

```bash
curl -X PATCH \
    "localhost:5000/storage/api/profile/update-password" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost:5000/storage/api/profile/update-password"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PATCH",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->patch(
    'localhost:5000/storage/api/profile/update-password',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```



### HTTP Request
`PATCH api/profile/update-password`


<!-- END_41e364bb166745de616b7092be03b18f -->

<!-- START_a5c6310c3509d478f05f37ef97fbd242 -->
## update user profile.

> Example request:

```bash
curl -X POST \
    "localhost:5000/storage/api/profile/update" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost:5000/storage/api/profile/update"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'localhost:5000/storage/api/profile/update',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```



### HTTP Request
`POST api/profile/update`


<!-- END_a5c6310c3509d478f05f37ef97fbd242 -->

<!-- START_7614490a3eef5fbcba402080d0369e6a -->
## Display a listing of the normal users.

> Example request:

```bash
curl -X GET \
    -G "localhost:5000/storage/admin/users" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost:5000/storage/admin/users"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'localhost:5000/storage/admin/users',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


> Example response (401):

```json
{
    "code": 401,
    "data": null,
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET admin/users`


<!-- END_7614490a3eef5fbcba402080d0369e6a -->

<!-- START_acdd6537188ee02bda33af21c9f11856 -->
## Get datatable json.

> Example request:

```bash
curl -X GET \
    -G "localhost:5000/storage/admin/users/data" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost:5000/storage/admin/users/data"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'localhost:5000/storage/admin/users/data',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


> Example response (401):

```json
{
    "code": 401,
    "data": null,
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET admin/users/data`


<!-- END_acdd6537188ee02bda33af21c9f11856 -->

<!-- START_f10976b4b26c0ae361713997540d2dfc -->
## update normal user resource.

> Example request:

```bash
curl -X GET \
    -G "localhost:5000/storage/admin/users/update-status/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost:5000/storage/admin/users/update-status/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'localhost:5000/storage/admin/users/update-status/1',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


> Example response (401):

```json
{
    "code": 401,
    "data": null,
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET admin/users/update-status/{id}`


<!-- END_f10976b4b26c0ae361713997540d2dfc -->

<!-- START_e0cc7781f77aa50d54a15c7851b36d0b -->
## Display a listing of the resource.

> Example request:

```bash
curl -X POST \
    "localhost:5000/storage/api/contact-us" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost:5000/storage/api/contact-us"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'localhost:5000/storage/api/contact-us',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```



### HTTP Request
`POST api/contact-us`


<!-- END_e0cc7781f77aa50d54a15c7851b36d0b -->

<!-- START_aefb563671aadab086b265fb6da8d9fe -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "localhost:5000/storage/admin/contact-us" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost:5000/storage/admin/contact-us"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'localhost:5000/storage/admin/contact-us',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


> Example response (401):

```json
{
    "code": 401,
    "data": null,
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET admin/contact-us`


<!-- END_aefb563671aadab086b265fb6da8d9fe -->

<!-- START_c2ba0e5e689eedb2ffa6bfb14e7482b3 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "localhost:5000/storage/api/base-modules" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost:5000/storage/api/base-modules"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'localhost:5000/storage/api/base-modules',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


> Example response (401):

```json
{
    "code": 401,
    "data": null,
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET api/base-modules`


<!-- END_c2ba0e5e689eedb2ffa6bfb14e7482b3 -->

<!-- START_2523f7882043460c0a1b67a97d787847 -->
## Get datatable json.

> Example request:

```bash
curl -X GET \
    -G "localhost:5000/storage/admin/base-modules/data" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost:5000/storage/admin/base-modules/data"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'localhost:5000/storage/admin/base-modules/data',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


> Example response (401):

```json
{
    "code": 401,
    "data": null,
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET admin/base-modules/data`


<!-- END_2523f7882043460c0a1b67a97d787847 -->

<!-- START_be26cb02d7c3f5c0ea059ad42711e319 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "localhost:5000/storage/admin/base-modules" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost:5000/storage/admin/base-modules"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'localhost:5000/storage/admin/base-modules',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


> Example response (401):

```json
{
    "code": 401,
    "data": null,
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET admin/base-modules`


<!-- END_be26cb02d7c3f5c0ea059ad42711e319 -->

<!-- START_3c0ba5a91a3d5f49079de769d3ccfca3 -->
## Show creation form.

> Example request:

```bash
curl -X GET \
    -G "localhost:5000/storage/admin/base-modules/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost:5000/storage/admin/base-modules/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'localhost:5000/storage/admin/base-modules/create',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


> Example response (401):

```json
{
    "code": 401,
    "data": null,
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET admin/base-modules/create`


<!-- END_3c0ba5a91a3d5f49079de769d3ccfca3 -->

<!-- START_41b6762eb985b7a06d753ed9b5895d95 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "localhost:5000/storage/admin/base-modules" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost:5000/storage/admin/base-modules"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'localhost:5000/storage/admin/base-modules',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```



### HTTP Request
`POST admin/base-modules`


<!-- END_41b6762eb985b7a06d753ed9b5895d95 -->

<!-- START_958244f93e4ce543982983136fb2c01f -->
## Show update form.

> Example request:

```bash
curl -X GET \
    -G "localhost:5000/storage/admin/base-modules/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost:5000/storage/admin/base-modules/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'localhost:5000/storage/admin/base-modules/1/edit',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


> Example response (401):

```json
{
    "code": 401,
    "data": null,
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET admin/base-modules/{base_module}/edit`


<!-- END_958244f93e4ce543982983136fb2c01f -->

<!-- START_c5d312db9b8702246bb67a5596b2591a -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "localhost:5000/storage/admin/base-modules/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost:5000/storage/admin/base-modules/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->put(
    'localhost:5000/storage/admin/base-modules/1',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```



### HTTP Request
`PUT admin/base-modules/{base_module}`

`PATCH admin/base-modules/{base_module}`


<!-- END_c5d312db9b8702246bb67a5596b2591a -->

<!-- START_bed66dd82887e88fa09c587b3096f741 -->
## Delete the specified resource in storage.

> Example request:

```bash
curl -X DELETE \
    "localhost:5000/storage/admin/base-modules/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost:5000/storage/admin/base-modules/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->delete(
    'localhost:5000/storage/admin/base-modules/1',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```



### HTTP Request
`DELETE admin/base-modules/{base_module}`


<!-- END_bed66dd82887e88fa09c587b3096f741 -->

<!-- START_109013899e0bc43247b0f00b67f889cf -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "localhost:5000/storage/api/categories" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost:5000/storage/api/categories"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'localhost:5000/storage/api/categories',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


> Example response (401):

```json
{
    "code": 401,
    "data": null,
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET api/categories`


<!-- END_109013899e0bc43247b0f00b67f889cf -->

<!-- START_8ba24eb6ac476f1b38e50f06f656d106 -->
## Get datatable json.

> Example request:

```bash
curl -X GET \
    -G "localhost:5000/storage/admin/categories/data" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost:5000/storage/admin/categories/data"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'localhost:5000/storage/admin/categories/data',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


> Example response (401):

```json
{
    "code": 401,
    "data": null,
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET admin/categories/data`


<!-- END_8ba24eb6ac476f1b38e50f06f656d106 -->

<!-- START_9ad08f5d810e5c0f73cfd7c7179bcb08 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "localhost:5000/storage/admin/categories" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost:5000/storage/admin/categories"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'localhost:5000/storage/admin/categories',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


> Example response (401):

```json
{
    "code": 401,
    "data": null,
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET admin/categories`


<!-- END_9ad08f5d810e5c0f73cfd7c7179bcb08 -->

<!-- START_ce2c6d94fb61a4bb262563b97e5f7aa3 -->
## Show creation form.

> Example request:

```bash
curl -X GET \
    -G "localhost:5000/storage/admin/categories/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost:5000/storage/admin/categories/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'localhost:5000/storage/admin/categories/create',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


> Example response (401):

```json
{
    "code": 401,
    "data": null,
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET admin/categories/create`


<!-- END_ce2c6d94fb61a4bb262563b97e5f7aa3 -->

<!-- START_1c760aaf6fa8dfeb072fd2bcda7b6502 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "localhost:5000/storage/admin/categories" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost:5000/storage/admin/categories"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'localhost:5000/storage/admin/categories',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```



### HTTP Request
`POST admin/categories`


<!-- END_1c760aaf6fa8dfeb072fd2bcda7b6502 -->

<!-- START_ebad456b854a248f3c1181386c63d38c -->
## Show update form.

> Example request:

```bash
curl -X GET \
    -G "localhost:5000/storage/admin/categories/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost:5000/storage/admin/categories/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'localhost:5000/storage/admin/categories/1/edit',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


> Example response (401):

```json
{
    "code": 401,
    "data": null,
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET admin/categories/{category}/edit`


<!-- END_ebad456b854a248f3c1181386c63d38c -->

<!-- START_bf1e99f3a2fb6790a5899b4a7b6172e3 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "localhost:5000/storage/admin/categories/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost:5000/storage/admin/categories/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->put(
    'localhost:5000/storage/admin/categories/1',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```



### HTTP Request
`PUT admin/categories/{category}`

`PATCH admin/categories/{category}`


<!-- END_bf1e99f3a2fb6790a5899b4a7b6172e3 -->

<!-- START_94773401487e54a4eef5ba3fffddfdb7 -->
## Delete the specified resource in storage.

> Example request:

```bash
curl -X DELETE \
    "localhost:5000/storage/admin/categories/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost:5000/storage/admin/categories/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->delete(
    'localhost:5000/storage/admin/categories/1',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```



### HTTP Request
`DELETE admin/categories/{category}`


<!-- END_94773401487e54a4eef5ba3fffddfdb7 -->

<!-- START_26df38e96aad6f88c1e5c8c377787219 -->
## Get datatable json.

> Example request:

```bash
curl -X GET \
    -G "localhost:5000/storage/admin/customers/data" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost:5000/storage/admin/customers/data"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'localhost:5000/storage/admin/customers/data',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


> Example response (401):

```json
{
    "code": 401,
    "data": null,
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET admin/customers/data`


<!-- END_26df38e96aad6f88c1e5c8c377787219 -->

<!-- START_6a785f82cd88b45a942e3e8874fd1e01 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "localhost:5000/storage/admin/customers" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost:5000/storage/admin/customers"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'localhost:5000/storage/admin/customers',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


> Example response (401):

```json
{
    "code": 401,
    "data": null,
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET admin/customers`


<!-- END_6a785f82cd88b45a942e3e8874fd1e01 -->

<!-- START_9bc7365103be8c8d08529343e8d0ce09 -->
## Show creation form.

> Example request:

```bash
curl -X GET \
    -G "localhost:5000/storage/admin/customers/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost:5000/storage/admin/customers/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'localhost:5000/storage/admin/customers/create',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


> Example response (401):

```json
{
    "code": 401,
    "data": null,
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET admin/customers/create`


<!-- END_9bc7365103be8c8d08529343e8d0ce09 -->

<!-- START_aed55dde20517f8dbfa3626276bf8bc1 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "localhost:5000/storage/admin/customers" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost:5000/storage/admin/customers"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'localhost:5000/storage/admin/customers',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```



### HTTP Request
`POST admin/customers`


<!-- END_aed55dde20517f8dbfa3626276bf8bc1 -->

<!-- START_909c2c4ff35552cacd0d7f7e07b936af -->
## Show update form.

> Example request:

```bash
curl -X GET \
    -G "localhost:5000/storage/admin/customers/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost:5000/storage/admin/customers/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'localhost:5000/storage/admin/customers/1/edit',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


> Example response (401):

```json
{
    "code": 401,
    "data": null,
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET admin/customers/{customer}/edit`


<!-- END_909c2c4ff35552cacd0d7f7e07b936af -->

<!-- START_69ec54e92d6469872d566e2f333c696c -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "localhost:5000/storage/admin/customers/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost:5000/storage/admin/customers/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->put(
    'localhost:5000/storage/admin/customers/1',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```



### HTTP Request
`PUT admin/customers/{customer}`

`PATCH admin/customers/{customer}`


<!-- END_69ec54e92d6469872d566e2f333c696c -->

<!-- START_af48eeea6631d85b0fd7d42b4d43e38e -->
## Delete the specified resource in storage.

> Example request:

```bash
curl -X DELETE \
    "localhost:5000/storage/admin/customers/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost:5000/storage/admin/customers/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->delete(
    'localhost:5000/storage/admin/customers/1',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```



### HTTP Request
`DELETE admin/customers/{customer}`


<!-- END_af48eeea6631d85b0fd7d42b4d43e38e -->

<!-- START_ee2e84eb56212f45b62b63add3f51b10 -->
## Get datatable json.

> Example request:

```bash
curl -X GET \
    -G "localhost:5000/storage/admin/professionals/data" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost:5000/storage/admin/professionals/data"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'localhost:5000/storage/admin/professionals/data',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


> Example response (401):

```json
{
    "code": 401,
    "data": null,
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET admin/professionals/data`


<!-- END_ee2e84eb56212f45b62b63add3f51b10 -->

<!-- START_8c3c0b6f2d2b2b5367ac679a8abe40d9 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "localhost:5000/storage/admin/professionals" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost:5000/storage/admin/professionals"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'localhost:5000/storage/admin/professionals',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


> Example response (401):

```json
{
    "code": 401,
    "data": null,
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET admin/professionals`


<!-- END_8c3c0b6f2d2b2b5367ac679a8abe40d9 -->

<!-- START_047d51e718aec68d53808dc68ded7076 -->
## Show creation form.

> Example request:

```bash
curl -X GET \
    -G "localhost:5000/storage/admin/professionals/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost:5000/storage/admin/professionals/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'localhost:5000/storage/admin/professionals/create',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


> Example response (401):

```json
{
    "code": 401,
    "data": null,
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET admin/professionals/create`


<!-- END_047d51e718aec68d53808dc68ded7076 -->

<!-- START_af58094bca70286d82899c23866445ae -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "localhost:5000/storage/admin/professionals" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost:5000/storage/admin/professionals"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'localhost:5000/storage/admin/professionals',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```



### HTTP Request
`POST admin/professionals`


<!-- END_af58094bca70286d82899c23866445ae -->

<!-- START_4ffcdf35a4b5a9a295bfb89204356641 -->
## Show update form.

> Example request:

```bash
curl -X GET \
    -G "localhost:5000/storage/admin/professionals/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost:5000/storage/admin/professionals/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'localhost:5000/storage/admin/professionals/1/edit',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


> Example response (401):

```json
{
    "code": 401,
    "data": null,
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET admin/professionals/{professional}/edit`


<!-- END_4ffcdf35a4b5a9a295bfb89204356641 -->

<!-- START_28b7de5fd715440d98663e6b0054d30c -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "localhost:5000/storage/admin/professionals/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost:5000/storage/admin/professionals/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->put(
    'localhost:5000/storage/admin/professionals/1',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```



### HTTP Request
`PUT admin/professionals/{professional}`

`PATCH admin/professionals/{professional}`


<!-- END_28b7de5fd715440d98663e6b0054d30c -->

<!-- START_30e68e5da7a913b893c73dd4b8ce43fe -->
## Delete the specified resource in storage.

> Example request:

```bash
curl -X DELETE \
    "localhost:5000/storage/admin/professionals/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost:5000/storage/admin/professionals/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->delete(
    'localhost:5000/storage/admin/professionals/1',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```



### HTTP Request
`DELETE admin/professionals/{professional}`


<!-- END_30e68e5da7a913b893c73dd4b8ce43fe -->

<!-- START_4a72d9ad0bd7055bbc40711924e27fa2 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "localhost:5000/storage/api/service-types" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost:5000/storage/api/service-types"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'localhost:5000/storage/api/service-types',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


> Example response (401):

```json
{
    "code": 401,
    "data": null,
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET api/service-types`


<!-- END_4a72d9ad0bd7055bbc40711924e27fa2 -->

<!-- START_a92571dfc1f2bded421b4a979ab3d1a2 -->
## Get datatable json.

> Example request:

```bash
curl -X GET \
    -G "localhost:5000/storage/admin/service-types/data" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost:5000/storage/admin/service-types/data"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'localhost:5000/storage/admin/service-types/data',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


> Example response (401):

```json
{
    "code": 401,
    "data": null,
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET admin/service-types/data`


<!-- END_a92571dfc1f2bded421b4a979ab3d1a2 -->

<!-- START_40bcc70c574ac47f422743df806d858f -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "localhost:5000/storage/admin/service-types" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost:5000/storage/admin/service-types"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'localhost:5000/storage/admin/service-types',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


> Example response (401):

```json
{
    "code": 401,
    "data": null,
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET admin/service-types`


<!-- END_40bcc70c574ac47f422743df806d858f -->

<!-- START_e3a1b010e47c6de45aa35a92bf63be46 -->
## Show creation form.

> Example request:

```bash
curl -X GET \
    -G "localhost:5000/storage/admin/service-types/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost:5000/storage/admin/service-types/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'localhost:5000/storage/admin/service-types/create',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


> Example response (401):

```json
{
    "code": 401,
    "data": null,
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET admin/service-types/create`


<!-- END_e3a1b010e47c6de45aa35a92bf63be46 -->

<!-- START_207b0f68175429d0f7365618e71e88f1 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "localhost:5000/storage/admin/service-types" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost:5000/storage/admin/service-types"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'localhost:5000/storage/admin/service-types',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```



### HTTP Request
`POST admin/service-types`


<!-- END_207b0f68175429d0f7365618e71e88f1 -->

<!-- START_f8272028786470ecbcfe81fbc2b5f6cc -->
## Show update form.

> Example request:

```bash
curl -X GET \
    -G "localhost:5000/storage/admin/service-types/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost:5000/storage/admin/service-types/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'localhost:5000/storage/admin/service-types/1/edit',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


> Example response (401):

```json
{
    "code": 401,
    "data": null,
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET admin/service-types/{service_type}/edit`


<!-- END_f8272028786470ecbcfe81fbc2b5f6cc -->

<!-- START_de10ae69abf43456bba744656502714c -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "localhost:5000/storage/admin/service-types/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost:5000/storage/admin/service-types/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->put(
    'localhost:5000/storage/admin/service-types/1',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```



### HTTP Request
`PUT admin/service-types/{service_type}`

`PATCH admin/service-types/{service_type}`


<!-- END_de10ae69abf43456bba744656502714c -->

<!-- START_857eb084adaa18ebc5a3e834ecbe1647 -->
## Delete the specified resource in storage.

> Example request:

```bash
curl -X DELETE \
    "localhost:5000/storage/admin/service-types/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost:5000/storage/admin/service-types/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->delete(
    'localhost:5000/storage/admin/service-types/1',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```



### HTTP Request
`DELETE admin/service-types/{service_type}`


<!-- END_857eb084adaa18ebc5a3e834ecbe1647 -->

<!-- START_893ae955e8991ef06f6de91adbff0aaa -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "localhost:5000/storage/api/projects" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost:5000/storage/api/projects"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'localhost:5000/storage/api/projects',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


> Example response (401):

```json
{
    "code": 401,
    "data": null,
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET api/projects`


<!-- END_893ae955e8991ef06f6de91adbff0aaa -->

<!-- START_e1acf63fc5c38922eda911e74e34a140 -->
## Get datatable json.

> Example request:

```bash
curl -X GET \
    -G "localhost:5000/storage/admin/projects/data" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost:5000/storage/admin/projects/data"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'localhost:5000/storage/admin/projects/data',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


> Example response (401):

```json
{
    "code": 401,
    "data": null,
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET admin/projects/data`


<!-- END_e1acf63fc5c38922eda911e74e34a140 -->

<!-- START_8d2901154431fe9da78cdbe2179e15d3 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "localhost:5000/storage/admin/projects" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost:5000/storage/admin/projects"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'localhost:5000/storage/admin/projects',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


> Example response (401):

```json
{
    "code": 401,
    "data": null,
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET admin/projects`


<!-- END_8d2901154431fe9da78cdbe2179e15d3 -->

<!-- START_6b56a651e5c05258b86dfcb684090fbd -->
## Show creation form.

> Example request:

```bash
curl -X GET \
    -G "localhost:5000/storage/admin/projects/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost:5000/storage/admin/projects/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'localhost:5000/storage/admin/projects/create',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


> Example response (401):

```json
{
    "code": 401,
    "data": null,
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET admin/projects/create`


<!-- END_6b56a651e5c05258b86dfcb684090fbd -->

<!-- START_68b6d734e2f92aea9ab44177fc4d7df2 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "localhost:5000/storage/admin/projects" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost:5000/storage/admin/projects"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'localhost:5000/storage/admin/projects',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```



### HTTP Request
`POST admin/projects`


<!-- END_68b6d734e2f92aea9ab44177fc4d7df2 -->

<!-- START_aa00235de369d82cd32880bbef46dbc9 -->
## Show update form.

> Example request:

```bash
curl -X GET \
    -G "localhost:5000/storage/admin/projects/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost:5000/storage/admin/projects/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'localhost:5000/storage/admin/projects/1/edit',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


> Example response (401):

```json
{
    "code": 401,
    "data": null,
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET admin/projects/{project}/edit`


<!-- END_aa00235de369d82cd32880bbef46dbc9 -->

<!-- START_1b88c2ade77b659339bcf78744210385 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "localhost:5000/storage/admin/projects/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost:5000/storage/admin/projects/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->put(
    'localhost:5000/storage/admin/projects/1',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```



### HTTP Request
`PUT admin/projects/{project}`

`PATCH admin/projects/{project}`


<!-- END_1b88c2ade77b659339bcf78744210385 -->

<!-- START_9fcbb166603505d1f22a5279f35f67d6 -->
## Delete the specified resource in storage.

> Example request:

```bash
curl -X DELETE \
    "localhost:5000/storage/admin/projects/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost:5000/storage/admin/projects/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->delete(
    'localhost:5000/storage/admin/projects/1',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```



### HTTP Request
`DELETE admin/projects/{project}`


<!-- END_9fcbb166603505d1f22a5279f35f67d6 -->

<!-- START_bfa34fed46044a710a576674f16472ae -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "localhost:5000/storage/api/project-types" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost:5000/storage/api/project-types"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'localhost:5000/storage/api/project-types',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


> Example response (401):

```json
{
    "code": 401,
    "data": null,
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET api/project-types`


<!-- END_bfa34fed46044a710a576674f16472ae -->

<!-- START_bb11d9fe655c544ce79b4ca7d38352bd -->
## Get datatable json.

> Example request:

```bash
curl -X GET \
    -G "localhost:5000/storage/admin/project-types/data" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost:5000/storage/admin/project-types/data"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'localhost:5000/storage/admin/project-types/data',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


> Example response (401):

```json
{
    "code": 401,
    "data": null,
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET admin/project-types/data`


<!-- END_bb11d9fe655c544ce79b4ca7d38352bd -->

<!-- START_aa13f505a524ce1130e323e519fb7de3 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "localhost:5000/storage/admin/project-types" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost:5000/storage/admin/project-types"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'localhost:5000/storage/admin/project-types',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


> Example response (401):

```json
{
    "code": 401,
    "data": null,
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET admin/project-types`


<!-- END_aa13f505a524ce1130e323e519fb7de3 -->

<!-- START_389b6d58f0853ba4672558acd3d816b8 -->
## Show creation form.

> Example request:

```bash
curl -X GET \
    -G "localhost:5000/storage/admin/project-types/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost:5000/storage/admin/project-types/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'localhost:5000/storage/admin/project-types/create',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


> Example response (401):

```json
{
    "code": 401,
    "data": null,
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET admin/project-types/create`


<!-- END_389b6d58f0853ba4672558acd3d816b8 -->

<!-- START_62f96382fd3b61b415eac973eedfade8 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "localhost:5000/storage/admin/project-types" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost:5000/storage/admin/project-types"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'localhost:5000/storage/admin/project-types',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```



### HTTP Request
`POST admin/project-types`


<!-- END_62f96382fd3b61b415eac973eedfade8 -->

<!-- START_9c592bceb2346abcc9e28a8959c0ac57 -->
## Show update form.

> Example request:

```bash
curl -X GET \
    -G "localhost:5000/storage/admin/project-types/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost:5000/storage/admin/project-types/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'localhost:5000/storage/admin/project-types/1/edit',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


> Example response (401):

```json
{
    "code": 401,
    "data": null,
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET admin/project-types/{project_type}/edit`


<!-- END_9c592bceb2346abcc9e28a8959c0ac57 -->

<!-- START_536425ec625aff88abf174d8e3bdc9c8 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "localhost:5000/storage/admin/project-types/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost:5000/storage/admin/project-types/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->put(
    'localhost:5000/storage/admin/project-types/1',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```



### HTTP Request
`PUT admin/project-types/{project_type}`

`PATCH admin/project-types/{project_type}`


<!-- END_536425ec625aff88abf174d8e3bdc9c8 -->

<!-- START_c7e75dbc34299bf0f9648f2c3536fb7e -->
## Delete the specified resource in storage.

> Example request:

```bash
curl -X DELETE \
    "localhost:5000/storage/admin/project-types/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost:5000/storage/admin/project-types/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->delete(
    'localhost:5000/storage/admin/project-types/1',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```



### HTTP Request
`DELETE admin/project-types/{project_type}`


<!-- END_c7e75dbc34299bf0f9648f2c3536fb7e -->

<!-- START_78c5ea7d4033ae347f258c9b2c3ae98b -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "localhost:5000/storage/api/houses" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost:5000/storage/api/houses"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'localhost:5000/storage/api/houses',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


> Example response (401):

```json
{
    "code": 401,
    "data": null,
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET api/houses`


<!-- END_78c5ea7d4033ae347f258c9b2c3ae98b -->

<!-- START_bb15bffd305570ffdc731687061c6900 -->
## Get datatable json.

> Example request:

```bash
curl -X GET \
    -G "localhost:5000/storage/admin/houses/data" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost:5000/storage/admin/houses/data"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'localhost:5000/storage/admin/houses/data',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


> Example response (401):

```json
{
    "code": 401,
    "data": null,
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET admin/houses/data`


<!-- END_bb15bffd305570ffdc731687061c6900 -->

<!-- START_fd3e0525ae57b0b41d473de53e721742 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "localhost:5000/storage/admin/houses" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost:5000/storage/admin/houses"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'localhost:5000/storage/admin/houses',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


> Example response (401):

```json
{
    "code": 401,
    "data": null,
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET admin/houses`


<!-- END_fd3e0525ae57b0b41d473de53e721742 -->

<!-- START_97dbcf5e8b71657d7177066b9677481a -->
## Show creation form.

> Example request:

```bash
curl -X GET \
    -G "localhost:5000/storage/admin/houses/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost:5000/storage/admin/houses/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'localhost:5000/storage/admin/houses/create',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


> Example response (401):

```json
{
    "code": 401,
    "data": null,
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET admin/houses/create`


<!-- END_97dbcf5e8b71657d7177066b9677481a -->

<!-- START_61fb6105159be1f41d38146eecc23574 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "localhost:5000/storage/admin/houses" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost:5000/storage/admin/houses"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'localhost:5000/storage/admin/houses',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```



### HTTP Request
`POST admin/houses`


<!-- END_61fb6105159be1f41d38146eecc23574 -->

<!-- START_e9fb4e685775edab6e76e46e09ae6eec -->
## Show update form.

> Example request:

```bash
curl -X GET \
    -G "localhost:5000/storage/admin/houses/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost:5000/storage/admin/houses/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'localhost:5000/storage/admin/houses/1/edit',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


> Example response (401):

```json
{
    "code": 401,
    "data": null,
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET admin/houses/{house}/edit`


<!-- END_e9fb4e685775edab6e76e46e09ae6eec -->

<!-- START_edb26d3b2504fefd449343697d52c8ce -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "localhost:5000/storage/admin/houses/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost:5000/storage/admin/houses/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->put(
    'localhost:5000/storage/admin/houses/1',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```



### HTTP Request
`PUT admin/houses/{house}`

`PATCH admin/houses/{house}`


<!-- END_edb26d3b2504fefd449343697d52c8ce -->

<!-- START_d0f20023177686bc33942411f0df468c -->
## Delete the specified resource in storage.

> Example request:

```bash
curl -X DELETE \
    "localhost:5000/storage/admin/houses/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost:5000/storage/admin/houses/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->delete(
    'localhost:5000/storage/admin/houses/1',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```



### HTTP Request
`DELETE admin/houses/{house}`


<!-- END_d0f20023177686bc33942411f0df468c -->

<!-- START_9f97ca78679ae208736ab8f0afc7df01 -->
## Get datatable json.

> Example request:

```bash
curl -X GET \
    -G "localhost:5000/storage/admin/realtors/data" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost:5000/storage/admin/realtors/data"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'localhost:5000/storage/admin/realtors/data',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


> Example response (401):

```json
{
    "code": 401,
    "data": null,
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET admin/realtors/data`


<!-- END_9f97ca78679ae208736ab8f0afc7df01 -->

<!-- START_fa936b37a0ff9bca83ec8418a7860e20 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "localhost:5000/storage/admin/realtors" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost:5000/storage/admin/realtors"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'localhost:5000/storage/admin/realtors',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


> Example response (401):

```json
{
    "code": 401,
    "data": null,
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET admin/realtors`


<!-- END_fa936b37a0ff9bca83ec8418a7860e20 -->

<!-- START_5e269e4128f07728b18a13a0eab39bfe -->
## Show creation form.

> Example request:

```bash
curl -X GET \
    -G "localhost:5000/storage/admin/realtors/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost:5000/storage/admin/realtors/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'localhost:5000/storage/admin/realtors/create',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


> Example response (401):

```json
{
    "code": 401,
    "data": null,
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET admin/realtors/create`


<!-- END_5e269e4128f07728b18a13a0eab39bfe -->

<!-- START_c63b560e45714b25f976a1b692474fe6 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "localhost:5000/storage/admin/realtors" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost:5000/storage/admin/realtors"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'localhost:5000/storage/admin/realtors',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```



### HTTP Request
`POST admin/realtors`


<!-- END_c63b560e45714b25f976a1b692474fe6 -->

<!-- START_6398b6c51aee3c7be5343feb667874c6 -->
## Show update form.

> Example request:

```bash
curl -X GET \
    -G "localhost:5000/storage/admin/realtors/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost:5000/storage/admin/realtors/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'localhost:5000/storage/admin/realtors/1/edit',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


> Example response (401):

```json
{
    "code": 401,
    "data": null,
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET admin/realtors/{realtor}/edit`


<!-- END_6398b6c51aee3c7be5343feb667874c6 -->

<!-- START_0b88a0af17c8a2daa0b8703711363106 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "localhost:5000/storage/admin/realtors/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost:5000/storage/admin/realtors/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->put(
    'localhost:5000/storage/admin/realtors/1',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```



### HTTP Request
`PUT admin/realtors/{realtor}`

`PATCH admin/realtors/{realtor}`


<!-- END_0b88a0af17c8a2daa0b8703711363106 -->

<!-- START_7a5cbb4c4a9c5b00ebcd5d1cf32a06bb -->
## Delete the specified resource in storage.

> Example request:

```bash
curl -X DELETE \
    "localhost:5000/storage/admin/realtors/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost:5000/storage/admin/realtors/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->delete(
    'localhost:5000/storage/admin/realtors/1',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```



### HTTP Request
`DELETE admin/realtors/{realtor}`


<!-- END_7a5cbb4c4a9c5b00ebcd5d1cf32a06bb -->

<!-- START_9315fa782d823ef76e1e738cc7293996 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "localhost:5000/storage/api/rooms" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost:5000/storage/api/rooms"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'localhost:5000/storage/api/rooms',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


> Example response (401):

```json
{
    "code": 401,
    "data": null,
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET api/rooms`


<!-- END_9315fa782d823ef76e1e738cc7293996 -->

<!-- START_72ad13380166b9d50f46927a0311b164 -->
## Get datatable json.

> Example request:

```bash
curl -X GET \
    -G "localhost:5000/storage/admin/rooms/data" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost:5000/storage/admin/rooms/data"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'localhost:5000/storage/admin/rooms/data',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


> Example response (401):

```json
{
    "code": 401,
    "data": null,
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET admin/rooms/data`


<!-- END_72ad13380166b9d50f46927a0311b164 -->

<!-- START_f29b1098c0c8fd969d8d5217a0d8c510 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "localhost:5000/storage/admin/rooms" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost:5000/storage/admin/rooms"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'localhost:5000/storage/admin/rooms',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


> Example response (401):

```json
{
    "code": 401,
    "data": null,
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET admin/rooms`


<!-- END_f29b1098c0c8fd969d8d5217a0d8c510 -->

<!-- START_fc9662273f6c99b29308ab3f2f9f7534 -->
## Show creation form.

> Example request:

```bash
curl -X GET \
    -G "localhost:5000/storage/admin/rooms/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost:5000/storage/admin/rooms/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'localhost:5000/storage/admin/rooms/create',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


> Example response (401):

```json
{
    "code": 401,
    "data": null,
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET admin/rooms/create`


<!-- END_fc9662273f6c99b29308ab3f2f9f7534 -->

<!-- START_112edb7360d75679286bec599eeee736 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "localhost:5000/storage/admin/rooms" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost:5000/storage/admin/rooms"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'localhost:5000/storage/admin/rooms',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```



### HTTP Request
`POST admin/rooms`


<!-- END_112edb7360d75679286bec599eeee736 -->

<!-- START_0630aa7ebed932e4872936ea94477000 -->
## Show update form.

> Example request:

```bash
curl -X GET \
    -G "localhost:5000/storage/admin/rooms/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost:5000/storage/admin/rooms/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'localhost:5000/storage/admin/rooms/1/edit',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


> Example response (401):

```json
{
    "code": 401,
    "data": null,
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET admin/rooms/{room}/edit`


<!-- END_0630aa7ebed932e4872936ea94477000 -->

<!-- START_8049d4739f5e83a1bbed989ea2072ca9 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "localhost:5000/storage/admin/rooms/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost:5000/storage/admin/rooms/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->put(
    'localhost:5000/storage/admin/rooms/1',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```



### HTTP Request
`PUT admin/rooms/{room}`

`PATCH admin/rooms/{room}`


<!-- END_8049d4739f5e83a1bbed989ea2072ca9 -->

<!-- START_d40f0893d7b6022213c420add3ea2034 -->
## Delete the specified resource in storage.

> Example request:

```bash
curl -X DELETE \
    "localhost:5000/storage/admin/rooms/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost:5000/storage/admin/rooms/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->delete(
    'localhost:5000/storage/admin/rooms/1',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```



### HTTP Request
`DELETE admin/rooms/{room}`


<!-- END_d40f0893d7b6022213c420add3ea2034 -->

<!-- START_9e176c6527e11711498ed0cd880e7a31 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "localhost:5000/storage/api/room-issues" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost:5000/storage/api/room-issues"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'localhost:5000/storage/api/room-issues',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


> Example response (401):

```json
{
    "code": 401,
    "data": null,
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET api/room-issues`


<!-- END_9e176c6527e11711498ed0cd880e7a31 -->

<!-- START_ae3f459012fa903e6e24d3868a238b71 -->
## Get datatable json.

> Example request:

```bash
curl -X GET \
    -G "localhost:5000/storage/admin/room-issues/data" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost:5000/storage/admin/room-issues/data"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'localhost:5000/storage/admin/room-issues/data',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


> Example response (401):

```json
{
    "code": 401,
    "data": null,
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET admin/room-issues/data`


<!-- END_ae3f459012fa903e6e24d3868a238b71 -->

<!-- START_6ad21e0266d66fdf0b7ab6b5234d7cd6 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "localhost:5000/storage/admin/room-issues" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost:5000/storage/admin/room-issues"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'localhost:5000/storage/admin/room-issues',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


> Example response (401):

```json
{
    "code": 401,
    "data": null,
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET admin/room-issues`


<!-- END_6ad21e0266d66fdf0b7ab6b5234d7cd6 -->

<!-- START_27697d2f66a1870490b5f700a75437c7 -->
## Show creation form.

> Example request:

```bash
curl -X GET \
    -G "localhost:5000/storage/admin/room-issues/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost:5000/storage/admin/room-issues/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'localhost:5000/storage/admin/room-issues/create',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


> Example response (401):

```json
{
    "code": 401,
    "data": null,
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET admin/room-issues/create`


<!-- END_27697d2f66a1870490b5f700a75437c7 -->

<!-- START_177cf760c03b4de995efbbee7455442d -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "localhost:5000/storage/admin/room-issues" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost:5000/storage/admin/room-issues"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'localhost:5000/storage/admin/room-issues',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```



### HTTP Request
`POST admin/room-issues`


<!-- END_177cf760c03b4de995efbbee7455442d -->

<!-- START_085a28de0dd104dd6821bcc37b37a49d -->
## Show update form.

> Example request:

```bash
curl -X GET \
    -G "localhost:5000/storage/admin/room-issues/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost:5000/storage/admin/room-issues/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'localhost:5000/storage/admin/room-issues/1/edit',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


> Example response (401):

```json
{
    "code": 401,
    "data": null,
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET admin/room-issues/{room_issue}/edit`


<!-- END_085a28de0dd104dd6821bcc37b37a49d -->

<!-- START_0932743d25b17272933ec86c7e39c37c -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "localhost:5000/storage/admin/room-issues/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost:5000/storage/admin/room-issues/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->put(
    'localhost:5000/storage/admin/room-issues/1',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```



### HTTP Request
`PUT admin/room-issues/{room_issue}`

`PATCH admin/room-issues/{room_issue}`


<!-- END_0932743d25b17272933ec86c7e39c37c -->

<!-- START_c13cd9c5abc3354719b5606305f76b5e -->
## Delete the specified resource in storage.

> Example request:

```bash
curl -X DELETE \
    "localhost:5000/storage/admin/room-issues/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost:5000/storage/admin/room-issues/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->delete(
    'localhost:5000/storage/admin/room-issues/1',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```



### HTTP Request
`DELETE admin/room-issues/{room_issue}`


<!-- END_c13cd9c5abc3354719b5606305f76b5e -->

<!-- START_0fa0207236dc56983f4d8320e84aaec5 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "localhost:5000/storage/api/features" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost:5000/storage/api/features"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'localhost:5000/storage/api/features',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


> Example response (401):

```json
{
    "code": 401,
    "data": null,
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET api/features`


<!-- END_0fa0207236dc56983f4d8320e84aaec5 -->

<!-- START_74656b7e5c703b077f589456c175428b -->
## Get datatable json.

> Example request:

```bash
curl -X GET \
    -G "localhost:5000/storage/admin/features/data" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost:5000/storage/admin/features/data"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'localhost:5000/storage/admin/features/data',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


> Example response (401):

```json
{
    "code": 401,
    "data": null,
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET admin/features/data`


<!-- END_74656b7e5c703b077f589456c175428b -->

<!-- START_66f1323734a3fb7577c511c558af7e4c -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "localhost:5000/storage/admin/features" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost:5000/storage/admin/features"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'localhost:5000/storage/admin/features',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


> Example response (401):

```json
{
    "code": 401,
    "data": null,
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET admin/features`


<!-- END_66f1323734a3fb7577c511c558af7e4c -->

<!-- START_4741cc814011f0478bce00cf3edfba98 -->
## Show creation form.

> Example request:

```bash
curl -X GET \
    -G "localhost:5000/storage/admin/features/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost:5000/storage/admin/features/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'localhost:5000/storage/admin/features/create',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


> Example response (401):

```json
{
    "code": 401,
    "data": null,
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET admin/features/create`


<!-- END_4741cc814011f0478bce00cf3edfba98 -->

<!-- START_8a69b20256177fcc3c40e35fbc5d12d5 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "localhost:5000/storage/admin/features" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost:5000/storage/admin/features"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'localhost:5000/storage/admin/features',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```



### HTTP Request
`POST admin/features`


<!-- END_8a69b20256177fcc3c40e35fbc5d12d5 -->

<!-- START_d89a3e01ceedc20bb8974a5d7f0e7ce3 -->
## Show update form.

> Example request:

```bash
curl -X GET \
    -G "localhost:5000/storage/admin/features/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost:5000/storage/admin/features/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'localhost:5000/storage/admin/features/1/edit',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


> Example response (401):

```json
{
    "code": 401,
    "data": null,
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET admin/features/{feature}/edit`


<!-- END_d89a3e01ceedc20bb8974a5d7f0e7ce3 -->

<!-- START_c9f550abf1ef0e46ea9b8048efb3918a -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "localhost:5000/storage/admin/features/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost:5000/storage/admin/features/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->put(
    'localhost:5000/storage/admin/features/1',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```



### HTTP Request
`PUT admin/features/{feature}`

`PATCH admin/features/{feature}`


<!-- END_c9f550abf1ef0e46ea9b8048efb3918a -->

<!-- START_bebeeb9d7a81976b8906b728b064a3a6 -->
## Delete the specified resource in storage.

> Example request:

```bash
curl -X DELETE \
    "localhost:5000/storage/admin/features/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost:5000/storage/admin/features/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->delete(
    'localhost:5000/storage/admin/features/1',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```



### HTTP Request
`DELETE admin/features/{feature}`


<!-- END_bebeeb9d7a81976b8906b728b064a3a6 -->

<!-- START_060245d7e5cdb7019ba973f72f12d7c9 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "localhost:5000/storage/api/feature-options" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost:5000/storage/api/feature-options"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'localhost:5000/storage/api/feature-options',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


> Example response (401):

```json
{
    "code": 401,
    "data": null,
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET api/feature-options`


<!-- END_060245d7e5cdb7019ba973f72f12d7c9 -->

<!-- START_32e04919b303018313c19d6ddb2bab63 -->
## Get datatable json.

> Example request:

```bash
curl -X GET \
    -G "localhost:5000/storage/admin/feature-options/data" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost:5000/storage/admin/feature-options/data"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'localhost:5000/storage/admin/feature-options/data',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


> Example response (401):

```json
{
    "code": 401,
    "data": null,
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET admin/feature-options/data`


<!-- END_32e04919b303018313c19d6ddb2bab63 -->

<!-- START_eac46405c5ebb91924e42a4b6b78afb3 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "localhost:5000/storage/admin/feature-options" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost:5000/storage/admin/feature-options"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'localhost:5000/storage/admin/feature-options',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


> Example response (401):

```json
{
    "code": 401,
    "data": null,
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET admin/feature-options`


<!-- END_eac46405c5ebb91924e42a4b6b78afb3 -->

<!-- START_1ae2599035d62add92c55dc8c0481b6a -->
## Show creation form.

> Example request:

```bash
curl -X GET \
    -G "localhost:5000/storage/admin/feature-options/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost:5000/storage/admin/feature-options/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'localhost:5000/storage/admin/feature-options/create',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


> Example response (401):

```json
{
    "code": 401,
    "data": null,
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET admin/feature-options/create`


<!-- END_1ae2599035d62add92c55dc8c0481b6a -->

<!-- START_5c12c20e824a999ff0a65befe06c4012 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "localhost:5000/storage/admin/feature-options" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost:5000/storage/admin/feature-options"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'localhost:5000/storage/admin/feature-options',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```



### HTTP Request
`POST admin/feature-options`


<!-- END_5c12c20e824a999ff0a65befe06c4012 -->

<!-- START_190ce68aee01e24ed7a86040b1ae2533 -->
## Show update form.

> Example request:

```bash
curl -X GET \
    -G "localhost:5000/storage/admin/feature-options/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost:5000/storage/admin/feature-options/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'localhost:5000/storage/admin/feature-options/1/edit',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


> Example response (401):

```json
{
    "code": 401,
    "data": null,
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET admin/feature-options/{feature_option}/edit`


<!-- END_190ce68aee01e24ed7a86040b1ae2533 -->

<!-- START_0f24db877bd8793f4d94451d36d9c2e6 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "localhost:5000/storage/admin/feature-options/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost:5000/storage/admin/feature-options/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->put(
    'localhost:5000/storage/admin/feature-options/1',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```



### HTTP Request
`PUT admin/feature-options/{feature_option}`

`PATCH admin/feature-options/{feature_option}`


<!-- END_0f24db877bd8793f4d94451d36d9c2e6 -->

<!-- START_6cc069844c5c275f499d79b27d4bafc4 -->
## Delete the specified resource in storage.

> Example request:

```bash
curl -X DELETE \
    "localhost:5000/storage/admin/feature-options/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost:5000/storage/admin/feature-options/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->delete(
    'localhost:5000/storage/admin/feature-options/1',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```



### HTTP Request
`DELETE admin/feature-options/{feature_option}`


<!-- END_6cc069844c5c275f499d79b27d4bafc4 -->

<!-- START_dca3915ae5e8970fe1a97a1c96635130 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "localhost:5000/storage/api/project-opportunities" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost:5000/storage/api/project-opportunities"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'localhost:5000/storage/api/project-opportunities',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


> Example response (401):

```json
{
    "code": 401,
    "data": null,
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET api/project-opportunities`


<!-- END_dca3915ae5e8970fe1a97a1c96635130 -->

<!-- START_cc140d741d7d61c83312dcf8ed6a528e -->
## Get datatable json.

> Example request:

```bash
curl -X GET \
    -G "localhost:5000/storage/admin/project-opportunities/data" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost:5000/storage/admin/project-opportunities/data"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'localhost:5000/storage/admin/project-opportunities/data',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


> Example response (401):

```json
{
    "code": 401,
    "data": null,
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET admin/project-opportunities/data`


<!-- END_cc140d741d7d61c83312dcf8ed6a528e -->

<!-- START_8b72b63b93d0c05caecf6038bb34c10e -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "localhost:5000/storage/admin/project-opportunities" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost:5000/storage/admin/project-opportunities"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'localhost:5000/storage/admin/project-opportunities',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


> Example response (401):

```json
{
    "code": 401,
    "data": null,
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET admin/project-opportunities`


<!-- END_8b72b63b93d0c05caecf6038bb34c10e -->

<!-- START_8e43e7599d483a888d81760c24fbbe2b -->
## Show creation form.

> Example request:

```bash
curl -X GET \
    -G "localhost:5000/storage/admin/project-opportunities/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost:5000/storage/admin/project-opportunities/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'localhost:5000/storage/admin/project-opportunities/create',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


> Example response (401):

```json
{
    "code": 401,
    "data": null,
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET admin/project-opportunities/create`


<!-- END_8e43e7599d483a888d81760c24fbbe2b -->

<!-- START_95c20ac3e59ee66d97468ea46b14de55 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "localhost:5000/storage/admin/project-opportunities" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost:5000/storage/admin/project-opportunities"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'localhost:5000/storage/admin/project-opportunities',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```



### HTTP Request
`POST admin/project-opportunities`


<!-- END_95c20ac3e59ee66d97468ea46b14de55 -->

<!-- START_9b5fb2d3116a4b07efc193bfd10631b1 -->
## Show update form.

> Example request:

```bash
curl -X GET \
    -G "localhost:5000/storage/admin/project-opportunities/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost:5000/storage/admin/project-opportunities/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'localhost:5000/storage/admin/project-opportunities/1/edit',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


> Example response (401):

```json
{
    "code": 401,
    "data": null,
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET admin/project-opportunities/{project_opportunity}/edit`


<!-- END_9b5fb2d3116a4b07efc193bfd10631b1 -->

<!-- START_ab3947e6572350d2a5191931b08c6cde -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "localhost:5000/storage/admin/project-opportunities/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost:5000/storage/admin/project-opportunities/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->put(
    'localhost:5000/storage/admin/project-opportunities/1',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```



### HTTP Request
`PUT admin/project-opportunities/{project_opportunity}`

`PATCH admin/project-opportunities/{project_opportunity}`


<!-- END_ab3947e6572350d2a5191931b08c6cde -->

<!-- START_7c89538f0084a0d9b5f9f15b1eb74191 -->
## Delete the specified resource in storage.

> Example request:

```bash
curl -X DELETE \
    "localhost:5000/storage/admin/project-opportunities/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost:5000/storage/admin/project-opportunities/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->delete(
    'localhost:5000/storage/admin/project-opportunities/1',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```



### HTTP Request
`DELETE admin/project-opportunities/{project_opportunity}`


<!-- END_7c89538f0084a0d9b5f9f15b1eb74191 -->

<!-- START_db8a0fed435a861424c9eded97cdd53b -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "localhost:5000/storage/api/home-diagnostic-reports" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost:5000/storage/api/home-diagnostic-reports"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'localhost:5000/storage/api/home-diagnostic-reports',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


> Example response (401):

```json
{
    "code": 401,
    "data": null,
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET api/home-diagnostic-reports`


<!-- END_db8a0fed435a861424c9eded97cdd53b -->

<!-- START_145aa02f973020374df8936e6b7365fc -->
## Get datatable json.

> Example request:

```bash
curl -X GET \
    -G "localhost:5000/storage/admin/home-diagnostic-reports/data" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost:5000/storage/admin/home-diagnostic-reports/data"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'localhost:5000/storage/admin/home-diagnostic-reports/data',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


> Example response (401):

```json
{
    "code": 401,
    "data": null,
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET admin/home-diagnostic-reports/data`


<!-- END_145aa02f973020374df8936e6b7365fc -->

<!-- START_65dc843c6227cc66c381f1af53fc88cd -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "localhost:5000/storage/admin/home-diagnostic-reports" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost:5000/storage/admin/home-diagnostic-reports"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'localhost:5000/storage/admin/home-diagnostic-reports',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


> Example response (401):

```json
{
    "code": 401,
    "data": null,
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET admin/home-diagnostic-reports`


<!-- END_65dc843c6227cc66c381f1af53fc88cd -->

<!-- START_0a52b31ccde1235d0c910a9aba2bf279 -->
## Show creation form.

> Example request:

```bash
curl -X GET \
    -G "localhost:5000/storage/admin/home-diagnostic-reports/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost:5000/storage/admin/home-diagnostic-reports/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'localhost:5000/storage/admin/home-diagnostic-reports/create',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


> Example response (401):

```json
{
    "code": 401,
    "data": null,
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET admin/home-diagnostic-reports/create`


<!-- END_0a52b31ccde1235d0c910a9aba2bf279 -->

<!-- START_f1d07244f4199d9fa27c5fca732110e9 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "localhost:5000/storage/admin/home-diagnostic-reports" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost:5000/storage/admin/home-diagnostic-reports"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'localhost:5000/storage/admin/home-diagnostic-reports',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```



### HTTP Request
`POST admin/home-diagnostic-reports`


<!-- END_f1d07244f4199d9fa27c5fca732110e9 -->

<!-- START_f62809622a3e5b89a06b877570e5a657 -->
## Show update form.

> Example request:

```bash
curl -X GET \
    -G "localhost:5000/storage/admin/home-diagnostic-reports/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost:5000/storage/admin/home-diagnostic-reports/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'localhost:5000/storage/admin/home-diagnostic-reports/1/edit',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


> Example response (401):

```json
{
    "code": 401,
    "data": null,
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET admin/home-diagnostic-reports/{home_diagnostic_report}/edit`


<!-- END_f62809622a3e5b89a06b877570e5a657 -->

<!-- START_c353357bd27f55f0cc4c0e918a774322 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "localhost:5000/storage/admin/home-diagnostic-reports/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost:5000/storage/admin/home-diagnostic-reports/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->put(
    'localhost:5000/storage/admin/home-diagnostic-reports/1',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```



### HTTP Request
`PUT admin/home-diagnostic-reports/{home_diagnostic_report}`

`PATCH admin/home-diagnostic-reports/{home_diagnostic_report}`


<!-- END_c353357bd27f55f0cc4c0e918a774322 -->

<!-- START_1e49d4fcf40ddaa2204e088976538ea5 -->
## Delete the specified resource in storage.

> Example request:

```bash
curl -X DELETE \
    "localhost:5000/storage/admin/home-diagnostic-reports/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "localhost:5000/storage/admin/home-diagnostic-reports/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->delete(
    'localhost:5000/storage/admin/home-diagnostic-reports/1',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```



### HTTP Request
`DELETE admin/home-diagnostic-reports/{home_diagnostic_report}`


<!-- END_1e49d4fcf40ddaa2204e088976538ea5 -->


