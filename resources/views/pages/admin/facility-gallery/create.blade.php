@extends('layouts.admin')

@section('title')
    Facility Gallery
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
                <p class="dashboard-subtitle">Create New facility!</p>
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
                        <form action="{{ route('facility-gallery.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                               <div class="col-md-12">
                                <div class="form-group">
                                  <label>Product</label>
                                  <select name="facilities_id" class="form-control">
                                    @foreach ($facilities as $facility)
                                      <option value="{{ $facility->id }}">{{ $facility->name }}</option>
                                    @endforeach
                                  </select>
                                </div>
                              </div>
                              <div class="col-md-12">
                                <div class="form-group">
                                  <label>Foto</label>
                                  <input type="file" class="form-control" name="photos" placeholder="Photo" required />
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

