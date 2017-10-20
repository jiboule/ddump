# DDUMP

This is just an overlay to the Symfonys' var-dumper component to dump variable(s) and stop the script execution right away.

## Installation

    $ composer require --dev jiboule/ddump
    
The --dev option is important as you don't wanna use dump in production.
    
## Usage

```php

dump($bar); // the var-dumper function dumps the var, below code will be executed


ddump($myVar); // dumps the var

// nothing below will be executed

```

You can also dump several variables

```php

ddump($foo, $bar, $another);
```
