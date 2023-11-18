<?php
namespace Bnaia\VendorsPriceComparison\Controller\Index;
use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;

class View extends \Magento\Framework\App\Action\Action
{
	protected $_messagesFactory;
    /**
     * @param Context $context
     * @param PageFactory $resultPageFactory
    */
    public function __construct(
        Context $context,
        PageFactory $resultPageFactory
    ) {
        parent::__construct($context);
        $this->resultPageFactory = $resultPageFactory;
    }
    
    public function execute()
    {


		//$this->_objectManager->get('Magento\Framework\Registry')->register('MessagesData', $messages);
 
        $pageFactory = $this->resultPageFactory->create();

		
		
		$this->_view->loadLayout();
        $this->_view->renderLayout();
    }
}