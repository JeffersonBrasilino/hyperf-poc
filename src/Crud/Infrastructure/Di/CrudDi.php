<?php
declare(strict_types=1);

namespace Application\Crud\Infrastructure\Di;

use Application\Crud\Application\CreateCommand;
use Application\Crud\Domain\Contracts\CrudRepositoryInterface;
use Application\Crud\Infrastructure\Database\CrudRepository;

return [
    //CreateCommand::class => CreateCommand::class,
    CrudRepositoryInterface::class => CrudRepository::class
];