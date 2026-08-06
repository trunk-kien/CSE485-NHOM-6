# Hệ thống Quản lý Phòng Lab và Thiết bị 

## 👥 Thông tin sinh viên thực hiện
*   **Nhóm:** 6 (Solo)
*   **Họ và tên:** Nguyễn Trung Kiên
*   **MSV:** 2251172394
*   **Tiến độ hiện tại:** Hoàn thành thiết kế ERD, triển khai 100% Migration cho 7 bảng, thiết lập Data Seeder mẫu.

## 🛠 Công nghệ sử dụng (Tech Stack)
*   **Backend Framework:** Laravel (PHP)
*   **Cơ sở dữ liệu:** MySQL
*   **Quản lý phiên bản:** Git & GitHub

## 🗄 Cấu trúc Cơ sở dữ liệu
Hệ thống bao gồm 7 bảng cốt lõi với các ràng buộc khóa ngoại chặt chẽ:
1.  `users`: Lưu trữ thông tin sinh viên và cán bộ quản lý (phân quyền qua cột `role`).
2.  `labs`: Thông tin các phòng máy thực hành.
3.  `equipment`: Danh mục và số lượng thiết bị thuộc từng phòng lab.
4.  `borrow_requests`: Các yêu cầu mượn thiết bị từ sinh viên (pending, approved, rejected, returned).
5.  `borrow_request_items`: Bảng trung gian (pivot) lưu chi tiết thiết bị được mượn trong mỗi yêu cầu.
6.  `return_records`: Biên bản ghi nhận quá trình trả thiết bị.
7.  `damage_reports`: Báo cáo hư hỏng hoặc mất mát thiết bị (nếu có).

## Tiến độ thực hiện
- [x] Phân tích đề tài
- [x] Thiết kế cơ sở dữ liệu
- [x] Thiết kế ERD
- [x] Xây dựng Migration
- [x] Seeder
