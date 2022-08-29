@extends('layouts.contacts')
@section('title', 'welcome to getmancar.com')


@section('banner')
    @include('blocks.banner',['headerText'=>'Contacts',
                            'imagename'=>'image__contacts_page',
                            'hideContent'=> true,
                            'resizeWrapper'=>'bannerblock__contacts-page'])
@endsection

@section('contacts_text')
    @include('blocks.contacts_text')
@endsection
