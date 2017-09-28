<?php

namespace JRB\CrudModel\Model;

use Magento\Framework\Model\AbstractModel;

/**
 * Contact Model
 *
 * @author Jyotiranjan
 */
class Employee extends AbstractModel
{
    /**
     * @return void
     */
    protected function _construct()
    {
        $this->_init(\JRB\CrudModel\Model\ResourceModel\Employee::class);
    }
    
}