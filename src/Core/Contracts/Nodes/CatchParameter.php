<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Nodes;

use Oru\EcmaScript\Core\Contracts\RuntimeSemantics\HasBindingInitialization;
use Oru\EcmaScript\Core\Contracts\StaticSemantics\HasBoundNames;

interface CatchParameter extends HasBoundNames, HasBindingInitialization, Binding
{
}
