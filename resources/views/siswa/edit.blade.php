<!DOCTYPE html>
<html>

<head>
    <title></title>
    <link rel="stylesheet" href="\css\app.css">
    <link rel="stylesheet" href="\font\css\all.css">
</head>

<body>
    <div class="container">
        <h1>Edit Data Siswa</h1>
        @if(session('sukses'))
        <div class="alert alert-success" role="alert">
            {{session('sukses')}}
        </div>
        @endif
        <div class="row">
            <div class="modal-body">
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

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
            integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
        </script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
            integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
        </script>


    </div>
</body>

</html>