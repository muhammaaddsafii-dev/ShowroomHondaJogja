@extends('admin.master')
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                @if (session('success'))
                    <div class="ml-3 alert alert-success">
                        {{ session()->get('success') }}
                    </div>
                @endif
                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Input Data Mobil</h4>
                            <p class="card-description">
                                Data mobil ini merupakan daftar mobil yang available di Show Room Honda Jogja
                            </p>
                            <form class="forms-sample" method="POST" action="{{ url('/car/store') }}"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="name">Nama</label>
                                    <input type="text" class="form-control" name="name" id="name"
                                        placeholder="Nama Mobil" required>
                                </div>
                                <div class="form-group">
                                    <label for="type">Kapasitas Mesin (cc)</label>
                                    <input type="text" class="form-control" name="capacity" id="capacity"
                                        placeholder="Kapasitas Mesin Mobil" required>
                                </div>
                                <div class="form-group">
                                    <label for="transmision">Kecepatan (rpm)</label>
                                    <input type="text" class="form-control" name="speed" id="speed"
                                        placeholder="Transmisi" required>
                                </div>
                                <div class="form-group">
                                    <label for="type">Jumlah Seat</label>
                                    <input type="text" class="form-control" name="seat" id="seat"
                                        placeholder="Jumlah Seat dalam Mobil" required>
                                </div>
                                <div class="form-group">
                                    <label for="price">Harga</label>
                                    <input type="text" class="form-control" name="price" id="price"
                                        placeholder="Harga" required>
                                </div>
                                <div class="form-group">
                                    <label class="font-weight-bold">Upload Foto</label>
                                    <p>Tidak dapat mengupload foto dengan ukuran lebih dari 2MB</p>
                                    <input type="file" name="thumbnail1" id="thumbnail1" class="file-upload-default">
                                    <div class="input-group col-xs-12">
                                        <input type="text" class="form-control file-upload-info" disabled
                                            placeholder="Upload Image">
                                        <span class="input-group-append">
                                            <button class="file-upload-browse btn btn-primary"
                                                type="button">Upload</button>
                                        </span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="font-weight-bold">Upload Foto</label>
                                    <p>Tidak dapat mengupload foto dengan ukuran lebih dari 2MB</p>
                                    <input type="file" name="thumbnail2" id="thumbnail2" class="file-upload-default">
                                    <div class="input-group col-xs-12">
                                        <input type="text" class="form-control file-upload-info" disabled
                                            placeholder="Upload Image">
                                        <span class="input-group-append">
                                            <button class="file-upload-browse btn btn-primary"
                                                type="button">Upload</button>
                                        </span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="font-weight-bold">Upload Foto</label>
                                    <p>Tidak dapat mengupload foto dengan ukuran lebih dari 2MB</p>
                                    <input type="file" name="thumbnail3" id="thumbnail3" class="file-upload-default">
                                    <div class="input-group col-xs-12">
                                        <input type="text" class="form-control file-upload-info" disabled
                                            placeholder="Upload Image">
                                        <span class="input-group-append">
                                            <button class="file-upload-browse btn btn-primary"
                                                type="button">Upload</button>
                                        </span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="font-weight-bold">Upload Foto</label>
                                    <p>Tidak dapat mengupload foto dengan ukuran lebih dari 2MB</p>
                                    <input type="file" name="thumbnail4" id="thumbnail4" class="file-upload-default">
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
