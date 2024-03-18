@extends('admin.layouts.master')

@section('content')
      <!-- Main Content -->
        <section class="section">
          <div class="section-header">
            <h1>Settings</h1>
          </div>

          <div class="section-body">

            <div class="row">
              <div class="col-12">
                <div class="card">

                    <div class="card-body">
                      <div class="row">
                        <div class="col-2">
                          <div class="list-group" id="list-tab" role="tablist">
                            <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab">Banner beranda bagian satu</a>
                            <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab">Banner beranda bagian dua</a>
                            <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab">Banner beranda bagian tiga</a>
                            <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab">Banner beranda bagian empat</a>
                            <a class="list-group-item list-group-item-action" id="list-product-list" data-toggle="list" href="#list-product" role="tab">halaman banner produk</a>
                            <a class="list-group-item list-group-item-action" id="list-cart-list" data-toggle="list" href="#list-cart" role="tab">halaman banner keranjang </a>
                          </div>
                        </div>
                        <div class="col-10">
                          <div class="tab-content" id="nav-tabContent">

                            @include('admin.advertisement.homepage-banner-one')

                            @include('admin.advertisement.homepage-banner-two')

                            @include('admin.advertisement.homepage-banner-three')

                            @include('admin.advertisement.homepage-banner-four')

                            @include('admin.advertisement.product-page-banner')

                            @include('admin.advertisement.cart-page-banner')

                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
              </div>
            </div>

          </div>
        </section>

@endsection
