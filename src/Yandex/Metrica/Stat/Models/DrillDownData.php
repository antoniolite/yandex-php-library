<?php

namespace Yandex\Metrica\Stat\Models;

class DrillDownData extends StatModel
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
    public function add($drillDownItems)
    {
        if (is_array($drillDownItems)) {
            $this->collection[] = new DrillDownItems($drillDownItems);
        } elseif (is_object($drillDownItems) && $drillDownItems instanceof DrillDownItems) {
            $this->collection[] = $drillDownItems;
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
