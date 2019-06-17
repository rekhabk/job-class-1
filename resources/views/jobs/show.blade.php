@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{$job->title}}</div>

                <div class="card-body">
                    <p>
                        <h3> Description</h3>
                        {{$job->description}}
                    </p>
                    <p>
                        <h3> Duties</h3>
                         {{$job->roles}}
                         </P
                   
                </div>
            </div>
        </div>
</div>

        <div class="col-md-4">
        <div class="card">
                <div class="card-header">Short Info</div>

                <div class="card-body">
                    <p>Company:{{$job->company->cname}}</P>
                    <p>Address:{{$job->address}}</P>

                    <p>Employment Type:{{$job->type}}</P>
                    <p>Position:{{$job->position}}</P>
                    <p>Date:{{$job->created_at->diffForHumans()}}</P>


                   
                </div>
</div>
<br>
@if(Auth::check()&&Auth::user()->_user_type='seeker')
<button class="btn btn-success" style="width:100%";> Apply </button>
@endif
    </div>



</div>
@endsection
