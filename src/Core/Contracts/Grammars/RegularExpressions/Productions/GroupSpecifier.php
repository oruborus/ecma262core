<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\RegularExpressions\Productions;

use Oru\EcmaScript\Core\Contracts\StaticSemantics\HasCapturingGroupName;

interface GroupSpecifier extends RegularExpressionNode, HasCapturingGroupName {}
