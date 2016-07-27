<?php namespace Okalm\Igram\Model\ResourceModel\Config;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    /**
     * Define resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Okalm\Contest\Model\Config', 'Okalm\Contest\Model\ResourceModel\Config');
    }

}