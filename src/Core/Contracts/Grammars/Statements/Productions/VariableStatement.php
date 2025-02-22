<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\Statements\Productions;

use Oru\EcmaScript\Core\Contracts\StaticSemantics\HasBoundNames;

interface VariableStatement extends Statement, HasBoundNames {}
