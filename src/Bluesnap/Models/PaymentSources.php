<?php

namespace Bluesnap\Models;

/**
 * Class PaymentSources
 */
class PaymentSources extends Model
{
    public function __construct($data = null)
    {
        parent::__construct($data);
    }

    protected $children = ['creditCardInfo' => self::COLLECTION, 'ecpInfo' => self::COLLECTION];

    /**
     * @var CreditCardInfo[]
     */
    public $creditCardInfo;

    /**
     * @var EcpInfo[]
     */
    public $ecpInfo;
}
