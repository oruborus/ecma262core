<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions;

use Oru\EcmaScript\Core\Contracts\StaticSemantics\HasMV;

interface DecimalIntegerLiteral extends DecimalLiteral, HasMV {}
