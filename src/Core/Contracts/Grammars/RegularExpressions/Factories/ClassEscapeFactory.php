<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\RegularExpressions\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\RegularExpressions\Productions\CharacterClassEscape;
use Oru\EcmaScript\Core\Contracts\Grammars\RegularExpressions\Productions\CharacterEscape;
use Oru\EcmaScript\Core\Contracts\Grammars\RegularExpressions\Productions\ClassEscape;

interface ClassEscapeFactory
{
    public function createB(): ClassEscape;

    public function createDash(): ClassEscape;

    public function createCharacterClassEscape(CharacterClassEscape $characterClassEscape): ClassEscape;

    public function createCharacterEscape(CharacterEscape $characterEscape): ClassEscape;
}
