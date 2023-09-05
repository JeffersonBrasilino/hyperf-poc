<?php

namespace Application\Crud\Infrastructure\Di;

class CrudRepositoryLazy extends \Application\Crud\Infrastructure\Database\CrudRepository
{
    use \Hyperf\Di\LazyLoader\LazyProxyTrait;
    const PROXY_TARGET = 'Application\\Crud\\Infrastructure\\Database\\CrudRepository';
    function getDataByInterface()
    {
        return $this->__call(__FUNCTION__, func_get_args());
    }
}