@extends('layouts.admin')

@section('content')
    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->
    <div class="row" id="foot">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Ajouter des articles</h4>

                    <div class="alert alert-danger print-error-msg" style="display:none">
                        <ul></ul>
                    </div>

                    <form id="addarticle" class="form-horizontal form-material" method="post" action="" enctype="multipart/form-data">
                        <div class="form-group">
                            <div class="col-md-12 mb-3">
                                <input type="text" name="title" id="title" class="form-control" placeholder="titre d'article">
                            </div>


                            <div class="col-md-12 mb-3">
                                <textarea rows="10" name="content" id="content"></textarea>
                            </div>

                            <div class="col-md-12 mb-3">
                                <div class="fileupload btn btn-primary btn-rounded waves-effect waves-light"><span><i class="ion-upload m-r-5"></i> selectionner image </span>
                                    <input type="file" name="file" id="file" class="upload">
                                </div>
                            </div>

                            <div class="col-md-12 mb-3">

                                <select id="category" name="category" class="form-control">
                                    <option value="">Selecionner category</option>

                                    @foreach($categories as $category)

                                        <option value="{{$category->id}}">{{$category->name}}</option>

                                    @endforeach

                                </select>
                            </div>

                            {{csrf_field()}}
                        </div>
                        <div class="modal-footer">
                            <button  class="addarticle btn btn-info waves-effect">ajouter</button>
                        </div>
                    </form>
                    <h4 class="card-title">Gestion des articles</h4>
                    <h6 class="card-subtitle"></h6>
                    <div class="table-responsive">
                        <table id="demo-foo-addrow" class="table table-bordered m-t-30 table-hover contact-list" data-paging="true" data-paging-size="7">
                            <thead>
                            <tr>
                                <th>Titre</th>
                                <th>contenu</th>
                                <th>category</th>
                                <th>image</th>
                                <th>commentaires</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody id="list_articles">
                            @foreach($articles as $article)
                                <tr>
                                    <td>{{$article->title}} </td>
                                    <td>{!!$article->content !!}</td>
                                    <td>{{$article->category->name}}</td>
                                    <td>
                                        @if(Storage::disk('local')->has('Article',$article->file))


                                            <div class="col-md-4 col-lg-4">

                                                <img class="img-responsive" src="{{route('get.files',['folder'=>'Article','filename'=>$article->file])}}" alt="">

                                            </div>

                                        @endif
                                    </td>
                                    <td>
                                        @if($article->comments)
                                            <a href="{{URL::route('admin.articles.comments',$article->id)}}" class="btn btn-primary">
                                                <i class="md  md-mode-comment">{{$article->comments()->count()}}</i>
                                            </a>
                                        @endif
                                    </td>
                                    <td>
                                        <a id="{{$article->id}}" class="btn btn-danger delete_article" data-id="{{$article->id}}"  data-token="{{csrf_token()}}"><i class="fa fa-trash"></i></a>
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

    <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
    <script>tinymce.init({selector:'textarea'});</script>





@endsection