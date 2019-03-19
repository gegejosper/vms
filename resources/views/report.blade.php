@extends('layouts.front')

@section('content')
<div class="row">
        <div class="col-md-3 col-sm-3 col-xs-12">
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
                            <select class="select2_single form-control" tabindex="-1">
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
                            <select class="select2_single form-control" tabindex="-1">
                                <?php 
                                $brgy = array ('Acad','Alang-alang','Alegria','Anonang',' Bagong Mandaue','Bagong Maslog',' Bagong Oslob','Bagong Pitogo','Baki','Balas','Balide'
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
                   
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <section class="content invoice">
                     
                    </section>
                  </div>
                </div>
              </div>
            </div>

@endsection
