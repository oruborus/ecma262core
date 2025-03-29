<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\RegularExpressions\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\RegularExpressions\Productions\AtomEscape;
use Oru\EcmaScript\Core\Contracts\Grammars\RegularExpressions\Productions\DecimalEscape;
use Oru\EcmaScript\Core\Contracts\Grammars\RegularExpressions\Productions\GroupName;
use Oru\EcmaScript\Core\Contracts\Position;
use Oru\EcmaScript\Core\Contracts\Values\SourceText;

interface AtomEscapeFactory
{
    public function create(
        GroupName $groupName,
        SourceText $sourceText,
        Position $position,
        Position $next,
    ): AtomEscape;
}
