<?php

namespace Okalm\Contest\Model;

use Magento\Framework\Model\AbstractModel;

class Config extends AbstractModel
{

    /**
     * Define resource model
     */
    protected function _construct()
    {
        $this->_init('Okalm\Contest\Model\ResourceModel\Config');
    }

    public function getId()
    {
        return $this->getData('id');
    }

    public function getRuleId()
    {
        return $this->getData('rule_id');
    }

    public function getMinumOrderNumber()
    {
        return $this->getData('min_order_number');
    }

    public function setId($id)
    {
        $this->setData('id', $id);
    }

    public function setRuleId($id)
    {
        $this->setData('rule_id', $id);
    }

    public function setMinumOrderNumber($value)
    {
        $this->setData('min_order_number', $value);
    }

}
