<?php declare(strict_types=1);

namespace BabDev\PagerfantaBundle\RouteGenerator;

use Pagerfanta\RouteGenerator\RouteGeneratorInterface;

final class RouteGeneratorDecorator implements RouteGeneratorInterface
{
    /**
     * @var callable
     */
    private $decorated;

    public function __construct(callable $decorated)
    {
        $this->decorated = $decorated;
    }

    public function __invoke(int $page): string
    {
        return $this->route($page);
    }

    public function route(int $page): string
    {
        $decorated = $this->decorated;

        return $decorated($page);
    }
}
