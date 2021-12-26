CREATE DATABASE apotekku;
USE apotekku;

CREATE TABLE `user` (
id_user INT AUTO_INCREMENT,
username VARCHAR(60) UNIQUE,
email VARCHAR(100) UNIQUE,
nama VARCHAR(255),
no_telp VARCHAR(18),
PRIMARY KEY (id_user)
);


CREATE TABLE `obat` (
id_obat INT AUTO_INCREMENT,
nama_obat VARCHAR(255),
harga INT,
jenis_obat ENUM("Sirup","Tablet"),
diskon INT,
PRIMARY KEY(id_obat)
);

CREATE TABLE `alkes` (
id_alkes INT AUTO_INCREMENT,
nama_alkes VARCHAR(255),
harga INT,
diskon INT,
PRIMARY KEY(id_alkes)
);

CREATE TABLE transaksi(
id_transaksi INT AUTO_INCREMENT,
id_user INT,
tanggal DATETIME,
total INT,
penerima VARCHAR(255),
alamat_pengiriman TEXT,
no_telp_penerima VARCHAR(18),
PRIMARY KEY (id_transaksi),
FOREIGN KEY (id_user) REFERENCES `user`(id_user)
);

CREATE TABLE detail_transaksi_obat(
id_transaksi INT,
id_obat INT,
FOREIGN KEY (id_transaksi) REFERENCES transaksi(id_transaksi),
FOREIGN KEY (id_obat) REFERENCES obat(id_obat)
);

CREATE TABLE detail_transaksi_alkes(
id_transaksi INT,
id_alkes INT,
FOREIGN KEY (id_transaksi) REFERENCES transaksi(id_transaksi),
FOREIGN KEY (id_alkes) REFERENCES alkes(id_alkes)
);
SELECT * FROM obat
