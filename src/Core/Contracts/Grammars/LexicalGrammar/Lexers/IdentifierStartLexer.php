<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Lexers;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\IdentifierStart;
use Oru\EcmaScript\Core\Contracts\Parameters;
use Oru\EcmaScript\Core\Contracts\PositionalInformation;
use Oru\EcmaScript\Core\Contracts\SourceText;
use Oru\EcmaScript\Core\Contracts\Values\ThrowCompletion;

interface IdentifierStartLexer
{
    /**
     * @see https://tc39.es/ecma262/#prod-IdentifierStart
     *
     * @throws ThrowCompletion     
     */
    public function tokenize(
        Agent $agent,
        SourceText $sourceText,
        PositionalInformation $position,
        Parameters $parameters,
    ): ?IdentifierStart;
}
