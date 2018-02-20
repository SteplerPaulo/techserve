<div class="row" ng-controller="DashboardController" ng-init="initializeController()">
	<div class="col-lg-10 col-lg-offset-1">
		<div class="row">			
			<div class="col-lg-2">
				<img src="img/employess/staff.png" width="150px" class="img-thumbnail"/>
				<br/><br/>
				<div><i class="fa fa-home"></i> 415-555-1237 ext. 123</div>
				<div><i class="fa fa-phone-square"></i> 415-555-8965</div>
				<div><i class="fa fa-envelope"></i> charlote@gmail.com</div>
				<hr/>
				<div class="text-success"><b>Hire Date</b></div>
				<div>August 10, 2011</div>
				<div>Sy-1m-19d</div>
				<hr/>
				<div><i class="fa fa-user"></i> <sup>#</sup> 1</div>
				<div><i class="fa fa-gavel"></i> Full Time</div>
				<div><i class="fa fa-users"></i> HR</div>
				<div><i class="fa fa-map-marker"></i> San Francisco Cali...</div>
			</div>
			<div class="col-lg-10">
				<div class="row">
					<div class="col-lg-4">	
						<h2>Charlote Danielle Abbott</h2>
						HR Staff
					</div>
					<div class="col-lg-8">	
						<div class="btn-group pull-right" >
							<button type="button" class="btn btn-primary">Personal</button>
							<div class="btn-group">
								<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
									Application <span class="caret"></span>
								</button>
								<ul class="dropdown-menu" role="menu">
									<li><a href="#">OT</a></li>
									<li><a href="#">Leave</a></li>
									<li><a href="#">Undertime</a></li>
									<li><a href="#">Change Shift</a></li>
									<li><a href="#">Force Leave</a></li>
								</ul>
							</div>
							<div class="btn-group">
								<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
									Attendance <span class="caret"></span>
								</button>
								<ul class="dropdown-menu" role="menu">
									<li><a href="#">Time IN/OUT Logs</a></li>
									<li><a href="#">DTR</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<hr/>
				<div class="row">
					<div class="col-lg-6">
						<div class="panel panel-primary">
							<div class="panel-heading">
								<div class="row">
									<div class="col-xs-3">
									   <img src="img/vacation2.png" alt="...">
									</div>
									<div class="col-xs-9">
										<div class="huge">Vacation Leave</div>
										<div>Days available: 0.4 Days Scheduled</div>
									</div>
								</div>
							</div>
							<a href="#">
								<div class="panel-footer">
									<span class="pull-left">View Details</span>
									<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
									<div class="clearfix"></div>
								</div>
							</a>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="panel panel-green">
							<div class="panel-heading">
								<div class="row">
									<div class="col-xs-3">
									   <img src="img/sick2.png" alt="...">
									</div>
									<div class="col-xs-9">
										<div class="huge">Sick Leave</div>
										<div>Hours available: 16 Hours Schedule</div>
										<div></div>
									</div>
								</div>
							</div>
							<a href="#">
								<div class="panel-footer">
									<span class="pull-left">View Details</span>
									<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
									<div class="clearfix"></div>
								</div>
							</a>
						</div>
					</div>
					
				</div>
				<div class="row">
					<div class="col-lg-12">
						<a href="javascript:void()"><i class="fa fa-history"></i> History</a>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-2">
						<select class="form-control input-sm">
							<option ng-repeat="d in types">{{d.name}}</option>
						</select>
					</div>
					<div class="col-lg-2">
						<select class="form-control input-sm">
							<option  ng-repeat="d in years">{{d.name}}</option>
						</select>
					</div>
					<div class="col-lg-6 col-lg-offset-2 text-right">
						<label>Show:</label>
						<a href="javascript:void()">Earned/Used</a> | Request
					</div>
				</div><br/>
				<div class="row">
					<div class="col-lg-12">
						<table class="table table-striped">
							<thead>
								<tr>
									<th>Date</th>
									<th>Description</th>
									<th>Submitted</th>
									<th>Status</th>
									<th>(-)</th>
								</tr>
							</thead>
							<tbody>
								<tr pagination-id="DataTable" dir-paginate="d in data | itemsPerPage: pageSize" current-page="currentPage">
									<td>{{d.date}}</td>
									<td>{{d.description}}<br/><a href="javascript:void()"> See Comments (0)</a></td>
									<td>{{d.submitted}}</td>
									<td><a href="javascript:void()">{{d.status}}</a> ({{d.approver}} {{d.responsed_date}})</td>
									<td>-0.88</td>
								</tr>
							</tbody>
							<tfoot>
								<tr>
									<td colspan="7" class="text-center">
										<dir-pagination-controls pagination-id="DeliveriesListTable"></dir-pagination-controls>
									</td>
								</tr>
							</tfoot>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php echo $this->Html->script('controllers/dashboard',array('inline'=>false));?>