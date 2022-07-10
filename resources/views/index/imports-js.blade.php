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

        let name  = document.getElementById('name_user').value;
        let phone = document.getElementById('phone_user').value;
        let date = document.getElementById('date').value;
        let description = document.getElementById('description').value;

        let params = {'name' : name , 'phone' : phone , 'schedule' : date, 'description' : description};



       SwalCustom.confirm('Deseja confirmar sua reserva?',).then(response => {
           if(response){
               $.ajax({
                   method: "POST",
                   url: "/api/schedule/create",
                   data: params
               }).done(function(response){
                   if(response.id !== null) {
                       SwalCustom.messageDialog('Seu horário foi confirmado','👻 Oba!','success');
                       return closeModalSchedule();
                   }
               })

           }
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

    elementProperty.addEventInElement('#date','onchange', () => {
        elementProperty.getElement('#date', date => {
            date = date.value;
            $.ajax({
                method: "POST",
                url: "/api/check-available",
                data: { 'date': date }
            })
                .done(function(response){
                    if(response.length !== 0)
                        return SwalCustom.messageDialog('Horário já está ocupado','','info');

                })
        })
    })



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


    function mask(o, f) {
        setTimeout(function() {
            var v = mphone(o.value);
            if (v != o.value) {
                o.value = v;
            }
        }, 1);
    }

    function mphone(v) {
        var r = v.replace(/\D/g, "");
        r = r.replace(/^0/, "");
        if (r.length > 10) {
            r = r.replace(/^(\d\d)(\d{5})(\d{4}).*/, "($1) $2-$3");
        } else if (r.length > 5) {
            r = r.replace(/^(\d\d)(\d{4})(\d{0,4}).*/, "($1) $2-$3");
        } else if (r.length > 2) {
            r = r.replace(/^(\d\d)(\d{0,5})/, "($1) $2");
        } else {
            r = r.replace(/^(\d*)/, "($1");
        }
        return r;
    }

</script>
