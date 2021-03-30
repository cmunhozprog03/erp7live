@extends('layouts.dashboard')

@section('content')
<div class="container-fluid">
    <div class="w3-card-4">
        <div class="row justify-content-center">

            <div class="col-md-12">
                <div class="card">
                    

                    <div class="card-body">
                        @livewire('companies.companies')
                    </div>
                </div>
            </div>


    </div>
    </div>

</div>
@endsection
