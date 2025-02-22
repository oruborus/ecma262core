<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\RegularExpressions\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\RegularExpressions\Productions\GroupName;
use Oru\EcmaScript\Core\Contracts\Grammars\RegularExpressions\Productions\GroupSpecifier;

interface GroupSpecifierFactory
{
    public function create(GroupName $groupName): GroupSpecifier;
}
