@php
    $imagename = $imagename ?? 'image__main-picture';
    $hideContent = $hideContent ?? false;
    $headerText = $headerText ?? '';
    $resizeWrapper = $resizeWrapper ?? '';
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
                <h1>{{ __('main.getmancar') }}</h1> <span>{{ __('main.carshering') }}</span>
            </div>

            <div class="bannerblock__text h2-like-size">
                <p class="ffs"> {!! __('main.per_minute_car_renta') !!} </p>
            </div>

            <div class="bannerblock__button">
                <button class="btn btn-primary"><span> {!! __('main.start_now') !!} </span></button>
            </div>

        </div>
    @endif
</div>
