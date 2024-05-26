@extends('admin.app')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold mb-4"><span class="text-muted fw-light">Sikma |</span> Data DUDI</h4>

        <!-- Invoice List Table -->
        <div class="card p-2">
            <div class="d-flex justify-content-end"> <button class="btn btn-success rounded-pill " data-bs-toggle="modal"
                    data-bs-target="#staticBackdrop" type="submit"><i class="bx bx-plus-circle"></i>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-plus-circle" viewBox="0 0 16 16">
                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16" />
                        <path
                            d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4" />
                    </svg> Tambah data Kerjasama DUDI
                </button> </div>
            <div class="card-datatables table-responsive">
                <table class="datatables table table-borderles table-striped dt-advanced-search table" style="width:100%; ">
                    <thead >
                        <tr>
                            <th>#</th>
                            <th>No. pks</th>
                            <th>Tgl. <BR>mulai</BR></th>
                            <th>Tgl. <BR>selesai</BR></th>
                            <th>Nama</th>
                            <th>Item kerja sama</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th class="text-center align-top">1</th>
                            <td class=" align-top">2333/PL42.11/AL.04/2022 -- 1381/UN40.K1/HK.07.01/2022</td>
                            <td class="text-center align-top">2022-08-12</td>
                            <td class="text-center align-top">2022-08-12</td>
                            <td style="text-align: left;">Pelaksanaan Kegiatan Matching Fund 2022 Dengan Judul Aplikasi Smart Proctoring System Dalam
                                Menunjang Pengawasan Ujian Online Dengan Menerapkan Teknologi Computer Vision</td>
                            <td class=" align-top" style="text-align: left;">UNIVERSITAS PENDIDIKAN INDONESIA
                                D3 Teknik Informatika
                                - Riset Terapan</td>
                            <td class="text-center align-top">
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <button type="button" class="btn btn-success btn-sm"><svg xmlns="http://www.w3.org/2000/svg"
                                            width="16" height="16" fill="currentColor"
                                            class="bi bi-file-earmark-fill" viewBox="0 0 16 16">
                                            <path
                                                d="M4 0h5.293A1 1 0 0 1 10 .293L13.707 4a1 1 0 0 1 .293.707V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2m5.5 1.5v2a1 1 0 0 0 1 1h2z" />
                                        </svg> Dokumen </button>
                                    <button type="button" class="btn btn-info btn-sm">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-folder2-open" viewBox="0 0 16 16">
                                            <path
                                                d="M1 3.5A1.5 1.5 0 0 1 2.5 2h2.764c.958 0 1.76.56 2.311 1.184C7.985 3.648 8.48 4 9 4h4.5A1.5 1.5 0 0 1 15 5.5v.64c.57.265.94.876.856 1.546l-.64 5.124A2.5 2.5 0 0 1 12.733 15H3.266a2.5 2.5 0 0 1-2.481-2.19l-.64-5.124A1.5 1.5 0 0 1 1 6.14zM2 6h12v-.5a.5.5 0 0 0-.5-.5H9c-.964 0-1.71-.629-2.174-1.154C6.374 3.334 5.82 3 5.264 3H2.5a.5.5 0 0 0-.5.5zm-.367 1a.5.5 0 0 0-.496.562l.64 5.124A1.5 1.5 0 0 0 3.266 14h9.468a1.5 1.5 0 0 0 1.489-1.314l.64-5.124A.5.5 0 0 0 14.367 7z" />
                                        </svg>NK</button>
                                </div>
                                <BR></BR>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <button type="button" class="btn btn-warning btn-sm"><svg xmlns="http://www.w3.org/2000/svg"
                                            width="16" height="16" fill="currentColor" class="bi bi-plus-circle"
                                            viewBox="0 0 16 16">
                                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16" />
                                            <path
                                                d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4" />
                                        </svg>Tambah</button>
                                    <button type="button" class="btn btn-danger btn-sm"><svg xmlns="http://www.w3.org/2000/svg"
                                            width="16" height="16" fill="currentColor" class="bi bi-trash"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z" />
                                            <path
                                                d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z" />
                                        </svg>Hapus</button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Mark</td>
                            <td>Mark</td>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Mark</td>
                            <td>Mark</td>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Mark</td>
                            <td>Mark</td>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Pilih Data Perusahaan</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                    <div class="d-flex justify-content-center px-5">
                        <div class="col mb-1">
                                               <div class="input-group">
                                                   <input type="text" class="form-control" placeholder="Button on right" aria-describedby="button-addon2" />
                                                   <button class="btn btn-outline-primary" id="button-addon2" type="button">Go</button>
                                               </div>
                                           </div>
                                        </div>
                                        <div class="justify-content-center">

                                            <span class="text-center" >
                                                <a  href="" >Klik untuk melihat Referensi Data Integrasi</a>
                                            </span>
                                        </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        $(function() {
            const table = $('.datatables').DataTable({

            })
        });
    </script>
@endsection
