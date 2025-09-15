# User story 7:
# Database model
1. Khái niệm

Model là đại diện cho bảng trong cơ sở dữ liệu và các bản ghi của bảng đó.

Laravel sử dụng Eloquent ORM để thao tác dữ liệu theo hướng Object-Oriented, không cần viết SQL thủ công.

Quy tắc đặt tên: Model dùng số ít, bảng database dùng số nhiều.

Ví dụ: Model Product → bảng products.
2. Các chức năng chính
2.1 Tạo dữ liệu (Create)
Method	Mô tả
create()	Tạo bản ghi mới và lưu vào database.
firstOrCreate()	Tìm bản ghi theo điều kiện; nếu không tồn tại thì tạo mới.
updateOrCreate()	Nếu bản ghi tồn tại thì update, nếu không tạo mới.
2.2 Đọc dữ liệu (Read)
Method	Mô tả
all()	Lấy tất cả bản ghi.
find($id) / findOrFail($id)	Lấy bản ghi theo ID.
where() / first()	Lọc dữ liệu theo điều kiện.
pluck()	Lấy một cột dữ liệu.
2.3 Cập nhật dữ liệu (Update)
Method	Mô tả
$model->save()	Cập nhật bản ghi sau khi chỉnh sửa thuộc tính.
update()	Cập nhật trực tiếp từ query.
increment() / decrement()	Tăng hoặc giảm giá trị số.
2.4 Xóa dữ liệu (Delete)
Method	Mô tả
$model->delete()	Xóa bản ghi.
destroy($id)	Xóa theo ID.
truncate()	Xóa tất cả bản ghi trong bảng.
2.5 Quan hệ giữa các Model (Relationships)
Loại quan hệ	Mục đích
hasOne	Một bản ghi liên kết với một bản ghi khác.
hasMany	Một bản ghi liên kết với nhiều bản ghi khác.
belongsTo	Ngược lại của hasOne/hasMany.
belongsToMany	Quan hệ nhiều-nhiều với bảng trung gian.
# Code
php artisan make:model Book
# Nhận xét
