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
 * @class Phady\Security\Firewall
 *
 * @author  Alien Fernández Fuentes <alienfernandez85@gmail.com>
 * @package Core
 * @copyright (c) 2015
 * @version 1.0.0
 */
class Firewall extends \Phalcon\Di\Injectable
{

    /**
     * Set map
     *
     */
    public function setMap(FirewallMapInterface $map) {}

    /**
     * Handles security.
     *
     */
    public function beforeExecuteRoute(Event $event, Dispatcher $dispatcher, $exception) {}


    private function handleAccessDeniedException(Request $request, AccessDeniedException $exception) {}

    public function handleAuthenticationException(Request $request, AuthenticationException $exception) {}

    /**
     * @param Request                 request
     * @param AuthenticationException authException
     *
     * @return Response
     *
     * @throws AuthenticationException
     */
    private function startAuthentication(Request $request, AuthenticationException $authException) {}


    private function handleLogoutException(LogoutException $exception) {}
}