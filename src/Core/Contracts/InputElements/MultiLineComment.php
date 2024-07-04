<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\InputElements;

interface MultiLineComment extends Comment
{
    public function containedLineTerminators(): int;

    /**
     * @return non-negative-int
     */
    public function numberOfCodePointsAfterLastLineTerminatorSequence(): int;
}
