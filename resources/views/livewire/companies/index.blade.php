@extends('layouts.dashboard')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-11">

                @livewire('companies.companies')
            
        </div>
    </div>
</div>
@endsection

