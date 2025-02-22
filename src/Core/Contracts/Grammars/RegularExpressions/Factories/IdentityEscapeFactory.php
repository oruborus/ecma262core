<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\RegularExpressions\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\RegularExpressions\Productions\IdentityEscape;

interface IdentityEscapeFactory
{
    public function createWithSolidus(): IdentityEscape;

    public function createWithSyntaxCharacter(int $syntaxCharacter): IdentityEscape;

    public function createWithSourceCharacter(int $sourceCharacter): IdentityEscape;
}
