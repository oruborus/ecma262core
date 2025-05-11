<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\FunctionsAndClasses\Parsers;

use Oru\EcmaScript\Core\Contracts\Grammars\FunctionsAndClasses\Productions\ClassElementName;
use Oru\EcmaScript\Core\Contracts\Lexer;
use Oru\EcmaScript\Core\Contracts\Parameters;
use Oru\EcmaScript\Core\Contracts\Values\ThrowCompletion;

interface ClassElementNameParser
{
    /**
     * @see https://tc39.es/ecma262/#prod-ClassElementName
     */
    public function parse(Lexer $lexer, Parameters $parameters): ?ClassElementName;

    /**
     * @see https://tc39.es/ecma262/#prod-ClassElementName
     *
     * @throws ThrowCompletion
     */
    public function parseOrFail(Lexer $lexer, Parameters $parameters): ClassElementName;
}
