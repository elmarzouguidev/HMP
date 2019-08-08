<script>
$(".deletefile").click(function(){
  
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
      
    var id = $(this).data('id');
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
            
          $(".photos" + id).fadeOut('slow');
                 
        }
      
    });
});
</script>