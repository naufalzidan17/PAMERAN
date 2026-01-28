@extends('layouts.layoutMaster')

@section('title', 'Leaderboard Quiz')

@section('content')
<div class="container py-5">
  <h3 class="mb-4">🏆 Leaderboard Quiz</h3>

  <table class="table table-bordered">
    <thead>
      <tr>
        <th>#</th>
        <th>Nama</th>
        <th>Kelas</th>
        <th>Kobong</th>
        <th>Skor</th>
      </tr>
    </thead>
    <tbody>
      @foreach($leaders as $i => $row)
      <tr>
        <td>{{ $i + 1 }}</td>
        <td>{{ $row->santri->nama }}</td>
        <td>{{ $row->santri->kelas }}</td>
        <td>{{ $row->santri->kobong }}</td>
        <td>
          <span class="badge bg-success">{{ $row->score }}</span>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection
