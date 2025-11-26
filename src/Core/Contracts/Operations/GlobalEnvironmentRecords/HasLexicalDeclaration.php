<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\GlobalEnvironmentRecords;

use Oru\EcmaScript\Core\Contracts\Values\AbruptCompletion;
use Oru\EcmaScript\Core\Contracts\Values\BooleanValue;
use Oru\EcmaScript\Core\Contracts\Values\GlobalEnvironmentRecord;
use Oru\EcmaScript\Core\Contracts\Values\StringValue;

interface HasLexicalDeclaration
{
    /** @see https://tc39.es/ecma262/#sec-haslexicaldeclaration */
    public function __invoke(GlobalEnvironmentRecord $envRec, StringValue $n): BooleanValue;
}
