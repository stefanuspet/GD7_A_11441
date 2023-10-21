@extends('dashboard')
@section('content')
<style>
    .poster {
        float: left;
        width: 30%;
        height: 100%;
        object-fit: cover;
        position: absolute;
        top: 0;
        left: 0;
        z-index: -1;
        overflow: hidden;
    }

    .table-container {
        margin-left: 0;
        background-color: #23141E;
        width: 100%;
        height: 100%;
        object-fit: cover;
        position: absolute;
        top: 0;
        padding-top: 20px;
        padding-left: 20px;
        padding-right: 20px;
        left: 0;
        z-index: -1;
        overflow-x: hidden;
        border: 1px solid black;
    }

    .table-container::-webkit-scrollbar {
        width: 0px;
    }

    .table-container .content-index {
        margin-top: 20px;
        margin-left: 20px;
    }

    h2,
    h4,
    h5,
    p {
        font-family: goldenbook, serif;
        font-style: normal;
    }

    h2,
    h4,
    h5 {
        color: #FFFFFF;
    }

    .title:hover h2 {
        color: #D6B56E;
    }

    .title p {
        color: #FFFFFF;
        margin-bottom: 2px;
        margin-right: 10px;
    }

    .card {
        background-color: transparent;
        box-shadow: 0px 0px 20px rgba(0, 0, 0, 1);
        border-radius: 10px;
        color: #FFFFFF;
        transition: box-shadow 0.3s;
        /* Animasi efek bayangan selama 0.3 detik */
    }

    .card:hover {
        box-shadow: 0px 0px 20px rgba(255, 215, 0, 1);
        /* Ubah efek bayangan saat dihover */
    }

    .custom-scrollbar {
        max-width: 100%;
        max-height: 70vh;
        /* padding: 10px; */
        overflow: auto;
    }

    .custom-scrollbar .content {
        width: 100%;
        height: 100%;

        background-color: #f2f2f2;
        padding: 20px;
    }

    .custom-scrollbar::-webkit-scrollbar {
        width: 10px;
    }

    .custom-scrollbar::-webkit-scrollbar-thumb {
        background: #d9b576;
        border-radius: 6px;
    }

    .custom-scrollbar::-webkit-scrollbar-thumb:hover {
        background: #ba944c;
    }

    .custom-scrollbar::-webkit-scrollbar-track {
        background: #f1f1f1;
    }


    .custom-scrollbar::-webkit-scrollbar-track {
        background: #180e14;
        border-radius: 6px;
    }
</style>
<div class="container-fluid table-container text-white mx-auto" style="width: 100%; background-color: #23141E; padding-inline: 12rem;">
    <div class="text-center mt-3">
        <h2 class="fs-3 fw-medium">2022 IU CONCERT <span class="fs-1">&#9001;</span>THE GOLDEN Hour: Under The Orange Sun<span class="fs-1">&#9002;</span></h1>
    </div>
    <div style="margin-top: 40px;">
        <p class="text-center">Our Official Merchandise</p>
        <div class="row custom-scrollbar">
            @if($merchandises->isEmpty())
            <p style="color:white">No merchandise available at the moment.</p>
            @else
            @foreach ($merchandises as $item)
            <div class="col-md-4 mb-4">
                <div class="card align-items-center justify-content-center" style="max-width: 310px; height: 310px;">
                    <img src="https://assets.stickpng.com/thumbs/580b57fbd9996e24bc43bd3c.png" alt="" width="50%">
                </div>
                <div class="card-body" style="padding-top: 10px;">
                    <p class="m-0 p-0">{{ $item->name }}</p>
                    <p class="m-0 p-0">IDR {{ number_format($item->price, 0, ',', ',') }}</p>
                </div>
            </div>
            @endforeach
            @endif
        </div>
    </div>
</div>
@endsection