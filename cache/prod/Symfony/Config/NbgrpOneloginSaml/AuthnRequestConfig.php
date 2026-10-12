<?php

namespace Symfony\Config\NbgrpOneloginSaml;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class AuthnRequestConfig 
{
    private $parameters;
    private $forceAuthn;
    private $isPassive;
    private $setNameIdPolicy;
    private $nameIdValueReq;
    private $_usedProperties = [];

    /**
     * @param ParamConfigurator|list<ParamConfigurator|mixed> $value
     *
     * @return $this
     */
    public function parameters(ParamConfigurator|array $value): static
    {
        $this->_usedProperties['parameters'] = true;
        $this->parameters = $value;

        return $this;
    }

    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function forceAuthn($value): static
    {
        $this->_usedProperties['forceAuthn'] = true;
        $this->forceAuthn = $value;

        return $this;
    }

    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function isPassive($value): static
    {
        $this->_usedProperties['isPassive'] = true;
        $this->isPassive = $value;

        return $this;
    }

    /**
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function setNameIdPolicy($value): static
    {
        $this->_usedProperties['setNameIdPolicy'] = true;
        $this->setNameIdPolicy = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function nameIdValueReq($value): static
    {
        $this->_usedProperties['nameIdValueReq'] = true;
        $this->nameIdValueReq = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('parameters', $value)) {
            $this->_usedProperties['parameters'] = true;
            $this->parameters = $value['parameters'];
            unset($value['parameters']);
        }

        if (array_key_exists('forceAuthn', $value)) {
            $this->_usedProperties['forceAuthn'] = true;
            $this->forceAuthn = $value['forceAuthn'];
            unset($value['forceAuthn']);
        }

        if (array_key_exists('isPassive', $value)) {
            $this->_usedProperties['isPassive'] = true;
            $this->isPassive = $value['isPassive'];
            unset($value['isPassive']);
        }

        if (array_key_exists('setNameIdPolicy', $value)) {
            $this->_usedProperties['setNameIdPolicy'] = true;
            $this->setNameIdPolicy = $value['setNameIdPolicy'];
            unset($value['setNameIdPolicy']);
        }

        if (array_key_exists('nameIdValueReq', $value)) {
            $this->_usedProperties['nameIdValueReq'] = true;
            $this->nameIdValueReq = $value['nameIdValueReq'];
            unset($value['nameIdValueReq']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['parameters'])) {
            $output['parameters'] = $this->parameters;
        }
        if (isset($this->_usedProperties['forceAuthn'])) {
            $output['forceAuthn'] = $this->forceAuthn;
        }
        if (isset($this->_usedProperties['isPassive'])) {
            $output['isPassive'] = $this->isPassive;
        }
        if (isset($this->_usedProperties['setNameIdPolicy'])) {
            $output['setNameIdPolicy'] = $this->setNameIdPolicy;
        }
        if (isset($this->_usedProperties['nameIdValueReq'])) {
            $output['nameIdValueReq'] = $this->nameIdValueReq;
        }

        return $output;
    }

}
