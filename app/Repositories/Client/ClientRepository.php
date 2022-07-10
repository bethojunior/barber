<?php

namespace App\Repositories\Client;

use App\Contracts\Repository\AbstractRepository;
use App\Models\Clients\Clients;

class ClientRepository extends AbstractRepository
{

    public function __construct()
    {
        $this->setModel(Clients::class);
    }


}
