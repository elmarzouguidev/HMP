@extends('layouts.admin')

@section('content')
    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->
    <div class="row" id="foot">
        <div class="col-lg-4" >
            <div class="card">
                <div class="card-body" id="ajouter_ste">
                    <h4 class="card-title">ajouter un projet</h4>

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
                    <form id="addproject" class="forste form-horizontal form-material" method="post" action="" enctype="multipart/form-data">
                        <div class="form-group">
                            <div class="col-md-12 mb-3">
                                <input type="text" name="nom" id="nom" value="" class="form-control" placeholder="titre de projet ">
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="societie">description du projet</label>
                                <textarea rows="10" name="content" id="content"></textarea>
                            </div>
                            <div class="col-md-12 mb-3">
                                <input type="text" name="duree" id="duree" value="" class="form-control" placeholder="duree de projet ">
                            </div>

                            <div class="col-md-12 mb-3">
                                <input type="text" name="datedebut" id="datedebut" value="" class="form-control" placeholder="date début  ">
                            </div>

                            <div class="col-md-12 mb-3">

                                <p id="getfilename" style="color: blue;"></p>

                                <div class="fileupload btn btn-primary btn-rounded waves-effect waves-light"><span><i class="ion-upload m-r-5"></i> selectionner image </span>
                                    <input type="file" name="file" id="file" class="upload">
                                </div>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="societie">selecionner la Societe</label>
                                <select id="societie" name="societie" class="form-control">
                                    <option value=""></option>
                                    @foreach($societies as $societe)
                                        <option value="{{$societe->id}}">{{$societe->ice}}</option>
                                    @endforeach

                                </select>
                            </div>

                            <div class="col-md-12 mb-3">
                                <label for="category">Sélectionner la catégorie de ce projet</label>
                                <select id="category" name="category" class="form-control">

                                    <option value=""></option>
                                    @foreach($categories as $category)

                                        <option value="{{$category->id}}">{{$category->name}}</option>

                                    @endforeach

                                </select>
                            </div>
                            <div id="forappend" class="col-md-12 mb-3 ">

                            </div>

                            {{csrf_field()}}
                            <div class="col-md-6 mb-3">
                                <button id="canaction"  class="addste  btn btn-info waves-effect">ajouter</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-8" >
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Gestion des projets</h4>
                    <h6 class="card-subtitle"></h6>
                    <div class="table-responsive" id="list_projects">
                        <table id="demo-foo-addrow" class="table table-bordered m-t-30 table-hover contact-list" data-paging="true" data-paging-size="7">
                            <thead>
                            <tr>
                                <th>Nom</th>
                                <th>Description</th>
                                <th>duree</th>
                                <th>datedebut</th>
                                <th>Ste name</th>
                                <th>Categorie</th>
                                <!-- <th>description</th>-->
                                <th>gallerie</th>
                                <!--<th>commentaires</th>-->
                                <th>Action</th>

                            </tr>
                            </thead>
                            <tbody >
                            @foreach($projects as $project)
                                <tr>
                                    <td>{{$project->nom}} </td>
                                    <td>{!! str_limit(strip_tags($project->content), 100) !!}</td>
                                    <td>{{$project->duree}} </td>
                                    <td>{{$project->datedebut}} </td>
                                    <td>{{$project->society->ice}} </td>
                                    <td>{{$project->category->name}} </td>
                                    <!--  <td></td>-->
                                    <td>
                                        @if(Storage::disk('local')->has('Project',$project->file))


                                            <div class="col-md-6 col-lg-6">

                                                <img class="img-responsive" src="{{route('get.files',['folder'=>'Project','filename'=>$project->file])}}" alt="">

                                            </div>

                                        @endif
                                    </td>

                                    <td>
                                        <a style="color: white; display: inline-block" data-ste="{{$project->society->ice}}" data-id="{{$project->id}}" class="btn btn-success att_md_to_project open-AddBookDialog" data-title="{{$project->nom}}" data-toggle="modal" data-target="#add-media" >Attacher des médias</a>
                                    <a style="color: white; display: inline-block" data-id="{{$project->id}}" class="btn btn-primary editer_project" data-nom="{{$project->nom}}" data-content="{{$project->content}}" >Editer</a>

                                        <form style="color: white; display: inline-block"  class="form-horizontal row-fluid" method="post" action="{{route('admin.projects.delete')}}">
                                            {{csrf_field()}}
                                            <input type="hidden" name="_method" value="delete" />
                                            <input type="hidden"  name="deleted" value="{{$project->id}}"  class="span8">
                                            <input type="hidden"  name="deletedstename" value="{{$project->society->ice}}"  class="span8">
                                            <button type="submit" class="btn btn-danger" onclick="return confirm('voulez-vous vraiment supprimer ce projet')">Supprimer </button>
                                        </form>

                                    </td>

                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div id="add-media" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="myModalLabel">Attacher des médias</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        </div>
                        <div class="alert alert-danger printt-error-msg" style="display:none">
                            <ul></ul>
                        </div>
                        <div class="alert alert-primary printt-success-msg" style="display:none">
                            <ul></ul>
                        </div>
                        <div class="modal-body">
                            <form id="attachtoproject" class="form-horizontal form-material" method="post" action="" enctype="multipart/form-data">
                                <div class="form-group">
                                    <div class="col-md-12 mb-3">
                                        <label for="category">entrer un le lien de vedio (Optionel)</label>
                                        <input type="text" name="urlvedio" class="form-control" >
                                    </div>
                                    <input name="_method" type="hidden" value="PUT">

                                    <input id="stename" name="stename" type="hidden" value="">
                                    <input id="projectattach" name="projectattach" type="hidden" value="">
                                    <input id="attach" name="attach" type="hidden" value="">

                                    <div class="col-md-12 mb-3">
                                        <label for="category">Sélectionner des image pour attacher a ce projet</label>
                                        <div class="fileupload btn btn-danger btn-rounded waves-effect waves-light"><span><i class="ion-upload m-r-5"></i>Sélectionner </span>
                                            <input type="file" name="file" id="fileste" class="upload">
                                        </div>

                                    </div>
                                    {{csrf_field()}}
                                </div>
                                <div class="modal-footer">
                                    <button  type="submit" class="btn btn-info waves-effect">attach</button>
                                    <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Cancel</button>
                                </div>
                            </form>
                        </div>

                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End PAge Content -->
    <!-- ============================================================== -->
@endsection

@section('specified_script')
    @include('AdminPanel.javascript.Project.add')
    <script>
        $(document).on("click", ".editer_project", function () {

            var myBookId = $(this).data('nom');

            var idd = $(this).data('id');

            var content = $(this).data('content');


            tinyMCE.activeEditor.setContent(content);


            $('#forappend').empty().prepend('<input id="project__id" name="projectup" type="hidden" value="">');

            document.getElementById("project__id").value = idd;

            $(".forste #nom").val(myBookId);

            $(".forste #content").val(content);


            $(".forste #canaction").text("modifier");

        });

        $(document).on("click", ".open-AddBookDialog", function () {


            var myBookId = $(this).data('id');
            var myBooktitle = $(this).data('title');
            var myBookste = $(this).data('ste');
            $(".modal-body #projectattach").val( myBooktitle );
            $(".modal-body #attach").val( myBookId );
            $(".modal-body #stename").val( myBookste );
        });

    </script>
    <script>

        $(document).ready(function(){

            $('#file').change(function(e){

                var fileName = e.target.files[0].name;

                $("#getfilename").text('le fichier "' + fileName +  '" a été selectionné avec succès.');

            });
        });
    </script>

    <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
    <script>tinymce.init({selector:'textarea'});</script>

@endsection

