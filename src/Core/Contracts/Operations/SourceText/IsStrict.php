<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\SourceText;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\InputElement;
use Oru\EcmaScript\Core\Contracts\Grammars\Node;
use Oru\EcmaScript\Core\Contracts\Values\BooleanValue;

interface IsStrict
{
    /**
     * @see https://tc39.es/ecma262/#sec-isstrict
     */
    public function __invoke(Agent $agent, InputElement|Node $node): BooleanValue;
}
