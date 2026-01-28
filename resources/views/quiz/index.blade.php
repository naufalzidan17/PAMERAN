@extends('layouts.layoutMaster')

@section('title', 'Quiz Makhraj & Tajwid')

@section('page-script')
<script>
document.addEventListener('DOMContentLoaded', function () {

const bankSoal = [
  { q: "Apa itu ilmu tajwid?", o: ["Ilmu sejarah Arab","Ilmu recitation Quran","Ilmu tafsir","Ilmu tata bahasa"], a: 1 },
  { q: "Berapa hukum utama Tajwid saat Nun Sukun bertemu huruf?", o: ["3","4","5","2"], a: 2 },
  { q: "Huruf Idgham Bighunnah termasuk huruf …?", o: ["ل و م ن","ي ن م و","ب م و ي","ء ح خ ع"], a: 1 },
  { q: "Istilah 'Izhar' berarti?", o: ["Jelas tanpa dengung","Menggabungkan suara","Masuk dengung","Membaca cepat"], a: 0 },
  { q: "Huruf Qalqalah termasuk huruf …", o: ["ق ط ب ج د","ك ل م ن و","ي ر د ش س","ح ع غ خ ه"], a: 0 },
];

let quiz=[], i=0, score=0, lock=false;
let timer=15, interval;

const quizBox = document.getElementById('quizBox');
const question = document.getElementById('question');
const feedback = document.getElementById('feedback');
const nextBtn = document.getElementById('nextBtn');
const progress = document.getElementById('progress');
const timerBox = document.getElementById('timerBox');

window.startQuiz = function () {
  quiz = bankSoal.sort(()=>Math.random()-0.5);
  i=0; score=0;
  quizBox.classList.remove('d-none');
  loadQuestion();
}

function startTimer() {
  timer=15;
  timerBox.innerText = timer+'s';
  interval = setInterval(()=>{
    timer--;
    timerBox.innerText = timer+'s';
    if(timer===0){
      clearInterval(interval);
      nextBtn.classList.remove('d-none');
    }
  },1000);
}

function loadQuestion() {
  lock=false;
  question.innerText = quiz[i].q;
  feedback.innerText='';
  nextBtn.classList.add('d-none');
  progress.innerText = `Soal ${i+1}/${quiz.length}`;
  clearInterval(interval);
  startTimer();

  document.querySelectorAll('.option').forEach((btn,idx)=>{
    btn.className='btn btn-outline-primary option';
    btn.innerText = quiz[i].o[idx];
    btn.onclick=()=>checkAnswer(idx,btn);
  });
}

function checkAnswer(idx,btn){
  if(lock) return;
  lock=true;
  clearInterval(interval);

  if(idx===quiz[i].a){
    score++;
    btn.classList.add('btn-success');
    feedback.innerText='✅ Benar';
  } else {
    btn.classList.add('btn-danger');
    feedback.innerText='❌ Salah';
  }
  nextBtn.classList.remove('d-none');
}

window.nextQuestion=function(){
  i++;
  if(i<quiz.length){
    loadQuestion();
  } else {
    fetch("{{ route('quiz.submit') }}",{
      method:'POST',
      headers:{
        'Content-Type':'application/json',
        'X-CSRF-TOKEN':'{{ csrf_token() }}'
      },
      body:JSON.stringify({score})
    }).then(()=>{
      window.location.href="{{ route('quiz.leaderboard') }}";
    });
  }
}

});
</script>
@endsection

@section('content')
<div class="container py-5 text-center">
  <h3>🎮 Quiz Makhraj & Tajwid</h3>
  <button class="btn btn-primary my-4" onclick="startQuiz()">Mulai Quiz</button>

  <div id="quizBox" class="card mx-auto d-none" style="max-width:600px">
    <div class="card-body">
      <div class="d-flex justify-content-between mb-3">
        <span id="progress"></span>
        <span id="timerBox"></span>
      </div>
      <h5 id="question"></h5>
      <div class="d-grid gap-2 my-3">
        <button class="btn btn-outline-primary option"></button>
        <button class="btn btn-outline-primary option"></button>
        <button class="btn btn-outline-primary option"></button>
        <button class="btn btn-outline-primary option"></button>
      </div>
      <div id="feedback"></div>
      <button id="nextBtn" class="btn btn-success d-none" onclick="nextQuestion()">Lanjut</button>
    </div>
  </div>
</div>
@endsection
