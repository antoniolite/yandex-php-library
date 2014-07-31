<?php

namespace Yandex\Metrica\Management\Models;

use Yandex\Metrica\Management\Models\Goal;

class AddGoalResponse extends ManagementModel
{

    protected $goal = null;

    protected $mappingClasses = array(
        'goal' => 'Yandex\Metrica\Management\Models\Goal'
    );

    protected $propNameMap = array(
        
    );

    /**
     * Retrieve the goal property
     *
     * @return Goal|null
     */
    public function getGoal()
    {
        return $this->goal;
    }

    /**
     * Set the goal property
     *
     * @param Goal $goal
     * @return $this
     */
    public function setGoal($goal)
    {
        $this->goal = $goal;
        return $this;
    }
}
