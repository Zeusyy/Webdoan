@extends('layouts.admin')

@section('content')
<link href="{{ asset('css/article.css') }}" rel="stylesheet">


<div class="container create-form-container rounded bg-white">
    <div class="green-bar rounded-top"></div>
        
    <h1 class="d-flex justify-content-center">
        <span style="padding-left: 20px;padding-right: 20px;" class="sub-title-warpper">{{__('article.Create')}}</span>
    </h1>
    <form style="padding: 20px" action="{{route('article.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="hidden" id="formType" name="formType" value="create">
        <div class="form-group row">
            <div class="col">
                <label for="title">{{__('article.Title')}}</label>
                <input class="form-control" type="text" name="title" value="{{ old('title') }}" />
                @if ($errors->has('title'))
                    @foreach ($errors->get('title') as $error)
                        <strong>{{ $error }}</strong>
                    @endforeach
                @endif
            </div>
        </div>
        <div class="form-group row">
            <div class="col">
                <label for="abstract">{{__('article.Abstract')}}</label>
                <input class="form-control" type="text" name="abstract" value="{{ old('abstract') }}" />
                @if ($errors->has('abstract'))
                    @foreach ($errors->get('abstract') as $error)
                        <strong>{{ $error }}</strong>
                    @endforeach
                @endif
            </div>
        </div>
        <div class="form-group row">
            <div class="col">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="customFile" name="thumbnail" >
                    <label class="custom-file-label" for="customFile">{{__('article.Choose thumbnail')}}</label>
                    @if ($errors->has('thumbnail'))
                        @foreach ($errors->get('thumbnail') as $error)
                            <div class="col-md-12">{{ $error }}</div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
        <div class="form-group row">
            <div class="col">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="background" name="background" >
                    <label class="custom-file-label" for="background">{{__('article.Choose background')}}</label>
                    @if ($errors->has('background'))
                        @foreach ($errors->get('background') as $error)
                            <div class="col-md-12">{{ $error }}</div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
        <div class="form-group row">
            <div class="col">
                <label for="content">{{__('article.Content')}}</label>
                <textarea name="content" id="ckeditor"></textarea>
                @if ($errors->has('price'))
                @foreach ($errors->get('price') as $error)
                <strong>{{ $error }}</strong>
                @endforeach
                @endif
            </div>
        </div>
        <div class="d-flex justify-content-end">
            
            <button class="btn btn-success" type="submit">{{__('article.Create')}}</button>
            
        </div>
    </form>
</div>
<script src="//cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('ckeditor');
</script>
@endsection