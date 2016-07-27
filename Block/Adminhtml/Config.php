<?php

namespace Okalm\Contest\Block\Adminhtml;

use \Magento\Framework\View\Element\Template\Context;
use \Magento\SalesRule\Model\RuleFactory;


class Config extends \Magento\Framework\View\Element\Template {

    protected $ruleFactory;

    public function __construct(
        Context $context,
        array $data = array(),
        RuleFactory $ruleFactory
    ) {
        $this->ruleFactory = $ruleFactory;
        parent::__construct($context, $data);
    }

    public function _prepareLayout()
    {
        return parent::_prepareLayout();
    }

    public function getAllRules()
    {
        $rules = $this->ruleFactory->create()->getCollection();

        return $rules;

    }

}
