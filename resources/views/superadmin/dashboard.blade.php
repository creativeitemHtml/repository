<style>
    .dashboard_col {}

    .dashboard_col .card {
        flex-direction: inherit;
        justify-content: space-between;
        padding: 20px;
        background: #fff;
        box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
        border-radius: 5px
    }

    .dashboard_col .card h4 {
        font-size: 17px;
        font-weight: 500;
        color: #000000;
    }

    .dashboard_col .card p {
        font-size: 20px;
        font-weight: 600;
        margin-top: 10px;
    }

    .dash_text {
        font-size: 20px;
        font-weight: 600;
        display: inline-block;
        text-transform: capitalize;
        margin-bottom: 25px;
        color: #000;
    }

    .svg_arrow svg {
        height: 76px;
        width: 41px;
        opacity: 0.2;
    }

    .color_1 {
        border-left: 2px solid #17a589;
    }

    .color_3 {
        border-left: 2px solid #48c9b0;
    }

    .color_2 {
        border-left: 2px solid #00a3ff;
    }

    .color_4 {
        border-left: 2px solid #17a589;
    }

    .mw-100 {
        max-width: 100%;
    }

    .chartjs-render-monitor {
        height: 325px !important;
    }
</style>

<div class="l_col_main mb-60">
    <div class="download-title-2 d-flex align-items-center justify-content-between">
        <h2>{{ get_phrase($page_title) }}</h2>
        <button class="d-lg-none mobile-menu-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
            <img src="{{ asset('assets/img/new-icons-images/menu-icon.svg') }}" alt="menu">
        </button>
    </div>
</div>

<div class="row pt-26">
    <div class="col-lg-12">
        <div class="row">
            <div class="col-lg-4">
                <div class="col-lg-12 mb-3">
                    <div class="dashboard_col">
                        <div class="card color_1">
                            <div class="card-head">
                                <h4>{{ get_phrase('Total User') }}</h4>
                                <p> {{ count($user) }}</p>
                            </div>
                            <span class="svg_arrow">
                                <svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 24 24" width="48" height="48">
                                    <path
                                        d="M16.5,24a1.5,1.5,0,0,1-1.489-1.335,3.031,3.031,0,0,0-6.018,0,1.5,1.5,0,0,1-2.982-.33,6.031,6.031,0,0,1,11.982,0,1.5,1.5,0,0,1-1.326,1.656A1.557,1.557,0,0,1,16.5,24Zm6.167-9.009a1.5,1.5,0,0,0,1.326-1.656A5.815,5.815,0,0,0,18.5,8a1.5,1.5,0,0,0,0,3,2.835,2.835,0,0,1,2.509,2.665A1.5,1.5,0,0,0,22.5,15,1.557,1.557,0,0,0,22.665,14.991ZM2.991,13.665A2.835,2.835,0,0,1,5.5,11a1.5,1.5,0,0,0,0-3A5.815,5.815,0,0,0,.009,13.335a1.5,1.5,0,0,0,1.326,1.656A1.557,1.557,0,0,0,1.5,15,1.5,1.5,0,0,0,2.991,13.665ZM12.077,16a3.5,3.5,0,1,0-3.5-3.5A3.5,3.5,0,0,0,12.077,16Zm6-9a3.5,3.5,0,1,0-3.5-3.5A3.5,3.5,0,0,0,18.077,7Zm-12,0a3.5,3.5,0,1,0-3.5-3.5A3.5,3.5,0,0,0,6.077,7Z" />
                                </svg>
                            </span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12 mb-3">
                    <div class="dashboard_col">
                        <div class="card color_2">
                            <div class="card-head">
                                <h4>{{ get_phrase('Total Earning') }}</h4>
                                <p>{{ currency($subscriptions) }}</p>
                            </div>
                            <span class="svg_arrow">
                                <svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 24 24" width="48" height="48">
                                    <path
                                        d="M16.5,10c-1.972-.034-1.971-2.967,0-3h1c1.972,.034,1.971,2.967,0,3h-1Zm-3.5,4.413c0-1.476-.885-2.783-2.255-3.331l-2.376-.95c-.591-.216-.411-1.15,.218-1.132h1.181c.181,0,.343,.094,.434,.251,.415,.717,1.334,.962,2.05,.547,.717-.415,.962-1.333,.548-2.049-.511-.883-1.381-1.492-2.363-1.684-.399-1.442-2.588-1.375-2.896,.091-3.161,.875-3.414,5.6-.285,6.762l2.376,.95c.591,.216,.411,1.15-.218,1.132h-1.181c-.181,0-.343-.094-.434-.25-.415-.717-1.334-.961-2.05-.547-.717,.415-.962,1.333-.548,2.049,.511,.883,1.381,1.491,2.363,1.683,.399,1.442,2.588,1.375,2.896-.091,1.469-.449,2.54-1.817,2.54-3.431ZM18.5,1H5.5C2.468,1,0,3.467,0,6.5v11c0,3.033,2.468,5.5,5.5,5.5h3c1.972-.034,1.971-2.967,0-3h-3c-1.379,0-2.5-1.122-2.5-2.5V6.5c0-1.378,1.121-2.5,2.5-2.5h13c1.379,0,2.5,1.122,2.5,2.5v2c.034,1.972,2.967,1.971,3,0v-2c0-3.033-2.468-5.5-5.5-5.5Zm-5.205,18.481c-.813,.813-1.269,1.915-1.269,3.064,.044,.422-.21,1.464,.5,1.455,1.446,.094,2.986-.171,4.019-1.269l6.715-6.715c2.194-2.202-.9-5.469-3.157-3.343l-6.808,6.808Z" />
                                </svg>
                            </span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12 mb-3">
                    <div class="dashboard_col ">
                        <div class="card color_3">
                            <div class="card-head">
                                <h4>{{ get_phrase('Total Downloads') }}</h4>
                                <p>{{ count($downloads) }}</p>
                            </div>
                            <span class="svg_arrow">
                                <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 1792 1536">
                                    <path
                                        d="M1792 1120v320q0 40-28 68t-68 28h-320q-40 0-68-28t-28-68v-320q0-40 28-68t68-28h96V832H960v192h96q40 0 68 28t28 68v320q0 40-28 68t-68 28H736q-40 0-68-28t-28-68v-320q0-40 28-68t68-28h96V832H320v192h96q40 0 68 28t28 68v320q0 40-28 68t-68 28H96q-40 0-68-28t-28-68v-320q0-40 28-68t68-28h96V832q0-52 38-90t90-38h512V512h-96q-40 0-68-28t-28-68V96q0-40 28-68t68-28h320q40 0 68 28t28 68v320q0 40-28 68t-68 28h-96v192h512q52 0 90 38t38 90v192h96q40 0 68 28t28 68z" />
                                </svg>
                            </span>

                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-8 mb-3">
                <div class="dashboard_col ">
                    <div class="card color_3 flex-column">
                        <h4>{{ get_phrase('Earning Chart for Subscription:') }}</h4>
                        <canvas id="myChart" class="mw-100 w-100"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<script src="{{ asset('assets/js/chart.js') }}"></script>
<script>
    const xValues = [0, "January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
    new Chart("myChart", {
        type: "line",
        data: {
            labels: xValues,
            datasets: [{
                fill: false,
                lineTension: 0,
                backgroundColor: "rgba(0,0,255,1.0)",
                borderColor: "rgba(0,0,255,0.1)",
                data: <?php print_r(json_encode($monthly_amount)); ?>
            }]
        },
        options: {
            legend: {
                display: true
            },
        }
    });
</script>
