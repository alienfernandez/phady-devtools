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

namespace Phady\Security\Core\User;

/**
 * @class Phady\Security\Core\User\InMemoryUserProvider
 *
 * @author  Alien Fernández Fuentes <alienfernandez85@gmail.com>
 * @package Core
 * @copyright (c) 2015
 * @version 1.0.0
 */
class InMemoryUserProvider implements UserProviderInterface
{

    /**
     * Constructor.
     *
     * The user array is a hash where the keys are usernames and the values are
     * an array of attributes: "password", "enabled", and "roles".
     *
     * @param array users An array of users
     */
    public function __construct($users = []) {}

    /**
     * Adds a new User to the provider.
     *
     * @param UserInterface user A UserInterface instance
     *
     * @throws \LogicException
     */
    public function createUser(UserInterface $user) {}

    /**
     * Loads the user for the given username.
     *
     * This method must throw UsernameNotFoundException if the user is not
     * found.
     *
     * @param string username The username
     *
     * @return UserInterface
     *
     * @see UsernameNotFoundException
     *
     * @throws UsernameNotFoundException if the user is not found
     */
    public function loadUserByUsername($username) {}

    /**
     * Refreshes the user for the account interface.
     *
     * It is up to the implementation to decide if the user data should be
     * totally reloaded (e.g. from the database), or if the UserInterface
     * object can just be merged into some internal array of users / identity
     * map.
     *
     * @param UserInterface user
     *
     * @return UserInterface
     *
     * @throws \Phady\Security\Exception if the account is not supported
     */
    public function refreshUser(UserInterface $user) {}

    /**
     * Whether this provider supports the given user class.
     *
     * @param string class
     *
     * @return bool
     */
    public function supportsClass($_class) {}

}
