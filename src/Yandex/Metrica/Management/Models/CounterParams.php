<?php

namespace Yandex\Metrica\Management\Models;

class CounterParams extends ManagementModel
{

    protected $callback = null;

    protected $field = null;

    protected $mappingClasses = array(
        
    );

    protected $propNameMap = array(
        
    );

    /**
     * Retrieve the callback property
     *
     * @return string|null
     */
    public function getCallback()
    {
        return $this->callback;
    }

    /**
     * Set the callback property
     *
     * @param string $callback
     * @return $this
     */
    public function setCallback($callback)
    {
        $this->callback = $callback;
        return $this;
    }

    /**
     * Retrieve the field property
     *
     * @return string|null
     */
    public function getField()
    {
        return $this->field;
    }

    /**
     * Set the field property
     *
     * @param string $field
     * @return $this
     */
    public function setField($field)
    {
        $this->field = $field;
        return $this;
    }
}
