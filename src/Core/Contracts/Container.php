<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts;

use Oru\EcmaScript\Core\Exceptions\UnresolvableTypeException;

interface Container
{
    /**
     * @template TAbstract of object
     * @param class-string<TAbstract> $abstract 
     * @param array<string, mixed> $parameters
     * @return ?TAbstract
     *
     * @throws UnresolvableTypeException
     */
    public function get(string $abstract, array $parameters = []): ?object;

    /**
     * @template TAbstract of object
     * @param class-string<TAbstract> $concrete 
     * @param array<string, mixed> $parameters
     * @return TAbstract
     * 
     * @throws UnresolvableTypeException
     */
    public function make(string $concrete, array $parameters = []): object;

    /**
     * @template T
     * @param callable(mixed...):T $function
     * @param array<string, mixed> $parameters
     * @return T
     *
     * @throws UnresolvableTypeException
     */
    public function call(callable $function, array $parameters = []): mixed;

    /**
     * @template TAbstract of object
     * @param class-string<TAbstract> $abstract 
     * @param TAbstract|class-string<TAbstract>|callable(mixed...):TAbstract $concrete
     */
    public function bind(string $abstract, object|string|callable $concrete): void;

    /**
     * @template TAbstract of object
     * @param class-string<TAbstract> $abstract 
     * @param TAbstract|class-string<TAbstract>|callable(mixed...):TAbstract $concrete
     */
    public function singleton(string $abstract, object|string|callable $concrete): void;
}
