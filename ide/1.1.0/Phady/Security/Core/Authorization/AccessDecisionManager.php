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

use Phady\Security\Core\Authentication\Token\TokenInterface;
use Phady\Security\Core\Authorization\Voter\VoterInterface;

/**
 * @class Phady\Security\Core\Authorization\AccessDecisionManager
 *
 * @author  Alien Fernández Fuentes <alienfernandez85@gmail.com>
 * @package Core
 * @copyright (c) 2015
 * @version 1.0.0
 */
class AccessDecisionManager implements AccessDecisionManagerInterface
{
    const STRATEGY_AFFIRMATIVE = "affirmative";
    const STRATEGY_CONSENSUS = "consensus";
    const STRATEGY_UNANIMOUS = "unanimous";

    /**
     * Constructor.
     *
     * @param VoterInterface[] voters                             An array of VoterInterface instances
     * @param string           strategy                           The vote strategy
     * @param bool             allowIfAllAbstainDecisions         Whether to grant access if all voters abstained or not
     * @param bool             allowIfEqualGrantedDeniedDecisions Whether to grant access if result are equals
     *
     * @throws \InvalidArgumentException
     */
    public function __construct($voters, $strategy = self::STRATEGY_AFFIRMATIVE, $allowIfAllAbstainDecisions = false,
                        $allowIfEqualGrantedDeniedDecisions = true) {}

    /**
     * Decides whether the access is possible or not.
     *
     * @param TokenInterface token      A TokenInterface instance
     * @param array          attributes An array of attributes associated with the method being invoked
     * @param object         object     The object to secure
     *
     * @return bool true if the access is granted, false otherwise
     */
    public function decide(TokenInterface $token, $attributes, $objectSecure = null) {}

    /**
     * Checks if the access decision manager supports the given attribute.
     *
     * @param string attribute An attribute
     *
     * @return bool true if this decision manager supports the attribute, false otherwise
     */
    public function supportsAttribute($attribute) {}

    /**
     * Checks if the access decision manager supports the given class.
     *
     * @param string supportsClass A class name
     *
     * @return true if this decision manager can process the class
     */
    public function supportsClass($supportsClass) {}


    /**
     * Grants access if any voter returns an affirmative response.
     *
     * If all voters abstained from voting, the decision will be based on the
     * allowIfAllAbstainDecisions property value (defaults to false).
     */
    private function decideAffirmative(TokenInterface $token, $attributes, $objectSecure = null) {}


    /**
     * Grants access if there is consensus of granted against denied responses.
     *
     * Consensus means majority-rule (ignoring abstains) rather than unanimous
     * agreement (ignoring abstains). If you require unanimity, see
     * UnanimousBased.
     *
     * If there were an equal number of grant and deny votes, the decision will
     * be based on the allowIfEqualGrantedDeniedDecisions property value
     * (defaults to true).
     *
     * If all voters abstained from voting, the decision will be based on the
     * allowIfAllAbstainDecisions property value (defaults to false).
     */
    private function decideConsensus(TokenInterface $token, $attributes, $objectSecure = null) {}


    /**
     * Grants access if only grant (or abstain) votes were received.
     *
     * If all voters abstained from voting, the decision will be based on the
     * allowIfAllAbstainDecisions property value (defaults to false).
     */
    private function decideUnanimous(TokenInterface $token, $attributes, $objectSecure = null) {}
}
