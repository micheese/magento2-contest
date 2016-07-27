<?php

namespace Okalm\Contest\Model\ResourceModel;

class Config extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    /**
     * Define main table
     */
    protected function _construct()
    {
        $this->_init('okalm_contest_config', 'id');
    }

}
