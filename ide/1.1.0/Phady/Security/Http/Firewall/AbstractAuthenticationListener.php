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

namespace Phady\Security\Http\Firewall;

use Phady\Security\Core\Authentication\AuthenticationManagerInterface;
use Phady\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
use Phady\Security\Http\Authentication\AuthenticationFailureHandlerInterface;
use Phady\Security\Http\Authentication\AuthenticationSuccessHandlerInterface;

/**
 * @class Phady\Security\Http\Firewall\AbstractAuthenticationListener
 *
 * @author  Alien Fernández Fuentes <alienfernandez85@gmail.com>
 * @package Core
 * @copyright (c) 2015
 * @version 1.0.0
 */
abstract class AbstractAuthenticationListener extends \Phalcon\Di\Injectable implements ListenerInterface
{

    /**
     * Constructor.
     *
     * @param TokenStorageInterface                  tokenStorage          A TokenStorageInterface instance
     * @param AuthenticationManagerInterface         authenticationManager An AuthenticationManagerInterface instance
     * @param HttpUtils                              httpUtils             An HttpUtilsInterface instance
     * @param string                                 providerKey
     * @param AuthenticationSuccessHandlerInterface  successHandler
     * @param AuthenticationFailureHandlerInterface  failureHandler
     * @param array                                  options               An array of options for the processing of a
     *                                                                      successful, or failed authentication attempt
     * @param LoggerInterface                        logger                A LoggerInterface instance
     * @param EventDispatcherInterface               dispatcher            An EventDispatcherInterface instance
     *
     * @throws \InvalidArgumentException
     */
    public function __construct(TokenStorageInterface $tokenStorage, AuthenticationManagerInterface $authenticationManager,
        $providerKey, AuthenticationSuccessHandlerInterface $successHandler, AuthenticationFailureHandlerInterface $failureHandler,
        $options = []) {}

    /**
     * Sets the RememberMeServices implementation to use.
     *
     * @param RememberMeServicesInterface rememberMeServices
     */
    public function setRememberMeServices($rememberMeServices) {}



    /**
     * This interface must be implemented by firewall listeners.
     */
    public function handle() {}

    /**
     * Whether this request requires authentication.
     *
     * The default implementation only processes requests to a specific path,
     * but a subclass could change this to only authenticate requests where a
     * certain parameters is present.
     *
     * @param Request request
     *
     * @return bool
     */
    protected function requiresAuthentication(Request $request) {}


    /**
     * Performs authentication.
     *
     * @param Request request A Request instance
     *
     * @return TokenInterface|Response|null The authenticated token, null if full authentication is not possible, or a Response
     *
     * @throws AuthenticationException if the authentication fails
     */
    abstract protected function attemptAuthentication(Request $request);


    public function onFailure(Request $request, AuthenticationException $failed) {}


    public function onSuccess(Request $request, TokenInterface $token) {}


}
