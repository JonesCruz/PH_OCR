@extends('template')

@section('title')
    OCR
@stop

@section('content')

    <div class="row">
        <div class="col-md-12" style="margin-top: 20px">

            {{ Form::open(['enctype' => 'multipart/form-data', 'id' => 'form_upload']) }}
            <input type="file" name="imagem" id="input_file_now" class="dropify">
            {{ Form::close() }}

        </div>
    </div>

    <div class="row">
        <div class="col-md-12 progress-top">
            <div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="70"
                     aria-valuemin="0" aria-valuemax="100">
                    0%
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="resultado-ocr" id="resultado_ocr">
            </div>
        </div>
    </div>

    <div class="row btn-limpar-margin-bottom">
        <div class="col-md-12">
            <button type="button" id="limpar_resultado" class="btn btn-danger btn-block dropify-clear">Limpar Resultado</button>
        </div>
    </div>
@stop

@section('javascript')
    <script type="text/javascript">

        $(document).ready(function() {
            let getConversaoOcr = new ConversaoOcr();

            getConversaoOcr.initDropify();

            $('#input_file_now').change(function () {
                getConversaoOcr.converter('{{ url('/ocr/convert') }}');
            });

            $('#limpar_resultado, .dropify-clear').click(function () {
                getConversaoOcr.limparResultado();
            });
        });

    </script>
@stop
