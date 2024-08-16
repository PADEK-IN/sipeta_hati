<x-app-layout>

    <div class="pagetitle">
        <h1>Detail Pengajuan Surat Warga</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('admin.pengajuan') }}">Pengajuan Surat</a></li>
                <li class="breadcrumb-item">Detail</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            {{-- detail --}}
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Tiket Pengajuan: #{{ $pengajuan->hashid }}</h5>
                        <!-- Table with stripped rows -->
                        <table class="table table-striped">
                            <tbody>
                                <tr>
                                    <th class="col-2">Nama Pemohon</td>
                                    <td>{{ $pengajuan->warga->nama }}</td>
                                </tr>
                                <tr>
                                    <th>Jenis Surat</td>
                                    <td>{{ $pengajuan->jenis_surat }}</td>
                                </tr>
                                <tr>
                                    <th>Tanggal</td>
                                    <td>{{ $pengajuan->tanggal }}</td>
                                </tr>
                                <tr>
                                    <th>Perihal</td>
                                    <td>{{ $pengajuan->perihal }}</td>
                                </tr>
                                <tr>
                                    <th>Keterangan</td>
                                    <td>{{ $pengajuan->keterangan }}</td>
                                </tr>
                                <tr>
                                    <th>Lampiran</td>
                                    <td>
                                        <a target="_blank" href="{{ asset('lampiran/warga/pengajuan').'/'.$pengajuan->lampiran }}">Lihat Berkas <img src="{{ asset('img/pdf-download.png') }}" width="23px"></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <!-- End Table with stripped rows -->
                        <button type="button" class="btn btn-warning text-white" onclick="history.back()">Kembali</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

</x-app-layout>
