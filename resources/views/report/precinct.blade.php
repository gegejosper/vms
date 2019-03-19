@extends('layouts.front')

@section('content')
<div class="row">
              <div class="col-md-9 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>List of Voters in Precinct {{$precinct}}</h2>
                   
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <section class="content invoice">
                    <table class="table">
                            <tr>  
                                <td>Full Name </td>
                                <td>Barangay</td>
                                <td>Precinct</td>
                                <td>Status</td>
                            </tr>
                            @forelse($voters as $voter)
                            <tr>
                                <td>{{ $voter->fname }} {{ $voter->lname }}</td>
                                <td>{{ $voter->brgy }}</td>
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
                                    else {
                                        echo "Not Classified";
                                    }
                                    ?>
                                </td>
        
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