@extends('layouts.front')

@section('content')
<div class="row">
        <div class="col-md-3 col-sm-3 col-xs-12 no-print hidden-print">
            <div class="x_panel">
                    <div class="x_title">
                        <h2>Generate Report
                        </h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                    <a href='/report/leaders' class='list-group-item'>Leaders</a> <br>
                    <!-- <div class="x_panel">
                    <form action="{{ route('reportsupporters') }}" method="post">
                    {{ csrf_field() }}
                        <fieldset>
                        <label for="Supporters"> Supporters</label>
                            <select class="select2_single form-control" tabindex="-1" name="brgy">
                                <?php 
                                $brgy = array ('Acad','Alang-alang','Alegria','Anonang',' Bagong Mandaue','Bagong Maslog','Bagong Oslob','Bagong Pitogo','Baki','Balas','Balide'
                                ,'Balintawak','Bayabas','Bemposa','Cabilinan','Campo Uno','Ceboneg','Commonwealth','Gubaan','Inasagan','Inroad','Kahayagan East','Kahayagan West','Kauswagan','La Paz','La Victoria','Lantungan'
                                ,'Libertad','Lintugop','Lubid','Maguikay','Mahayahay','Monte Alegre','Montela','Napo','Panaghiusa','Poblacion','Resthouse','Romarate','San Jose','San Juan','Sapa Loboc','Tagulalo','Waterfall');
                                foreach($brgy as $br) {
                                    echo "<option value='".$br."'>".$br."</option>";
                                }
                                ?>  
                            </select> <br>
                            <button type="submit" class="btn btn-success">Generate</button>   
                        </fieldset>
                    </form>
                    </div>

                    <div class="x_panel">
                    <form action="{{ route('reportopponents') }}" method="post">
                    {{ csrf_field() }}
                        <fieldset>
                        <label for="Opponents"> Opponents</label>
                            <select class="select2_single form-control" tabindex="-1" name="brgy">
                                <?php 
                                $brgy = array ('Acad','Alang-alang','Alegria','Anonang','Bagong Mandaue','Bagong Maslog','Bagong Oslob','Bagong Pitogo','Baki','Balas','Balide'
                                ,'Balintawak','Bayabas','Bemposa','Cabilinan','Campo Uno','Ceboneg','Commonwealth','Gubaan','Inasagan','Inroad','Kahayagan East','Kahayagan West','Kauswagan','La Paz','La Victoria','Lantungan'
                                ,'Libertad','Lintugop','Lubid','Maguikay','Mahayahay','Monte Alegre','Montela','Napo','Panaghiusa','Poblacion','Resthouse','Romarate','San Jose','San Juan','Sapa Loboc','Tagulalo','Waterfall');
                                foreach($brgy as $br) {
                                    echo "<option value='".$br."'>".$br."</option>";
                                }
                                ?>  
                            </select> <br>
                            <button type="submit" class="btn btn-success">Generate</button>   
                        </fieldset>
                    </form>
                    </div> -->
                    <div class="x_panel">
                    <form action="{{ route('reportvoters') }}" method="post">
                    {{ csrf_field() }}
                        <fieldset>
                        <label for="Voters"> Report Voters</label>
                            <select class="select2_single form-control" tabindex="-1" name="brgy">
                                <option value="ALL" selected>ALL</option>
                                <?php 
                                $brgy = array ('Acad','Alang-alang','Alegria','Anonang','Bag-ong Mandaue','Bag-ong Maslog','Bag-ong Oslob','Bag-ong Pitogo','Baki','Balas','Balide'
                                ,'Balintawak','Bayabas','Bemposa','Cabilinan','Campo Uno','Ceboneg','Commonwealth','Gubaan','Inasagan','Inroad','Kahayagan East','Kahayagan West','Kauswagan','La Paz','La Victoria','Lantungan'
                                ,'Libertad','Lintugop','Lubid','Maguikay','Mahayahay','Monte Alegre','Montela','Napo','Panaghiusa','Poblacion','Resthouse','Romarate','San Jose','San Juan','Sapa Loboc','Tagulalo','Waterfall');
                                foreach($brgy as $br) {
                                    echo "<option value='".$br."'>".$br."</option>";
                                }
                                ?>  
                            </select> <br>
                            <label for="Voters"> Type</label>
                            <select class="select2_single form-control" name="type">
                                <option value="8" selected>ALL</option>
                                <option value="0">Undefined</option>
                                <option value="1">Supporter</option>
                                <option value="2">Opponent</option>
                                <option value="3">Yongco Supporters</option>
                                <option value="4">INC</option>
                                <option value="5">OOT</option>
                                <option value="6">DEAD</option>
                                <option value="7">Transfer</option>
                                </select>
                            <button type="submit" class="btn btn-success">Generate</button>   
                        </fieldset>
                    </form>
                    
                    </div>
                    
                   
                    </div> <!--end x_content-->
            </div><!--end x_panel-->
        </div><!--end col-->
              <div class="col-md-9 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>List of Voters in {{ $barangay }} - ( <em><?php 
                    switch ($type) {
                        case 1:
                            echo "Supporter";
                            break;
                        case 2:
                            echo "Opponent";
                            break;
                        case 3:
                            echo "Yongco Supporters";
                            break;
                        case 4:
                            echo "INC";
                            break;
                        case 5:
                            echo "OOT";
                            break;
                        case 6:
                            echo "DEAD";
                            break;
                        case 7:
                            echo "Transfer";
                            break;
                        case 8:
                            echo "ALL";
                            break;

                        default:
                            echo "Not Classified";
                        }
                        ?> </em>)
                    </h2>

                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <section class="content invoice">
                    <table class="table report">
                            <tr>  
                                <td># </td>
                                <td>Full Name </td>
                                <td>Barangay</td>
                                <td>Precinct</td>
                                <td>Status</td>
                            </tr>
                            <?php $count =1; ?>
                            @forelse($voters as $voter)
                            <tr>
                                <td>{{ number_format($count,0) }}</td>
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
        
                            </tr>
                            <?php $count++;?>
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