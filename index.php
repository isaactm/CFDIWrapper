<?php
/**
 * Created by PhpStorm.
 * User: IROXIT
 * Date: 24/01/2017
 * Time: 03:32 PM
 */
include_once __DIR__ . '/vendor/autoload.php';
include_once __DIR__ . '/src/autoload.php';

const FACTURA_PATH = "./Facturas/1B92E574-785B-45F8-B4CA-3EE71E973E2D.xml";

$factura = new \Crayon\Utils\CfdiWrapper(FACTURA_PATH);