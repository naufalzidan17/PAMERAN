@extends('layouts.layoutMaster')

@section('title', 'Quiz Makhraj & Tajwid')

@section('page-script')
<script>
document.addEventListener('DOMContentLoaded', function () {

const bankSoal = [
  { q:"Apa itu Ilmu Tajwid?", o:["Ilmu membaca Al-Qur’an dengan benar","Ilmu sejarah Arab","Ilmu memperindah suara saja","Ilmu menggambar huruf"], a:0 },
  { q:"Makhraj huruf adalah…", o:["Tempat keluarnya huruf","Cara menulis huruf","Jenis huruf Arab","Huruf yang dipakai dalam Quran"], a:0 },
  { q:"Berapa bahagian utama makhraj huruf?", o:["4","2","3","5"], a:0 },
  { q:"Al-Jauf merujuk pada bagian mana?", o:["Rongga mulut hingga kerongkong","Hidung","Bibir","Gigi"], a:0 },
  { q:"As-Syafatain maksudnya…", o:["Dua bibir","Hidung","Lidah","Gigi"], a:0 },
  { q:"Al-Lisan berarti…", o:["Lidah","Suara","Asap","Bibir"], a:0 },
  { q:"Apa tujuan utama mempelajari tajwid?", o:["Membaca Al-Qur’an dengan benar","Menulis Arab","Belajar sejarah","Mempercepat baca"], a:0 },
  { q:"Huruf keluar dari makhraj halqi termasuk…", o:["ء, ه, ع, غ, ح, خ","ي, ن, م, و","ب, م, و","ل, ن"], a:0 },
  { q:"Berapa jumlah huruf hijaiyah?", o:["32","29","30","33"], a:0 },
  { q:"Hukum bila Nun Sukun bertemu huruf ya disebut…", o:["Idgham Bighunnah","Izhar Halqi","Iqlab","Ikhfa’"], a:0 },
  { q:"Mad thabi’i terjadi bila huruf mad bertemu…", o:["Huruf hidup","Huruf mati","Tanwin","Hamzah"], a:0 },
  { q:"Idgham artinya…", o:["Menggabungkan bacaan","Mempercepat bacaan","Masuk dengung","Menambah huruf"], a:0 },
  { q:"Izhar berarti…", o:["Jelas tanpa dengung","Masuk dengung","Menyatukan suara","Menambah suara"], a:0 },
  { q:"Qalqalah huruf termasuk…", o:["ق, ط, ب, ج, د","س, ش, ص","ل, ن","ي, و"], a:0 },
  { q:"Apakah Ghunnah?", o:["Dengungan suara","Diam saja","Makna huruf","Huruf mati"], a:0 },
  { q:"Apa yang dimaksud madd wajib muttasil?", o:["Mad yang berhubungan langsung","Tanwin","Huruf sukun","Stop baca"], a:0 },
  { q:"Huruf-huruf idgham bighunnah adalah…", o:["ي, ن, م, و","ل, r","ء, ح, خ","ق, ط, ب"], a:0 },
  { q:"Mad jaiz munfasil adalah…", o:["Mad bila terpisah kata","Tanwin saja","Huruf mati","Stop baca"], a:0 },
  { q:"Tujuan waqaf dalam tajwid adalah…", o:["Menandai berhenti","Masuk suara","Menambah bacaan","Mengulang huruf"], a:0 },
  { q:"Huruf yang keluar dari pangkal lidah termasuk…", o:["ق, ك","ت, ث","ن, ل","س, ش"], a:0 },
  { q:"Huruf yang keluar dari tepi lidah adalah…", o:["ض, ل","ا, و","ق, ك","م, ن"], a:0 },
  { q:"Huruf yang keluar dari hujung lidah termasuk…", o:["ت, ل, ن","ق, ك","ض, ل","ب, م"], a:0 },
  { q:"Makhraj al-khaisyum artinya…", o:["Rongga hidung","Rongga mulut","Kerongkong","Lidah"], a:0 },
  { q:"Makhraj huruf membantu…", o:["Melatih pengucapan huruf","Menghafal arti Quran","Menulis huruf","Belajar nahwu"], a:0 },
  { q:"Tujuan idgham bighunnah adalah…", o:["Menyambung dengung","Menghentikan suara","Menambah huruf","Membaca cepat"], a:0 },
  { q:"Ketika tanwin bertemu huruf mim menjadi…", o:["Ikhfa syafawi","Izhar","Idgham","Iqlab"], a:0 },
  { q:"Iqlab berarti…", o:["Mengubah nun sukun","Menggabungkan suara","Menghentikan bacaan","Menambah madd"], a:0 },
  { q:"Dalam tajwid, madd berarti…", o:["Memanjangkan bacaan","Menghapus bacaan","Mendengungkan suara saja","Huruf sukun"], a:0 },
  { q:"Sifat huruf tajwid termasuk…", o:["Shiddah","Wazan","Nahwu","Isim"], a:0 },
  { q:"Hukum bacaan yang menimbulkan dengung disebut…", o:["Ghunnah","Izhar","Idgham","Qalqalah"], a:0 },
  { q:"Yang terjadi jika salah tajwid adalah…", o:["Kesalahan bacaan","Huruf hilang","Huruf bertambah","Lebih cepat selesai"], a:0 },
  { q:"Mad wajib muttasil selalu…", o:["Berada di 1 kata","Terpisah kata","Tanwin saja","Huruf mati"], a:0 },
  { q:"Maksud mad far’i adalah…", o:["Mad tambahan","Mad pokok","Tanwin saja","Huruf tetap"], a:0 },
  { q:"Idgham bila nun sukun dan lam disebut…", o:["Idgham bila ghunnah","Izhar","Iqlab","Ikhfa"], a:0 },
  { q:"Huruf izhar halqi termasuk…", o:["ح, ع, ه, أ, غ, خ","ي, ن, م, و","ل, ر","ق, ب, ء"], a:0 },
  { q:"Huruf mim sukun bila bertemu ba disebut…", o:["Ikhfa syafawi","Idgham","Izhar","Iqlab"], a:0 },
  { q:"Nun sukun bertemu huruf ra disebut…", o:["Iqlab","Izhar","Idgham","Ikhfa"], a:0 },
  { q:"Maksud mad lazim adalah…", o:["Mad panjang > 2","Mad biasa","Tanwin","Huruf mati"], a:0 },
  { q:"Huruf yang bukan idgham bighunnah adalah…", o:["ل","م","ن","و"], a:0 },
  { q:"Contoh huruf qalqalah kecil adalah…", o:["ج","ق","ل","ن"], a:0 },
  { q:"Idgham bilaghunnah tidak menghasilkan…", o:["Dengung","Gabungan suara","Nada suara","Tanwin"], a:0 },
  { q:"Hukum bila huruf hamzah setelah mad disebut…", o:["Mad wajib muttasil","Izhar","Idgham","Ikhfa"], a:0 },
  { q:"Makhraj al-jawf adalah…", o:["Rongga mulut & kerongkong","Hidung","Bibir","Gigi"], a:0 },
  { q:"Huruf dari pangkal kerongkong termasuk…", o:["ء, ه","ن, م","ب, و","ل, ر"], a:0 },
  { q:"Bagian makhraj huruf lidah mencakup…", o:["Lidah depan & belakang","Nose","Gigi","Kerongkong"], a:0 },
  { q:"Huruf madd dalam kata termasuk…", o:["ا, و, ي","ب, ت, ث","ح, خ, ع","ص, ض, ط"], a:0 },
  { q:"Hukum tanwin bertemu huruf lam disebut…", o:["Idgham bila ghunnah","Izhar","Iqlab","Ikhfa"], a:0 },
  { q:"Contoh makhraj dari belakang lidah adalah…", o:["ق","ت","ب","س"], a:0 },
  { q:"Mim sukun bertemu nun disebut…", o:["Idgham bigunnah","Izhar","Iqlab","Ikhfa"], a:0 },
  { q:"Huruf yang keluar tepi lidah termasuk…", o:["ض","س","ن","ل"], a:0 },
  { q:"Idgham tanwin bertemu huruf wawu disebut…", o:["Idgham bigunnah","Izhar","Iqlab","Ikhfa"], a:0 },
  { q:"Huruf shiddah maksudnya…", o:["Bacaan kuat","Bacaan ringan","Mad panjang","Stop baca"], a:0 },
  { q:"Huruf yang membuat ghunnah adalah…", o:["ن, م","ل, ر","ح, ع","ص, ض"], a:0 },
  { q:"Huruf yang keluar dari bibir termasuk…", o:["ب, ف, م","ت, ث","س, ش","ن, ل"], a:0 },
  { q:"Qalqalah besar terjadi bila huruf mendapat…", o:["Sukun","Tanwin","Mad","Hamzah"], a:0 },
  { q:"Huruf mad bertemu hamzah disebut…", o:["Mad wajib muttasil","Izhar","Iqlab","Ikhfa"], a:0 },
  { q:"Huruf throat paling bawah adalah…", o:["خ","ح","ع","ه"], a:0 },
  { q:"Huruf yang keluar dari tenggorok…", o:["ء, ه","ن, م","ب, و","ل, ر"], a:0 },
  { q:"Huruf yang keluar dari pangkal lidah adalah…", o:["ق, ك","ل, ن","ت, ث","ب, م"], a:0 },
  { q:"Huruf yang keluar dari hujung bibir disebut…", o:["ب","ف","م","و"], a:0 },
  { q:"Huruf lati termasuk…", o:["ل","ن","ر","ق"], a:0 },
  { q:"Macam makhraj ada berapa…", o:["17","10","12","25"], a:0 },
  { q:"Tajwid membantu kita membaca…", o:["Tartil","Kuasaan","Sejarah Arab","Nada tinggi"], a:0 },
  { q:"Huruf yang memberi dengung adalah…", o:["ن, م","ق, ط","ل, ر","س, ش"], a:0 },
  { q:"Huruf selain idgham bighunnah…", o:["لا","ء","ح","خ"], a:0 },
  { q:"Huruf yang keluar dari rongga hidung saja…", o:["ن","م","ب","و"], a:0 },
  { q:"Huruf yang memberi qalqalah kecil…", o:["ج","د","ب","ق"], a:0 },
  { q:"Huruf yang bukan huruf madd…", o:["ب","ا","و","ي"], a:0 }
];


let quiz=[], i=0, score=0, lock=false;
let timer=15, interval;
let level = 1;
let soalPerLevel = 10;

const quizBox = document.getElementById('quizBox');
const question = document.getElementById('question');
const feedback = document.getElementById('feedback');
const nextBtn = document.getElementById('nextBtn');
const progress = document.getElementById('progress');
const timerBox = document.getElementById('timerBox');

// modal elements
const levelModal = document.getElementById('levelChoice');
const modalBackdrop = document.getElementById('modalBackdrop');
const modalTitle = document.getElementById('modalTitle');
const modalBody = document.getElementById('modalBody');
const modalContinue = document.getElementById('modalContinue');
const modalFinish = document.getElementById('modalFinish');

function showLevelModal(title, body){
  modalTitle.innerText = title;
  modalBody.innerText = body;
  levelModal.classList.remove('d-none');
  modalBackdrop.classList.remove('d-none');
}

function hideLevelModal(){
  levelModal.classList.add('d-none');
  modalBackdrop.classList.add('d-none');
}

modalContinue.addEventListener('click', function(){
  hideLevelModal();
  // lanjut ke soal saat ini (i sudah mengarah ke soal selanjutnya)
  if(i < quiz.length){
    loadQuestion();
  } else {
    submitScore();
  }
});

modalFinish.addEventListener('click', function(){
  hideLevelModal();
  submitScore();
});

window.startQuiz = function () {
  quiz = bankSoal.sort(()=>Math.random()-0.5);
  i = 0;
  score = 0;
  level = 1;
  quizBox.classList.remove('d-none');
  hideLevelModal();
  loadQuestion();
}

function startTimer() {
  timer = 15;
  timerBox.innerText = timer + 's';
  interval = setInterval(()=>{
    timer--;
    timerBox.innerText = timer + 's';
    if(timer === 0){
      clearInterval(interval);
      nextBtn.classList.remove('d-none');
    }
  },1000);
}

function loadQuestion() {
  lock = false;
  level = Math.floor(i / soalPerLevel) + 1;

  // safety: jika index melebihi panjang quiz
  if(i >= quiz.length){
    submitScore();
    return;
  }

  question.innerText = quiz[i].q;
  feedback.innerText = '';
  nextBtn.classList.add('d-none');
  progress.innerText = `Level ${level} | Soal ${ (i % soalPerLevel) + 1 } dari ${soalPerLevel}`;

  clearInterval(interval);
  startTimer();

  document.querySelectorAll('.option').forEach((btn,idx)=>{
    btn.className='btn btn-outline-primary option';
    btn.innerText = quiz[i].o[idx];
    btn.onclick = ()=>checkAnswer(idx,btn);
  });
}

function checkAnswer(idx, btn){
  if(lock) return;
  lock = true;
  clearInterval(interval);

  let poin = level * 10;

  if(idx === quiz[i].a){
    score += poin;
    btn.classList.add('btn-success');
    feedback.innerText = `✅ Benar (+${poin})`;
  } else {
    btn.classList.add('btn-danger');
    feedback.innerText = '❌ Salah';
  }

  nextBtn.classList.remove('d-none');
}

window.nextQuestion = function(){
  i++;

  // selesai satu level (setiap soalPerLevel soal)
  if(i % soalPerLevel === 0 && i < quiz.length){
    // tampilkan modal pilihan (i sekarang menunjuk soal pertama di level berikutnya)
    setTimeout(()=>{
      showLevelModal(
        `Level ${level} selesai!`,
        `Skor sementara: ${score}\nLanjut ke level ${level+1}?`
      );
    },300);
    return;
  }

  if(i < quiz.length){
    loadQuestion();
  } else {
    submitScore();
  }
}

function submitScore(){
  // disable tombol supaya user tidak klik ganda
  nextBtn.disabled = true;

  fetch("{{ route('quiz.submit') }}",{
    method:'POST',
    headers:{
      'Content-Type':'application/json',
      'X-CSRF-TOKEN':'{{ csrf_token() }}'
    },
    body:JSON.stringify({ score })
  }).then(()=> {
    window.location.href="{{ route('quiz.leaderboard') }}";
  }).catch(()=> {
    // jika gagal, tetap arahkan ke leaderboard (atau tampilkan pesan)
    window.location.href="{{ route('quiz.leaderboard') }}";
  });
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

      <div id="feedback" class="mb-3"></div>
      <button id="nextBtn" class="btn btn-success d-none" onclick="nextQuestion()">Lanjut</button>
    </div>
  </div>
</div>

<!-- Modal pilihan level (simple, tanpa dependency tambahan) -->
<div id="modalBackdrop" class="position-fixed top-0 start-0 w-100 h-100 d-none" style="background:rgba(0,0,0,0.5); z-index:1040;"></div>

<div id="levelChoice" class="card position-fixed top-50 start-50 translate-middle d-none" style="z-index:1050; width:360px;">
  <div class="card-body text-center">
    <h5 id="modalTitle" class="mb-2"></h5>
    <p id="modalBody" class="mb-3" style="white-space:pre-line;"></p>
    <div class="d-flex justify-content-center gap-2">
      <button id="modalContinue" class="btn btn-primary">Lanjut</button>
      <button id="modalFinish" class="btn btn-secondary">Selesai</button>
    </div>
  </div>
</div>
@endsection
