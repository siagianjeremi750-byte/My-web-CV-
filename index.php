<?php
$pesan_status = "";
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['btn_kirim'])) {
    $nama = htmlspecialchars($_POST['txt_nama']);
    $email = htmlspecialchars($_POST['txt_email']);
    $pesan = htmlspecialchars($_POST['txt_pesan']);
   
    if (!empty($nama) && !empty($pesan)) {
        $pesan_status = "<div class='alert-succes' style='color: green; margin-bottom: 15px;'>Terima Kasih <strong>$nama</strong>, pesan Anda telah berhasil dikirim ke server SMKN 5 Batam!</div>";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV JEREMI - SMKN 5 BATAM</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
<div class="container">
    <header>
        <div class="profile-info">
            <div class="avatar">
                👤
            </div>
            <div>
                <h1 style="margin:0;">Jeremi</h1>
                <p style="margin: 5px 0 0 0; color:gray">Siswa Teknik Komputer dan Jaringan SMKN 5 BATAM</p>
            </div>
        </div>
        <nav>
            <a href="#profil">Home</a>
            <a href="#SkilLs">Skills</a>
            <a href="#kontak">Kontak</a>
            <button id="btn-theme" onclick="toggleTheme()">Dark Mode 🌙</button>
        </nav>
    </header>

    <div class="main-content">
        <div class="left-column">
            <div class="card" id="profil">
                <h2>PROFIL</h2>
                <h3>👤 BIODATA</h3>
                <p>Siswa aktif di bidang Teknik Komputer dan Jaringan</p>

                <h3>🎓 PENDIDIKAN</h3>
                <ul>
                    <li>TK SEKOLAH ELSADAI BATAM</li>
                    <li>SD ELSADAI BATAM</li>
                    <li>SMPN 35 BATAM</li>
                    <li>SMKN 5 BATAM (Saat ini)</li>
                </ul>

                <h3>📚 PENGALAMAN BELAJAR</h3>
                <ul>
                    <li>Mempelajari Microsoft Office</li>
                    <li>Membuat Website Front End Sederhana (HTML, CSS, JS)</li>
                    <li>Menginstall Sistem Operasi Windows dan Linux</li>
                    <li>Mengkrimping Kabel LAN</li>
                    <li>Mengkonfigurasi Jaringan</li>
                    <li>Membuat Topologi Jaringan di Cisco Packet Tracer</li>
                </ul>
            </div>
        </div>

        <div class="right-column">
            <div class="card" id="SkilLs">
                <h2>MY SKILL</h2>

                <div class="skill-item">
                    <span class="skill-name">Microsoft Office</span>
                    <div class="progress-bar"><div class="progress-fill" style="width: 90%"></div></div>
                </div>

                <div class="skill-item">
                    <span class="skill-name">Website Front End (HTML, CSS, JS)</span>
                    <div class="progress-bar"><div class="progress-fill" style="width: 85%"></div></div>
                </div>

                <div class="skill-item">
                    <span class="skill-name">Install Sistem Operasi Windows dan Linux</span>
                    <div class="progress-bar"><div class="progress-fill" style="width: 70%"></div></div>
                </div>

                <div class="skill-item">
                    <span class="skill-name">Crimping Kabel LAN</span>
                    <div class="progress-bar"><div class="progress-fill" style="width: 80%"></div></div>
                </div>

                <div class="skill-item">
                    <span class="skill-name">Konfigurasi Jaringan</span>
                    <div class="progress-bar"><div class="progress-fill" style="width: 85%"></div></div>
                </div>

                <div class="skill-item">
                    <span class="skill-name">Topologi Jaringan di Cisco Packet Tracer</span>
                    <div class="progress-bar"><div class="progress-fill" style="width: 75%"></div></div>
                </div>
            </div>

            <div class="card" id="kontak">
                <h2>FORM KONTAK</h2>

                <?php echo $pesan_status; ?>

                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                    <div class="form-group">
                        <label for="nama">Nama Lengkap</label>
                        <input type="text" id="nama" name="txt_nama" placeholder="Masukkan nama..." required>
                    </div>

                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" id="email" name="txt_email" placeholder="Masukkan email..." required>
                    </div> 

                    <div class="form-group">
                        <label for="pesan">Pesan:</label>
                        <textarea id="pesan" name="txt_pesan" rows="4" placeholder="Masukkan pesan..." required></textarea>
                    </div>

                    <button type="submit" name="btn_kirim" class="btn-submit">KIRIM PESAN</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="ss.js" defer></script>
</body>
</html>

