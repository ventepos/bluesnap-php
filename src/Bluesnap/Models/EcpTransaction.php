<?php

namespace Bluesnap\Models;

/**
 * Class EcpTransaction
 */
class EcpTransaction extends Model
{
    public function __construct($data = null)
    {
        parent::__construct($data, 'transactionId');
    }

    protected $children = ['transactionMetaData' => self::ITEM, 'ecpTransaction' => self::ITEM, 'vendorInfo' => self::ITEM];

    /**
     * Amount to be charged in the transaction, including decimal points.
     * @var string
     */
    public $amount;

    /**
     * Merchant's unique ID for a new transaction. Length: 1..50
     * @var string
     */
    public $merchantTransactionId;

    /**
     * Description of the transaction, which appears on the shopper's Ecp statement.
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
     * @var ecpTransaction (Ecp)
     */
    public $ecpTransaction;

    /**
     * @var TransactionFraudInfo
     */
    public $transactionFraudInfo;
}
