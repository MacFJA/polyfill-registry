# Polyfill Registry

The purpose of this project is to centralize all (most of) libraries/components that can provide a set of functionality normally provided by a PHP extension of PHP version.


## Different type of Polyfill

There 3 types of polyfill:

 - **`polyfill`**, the true polyfill: You add the dependency and it work out of the box
 - **`stub`**, the faker: Provide empty implementation (ex: xdebug, NewRelic, etc.)
 - **`alternative`**, it's your choice: You have to manually activate the code

## All polyfills

The list of all referenced polyfills are available as:
 - [A JSON file](resources/registry.json)
 - [A Markdown file](LIST.md)

## Tools

You can navigate throught the registry with PHP object

### Search for a polyfill

You can search for polyfills that can replace a function, a class, an extension, a constant, a version of PHP.

See [ReaderInterface](lib/ReaderInterface.php) for more details.

Here an example for a function:
```php
$registry = new \MacFJA\PolyFillRegistry\PolyfillRegistry();
$polyfills = $registry->getPolyfillForFunction('array_column');
```

### Get information about a polyfill

You can get the lists of functions, of classes, of constants implemented by a polyfill from its name.

See [ReverseSearchInterface](lib/ReverseSearchInterface.php) for more details.

Here an example to getting all functions of a polyfill:
```php
$registry = new \MacFJA\PolyFillRegistry\PolyfillRegistry();
$functions = $registry->getPolyfillFunctions('paragonie/sodium_compat');
// `$functions` contains the list of all functions name implemented by the polyfill 'paragonie/sodium_compat'
```

## Contribution

Keeping track of all polyfill is a really huge task and the possibility to miss a polyfill is as great as the size of internet.

To provide the most complete registry, any contribution is welcome.
 - If you found a new polyfill, fell free to [open a issue on GitHub](https://github.com/MacFJA/polyfill-registry/issues/new?template=new-polyfill.md) or a Pull Request.
 - If you found an error, fell free to [open a issue on GitHub](https://github.com/MacFJA/polyfill-registry/issues/new) or a Pull Request.
 - If you have any question, you can [open a issue on GitHub](https://github.com/MacFJA/polyfill-registry/issues/new).

If you change the file `resources/registry.json`, please run `make generate_all` to sort the registry and update the [Markdown list](LIST.md)

## Compatibility/Component

- The library is compatible with PHP 5.3+
- The library use Makefile to reduce human error on generating some file
- The library use Docker to remove system dependencies on file generation