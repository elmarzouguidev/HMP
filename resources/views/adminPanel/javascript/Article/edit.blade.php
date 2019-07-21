<script>

    $(document).on("click", ".editer_article", function () {

        var myBookId = $(this).data('title');

        var content = $(this).data('content');

        tinyMCE.activeEditor.setContent(content);

        $(".forarticle").append('<input name="_method" type="hidden" value="PUT">');

        $(".forarticle #title").val(myBookId);

        $(".forarticle #content").val(content);

        $(".forarticle #canaction").text("modifier");

    });


</script>