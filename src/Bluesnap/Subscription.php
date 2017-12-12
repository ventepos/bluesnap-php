<?php

namespace Bluesnap;

/**
 * Class Subscription
 */
class Subscription
{
    public static function get($id = null, $query_params = null)
    {
        return Adapter::get('Subscription', $id, [
            'query_params' => $query_params
        ]);
    }

    public static function create($data)
    {
        return Adapter::create('Subscription', $data);
    }

    public static function update($id, $data)
    {
        return Adapter::update('Subscription', $id, $data);
    }

    public static function delete($id)
    {
        return Adapter::delete('Subscription', $id);
    }
}
