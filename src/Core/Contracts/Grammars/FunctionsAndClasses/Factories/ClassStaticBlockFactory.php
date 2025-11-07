<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\FunctionsAndClasses\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\FunctionsAndClasses\Productions\ClassStaticBlock;
use Oru\EcmaScript\Core\Contracts\Grammars\FunctionsAndClasses\Productions\ClassStaticBlockBody;
use Oru\EcmaScript\Core\Contracts\Position;
use Oru\EcmaScript\Core\Contracts\Values\SourceCode;

interface ClassStaticBlockFactory
{
    public function create(
        ClassStaticBlockBody $classStaticBlockBody,
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): ClassStaticBlock;
}
