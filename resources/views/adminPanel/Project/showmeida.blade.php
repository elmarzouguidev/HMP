@extends('layouts.admin')

@section('content')
    <div class="row el-element-overlay">
        <div class="col-md-12">

            <h4 class="card-title">{{$project->nom}}</h4>
            <h6 class="card-subtitle mb-3 text-muted">Nom du Societe : {{$project->society->ice}}</h6> </div>
            <div class="alert alert-danger print-error-msg" style="display:none">
                    <ul></ul>
                </div>
                <div class="alert alert-primary print-success-msg" style="display:none">
                    <ul></ul>
                </div>
        @foreach ($project->galleries as $file)
        
            <div class="col-lg-3 col-md-6 photos{{$file->id}}">
                <div class="card">
                    <div class="el-card-item">

                        <div class="el-card-avatar el-overlay-1"> <img src="{{route('get.files.projects',['ste'=>$project->society->ice,'folder'=>$project->folderName,'filename'=>$file->files])}}" alt="user" />
                            <div class="el-overlay">
                                <ul class="el-info">
                                    <li><a class="btn default btn-outline image-popup-vertical-fit" href="{{route('get.files.projects',['ste'=>$project->society->ice,'folder'=>$project->folderName,'filename'=>$file->files])}}"><i class="icon-magnifier"></i></a></li>
                                    <li>
                                    <a onclick="return confirm('voulez-vous vraiment supprimer cet image')" class="btn default btn-outline deletefile" href="javascript:void(0);" data-id="{{$file->id}}">
                                            <i class="icon-trash">

                                            </i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection

@section('specified_style')

<link href="{{ asset('backend/plugins/Magnific-Popup-master/dist/magnific-popup.css') }}" rel="stylesheet">

@endsection
@section('specified_script')
@include('AdminPanel.javascript.Project.delete')
    <script src="{{ asset('backend/plugins/Magnific-Popup-master/dist/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('backend/plugins/Magnific-Popup-master/dist/jquery.magnific-popup-init.js') }}"></script>

@endsection