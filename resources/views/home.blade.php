@extends('templates.master')
@section('tab-title', 'Beranda - Fafastore')
@section('content')

    <div id="content">
        <div class="intro-home">
            <div class="preview-title">
                <h1>SHOES NICE TO USEFUL GOING TO BE BETTER NOW</h1>
            </div>
            <div class="preview-desc">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur itaque culpa repudiandae obcaecati! Sunt molestiae, dolore suscipit minima deleniti praesentium eveniet maiores quo aliquam, illo saepe sapiente fugiat, nobis odio in fuga blanditiis veritatis impedit vitae accusantium omnis ipsum odit architecto. Saepe ratione porro aliquam nobis facilis quas fugiat architecto.
            </div>
        </div>

        <div id="list-product" class="container">
            <div class="row">

            @foreach( $datas as $data )
                <div class="col-md-4">
                    <a href="/detail/{{ $data->id }}">
                        <div class="card-product">
                            <div class="desc-product">
                                <h3>{{ $data->nama_produk }}</h3>
                                {{ $data->keterangan_produk }}
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach

           
                </div>
            </div>
        </div>

@endsection