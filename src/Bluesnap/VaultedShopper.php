<?php

namespace Bluesnap;

/**
 * Class VaultedShopper
 */
class VaultedShopper
{
    public static function get($id = null)
    {
        return Adapter::get('VaultedShopper', $id);
    }

    public static function create($data)
    {
        return Adapter::create('VaultedShopper', $data, [
            'id_in_header' => false
        ]);
    }

    public static function update($id, $data)
    {
        return Adapter::update('VaultedShopper', $id, $data);
    }
}
