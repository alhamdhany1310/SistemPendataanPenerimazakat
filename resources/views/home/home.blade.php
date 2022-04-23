@extends('layouts.app')

@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="card">
                <div class="card-header">{{ __('List Penerima Zakat Ramadhan') }}</div>

                <div class="card-body">
                    <a href="{{route('create')}}" type="button" class="btn btn-success mb-4">Konfirmasi Penerima</a>
                    <table class="table table-bordered table-striped">
                        <thead>
                          <tr>
                            <th scope="col">Nomor</th>
                            <th scope="col">Nama Penerima</th>
                            <th scope="col">Usia</th>
                            <th scope="col" >Pekerjaan</th>
                            <th scope="col" >Stataus</th>
                            <th scope="col" >Keterangan</th>
                            <th scope="col" >Pembuat</th>
                            <th scope="col" >Tanggal</th>
                            <th scope="col" >Aksi</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $key=> $dt)
                            <tr>
                                <th scope="row">{{ $loop->iteration}}</th>
                                <th scope="row">{{ $dt->name_id}}</th>
                                <th scope="row">{{ $dt->g_id}}</th>
                                <th scope="row">{{ $dt->u_id}}</th>
                                <th scope="row">{{ $dt->s_id}}</th>
                                <th scope="row">{{ $dt->keterangan}}</th>
                                <th scope="row">{{ $dt->user->name}}</th>
                                <th scope="row">{{ $dt->created_at->format ('d M Y')}}</th>
                                <th scope="row">
                                    <a href="{{route('edit',$dt->id)}}" class="btn btn-warning btn-sm">Edit</a>
                                    <form action="{{route('deleteTodo', $dt->id)}}" method="POST" onsubmit="return confirm ('Apakah Kamu yakin akan menghapus data ini');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                    </th>
                            </tr>
                            @endForeach
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<section>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
            <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal" type="button" class="btn btn-success mb-4">Konfirmasi Penerima</a>
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="{{route('addTodo')}}" method="POST">
                            @csrf
                            <div class="mb-2">
                                <select class="form-select" aria-label="Default select example" name="name_id">
                                    <option selected>Pilih Nama Penerima</option>
                                    @foreach ( $date as $key=> $de)
                                        <option value="{{$de->name}}">{{$de->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-2">
                                <input type="text" name="g_id" class="form-control" placeholder="Usia">
                            </div>
                            <div class="mb-2">
                                <input type="text" name="u_id" class="form-control" placeholder="Pekerjaan">
                            </div>
                            <div class="mb-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="s_id" id="flexRadioDefault1" value="Yatim">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                      Yatim
                                    </label>
                                  </div>
                                  <div class="form-check">
                                    <input class="form-check-input" type="radio" name="s_id" id="flexRadioDefault2" value="Jompo">
                                    <label class="form-check-label" for="flexRadioDefault2">
                                      Jompo
                                    </label>
                                  </div>
                            </div>
                            <div class="mb-2">
                                <select class="form-select" aria-label="Default select example" name="keterangan">
                                    <option selected>Pilih Keterangan</option>
                                    <option value="Berhak Menerima">Berhak Menerima</option>
                                    <option value="Tidak Berhak Menerima">Tidak Berhak Menerima</option>
                                </select>
                                {{-- <input type="text" name="keterangan" class="form-control" placeholder="Keterangan"> --}}
                            </div>
                            <div class="mb-2">
                                <select class="form-select" aria-label="Default select example" name="user_id">
                                    <option selected>Pilih Admin Pembuat</option>
                                    @foreach ( $us as $key=> $dt)
                                        <option value="{{$dt->id}}">{{$dt->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-2">
                                <Button class="btn btn-primary mt-2">Tambah Data</Button>
                            </div>
                        </form>
                    </div>
                </div>
                </div>
            </div>

            <table class="table table-bordered table-dark table-hover">
              <thead>
                <tr>
                  <th scope="col">Nomor</th>
                  <th scope="col">Nama Penerima</th>
                  <th scope="col">Usia</th>
                  <th scope="col">Pekerjaan</th>
                  <th scope="col">Stataus</th>
                  <th scope="col">Keterangan</th>
                  <th scope="col">Pembuat</th>
                  <th scope="col">Tanggal</th>
                  <th scope="col">Aksi</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($data as $key=> $dt)
                <tr>
                  <th scope="row">{{ $loop->iteration}}</th>
                  <td>{{ $dt->name_id}}</td>
                  <td>{{ $dt->g_id}}</td>
                  <td>{{ $dt->u_id}}</td>
                  <td>{{ $dt->s_id}}</td>
                  <td>{{ $dt->keterangan}}</td>
                  <td>{{ $dt->user->name}}</td>
                  <td>{{ $dt->created_at->format ('d M Y')}}</td>
                  <td>
                    <a href="{{route('edit',$dt->id)}}" class="btn btn-warning btn-sm"><i class="fa-solid fa-pen-to-square"></i></a>
                    <form action="{{route('deleteTodo', $dt->id)}}" method="POST" onsubmit="return confirm ('Apakah Kamu yakin akan menghapus data ini');">
                      @csrf @method('DELETE')
                      <button type="submit" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash-can"></i></button>
                    </form>
                  </td>
                </tr>
                @endForeach
              </tbody>
            </table>
        </div>
      </div>
    </div>
  </section>
@endsection
