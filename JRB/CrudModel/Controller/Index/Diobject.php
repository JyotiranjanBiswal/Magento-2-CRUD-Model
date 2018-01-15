<?php

namespace JRB\CrudModel\Controller\Index;

class Diobject extends \Magento\Framework\App\Action\Action {

    protected $resultPageFactory;
    protected $_employee;

    /**
     * Constructor
     * 
     * @param \Magento\Framework\App\Action\Context  $context
     * @param \Magento\Framework\View\Result\PageFactory $resultPageFactory
     */
    public function __construct(
        \Magento\Framework\App\Action\Context $context, 
        \Magento\Framework\View\Result\PageFactory $resultPageFactory,
        \JRB\CrudModel\Model\EmployeeFactory $employee
    ) {
        $this->resultPageFactory = $resultPageFactory;
        $this->_employee = $employee;
        parent::__construct($context);
    }

    /**
     * Execute view action
     * 
     * @return \Magento\Framework\Controller\ResultInterface
     */
    public function execute() {
        echo "before inserting";
        
        $contactModel = $this->_employee->create();
        $collection = $contactModel->getCollection();
        echo "<pre>";
        print_r($collection->getData());
        echo "</pre>";
        exit;
    }

}
