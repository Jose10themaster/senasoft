<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use pdfparse;
use thiagoalessio\TesseractOCR\TesseractOCR;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index() {
        
        $parseador = new \Smalot\PdfParser\Parser();
        $nombreDocumento = assert("file/1.pdf");
        $documento = $parseador->parseFile($nombreDocumento);
        $text = $documento->getText();
        $data =['text'=>$text];

$parseador = new \Smalot\PdfParser\Parser();
$nombreDocumento = assert("file/2.pdf");
$documento = $parseador->parseFile($nombreDocumento);

$imagenes = $documento->getObjectsBytype('XObject', 'Image');
$contador= 0;

foreach ($imagenes as $imagen) {
file_put_contents("img/Image_". $contador."jpg", $imagen->getContent());

$contador++;
$tesseract = new TesseractOCR(public_path("img/text.png"));
$output = $tesseract->run();
echo $output;
   
         return view('home'.$data);
}

