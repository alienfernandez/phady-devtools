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
use Phady\Security\Core\Authentication\Token\UsernamePasswordToken;
use Phady\Security\Core\User\UserInterface;

/**
 * Phady\Security\Core\Authentication\Provider\DaoAuthenticationProvider
 *
 */
class DaoAuthenticationProvider extends UserAuthenticationProvider
{
    /**
     * Constructor.
     *
     * @param UserProviderInterface   userProvider               An UserProviderInterface instance
     * @param UserCheckerInterface    userChecker                An UserCheckerInterface instance
     * @param string                  providerKey                The provider key
     * @param EncoderFactoryInterface encoderFactory             An EncoderFactoryInterface instance
     * @param bool                    hideUserNotFoundExceptions Whether to hide user not found exception or not
     */
    public function __construct($userProvider, $userChecker, $providerKey, $encoderFactory, $hideUserNotFoundExceptions = true) {}

    /**
     * {@inheritdoc}
     */
    protected function checkAuthentication(UserInterface $user, UsernamePasswordToken $token) {}

    /**
     * {@inheritdoc}
     */
    protected function retrieveUser($username, UsernamePasswordToken $token) {}
}