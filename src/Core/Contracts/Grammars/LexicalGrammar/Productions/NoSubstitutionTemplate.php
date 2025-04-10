<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions;

use Oru\EcmaScript\Core\Contracts\StaticSemantics\HasTRV;
use Oru\EcmaScript\Core\Contracts\StaticSemantics\HasTV;

interface NoSubstitutionTemplate extends Template, HasTRV, HasTV {}
