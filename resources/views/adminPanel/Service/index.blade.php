@extends('layouts.admin')

@section('content')
    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->
    <div class="row" id="foot">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Ajouter/Modifier un service</h4>

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
                    <form id="addservice" class="forarticle form-horizontal form-material" method="post" action="" enctype="multipart/form-data">
                        <div class="form-group">
                            <div class="col-md-12 mb-3">
                                    <label for="title">titre de service</label>
                                <input type="text" name="title" id="title" value="" class="form-control" placeholder="">
                            </div>

                            <div class="col-md-12 mb-3">
                                    <label for="description">description du service</label>
                                <textarea rows="5"  name="description" id="description"></textarea>
                            </div>

                            <div class="col-md-12 mb-3">
                                    <label for="content">contenu du service</label>
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
                                <button id="canaction"  class="addservice  btn btn-info waves-effect">ajouter</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-12" >
            <div class="card">
                <div class="card-body">
            <h4 class="card-title">Gestion des services</h4>
                    <h6 class="card-subtitle"></h6>
                    <div class="table-responsive" id="list_articles">
                        <table id="demo-foo-addrow" class="table table-bordered m-t-30 table-hover contact-list" data-paging="true" data-paging-size="7">
                            <thead>
                            <tr>
                                <th>Titre</th>
                                <th>description</th>
                                <th>contenu</th>
                               
                                <th>image</th>
                                <!--<th>commentaires</th>-->
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody >
                            @foreach($services as $service)
                                <tr>
                                    <td>{{$service->title}} </td>
                                    <td>
                                            <div >
                                                    {!! $service->description !!}
                                                </div>

                                        <div style="">
                                            {{ str_limit(strip_tags($service->content), 100) }}
                                        </div>

                                    </td>
                                    <td>
                                        
                                            {!! str_limit(strip_tags($service->content), 100) !!}
                                      

                                    </td>
                                    <td>
                                        @if(Storage::disk('local')->has('Service',$service->file))


                                            <div class="col-md-6 col-lg-6">

                                                <img class="img-responsive" src="{{route('get.files',['folder'=>'Service','filename'=>$service->file])}}" alt="">

                                            </div>

                                        @endif
                                    </td>

                                    <td>

                                        <a style="color: white; display: inline-block" data-id="{{$service->id}}" class="btn btn-primary editer_article" data-title="{{$service->title}}"  data-content="{{$service->content}}">Editer</a>

                                        <form style="color: white; display: inline-block"  class="form-horizontal row-fluid" method="post" action="{{route('admin.services.delete')}}">
                                            {{csrf_field()}}
                                            <input type="hidden" name="_method" value="delete" />
                                            <input type="hidden"  name="deleted" value="{{$service->id}}"  class="span8">
                                            <button type="submit" class="btn btn-danger" onclick="return confirm('voulez-vous vraiment supprimer ce service')">Supprimer </button>
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

    @include('AdminPanel.javascript.Service.add')

    <script>



        $(document).ready(function(){

            $('input[type="file"]').change(function(e){

                var fileName = e.target.files[0].name;

                $(".forarticle #getfilename").text('le fichier "' + fileName +  '" a été selectionné avec succès.');

            });
        });

    </script>


    <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
    <script>tinymce.init({selector:'textarea'});</script>





@endsection