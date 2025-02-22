<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\LineContinuation;
use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\LineTerminatorSequence;
use Oru\EcmaScript\Core\Contracts\PositionalInformation;
use Oru\EcmaScript\Core\Contracts\SourceText;

interface LineContinuationFactory
{
    public function create(
        LineTerminatorSequence $lineTerminatorSequence,
        SourceText $sourceText,
        PositionalInformation $position,
        PositionalInformation $next,
    ): LineContinuation;
}
