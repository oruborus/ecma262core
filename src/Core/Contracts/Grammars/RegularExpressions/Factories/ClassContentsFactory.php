<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\RegularExpressions\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\RegularExpressions\Productions\ClassContents;
use Oru\EcmaScript\Core\Contracts\Grammars\RegularExpressions\Productions\NonemptyClassRanges;

interface ClassContentsFactory
{
    public function create(NonemptyClassRanges $nonemptyClassRanges): ClassContents;

    public function createEmpty(): ClassContents;
}
