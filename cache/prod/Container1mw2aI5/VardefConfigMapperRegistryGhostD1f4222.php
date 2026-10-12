<?php

namespace Container1mw2aI5;

include_once \dirname(__DIR__, 3).'/core/backend/FieldDefinitions/Service/VardefConfigMapperRegistry.php';
class VardefConfigMapperRegistryGhostD1f4222 extends \App\FieldDefinitions\Service\VardefConfigMapperRegistry implements \Symfony\Component\VarExporter\LazyObjectInterface
{
    use \Symfony\Component\VarExporter\LazyGhostTrait;
    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".'*'."\0".'registry' => [parent::class, 'registry', null, 8],
        'registry' => [parent::class, 'registry', null, 8],
    ];
}
class_exists(\Symfony\Component\VarExporter\Internal\Hydrator::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectRegistry::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectState::class);

if (!\class_exists('VardefConfigMapperRegistryGhostD1f4222', false)) {
    \class_alias(__NAMESPACE__.'\\VardefConfigMapperRegistryGhostD1f4222', 'VardefConfigMapperRegistryGhostD1f4222', false);
}
