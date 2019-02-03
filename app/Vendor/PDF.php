<?php

/**
 * Created by PhpStorm.
 * User: Fabtech
 * Date: 21/12/2015
 * Time: 14:22
 */
App::import('Vendor', 'fpdf/fpdf');
class PDF extends FPDF
{
    public $titulo;
    public $subtitulo;
}