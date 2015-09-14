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
 * @class Phady\Security\Bundle\Model\RoleCore
 *
 * @author  Alien Fernández Fuentes <alienfernandez85@gmail.com>
 * @package Core
 * @copyright (c) 2015
 * @version 1.0.0
 */
class RoleCore extends \Phalcon\DI\Injectable
{

    /**
     * @name getRoles - Get role data
     * @param array arrData - Data to filters
     * @param boolean getTotal - Get the total with the filter applied
     * @return array
     */
    public function getRoles($arrDataFilter, $getTotal = false) {}



    /**
     * @name persist - Persist role
     * @param array arrData Data to persist
     * @return bool
     */
    public function persist($arrData) {}

    /**
     * @name deleteRole - Delete role
     * @param  Role id to delete
     * @return bool
     */
    public function deleteRole($roleId) {}


    /**
     * Get roles by array ids
     *
     * @param array arrRolesId - Array roles
     * @return array
     */
    public function getUserRolesByIds($arrRolesId) {}
}
