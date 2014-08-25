<?php
/**
* DEFINE THE ERROR MESSAGES FOR THE LOGIN FUNCTION
*/
$config[SYS_LOG_000]['IDRequired'] = 'Vui lòng nhập username';
$config[SYS_LOG_000]['AlphaNumber'] = 'Vui lòng nhập vào ký tự chữ và số';
$config[SYS_LOG_000]['PassRequired'] = 'Vui lòng nhập mật khẩu';
$config[SYS_LOG_000]['SessionTimeout'] = 'Session timeout';
$config[SYS_LOG_000]['MissIdOrPass'] = 'Không tìm thấy dữ liệu phù hợp, vui lòng kiểm tra lại thông tin đăng nhập';

/**
* DEFINE THE ERROR MESSAGES FOR THE COMMON FUNCTION
*/
$config[SYS_COM_000]['NoData'] = 'Không tìm thấy kết quả phù hợp !!!';
$config[SYS_COM_000]['WrongEmail'] = 'Email sai định dạng';
$config[SYS_COM_000]['AddSuccess'] = 'Đăng ký thành công';
$config[SYS_COM_000]['DeleteConfirm'] = 'Bạn có chắc chắn muốn xóa ???';
$config[SYS_COM_000]['UpdateConfirm'] = 'Bạn có chắc chắn muốn cập nhật thay đổi ???';
$config[SYS_COM_000]['PreventDelete'] = 'Không thể xóa account đang dùng để đăng nhập';
$config[SYS_COM_000]['DeleteSuccess'] = 'Xóa thành công';
$config[SYS_COM_000]['SaveSuccess'] = 'Cập nhật thành công';

/**
* DEFINE THE ERROR MESSAGES FOR THE ACCOUNT FUNCTION
*/
$config[SYS_ACC_000]['AdminUserIDRequired'] = 'Vui lòng nhập Admin ID';
$config[SYS_ACC_000]['AdminUserIDMinLength'] = 'Vui lòng nhập Admin ID tối thiểu 6 ký tự';
$config[SYS_ACC_000]['AdminUserIDMaxLength'] = 'Vui lòng nhập Admin ID tối đa 64 ký tự';
$config[SYS_ACC_000]['AdminUserIDAlphaNum'] = 'Admin ID chỉ cho phép nhập chữ và số';
$config[SYS_ACC_000]['AdminNameRequired'] = 'Vui lòng nhập Admin Name';
$config[SYS_ACC_000]['AdminPassRequired'] = 'Vui lòng nhập mật khẩu';
$config[SYS_ACC_000]['AdminPassMinLength'] = 'Mật khẩu có độ dài tối thiểu 6 ký tự';
$config[SYS_ACC_000]['AdminPassMaxLength'] = 'Mật khẩu có độ dài tối đa 64 ký tự';
$config[SYS_ACC_000]['AdminPassAlphaNum'] = 'Mật khẩu chỉ cho phép nhập chữ và số';
//if((pass not empty and cPassword not empty) and (pass == AdminUserID))
$config[SYS_ACC_000]['EqualAdminIdPass'] = 'Mật khẩu không được trùng với Admin ID';
$config[SYS_ACC_000]['ExistingAdminID'] = 'Admin ID đã tồn tại';
$config[SYS_ACC_000]['NotDeleteAdmin'] = 'Không thể tự xóa';
$config[SYS_ACC_000]['EmailRequire'] = 'Vui lòng nhập email';