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
 * @class Phady\Security\Factory\FormLoginFactory
 *
 * AbstractFactory is the base class for all classes inheriting from
 * AbstractAuthenticationListener.
 * @author  Alien Fernández Fuentes <alienfernandez85@gmail.com>
 * @package Core
 * @copyright (c) 2015
 * @version 1.0.0
 */
class FormLoginFactory extends AbstractFactory
{

    public function create($id, $config, $userProvider, $defaultEntryPoint) {}

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
}
