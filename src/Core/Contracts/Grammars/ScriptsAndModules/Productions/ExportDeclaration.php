<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\ScriptsAndModules\Productions;

use Oru\EcmaScript\Core\Contracts\StaticSemantics\HasBoundNames;
use Oru\EcmaScript\Core\Contracts\StaticSemantics\HasIsConstantDeclaration;

interface ExportDeclaration extends ModuleItem, HasBoundNames, HasIsConstantDeclaration {}
