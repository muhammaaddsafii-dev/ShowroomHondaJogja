@extends('admin.master')
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Input Data Katalog</h4>
                            <p class="card-description">
                                Data katalog ini merupakan daftar harga resmi mobil Honda DIY-JATENG
                            </p>
                            <form class="forms-sample" method="POST" action="{{ url('/catalog/store') }}"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="name">Nama</label>
                                    <input type="text" class="form-control" name="name" id="name"
                                        placeholder="Nama Mobil" required>
                                </div>
                                <div class="form-group">
                                    <label for="type">Tipe</label>
                                    <input type="text" class="form-control" name="type" id="type"
                                        placeholder="Tipe Mobil" required>
                                </div>
                                <div class="form-group">
                                    <label for="transmision">Transmisi</label>
                                    <input type="text" class="form-control" name="transmision" id="transmision"
                                        placeholder="Transmisi" required>
                                </div>
                                <div class="form-group">
                                    <label for="price">Harga</label>
                                    <input type="text" class="form-control" name="price" id="price"
                                        placeholder="Harga" required>
                                </div>
                                <div class="form-group">
                                    <label>File upload</label>
                                    <input type="file" name="img[]" class="file-upload-default">
                                    <div class="input-group col-xs-12">
                                        <input type="text" class="form-control file-upload-info" disabled
                                            placeholder="Upload Image">
                                        <span class="input-group-append">
                                            <button class="file-upload-browse btn btn-primary"
                                                type="button">Upload</button>
                                        </span>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                <button class="btn btn-light">Cancel</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
