<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\InputElements;

use Oru\EcmaScript\Core\Contracts\StaticSemantics\HasMV;
use Oru\EcmaScript\Core\Contracts\StaticSemantics\HasTRV;

interface CodePoint extends InputElement, HasMV, HasTRV
{
}
