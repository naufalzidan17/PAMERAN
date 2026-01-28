@extends('layouts/layoutMaster')

@section('title', 'Quiz Digital Library')

@section('content')
<div class="container py-10">
  <h3>Quiz Digital Library (Dummy)</h3>
  <p>Ini halaman quiz sementara.</p>
  <a href="{{ route('quiz.leaderboard') }}" class="btn btn-success">Selesai Quiz → Leaderboard</a>
</div>
@endsection
