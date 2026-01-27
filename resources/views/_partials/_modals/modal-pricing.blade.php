@push('pricing-script')
  @vite(['resources/assets/js/pages-pricing.js'])
@endpush
<!-- Data Santri Modal -->
<div class="modal fade" id="pricingModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-simple modal-pricing">
    <div class="modal-content">
      <div class="modal-body p-0">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

        <!-- Header -->
        <div class="pb-6 rounded-top">
          <h4 class="text-center mb-2">Data Santri</h4>
          <p class="text-center mb-0">
            Silakan lengkapi data berikut sebelum mengikuti quiz Digital Library Santri
          </p>

          <!-- (DIBIARKAN, TIDAK DIUBAH) -->
          <div class="d-flex align-items-center justify-content-center flex-wrap gap-2 pt-12 pb-4">
            <label class="switch switch-sm ms-sm-12 ps-sm-12 me-0">
              <span class="switch-label fs-6 text-body">Isi Data</span>
              <input type="checkbox" class="switch-input" checked />
              <span class="switch-toggle-slider">
                <span class="switch-on"></span>
                <span class="switch-off"></span>
              </span>
              <span class="switch-label fs-6 text-body">Mulai Quiz</span>
            </label>
          </div>

          <div class="row gy-3">

            <!-- Nama -->
            <div class="col-xl mb-md-0 mb-6">
              <div class="card border shadow-none">
                <div class="card-body pt-12">
                  <div class="mt-3 mb-5 text-center">
                    <img src="{{ asset('assets/img/illustrations/pricing-basic.png') }}" height="100" />
                  </div>

                  <h4 class="card-title text-center mb-2">Nama Santri</h4>
                  <p class="text-center mb-5">Masukkan nama lengkap santri</p>

                  <ul class="list-group ps-6 my-5 pt-4">
                    <li class="mb-4">Nama lengkap sesuai identitas</li>
                    <li class="mb-4">Wajib diisi</li>
                  </ul>

                  <button type="button" class="btn btn-outline-success d-grid w-100">
                    Isi Nama
                  </button>
                </div>
              </div>
            </div>

            <!-- Kelas -->
            <div class="col-xl mb-md-0 mb-6">
              <div class="card border-primary border shadow-none">
                <div class="card-body position-relative pt-4">
                  <div class="position-absolute end-0 me-6 top-0 mt-6">
                    <span class="badge bg-label-primary rounded-pill">Wajib</span>
                  </div>

                  <div class="my-5 pt-6 text-center">
                    <img src="{{ asset('assets/img/illustrations/pricing-standard.png') }}" height="100" />
                  </div>

                  <h4 class="card-title text-center mb-2">Kelas</h4>
                  <p class="text-center mb-5">Pilih kelas santri</p>

                  <ul class="list-group ps-6 my-5 pt-4">
                    <li class="mb-4">Kelas 7</li>
                    <li class="mb-4">Kelas 8</li>
                    <li class="mb-4">Kelas 9</li>
                  </ul>

                  <button type="button" class="btn btn-primary d-grid w-100">
                    Pilih Kelas
                  </button>
                </div>
              </div>
            </div>

            <!-- Kobong -->
            <div class="col-xl">
              <div class="card border shadow-none">
                <div class="card-body pt-12">
                  <div class="mt-3 mb-5 text-center">
                    <img src="{{ asset('assets/img/illustrations/pricing-enterprise.png') }}" height="100" />
                  </div>

                  <h4 class="card-title text-center mb-2">Kobong</h4>
                  <p class="text-center mb-5">Pilih kobong santri</p>

                  <ul class="list-group ps-6 my-5 pt-4">
                    <li class="mb-4">Al-Falah</li>
                    <li class="mb-4">An-Nur</li>
                    <li class="mb-4">Al-Hikmah</li>
                    <li class="mb-4">Al-Ikhlas</li>
                  </ul>

                  <button type="button" class="btn btn-outline-primary d-grid w-100">
                    Pilih Kobong
                  </button>
                </div>
              </div>
            </div>

          </div>
        </div>

        <!-- Footer -->
        <div class="text-center">
          <p>Pastikan data santri sudah benar sebelum memulai quiz</p>
          <a href="javascript:void(0);" class="btn btn-primary">
