<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\StatementsAndDeclarations\Productions;

use Oru\EcmaScript\Core\Contracts\RuntimeSemantics\HasBindingInitialization;
use Oru\EcmaScript\Core\Contracts\StaticSemantics\HasContainsExpression;

interface BindingPattern extends HasContainsExpression, BindingElement, CatchParameter, ForBinding, HasBindingInitialization {}
