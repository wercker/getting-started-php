# getting-started-php

[![Wercker status](https://app.wercker.com/status/99e32dbb5d031aa3bfb550fc040ef5c5/m)](https://app.wercker.com/project/bykey/99e32dbb5d031aa3bfb550fc040ef5c5)

This is a small php application to demonstrate PHP support in Wercker. It manages its dependencies via Composer and contains an integration test that is executed with PHPUnit.

This application uses the `php` container obtained from the [Docker Hub](https://hub.docker.com/_/php/)

## Setup
Clone this repo and cd into the directory:

```
git clone https://github.com/wercker/getting-started-php.git
cd getting-started-php
```

## Running
You can run the sample app in a couple of different ways. The first is to simply launch the executable:
```
php -S localhost:8080
```

Now point your browser at `http://localhost:8080` to see:
```
[
    "Amsterdam",
    "Berlin",
    "New York",
    "San Francisco",
    "Tokyo"
]
```

The second, and more useful, way is to use the `wercker dev` command to launch the binary within a Docker container, using the base image defined in the `box:id` property at the top of the `wercker.yml`, like so:
```
wercker dev --expose-ports
```
The `dev` target inside `wercker.yml` uses the `internal/watch` step to dynamically reload the runtime container when sourcefile changes are detected, which allows you to quickly test changes without having to kill/rebuild/relaunch the container. For instance, add another city to the array on `index.php:2' like so:

```
$cities = array("Amsterdam", "Berlin", "New York", "San Francisco", "Tokyo, "London");
```

and then refresh your browser pointing to `http://localhost:8080` to see:
```
[
    "Amsterdam",
    "Berlin",
    "New York",
    "San Francisco",
    "Tokyo",
    "London"
]
```

---
Sign up for Wercker: http://www.wercker.com

Learn more at: http://devcenter.wercker.com
