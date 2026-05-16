<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Menu Catering - Sajian Penuh Martabat</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="hero">
  <div class="hero-logos">
    <img src="yayubi/gambarr/logo halal.jpeg" alt="Halal">
    <img src="yayubi/gambarr/logo yayubi.jpeg" alt="Yayubi">
  </div>
  <div class="slides" id="slides">
    <div class="slide"><img src="yayubi/gambarr/Banner nasi tumpeng.png" alt="Nasi Tumpeng"></div>
    <div class="slide"><img src="yayubi/gambarr/Banner nasi box.png" alt="Nasi Box"></div>
    <div class="slide"><img src="yayubi/gambarr/Banner snack.png" alt="Snack"></div>
  </div>
  <button class="slider-arrow prev" onclick="moveSlide(-1)">&#8249;</button>
  <button class="slider-arrow next" onclick="moveSlide(1)">&#8250;</button>
  <div class="slider-dots">
    <button class="dot active" onclick="goSlide(0)"></button>
    <button class="dot" onclick="goSlide(1)"></button>
    <button class="dot" onclick="goSlide(2)"></button>
  </div>
</div>

<div class="nav-back">
  <button onclick="window.history.back()">Kembali</button>
</div>

<div class="main">
  <div class="section-header">
    <div><span class="badge-terlaris">Paket Terlaris</span></div>
    <div class="section-title">Menu</div>
    <div class="section-sub">Pilihan terbaik pelanggan kami</div>
  </div>

  <div class="search-wrap">
    <input type="text" id="search-input" placeholder="Cari menu makanan..." oninput="filterMenu()">
    <span class="search-icon">🔍</span>
  </div>

  <div class="category-tabs">
    <button class="tab-btn active" onclick="filterCategory('semua', this)">Semua</button>
    <button class="tab-btn" onclick="filterCategory('nasi-tumpeng', this)">Nasi Tumpeng</button>
    <button class="tab-btn" onclick="filterCategory('nasi-dus', this)">Nasi Dus</button>
    <button class="tab-btn" onclick="filterCategory('snack', this)">Snack</button>
  </div>

  <div class="paket-grid" id="paket-grid">

    <div class="card" id="card1" data-category="nasi-tumpeng" data-name="tumpeng besar nasi tumpeng">
      <div class="card-detail-overlay">
        <div class="detail-title">Tumpeng Besar</div>
        <div class="detail-text">Nikmati sajian lengkap dalam satu paket praktis dan lezat!</div>
        <div class="detail-price">Rp600.000</div>
        <button class="close-btn" onclick="closeDetail('card1')">✕ Tutup</button>
      </div>
      <img class="card-img" src="yayubi/gambarr/tumpeng besar.jpeg" alt="Tumpeng Besar">
      <div class="card-body">
        <span class="card-category-badge">Nasi Tumpeng</span>
        <div class="card-tag">Tumpeng Besar</div>
        <div class="card-price">Rp600.000 <span>/pax</span></div>
        <button class="card-btn" onclick="showDetail('card1')">👁 Lihat Detail →</button>
      </div>
    </div>

    <div class="card" id="card2" data-category="nasi-tumpeng" data-name="tumpeng kecil nasi tumpeng">
      <div class="card-detail-overlay">
        <div class="detail-title">Tumpeng Kecil</div>
        <div class="detail-text">Sederhana tapi tetap istimewa!</div>
        <div class="detail-price">Rp350.000</div>
        <button class="close-btn" onclick="closeDetail('card2')">✕ Tutup</button>
      </div>
      <img class="card-img" src="yayubi/gambarr/tumpeng kecil.jpeg" alt="Tumpeng Kecil">
      <div class="card-body">
        <span class="card-category-badge">Nasi Tumpeng</span>
        <div class="card-tag">Tumpeng Kecil</div>
        <div class="card-price">Rp350.000 <span>/pax</span></div>
        <button class="card-btn" onclick="showDetail('card2')">👁 Lihat Detail →</button>
      </div>
    </div>

    <div class="card" id="card3" data-category="nasi-dus" data-name="nasi dus ayam bakar">
        <div class="card-detail-overlay">
            <div class="detail-title">Nasi Dus Ayam Bakar</div>
            <div class="detail-text">Nasi + Ayam Bakar + Sambal + Lalap 🔥</div>
            <div class="detail-price">Rp20.000</div>
            <button class="close-btn" onclick="closeDetail('card3')">✕ Tutup</button>
        </div>
        <img class="card-img" src="yayubi/gambarr/nasidusayambakar.jpeg" alt="Nasi Dus">
        <div class="card-body">
            <span class="card-category-badge">Nasi Dus</span>
            <div class="card-tag">Ayam Bakar</div>
            <div class="card-price">Rp20.000 <span>/dus</span></div>
            <button class="card-btn" onclick="showDetail('card3')">👁 Lihat Detail →</button>
        </div>
    </div>

    <div class="card" id="card4" data-category="nasi-dus" data-name="nasi dus ayam goreng">
        <div class="card-detail-overlay">
            <div class="detail-title">Nasi Dus Ayam Goreng</div>
            <div class="detail-text">Nasi + Ayam Goreng + Sambal + Lalap 🍗</div>
            <div class="detail-price">Rp20.000</div>
            <button class="close-btn" onclick="closeDetail('card4')">✕ Tutup</button>
        </div>
        <img class="card-img" src="yayubi/gambarr/nasiayamgorengsambellalap.jpeg" alt="Nasi Dus">
        <div class="card-body">
            <span class="card-category-badge">Nasi Dus</span>
            <div class="card-tag">Ayam Goreng</div>
            <div class="card-price">Rp20.000 <span>/dus</span></div>
            <button class="card-btn" onclick="showDetail('card4')">👁 Lihat Detail →</button>
        </div>
    </div>

    <div class="card" id="card5" data-category="nasi-dus" data-name="nasi dus capcay lengkap">
        <div class="card-detail-overlay">
            <div class="detail-title">Nasi Dus Capcay</div>
            <div class="detail-text">Nasi + Ayam Goreng + Cap Cay + Bakmi + Sambal + Telur 🍜</div>
            <div class="detail-price">Rp25.000</div>
            <button class="close-btn" onclick="closeDetail('card5')">✕ Tutup</button>
        </div>
        <img class="card-img" src="yayubi/gambarr/nasi capcay.jpeg" alt="Nasi Dus">
        <div class="card-body">
            <span class="card-category-badge">Nasi Dus</span>
            <div class="card-tag">Capcay Lengkap</div>
            <div class="card-price">Rp25.000 <span>/dus</span></div>
            <button class="card-btn" onclick="showDetail('card5')">👁 Lihat Detail →</button>
        </div>
    </div>

    <div class="card" id="card6" data-category="nasi-dus" data-name="nasi dus gudangan">
        <div class="card-detail-overlay">
            <div class="detail-title">Nasi Dus Gudangan</div>
            <div class="detail-text">Nasi + Gudangan Sayur + Tahu/Tempe + Telur Bulat 🥗</div>
            <div class="detail-price">Rp20.000</div>
            <button class="close-btn" onclick="closeDetail('card6')">✕ Tutup</button>
        </div>
        <img class="card-img" src="yayubi/gambarr/nasi gudangan.jpeg" alt="Nasi Dus">
        <div class="card-body">
            <span class="card-category-badge">Nasi Dus</span>
            <div class="card-tag">Gudangan</div>
            <div class="card-price">Rp20.000 <span>/dus</span></div>
            <button class="card-btn" onclick="showDetail('card6')">👁 Lihat Detail →</button>
        </div>
    </div>

    <div class="card" id="card7" data-category="nasi-dus" data-name="nasi dus kering tempe">
        <div class="card-detail-overlay">
            <div class="detail-title">Nasi Dus Kering Tempe</div>
            <div class="detail-text">Nasi + Kering Tempe + Telur Dadar + Sambal Goreng + Kerupuk 🥚</div>
            <div class="detail-price">Rp25.000</div>
            <button class="close-btn" onclick="closeDetail('card7')">✕ Tutup</button>
        </div>
        <img class="card-img" src="yayubi/gambarr/nasi kering tempe.jpeg" alt="Nasi Dus">
        <div class="card-body">
            <span class="card-category-badge">Nasi Dus</span>
            <div class="card-tag">Kering Tempe</div>
            <div class="card-price">Rp25.000 <span>/dus</span></div>
            <button class="card-btn" onclick="showDetail('card7')">👁 Lihat Detail →</button>
        </div>
    </div>

    <div class="card" id="card8" data-category="snack" data-name="kroket snack">
      <div class="card-detail-overlay">
        <div class="detail-title">Kroket</div>
        <div class="detail-text">Kroket goreng keemasan dengan isian kentang lembut. 😋</div>
        <div class="detail-price">Rp3.000</div>
        <button class="close-btn" onclick="closeDetail('card8')">✕ Tutup</button>
      </div>
      <img class="card-img" src="yayubi/gambarr/kroket.jpeg" alt="Kroket">
      <div class="card-body">
        <span class="card-category-badge">Snack</span>
        <div class="card-tag">Kroket</div>
        <div class="card-price">Rp3.000 <span>/pcs</span></div>
        <button class="card-btn" onclick="showDetail('card8')">👁 Lihat Detail →</button>
      </div>
    </div>

    <div class="card" id="card9" data-category="snack" data-name="risole mayo snack">
        <div class="card-detail-overlay">
          <div class="detail-title">Risole Mayo</div>
          <div class="detail-text">Kulit dadar tipis nan lembut diisi mayo creamy. 🥚</div>
          <div class="detail-price">Rp3.500</div>
          <button class="close-btn" onclick="closeDetail('card9')">✕ Tutup</button>
        </div>
        <img class="card-img" src="yayubi/gambarr/risol mayo.jpeg" alt="Risole Mayo">
        <div class="card-body">
          <span class="card-category-badge">Snack</span>
          <div class="card-tag">Risole Mayo</div>
          <div class="card-price">Rp3.500 <span>/pcs</span></div>
          <button class="card-btn" onclick="showDetail('card9')">👁 Lihat Detail →</button>
        </div>
    </div>

    <div class="no-result" id="no-result">
      <span>🔍</span>
      Menu tidak ditemukan.
    </div>

  </div>
</div>

<script src="script.js"></script>
</body>
</html>