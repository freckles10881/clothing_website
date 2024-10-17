$('.signup').hide();

    $('#signin, #signup').on(
        'click',
        function(){
            $('.login, .register').toggle()
        }
    )