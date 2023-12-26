CREATE TABLE vai_tro (
    ma_vai_tro INT PRIMARY KEY AUTO_INCREMENT,
    ten_vai_tro VARCHAR(50) UNIQUE NOT NULL,
    mo_ta VARCHAR(255) NOT NULL
);
CREATE TABLE tai_khoan (
    ma_tai_khoan INT PRIMARY KEY AUTO_INCREMENT,
    ten_dang_nhap VARCHAR(50) UNIQUE NOT NULL,
    mat_khau VARCHAR(50) NOT NULL,
    ma_vai_tro INT,
    FOREIGN KEY (ma_vai_tro) REFERENCES vai_tro(ma_vai_tro)
);
CREATE TABLE admin (
    ma_admin INT PRIMARY KEY AUTO_INCREMENT,
    ma_tai_khoan INT,
    ten VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL,
    so_dien_thoai VARCHAR(15) NOT NULL,
    FOREIGN KEY (ma_tai_khoan) REFERENCES tai_khoan(ma_tai_khoan)
);
CREATE TABLE giao_vien (
    ma_giao_vien INT PRIMARY KEY AUTO_INCREMENT,
    ma_tai_khoan INT,
    ten VARCHAR(50) NOT NULL,
    ho VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL,
    so_dien_thoai VARCHAR(15) NOT NULL,
    trinh_do VARCHAR(100) NOT NULL,
    FOREIGN KEY (ma_tai_khoan) REFERENCES tai_khoan(ma_tai_khoan)
);
CREATE TABLE hoc_sinh (
    ma_hoc_sinh INT PRIMARY KEY AUTO_INCREMENT,
    ma_tai_khoan INT,
    ten VARCHAR(50) NOT NULL,
    ho VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL,
    so_dien_thoai VARCHAR(15) NOT NULL,
    diem_dau_vao FLOAT,
    FOREIGN KEY (ma_tai_khoan) REFERENCES tai_khoan(ma_tai_khoan)
);
CREATE TABLE khoa_hoc (
    ma_khoa_hoc INT PRIMARY KEY AUTO_INCREMENT,
    ten_khoa_hoc VARCHAR(50) NOT NULL, 
    so_tiet INT NOT NULL,
    hoc_phi FLOAT NOT NULL,
    dieu_kien FLOAT NOT NULL
);
CREATE TABLE lop (
    ma_lop INT PRIMARY KEY AUTO_INCREMENT,
    ma_giao_vien INT, 
    ma_khoa_hoc INT,
    ten_lop VARCHAR(50) NOT NULL,
    si_so_toi_da INT NOT NULL,
    ngay_bat_dau DATE NOT NULL,
    ngay_ket_thuc DATE NUll,
    thoi_khoa_bieu VARCHAR (15),
    gio_bat_dau TIME NOT NULL,
    thoi_luong_hoc INT NOT NULL,
    FOREIGN KEY (ma_giao_vien) REFERENCES giao_vien(ma_giao_vien),
    FOREIGN KEY (ma_khoa_hoc) REFERENCES khoa_hoc(ma_khoa_hoc)
);
CREATE TABLE diem_cua_lop (
    ma_lop INT,
    ma_hoc_sinh INT,
    diem_a FLOAT,
    diem_b FLOAT,
    nhan_xet VARCHAR (255),
    PRIMARY KEY (ma_lop, ma_hoc_sinh),
    FOREIGN KEY (ma_lop) REFERENCES lop(ma_lop),
    FOREIGN KEY (ma_hoc_sinh) REFERENCES hoc_sinh(ma_hoc_sinh)
);
CREATE TABLE diem_danh(
    ma_diem_danh INT PRIMARY KEY AUTO_INCREMENT,
    ma_hoc_sinh INT,
    trang_thai VARCHAR(50) NOT NULL,
    ngay_diem_danh DATE NOT NULL,
    FOREIGN KEY (ma_hoc_sinh) REFERENCES hoc_sinh(ma_hoc_sinh)
);