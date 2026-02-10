```json
db_sekolah [
  {
    table: siswa,
    data: [nis, nama, kelas, hobi, hari, bulan, tahun, gender, alamat, email, password],
    type: [int, varchar(100), varchar(100), text, int, varchar(20), int, enum('laki-laki', 'perempuan', 'tidak_ingin_diketahui'), text, varchar(100), varchar(50)]
    primery: nis
  }
]

db_absensu [
  {
    table: siswa,
    data: [id, nis, kelas, status, tanggal, waktu, alasan]
    type: [int, int, varchar(50), enum('hadir', 'sakit', 'izin', 'alpa'), date, time, varchar(500)]
    primery: id
  }
]
