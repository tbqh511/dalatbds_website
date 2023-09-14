
-- Câu lệnh xóa hết dữ liệu trong cá bảng và reset increments
SET FOREIGN_KEY_CHECKS = 0; -- Tắt kiểm tra khóa ngoại

-- Xóa dữ liệu trong các bảng
TRUNCATE TABLE locations_administrative_regions;
TRUNCATE TABLE locations_administrative_units;
TRUNCATE TABLE locations_provinces;
TRUNCATE TABLE locations_districts;
TRUNCATE TABLE locations_wards;
TRUNCATE TABLE locations_streets;

SET FOREIGN_KEY_CHECKS = 1; -- Bật lại kiểm tra khóa ngoại

-- Reset giá trị tăng tự động (auto-increment) (nếu có)
ALTER TABLE locations_administrative_regions AUTO_INCREMENT = 1;
ALTER TABLE locations_administrative_units AUTO_INCREMENT = 1;
ALTER TABLE locations_provinces AUTO_INCREMENT = 1;
ALTER TABLE locations_districts AUTO_INCREMENT = 1;
ALTER TABLE locations_wards AUTO_INCREMENT = 1;
ALTER TABLE locations_streets AUTO_INCREMENT = 1;
