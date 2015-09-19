CREATE TABLE ad_user_signin_lock (id BIGINT AUTO_INCREMENT, user_name VARCHAR(255), created_time BIGINT, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE = INNODB;
CREATE TABLE sessions_admin (sess_id VARCHAR(64), sess_data LONGTEXT NOT NULL, sess_time BIGINT NOT NULL, sess_userid BIGINT, PRIMARY KEY(sess_id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE = INNODB;
CREATE TABLE csdl_area (id BIGINT AUTO_INCREMENT, province VARCHAR(25) COMMENT 'Ma tinh', district VARCHAR(25) COMMENT 'Ma huyen', precinct VARCHAR(25) COMMENT 'Ma phuong,xa', street_block VARCHAR(255) COMMENT 'khu pho', street VARCHAR(255) COMMENT 'duong pho', name VARCHAR(255) COMMENT 'ten don vi', full_name VARCHAR(255) COMMENT 'Ten day du', status BIGINT COMMENT 'trang thai', PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE = INNODB;
CREATE TABLE csdl_chude (id BIGINT AUTO_INCREMENT, tenchude VARCHAR(255) COMMENT 'Ten chu de', gioithieu TEXT COMMENT 'gioi thieu', anhdaidien VARCHAR(255) COMMENT 'hinh anh', thutu BIGINT COMMENT 'Thu tu hien thi', trangthai TINYINT(1) DEFAULT '0' NOT NULL COMMENT 'Trang thai', created_by BIGINT, updated_by BIGINT, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, INDEX created_by_idx (created_by), INDEX updated_by_idx (updated_by), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE = INNODB;
CREATE TABLE csdl_coquan_banhanh (id BIGINT AUTO_INCREMENT, madonvi VARCHAR(25) COMMENT 'Ma don vi', tendonvi VARCHAR(255) COMMENT 'ten don vi', gioithieu TEXT COMMENT 'Gioi thieu', nguoidaidien VARCHAR(255) COMMENT 'nguoi dai dien', anhdaidien VARCHAR(255) COMMENT 'hinh anh', thutu BIGINT COMMENT 'Thu tu hien thi', trangthai TINYINT(1) DEFAULT '0' NOT NULL COMMENT 'Trang thai', created_by BIGINT, updated_by BIGINT, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, INDEX created_by_idx (created_by), INDEX updated_by_idx (updated_by), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE = INNODB;
CREATE TABLE csdl_coquan_baochi (id BIGINT AUTO_INCREMENT, madonvi VARCHAR(25) COMMENT 'Ma don vi', tendonvi VARCHAR(255) COMMENT 'ten don vi', gioithieu TEXT COMMENT 'Gioi thieu', nguoidaidien VARCHAR(255) COMMENT 'nguoi dai dien', anhdaidien VARCHAR(255) COMMENT 'hinh anh', thutu BIGINT COMMENT 'Thu tu hien thi', trangthai TINYINT(1) DEFAULT '0' NOT NULL COMMENT 'Trang thai', created_by BIGINT, updated_by BIGINT, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, INDEX created_by_idx (created_by), INDEX updated_by_idx (updated_by), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE = INNODB;
CREATE TABLE csdl_danhba (id BIGINT AUTO_INCREMENT, hoten VARCHAR(255) COMMENT 'Họ và tên', ngaysinh DATETIME COMMENT 'ngay sinh', gioitinh VARCHAR(25) COMMENT 'Gioi tinh', diachi VARCHAR(255) COMMENT 'dịa chỉ', dienthoai VARCHAR(255) COMMENT 'Dien thoai', email VARCHAR(255) COMMENT 'Email', donvi VARCHAR(255) COMMENT 'don vi cong tac', created_by BIGINT, updated_by BIGINT, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, INDEX created_by_idx (created_by), INDEX updated_by_idx (updated_by), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE = INNODB;
CREATE TABLE csdl_dantoc (id BIGINT AUTO_INCREMENT, madantoc VARCHAR(25) COMMENT 'Ma dan toc', tendantoc VARCHAR(255) COMMENT 'ten dan toc', gioithieu TEXT COMMENT 'Gioi thieu ve dan toc', anhdaidien VARCHAR(255) COMMENT 'hinh anh', created_by BIGINT, updated_by BIGINT, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, INDEX created_by_idx (created_by), INDEX updated_by_idx (updated_by), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE = INNODB;
CREATE TABLE csdl_dm_nghenghiep (id BIGINT AUTO_INCREMENT, tendanhmuc VARCHAR(255) COMMENT 'ten danh muc', gioithieu TEXT COMMENT 'Gioi thieu', anhdaidien VARCHAR(255) COMMENT 'hinh anh', thutu BIGINT COMMENT 'Thu tu hien thi', trangthai TINYINT(1) DEFAULT '0' NOT NULL COMMENT 'Trang thai', created_by BIGINT, updated_by BIGINT, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, INDEX created_by_idx (created_by), INDEX updated_by_idx (updated_by), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE = INNODB;
CREATE TABLE csdl_giaithuong (id BIGINT AUTO_INCREMENT, tengiaithuong VARCHAR(255) COMMENT 'Ten giai thuong: nhat, nhi, ba', madanhmuc VARCHAR(25) COMMENT 'Ma danh muc giai thuong', namtochuc INT COMMENT 'Nam to chuc', giatri BIGINT COMMENT 'gia tri giai thuong', created_by BIGINT, updated_by BIGINT, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, INDEX created_by_idx (created_by), INDEX updated_by_idx (updated_by), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE = INNODB;
CREATE TABLE csdl_lichcongtac (id BIGINT AUTO_INCREMENT, hoivien_id BIGINT COMMENT 'ma hoi vien', tieude VARCHAR(255) COMMENT 'tieu de', noidung TEXT COMMENT 'Noi dung', start_time DATETIME COMMENT 'Thời gian bắt đầu', end_time DATETIME COMMENT 'Thời gian kết thúc', diadiem VARCHAR(255) COMMENT 'tieu de', created_by BIGINT, updated_by BIGINT, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, INDEX created_by_idx (created_by), INDEX updated_by_idx (updated_by), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE = INNODB;
CREATE TABLE csdl_loaigiaithuong (id BIGINT AUTO_INCREMENT, madanhmuc VARCHAR(25) COMMENT 'Ma danh muc', tendanhmuc VARCHAR(255) COMMENT 'ten danh muc', linhvuc VARCHAR(255) COMMENT 'Linh vuc giai thuong', donvitochuc VARCHAR(255) COMMENT 'Don vi to chuc', gioithieu TEXT COMMENT 'Gioi thieu', anhdaidien VARCHAR(255) COMMENT 'hinh anh', thutu BIGINT COMMENT 'Thu tu hien thi', trangthai TINYINT(1) DEFAULT '0' NOT NULL COMMENT 'Trang thai', created_by BIGINT, updated_by BIGINT, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, INDEX created_by_idx (created_by), INDEX updated_by_idx (updated_by), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE = INNODB;
CREATE TABLE csdl_loaitailieu (id BIGINT AUTO_INCREMENT, madanhmuc VARCHAR(25) COMMENT 'Ma danh muc', tendanhmuc VARCHAR(255) COMMENT 'ten danh muc', gioithieu TEXT COMMENT 'Gioi thieu', anhdaidien VARCHAR(255) COMMENT 'hinh anh', thutu BIGINT COMMENT 'Thu tu hien thi', trangthai TINYINT(1) DEFAULT '0' NOT NULL COMMENT 'Trang thai', created_by BIGINT, updated_by BIGINT, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, INDEX created_by_idx (created_by), INDEX updated_by_idx (updated_by), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE = INNODB;
CREATE TABLE csdl_loaivanban (id BIGINT AUTO_INCREMENT, madanhmuc VARCHAR(25) COMMENT 'Ma danh muc', tendanhmuc VARCHAR(255) COMMENT 'ten danh muc', gioithieu TEXT COMMENT 'Gioi thieu', anhdaidien VARCHAR(255) COMMENT 'hinh anh', thutu BIGINT COMMENT 'Thu tu hien thi', trangthai TINYINT(1) DEFAULT '0' NOT NULL COMMENT 'Trang thai', created_by BIGINT, updated_by BIGINT, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, INDEX created_by_idx (created_by), INDEX updated_by_idx (updated_by), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE = INNODB;
CREATE TABLE csdl_lylich_hoivien (id BIGINT AUTO_INCREMENT, hoivien_id BIGINT COMMENT 'ma hoi vien', ten VARCHAR(255) COMMENT 'Tên hội viên', hodem VARCHAR(255) COMMENT 'Họ + tên hội viên', ngaysinh DATETIME COMMENT 'ngay sinh cua hoi vien', gioitinh VARCHAR(25) COMMENT 'Gioi tinh', diachi VARCHAR(255) COMMENT 'dịa chỉ', maquan VARCHAR(25) COMMENT 'Ma quan/huyen', matinh VARCHAR(255) COMMENT 'Ma tinh/thanh pho', ngayvaodoan DATETIME COMMENT 'ngay vao doan', noiketnapdoan VARCHAR(255) COMMENT 'nơi kết nạp đoàn', ngayvaodang DATETIME COMMENT 'ngay vao dang', noiketnapdang VARCHAR(255) COMMENT 'nơi kết nạp đảng', tieusu TEXT COMMENT 'nơi kết nạp đảng', nghenghiep_id BIGINT COMMENT 'Danh muc nghe nghiep', dantoc_id BIGINT COMMENT 'Danh muc dan toc', quoctich VARCHAR(255) COMMENT 'quoc tich', donvi_id BIGINT COMMENT 'don vị công tác', created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE = INNODB;
CREATE TABLE csdl_nhatky (id BIGINT AUTO_INCREMENT, hoivien_id BIGINT COMMENT 'ma hoi vien', tieude VARCHAR(255) COMMENT 'Tieu de', machucnang VARCHAR(255) COMMENT 'Mã chức năng', module VARCHAR(255) COMMENT 'Phân hệ chức năng', ngaytao DATETIME COMMENT 'ngay tao', ip VARCHAR(25) COMMENT 'địa chỉ ip tác động', PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE = INNODB;
CREATE TABLE csdl_quatrinh_congtac (id BIGINT AUTO_INCREMENT, hoivien_id BIGINT COMMENT 'ma hoi vien', donvi_id BIGINT COMMENT 'don vị công tác', thoigian BIGINT COMMENT 'thời gian công tác (tính theo tháng)', batdau DATETIME COMMENT 'thoi gian bat dau', ketthuc DATETIME COMMENT 'thoi gian ket thuc', chucvu VARCHAR(255) COMMENT 'Chức vụ', mota TEXT COMMENT 'Mô tả công việc', created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, created_by BIGINT, updated_by BIGINT, INDEX created_by_idx (created_by), INDEX updated_by_idx (updated_by), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE = INNODB;
CREATE TABLE csdl_tacgia (id BIGINT AUTO_INCREMENT, hoten VARCHAR(255) COMMENT 'Họ và tên', ngaysinh DATETIME COMMENT 'ngay sinh', gioitinh VARCHAR(25) COMMENT 'Gioi tinh', diachi VARCHAR(255) COMMENT 'dịa chỉ', dienthoai VARCHAR(255) COMMENT 'Dien thoai', email VARCHAR(255) COMMENT 'Email', donvi VARCHAR(255) COMMENT 'don vi cong tac', created_by BIGINT, updated_by BIGINT, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, INDEX created_by_idx (created_by), INDEX updated_by_idx (updated_by), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE = INNODB;
CREATE TABLE csdl_tacpham (id BIGINT AUTO_INCREMENT, hoivient_id BIGINT COMMENT 'ma hoi vien', tentacpham VARCHAR(255) COMMENT 'Ten tac pham', gioithieu TEXT COMMENT 'gioi thieu', anhdaidien VARCHAR(255) COMMENT 'hinh anh', filedownload VARCHAR(255) COMMENT 'file download: zip, pdf, doc, docx, xls, xlsx', ngayxuatban DATETIME COMMENT 'ngay xuat ban', tacgia_id BIGINT COMMENT 'Ma Tac gia', chude_id BIGINT COMMENT 'ma chu de', created_by BIGINT, updated_by BIGINT, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, INDEX created_by_idx (created_by), INDEX updated_by_idx (updated_by), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE = INNODB;
CREATE TABLE csdl_tailieu_nghiepvu (id BIGINT AUTO_INCREMENT, matailieu VARCHAR(25) COMMENT 'Ma tai lieu', kyhieu VARCHAR(25) COMMENT 'Ky hieu', sotailieu VARCHAR(25) COMMENT 'so tai lieu', tentailieu VARCHAR(255) COMMENT 'Ten tai lieu', trichdan TEXT COMMENT 'Trich dan', anhdaidien VARCHAR(255) COMMENT 'hinh anh', filedownload VARCHAR(255) COMMENT 'file download', trangthai TINYINT(1) DEFAULT '0' NOT NULL COMMENT 'Trang thai', created_by BIGINT, updated_by BIGINT, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, INDEX created_by_idx (created_by), INDEX updated_by_idx (updated_by), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE = INNODB;
CREATE TABLE csdl_the_hoivien (id BIGINT AUTO_INCREMENT, hoivient_id BIGINT COMMENT 'ma hoi vien', mathe VARCHAR(25) COMMENT 'Ma the', anhdaidien VARCHAR(255) COMMENT 'hinh anh', ngaycap DATETIME COMMENT 'ngay cap the hoi vien', ngayhethan DATETIME COMMENT 'ngay het han cua the', nguoiky VARCHAR(150) COMMENT 'Nguoi ky', ngayky DATETIME COMMENT 'ngay ky', trangthai TINYINT(1) DEFAULT '0' NOT NULL COMMENT 'Trang thai', created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE = INNODB;
CREATE TABLE csdl_vanban_phapquy (id BIGINT AUTO_INCREMENT, matailieu VARCHAR(25) COMMENT 'Ma tai lieu', kyhieu VARCHAR(25) COMMENT 'Ky hieu', sotailieu VARCHAR(25) COMMENT 'so tai lieu', ngaybanhanh DATETIME COMMENT 'Ngày ban hành', ngayhieuluc DATETIME COMMENT 'Ngày hiệu lực', ngayhethieuluc DATETIME COMMENT 'Ngày hết hiệu lực', tentailieu VARCHAR(255) COMMENT 'Ten tai lieu', trichdan TEXT COMMENT 'Trich dan', anhdaidien VARCHAR(255) COMMENT 'hinh anh', filedownload VARCHAR(255) COMMENT 'file download', trangthai TINYINT(1) DEFAULT '0' NOT NULL COMMENT 'Trang thai', loaivanban_id BIGINT COMMENT 'Loai van ban phap quy', created_by BIGINT, updated_by BIGINT, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, INDEX loaivanban_id_idx (loaivanban_id), INDEX created_by_idx (created_by), INDEX updated_by_idx (updated_by), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE = INNODB;
CREATE TABLE sf_guard_forgot_password (id BIGINT AUTO_INCREMENT, user_id BIGINT NOT NULL, unique_key VARCHAR(255), expires_at DATETIME NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, INDEX user_id_idx (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE = INNODB;
CREATE TABLE sf_guard_group (id BIGINT AUTO_INCREMENT, name VARCHAR(255) UNIQUE, description TEXT, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE = INNODB;
CREATE TABLE sf_guard_group_permission (group_id BIGINT, permission_id BIGINT, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, PRIMARY KEY(group_id, permission_id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE = INNODB;
CREATE TABLE sf_guard_permission (id BIGINT AUTO_INCREMENT, name VARCHAR(255) UNIQUE, description TEXT, types TINYINT(1) DEFAULT '0' NOT NULL COMMENT 'Loại quyền: 0 - Quyền hệ thống, 1 - Quyền nội dung. Nếu là quyền hệ thống thì chỉ đọc mà không được sửa', created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE = INNODB;
CREATE TABLE sf_guard_remember_key (id BIGINT AUTO_INCREMENT, user_id BIGINT, remember_key VARCHAR(32), ip_address VARCHAR(50), created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, INDEX user_id_idx (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE = INNODB;
CREATE TABLE sf_guard_user (id BIGINT AUTO_INCREMENT, first_name VARCHAR(255), last_name VARCHAR(255), phone VARCHAR(15), email_address VARCHAR(255) UNIQUE, username VARCHAR(255) NOT NULL UNIQUE, algorithm VARCHAR(255) DEFAULT 'sha1' NOT NULL, salt VARCHAR(255), password VARCHAR(255), is_active TINYINT(1) DEFAULT '0', is_super_admin TINYINT(1) DEFAULT '0', last_login DATETIME, pass_update_at DATETIME, is_lock_signin TINYINT(1), locked_time BIGINT, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, INDEX is_active_idx_idx (is_active), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE = INNODB;
CREATE TABLE sf_guard_user_group (user_id BIGINT, group_id BIGINT, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, PRIMARY KEY(user_id, group_id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE = INNODB;
CREATE TABLE sf_guard_user_permission (user_id BIGINT, permission_id BIGINT, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, PRIMARY KEY(user_id, permission_id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE = INNODB;
ALTER TABLE csdl_chude ADD CONSTRAINT csdl_chude_updated_by_sf_guard_user_id FOREIGN KEY (updated_by) REFERENCES sf_guard_user(id);
ALTER TABLE csdl_chude ADD CONSTRAINT csdl_chude_created_by_sf_guard_user_id FOREIGN KEY (created_by) REFERENCES sf_guard_user(id);
ALTER TABLE csdl_coquan_banhanh ADD CONSTRAINT csdl_coquan_banhanh_updated_by_sf_guard_user_id FOREIGN KEY (updated_by) REFERENCES sf_guard_user(id);
ALTER TABLE csdl_coquan_banhanh ADD CONSTRAINT csdl_coquan_banhanh_created_by_sf_guard_user_id FOREIGN KEY (created_by) REFERENCES sf_guard_user(id);
ALTER TABLE csdl_coquan_baochi ADD CONSTRAINT csdl_coquan_baochi_updated_by_sf_guard_user_id FOREIGN KEY (updated_by) REFERENCES sf_guard_user(id);
ALTER TABLE csdl_coquan_baochi ADD CONSTRAINT csdl_coquan_baochi_created_by_sf_guard_user_id FOREIGN KEY (created_by) REFERENCES sf_guard_user(id);
ALTER TABLE csdl_danhba ADD CONSTRAINT csdl_danhba_updated_by_sf_guard_user_id FOREIGN KEY (updated_by) REFERENCES sf_guard_user(id);
ALTER TABLE csdl_danhba ADD CONSTRAINT csdl_danhba_created_by_sf_guard_user_id FOREIGN KEY (created_by) REFERENCES sf_guard_user(id);
ALTER TABLE csdl_dantoc ADD CONSTRAINT csdl_dantoc_updated_by_sf_guard_user_id FOREIGN KEY (updated_by) REFERENCES sf_guard_user(id);
ALTER TABLE csdl_dantoc ADD CONSTRAINT csdl_dantoc_created_by_sf_guard_user_id FOREIGN KEY (created_by) REFERENCES sf_guard_user(id);
ALTER TABLE csdl_dm_nghenghiep ADD CONSTRAINT csdl_dm_nghenghiep_updated_by_sf_guard_user_id FOREIGN KEY (updated_by) REFERENCES sf_guard_user(id);
ALTER TABLE csdl_dm_nghenghiep ADD CONSTRAINT csdl_dm_nghenghiep_created_by_sf_guard_user_id FOREIGN KEY (created_by) REFERENCES sf_guard_user(id);
ALTER TABLE csdl_giaithuong ADD CONSTRAINT csdl_giaithuong_updated_by_sf_guard_user_id FOREIGN KEY (updated_by) REFERENCES sf_guard_user(id);
ALTER TABLE csdl_giaithuong ADD CONSTRAINT csdl_giaithuong_created_by_sf_guard_user_id FOREIGN KEY (created_by) REFERENCES sf_guard_user(id);
ALTER TABLE csdl_lichcongtac ADD CONSTRAINT csdl_lichcongtac_updated_by_sf_guard_user_id FOREIGN KEY (updated_by) REFERENCES sf_guard_user(id);
ALTER TABLE csdl_lichcongtac ADD CONSTRAINT csdl_lichcongtac_created_by_sf_guard_user_id FOREIGN KEY (created_by) REFERENCES sf_guard_user(id);
ALTER TABLE csdl_loaigiaithuong ADD CONSTRAINT csdl_loaigiaithuong_updated_by_sf_guard_user_id FOREIGN KEY (updated_by) REFERENCES sf_guard_user(id);
ALTER TABLE csdl_loaigiaithuong ADD CONSTRAINT csdl_loaigiaithuong_created_by_sf_guard_user_id FOREIGN KEY (created_by) REFERENCES sf_guard_user(id);
ALTER TABLE csdl_loaitailieu ADD CONSTRAINT csdl_loaitailieu_updated_by_sf_guard_user_id FOREIGN KEY (updated_by) REFERENCES sf_guard_user(id);
ALTER TABLE csdl_loaitailieu ADD CONSTRAINT csdl_loaitailieu_created_by_sf_guard_user_id FOREIGN KEY (created_by) REFERENCES sf_guard_user(id);
ALTER TABLE csdl_loaivanban ADD CONSTRAINT csdl_loaivanban_updated_by_sf_guard_user_id FOREIGN KEY (updated_by) REFERENCES sf_guard_user(id);
ALTER TABLE csdl_loaivanban ADD CONSTRAINT csdl_loaivanban_created_by_sf_guard_user_id FOREIGN KEY (created_by) REFERENCES sf_guard_user(id);
ALTER TABLE csdl_quatrinh_congtac ADD CONSTRAINT csdl_quatrinh_congtac_updated_by_sf_guard_user_id FOREIGN KEY (updated_by) REFERENCES sf_guard_user(id);
ALTER TABLE csdl_quatrinh_congtac ADD CONSTRAINT csdl_quatrinh_congtac_created_by_sf_guard_user_id FOREIGN KEY (created_by) REFERENCES sf_guard_user(id);
ALTER TABLE csdl_tacgia ADD CONSTRAINT csdl_tacgia_updated_by_sf_guard_user_id FOREIGN KEY (updated_by) REFERENCES sf_guard_user(id);
ALTER TABLE csdl_tacgia ADD CONSTRAINT csdl_tacgia_created_by_sf_guard_user_id FOREIGN KEY (created_by) REFERENCES sf_guard_user(id);
ALTER TABLE csdl_tacpham ADD CONSTRAINT csdl_tacpham_updated_by_sf_guard_user_id FOREIGN KEY (updated_by) REFERENCES sf_guard_user(id);
ALTER TABLE csdl_tacpham ADD CONSTRAINT csdl_tacpham_created_by_sf_guard_user_id FOREIGN KEY (created_by) REFERENCES sf_guard_user(id);
ALTER TABLE csdl_tailieu_nghiepvu ADD CONSTRAINT csdl_tailieu_nghiepvu_updated_by_sf_guard_user_id FOREIGN KEY (updated_by) REFERENCES sf_guard_user(id);
ALTER TABLE csdl_tailieu_nghiepvu ADD CONSTRAINT csdl_tailieu_nghiepvu_created_by_sf_guard_user_id FOREIGN KEY (created_by) REFERENCES sf_guard_user(id);
ALTER TABLE csdl_vanban_phapquy ADD CONSTRAINT csdl_vanban_phapquy_updated_by_sf_guard_user_id FOREIGN KEY (updated_by) REFERENCES sf_guard_user(id);
ALTER TABLE csdl_vanban_phapquy ADD CONSTRAINT csdl_vanban_phapquy_loaivanban_id_csdl_loaivanban_id FOREIGN KEY (loaivanban_id) REFERENCES csdl_loaivanban(id);
ALTER TABLE csdl_vanban_phapquy ADD CONSTRAINT csdl_vanban_phapquy_created_by_sf_guard_user_id FOREIGN KEY (created_by) REFERENCES sf_guard_user(id);
ALTER TABLE sf_guard_forgot_password ADD CONSTRAINT sf_guard_forgot_password_user_id_sf_guard_user_id FOREIGN KEY (user_id) REFERENCES sf_guard_user(id) ON DELETE CASCADE;
ALTER TABLE sf_guard_group_permission ADD CONSTRAINT sf_guard_group_permission_permission_id_sf_guard_permission_id FOREIGN KEY (permission_id) REFERENCES sf_guard_permission(id) ON DELETE CASCADE;
ALTER TABLE sf_guard_group_permission ADD CONSTRAINT sf_guard_group_permission_group_id_sf_guard_group_id FOREIGN KEY (group_id) REFERENCES sf_guard_group(id) ON DELETE CASCADE;
ALTER TABLE sf_guard_remember_key ADD CONSTRAINT sf_guard_remember_key_user_id_sf_guard_user_id FOREIGN KEY (user_id) REFERENCES sf_guard_user(id) ON DELETE CASCADE;
ALTER TABLE sf_guard_user_group ADD CONSTRAINT sf_guard_user_group_user_id_sf_guard_user_id FOREIGN KEY (user_id) REFERENCES sf_guard_user(id) ON DELETE CASCADE;
ALTER TABLE sf_guard_user_group ADD CONSTRAINT sf_guard_user_group_group_id_sf_guard_group_id FOREIGN KEY (group_id) REFERENCES sf_guard_group(id) ON DELETE CASCADE;
ALTER TABLE sf_guard_user_permission ADD CONSTRAINT sf_guard_user_permission_user_id_sf_guard_user_id FOREIGN KEY (user_id) REFERENCES sf_guard_user(id) ON DELETE CASCADE;
ALTER TABLE sf_guard_user_permission ADD CONSTRAINT sf_guard_user_permission_permission_id_sf_guard_permission_id FOREIGN KEY (permission_id) REFERENCES sf_guard_permission(id) ON DELETE CASCADE;
