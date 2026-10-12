<?php

namespace Container1mw2aI5;

include_once \dirname(__DIR__, 3).'/vendor/scheb/2fa-bundle/Security/TwoFactor/Provider/TwoFactorProviderInitiator.php';
class TwoFactorProviderInitiatorGhost02c62c1 extends \Scheb\TwoFactorBundle\Security\TwoFactor\Provider\TwoFactorProviderInitiator implements \Symfony\Component\VarExporter\LazyObjectInterface
{
    use \Symfony\Component\VarExporter\LazyGhostTrait;
    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".parent::class."\0".'providerRegistry' => [parent::class, 'providerRegistry', null, 16],
        "\0".parent::class."\0".'twoFactorTokenFactory' => [parent::class, 'twoFactorTokenFactory', null, 16],
        'providerRegistry' => [parent::class, 'providerRegistry', null, 16],
        'twoFactorTokenFactory' => [parent::class, 'twoFactorTokenFactory', null, 16],
    ];
}
class_exists(\Symfony\Component\VarExporter\Internal\Hydrator::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectRegistry::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectState::class);

if (!\class_exists('TwoFactorProviderInitiatorGhost02c62c1', false)) {
    \class_alias(__NAMESPACE__.'\\TwoFactorProviderInitiatorGhost02c62c1', 'TwoFactorProviderInitiatorGhost02c62c1', false);
}
