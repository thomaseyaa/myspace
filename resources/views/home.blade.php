@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Write your space here</div>
                <div class="card-body">
                    <livewire:form/>
                </div>
            </div>

            <div>
                <livewire:posts/>
            </div>
        </div>
    </div>
</div>
@endsection
