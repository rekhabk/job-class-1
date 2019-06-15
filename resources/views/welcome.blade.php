@extends('layouts.app');

@section('content')

<div class="container">
    <div class="row">
        <table class="table">
            <thead>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
</thead>
<tbody>
    <tr>
        <td><img src="{{asset('avatar/man.jpg')}}" width="80"></td>
        <td>position:web developer</td>
        <td> Address:melboure</td>
        <td>Date:2019=6-20</td>
        <td><button class="btn btn-success btn-ssm"> Apply</button></td>
</tr>
</tbody>
</table>
</div>
</div>
@endsection