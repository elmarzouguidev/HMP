<script>
    $(document).ready(function() {
        $('#addste').on('submit',function(e){
            e.preventDefault();
        
            var form  = new FormData(this);
            var socialmedia = $('#socialmedia').val();
            var tele = $('#tele').val();
            var ice = $('#ice').val();
           // var description = $('#description').val();
            var email = $('#email').val();
            var file = $('#file')[0].files[0];

            form.append('socialmedia', socialmedia);
            form.append('tele', tele);
            form.append('ice', ice);
            form.append('email', email);
           // form.append('description', description);
            if(file)
            {
                form.append('file', file);
            }
            /* Abdelghafour ***/
            $.ajax({
                url: '{{URL::route('admin.societies')}}',
                type: 'POST',
                data: form,
                processData: false,
                contentType: false,
                success:function(data) {
                    if($.isEmptyObject(data.errors)){
                        $("#addste")[0].reset();
                        printSuccessMsg(data.success);
                    }else{
                       
                        printErrorMsg(data.errors);
                    }
                }
            });
            function printErrorMsg (msg) {
                $(".print-error-msg").find("ul").html('');
                $(".print-error-msg").css('display','block');
                $.each( msg, function( key, value ) {
                    $(".print-error-msg").find("ul").append('<li>'+value+'</li>');
                });
            }
            function printSuccessMsg (msg) {
                $(".print-success-msg").find("ul").html('');
                $(".print-success-msg").css('display','block');
                $(".print-success-msg").find("ul").append('<li>'+msg+'</li>');
                $("#addste")[0].reset();
                $("#list_ste").load(location.href + " #list_ste");
              
            }
        });
    });
</script>

<script>
    /*********** Attach files to STE **/
    $(document).ready(function() {
        $('.addfiletoste').on('submit',function(e){
            e.preventDefault();
          
            var form  = new FormData(this);
            var attach = $('#attach').val();
            var steattach = $('#steattach').val();
    
            var file = $('#fileste')[0].files[0];

            form.append('attach', attach);
            form.append('steattach', steattach);
            if(file)
            {
                form.append('file', file);
            }
            /* Abdelghafour ***/
            $.ajax({
                url: '{{URL::route('admin.societies')}}',
                type: 'POST',
                data: form,
                processData: false,
                contentType: false,
                success:function(data) {
                    if($.isEmptyObject(data.errors)){
                        $(".addfiletoste")[0].reset();
                        printSuccessMsg(data.success);
                    }else{
                        printErrorMsg(data.errors);
                    }
                }
            });
            function printErrorMsg (msg) {
                $(".print-error-msg").find("ul").html('');
                $(".print-error-msg").css('display','block');
                $.each( msg, function( key, value ) {
                    $(".print-error-msg").find("ul").append('<li>'+value+'</li>');
                });
                $(".addfiletoste")[0].reset();
            }
            function printSuccessMsg (msg) {
                $(".print-success-msg").find("ul").html('');
                $(".print-success-msg").css('display','block');
                $(".print-success-msg").find("ul").append('<li>'+msg+'</li>');
                $("#list_ste").load(location.href + " #list_ste");
          
                
            }
        });
    });
</script>



