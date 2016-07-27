<?php
/**
 * Created by PhpStorm.
 * User: michiz
 * Date: 07/06/16
 * Time: 7:15 PM
 */

namespace Okalm\Contest\Observer;

use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;
use Magento\SalesRule\Model\RuleFactory;
use Magento\SalesRule\Model\CouponFactory;
use Magento\SalesRule\Model\Coupon\Codegenerator;

class AccountPost implements ObserverInterface
{
    protected $ruleFactory;

    protected $couponFactory;

    protected $couponGenerator;


    public function __construct(
        Codegenerator $generator,
        RuleFactory $ruleFactory,
        CouponFactory $couponFactory
    ){
        $this->ruleFactory = $ruleFactory;
        $this->couponGenerator = $generator;
        $this->couponFactory = $couponFactory;
    }

    public function execute(\Magento\Framework\Event\Observer $observer)
    {
        //LOAD THE RULE
        $rule = $this->ruleFactory->load(1);

        if(!$rule){
            return;
        }

        //GENERATE COUPON
        $code = $this->couponGenerator->generateCode();

        //CREATE COUPON
        $coupon = $this->couponFactory->create();

        //SAVE COUPON
        $coupon->setRule($rule)
            ->setCode($code)
            ->setUsagePerCustomer(1)
            ->setCreatedAt(time())
            ->setUsageLimit(1)
            ->setIsPrimary(true)
            ->save();
    }
}