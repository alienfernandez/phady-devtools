<?php

namespace Phady\Builder;

/**
 * @class AdministradorArchivo
 * Clase para gestionar directorios y ficheros
 *
 * @author  Alien Fernández Fuentes <alienfernandez85@gmail.com>
 * @package InventarioCore
 * @copyright
 * @version 1.0
 */

class AdministradorArchivo {

    /**
     * @name chequearExisteDirectorio - Función para chequear que existe un directorio si no existe lo crea
     * @param string $dirRuta - contiene la ruta del directorio a crear
     * @return bool
     */
    public function chequearExisteDirectorio($dirRuta) {
        if (!file_exists($dirRuta)) {
            try {
                @mkdir($dirRuta);
                @chmod($dirRuta, 0777);
                return true;
            } catch (\Exception $exc) {
                return false;
            }
        } else
            return true;
    }

    /**
     * @name eliminarArchivo - Función para eliminar un archivo
     * @param string $dirArchivo - contiene la ruta del archivo
     * @return bool
     */
    function eliminarArchivo($dirArchivo) {
        $archivo = $dirArchivo;
        if (file_exists($archivo)) {
            $eliminar = unlink($archivo);
            if ($eliminar)
                return 1;
            else
                return 0;
        } else
            return -1;
    }    

    /**
     * @name eliminarDirectorio - Función para eliminar un directorio con todos sus subdirectorios
     * @param string $dirRuta - contiene la ruta del directorio a eliminar
     * @return bool
     */
    public function eliminarDirectorio($dirRuta) {
        $files = dir($dirRuta);
        $files->read();
        $files->read();
        while ($fichero = $files->read()) {
            if (is_file($dirRuta . '/' . $fichero))
                unlink($dirRuta . '/' . $fichero);
            if (is_dir($dirRuta . '/' . $fichero))
                $this->eliminarDirectorio($dirRuta . '/' . $fichero);
        }
        $files->close();
        $res = @rmdir($dirRuta);
        return $res;
    }

    /**
     * @name copiarArchivoDirectorio - Función para copiar un archivo con todos sus subdirectorios
     * @param string $archivo - contiene la ruta del archivo a copiar
     * @param string $dirDestino - contiene la ruta del directorio destino
     * @return bool
     */
    public function copiarArchivoDirectorio($archivo, $dirDestino) {
        if (is_file($archivo)) {
            $res = copy($archivo, $dirDestino);
            $copiado = (!$res) ? false : true;
        }
        return $copiado;
    }

    /**
     * @name copiarTodosArchivosDirectorio - Función para copiar todos los archivos de un directorio a otro
     * @param string $dirOrigen - contiene la ruta del directorio origen
     * @param string $dirDestino - contiene la ruta del directorio destino
     * @return bool
     */
    public function copiarTodosArchivosDirectorio($dirOrigen, $dirDestino) {
		$copiado = false;
        $directorio = dir($dirOrigen);
		//print_r($directorio);die;
        //$directorio->read();
        //$directorio->read();
        while ($fichero = $directorio->read()) {
            if (is_file($dirOrigen . '/' . $fichero)) {
                $res = copy($dirOrigen . '/' . $fichero, $dirDestino . "/" . $fichero);
                if (!$res)
                    return false;
                else
                    $copiado = true;
            }
            if (is_dir($dirOrigen . '/' . $fichero))
                $this->copiarTodosArchivosDirectorio($dirOrigen . '/' . $fichero, $dirDestino);
        }
        $directorio->close();
        return $copiado;
    }
	/**
	 * Copy a file, or recursively copy a folder and its contents
	 * @param       string   $source    Source path
	 * @param       string   $dest      Destination path
	 * @param       string   $permissions New folder creation permissions
	 * @return      bool     Returns true on success, false on failure
	 */
	public function xcopy($source, $dest, $permissions = 0777)
	{
		// Check for symlinks
		if (is_link($source)) {
			return symlink(readlink($source), $dest);
		}

		// Simple copy for a file
		if (is_file($source)) {
			return copy($source, $dest);
		}

		// Make destination directory
		if (!is_dir($dest)) {
			mkdir($dest, $permissions);
		}

		// Loop through the folder
		$dir = dir($source);
		while (false !== $entry = $dir->read()) {
			// Skip pointers
			if ($entry == '.' || $entry == '..') {
				continue;
			}

			// Deep copy directories
			$this->xcopy("$source/$entry", "$dest/$entry", $permissions);
		}

		// Clean up
		$dir->close();
		return true;
	}
	
	public function recurse_copy($src,$dst) { 
		$dir = opendir($src); 
		@mkdir($dst); 
		while(false !== ( $file = readdir($dir)) ) { 
			if (( $file != '.' ) && ( $file != '..' )) { 
				if ( is_dir($src . '/' . $file) ) { 
					$this->recurse_copy($src . '/' . $file,$dst . '/' . $file); 
				} 
				else { 
					copy($src . '/' . $file,$dst . '/' . $file); 
				} 
			} 
		} 
		closedir($dir); 
	} 
    /**
     * @name obtenerCantidadArchivos - Función para obtener la cantidad de archivos que tiene un directorio
     * @param string $dirRuta - contiene la ruta del directorio
     * @return bool
     */
    public function obtenerCantidadArchivos($dirRuta) {
        $cantArchivos = 0;
        $directorio = dir($dirRuta);
        $directorio->read();
        $directorio->read();
        while ($archivo = $directorio->read()) {
            if (is_file($dirRuta . "/" . $archivo))
                $cantArchivos++;
        }
        return $cantArchivos;
    }

    /**
     * @name obtenerPesoArchivo - Función para obtener el tamaño de un archivo
     * @param string $archivo - contiene la ruta del archivo
     * @return bool
     */
    public function obtenerPesoArchivo($archivo) {
        if (is_file($archivo)) {
            $size = filesize($archivo);
            $size = round(($size / 1024), 2);
        }
        return $size;
    }

    /**
     * @name guardarArchivoSubido - Función para guardar el servidor un archivo
     * @param string $tmp - contiene la ruta del archivo guardado en el directorio temporal
     * @param string $archivo - contiene la ruta del archivo
     * @return bool
     */
    public function guardarArchivoSubido($tmp, $rutaArchivo) {
        # Movemos el archivo a la carpeta
        try {
            move_uploaded_file($tmp, $rutaArchivo);
            return 1;
        } catch (\Exception $exc) {
            return -1;
        }
    }

    /**
     * @name obtenerPesoDirectorio - Función para obtener el peso de un directorio
     * @param string $rutaDir - contiene la ruta del directorio
     * @return bool
     */
    public function obtenerPesoDirectorio($rutaDir) {
        $totalPeso = 0;
        $rutaDirectorio = scandir($rutaDir);

        foreach ($rutaDirectorio as $dirArchivo) {
            // En caso de directorio
            if (is_dir($dirArchivo)) {
                // Se excluye el directorio y su padre
                if ($dirArchivo != "." && $dirArchivo != "..") {
                    $size = $this->obtenerPesoDirectorio($rutaDir . "/" . $dirArchivo);
                    $totalPeso += $size;
                }
            } else { // En caso de archivo
                $size = filesize($rutaDir . "/" . $dirArchivo);
                $totalPeso += $size;
            }
        }
        $total = ceil(round(($size / 1024), 2));
        return $total;
    }

    /**
     * @name obtenerExtensionArchivo - Función para obtener la extension de un archivo 
     * @param string $dirArchivo - contiene la ruta del archivo
     * @return bool
     */
    public function obtenerExtensionArchivo($dirArchivo) {
        return substr(strrchr($dirArchivo, '.'), 1);
    }

}
