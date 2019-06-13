<?php

namespace Bluesnap\Models;

/**
 * Class Subscription
 */
class MerchantManagedSubscription extends Model
{
    public function __construct($data = null)
    {
        parent::__construct($data);
    }

    protected $children = ['payerInfo' => self::ITEM, 'paymentSource' => self::ITEM];

    /**
     * @var integer
     */
    public $amount;

    /**
     * @var VendorInfo
     */
    public $currency;

    /**
     * @var integer
     */
    public $vaultedShopperId;

    /**
     * @var PayerInfo
     */
    public $payerInfo;

    /**
     * @var PaymentSource
     */
    public $paymentSource;
}
