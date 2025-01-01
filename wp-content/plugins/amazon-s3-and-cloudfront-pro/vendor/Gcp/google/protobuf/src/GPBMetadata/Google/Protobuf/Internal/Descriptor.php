<?php

# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/protobuf/descriptor.proto
namespace DeliciousBrains\WP_Offload_Media\Gcp\GPBMetadata\Google\Protobuf\Internal;

class Descriptor
{
    public static $is_initialized = \false;
    public static function initOnce()
    {
        $pool = \DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == \true) {
            return;
        }
        $pool->addMessage('google.protobuf.internal.FileDescriptorSet', \DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\FileDescriptorSet::class)->repeated('file', \DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\GPBType::MESSAGE, 1, 'google.protobuf.internal.FileDescriptorProto')->finalizeToPool();
        $pool->addMessage('google.protobuf.internal.FileDescriptorProto', \DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\FileDescriptorProto::class)->optional('name', \DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\GPBType::STRING, 1)->optional('package', \DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\GPBType::STRING, 2)->repeated('dependency', \DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\GPBType::STRING, 3)->repeated('public_dependency', \DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\GPBType::INT32, 10)->repeated('weak_dependency', \DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\GPBType::INT32, 11)->repeated('message_type', \DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\GPBType::MESSAGE, 4, 'google.protobuf.internal.DescriptorProto')->repeated('enum_type', \DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\GPBType::MESSAGE, 5, 'google.protobuf.internal.EnumDescriptorProto')->repeated('service', \DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\GPBType::MESSAGE, 6, 'google.protobuf.internal.ServiceDescriptorProto')->repeated('extension', \DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\GPBType::MESSAGE, 7, 'google.protobuf.internal.FieldDescriptorProto')->optional('options', \DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\GPBType::MESSAGE, 8, 'google.protobuf.internal.FileOptions')->optional('source_code_info', \DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\GPBType::MESSAGE, 9, 'google.protobuf.internal.SourceCodeInfo')->optional('syntax', \DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\GPBType::STRING, 12)->optional('edition', \DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\GPBType::STRING, 13)->finalizeToPool();
        $pool->addMessage('google.protobuf.internal.DescriptorProto', \DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\DescriptorProto::class)->optional('name', \DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\GPBType::STRING, 1)->repeated('field', \DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\GPBType::MESSAGE, 2, 'google.protobuf.internal.FieldDescriptorProto')->repeated('extension', \DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\GPBType::MESSAGE, 6, 'google.protobuf.internal.FieldDescriptorProto')->repeated('nested_type', \DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\GPBType::MESSAGE, 3, 'google.protobuf.internal.DescriptorProto')->repeated('enum_type', \DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\GPBType::MESSAGE, 4, 'google.protobuf.internal.EnumDescriptorProto')->repeated('extension_range', \DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\GPBType::MESSAGE, 5, 'google.protobuf.internal.DescriptorProto.ExtensionRange')->repeated('oneof_decl', \DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\GPBType::MESSAGE, 8, 'google.protobuf.internal.OneofDescriptorProto')->optional('options', \DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\GPBType::MESSAGE, 7, 'google.protobuf.internal.MessageOptions')->repeated('reserved_range', \DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\GPBType::MESSAGE, 9, 'google.protobuf.internal.DescriptorProto.ReservedRange')->repeated('reserved_name', \DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\GPBType::STRING, 10)->finalizeToPool();
        $pool->addMessage('google.protobuf.internal.DescriptorProto.ExtensionRange', \DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\DescriptorProto\ExtensionRange::class)->optional('start', \DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\GPBType::INT32, 1)->optional('end', \DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\GPBType::INT32, 2)->optional('options', \DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\GPBType::MESSAGE, 3, 'google.protobuf.internal.ExtensionRangeOptions')->finalizeToPool();
        $pool->addMessage('google.protobuf.internal.DescriptorProto.ReservedRange', \DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\DescriptorProto\ReservedRange::class)->optional('start', \DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\GPBType::INT32, 1)->optional('end', \DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\GPBType::INT32, 2)->finalizeToPool();
        $pool->addMessage('google.protobuf.internal.ExtensionRangeOptions', \DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\ExtensionRangeOptions::class)->repeated('uninterpreted_option', \DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\GPBType::MESSAGE, 999, 'google.protobuf.internal.UninterpretedOption')->finalizeToPool();
        $pool->addMessage('google.protobuf.internal.FieldDescriptorProto', \DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\FieldDescriptorProto::class)->optional('name', \DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\GPBType::STRING, 1)->optional('number', \DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\GPBType::INT32, 3)->optional('label', \DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\GPBType::ENUM, 4, 'google.protobuf.internal.FieldDescriptorProto.Label')->optional('type', \DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\GPBType::ENUM, 5, 'google.protobuf.internal.FieldDescriptorProto.Type')->optional('type_name', \DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\GPBType::STRING, 6)->optional('extendee', \DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\GPBType::STRING, 2)->optional('default_value', \DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\GPBType::STRING, 7)->optional('oneof_index', \DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\GPBType::INT32, 9)->optional('json_name', \DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\GPBType::STRING, 10)->optional('options', \DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\GPBType::MESSAGE, 8, 'google.protobuf.internal.FieldOptions')->optional('proto3_optional', \DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\GPBType::BOOL, 17)->finalizeToPool();
        $pool->addEnum('google.protobuf.internal.FieldDescriptorProto.Type', \DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\Type::class)->value("TYPE_DOUBLE", 1)->value("TYPE_FLOAT", 2)->value("TYPE_INT64", 3)->value("TYPE_UINT64", 4)->value("TYPE_INT32", 5)->value("TYPE_FIXED64", 6)->value("TYPE_FIXED32", 7)->value("TYPE_BOOL", 8)->value("TYPE_STRING", 9)->value("TYPE_GROUP", 10)->value("TYPE_MESSAGE", 11)->value("TYPE_BYTES", 12)->value("TYPE_UINT32", 13)->value("TYPE_ENUM", 14)->value("TYPE_SFIXED32", 15)->value("TYPE_SFIXED64", 16)->value("TYPE_SINT32", 17)->value("TYPE_SINT64", 18)->finalizeToPool();
        $pool->addEnum('google.protobuf.internal.FieldDescriptorProto.Label', \DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\Label::class)->value("LABEL_OPTIONAL", 1)->value("LABEL_REQUIRED", 2)->value("LABEL_REPEATED", 3)->finalizeToPool();
        $pool->addMessage('google.protobuf.internal.OneofDescriptorProto', \DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\OneofDescriptorProto::class)->optional('name', \DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\GPBType::STRING, 1)->optional('options', \DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\GPBType::MESSAGE, 2, 'google.protobuf.internal.OneofOptions')->finalizeToPool();
        $pool->addMessage('google.protobuf.internal.EnumDescriptorProto', \DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\EnumDescriptorProto::class)->optional('name', \DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\GPBType::STRING, 1)->repeated('value', \DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\GPBType::MESSAGE, 2, 'google.protobuf.internal.EnumValueDescriptorProto')->optional('options', \DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\GPBType::MESSAGE, 3, 'google.protobuf.internal.EnumOptions')->repeated('reserved_range', \DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\GPBType::MESSAGE, 4, 'google.protobuf.internal.EnumDescriptorProto.EnumReservedRange')->repeated('reserved_name', \DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\GPBType::STRING, 5)->finalizeToPool();
        $pool->addMessage('google.protobuf.internal.EnumDescriptorProto.EnumReservedRange', \DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\EnumDescriptorProto\EnumReservedRange::class)->optional('start', \DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\GPBType::INT32, 1)->optional('end', \DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\GPBType::INT32, 2)->finalizeToPool();
        $pool->addMessage('google.protobuf.internal.EnumValueDescriptorProto', \DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\EnumValueDescriptorProto::class)->optional('name', \DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\GPBType::STRING, 1)->optional('number', \DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\GPBType::INT32, 2)->optional('options', \DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\GPBType::MESSAGE, 3, 'google.protobuf.internal.EnumValueOptions')->finalizeToPool();
        $pool->addMessage('google.protobuf.internal.ServiceDescriptorProto', \DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\ServiceDescriptorProto::class)->optional('name', \DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\GPBType::STRING, 1)->repeated('method', \DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\GPBType::MESSAGE, 2, 'google.protobuf.internal.MethodDescriptorProto')->optional('options', \DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\GPBType::MESSAGE, 3, 'google.protobuf.internal.ServiceOptions')->finalizeToPool();
        $pool->addMessage('google.protobuf.internal.MethodDescriptorProto', \DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\MethodDescriptorProto::class)->optional('name', \DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\GPBType::STRING, 1)->optional('input_type', \DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\GPBType::STRING, 2)->optional('output_type', \DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\GPBType::STRING, 3)->optional('options', \DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\GPBType::MESSAGE, 4, 'google.protobuf.internal.MethodOptions')->optional('client_streaming', \DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\GPBType::BOOL, 5)->optional('server_streaming', \DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\GPBType::BOOL, 6)->finalizeToPool();
        $pool->addMessage('google.protobuf.internal.FileOptions', \DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\FileOptions::class)->optional('java_package', \DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\GPBType::STRING, 1)->optional('java_outer_classname', \DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\GPBType::STRING, 8)->optional('java_multiple_files', \DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\GPBType::BOOL, 10)->optional('java_generate_equals_and_hash', \DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\GPBType::BOOL, 20)->optional('java_string_check_utf8', \DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\GPBType::BOOL, 27)->optional('optimize_for', \DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\GPBType::ENUM, 9, 'google.protobuf.internal.FileOptions.OptimizeMode')->optional('go_package', \DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\GPBType::STRING, 11)->optional('cc_generic_services', \DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\GPBType::BOOL, 16)->optional('java_generic_services', \DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\GPBType::BOOL, 17)->optional('py_generic_services', \DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\GPBType::BOOL, 18)->optional('php_generic_services', \DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\GPBType::BOOL, 42)->optional('deprecated', \DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\GPBType::BOOL, 23)->optional('cc_enable_arenas', \DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\GPBType::BOOL, 31)->optional('objc_class_prefix', \DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\GPBType::STRING, 36)->optional('csharp_namespace', \DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\GPBType::STRING, 37)->optional('swift_prefix', \DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\GPBType::STRING, 39)->optional('php_class_prefix', \DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\GPBType::STRING, 40)->optional('php_namespace', \DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\GPBType::STRING, 41)->optional('php_metadata_namespace', \DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\GPBType::STRING, 44)->optional('ruby_package', \DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\GPBType::STRING, 45)->repeated('uninterpreted_option', \DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\GPBType::MESSAGE, 999, 'google.protobuf.internal.UninterpretedOption')->finalizeToPool();
        $pool->addEnum('google.protobuf.internal.FileOptions.OptimizeMode', \DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\OptimizeMode::class)->value("SPEED", 1)->value("CODE_SIZE", 2)->value("LITE_RUNTIME", 3)->finalizeToPool();
        $pool->addMessage('google.protobuf.internal.MessageOptions', \DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\MessageOptions::class)->optional('message_set_wire_format', \DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\GPBType::BOOL, 1)->optional('no_standard_descriptor_accessor', \DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\GPBType::BOOL, 2)->optional('deprecated', \DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\GPBType::BOOL, 3)->optional('map_entry', \DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\GPBType::BOOL, 7)->optional('deprecated_legacy_json_field_conflicts', \DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\GPBType::BOOL, 11)->repeated('uninterpreted_option', \DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\GPBType::MESSAGE, 999, 'google.protobuf.internal.UninterpretedOption')->finalizeToPool();
        $pool->addMessage('google.protobuf.internal.FieldOptions', \DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\FieldOptions::class)->optional('ctype', \DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\GPBType::ENUM, 1, 'google.protobuf.internal.FieldOptions.CType')->optional('packed', \DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\GPBType::BOOL, 2)->optional('jstype', \DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\GPBType::ENUM, 6, 'google.protobuf.internal.FieldOptions.JSType')->optional('lazy', \DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\GPBType::BOOL, 5)->optional('unverified_lazy', \DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\GPBType::BOOL, 15)->optional('deprecated', \DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\GPBType::BOOL, 3)->optional('weak', \DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\GPBType::BOOL, 10)->repeated('uninterpreted_option', \DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\GPBType::MESSAGE, 999, 'google.protobuf.internal.UninterpretedOption')->finalizeToPool();
        $pool->addEnum('google.protobuf.internal.FieldOptions.CType', \DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\CType::class)->value("STRING", 0)->value("CORD", 1)->value("STRING_PIECE", 2)->finalizeToPool();
        $pool->addEnum('google.protobuf.internal.FieldOptions.JSType', \DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\JSType::class)->value("JS_NORMAL", 0)->value("JS_STRING", 1)->value("JS_NUMBER", 2)->finalizeToPool();
        $pool->addMessage('google.protobuf.internal.OneofOptions', \DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\OneofOptions::class)->repeated('uninterpreted_option', \DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\GPBType::MESSAGE, 999, 'google.protobuf.internal.UninterpretedOption')->finalizeToPool();
        $pool->addMessage('google.protobuf.internal.EnumOptions', \DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\EnumOptions::class)->optional('allow_alias', \DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\GPBType::BOOL, 2)->optional('deprecated', \DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\GPBType::BOOL, 3)->optional('deprecated_legacy_json_field_conflicts', \DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\GPBType::BOOL, 6)->repeated('uninterpreted_option', \DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\GPBType::MESSAGE, 999, 'google.protobuf.internal.UninterpretedOption')->finalizeToPool();
        $pool->addMessage('google.protobuf.internal.EnumValueOptions', \DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\EnumValueOptions::class)->optional('deprecated', \DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\GPBType::BOOL, 1)->repeated('uninterpreted_option', \DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\GPBType::MESSAGE, 999, 'google.protobuf.internal.UninterpretedOption')->finalizeToPool();
        $pool->addMessage('google.protobuf.internal.ServiceOptions', \DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\ServiceOptions::class)->optional('deprecated', \DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\GPBType::BOOL, 33)->repeated('uninterpreted_option', \DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\GPBType::MESSAGE, 999, 'google.protobuf.internal.UninterpretedOption')->finalizeToPool();
        $pool->addMessage('google.protobuf.internal.MethodOptions', \DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\MethodOptions::class)->optional('deprecated', \DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\GPBType::BOOL, 33)->optional('idempotency_level', \DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\GPBType::ENUM, 34, 'google.protobuf.internal.MethodOptions.IdempotencyLevel')->repeated('uninterpreted_option', \DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\GPBType::MESSAGE, 999, 'google.protobuf.internal.UninterpretedOption')->finalizeToPool();
        $pool->addEnum('google.protobuf.internal.MethodOptions.IdempotencyLevel', \DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\IdempotencyLevel::class)->value("IDEMPOTENCY_UNKNOWN", 0)->value("NO_SIDE_EFFECTS", 1)->value("IDEMPOTENT", 2)->finalizeToPool();
        $pool->addMessage('google.protobuf.internal.UninterpretedOption', \DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\UninterpretedOption::class)->repeated('name', \DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\GPBType::MESSAGE, 2, 'google.protobuf.internal.UninterpretedOption.NamePart')->optional('identifier_value', \DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\GPBType::STRING, 3)->optional('positive_int_value', \DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\GPBType::UINT64, 4)->optional('negative_int_value', \DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\GPBType::INT64, 5)->optional('double_value', \DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\GPBType::DOUBLE, 6)->optional('string_value', \DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\GPBType::BYTES, 7)->optional('aggregate_value', \DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\GPBType::STRING, 8)->finalizeToPool();
        $pool->addMessage('google.protobuf.internal.UninterpretedOption.NamePart', \DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\UninterpretedOption\NamePart::class)->required('name_part', \DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\GPBType::STRING, 1)->required('is_extension', \DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\GPBType::BOOL, 2)->finalizeToPool();
        $pool->addMessage('google.protobuf.internal.SourceCodeInfo', \DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\SourceCodeInfo::class)->repeated('location', \DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\GPBType::MESSAGE, 1, 'google.protobuf.internal.SourceCodeInfo.Location')->finalizeToPool();
        $pool->addMessage('google.protobuf.internal.SourceCodeInfo.Location', \DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\SourceCodeInfo\Location::class)->repeated('path', \DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\GPBType::INT32, 1)->repeated('span', \DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\GPBType::INT32, 2)->optional('leading_comments', \DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\GPBType::STRING, 3)->optional('trailing_comments', \DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\GPBType::STRING, 4)->repeated('leading_detached_comments', \DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\GPBType::STRING, 6)->finalizeToPool();
        $pool->addMessage('google.protobuf.internal.GeneratedCodeInfo', \DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\GeneratedCodeInfo::class)->repeated('annotation', \DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\GPBType::MESSAGE, 1, 'google.protobuf.internal.GeneratedCodeInfo.Annotation')->finalizeToPool();
        $pool->addMessage('google.protobuf.internal.GeneratedCodeInfo.Annotation', \DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\GeneratedCodeInfo\Annotation::class)->repeated('path', \DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\GPBType::INT32, 1)->optional('source_file', \DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\GPBType::STRING, 2)->optional('begin', \DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\GPBType::INT32, 3)->optional('end', \DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\GPBType::INT32, 4)->finalizeToPool();
        $pool->finish();
        static::$is_initialized = \true;
    }
}
