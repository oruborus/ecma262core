<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Lexers;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\RegularExpressionClass;
use Oru\EcmaScript\Core\Contracts\Parameters;
use Oru\EcmaScript\Core\Contracts\PositionalInformation;
use Oru\EcmaScript\Core\Contracts\SourceText;

interface RegularExpressionClassLexer
{
    /** @see https://tc39.es/ecma262/#prod-RegularExpressionClass */
    public function tokenize(
        Agent $agent,
        SourceText $sourceText,
        PositionalInformation $position,
        Parameters $parameters,
    ): ?RegularExpressionClass;
}
