<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\InputElements;

use Oru\EcmaScript\Core\Contracts\StaticSemantics\HasTRV;
use Oru\EcmaScript\Core\Contracts\StaticSemantics\HasTV;

interface TemplateMiddle extends TemplateSubstitutionTail, HasTRV, HasTV
{
}
