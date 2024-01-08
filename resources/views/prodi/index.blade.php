@extends('index')
@section('konten')

<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="dashboard_graph">
        <form action="/prodi-update" method="POST">
            @csrf
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Nama Prodi</label>
              <input type="text" class="form-control" name="txt_prodi" aria-describedby="emailHelp" value="{{ $nama }}">
            </div>
           
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        
      </div>
    </div>

  </div>
 @endsection