<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions;

use Oru\EcmaScript\Core\Contracts\StaticSemantics\HasIs;
use Oru\EcmaScript\Core\Contracts\StaticSemantics\HasPosition;
use Oru\EcmaScript\Core\Contracts\StaticSemantics\HasSourceTextMatched;

// FIXME: Remove `InputElement` extend `HasSourceTextMatched`, `HasIs` and `HasPosition` directly
interface InputElement extends HasIs, HasPosition, HasSourceTextMatched {}
