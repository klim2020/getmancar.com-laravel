@once
    @push('styles')
        <style>
            .card-tariff{
                min-width:320px;
                padding:20px;
                min-height:530px;
                position:relative;
                border-radius:25px;
                transition:transform 1s;
            }

            .card-tariff:hover{
                transform: translateY(-50px);
            }

            .card-bg{
                background-image:url('/images/content/layout/card_top.svg');
                width:100%;
                height:100%;
                position:absolute;
                top:0px;
                left:0px;
                background-size: contain;
                background-repeat: no-repeat;
                align-items: stretch;
            }

            .card-tariff__wrapper{
                position:relative;
                z-index:2;
            }

            .card-tariff__description{
                padding-top:40px;
            }

            .card-tariff__description p{
                font-family: 'Roboto', serif;
                font-style: normal;
                font-weight: 400;
                font-size: 2rem;
                line-height: 24px;
            }

            .card-tariff__price{
                padding-top:40px;
                text-align:right;
            }

            .card-tariff__bottom-content{
                text-align:left;
                padding-top:120px;
            }

            .card-tariff__bottom-content li{
                font-family: 'Roboto', serif;
                font-style: normal;
                font-weight: 400;
                font-size: 2.4rem;
                line-height: 45px;

                /* or 150% */


            }
        </style>
    @endpush
@endonce

@push('scripts')

@endpush

<div class="card-tariff lightened_background">
    <div class="card-bg"></div>
    <div class="card-tariff__wrapper">

        <div class="card-tariff__header">
            <h3>МИНУТА + 12 грн/км</h3>
        </div>
        <div class="card-tariff__description">
            <p>Тариф для поїздок містом на декілька годин, відмінно використати при першому знайомстві з послугою
            </p>
        </div>
        <div class="card-tariff__price">
            <h2>2.75 ₾/мин</h2>
        </div>
        <div class="card-tariff__bottom-content">
            <ul>
                <li class="text-bolder">Включенный пробег    0 км</li>
                <li>Бронирование               0 ₾/20 мин.</li>
                <li>Ожидание                       1 ₾</li>
                <li>Передача                        0.3 ₾</li>
                <li>Перепробег                   12 ₾/за каждый км</li>
                <li>Супер страховка         1.2 ₾</li>
            </ul>

        </div>
    </div>

</div>
