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


namespace Phady\Security\Bundle\Model;


/**
 * @class Phady\Security\Bundle\Model\UserCore
 *
 * @author  Alien Fernández Fuentes <alienfernandez85@gmail.com>
 * @package Core
 * @copyright (c) 2015
 * @version 1.0.0
 */
class UserCore extends \Phalcon\DI\Injectable
{

    private $encoder_factory;


    /**
     * @name getUsers - Get user data
     * @param array arrData - Data to filters
     * @param boolean getTotal - Get the total with the filter applied
     * @return array
     */
    public function getUsers($arrDataFilter, $getTotal = false) {}



    /**
     * @name persist - Persist user
     * @param array arrData Data to persist
     * @return bool
     */
    public function persist($arrData) {}


    /**
     * @name setEnabledStatusUser - Active or deactive user
     * @param userId User dato to active
     * @param integer status 0 | 1
     * @return bool
     */
    public function setEnabledStatusUser($userId, $status = 1) {}

    /**
     * @name changePassword - Change password
     * @param array arrData Data to change password
     * @return bool
     */
    public function changePassword($arrData) {}

    /**
     * @name deleteUser - Delete user
     * @param  userId - User id to delete
     * @return bool
     */
    public function deleteUser($userId) {}

    /**
     * @name setLockedStatusUser - locked user
     * @param userId User dato to active
     * @param integer status 0 | 1
     * @return bool
     */
    public function setLockedStatusUser($userId, $status = 1) {}
}
