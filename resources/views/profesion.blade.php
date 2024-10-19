<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>KARYAWAN</title>
    <link rel="stylesheet" href={{asset('bootstrap/css/bootstrap.min.css')}}>
    <link rel="icon" href="{{ asset('icon.png') }}" type="image/png">

    <script src="https://cdn.tailwindcss.com">
    </script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.14.3/dist/sweetalert2.min.css"rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.14.3/dist/sweetalert2.all.min.js"></script>
</head>
<body class="font-roboto bg-gray-200">
    <div class="flex">
        <!-- Sidebar -->
        <div class=" bg-white">
            <div class="p-6">
             <img alt="Puzzler Logo" class="mb-6" height="40" src="https://upload.wikimedia.org/wikipedia/commons/1/14/Questionnaire-checklist.png" width="100"/>
                <nav>
                    <ul>
                        <li class="mb-4">
                            <a class="flex items-center text-gray-600 hover:text-blue-500" href="{{ route('karyawan_create') }}">
                            <i class="fas fa-plus mr-3">
                            </i>
                            Tambah Data
                            </a>
                        </li>
                        <li class="mb-4">
                            <a class="flex items-center text-gray-600 hover:text-blue-500" href=" {{ route('profesion_index') }}">
                            <i class="fas fa-user-tie mr-3">
                            </i>
                            Halaman Profesion
                            </a>
                        </li>

                        <li class="mb-4">
                            <a class="flex items-center text-gray-600 hover:text-blue-500" href=" {{ route('karyawan_index')}}">
                                <i class="fas fa-users mr-3">
                                </i>
                                Halaman Karyawan
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>

        <div class="flex-1 p-6 ">
            <div class="bg-grey text-dark p-4 flex justify-between items-center">
                <div>
                    <input class="border rounded px-4 py-2" placeholder="Search:" type="text"/>
                </div>
                    <div class="flex items-center">
                        <i class="fas fa-envelope mr-4">
                        </i>
                        <i class="fas fa-bell mr-4">
                        </i>
                        <i class="fas fa-flag mr-4">
                        </i>
                        <div class="flex items-center">
                            <div class="flex items-center">
                                    <img alt="User Avatar" class="rounded-full mr-3" height="40" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQg1RnAKMn32qL_MOEslErOeqe8DI9v-cmwVg&s" width="40"/>
                                <div>
                                    <p class="text-gray-800 font-semibold">
                                        Fauziah Nursyifa
                                    </p>
                                    <p class="text-gray-400 text-sm">
                                        fauziahnursyifa961@gmail.com
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

             <div class="container mt-4">
                <div class="mb-1"></div>
                <div class="flex space-x-1"></div>
            </div>

            <div class="bg-white p-4 rounded shadow" >

            <table class="table table-bordered text-center">
                <thead>
                    <tr>
                        <th class="py-2 px-4 border bg-dark text-white">No.</th>
                        <th class="py-2 px-4 border bg-dark text-white">Nama Profesion</th>
                        <th class="py-2 px-4 border bg-dark text-white">Batas Usia</th>
                    </tr>

                    <tr>
                        <th class="py-2 px-4 border">1.</th>
                        <th class="py-2 px-4 border">Aktor</th>
                        <th class="py-2 px-4 border">Tidak Ada</th>
                    </tr>

                    <tr>
                        <th class="py-2 px-4 border">2.</th>
                        <th class="py-2 px-4 border">Guru</th>
                        <th class="py-2 px-4 border">50 Tahun</th>
                    </tr>

                    <tr>
                        <th class="py-2 px-4 border">3.</th>
                        <th class="py-2 px-4 border">PNS</th>
                        <th class="py-2 px-4 border">35 Tahun</th>
                    </tr>

                    <tr>
                        <th class="py-2 px-4 border">4.</th>
                        <th class="py-2 px-4 border">Polisi</th>
                        <th class="py-2 px-4 border">30 Tahun</th>
                    </tr>

                    <tr>
                        <th class="py-2 px-4 border">5.</th>
                        <th class="py-2 px-4 border">Astronot</th>
                        <th class="py-2 px-4 border">Tidak Ada</th>
                    </tr>

                    <tr>
                        <th class="py-2 px-4 border">6.</th>
                        <th class="py-2 px-4 border">Dokter</th>
                        <th class="py-2 px-4 border">Tidak Ada</th>
                    </tr>

                    <tr>
                        <th class="py-2 px-4 border">7.</th>
                        <th class="py-2 px-4 border">Programmer</th>
                        <th class="py-2 px-4 border">Tidak Ada</th>
                    </tr>

                    <tr>
                        <th class="py-2 px-4 border">8.</th>
                        <th class="py-2 px-4 border">Desain Grafis</th>
                        <th class="py-2 px-4 border">Tidak Ada</th>
                    </tr>

                    <tr>
                        <th class="py-2 px-4 border">9.</th>
                        <th class="py-2 px-4 border">Masinis</th>
                        <th class="py-2 px-4 border">35 Tahun</th>
                    </tr>

                    <tr>
                        <th class="py-2 px-4 border">10.</th>
                        <th class="py-2 px-4 border">Pilot</th>
                        <th class="py-2 px-4 border">60 Tahun</th>
                    </tr>

                </thead>

            </table>
       </div>
    </div>


   <script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
</body>
</html>
