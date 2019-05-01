# PHP_CodeSniffer ruleset

## Installation

```bash
composer require --dev rochev/codesniffer-standard
```

## Usage

### Code analysis

```bash
$ vendor/bin/phpcs \
    -p -s  --colors --cache=.phpcs.cache \
    --standard=vendor/rochev/codesniffer-standard/ruleset.xml \
    src/ tests/
```

### Code fixing

```bash
$ vendor/bin/phpcs \
    -p -s  --colors --cache=.phpcs.cache \
    --standard=vendor/rochev/codesniffer-standard/ruleset.xml \
    src/ tests/
```

#### Template for `composer.json`
```json
{
    "scripts": {
        "phpcs":"phpcs --colors --cache=.phpcs.cache -p -s --standard=vendor/rochev/codesniffer-standard/ruleset.xml src/ tests/",
        "phpcbf":"phpcbf --colors --cache=.phpcs.cache -p -s --standard=vendor/rochev/codesniffer-standard/ruleset.xml src/ tests/"
    }
}
```

### Using in `php` scripts

You can get full path to `ruleset.xml` by using `Factory` class
```php
$fullPath = \Rochev\CodeSniffer\Factory::getFullPathToRuleset();
```

## Afterword
Don't forget add cache file (`/.phpcs.cache` by default) to `.gitignore`
