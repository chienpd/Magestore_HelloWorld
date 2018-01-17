<?php
/**
 * Created by PhpStorm.
 * User: pdc
 * Date: 17/01/2018
 * Time: 15:52
 */

namespace Magestore\HelloWorld\Controller\Index;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\App\ResponseInterface;
use Magento\Framework\View\Result\PageFactory;

/**
 * Class Index
 * @package Magestore\HelloWorld\Controller\Index
 */
class Index extends Action
{
    /**
     * @var PageFactory
     */
    protected $_pageFactory;

    /**
     * Index constructor.
     * @param Context $context
     * @param PageFactory $pageFactory
     */
    public function __construct(
        Context $context,
        PageFactory $pageFactory)
    {
        $this->_pageFactory = $pageFactory;
        return parent::__construct($context);
    }

    /**
     * Execute action based on request and return result
     *
     * Note: Request will be added as operation argument in future
     *
     * @return \Magento\Framework\Controller\ResultInterface|ResponseInterface
     */
    public function execute()
    {
        return $this->_pageFactory->create();
    }
}