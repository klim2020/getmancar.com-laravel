<div class="form-wrapper lightened_background">
    <form id="fforrm" class="" action = "contacts">
        @csrf
    <h3>Write us</h3>
        <div class="fforrm__content-wrapper flex-row">
            <div class = "fforrm-wrapper__text">
                <label class="text-bolder" for="user_name">Name</label>
                <input class = "text-bolder" id="user_name" placeholder="Dmytro" name="user_name" type="text">
            </div>
            <div class = "fforrm-wrapper__text">
                <label class="text-bolder" for="user_phone">Your Phone Number</label>
                <input class = "text-bolder" id="user_phone" placeholder="+380" name="user_phone" type="text">
            </div>
            <div class = "fforrm-wrapper__text">
                <label class="text-bolder" for="user_question">Topic of the question</label>
                <input class = "text-bolder" id="user_question" placeholder="Choose a topic" name="user_question" type="text">
            </div>
        </div>
        <div class="fforrm__content-wrapper flex-row">
            <div class = "fforrm-wrapper__text-full">
                <label class="text-bolder" for="user_comment">Your questions</label>
                <textarea class="text-bolder" id="user_comment" placeholder="Write your message" name="user_comment" type="text"></textarea>
            </div>
        </div>
        <div class="fforrm__content-wrapper flex-row" style="justify-content:center;padding:20px;"> <button class="contact-submit">Send</button></div>
    </form>


</div>
@push('styles')
    <style>
        .form-wrapper{
            width:100%;

        }
        #fforrm{

            width:100%;

        }
        #fforrm h3{
            text-align:center;
            padding:30px 0;
        }
        #fforrm input {
            /*background: rgba(255, 255, 255, 0.38);*/
            background:none;
            border-radius: 10px;
            width: 100%;
            display: block;
            border: 2px solid white;
            padding: 15px;
            margin-bottom: 26px;
            font-size: 14px;
            line-height: 18px;
        }
        .fforrm__content-wrapper{
            flex-wrap: wrap;
            justify-content: space-between;
            padding: 0px 20px;
        }
        .fforrm-wrapper__text{
            flex:0 0 45%;
        }
        .fforrm__content-wrapper label{
            display:block;
            margin:10px;
        }
        .fforrm-wrapper__text-full{
            flex:0 0 100%;
        }
        .fforrm-wrapper__text-full textarea{
            width:100%;

            resize: none;
            border-radius: 10px;
            padding-top:10px;
            padding-left: 10px;
            background:none;
            border: 2px solid white;
        }

    </style>
@endpush

@push('scripts')

@endpush
