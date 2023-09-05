<?php
declare(strict_types=1);

namespace Application\Crud\Infrastructure\Database;
use Application\Crud\Domain\Contracts\CrudRepositoryInterface;

class CrudRepository implements CrudRepositoryInterface{

    public function __construct(private $withFactory = null) {
        
    }

    function getDataByInterface()
    {
        return $this->withFactory == true ? 'getDataByInterface called WITH FACTORY ok' : 'getDataByInterface called ok';
    }
}