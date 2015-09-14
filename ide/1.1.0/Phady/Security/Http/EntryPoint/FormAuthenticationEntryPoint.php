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

namespace Phady\Security\Http\EntryPoint;

use Phalcon\Http\Request;
use Phady\Security\Core\Exception\AuthenticationException;

/**
 * @class Phady\Security\Http\EntryPoint\FormAuthenticationEntryPoint
 *
 * @author  Alien Fernández Fuentes <alienfernandez85@gmail.com>
 * @package Core
 * @copyright (c) 2015
 * @version 1.0.0
 */
class FormAuthenticationEntryPoint  extends \Phalcon\Di\Injectable implements AuthenticationEntryPointInterface
{

    /**
     * Constructor.
     *
     * @param string              loginPath  The path to the login form
     * @param bool                useForward Whether to forward or redirect to the login form
     */
    public function __construct($loginPath, $useForward = false) {}

    /**
     * {@inheritdoc}
     */
    public function getLoginPath() {}

    /**
     * Starts the authentication scheme.
     *
     * @param Request                 request       The request that resulted in an AuthenticationException
     * @param AuthenticationException authException The exception that started the authentication process
     *
     * @return Response
     */
    public function start(Request $request, AuthenticationException $sauthException = null) {}
}