# php-simple-yubi-auth
Simple set of scripts that demonstrate how to protect a set of php pages with a YubiKey.

## Getting Started

Uncompress the files into a directory and then edit:

```
authenticate.php 
```

You will need to add lines of the format:

```
$allowed_users['andrew'] = "ccccccabcdef:12345:0oHCEE97coffeecoffeecoffeeU="; 
```

For each key.

## Bugs

Please feel free to report any ....

## Requirements
You will need to install the php-yubico class - and that can be found here:

* [php-yubico](https://github.com/Yubico/php-yubico) - php-yubico

Get a API key for your YubiKey from:

* [getapikey](https://upgrade.yubico.com/getapikey) - API key


## To Do
Optionally get the configuration of keys from a database table.

