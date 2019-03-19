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
                    <div class="x_panel">
                    <form action="{{ route('reportsupporters') }}" method="post">
                    {{ csrf_field() }}
                        <fieldset>
                        <label for="Supporters"> Supporters</label>
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
                    </div>
                    
                   
                    </div> <!--end x_content-->
            </div><!--end x_panel-->
        </div><!--end col-->
              <div class="col-md-9 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>List of Opponents in {{ $barangay }}
                    </h2>
                   
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <section class="content invoice">
                    <table class="table">
                            <tr>  
                                <td>Full Name </td>
                                <td>Barangay</td>
                                <td>Precinct</td>
                            </tr>
                            @forelse($voters as $voter)
                            <tr>
                                <td>{{ $voter->fname }} {{ $voter->lname }}</td>
                                <td>{{ $voter->brgy }}</td>
                                <td>{{ $voter->precinct }}</td>
        
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