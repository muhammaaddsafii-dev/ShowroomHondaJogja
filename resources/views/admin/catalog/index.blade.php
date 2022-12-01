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
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">List Data Katalog </h4>
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th class="text-center">
                                                id
                                            </th>
                                            <th class="text-center">
                                                Nama
                                            </th>
                                            <th class="text-center">
                                                Tipe
                                            </th>
                                            <th class="text-center">
                                                Harga
                                            </th>
                                            <th class="text-center">
                                                Action
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($catalogs as $catalog)
                                            <tr>
                                                <td class="text-wrap text-center">
                                                    {{ $catalog->id }}
                                                </td>
                                                <td class="text-wrap text-center">
                                                    {{ $catalog->name }}
                                                </td>
                                                <td class="text-wrap text-center">
                                                    {{ $catalog->type }}
                                                </td>
                                                <td class="text-wrap text-center">
                                                    {{ $catalog->price }}
                                                </td>
                                                <td>
                                                    <div class="text-center">
                                                        <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                                            data-bs-target="#defaultModal_{{ $catalog->id }} "
                                                            style=""><i class="fa fa-trash"></i></button>
                                                        <!-- Modal -->
                                                        <div class="modal fade" id="defaultModal_{{ $catalog->id }}"
                                                            tabindex="-1" role="dialog"
                                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalLabel">
                                                                            Delete User</h5>
                                                                        <button type="button" class="close"
                                                                            data-bs-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">×</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <p class="text-center">Apakah anda yakin ingin
                                                                            menghapus <br> <b> {{ $catalog->name }} </b> ?
                                                                        </p>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary"
                                                                            data-bs-dismiss="modal">Close</button>
                                                                        <form class="d-inline"
                                                                            action="/catalog/{{ $catalog->slug }}/delete"
                                                                            method="POST">
                                                                            @method('delete')
                                                                            @csrf
                                                                            <button type="submit"
                                                                                class="btn btn-danger">Delete</button>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Modal -->
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>


                            <div class="mt-4 d-flex justify-content-center">
                                {{ $catalogs->links() }}
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
