@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('List Penerima Zakat Ramadhan') }}</div>
                <div class="card-body">
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
                            <input type="text" name="keterangan" class="form-control" placeholder="Keterangan">
                        </div>
                        <div class="mb-2">
                            <select class="form-select" aria-label="Default select example" name="user_id">
                                <option selected>Open this select menu</option>
                                @foreach ( $data as $key=> $dt)
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
</div>
@endsection
