<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Values;

use ArrayAccess;
use Countable;
use Iterator;
use Oru\EcmaScript\Core\Contracts\Agent;

/**
 * @template TKey
 * @template TValue
 * @template-extends ArrayAccess<TKey, TValue>
 * @template-extends Iterator<TKey, TValue>
 */
interface ListValue extends SpecificationValue, ArrayAccess, Iterator, Countable
{
    /** @var TValue[] $values */
    public array $values { get; }

    /** @param TValue $value */
    public function contains(mixed $value): bool;

    /**
     * Append all values of $list to $this and return a new list.
     * The keys of list are not preserved.
     *
     * @param ListValue<TKey, TValue> $list
     * @return static<TKey, TValue>
     */
    public function append(ListValue $list): static;

    /**
     * Shifts the first value of the list off and returns it, shortening the list by one element and moving everything down.
     * The keys of list are not modified.
     *
     * @return ?TValue
     */
    public function shift(): mixed;

    /**
     * Pops the last value of the list off and returns it, shortening the list by one element.
     * The keys of list are not modified.
     *
     * @return ?TValue
     */
    public function pop(): mixed;

    /**
     * @param TValue $value
     * @return static<int, TValue>
     */
    public function unshift(Agent $agent, mixed $value): static;

    public function isUnique(): bool;
}
