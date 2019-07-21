<script>

    $(document).ready(function() {

        $('#addarticle').on('submit',function(e){

        e.preventDefault();

        tinyMCE.triggerSave();

        var form  = new FormData(this);
        var title = $('#title').val();
        var content = $('#content').val();
        var category = $('#category').val();
        var file = $('#file')[0].files[0];

        form.append('title', title);
        form.append('content', content);
        form.append('category', category);
        form.append('file', file);

        /* Abdelghafour ***/

        $.ajax({
            url: '{{URL::route('admin.articles')}}',
            type: 'POST',
            data: form,
            processData: false,
            contentType: false,
            success:function(data) {

                if($.isEmptyObject(data.errors)){
                    alert(data.success);
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
      });
    });
</script>