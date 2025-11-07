<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars;

use Oru\EcmaScript\Core\Contracts\StaticSemantics\HasPosition;
use Oru\EcmaScript\Core\Contracts\StaticSemantics\HasSourceTextMatched;
use Oru\EcmaScript\Core\Contracts\Values\BooleanValue;
use Oru\EcmaScript\Core\Contracts\Values\ListValue;
use Oru\EcmaScript\Core\Contracts\Values\SourceCode;
use Oru\EcmaScript\Core\Contracts\Values\StringValue;
use Oru\EcmaScript\Core\Contracts\Values\Value;

// FIXME: Remove `Node` extend `HasSourceTextMatched` directly
interface Node extends HasSourceTextMatched, HasPosition
{
    /** @var Node[] $childNodes */
    public array $childNodes { get; }

    public SourceCode $sourceCode { get; }

    public function evaluate(): Value;

    /**
     * @see https://tc39.es/ecma262/#sec-static-semantics-allprivateidentifiersvalid
     *
     * @param ListValue<StringValue> $names
     */
    public function allPrivateIdentifiersValid(ListValue $names): BooleanValue;
}
