<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Values;

use Oru\EcmaScript\Core\Contracts\Position;
use Stringable;

/**
 * FIXME: Remove `non-negative-int` as key type
 * @extends ListValue<non-negative-int|Position, int<0, 65535>>
 */
interface SourceText extends ListValue, Stringable
{
    /**
     * @param non-negative-int|Position $offset
     * @param positive-int $size
     */
    public function slice(int|Position $offset, int $size): static;
}
