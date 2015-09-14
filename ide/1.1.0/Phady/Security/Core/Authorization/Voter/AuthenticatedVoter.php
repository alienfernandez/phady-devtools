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

namespace Phady\Security\Core\Authorization\Voter;

use Phady\Security\Core\Authorization\Voter\VoterInterface;
use Phady\Security\Core\Authentication\Token\TokenInterface;
use Phady\Security\Core\Authentication\AuthenticationTrustResolverInterface;

/**
 * @class Phady\Security\Core\Authorization\Voter\AbstractVoter
 *
 * @author  Alien Fernández Fuentes <alienfernandez85@gmail.com>
 * @package Core
 * @copyright (c) 2015
 * @version 1.0.0
 */
class AuthenticatedVoter implements VoterInterface
{
    const IS_AUTHENTICATED_FULLY = "IS_AUTHENTICATED_FULLY";
    const IS_AUTHENTICATED_REMEMBERED = "IS_AUTHENTICATED_REMEMBERED";
    const IS_AUTHENTICATED_ANONYMOUSLY = "IS_AUTHENTICATED_ANONYMOUSLY";

    /**
     * Constructor.
     *
     * @param AuthenticationTrustResolverInterface authenticationTrustResolver
     */
    public function __construct(AuthenticationTrustResolverInterface $authenticationTrustResolver) {}

    /**
     * Checks if the voter supports the given attribute.
     *
     * @param string attribute An attribute
     *
     * @return bool true if this Voter supports the attribute, false otherwise
     */
    public function supportsAttribute($attribute) {}

    /**
     * Checks if the voter supports the given class.
     *
     * @param string class A class name
     *
     * @return bool true if this Voter can process the class
     */
    public function supportsClass($supportsClass) {}

    /**
     * Returns the vote for the given parameters.
     *
     * This method must return one of the following constants:
     * ACCESS_GRANTED, ACCESS_DENIED, or ACCESS_ABSTAIN.
     *
     * @param TokenInterface token      A TokenInterface instance
     * @param object|null    objectSecure     The object to secure
     * @param array          attributes An array of attributes associated with the method being invoked
     *
     * @return int either ACCESS_GRANTED, ACCESS_ABSTAIN, or ACCESS_DENIED
     */
    public function vote(TokenInterface $token, $objectSecure, $attributes) {}
}