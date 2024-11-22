<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>

    </title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&amp;display=swap" rel="stylesheet" />
    <style>
        body {
            font-family: 'Roboto', sans-serif;
        }

        .landingpage {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 100px;
        }
    </style>
</head>

<body class="bg-white text-gray-800">
    <header class="flex justify-between items-center p-6">
        <div class="text-2xl font-bold">
            
        </div>
        <nav class="space-x-6">
            <a class="text-gray-600 hover:text-gray-800" href="#">
                
            </a>
            <a class="text-gray-600 hover:text-gray-800" href="#">
                
            </a>
            <a class="text-gray-600 hover:text-gray-800" href="#">
                
            </a>
            <a class="text-orange-500 hover:text-orange-600" href="#">
                
            </a>
            <button class="mt-6 px-6 py-3 bg-orange-500 text-white rounded-full hover:bg-orange-600">
                <a href="/login">

                </a>
            </button>
        </nav>
    </header>
    <main class="max-w-7xl mx-auto p-6">
        <div class="landingpage">
            <section class="text-center">
                <h1 class="text-4xl font-bold">

                </h1>
                <h2 class="text-4xl font-bold text-orange-500">Ambulance online </h2>
                <p class="text-gray-600 mt-4">

                </p>
                <button class="mt-6 px-6 py-3 bg-orange-500 text-white rounded-full hover:bg-orange-600">
                    
                </button>
            </section>
            <section class="mt-12 flex justify-center">
                <img alt="Illustration of two people discussing work" class="w-full max-w-md" height="400"
                    src="https://storage.googleapis.com/a1aa/image/nrpRIcN38io9Op5xzfzRYd9Cv9UOEbLeA3smVxoqCVSJoKrTA.jpg"
                    width="600" />
            </section>
        </div>
        <section class="mt-12 grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="bg-white shadow-md p-6 rounded-lg">
                <i class="fas fa-building text-orange-500 text-2xl">
                </i>
                <h3 class="text-xl font-bold mt-4">
                    ambulance terdekat
                </h3>
                <p class="text-gray-600 mt-2">
                    sistem kami secara otomatis menghubungkan anda dengan ambulance terdekat, memastiskan waktu respon
                    yang cepat.
                </p>
            </div>
            <div class="bg-white shadow-md p-6 rounded-lg">
                <i class="fas fa-users text-orange-500 text-2xl">
                </i>
                <h3 class="text-xl font-bold mt-4">
                    layanan 24/7
                </h3>
                <p class="text-gray-600 mt-2">
                    kami siap melayani anda kapan saja, dimana saja.
                </p>
            </div>
            <div class="bg-white shadow-md p-6 rounded-lg">
                <i class="fas fa-map-marker-alt text-orange-500 text-2xl">
                </i>
                <h3 class="text-xl font-bold mt-4">
                    proses pemesan ambulance lebih mudah
                </h3>
                <p class="text-gray-600 mt-2">
                    cukup isi lokasi dan kebutuhan anda, dan ambulance akan segera menuju ke lokasi.
                </p>
            </div>
            <div class="bg-white shadow-md p-6 rounded-lg">
                <i class="fas fa-graduation-cap text-orange-500 text-2xl">
                </i>
                <h3 class="text-xl font-bold mt-4">
                    tim ambulance medis berpengalaman.
                </h3>
                <p class="text-gray-600 mt-2">
                    semua ambulance dilengkapi dengan peralatan medis terkini dan tim profesional yang siap menangani
                    berbagi situasi.
                </p>
            </div>

            </div>
        </section>
        {{-- section register or search --}}
        <section class="mt-20 grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="bg-white shadow-md p-6 rounded-lg">
                <img src="{{ asset('files/nearby.svg') }}" alt="" style="width: 100%">
                <p class="text-gray-600 mt-2">
                    Kamu sedang membutuhkan ambulance?
                </p>
                <a href="{{ url('cari-ambulance') }}" class="text-orange-500">
                    <h3 class="text-xl font-bold mt-4"> 
                        Cari ambulan terdekat disini
                    </h3>
                </a>


            </div>
            <div class="bg-white shadow-md p-6 rounded-lg">
                <img src="{{ asset('files/register.svg') }}" alt="" style="width: 100%">
                <p class="text-gray-600 mt-2">
                    Kamu sebagai penyedia ambulance?
                </p>
                <a href="{{ url('login') }}" class="text-orange-500">
                    <h3 class="text-xl font-bold mt-4">
                        Login akun disini
                    </h3>
                </a>
            </div>
        </section>

    </main>
    <script>
        @if (session('success'))
                Swal.fire({
                    icon: 'success',
                    title: 'Berhasil Login!',
                    text: "{{ session('success') }}",
                    confirmButtonText: 'OK'
                });
    </script>
    @endif
    </script>
</body>

</html>
