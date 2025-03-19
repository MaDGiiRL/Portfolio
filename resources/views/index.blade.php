<x-layout title="Who's Sofia?">

    <x-hero />

    <x-summary />

    <x-project />

    <x-experience />


    <!-- Animated Panel -->
    <section class="flex-col-wise my-5">
        <div class="container my-5">
            <div class="row p-0 m-0">
                <div class="skillsContainer text-center col-lg-6 col-12">
                    <div class="row">
                        @foreach($skills as $skill)
                        <div class="col-12 py-1">
                            <p class="skillpara fs-1 text-uppercase" data-content="{{ $skill['name'] }}">{{ $skill['name'] }}</p>
                        </div>
                        @endforeach
                    </div>
                </div>

                <div class="skillsDiscription col-lg-6 col-12">
                    <div class="main-content active p-2" id="mainContent">
                        <h3 class="text-uppercase">{{ $skills[0]['name'] }}</h3>
                        <p class="normalFont text-justify">{{ $skills[0]['body'] }}</p>

                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- Contact -->
    <section class="connect flex-col-wise p-5">
        <div class="container">
            <div class="row d-flex align-items-between">
                <div class="col-lg-6 col-12 connectMessage d-flex flex-column pt-5 ">
                    <h3 class="text-end ">Contact Me <i class="bi bi-arrow-right-circle p-2"></i></h3>
                    <p>Che tu abbia una domanda, un feedback o semplicemente voglia dire ciao, sentiti libero di contattarmi.</p>
                </div>
                <div class="col-lg-6 col-12">
                    <p class="titleFont mx-2 my-2">🌈 Mandami un Messaggio!</p>
                    <div class="row gap-2 contactForm">
                        <form method="POST" action="{{route('index_submit')}}">
                            @csrf
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
                </div>
            </div>
        </div>
    </section>



    <script>
        //--------------------------Animated Panel
        document.querySelectorAll('.skillpara').forEach((el, index) => {
            el.addEventListener('click', () => {
                const skill = @json($skills);
                document.querySelector('#mainContent h3').textContent = skill[index].name;
                document.querySelector('#mainContent p').textContent = skill[index].body;
            });
        });
    </script>
</x-layout>