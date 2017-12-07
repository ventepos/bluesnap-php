<?php

namespace Bluesnap\Models;

/**
 * Class TransactionMetaData
 */
class TransactionMetaData extends Model
{
    public function __construct($data = null)
    {
        parent::__construct($data);
    }

    /**
     * @var array
     */
    public $metaData;
}
