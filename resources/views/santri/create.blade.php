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
    <select name="kelas" id="kelasSelect" class="form-select">
      <option value="">Pilih Kelas</option>

      <!-- ===== KELAS PUTRA (20) ===== -->
      <option value="Kelas Putra 1" data-jenis="putra">Kelas lao</option>
      <option value="Kelas Putra 2" data-jenis="putra">Kelas 2</option>
      <option value="Kelas Putra 3" data-jenis="putra">Kelas 3</option>
      <option value="Kelas Putra 4" data-jenis="putra">Kelas 4</option>
      <option value="Kelas Putra 5" data-jenis="putra">Kelas 5</option>
      <option value="Kelas Putra 6" data-jenis="putra">Kelas 6</option>
      <option value="Kelas Putra 7" data-jenis="putra">Kelas 7</option>
      <option value="Kelas Putra 8" data-jenis="putra">Kelas 8</option>
      <option value="Kelas Putra 9" data-jenis="putra">Kelas 9</option>
      <option value="Kelas Putra 10" data-jenis="putra">Kelas 10</option>
      <option value="Kelas Putra 11" data-jenis="putra">Kelas 11</option>
      <option value="Kelas Putra 12" data-jenis="putra">Kelas 12</option>
      <option value="Kelas Putra 13" data-jenis="putra">Kelas 13</option>
      <option value="Kelas Putra 14" data-jenis="putra">Kelas 14</option>
      <option value="Kelas Putra 15" data-jenis="putra">Kelas 15</option>
      <option value="Kelas Putra 16" data-jenis="putra">Kelas 16</option>
      <option value="Kelas Putra 17" data-jenis="putra">Kelas 17</option>
      <option value="Kelas Putra 18" data-jenis="putra">Kelas 18</option>
      <option value="Kelas Putra 19" data-jenis="putra">Kelas 19</option>
      <option value="Kelas Putra 20" data-jenis="putra">Kelas 20</option>

      <!-- ===== KELAS PUTRI (20) ===== -->
      <option value="Kelas Putri 1" data-jenis="putri">Kelas 1</option>
      <option value="Kelas Putri 2" data-jenis="putri">pr 2</option>
      <option value="Kelas Putri 3" data-jenis="putri">pr 3</option>
      <option value="Kelas Putri 4" data-jenis="putri">pr 4</option>
      <option value="Kelas Putri 5" data-jenis="putri">pr 5</option>
      <option value="Kelas Putri 6" data-jenis="putri">Kelas 6</option>
      <option value="Kelas Putri 7" data-jenis="putri">Kelas 7</option>
      <option value="Kelas Putri 8" data-jenis="putri">Kelas 8</option>
      <option value="Kelas Putri 9" data-jenis="putri">Kelas 9</option>
      <option value="Kelas Putri 10" data-jenis="putri">Kelas 10</option>
      <option value="Kelas Putri 11" data-jenis="putri">Kelas 11</option>
      <option value="Kelas Putri 12" data-jenis="putri">Kelas 12</option>
      <option value="Kelas Putri 13" data-jenis="putri">Kelas 13</option>
      <option value="Kelas Putri 14" data-jenis="putri">Kelas 14</option>
      <option value="Kelas Putri 15" data-jenis="putri">Kelas 15</option>
      <option value="Kelas Putri 16" data-jenis="putri">Kelas 16</option>
      <option value="Kelas Putri 17" data-jenis="putri">Kelas 17</option>
      <option value="Kelas Putri 18" data-jenis="putri">Kelas 18</option>
      <option value="Kelas Putri 19" data-jenis="putri">Kelas 19</option>
      <option value="Kelas Putri 20" data-jenis="putri">Kelas 20</option>

    </select>
    <label>Kelas</label>
  </div>
</div>

<div class="col-md-6">
  <div class="form-floating form-floating-outline">
    <select name="kobong" id="kobongSelect" class="form-select">
      <option value="">Pilih Kobong</option>

      <!-- ===== KOBONG PUTRA ===== -->
      <option value="Kobong Putra 1" data-jenis="putra">Kobong Putra 1</option>
      <option value="Kobong Putra 2" data-jenis="putra">Kobong Putra 2</option>
      <option value="Kobong Putra 3" data-jenis="putra">Kobong Putra 3</option>
      <option value="Kobong Putra 4" data-jenis="putra">Kobong Putra 4</option>
      <option value="Kobong Putra 5" data-jenis="putra">Kobong Putra 5</option>
      <option value="Kobong Putra 6" data-jenis="putra">Kobong Putra 6</option>
      <option value="Kobong Putra 7" data-jenis="putra">Kobong Putra 7</option>
      <option value="Kobong Putra 8" data-jenis="putra">Kobong Putra 8</option>
      <option value="Kobong Putra 9" data-jenis="putra">Kobong Putra 9</option>
      <option value="Kobong Putra 10" data-jenis="putra">Kobong Putra 10</option>
      <option value="Kobong Putra 11" data-jenis="putra">Kobong Putra 11</option>
      <option value="Kobong Putra 12" data-jenis="putra">Kobong Putra 12</option>
      <option value="Kobong Putra 13" data-jenis="putra">Kobong Putra 13</option>
      <option value="Kobong Putra 14" data-jenis="putra">Kobong Putra 14</option>
      <option value="Kobong Putra 15" data-jenis="putra">Kobong Putra 15</option>
      <option value="Kobong Putra 16" data-jenis="putra">Kobong Putra 16</option>
      <option value="Kobong Putra 17" data-jenis="putra">Kobong Putra 17</option>
      <option value="Kobong Putra 18" data-jenis="putra">Kobong Putra 18</option>
      <option value="Kobong Putra 19" data-jenis="putra">Kobong Putra 19</option>
      <option value="Kobong Putra 20" data-jenis="putra">Kobong Putra 20</option>

      <!-- ===== KOBONG PUTRI ===== -->
      <option value="Kobong Putri 1" data-jenis="putri">Kobong Putri 1</option>
      <option value="Kobong Putri 2" data-jenis="putri">Kobong Putri 2</option>
      <option value="Kobong Putri 3" data-jenis="putri">Kobong Putri 3</option>
      <option value="Kobong Putri 4" data-jenis="putri">Kobong Putri 4</option>
      <option value="Kobong Putri 5" data-jenis="putri">Kobong Putri 5</option>
      <option value="Kobong Putri 6" data-jenis="putri">Kobong Putri 6</option>
      <option value="Kobong Putri 7" data-jenis="putri">Kobong Putri 7</option>
      <option value="Kobong Putri 8" data-jenis="putri">Kobong Putri 8</option>
      <option value="Kobong Putri 9" data-jenis="putri">Kobong Putri 9</option>
      <option value="Kobong Putri 10" data-jenis="putri">Kobong Putri 10</option>
      <option value="Kobong Putri 11" data-jenis="putri">Kobong Putri 11</option>
      <option value="Kobong Putri 12" data-jenis="putri">Kobong Putri 12</option>
      <option value="Kobong Putri 13" data-jenis="putri">Kobong Putri 13</option>
      <option value="Kobong Putri 14" data-jenis="putri">Kobong Putri 14</option>
      <option value="Kobong Putri 15" data-jenis="putri">Kobong Putri 15</option>
      <option value="Kobong Putri 16" data-jenis="putri">Kobong Putri 16</option>
      <option value="Kobong Putri 17" data-jenis="putri">Kobong Putri 17</option>
      <option value="Kobong Putri 18" data-jenis="putri">Kobong Putri 18</option>
      <option value="Kobong Putri 19" data-jenis="putri">Kobong Putri 19</option>
      <option value="Kobong Putri 20" data-jenis="putri">Kobong Putri 20</option>

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
<script>
document.addEventListener('DOMContentLoaded', function () {
  const radios = document.querySelectorAll('input[name="jenis_santri"]');
  const kobongSelect = document.getElementById('kobongSelect');
  const kobongOptions = kobongSelect.querySelectorAll('option');

  function filterKobong(jenis) {
    kobongSelect.value = '';

    kobongOptions.forEach(option => {
      if (!option.dataset.jenis) return;

      option.hidden = option.dataset.jenis !== jenis;
    });
  }

  // default awal (putra)
  filterKobong('putra');

  radios.forEach(radio => {
    radio.addEventListener('change', function () {
      filterKobong(this.value);
    });
  });
});
</script>
<script>
document.addEventListener('DOMContentLoaded', function () {
  const radios = document.querySelectorAll('input[name="jenis_santri"]');

  // === KOBONG ===
  const kobongSelect = document.getElementById('kobongSelect');
  const kobongOptions = kobongSelect.querySelectorAll('option');

  // === KELAS ===
  const kelasSelect = document.getElementById('kelasSelect');
  const kelasOptions = kelasSelect.querySelectorAll('option');

  function filterSelect(options, jenis, selectEl) {
    selectEl.value = '';

    options.forEach(option => {
      if (!option.dataset.jenis) return;
      option.hidden = option.dataset.jenis !== jenis;
    });
  }

  function applyFilter(jenis) {
    filterSelect(kobongOptions, jenis, kobongSelect);
    filterSelect(kelasOptions, jenis, kelasSelect);
  }

  // default awal (putra)
  applyFilter('putra');

  radios.forEach(radio => {
    radio.addEventListener('change', function () {
      applyFilter(this.value);
    });
  });
});
</script>

@endsection
