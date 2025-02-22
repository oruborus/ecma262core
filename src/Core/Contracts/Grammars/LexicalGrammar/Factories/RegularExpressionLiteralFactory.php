<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\RegularExpressionBody;
use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\RegularExpressionFlags;
use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\RegularExpressionLiteral;
use Oru\EcmaScript\Core\Contracts\PositionalInformation;
use Oru\EcmaScript\Core\Contracts\SourceText;

interface RegularExpressionLiteralFactory
{
    public function create(
        RegularExpressionBody $regularExpressionBody,
        RegularExpressionFlags $regularExpressionFlags,
        SourceText $sourceText,
        PositionalInformation $position,
        PositionalInformation $next,
    ): RegularExpressionLiteral;
}
