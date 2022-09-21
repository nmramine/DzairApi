

# Dzair API v0.0.1 :registered:
![PHP](https://img.shields.io/badge/php-%23777BB4.svg?style=for-the-badge&logo=php&logoColor=white)![MySQL](https://img.shields.io/badge/mysql-%2300f.svg?style=for-the-badge&logo=mysql&logoColor=white)



"DzairAPI" is a simple API built using PHP and MySQL that allows public users to retrieve data about Algerian cities called 'Wilaya', in its simplest version you can get pieces of information about all wilayas or a specific wilaya using the city code.

## What can I get now?

This version can get you information about wilaya surface(km²) and population and of course the name of the city using the code parameter.

## Basic usage
### Endpoints

DzairApi has only one endpoint with GET method.

To get all the data: 
```
[GET]api/wilaya.php
```

To get wilaya data by code:
```
[GET]api/wilaya.php?code={wilaya_code}
```
basic example using Javascript:
```js
var url = "https://dzairapi.000webhostapp.com/api/wilaya.php?code=23";

var xhr = new XMLHttpRequest();
xhr.open("GET", url);

xhr.onreadystatechange = function () {
   if (xhr.readyState === 4) {
      console.log(xhr.status);
      console.log(xhr.responseText);
   }};

xhr.send();
// response: "{\"code\":\"23\",\"name\":\"Annaba\",\"population\":\"640050\",\"surface\":\"1439\"}"

```

# :soon: What's next?
- Enhancing performance by integrating a cache system using Redis
- Adding API authentification with tokens
- Adding rate limit for educationals purposes
- Adding more data and more endpoints

Thank you




