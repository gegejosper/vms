@extends('layouts.front')

@section('content')
<div class="row">
<div class="col-md-3 col-sm-3 col-xs-3 no-print hidden-print">
        <div class="x_panel">
                  <div class="x_title">
                    <h4> View Voters by Barangay
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
    <div class="col-md-9 col-sm-12 col-xs-12">
        <div class="x_panel">
                  <div class="x_title">
                    <h4 align="center">Barangay {{ $newbrgy }}
                    </h4>
                    <div class="clearfix"></div>
                  </div>
                <div class="x_content leaderreport">   
                <style>
.table-bordered td{
 padding:5px;
 border:1px #ccc solid;
 border-collapse: collapse; 
}
table {
  border-collapse: collapse;
}
</style>
<table class="table table-striped" valign="top"><tr valign="top">
@foreach($votersLeaders as $Leaderdetail)
    <td>
        <table class="table table-striped table-bordered">
            <tr style="font-size:8pt;">
                <td><strong>Leader</strong></td>
                <td colspan="2">{{$Leaderdetail->fname}} {{$Leaderdetail->lname}}</td>
                
            </tr>
            <tr style="font-size:8pt;">
                <td>#</td>
                <td><strong>Full Name</strong></td>
                <td>Prec.</td>
            </tr>
            <?php $count = 1;?>
            @foreach($Leaderdetail->leaderdetails as $votersdetails)
            <tr style="font-size:7pt;">
                <td>{{$count}}</td>
                <td >{{$votersdetails->voters->fname}} {{$votersdetails->voters->lname}}</td>
                <td>{{$votersdetails->voters->precinct}}</td>
            </tr>
            <?php $count += 1;?>
            @endforeach
            <?php while($count<=10){
            ?>
            <tr style="font-size:7pt;">
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
            <?php
            $count += 1;
            }?>
        </table>
        </td>
@endforeach
</tr>

</table>
                </div> <!--end x_content-->
         </div><!--end x_panel-->
         <?php  if($votersLeaders->links() !== null){?>
                    {{                     
                    $votersLeaders->links() 
                    }}
                <?php } ?>
         <div class="row no-print hidden-print">
                        <div class="col-xs-12">
                          <!-- <button class="btn btn-default" onclick="window.print();"><i class="fa fa-print"></i> Print</button> -->
                          <a class="btn btn-default" href="/nostyleleaders/{{$newbrgy}}?page=<?php echo $_GET['page']?>"><i class="fa fa-print"></i> Print View</a>
                          
                        </div>
                      </div>
    </div><!--end col-->
</div><!--end row-->

<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('build/js/voters.js') }}"></script>
<!-- /main -->
@endsection