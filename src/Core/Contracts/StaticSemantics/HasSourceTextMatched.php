<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\StaticSemantics;

interface HasSourceTextMatched
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-algorithm-conventions-syntax-directed-operations
     *
     * The source text matched by a grammar production is the portion of the source text that starts
     * at the beginning of the first terminal that participated in the match and ends at the end of
     * the last terminal that participated in the match.
     *
     * @return array<int, int>
     */
    public function sourceTextMatched(): array;
}
