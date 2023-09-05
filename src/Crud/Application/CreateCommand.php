<?php
declare(strict_types=1);
namespace Application\Crud\Application;

use Application\Crud\Domain\Contracts\CrudRepositoryInterface;
use Application\Crud\Infrastructure\Database\CrudRepository;
use Application\Crud\Infrastructure\Di\CrudRepositoryLazy;

class CreateCommand
{
    /*     #[Inject(lazy: true)]*/
    private $repo;
    public function __construct(CrudRepositoryInterface $a)
    {
        $this->repo = $a;
    }
    public function create()
    {
        //return 'CreateCommand.create called';
        return $this->repo->getDataByInterface();
    }
}