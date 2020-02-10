@extends('layouts.main')
@section('content')
    <div class="page-wrapper">
        <div class="content">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h4 class="page-title">{{ isset($gallery) ? 'Edit Gallery' : 'Add Gallery' }}</h4>
                </div>

            </div>
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <form method="post" action="{{ isset($gallery) ? route('gallery.update', $gallery->id) : route('gallery.store') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        @if(isset($gallery))
                            {{ method_field('PUT') }}
                        @endif
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Image Title</label>
                                    <input class="form-control" name="image_title" value="{{ isset($gallery) ? $gallery->image_title : '' }}" type="text">
                                <div class="text-danger">
                                    <strong>{{ $errors->first('image_title') }}</strong>
                                </div>
                                </div>
                            </div>

                        </div>

                        <div class="row">

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Image Description</label>

                                    <textarea class="form-control" name="description" id="" cols="30" rows="5">{{ isset($gallery) ? $gallery->description : ''}}</textarea>
                                    <div class="text-danger">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 mb-3 form-group">
                            <input type="file" class="custom-file-input form-control" name="image_name">
                            <label class="custom-file-label">Choose file (Room Photo)</label>
                            @if(isset($gallery))
                                <div class="thumbnail text-center">
                                    <img class="img-thumbnail" src="{{ Storage::url($gallery->image_name) }}" width="400" height="50" alt="">

                                </div>
                            @endif
                            <div class="text-danger">
                                <strong>{{ $errors->first('image_name') }}</strong>
                            </div>
                        </div>

                        <div class="m-t-20 text-center">
                            <button type="submit" class="btn btn-primary submit-btn">{{ isset($gallery) ? 'Update' : 'Save' }}</button>
                            <button type="reset" class="btn btn-danger submit-btn">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
@endsection