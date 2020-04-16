<?php declare(strict_types=1);

namespace BabDev\PagerfantaBundle\RouteGenerator;

final class RouteGeneratorDecorator
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