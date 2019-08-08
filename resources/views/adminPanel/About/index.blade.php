@extends('layouts.admin')

@section('content')
    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->
    <div class="row" id="foot">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">A propos de haymac</h4>

                    <div class="alert alert-danger print-error-msg" style="display:none">
                        <ul></ul>
                    </div>
                    <div class="alert alert-primary print-success-msg" style="display:none">
                        <ul></ul>
                    </div>
                    @if(session()->has('message'))
                        <div class="alert alert-success">
                            {{ session()->get('message') }}
                        </div>
                    @endif
                    <form id="addabout" class="forabout form-horizontal form-material" method="post" action="" enctype="multipart/form-data">
                        <div class="form-group">
                            <div class="col-md-12 mb-3">
                                <input type="text" name="title" id="title" value="" class="form-control" placeholder="">
                            </div>


                            <div class="col-md-12 mb-3">
                                <textarea rows="10" name="content" id="content"></textarea>
                            </div>

                            <div class="col-md-12 mb-3">

                                <p id="getfilename" style="color: red;"></p>

                                <div class="fileupload btn btn-primary btn-rounded waves-effect waves-light"><span><i class="ion-upload m-r-5"></i> selectionner image </span>
                                    <input type="file" name="file" id="file" class="upload">
                                </div>
                            </div>

                            <div id="forappend" class="col-md-12 mb-3 ">

                            </div>

                            {{csrf_field()}}
                            <div class="col-md-6 mb-3">
                                <button id="canaction"  class="addabout  btn btn-info waves-effect">ajouter</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-6" >
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">A propos</h4>
                    <h6 class="card-subtitle"></h6>
                    <div class="table-responsive" id="list_articles">
                        <table id="demo-foo-addrow" class="table table-bordered m-t-30 table-hover contact-list" data-paging="true" data-paging-size="7">
                            <thead>
                            <tr>
                                <th>Titre</th>
                                <th>contenu</th>
                                <th>image</th>
                                <!--<th>commentaires</th>-->
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody >
                            @foreach($abouts as $about)
                                <tr>
                                    <td>{{$about->title}} </td>
                                    <td>
                                        <div style="width: 150px; overflow:hidden;">
                                            {{ str_limit(strip_tags($about->content), 100) }}
                                        </div>

                                    </td>

                                    <td>
                                        @if(Storage::disk('local')->has('About',$about->file))

                                            <div class="col-md-6 col-lg-6">

                                                <img class="img-responsive" src="{{route('get.files',['folder'=>'About','filename'=>$about->file])}}" alt="">

                                            </div>

                                        @endif
                                    </td>

                                    <td>

                                        <a style="color: white; display: inline-block" data-id="{{$about->id}}" class="btn btn-primary editer_article" data-title="{{$about->title}}"   data-content="{{$about->content}}">Editer</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End PAge Content -->
    <!-- ============================================================== -->
@endsection

@section('specified_script')

    @include('AdminPanel.javascript.About.add')

    <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
    <script>tinymce.init({selector:'textarea'});</script>

    <script>

        $(document).on("click", ".editer_article", function () {

            var myBookId = $(this).data('title');

            var idd = $(this).data('id');

            var content = $(this).data('content');


            tinyMCE.activeEditor.setContent(content);


            $('#forappend').empty().prepend('<input id="article__id" name="articleup" type="hidden" value="">');

            document.getElementById("article__id").value = idd;

            $(".forabout #title").val(myBookId);

            $(".forabout #content").val(content);


            $(".forabout #canaction").text("modifier");

        });

        $(document).ready(function(){

            $('input[type="file"]').change(function(e){

                var fileName = e.target.files[0].name;

                $(".forabout #getfilename").text('le fichier "' + fileName +  '" a été selectionné avec succès.');

            });
        });
    </script>
@endsection