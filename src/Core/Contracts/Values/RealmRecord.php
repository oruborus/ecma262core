<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Values;

use Oru\EcmaScript\Core\Contracts\Nodes\Node;
use Stringable;

interface RealmRecord extends SpecificationValue
{
    /**
     * @param array<string, ObjectValue> $intrinsics
     */
    public function setIntrinsics(array $intrinsics): void;

    /**
     * @return array<string, ObjectValue>
     */
    public function getIntrinsics(): array;

    public function getIntrinsicByName(string|Stringable $name): ObjectValue;

    public function setGlobalObject(ObjectValue|UndefinedValue $globalObject): void;

    public function getGlobalObject(): ObjectValue;

    public function setGlobalEnvironment(GlobalEnvironmentRecord|UndefinedValue $environmentRecord): void;

    public function getGlobalEnvironment(): GlobalEnvironmentRecord;

    /**
     * @param ListValue<int, array{"[[Site]]": Node, "[[Array]]": ObjectValue}> $templateMap
     */
    public function setTemplateMap(ListValue $templateMap): void;

    /**
     * @return ListValue<int, array{"[[Site]]": Node, "[[Array]]": ObjectValue}>
     */
    public function getTemplateMap(): ListValue;

    public function getHostDefined(): mixed;
}
