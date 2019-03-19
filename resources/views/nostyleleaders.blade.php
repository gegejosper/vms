<style>
.table-bordered td{
 padding:5px;
 border:1px #ccc solid;
 border-collapse: collapse; 
}
table {
  border-collapse: collapse;
}
@media print
{    
    .no-print, .no-print *
    {
        display: none !important;
    }
}
</style>
<h4 align="center">Barangay {{ $newbrgy }}
                    </h4>
<table align="center"class="table table-striped" valign="top"><tr valign="top">
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
                <td>{{$count}}.</td>
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
<button class="btn btn-default no-print" onclick="window.print();"><i class="fa fa-print"></i> Print</button>
     