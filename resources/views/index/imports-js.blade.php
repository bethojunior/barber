<script src="{{ asset('js/jquery.js') }}"></script>
<script src="{{ asset('js/libs/sweetAlert.js') }}"></script>
<script src="{{ asset('js/utils/element.js') }}"></script>
<script src="{{ asset('js/utils/swalCustom.js') }}"></script>
<script src="{{ asset('js/materialize/js/materialize.min.js') }}"></script>


<script>
    const APP_NAME = 'Madgic';

    $(".button-collapse").sideNav();
    $('.modal').modal();

    elementProperty.addEventInElement('#open-modal-schedule','onclick', function (){
        $('.button-collapse').sideNav('destroy');
        $('#modal-schedule').modal('open');
    })

    elementProperty.addEventInElement('#save-schedule','onclick', function (){
       SwalCustom.confirm('Deseja confirmar sua reserva?',).then(response => {
           if(response){
               SwalCustom.messageDialog('Seu horário foi confirmado','👻 Oba!','success');
               return closeModalSchedule();
           }

           SwalCustom.messageDialog('Tente novamente em outro horário','🙁','error');
           return closeModalSchedule();
       })
    });

    elementProperty.addEventInElement('#share_app','onclick', function (){
        const shareData = {
            title: 'MDN',
            text: 'Learn web development on MDN!',
            url: 'https://developer.mozilla.org'
        }
        try {
            navigator.share(shareData)
            console.log('MDN shared successfully')
        } catch(err) {
            console.log(err)
        }
    })

    elementProperty.addEventInElement()

    function initNav()
    {
        $(".button-collapse").sideNav();
    }

    function closeModalSchedule()
    {
        $(".button-collapse").sideNav();
        $('#modal-schedule').modal('close');
    }

    setTimeout( () => {
        elementProperty.getElement('.side-nav' , nav => {
            nav.hidden = false;
        })
        elementProperty.addClass('.load-page' , 'load-page-off')
        elementProperty.addClass('.progress' , 'progress-off')
    },500)

</script>
