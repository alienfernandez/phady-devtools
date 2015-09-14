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

namespace Phady\Util;

/**
  * @class Phady\Util\File - Util class for file manipulation
  *
  * @author  Alien Fernández Fuentes <alienfernandez85@gmail.com>
  * @package Util
  * @copyright (c) 2015
  * @version 1.0.0
  */
class File
{
    const CONTENT_DISPOSITION_DEFAULT = "attachment";
    const CONTENT_DISPOSITION_INLINE = "inline";
    const FILE_TYPE_PDF = "pdf";
    const FILE_TYPE_EXCEL = "xls";
    const FILE_TYPE_EXCELX = "xlsx";
    const FILE_TYPE_CSV = "csv";

    /**
     * @name downloadFile - Forcing file download
     * @param string $name File name
     * @param string $path File path
     * @param string $type File Type (pdf|xls|...)
     * @param string $contentDisposition Download form (attachment|inline)
     * @return file | -1
     */
    public static function downloadFile ($name, $path, $type, $contentDisposition = self::CONTENT_DISPOSITION_DEFAULT) {}

    /**
     * @name getContentType - Get the content type of a file
     * @param string $type File Type (pdf|xls|...)
     * @return string
     */
    public static function getContentType ($type) {}

}
