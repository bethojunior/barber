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
            <div class="input-field" style="margin-top: 5vh">
                <input id="name_user" type="text">
                <label for="name_user">Seu nome</label>
            </div>
            <div class="input-field">
                <input id="date" type="datetime-local">
                <label for="date">Dia e hora</label>
            </div>
            <div class="input-field">
                <textarea class="materialize-textarea" id="description" cols="30" rows="10"></textarea>
                <label for="description">Observações</label>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Finalizar</a>
    </div>
</div>

@extends('index.nav')
