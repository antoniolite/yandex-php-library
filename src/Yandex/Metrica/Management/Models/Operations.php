<?php

namespace Yandex\Metrica\Management\Models;

class Operations extends ManagementModel
{

    protected $collection = array(
        
    );

    protected $mappingClasses = array(
        
    );

    protected $propNameMap = array(
        
    );

    /**
     * Add item
     */
    public function add($operation)
    {
        if (is_array($operation)) {
            $this->collection[] = new Operation($operation);
        } elseif (is_object($operation) && $operation instanceof Operation) {
            $this->collection[] = $operation;
        }

        return $this;
    }

    /**
     * Get items
     */
    public function getAll()
    {
        return $this->collection;
    }
}
