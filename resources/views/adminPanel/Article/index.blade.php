@extends('layouts.admin')

@section('content')
    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->
    <div class="row" id="foot">
        <div class="col-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Ajouter un article</h4>

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
                    <form id="addarticle" class="forarticle form-horizontal form-material" method="post" action="" enctype="multipart/form-data">
                        <div class="form-group">
                            <div class="col-md-12 mb-3">
                                <input type="text" name="title" id="title" value="" class="form-control" placeholder="titre d'article">
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

                            <div class="col-md-12 mb-3">

                                <select id="category" name="category" class="form-control">

                                    <option value="">Sélectionner une catégorie</option>
                                    @foreach($categories as $category)

                                        <option value="{{$category->id}}">{{$category->name}}</option>

                                    @endforeach

                                </select>
                            </div>

                            <div id="forappend" class="col-md-12 mb-3 ">

                            </div>

                            {{csrf_field()}}
                            <div class="col-md-6 mb-3">
                                <button id="canaction"  class="addarticle  btn btn-info waves-effect">ajouter</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
        <div class="col-6" >
            <div class="card">
                <div class="card-body">
            <h4 class="card-title">Gestion des articles</h4>
                    <h6 class="card-subtitle"></h6>
                    <div class="table-responsive" id="list_articles">
                        <table id="demo-foo-addrow" class="table table-bordered m-t-30 table-hover contact-list" data-paging="true" data-paging-size="7">
                            <thead>
                            <tr>
                                <th>Titre</th>
                                <th>contenu</th>
                                <th>category</th>
                                <th>image</th>
                                <!--<th>commentaires</th>-->
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody >
                            @foreach($articles as $article)
                                <tr>
                                    <td>{{$article->title}} </td>
                                    <td>
                                        <div style="width: 150px; overflow:hidden;">
                                            {{ str_limit(strip_tags($article->content), 100) }}
                                        </div>

                                    </td>
                                    <td>{{$article->category->name}}</td>
                                    <td>
                                        @if(Storage::disk('local')->has('Article',$article->file))


                                            <div class="col-md-4 col-lg-4">

                                                <img class="img-responsive" src="{{route('get.files',['folder'=>'Article','filename'=>$article->file])}}" alt="">

                                            </div>

                                        @endif
                                    </td>

                                    <td>

                                        <a style="color: white; display: inline-block" data-id="{{$article->id}}" class="btn btn-primary editer_article" data-title="{{$article->title}}" data-category ="{{$article->category->name}}"  data-content="{{$article->content}}">Editer</a>

                                        <form style="color: white; display: inline-block"  class="form-horizontal row-fluid" method="post" action="{{route('admin.articles.delete')}}">
                                            {{csrf_field()}}
                                            <input type="hidden" name="_method" value="delete" />
                                            <input type="hidden"  name="deleted" value="{{$article->id}}"  class="span8">
                                            <button type="submit" class="btn btn-danger" onclick="return confirm('voulez-vous vraiment supprimer cet article')">Supprimer </button>
                                        </form>
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

    @include('AdminPanel.javascript.Article.add')

    <script>

        $('#foot').click(function() {

          //  $("#addarticle")[0].reset();

        });

        $(document).ready(function(){

            $('input[type="file"]').change(function(e){

                var fileName = e.target.files[0].name;

                $(".forarticle #getfilename").text('le fichier "' + fileName +  '" a été selectionné avec succès.');

            });
        });

        $(document).on("click", ".editer_article", function () {

            var myBookId = $(this).data('title');

            var idd = $(this).data('id');

            var content = $(this).data('content');


            tinyMCE.activeEditor.setContent(content);


            $('#forappend').empty().prepend('<input id="article__id" name="articleup" type="hidden" value="">');

            document.getElementById("article__id").value = idd;

            $(".forarticle #title").val(myBookId);

            $(".forarticle #content").val(content);


            $(".forarticle #canaction").text("modifier");

        });


    </script>


    <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
    <script>tinymce.init({selector:'textarea'});</script>





@endsection