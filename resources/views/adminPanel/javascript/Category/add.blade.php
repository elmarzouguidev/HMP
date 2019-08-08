<script>
    $(document).ready(function() {
        $('#addcategorie').on('submit',function(e){
            e.preventDefault();

            var form  = new FormData(this);
            var name = $('#name').val();

            var types = $('#types').val();

            form.append('name', name);

            form.append('types', types);

            /* Abdelghafour ***/
            $.ajax({
                url: '{{URL::route('admin.categories')}}',
                type: 'POST',
                data: form,
                processData: false,
                contentType: false,
                success:function(data) {
                    if($.isEmptyObject(data.errors)){
                        $("#addcategorie")[0].reset();
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
                $("#addcategorie")[0].reset();
                $("#list_categories").load(location.href + " #list_categories");

            }
        });
    });
</script>
    
    
    
    
    
    