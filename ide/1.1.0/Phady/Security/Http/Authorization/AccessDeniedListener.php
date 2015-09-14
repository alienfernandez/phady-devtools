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


namespace Phady\Security\Http\Authorization;

use Phady\Security\Core\Authorization\AuthorizationChecker;
use Phalcon\Http\Request;
use Phady\Security\Core\Exception\AccessDeniedException;

/**
 * @class Phady\Security\Http\Authorization\AccessDeniedListener
 *
 * @author  Alien Fernández Fuentes <alienfernandez85@gmail.com>
 * @package Core
 * @copyright (c) 2015
 * @version 1.0.0
 */
class AccessDeniedListener implements AccessDeniedHandlerInterface
{

    public function __construct(AuthorizationChecker $authorizationChecker) {}

    /**
     * Handles an access denied failure.
     *
     * @param Request               request
     * @param AccessDeniedException accessDeniedException
     *
     * @return Response may return null
     */
    public function handle(Request $request, AccessDeniedException $accessDeniedException) {}
}
