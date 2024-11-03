    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Dashboard Sistem Manajemen Karyawan</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <style>
            body {
                font-family: Arial, sans-serif;
            }
            
            .sidebar {
                height: 100vh;
                position: fixed;
                top: 0;
                left: 0;
                width: 200px;
                background-color: #FFFFFF;
                color: black;
            }

            .sidebar .nav-link {
                color: black;
            }

            .sidebar .nav-link.active {
                background-color: #0090FF;
                color: white;
            }

            .sidebar-sticky {
                padding-left: 20px;
            }

            .main-content {
                margin-left: 200px;
                padding: 20px;
            }

            .header {
                background-color: #007bff;
                color: white;
                padding: 15px;
                border-radius: 0px;
                margin-bottom: 0px;
                font-size: 24px;
                font-weight: bold;
                text-align: left;
            }

            .table-container {
                background-color:white ;
                padding: 20px;
                border-radius: 8px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            }
        </style>
    </head>
    <body>

        <div class="sidebar">
            <div class="sidebar-sticky">
                <h5 class="text-center mt-4"> UNIVERSITAS <ul> BUNG KARNO</ul></h5>
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" href="#" onclick="navigateTo('dashboard')">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        </li>
                        <a >MENU KARYAWAN</a>
                        <a class="nav-link" href="#" onclick="navigateTo('Data_list')">Karyawan</a>
                        
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" onclick="navigateTo('job_positions')">Jabatan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" onclick="navigateTo('divisions')">Divisi</a>
                    </li>
                    <li class="nav-item">
                        </li>    
                        <li class="nav-item">
                    <a class="nav-link" href="#" onclick="navigateTo('Data_list')">Karyawan</a>
                </li>        
                    <a >MENU ABSENSI</a>
                
                        <a class="nav-link" href="#" onclick="navigateTo('attendance')">Absensi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" onclick="navigateTo('leave_requests')">Izin</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" onclick="navigateTo('overtime')">Lembur</a>
                
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" onclick="navigateTo('payroll')">Slip Gaji</a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="main-content">
            <div class="header">Sistem Informasi Manajemen Karyawan</div>
            
            <div id="content" class="table-container">
            </div>
        </div>

        <script>
            function navigateTo(page) {
                let content = '';
                
                switch (page) {
                    case 'dashboard':
                        content = `<h3>Admin Dashboard</h3>
                                <p>`;
                        break;
                    case 'Data_list':
                        content = `<h3>Data karyawan</h3>

                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kode</th>
                                            <th>Nama</th>
                                            <th>Email</th>
                                            <th>Alamat</th>
                                            <th>Jabatan</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                            <tr><td>1</td><td>Aldis Sahputra</td><td>K001</td><td>aldissahputra@gmail.com</td><td>Jl. Legok Rt.001/002 Jakarta</td><td>Staff</tr>
                                                <tr><td>2</td><td>Ari</td><td>K002</td><td>ari123@gmail.com</td><td>Jl. Pincuran Rt.003/001 Pamulang</td><td>Kepala Bagian</tr>
                                                <tr><td>3</td><td>Budi</td><td>K003</td><td>budi1@gmail.com</td><td>Bekasi</td><td>Admin</tr>
                                        </tr>
                                    </tbody>
                                </table>`;
                        break;
                        
                    case 'job_positions':
                        content = `<h3>Data Jabatan</h3>
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kode Jabatan</th>
                                            <th>Jabatan</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr><td>1</td><td>JAB001</td><td>Kepala Bagian</td></tr>
                                        <tr><td>2</td><td>JAB002</td><td>Kepala Sub Bagian</td></tr>
                                        <tr><td>3</td><td>JAB003</td><td>Staff</td></tr>
                                    </tbody>
                                </table>`;
                        break;
                    case 'divisions':
                        content = `<h3>Data Divisi</h3>
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kode Divisi</th>
                                            <th>Nama Divisi</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr><td>1</td><td>DIV001</td><td>Umum</td></tr>
                                        <tr><td>2</td><td>DIV002</td><td>Umum</td></tr>
                                        <tr><td>3</td><td>DIV003</td><td>Umum</td></tr>
                                    </tbody>
                                </table>`;
                        break;
                    case 'attendance':
                        content = `<h3>Daftar Hadir Karyawan</h3>
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Nama Karyawan</th>
                                            <th>tanggal</th>
                                            <th>Lokasi Absen</th>
                                            <th>Jam Masuk</th>
                                            <th>Jam Keluar</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr><td>1</td><td>Aldis Sahputra</td><td>01-11-2024</td><td>Unpam Viktor</td><td>07:05:05<td>15:00:05</tr>
                                        <tr><td>2</td><td>Wawan</td><td>01-11-2024</td><td>Unpam Viktor</td><td>08:10:10<td>16:00:05</tr>
                                        <tr><td>3</td><td>BUdi</td><td>01-11-2024</td><td>Unpam Viktor</td><td>08:05:05<td>16:00:19</tr>
                                    </tbody>
                                </table>`;
                        break;
                    case 'leave_requests':
                        content = `<h3>Daftar Izin Karyawan</h3>
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Izin</th>
                                            <th>Tanggal</th>
                                            <th>Jam</th>
                                            <th>Keterangan</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr><td>1</td><td>Aldis Sahputra</td><td>Pulang Lebih Awal</td><td>01-11-2024</td><td>11:05:05<td> Sakit<td>Menunggu Konfirmasi</tr>
                                        <tr><td>2</td><td>Budi</td><td>Datang Terlambat</td><td>31-10-2024</td><td>08:00:10<td>Motor Mogok<td>Menunggu Konfirmasi</tr>
                                        <tr><td>3</td><td>Wawan</td><td>Datang Terlambat</td><td>31-10-2024</td><td>08:30:25<td> Ban Motor Bocor<td>Menunggu Konfirmasi</tr>
                                    </tbody>
                                </table>`;
                        break;
                    case 'overtime':
                        content = `<h3>Data Lembur Karyawan</h3>
                        
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Tanggal</th>
                                            <th>Jam Lembur Mulai|Berakhir</th>
                                            <th>Keperluan Lembur</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr><td>1</td><td>Arif</td><td>30-10-2024</td><td>16:00:00|18:00:00</td><td>Penggantian Karyawan yang Izin<td>Menunggu Konfirmasi</tr>
                                            <tr><td>2</td><td>Yoga</td><td>29-10-2024</td><td>16:00:00|18:00:00</td><td>Lembur<td>Disetujui</tr>
                                        <tr><td>2</td><td>Angga Prasetyo</td><td>29-10-2024</td><td>16:00:00|18:00:00</td><td>Lembur<td>Disetujui</tr>
                                            </tbody>
                                </table>`;
                        break;
                    case 'payroll':
                        content = `<h3>Menu Penggajian</h3>
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Gaji Pokok</th>
                                            <th>Lembur</th>
                                            <th>Total Gaji</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr><td>1</td><td>Yoga </td><td>Rp 5,000,000</td><td>Rp 200,000</td><td>Rp 5,200,000</td></tr>
                                        <tr><td>2</td><td>Arif </td><td>Rp 5,000,000</td><td>Rp 800,000</td><td>Rp 5,800,000</td></tr>
                                        <tr><td>3</td><td>Angga Prasetyo </td><td>Rp 5,000,000</td><td>Rp 400,000</td><td>Rp 5,400,000</td></tr>
                                    </tbody>
                                </table>`;
                        break;
                    default:
                        content = '<h2>Halaman Tidak Ditemukan</h2>';
                }
                document.getElementById("content").innerHTML = content;
            }
            navigateTo('dashboard');
        </script>

    </body>
    </html>
