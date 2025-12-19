<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Values;

use Closure;
use Generator;
use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\Initializer;
use Oru\EcmaScript\Core\Contracts\Grammars\FunctionsAndClasses\Productions\AsyncConciseBody;
use Oru\EcmaScript\Core\Contracts\Grammars\FunctionsAndClasses\Productions\AsyncFunctionBody;
use Oru\EcmaScript\Core\Contracts\Grammars\FunctionsAndClasses\Productions\AsyncGeneratorBody;
use Oru\EcmaScript\Core\Contracts\Grammars\FunctionsAndClasses\Productions\ClassStaticBlockBody;
use Oru\EcmaScript\Core\Contracts\Grammars\FunctionsAndClasses\Productions\ConciseBody;
use Oru\EcmaScript\Core\Contracts\Grammars\FunctionsAndClasses\Productions\FunctionBody;
use Oru\EcmaScript\Core\Contracts\Grammars\FunctionsAndClasses\Productions\GeneratorBody;
use Oru\EcmaScript\Core\Contracts\Grammars\Node;
use Oru\EcmaScript\Support\Behaviour;

interface ObjectValue extends LanguageValue
{
    public function setPropertyDescriptor(StringValue|SymbolValue $propertyKey, PropertyDescriptor $propertyDescriptor): void;

    public function getPropertyDescriptor(StringValue|SymbolValue $propertyKey): ?PropertyDescriptor;

    public function deletePropertyDescriptor(StringValue|SymbolValue $propertyKey): void;

    /** @return Generator<StringValue|SymbolValue, PropertyDescriptor> */
    public function getAllPropertyDescriptors(): Generator;


    public Behaviour $behaviour { get; set; }

    public ?LanguageValue $thisArgument { get; set; }

    public ObjectValue|UndefinedValue $newTarget { get; set; }


    public ObjectValue|NullValue $⟦Prototype⟧ { get; set; }

    public BooleanValue $⟦Extensible⟧ { get; set; }

    /** @var ListValue<PrivateElement> $⟦PrivateElements⟧ */
    public ListValue $⟦PrivateElements⟧ { get; set; }

    /** @see https://tc39.es/ecma262/#table-essential-internal-methods */
    /** @var Closure():ObjectValue|NullValue $⟦GetPrototypeOf⟧ */
    public Closure $⟦GetPrototypeOf⟧ { get; set; }

    /**
     * Determine the object that provides inherited properties for this object.
     * A null value indicates that there are no inherited properties.
     *
     * @throws AbruptCompletion
     */
    public function ⟦GetPrototypeOf⟧(): ObjectValue|NullValue;

    /** @var Closure(ObjectValue|NullValue):BooleanValue $⟦SetPrototypeOf⟧ */
    public Closure $⟦SetPrototypeOf⟧ { get; set; }

    /**
     * Associate this object with another object that provides inherited properties.
     * Passing null indicates that there are no inherited properties.
     * Returns true indicating that the operation was completed successfully
     * or false indicating that the operation was not successful.
     *
     * @throws AbruptCompletion
     */
    public function ⟦SetPrototypeOf⟧(ObjectValue|NullValue $prototype): BooleanValue;

    /** @var Closure():BooleanValue $⟦IsExtensible⟧ */
    public Closure $⟦IsExtensible⟧ { get; set; }

    /** Determine whether it is permitted to add additional properties to this object. */
    public function ⟦IsExtensible⟧(): BooleanValue;

    /** @var Closure():BooleanValue $⟦PreventExtensions⟧ */
    public Closure $⟦PreventExtensions⟧ { get; set; }

    /** 
     * Control whether new properties may be added to this object.
     * Returns true if the operation was successful or false if the operation was unsuccessful.
     *
     * @throws AbruptCompletion
     */
    public function ⟦PreventExtensions⟧(): BooleanValue;

    /** @var Closure(StringValue|SymbolValue):PropertyDescriptor|UndefinedValue $⟦GetOwnProperty⟧ */
    public Closure $⟦GetOwnProperty⟧ { get; set; }

    /**
     * Return a Property Descriptor for the own property of this object whose key is propertyKey,
     * or undefined if no such property exists.
     *
     * @throws AbruptCompletion
     */
    public function ⟦GetOwnProperty⟧(StringValue|SymbolValue $propertyKey): PropertyDescriptor|UndefinedValue;

    /** @var Closure(StringValue|SymbolValue, PropertyDescriptor):BooleanValue $⟦DefineOwnProperty⟧ */
    public Closure $⟦DefineOwnProperty⟧ { get; set; }

    /**
     * Create or alter the own property, whose key is propertyKey, to have the state described by PropertyDescriptor.
     * Return true if that property was successfully created/updated
     * or false if the property could not be created or updated.
     *
     * @throws AbruptCompletion
     */
    public function ⟦DefineOwnProperty⟧(StringValue|SymbolValue $propertyKey, PropertyDescriptor $propertyDescriptor): BooleanValue;

    /** @var Closure(StringValue|SymbolValue):BooleanValue $⟦HasProperty⟧ */
    public Closure $⟦HasProperty⟧ { get; set; }

    /** 
     * Return a Boolean value indicating whether this object already has either an own
     * or inherited property whose key is propertyKey.
     *
     * @throws AbruptCompletion
     */
    public function ⟦HasProperty⟧(StringValue|SymbolValue $propertyKey): BooleanValue;

    /** @var Closure(StringValue|SymbolValue, LanguageValue):LanguageValue $⟦Get⟧ */
    public Closure $⟦Get⟧ { get; set; }

    /**
     * Return the value of the property whose key is propertyKey from this object.
     * If any ECMAScript code must be executed to retrieve the property value,
     * Receiver is used as the this value when evaluating the code.
     *
     * @throws AbruptCompletion
     */
    public function ⟦Get⟧(StringValue|SymbolValue $propertyKey, LanguageValue $receiver): LanguageValue;

    /** @var Closure(StringValue|SymbolValue, LanguageValue, LanguageValue):LanguageValue $⟦Set⟧ */
    public Closure $⟦Set⟧ { get; set; }

    /**
     * Set the value of the property whose key is propertyKey to value. 
     * If any ECMAScript code must be executed to set the property value,
     * Receiver is used as the this value when evaluating the code.
     * Returns true if the property value was set or false if it could not be set.
     *
     * @throws AbruptCompletion
     */
    public function ⟦Set⟧(StringValue|SymbolValue $propertyKey, LanguageValue $value, LanguageValue $receiver): BooleanValue;

    /** @var Closure(StringValue|SymbolValue):BooleanValue $⟦Delete⟧ */
    public Closure $⟦Delete⟧ { get; set; }

    /**
     * Remove the own property whose key is propertyKey from this object.
     * Return false if the property was not deleted and is still present.
     * Return true if the property was deleted or is not present.
     *
     * @throws AbruptCompletion
     */
    public function ⟦Delete⟧(StringValue|SymbolValue $propertyKey): BooleanValue;

    /** @var Closure():ListValue<StringValue|SymbolValue> $⟦OwnPropertyKeys⟧ */
    public Closure $⟦OwnPropertyKeys⟧ { get; set; }

    /**
     * Return a List whose elements are all of the own property keys for the object.
     *
     * @return ListValue<StringValue|SymbolValue>
     * @throws AbruptCompletion
     */
    public function ⟦OwnPropertyKeys⟧(): ListValue;

    /** @see https://tc39.es/ecma262/#table-additional-essential-internal-methods-of-function-objects */
    /** @var Closure(LanguageValue, ListValue<LanguageValue>):LanguageValue $⟦Call⟧ */
    public Closure $⟦Call⟧ { get; set; }

    /**
     * Executes code associated with this object. Invoked via a function call expression. 
     * The arguments to the internal method are a this value and a List whose elements are the arguments
     * passed to the function by a call expression. Objects that implement this internal method are callable.
     *
     * @param ListValue<LanguageValue> $argumentsList
     * @throws AbruptCompletion
     */
    public function ⟦Call⟧(LanguageValue $thisArgument, ListValue $argumentsList): LanguageValue;

    /** @var Closure(ListValue<LanguageValue>, ObjectValue|UndefinedValue):LanguageValue $⟦Construct⟧ */
    public Closure $⟦Construct⟧ { get; set; }

    /**
     * Creates an object. Invoked via the new operator or a super call.
     * The first argument to the internal method is a List whose elements are the arguments
     * of the constructor invocation or the super call.
     * The second argument is the object to which the new operator was initially applied.
     * Objects that implement this internal method are called constructors.
     * A function object is not necessarily a constructor and such non-constructor function objects
     * do not have a [[Construct]] internal method.
     *
     * @param ListValue<LanguageValue> $argumentsList
     * @throws AbruptCompletion
     */
    public function ⟦Construct⟧(ListValue $argumentsList, ObjectValue|UndefinedValue $newTarget): LanguageValue;

    /** @see https://tc39.es/ecma262/#table-internal-slots-of-ecmascript-function-objects */
    /**
     * The Environment Record that the function was closed over.
     * Used as the outer environment when evaluating the code of the function.
     */
    public EnvironmentRecord $⟦Environment⟧ { get; set; }

    /**
     * The PrivateEnvironment Record for Private Names that the function was closed over.
     * null if this function is not syntactically contained within a class.
     * Used as the outer PrivateEnvironment for inner classes when evaluating the code of the function.
     */
    public PrivateEnvironmentRecord|NullValue $⟦PrivateEnvironment⟧ { get; set; }

    /** The root parse node of the source text that defines the function's formal parameter list. */
    public Node $⟦FormalParameters⟧ { get; set; }

    /** The root parse node of the source text that defines the function's body. */
    public FunctionBody|ConciseBody|GeneratorBody|AsyncGeneratorBody|AsyncFunctionBody|AsyncConciseBody|Initializer|ClassStaticBlockBody $⟦ECMAScriptCode⟧ { get; set; }

    /** Whether or not the function is a derived class constructor. */
    public ConstructorKind $⟦ConstructorKind⟧ { get; set; }

    /**
     * The realm in which the function was created and which provides any intrinsic objects
     * that are accessed when evaluating the function.
     */
    public RealmRecord $⟦Realm⟧ { get; set; }

    /** The script or module in which the function was created. */
    public ScriptRecord|ModuleRecord|NullValue $⟦ScriptOrModule⟧ { get; set; }

    /**
     * Defines how this references are interpreted within the formal parameters and code body of the function.
     * lexical means that this refers to the this value of a lexically enclosing function.
     * strict means that the this value is used exactly as provided by an invocation of the function.
     * global means that a this value of undefined or null is interpreted as a reference to the global object,
     * and any other this value is first passed to ToObject.
     */
    public ThisMode $⟦ThisMode⟧ { get; set; }

    /** true if this is a strict function, false if this is a non-strict function. */
    public BooleanValue $⟦Strict⟧ { get; set; }

    /**
     * If the function uses super, this is the object whose [[GetPrototypeOf]] provides the object
     * where super property lookups begin.
     */
    public ObjectValue|UndefinedValue $⟦HomeObject⟧ { get; set; }

    /** The source text that defines the function. */
    public SourceText $⟦SourceText⟧ { get; set; }

    /**
     * If the function is a class, this is a list of Records representing the non-static fields
     * and corresponding initializers of the class.
     *
     * @var ListValue<ClassDefinitionRecord> $⟦Fields⟧
     */
    public ListValue $⟦Fields⟧ { get; set; }

    /**
     * If the function is a class, this is a list representing the non-static private methods
     * and accessors of the class.
     *
     * @var ListValue<PrivateElement> $⟦PrivateMethods⟧
     */
    public ListValue $⟦PrivateMethods⟧ { get; set; }

    /**
     * If the function is created as the initializer of a class field,
     * the name to use for NamedEvaluation of the field; empty otherwise.
     */
    public StringValue|SymbolValue|PrivateName|EmptyValue $⟦ClassFieldInitializerName⟧ { get; set; }

    /**
     * Indicates whether the function is a class constructor.
     * (If true, invoking the function's [[Call]] will immediately throw a TypeError exception.)
     */
    public BooleanValue $⟦IsClassConstructor⟧ { get; set; }

    /** @see https://tc39.es/ecma262/#table-internal-slots-of-bound-function-exotic-objects */
    /** The wrapped function object. */
    public ObjectValue $⟦BoundTargetFunction⟧ { get; set; }

    /** The value that is always passed as the this value when calling the wrapped function. */
    public LanguageValue $⟦BoundThis⟧ { get; set; }

    /**
     * A list of values whose elements are used as the first arguments to any call to the wrapped function.
     *
     * @var ListValue<LanguageValue> $⟦BoundArguments⟧
     */
    public ListValue $⟦BoundArguments⟧ { get; set; }

    /** @see https://tc39.es/ecma262/#table-internal-slots-of-module-namespace-exotic-objects */
    /** The Module Record whose exports this namespace exposes. */
    public ModuleRecord $⟦Module⟧ { get; set; }

    /**
     * A List whose elements are the String values of the exported names exposed as own properties of this object.
     * The list is sorted according to lexicographic code unit order.
     *
     * @var ListValue<StringValue> $⟦Exports⟧
     */
    public ListValue $⟦Exports⟧ { get; set; }

    /** @see https://tc39.es/ecma262/#table-internal-slots-of-generator-instances */
    /** The current execution state of the generator. */
    public GeneratorState $⟦GeneratorState⟧ { get; set; }

    /** The execution context that is used when executing the code of this generator. */
    public GeneratorBrand|EmptyValue $⟦GeneratorBrand⟧ { get; set; }

    /**
     * A brand used to distinguish different kinds of generators.
     * The [[GeneratorBrand]] of generators declared by ECMAScript source text is always empty.
     */
    public ExecutionContext $⟦GeneratorContext⟧ { get; set; }

    /** @see https://tc39.es/ecma262/#table-internal-slots-of-asyncgenerator-instances */
    /** The current execution state of the async generator. */
    public GeneratorState $⟦AsyncGeneratorState⟧ { get; set; }

    /** The execution context that is used when executing the code of this async generator. */
    public ExecutionContext $⟦AsyncGeneratorContext⟧ { get; set; }

    /**
     * Records which represent requests to resume the async generator.
     * Except during state transitions, it is non-empty if and only
     * if [[AsyncGeneratorState]] is either executing or draining-queue.
     *
     * @var ListValue<AsyncGeneratorRequest> ⟦AsyncGeneratorQueue⟧
     */
    public ListValue $⟦AsyncGeneratorQueue⟧ { get; set; }

    /** @see https://tc39.es/ecma262/#table-for-in-iterator-instance-slots */
    /** The Object value whose properties are being iterated. */
    public ObjectValue|NullValue $⟦Object⟧ { get; set; }

    /** true if the iterator has invoked [[OwnPropertyKeys]] on [[Object]], false otherwise. */
    public BooleanValue $⟦ObjectWasVisited⟧ { get; set; }

    /**
     * The values that have been emitted by this iterator thus far.
     *
     * @var ListValue<StringValue> $⟦VisitedKeys⟧
     */
    public ListValue $⟦VisitedKeys⟧ { get; set; }

    /**
     * The values remaining to be emitted for the current object,
     * before iterating the properties of its prototype (if its prototype is not null).
     *
     * @var ListValue<StringValue> $⟦RemainingKeys⟧
     */
    public ListValue $⟦RemainingKeys⟧ { get; set; }

    /** @see https://tc39.es/ecma262/#table-internal-slots-of-promise-instances */
    /** Governs how a promise will react to incoming calls to its then method. */
    public PromiseState $⟦PromiseState⟧ { get; set; }

    /** 
     * The value with which the promise has been fulfilled or rejected, if any.
     * empty if and only if the [[PromiseState]] is pending.
     */
    public LanguageValue|EmptyValue $⟦PromiseResult⟧ { get; set; }

    /**
     * Records to be processed when/if the promise transitions from the pending state to the fulfilled state.
     *
     * @var ListValue<PromiseReaction>|UndefinedValue $⟦PromiseFulfillReactions⟧
     */
    public ListValue|UndefinedValue $⟦PromiseFulfillReactions⟧ { get; set; }

    /**
     * Records to be processed when/if the promise transitions from the pending state to the rejected state.
     *
     * @var ListValue<PromiseReaction>|UndefinedValue $⟦PromiseRejectReactions⟧
     */
    public ListValue|UndefinedValue $⟦PromiseRejectReactions⟧ { get; set; }

    /** 
     * Indicates whether the promise has ever had a fulfillment or rejection handler; 
     * used in unhandled rejection tracking.
     */
    public BooleanValue $⟦PromiseIsHandled⟧ { get; set; }

    public BooleanValue $⟦BooleanData⟧ { get; set; }

    /** @var ListValue<array{Key:LanguageValue|EmptyValue, Value:LanguageValue|EmptyValue}> $⟦MapData⟧ */
    public ListValue $⟦MapData⟧ { get; set; }

    public NumberValue $⟦NumberData⟧ { get; set; }

    /** @var ListValue<LanguageValue|EmptyValue> $⟦SetData⟧ */
    public ListValue $⟦SetData⟧ { get; set; }

    public StringValue $⟦StringData⟧ { get; set; }

    public SymbolValue $⟦SymbolData⟧ { get; set; }

    public BigIntValue $⟦BigIntData⟧ { get; set; }

    public DataBlock|NullValue $⟦ArrayBufferData⟧ { get; set; }

    public NumberValue $⟦ArrayBufferByteLength⟧ { get; set; }

    public mixed $⟦ArrayBufferDetachKey⟧ { get; set; }

    public NumberValue $⟦DateValue⟧ { get; set; }

    public ObjectValue|UndefinedValue $⟦ParameterMap⟧ { get; set; }

    public ObjectValue|NullValue $⟦RevocableProxy⟧ { get; set; }

    public ObjectValue|NullValue $⟦ProxyTarget⟧ { get; set; }

    public ObjectValue|NullValue $⟦ProxyHandler⟧ { get; set; }

    public ObjectValue $⟦Generator⟧ { get; set; }

    public StringValue|NullValue $⟦InitialName⟧ { get; set; }

    public ObjectValue|UndefinedValue $⟦ViewedArrayBuffer⟧ { get; set; }

    public StringValue $⟦TypedArrayName⟧ { get; set; }

    /** @var "Number"|"BigInt" $⟦ContentType⟧ */
    public string $⟦ContentType⟧ { get; set; }

    /** @var "AUTO"|NumberValue $⟦ByteLength⟧ */
    public string|NumberValue $⟦ByteLength⟧ { get; set; }

    public NumberValue $⟦ByteOffset⟧ { get; set; }

    public NumberValue $⟦ArrayLength⟧ { get; set; }

    public IteratorRecord $⟦SyncIteratorRecord⟧ { get; set; }

    public ObjectValue $⟦Promise⟧ { get; set; }

    public AlreadyResolvedRecord $⟦AlreadyResolved⟧ { get; set; }

    public ObjectValue $⟦IteratingRegExp⟧ { get; set; }

    public StringValue $⟦IteratedString⟧ { get; set; }

    public BooleanValue $⟦Global⟧ { get; set; }

    public BooleanValue $⟦Unicode⟧ { get; set; }

    public BooleanValue $⟦Done⟧ { get; set; }

    public StringValue $⟦OriginalSource⟧ { get; set; }

    public StringValue $⟦OriginalFlags⟧ { get; set; }

    public RegExpRecord $⟦RegExpRecord⟧ { get; set; }

    public PatternResult $⟦RegExpMatcher⟧ { get; set; }

    // Non-spec
    public Node $⟦PARSED_PATTERN⟧ { get; set; }
    public array $⟦DEBUG_BACKTRACE⟧ { get; set; }
}
