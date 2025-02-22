<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\RegularExpressionClass;
use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\RegularExpressionClassChars;
use Oru\EcmaScript\Core\Contracts\PositionalInformation;
use Oru\EcmaScript\Core\Contracts\SourceText;

interface RegularExpressionClassFactory
{
    public function create(
        RegularExpressionClassChars $regularExpressionClassChars,
        SourceText $sourceText,
        PositionalInformation $position,
        PositionalInformation $next,
    ): RegularExpressionClass;
}
