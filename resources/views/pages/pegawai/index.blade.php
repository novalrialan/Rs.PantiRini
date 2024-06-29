@extends('pages.layouts.master')
@section('content')
    <div class="flex flex-col">
        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="inline-block w-full py-2 sm:px-6 lg:px-8">
                <div class="overflow-hidden">
                    <div class="container shadow md:shadow-lg md:container md:mx-auto ">
                        <table
                            class="table-auto align-center  items-center text-left text-sm font-light text-surface dark:text-white">
                            <thead class="border-b border-neutral-200 font-medium dark:border-white/10">
                                <tr>
                                    <th scope="col" class="px-6 py-4">No</th>
                                    <th scope="col" class="px-6 py-4">Nama Pegawai</th>
                                    <th scope="col" class="px-6 py-4">Departemen</th>
                                    <th scope="col" class="px-6 py-4">Email</th>
                                    <th scope="col" class="px-6 py-4">Status</th>
                                    <th scope="col" class="px-6 py-4">Action</th>
                                </tr>
                            </thead>

                            @foreach ($pegawais as $row)
                                <tbody>
                                    <tr
                                        class="border-b border-neutral-200 transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-white/10 dark:hover:bg-neutral-600">
                                        <td class="whitespace-nowrap px-6 py-4 font-medium">
                                            {{ $row->id_pegawais }}
                                        </td>
                                        <td class="whitespace-nowrap px-6 py-4">
                                            {{ $row->nama }} </td>
                                        <td class="whitespace-nowrap px-6 py-4">
                                            {{ $row->departemens->nama_departemen }}</td>
                                        <td class="whitespace-nowrap px-6 py-4">{{ $row->email }}</td>

                                        @if ($absensis == 'Hadir')
                                            <td class="text-green-400 whitespace-nowrap px-6 py-4">
                                                hadir
                                            </td>
                                        @elseif ($absensis == 'Sakit')
                                            <td class="text-teal-600 whitespace-nowrap px-6 py-4">
                                                sakit
                                            </td>
                                        @elseif ($absensis == 'Cuti')
                                            <td class="text-purple-400 whitespace-nowrap px-6 py-4">
                                                cuti
                                            </td>
                                        @elseif ($absensis == 'Izin')
                                            <td class="text-yellow-400 whitespace-nowrap px-6 py-4">
                                                Izin
                                            </td>
                                        @else
                                            <td class="text-red-600 rounded whitespace-nowrap px-6 py-4">
                                                tanpa keterangan
                                            </td>
                                        @endif

                                        <td class="whitespace-nowrap px-6 py-4">
                                            <div class="flex flex-col items-left justify-center gap-5 mt-6 md:flex-row">
                                                <button type="button"
                                                    class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-3 py-2.5 text-center me-2 mb-2">Presensi</button>
                                                <button type="button"
                                                    class="text-white bg-gradient-to-r from-cyan-400 via-cyan-500 to-cyan-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-sm px-3 py-2.5 text-center me-2 mb-2">Detail</button>
                                            </div>

                                        </td>
                                    </tr>

                                </tbody>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>


    </div>
@endsection
