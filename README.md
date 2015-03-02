# Here.com REST API client PHP library

**Attention**: Please do not use in production environments. It‘s WIP.

This is a simple api client for the [here.com REST APIs](https://developer.here.com/rest-apis) based on [Guzzle 5](http://docs.guzzlephp.org/en/latest/).
Currently it supports the following APIs:

 - [GeoCoder & ReverseGeoCoder API](https://developer.here.com/rest-apis/documentation/geocoder)
 - [Places API](https://developer.here.com/rest-apis/documentation/places) 


[![Build Status](https://travis-ci.org/spacedealer/here-api.svg?branch=master)](https://travis-ci.org/spacedealer/here-api)
[![SensioLabsInsight](https://insight.sensiolabs.com/projects/2fa813b1-b431-416a-9005-860521b511cb/mini.png)](https://insight.sensiolabs.com/projects/2fa813b1-b431-416a-9005-860521b511cb)
[![Dependency Status](https://www.versioneye.com/user/projects/547335848101065acc000ac4/badge.svg)](https://www.versioneye.com/user/projects/547335848101065acc000ac4)

## Requirements

 - php >= 5.4
 - Guzzle 5
 - Guzzle Services 0.5
 - Guzzle Command 0.7

## Installation

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist spacedealer/here-api "*"
```

or add

```
"spacedealer/here-api": "*"
```

to the require section of your `composer.json` file.


## Usage

```php
//tbd.
```

## Todos

 - Complete support for all here.com REST APIs
 - Complete support for Places API (add [beta methods](http://places.cit.api.here.com/places/static/doc/internal/#topics/request-resources.html))
 - Finish php unit tests
 - Improve response model handling
