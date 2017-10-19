<?php

namespace App\Http\Controllers;

use App\Http\Requests\OcrRequest;
use Intervention\Image\ImageManagerStatic as Image;
use TesseractOCR;
class OcrController extends Controller
{

    /** Função responsavel por converter imagem em texto, de acordo com a biblioteca tesseract
     * @param OcrRequest $ocrRequest
     * @return string
     * @author Jones Bob
     */
    public function convert(OcrRequest $ocrRequest)
    {
        #verifica se foi informado alguma imagem.
        if(!$ocrRequest->hasFile('imagem'))
            return json_encode(['resultado'=>'Ocorreu um erro ao fazer o upload!']);

        #tenta fazer a conversão.
        try {
            $imagem         = $ocrRequest->file('imagem');
            $novoNomeImagem = $imagem->store('');;
            $imagemResize   = Image::make($imagem->getRealPath());            
            $caminhoImagem  = public_path('uploads/' .$novoNomeImagem);
            $imagemResize->save($caminhoImagem);          
            $tsaInstance = new TesseractOCR($caminhoImagem);            
            $executablePath = '"C:/Program Files (x86)/Tesseract-OCR/tesseract.exe"';
            $tsaInstance->executable($executablePath);
            $recognized = $tsaInstance->run();
        } catch(\Exception $e) {
            $resultadoConversao = $e->getMessage();
        }

        #retorna o erro ou o resultado da conversão.
        return json_encode(['resultado'=>$recognized]);
    }

}
