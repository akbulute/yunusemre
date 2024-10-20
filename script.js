document.getElementById('feedback-form').addEventListener('submit', function(event) {
    event.preventDefault(); // Formun varsayılan şekilde gönderilmesini engelle

    // Yıldız ve yorumları al
    var rating = document.querySelector('input[name="rating"]:checked').value;
    var comments = document.getElementById('comments').value;

    // Yorumlar listesinin bulunduğu alanı seç
    var yorumlarListe = document.getElementById('yorumlar-liste');

    // Yeni bir yorum elemanı oluştur
    var yeniYorum = document.createElement('p');
    yeniYorum.innerHTML = `<strong>Anonim:</strong> ${comments}`;

    // Yıldızları oluştur
    var yildizlar = document.createElement('span');
    yildizlar.classList.add('yorum-yildizlar');

    // Yıldızların sayısını ayarlama (Font Awesome kullanarak)
    for (var i = 1; i <= 5; i++) {
        var starIcon = document.createElement('i');
        starIcon.classList.add('fas', 'fa-star');
        if (i <= rating) {
            starIcon.style.color = 'gold'; // Kullanıcının verdiği yıldızlar altın
        } else {
            starIcon.style.color = '#ddd'; // Verilmeyen yıldızlar gri
        }
        yildizlar.appendChild(starIcon);
    }

    // Yıldızları yorumun sonuna ekle
    yeniYorum.appendChild(yildizlar);

    // Yorumları listeye ekle
    yorumlarListe.appendChild(yeniYorum);

    // Formu sıfırla
    document.getElementById('feedback-form').reset();
});
