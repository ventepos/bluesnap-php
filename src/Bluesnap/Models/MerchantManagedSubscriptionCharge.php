<?php

namespace Bluesnap\Models;

/**
 * Class SubscriptionCharge
 */
class MerchantManagedSubscriptionCharge extends Model
{
    public function __construct($data = null)
    {
        parent::__construct($data);
    }

    protected $children = [ 'paymentSource' => self::ITEM ];

    /**
     * @var integer
     */
    public $subscriptionId;

    /**
     * @var integer
     */
    public $planId;

    /**
     * @var integer
     */
    public $vaultedShopperId;

    /**
     * @var integer
     */
    public $transactionId;

    /**
     * @var string
     */
    public $transactionDate;

    /**
     * @var double
     */
    public $amount;

    /**
     * @var string
     */
    public $currency;

    /**
     * @var string
     */
    public $softDescriptor;

    /**
     * @var PaymentSource
     */
    public $paymentSource;
}
