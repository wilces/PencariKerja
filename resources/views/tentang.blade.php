@extends('template')
@section('contentWebsite')

    <div class="well well-lg">
        <div class="container">
            <h2>Tentang Website Pencari Kerja</h2>
            <span>Detail tentang penjelasan dan fungsi dari website ini.</span>
        </div>
    </div>

    <div class="container">

        <div class="row">

            <div class="col-xs-3">

                <div class="list-group">
                    <a href="#tentang" class="list-group-item"><i class="glyphicon glyphicon-info-sign"></i> Tentang Website</a>
                    <a href="#visi" class="list-group-item"><i class="glyphicon glyphicon-hdd"></i> Visi Misi</a>
                    <a href="{{ url("contact") }}" class="list-group-item"><i class="glyphicon glyphicon-phone-alt"></i> Kontak Kami</a>
                </div>

            </div>
            <div class="col-xs-9">
                <div class="panel panel-default" id="tentang">

                    <div class="panel-heading"><h3 style="padding : 0; margin : 0;">Tentang Website Pencari Kerja</h3></div>
                    <div class="panel-body">
                        Website ini bertujuan sebagai website pemberi kerja, dan juga sebagai studi kasus untuk belajar laravel.
                    </div>

                </div>
                <div class="panel panel-default" id="visi">

                    <div class="panel-heading"><h3 style="padding : 0; margin : 0;">Visi Misi</h3></div>
                    <div class="panel-body">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sed diam eget risus varius blandit sit amet non magna. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Cras mattis consectetur purus sit amet fermentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Aenean lacinia bibendum nulla sed consectetur.
                    </div>

                </div>
            </div>

        </div>

    </div>

@endsection