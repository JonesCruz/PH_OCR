## PH_OCR

O PH_OCR é um sistema baseado na tecnologia OCR para a conversão de imagens, que contenham textos, frases ou qualquer enunciado, e o converte para o formato texto. O sistema tenta identificar todo caractere da imagem para o converter.

## Versão Linux
- https://github.com/dariobennaia/ocr

##  Requisitos Adaptado para Windows 10:

- PHP 7.0 >=
- Composer
- Tesseract OCR (https://github.com/UB-Mannheim/tesseract/wiki), biblioteca (tesseract-ocr-setup-4.0.0-alpha.20170804.exe)

## Instalação:

Para instalar o sistema rode o seguinte comando.

- git clone https://github.com/JonesCruz/PH_OCR.git path

Substitua "path" pelo nome do seu projeto.
Após isso entre na pasta do seu projeto rode o comando 

- composer install

Crie o .env e gere a APP_KEY do framework Laravel

- php artisan key:generate

Após esses procedimentos basta acessar:

[SEU_LOCAL_HOST]/[NOME_APLICACAO]/public/
