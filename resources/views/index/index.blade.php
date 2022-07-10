@extends('index.tags')
@extends('index.imports-css')
@extends('index.imports-js')


@extends('index.load')
{{--<a class="waves-effect waves-light btn modal-trigger" href="#modal1">Modal</a>--}}

<!-- Modal Structure -->
<div id="modal-schedule" class="modal bottom-sheet">
    <div class="modal-content">
        <h4>Agende seu horário</h4>
        <div class="col l12 m12 s12">
            <input type="text" placeholder="Seu nome">
            <input placeholder="Dia e hora" type="datetime-local">
            <textarea class="materialize-textarea" id="" cols="30" rows="10" placeholder="Observações"></textarea>
        </div>
    </div>
    <div class="modal-footer">
        <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Finalizar</a>
    </div>
</div>

@extends('index.nav')
