@extends('layouts.admin')

@section('title')
    Service
@endsection

@section('content')
<!-- Section Content -->

          <div
            class="section-content section-dashboard-home"
            data-aos="fade-up"
          >
            <div class="container-fluid">
              <div class="dashboard-heading">
                <h2 class="dashboard-title">Dashboard</h2>
                <p class="dashboard-subtitle">Edit Service!</p>
              </div>
              <div class="dashboard-content">
                <div class="row">
                  <div class="col-md-12">
                      @if ($errors->any())
                          <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                          </div>
                      @endif
                    <div class="card">
                      <div class="card-body">
                        <form action="{{ route('service.update', $item->id) }}" method="POST" enctype="multipart/form-data">
                          @method("PUT")
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Title Serivce</label>
                                        <input type="text" name="title" class="form-control" value="{{ $item->title }}" required>
                                    </div>
                                      <div class="form-group">
                                        <label>Image Serivce</label>
                                        <input type="file" name="image" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col text-right">
                                    <button type="submit" class="btn btn-success px-5">
                                        Save Now
                                    </button>
                                </div>
                            </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
@endsection
