<?php
declare(strict_types=1);

namespace Application\Crud\Infrastructure\Di;

use Application\Crud\Infrastructure\Database\CrudRepository;
use Hyperf\Contract\ContainerInterface;
use Hyperf\Support\make;
class CrudRepositoryFactory
{
    public function __invoke(ContainerInterface $container, array $params = [])
    {
        return make(CrudRepository::class,['withFactory'=>false]);
    }
}