<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\RegularExpressions\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\RegularExpressions\Productions\ControlEscape;

interface ControlEscapeFactory
{
    /** @param 102|110|114|116|118 $codePoint */
    public function create(int $codePoint): ControlEscape;
}
