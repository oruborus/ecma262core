<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\TemplateLiterals;

use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\TemplateLiteral;
use Oru\EcmaScript\Core\Contracts\Values\ObjectValue;

interface GetTemplateObject
{
    /**
     * @see https://tc39.es/ecma262/#sec-gettemplateobject
     */
    public function __invoke(TemplateLiteral $templateLiteral): ObjectValue;
}
