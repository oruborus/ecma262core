<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions;

use Oru\EcmaScript\Core\Contracts\StaticSemantics\HasContains;
use Oru\EcmaScript\Core\Contracts\StaticSemantics\HasTRV;
use Oru\EcmaScript\Core\Contracts\StaticSemantics\HasTV;

interface TemplateHead extends Template, HasTRV, HasTV, HasContains {}
