## BlueSnap PHP Library

This (unofficial) library standardizes and simplifies working with the BlueSnap API. 

All the standard API documentation is applicable to this library. 

View the BlueSnap documentation here: https://developers.bluesnap.com/

This library currently supports:

- CardTransactions
- VaultedShoppers
- Vendors
- Subscriptions
- Plans (Subscriptions)
- Refunds
- Reports
- Generating a Hosted Payment Fields token

### Installation

Install this package with composer

```shell
composer require shabananavas/php-bluesnap-sdk
```

### Usage

Initialize the library in your class constructor 

```php
public function __construct()
{
    $environment = 'sandbox'; // or 'production'
    \Bluesnap\Bluesnap::init($environment, 'YOUR_API_KEY', 'YOUR_API_PASSWORD');
}
```

Create a New Transaction

```php
public function createTransaction()
{
    $response = \Bluesnap\CardTransaction::create([
        'creditCard' => [
            'cardNumber' => '4263982640269299',
            'expirationMonth' => '02',
            'expirationYear' => '2018',
            'securityCode' => '837'
        ],
        'amount' => 10.00,
        'currency' => 'USD',
        'recurringTransaction' => 'ECOMMERCE',
        'cardTransactionType' => 'AUTH_CAPTURE',
    ]);

    if ($response->failed())
    {
        $error = $response->data;
        
        // handle error
    }

    $transaction = $response->data;
    
    return $transaction;
}
```

#### See [examples](https://github.com/shabananavas/php-bluesnap-sdk/tree/master/examples) for further details on using the library

## License
This package is licensed under the [MIT License](https://github.com/shabananavas/php-bluesnap-sdk/blob/master/LICENSE)
