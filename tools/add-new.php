<?php
/**
 * Script to interactively add a new Polyfill int the registry
 *
 * @author  MacFJA
 * @license MIT
 */

const VALID_TYPES = 'polyfill,stub,alternative,?';

/*
 * Add the (rarely) possibly missing readline function
 */
if (!function_exists('readline')) {
    /**
     * @see http://php.net/manual/function.readline.php
     * @param $prompt
     * @return bool|string
     */
    function readline($prompt)
    {
        echo $prompt;
        $handle = fopen('php://stdin', 'r');
        if ($handle === false) {
            return false;
        }
        $line = fgets($handle);
        fclose($handle);

        return !is_string($line) ? false : trim($line);
    }
}
/**
 * Test if a variable is not empty
 *
 * @param $variable
 * @return bool
 */
function notEmpty($variable)
{
    return !empty($variable);
}

/**
 * Ask the user to input a value.
 *
 * The value is ask until the validator function return true.
 * The validator function is call with the typed value as its first parameter.
 *
 * @param string   $prompt    The prompt to display
 * @param callable $validator The function to use to validate the value
 * @return string
 */
function ask($prompt, $validator)
{
    do {
        $typed = readline($prompt);
    } while (!$validator($typed));

    return $typed;
}

/**
 * Ask the user to input a list of value.
 *
 * Values can be add until an empty value is entered.
 * Each typed value is formatted (via the formatter function) and then each value is kept if the validator return true
 *
 * @param string   $prompt    The prompt to display
 * @param callable $formatter The function to transform the typed value into an array
 * @param callable $validator The function to use to validate a value
 * @return array
 */
function askList($prompt, $formatter, $validator)
{
    $items = array();
    do {
        $typed = readline($prompt);
        if (empty($typed)) {
            continue;
        }
        $formatted = $formatter($typed);
        $items = array_merge($items, array_filter($formatted, $validator));
    } while (!empty($typed));

    return array_unique($items);
}

/**
 * Shorthand function for space or comma separated typed value
 *
 * @param string $prompt The prompt to display (instruction is append to it)
 * @return array
 */
function askSpaceCommaList($prompt)
{
    return askList(
        $prompt . ' (space separated, comma separated or one per line ; leave empty to continue): ',
        function ($string) {
            return preg_split('/[, ]/', $string);
        },
        'notEmpty'
    );
}

$name = ask('Name of the polyfill (Often it\'s the composer package name): ', 'notEmpty');

echo PHP_EOL;

$type = ask('Type ("polyfill", "stub", "alternative" or "?"): ', function ($item) {
    return in_array($item, explode(',', VALID_TYPES), true);
});

echo PHP_EOL;

$require = askList(
    'Require (format: "name: version", or "name" ; one per line ; leave empty to continue): ',
    function ($item) {
        $isTwoPart = strpos($item, ':') !== false;

        if (!$isTwoPart) {
            return array($item => '*');
        }

        list($name, $version) = explode(':', $item);

        return array(trim(str_replace('"', '', $name)) => trim(str_replace('"', '', $version)));

    },
    'notEmpty'
);

echo PHP_EOL;

$replace = askList(
    'Replace (format: "name": "version", or name ; one per line ; leave empty to continue): ',
    function ($item) {
        $isTwoPart = strpos($item, ':') !== false;

        if (!$isTwoPart) {
            return array($item => '*');
        }

        list($name, $version) = explode(':', $item);

        return array(trim(str_replace('"', '', $name)) => trim(str_replace('"', '', $version)));

    },
    'notEmpty'
);

echo PHP_EOL;

$functions = askSpaceCommaList('Functions');

echo PHP_EOL;

$classes = askSpaceCommaList('Classes');

echo PHP_EOL;

$constants = askSpaceCommaList('Constants');

echo PHP_EOL;
echo PHP_EOL;

echo 'Here what you entered: ' . PHP_EOL;
$data = array(
    'name'      => $name,
    'type'      => $type,
    'require'   => $require,
    'replace'   => $replace,
    'functions' => $functions,
    'classes'   => $classes,
    'constants' => $constants
);
echo json_encode($data, JSON_PRETTY_PRINT);
echo PHP_EOL;

echo PHP_EOL;
readline('Press Enter to continue');

$registry = json_decode(file_get_contents(__DIR__ . '/../resources/registry.json'), true);
$registry[] = $data;

file_put_contents(__DIR__ . '/../resources/registry.json', json_encode($registry));

echo 'Registry is updated!' . PHP_EOL;