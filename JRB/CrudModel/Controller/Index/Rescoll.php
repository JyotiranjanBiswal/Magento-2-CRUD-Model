<?php

namespace JRB\CrudModel\Controller\Index;

class Rescoll extends \Magento\Framework\App\Action\Action {

    protected $resultPageFactory;
    protected $_employeeCollection;

    /**
     * Constructor
     * 
     * @param \Magento\Framework\App\Action\Context  $context
     * @param \Magento\Framework\View\Result\PageFactory $resultPageFactory
     */
    public function __construct(
        \Magento\Framework\App\Action\Context $context, 
        \Magento\Framework\View\Result\PageFactory $resultPageFactory,
        \JRB\CrudModel\Model\ResourceModel\Employee\CollectionFactory $employeeCollection
    ) {
        $this->resultPageFactory = $resultPageFactory;
        $this->_employeeCollection = $employeeCollection;
        parent::__construct($context);
    }

    /**
     * Execute view action
     * 
     * @return \Magento\Framework\Controller\ResultInterface
     */
    public function execute() {
        echo "before inserting";
        $collection = $this->_employeeCollection->create();
        echo "<pre>";
        print_r($collection->getData());
        echo "</pre>";
        exit;
    }

}
