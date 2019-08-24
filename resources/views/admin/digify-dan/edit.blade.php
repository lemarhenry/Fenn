@extends('layouts.Cms') @section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 mb-3">
            <div class="card">
                <div class="card-header h3 font-weight-bold bg-primary text-white">
                    <div class="row">
                        <div class="col-6">
                           Digify Tv Prices
                        </div>
                        <div class="col-6">
                             D.A.N Prices
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            <form id="digifyform">
                                <div class="col-12 mb-3">
                                    <div class="text-center font-weight-bold" id="btname">
                                        Basic Tier
                                    </div>
                                    <div class="col-12 mb-2">
                                        <input
                                            type="text"
                                            id="basic"
                                            class="form-control digify"
                                            name=""
                                            placeholder="Tier name"
                                        />
                                    </div>
                                    <div class="col-12">
                                        <input
                                            type="number"
                                            id="basicprice"
                                            class="form-control digify"
                                            placeholder="price"
                                            name="Basic price"
                                        />
                                    </div>
                                </div>
                                <div class="col-12 mb-3">
                                    <div class="text-center font-weight-bold" id="ptname">
                                        Premium Tier
                                    </div>
                                    <div class=" col-12 mb-2">
                                        <input
                                            type="text"
                                            id="premium"
                                            class="form-control digify"
                                            name="Tier name"
                                            placeholder="Tier name"
                                        />
                                    </div>
                                    <div class=" col-12">
                                        <input
                                            type="number"
                                            id="premiumprice"
                                            class="form-control digify"
                                            name="Premium price"
                                            placeholder="price"
                                        />
                                    </div>
                                </div>
                                <div class="col-12  mb-3">
                                    <div class="text-center font-weight-bold" id="etname">
                                        Elite Tier
                                    </div>
                                    <div class=" col-12 mb-2">
                                        <input
                                            type="text"
                                            id="elite"
                                            class="form-control digify"
                                            name="Tier name"
                                            placeholder="Tier name"
                                        />
                                    </div>
                                    <div class="col-12">
                                        <input
                                            type="number"
                                            id="eliteprice"
                                            class="form-control digify"
                                            name="Elite price"
                                            placeholder="price"
                                        />
                                    </div>
                                </div>
                                <div>
                                    <button class="btn" id="digifysubmitbtn">
                                    </button>
                                </div>
                            </form>
                        </div>
                           <div class="col-6">
                            <form id="danform">
                                <div class="col-12 mb-3">
                                    <div class="text-center font-weight-bold" id="dbtname">
                                        Basic Tier
                                    </div>
                                    <div class="col-12 mb-2">
                                        <input
                                            type="text"
                                            id="dbasic"
                                            class="form-control dan"
                                            name="Basic Tier"
                                            placeholder="Tier name"
                                        />
                                    </div>
                                    <div class="col-12">
                                        <input
                                            type="number"
                                            id="dbasicprice"
                                            class="form-control dan"
                                            placeholder="price"
                                            name="Basic price"
                                        />
                                    </div>
                                </div>
                                <div class="col-12 mb-3">
                                    <div class="text-center font-weight-bold" id="dptname">
                                        Premium Tier
                                    </div>
                                    <div class=" col-12 mb-2">
                                        <input
                                            type="text"
                                            id="dpremium"
                                            class="form-control dan"
                                            name="Premium Tier"
                                            placeholder="Tier name"
                                        />
                                    </div>
                                <div class=" col-12">
                                        <input
                                            type="number"
                                            id="dpremiumprice"
                                            class="form-control dan"
                                            name="Premium price"
                                            placeholder="price"
                                        />
                                    </div>
                                </div>
                                <div class="col-12  mb-3">
                                    <div class="text-center font-weight-bold" id="detname">
                                        Elite Tier
                                    </div>
                                    <div class=" col-12 mb-2">
                                        <input
                                            type="text"
                                            id="delite"
                                            class="form-control dan"
                                            name="Elite Tier"
                                            placeholder="Tier name"
                                        />
                                    </div>
                                    <div class="col-12">
                                        <input
                                            type="number"
                                            id="deliteprice"
                                            class="form-control dan"
                                            name="Elite price"
                                            placeholder="price"
                                        />
                                    </div>
                                </div>
                                <div>
                                    <button class="btn" id="dansubmitbtn">
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
