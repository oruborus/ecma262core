<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Nodes\RegularExpressions;

use Oru\EcmaScript\Core\Contracts\StaticSemantics\HasCharacterValue;

interface ControlLetter extends RegularExpressionNode, HasCharacterValue
{
}
