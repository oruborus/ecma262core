<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\RegularExpressions\Productions;

interface GroupSpecifier extends RegularExpressionNode
{
    public GroupName $groupName { get; }
}
