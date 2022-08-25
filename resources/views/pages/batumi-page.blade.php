@extends('layouts.batumi')
@section('title', 'welcome to getmancar.com')

@section('background')
    <div class="bg-car-circle"></div>
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
