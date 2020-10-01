@extends('layouts.master')

@section('content')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <h1>Edit Data Siswa</h1>
            @if(session('sukses'))
            <div class="alert alert-success" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                {{session('sukses')}}
            </div>
            @endif
            <div class="row">
                <div class="col-xl-8 col-md-10">
                    <form action="{{ route('update', ['id'=>$siswa->id]) }}" method="POST">
                        {{csrf_field()}}

                        {{-- </div> --}}
                        <div class="form-group">
                            <label for="exampleInputEmail1">NAMA SISWA</label>
                            <input name="nama_siswa" type="text" class="form-control" id="nama_siswa"
                                value="{{ $siswa->nama_siswa }}" aria-describedby="nama_siswa">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">PILIH JENIS KELAMIN</label>
                            <select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1">
                                <option value="PILIH">------PILIH------</option>
                                <option value="L" @if($siswa->jenis_kelamin == 'L') selected @endif>LAKI LAKI</option>
                                <option value="p" @if($siswa->jenis_kelamin == 'P') selected @endif>PEREMPUAN</option>
                            </select>

                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">NO INDUK SISWA NASIOAL</label>
                            <input name="no_induk" type="text" class="form-control" id="no_induk"
                                value="{{ $siswa->no_induk }}" aria-describedby="no_induk">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">NO TELEPON SISWA</label>
                            <input name="no_teleponsiswa" type="text" class="form-control" id="no_teleponsiswa"
                                value="{{ $siswa->no_teleponsiswa }}" aria-describedby="no_teleponsiswa">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">NAMA WALI</label>
                            <input name="nama_wali" type="text" class="form-control" id="nama_wali"
                                value="{{ $siswa->nama_wali }}" aria-describedby="nama_wali">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">NO TELEPON WALI</label>
                            <input name="no_teleponwali" type="text" class="form-control" id="no_teleponwali"
                                value="{{ $siswa->no_teleponwali }}" aria-describedby="no_teleponwali">

                        </div>

                        <div class="modal-footer">

                            <button type="submit" class="btn btn-warning">update</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection