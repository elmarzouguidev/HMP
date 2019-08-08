<script>
    $(document).ready(function(){
        $(".deletefile").click(function(){
            var id = $(this).data('id');
            bootbox.confirm("Do you really want to delete record?", function(result) {

                if(result){

                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });


                    $.ajax(
                        {
                            url: "{{URL::route('admin.dash')}}/Project/gallery/"+id,
                            type: 'delete', // replaced from put
                            dataType: "JSON",
                            data: {
                                "id": id // method and token not needed in data
                            },
                            success: function (data)
                            {
                                if($.isEmptyObject(data.errors)){

                                    $(".photos" + id).fadeOut('slow');
                                }
                                else
                                {
                                    bootbox.alert('Record not deleted.');
                                }
                            }

                        });
                }

            });


        });
    });
</script>