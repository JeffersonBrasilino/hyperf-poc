<?php
use Application\Crud\Application\CreateCommand;
use Application\Crud\Domain\Contracts\CrudRepositoryInterface;
use Application\Crud\Infrastructure\Database\CrudRepository;
use Application\Crud\Infrastructure\Di\CrudRepositoryLazy;

return [
    //'Application\Crud\Infrastructure\Database\CrudRepository' => CrudRepositoryInterface::class
    //CrudRepositoryLazy::class => CrudRepository::class
    //CrudRepositoryInterface::class => CrudRepository::class
];