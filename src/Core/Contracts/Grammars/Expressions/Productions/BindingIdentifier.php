<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions;

use Oru\EcmaScript\Core\Contracts\Grammars\FunctionsAndClasses\Productions\AsyncArrowBindingIdentifier;
use Oru\EcmaScript\Core\Contracts\Grammars\Statements\Productions\BindingElement;
use Oru\EcmaScript\Core\Contracts\Grammars\Statements\Productions\CatchParameter;
use Oru\EcmaScript\Core\Contracts\Grammars\Statements\Productions\ForBinding;
use Oru\EcmaScript\Core\Contracts\RuntimeSemantics\HasBindingInitialization;
use Oru\EcmaScript\Core\Contracts\StaticSemantics\HasStringValue;

interface BindingIdentifier extends AsyncArrowBindingIdentifier, BindingElement, CatchParameter, ForBinding, HasBindingInitialization, HasStringValue {}
