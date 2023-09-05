<?php
declare(strict_types=1);

namespace Application\Crud\Domain\Contracts;

interface CrudRepositoryInterface
{
    public function getDataByInterface();
}