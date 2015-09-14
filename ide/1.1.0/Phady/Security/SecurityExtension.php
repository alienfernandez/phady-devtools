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

namespace Phady\Security;

use Phady\Security\Core\User\Factory\UserProviderFactoryInterface;
use Phalcon\Http\Request;
use Phalcon\Http\Response;
use Phady\Security\Http\Firewall\ExceptionListener;
use Phady\Security\Http\FirewallMapInterface;
use Phalcon\Events\Event;
use Phalcon\Mvc\Dispatcher;
use Phady\Security\Core\Exception\AuthenticationException;
use Phady\Security\Core\Exception\AccessDeniedException;
use Phady\Security\Core\Exception\LogoutException;

/**
 * @class Phady\Security\SecurityExtension
 *
 * @author  Alien Fernández Fuentes <alienfernandez85@gmail.com>
 * @package Core
 * @copyright (c) 2015
 * @version 1.0.0
 */
class SecurityExtension extends \Phalcon\Di\Injectable
{

    public function loadSecurityConfig($config) {}


    private function createEntryPoint($config) {}

    private function createEncoders($encoders) {}

    private function createEncoder($config) {}

    private function createAuthorization($config) {}

    private function createRequestMatcher($path = null, $host = null, $methods = [], $ip = null, $attributes = []) {}

    private function createFirewalls($config) {}

    private function createFirewall($id, $firewall, $providerIds, $userProviders) {}

    private function createContextListener($contextKey, $userProviders) {}

    private function createExceptionListener($config, $id, $defaultEntryPoint, $stateless) {}

    // Parses user providers and returns an array of their ids
    private function createUserProviders($config) {}

    /**
     * Loads the web configuration.
     *
     * @param array            config    An array of configuration settings
     */
    private function createRoleHierarchy($config) {}

    private function createAuthenticationListeners($id, $firewall, $defaultProvider, $defaultEntryPoint) {}

    // Parses a <provider> tag and returns the id for the related user provider service
    private function createUserDaoProvider($name, $provider) {}

    private function getUserProviderId($name) {}

    public function addUserProviderFactory(UserProviderFactoryInterface $factory) {}


    public function addSecurityListenerFactory($factory) {}
}