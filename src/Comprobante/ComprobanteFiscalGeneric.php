<?php
/**
 * Created by PhpStorm.
 * User: IROXIT
 * Date: 24/01/2017
 * Time: 03:35 PM
 */

namespace Crayon\Comprobante;

/**
 * Class CfdiWrapper
 * Wrapper para carga de archivos XML
 * @package Crayon\Utils
 */
abstract class ComprobanteFiscalGeneric implements IComprobanteFiscal{

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

	/**
	 * Getter de atributos.
	 *
	 * @param $name
	 *
	 * @return bool
	 */
	public function __get( $name ) {
		return $this->getAtributo( $name, false );
	}

	/**
	 * @param $name
	 * @param $default
	 *
	 * @return bool
	 */
	private function getAtributo( $name, $default = false ) {
		/** @var \SimpleXMLElement $attr_wrapper */
		$attr_wrapper = $this->xml->attributes();

		return isset( $attr_wrapper->{$name} ) ? (string) $attr_wrapper->{$name} : $default;
	}

}