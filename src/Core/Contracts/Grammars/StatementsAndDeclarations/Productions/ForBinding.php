<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\StatementsAndDeclarations\Productions;

use Oru\EcmaScript\Core\Contracts\RuntimeSemantics\HasBindingInitialization;
use Oru\EcmaScript\Core\Contracts\StaticSemantics\HasBoundNames;
use Oru\EcmaScript\Core\Contracts\StaticSemantics\HasIsDestructuring;

interface ForBinding extends HasBindingInitialization, HasBoundNames, Binding, HasIsDestructuring {}
