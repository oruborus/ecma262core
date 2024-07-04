<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\InputElements;

use Oru\EcmaScript\Core\Contracts\StaticSemantics\HasNumericValue;

interface NumericLiteral extends CommonToken, HasNumericValue
{
}
