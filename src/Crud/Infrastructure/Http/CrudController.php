<?php
declare(strict_types=1);

namespace Application\Crud\Infrastructure\Http;

use App\Controller\AbstractController;
use Application\Crud\Application\CreateCommand;
use Hyperf\Di\Annotation\Inject;
use Hyperf\Engine\Contract\Http\V2\RequestInterface;
use Hyperf\HttpServer\Annotation\Controller;
use Hyperf\HttpServer\Annotation\RequestMapping;

#[Controller(prefix: 'crud')]
class CrudController
{
    public function __construct(private CreateCommand $command){}

    #[RequestMapping(path: 'teste[/{id}]', methods: 'get, post')]
    public function index(RequestInterface $req = null)
    {
        return $this->command->create();
        //throw new HttpException(408,json_encode(['aaaaaa'=>'huehue brbr']));
    }
}