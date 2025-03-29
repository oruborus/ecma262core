<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Lexers;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\InputElementTemplateTail;
use Oru\EcmaScript\Core\Contracts\Parameters;
use Oru\EcmaScript\Core\Contracts\Position;
use Oru\EcmaScript\Core\Contracts\Values\SourceText;

interface InputElementTemplateTailLexer
{
    /** @see https://tc39.es/ecma262/#prod-InputElementTemplateTail */
    public function tokenize(
        Agent $agent,
        SourceText $sourceText,
        Position $position,
        Parameters $parameters,
    ): ?InputElementTemplateTail;
}
