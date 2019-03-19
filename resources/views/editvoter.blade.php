@extends('layouts.front')

@section('content')
<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
                  <div class="x_title">
                    <h2>Add Voter
                    </h2>
                    <div class="clearfix"></div>
                  </div>
                <div class="x_content"> 
                <form action="{{ route('updatevoter') }}" method="post">  
                {{ csrf_field() }}
                <div class="form-row field_wrapper">
                @if(Session::has('success'))
                            <div class="alert alert-success">
                                {{ Session::get('success') }}
                                @php
                                Session::forget('success');
                                @endphp
                            </div>
                @endif  

                @foreach($voter as $record )
                                    <div id="field form-row">
                                        <div id="field0" class="row">
                                        <!-- Text input-->
                                            <div class="form-group col-md-2">
                                            <label class="control-label" for="First Name">First Name</label>  
                                                <div class="">
                                                    <input id="voterid" name="voterid" type="hidden"   value="{{ $record->id }}">
                                                    <input id="fname" name="fname" type="text" placeholder="" class="form-control input-md" value="{{ $record->fname }}" required>
                                                </div>
                                            </div>
                                            <div class="form-group col-md-2">
                                                <label class="control-label" for="Last Name">Last Name</label>  
                                                <div class="">
                                                    <input id="lname" name="lname" type="text" placeholder="" class="form-control input-md" value="{{$record->lname}}" required>
                                                </div>
                                            </div>

                                            <div class="form-group col-md-2">
                                                <label class="control-label" for="Middle Name">Middle Name</label>  
                                                <div class="">
                                                    <input id="nmane" name="nmane" type="text" placeholder="" class="form-control input-md" value="{{$record->mname}}" required>
                                                </div>
                                            </div>
                                            <div class="form-group col-md-2">
                                            <label class="control-label" for="Barangay">Barangay</label>
                                                <div class="">
                                                    
                                                    <select name="slc1" id="slc1" onchange="_1sel();" class="form-control">
                                                    <option value="{{$record->brgy}}">{{$record->brgy}}</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group col-md-2">
                                                <label class="control-label" for="Precinct">Precinct</label>  
                                                <div class="">
                                                    <input id="precinct" name="precinct" type="text" placeholder="" class="form-control input-md" value="{{$record->precinct}}" required>
                                                </div>
                                            </div>
                                            <!-- <div class="form-group col-md-2">
                                            <label class="control-label" for="Barangay">Barangay</label>
                                                <div class="">
                                                    
                                                    <select name="slc1" id="slc1" onchange="_1sel();" class="form-control">
                                                    <option value="{{$record->brgy}}">{{$record->brgy}}</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group col-md-2">
                                            <label class="control-label" for="Precinct">Precinct</label>
                                                <div class="">
                                                    <select name="slc2" id="slc2" class="form-control">
                                                    <option value="{{$record->precinct}}">{{$record->precinct}}</option>
                                                    </select>    
                                                </div>
                                            </div> -->
                                            
                                        </div>

                                        <!-- Button -->
                    @endforeach                    
                                      
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-12">
                                        <button class="btn btn-large btn-primary " type="submit">Save</button> 
                                        </div>
                                    </div>     
                                </div>

                 </form>
                </div> <!--end x_content-->
         </div><!--end x_panel-->
    </div><!--end col-->
</div><!--end row-->
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('build/js/voters.js') }}"></script>
<!-- /main -->
@endsection