@extends('layouts.front')

@section('content')
<script src="{{ asset('build/js/check.js') }}"></script>

<div class="row">
    
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
                  <div class="x_title">
                    <h4><i class="fa fa-group fa-fw"></i>List of Voters ( {{$NumVoters}} )
                    </h4>
                    <div class="col-sm-4 ">
                    <form action="{{ route('searchvoters') }}" method="get">  
                     {{ csrf_field() }}
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search Voter... " name="q">
                            <span class="input-group-btn">
                              <button type="submit" class="btn btn-primary" style="padding:6px;">Search..</button>
                            </span>
                        </div>
                    </form>
                    </div>
                        
                    <div class="clearfix"></div>
                  </div>
                <div class="x_content"> 
                <div>{{ $voters->links() }}</div> 
                @if(Session::has('warning'))
                            <div class="alert alert-danger">
                                {{ Session::get('warning') }}
                                @php
                                Session::forget('warning');
                                @endphp
                            </div>
                @endif 
                <form action="{{ route('updatemultiplevoterside') }}" method="post"> 
                {{ csrf_field() }}
                <table class="table table-striped jambo_table bulk_action">
                            <tr>  
                                <th>
                                <script type="text/javascript">
                               
                                </script>
                                <input type="checkbox" id="checkAll" class="flat">
                                </th>
                                <td>Full Name </td>
                                <td>@sortablelink('brgy', 'Barangay')</td>
                                <td>@sortablelink('precinct', 'Precinct')</td>
                                <td>@sortablelink('position', 'Position')</td>
                                <td>Status</td>
                               
                                <td>Action</td>
                            </tr>
                            @forelse($voters as $voter)
                            <tr>
                            <td class="a-center ">
                              <input type="checkbox" class="flat checkItem" name="votersid[]" value="{{ $voter->id }}">
                            </td>
                                <td>{{ $voter->fname }} {{ $voter->lname }}</td>
                                <td><a href="/brgy/{{ $voter->brgy }}">{{ $voter->brgy }}</a></td>
                                <td><a href="/precinct/{{ $voter->precinct }}">{{ $voter->precinct }}</a></td>
                                <td>{{ $voter->position }}</td>
                                
                                <td>
                                    <?php if($voter->status == 0){
                                        echo "Undefined";
                                    }
                                    else if($voter->status == 1){
                                        echo "Supporter";
                                    }
                                    else if($voter->status == 2){
                                        echo "Opponent";
                                    }
                                    else if($voter->status == 3){
                                        echo "Yongco Supporters";
                                    }
                                    else if($voter->status == 4){
                                        echo "INC";
                                    }
                                    else if($voter->status == 5){
                                        echo "OOT";
                                    }
                                    else if($voter->status == 6){
                                        echo "DEAD";
                                    }
                                    else if($voter->status == 7){
                                        echo "Transfer";
                                    }
                                    else {
                                        echo "Not Classified";
                                    }
                                    ?>
                                </td>
                                
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
                                    
                                    <!-- <?php if($voter->status == 1){
                                        ?>
                                         <a  class="btn btn-info" href="/voters/supporter/{{ $voter->id }}"><i class="fa fa-check fa-fw"></i> Labeled as Supporter</a>
                                        <?php
                                    }
                                    else{
                                       ?>
                                       <a  class="btn btn-warning" href="/voters/opponent/{{ $voter->id }}"><i class="fa fa-ban fa-fw"></i> Labeled as Opponent</a>
                                       <?php
                                    }?>
                                    -->
                                    <a  class="btn btn-success" href="/voters/edit/{{ $voter->id }}"><i class="fa  fa-pencil fa-fw"></i>Edit</a>
                                    <!-- <a  class="btn btn-info" href="/voters/{{ $voter->id }}"><i class="fa fa-search fa-fw"></i> View</a> -->
                                    <!-- <a  class="btn btn-danger" role="button" href="/voters/delete/{{ $voter->id }}" onclick="return confirm('Are you sure you want to delete this Voter?')"><i class="fa  fa-times fa-fw"></i>Delete</a> -->
                                </td>
                            </tr>
                            @empty
                            @endforelse
                        </table>
                        <div class="row">
                        <div class="col-md-2">
                        <select class="select2_single form-control" name="voterside">
                            <option value="0">Undefined</option>
                            <option value="1">Supporter</option>
                            <option value="2">Opponent</option>
                            <option value="3">Yongco Supporters</option>
                            <option value="4">INC</option>
                            <option value="5">OOT</option>
                            <option value="6">DEAD</option>
                            <option value="7">Transfer</option>
                        </select>
                        
                        </div>
                        <div class="col-md-2">
                        
                        <button type="submit" class="btn btn-success" style="padding:6px;">Update</button>
                        </div>
                        </div>
                        
                       
                        </form>
                        <div>{{ $voters->links() }}</div>
                </div> <!--end x_content-->
         </div><!--end x_panel-->
    </div><!--end col-->
</div><!--end row-->

<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('build/js/voters.js') }}"></script>

<!-- /main -->
@endsection