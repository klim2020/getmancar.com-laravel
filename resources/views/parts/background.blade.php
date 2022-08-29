@once
    @push('styles_footer')
        <style>
            .bg-noise{
                position:absolute;
                width:100%;
                height:100%;
                background-image: url('{{asset('/images/content/noise.png')}}');
                z-index:-5;
            }
            .bg-car-circle{

            }
            .bg-gray{
                position:absolute;
                width:100%;
                height:100%;
                background: #636363;
                z-index:-9;
            }
        </style>
    @endpush
@endonce
<div class="bg-gray"></div>
<div class ="bg-noise"></div>
<div class="bg-car-circle"></div>

