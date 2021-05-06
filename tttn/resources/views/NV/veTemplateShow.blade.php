<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <style media="all">
    .cardWrap {
        width: 27em;
        margin: 3em auto;
        color: #fff;
        font-family: sans-serif;
    }

    .card {
        background: linear-gradient(to bottom, #e84c3d 0%, #e84c3d 26%, #ecedef 26%, #ecedef 100%);
        height: 11em;
        float: left;
        position: relative;
        padding: 1em;
        margin-top: 100px;
    }

    .cardLeft {
        border-top-left-radius: 8px;
        border-bottom-left-radius: 8px;
        width: 16em;
    }

    .cardRight {
        width: 6.5em;
        border-left: 0.18em dashed #fff;
        border-top-right-radius: 8px;
        border-bottom-right-radius: 8px;
    }

    .cardRight:before,
    .cardRight:after {
        content: "";
        position: absolute;
        display: block;
        width: 0.9em;
        height: 0.9em;
        background: #fff;
        border-radius: 50%;
        left: -0.5em;
    }

    .cardRight:before {
        top: -0.4em;
    }

    .cardRight:after {
        bottom: -0.4em;
    }

    h1 {
        font-size: 1.1em;
        margin-top: 0;
    }

    h1 span {
        font-weight: normal;
    }

    .title,
    .name,
    .seat,
    .time {
        text-transform: uppercase;
        font-weight: normal;
        margin: 0;
    }

    .title h2,
    .name h2,
    .seat h2,
    .time h2 {
        font-size: 0.9em;
        color: #525252;
        margin: 0;
    }

    .title span,
    .name span,
    .seat span,
    .time span {
        font-size: 0.7em;
        color: #a2aeae;
    }

    .time {
        float: center;
    }

    .seat {
        float: left;
    }

    .eye {
        position: relative;
        width: 2em;
        height: 1.5em;
        background: #fff;
        margin: 0 auto;
        border-radius: 1em/0.6em;
        z-index: 1;
    }

    .eye:before,
    .eye:after {
        content: "";
        display: block;
        position: absolute;
        border-radius: 50%;
    }

    .eye:before {
        width: 1em;
        height: 1em;
        background: #e84c3d;
        z-index: 2;
        left: 8px;
        top: 4px;
    }

    .eye:after {
        width: 0.5em;
        height: 0.5em;
        background: #fff;
        z-index: 3;
        left: 12px;
        top: 8px;
    }

    .number {
        text-align: center;
        text-transform: uppercase;
    }

    .number h3 {
        color: #e84c3d;
        font-size: 2.5em;
    }

    .number span {
        color: #a2aeae;
    }

    #container {
        text-align: center;
    }

    #bloc1,
    #bloc2 {
        display: inline;
    }

    @media print {
        @page {
            margin: 0;
        }

        body {
            margin: 1.6cm;
        }
    }
    </style>
</head>

<body>
    <div class="cardWrap">
        <div class="card cardLeft">
            <h1>Startup <span>Cinema</span></h1>
            <div class="title" style="margin-top:5px">
                <span>MÃ VÉ</span>
                <h2>#{{$ve->idVe}}</h2>

            </div>
            <div class="name">
                <span>PHIM</span>
                <h2>{{$ve->tenPhim}}</h2>

            </div>
            <div id="container">
                <div class="seat" id="bloc1">
                    <span>PHÒNG</span>
                    <h2>{{$ve->vitriphong}}</h2>

                </div>
                <div class="time" id="bloc2">
                    <span>SUẤT CHIẾU</span>
                    <h2>{{$ve->giochieu}}</h2>

                </div>
            </div>

        </div>
        <div class="card cardRight">
            <div class="eye"></div>
            <div class="number" style="margin-top:20px">
                <span>GHẾ</span>
                <h3>{{$ve->vitrighe}}</h3>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
            integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
        </script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
            integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
        </script>

</body>

</html>