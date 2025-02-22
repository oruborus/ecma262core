<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\FunctionsAndClasses\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\FunctionsAndClasses\Productions\ClassBody;
use Oru\EcmaScript\Core\Contracts\Grammars\FunctionsAndClasses\Productions\ClassHeritage;
use Oru\EcmaScript\Core\Contracts\Grammars\FunctionsAndClasses\Productions\ClassTail;

interface ClassTailFactory
{
    public function create(?ClassHeritage $classHeritage, ?ClassBody $classBody): ClassTail;
}
