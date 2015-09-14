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

namespace Phady\Security\Core\Authentication\Token;

use Phady\Security\Core\User\UserInterface;

/**
 * Phady\Security\Core\Authentication\Token\AbstractToken
 *
 * Interface
 */
abstract class AbstractToken implements TokenInterface
{

    /**
     * Constructor.
     *
     * @param RoleInterface[]|string[] roles An array of roles
     *
     * @throws \InvalidArgumentException
     */
    public function __construct($roles = []) {}

    /**
     * {@inheritdoc}
     */
    public function getRoles() {}

    /**
     * {@inheritdoc}
     */
    public function getUsername() {}

    /**
     * {@inheritdoc}
     */
    public function getUser() {}

    /**
     * Sets the user in the token.
     *
     * The user can be a UserInterface instance, or an object implementing
     * a __toString method or the username as a regular string.
     *
     * @param string|object user The user
     *
     * @throws \InvalidArgumentException
     */
    public function setUser($user) {}

    /**
     * {@inheritdoc}
     */
    public function isAuthenticated() {}

    /**
     * {@inheritdoc}
     */
    public function setAuthenticated($isAuthenticated) {}

    /**
     * {@inheritdoc}
     */
    public function eraseCredentials() {}

    /**
     * {@inheritdoc}
     */
    public function serialize() {}

    /**
     * {@inheritdoc}
     */
    public function unserialize($serialized) {}

    /**
     * Returns the token attributes.
     *
     * @return array The token attributes
     */
    public function getAttributes() {}

    /**
     * Sets the token attributes.
     *
     * @param array attributes The token attributes
     */
    public function setAttributes($attributes) {}

    /**
     * Returns true if the attribute exists.
     *
     * @param string name The attribute name
     *
     * @return bool true if the attribute exists, false otherwise
     */
    public function hasAttribute($name) {}

    /**
     * Returns an attribute value.
     *
     * @param string name The attribute name
     *
     * @return mixed The attribute value
     *
     * @throws \InvalidArgumentException When attribute doesn"t exist for this token
     */
    public function getAttribute($name) {}

    /**
     * Sets an attribute.
     *
     * @param string name  The attribute name
     * @param mixed  value The attribute value
     */
    public function setAttribute($name, $value) {}

    /**
     * {@inheritdoc}
     */
    public function __toString() {}

    public function hasUserChanged(UserInterface $user) {}

}