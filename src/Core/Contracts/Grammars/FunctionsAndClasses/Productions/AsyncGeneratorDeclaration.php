<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\FunctionsAndClasses\Productions;

use Oru\EcmaScript\Core\Contracts\Grammars\StatementsAndDeclarations\Productions\HoistableDeclaration;
use Oru\EcmaScript\Core\Contracts\Values\AbruptCompletion;
use Oru\EcmaScript\Core\Contracts\Values\EnvironmentRecord;
use Oru\EcmaScript\Core\Contracts\Values\ObjectValue;

interface AsyncGeneratorDeclaration extends HoistableDeclaration
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-runtime-semantics-instantiateasyncgeneratorfunctionobject
     *
     * @throws AbruptCompletion
     */
    public function instantiateAsyncGeneratorFunctionObject(EnvironmentRecord $scope): ObjectValue;
}
