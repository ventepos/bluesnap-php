<?php

namespace Bluesnap;

/**
 * Class CardTransaction
 */
class AltTransaction
{
    public static function get($id = null)
    {
        return Adapter::get('AltTransaction', $id);
    }

    public static function create($data)
    {
        return Adapter::create('AltTransaction', $data, [
            'id_in_header' => false
        ]);
    }

    public static function update($id, $data)
    {
        return Adapter::update('AltTransaction', $id, $data, [
            'id_in_url' => false
        ]);
    }
}
