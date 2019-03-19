@extends('layouts.front')

@section('content')
<div class="row">
<div class="col-md-3 col-sm-3 col-xs-12">
        <div class="x_panel">
                  <div class="x_title">
                    <h4> <i class="fa fa-group fa-fw"></i> View Voters by Barangay
                    </h4>
                    <div class="clearfix"></div>
                  </div>
                <div class="x_content"> 
                <?php 
                            $brgy = array ('Acad','Alang-alang','Alegria','Anonang','Bag-ong Mandaue','Bag-ong Maslog','Bag-ong Oslob','Bag-ong Pitogo','Baki','Balas','Balide'
                            ,'Balintawak','Bayabas','Bemposa','Cabilinan','Campo Uno','Ceboneg','Commonwealth','Gubaan','Inasagan','Inroad','Kahayagan East','Kahayagan West','Kauswagan','La Paz','La Victoria','Lantungan'
                            ,'Libertad','Lintugop','Lubid','Maguikay','Mahayahay','Monte Alegre','Montela','Napo','Panaghiusa','Poblacion','Resthouse','Romarate','San Jose','San Juan','Sapa Luboc','Tagolalo','Waterfall');
                            foreach($brgy as $br) {
                                echo "<a href='/leaders/".$br."' class='list-group-item'>".$br."</a>";
                            }
                            ?>  
                </div> <!--end x_content-->
         </div><!--end x_panel-->
    </div><!--end col-->
    <div class="col-md-8 col-sm-8 col-xs-8">
        <div class="x_panel">
                  <div class="x_title">
                    <h4><i class="fa fa-group fa-fw"></i>List of Leaders ( {{$NumVoters}} )
                    </h4>
                    <div class="clearfix"></div>
                  </div>
                <div class="x_content">   
                <table class="table">
                            <tr>  
                                <td>Full Name </td>
                                <td>@sortablelink('brgy', 'Barangay')</td>
                                <td>@sortablelink('precinct', 'Precinct')</td>
                                <td>@sortablelink('position', 'Position')</td>
                                <td>Status</td>
                                <td>Action</td>
                            </tr>
                            @forelse($voters as $voter)
                            <tr>
                                <td><a href="/member/{{ $voter->brgy }}/{{ $voter->id }}">{{ $voter->fname }} {{ $voter->lname }}</a></td>
                                <td><a href="/brgy/{{ $voter->brgy }}">{{ $voter->brgy }}</a></td>
                                <td>{{ $voter->precinct }}</td>
                                <td>{{ $voter->position }}</td>
                                <td>{{ $voter->status }}</td>
                                <td>
                                <?php if($voter->position == "Leader"){
                                        ?>
                                        <a  class="btn btn-default" href="/voters/rmleader/{{ $voter->id }}"><i class="fa  fa-times fa-fw"></i>Remove Leader</a>
                                        <?php
                                    }
                                    else {
                                        ?>
                                        <a  class="btn btn-primary" href="/voters/leader/{{ $voter->id }}"><i class="fa  fa-plus fa-fw"></i>Make Leader</a>
                                        <?php
                                    }
                                    
                                    ?>
                                    <a  class="btn btn-success" href="/voters/edit/{{ $voter->id }}"><i class="fa  fa-pencil fa-fw"></i>Edit</a>
                                    <!-- <a  class="btn btn-info" href="/voters/{{ $voter->id }}"><i class="fa fa-search fa-fw"></i> View</a> -->
                                    <a  class="btn btn-danger" role="button" href="/voters/delete/{{ $voter->id }}" onclick="return confirm('Are you sure you want to delete this Registrant?')"><i class="fa  fa-times fa-fw"></i>Delete</a>
                                </td>
                            </tr>
                            @empty
                            @endforelse
                        </table>
                        <div>{{ $voters->links() }}</div>
                </div> <!--end x_content-->
         </div><!--end x_panel-->
    </div><!--end col-->
</div><!--end row-->

<div id="myModal" class="modal fade" role="dialog">
  		<div class="modal-dialog">
  			<!-- Modal content-->
  			<div class="modal-content">
  				<div class="modal-header">
  					<button type="button" class="close" data-dismiss="modal">&times;</button>
  					<h4 class="modal-title"></h4>
  				</div>
  				<div class="modal-body">
  					<form class="form-horizontal" role="form">
                      {{ csrf_field() }}
  						<div class="form-group">
  							<label class="control-label col-sm-2" for="id">ID:</label>
  							<div class="col-sm-10">
  								<input type="text" class="form-control" id="fid" disabled>
  							</div>
  						</div>
  						<div class="form-group">
  							<label class="control-label col-sm-2" for="user_name" >Name:</label>
  							<div class="col-sm-10">
  								<input type="text" class="form-control" id="useredit_name" >
  							</div>
                <label class="control-label col-sm-2" for="user_email" >Email:</label>
  							<div class="col-sm-10">
  							
                  <input type="text" class="form-control" id="useredit_email">
  							</div>
                <label class="control-label col-sm-2" for="supplier_name" >Password:</label>
  							<div class="col-sm-10">
  							
                <input type="text" class="form-control" id="useredit_pass">
  							</div>
                <label class="control-label col-sm-2" for="supplier_name" >Usertype:</label>
                <div class="col-sm-10">
  							
                <select name="edit_usertype" id="useredit_usertype" class="form-control">
                    <option value="admin">Admin</option>
                    <option value="cashier">Cashier</option>
                    <option value="checker">Checker</option>
                </select>
  							</div>
               
                                   
              </div>
            
  					</form>
  					<div class="deleteContent">
  						Are you Sure you want to delete <span class="dname"></span> ? <span
  							class="hidden did"></span>
  					</div>
            <div class="errorContent">
  						There is a problem in adding user account. Please check the details correctly..
  					</div>
  					<div class="modal-footer">
  						<button type="button" class="btn actionBtn" data-dismiss="modal">
  							<span id="footer_action_button" class='glyphicon'> </span>
  						</button>
  						<button type="button" class="btn btn-warning" data-dismiss="modal">
  							<span class='glyphicon glyphicon-remove'></span> Close
  						</button>
  					</div>
  				</div>
  			</div>
		  </div>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
    </div>

<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('build/js/voters.js') }}"></script>
<!-- /main -->
@endsection