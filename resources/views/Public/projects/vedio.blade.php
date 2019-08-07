@extends('layouts.app')

@section('content')
   
		<div id="ajaxpage">

			<div class="container">
				<div class="row">
					<div class="col-md-10 col-md-offset-1">
						<div class="section-title text-center">
							<h1>Video Project</h1>
							<div>
								<span class="line"></span><span>{{$project->nom}}</span><span class="line"></span>
							</div>
						</div>
						<div class="project-media">
							<div class="row">
								<div class="col-md-12">
									<iframe src="http://player.vimeo.com/video/34234286" width="500" height="281"></iframe>
								</div>
							</div>
						</div>
						<div class="project-description">
							<div class="row">
								<div class="col-md-12">
									<div class="text-center">
										<div class="project-details">
											<h4>Project Description</h4>
											<p>
												{!! $project->content !!}
											</p>
										</div>
										<div class="project-details">

											<div class="row">
												<div class="col-md-4">
													<p class="list-info">
														<i class="fa fa-briefcase fa-lg"></i>
														<span>Client</span>
														<em>{!! $project->society->ice !!}</em>
													</p>
												</div>
												<div class="col-md-4">
													<p class="list-info">
														<i class="fa fa-calendar fa-lg"></i>
														<span>Publish on</span>
														<em>26th April, 2013</em>
													</p>
												</div>
												<div class="col-md-4">
													<p class="list-info">
														<i class="fa fa-tags fa-lg"></i>
														<span>Categorie</span>
														<em>{{$project->category ?$project->category->name : '' }}</em>
													</p>
												</div>
											</div>
										</div>
										<div class="mybutton medium">
											<a href="#"><span data-hover="External link">External link</span></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div><!-- END ROW -->
			</div><!-- END CONTAINER -->
		</div><!-- END AJAX PAGE -->
@endsection

@section('specified_script')

@endsection