<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\RegularExpressions\Productions;

use Oru\EcmaScript\Core\Contracts\StaticSemantics\HasCharacterValue;
use Oru\EcmaScript\Core\Contracts\StaticSemantics\HasIsCharacterClass;

interface ClassAtom extends NonemptyClassRangesNoDash, HasIsCharacterClass, HasCharacterValue {}
