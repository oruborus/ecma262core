<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\RegularExpressions\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\RegularExpressions\Productions\CharacterEscape;
use Oru\EcmaScript\Core\Contracts\Grammars\RegularExpressions\Productions\ClassEscape;
use Oru\EcmaScript\Core\Contracts\Position;
use Oru\EcmaScript\Core\Contracts\Values\SourceText;

interface ClassEscapeFactory
{
    public function create(
        CharacterEscape $characterEscape,
        SourceText $sourceText,
        Position $position,
        Position $next,
    ): ClassEscape;

    public function createB(
        SourceText $sourceText,
        Position $position,
        Position $next,
    ): ClassEscape;

    public function createDash(
        SourceText $sourceText,
        Position $position,
        Position $next,
    ): ClassEscape;
}
