@extends('layouts.admin')

@section('content')
    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->
    <div class="row" id="foot">
        <div class="col-lg-4" >
            <div class="card">
                <div class="card-body" id="ajouter_categorie">
                    <h4 class="card-title">ajouter une categorie</h4>

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
                    <form id="addcategorie" class="forste form-horizontal form-material" method="post" action="">
                        <div class="form-group">
                            <div class="col-md-12 mb-3">
                                <input type="text" name="name" id="name" value="" class="form-control" placeholder="nom de categorie ">
                            </div>

                            <div class="col-md-12 mb-3">
                                <label for="types">selecionner le type de cette categorie</label>
                                <select id="types" name="types" class="form-control">

                                        <option value=""></option>
                                        <option value="Article">Article</option>
                                        <option value="Project">Project</option>

                                </select>
                            </div>
                        
                            {{csrf_field()}}
                            <div class="col-md-6 mb-3">
                                <button id="canaction"  class="addcate  btn btn-info waves-effect">ajouter</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-8" >
            <div class="card">
                <div class="card-body">
            <h4 class="card-title">Gestion des categories</h4>
                    <h6 class="card-subtitle"></h6>
                    <div class="table-responsive" id="list_categories">
                        <table id="demo-foo-addrow" class="table table-bordered m-t-30 table-hover contact-list" data-paging="true" data-paging-size="7">
                            <thead>
                            <tr>
                                <th>Nom</th>
                                <th>Slug</th>
                                <th>Type</th>
                                <th>Action</th>
                               
                            </tr>
                            </thead>
                            <tbody >
                            @foreach($categories as $categorie)
                                <tr>
                                    <td>{{$categorie->name}} </td>
                                    <td>{{$categorie->slug}} </td>
                                    <td>{{$categorie->type}} </td>
                                  
                                    <td>
                                        <form style="color: white; display: inline-block"  class="form-horizontal row-fluid" method="post" action="{{route('admin.categories.delete')}}">
                                            {{csrf_field()}}
                                            <input type="hidden" name="_method" value="delete" />
                                            <input type="hidden"  name="deleted" value="{{$categorie->id}}"  class="span8">
                                        
                                            <button type="submit" class="btn btn-danger" onclick="return confirm('voulez-vous vraiment supprimer cette categorie')">Supprimer </button>
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

@include('AdminPanel.javascript.Category.add')

@endsection