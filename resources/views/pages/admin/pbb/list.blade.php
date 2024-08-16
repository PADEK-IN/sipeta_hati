<x-app-layout>

    <div class="pagetitle">
        <h1>Data Surat Pajak Bumi Bangunan</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                <li class="breadcrumb-item">Surat Pajak Bumi Bangunan</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">
                            <a href="{{ route('admin.pbb.create') }}" class="btn btn-primary">Buat Surat Baru</a>
                        </h5>
                        <!-- Table with stripped rows -->
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th>No Surat</th>
                                    <th>Tiket Pengajuan</th>
                                    <th>Pemohon</th>
                                    <th>Perihal</th>
                                    <th>Keterangan</th>
                                    <th>Tanggal Surat</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pbbs as $pbb)
                                <tr>
                                    <td>
                                        <a href="{{ route('admin.pbb.detail', $pbb->hashid) }}">{{ $pbb->no_surat }}</a>
                                    </td>
                                    <td>
                                        <a href="{{ route('admin.pengajuan.detail', $pbb->pengajuan->hashid) }}">#{{ $pbb->pengajuan->hashid }}</a>
                                    </td>
                                    <td>{{ $pbb->pengajuan->warga->nama }}</td>
                                    <td>{{ $pbb->pengajuan->perihal }}</td>
                                    <td>{{ $pbb->pengajuan->keterangan }}</td>
                                    <td>{{ $pbb->tanggal_surat }}</td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="{{ route('admin.pbb.edit', $pbb->hashid) }}" class="btn btn-sm btn-warning text-white">Edit</a>
                                            <div style="width: 10px;"></div>
                                            <button onclick="destroy('{{ $pbb->hashid }}')" class="btn btn-sm btn-danger">Delete</button>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <!-- End Table with stripped rows -->
                    </div>
                </div>

            </div>
        </div>
    </section>

    <script>
        function destroy(id) {
            Swal.fire({
                title: 'Apakah Kamu Yakin?',
                text: "Ingin menghapus data Pajak Bumi Bangunan Ini!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, Aku Yakin!',
                cancelButtonText: 'Tidak, Batalkan!'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = `/admin/pbb/destroy/${id}`;
                }
            })
        };
    </script>

</x-app-layout>
