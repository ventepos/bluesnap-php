<?php

namespace Bluesnap;

class Utility
{
    public static function objectToArray($object)
    {
        return json_decode(json_encode($object), true);
    }

    public static function parseBluesnapErrors($errors)
    {
        $errors = json_decode($errors);
        $response = '';

        if ($errors)
        {
            if (! empty($errors->message) && is_array($errors->message))
            {
                $error = end($errors->message);
                $response = trim($error->description);
            }
            else if (is_object($errors))
            {
                $error = $errors->errorCode ?: 'unknown';
                $response = trim($errors->errorDescription ?: 'unknown');
            }
            else if (is_string($errors))
            {
                $response = trim($errors);
            }
        }

        return $response;
    }

    public static function getOption($options, $option, $default = null)
    {
        if (array_key_exists($option, $options))
        {
            return $options[$option];
        }

        return $default;
    }

    public static function getModelEndpoint($model, $model_id = null, $subscription_id = null)
    {
        $models = [
            'CardTransaction' => 'transactions',
            'Report' => 'report',
            'Refund' => 'transactions/'. $model_id .'/refund',
            'Plan' => 'recurring/plans',
            'Subscription' => 'recurring/subscriptions',
            'SubscriptionCharge' => 'recurring/subscriptions/charges',
            'MerchantManagedSubscription' => 'recurring/ondemand',
            'MerchantManagedSubscriptionCharge' => 'recurring/ondemand/'. $subscription_id,
            'VaultedShopper' => 'vaulted-shoppers',
            'Vendor' => 'vendors',
            'AltTransaction' => 'alt-transactions',
        ];

        return $models[$model];
    }

    public static function setupModel($model, $data, $is_collection = false, $target_parameter = null)
    {
        $data = self::objectToArray($data);
        $class_path = '\Bluesnap\Models\\'. $model;

        if ($is_collection)
        {
            $target = $target_parameter ? $data[$target_parameter] : $data;
            $models = array_map(function($m) use ($class_path)
            {
                return new $class_path($m);
            }, $target);

            return $models;
        }
        return new $class_path($data);
    }
}
