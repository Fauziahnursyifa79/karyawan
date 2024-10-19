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
        <div class="w-64 bg-white">
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
                <h1 class="text-2xl font-bold mb-4" >Halaman Karyawan</h1>
                @if (session('status'))
                    <script>
                        Swal.fire({
                        title: "Good job!",
                        text: "{{ session('status')}}",
                        icon: "success"
                        });
                    </script>
                @endif
            <table class="table table-bordered text-center">
                <thead>
                    <tr>
                        <th class="py-2 px-4 border">No.</th>
                        <th class="py-2 px-4 border">Nama</th>
                        <th class="py-2 px-4 border">Alamat</th>
                        <th class="py-2 px-4 border">Profesion</th>
                        <th class="py-2 px-4 border">Tanggal Lahir</th>
                        <th class="py-2 px-4 border">No hp</th>
                        <th class="py-2 px-4 border">Aksi</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach($karyawan as $item)
                        <tr>
                            <td class="py-2 px-4 border">{{ $loop->iteration }}</td>
                            <td class="py-2 px-4 border">{{ $item->name }}</td>
                            <td class="py-2 px-4 border">{{ $item->address }}</td>
                            <td class="py-2 px-4 border">{{ $item->profesion }}</td>
                            <td class="py-2 px-4 border">{{ $item->date_of_birth }}</td>
                            <td class="py-2 px-4 border">{{ $item->no_hp }}</td>
                            <td>
                                {{-- nah kalau delete lebih aman pakek <form> karena gk tau pokok katanya aman--}}
                                <form action="{{ route('karyawan_destroy', $item->id) }}" method="POST">
                                    {{-- menurut saya jika edit ini mending menggunakan tag <a> karena langsung ke raoute nya --}}
                                    <a href="{{ route('karyawan_edit', $item->id) }}" class="bg-blue-100 text-blue-600 py-1 px-3 rounded-full text-xs">Edit</a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" onclick="return confirm('Apakah anda yakin ingin menghapus data ini!')" class="bg-red-100 text-red-600 py-1 px-3 rounded-full text-xs">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
       </div>
    </div>


   <script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
</body>
</html>
