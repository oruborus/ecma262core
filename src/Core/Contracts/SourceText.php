<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts;

use ArrayAccess;
use IteratorAggregate;

/**
 * FIXME: Remove `non-negative-int` as key type
 * @extends ArrayAccess<non-negative-int|PositionalInformation, ?int<0, 1114111>>
 * @extends IteratorAggregate<non-negative-int, ?int<0, 1114111>>
 */
interface SourceText extends ArrayAccess, IteratorAggregate
{
    /** @var array<non-negative-int, int<0, 1114111>> $codePoints */
    public array $codePoints { get; }

    /**
     * @param non-negative-int|PositionalInformation $offset
     * @param positive-int $size
     */
    public function slice(int|PositionalInformation $offset, int $size): static;

    /** @param int<0, 1114111> $codePoint */
    public function contains(int $codePoint): bool;
}
