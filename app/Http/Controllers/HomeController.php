<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Faker;
use DB;
use App\Voter;
use App\Leaderslist;
use Khill\Lavacharts\Lavacharts;

class HomeController extends Controller
{
    //
    public function index()
    {
        $voters = Voter::sortable()->latest()->paginate(30);
        
        $NumVoters = count($voters);
        return view('welcome', compact('voters', 'NumVoters'));
    }
    public function brgy()
    {

        $barangay = array('Acad','Alang-alang','Alegria','Anonang', 'Bag-ong Mandaue','Bag-ong Maslog',
                    'Bag-ong Oslob','Bag-ong Pitogo','Baki','Balas','Bayabas', 'Balide', 'Balintawak','Bemposa',
                    'Cabilinan', 'Campo Uno', 'Ceboneg', 'Commonwealth', 'Gubaan', 'Inasagan', 'Inroad', 'Kahayagan East',
                    'Kahayagan West', 'Kauswagan', 'La Paz', 'La Victoria', 'Lantungan', 'Libertad', 'Lintugop', 'Lubid', 
                    'Maguikay', 'Mahayahay', 'Monte Alegre', 'Montela', 'Napo', 'Panaghiusa', 'Poblacion', 'Resthouse', 'Romarate',
                    'San Jose', 'San Juan', 'Sapa Luboc', 'Tagolalo', 'Waterfall'
                    );
        $barlength = count($barangay); 

        $barangaydetails = array();
        for($x = 0; $x < $barlength; $x++) {
            $ViewBrgy = Voter::where('brgy', '=',$barangay[$x])
                ->select("status",  DB::raw('count(IF(status = 1, 1, NULL)) as supporter'),
                                    DB::raw('count(IF(status = 0, 1, NULL)) as undefined'),
                                    DB::raw('count(IF(status = 2, 1, NULL)) as opponent'),
                                    DB::raw('count(IF(status = 3, 1, NULL)) as yongcosupporter'),
                                    DB::raw('count(IF(status = 4, 1, NULL)) as inc'),
                                    DB::raw('count(IF(status = 5, 1, NULL)) as oot'),
                                    DB::raw('count(IF(status = 6, 1, NULL)) as dead'),
                                    DB::raw('count(IF(status = 7, 1, NULL)) as transfer'))
                ->groupBy("status")
                ->get();
            $brgysupporter = 0;
            $brgyUndefined = 0;
            $brgyYongco = 0;
            $brgyINC = 0;
            $brgyopponent = 0;
            $brgyoot = 0;
            $brgyDead = 0;
            $brgyTransfer = 0;
            foreach($ViewBrgy as $brgydetails) {
                $brgysupporter = $brgysupporter + $brgydetails->supporter;
                $brgyUndefined = $brgyUndefined + $brgydetails->undefined;
                $brgyYongco = $brgyYongco + $brgydetails->yongcosupporter;
                $brgyINC = $brgyINC + $brgydetails->inc;
                $brgyopponent = $brgyopponent + $brgydetails->opponent;
                $brgyoot = $brgyoot + $brgydetails->oot;
                $brgyDead = $brgyDead + $brgydetails->dead;
                $brgyTransfer = $brgyTransfer + $brgydetails->transfer;
            }
            $brgy['brgy'] = $barangay[$x];
            $brgy['opponent'] = $brgyopponent;
            $brgy['supporter'] = $brgysupporter;
            $brgy['oot'] = $brgyoot;
            $brgy['inc'] = $brgyINC;
            $brgy['yongcosupporter'] = $brgyYongco;
            $brgy['undefined'] = $brgyUndefined;
            $brgy['dead'] = $brgyDead;
            $brgy['transfer'] = $brgyTransfer;
            array_push( $barangaydetails, $brgy);
        }
        // $totalvoters= 0;
        // $totalvotersopp= 0;
        // $totalvoterssup= 0;
        // $totalUndefined= 0;
        // $totalYongco= 0;
        // $totalINC= 0;
        // $totaloot= 0;
        // $totalDead= 0;
        // $totalTransfer= 0;

        // foreach($barangaydetails as $voters) {
        //     $votersnum = $voters['opponent'] + $voters['supporter'] + $voters['oot'] + $voters['inc'] + $voters['yongcosupporter'] + $voters['undefined'] + $voters['dead'] + $voters['transfer'];
        //     $totalvotersopp = $totalvotersopp + $voters['opponent'];
        //     $totalvoterssup = $totalvoterssup + $voters['supporter'];
        //     $totalUndefined = $totalUndefined + $voters['undefined'];
        //     $totalYongco = $totalYongco + $voters['yongcosupporter'];
        //     $totalINC = $totalINC + $voters['inc'];
        //     $totaloot = $totaloot + $voters['oot'];
        //     $totalDead = $totalDead + $voters['dead'];
        //     $totalTransfer = $totalTransfer + $voters['transfer'];
        //     $totalvoters = $totalvoters + $votersnum;
        // }
        // $overallvoters = $totalvotersopp + $totalvoterssup + $totalUndefined + $totalYongco + $totaloot + $totalINC + $totalDead;
        // if ($totalvoterssup != 0){
        //     $percentageoverallsupvoters = ($totalvoterssup / $overallvoters) * 100;
        // }
        // else {
        //     $percentageoverallsupvoters = 0;
        // }
        // if ($totalvotersopp != 0){
        //     $percentageoveralloppvoters = ($totalvotersopp / $overallvoters) * 100;
        // }
        // else {
        //     $percentageoveralloppvoters = 0;
        // } 
        // if ($totalUndefined != 0){
        //     $percentageoverallUndefined = ($totalUndefined / $overallvoters) * 100;
        // }
        // else {
        //     $percentageoverallUndefined = 0;
        // }
        // if ($totalYongco != 0){
        //     $percentageoverallYongco = ($totalYongco / $overallvoters) * 100;
        // }
        // else {
        //     $percentageoverallYongco = 0;
        // }
        // if ($totalINC != 0){
        //     $percentageoverallINC = ($totalINC / $overallvoters) * 100;
        // }
        // else {
        //     $percentageoverallINC = 0;
        // } 
        // if ($totaloot != 0){
        //     $percentageoveralloot = ($totaloot / $overallvoters) * 100;
        // }
        // else {
        //     $percentageoveralloot = 0;
        // }   
        // if ($totalDead != 0){
        //     $percentageoveralldead = ($totalDead / $overallvoters) * 100;
        // }
        // else {
        //     $percentageoveralldead = 0;
        // }
        // if ($totalTransfer != 0){
        //     $percentageoveralltransfer = ($totalTransfer / $overallvoters) * 100;
        // }
        // else {
        //     $percentageoveralltransfer = 0;
        // }       
        // $lava = new Lavacharts; // See note below for Laravel
        // $reasons = $lava->DataTable();
        // $reasons->addStringColumn('Reasons')
        //         ->addNumberColumn('Percent')
        //         ->addRow(['Undefined Voters - '.number_format($percentageoverallUndefined, 2).'%', $percentageoverallUndefined])
        //         ->addRow(['Yongco Supporters - '.number_format($percentageoverallYongco, 2).'%',  $percentageoverallYongco])
        //         ->addRow(['Supporters - '.number_format($percentageoverallsupvoters, 2).'%', $percentageoverallsupvoters])
        //         ->addRow(['Opponents - '.number_format($percentageoveralloppvoters, 2).'%', $percentageoveralloppvoters])
        //         ->addRow(['INC - '.number_format($percentageoverallINC, 2).'%', $percentageoverallINC])
        //         ->addRow(['OOT - '.number_format($percentageoveralloot, 2).'%', $percentageoveralloot]);

        // $lava->PieChart('VMS', $reasons, [
        //     'title'  => 'Voters Statistics',
        //     'is3D'   => true,
        //     'slices' => [
        //         ['offset' => 0.2],
        //         ['offset' => 0.25],
        //         ['offset' => 0.3],
        //         ['offset' => 0.2],
        //         ['offset' => 0.25],
        //         ['offset' => 0.3]
        //     ],
        //     'height' => 300,
        //     'width' => 800,
        // ]);
      //dd($barangaydetails);
        return view('brgy', compact('barangaydetails'));
    }
    public function statistics()
    {

        $barangay = array('Acad','Alang-alang','Alegria','Anonang', 'Bag-ong Mandaue','Bag-ong Maslog',
                    'Bag-ong Oslob','Bag-ong Pitogo','Baki','Balas','Bayabas', 'Balide', 'Balintawak','Bemposa',
                    'Cabilinan', 'Campo Uno', 'Ceboneg', 'Commonwealth', 'Gubaan', 'Inasagan', 'Inroad', 'Kahayagan East',
                    'Kahayagan West', 'Kauswagan', 'La Paz', 'La Victoria', 'Lantungan', 'Libertad', 'Lintugop', 'Lubid', 
                    'Maguikay', 'Mahayahay', 'Monte Alegre', 'Montela', 'Napo', 'Panaghiusa', 'Poblacion', 'Resthouse', 'Romarate',
                    'San Jose', 'San Juan', 'Sapa Luboc', 'Tagolalo', 'Waterfall'
                    );
        $barlength = count($barangay); 

        $barangaydetails = array();
        for($x = 0; $x < $barlength; $x++) {
            $ViewBrgy = Voter::where('brgy', '=',$barangay[$x])
                ->select("status",  DB::raw('count(IF(status = 1, 1, NULL)) as supporter'),
                                    DB::raw('count(IF(status = 0, 1, NULL)) as undefined'),
                                    DB::raw('count(IF(status = 2, 1, NULL)) as opponent'),
                                    DB::raw('count(IF(status = 3, 1, NULL)) as yongcosupporter'),
                                    DB::raw('count(IF(status = 4, 1, NULL)) as inc'),
                                    DB::raw('count(IF(status = 5, 1, NULL)) as oot'),
                                    DB::raw('count(IF(status = 6, 1, NULL)) as dead'),
                                    DB::raw('count(IF(status = 7, 1, NULL)) as transfer'))
                ->groupBy("status")
                ->get();
            $brgysupporter = 0;
            $brgyUndefined = 0;
            $brgyYongco = 0;
            $brgyINC = 0;
            $brgyopponent = 0;
            $brgyoot = 0;
            $brgyDead = 0;
            $brgyTransfer = 0;
            foreach($ViewBrgy as $brgydetails) {
                $brgysupporter = $brgysupporter + $brgydetails->supporter;
                $brgyUndefined = $brgyUndefined + $brgydetails->undefined;
                $brgyYongco = $brgyYongco + $brgydetails->yongcosupporter;
                $brgyINC = $brgyINC + $brgydetails->inc;
                $brgyopponent = $brgyopponent + $brgydetails->opponent;
                $brgyoot = $brgyoot + $brgydetails->oot;
                $brgyDead = $brgyDead + $brgydetails->dead;
                $brgyTransfer = $brgyTransfer + $brgydetails->transfer;
            }
            $brgy['brgy'] = $barangay[$x];
            $brgy['opponent'] = $brgyopponent;
            $brgy['supporter'] = $brgysupporter;
            $brgy['oot'] = $brgyoot;
            $brgy['inc'] = $brgyINC;
            $brgy['yongcosupporter'] = $brgyYongco;
            $brgy['undefined'] = $brgyUndefined;
            $brgy['dead'] = $brgyDead;
            $brgy['transfer'] = $brgyTransfer;
            array_push( $barangaydetails, $brgy);
        }

        return view('statistics', compact('barangaydetails'));
    }
    public function leaders()
    {
        $voters = Voter::where('position', '=', 'Leader')->sortable()->paginate(50);
        $NumVoters = count($voters);
        return view('leaders', compact('voters', 'NumVoters'));
    }

    public function brgyleaders($brgy)
    {
        $newbrgy = $brgy;
        $votersLeaders = Voter::where('position', '=', 'Leader')->where('brgy', '=', $brgy)->with('leaderdetails.voters')->sortable()->paginate(4);
        $NumVoters = count($votersLeaders);
        //dd($votersLeaders);
        return view('brgyleaders', compact('votersLeaders', 'NumVoters', 'newbrgy'));
    }
    public function nostyleleaders($brgy)
    {
        $newbrgy = $brgy;
        $votersLeaders = Voter::where('position', '=', 'Leader')->where('brgy', '=', $brgy)->with('leaderdetails.voters')->sortable()->paginate(4);
        $NumVoters = count($votersLeaders);
        //dd($votersLeaders);
        return view('nostyleleaders', compact('votersLeaders', 'NumVoters', 'newbrgy'));
    }
    public function report()
    {
        
        return view('report', compact(''));
    }
    public function success()
    {
        return view('success', compact(''));
    }
    public function homesuccess()
    {
        return view('homesuccess', compact(''));
    }
    public function leaderreport()
    {
        
        $voters = Voter::where('position', '=', 'Leader')->sortable()->get();
        $NumVoters = count($voters);
        return view('report.leaders', compact('voters', 'NumVoters'));
    }
    public function voters()
    {
        $voters = Voter::sortable()->latest()->paginate(50);
        
        $NumVoters = count($voters);
        return view('voters', compact('voters', 'NumVoters'));
    }
    public function searchvoters(Request $request)
    {
        $q = $request->input('q');
        $voters = Voter::where('fname', 'LIKE', '%' . $q . '%')->orWhere('lname', 'LIKE', '%' . $q . '%')->sortable()->latest()->paginate(50);
        $voters->appends(['q' => $q]);
        $NumVoters = count($voters);
        return view('votersearch', compact('voters', 'NumVoters'));
    }

    
    public function member($brgy, $leaderid)
    {
        $voterslist = Voter::where('brgy', '=', $brgy)->where('id', '!=', $leaderid)->where('leader', '=', 0)->sortable()->latest()->get();
        $voters = array();
        foreach ($voterslist as $list){
            $countResult = Leaderslist::where('votersid', '=',  $list->id)->count();
           if($countResult == 0){
            $votersResult = Voter::where('id', '=',  $list->id)->get();
                array_push($voters,$votersResult);
            }
        }
        //dd($voters);
        $leader = Voter::where('id', '=', $leaderid)->get();
        $members = Leaderslist::where('leaderid', '=', $leaderid)->with('voters')->latest()->get();
        $NumVoters = count($voters);
        //dd($members);
        return view('member', compact('voters', 'NumVoters', 'leaderid', 'leader', 'members'));
    }
    public function memberlist($votersid, $leaderid)
    {

            $Leaderslist = new Leaderslist;
            $Leaderslist->leaderid = $leaderid;
            $Leaderslist->votersid =  $votersid; 
            $Leaderslist->save();  
            $voter = Voter::find($votersid);
            $voter->leader = $leaderid;
            $voter->save();
            return redirect()->back()->with('success','Voter Successfully Added!');
    }
    public function addvoters(Request $req)
    {

            $voter = new Voter;
            $voter->fname = $req->fname;
            $voter->lname =  $req->lname; 
            $voter->mname = $req->nmane; 
            $voter->brgy = $req->slc1;
            $voter->precinct = $req->slc2;
            $voter->position = 'Voter'; 
            $voter->status = 0; 
            $voter->save();  
            return redirect()->back()->with('success','Voter Successfully Added!');
    }
    public function reportopponents(Request $req)
    {

        $voters = Voter::where('brgy', '=', $req->brgy)->where('status', '=', 1)->sortable()->get();
        $NumVoters = count($voters);
        $barangay = $req->brgy;
        //dd( $req->brgy );
        return view('report.opponents', compact('voters', 'NumVoters', 'barangay'));
            
    }
    public function reportvoters(Request $req)
    {
        if($req->brgy=='ALL'){
                if($req->type =='8' ){
                    $voters = Voter::sortable()->get();
                    $NumVoters = count($voters);
                    $barangay = $req->brgy;
                    $type = $req->type;
                    return view('report.voters', compact('voters', 'NumVoters', 'barangay', 'type'));
                }
                else {
                    $voters = Voter::where('status', '=', $req->type)->sortable()->get();
                    $NumVoters = count($voters);
                    $barangay = $req->brgy;
                    $type = $req->type;
                    return view('report.voters', compact('voters', 'NumVoters', 'barangay', 'type'));
                }     
        }
        else {

            if($req->type =='8' ){
                $voters = Voter::where('brgy', '=', $req->brgy)->sortable()->get();
                $NumVoters = count($voters);
                $barangay = $req->brgy;
                $type = $req->type;
                return view('report.voters', compact('voters', 'NumVoters', 'barangay', 'type'));
            }
            else {
                $voters = Voter::where('brgy', '=', $req->brgy)->where('status', '=', $req->type)->sortable()->get();
                $NumVoters = count($voters);
                $barangay = $req->brgy;
                $type = $req->type;
                return view('report.voters', compact('voters', 'NumVoters', 'barangay', 'type'));
            }
        }     
    }
    public function reportsupporters(Request $req)
    {

        $voters = Voter::where('brgy', '=', $req->brgy)->where('status', '=', 0)->sortable()->get();
        $NumVoters = count($voters);
        $barangay = $req->brgy;
        //dd( $req->brgy );
        return view('report.supporters', compact('voters', 'NumVoters', 'barangay'));
            
    }
    public function makeleader($voterid){
        $voter = Voter::find($voterid);
        $voter->position = 'Leader';
        $voter->save();
        return redirect()->back()->with('success','Voter Successfully Updated!');
    }
    public function updatevoter(Request $req){
        $voter = Voter::find($req->voterid);
        $voter->fname = $req->fname;
        $voter->lname =  $req->lname; 
        $voter->mname = $req->nmane; 
        $voter->brgy = $req->slc1;
        $voter->precinct = $req->precinct;
        $voter->save();
        return redirect()->back()->with('success','Voter Successfully Updated!');
    }

    
    public function editvoters($voterid){
        $voter = Voter::where('id', '=', $voterid)->get();
        //dd($voter);
        return view('editvoter', compact('voter'));
    }

    
    public function rmleader($voterid){
        $voter = Voter::find($voterid);
        $voter->position = 'Voter';
        $voter->save();
        return redirect()->back()->with('success','Voter Successfully Updated!');
    }
    public function supporter($voterid){
        $voter = Voter::find($voterid);
        $voter->status = 0;
        $voter->save();
        return redirect()->back()->with('success','Voter Successfully Updated!');
    }
    public function updatevoterside(Request $req){
        $voter = Voter::find($req->voterid);
        $voter->status = $req->voterside;
        $voter->save();
        //return redirect()->back()->with('success','Voter Successfully Updated!');
        return redirect('/success');
    }
    public function updatemultiplevoterside(Request $req){
        //dd($req->voterside);
        foreach ($req->votersid as $voterid) {
            $voter = Voter::find($voterid);
            $voter->status = $req->voterside;
            $voter->save();
            //echo $voterid." - ".$req->voterside." ";
        }
        return redirect('/success');
    }
    public function homeupdatemultiplevoterside(Request $req){
        //dd($req->voterside);
        foreach ($req->votersid as $voterid) {
            $voter = Voter::find($voterid);
            $voter->status = $req->voterside;
            $voter->save();
            //echo $voterid." - ".$req->voterside." ";
            $brgy = $voter->brgy;
            $precinct = $voter->precinct;
        }
        //dd($voter->brgy);
        // $brgy = $voter->brgy;
        // $precinct = $voter->brgy;
        return view('homesuccess', compact('precinct', 'brgy'));
    }
    public function opponent($voterid){
        $voter = Voter::find($voterid);
        $voter->status = 1;
        $voter->save();
        return redirect()->back()->with('success','Voter Successfully Updated!');
    }
    public function viewBrgy($brgy)
    {
        $voters = Voter::where('brgy', '=', $brgy)->sortable()->paginate(30);
        $votersprecinct = Voter::where('brgy', '=', $brgy)->get();
        $precinct = $votersprecinct->groupBy('precinct');
        //$precinct->toArray();
        $NumVoters = count($voters);
        
        return view('welcome', compact('voters', 'NumVoters', 'precinct'));
    }
    public function viewrbrgyPrecinct($precinct)
    {
        $voters = Voter::where('precinct', '=', $precinct)->sortable()->paginate(200);

        $bgry = Voter::where('precinct', '=', $precinct)->first();
        $votersprecinct = Voter::where('brgy', '=', $bgry->brgy)->get();
        $precinct = $votersprecinct->groupBy('precinct');
        //$precinct->toArray();
        $NumVoters = count($voters);
        
        return view('welcome', compact('voters', 'NumVoters', 'precinct'));
    }
    public function viewprecinct($precinct)
    {
        $voters = Voter::where('precinct', '=', $precinct)->sortable()->paginate(30);
        $NumVoters = count($voters);
        return view('report.precinct', compact('voters', 'NumVoters', 'precinct'));
    }
    public function generatevoters()
    {
    	$faker = Faker\Factory::create();

        $limit = 1000;

        for ($i = 0; $i < $limit; $i++) {
            $voter = new Voter;
            $voter->fname = $faker->firstName;
            $voter->lname =  $faker->lastName; 
            $voter->mname = $faker->lastName; 
            $voter->brgy = $faker->randomElement($array = array ('Acad','Alang-alang','Alegria','Anonang','Bagong Mandaue','Bagong Maslog','Bagong Oslob','Bagong Pitogo','Baki','Balas','Balide'
            ,'Balintawak','Bayabas','Bemposa','Cabilinan','Campo Uno','Ceboneg','Commonwealth','Gubaan','Inasagan','Inroad','Kahayagan East','Kahayagan West','Kauswagan','La Paz','La Victoria','Lantungan'
            ,'Libertad','Lintugop','Lubid','Maguikay','Mahayahay','Monte Alegre','Montela','Napo','Panaghiusa','Poblacion','Resthouse','Romarate','San Jose','San Juan','Sapa Loboc','Tagulalo','Waterfall'));
            $voter->precinct = "0000"; 
            $voter->address = "n/a"; 
            $voter->position = 'Voters'; 
            $voter->leader = 0; 
            $voter->status = 0; 
            $voter->save();  
        }
        return "Voters Created Successfully";
    }
    public function deletevoters($voterid)
    {
        Voter::find($voterid)->delete();
        return redirect()->back()->with('warning','Voter Deleted Successfully!');
    }
    public function removememberlist($memberid)
    {
        //dd($id);
        Leaderslist::find($memberid)->delete();
        return redirect()->back()->with('warning','Voter Remove Successfully!');
    }
}
