CREATE TABLE siswa(
    id int(11) PRIMARY KEY AUTO_INCREMENT,
    nis varchar(11) not null,
    nama varchar(50) not null,
    jenis_kelamin varchar(10) not null,
    telp varchar(15) not null,
    alamat text not null,
    foto varchar(200) not null
)