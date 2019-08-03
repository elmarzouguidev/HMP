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
        @endsection
        @section('specified_script')
        @include('AdminPanel.javascript.Project.add') 
        
        @endsection