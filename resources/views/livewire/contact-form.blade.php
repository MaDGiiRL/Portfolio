<div class="row gap-2 contactForm">
    <form method="POST">
        <div class="contactForm mb-2">
            <input name="name" id="nName" type="text" placeholder="Nome">
            @error('name') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="mb-2">
            <input name="email" id="email" type="text" placeholder="Email">
            @error('email') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="col-12">
            <textarea name="user_message" placeholder="Messaggio" id="user_message" rows="6" cols="50"></textarea>
            @error('user_message') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="mb-2 fs-5">
            <button type="submit">
                Invia <i class="bi bi-arrow-up-right-square"></i>
            </button>
        </div>
    </form>
</div>