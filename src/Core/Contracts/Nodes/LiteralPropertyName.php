<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Nodes;

use Oru\EcmaScript\Core\Contracts\StaticSemantics\HasPropName;

interface LiteralPropertyName extends PropertyName, HasPropName
{
}
