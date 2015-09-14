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

namespace Phady\Security\Core\Authorization;

use Phady\Security\Core\Authentication\Token\Storage\TokenStorageInterface;

/**
 * @class Phady\Security\Core\Authorization\AuthorizationChecker
 *
 * @author  Alien Fernández Fuentes <alienfernandez85@gmail.com>
 * @package Core
 * @copyright (c) 2015
 * @version 1.0.0
 */
class AuthorizationChecker implements AuthorizationCheckerInterface
{


    /**
     * Constructor.
     *
     * @param TokenStorageInterface          tokenStorage
     * @param AuthenticationManagerInterface authenticationManager An AuthenticationManager instance
     * @param AccessDecisionManagerInterface accessDecisionManager An AccessDecisionManager instance
     * @param bool                           alwaysAuthenticate
     */
    public function __construct(TokenStorageInterface $tokenStorage, AuthenticationManagerInterface $authenticationManager,
                                AccessDecisionManagerInterface $accessDecisionManager, $alwaysAuthenticate = false) {}

    /**
     * {@inheritdoc}
     */
    public function getTokenStorage() {}

    /**
     * Checks if the attributes are granted against the current authentication token and optionally supplied object.
     *
     * @param mixed $attributes
     * @param mixed $object
     *
     * @return bool
     */
    public function isGranted($attributes, $objectSecure = null) {}



}
