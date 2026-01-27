@php
  $configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Pendataan Santri - Digital Library')

<!-- Page Styles -->
@section('page-style')
  @vite(['resources/assets/vendor/scss/pages/front-page-payment.scss'])
@endsection

<!-- Vendor Scripts -->
@section('vendor-script')
  @vite(['resources/assets/vendor/libs/cleave-zen/cleave-zen.js'])
@endsection

<!-- Page Scripts -->
@section('page-script')
  @vite([
    'resources/assets/js/pages-pricing.js',
    'resources/assets/js/front-page-payment.js'
  ])
@endsection

@section('content')
<section class="section-py bg-body first-section-pt">
  <div class="container">
    <div class="card px-4">
      <div class="row">

        <!-- KIRI -->
        <div class="col-lg-7 card-body border-end p-8 ps-7">
          <h4 class="mb-2">Pendataan Santri</h4>
          <p class="mb-0">
            Silakan lengkapi data santri terlebih dahulu <br>
            sebelum mengikuti quiz Digital Library.
          </p>

          <!-- JENIS SANTRI -->
          <div class="row my-8 gx-5">
            <div class="col-md mb-md-0 mb-2">
              <div class="form-check custom-option custom-option-basic checked">
                <label class="form-check-label custom-option-content gap-4 align-items-center">
                  <input name="jenis_santri" class="form-check-input my-2" type="radio" checked />
                  <span class="custom-option-body">
                    <span class="fw-medium">Santri Putra</span>
                  </span>
                </label>
              </div>
            </div>

            <div class="col-md mb-md-0 mb-2">
              <div class="form-check custom-option custom-option-basic">
                <label class="form-check-label custom-option-content gap-4 align-items-center">
                  <input name="jenis_santri" class="form-check-input my-2" type="radio" />
                  <span class="custom-option-body">
                    <span class="fw-medium">Santri Putri</span>
                  </span>
                </label>
              </div>
            </div>
          </div>

          <!-- IDENTITAS SANTRI -->
          <h4 class="mb-6">Identitas Santri</h4>
          <form>
            <div class="row g-5">

              <div class="col-md-6">
                <div class="form-floating form-floating-outline">
                  <input type="text" class="form-control" placeholder="Nama Santri" />
                  <label>Nama Santri</label>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-floating form-floating-outline">
                  <input type="text" class="form-control" placeholder="Nomor Induk" />
                  <label>No. Induk Santri</label>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-floating form-floating-outline">
                  <select class="form-select">
                    <option value="">Pilih Kelas</option>
                    <option>Kelas 1</option>
                    <option>Kelas 2</option>
                    <option>Kelas 3</option>
                    <option>Kelas 4</option>
                    <option>Kelas 5</option>
                    <option>Kelas 6</option>
                  </select>
                  <label>Kelas</label>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-floating form-floating-outline">
                  <select class="form-select">
                    <option value="">Pilih Kobong</option>
                    <option>Kobong A</option>
                    <option>Kobong B</option>
                    <option>Kobong C</option>
                    <option>Kobong D</option>
                  </select>
                  <label>Kobong</label>
                </div>
              </div>

            </div>
          </form>

          <!-- DATA TAMBAHAN -->
          <div id="form-credit-card">
            <h4 class="mt-8 mb-6">Data Tambahan</h4>
            <form>
              <div class="row g-5">
                <div class="col-12">
                  <div class="form-floating form-floating-outline">
                    <input type="text" class="form-control" placeholder="Asal Daerah" />
                    <label>Asal Daerah</label>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>

        <!-- KANAN -->
        <div class="col-lg-5 card-body p-8 pe-7">
          <h4 class="mb-2">Ringkasan</h4>
          <p class="mb-8">
            Pastikan data santri sudah benar <br>
            sebelum memulai quiz.
          </p>

          <div class="bg-lightest p-6 rounded-4">
            <p class="fw-medium mb-2">Quiz Digital Library</p>
            <div class="d-flex align-items-center">
              <span class="badge bg-label-success">Siap Dimulai</span>
            </div>
          </div>

          <div class="mt-5">
            <div class="d-grid mt-5">
              <button class="btn btn-success">
                <span class="me-2">Mulai Quiz</span>
                <i class="ri-arrow-right-line"></i>
              </button>
            </div>

            <p class="mt-8 mb-0 text-muted">
              Dengan menekan tombol ini, santri dinyatakan siap mengikuti quiz Digital Library.
            </p>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>

@include('_partials/_modals/modal-pricing')
@endsection
