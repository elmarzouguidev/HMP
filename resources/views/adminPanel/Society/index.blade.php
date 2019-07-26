@extends('layouts.admin')

@section('content')
    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->
    <div class="row" id="foot">
        <div class="col-lg-4" >
            <div class="card">
                <div class="card-body" id="ajouter_ste">
                    <h4 class="card-title">Ajouter/Modifier une Société</h4>

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
                    <form id="addste" class="forste form-horizontal form-material" method="post" action="" enctype="multipart/form-data">
                        <div class="form-group">
                            <div class="col-md-12 mb-3">
                                <input type="text" name="ice" id="ice" value="" class="form-control" placeholder="ice de la société ">
                            </div>
                           
                            <div class="col-md-12 mb-3">
                                <input type="text" name="email" id="email" value="" class="form-control" placeholder="email de la société ">
                            </div>

                            <div class="col-md-12 mb-3">
                                <input type="text" name="tele" id="tele" value="" class="form-control" placeholder="telephone de la société ">
                            </div>
                            <div class="col-lg-12 mb-3">
                               <!-- <textarea rows="10" cols="60" name="description" id="description"></textarea>-->
                            </div>
                            <div class="col-md-12 mb-3">
                                <input type="text" name="socialmedia" id="socialmedia" value="" class="form-control" placeholder="exemple: facebook ">
                            </div>
                            <div class="col-md-12 mb-3">

                                <p id="getfilename" style="color: blue;"></p>

                                <div class="fileupload btn btn-primary btn-rounded waves-effect waves-light"><span><i class="ion-upload m-r-5"></i> selectionner image </span>
                                    <input type="file" name="file" id="file" class="upload">
                                </div>
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
            <h4 class="card-title">Gestion des societes</h4>
                    <h6 class="card-subtitle"></h6>
                    <div class="table-responsive" id="list_ste">
                        <table id="demo-foo-addrow" class="table table-bordered m-t-30 table-hover contact-list" data-paging="true" data-paging-size="7">
                            <thead>
                            <tr>
                                <th>ICE</th>
                                <th>email</th>
                                <th>reseaux social</th>
                                <th>telephone</th>
                               <!-- <th>description</th>-->
                                <th>image</th>
                                <!--<th>commentaires</th>-->
                                <th>Action</th>
                                <th>Attacher des images</th>
                            </tr>
                            </thead>
                            <tbody >
                            @foreach($societies as $societie)
                                <tr>
                                    <td>{{$societie->ice}} </td>
                                    <td>{{$societie->email}} </td>
                                    <td>{{$societie->socialmedia}} </td>
                                    <td>{{$societie->tele}} </td>
                                  <!--  <td></td>-->
                                    <td>
                                        @if(Storage::disk('local')->has('Society',$societie->files))


                                            <div class="col-md-6 col-lg-6">

                                                <img class="img-responsive" src="{{route('get.files',['folder'=>'Society','filename'=>$societie->files])}}" alt="">

                                            </div>

                                        @endif
                                    </td>

                                    <td>

                                        <a style="color: white; display: inline-block" data-id="{{$societie->id}}" class="btn btn-primary editer_article" data-title="{{$societie->title}}" >Editer</a>

                                        <form style="color: white; display: inline-block"  class="form-horizontal row-fluid" method="post" action="{{route('admin.societies.delete')}}">
                                            {{csrf_field()}}
                                            <input type="hidden" name="_method" value="delete" />
                                            <input type="hidden"  name="deleted" value="{{$societie->id}}"  class="span8">
                                            <button type="submit" class="btn btn-danger" onclick="return confirm('voulez-vous vraiment supprimer cet ste')">Supprimer </button>
                                        </form>
                                      
                                    </td>
                                    <td>
                                        <form class="addfiletoste" style="color: white; display: inline-block"  class="form-horizontal row-fluid" method="post" action="{{route('admin.societies')}}" enctype="multipart/form-data">
                                            {{csrf_field()}}
                                            <div class="fileupload btn btn-primary btn-rounded waves-effect waves-light"><span><i class="ion-upload m-r-5"></i> selectionner image </span>
                                                <input name="_method" type="hidden" value="PUT">
                                                <input type="file" name="file" id="fileste" class="upload" multiple>
                                                
                                            </div>
                                            <div id="addinput" class="col-md-12 mb-3 ">

                                            </div>
                                           
                                        </form>
                                        <a style="color: white; display: inline-block" data-id="{{$societie->id}}" class="btn btn-primary attachedfile" data-ste="{{$societie->ice}}" >uploader</a>
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

    @include('AdminPanel.javascript.Society.add')

    <script>

        $('#foot').click(function() {

          //  $("#addarticle")[0].reset();

        });

        $(document).ready(function(){

            $('#file').change(function(e){

                var fileName = e.target.files[0].name;

                $(".forste #getfilename").text('le fichier "' + fileName +  '" a été selectionné avec succès.');

            });
        });



/***attache file ***/


$(document).on("click", ".attachedfile", function () {

var steid = $(this).data('id');

var stename = $(this).data('ste');

console.log(steid);
console.log(stename);

$('.addfiletoste #addinput').empty();

$('.addfiletoste #addinput').prepend('<input id="steattach" name="steattach" type="hidden" value="">');
$('.addfiletoste #addinput').prepend('<input id="attach" name="attach" type="hidden" value="">');

$(".addfiletoste #steattach").val(stename);
$(".addfiletoste #attach").val(steid);


});
    </script>

@endsection