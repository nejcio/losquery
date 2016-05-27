# Losquery

## About
Losquery is a PHP wrapper around [Facebook's Osquery](http://osquery.io).
With this package you can communicate with osqueryi(query console/shell).

## Installation

#### Composer
```
    composer require wrcx/losquery
```

## Usage
#### Building the query
```php
    $query = new \Wrcx\Losquery\Losquery();
    $query = $query->select('*')
            ->from("users")
            ->get();
```
#### Running the query
```php
    $runner = new \Wrcx\Losquery\Losrunner();
    // json or csv
    echo $runner->run($query, 'json');
```

## Notice
Package is still under development.

## TODO
- Tests
- Installation information

## License
