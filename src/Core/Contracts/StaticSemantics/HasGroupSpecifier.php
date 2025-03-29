<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\StaticSemantics;

use Oru\EcmaScript\Core\Contracts\Grammars\RegularExpressions\Productions\GroupSpecifier;

interface HasGroupSpecifier
{
    public ?GroupSpecifier $groupSpecifier { get; }
}
