<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions;

use Oru\EcmaScript\Core\Contracts\StaticSemantics\HasIs;
use Oru\EcmaScript\Core\Contracts\StaticSemantics\HasPosition;
use Oru\EcmaScript\Core\Contracts\StaticSemantics\HasSourceTextMatched;
use Oru\EcmaScript\Core\Contracts\StaticSemantics\HasTRV;

interface LineTerminatorSequence extends LineTerminator, TemplateCharacter, HasIs, HasPosition, HasSourceTextMatched, HasTRV {}
