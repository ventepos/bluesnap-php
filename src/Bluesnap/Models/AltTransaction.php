<?php

namespace Bluesnap\Models;

/**
 * Class AltTransaction
 */
class AltTransaction extends Model
{
    public function __construct($data = null)
    {
        parent::__construct($data, 'transactionId');
    }

    protected $children = ['transactionMetaData' => self::ITEM, 'vendorInfo' => self::ITEM];


    /**
     * Amount to be charged in the transaction, including decimal points.
     * @var string
     */
    public $amount;

    /**
     * Enter ECOMMERCE for a one-time transaction or RECURRING for a recurring transaction.
     * @var string
     */
    public $recurringTransaction;

    /**
     * Merchant's unique ID for a new transaction. Length: 1..50
     * @var string
     */
    public $merchantTransactionId;

    /**
     * Description of the transaction, which appears on the shopper's credit card statement.
     * @var string $softDescriptor
     */
    public $softDescriptor;

    /**
     * ID of an existing vaulted shopper.
     * @var string
     */
    public $vaultedShopperId;

    /**
     * Currency code (ISO 4217) of the amount to be charged.
     * @var string
     */
    public $currency;

    /**
     * @var TransactionMetaData
     */
    public $transactionMetaData;

    /**
     * @var TransactionFraudInfo
     */
    public $transactionFraudInfo;
}
