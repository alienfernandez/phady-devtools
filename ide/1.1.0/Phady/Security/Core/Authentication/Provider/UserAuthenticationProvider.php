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

namespace Phady\Security\Core\Authentication\Provider;

use Phady\Security\Core\Authentication\Token\TokenInterface;
use Phady\Security\Core\Authentication\Token\UsernamePasswordToken;
use Phady\Security\Core\User\UserInterface;
use Phady\Security\Core\User\UserCheckerInterface;


/**
 * Phady\Security\Core\Authentication\Provider\UserAuthenticationProvider
 *
 */
abstract class UserAuthenticationProvider implements AuthenticationProviderInterface
{
    /**
     * Constructor.
     *
     * @param UserCheckerInterface userChecker                An UserCheckerInterface interface
     * @param string               providerKey                A provider key
     * @param bool                 hideUserNotFoundExceptions Whether to hide user not found exception or not
     *
     * @throws \InvalidArgumentException
     */
    public function __construct(UserCheckerInterface $userChecker, $providerKey, $hideUserNotFoundExceptions = true) {}

    /**
     * {@inheritdoc}
     */
    public function authenticate(TokenInterface $token) {}

    /**
     * {@inheritdoc}
     */
    public function supports(TokenInterface $token) {}

    /**
     * Retrieves roles from user and appends SwitchUserRole if original token contained one.
     *
     * @param UserInterface  user  The user
     * @param TokenInterface token The token
     *
     * @return array The user roles
     */
    public function getRoles(UserInterface $user, TokenInterface $token) {}


    /**
     * Retrieves the user from an implementation-specific location.
     *
     * @param string                username The username to retrieve
     * @param UsernamePasswordToken token    The Token
     *
     * @return UserInterface The user
     *
     * @throws AuthenticationException if the credentials could not be validated
     */
    abstract protected function retrieveUser($username, UsernamePasswordToken $token);

    /**
     * Does additional checks on the user and token (like validating the
     * credentials).
     *
     * @param UserInterface         user  The retrieved UserInterface instance
     * @param UsernamePasswordToken token The UsernamePasswordToken token to be authenticated
     *
     * @throws AuthenticationException if the credentials could not be validated
     */
    abstract protected function checkAuthentication(UserInterface $user, UsernamePasswordToken $token);


}