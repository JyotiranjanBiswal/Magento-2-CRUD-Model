<?php

namespace JRB\CrudModel\Model\ResourceModel\Employee;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

/**
 * Contact Resource Model Collection
 *
 * @author     Jyotiranjan Biswal
 */
class Collection extends AbstractCollection
{
    /**
     * Initialize resource collection
     *
     * @return void
     */
    public function _construct()
    {
        $this->_init('\JRB\CrudModel\Model\Employee', '\JRB\CrudModel\Model\ResourceModel\Employee');
    }
}