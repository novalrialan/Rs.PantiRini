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
                                    {{-- <th scope="col" class="px-6 py-4">Status</th> --}}
                                    <th scope="col" class="px-6 py-4">Action</th>
                                </tr>
                            </thead>

                            @foreach ($pegawais as $row)
                                <tbody>
                                    <tr
                                        class="border-b border-neutral-200 transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-white/10 dark:hover:bg-neutral-600">
                                        @if (session('id_pegawais') == $row->id_pegawais)
                                            <td class="whitespace-nowrap px-6 py-4 font-medium">
                                                {{ $row->id_pegawais }}
                                            </td>
                                            <td class="whitespace-nowrap px-6 py-4">
                                                {{ $row->nama }} </td>
                                            <td class="whitespace-nowrap px-6 py-4">
                                                {{ $row->departemens->nama_departemen }}</td>
                                            <td class="whitespace-nowrap px-6 py-4">{{ $row->email }}</td>



                                            <td class="whitespace-nowrap px-6 py-4">
                                                <div class="flex flex-col items-left justify-center gap-5 mt-6 md:flex-row">
                                                    <button type="button"
                                                        class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-3 py-2.5 text-center me-2 mb-2">Presensi</button>
                                                    <button data-modal-target="default-modal-detail"
                                                        data-modal-toggle="default-modal-detail" type="button"
                                                        class="text-white bg-gradient-to-r from-cyan-400 via-cyan-500 to-cyan-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-sm px-3 py-2.5 text-center me-2 mb-2">Detail</button>

                                                    <!-- Main modal -->
                                                    <div id="default-modal-detail" tabindex="-1" aria-hidden="true"
                                                        class="hidden in overflow-y-auto overflow-x-hidden fixed  top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                                        <div class="relative  p-4 w-full max-w-2xl max-h-full">
                                                            <!-- Modal content -->
                                                            <div
                                                                class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                                                <!-- Modal header -->
                                                                <div
                                                                    class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                                                    <h3
                                                                        class="text-xl font-semibold text-gray-900 dark:text-white">
                                                                        Detail Pegawai
                                                                    </h3>
                                                                    <button type="button"
                                                                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                                                        data-modal-hide="default-modal-detail">
                                                                        <svg class="w-3 h-3" aria-hidden="true"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            fill="none" viewBox="0 0 14 14">
                                                                            <path stroke="currentColor"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round" stroke-width="2"
                                                                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                                                        </svg>
                                                                        <span class="sr-only">Close modal</span>
                                                                    </button>
                                                                </div>

                                                                <!-- Modal body -->
                                                                <article class="text-wrap p-4">
                                                                    <p
                                                                        class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                                                                        Nama : {{ session('nama') }}

                                                                    </p>
                                                                    <p
                                                                        class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                                                                        Email : {{ session('email') }}
                                                                    </p>
                                                                </article>

                                                                <div
                                                                    class="relative overflow-x-auto shadow-md sm:rounded-lg p-4">
                                                                    <table
                                                                        class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 ">
                                                                        <thead
                                                                            class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                                                            <tr>
                                                                                <th scope="col" class="px-6 py-3">
                                                                                    Hari
                                                                                </th>
                                                                                <th scope="col" class="px-6 py-3">
                                                                                    Status
                                                                                </th>
                                                                                <th scope="col" class="px-6 py-3">
                                                                                    Jam Masuk
                                                                                </th>
                                                                                <th scope="col" class="px-6 py-3">
                                                                                    Jam Keluar
                                                                                </th>
                                                                                {{-- <th scope="col" class="px-6 py-3">
                                                                                    Action
                                                                                </th> --}}
                                                                            </tr>
                                                                        </thead>

                                                                        @foreach ($jamkerja as $kerja)
                                                                            <tbody>
                                                                                <tr
                                                                                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                                                                    <th scope="row"
                                                                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                                                        {{ $kerja->hari }}
                                                                                    </th>

                                                                                    {{-- <td class="px-6 py-4">
                                                                                        Laptop
                                                                                    </td> --}}
                                                                                    @if ($absensis == 'Hadir')
                                                                                        <td
                                                                                            class="text-green-400 whitespace-nowrap px-6 py-4">
                                                                                            hadir
                                                                                        </td>
                                                                                    @elseif($absensis == 'Sakit')
                                                                                        <td
                                                                                            class="text-teal-600 whitespace-nowrap px-6 py-4">
                                                                                            sakit
                                                                                        </td>
                                                                                    @elseif($absensis == 'Cuti')
                                                                                        <td
                                                                                            class="text-purple-400 whitespace-nowrap px-6 py-4">
                                                                                            cuti
                                                                                        </td>
                                                                                    @elseif($absensis == 'Izin')
                                                                                        <td
                                                                                            class="text-yellow-400 whitespace-nowrap px-6 py-4">
                                                                                            Izin
                                                                                        </td>
                                                                                    @else
                                                                                        <td
                                                                                            class="text-red-600 rounded whitespace-nowrap px-6 py-4">
                                                                                            tanpa keterangan
                                                                                        </td>
                                                                                    @endif
                                                                                    <td class="px-6 py-4">
                                                                                        {{ $kerja->jam_masuk }}
                                                                                    </td>
                                                                                    <td class="px-6 py-4">
                                                                                        {{ $kerja->jam_keluar }}
                                                                                    </td>

                                                                                    {{-- <td class="px-6 py-4">
                                                                                    <a href="#"
                                                                                        class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                                                                </td> --}}
                                                                                </tr>


                                                                            </tbody>
                                                                        @endforeach
                                                                    </table>
                                                                </div>


                                                                <!-- Modal footer -->
                                                                <div
                                                                    class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                                                                    <button data-modal-hide="default-modal-detail"
                                                                        type="button"
                                                                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">I
                                                                        accept</button>
                                                                    <button data-modal-hide="default-modal-detail"
                                                                        type="button"
                                                                        class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Decline</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </td>
                                        @endif
                                    </tr>

                                </tbody>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>


    </div>

    <div>

        <div class="p-4 bg-background text-foreground">

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div class="bg-card p-4 rounded-lg shadow">
                    <div class="flex justify-between items-center mb-4">
                        <button class="text-muted-foreground">&lt;</button>
                        <span class="text-lg font-semibold">02 October, 2019</span>
                        <button class="text-muted-foreground">&gt;</button>
                    </div>
                    <div class="grid grid-cols-7 gap-2 text-center">
                        <span class="text-muted-foreground">Sun</span>
                        <span class="text-muted-foreground">Mon</span>
                        <span class="text-muted-foreground">Tue</span>
                        <span class="text-muted-foreground">Wed</span>
                        <span class="text-muted-foreground">Thu</span>
                        <span class="text-muted-foreground">Fri</span>
                        <span class="text-muted-foreground">Sat</span>

                        <span class="text-muted-foreground">29</span>
                        <span class="text-muted-foreground">30</span>
                        <span class="text-muted-foreground">01</span>
                        <span class="text-muted-foreground">02</span>
                        <span class="text-muted-foreground">03</span>
                        <span class="text-muted-foreground">04</span>
                        <span class="text-muted-foreground">05</span>
                        <span class="text-muted-foreground">06</span>
                        <span class="text-muted-foreground">07</span>
                        <span class="text-muted-foreground">08</span>
                        <span class="bg-primary text-primary-foreground rounded-full">09</span>
                        <span class="text-muted-foreground">10</span>
                        <span class="text-muted-foreground">11</span>
                        <span class="text-muted-foreground">12</span>
                        <span class="text-muted-foreground">13</span>
                        <span class="text-muted-foreground">14</span>
                        <span class="text-muted-foreground">15</span>
                        <span class="text-muted-foreground">16</span>
                        <span class="bg-accent text-accent-foreground rounded-full">17</span>
                        <span class="text-muted-foreground">18</span>
                        <span class="text-muted-foreground">19</span>
                        <span class="text-muted-foreground">20</span>
                        <span class="text-muted-foreground">21</span>
                        <span class="text-muted-foreground">22</span>
                        <span class="bg-primary text-primary-foreground rounded-full">23</span>
                        <span class="bg-primary text-primary-foreground rounded-full">24</span>
                        <span class="bg-primary text-primary-foreground rounded-full">25</span>
                        <span class="text-muted-foreground">26</span>
                        <span class="text-muted-foreground">27</span>
                        <span class="text-muted-foreground">28</span>
                        <span class="text-muted-foreground">29</span>
                        <span class="text-muted-foreground">30</span>
                        <span class="text-muted-foreground">01</span>
                        <span class="text-muted-foreground">02</span>
                    </div>
                </div>

                <div class="bg-card p-4 rounded-lg shadow">
                    <div class="flex justify-between items-center mb-4">
                        <span class="text-lg font-semibold">Employee Performance</span>
                        <span class="text-muted-foreground">All the data in percentage (%)</span>
                    </div>
                    <div class="grid grid-cols-3 gap-4">
                        <div class="text-center">
                            <div class="h-32 bg-primary rounded-lg"></div>
                            <span class="text-muted-foreground">Govt. School</span>
                        </div>
                        <div class="text-center">
                            <div class="h-32 bg-secondary rounded-lg"></div>
                            <span class="text-muted-foreground">Private School</span>
                        </div>
                        <div class="text-center">
                            <div class="h-32 bg-accent rounded-lg"></div>
                            <span class="text-muted-foreground">Average School</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-card p-4 rounded-lg shadow mt-4">
                <div class="flex justify-between items-center mb-4">
                    <span class="text-lg font-semibold">Activities Notification</span>
                    <button class="bg-secondary text-secondary-foreground hover:bg-secondary/80 px-4 py-2 rounded-lg">View
                        All</button>
                </div>
                <div>
                    <div class="mb-4">
                        <span class="font-semibold">St.Xavier School</span>
                        <span class="text-muted-foreground">02 Oct, 2019</span>
                        <p class="text-muted-foreground">We are planning to celebrate Gandhi Jayanti on 2nd October in
                            our school. So it is our humble request to parents and teachers to join us on that occasion.
                        </p>
                    </div>
                    <div>
                        <span class="font-semibold">Podar International School</span>
                        <span class="text-muted-foreground">02 Oct, 2019</span>
                        <p class="text-muted-foreground">We are planning to celebrate Gandhi Jayanti on 2nd October in
                            our school. So it is our humble request to parents and teachers to join us on that occasion.
                        </p>
                    </div>
                </div>
            </div>
        @endsection
