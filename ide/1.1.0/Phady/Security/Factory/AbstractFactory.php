<?php
/*
+------------------------------------------------------------------------+
| Phady Framework                                                        |
+------------------------------------------------------------------------+
| Copyright (c) 2015                                                     |
+------------------------------------------------------------------------+
| Phady Framework is a complement of Phalcon Framework                   |
|                                                                        |
+------------------------------------------------------------------------+
| Authors: Alien fernandez Fuentes <alienfernandez85@gmail.com>          |
+------------------------------------------------------------------------+
*/


namespace Phady\Security\Factory;

/**
 * @class Phady\Security\Factory\AbstractFactory
 *
 * AbstractFactory is the base class for all classes inheriting from
 * AbstractAuthenticationListener.
 * @author  Alien Fernández Fuentes <alienfernandez85@gmail.com>
 * @package Core
 * @copyright (c) 2015
 * @version 1.0.0
 */
abstract class AbstractFactory extends \Phalcon\Di\Injectable implements SecurityFactoryInterface
{

    public function create($id, $config, $userProvider, $defaultEntryPoint) {}

    final public function addOption($name, $defaultOption = null) {}

    /**
     * Defines the position at which the provider is called.
     * Possible values: pre_auth, form, http, and remember_me.
     *
     * @return string
     */
    public function getPosition() {}

    public function getKey() {}

    protected function getListenerId() {}

    protected function createAuthProvider($id, $config, $userProviderId) {}

    protected function createListener($id, $config, $userProvider) {}

    protected function createEntryPoint($id, $config, $defaultEntryPoint) {}

    /**
     * Subclasses may disable remember-me features for the listener, by
     * always returning false from this method.
     *
     * @param array config
     *
     * @return bool Whether a possibly configured RememberMeServices should be set for this listener
     */
    protected function isRememberMeAware($config) {}

    protected function createAuthenticationSuccessHandler($id, $config) {}

    protected function createAuthenticationFailureHandler($id, $config) {}

    protected function getSuccessHandlerId($id) {}

    protected function getFailureHandlerId($id) {}
}
