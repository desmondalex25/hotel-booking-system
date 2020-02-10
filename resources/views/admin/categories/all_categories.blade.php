@extends('layouts.main')

@section('content')
    <div class="page-wrapper">
        <div class="content container-fluid">
            <div class="row">
                <div class="col-sm-8 col-4">
                    <h4 class="page-title">Pricing</h4>
                </div>
                <div class="col-sm-4 col-8 text-right m-b-30">
                    <a href="{{ route('categories.create') }}" class="btn btn-primary btn-rounded pull-right"><i class="fa fa-plus"></i> Add Pricing</a>
                </div>
            </div>
            @foreach($categories as $category)

                <div class="row text-center">
                    <div class="col-sm-6 col-md-8 col-lg-8 col-xl-12">
                        <div class="pricing-box">
                            <h3 class="pricing-title">{{ $category->type }}</h3>
                            <h1 class="pricing-rate"><sup>$</sup>{{ $category->price }}</h1>
                            <p>Lorem ipsum dolor sit amet</p>
                            <ul>
                            <li><i class="fa fa-check" aria-hidden="true"></i> <b>{{ $category->price }}</b></li>
                            <li><i class="fa fa-check" aria-hidden="true"></i> Free Wifi</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i> Air Conditioning</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i> Laundry</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i> Parking</li>
                            <li>&nbsp;</li>
                            </ul>
                            <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-primary btn-rounded w-md">Edit</a>
                        </div>
                    </div>
                    @endforeach

                    <div class="col-sm-6 col-md-4 col-lg-8 col-xl-3">
                        <div class="pricing-box add-pricing">
                            <div class="display-table">
                                <div class="table-cell">
                                    <a href="{{ route('categories.create') }}" class="btn add-price-btn btn-rounded"><i class="fa fa-plus" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    @endsection