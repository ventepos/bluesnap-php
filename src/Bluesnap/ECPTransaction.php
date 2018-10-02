<?php

namespace Bluesnap;

/**
 * Class EcpTransaction
 */
class EcpTransaction
{
    public static function get($id = null)
    {
        return Adapter::get('EcpTransaction', $id);
    }

    public static function create($data)
    {
        return Adapter::create('EcpTransaction', $data, [
            'id_in_header' => false
        ]);
    }

    public static function update($id, $data)
    {
        return Adapter::update('EcpTransaction', $id, $data, [
            'id_in_url' => false
        ]);
    }
}
