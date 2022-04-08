SELECT mhs_nama FROM tb_mahasiswa_nilai
LEFT JOIN tb_mahasiswa ON tb_mahasiswa.mhs_id = tb_mahasiswa_nilai.mhs_id
LEFT JOIN tb_matakuliah ON tb_matakuliah.mk_id = tb_mahasiswa_nilai.mk_id
WHERE mk_kode = "MK303" ORDER BY nilai DESC LIMIT 1