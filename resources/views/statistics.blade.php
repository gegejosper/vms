@extends('layouts.front')

@section('content')

    
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
                  <div class="x_title">
                    <h4><i class="fa fa-group fa-fw"></i>List of Barangays
                    </h4>
                    <div class="clearfix"></div>
                  </div>
                <div class="x_content">  
                <div class="x_panel">
                        <table class="table table-striped table-bordered dataTable no-footer dtr-inline">
                            <tr>
                            <th>No</th>
                            <th>Barangay</th>
                            <th>Total Voters</th>
                            <th>Target (85%)</th>
                            <th>Target (65%)</th>
                            <th>Supporters</th>
                            <th>Opponent</th>
                            <th>Undefined</th>
                            <th>Yongco</th>
                            <th>INC</th>
                            <th>OOT</th>
                            <th>Transfers</th>
                            <th>Dead</th>
                            </tr><?php 
                            $count =1;

                            
                            ?>
                            @foreach($barangaydetails as $brgy)

                            
                            <tr>
                            <td>{{$count}}</td>
                            <td>{{$brgy['brgy']}}</td>
                            <td>{{ $brgy['opponent'] + $brgy['supporter'] + $brgy['yongcosupporter'] + $brgy['inc'] + $brgy['oot'] + $brgy['undefined'] + $brgy['dead'] + $brgy['transfer'] }}</td>
                            <?php 
                            $totalbrgyvoters = $brgy['opponent'] + $brgy['supporter'] + $brgy['yongcosupporter'] + $brgy['inc'] + $brgy['oot'] + $brgy['undefined'] + $brgy['dead'] + $brgy['transfer'];
                            $percent85 = (85/100) *  $totalbrgyvoters;
                            $percent65 = (65/100) *  $totalbrgyvoters;
                            ?>
                            <td>{{ number_format($percent85,0) }}</td>
                            <td>{{ number_format($percent65,0) }}</td>
                            <td>{{$brgy['supporter']}}</td>
                            <td>{{$brgy['opponent']}}</td>
                            <td>{{$brgy['undefined']}}</td>
                            <td>{{$brgy['yongcosupporter']}}</td>
                            <td>{{$brgy['inc']}}</td>
                            <td>{{$brgy['oot']}}</td>
                            <td>{{$brgy['transfer']}}</td>
                            <td>{{$brgy['dead']}}</td>
                            </tr>

                            <?php $count++; ?>
                            @endforeach
                        </table>
                       
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