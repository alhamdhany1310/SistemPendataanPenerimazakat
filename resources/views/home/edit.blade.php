@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('List Penerima Zakat Ramadhan') }}</div>
                <div class="card-body">
                    <form action="{{route('editTodo',$data->id)}}" method="POST">
                        @csrf
                        <input type="hidden" name="id" id="" value="{{$data->id}}">
                        <div class="mb-2">
                            <input type="text" name="name_id" class="form-control" placeholder="Usia" value="{{$data->name_id}}">
                        </div>
                        <div class="mb-2">
                            <input type="text" name="g_id" class="form-control" placeholder="Usia" value="{{$data->g_id}}">
                        </div>
                        <div class="mb-2">
                            <input type="text" name="u_id" class="form-control" placeholder="Pekerjaan" value="{{$data->u_id}}">
                        </div>
                        <div class="mb-2">
                            <input type="text" name="s_id" class="form-control" placeholder="Pekerjaan" value="{{$data->s_id}}">
                        </div>
                        <div class="mb-2">
                            <input type="text" name="keterangan" class="form-control" placeholder="Keterangan" value="{{$data->keterangan}}">
                        </div>
                        <div class="mb-2">
                            <select class="form-select" aria-label="Default select example" name="user_id">
                                <option selected>Open this select menu</option>
                                @foreach ( $user as $key=> $us)
                                    <option value="{{$data->user_id}}" {{$data->user_id== $us->id?'selected':null}}>{{$us->name}}</option>
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
