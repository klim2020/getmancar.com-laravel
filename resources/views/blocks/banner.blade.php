@php
    $imagename = $imagename ?? 'image__main-picture';
    $hideContent = $hideContent ?? false;
    $headerText = $headerText ?? '';
    $resizeWrapper = $resizeWrapper ?? ''
@endphp
<!--Banner-->
<div class = "container-fluid bannerblock {{ $resizeWrapper }}" >
    <div class="bg-car-right {{ $imagename }}">
        <div class ="block-wrapper">
            <h2> {{ $headerText }} </h2>
        </div>
    </div>
    @if(!$hideContent)
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
    @endif
</div>
