@extends('layouts.front')

@section('content')
<div class="row">
        <div class="col-lg-4 col-md-5 col-sm-12 col-xs-12 hidden-print">
            <div class="x_panel">
                    <div class="x_title">
                        <h5>Voters List
                        </h5>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                    @if(Session::has('success'))
                            <div class="alert alert-success">
                                {{ Session::get('success') }}
                                @php
                                Session::forget('success');
                                @endphp
                            </div>
                    @endif
                    <table class="table">
                            <tr>  
                                <td>Full Name </td>
                                <td>Precinct</td>
                                <td>Status</td>
                                <td>Action</td>
                            </tr>
                            @forelse($voters as $voterList)
                                @foreach($voterList as $voter)
                            <tr>
                                <td>{{ $voter->fname }} {{ $voter->lname }}</td>
                                <td>{{ $voter->precinct }}</td>
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
                                <td><a  class="btn btn-info" href="/voters/memberlist/{{ $voter->id }}/{{ $leaderid }}"><i class="fa fa-plus fa-fw"></i> Add To List</a></td>
        
                            </tr>
                            @endforeach
                            @empty
                           
                            @endforelse
                        </table>
                    
                   
                    </div> <!--end x_content-->
            </div><!--end x_panel-->
        </div><!--end col-->
              <div class="col-lg-8 col-md-7 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h5>Voters List Under @foreach($leader as $leaderinfo) <strong> {{ $leaderinfo->fname}} {{ $leaderinfo->lname}} </strong> @endforeach</h5>

                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <section class="content invoice">
                    @if(Session::has('warning'))
                            <div class="alert alert-danger">
                                {{ Session::get('warning') }}
                                @php
                                Session::forget('warning');
                                @endphp
                            </div>
                @endif 
                    <table class="table">
                            <tr>  
                                <td style="width:50px;"># </td>
                                <td>Full Name </td>
                                <td>Precinct</td>
                                <td>Status</td>
                                <td class="hidden-print">Action</td>
                            </tr>
                            <?php $num =1; ?>
                            @forelse($members as $member)
                            <tr>
                                <td>{{$num}}</td>
                                <td>{{ $member->voters['fname'] }} {{ $member->voters->lname }}</td>
                                <td>{{ $member->voters->precinct }}</td>
                                <td>
                                <?php if($member->voters->status == 0){
                                        echo "Undefined";
                                    }
                                    else if($member->voters->status == 1){
                                        echo "Supporter";
                                    }
                                    else if($member->voters->status == 2){
                                        echo "Opponent";
                                    }
                                    else if($member->voters->status == 3){
                                        echo "Yongco Supporters";
                                    }
                                    else if($member->voters->status == 4){
                                        echo "INC";
                                    }
                                    else if($member->voters->status == 5){
                                        echo "OOT";
                                    }
                                    else if($member->voters->status == 6){
                                        echo "DEAD";
                                    }
                                    else if($member->voters->status == 7){
                                        echo "Transfer";
                                    }
                                    else {
                                        echo "Not Classified";
                                    }
                                    ?>
                                </td>
                                <td  class="hidden-print"><a  class="btn btn-danger" href="/voters/removememberlist/{{ $member->id }}" onclick="return confirm('Are you sure you want to Remove this Voter?')"><i class="fa fa-times fa-fw"></i> Remove</a></td>
                                <?php $num++; ?>
                            </tr>
                            @empty
                            @endforelse
                        </table>

                      <!-- this row will not appear when printing -->
                      <div class="row no-print hidden-print">
                        <div class="col-xs-12">
                          <button class="btn btn-default" onclick="window.print();"><i class="fa fa-print"></i> Print</button>
                          
                        </div>
                      </div>
                    </section>
                  </div>
                </div>
              </div>
            </div>

@endsection
