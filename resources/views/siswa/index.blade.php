<!DOCTYPE html>
<html>

<head>
    <title></title>
    <link rel="stylesheet" href="\css\app.css">
    <link rel="stylesheet" href="\font\css\all.css">
</head>

<body>
    <div class="container">
        @if(session('sukses'))
        <div class="alert alert-success" role="alert">
            {{session('sukses')}}
        </div>
        @endif
        <div class="row">
            <div class="col-6">
                <h1>
                    <p style="text-align:center"> DATA SISWA </p>
                </h1>
                <button type="button" class="btn btn-primary btn btn-primary btn-sm float-left" data-toggle="modal"
                    data-target="#exampleModal">
                    Tambah Data Siswa
                </button>
            </div>



            <table class="table table-hover">
                <tr>
                    <th>NAMA SISWA </th>
                    <th>JENIS KELAMIN</th>
                    <th>NO INDUK SISWA NASIOAL</th>
                    <th>NO TELEPON SISWA</th>
                    <th>NAMA WALI</th>
                    <th>NO TELEPON WALI</th>
                    <th>PENGATURAN</th>

                </tr>
                @foreach ($data_siswa as $siswa)
                <tr>
                    <td>{{$siswa->nama_siswa}}</td>
                    <td>{{$siswa->jenis_kelamin}}</td>
                    <td>{{$siswa->no_induk}}</td>
                    <td>{{$siswa->no_teleponsiswa}}</td>
                    <td>{{$siswa->nama_wali}}</td>
                    <td>{{$siswa->no_teleponwali}}</td>
                    <td>
                        <a href="/siswa/{{$siswa->id}}/edit" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                        <a class="btn btn-danger"><i class="fa fa-trash"></i></a>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">INPUTKAN DATA</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="/siswa/create" method="POST">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="exampleInputEmail1">NAMA SISWA</label>
                            <input name="nama_siswa" type="text" class="form-control" id="nama"
                                aria-describedby="nama_siswa">
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlSelect1">PILIH JENIS KELAMIN</label>
                            <select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1">
                                <option value="PILIH">------PILIH------</option>
                                <option value="L">LAKI LAKI</option>
                                <option value="p">PEREMPUAN</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">NO INDUK SISWA NASIOAL</label>
                            <input name="no_induk" type="text" class="form-control" id="kelas"
                                aria-describedby="no_induk">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">NO TELEPON SISWA</label>
                            <input name="no_teleponsiswa" type="text" class="form-control" id="jurusan"
                                aria-describedby="no_teleponsiswa">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">NAMA WALI</label>
                            <input name="nama_wali" type="text" class="form-control" id="jurusan"
                                aria-describedby="nama_wali">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">NO TELEPON WALI</label>
                            <input name="no_teleponwali" type="text" class="form-control" id="no_teleponwali"
                                aria-describedby="no_teleponwali">
                        </div>


                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>

                </form>
            </div>
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