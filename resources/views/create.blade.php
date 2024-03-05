@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Create Blog') }}</div>
                @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
                @endif
                <div class="card-body">
                    <div class="row">
                        <form class="form" method="post"  action="{{ route('contact.store') }}" enctype="multipart/form-data">
                            @csrf                           
                            <div class="card-body ">   
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label>{{ __("Title") }}<span class="text-danger">*</span></label>
                                        <input type="text" name="title" value="{{ old('title') }}" required  class="form-control  {{ $errors->has('title') ? ' is-invalid' : '' }}" placeholder="{{ __('Enter  title') }}">
                                        @if ($errors->has('title'))
                                         <div class="invalid-feedback">{{ $errors->first('title') }}</div>
                                        @endif
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>{{ __("SubTitle") }}<span class="text-danger">*</span></label>
                                        <input type="text" name="subtitle" value="{{ old('subtitle') }}" required  class="form-control  {{ $errors->has('subtitle') ? ' is-invalid' : '' }}" placeholder="{{ __('Enter  subtitle') }}">
                                        @if ($errors->has('subtitle'))
                                         <div class="invalid-feedback">{{ $errors->first('title') }}</div>
                                        @endif
                                    </div>
                                </div>          
                                <div class="form-group">
                                    <label for="name" class="form-label"> Description <span class="text-danger">*</span></label>
                                    <textarea name="description" id="description" value="" maxlength="512" class="form-control  {{ $errors->has('description') ? ' is-invalid' : '' }}" placeholder="{{ __('Enter description') }}"></textarea>
                                    @if ($errors->has('description'))
                                    <div class="invalid-feedback">{{ $errors->first('description') }}</div>
                                    @endif
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                <button type="reset" class="btn btn-secondary" onclick="window.location='{{route('home')}}'">{{ __("Back") }}</button>
                            </div>
                        </form>
                    </div>                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection