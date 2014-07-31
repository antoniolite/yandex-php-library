<?php

namespace Yandex\Metrica\Stat\Models;

use Yandex\Metrica\Stat\Models\Dimensions;

class Items extends StatModel
{

    protected $dimensions = null;

    protected $metrics = null;

    protected $mappingClasses = array(
        'dimensions' => 'Yandex\Metrica\Stat\Models\Dimensions'
    );

    protected $propNameMap = array(
        
    );

    /**
     * Retrieve the dimensions property
     *
     * @return Dimensions|null
     */
    public function getDimensions()
    {
        return $this->dimensions;
    }

    /**
     * Set the dimensions property
     *
     * @param Dimensions $dimensions
     * @return $this
     */
    public function setDimensions($dimensions)
    {
        $this->dimensions = $dimensions;
        return $this;
    }

    /**
     * Retrieve the metrics property
     *
     * @return array|null
     */
    public function getMetrics()
    {
        return $this->metrics;
    }

    /**
     * Set the metrics property
     *
     * @param array $metrics
     * @return $this
     */
    public function setMetrics($metrics)
    {
        $this->metrics = $metrics;
        return $this;
    }
}
