@extends('layouts.contacts')

@section('title', 'welcome to getmancar.com')



@section('banner')
    @include('blocks.banner',['headerText'=>'Blog',
                            'imagename'=>'image__blog',
                            'hideContent'=> true,
                            'resizeWrapper'=>'bannerblock__contacts-page'])
@endsection


