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
class Roles extends ModelBase
{

    /**
     * @Primary
     * @var integer
     */
    protected $role_id;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $alias;

    /**
     * @var string
     */
    protected $description;

    /**
     * @var string
     */
    protected $role_code;

    /**
     * @var string
     */
    protected $init_path;

}
