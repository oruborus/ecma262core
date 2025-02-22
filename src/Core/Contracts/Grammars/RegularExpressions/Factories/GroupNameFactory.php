<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\RegularExpressions\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\RegularExpressions\Productions\GroupName;

interface GroupNameFactory
{
    /** @deprecated FIXME: Implement according to https://tc39.es/ecma262/#prod-GroupName */
    public function create(string $regExpIdentifierName): GroupName;
}
