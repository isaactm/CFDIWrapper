<?php
  /**
   * Created by PhpStorm.
   * User: isaac
   * Date: 25/01/17
   * Time: 10:02 PM
   */

  namespace Crayon\Comprobante;

  /**
   * Interface IEmisor
   * Nodo requerido para expresar la información del contribuyente emisor del comprobante.
   *
   * @package Crayon\Comprobante
   */
  interface IEmisor {

    /**
     * Atributo requerido para la Clave del Registro Federal de Contribuyentes 
     * correspondiente al contribuyente emisor del comprobante sin guiones o 
     * espacios.

     * @return IRfc
     */
    public function rfc();

    /**
     * Atributo opcional para el nombre, denominación o razón social del
     * contribuyente emisor del comprobante.
     * Retornará un false cuando el atributo no esté definido.
     *
     * @return string
     */
    public function nombre();

    /**
     * Nodo opcional para precisar la información de ubicación del domicilio 
     * fiscal del contribuyente emisor.
     * Retornará un false cuando el atributo no esté definido.

     * @return IUbicacionFiscal|false
     */
    public function DomicilioFiscal();

    /**
     *
     * @return mixed
     */
    public function ExpedidoEn();
    
    public function RegimenFiscal();

  }