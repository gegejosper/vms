@extends('layouts.front')

@section('content')
<div class="row">
              <div class="col-md-9 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                   
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                         <div class="alert alert-success">
                                <p>Voters Updated Successfully. <a href="/brgy/precinct/{{$precinct}}">Back</a></p>
                            </div>
                  </div>
                </div>
              </div>
            </div>

@endsection
