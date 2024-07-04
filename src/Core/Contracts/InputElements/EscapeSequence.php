<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\InputElements;

use Oru\EcmaScript\Core\Contracts\StaticSemantics\HasSV;
use Oru\EcmaScript\Core\Contracts\StaticSemantics\HasTRV;

interface EscapeSequence extends InputElement, HasSV, HasTRV
{
}
