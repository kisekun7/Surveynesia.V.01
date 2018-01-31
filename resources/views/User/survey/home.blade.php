@extends('User.layouts.app')

@section('headSection')

@endsection

@section('main-content')

				
	<div class="row">
	
		<!-- Profile Info and Notifications -->
		<div class="col-md-6 col-sm-8 clearfix">
	
			<ul class="user-info pull-left pull-none-xsm">
	
				<!-- Profile Info -->
				<li class="profile-info dropdown"><!-- add class "pull-right" if you want to place this from right -->
	
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<img src="{{ asset('User/assets/images/thumb-1@2x.png')}}" alt="" class="img-circle" width="44" />
						Rajaka Kauthar Allam
					</a>
	
					<ul class="dropdown-menu">
	
						<!-- Reverse Caret -->
						<li class="caret"></li>
	
						<!-- Profile sub-links -->
						<li>
							<a href="extra-timeline.html">
								<i class="entypo-user"></i>
								Edit Profile
							</a>
						</li>
	
						<li>
							<a href="mailbox.html">
								<i class="entypo-mail"></i>
								Inbox
							</a>
						</li>
	
						<li>
							<a href="extra-calendar.html">
								<i class="entypo-calendar"></i>
								Calendar
							</a>
						</li>
	
						<li>
							<a href="#">
								<i class="entypo-clipboard"></i>
								Tasks
							</a>
						</li>
					</ul>
				</li>
	
			</ul>
			
			<ul class="user-info pull-left pull-right-xs pull-none-xsm">
	
				<!-- Raw Notifications -->
				<li class="notifications dropdown">
	
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
						<i class="entypo-attention"></i>
						<span class="badge badge-info">6</span>
					</a>
	
					<ul class="dropdown-menu">
						<li class="top">
							<p class="small">
								<a href="#" class="pull-right">Mark all Read</a>
								You have <strong>3</strong> new notifications.
							</p>
						</li>
						
						<li>
							<ul class="dropdown-menu-list scroller">
								<li class="unread notification-success">
									<a href="#">
										<i class="entypo-user-add pull-right"></i>
										
										<span class="line">
											<strong>New user registered</strong>
										</span>
										
										<span class="line small">
											30 seconds ago
										</span>
									</a>
								</li>
								
								<li class="unread notification-secondary">
									<a href="#">
										<i class="entypo-heart pull-right"></i>
										
										<span class="line">
											<strong>Someone special liked this</strong>
										</span>
										
										<span class="line small">
											2 minutes ago
										</span>
									</a>
								</li>
								
								<li class="notification-primary">
									<a href="#">
										<i class="entypo-user pull-right"></i>
										
										<span class="line">
											<strong>Privacy settings have been changed</strong>
										</span>
										
										<span class="line small">
											3 hours ago
										</span>
									</a>
								</li>
								
								<li class="notification-danger">
									<a href="#">
										<i class="entypo-cancel-circled pull-right"></i>
										
										<span class="line">
											John cancelled the event
										</span>
										
										<span class="line small">
											9 hours ago
										</span>
									</a>
								</li>
								
								<li class="notification-info">
									<a href="#">
										<i class="entypo-info pull-right"></i>
										
										<span class="line">
											The server is status is stable
										</span>
										
										<span class="line small">
											yesterday at 10:30am
										</span>
									</a>
								</li>
								
								<li class="notification-warning">
									<a href="#">
										<i class="entypo-rss pull-right"></i>
										
										<span class="line">
											New comments waiting approval
										</span>
										
										<span class="line small">
											last week
										</span>
									</a>
								</li>
							</ul>
						</li>
						
						<li class="external">
							<a href="#">View all notifications</a>
						</li>
					</ul>
	
				</li>
	
				<!-- Message Notifications -->
				<li class="notifications dropdown">
	
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
						<i class="entypo-mail"></i>
						<span class="badge badge-secondary">10</span>
					</a>
	
					<ul class="dropdown-menu">
						<li>
							<form class="top-dropdown-search">
								
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Search anything..." name="s" />
								</div>
								
							</form>
							
							<ul class="dropdown-menu-list scroller">
								<li class="active">
									<a href="#">
										<span class="image pull-right">
											<img src="{{ asset('User/assets/images/thumb-1@2x.png')}}" width="44" alt="" class="img-circle" />
										</span>
										
										<span class="line">
											<strong>Luc Chartier</strong>
											- yesterday
										</span>
										
										<span class="line desc small">
											This ain’t our first item, it is the best of the rest.
										</span>
									</a>
								</li>
								
								<li class="active">
									<a href="#">
										<span class="image pull-right">
											<img src="{{ asset('User/assets/images/thumb-2@2x.png')}}" width="44" alt="" class="img-circle" />
										</span>
										
										<span class="line">
											<strong>Salma Nyberg</strong>
											- 2 days ago
										</span>
										
										<span class="line desc small">
											Oh he decisively impression attachment friendship so if everything. 
										</span>
									</a>
								</li>
								
								<li>
									<a href="#">
										<span class="image pull-right">
											<img src="{{ asset('User/assets/images/thumb-3@2x.png')}}" width="44" alt="" class="img-circle" />
										</span>
										
										<span class="line">
											Hayden Cartwright
											- a week ago
										</span>
										
										<span class="line desc small">
											Whose her enjoy chief new young. Felicity if ye required likewise so doubtful.
										</span>
									</a>
								</li>
								
								<li>
									<a href="#">
										<span class="image pull-right">
											<img src="{{ asset('User/assets/images/thumb-4@2x.png')}}" width="44" alt="" class="img-circle" />
										</span>
										
										<span class="line">
											Sandra Eberhardt
											- 16 days ago
										</span>
										
										<span class="line desc small">
											On so attention necessary at by provision otherwise existence direction.
										</span>
									</a>
								</li>
							</ul>
						</li>
						
						<li class="external">
							<a href="mailbox.html">All Messages</a>
						</li>
					</ul>
	
				</li>
	
				<!-- Task Notifications -->
				<li class="notifications dropdown">
	
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
						<i class="entypo-list"></i>
						<span class="badge badge-warning">1</span>
					</a>
	
					<ul class="dropdown-menu">
						<li class="top">
							<p>You have 6 pending tasks</p>
						</li>
						
						<li>
							<ul class="dropdown-menu-list scroller">
								<li>
									<a href="#">
										<span class="task">
											<span class="desc">Procurement</span>
											<span class="percent">27%</span>
										</span>
									
										<span class="progress">
											<span style="width: 27%;" class="progress-bar progress-bar-success">
												<span class="sr-only">27% Complete</span>
											</span>
										</span>
									</a>
								</li>
								<li>
									<a href="#">
										<span class="task">
											<span class="desc">App Development</span>
											<span class="percent">83%</span>
										</span>
										
										<span class="progress progress-striped">
											<span style="width: 83%;" class="progress-bar progress-bar-danger">
												<span class="sr-only">83% Complete</span>
											</span>
										</span>
									</a>
								</li>
								<li>
									<a href="#">
										<span class="task">
											<span class="desc">HTML Slicing</span>
											<span class="percent">91%</span>
										</span>
										
										<span class="progress">
											<span style="width: 91%;" class="progress-bar progress-bar-success">
												<span class="sr-only">91% Complete</span>
											</span>
										</span>
									</a>
								</li>
								<li>
									<a href="#">
										<span class="task">
											<span class="desc">Database Repair</span>
											<span class="percent">12%</span>
										</span>
										
										<span class="progress progress-striped">
											<span style="width: 12%;" class="progress-bar progress-bar-warning">
												<span class="sr-only">12% Complete</span>
											</span>
										</span>
									</a>
								</li>
								<li>
									<a href="#">
										<span class="task">
											<span class="desc">Backup Create Progress</span>
											<span class="percent">54%</span>
										</span>
										
										<span class="progress progress-striped">
											<span style="width: 54%;" class="progress-bar progress-bar-info">
												<span class="sr-only">54% Complete</span>
											</span>
										</span>
									</a>
								</li>
								<li>
									<a href="#">
										<span class="task">
											<span class="desc">Upgrade Progress</span>
											<span class="percent">17%</span>
										</span>
										
										<span class="progress progress-striped">
											<span style="width: 17%;" class="progress-bar progress-bar-important">
												<span class="sr-only">17% Complete</span>
											</span>
										</span>
									</a>
								</li>
							</ul>
						</li>
						
						<li class="external">
							<a href="#">See all tasks</a>
						</li>
					</ul>
	
				</li>
	
			</ul>
	
		</div>
	
	
		<!-- Raw Links -->
		<div class="col-md-6 col-sm-4 clearfix hidden-xs">
	
			<ul class="list-inline links-list pull-right">
	
	
				<li class="sep"></li>
	
				<li>
					<a href="extra-login.html">
						Log Out <i class="entypo-logout right"></i>
					</a>
				</li>
			</ul>
	
		</div>
	
	</div>
		
<hr />
		
<h2>Survey <a href="javascript:;" id="AddNew"  onclick="jQuery('#modal-6').modal('show', {backdrop: 'static'});" class="btn btn-info">+ Create Survey</a> </h2>
		

		<br />
		
		<div class="row">
			<div class="col-md-12">
				
				<table class="table table-bordered responsive">
					<thead>
						<tr>
							<th width="35%">Title</th>
							<th style="text-align: center">Modified</th>
							<th style="text-align: center">Responses</th>
							<th style="text-align: center">Analyze</th>
							<th style="text-align: center">Review</th>
						</tr>
					</thead>
					<tbody>
						@foreach($survey as $surveys)
						<tr>
							<td class="ourItem">{{$surveys->survey_title}} <span class="label label-success">Active</span></td>
							<td align="center">{{$surveys->created_at}}</td>
							<td align="center">0</td>
							<td align="center"><i class="entypo-chart-bar"></i></td>
							<td align="center"><i class="entypo-dot-3"></i></td>
						</tr>
						@endforeach
					</tbody>
				</table>
				
			</div>
		</div>

<!-- Modal 6 (Long Modal)-->
	<div class="modal fade" id="modal-6">
		<div class="modal-dialog">
			<div class="modal-content">
				
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title" id="title">New Survey</h4>
				</div>
				
				<div class="modal-body" id="survey">
				
					<div class="row">
						<div class="col-md-12">
							
							<div class="form-group">
								<label for="survey_title" class="control-label">Survey</label>
								<input type="hidden" class="form-control" id="code_survey" value="{{$codesurvey}}">
								<input type="text" class="form-control" id="survey_title" placeholder="Write your new survey">
							</div>	
							
						</div>
					</div>

					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label for="category_id" class="control-label">Category</label>
									<select class="form-control" id="category_id">
										<option value=""></option>
										<option value="1">Game</option>
										<option value="2">Politic</option>
										<option value="3">Industry</option>
										<option value="4">Fiction</option>
									</select>
							</div>	
							
						</div>
					</div>
				
					<div class="row">
						<div class="col-md-12">
							
							<div class="form-group">
								<label for="description" class="control-label">Description</label>
								
								<textarea class="form-control autogrow" style="height: 200px;" id="description" placeholder="Write your survey description"></textarea>
							</div>	
							
						</div>
					</div>
				
				</div>
				
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-info" id="AddButton">Create</button>
				</div>
			</div>
		</div>
	</div>

@endsection

@section('footerSection')
{{ csrf_field()}}
<script>
	$(document).ready(function() {
		$('.ourItem').each(function() {
			$(this).click(function(event) {
				var text = $(this).text();
				$('#addItem').val(text);
				console.log(text);
			});
		});
		$('#addNew').click(function(event) {
			$('#title').text('New Survey');
			$('#test').val("");
			$('#AddButton').show('400');
		});
		$('#AddButton').click(function(event){
			var text = $('#survey_title').val();
			var text2 = $('#category_id').val();
			var text3 = $('#description').val();
			var text4 = $('#code_survey').val();
			$.post('survey', {'text': text,text2,text3,text4,'_token':$('input[name=_token]').val()}, function(data) {
			console.log(data);
			document.location.href="{{url('survey')}}/"+data.id+"/question";
			});
		});
	});
</script>
@endsection