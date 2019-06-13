<?php

namespace Bluesnap;

/**
 * Class MerchantManagedSubscription
 */
class MerchantManagedSubscription
{
    public static function create($data)
    {
        return Adapter::create('MerchantManagedSubscription', $data);
    }
}
