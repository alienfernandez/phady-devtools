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


namespace Phady\Security\Bundle\Model\Entity;

use Phady\Common\Entities\ModelBase;

/**
 * Phady\Security\Bundle\Model\Entity\Roles
 *
 * Model for Users
 */
class UserRole extends ModelBase
{

    /**
     * @Primary
     * @var integer
     */
    protected $user_role_id;

    /**
     * @var integer
     */
    protected $role_id;

    /**
     * @var integer
     */
    protected $user_id;

}
