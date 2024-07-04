<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\JsonObjects;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\Values\AbruptCompletion;
use Oru\EcmaScript\Core\Contracts\Values\StringValue;

interface QuoteJSONString
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-quotejsonstring
     * @see https://262.ecma-international.org/12.0/#table-json-single-character-escapes
     *
     * @throws AbruptCompletion
     */
    public function __invoke(Agent $agent, StringValue $value): StringValue;
}
