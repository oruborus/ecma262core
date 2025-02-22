<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts;

use ArrayAccess;
use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\InputElement;

/** @extends ArrayAccess<non-negative-int, InputElement> */
interface SourceCode extends ArrayAccess {}
