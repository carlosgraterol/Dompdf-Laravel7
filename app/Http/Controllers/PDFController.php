<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Barryvdh\DomPDF\Facade as PDF;
use PDF;
use App\Producto;

class PDFController extends Controller
{
    public function PDF(){

    	$pdf = \PDF::loadView('prueba');
    	return $pdf->stream('prueba.pdf');
    }

    public function PDFProductos(){

    	$productos = Producto::all();
    	$pdf = PDF::loadView('productos', compact('productos'));
    	return $pdf->stream('productos.pdf');
    }
}
