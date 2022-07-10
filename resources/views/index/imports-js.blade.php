<script src="{{ asset('js/jquery.js') }}"></script>
<script src="{{ asset('js/utils/element.js') }}"></script>
<script src="{{ asset('js/materialize/js/materialize.min.js') }}"></script>


<script>
    $(".button-collapse").sideNav();

    setTimeout( () => {
        elementProperty.getElement('.side-nav' , nav => {
            nav.hidden = false;
        })
        elementProperty.addClass('.load-page' , 'load-page-off')
        elementProperty.addClass('.progress' , 'progress-off')
    },500)
</script>
