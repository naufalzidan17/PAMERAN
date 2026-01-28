@extends('layouts.layoutMaster')

@section('title', 'Leaderboard Quiz')

@section('content')
<div class="container py-5">
  <h3 class="mb-4">🏆 Leaderboard Quiz</h3>

  <div class="table-responsive">
    <table class="table table-bordered align-middle">
      <thead class="table-light">
        <tr class="text-center">
          <th>#</th>
          <th>Nama</th>
          <th>Kelas</th>
          <th>Kobong</th>
          <th>Asal Daerah</th>
          <th>Skor</th>
        </tr>
      </thead>
      <tbody>
        @forelse($leaders as $i => $row)
        <tr>
          <td class="text-center">{{ $i + 1 }}</td>
          <td>{{ $row->santri->nama }}</td>
          <td>{{ $row->santri->kelas }}</td>
          <td>{{ $row->santri->kobong }}</td>
          <td>{{ $row->santri->asal_daerah }}</td>
          <td class="text-center">
            <span class="badge bg-success fs-6">{{ $row->score }}</span>
          </td>
        </tr>
        @empty
        <tr>
          <td colspan="6" class="text-center text-muted">
            Belum ada data leaderboard
          </td>
        </tr>
        @endforelse
      </tbody>
    </table>
  </div>
</div>
@endsection
