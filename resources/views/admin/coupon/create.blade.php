@extends('admin.layouts.master')

@section('content')
      <!-- Main Content -->
        <section class="section">
          <div class="section-header">
            <h1>Kupon</h1>
          </div>

          <div class="section-body">

            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Buat Kupon</h4>

                  </div>
                  <div class="card-body">
                    <form action="{{route('admin.coupons.store')}}" method="POST">
                        @csrf

                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" class="form-control" name="name" value="">
                        </div>

                        <div class="form-group">
                            <label>Kode</label>
                            <input type="text" class="form-control" name="code" value="">
                        </div>


                        <div class="form-group">
                            <label>Quantitas</label>
                            <input type="text" class="form-control" name="quantity" value="">
                        </div>

                        <div class="form-group">
                            <label>Penggunaan Maks Per Orang</label>
                            <input type="text" class="form-control" name="max_use" value="">
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Mulai tanggal</label>
                                        <input type="text" class="form-control datepicker" name="start_date" value="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Tanggal Berakhir</label>
                                    <input type="text" class="form-control datepicker" name="end_date" value="">
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="inputState">Tipe Diskon</label>
                                    <select id="inputState" class="form-control sub-category" name="discount_type">
                                      <option value="percent">Peresentase (%)</option>
                                      <option value="amount">Jumlah ({{$settings->currency_icon}})</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label>Nilai Diskon</label>
                                    <input type="text" class="form-control" name="discount" value="">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputState">Status</label>
                            <select id="inputState" class="form-control" name="status">
                              <option value="1">Active</option>
                              <option value="0">Inactive</option>
                            </select>
                        </div>
                        <button type="submmit" class="btn btn-primary">Create</button>
                    </form>
                  </div>

                </div>
              </div>
            </div>

          </div>
        </section>

@endsection
