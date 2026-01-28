@extends('layouts/layoutMaster')

@section('title', 'Peraturan Direktur')

@section('content')
<div class="container py-10">
  <h3>Peraturan Direktur</h3>
  <ul>
    <li>Quiz hanya dapat dikerjakan satu kali</li>
    <li>Tidak boleh refresh halaman</li>
    <li>Jawaban tidak dapat diubah</li>
  </ul>
  <a href="{{ route('quiz.index') }}" class="btn btn-primary">Mulai Quiz</a>
</div>
@endsection
