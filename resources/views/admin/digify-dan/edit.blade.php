@extends('layouts.Cms') @section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 mb-3">
            <div class="card">
                <div
                    class="card-header h3 font-weight-bold bg-primary text-white"
                >
                    <div class="row">
                        <div class="col-6 text-center">
                            Digify Tv Prices
                        </div>
                        <div class="col-6 text-center">
                            D.A.N Prices
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            @include('admin/digify-dan.digify')
                        </div>
                        <div class="col-6">
                            @include('admin/digify-dan.dan')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
