@extends('layouts/layoutMaster')

@section('title', 'Pendataan Santri - Digital Library')

@section('content')
<section class="section-py bg-body first-section-pt">
  <div class="container">
    <div class="card px-4">
      <div class="row">

        <!-- KIRI -->
        <div class="col-lg-7 card-body border-end p-8 ps-7">
          <h4 class="mb-2">Pendataan Santri</h4>
          <p class="mb-0">
            Silakan lengkapi data santri terlebih dahulu sebelum mengikuti quiz Digital Library.
          </p>

          <form action="{{ route('santri.store') }}" method="POST">
            @csrf

            <!-- Jenis Santri -->
            <div class="row my-8 gx-5">
              <div class="col-md mb-md-0 mb-2">
                <div class="form-check custom-option custom-option-basic checked">
                  <label class="form-check-label custom-option-content gap-4 align-items-center">
                    <input name="jenis_santri" value="putra" class="form-check-input my-2" type="radio" checked />
                    <span class="custom-option-body"><span class="fw-medium">Santri Putra</span></span>
                  </label>
                </div>
              </div>
              <div class="col-md mb-md-0 mb-2">
                <div class="form-check custom-option custom-option-basic">
                  <label class="form-check-label custom-option-content gap-4 align-items-center">
                    <input name="jenis_santri" value="putri" class="form-check-input my-2" type="radio" />
                    <span class="custom-option-body"><span class="fw-medium">Santri Putri</span></span>
                  </label>
                </div>
              </div>
            </div>

            <!-- Identitas -->
            <div class="row g-5">
              <div class="col-md-6">
                <div class="form-floating form-floating-outline">
                  <input type="text" name="nama" class="form-control" placeholder="Nama Santri" />
                  <label>Nama Santri</label>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-floating form-floating-outline">
                  <input type="text" name="nis" class="form-control" placeholder="Nomor Induk" />
                  <label>No. Induk Santri</label>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-floating form-floating-outline">
                  <select name="kelas" class="form-select">
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
                  <select name="kobong" class="form-select">
                    <option value="">Pilih Kobong</option>
                    <option>Kobong A</option>
                    <option>Kobong B</option>
                    <option>Kobong C</option>
                    <option>Kobong D</option>
                  </select>
                  <label>Kobong</label>
                </div>
              </div>
              <div class="col-12 mt-4">
                <div class="form-floating form-floating-outline">
                  <input type="text" name="asal_daerah" class="form-control" placeholder="Asal Daerah" />
                  <label>Asal Daerah</label>
                </div>
              </div>
            </div>

            <div class="mt-6">
              <button type="submit" class="btn btn-success">Mulai Quiz</button>
            </div>
          </form>
        </div>

      </div>
    </div>
  </div>
</section>
@endsection
