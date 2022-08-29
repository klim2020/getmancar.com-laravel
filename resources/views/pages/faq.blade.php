@extends('layouts.contacts')

@section('title', 'welcome to getmancar.com')

@section('background')
    @include('parts.background')
@endsection

@section('banner')
    @include('blocks.banner',['headerText'=>'Faq',
                            'imagename'=>'image__faq',
                            'hideContent'=> true,
                            'resizeWrapper'=>'bannerblock__contacts-page'])
@endsection

@section('faq')
    @include('blocks.faq')
@endsection
