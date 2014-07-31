<?php

namespace Yandex\Metrica\Management\Models;

use Yandex\Metrica\Management\Models\Accounts;

class UpdateAccountResponse extends ManagementModel
{

    protected $accounts = null;

    protected $mappingClasses = array(
        'accounts' => 'Yandex\Metrica\Management\Models\Accounts'
    );

    protected $propNameMap = array(
        
    );

    /**
     * Retrieve the accounts property
     *
     * @return Accounts|null
     */
    public function getAccounts()
    {
        return $this->accounts;
    }

    /**
     * Set the accounts property
     *
     * @param Accounts $accounts
     * @return $this
     */
    public function setAccounts($accounts)
    {
        $this->accounts = $accounts;
        return $this;
    }
}
