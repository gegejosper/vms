@extends('layouts.front')

@section('content')
<div class="row brgyreport">
     <?php 
                $totalvoters= 0;
                $totalvotersopp= 0;
                $totalvoterssup= 0;
                $totalUndefined= 0;
                $totalYongco= 0;
                $totalINC= 0;
                $totaloot= 0;
                $totalDead= 0;
                $totalTransfer= 0;
                foreach($barangaydetails as $voters) {
                $votersnum = $voters['opponent'] + $voters['supporter'] + $voters['oot'] + $voters['inc'] + $voters['yongcosupporter'] + $voters['undefined'] + $voters['dead'] + $voters['transfer'];
                $totalvotersopp = $totalvotersopp + $voters['opponent'];
                $totalvoterssup = $totalvoterssup + $voters['supporter'];
                $totalUndefined = $totalUndefined + $voters['undefined'];
                $totalYongco = $totalYongco + $voters['yongcosupporter'];
                $totalINC = $totalINC + $voters['inc'];
                $totaloot = $totaloot + $voters['oot'];
                $totalDead = $totalDead + $voters['dead'];
                $totalTransfer = $totalTransfer + $voters['transfer'];
                $totalvoters = $totalvoters + $votersnum;
                }
                ?>
        <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
                  <div class="x_title">
                    <h2>Summary of Voters
                    </h2>
                    <div class="clearfix"></div>
                  </div>
                <div class="x_content">
                  <div class="col-md-6 col-sm-6 col-xs-12 col-1">
                    <h5>Overall Voters {{$totalvoters}}</h5>
                      <div class="progress">
                        <?php 
                            $overallvoters = $totalvotersopp + $totalvoterssup + $totalUndefined + $totalYongco + $totaloot + $totalINC;
                            if ($overallvoters != 0){
                              $percentageoverallvoters = ($overallvoters / $overallvoters) * 100;
                             }
                             else {
                              $percentageoverallvoters = 100;
                             } 
                        ?>
                        <div class="progress-bar progress-bar-info" data-transitiongoal="{{$percentageoverallvoters}}" aria-valuenow="{{$percentageoverallvoters}}" style="width: {{$percentageoverallvoters}}%;"></div>
                      </div>
                      <?php   
                            if ($totalvoterssup != 0){
                              $percentageoverallsupvoters = ($totalvoterssup / $overallvoters) * 100;
                             }
                             else {
                              $percentageoverallsupvoters = 0;
                             }                      
                            
                      ?>
                      <h5>Supporting Voters {{number_format($percentageoverallsupvoters,2)}}% ( {{$totalvoterssup}} ) </h5>
                      <div class="progress">
                        <div class="progress-bar progress-bar-danger" data-transitiongoal="{{$percentageoverallsupvoters}}" aria-valuenow="{{$percentageoverallsupvoters}}" style="width: {{$percentageoverallsupvoters}}%;"></div>
                      </div>
                      <?php   
                        if ($totalvotersopp != 0){
                          $percentageoveralloppvoters = ($totalvotersopp / $overallvoters) * 100;
                         }
                         else {
                          $percentageoveralloppvoters = 0;
                         }  
                      ?>
                      <h5>Opponent Voters {{number_format($percentageoveralloppvoters,2)}}% ( {{$totalvotersopp}} ) </h5>
                      <div class="progress">
                        
                        <div class="progress-bar progress-bar-warning" data-transitiongoal="{{$percentageoveralloppvoters}}" aria-valuenow="{{$percentageoveralloppvoters}}" style="width: {{$percentageoveralloppvoters}}%;"></div>
                      </div>
                      <?php   
                        if ($totalYongco != 0){
                          $percentageoverallYongco = ($totalYongco / $overallvoters) * 100;
                        }
                        else {
                            $percentageoverallYongco = 0;
                        }
                      ?>
                      <h5>Yongco Supporters {{number_format($percentageoverallYongco,2)}}% ( {{$totalYongco}} ) </h5>
                      <div class="progress">
                        
                        <div class="progress-bar progress-bar-success" data-transitiongoal="{{$percentageoverallYongco}}" aria-valuenow="{{$percentageoveralloppvoters}}" style="width: {{$percentageoveralloppvoters}}%;"></div>
                      </div>
                      <?php   
                         if ($totalUndefined != 0){
                          $percentageoverallUndefined = ($totalUndefined / $overallvoters) * 100;
                          }
                          else {
                              $percentageoverallUndefined = 0;
                          }
                      ?>
                      <h5> Undefined Voters {{number_format($percentageoverallUndefined,2)}}% ( {{$totalUndefined}} ) </h5>
                      <div class="progress">
                        
                        <div class="progress-bar progress-bar-danger" data-transitiongoal="{{$percentageoverallUndefined}}" aria-valuenow="{{$percentageoveralloppvoters}}" style="width: {{$percentageoveralloppvoters}}%;"></div>
                      </div>
                      </div><!--end col1-->
                      <div class="col-md-6 col-sm-6 col-xs-12 col-2">
                         <?php   
                        if ($totalINC != 0){
                          $percentageoverallINC = ($totalINC / $overallvoters) * 100;
                      }
                      else {
                          $percentageoverallINC = 0;
                      } 
                      ?>
                      <h5>INC {{number_format($percentageoverallINC,2)}}% ( {{$totalINC}} ) </h5>
                      <div class="progress">
                        
                        <div class="progress-bar progress-bar-warning" data-transitiongoal="{{$percentageoverallINC}}" aria-valuenow="{{$percentageoveralloppvoters}}" style="width: {{$percentageoveralloppvoters}}%;"></div>
                      </div>
                      <?php   
                       if ($totaloot != 0){
                        $percentageoveralloot = ($totaloot / $overallvoters) * 100;
                        }
                        else {
                            $percentageoveralloot = 0;
                        } 
                      ?>
                      <h5>OOT Voters {{number_format($percentageoveralloot, 2)}}% ( {{$totaloot}} ) </h5>
                      <div class="progress">
                        
                        <div class="progress-bar progress-bar-info" data-transitiongoal="{{$percentageoveralloot}}" aria-valuenow="{{$percentageoveralloppvoters}}" style="width: {{$percentageoveralloppvoters}}%;"></div>
                      </div> 
                      <?php   
                       if ($totalDead != 0){
                        $percentageoveralldead = ($totalDead / $overallvoters) * 100;
                        }
                        else {
                            $percentageoveralldead = 0;
                        } 
                      ?>
                      <h5>DEAD Voters {{number_format($percentageoveralldead, 2)}}% ( {{$totalDead}} ) </h5>
                      <div class="progress">
                        
                        <div class="progress-bar progress-bar-warning" data-transitiongoal="{{$percentageoveralldead}}" aria-valuenow="{{$percentageoveralldead}}" style="width: {{$percentageoveralldead}}%;"></div>
                      </div>  
                      <?php   
                       if ($totalTransfer != 0){
                        $percentageoveralltransfer = ($totalTransfer / $overallvoters) * 100;
                        }
                        else {
                            $percentageoveralltransfer = 0;
                        } 
                      ?>
                      <h5>Transfer Voters {{number_format($percentageoveralltransfer, 2)}}% ( {{$totalTransfer}} ) </h5>
                      <div class="progress">
                        
                        <div class="progress-bar progress-bar-info" data-transitiongoal="{{$percentageoveralltransfer}}" aria-valuenow="{{$percentageoveralltransfer}}" style="width: {{$percentageoveralltransfer}}%;"></div>
                      </div>   
                      </div> <!--end col2-->
                </div> <!--end x_content-->
         </div><!--end x_panel-->
    </div><!--end col-->
</div><!--end row-->
<div class="row">
    
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
                  <div class="x_title">
                    <h4><i class="fa fa-group fa-fw"></i>List of Barangays
                    </h4>
                    <div class="clearfix"></div>
                  </div>
                <div class="x_content">  
                <div class="x_panel">
                        @foreach($barangaydetails as $brgy)
                        <div class="col-md-4 col-xs-12 widget widget_tally_box">
                          <div class="x_panel">
                            <div class="x_title">
                              <h2>{{$brgy['brgy']}}</h2>
                              <div class="clearfix"></div>
                            </div>
                            <div class="x_content">

                              <!-- <div style="text-align: center; margin-bottom: 17px">
                                <ul class="verticle_bars list-inline">
                                  <li>
                                    <div class="progress vertical progress_wide bottom">
                                    <?php 
                                                               
                                     $totalvoters = $brgy['opponent'] + $brgy['supporter'];
                                     if ($totalvoters != 0){
                                      $percentagevoters = ($totalvoters / $totalvoters) * 100;
                                     }
                                     else {
                                      $percentagevoters = 100;
                                     }
                                     
                                    ?>
                                      <div class="progress-bar progress-bar-success" role="progressbar" data-transitiongoal="{{$percentagevoters}}" aria-valuenow="{{$percentagevoters}}" style="height: {{$percentagevoters}}%;"></div>
                                    </div>
                                  </li>
                                  <li>
                                    <div class="progress vertical progress_wide bottom">
                                    <?php 
                                      if ($brgy['supporter'] != 0){
                                        $percentagesupporter = ($brgy['supporter'] / $totalvoters) * 100;
                                      }
                                      else {
                                        $percentagesupporter = 0;
                                      }
                                    
                                    ?>
                                      <div class="progress-bar progress-bar-danger" role="progressbar" data-transitiongoal="{{$percentagesupporter}}" aria-valuenow="{{$percentagesupporter}}" style="height: {{$percentagesupporter}}%;"></div>
                                    </div>
                                  </li>
                                  <li>
                                    <div class="progress vertical progress_wide bottom">
                                    <?php 
                                     if ($brgy['opponent'] != 0){
                                      $percentageopponent = ($brgy['opponent'] / $totalvoters) * 100;
                                      }
                                      else {
                                        $percentageopponent = 0;
                                      }
                                    
                                    ?>
                                      <div class="progress-bar progress-bar-warning" role="progressbar" data-transitiongoal="{{$percentageopponent}}" aria-valuenow="{{$percentageopponent}}" style="height: {{$percentageopponent}}%;"></div>
                                    </div>
                                  </li>
                                
                                </ul>
                              </div> -->
                              <!-- <div class="divider"></div> -->

                              <ul class="legend list-unstyled">
                                <li>
                                  <p>
                                    <span class="icon"><i class="fa fa-square green"></i></span> <span class="name">Voters ( {{ $brgy['opponent'] + $brgy['supporter'] + $brgy['yongcosupporter'] + $brgy['inc'] + $brgy['oot'] + $brgy['undefined'] + $brgy['dead'] + $brgy['transfer'] }} )</span>
                                  </p>
                                </li>
                                <li>
                                  <p>
                                    <span class="icon"><i class="fa fa-square red"></i></span> <span class="name">Supporters ( {{ $brgy['supporter']}} )</span>
                                  </p>
                                </li>
                                <li>
                                  <p>
                                    <span class="icon"><i class="fa fa-square orange"></i></span> <span class="name">Opponent ( {{ $brgy['opponent'] }} )</span>
                                  </p>
                                </li>
                                <li>
                                  <p>
                                    <span class="icon"><i class="fa fa-square green"></i></span> <span class="name">Yongco Supporters ( {{ $brgy['yongcosupporter'] }} )</span>
                                  </p>
                                </li>
                                <li>
                                  <p>
                                    <span class="icon"><i class="fa fa-square black"></i></span> <span class="name">INC ( {{ $brgy['inc'] }} )</span>
                                  </p>
                                </li>
                                <li>
                                  <p>
                                    <span class="icon"><i class="fa fa-square blue"></i></span> <span class="name">OOT ( {{ $brgy['oot'] }} )</span>
                                  </p>
                                </li>
                                <li>
                                  <p>
                                    <span class="icon"><i class="fa fa-square black"></i></span> <span class="name">Undefined Voters ( {{ $brgy['undefined'] }} )</span>
                                  </p>
                                </li>
                                <li>
                                  <p>
                                    <span class="icon"><i class="fa fa-square black"></i></span> <span class="name">Dead Voters ( {{ $brgy['dead'] }} )</span>
                                  </p>
                                </li>
                                <li>
                                  <p>
                                    <span class="icon"><i class="fa fa-square black"></i></span> <span class="name">Transfer Voters ( {{ $brgy['transfer'] }} )</span>
                                  </p>
                                </li>
                                
                              </ul>

                            </div>
                          </div>
                        </div>
                        @endforeach
                </div> <!--end x_content-->
         </div><!--end x_panel-->
    </div><!--end col-->
    <div class="row no-print hidden-print">
                        <div class="col-xs-12">
                          <button class="btn btn-default" onclick="window.print();"><i class="fa fa-print"></i> Print</button>
                          
                        </div>
                      </div>
</div><!--end row-->


<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('build/js/voters.js') }}"></script>
<!-- /main -->
@endsection