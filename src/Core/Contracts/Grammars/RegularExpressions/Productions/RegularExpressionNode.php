<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\RegularExpressions\Productions;

use Oru\EcmaScript\Core\Contracts\StaticSemantics\HasPosition;
use Oru\EcmaScript\Core\Contracts\StaticSemantics\HasSourceTextMatched;

// FIXME: Remove `RegularExpressionNode` extend `HasSourceTextMatched` and (a future) `HasContains` directly
interface RegularExpressionNode extends HasSourceTextMatched, HasPosition {}
