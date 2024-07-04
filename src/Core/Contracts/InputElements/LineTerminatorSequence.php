<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\InputElements;

use Oru\EcmaScript\Core\Contracts\StaticSemantics\HasIs;
use Oru\EcmaScript\Core\Contracts\StaticSemantics\HasPositionalInformation;
use Oru\EcmaScript\Core\Contracts\StaticSemantics\HasSourceTextMatched;
use Oru\EcmaScript\Core\Contracts\StaticSemantics\HasTRV;

interface LineTerminatorSequence extends LineTerminator, TemplateCharacter, HasIs, HasPositionalInformation, HasSourceTextMatched, HasTRV
{
}
