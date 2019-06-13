<?php

namespace Bluesnap;

/**
 * Class MerchantManagedSubscription
 */
class MerchantManagedSubscriptionCharge
{
    public static function create($data)
    {
        return Adapter::create('MerchantManagedSubscription', $data);
    }
}
