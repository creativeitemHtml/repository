<style>
    * {
        font-family: 'Gotham';
    }

    .popup {
        width: 600px;
        height: 572px;
        border-radius: 26px;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background: #fff;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }

    h4 {
        color: #FF6047;
        text-shadow: 1px 2px 0 #00000080;
        font-weight: 900;
        font-style: italic;
        font-size: 37px;
        margin-top: 20px;
        margin-bottom: 28px;
    }

    h2>span:nth-child(1) {
        font-size: 100px;
        font-weight: 900
    }
</style>

<div class="popup">

    <span class="element-1"></span>
    <span class="element-2"></span>
    <span class="element-2"></span>

    <div class="content">
        <a href="{{ route('lms.home') }}">
            <img src="{{ asset('assets/img/growup-logo.svg') }}" alt="grow-up-lms-logo">
        </a>

        <h4 class="text-uppercase">New Year Sale</h4>
        <h2>
            <span>50</span>
            <span>
                <span>%</span>
                <span>OFF</span>
            </span>
        </h2>
        <p class="text-uppercase">Ends in four days</p>

        <a href="{{ route('lms.signup') }}">Start Now</a>
    </div>

    <button type="button" class="close-popup">x</button>
</div>
