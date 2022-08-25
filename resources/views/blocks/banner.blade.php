@php
    $imagename = $imagename ?? 'image__main-picture';
@endphp
<!--Banner-->
<div class = "container-fluid bannerblock" >
    <div class="bg-car-right {{ $imagename }}"></div>
    <div class="bannerblock__wrapper">
        <div class="bannerblock__header">
            <h2>Getmancar</h2> <span>carsharing</span>
        </div>

        <div class="bannerblock__text h2-like-size">
            <p>Per minute car rental <br />in Ukraine and Georgia</p>
        </div>

        <div class="bannerblock__button h1-like-size">
            <button class="btn btn-primary"><span>Start now</span></button>
        </div>

    </div>
</div>
