<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Gilang & Fatihatul — Wedding Invitation</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

    <!-- =====================================================
         MUSIC
    ====================================================== -->
    <audio id="weddingMusic" loop>
    <source src="{{ asset('audio/wedding-instrumental.mp3') }}" type="audio/mpeg">
</audio>

    <button class="music-button" id="musicButton" onclick="toggleMusic()">
        <span id="musicIcon">♫</span>
    </button>


    <!-- =====================================================
         OPENING COVER
    ====================================================== -->
    <section class="opening" id="opening">

        <div class="opening-overlay"></div>

        <div class="floral floral-left"></div>
        <div class="floral floral-right"></div>

        <div class="opening-content">

            <p class="opening-small">
                WE'RE
            </p>

            <h1 class="opening-title">
                Getting Married
            </h1>

            <p class="opening-date">
                14 · 12 · 2026
            </p>

            <h2 class="opening-names">
                Gilang <span>&</span> Fatihatul
            </h2>


            <!-- ENVELOPE -->
           <div
    class="envelope-wrapper"
    id="envelopeWrapper"
    onclick="openEnvelope()"
>

    <div class="envelope">

        <!-- KERTAS UNDANGAN -->
        <div class="letter">

            <div class="letter-paper">

                <img
                    src="{{ asset('images/letter-motif.png') }}"
                    alt="Wedding invitation"
                >

            </div>

        </div>


        <!-- BAGIAN BELAKANG ENVELOPE -->
        <div class="envelope-back"></div>


        <!-- FLAP ENVELOPE -->
        <div class="envelope-flap"></div>


        <!-- BAGIAN DEPAN ENVELOPE -->
        <div class="envelope-front"></div>


        <!-- WAX SEAL -->
        <div class="wax-seal">
            <span>♡</span>
        </div>

    </div>

</div>


<p class="click-envelope" id="clickText">
    CLICK ENVELOPE TO OPEN
</p>


<div class="open-invitation" id="openInvitationButton">
    <button onclick="enterInvitation()">
        BUKA UNDANGAN
    </button>
</div>
        </div>

    </section>



    <!-- =====================================================
         MAIN INVITATION
    ====================================================== -->

    <main id="invitation">

         <!-- BINGKAI GOLD -->
    <div class="gold-frame-css">

        <span class="frame-corner top-left"></span>
        <span class="frame-corner top-right"></span>

        <span class="frame-corner bottom-left"></span>
        <span class="frame-corner bottom-right"></span>

        <span class="frame-ornament top-ornament">
            ✦
        </span>

        <span class="frame-ornament bottom-ornament">
            ✦
        </span>

    </div>




        <!-- =================================================
             INTRO
        ================================================== -->

        <section class="intro section-green">

            <div class="section-decoration top-decoration">
                ✦
            </div>

            <p class="section-label">
                THE WEDDING OF
            </p>

            <h2 class="script-title">
                Gilang & Fatihatul
            </h2>

            <p class="intro-text">
                Dengan memohon rahmat dan ridho Allah SWT,
                kami bermaksud mengundang Bapak/Ibu/Saudara/i
                untuk hadir dan memberikan doa restu pada
                pernikahan kami.
            </p>

            <div class="ornament-line">
                <span></span>
                <i>✦</i>
                <span></span>
            </div>

            <p class="intro-date">
                SENIN, 14 DESEMBER 2026
            </p>

        </section>



        <!-- =================================================
             COUNTDOWN
        ================================================== -->

        <section class="countdown-section section-cream">

            <p class="section-label dark">
                SAVE THE DATE
            </p>

            <h2 class="elegant-title">
                Counting Down To Our Day
            </h2>

            <p class="countdown-date">
                14 DECEMBER 2026 · 08.00 WIB
            </p>


            <div class="countdown-container">

                <div class="countdown-box">
                    <span id="days">00</span>
                    <small>Hari</small>
                </div>

                <div class="countdown-divider">
                    :
                </div>

                <div class="countdown-box">
                    <span id="hours">00</span>
                    <small>Jam</small>
                </div>

                <div class="countdown-divider">
                    :
                </div>

                <div class="countdown-box">
                    <span id="minutes">00</span>
                    <small>Menit</small>
                </div>

                <div class="countdown-divider">
                    :
                </div>

                <div class="countdown-box">
                    <span id="seconds">00</span>
                    <small>Detik</small>
                </div>

            </div>

        </section>



        <!-- =================================================
             COUPLE
        ================================================== -->

        <section class="couple section-burgundy">

            <p class="section-label light">
                THE GROOM & BRIDE
            </p>

            <h2 class="script-title light">
                We Are Getting Married
            </h2>


            <div class="couple-wrapper">


                <!-- Bride -->
                <div class="person">

                    <div class="person-photo">

                        <img
                            src="{{ asset('images/groom.jpg') }}"
                            alt="Gilang"
                        >

                    </div>

                    <h3>
                        Gilang Satria Ramadhana
                    </h3>

                    <p class="parents">
                        Putra kedua dari
                        <br>
                        Bapak Nama Ayah & Ibu Nama Ibu
                    </p>

                </div>


                <div class="couple-symbol">
                    &
                </div>


                <!-- Groom -->
                <div class="person">

                    <div class="person-photo">

                        <img
                            src="{{ asset('images/bride.jpg') }}"
                            alt="Fatihatul"
                        >

                    </div>

                    <h3>
                        Fatihatul Makkiyah
                    </h3>

                    <p class="parents">
                        Putri pertama dari
                        <br>
                        Bapak Nama Ayah & Ibu Nama Ibu
                    </p>

                </div>

            </div>

        </section>



        <!-- =================================================
             SAVE THE DATE
        ================================================== -->

        <section class="save-date section-green">

            <p class="section-label light">
                SAVE THE DATE
            </p>

            <h2 class="script-title light">
                Our Special Day
            </h2>

            <div class="big-date">

                <span>14</span>

                <div>
                    <strong>DECEMBER</strong>
                    <small>2026</small>
                </div>

            </div>


            <div class="event-mini-wrapper">

                <div class="event-mini">

                    <span class="event-icon">
                        ♡
                    </span>

                    <h3>
                        Akad Nikah
                    </h3>

                    <p>
                        08.00 WIB
                    </p>

                </div>


                <div class="event-mini-divider">
                    <span></span>
                </div>


                <div class="event-mini">

                    <span class="event-icon">
                        ✦
                    </span>

                    <h3>
                        Resepsi
                    </h3>

                    <p>
                        11.00 WIB
                    </p>

                </div>

            </div>

        </section>



        <!-- =================================================
             DETAIL EVENT
        ================================================== -->

        <section class="event-detail section-cream">

            <p class="section-label dark">
                WEDDING EVENT
            </p>

            <h2 class="elegant-title">
                Detail Acara
            </h2>


            <div class="event-cards">


                <div class="event-card">

                    <div class="event-card-icon">
                        ♡
                    </div>

                    <p class="event-card-label">
                        AKAD NIKAH
                    </p>

                    <h3>
                        Senin
                    </h3>

                    <strong>
                        14 Desember 2026
                    </strong>

                    <p>
                        08.00 — 10.00 WIB 
                    </p>

                    <div class="event-line"></div>

                    <p class="venue">
                        Gedung Pernikahan
                        <br>
                        kaliguha, Pesawaran Indah, Kec. Padang Cermin, Kabupaten Pesawaran
                        <br>
                        Lampung
                    </p>

                </div>


                <div class="event-card">

                    <div class="event-card-icon">
                        ✦
                    </div>

                    <p class="event-card-label">
                        RESEPSI
                    </p>

                    <h3>
                        Senin
                    </h3>

                    <strong>
                        14 Desember 2026
                    </strong>

                    <p>
                        11.00 WIB — Selesai
                    </p>

                    <div class="event-line"></div>

                    <p class="venue">
                        Gedung Pernikahan
                        <br>
                        kaliguha, Pesawaran Indah, Kec. Padang Cermin, Kabupaten Pesawaran
                        <br>
                        Lampung
                    </p>

                </div>

            </div>


            <a
                href="https://maps.app.goo.gl/Ne1qpFnFKijaMmjf7"
                target="_blank"
                class="maps-button"
            >
                <span>⌖</span>
                LIHAT LOKASI
            </a>

        </section>




        <!-- =================================================
             WEDDING GIFT
        ================================================== -->

        <section class="gift section-burgundy">

            <p class="section-label light">
                WEDDING GIFT
            </p>

            <h2 class="script-title light">
                Your Blessing Is Enough
            </h2>

            <p class="gift-text">
                Doa dan kehadiran Anda merupakan
                hadiah terindah bagi kami.
                Namun apabila ingin memberikan
                tanda kasih, dapat melalui:
            </p>


           <div class="bank-cards">

    
    <div class="bank-card">

        <div class="bank-name">
            BANK BCA
        </div>

        <div class="account-number" id="accountNumberWanita">
            4400132432
        </div>

        <div class="account-owner">
            a.n. GILANG SATRIA RAMADHANA
        </div>

        <button
            class="copy-button"
            onclick="copyAccount('4400132432')"
        >
            COPY REKENING
        </button>

    </div>


    
    <div class="bank-card">

        <div class="bank-name">
            BANK BRI
        </div>

        <div class="account-number" id="accountNumberPria">
            0987654321
        </div>

        <div class="account-owner">
            a.n. FATIHATUL MAKKIYAH
        </div>

        <button
            class="copy-button"
            onclick="copyAccount('0987654321')"
        >
            COPY REKENING
        </button>

    </div>

</div>


            <p
                class="copy-message"
                id="copyMessage"
            >
                Nomor rekening berhasil disalin ♡
            </p>



        </section>



        <!-- =================================================
             GALLERY
        ================================================== -->

        <section class="gallery section-cream">

            <p class="section-label dark">
                OUR MOMENTS
            </p>

            <h2 class="script-title dark">
                Gallery
            </h2>


            <div class="gallery-grid">

                <div class="gallery-item gallery-tall">
                    <img
                        src="{{ asset('images/gallery-1.jpg') }}"
                        alt="Gallery"
                    >
                </div>

                <div class="gallery-item">
                    <img
                        src="{{ asset('images/gallery-2.jpg') }}"
                        alt="Gallery"
                    >
                </div>

                <div class="gallery-item">
                    <img
                        src="{{ asset('images/gallery-3.jpg') }}"
                        alt="Gallery"
                    >
                </div>

                <div class="gallery-item gallery-wide">
                    <img
                        src="{{ asset('images/gallery-4.jpg') }}"
                        alt="Gallery"
                    >
                </div>

                <div class="gallery-item">
                    <img
                        src="{{ asset('images/gallery-5.jpg') }}"
                        alt="Gallery"
                    >
                </div>

                <div class="gallery-item">
                    <img
                        src="{{ asset('images/gallery-6.jpg') }}"
                        alt="Gallery"
                    >
                </div>

                <div class="gallery-item">
                    <img
                        src="{{ asset('images/gallery-7.jpg') }}"
                        alt="Gallery"
                    >
                </div>

            </div>

        </section>



        <!-- =================================================
             RSVP
        ================================================== -->

        <section class="rsvp section-green">

    <div class="rsvp-container">

        <!-- KIRI -->
        <div class="rsvp-left">

            <p class="section-label light">
                RSVP
            </p>

            <h2 class="script-title light">
                Will You Join Us?
            </h2>

            <p class="rsvp-text">
                Kehadiran dan doa restu Anda akan
                menjadi kebahagiaan bagi kami.
            </p>

            <form
                class="rsvp-form"
                onsubmit="submitRSVP(event)"
            >

                <div class="input-group">

                    <label>
                        Nama
                    </label>

                    <input
                        type="text"
                        id="guestName"
                        placeholder="Nama Anda"
                        required
                    >

                </div>


                <div class="input-group">

                    <label>
                        Konfirmasi Kehadiran
                    </label>

                    <select id="attendance" required>

                        <option value="">
                            Pilih
                        </option>

                        <option value="Hadir">
                            Saya akan hadir
                        </option>

                        <option value="Tidak Hadir">
                            Maaf, tidak dapat hadir
                        </option>

                    </select>

                </div>


                <div class="input-group">

                    <label>
                        Ucapan & Doa
                    </label>

                    <textarea
                        id="message"
                        rows="4"
                        placeholder="Tuliskan ucapan untuk kedua mempelai..."
                    ></textarea>

                </div>


                <button
                    type="submit"
                    class="submit-button"
                >
                    KIRIM UCAPAN
                </button>

            </form>

        </div>


        <!-- KANAN -->
        <div class="rsvp-right">

            <p class="section-label light">
                OUR GUESTS
            </p>

            <h3 class="guest-title">
                Ucapan & Doa
            </h3>

            <div
                class="guest-messages"
                id="guestMessages"
            >

                <div
                    class="empty-message"
                    id="emptyMessage"
                >
                    Belum ada ucapan.<br>
                    Jadilah yang pertama memberikan ucapan 🤍
                </div>

            </div>

        </div>

    </div>

</section>


        <!-- =================================================
             CLOSING
        ================================================== -->

        <section class="closing">

            <div class="closing-overlay"></div>

            <div class="closing-content">

                <p class="closing-small">
                    THANK YOU
                </p>

                <h2 class="script-title light">
                    Gilang & Fatihatul
                </h2>

                <p class="closing-quote">
                    "Two hearts, one beautiful journey."
                </p>


                <div class="closing-envelope">

                    <div class="closing-envelope-paper">

                        <span>
                            G & F
                        </span>

                    </div>

                    <div class="closing-wax">
                        ♡
                    </div>

                </div>


                <p class="closing-date">
                    14 · 12 · 2026
                </p>

            </div>

        </section>


    </main>


    <!-- =====================================================
         TOAST
    ====================================================== -->

    <div
        class="toast"
        id="toast"
    ></div>

</body>
</html>