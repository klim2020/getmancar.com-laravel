@extends('layouts.batumi')
@section('title', 'welcome to getmancar.com')

@section('background')
    @include('parts.background')
     <div class="bg__batumi"></div>
@endsection

@section('banner')
    @include('blocks.banner',['imagename'=>'image__batumi-picture'])
@endsection

@section('about')
    @include('blocks.about',[])
@endsection

@section('why_we')
    @include('blocks.why_we',[])
@endsection

@section('how_to_use')
    @include('blocks.how_to_use',[])
@endsection

@section('text')
    @include('blocks.text')
@endsection


@section('tariffs')
    @include('blocks.tariffs')
@endsection

@section('app_download')
    @include('blocks.app_download')
@endsection

