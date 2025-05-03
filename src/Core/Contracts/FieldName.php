<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts;

enum FieldName: string
{
    case DEBUG_BACKTRACE = '__BACKTRACE__';
    case DYNAMICALLY_CREATED_FUNCTION_OBJECT = '__DynamicallyCreatedFunctionObject__';
    case PARSED_PATTERN = '__ParsedPattern__';

    case Environment        = '[[Environment]]';
    case FormalParameters   = '[[FormalParameters]]';
    case ECMAScriptCode     = '[[ECMAScriptCode]]';
    case ConstructorKind    = '[[ConstructorKind]]';
    case Realm              = '[[Realm]]';
    case ScriptOrModule     = '[[ScriptOrModule]]';
    case ThisMode           = '[[ThisMode]]';
    case Strict             = '[[Strict]]';
    case HomeObject         = '[[HomeObject]]';
    case SourceText         = '[[SourceText]]';
    case IsClassConstructor = '[[IsClassConstructor]]';
    case InitialName        = '[[InitialName]]';

    case Call      = '[[Call]]';
    case Construct = '[[Construct]]';

    case ArrayBufferData       = '[[ArrayBufferData]]';
    case ArrayBufferByteLength = '[[ArrayBufferByteLength]]';
    case ArrayBufferDetachKey  = '[[ArrayBufferDetachKey]]';
    case ViewedArrayBuffer     = '[[ViewedArrayBuffer]]';

    case BigIntData = '[[BigIntData]]';

    case BooleanData = '[[BooleanData]]';

    case BoundTargetFunction = '[[BoundTargetFunction]]';
    case BoundThis           = '[[BoundThis]]';
    case BoundArguments      = '[[BoundArguments]]';

    case DateValue = '[[DateValue]]';

    case ErrorData = '[[ErrorData]]';

    case ParameterMap = '[[ParameterMap]]';

    case AsyncGeneratorState   = '[[AsyncGeneratorState]]';
    case AsyncGeneratorContext = '[[AsyncGeneratorContext]]';
    case AsyncGeneratorQueue   = '[[AsyncGeneratorQueue]]';
    case Generator             = '[[Generator]]';
    case GeneratorState        = '[[GeneratorState]]';
    case GeneratorContext      = '[[GeneratorContext]]';
    case GeneratorBrand        = '[[GeneratorBrand]]';

    case Object           = '[[Object]]';
    case ObjectWasVisited = '[[ObjectWasVisited]]';
    case VisitedKeys      = '[[VisitedKeys]]';
    case RemainingKeys    = '[[RemainingKeys]]';

    case MapData = '[[MapData]]';

    case Exports = '[[Exports]]';
    case Module  = '[[Module]]';

    case NumberData = '[[NumberData]]';

    case Prototype         = '[[Prototype]]';
    case GetPrototypeOf    = '[[GetPrototypeOf]]';
    case SetPrototypeOf    = '[[SetPrototypeOf]]';
    case Extensible        = '[[Extensible]]';
    case IsExtensible      = '[[IsExtensible]]';
    case PreventExtensions = '[[PreventExtensions]]';
    case GetOwnProperty    = '[[GetOwnProperty]]';
    case DefineOwnProperty = '[[DefineOwnProperty]]';
    case HasProperty       = '[[HasProperty]]';
    case Get               = '[[Get]]';
    case Set               = '[[Set]]';
    case Delete            = '[[Delete]]';
    case OwnPropertyKeys   = '[[OwnPropertyKeys]]';

    case PrivateElements   = '[[PrivateElements]]';

    case Promise                 = '[[Promise]]';
    case PromiseState            = '[[PromiseState]]';
    case PromiseResult           = '[[PromiseResult]]';
    case PromiseFulfillReactions = '[[PromiseFulfillReactions]]';
    case PromiseRejectReactions  = '[[PromiseRejectReactions]]';
    case PromiseIsHandled        = '[[PromiseIsHandled]]';
    case AlreadyResolved         = '[[AlreadyResolved]]';

    case ProxyHandler   = '[[ProxyHandler]]';
    case ProxyTarget    = '[[ProxyTarget]]';
    case RevocableProxy = '[[RevocableProxy]]';

    case RegExpMatcher        = '[[RegExpMatcher]]';
    case OriginalFlags        = '[[OriginalFlags]]';
    case OriginalSource       = '[[OriginalSource]]';
    case ParseResult          = '[[ParseResult]]';
    case RegExpRecord         = '[[RegExpRecord]]';
    case IgnoreCase           = '[[IgnoreCase]]';
    case Multiline            = '[[Multiline]]';
    case DotAll               = '[[DotAll]]';
    case Unicode              = '[[Unicode]]';
    case UnicodeSets          = '[[UnicodeSets]]';
    case CapturingGroupsCount = '[[CapturingGroupsCount]]';

    case SetData = '[[SetData]]';

    case StringData = '[[StringData]]';

    case SymbolData = '[[SymbolData]]';

    case ArrayLength     = '[[ArrayLength]]';
    case ByteLength      = '[[ByteLength]]';
    case ByteOffset      = '[[ByteOffset]]';
    case ContentType     = '[[ContentType]]';
    case TypedArrayName  = '[[TypedArrayName]]';

    case SyncIteratorRecord = '[[SyncIteratorRecord]]';
}
