<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\RegularExpressions\Lexers;

use Oru\EcmaScript\Core\Contracts\Grammars\RegularExpressions\Productions\IdentityEscape;
use Oru\EcmaScript\Core\Contracts\Parameters;
use Oru\EcmaScript\Core\Contracts\Position;
use Oru\EcmaScript\Core\Contracts\Values\SourceText;

interface IdentityEscapeLexer
{
    /** @see https://tc39.es/ecma262/#prod-IdentityEscape */
    public function tokenize(SourceText $sourceText, Position $position, Parameters $parameters): ?IdentityEscape;
}
