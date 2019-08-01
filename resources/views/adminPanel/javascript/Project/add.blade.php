<script>
    $(document).ready(function() {
        $('#addproject').on('submit',function(e){
            e.preventDefault();
        
            var form  = new FormData(this);
            var nom = $('#nom').val();
            var duree = $('#duree').val();
            var datedebut = $('#datedebut').val();
            var societie = $('#societie').val();
            var file = $('#file')[0].files[0];

            form.append('nom', nom);
            form.append('duree', duree);
            form.append('datedebut', datedebut);
            form.append('societie', societie);
           // form.append('description', description);
            if(file)
            {
                form.append('file', file);
            }
            /* Abdelghafour ***/
            $.ajax({
                url: '{{URL::route('admin.projects')}}',
                type: 'POST',
                data: form,
                processData: false,
                contentType: false,
                success:function(data) {
                    if($.isEmptyObject(data.errors)){
                        $("#addproject")[0].reset();
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
                $("#list_projects").load(location.href + " #list_projects");
              
            }
        });
    });
</script>





