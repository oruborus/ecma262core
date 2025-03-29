<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\RegularExpressions\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\RegularExpressions\Productions\IdentityEscape;
use Oru\EcmaScript\Core\Contracts\Grammars\RegularExpressions\Productions\SyntaxCharacter;
use Oru\EcmaScript\Core\Contracts\Position;
use Oru\EcmaScript\Core\Contracts\Values\SourceText;

interface IdentityEscapeFactory
{
    public function createWithSolidus(
        SourceText $sourceText,
        Position $position,
        Position $next,
    ): IdentityEscape;

    public function createWithSourceCharacter(
        int $sourceCharacter,
        SourceText $sourceText,
        Position $position,
        Position $next,
    ): IdentityEscape;
}
