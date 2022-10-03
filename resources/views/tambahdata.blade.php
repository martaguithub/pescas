@extends('layout.admin')

@section('content')
<body>
<br>
    <h1 class="text-center mb-5 mt-5">Adisiona Dadus</h1>
    <div class="container mb-5">
        <div class="row justify-content-center">
            <div class="col-8">
                <div class="card">
                    <div class="card-body" style="background-color: rgba(12, 66, 167, 0.341);">
                        <form action="/insertdata" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Naran Kompletu</label>
                                <input type="text" name="naran" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp">
                                    @error('naran')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Jeneru</label>
                                <select class="form-select" name="jeneru" aria-label="Default select example">
                                    <option selected>Hili Jeneru</option>
                                    <option value="M">M</option>
                                    <option value="F">F</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Numeru Telemovel</label>
                                <input type="text" name="nmr_telefone" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp">
                                    @error('nmr_telefone')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Submete Foto</label>
                                <input type="file" name="foto" class="form-control" >
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Data Moris</label>
                                <input type="date" name="data_moris" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp">
                                    @error('data_moris')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Relijiaun</label>
                                <select class="form-select" name="id_religions" aria-label="Default select example">
                                    <option selected>Hili Relijiaun</option>
                                    @foreach ($dataagama as $data)
                                        <option value="{{ $data->id }}">{{ $data->naran }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Pozisaun</label>
                                <select class="form-select" name="pozisaun" aria-label="Default select example">
                                    <option selected>Hili Pozisaun</option>
                                    <option value="chefe departamento (PAAD)">chefe departamento (PAAD)</option>
                                    <option value="responsavel centro">responsavel centro</option>
                                    <option value="tekniku administrasaun1">tekniku administrasaun1</option>
                                    <option value="tekniku administrasaun2">tekniku administrasaun2</option>
                                    <option value="tekniku (brood fish)">tekniku (brood fish)</option>
                                    <option value="tekniku (incubator)">tekniku (incubator)</option>
                                    <option value="tekniku (srt)">tekniku (srt)</option>
                                    <option value="tekniku (nursery)">tekniku (nursery)</option>
                                    <option value="tekniku (water quality and disease)">tekniku (water quality and disease)</option>
                                    <option value="staff">staff</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Status</label>
                                <select class="form-select" name="status" aria-label="Default select example">
                                    <option selected>Hili Status</option>
                                    <option value="permanente">permanente</option>
                                    <option value="casuais">casuais</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Nivel Edukasaun</label>
                                <select class="form-select" name="nivel_ed_id" aria-label="Default select example">
                                    <option selected>Hili Nivel Edukasaun</option>
                                    @foreach ($datanivel as $data)
                                        <option value="{{ $data->id }}">{{ $data->naran }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Level</label>
                                <select class="form-select" name="level" aria-label="Default select example">
                                    <option selected>Hili Level</option>
                                    <option value="I">I</option>
                                    <option value="II">II</option>
                                    <option value="III">III</option>
                                    <option value="IV">IV</option>
                                    <option value="V">V</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Observasaun</label>
                                <select class="form-select" name="obs" aria-label="Default select example">
                                    <option selected>Hili Observasaun</option>
                                    <option value="nacional">Nacional</option>
                                    <option value="Extencionista Municipio">Extencionista Municipio</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Submete</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
        crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
</body>

@endsection