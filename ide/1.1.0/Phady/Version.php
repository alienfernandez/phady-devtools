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

namespace Phady;

/**
 * Phady\Version
 *
 * This class allows to get the installed version of the framework
 */
class Version
{

    /**
     * The constant referencing the major version. Returns 0
     * <code>
     * echo Phady\Version::getPart(Phady\Version::VERSION_MAJOR);
     * </code>
     */
	const VERSION_MAJOR = 0;

    /**
     * The constant referencing the major version. Returns 1
     * <code>
     * echo Phady\Version::getPart(Phady\Version::VERSION_MEDIUM);
     * </code>
     */
	const VERSION_MEDIUM = 1;

    /**
     * The constant referencing the major version. Returns 2
     * <code>
     * echo Phady\Version::getPart(Phady\Version::VERSION_MINOR);
     * </code>
     */
	const VERSION_MINOR = 2;

    /**
     * The constant referencing the major version. Returns 3
     * <code>
     * echo Phady\Version::getPart(Phady\Version::VERSION_SPECIAL);
     * </code>
     */
	const VERSION_SPECIAL = 3;

    /**
     * The constant referencing the major version. Returns 4
     * <code>
     * echo Phady\Version::getPart(Phady\Version::VERSION_SPECIAL_NUMBER);
     * </code>
     */
	const VERSION_SPECIAL_NUMBER = 4;

	/**
	 * Area where the version number is set. The format is as follows:
	 * ABBCCDE
	 *
	 * A - Major version
	 * B - Med version (two digits)
	 * C - Min version (two digits)
	 * D - Special release: 1 = Alpha, 2 = Beta, 3 = RC, 4 = Stable
	 * E - Special release version i.e. RC1, Beta2 etc.
	 */
	protected static function _getVersion() {}

	/**
	 * Translates a number to a special release
	 *
	 * If Special release = 1 this function will return ALPHA
	 *
	 * @return string
	 */
    protected final static function _getSpecial($special) {}

	/**
	 * Returns the active version (string)
	 *
	 * <code>
	 * echo Phady\Version::get();
	 * </code>
	 *
	 * @return string
	 */
	public static function get()  {}

	/**
	 * Returns the numeric active version
	 *
	 * <code>
	 * echo Phady\Version::getId();
	 * </code>
	 *
	 * @return string
	 */
	public static function getId() {}

	/**
	 * Returns a specific part of the version. If the wrong parameter is passed
	 * it will return the full version
	 *
	 * <code>
	 * echo Phady\Version::getPart(Phady\Version::VERSION_MAJOR);
	 * </code>
	 *
	 * @return string
	 */
    public static function getPart($part) {}
}
