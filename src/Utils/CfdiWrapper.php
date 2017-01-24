<?php
/**
 * Created by PhpStorm.
 * User: IROXIT
 * Date: 24/01/2017
 * Time: 03:35 PM
 */

namespace Crayon\Utils;

/**
 * Class CfdiWrapper
 * Wrapper para carga de archivos XML
 * @package Crayon\Utils
 */
class CfdiWrapper {

	/** @var string $file_path Ruta de archivo */
	private $file_path;

	/** @var \SimpleXMLElement $xml Wrapper XML de la factura */
	private $xml;

	/**
	 * CfdiWrapper constructor.
	 *
	 * @param $path
	 */
	public function __construct( $path ) {
		if ( ! is_file( $path ) ) {
			throw new \InvalidArgumentException( 'Ruta de archivo inválida.' );
		}

		if ( ! is_readable( $path ) ) {
			throw new \InvalidArgumentException( 'Archivo existe pero no fue posible leerlo.' );
		}

		$this->file_path = $path;

		if ( ! ( $this->xml = simplexml_load_file( $path ) ) ) {
			throw new \InvalidArgumentException( 'Fue imposible convertir el archivo a objeto XML' );
		}
	}

	public function getAtributo($name, $default):mixed{
		$this->xml
	}


}