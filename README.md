# Indodax API
PHP library that provide Indodax Public API

## API Reference
- Indodax Official API Docs, [The Docs](https://github.com/btcid/indodax-official-api-docs/blob/master/Public-RestAPI.md).

## Requirement
- Laravel 7

## How to Install
- Install with composer
```bash
composer require arispati/indodax
```

## How to Use
```php
use Arispati\Indodax\Indodax;

// Get pairs
Indodax::getPairs();
```

## Configuration (optional)
- Publish config
```bash
php artisan vendor:publish --provider="Arispati\Indodax\Provider\IndodaxServiceProvider" --tag="config"
```

## Avalable method
```php
// Get server time
Indodax::getServerTime();

// Get pairs
Indodax::getPairs();

// Get price increments
Indodax::getPriceIncrements();

// Get summaries
Indodax::getSummaries();

// Get ticker
Indodax::getTicker($pairID);

// Get all tickers
Indodax::getAllTickers();

// Get trades
Indodax::getTrades($pairID);

// Get depth
Indodax::getDepth($pairID);
```

## Testing
```bash
composer test
```