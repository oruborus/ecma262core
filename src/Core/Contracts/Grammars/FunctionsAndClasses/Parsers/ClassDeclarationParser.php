<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\FunctionsAndClasses\Parsers;

use Oru\EcmaScript\Core\Contracts\Grammars\FunctionsAndClasses\Productions\ClassDeclaration;
use Oru\EcmaScript\Core\Contracts\Lexer;
use Oru\EcmaScript\Core\Contracts\Parameters;
use Oru\EcmaScript\Core\Contracts\Values\ThrowCompletion;

interface ClassDeclarationParser
{
    /**
     * @see https://tc39.es/ecma262/#prod-ClassDeclaration
     *
     * @throws ThrowCompletion
     */
    public function parse(Lexer $lexer, Parameters $parameters): ?ClassDeclaration;
}
