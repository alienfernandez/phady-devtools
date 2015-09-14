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

namespace Phady\Common\Entities;

use Phalcon\Mvc\Model as ModelMvc;

/**
 * Phady\Common\Entities\ModelBase
 *
 * Base Model
 */
class ModelBase extends ModelMvc
{

    /**
     * Stores that attributes can be setter
     *
     * @var array
     */
    protected _set;

    /**
     * Stores that attributes can be getter
     *
     * @var array
     */
    protected _get;

    /**
     * Stores the attributes that relate to class with another with different cardinality (one to one , one to many , etc ) .
     * Preserves the core functionality of Phalcon .
     * @var type
     */
    protected _related;

    /**
     * Stores the date the record
     *
     * @var timestamp
     */
    protected createAt;

    /**
     * Stores the last modified date of registration
     *
     * @var timestamp
     */
    protected modifyAt;

    /**
     * Stores the ID of the user who created the record
     *
     * @var uuid
     */
    protected createUser;

    /**
     *
     * Stores the identifier of the user who last modified the record.
     *
     * @var uuid
     */
    protected modifyUser;

    /**
     *
     * Saves last IP address that made ​​a change and created the record.
     *
     * @var uuid
     */
    protected requestIp;

    /**
     * Performs procedures to initialize the class
     */
    public function onConstruct() {}

    /**
     * Inicializa la clase. Asigna los attributeutos que pueden ser obtenidos
     * y seteados.
     */
    protected function init() {}

    /**
     * Method magic to set starting attributeutos allowed .
     *
     * If a validation method executes .
     *
     * If there is a specific method for setting it uses it, otherwise it It sets directly
     *
     * @param string attribute
     * @param string value
     * @throws Exception
     */
    public function __set($attribute, $value) {}


    /**
     *
     * Gets the value of an attribute. If there is a specific method for the attribute is used,
     * otherwise only available directly.
     *
     * @param string attribute
     * @return type
     */
    public function __get($attribute) {}
}
