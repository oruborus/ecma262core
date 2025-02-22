<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\RegularExpressions\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\RegularExpressions\Productions\AtomEscape;
use Oru\EcmaScript\Core\Contracts\Grammars\RegularExpressions\Productions\CharacterClassEscape;
use Oru\EcmaScript\Core\Contracts\Grammars\RegularExpressions\Productions\CharacterEscape;
use Oru\EcmaScript\Core\Contracts\Grammars\RegularExpressions\Productions\GroupName;

interface AtomEscapeFactory
{
    public function create(int|CharacterClassEscape|CharacterEscape|GroupName $escape): AtomEscape;
}
