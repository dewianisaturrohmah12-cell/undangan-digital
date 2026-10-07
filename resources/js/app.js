/* =========================================================
   WEDDING INVITATION JAVASCRIPT
========================================================= */


/* =========================================================
   ENVELOPE
========================================================= */

window.openEnvelope = function () {

    const envelope = document.getElementById('envelopeWrapper');
    const clickText = document.getElementById('clickText');

    if (!envelope) {
        return;
    }

    envelope.classList.add('open');

    if (clickText) {
        clickText.innerText = 'YOUR INVITATION IS OPEN';
    }

};


/* =========================================================
   ENTER INVITATION
========================================================= */

window.enterInvitation = function () {
    const cover = document.getElementById("opening");
    const invitation = document.getElementById("invitation");
    const music = document.getElementById("weddingMusic");

    // Putar musik saat tombol BUKA UNDANGAN diklik
    if (music) {
        music.volume = 0.7;

        music.play()
            .then(() => {
                console.log("Musik berhasil diputar");
            })
            .catch((error) => {
                console.error("Musik gagal diputar:", error);
            });
    }

    // Tutup halaman opening
    if (!cover || !invitation) return;

    cover.style.opacity = "0";
    cover.style.transition = "opacity .8s ease";

    setTimeout(() => {
        cover.style.display = "none";
        invitation.style.display = "block";

        window.scrollTo({
            top: 0,
            behavior: "instant"
        });
    }, 800);
};


/* =========================================================
   COUNTDOWN
========================================================= */

const weddingDate =
    new Date('2026-12-14T08:00:00+07:00').getTime();


function updateCountdown() {

    const now = new Date().getTime();

    const distance = weddingDate - now;


    const daysElement =
        document.getElementById('days');

    const hoursElement =
        document.getElementById('hours');

    const minutesElement =
        document.getElementById('minutes');

    const secondsElement =
        document.getElementById('seconds');


    if (
        !daysElement ||
        !hoursElement ||
        !minutesElement ||
        !secondsElement
    ) {
        return;
    }


    if (distance <= 0) {

        daysElement.innerText = '00';
        hoursElement.innerText = '00';
        minutesElement.innerText = '00';
        secondsElement.innerText = '00';

        return;
    }


    const days =
        Math.floor(
            distance / (1000 * 60 * 60 * 24)
        );


    const hours =
        Math.floor(
            (distance % (1000 * 60 * 60 * 24))
            / (1000 * 60 * 60)
        );


    const minutes =
        Math.floor(
            (distance % (1000 * 60 * 60))
            / (1000 * 60)
        );


    const seconds =
        Math.floor(
            (distance % (1000 * 60))
            / 1000
        );


    daysElement.innerText =
        String(days).padStart(2, '0');

    hoursElement.innerText =
        String(hours).padStart(2, '0');

    minutesElement.innerText =
        String(minutes).padStart(2, '0');

    secondsElement.innerText =
        String(seconds).padStart(2, '0');

}


updateCountdown();

setInterval(updateCountdown, 1000);


/* =========================================================
   MUSIC
========================================================= */

const music =
    document.getElementById('weddingMusic');

const musicButton =
    document.getElementById('musicButton');

const musicIcon =
    document.getElementById('musicIcon');


function startMusic() {

    if (!music) {
        return;
    }

    music.volume = 0.45;

    music.play()
        .then(() => {

            if (musicButton) {
                musicButton.classList.add(
                    'music-playing'
                );
            }

            if (musicIcon) {
                musicIcon.innerText = '♫';
            }

        })
        .catch(() => {

            console.log(
                'Browser membutuhkan interaksi pengguna untuk memutar musik.'
            );

        });

}


window.toggleMusic = function () {
    const music = document.getElementById("weddingMusic");
    const icon = document.getElementById("musicIcon");

    if (!music) return;

    if (music.paused) {
        music.play()
            .then(() => {
                if (icon) icon.innerText = "❚❚";
            })
            .catch((error) => {
                console.error("Musik gagal diputar:", error);
            });
    } else {
        music.pause();

        if (icon) {
            icon.innerText = "♫";
        }
    }
};


/* =========================================================
   COPY REKENING
========================================================= */

window.copyAccount = function (accountNumber) {
    navigator.clipboard.writeText(accountNumber)
        .then(() => {
            showToast("Nomor rekening berhasil disalin!");
        })
        .catch(() => {
            showToast("Gagal menyalin nomor rekening");
        });
};


/* =========================================================
   RSVP
========================================================= */

window.submitRSVP = async function (event) {

    event.preventDefault();

    const name = document
        .getElementById("guestName")
        .value
        .trim();

    const attendance = document
        .getElementById("attendance")
        .value;

    const message = document
        .getElementById("message")
        .value
        .trim();


    if (!name) {
        showToast("Nama harus diisi.");
        return;
    }

    if (!attendance) {
        showToast("Silakan pilih konfirmasi kehadiran.");
        return;
    }


    const csrfToken = document
        .querySelector('meta[name="csrf-token"]')
        .getAttribute("content");


    try {

        const response = await fetch("/rsvp", {

            method: "POST",

            headers: {
                "Content-Type": "application/json",
                "Accept": "application/json",
                "X-CSRF-TOKEN": csrfToken
            },

            body: JSON.stringify({
                nama: name,
                kehadiran: attendance,
                ucapan: message
            })

        });


        const data = await response.json();


        if (!response.ok) {

            console.error(data);

            showToast("Gagal mengirim ucapan.");

            return;
        }


        // Tampilkan ucapan baru
        addGuestMessage(data.data);


        // Kosongkan form
        document.getElementById("guestName").value = "";

        document.getElementById("attendance").value = "";

        document.getElementById("message").value = "";


        showToast("Ucapan berhasil dikirim 🤍");


    } catch (error) {

        console.error(error);

        showToast("Terjadi kesalahan saat mengirim ucapan.");

    }

};

function addGuestMessage(rsvp) {

    const guestMessages =
        document.getElementById("guestMessages");

    const emptyMessage =
        document.getElementById("emptyMessage");


    if (emptyMessage) {
        emptyMessage.remove();
    }


    const messageItem =
        document.createElement("div");

    messageItem.className =
        "guest-message";


    messageItem.innerHTML = `

        <div class="guest-message-name">
            ${escapeHTML(rsvp.nama)}
        </div>

        <div class="guest-message-status">
            ${escapeHTML(rsvp.kehadiran)}
        </div>

        ${
            rsvp.ucapan
                ? `
                    <div class="guest-message-text">
                        ${escapeHTML(rsvp.ucapan)}
                    </div>
                `
                : ""
        }

    `;


    guestMessages.prepend(messageItem);
}

function escapeHTML(text) {

    const div =
        document.createElement("div");

    div.textContent = text;

    return div.innerHTML;
}

async function loadRSVP() {

    try {

        const response =
            await fetch("/rsvp");

        const data =
            await response.json();


        const guestMessages =
            document.getElementById("guestMessages");


        const emptyMessage =
            document.getElementById("emptyMessage");


        if (!guestMessages) return;


        if (emptyMessage) {
            emptyMessage.remove();
        }


        if (data.length === 0) {

            guestMessages.innerHTML = `
                <div
                    class="empty-message"
                    id="emptyMessage"
                >
                    Belum ada ucapan.<br>
                    Jadilah yang pertama memberikan ucapan 🤍
                </div>
            `;

            return;
        }


        data.forEach(rsvp => {

            addGuestMessage(rsvp);

        });


    } catch (error) {

        console.error(
            "Gagal mengambil data RSVP:",
            error
        );

    }

}


/* =========================================================
   TOAST
========================================================= */

function showToast(text) {

    const toast =
        document.getElementById('toast');


    if (!toast) {
        return;
    }


    toast.innerText = text;

    toast.classList.add('show');


    setTimeout(() => {

        toast.classList.remove('show');

    }, 3000);

}


/* =========================================================
   REVEAL ANIMATION
========================================================= */

const revealElements =
    document.querySelectorAll(
        '.person, .event-card, .gallery-item, .dress-item'
    );


const observer =
    new IntersectionObserver(
        (entries) => {

            entries.forEach((entry) => {

                if (entry.isIntersecting) {

                    entry.target.style.opacity = '1';

                    entry.target.style.transform =
                        'translateY(0)';

                    observer.unobserve(
                        entry.target
                    );

                }

            });

        },
        {
            threshold: 0.15
        }
    );


revealElements.forEach((element) => {

    element.style.opacity = '0';

    element.style.transform =
        'translateY(30px)';

    element.style.transition =
        'opacity .8s ease, transform .8s ease';

    observer.observe(element);

});

document.addEventListener("DOMContentLoaded", () => {
    loadRSVP();
});