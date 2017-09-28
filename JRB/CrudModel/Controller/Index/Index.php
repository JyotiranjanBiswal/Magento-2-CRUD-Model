<?php

namespace JRB\CrudModel\Controller\Index;

class Index extends \Magento\Framework\App\Action\Action {

    protected $resultPageFactory;

    /**
     * Constructor
     * 
     * @param \Magento\Framework\App\Action\Context  $context
     * @param \Magento\Framework\View\Result\PageFactory $resultPageFactory
     */
    public function __construct(
        \Magento\Framework\App\Action\Context $context, 
        \Magento\Framework\View\Result\PageFactory $resultPageFactory
    ) {
        $this->resultPageFactory = $resultPageFactory;
        parent::__construct($context);
    }

    /**
     * Execute view action
     * 
     * @return \Magento\Framework\Controller\ResultInterface
     */
    public function execute() {
        echo "before inserting";
        
        $contactModel = $this->_objectManager->create('JRB\CrudModel\Model\Employee');
        $collection = $contactModel->getCollection();
        echo "<pre>";
        print_r($collection->getData());
        echo "</pre>";
        
        $employee = $this->_objectManager->create('JRB\CrudModel\Model\Employee');
        $employee->setEmployeeName('Ranu Biswal');
        $employee->setEmployeeSalary(50000);
        $employee->setEmployeeAddress('Cuttack, niali');
        $employee->save();

        $employee = $this->_objectManager->create('JRB\CrudModel\Model\Employee');
        $employee->setEmployeeName('Bijaya Nayak');
        $employee->setEmployeeSalary(60000);
        $employee->setEmployeeAddress('Khurda, kesinga');
        $employee->save();

        $employee = $this->_objectManager->create('JRB\CrudModel\Model\Employee');
        $employee->setEmployeeName('Jack Daniels');
        $employee->setEmployeeSalary(200000);
        $employee->setEmployeeAddress('Cuttack, niali');
        $employee->save();
        
        echo "after inserted";
        $contactModel = $this->_objectManager->create('JRB\CrudModel\Model\Employee');
        $collection = $contactModel->getCollection();
        echo "<pre>";
        print_r($collection->getData());
        
        exit;
    }

}
