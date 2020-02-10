@extends('layouts.main')

@section('content')

    <div class="page-wrapper">
        <div class="content">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <h4 class="page-title">Add Pricing</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <form method="post" action="{{ isset($category) ? route('categories.update') : route('categories.store') }}">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label>Pricing Name</label>
                            <input name="type" value="{{ isset($category) ? $category->type : '' }}" class="form-control" type="text" placeholder="Single">
                        </div>
                        <div class="form-group">
                            <label>Pricing Amount</label>
                            <input name="price" value="{{ isset($category) ? $category->price : '' }}" class="form-control" type="text">
                        </div>
                        {{--<div class="form-group">--}}
                            {{--<label>Pricing Description</label>--}}
                            {{--<textarea cols="30" rows="6" class="form-control"></textarea>--}}
                        {{--</div>--}}
                        <div class="form-group">
                            <label class="display-block">Pricing Status</label>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="status" id="pricing_active" value="option1" checked>
                                <label class="form-check-label" for="pricing_active">
                                    Active
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="status" id="pricing_inactive" value="option2">
                                <label class="form-check-label" for="pricing_inactive">
                                    Inactive
                                </label>
                            </div>
                        </div>
                        <div class="m-t-20 text-center">
                            <button type="submit" class="btn btn-primary btn-lg">Publish Pricing</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endsection