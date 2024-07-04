<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts;

use Closure;
use Oru\EcmaScript\Core\Exceptions\UnresolvableTypeException;

interface Container
{
    /**
     * @template TAbstract of object
     * @param class-string<TAbstract> $abstract 
     * @param array<string, mixed> $parameters
     * @return TAbstract
     */
    public function get(string $abstract, array $parameters = []): object;

    /**
     * @template TAbstract of object
     * @param array<string, mixed> $parameters
     * @param TAbstract|class-string<TAbstract>|Closure():TAbstract $concrete 
     * @return TAbstract
     * 
     * @throws UnresolvableTypeException
     */
    public function make(object|string $concrete, array $parameters = []): object;

    /** 
     * @param array<string, mixed> $parameters
     */
    public function call(callable $function, array $parameters = []): mixed;

    /**
     * @template TAbstract of object
     * @param class-string<TAbstract> $abstract 
     * @param TAbstract|class-string<TAbstract>|Closure():TAbstract $concrete
     */
    public function bind(string $abstract, object|string $concrete): void;

    /**
     * @template TAbstract of object
     * @param class-string<TAbstract> $abstract 
     * @param TAbstract|class-string<TAbstract>|Closure():TAbstract $concrete
     */
    public function singleton(string $abstract, object|string $concrete): void;
}
