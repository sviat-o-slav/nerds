<div class="modal-window visually-hidden">
    <div class="modal-content">
      <span class="close-button">
        <img src="{{ asset('images/close-cross.svg') }}" alt="Close cross">
      </span>
        <h2>Свяжитесь с нами!</h2>

        <form class="form-contact" method="get" action="#">
            <div class="form-contact-item">
                <label for="fname">Ваше имя:</label>
                <input type="text" id="fname" name="fname" placeholder="Имя" required/>
            </div>

            <div class="form-contact-item">
                <label for="femail">Электронная почта:</label>
                <input type="email" id="femail" name="femail" placeholder="Адрес почты" required>
            </div>

            <div class="form-contact-item">
                <label for="ftel">Номер телефона:</label>
                <input type="tel" id="ftel" name="ftel" placeholder="Ваш номер телефона" required>
            </div>

            <button type="submit">Отправить</button>
        </form>
    </div>
</div>
