<?php
/**
 * Created by PhpStorm.
 * User: michiz
 * Date: 12/06/16
 * Time: 1:32 PM
 */

namespace Okalm\Contest\Controller\Adminhtml\Config;


use Magento\Framework\App\ResponseInterface;

class Index  extends \Magento\Backend\App\Action
{

    public function execute()
    {
        $this->_view->loadLayout();
        $this->_view->renderLayout();
    }
}