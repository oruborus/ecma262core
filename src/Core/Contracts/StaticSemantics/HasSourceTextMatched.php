<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\StaticSemantics;

use Oru\EcmaScript\Core\Contracts\Values\SourceText;

interface HasSourceTextMatched
{
    /**
     * @see https://tc39.es/ecma262/#sec-algorithm-conventions-syntax-directed-operations
     *
     * The source text matched by a grammar production or Parse Node derived from it is the portion
     * of the source text that starts at the beginning of the first terminal that participated in the
     * match and ends at the end of the last terminal that participated in the match.
     */
    public function sourceTextMatched(): SourceText;
}
