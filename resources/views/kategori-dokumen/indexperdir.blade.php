  @php
    $configData = Helper::appClasses();
  @endphp

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
    { q: "Huruf Izhar Syafawi berlaku saat Nun Sukun bertemu huruf …?", o: ["ب","م","ل","ر"], a: 0 },
    { q: "Huruf yang termasuk Izhar Halqi adalah …", o: ["ل ر","ي ن م","ء هـ ع ح غ خ","ب م و"], a: 2 },
    { q: "Iqlab terjadi bila Nun Sukun bertemu huruf …", o: ["ب","ل","ر","و"], a: 0 },
    { q: "Mim Sukun bertemu huruf ب hukumnya …", o: ["Izhar Syafawi","Ikhfa’ Syafawi","Idgham Mimi","Iqlab"], a: 0 },
    { q: "Huruf Qalqalah termasuk huruf …", o: ["ق ط ب ج د","ك ل م ن و","ي ر د ش س","ح ع غ خ ه"], a: 0 },
    { q: "Madd Tabi’i adalah huruf mad yang …", o: ["Diperpanjang karena waqaf","Original","Tidak dibaca","Selalu berdengung"], a: 1 },
  ];

  let quiz = [];
  let i = 0, score = 0, lock = false;

  /* =========================
    🔥 FITUR TAMBAHAN
  ========================= */
  let timer = 15;
  let interval;
  let streak = 0;

  const soundBenar = new Audio("https://assets.mixkit.co/sfx/preview/mixkit-correct-answer-tone-2870.mp3");
  const soundSalah = new Audio("https://assets.mixkit.co/sfx/preview/mixkit-wrong-answer-fail-notification-946.mp3");

  function startTimer() {
    timer = 15;
    timerBox.innerText = `⏱ ${timer}s`;
    interval = setInterval(() => {
      timer--;
      timerBox.innerText = `⏱ ${timer}s`;
      if (timer === 0) {
        clearInterval(interval);
        feedback.innerText = "⏰ Waktu Habis";
        nextBtn.classList.remove('d-none');
        streak = 0;
      }
    }, 1000);
  }
const quizBox = document.getElementById('quizBox');
const question = document.getElementById('question');
const feedback = document.getElementById('feedback');
const nextBtn = document.getElementById('nextBtn');
const progress = document.getElementById('progress');
const streakBox = document.getElementById('streakBox');
const timerBox = document.getElementById('timerBox');

  window.startQuiz = function () {
    quiz = bankSoal.sort(() => Math.random() - 0.5).slice(0, 10);
    i = 0; score = 0; streak = 0;
    quizBox.classList.remove('d-none');
    loadQuestion();
  }

  function loadQuestion() {
    lock = false;
    question.innerText = quiz[i].q;
    feedback.innerText = "";
    nextBtn.classList.add('d-none');
    progress.innerText = `Soal ${i+1}/10`;
    streakBox.innerText = `🔥 Streak: ${streak}`;
    clearInterval(interval);
    startTimer();

    document.querySelectorAll('.option').forEach((btn, idx) => {
      btn.className = 'btn btn-outline-primary option';
      btn.innerText = quiz[i].o[idx];
      btn.onclick = () => checkAnswer(idx, btn);
    });
  }

  function checkAnswer(idx, btn) {
    if (lock) return;
    lock = true;
    clearInterval(interval);

    if (idx === quiz[i].a) {
      btn.classList.add('btn-success');
      score++; streak++;
      soundBenar.play();
      feedback.innerText = "✅ Benar";
    } else {
      btn.classList.add('btn-danger');
      streak = 0;
      soundSalah.play();
      feedback.innerText = "❌ Salah";
    }
    nextBtn.classList.remove('d-none');
  }

  window.nextQuestion = function () {
    i++;
    if (i < quiz.length) loadQuestion();
    else {
      quizBox.innerHTML = `
        <div class="card-body text-center p-5">
          <h4>🎉 Quiz Selesai</h4>
          <p class="fs-5">Skor: <b>${score}/10</b></p>
          ${score >= 8 ? "<p class='text-success fw-bold'>🔥 MasyaAllah! Hebat!</p>" : ""}
          <button class="btn btn-primary mt-3" onclick="startQuiz()">Main Lagi</button>
        </div>`;
      if (score >= 8) confetti();
    }
  }

  /* 🎊 Confetti */
  function confetti() {
    import("https://cdn.jsdelivr.net/npm/canvas-confetti@1.6.0/dist/confetti.browser.min.js")
    .then(m => m.default({ particleCount: 150, spread: 90 }));
  }

  /* ⌨ Keyboard */
  document.addEventListener('keydown', e => {
    if (lock) return;
    if (e.key >= '1' && e.key <= '4')
      document.querySelectorAll('.option')[e.key-1]?.click();
    if (e.key === 'Enter' && !nextBtn.classList.contains('d-none'))
      nextBtn.click();
  });

  });
  </script>
  @endsection


  @section('content')
  <div class="container py-5">

    <div class="text-center mb-5">
      <h3 class="fw-bold">🎮 Quiz Makhraj & Tajwid</h3>
      <p class="text-muted">Uji pemahamanmu tentang makhraj huruf & hukum tajwid</p>
      <button class="btn btn-primary btn-lg" onclick="startQuiz()">Mulai Quiz</button>
    </div>

    <div class="d-flex justify-content-center">
      <div id="quizBox" class="card shadow-lg d-none" style="max-width:720px; width:100%;">
        <div class="card-body p-5">

          <div class="d-flex justify-content-between mb-3 fw-bold">
            <span id="progress"></span>
            <span id="timerBox">⏱ 15s</span>
            <span id="streakBox">🔥 Streak: 0</span>
          </div>

          <h5 id="question" class="mb-4 text-center"></h5>

          <div class="d-grid gap-3">
            <button class="btn btn-outline-primary option"></button>
            <button class="btn btn-outline-primary option"></button>
            <button class="btn btn-outline-primary option"></button>
            <button class="btn btn-outline-primary option"></button>
          </div>

          <div id="feedback" class="mt-4 fw-bold text-center"></div>

          <div class="text-center mt-4">
            <button class="btn btn-success d-none" id="nextBtn" onclick="nextQuestion()">Soal Berikutnya</button>
          </div>

        </div>
      </div>
    </div>
  </div>
  @endsection
