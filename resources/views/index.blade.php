<x-layout title="Sofia Vidotto">

    <x-hero />

    <x-summary />
    <!-- Projects -->
    <section class="flex-col-wise py-5 my-5">
        <div class="container flex-col-wise mb-5">
            <div class="projectContainer row g-3">
                <div class="col-lg-12 col-12">
                    <h2 class="text-white text-left mt-5 display-5 text-uppercase">Projects</h2>
                </div>
                <div class="projectItem col-lg-8 col-12">
                    <div class="card item1">
                        <div class="image-container">
                            <img src="/1.png" alt="Project 1">
                            <div class="buttons">
                                <button>View</button>
                                <button>Details</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="projectItem col-lg-4 col-6">
                    <div class="card item2">
                        <div class="image-container">
                            <img src="/2.png" alt="Project 2">
                            <div class="buttons">
                                <button>View</button>
                                <button>Details</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="projectItem col-lg-4 col-6">
                    <div class="card item3">
                        <div class="image-container">
                            <img src="/3.png" alt="Project 3">
                            <div class="buttons">
                                <button>View</button>
                                <button>Details</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="projectItem col-lg-4 col-6">
                    <div class="card item4">
                        <div class="image-container">
                            <img src="/4.png" alt="Project 4">
                            <div class="buttons">
                                <button>View</button>
                                <button>Details</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="projectItem col-lg-4 col-6">
                    <div class="card item5">
                        <div class="image-container">
                            <img src="/5.png" alt="Project 5">
                            <div class="buttons">
                                <button>View</button>
                                <button>Details</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Experience -->
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
    <x-contact />


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