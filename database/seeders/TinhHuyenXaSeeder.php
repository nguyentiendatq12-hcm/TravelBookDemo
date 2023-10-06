<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use DB;

class TinhHuyenXaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
         DB::table('tinh_huyen_xas')->insert([
            //
            [
                'ten'=>'Thành phố Hà Nội',
                'loai'=>1,
                'parent_id'=>null
            ],
            [
                'ten'=>'Hà Giang',
                'loai'=>1,
                'parent_id'=>null
            ],
            [
            'ten'=>'Cao Bằng',
            'loai'=>1,
            'parent_id'=>null
            ],
            [
            'ten'=>'Bắc Kạn',
            'loai'=>1,
            'parent_id'=>null
            ],
            [
            'ten'=>'Tuyên Quang',
            'loai'=>1,
            'parent_id'=>null
            ],
            [
            'ten'=>'Lào Cai',
            'loai'=>1,
            'parent_id'=>null
            ],
            [
            'ten'=>'Điện Biên',
            'loai'=>1,
            'parent_id'=>null
            ],
            [
            'ten'=>'Lai Châu',
            'loai'=>1,
            'parent_id'=>null
            ],
            [
            'ten'=>'Sơn La',
            'loai'=>1,
            'parent_id'=>null
            ],
            [
            'ten'=>'Yên Bái',
            'loai'=>1,
            'parent_id'=>null
            ],
            [
            'ten'=>'Hoà Bình',
            'loai'=>1,
            'parent_id'=>null
            ],
            [
            'ten'=>'Thái Nguyên',
            'loai'=>1,
            'parent_id'=>null
            ],
            [
            'ten'=>'Lạng Sơn',
            'loai'=>1,
            'parent_id'=>null
            ],
            [
            'ten'=>'Quảng Ninh',
            'loai'=>1,
            'parent_id'=>null
            ],
            [
            'ten'=>'Bắc Giang',
            'loai'=>1,
            'parent_id'=>null
            ],
            [
            'ten'=>'Phú Thọ',
            'loai'=>1,
            'parent_id'=>null
            ],
            [
            'ten'=>'Vĩnh Phúc',
            'loai'=>1,
            'parent_id'=>null
            ],
            [
            'ten'=>'Bắc Ninh',
            'loai'=>1,
            'parent_id'=>null
            ],
            [
            'ten'=>'Hải Dương',
            'loai'=>1,
            'parent_id'=>null
            ],
            [
            'ten'=>'Thành phố Hải Phòng',
            'loai'=>1,
            'parent_id'=>null
            ],
            [
            'ten'=>'Hưng Yên',
            'loai'=>1,
            'parent_id'=>null
            ],
            [
            'ten'=>'Thái Bình',
            'loai'=>1,
            'parent_id'=>null
            ],
            [
            'ten'=>'Hà Nam',
            'loai'=>1,
            'parent_id'=>null
            ],
            [
            'ten'=>'Nam Định',
            'loai'=>1,
            'parent_id'=>null
            ],
            [
            'ten'=>'Ninh Bình',
            'loai'=>1,
            'parent_id'=>null
            ],
            [
            'ten'=>'Thanh Hóa',
            'loai'=>1,
            'parent_id'=>null
            ],
            [
            'ten'=>'Nghệ An',
            'loai'=>1,
            'parent_id'=>null
            ],
            [
            'ten'=>'Hà Tĩnh',
            'loai'=>1,
            'parent_id'=>null
            ],
            [
            'ten'=>'Quảng Bình',
            'loai'=>1,
            'parent_id'=>null
            ],
            [
            'ten'=>'Quảng Trị',
            'loai'=>1,
            'parent_id'=>null
            ],
            [
            'ten'=>'Thừa Thiên Huế',
            'loai'=>1,
            'parent_id'=>null
            ],
            [
            'ten'=>'Thành phố Đà Nẵng',
            'loai'=>1,
            'parent_id'=>null
            ],
            [
            'ten'=>'Quảng Nam',
            'loai'=>1,
            'parent_id'=>null
            ],
            [
            'ten'=>'Quảng Ngãi',
            'loai'=>1,
            'parent_id'=>null
            ],
            [
            'ten'=>'Bình Định',
            'loai'=>1,
            'parent_id'=>null
            ],
            [
            'ten'=>'Phú Yên',
            'loai'=>1,
            'parent_id'=>null
            ],
            [
            'ten'=>'Khánh Hòa',
            'loai'=>1,
            'parent_id'=>null
            ],
            [
            'ten'=>'Ninh Thuận',
            'loai'=>1,
            'parent_id'=>null
            ],
            [
            'ten'=>'Bình Thuận',
            'loai'=>1,
            'parent_id'=>null
            ],
            [
            'ten'=>'Kon Tum',
            'loai'=>1,
            'parent_id'=>null
            ],
            [
            'ten'=>'Gia Lai',
            'loai'=>1,
            'parent_id'=>null
            ],
            [
            'ten'=>'Đắk Lắk',
            'loai'=>1,
            'parent_id'=>null
            ],
            [
            'ten'=>'Đắk Nông',
            'loai'=>1,
            'parent_id'=>null
            ],
            [
            'ten'=>'Lâm Đồng',
            'loai'=>1,
            'parent_id'=>null
            ],
            [
            'ten'=>'Bình Phước',
            'loai'=>1,
            'parent_id'=>null
            ],
            [
            'ten'=>'Tây Ninh',
            'loai'=>1,
            'parent_id'=>null
            ],
            [
            'ten'=>'Bình Dương',
            'loai'=>1,
            'parent_id'=>null
            ],
            [
            'ten'=>'Đồng Nai',
            'loai'=>1,
            'parent_id'=>null
            ],
            [
            'ten'=>'Bà Rịa - Vũng Tàu',
            'loai'=>1,
            'parent_id'=>null
            ],
            [
            'ten'=>'Thành phố Hồ Chí Minh',
            'loai'=>1,
            'parent_id'=>null
            ],
            [
            'ten'=>'Long An',
            'loai'=>1,
            'parent_id'=>null
            ],
            [
            'ten'=>'Tiền Giang',
            'loai'=>1,
            'parent_id'=>null
            ],
            [
            'ten'=>'Bến Tre',
            'loai'=>1,
            'parent_id'=>null
            ],
            [
            'ten'=>'Trà Vinh',
            'loai'=>1,
            'parent_id'=>null
            ],
            [
            'ten'=>'Vĩnh Long',
            'loai'=>1,
            'parent_id'=>null
            ],
            [
            'ten'=>'Đồng Tháp',
            'loai'=>1,
            'parent_id'=>null
            ],
            [
            'ten'=>'An Giang',
            'loai'=>1,
            'parent_id'=>null
            ],
            [
            'ten'=>'Kiên Giang',
            'loai'=>1,
            'parent_id'=>null
            ],
            [
            'ten'=>'Thành phố Cần Thơ',
            'loai'=>1,
            'parent_id'=>null
            ],
            [
            'ten'=>'Hậu Giang',
            'loai'=>1,
            'parent_id'=>null
            ],
            [
            'ten'=>'Sóc Trăng',
            'loai'=>1,
            'parent_id'=>null
            ],
            [
            'ten'=>'Bạc Liêu',
            'loai'=>1,
            'parent_id'=>null
            ],
            [
            'ten'=>'Cà Mau',
            'loai'=>1,
            'parent_id'=>null
            ],
            // Huyện
            [
            'ten'=> 'Quận Ba Đình',
            'loai'=> 2,
            'parent_id'=> 1
           ],
            [
            'ten'=> 'Quận Hoàn Kiếm',
            'loai'=> 2,
            'parent_id'=> 1
           ],
            [
            'ten'=> 'Quận Tây Hồ',
            'loai'=> 2,
            'parent_id'=> 1
           ],
            [
            'ten'=> 'Quận Long Biên',
            'loai'=> 2,
            'parent_id'=> 1
           ],
            [
            'ten'=> 'Quận Cầu Giấy',
            'loai'=> 2,
            'parent_id'=> 1
           ],
            [
            'ten'=> 'Quận Đống Đa',
            'loai'=> 2,
            'parent_id'=> 1
           ],
            [
            'ten'=> 'Quận Hai Bà Trưng',
            'loai'=> 2,
            'parent_id'=> 1
           ],
            [
            'ten'=> 'Quận Hoàng Mai',
            'loai'=> 2,
            'parent_id'=> 1
           ],
            [
            'ten'=> 'Quận Thanh Xuân',
            'loai'=> 2,
            'parent_id'=> 1
           ],
            [
            'ten'=> 'Sóc Sơn',
            'loai'=> 2,
            'parent_id'=> 1
           ],
            [
            'ten'=> 'Đông Anh',
            'loai'=> 2,
            'parent_id'=> 1
           ],
            [
            'ten'=> 'Gia Lâm',
            'loai'=> 2,
            'parent_id'=> 1
           ],
            [
            'ten'=> 'Quận Nam Từ Liêm',
            'loai'=> 2,
            'parent_id'=> 1
           ],
            [
            'ten'=> 'Thanh Trì',
            'loai'=> 2,
            'parent_id'=> 1
           ],
            [
            'ten'=> 'Quận Bắc Từ Liêm',
            'loai'=> 2,
            'parent_id'=> 1
           ],
            [
            'ten'=> 'Mê Linh',
            'loai'=> 2,
            'parent_id'=> 1
           ],
            [
            'ten'=> 'Quận Hà Đông',
            'loai'=> 2,
            'parent_id'=> 1
           ],
            [
            'ten'=> 'Thị xã Sơn Tây',
            'loai'=> 2,
            'parent_id'=> 1
           ],
            [
            'ten'=> 'Ba Vì',
            'loai'=> 2,
            'parent_id'=> 1
           ],
            [
            'ten'=> 'Phúc Thọ',
            'loai'=> 2,
            'parent_id'=> 1
           ],
            [
            'ten'=> 'Đan Phượng',
            'loai'=> 2,
            'parent_id'=> 1
           ],
            [
            'ten'=> 'Hoài Đức',
            'loai'=> 2,
            'parent_id'=> 1
           ],
            [
            'ten'=> 'Quốc Oai',
            'loai'=> 2,
            'parent_id'=> 1
           ],
            [
            'ten'=> 'Thạch Thất',
            'loai'=> 2,
            'parent_id'=> 1
           ],
            [
            'ten'=> 'Chương Mỹ',
            'loai'=> 2,
            'parent_id'=> 1
           ],
            [
            'ten'=> 'Thanh Oai',
            'loai'=> 2,
            'parent_id'=> 1
           ],
            [
            'ten'=> 'Thường Tín',
            'loai'=> 2,
            'parent_id'=> 1
           ],
            [
            'ten'=> 'Phú Xuyên',
            'loai'=> 2,
            'parent_id'=> 1
           ],
            [
            'ten'=> 'Ứng Hòa',
            'loai'=> 2,
            'parent_id'=> 1
           ],
            [
            'ten'=> 'Mỹ Đức',
            'loai'=> 2,
            'parent_id'=> 1
           ],
            [
            'ten'=> 'Thành phố Hà Giang',
            'loai'=> 2,
            'parent_id'=> 2
           ],
            [
            'ten'=> 'Đồng Văn',
            'loai'=> 2,
            'parent_id'=> 2
           ],
            [
            'ten'=> 'Mèo Vạc',
            'loai'=> 2,
            'parent_id'=> 2
           ],
            [
            'ten'=> 'Yên Minh',
            'loai'=> 2,
            'parent_id'=> 2
           ],
            [
            'ten'=> 'Quản Bạ',
            'loai'=> 2,
            'parent_id'=> 2
           ],
            [
            'ten'=> 'Vị Xuyên',
            'loai'=> 2,
            'parent_id'=> 2
           ],
            [
            'ten'=> 'Bắc Mê',
            'loai'=> 2,
            'parent_id'=> 2
           ],
            [
            'ten'=> 'Hoàng Su Phì',
            'loai'=> 2,
            'parent_id'=> 2
           ],
            [
            'ten'=> 'Xín Mần',
            'loai'=> 2,
            'parent_id'=> 2
           ],
            [
            'ten'=> 'Bắc Quang',
            'loai'=> 2,
            'parent_id'=> 2
           ],
            [
            'ten'=> 'Quang Bình',
            'loai'=> 2,
            'parent_id'=> 2
           ],
            [
            'ten'=> 'Thành phố Cao Bằng',
            'loai'=> 2,
            'parent_id'=> 3
           ],
            [
            'ten'=> 'Bảo Lâm',
            'loai'=> 2,
            'parent_id'=> 3
           ],
            [
            'ten'=> 'Bảo Lạc',
            'loai'=> 2,
            'parent_id'=> 3
           ],
            [
            'ten'=> 'Hà Quảng',
            'loai'=> 2,
            'parent_id'=> 3
           ],
            [
            'ten'=> 'Trùng Khánh',
            'loai'=> 2,
            'parent_id'=> 3
           ],
            [
            'ten'=> 'Hạ Lang',
            'loai'=> 2,
            'parent_id'=> 3
           ],
            [
            'ten'=> 'Quảng Hòa',
            'loai'=> 2,
            'parent_id'=> 3
           ],
            [
            'ten'=> 'Hoà An',
            'loai'=> 2,
            'parent_id'=> 3
           ],
            [
            'ten'=> 'Nguyên Bình',
            'loai'=> 2,
            'parent_id'=> 3
           ],
            [
            'ten'=> 'Thạch An',
            'loai'=> 2,
            'parent_id'=> 3
           ],
            [
            'ten'=> 'Thành Phố Bắc Kạn',
            'loai'=> 2,
            'parent_id'=> 4
           ],
            [
            'ten'=> 'Pác Nặm',
            'loai'=> 2,
            'parent_id'=> 4
           ],
            [
            'ten'=> 'Ba Bể',
            'loai'=> 2,
            'parent_id'=> 4
           ],
            [
            'ten'=> 'Ngân Sơn',
            'loai'=> 2,
            'parent_id'=> 4
           ],
            [
            'ten'=> 'Bạch Thông',
            'loai'=> 2,
            'parent_id'=> 4
           ],
            [
            'ten'=> 'Chợ Đồn',
            'loai'=> 2,
            'parent_id'=> 4
           ],
            [
            'ten'=> 'Chợ Mới',
            'loai'=> 2,
            'parent_id'=> 4
           ],
            [
            'ten'=> 'Na Rì',
            'loai'=> 2,
            'parent_id'=> 4
           ],
            [
            'ten'=> 'Thành phố Tuyên Quang',
            'loai'=> 2,
            'parent_id'=> 5
           ],
            [
            'ten'=> 'Lâm Bình',
            'loai'=> 2,
            'parent_id'=> 5
           ],
            [
            'ten'=> 'Na Hang',
            'loai'=> 2,
            'parent_id'=> 5
           ],
            [
            'ten'=> 'Chiêm Hóa',
            'loai'=> 2,
            'parent_id'=> 5
           ],
            [
            'ten'=> 'Hàm Yên',
            'loai'=> 2,
            'parent_id'=> 5
           ],
            [
            'ten'=> 'Yên Sơn',
            'loai'=> 2,
            'parent_id'=> 5
           ],
            [
            'ten'=> 'Sơn Dương',
            'loai'=> 2,
            'parent_id'=> 5
           ],
            [
            'ten'=> 'Thành phố Lào Cai',
            'loai'=> 2,
            'parent_id'=> 6
           ],
            [
            'ten'=> 'Bát Xát',
            'loai'=> 2,
            'parent_id'=> 6
           ],
            [
            'ten'=> 'Mường Khương',
            'loai'=> 2,
            'parent_id'=> 6
           ],
            [
            'ten'=> 'Si Ma Cai',
            'loai'=> 2,
            'parent_id'=> 6
           ],
            [
            'ten'=> 'Bắc Hà',
            'loai'=> 2,
            'parent_id'=> 6
           ],
            [
            'ten'=> 'Bảo Thắng',
            'loai'=> 2,
            'parent_id'=> 6
           ],
            [
            'ten'=> 'Bảo Yên',
            'loai'=> 2,
            'parent_id'=> 6
           ],
            [
            'ten'=> 'Thị xã Sa Pa',
            'loai'=> 2,
            'parent_id'=> 6
           ],
            [
            'ten'=> 'Văn Bàn',
            'loai'=> 2,
            'parent_id'=> 6
           ],
            [
            'ten'=> 'Thành phố Điện Biên Phủ',
            'loai'=> 2,
            'parent_id'=> 7
           ],
            [
            'ten'=> 'Thị Xã Mường Lay',
            'loai'=> 2,
            'parent_id'=> 7
           ],
            [
            'ten'=> 'Mường Nhé',
            'loai'=> 2,
            'parent_id'=> 7
           ],
            [
            'ten'=> 'Mường Chà',
            'loai'=> 2,
            'parent_id'=> 7
           ],
            [
            'ten'=> 'Tủa Chùa',
            'loai'=> 2,
            'parent_id'=> 7
           ],
            [
            'ten'=> 'Tuần Giáo',
            'loai'=> 2,
            'parent_id'=> 7
           ],
            [
            'ten'=> 'Điện Biên',
            'loai'=> 2,
            'parent_id'=> 7
           ],
            [
            'ten'=> 'Điện Biên Đông',
            'loai'=> 2,
            'parent_id'=> 7
           ],
            [
            'ten'=> 'Mường Ảng',
            'loai'=> 2,
            'parent_id'=> 7
           ],
            [
            'ten'=> 'Nậm Pồ',
            'loai'=> 2,
            'parent_id'=> 7
           ],
            [
            'ten'=> 'Thành phố Lai Châu',
            'loai'=> 2,
            'parent_id'=> 8
           ],
            [
            'ten'=> 'Tam Đường',
            'loai'=> 2,
            'parent_id'=> 8
           ],
            [
            'ten'=> 'Mường Tè',
            'loai'=> 2,
            'parent_id'=> 8
           ],
            [
            'ten'=> 'Sìn Hồ',
            'loai'=> 2,
            'parent_id'=> 8
           ],
            [
            'ten'=> 'Phong Thổ',
            'loai'=> 2,
            'parent_id'=> 8
           ],
            [
            'ten'=> 'Than Uyên',
            'loai'=> 2,
            'parent_id'=> 8
           ],
            [
            'ten'=> 'Tân Uyên',
            'loai'=> 2,
            'parent_id'=> 8
           ],
            [
            'ten'=> 'Nậm Nhùn',
            'loai'=> 2,
            'parent_id'=> 8
           ],
            [
            'ten'=> 'Thành phố Sơn La',
            'loai'=> 2,
            'parent_id'=> 9
           ],
            [
            'ten'=> 'Quỳnh Nhai',
            'loai'=> 2,
            'parent_id'=> 9
           ],
            [
            'ten'=> 'Thuận Châu',
            'loai'=> 2,
            'parent_id'=> 9
           ],
            [
            'ten'=> 'Mường La',
            'loai'=> 2,
            'parent_id'=> 9
           ],
            [
            'ten'=> 'Bắc Yên',
            'loai'=> 2,
            'parent_id'=> 9
           ],
            [
            'ten'=> 'Phù Yên',
            'loai'=> 2,
            'parent_id'=> 9
           ],
            [
            'ten'=> 'Mộc Châu',
            'loai'=> 2,
            'parent_id'=> 9
           ],
            [
            'ten'=> 'Yên Châu',
            'loai'=> 2,
            'parent_id'=> 9
           ],
            [
            'ten'=> 'Mai Sơn',
            'loai'=> 2,
            'parent_id'=> 9
           ],
            [
            'ten'=> 'Sông Mã',
            'loai'=> 2,
            'parent_id'=> 9
           ],
            [
            'ten'=> 'Sốp Cộp',
            'loai'=> 2,
            'parent_id'=> 9
           ],
            [
            'ten'=> 'Vân Hồ',
            'loai'=> 2,
            'parent_id'=> 9
           ],
            [
            'ten'=> 'Thành phố Yên Bái',
            'loai'=> 2,
            'parent_id'=> 10
           ],
            [
            'ten'=> 'Thị xã Nghĩa Lộ',
            'loai'=> 2,
            'parent_id'=> 10
           ],
            [
            'ten'=> 'Lục Yên',
            'loai'=> 2,
            'parent_id'=> 10
           ],
            [
            'ten'=> 'Văn Yên',
            'loai'=> 2,
            'parent_id'=> 10
           ],
            [
            'ten'=> 'Mù Căng Chải',
            'loai'=> 2,
            'parent_id'=> 10
           ],
            [
            'ten'=> 'Trấn Yên',
            'loai'=> 2,
            'parent_id'=> 10
           ],
            [
            'ten'=> 'Trạm Tấu',
            'loai'=> 2,
            'parent_id'=> 10
           ],
            [
            'ten'=> 'Văn Chấn',
            'loai'=> 2,
            'parent_id'=> 10
           ],
            [
            'ten'=> 'Yên Bình',
            'loai'=> 2,
            'parent_id'=> 10
           ],
            [
            'ten'=> 'Thành phố Hòa Bình',
            'loai'=> 2,
            'parent_id'=> 11
           ],
            [
            'ten'=> 'Đà Bắc',
            'loai'=> 2,
            'parent_id'=> 11
           ],
            [
            'ten'=> 'Lương Sơn',
            'loai'=> 2,
            'parent_id'=> 11
           ],
            [
            'ten'=> 'Kim Bôi',
            'loai'=> 2,
            'parent_id'=> 11
           ],
            [
            'ten'=> 'Cao Phong',
            'loai'=> 2,
            'parent_id'=> 11
           ],
            [
            'ten'=> 'Tân Lạc',
            'loai'=> 2,
            'parent_id'=> 11
           ],
            [
            'ten'=> 'Mai Châu',
            'loai'=> 2,
            'parent_id'=> 11
           ],
            [
            'ten'=> 'Lạc Sơn',
            'loai'=> 2,
            'parent_id'=> 11
           ],
            [
            'ten'=> 'Yên Thủy',
            'loai'=> 2,
            'parent_id'=> 11
           ],
            [
            'ten'=> 'Lạc Thủy',
            'loai'=> 2,
            'parent_id'=> 11
           ],
            [
            'ten'=> 'Thành phố Thái Nguyên',
            'loai'=> 2,
            'parent_id'=> 12
           ],
            [
            'ten'=> 'Thành phố Sông Công',
            'loai'=> 2,
            'parent_id'=> 12
           ],
            [
            'ten'=> 'Định Hóa',
            'loai'=> 2,
            'parent_id'=> 12
           ],
            [
            'ten'=> 'Phú Lương',
            'loai'=> 2,
            'parent_id'=> 12
           ],
            [
            'ten'=> 'Đồng Hỷ',
            'loai'=> 2,
            'parent_id'=> 12
           ],
            [
            'ten'=> 'Võ Nhai',
            'loai'=> 2,
            'parent_id'=> 12
           ],
            [
            'ten'=> 'Đại Từ',
            'loai'=> 2,
            'parent_id'=> 12
           ],
            [
            'ten'=> 'Thành phố Phổ Yên',
            'loai'=> 2,
            'parent_id'=> 12
           ],
            [
            'ten'=> 'Phú Bình',
            'loai'=> 2,
            'parent_id'=> 12
           ],
            [
            'ten'=> 'Thành phố Lạng Sơn',
            'loai'=> 2,
            'parent_id'=> 13
           ],
            [
            'ten'=> 'Tràng Định',
            'loai'=> 2,
            'parent_id'=> 13
           ],
            [
            'ten'=> 'Bình Gia',
            'loai'=> 2,
            'parent_id'=> 13
           ],
            [
            'ten'=> 'Văn Lãng',
            'loai'=> 2,
            'parent_id'=> 13
           ],
            [
            'ten'=> 'Cao Lộc',
            'loai'=> 2,
            'parent_id'=> 13
           ],
            [
            'ten'=> 'Văn Quan',
            'loai'=> 2,
            'parent_id'=> 13
           ],
            [
            'ten'=> 'Bắc Sơn',
            'loai'=> 2,
            'parent_id'=> 13
           ],
            [
            'ten'=> 'Hữu Lũng',
            'loai'=> 2,
            'parent_id'=> 13
           ],
            [
            'ten'=> 'Chi Lăng',
            'loai'=> 2,
            'parent_id'=> 13
           ],
            [
            'ten'=> 'Lộc Bình',
            'loai'=> 2,
            'parent_id'=> 13
           ],
            [
            'ten'=> 'Đình Lập',
            'loai'=> 2,
            'parent_id'=> 13
           ],
            [
            'ten'=> 'Thành phố Hạ Long',
            'loai'=> 2,
            'parent_id'=> 14
           ],
            [
            'ten'=> 'Thành phố Móng Cái',
            'loai'=> 2,
            'parent_id'=> 14
           ],
            [
            'ten'=> 'Thành phố Cẩm Phả',
            'loai'=> 2,
            'parent_id'=> 14
           ],
            [
            'ten'=> 'Thành phố Uông Bí',
            'loai'=> 2,
            'parent_id'=> 14
           ],
            [
            'ten'=> 'Bình Liêu',
            'loai'=> 2,
            'parent_id'=> 14
           ],
            [
            'ten'=> 'Tiên Yên',
            'loai'=> 2,
            'parent_id'=> 14
           ],
            [
            'ten'=> 'Đầm Hà',
            'loai'=> 2,
            'parent_id'=> 14
           ],
            [
            'ten'=> 'Hải Hà',
            'loai'=> 2,
            'parent_id'=> 14
           ],
            [
            'ten'=> 'Ba Chẽ',
            'loai'=> 2,
            'parent_id'=> 14
           ],
            [
            'ten'=> 'Vân Đồn',
            'loai'=> 2,
            'parent_id'=> 14
           ],
            [
            'ten'=> 'Thị xã Đông Triều',
            'loai'=> 2,
            'parent_id'=> 14
           ],
            [
            'ten'=> 'Thị xã Quảng Yên',
            'loai'=> 2,
            'parent_id'=> 14
           ],
            [
            'ten'=> 'Cô Tô',
            'loai'=> 2,
            'parent_id'=> 14
           ],
            [
            'ten'=> 'Thành phố Bắc Giang',
            'loai'=> 2,
            'parent_id'=> 15
           ],
            [
            'ten'=> 'Yên Thế',
            'loai'=> 2,
            'parent_id'=> 15
           ],
            [
            'ten'=> 'Tân Yên',
            'loai'=> 2,
            'parent_id'=> 15
           ],
            [
            'ten'=> 'Lạng Giang',
            'loai'=> 2,
            'parent_id'=> 15
           ],
            [
            'ten'=> 'Lục Nam',
            'loai'=> 2,
            'parent_id'=> 15
           ],
            [
            'ten'=> 'Lục Ngạn',
            'loai'=> 2,
            'parent_id'=> 15
           ],
            [
            'ten'=> 'Sơn Động',
            'loai'=> 2,
            'parent_id'=> 15
           ],
            [
            'ten'=> 'Yên Dũng',
            'loai'=> 2,
            'parent_id'=> 15
           ],
            [
            'ten'=> 'Việt Yên',
            'loai'=> 2,
            'parent_id'=> 15
           ],
            [
            'ten'=> 'Hiệp Hòa',
            'loai'=> 2,
            'parent_id'=> 15
           ],
            [
            'ten'=> 'Thành phố Việt Trì',
            'loai'=> 2,
            'parent_id'=> 16
           ],
            [
            'ten'=> 'Thị xã Phú Thọ',
            'loai'=> 2,
            'parent_id'=> 16
           ],
            [
            'ten'=> 'Đoan Hùng',
            'loai'=> 2,
            'parent_id'=> 16
           ],
            [
            'ten'=> 'Hạ Hoà',
            'loai'=> 2,
            'parent_id'=> 16
           ],
            [
            'ten'=> 'Thanh Ba',
            'loai'=> 2,
            'parent_id'=> 16
           ],
            [
            'ten'=> 'Phù Ninh',
            'loai'=> 2,
            'parent_id'=> 16
           ],
            [
            'ten'=> 'Yên Lập',
            'loai'=> 2,
            'parent_id'=> 16
           ],
            [
            'ten'=> 'Cẩm Khê',
            'loai'=> 2,
            'parent_id'=> 16
           ],
            [
            'ten'=> 'Tam Nông',
            'loai'=> 2,
            'parent_id'=> 16
           ],
            [
            'ten'=> 'Lâm Thao',
            'loai'=> 2,
            'parent_id'=> 16
           ],
            [
            'ten'=> 'Thanh Sơn',
            'loai'=> 2,
            'parent_id'=> 16
           ],
            [
            'ten'=> 'Thanh Thuỷ',
            'loai'=> 2,
            'parent_id'=> 16
           ],
            [
            'ten'=> 'Tân Sơn',
            'loai'=> 2,
            'parent_id'=> 16
           ],
            [
            'ten'=> 'Thành phố Vĩnh Yên',
            'loai'=> 2,
            'parent_id'=> 17
           ],
            [
            'ten'=> 'Thành phố Phúc Yên',
            'loai'=> 2,
            'parent_id'=> 17
           ],
            [
            'ten'=> 'Lập Thạch',
            'loai'=> 2,
            'parent_id'=> 17
           ],
            [
            'ten'=> 'Tam Dương',
            'loai'=> 2,
            'parent_id'=> 17
           ],
            [
            'ten'=> 'Tam Đảo',
            'loai'=> 2,
            'parent_id'=> 17
           ],
            [
            'ten'=> 'Bình Xuyên',
            'loai'=> 2,
            'parent_id'=> 17
           ],
            [
            'ten'=> 'Yên Lạc',
            'loai'=> 2,
            'parent_id'=> 17
           ],
            [
            'ten'=> 'Vĩnh Tường',
            'loai'=> 2,
            'parent_id'=> 17
           ],
            [
            'ten'=> 'Sông Lô',
            'loai'=> 2,
            'parent_id'=> 17
           ],
            [
            'ten'=> 'Thành phố Bắc Ninh',
            'loai'=> 2,
            'parent_id'=> 18
           ],
            [
            'ten'=> 'Yên Phong',
            'loai'=> 2,
            'parent_id'=> 18
           ],
            [
            'ten'=> 'Quế Võ',
            'loai'=> 2,
            'parent_id'=> 18
           ],
            [
            'ten'=> 'Tiên Du',
            'loai'=> 2,
            'parent_id'=> 18
           ],
            [
            'ten'=> 'Thành phố Từ Sơn',
            'loai'=> 2,
            'parent_id'=> 18
           ],
            [
            'ten'=> 'Thuận Thành',
            'loai'=> 2,
            'parent_id'=> 18
           ],
            [
            'ten'=> 'Gia Bình',
            'loai'=> 2,
            'parent_id'=> 18
           ],
            [
            'ten'=> 'Lương Tài',
            'loai'=> 2,
            'parent_id'=> 18
           ],
            [
            'ten'=> 'Thành phố Hải Dương',
            'loai'=> 2,
            'parent_id'=> 19
           ],
            [
            'ten'=> 'Thành phố Chí Linh',
            'loai'=> 2,
            'parent_id'=> 19
           ],
            [
            'ten'=> 'Nam Sách',
            'loai'=> 2,
            'parent_id'=> 19
           ],
            [
            'ten'=> 'Thị xã Kinh Môn',
            'loai'=> 2,
            'parent_id'=> 19
           ],
            [
            'ten'=> 'Kim Thành',
            'loai'=> 2,
            'parent_id'=> 19
           ],
            [
            'ten'=> 'Thanh Hà',
            'loai'=> 2,
            'parent_id'=> 19
           ],
            [
            'ten'=> 'Cẩm Giàng',
            'loai'=> 2,
            'parent_id'=> 19
           ],
            [
            'ten'=> 'Bình Giang',
            'loai'=> 2,
            'parent_id'=> 19
           ],
            [
            'ten'=> 'Gia Lộc',
            'loai'=> 2,
            'parent_id'=> 19
           ],
            [
            'ten'=> 'Tứ Kỳ',
            'loai'=> 2,
            'parent_id'=> 19
           ],
            [
            'ten'=> 'Ninh Giang',
            'loai'=> 2,
            'parent_id'=> 19
           ],
            [
            'ten'=> 'Thanh Miện',
            'loai'=> 2,
            'parent_id'=> 19
           ],
            [
            'ten'=> 'Quận Hồng Bàng',
            'loai'=> 2,
            'parent_id'=> 20
           ],
            [
            'ten'=> 'Quận Ngô Quyền',
            'loai'=> 2,
            'parent_id'=> 20
           ],
            [
            'ten'=> 'Quận Lê Chân',
            'loai'=> 2,
            'parent_id'=> 20
           ],
            [
            'ten'=> 'Quận Hải An',
            'loai'=> 2,
            'parent_id'=> 20
           ],
            [
            'ten'=> 'Quận Kiến An',
            'loai'=> 2,
            'parent_id'=> 20
           ],
            [
            'ten'=> 'Quận Đồ Sơn',
            'loai'=> 2,
            'parent_id'=> 20
           ],
            [
            'ten'=> 'Quận Dương Kinh',
            'loai'=> 2,
            'parent_id'=> 20
           ],
            [
            'ten'=> 'Thuỷ Nguyên',
            'loai'=> 2,
            'parent_id'=> 20
           ],
            [
            'ten'=> 'An Dương',
            'loai'=> 2,
            'parent_id'=> 20
           ],
            [
            'ten'=> 'An Lão',
            'loai'=> 2,
            'parent_id'=> 20
           ],
            [
            'ten'=> 'Kiến Thuỵ',
            'loai'=> 2,
            'parent_id'=> 20
           ],
            [
            'ten'=> 'Tiên Lãng',
            'loai'=> 2,
            'parent_id'=> 20
           ],
            [
            'ten'=> 'Vĩnh Bảo',
            'loai'=> 2,
            'parent_id'=> 20
           ],
            [
            'ten'=> 'Cát Hải',
            'loai'=> 2,
            'parent_id'=> 20
           ],
            [
            'ten'=> 'Bạch Long Vĩ',
            'loai'=> 2,
            'parent_id'=> 20
           ],
            [
            'ten'=> 'Thành phố Hưng Yên',
            'loai'=> 2,
            'parent_id'=> 21
           ],
            [
            'ten'=> 'Văn Lâm',
            'loai'=> 2,
            'parent_id'=> 21
           ],
            [
            'ten'=> 'Văn Giang',
            'loai'=> 2,
            'parent_id'=> 21
           ],
            [
            'ten'=> 'Yên Mỹ',
            'loai'=> 2,
            'parent_id'=> 21
           ],
            [
            'ten'=> 'Thị xã Mỹ Hào',
            'loai'=> 2,
            'parent_id'=> 21
           ],
            [
            'ten'=> 'Ân Thi',
            'loai'=> 2,
            'parent_id'=> 21
           ],
            [
            'ten'=> 'Khoái Châu',
            'loai'=> 2,
            'parent_id'=> 21
           ],
            [
            'ten'=> 'Kim Động',
            'loai'=> 2,
            'parent_id'=> 21
           ],
            [
            'ten'=> 'Tiên Lữ',
            'loai'=> 2,
            'parent_id'=> 21
           ],
            [
            'ten'=> 'Phù Cừ',
            'loai'=> 2,
            'parent_id'=> 21
           ],
            [
            'ten'=> 'Thành phố Thái Bình',
            'loai'=> 2,
            'parent_id'=> 22
           ],
            [
            'ten'=> 'Quỳnh Phụ',
            'loai'=> 2,
            'parent_id'=> 22
           ],
            [
            'ten'=> 'Hưng Hà',
            'loai'=> 2,
            'parent_id'=> 22
           ],
            [
            'ten'=> 'Đông Hưng',
            'loai'=> 2,
            'parent_id'=> 22
           ],
            [
            'ten'=> 'Thái Thụy',
            'loai'=> 2,
            'parent_id'=> 22
           ],
            [
            'ten'=> 'Tiền Hải',
            'loai'=> 2,
            'parent_id'=> 22
           ],
            [
            'ten'=> 'Kiến Xương',
            'loai'=> 2,
            'parent_id'=> 22
           ],
            [
            'ten'=> 'Vũ Thư',
            'loai'=> 2,
            'parent_id'=> 22
           ],
            [
            'ten'=> 'Thành phố Phủ Lý',
            'loai'=> 2,
            'parent_id'=> 23
           ],
            [
            'ten'=> 'Thị xã Duy Tiên',
            'loai'=> 2,
            'parent_id'=> 23
           ],
            [
            'ten'=> 'Kim Bảng',
            'loai'=> 2,
            'parent_id'=> 23
           ],
            [
            'ten'=> 'Thanh Liêm',
            'loai'=> 2,
            'parent_id'=> 23
           ],
            [
            'ten'=> 'Bình Lục',
            'loai'=> 2,
            'parent_id'=> 23
           ],
            [
            'ten'=> 'Lý Nhân',
            'loai'=> 2,
            'parent_id'=> 23
           ],
            [
            'ten'=> 'Thành phố Nam Định',
            'loai'=> 2,
            'parent_id'=> 24
           ],
            [
            'ten'=> 'Mỹ Lộc',
            'loai'=> 2,
            'parent_id'=> 24
           ],
            [
            'ten'=> 'Vụ Bản',
            'loai'=> 2,
            'parent_id'=> 24
           ],
            [
            'ten'=> 'Ý Yên',
            'loai'=> 2,
            'parent_id'=> 24
           ],
            [
            'ten'=> 'Nghĩa Hưng',
            'loai'=> 2,
            'parent_id'=> 24
           ],
            [
            'ten'=> 'Nam Trực',
            'loai'=> 2,
            'parent_id'=> 24
           ],
            [
            'ten'=> 'Trực Ninh',
            'loai'=> 2,
            'parent_id'=> 24
           ],
            [
            'ten'=> 'Xuân Trường',
            'loai'=> 2,
            'parent_id'=> 24
           ],
            [
            'ten'=> 'Giao Thủy',
            'loai'=> 2,
            'parent_id'=> 24
           ],
            [
            'ten'=> 'Hải Hậu',
            'loai'=> 2,
            'parent_id'=> 24
           ],
            [
            'ten'=> 'Thành phố Ninh Bình',
            'loai'=> 2,
            'parent_id'=> 25
           ],
            [
            'ten'=> 'Thành phố Tam Điệp',
            'loai'=> 2,
            'parent_id'=> 25
           ],
            [
            'ten'=> 'Nho Quan',
            'loai'=> 2,
            'parent_id'=> 25
           ],
            [
            'ten'=> 'Gia Viễn',
            'loai'=> 2,
            'parent_id'=> 25
           ],
            [
            'ten'=> 'Hoa Lư',
            'loai'=> 2,
            'parent_id'=> 25
           ],
            [
            'ten'=> 'Yên Khánh',
            'loai'=> 2,
            'parent_id'=> 25
           ],
            [
            'ten'=> 'Kim Sơn',
            'loai'=> 2,
            'parent_id'=> 25
           ],
            [
            'ten'=> 'Yên Mô',
            'loai'=> 2,
            'parent_id'=> 25
           ],
            [
            'ten'=> 'Thành phố Thanh Hóa',
            'loai'=> 2,
            'parent_id'=> 26
           ],
            [
            'ten'=> 'Thị xã Bỉm Sơn',
            'loai'=> 2,
            'parent_id'=> 26
           ],
            [
            'ten'=> 'Thành phố Sầm Sơn',
            'loai'=> 2,
            'parent_id'=> 26
           ],
            [
            'ten'=> 'Mường Lát',
            'loai'=> 2,
            'parent_id'=> 26
           ],
            [
            'ten'=> 'Quan Hóa',
            'loai'=> 2,
            'parent_id'=> 26
           ],
            [
            'ten'=> 'Bá Thước',
            'loai'=> 2,
            'parent_id'=> 26
           ],
            [
            'ten'=> 'Quan Sơn',
            'loai'=> 2,
            'parent_id'=> 26
           ],
            [
            'ten'=> 'Lang Chánh',
            'loai'=> 2,
            'parent_id'=> 26
           ],
            [
            'ten'=> 'Ngọc Lặc',
            'loai'=> 2,
            'parent_id'=> 26
           ],
            [
            'ten'=> 'Cẩm Thủy',
            'loai'=> 2,
            'parent_id'=> 26
           ],
            [
            'ten'=> 'Thạch Thành',
            'loai'=> 2,
            'parent_id'=> 26
           ],
            [
            'ten'=> 'Hà Trung',
            'loai'=> 2,
            'parent_id'=> 26
           ],
            [
            'ten'=> 'Vĩnh Lộc',
            'loai'=> 2,
            'parent_id'=> 26
           ],
            [
            'ten'=> 'Yên Định',
            'loai'=> 2,
            'parent_id'=> 26
           ],
            [
            'ten'=> 'Thọ Xuân',
            'loai'=> 2,
            'parent_id'=> 26
           ],
            [
            'ten'=> 'Thường Xuân',
            'loai'=> 2,
            'parent_id'=> 26
           ],
            [
            'ten'=> 'Triệu Sơn',
            'loai'=> 2,
            'parent_id'=> 26
           ],
            [
            'ten'=> 'Thiệu Hóa',
            'loai'=> 2,
            'parent_id'=> 26
           ],
            [
            'ten'=> 'Hoằng Hóa',
            'loai'=> 2,
            'parent_id'=> 26
           ],
            [
            'ten'=> 'Hậu Lộc',
            'loai'=> 2,
            'parent_id'=> 26
           ],
            [
            'ten'=> 'Nga Sơn',
            'loai'=> 2,
            'parent_id'=> 26
           ],
            [
            'ten'=> 'Như Xuân',
            'loai'=> 2,
            'parent_id'=> 26
           ],
            [
            'ten'=> 'Như Thanh',
            'loai'=> 2,
            'parent_id'=> 26
           ],
            [
            'ten'=> 'Nông Cống',
            'loai'=> 2,
            'parent_id'=> 26
           ],
            [
            'ten'=> 'Đông Sơn',
            'loai'=> 2,
            'parent_id'=> 26
           ],
            [
            'ten'=> 'Quảng Xương',
            'loai'=> 2,
            'parent_id'=> 26
           ],
            [
            'ten'=> 'Thị xã Nghi Sơn',
            'loai'=> 2,
            'parent_id'=> 26
           ],
            [
            'ten'=> 'Thành phố Vinh',
            'loai'=> 2,
            'parent_id'=> 27
           ],
            [
            'ten'=> 'Thị xã Cửa Lò',
            'loai'=> 2,
            'parent_id'=> 27
           ],
            [
            'ten'=> 'Thị xã Thái Hoà',
            'loai'=> 2,
            'parent_id'=> 27
           ],
            [
            'ten'=> 'Quế Phong',
            'loai'=> 2,
            'parent_id'=> 27
           ],
            [
            'ten'=> 'Quỳ Châu',
            'loai'=> 2,
            'parent_id'=> 27
           ],
            [
            'ten'=> 'Kỳ Sơn',
            'loai'=> 2,
            'parent_id'=> 27
           ],
            [
            'ten'=> 'Tương Dương',
            'loai'=> 2,
            'parent_id'=> 27
           ],
            [
            'ten'=> 'Nghĩa Đàn',
            'loai'=> 2,
            'parent_id'=> 27
           ],
            [
            'ten'=> 'Quỳ Hợp',
            'loai'=> 2,
            'parent_id'=> 27
           ],
            [
            'ten'=> 'Quỳnh Lưu',
            'loai'=> 2,
            'parent_id'=> 27
           ],
            [
            'ten'=> 'Con Cuông',
            'loai'=> 2,
            'parent_id'=> 27
           ],
            [
            'ten'=> 'Tân Kỳ',
            'loai'=> 2,
            'parent_id'=> 27
           ],
            [
            'ten'=> 'Anh Sơn',
            'loai'=> 2,
            'parent_id'=> 27
           ],
            [
            'ten'=> 'Diễn Châu',
            'loai'=> 2,
            'parent_id'=> 27
           ],
            [
            'ten'=> 'Yên Thành',
            'loai'=> 2,
            'parent_id'=> 27
           ],
            [
            'ten'=> 'Đô Lương',
            'loai'=> 2,
            'parent_id'=> 27
           ],
            [
            'ten'=> 'Thanh Chương',
            'loai'=> 2,
            'parent_id'=> 27
           ],
            [
            'ten'=> 'Nghi Lộc',
            'loai'=> 2,
            'parent_id'=> 27
           ],
            [
            'ten'=> 'Nam Đàn',
            'loai'=> 2,
            'parent_id'=> 27
           ],
            [
            'ten'=> 'Hưng Nguyên',
            'loai'=> 2,
            'parent_id'=> 27
           ],
            [
            'ten'=> 'Thị xã Hoàng Mai',
            'loai'=> 2,
            'parent_id'=> 27
           ],
            [
            'ten'=> 'Thành phố Hà Tĩnh',
            'loai'=> 2,
            'parent_id'=> 28
           ],
            [
            'ten'=> 'Thị xã Hồng Lĩnh',
            'loai'=> 2,
            'parent_id'=> 28
           ],
            [
            'ten'=> 'Hương Sơn',
            'loai'=> 2,
            'parent_id'=> 28
           ],
            [
            'ten'=> 'Đức Thọ',
            'loai'=> 2,
            'parent_id'=> 28
           ],
            [
            'ten'=> 'Vũ Quang',
            'loai'=> 2,
            'parent_id'=> 28
           ],
            [
            'ten'=> 'Nghi Xuân',
            'loai'=> 2,
            'parent_id'=> 28
           ],
            [
            'ten'=> 'Can Lộc',
            'loai'=> 2,
            'parent_id'=> 28
           ],
            [
            'ten'=> 'Hương Khê',
            'loai'=> 2,
            'parent_id'=> 28
           ],
            [
            'ten'=> 'Thạch Hà',
            'loai'=> 2,
            'parent_id'=> 28
           ],
            [
            'ten'=> 'Cẩm Xuyên',
            'loai'=> 2,
            'parent_id'=> 28
           ],
            [
            'ten'=> 'Kỳ Anh',
            'loai'=> 2,
            'parent_id'=> 28
           ],
            [
            'ten'=> 'Lộc Hà',
            'loai'=> 2,
            'parent_id'=> 28
           ],
            [
            'ten'=> 'Thị xã Kỳ Anh',
            'loai'=> 2,
            'parent_id'=> 28
           ],
            [
            'ten'=> 'Thành Phố Đồng Hới',
            'loai'=> 2,
            'parent_id'=> 29
           ],
            [
            'ten'=> 'Minh Hóa',
            'loai'=> 2,
            'parent_id'=> 29
           ],
            [
            'ten'=> 'Tuyên Hóa',
            'loai'=> 2,
            'parent_id'=> 29
           ],
            [
            'ten'=> 'Quảng Trạch',
            'loai'=> 2,
            'parent_id'=> 29
           ],
            [
            'ten'=> 'Bố Trạch',
            'loai'=> 2,
            'parent_id'=> 29
           ],
            [
            'ten'=> 'Quảng Ninh',
            'loai'=> 2,
            'parent_id'=> 29
           ],
            [
            'ten'=> 'Lệ Thủy',
            'loai'=> 2,
            'parent_id'=> 29
           ],
            [
            'ten'=> 'Thị xã Ba Đồn',
            'loai'=> 2,
            'parent_id'=> 29
           ],
            [
            'ten'=> 'Thành phố Đông Hà',
            'loai'=> 2,
            'parent_id'=> 30
           ],
            [
            'ten'=> 'Thị xã Quảng Trị',
            'loai'=> 2,
            'parent_id'=> 30
           ],
            [
            'ten'=> 'Vĩnh Linh',
            'loai'=> 2,
            'parent_id'=> 30
           ],
            [
            'ten'=> 'Hướng Hóa',
            'loai'=> 2,
            'parent_id'=> 30
           ],
            [
            'ten'=> 'Gio Linh',
            'loai'=> 2,
            'parent_id'=> 30
           ],
            [
            'ten'=> 'Đa Krông',
            'loai'=> 2,
            'parent_id'=> 30
           ],
            [
            'ten'=> 'Cam Lộ',
            'loai'=> 2,
            'parent_id'=> 30
           ],
            [
            'ten'=> 'Triệu Phong',
            'loai'=> 2,
            'parent_id'=> 30
           ],
            [
            'ten'=> 'Hải Lăng',
            'loai'=> 2,
            'parent_id'=> 30
           ],
            [
            'ten'=> 'Cồn Cỏ',
            'loai'=> 2,
            'parent_id'=> 30
           ],
            [
            'ten'=> 'Thành phố Huế',
            'loai'=> 2,
            'parent_id'=> 31
           ],
            [
            'ten'=> 'Phong Điền',
            'loai'=> 2,
            'parent_id'=> 31
           ],
            [
            'ten'=> 'Quảng Điền',
            'loai'=> 2,
            'parent_id'=> 31
           ],
            [
            'ten'=> 'Phú Vang',
            'loai'=> 2,
            'parent_id'=> 31
           ],
            [
            'ten'=> 'Thị xã Hương Thủy',
            'loai'=> 2,
            'parent_id'=> 31
           ],
            [
            'ten'=> 'Thị xã Hương Trà',
            'loai'=> 2,
            'parent_id'=> 31
           ],
            [
            'ten'=> 'A Lưới',
            'loai'=> 2,
            'parent_id'=> 31
           ],
            [
            'ten'=> 'Phú Lộc',
            'loai'=> 2,
            'parent_id'=> 31
           ],
            [
            'ten'=> 'Nam Đông',
            'loai'=> 2,
            'parent_id'=> 31
           ],
            [
            'ten'=> 'Quận Liên Chiểu',
            'loai'=> 2,
            'parent_id'=> 32
           ],
            [
            'ten'=> 'Quận Thanh Khê',
            'loai'=> 2,
            'parent_id'=> 32
           ],
            [
            'ten'=> 'Quận Hải Châu',
            'loai'=> 2,
            'parent_id'=> 32
           ],
            [
            'ten'=> 'Quận Sơn Trà',
            'loai'=> 2,
            'parent_id'=> 32
           ],
            [
            'ten'=> 'Quận Ngũ Hành Sơn',
            'loai'=> 2,
            'parent_id'=> 32
           ],
            [
            'ten'=> 'Quận Cẩm Lệ',
            'loai'=> 2,
            'parent_id'=> 32
           ],
            [
            'ten'=> 'Hòa Vang',
            'loai'=> 2,
            'parent_id'=> 32
           ],
            [
            'ten'=> 'Hoàng Sa',
            'loai'=> 2,
            'parent_id'=> 32
           ],
            [
            'ten'=> 'Thành phố Tam Kỳ',
            'loai'=> 2,
            'parent_id'=> 33
           ],
            [
            'ten'=> 'Thành phố Hội An',
            'loai'=> 2,
            'parent_id'=> 33
           ],
            [
            'ten'=> 'Tây Giang',
            'loai'=> 2,
            'parent_id'=> 33
           ],
            [
            'ten'=> 'Đông Giang',
            'loai'=> 2,
            'parent_id'=> 33
           ],
            [
            'ten'=> 'Đại Lộc',
            'loai'=> 2,
            'parent_id'=> 33
           ],
            [
            'ten'=> 'Thị xã Điện Bàn',
            'loai'=> 2,
            'parent_id'=> 33
           ],
            [
            'ten'=> 'Duy Xuyên',
            'loai'=> 2,
            'parent_id'=> 33
           ],
            [
            'ten'=> 'Quế Sơn',
            'loai'=> 2,
            'parent_id'=> 33
           ],
            [
            'ten'=> 'Nam Giang',
            'loai'=> 2,
            'parent_id'=> 33
           ],
            [
            'ten'=> 'Phước Sơn',
            'loai'=> 2,
            'parent_id'=> 33
           ],
            [
            'ten'=> 'Hiệp Đức',
            'loai'=> 2,
            'parent_id'=> 33
           ],
            [
            'ten'=> 'Thăng Bình',
            'loai'=> 2,
            'parent_id'=> 33
           ],
            [
            'ten'=> 'Tiên Phước',
            'loai'=> 2,
            'parent_id'=> 33
           ],
            [
            'ten'=> 'Bắc Trà My',
            'loai'=> 2,
            'parent_id'=> 33
           ],
            [
            'ten'=> 'Nam Trà My',
            'loai'=> 2,
            'parent_id'=> 33
           ],
            [
            'ten'=> 'Núi Thành',
            'loai'=> 2,
            'parent_id'=> 33
           ],
            [
            'ten'=> 'Phú Ninh',
            'loai'=> 2,
            'parent_id'=> 33
           ],
            [
            'ten'=> 'Nông Sơn',
            'loai'=> 2,
            'parent_id'=> 33
           ],
            [
            'ten'=> 'Thành phố Quảng Ngãi',
            'loai'=> 2,
            'parent_id'=> 34
           ],
            [
            'ten'=> 'Bình Sơn',
            'loai'=> 2,
            'parent_id'=> 34
           ],
            [
            'ten'=> 'Trà Bồng',
            'loai'=> 2,
            'parent_id'=> 34
           ],
            [
            'ten'=> 'Sơn Tịnh',
            'loai'=> 2,
            'parent_id'=> 34
           ],
            [
            'ten'=> 'Tư Nghĩa',
            'loai'=> 2,
            'parent_id'=> 34
           ],
            [
            'ten'=> 'Sơn Hà',
            'loai'=> 2,
            'parent_id'=> 34
           ],
            [
            'ten'=> 'Sơn Tây',
            'loai'=> 2,
            'parent_id'=> 34
           ],
            [
            'ten'=> 'Minh Long',
            'loai'=> 2,
            'parent_id'=> 34
           ],
            [
            'ten'=> 'Nghĩa Hành',
            'loai'=> 2,
            'parent_id'=> 34
           ],
            [
            'ten'=> 'Mộ Đức',
            'loai'=> 2,
            'parent_id'=> 34
           ],
            [
            'ten'=> 'Thị xã Đức Phổ',
            'loai'=> 2,
            'parent_id'=> 34
           ],
            [
            'ten'=> 'Ba Tơ',
            'loai'=> 2,
            'parent_id'=> 34
           ],
            [
            'ten'=> 'Lý Sơn',
            'loai'=> 2,
            'parent_id'=> 34
           ],
            [
            'ten'=> 'Thành phố Quy Nhơn',
            'loai'=> 2,
            'parent_id'=> 35
           ],
            [
            'ten'=> 'An Lão',
            'loai'=> 2,
            'parent_id'=> 35
           ],
            [
            'ten'=> 'Thị xã Hoài Nhơn',
            'loai'=> 2,
            'parent_id'=> 35
           ],
            [
            'ten'=> 'Hoài Ân',
            'loai'=> 2,
            'parent_id'=> 35
           ],
            [
            'ten'=> 'Phù Mỹ',
            'loai'=> 2,
            'parent_id'=> 35
           ],
            [
            'ten'=> 'Vĩnh Thạnh',
            'loai'=> 2,
            'parent_id'=> 35
           ],
            [
            'ten'=> 'Tây Sơn',
            'loai'=> 2,
            'parent_id'=> 35
           ],
            [
            'ten'=> 'Phù Cát',
            'loai'=> 2,
            'parent_id'=> 35
           ],
            [
            'ten'=> 'Thị xã An Nhơn',
            'loai'=> 2,
            'parent_id'=> 35
           ],
            [
            'ten'=> 'Tuy Phước',
            'loai'=> 2,
            'parent_id'=> 35
           ],
            [
            'ten'=> 'Vân Canh',
            'loai'=> 2,
            'parent_id'=> 35
           ],
            [
            'ten'=> 'Thành phố Tuy Hoà',
            'loai'=> 2,
            'parent_id'=> 36
           ],
            [
            'ten'=> 'Thị xã Sông Cầu',
            'loai'=> 2,
            'parent_id'=> 36
           ],
            [
            'ten'=> 'Đồng Xuân',
            'loai'=> 2,
            'parent_id'=> 36
           ],
            [
            'ten'=> 'Tuy An',
            'loai'=> 2,
            'parent_id'=> 36
           ],
            [
            'ten'=> 'Sơn Hòa',
            'loai'=> 2,
            'parent_id'=> 36
           ],
            [
            'ten'=> 'Sông Hinh',
            'loai'=> 2,
            'parent_id'=> 36
           ],
            [
            'ten'=> 'Tây Hoà',
            'loai'=> 2,
            'parent_id'=> 36
           ],
            [
            'ten'=> 'Phú Hoà',
            'loai'=> 2,
            'parent_id'=> 36
           ],
            [
            'ten'=> 'Thị xã Đông Hòa',
            'loai'=> 2,
            'parent_id'=> 36
           ],
            [
            'ten'=> 'Thành phố Nha Trang',
            'loai'=> 2,
            'parent_id'=> 37
           ],
            [
            'ten'=> 'Thành phố Cam Ranh',
            'loai'=> 2,
            'parent_id'=> 37
           ],
            [
            'ten'=> 'Cam Lâm',
            'loai'=> 2,
            'parent_id'=> 37
           ],
            [
            'ten'=> 'Vạn Ninh',
            'loai'=> 2,
            'parent_id'=> 37
           ],
            [
            'ten'=> 'Thị xã Ninh Hòa',
            'loai'=> 2,
            'parent_id'=> 37
           ],
            [
            'ten'=> 'Khánh Vĩnh',
            'loai'=> 2,
            'parent_id'=> 37
           ],
            [
            'ten'=> 'Diên Khánh',
            'loai'=> 2,
            'parent_id'=> 37
           ],
            [
            'ten'=> 'Khánh Sơn',
            'loai'=> 2,
            'parent_id'=> 37
           ],
            [
            'ten'=> 'Trường Sa',
            'loai'=> 2,
            'parent_id'=> 37
           ],
            [
            'ten'=> 'Thành phố Phan Rang-Tháp Chàm',
            'loai'=> 2,
            'parent_id'=> 38
           ],
            [
            'ten'=> 'Bác Ái',
            'loai'=> 2,
            'parent_id'=> 38
           ],
            [
            'ten'=> 'Ninh Sơn',
            'loai'=> 2,
            'parent_id'=> 38
           ],
            [
            'ten'=> 'Ninh Hải',
            'loai'=> 2,
            'parent_id'=> 38
           ],
            [
            'ten'=> 'Ninh Phước',
            'loai'=> 2,
            'parent_id'=> 38
           ],
            [
            'ten'=> 'Thuận Bắc',
            'loai'=> 2,
            'parent_id'=> 38
           ],
            [
            'ten'=> 'Thuận Nam',
            'loai'=> 2,
            'parent_id'=> 38
           ],
            [
            'ten'=> 'Thành phố Phan Thiết',
            'loai'=> 2,
            'parent_id'=> 39
           ],
            [
            'ten'=> 'Thị xã La Gi',
            'loai'=> 2,
            'parent_id'=> 39
           ],
            [
            'ten'=> 'Tuy Phong',
            'loai'=> 2,
            'parent_id'=> 39
           ],
            [
            'ten'=> 'Bắc Bình',
            'loai'=> 2,
            'parent_id'=> 39
           ],
            [
            'ten'=> 'Hàm Thuận Bắc',
            'loai'=> 2,
            'parent_id'=> 39
           ],
            [
            'ten'=> 'Hàm Thuận Nam',
            'loai'=> 2,
            'parent_id'=> 39
           ],
            [
            'ten'=> 'Tánh Linh',
            'loai'=> 2,
            'parent_id'=> 39
           ],
            [
            'ten'=> 'Đức Linh',
            'loai'=> 2,
            'parent_id'=> 39
           ],
            [
            'ten'=> 'Hàm Tân',
            'loai'=> 2,
            'parent_id'=> 39
           ],
            [
            'ten'=> 'Phú Quí',
            'loai'=> 2,
            'parent_id'=> 39
           ],
            [
            'ten'=> 'Thành phố Kon Tum',
            'loai'=> 2,
            'parent_id'=> 40
           ],
            [
            'ten'=> 'Đắk Glei',
            'loai'=> 2,
            'parent_id'=> 40
           ],
            [
            'ten'=> 'Ngọc Hồi',
            'loai'=> 2,
            'parent_id'=> 40
           ],
            [
            'ten'=> 'Đắk Tô',
            'loai'=> 2,
            'parent_id'=> 40
           ],
            [
            'ten'=> 'Kon Plông',
            'loai'=> 2,
            'parent_id'=> 40
           ],
            [
            'ten'=> 'Kon Rẫy',
            'loai'=> 2,
            'parent_id'=> 40
           ],
            [
            'ten'=> 'Đắk Hà',
            'loai'=> 2,
            'parent_id'=> 40
           ],
            [
            'ten'=> 'Sa Thầy',
            'loai'=> 2,
            'parent_id'=> 40
           ],
            [
            'ten'=> 'Tu Mơ Rông',
            'loai'=> 2,
            'parent_id'=> 40
           ],
            [
            'ten'=> 'Ia H\' Drai',
            'loai'=> 2,
            'parent_id'=> 40
           ],
            [
            'ten'=> 'Thành phố Pleiku',
            'loai'=> 2,
            'parent_id'=> 41
           ],
            [
            'ten'=> 'Thị xã An Khê',
            'loai'=> 2,
            'parent_id'=> 41
           ],
            [
            'ten'=> 'Thị xã Ayun Pa',
            'loai'=> 2,
            'parent_id'=> 41
           ],
            [
            'ten'=> 'KBang',
            'loai'=> 2,
            'parent_id'=> 41
           ],
            [
            'ten'=> 'Đăk Đoa',
            'loai'=> 2,
            'parent_id'=> 41
           ],
            [
            'ten'=> 'Chư Păh',
            'loai'=> 2,
            'parent_id'=> 41
           ],
            [
            'ten'=> 'Ia Grai',
            'loai'=> 2,
            'parent_id'=> 41
           ],
            [
            'ten'=> 'Mang Yang',
            'loai'=> 2,
            'parent_id'=> 41
           ],
            [
            'ten'=> 'Kông Chro',
            'loai'=> 2,
            'parent_id'=> 41
           ],
            [
            'ten'=> 'Đức Cơ',
            'loai'=> 2,
            'parent_id'=> 41
           ],
            [
            'ten'=> 'Chư Prông',
            'loai'=> 2,
            'parent_id'=> 41
           ],
            [
            'ten'=> 'Chư Sê',
            'loai'=> 2,
            'parent_id'=> 41
           ],
            [
            'ten'=> 'Đăk Pơ',
            'loai'=> 2,
            'parent_id'=> 41
           ],
            [
            'ten'=> 'Ia Pa',
            'loai'=> 2,
            'parent_id'=> 41
           ],
            [
            'ten'=> 'Krông Pa',
            'loai'=> 2,
            'parent_id'=> 41
           ],
            [
            'ten'=> 'Phú Thiện',
            'loai'=> 2,
            'parent_id'=> 41
           ],
            [
            'ten'=> 'Chư Pưh',
            'loai'=> 2,
            'parent_id'=> 41
           ],
            [
            'ten'=> 'Thành phố Buôn Ma Thuột',
            'loai'=> 2,
            'parent_id'=> 42
           ],
            [
            'ten'=> 'Thị Xã Buôn Hồ',
            'loai'=> 2,
            'parent_id'=> 42
           ],
            [
            'ten'=> 'Ea H\'leo',
            'loai'=> 2,
            'parent_id'=> 42
           ],
            [
            'ten'=> 'Ea Súp',
            'loai'=> 2,
            'parent_id'=> 42
           ],
            [
            'ten'=> 'Buôn Đôn',
            'loai'=> 2,
            'parent_id'=> 42
           ],
            [
            'ten'=> 'Cư M\'gar',
            'loai'=> 2,
            'parent_id'=> 42
           ],
            [
            'ten'=> 'Krông Búk',
            'loai'=> 2,
            'parent_id'=> 42
           ],
            [
            'ten'=> 'Krông Năng',
            'loai'=> 2,
            'parent_id'=> 42
           ],
            [
            'ten'=> 'Ea Kar',
            'loai'=> 2,
            'parent_id'=> 42
           ],
            [
            'ten'=> 'M\'Đrắk',
            'loai'=> 2,
            'parent_id'=> 42
           ],
            [
            'ten'=> 'Krông Bông',
            'loai'=> 2,
            'parent_id'=> 42
           ],
            [
            'ten'=> 'Krông Pắc',
            'loai'=> 2,
            'parent_id'=> 42
           ],
            [
            'ten'=> 'Krông A Na',
            'loai'=> 2,
            'parent_id'=> 42
           ],
            [
            'ten'=> 'Lắk',
            'loai'=> 2,
            'parent_id'=> 42
           ],
            [
            'ten'=> 'Cư Kuin',
            'loai'=> 2,
            'parent_id'=> 42
           ],
            [
            'ten'=> 'Thành phố Gia Nghĩa',
            'loai'=> 2,
            'parent_id'=> 43
           ],
            [
            'ten'=> 'Đăk Glong',
            'loai'=> 2,
            'parent_id'=> 43
           ],
            [
            'ten'=> 'Cư Jút',
            'loai'=> 2,
            'parent_id'=> 43
           ],
            [
            'ten'=> 'Đắk Mil',
            'loai'=> 2,
            'parent_id'=> 43
           ],
            [
            'ten'=> 'Krông Nô',
            'loai'=> 2,
            'parent_id'=> 43
           ],
            [
            'ten'=> 'Đắk Song',
            'loai'=> 2,
            'parent_id'=> 43
           ],
            [
            'ten'=> 'Đắk R\'Lấp',
            'loai'=> 2,
            'parent_id'=> 43
           ],
            [
            'ten'=> 'Tuy Đức',
            'loai'=> 2,
            'parent_id'=> 43
           ],
            [
            'ten'=> 'Thành phố Đà Lạt',
            'loai'=> 2,
            'parent_id'=> 44
           ],
            [
            'ten'=> 'Thành phố Bảo Lộc',
            'loai'=> 2,
            'parent_id'=> 44
           ],
            [
            'ten'=> 'Đam Rông',
            'loai'=> 2,
            'parent_id'=> 44
           ],
            [
            'ten'=> 'Lạc Dương',
            'loai'=> 2,
            'parent_id'=> 44
           ],
            [
            'ten'=> 'Lâm Hà',
            'loai'=> 2,
            'parent_id'=> 44
           ],
            [
            'ten'=> 'Đơn Dương',
            'loai'=> 2,
            'parent_id'=> 44
           ],
            [
            'ten'=> 'Đức Trọng',
            'loai'=> 2,
            'parent_id'=> 44
           ],
            [
            'ten'=> 'Di Linh',
            'loai'=> 2,
            'parent_id'=> 44
           ],
            [
            'ten'=> 'Bảo Lâm',
            'loai'=> 2,
            'parent_id'=> 44
           ],
            [
            'ten'=> 'Đạ Huoai',
            'loai'=> 2,
            'parent_id'=> 44
           ],
            [
            'ten'=> 'Đạ Tẻh',
            'loai'=> 2,
            'parent_id'=> 44
           ],
            [
            'ten'=> 'Cát Tiên',
            'loai'=> 2,
            'parent_id'=> 44
           ],
            [
            'ten'=> 'Thị xã Phước Long',
            'loai'=> 2,
            'parent_id'=> 45
           ],
            [
            'ten'=> 'Thành phố Đồng Xoài',
            'loai'=> 2,
            'parent_id'=> 45
           ],
            [
            'ten'=> 'Thị xã Bình Long',
            'loai'=> 2,
            'parent_id'=> 45
           ],
            [
            'ten'=> 'Bù Gia Mập',
            'loai'=> 2,
            'parent_id'=> 45
           ],
            [
            'ten'=> 'Lộc Ninh',
            'loai'=> 2,
            'parent_id'=> 45
           ],
            [
            'ten'=> 'Bù Đốp',
            'loai'=> 2,
            'parent_id'=> 45
           ],
            [
            'ten'=> 'Hớn Quản',
            'loai'=> 2,
            'parent_id'=> 45
           ],
            [
            'ten'=> 'Đồng Phú',
            'loai'=> 2,
            'parent_id'=> 45
           ],
            [
            'ten'=> 'Bù Đăng',
            'loai'=> 2,
            'parent_id'=> 45
           ],
            [
            'ten'=> 'Thị xã Chơn Thành',
            'loai'=> 2,
            'parent_id'=> 45
           ],
            [
            'ten'=> 'Phú Riềng',
            'loai'=> 2,
            'parent_id'=> 45
           ],
            [
            'ten'=> 'Thành phố Tây Ninh',
            'loai'=> 2,
            'parent_id'=> 46
           ],
            [
            'ten'=> 'Tân Biên',
            'loai'=> 2,
            'parent_id'=> 46
           ],
            [
            'ten'=> 'Tân Châu',
            'loai'=> 2,
            'parent_id'=> 46
           ],
            [
            'ten'=> 'Dương Minh Châu',
            'loai'=> 2,
            'parent_id'=> 46
           ],
            [
            'ten'=> 'Châu Thành',
            'loai'=> 2,
            'parent_id'=> 46
           ],
            [
            'ten'=> 'Thị xã Hòa Thành',
            'loai'=> 2,
            'parent_id'=> 46
           ],
            [
            'ten'=> 'Gò Dầu',
            'loai'=> 2,
            'parent_id'=> 46
           ],
            [
            'ten'=> 'Bến Cầu',
            'loai'=> 2,
            'parent_id'=> 46
           ],
            [
            'ten'=> 'Thị xã Trảng Bàng',
            'loai'=> 2,
            'parent_id'=> 46
           ],
            [
            'ten'=> 'Thành phố Thủ Dầu Một',
            'loai'=> 2,
            'parent_id'=> 47
           ],
            [
            'ten'=> 'Bàu Bàng',
            'loai'=> 2,
            'parent_id'=> 47
           ],
            [
            'ten'=> 'Dầu Tiếng',
            'loai'=> 2,
            'parent_id'=> 47
           ],
            [
            'ten'=> 'Thị xã Bến Cát',
            'loai'=> 2,
            'parent_id'=> 47
           ],
            [
            'ten'=> 'Phú Giáo',
            'loai'=> 2,
            'parent_id'=> 47
           ],
            [
            'ten'=> 'Thị xã Tân Uyên',
            'loai'=> 2,
            'parent_id'=> 47
           ],
            [
            'ten'=> 'Thành phố Dĩ An',
            'loai'=> 2,
            'parent_id'=> 47
           ],
            [
            'ten'=> 'Thành phố Thuận An',
            'loai'=> 2,
            'parent_id'=> 47
           ],
            [
            'ten'=> 'Bắc Tân Uyên',
            'loai'=> 2,
            'parent_id'=> 47
           ],
            [
            'ten'=> 'Thành phố Biên Hòa',
            'loai'=> 2,
            'parent_id'=> 48
           ],
            [
            'ten'=> 'Thành phố Long Khánh',
            'loai'=> 2,
            'parent_id'=> 48
           ],
            [
            'ten'=> 'Tân Phú',
            'loai'=> 2,
            'parent_id'=> 48
           ],
            [
            'ten'=> 'Vĩnh Cửu',
            'loai'=> 2,
            'parent_id'=> 48
           ],
            [
            'ten'=> 'Định Quán',
            'loai'=> 2,
            'parent_id'=> 48
           ],
            [
            'ten'=> 'Trảng Bom',
            'loai'=> 2,
            'parent_id'=> 48
           ],
            [
            'ten'=> 'Thống Nhất',
            'loai'=> 2,
            'parent_id'=> 48
           ],
            [
            'ten'=> 'Cẩm Mỹ',
            'loai'=> 2,
            'parent_id'=> 48
           ],
            [
            'ten'=> 'Long Thành',
            'loai'=> 2,
            'parent_id'=> 48
           ],
            [
            'ten'=> 'Xuân Lộc',
            'loai'=> 2,
            'parent_id'=> 48
           ],
            [
            'ten'=> 'Nhơn Trạch',
            'loai'=> 2,
            'parent_id'=> 48
           ],
            [
            'ten'=> 'Thành phố Vũng Tàu',
            'loai'=> 2,
            'parent_id'=> 49
           ],
            [
            'ten'=> 'Thành phố Bà Rịa',
            'loai'=> 2,
            'parent_id'=> 49
           ],
            [
            'ten'=> 'Châu Đức',
            'loai'=> 2,
            'parent_id'=> 49
           ],
            [
            'ten'=> 'Xuyên Mộc',
            'loai'=> 2,
            'parent_id'=> 49
           ],
            [
            'ten'=> 'Long Điền',
            'loai'=> 2,
            'parent_id'=> 49
           ],
            [
            'ten'=> 'Đất Đỏ',
            'loai'=> 2,
            'parent_id'=> 49
           ],
            [
            'ten'=> 'Thị xã Phú Mỹ',
            'loai'=> 2,
            'parent_id'=> 49
           ],
            [
            'ten'=> 'Côn Đảo',
            'loai'=> 2,
            'parent_id'=> 49
           ],
            [
            'ten'=> 'Quận 1',
            'loai'=> 2,
            'parent_id'=> 50
           ],
            [
            'ten'=> 'Quận 12',
            'loai'=> 2,
            'parent_id'=> 50
           ],
            [
            'ten'=> 'Quận Gò Vấp',
            'loai'=> 2,
            'parent_id'=> 50
           ],
            [
            'ten'=> 'Quận Bình Thạnh',
            'loai'=> 2,
            'parent_id'=> 50
           ],
            [
            'ten'=> 'Quận Tân Bình',
            'loai'=> 2,
            'parent_id'=> 50
           ],
            [
            'ten'=> 'Quận Tân Phú',
            'loai'=> 2,
            'parent_id'=> 50
           ],
            [
            'ten'=> 'Quận Phú Nhuận',
            'loai'=> 2,
            'parent_id'=> 50
           ],
            [
            'ten'=> 'Thành phố Thủ Đức',
            'loai'=> 2,
            'parent_id'=> 50
           ],
            [
            'ten'=> 'Quận 3',
            'loai'=> 2,
            'parent_id'=> 50
           ],
            [
            'ten'=> 'Quận 10',
            'loai'=> 2,
            'parent_id'=> 50
           ],
            [
            'ten'=> 'Quận 11',
            'loai'=> 2,
            'parent_id'=> 50
           ],
            [
            'ten'=> 'Quận 4',
            'loai'=> 2,
            'parent_id'=> 50
           ],
            [
            'ten'=> 'Quận 5',
            'loai'=> 2,
            'parent_id'=> 50
           ],
            [
            'ten'=> 'Quận 6',
            'loai'=> 2,
            'parent_id'=> 50
           ],
            [
            'ten'=> 'Quận 8',
            'loai'=> 2,
            'parent_id'=> 50
           ],
            [
            'ten'=> 'Quận Bình Tân',
            'loai'=> 2,
            'parent_id'=> 50
           ],
            [
            'ten'=> 'Quận 7',
            'loai'=> 2,
            'parent_id'=> 50
           ],
            [
            'ten'=> 'Củ Chi',
            'loai'=> 2,
            'parent_id'=> 50
           ],
            [
            'ten'=> 'Hóc Môn',
            'loai'=> 2,
            'parent_id'=> 50
           ],
            [
            'ten'=> 'Bình Chánh',
            'loai'=> 2,
            'parent_id'=> 50
           ],
            [
            'ten'=> 'Nhà Bè',
            'loai'=> 2,
            'parent_id'=> 50
           ],
            [
            'ten'=> 'Cần Giờ',
            'loai'=> 2,
            'parent_id'=> 50
           ],
            [
            'ten'=> 'Thành phố Tân An',
            'loai'=> 2,
            'parent_id'=> 51
           ],
            [
            'ten'=> 'Thị xã Kiến Tường',
            'loai'=> 2,
            'parent_id'=> 51
           ],
            [
            'ten'=> 'Tân Hưng',
            'loai'=> 2,
            'parent_id'=> 51
           ],
            [
            'ten'=> 'Vĩnh Hưng',
            'loai'=> 2,
            'parent_id'=> 51
           ],
            [
            'ten'=> 'Mộc Hóa',
            'loai'=> 2,
            'parent_id'=> 51
           ],
            [
            'ten'=> 'Tân Thạnh',
            'loai'=> 2,
            'parent_id'=> 51
           ],
            [
            'ten'=> 'Thạnh Hóa',
            'loai'=> 2,
            'parent_id'=> 51
           ],
            [
            'ten'=> 'Đức Huệ',
            'loai'=> 2,
            'parent_id'=> 51
           ],
            [
            'ten'=> 'Đức Hòa',
            'loai'=> 2,
            'parent_id'=> 51
           ],
            [
            'ten'=> 'Bến Lức',
            'loai'=> 2,
            'parent_id'=> 51
           ],
            [
            'ten'=> 'Thủ Thừa',
            'loai'=> 2,
            'parent_id'=> 51
           ],
            [
            'ten'=> 'Tân Trụ',
            'loai'=> 2,
            'parent_id'=> 51
           ],
            [
            'ten'=> 'Cần Đước',
            'loai'=> 2,
            'parent_id'=> 51
           ],
            [
            'ten'=> 'Cần Giuộc',
            'loai'=> 2,
            'parent_id'=> 51
           ],
            [
            'ten'=> 'Châu Thành',
            'loai'=> 2,
            'parent_id'=> 51
           ],
            [
            'ten'=> 'Thành phố Mỹ Tho',
            'loai'=> 2,
            'parent_id'=> 52
           ],
            [
            'ten'=> 'Thị xã Gò Công',
            'loai'=> 2,
            'parent_id'=> 52
           ],
            [
            'ten'=> 'Thị xã Cai Lậy',
            'loai'=> 2,
            'parent_id'=> 52
           ],
            [
            'ten'=> 'Tân Phước',
            'loai'=> 2,
            'parent_id'=> 52
           ],
            [
            'ten'=> 'Cái Bè',
            'loai'=> 2,
            'parent_id'=> 52
           ],
            [
            'ten'=> 'Cai Lậy',
            'loai'=> 2,
            'parent_id'=> 52
           ],
            [
            'ten'=> 'Châu Thành',
            'loai'=> 2,
            'parent_id'=> 52
           ],
            [
            'ten'=> 'Chợ Gạo',
            'loai'=> 2,
            'parent_id'=> 52
           ],
            [
            'ten'=> 'Gò Công Tây',
            'loai'=> 2,
            'parent_id'=> 52
           ],
            [
            'ten'=> 'Gò Công Đông',
            'loai'=> 2,
            'parent_id'=> 52
           ],
            [
            'ten'=> 'Tân Phú Đông',
            'loai'=> 2,
            'parent_id'=> 52
           ],
            [
            'ten'=> 'Thành phố Bến Tre',
            'loai'=> 2,
            'parent_id'=> 53
           ],
            [
            'ten'=> 'Châu Thành',
            'loai'=> 2,
            'parent_id'=> 53
           ],
            [
            'ten'=> 'Chợ Lách',
            'loai'=> 2,
            'parent_id'=> 53
           ],
            [
            'ten'=> 'Mỏ Cày Nam',
            'loai'=> 2,
            'parent_id'=> 53
           ],
            [
            'ten'=> 'Giồng Trôm',
            'loai'=> 2,
            'parent_id'=> 53
           ],
            [
            'ten'=> 'Bình Đại',
            'loai'=> 2,
            'parent_id'=> 53
           ],
            [
            'ten'=> 'Ba Tri',
            'loai'=> 2,
            'parent_id'=> 53
           ],
            [
            'ten'=> 'Thạnh Phú',
            'loai'=> 2,
            'parent_id'=> 53
           ],
            [
            'ten'=> 'Mỏ Cày Bắc',
            'loai'=> 2,
            'parent_id'=> 53
           ],
            [
            'ten'=> 'Thành phố Trà Vinh',
            'loai'=> 2,
            'parent_id'=> 54
           ],
            [
            'ten'=> 'Càng Long',
            'loai'=> 2,
            'parent_id'=> 54
           ],
            [
            'ten'=> 'Cầu Kè',
            'loai'=> 2,
            'parent_id'=> 54
           ],
            [
            'ten'=> 'Tiểu Cần',
            'loai'=> 2,
            'parent_id'=> 54
           ],
            [
            'ten'=> 'Châu Thành',
            'loai'=> 2,
            'parent_id'=> 54
           ],
            [
            'ten'=> 'Cầu Ngang',
            'loai'=> 2,
            'parent_id'=> 54
           ],
            [
            'ten'=> 'Trà Cú',
            'loai'=> 2,
            'parent_id'=> 54
           ],
            [
            'ten'=> 'Duyên Hải',
            'loai'=> 2,
            'parent_id'=> 54
           ],
            [
            'ten'=> 'Thị xã Duyên Hải',
            'loai'=> 2,
            'parent_id'=> 54
           ],
            [
            'ten'=> 'Thành phố Vĩnh Long',
            'loai'=> 2,
            'parent_id'=> 55
           ],
            [
            'ten'=> 'Long Hồ',
            'loai'=> 2,
            'parent_id'=> 55
           ],
            [
            'ten'=> 'Mang Thít',
            'loai'=> 2,
            'parent_id'=> 55
           ],
            [
            'ten'=> ' Vũng Liêm',
            'loai'=> 2,
            'parent_id'=> 55
           ],
            [
            'ten'=> 'Tam Bình',
            'loai'=> 2,
            'parent_id'=> 55
           ],
            [
            'ten'=> 'Thị xã Bình Minh',
            'loai'=> 2,
            'parent_id'=> 55
           ],
            [
            'ten'=> 'Trà Ôn',
            'loai'=> 2,
            'parent_id'=> 55
           ],
            [
            'ten'=> 'Bình Tân',
            'loai'=> 2,
            'parent_id'=> 55
           ],
            [
            'ten'=> 'Thành phố Cao Lãnh',
            'loai'=> 2,
            'parent_id'=> 56
           ],
            [
            'ten'=> 'Thành phố Sa Đéc',
            'loai'=> 2,
            'parent_id'=> 56
           ],
            [
            'ten'=> 'Thành phố Hồng Ngự',
            'loai'=> 2,
            'parent_id'=> 56
           ],
            [
            'ten'=> 'Tân Hồng',
            'loai'=> 2,
            'parent_id'=> 56
           ],
            [
            'ten'=> 'Hồng Ngự',
            'loai'=> 2,
            'parent_id'=> 56
           ],
            [
            'ten'=> 'Tam Nông',
            'loai'=> 2,
            'parent_id'=> 56
           ],
            [
            'ten'=> 'Tháp Mười',
            'loai'=> 2,
            'parent_id'=> 56
           ],
            [
            'ten'=> 'Cao Lãnh',
            'loai'=> 2,
            'parent_id'=> 56
           ],
            [
            'ten'=> 'Thanh Bình',
            'loai'=> 2,
            'parent_id'=> 56
           ],
            [
            'ten'=> 'Lấp Vò',
            'loai'=> 2,
            'parent_id'=> 56
           ],
            [
            'ten'=> 'Lai Vung',
            'loai'=> 2,
            'parent_id'=> 56
           ],
            [
            'ten'=> 'Châu Thành',
            'loai'=> 2,
            'parent_id'=> 56
           ],
            [
            'ten'=> 'Thành phố Long Xuyên',
            'loai'=> 2,
            'parent_id'=> 57
           ],
            [
            'ten'=> 'Thành phố Châu Đốc',
            'loai'=> 2,
            'parent_id'=> 57
           ],
            [
            'ten'=> 'An Phú',
            'loai'=> 2,
            'parent_id'=> 57
           ],
            [
            'ten'=> 'Thị xã Tân Châu',
            'loai'=> 2,
            'parent_id'=> 57
           ],
            [
            'ten'=> 'Phú Tân',
            'loai'=> 2,
            'parent_id'=> 57
           ],
            [
            'ten'=> 'Châu Phú',
            'loai'=> 2,
            'parent_id'=> 57
           ],
            [
            'ten'=> 'Tịnh Biên',
            'loai'=> 2,
            'parent_id'=> 57
           ],
            [
            'ten'=> 'Tri Tôn',
            'loai'=> 2,
            'parent_id'=> 57
           ],
            [
            'ten'=> 'Châu Thành',
            'loai'=> 2,
            'parent_id'=> 57
           ],
            [
            'ten'=> 'Chợ Mới',
            'loai'=> 2,
            'parent_id'=> 57
           ],
            [
            'ten'=> 'Thoại Sơn',
            'loai'=> 2,
            'parent_id'=> 57
           ],
            [
            'ten'=> 'Thành phố Rạch Giá',
            'loai'=> 2,
            'parent_id'=> 58
           ],
            [
            'ten'=> 'Thành phố Hà Tiên',
            'loai'=> 2,
            'parent_id'=> 58
           ],
            [
            'ten'=> 'Kiên Lương',
            'loai'=> 2,
            'parent_id'=> 58
           ],
            [
            'ten'=> 'Hòn Đất',
            'loai'=> 2,
            'parent_id'=> 58
           ],
            [
            'ten'=> 'Tân Hiệp',
            'loai'=> 2,
            'parent_id'=> 58
           ],
            [
            'ten'=> 'Châu Thành',
            'loai'=> 2,
            'parent_id'=> 58
           ],
            [
            'ten'=> 'Giồng Riềng',
            'loai'=> 2,
            'parent_id'=> 58
           ],
            [
            'ten'=> 'Gò Quao',
            'loai'=> 2,
            'parent_id'=> 58
           ],
            [
            'ten'=> 'An Biên',
            'loai'=> 2,
            'parent_id'=> 58
           ],
            [
            'ten'=> 'An Minh',
            'loai'=> 2,
            'parent_id'=> 58
           ],
            [
            'ten'=> 'Vĩnh Thuận',
            'loai'=> 2,
            'parent_id'=> 58
           ],
            [
            'ten'=> 'Thành phố Phú Quốc',
            'loai'=> 2,
            'parent_id'=> 58
           ],
            [
            'ten'=> 'Kiên Hải',
            'loai'=> 2,
            'parent_id'=> 58
           ],
            [
            'ten'=> 'U Minh Thượng',
            'loai'=> 2,
            'parent_id'=> 58
           ],
            [
            'ten'=> 'Giang Thành',
            'loai'=> 2,
            'parent_id'=> 58
           ],
            [
            'ten'=> 'Quận Ninh Kiều',
            'loai'=> 2,
            'parent_id'=> 59
           ],
            [
            'ten'=> 'Quận Ô Môn',
            'loai'=> 2,
            'parent_id'=> 59
           ],
            [
            'ten'=> 'Quận Bình Thuỷ',
            'loai'=> 2,
            'parent_id'=> 59
           ],
            [
            'ten'=> 'Quận Cái Răng',
            'loai'=> 2,
            'parent_id'=> 59
           ],
            [
            'ten'=> 'Quận Thốt Nốt',
            'loai'=> 2,
            'parent_id'=> 59
           ],
            [
            'ten'=> 'Vĩnh Thạnh',
            'loai'=> 2,
            'parent_id'=> 59
           ],
            [
            'ten'=> 'Cờ Đỏ',
            'loai'=> 2,
            'parent_id'=> 59
           ],
            [
            'ten'=> 'Phong Điền',
            'loai'=> 2,
            'parent_id'=> 59
           ],
            [
            'ten'=> 'Thới Lai',
            'loai'=> 2,
            'parent_id'=> 59
           ],
            [
            'ten'=> 'Thành phố Vị Thanh',
            'loai'=> 2,
            'parent_id'=> 60
           ],
            [
            'ten'=> 'Thành phố Ngã Bảy',
            'loai'=> 2,
            'parent_id'=> 60
           ],
            [
            'ten'=> 'Châu Thành A',
            'loai'=> 2,
            'parent_id'=> 60
           ],
            [
            'ten'=> 'Châu Thành',
            'loai'=> 2,
            'parent_id'=> 60
           ],
            [
            'ten'=> 'Phụng Hiệp',
            'loai'=> 2,
            'parent_id'=> 60
           ],
            [
            'ten'=> 'Vị Thuỷ',
            'loai'=> 2,
            'parent_id'=> 60
           ],
            [
            'ten'=> 'Long Mỹ',
            'loai'=> 2,
            'parent_id'=> 60
           ],
            [
            'ten'=> 'Thị xã Long Mỹ',
            'loai'=> 2,
            'parent_id'=> 60
           ],
            [
            'ten'=> 'Thành phố Sóc Trăng',
            'loai'=> 2,
            'parent_id'=> 61
           ],
            [
            'ten'=> 'Châu Thành',
            'loai'=> 2,
            'parent_id'=> 61
           ],
            [
            'ten'=> 'Kế Sách',
            'loai'=> 2,
            'parent_id'=> 61
           ],
            [
            'ten'=> 'Mỹ Tú',
            'loai'=> 2,
            'parent_id'=> 61
           ],
            [
            'ten'=> 'Cù Lao Dung',
            'loai'=> 2,
            'parent_id'=> 61
           ],
            [
            'ten'=> 'Long Phú',
            'loai'=> 2,
            'parent_id'=> 61
           ],
            [
            'ten'=> 'Mỹ Xuyên',
            'loai'=> 2,
            'parent_id'=> 61
           ],
            [
            'ten'=> 'Thị xã Ngã Năm',
            'loai'=> 2,
            'parent_id'=> 61
           ],
            [
            'ten'=> 'Thạnh Trị',
            'loai'=> 2,
            'parent_id'=> 61
           ],
            [
            'ten'=> 'Thị xã Vĩnh Châu',
            'loai'=> 2,
            'parent_id'=> 61
           ],
            [
            'ten'=> 'Trần Đề',
            'loai'=> 2,
            'parent_id'=> 61
           ],
            [
            'ten'=> 'Thành phố Bạc Liêu',
            'loai'=> 2,
            'parent_id'=> 62
           ],
            [
            'ten'=> 'Hồng Dân',
            'loai'=> 2,
            'parent_id'=> 62
           ],
            [
            'ten'=> 'Phước Long',
            'loai'=> 2,
            'parent_id'=> 62
           ],
            [
            'ten'=> 'Vĩnh Lợi',
            'loai'=> 2,
            'parent_id'=> 62
           ],
            [
            'ten'=> 'Thị xã Giá Rai',
            'loai'=> 2,
            'parent_id'=> 62
           ],
            [
            'ten'=> 'Đông Hải',
            'loai'=> 2,
            'parent_id'=> 62
           ],
            [
            'ten'=> 'Hoà Bình',
            'loai'=> 2,
            'parent_id'=> 62
           ],
            [
            'ten'=> 'Thành phố Cà Mau',
            'loai'=> 2,
            'parent_id'=> 63
           ],
            [
            'ten'=> 'U Minh',
            'loai'=> 2,
            'parent_id'=> 63
           ],
            [
            'ten'=> 'Thới Bình',
            'loai'=> 2,
            'parent_id'=> 63
           ],
            [
            'ten'=> 'Trần Văn Thời',
            'loai'=> 2,
            'parent_id'=> 63
           ],
            [
            'ten'=> 'Cái Nước',
            'loai'=> 2,
            'parent_id'=> 63
           ],
            [
            'ten'=> 'Đầm Dơi',
            'loai'=> 2,
            'parent_id'=> 63
           ],
            [
            'ten'=> 'Năm Căn',
            'loai'=> 2,
            'parent_id'=> 63
           ],
            [
            'ten'=> 'Phú Tân',
            'loai'=> 2,
            'parent_id'=> 63
           ],
            [
            'ten'=> 'Ngọc Hiển',
            'loai'=> 2,
            'parent_id'=> 63
            ],

           // XÃ

        [
        'ten'=> 'Phường Phúc Xá',
        'loai'=> 3,
        'parent_id'=> 64
        ],
        [
        'ten'=> 'Phường Trúc Bạch',
        'loai'=> 3,
        'parent_id'=> 64
        ],
        [
        'ten'=> 'Phường Vĩnh Phúc',
        'loai'=> 3,
        'parent_id'=> 64
        ],
        [
        'ten'=> 'Phường Cống Vị',
        'loai'=> 3,
        'parent_id'=> 64
        ],
        [
        'ten'=> 'Phường Liễu Giai',
        'loai'=> 3,
        'parent_id'=> 64
        ],
        [
        'ten'=> 'Phường Nguyễn Trung Trực',
        'loai'=> 3,
        'parent_id'=> 64
        ],
        [
        'ten'=> 'Phường Quán Thánh',
        'loai'=> 3,
        'parent_id'=> 64
        ],
        [
        'ten'=> 'Phường Ngọc Hà',
        'loai'=> 3,
        'parent_id'=> 64
        ],
        [
        'ten'=> 'Phường Điện Biên',
        'loai'=> 3,
        'parent_id'=> 64
        ],
        [
        'ten'=> 'Phường Đội Cấn',
        'loai'=> 3,
        'parent_id'=> 64
        ],
        [
        'ten'=> 'Phường Ngọc Khánh',
        'loai'=> 3,
        'parent_id'=> 64
        ],
        [
        'ten'=> 'Phường Kim Mã',
        'loai'=> 3,
        'parent_id'=> 64
        ],
        [
        'ten'=> 'Phường Giảng Võ',
        'loai'=> 3,
        'parent_id'=> 64
        ],
        [
        'ten'=> 'Phường Thành Công',
        'loai'=> 3,
        'parent_id'=> 64
        ],
        [
        'ten'=> 'Phường Phúc Tân',
        'loai'=> 3,
        'parent_id'=> 65
        ],
        [
        'ten'=> 'Phường Đồng Xuân',
        'loai'=> 3,
        'parent_id'=> 65
        ],
        [
        'ten'=> 'Phường Hàng Mã',
        'loai'=> 3,
        'parent_id'=> 65
        ],
        [
        'ten'=> 'Phường Hàng Buồm',
        'loai'=> 3,
        'parent_id'=> 65
        ],
        [
        'ten'=> 'Phường Hàng Đào',
        'loai'=> 3,
        'parent_id'=> 65
        ],
        [
        'ten'=> 'Phường Hàng Bồ',
        'loai'=> 3,
        'parent_id'=> 65
        ],
        [
        'ten'=> 'Phường Cửa Đông',
        'loai'=> 3,
        'parent_id'=> 65
        ],
        [
        'ten'=> 'Phường Lý Thái Tổ',
        'loai'=> 3,
        'parent_id'=> 65
        ],
        [
        'ten'=> 'Phường Hàng Bạc',
        'loai'=> 3,
        'parent_id'=> 65
        ],
        [
        'ten'=> 'Phường Hàng Gai',
        'loai'=> 3,
        'parent_id'=> 65
        ],
        [
        'ten'=> 'Phường Chương Dương',
        'loai'=> 3,
        'parent_id'=> 65
        ],
        [
        'ten'=> 'Phường Hàng Trống',
        'loai'=> 3,
        'parent_id'=> 65
        ],
        [
        'ten'=> 'Phường Cửa Nam',
        'loai'=> 3,
        'parent_id'=> 65
        ],
        [
        'ten'=> 'Phường Hàng Bông',
        'loai'=> 3,
        'parent_id'=> 65
        ],
        [
        'ten'=> 'Phường Tràng Tiền',
        'loai'=> 3,
        'parent_id'=> 65
        ],
        [
        'ten'=> 'Phường Trần Hưng Đạo',
        'loai'=> 3,
        'parent_id'=> 65
        ],
        [
        'ten'=> 'Phường Phan Chu Trinh',
        'loai'=> 3,
        'parent_id'=> 65
        ],
        [
        'ten'=> 'Phường Hàng Bài',
        'loai'=> 3,
        'parent_id'=> 65
        ],
        [
        'ten'=> 'Phường Phú Thượng',
        'loai'=> 3,
        'parent_id'=> 66
        ],
        [
        'ten'=> 'Phường Nhật Tân',
        'loai'=> 3,
        'parent_id'=> 66
        ],
        [
        'ten'=> 'Phường Tứ Liên',
        'loai'=> 3,
        'parent_id'=> 66
        ],
        [
        'ten'=> 'Phường Quảng An',
        'loai'=> 3,
        'parent_id'=> 66
        ],
        [
        'ten'=> 'Phường Xuân La',
        'loai'=> 3,
        'parent_id'=> 66
        ],
        [
        'ten'=> 'Phường Yên Phụ',
        'loai'=> 3,
        'parent_id'=> 66
        ],
        [
        'ten'=> 'Phường Bưởi',
        'loai'=> 3,
        'parent_id'=> 66
        ],
        [
        'ten'=> 'Phường Thụy Khuê',
        'loai'=> 3,
        'parent_id'=> 66
        ],
        [
        'ten'=> 'Phường Thượng Thanh',
        'loai'=> 3,
        'parent_id'=> 67
        ],
        [
        'ten'=> 'Phường Ngọc Thụy',
        'loai'=> 3,
        'parent_id'=> 67
        ],
        [
        'ten'=> 'Phường Giang Biên',
        'loai'=> 3,
        'parent_id'=> 67
        ],
        [
        'ten'=> 'Phường Đức Giang',
        'loai'=> 3,
        'parent_id'=> 67
        ],
        [
        'ten'=> 'Phường Việt Hưng',
        'loai'=> 3,
        'parent_id'=> 67
        ],
        [
        'ten'=> 'Phường Gia Thụy',
        'loai'=> 3,
        'parent_id'=> 67
        ],
        [
        'ten'=> 'Phường Ngọc Lâm',
        'loai'=> 3,
        'parent_id'=> 67
        ],
        [
        'ten'=> 'Phường Phúc Lợi',
        'loai'=> 3,
        'parent_id'=> 67
        ],
        [
        'ten'=> 'Phường Bồ Đề',
        'loai'=> 3,
        'parent_id'=> 67
        ],
        [
        'ten'=> 'Phường Sài Đồng',
        'loai'=> 3,
        'parent_id'=> 67
        ],
        [
        'ten'=> 'Phường Long Biên',
        'loai'=> 3,
        'parent_id'=> 67
        ],
        [
        'ten'=> 'Phường Thạch Bàn',
        'loai'=> 3,
        'parent_id'=> 67
        ],
        [
        'ten'=> 'Phường Phúc Đồng',
        'loai'=> 3,
        'parent_id'=> 67
        ],
        [
        'ten'=> 'Phường Cự Khối',
        'loai'=> 3,
        'parent_id'=> 67
        ],
        [
        'ten'=> 'Phường Nghĩa Đô',
        'loai'=> 3,
        'parent_id'=> 68
        ],
        [
        'ten'=> 'Phường Nghĩa Tân',
        'loai'=> 3,
        'parent_id'=> 68
        ],
        [
        'ten'=> 'Phường Mai Dịch',
        'loai'=> 3,
        'parent_id'=> 68
        ],
        [
        'ten'=> 'Phường Dịch Vọng',
        'loai'=> 3,
        'parent_id'=> 68
        ],
        [
        'ten'=> 'Phường Dịch Vọng Hậu',
        'loai'=> 3,
        'parent_id'=> 68
        ],
        [
        'ten'=> 'Phường Quan Hoa',
        'loai'=> 3,
        'parent_id'=> 68
        ],
        [
        'ten'=> 'Phường Yên Hoà',
        'loai'=> 3,
        'parent_id'=> 68
        ],
        [
        'ten'=> 'Phường Trung Hoà',
        'loai'=> 3,
        'parent_id'=> 68
        ],
        [
        'ten'=> 'Phường Cát Linh',
        'loai'=> 3,
        'parent_id'=> 69
        ],
        [
        'ten'=> 'Phường Văn Miếu',
        'loai'=> 3,
        'parent_id'=> 69
        ],
        [
        'ten'=> 'Phường Quốc Tử Giám',
        'loai'=> 3,
        'parent_id'=> 69
        ],
        [
        'ten'=> 'Phường Láng Thượng',
        'loai'=> 3,
        'parent_id'=> 69
        ],
        [
        'ten'=> 'Phường Ô Chợ Dừa',
        'loai'=> 3,
        'parent_id'=> 69
        ],
        [
        'ten'=> 'Phường Văn Chương',
        'loai'=> 3,
        'parent_id'=> 69
        ],
        [
        'ten'=> 'Phường Hàng Bột',
        'loai'=> 3,
        'parent_id'=> 69
        ],
        [
        'ten'=> 'Phường Láng Hạ',
        'loai'=> 3,
        'parent_id'=> 69
        ],
        [
        'ten'=> 'Phường Khâm Thiên',
        'loai'=> 3,
        'parent_id'=> 69
        ],
        [
        'ten'=> 'Phường Thổ Quan',
        'loai'=> 3,
        'parent_id'=> 69
        ],
        [
        'ten'=> 'Phường Nam Đồng',
        'loai'=> 3,
        'parent_id'=> 69
        ],
        [
        'ten'=> 'Phường Trung Phụng',
        'loai'=> 3,
        'parent_id'=> 69
        ],
        [
        'ten'=> 'Phường Quang Trung',
        'loai'=> 3,
        'parent_id'=> 69
        ],
        [
        'ten'=> 'Phường Trung Liệt',
        'loai'=> 3,
        'parent_id'=> 69
        ],
        [
        'ten'=> 'Phường Phương Liên',
        'loai'=> 3,
        'parent_id'=> 69
        ],
        [
        'ten'=> 'Phường Thịnh Quang',
        'loai'=> 3,
        'parent_id'=> 69
        ],
        [
        'ten'=> 'Phường Trung Tự',
        'loai'=> 3,
        'parent_id'=> 69
        ],
        [
        'ten'=> 'Phường Kim Liên',
        'loai'=> 3,
        'parent_id'=> 69
        ],
        [
        'ten'=> 'Phường Phương Mai',
        'loai'=> 3,
        'parent_id'=> 69
        ],
        [
        'ten'=> 'Phường Ngã Tư Sở',
        'loai'=> 3,
        'parent_id'=> 69
        ],
        [
        'ten'=> 'Phường Khương Thượng',
        'loai'=> 3,
        'parent_id'=> 69
        ],
        [
        'ten'=> 'Phường Nguyễn Du',
        'loai'=> 3,
        'parent_id'=> 70
        ],
        [
        'ten'=> 'Phường Bạch Đằng',
        'loai'=> 3,
        'parent_id'=> 70
        ],
        [
        'ten'=> 'Phường Phạm Đình Hổ',
        'loai'=> 3,
        'parent_id'=> 70
        ],
        [
        'ten'=> 'Phường Lê Đại Hành',
        'loai'=> 3,
        'parent_id'=> 70
        ],
        [
        'ten'=> 'Phường Đồng Nhân',
        'loai'=> 3,
        'parent_id'=> 70
        ],
        [
        'ten'=> 'Phường Phố Huế',
        'loai'=> 3,
        'parent_id'=> 70
        ],
        [
        'ten'=> 'Phường Đống Mác',
        'loai'=> 3,
        'parent_id'=> 70
        ],
        [
        'ten'=> 'Phường Thanh Lương',
        'loai'=> 3,
        'parent_id'=> 70
        ],
        [
        'ten'=> 'Phường Thanh Nhàn',
        'loai'=> 3,
        'parent_id'=> 70
        ],
        [
        'ten'=> 'Phường Cầu Dền',
        'loai'=> 3,
        'parent_id'=> 70
        ],
        [
        'ten'=> 'Phường Bách Khoa',
        'loai'=> 3,
        'parent_id'=> 70
        ],
        [
        'ten'=> 'Phường Đồng Tâm',
        'loai'=> 3,
        'parent_id'=> 70
        ],
        [
        'ten'=> 'Phường Vĩnh Tuy',
        'loai'=> 3,
        'parent_id'=> 70
        ],
        [
        'ten'=> 'Phường Bạch Mai',
        'loai'=> 3,
        'parent_id'=> 70
        ],
        [
        'ten'=> 'Phường Quỳnh Mai',
        'loai'=> 3,
        'parent_id'=> 70
        ],
        [
        'ten'=> 'Phường Quỳnh Lôi',
        'loai'=> 3,
        'parent_id'=> 70
        ],
        [
        'ten'=> 'Phường Minh Khai',
        'loai'=> 3,
        'parent_id'=> 70
        ],
        [
        'ten'=> 'Phường Trương Định',
        'loai'=> 3,
        'parent_id'=> 70
        ],
        [
        'ten'=> 'Phường Thanh Trì',
        'loai'=> 3,
        'parent_id'=> 71
        ],
        [
        'ten'=> 'Phường Vĩnh Hưng',
        'loai'=> 3,
        'parent_id'=> 71
        ],
        [
        'ten'=> 'Phường Định Công',
        'loai'=> 3,
        'parent_id'=> 71
        ],
        [
        'ten'=> 'Phường Mai Động',
        'loai'=> 3,
        'parent_id'=> 71
        ],
        [
        'ten'=> 'Phường Tương Mai',
        'loai'=> 3,
        'parent_id'=> 71
        ],
        [
        'ten'=> 'Phường Đại Kim',
        'loai'=> 3,
        'parent_id'=> 71
        ],
        [
        'ten'=> 'Phường Tân Mai',
        'loai'=> 3,
        'parent_id'=> 71
        ],
        [
        'ten'=> 'Phường Hoàng Văn Thụ',
        'loai'=> 3,
        'parent_id'=> 71
        ],
        [
        'ten'=> 'Phường Giáp Bát',
        'loai'=> 3,
        'parent_id'=> 71
        ],
        [
        'ten'=> 'Phường Lĩnh Nam',
        'loai'=> 3,
        'parent_id'=> 71
        ],
        [
        'ten'=> 'Phường Thịnh Liệt',
        'loai'=> 3,
        'parent_id'=> 71
        ],
        [
        'ten'=> 'Phường Trần Phú',
        'loai'=> 3,
        'parent_id'=> 71
        ],
        [
        'ten'=> 'Phường Hoàng Liệt',
        'loai'=> 3,
        'parent_id'=> 71
        ],
        [
        'ten'=> 'Phường Yên Sở',
        'loai'=> 3,
        'parent_id'=> 71
        ],
        [
        'ten'=> 'Phường Nhân Chính',
        'loai'=> 3,
        'parent_id'=> 72
        ],
        [
        'ten'=> 'Phường Thượng Đình',
        'loai'=> 3,
        'parent_id'=> 72
        ],
        [
        'ten'=> 'Phường Khương Trung',
        'loai'=> 3,
        'parent_id'=> 72
        ],
        [
        'ten'=> 'Phường Khương Mai',
        'loai'=> 3,
        'parent_id'=> 72
        ],
        [
        'ten'=> 'Phường Thanh Xuân Trung',
        'loai'=> 3,
        'parent_id'=> 72
        ],
        [
        'ten'=> 'Phường Phương Liệt',
        'loai'=> 3,
        'parent_id'=> 72
        ],
        [
        'ten'=> 'Phường Hạ Đình',
        'loai'=> 3,
        'parent_id'=> 72
        ],
        [
        'ten'=> 'Phường Khương Đình',
        'loai'=> 3,
        'parent_id'=> 72
        ],
        [
        'ten'=> 'Phường Thanh Xuân Bắc',
        'loai'=> 3,
        'parent_id'=> 72
        ],
        [
        'ten'=> 'Phường Thanh Xuân Nam',
        'loai'=> 3,
        'parent_id'=> 72
        ],
        [
        'ten'=> 'Phường Kim Giang',
        'loai'=> 3,
        'parent_id'=> 72
        ],
        [
        'ten'=> 'Thị trấn Sóc Sơn',
        'loai'=> 3,
        'parent_id'=> 73
        ],
        [
        'ten'=> 'Xã Bắc Sơn',
        'loai'=> 3,
        'parent_id'=> 73
        ],
        [
        'ten'=> 'Xã Minh Trí',
        'loai'=> 3,
        'parent_id'=> 73
        ],
        [
        'ten'=> 'Xã Hồng Kỳ',
        'loai'=> 3,
        'parent_id'=> 73
        ],
        [
        'ten'=> 'Xã Nam Sơn',
        'loai'=> 3,
        'parent_id'=> 73
        ],
        [
        'ten'=> 'Xã Trung Giã',
        'loai'=> 3,
        'parent_id'=> 73
        ],
        [
        'ten'=> 'Xã Tân Hưng',
        'loai'=> 3,
        'parent_id'=> 73
        ],
        [
        'ten'=> 'Xã Minh Phú',
        'loai'=> 3,
        'parent_id'=> 73
        ],
        [
        'ten'=> 'Xã Phù Linh',
        'loai'=> 3,
        'parent_id'=> 73
        ],
        [
        'ten'=> 'Xã Bắc Phú',
        'loai'=> 3,
        'parent_id'=> 73
        ],
        [
        'ten'=> 'Xã Tân Minh',
        'loai'=> 3,
        'parent_id'=> 73
        ],
        [
        'ten'=> 'Xã Quang Tiến',
        'loai'=> 3,
        'parent_id'=> 73
        ],
        [
        'ten'=> 'Xã Hiền Ninh',
        'loai'=> 3,
        'parent_id'=> 73
        ],
        [
        'ten'=> 'Xã Tân Dân',
        'loai'=> 3,
        'parent_id'=> 73
        ],
        [
        'ten'=> 'Xã Tiên Dược',
        'loai'=> 3,
        'parent_id'=> 73
        ],
        [
        'ten'=> 'Xã Việt Long',
        'loai'=> 3,
        'parent_id'=> 73
        ],
        [
        'ten'=> 'Xã Xuân Giang',
        'loai'=> 3,
        'parent_id'=> 73
        ],
        [
        'ten'=> 'Xã Mai Đình',
        'loai'=> 3,
        'parent_id'=> 73
        ],
        [
        'ten'=> 'Xã Đức Hoà',
        'loai'=> 3,
        'parent_id'=> 73
        ],
        [
        'ten'=> 'Xã Thanh Xuân',
        'loai'=> 3,
        'parent_id'=> 73
        ],
        [
        'ten'=> 'Xã Đông Xuân',
        'loai'=> 3,
        'parent_id'=> 73
        ],
        [
        'ten'=> 'Xã Kim Lũ',
        'loai'=> 3,
        'parent_id'=> 73
        ],
        [
        'ten'=> 'Xã Phú Cường',
        'loai'=> 3,
        'parent_id'=> 73
        ],
        [
        'ten'=> 'Xã Phú Minh',
        'loai'=> 3,
        'parent_id'=> 73
        ],
        [
        'ten'=> 'Xã Phù Lỗ',
        'loai'=> 3,
        'parent_id'=> 73
        ],
        [
        'ten'=> 'Xã Xuân Thu',
        'loai'=> 3,
        'parent_id'=> 73
        ],
        [
        'ten'=> 'Thị trấn Đông Anh',
        'loai'=> 3,
        'parent_id'=> 74
        ],
        [
        'ten'=> 'Xã Xuân Nộn',
        'loai'=> 3,
        'parent_id'=> 74
        ],
        [
        'ten'=> 'Xã Thuỵ Lâm',
        'loai'=> 3,
        'parent_id'=> 74
        ],
        [
        'ten'=> 'Xã Bắc Hồng',
        'loai'=> 3,
        'parent_id'=> 74
        ],
        [
        'ten'=> 'Xã Nguyên Khê',
        'loai'=> 3,
        'parent_id'=> 74
        ],
        [
        'ten'=> 'Xã Nam Hồng',
        'loai'=> 3,
        'parent_id'=> 74
        ],
        [
        'ten'=> 'Xã Tiên Dương',
        'loai'=> 3,
        'parent_id'=> 74
        ],
        [
        'ten'=> 'Xã Vân Hà',
        'loai'=> 3,
        'parent_id'=> 74
        ],
        [
        'ten'=> 'Xã Uy Nỗ',
        'loai'=> 3,
        'parent_id'=> 74
        ],
        [
        'ten'=> 'Xã Vân Nội',
        'loai'=> 3,
        'parent_id'=> 74
        ],
        [
        'ten'=> 'Xã Liên Hà',
        'loai'=> 3,
        'parent_id'=> 74
        ],
        [
        'ten'=> 'Xã Việt Hùng',
        'loai'=> 3,
        'parent_id'=> 74
        ],
        [
        'ten'=> 'Xã Kim Nỗ',
        'loai'=> 3,
        'parent_id'=> 74
        ],
        [
        'ten'=> 'Xã Kim Chung',
        'loai'=> 3,
        'parent_id'=> 74
        ],
        [
        'ten'=> 'Xã Dục Tú',
        'loai'=> 3,
        'parent_id'=> 74
        ],
        [
        'ten'=> 'Xã Đại Mạch',
        'loai'=> 3,
        'parent_id'=> 74
        ],
        [
        'ten'=> 'Xã Vĩnh Ngọc',
        'loai'=> 3,
        'parent_id'=> 74
        ],
        [
        'ten'=> 'Xã Cổ Loa',
        'loai'=> 3,
        'parent_id'=> 74
        ],
        [
        'ten'=> 'Xã Hải Bối',
        'loai'=> 3,
        'parent_id'=> 74
        ],
        [
        'ten'=> 'Xã Xuân Canh',
        'loai'=> 3,
        'parent_id'=> 74
        ],
        [
        'ten'=> 'Xã Võng La',
        'loai'=> 3,
        'parent_id'=> 74
        ],
        [
        'ten'=> 'Xã Tàm Xá',
        'loai'=> 3,
        'parent_id'=> 74
        ],
        [
        'ten'=> 'Xã Mai Lâm',
        'loai'=> 3,
        'parent_id'=> 74
        ],
        [
        'ten'=> 'Xã Đông Hội',
        'loai'=> 3,
        'parent_id'=> 74
        ],
        [
        'ten'=> 'Thị trấn Yên Viên',
        'loai'=> 3,
        'parent_id'=> 75
        ],
        [
        'ten'=> 'Xã Yên Thường',
        'loai'=> 3,
        'parent_id'=> 75
        ],
        [
        'ten'=> 'Xã Yên Viên',
        'loai'=> 3,
        'parent_id'=> 75
        ],
        [
        'ten'=> 'Xã Ninh Hiệp',
        'loai'=> 3,
        'parent_id'=> 75
        ],
        [
        'ten'=> 'Xã Đình Xuyên',
        'loai'=> 3,
        'parent_id'=> 75
        ],
        [
        'ten'=> 'Xã Dương Hà',
        'loai'=> 3,
        'parent_id'=> 75
        ],
        [
        'ten'=> 'Xã Phù Đổng',
        'loai'=> 3,
        'parent_id'=> 75
        ],
        [
        'ten'=> 'Xã Trung Mầu',
        'loai'=> 3,
        'parent_id'=> 75
        ],
        [
        'ten'=> 'Xã Lệ Chi',
        'loai'=> 3,
        'parent_id'=> 75
        ],
        [
        'ten'=> 'Xã Cổ Bi',
        'loai'=> 3,
        'parent_id'=> 75
        ],
        [
        'ten'=> 'Xã Đặng Xá',
        'loai'=> 3,
        'parent_id'=> 75
        ],
        [
        'ten'=> 'Xã Phú Thị',
        'loai'=> 3,
        'parent_id'=> 75
        ],
        [
        'ten'=> 'Xã Kim Sơn',
        'loai'=> 3,
        'parent_id'=> 75
        ],
        [
        'ten'=> 'Thị trấn Trâu Quỳ',
        'loai'=> 3,
        'parent_id'=> 75
        ],
        [
        'ten'=> 'Xã Dương Quang',
        'loai'=> 3,
        'parent_id'=> 75
        ],
        [
        'ten'=> 'Xã Dương Xá',
        'loai'=> 3,
        'parent_id'=> 75
        ],
        [
        'ten'=> 'Xã Đông Dư',
        'loai'=> 3,
        'parent_id'=> 75
        ],
        [
        'ten'=> 'Xã Đa Tốn',
        'loai'=> 3,
        'parent_id'=> 75
        ],
        [
        'ten'=> 'Xã Kiêu Kỵ',
        'loai'=> 3,
        'parent_id'=> 75
        ],
        [
        'ten'=> 'Xã Bát Tràng',
        'loai'=> 3,
        'parent_id'=> 75
        ],
        [
        'ten'=> 'Xã Kim Lan',
        'loai'=> 3,
        'parent_id'=> 75
        ],
        [
        'ten'=> 'Xã Văn Đức',
        'loai'=> 3,
        'parent_id'=> 75
        ],
        [
        'ten'=> 'Phường Cầu Diễn',
        'loai'=> 3,
        'parent_id'=> 76
        ],
        [
        'ten'=> 'Phường Xuân Phương',
        'loai'=> 3,
        'parent_id'=> 76
        ],
        [
        'ten'=> 'Phường Phương Canh',
        'loai'=> 3,
        'parent_id'=> 76
        ],
        [
        'ten'=> 'Phường Mỹ Đình 1',
        'loai'=> 3,
        'parent_id'=> 76
        ],
        [
        'ten'=> 'Phường Mỹ Đình 2',
        'loai'=> 3,
        'parent_id'=> 76
        ],
        [
        'ten'=> 'Phường Tây Mỗ',
        'loai'=> 3,
        'parent_id'=> 76
        ],
        [
        'ten'=> 'Phường Mễ Trì',
        'loai'=> 3,
        'parent_id'=> 76
        ],
        [
        'ten'=> 'Phường Phú Đô',
        'loai'=> 3,
        'parent_id'=> 76
        ],
        [
        'ten'=> 'Phường Đại Mỗ',
        'loai'=> 3,
        'parent_id'=> 76
        ],
        [
        'ten'=> 'Phường Trung Văn',
        'loai'=> 3,
        'parent_id'=> 76
        ],
        [
        'ten'=> 'Thị trấn Văn Điển',
        'loai'=> 3,
        'parent_id'=> 77
        ],
        [
        'ten'=> 'Xã Tân Triều',
        'loai'=> 3,
        'parent_id'=> 77
        ],
        [
        'ten'=> 'Xã Thanh Liệt',
        'loai'=> 3,
        'parent_id'=> 77
        ],
        [
        'ten'=> 'Xã Tả Thanh Oai',
        'loai'=> 3,
        'parent_id'=> 77
        ],
        [
        'ten'=> 'Xã Hữu Hoà',
        'loai'=> 3,
        'parent_id'=> 77
        ],
        [
        'ten'=> 'Xã Tam Hiệp',
        'loai'=> 3,
        'parent_id'=> 77
        ],
        [
        'ten'=> 'Xã Tứ Hiệp',
        'loai'=> 3,
        'parent_id'=> 77
        ],
        [
        'ten'=> 'Xã Yên Mỹ',
        'loai'=> 3,
        'parent_id'=> 77
        ],
        [
        'ten'=> 'Xã Vĩnh Quỳnh',
        'loai'=> 3,
        'parent_id'=> 77
        ],
        [
        'ten'=> 'Xã Ngũ Hiệp',
        'loai'=> 3,
        'parent_id'=> 77
        ],
        [
        'ten'=> 'Xã Duyên Hà',
        'loai'=> 3,
        'parent_id'=> 77
        ],
        [
        'ten'=> 'Xã Ngọc Hồi',
        'loai'=> 3,
        'parent_id'=> 77
        ],
        [
        'ten'=> 'Xã Vạn Phúc',
        'loai'=> 3,
        'parent_id'=> 77
        ],
        [
        'ten'=> 'Xã Đại áng',
        'loai'=> 3,
        'parent_id'=> 77
        ],
        [
        'ten'=> 'Xã Liên Ninh',
        'loai'=> 3,
        'parent_id'=> 77
        ],
        [
        'ten'=> 'Xã Đông Mỹ',
        'loai'=> 3,
        'parent_id'=> 77
        ],
        [
        'ten'=> 'Phường Thượng Cát',
        'loai'=> 3,
        'parent_id'=> 78
        ],
        [
        'ten'=> 'Phường Liên Mạc',
        'loai'=> 3,
        'parent_id'=> 78
        ],
        [
        'ten'=> 'Phường Đông Ngạc',
        'loai'=> 3,
        'parent_id'=> 78
        ],
        [
        'ten'=> 'Phường Đức Thắng',
        'loai'=> 3,
        'parent_id'=> 78
        ],
        [
        'ten'=> 'Phường Thụy Phương',
        'loai'=> 3,
        'parent_id'=> 78
        ],
        [
        'ten'=> 'Phường Tây Tựu',
        'loai'=> 3,
        'parent_id'=> 78
        ],
        [
        'ten'=> 'Phường Xuân Đỉnh',
        'loai'=> 3,
        'parent_id'=> 78
        ],
        [
        'ten'=> 'Phường Xuân Tảo',
        'loai'=> 3,
        'parent_id'=> 78
        ],
        [
        'ten'=> 'Phường Minh Khai',
        'loai'=> 3,
        'parent_id'=> 78
        ],
        [
        'ten'=> 'Phường Cổ Nhuế 1',
        'loai'=> 3,
        'parent_id'=> 78
        ],
        [
        'ten'=> 'Phường Cổ Nhuế 2',
        'loai'=> 3,
        'parent_id'=> 78
        ],
        [
        'ten'=> 'Phường Phú Diễn',
        'loai'=> 3,
        'parent_id'=> 78
        ],
        [
        'ten'=> 'Phường Phúc Diễn',
        'loai'=> 3,
        'parent_id'=> 78
        ],
        [
        'ten'=> 'Thị trấn Chi Đông',
        'loai'=> 3,
        'parent_id'=> 79
        ],
        [
        'ten'=> 'Xã Đại Thịnh',
        'loai'=> 3,
        'parent_id'=> 79
        ],
        [
        'ten'=> 'Xã Kim Hoa',
        'loai'=> 3,
        'parent_id'=> 79
        ],
        [
        'ten'=> 'Xã Thạch Đà',
        'loai'=> 3,
        'parent_id'=> 79
        ],
        [
        'ten'=> 'Xã Tiến Thắng',
        'loai'=> 3,
        'parent_id'=> 79
        ],
        [
        'ten'=> 'Xã Tự Lập',
        'loai'=> 3,
        'parent_id'=> 79
        ],
        [
        'ten'=> 'Thị trấn Quang Minh',
        'loai'=> 3,
        'parent_id'=> 79
        ],
        [
        'ten'=> 'Xã Thanh Lâm',
        'loai'=> 3,
        'parent_id'=> 79
        ],
        [
        'ten'=> 'Xã Tam Đồng',
        'loai'=> 3,
        'parent_id'=> 79
        ],
        [
        'ten'=> 'Xã Liên Mạc',
        'loai'=> 3,
        'parent_id'=> 79
        ],
        [
        'ten'=> 'Xã Vạn Yên',
        'loai'=> 3,
        'parent_id'=> 79
        ],
        [
        'ten'=> 'Xã Chu Phan',
        'loai'=> 3,
        'parent_id'=> 79
        ],
        [
        'ten'=> 'Xã Tiến Thịnh',
        'loai'=> 3,
        'parent_id'=> 79
        ],
        [
        'ten'=> 'Xã Mê Linh',
        'loai'=> 3,
        'parent_id'=> 79
        ],
        [
        'ten'=> 'Xã Văn Khê',
        'loai'=> 3,
        'parent_id'=> 79
        ],
        [
        'ten'=> 'Xã Hoàng Kim',
        'loai'=> 3,
        'parent_id'=> 79
        ],
        [
        'ten'=> 'Xã Tiền Phong',
        'loai'=> 3,
        'parent_id'=> 79
        ],
        [
        'ten'=> 'Xã Tráng Việt',
        'loai'=> 3,
        'parent_id'=> 79
        ],
        [
        'ten'=> 'Phường Nguyễn Trãi',
        'loai'=> 3,
        'parent_id'=> 80
        ],
        [
        'ten'=> 'Phường Mộ Lao',
        'loai'=> 3,
        'parent_id'=> 80
        ],
        [
        'ten'=> 'Phường Văn Quán',
        'loai'=> 3,
        'parent_id'=> 80
        ],
        [
        'ten'=> 'Phường Vạn Phúc',
        'loai'=> 3,
        'parent_id'=> 80
        ],
        [
        'ten'=> 'Phường Yết Kiêu',
        'loai'=> 3,
        'parent_id'=> 80
        ],
        [
        'ten'=> 'Phường Quang Trung',
        'loai'=> 3,
        'parent_id'=> 80
        ],
        [
        'ten'=> 'Phường La Khê',
        'loai'=> 3,
        'parent_id'=> 80
        ],
        [
        'ten'=> 'Phường Phú La',
        'loai'=> 3,
        'parent_id'=> 80
        ],
        [
        'ten'=> 'Phường Phúc La',
        'loai'=> 3,
        'parent_id'=> 80
        ],
        [
        'ten'=> 'Phường Hà Cầu',
        'loai'=> 3,
        'parent_id'=> 80
        ],
        [
        'ten'=> 'Phường Yên Nghĩa',
        'loai'=> 3,
        'parent_id'=> 80
        ],
        [
        'ten'=> 'Phường Kiến Hưng',
        'loai'=> 3,
        'parent_id'=> 80
        ],
        [
        'ten'=> 'Phường Phú Lãm',
        'loai'=> 3,
        'parent_id'=> 80
        ],
        [
        'ten'=> 'Phường Phú Lương',
        'loai'=> 3,
        'parent_id'=> 80
        ],
        [
        'ten'=> 'Phường Dương Nội',
        'loai'=> 3,
        'parent_id'=> 80
        ],
        [
        'ten'=> 'Phường Đồng Mai',
        'loai'=> 3,
        'parent_id'=> 80
        ],
        [
        'ten'=> 'Phường Biên Giang',
        'loai'=> 3,
        'parent_id'=> 80
        ],
        [
        'ten'=> 'Phường Lê Lợi',
        'loai'=> 3,
        'parent_id'=> 81
        ],
        [
        'ten'=> 'Phường Phú Thịnh',
        'loai'=> 3,
        'parent_id'=> 81
        ],
        [
        'ten'=> 'Phường Ngô Quyền',
        'loai'=> 3,
        'parent_id'=> 81
        ],
        [
        'ten'=> 'Phường Quang Trung',
        'loai'=> 3,
        'parent_id'=> 81
        ],
        [
        'ten'=> 'Phường Sơn Lộc',
        'loai'=> 3,
        'parent_id'=> 81
        ],
        [
        'ten'=> 'Phường Xuân Khanh',
        'loai'=> 3,
        'parent_id'=> 81
        ],
        [
        'ten'=> 'Xã Đường Lâm',
        'loai'=> 3,
        'parent_id'=> 81
        ],
        [
        'ten'=> 'Phường Viên Sơn',
        'loai'=> 3,
        'parent_id'=> 81
        ],
        [
        'ten'=> 'Xã Xuân Sơn',
        'loai'=> 3,
        'parent_id'=> 81
        ],
        [
        'ten'=> 'Phường Trung Hưng',
        'loai'=> 3,
        'parent_id'=> 81
        ],
        [
        'ten'=> 'Xã Thanh Mỹ',
        'loai'=> 3,
        'parent_id'=> 81
        ],
        [
        'ten'=> 'Phường Trung Sơn Trầm',
        'loai'=> 3,
        'parent_id'=> 81
        ],
        [
        'ten'=> 'Xã Kim Sơn',
        'loai'=> 3,
        'parent_id'=> 81
        ],
        [
        'ten'=> 'Xã Sơn Đông',
        'loai'=> 3,
        'parent_id'=> 81
        ],
        [
        'ten'=> 'Xã Cổ Đông',
        'loai'=> 3,
        'parent_id'=> 81
        ],
        [
        'ten'=> 'Thị trấn Tây Đằng',
        'loai'=> 3,
        'parent_id'=> 82
        ],
        [
        'ten'=> 'Xã Phú Cường',
        'loai'=> 3,
        'parent_id'=> 82
        ],
        [
        'ten'=> 'Xã Cổ Đô',
        'loai'=> 3,
        'parent_id'=> 82
        ],
        [
        'ten'=> 'Xã Tản Hồng',
        'loai'=> 3,
        'parent_id'=> 82
        ],
        [
        'ten'=> 'Xã Vạn Thắng',
        'loai'=> 3,
        'parent_id'=> 82
        ],
        [
        'ten'=> 'Xã Châu Sơn',
        'loai'=> 3,
        'parent_id'=> 82
        ],
        [
        'ten'=> 'Xã Phong Vân',
        'loai'=> 3,
        'parent_id'=> 82
        ],
        [
        'ten'=> 'Xã Phú Đông',
        'loai'=> 3,
        'parent_id'=> 82
        ],
        [
        'ten'=> 'Xã Phú Phương',
        'loai'=> 3,
        'parent_id'=> 82
        ],
        [
        'ten'=> 'Xã Phú Châu',
        'loai'=> 3,
        'parent_id'=> 82
        ],
        [
        'ten'=> 'Xã Thái Hòa',
        'loai'=> 3,
        'parent_id'=> 82
        ],
        [
        'ten'=> 'Xã Đồng Thái',
        'loai'=> 3,
        'parent_id'=> 82
        ],
        [
        'ten'=> 'Xã Phú Sơn',
        'loai'=> 3,
        'parent_id'=> 82
        ],
        [
        'ten'=> 'Xã Minh Châu',
        'loai'=> 3,
        'parent_id'=> 82
        ],
        [
        'ten'=> 'Xã Vật Lại',
        'loai'=> 3,
        'parent_id'=> 82
        ],
        [
        'ten'=> 'Xã Chu Minh',
        'loai'=> 3,
        'parent_id'=> 82
        ],
        [
        'ten'=> 'Xã Tòng Bạt',
        'loai'=> 3,
        'parent_id'=> 82
        ],
        [
        'ten'=> 'Xã Cẩm Lĩnh',
        'loai'=> 3,
        'parent_id'=> 82
        ],
        [
        'ten'=> 'Xã Sơn Đà',
        'loai'=> 3,
        'parent_id'=> 82
        ],
        [
        'ten'=> 'Xã Đông Quang',
        'loai'=> 3,
        'parent_id'=> 82
        ],
        [
        'ten'=> 'Xã Tiên Phong',
        'loai'=> 3,
        'parent_id'=> 82
        ],
        [
        'ten'=> 'Xã Thụy An',
        'loai'=> 3,
        'parent_id'=> 82
        ],
        [
        'ten'=> 'Xã Cam Thượng',
        'loai'=> 3,
        'parent_id'=> 82
        ],
        [
        'ten'=> 'Xã Thuần Mỹ',
        'loai'=> 3,
        'parent_id'=> 82
        ],
        [
        'ten'=> 'Xã Tản Lĩnh',
        'loai'=> 3,
        'parent_id'=> 82
        ],
        [
        'ten'=> 'Xã Ba Trại',
        'loai'=> 3,
        'parent_id'=> 82
        ],
        [
        'ten'=> 'Xã Minh Quang',
        'loai'=> 3,
        'parent_id'=> 82
        ],
        [
        'ten'=> 'Xã Ba Vì',
        'loai'=> 3,
        'parent_id'=> 82
        ],
        [
        'ten'=> 'Xã Vân Hòa',
        'loai'=> 3,
        'parent_id'=> 82
        ],
        [
        'ten'=> 'Xã Yên Bài',
        'loai'=> 3,
        'parent_id'=> 82
        ],
        [
        'ten'=> 'Xã Khánh Thượng',
        'loai'=> 3,
        'parent_id'=> 82
        ],
        [
        'ten'=> 'Thị trấn Phúc Thọ',
        'loai'=> 3,
        'parent_id'=> 83
        ],
        [
        'ten'=> 'Xã Vân Hà',
        'loai'=> 3,
        'parent_id'=> 83
        ],
        [
        'ten'=> 'Xã Vân Phúc',
        'loai'=> 3,
        'parent_id'=> 83
        ],
        [
        'ten'=> 'Xã Vân Nam',
        'loai'=> 3,
        'parent_id'=> 83
        ],
        [
        'ten'=> 'Xã Xuân Đình',
        'loai'=> 3,
        'parent_id'=> 83
        ],
        [
        'ten'=> 'Xã Sen Phương',
        'loai'=> 3,
        'parent_id'=> 83
        ],
        [
        'ten'=> 'Xã Võng Xuyên',
        'loai'=> 3,
        'parent_id'=> 83
        ],
        [
        'ten'=> 'Xã Thọ Lộc',
        'loai'=> 3,
        'parent_id'=> 83
        ],
        [
        'ten'=> 'Xã Long Xuyên',
        'loai'=> 3,
        'parent_id'=> 83
        ],
        [
        'ten'=> 'Xã Thượng Cốc',
        'loai'=> 3,
        'parent_id'=> 83
        ],
        [
        'ten'=> 'Xã Hát Môn',
        'loai'=> 3,
        'parent_id'=> 83
        ],
        [
        'ten'=> 'Xã Tích Giang',
        'loai'=> 3,
        'parent_id'=> 83
        ],
        [
        'ten'=> 'Xã Thanh Đa',
        'loai'=> 3,
        'parent_id'=> 83
        ],
        [
        'ten'=> 'Xã Trạch Mỹ Lộc',
        'loai'=> 3,
        'parent_id'=> 83
        ],
        [
        'ten'=> 'Xã Phúc Hòa',
        'loai'=> 3,
        'parent_id'=> 83
        ],
        [
        'ten'=> 'Xã Ngọc Tảo',
        'loai'=> 3,
        'parent_id'=> 83
        ],
        [
        'ten'=> 'Xã Phụng Thượng',
        'loai'=> 3,
        'parent_id'=> 83
        ],
        [
        'ten'=> 'Xã Tam Thuấn',
        'loai'=> 3,
        'parent_id'=> 83
        ],
        [
        'ten'=> 'Xã Tam Hiệp',
        'loai'=> 3,
        'parent_id'=> 83
        ],
        [
        'ten'=> 'Xã Hiệp Thuận',
        'loai'=> 3,
        'parent_id'=> 83
        ],
        [
        'ten'=> 'Xã Liên Hiệp',
        'loai'=> 3,
        'parent_id'=> 83
        ],
        [
        'ten'=> 'Thị trấn Phùng',
        'loai'=> 3,
        'parent_id'=> 84
        ],
        [
        'ten'=> 'Xã Trung Châu',
        'loai'=> 3,
        'parent_id'=> 84
        ],
        [
        'ten'=> 'Xã Thọ An',
        'loai'=> 3,
        'parent_id'=> 84
        ],
        [
        'ten'=> 'Xã Thọ Xuân',
        'loai'=> 3,
        'parent_id'=> 84
        ],
        [
        'ten'=> 'Xã Hồng Hà',
        'loai'=> 3,
        'parent_id'=> 84
        ],
        [
        'ten'=> 'Xã Liên Hồng',
        'loai'=> 3,
        'parent_id'=> 84
        ],
        [
        'ten'=> 'Xã Liên Hà',
        'loai'=> 3,
        'parent_id'=> 84
        ],
        [
        'ten'=> 'Xã Hạ Mỗ',
        'loai'=> 3,
        'parent_id'=> 84
        ],
        [
        'ten'=> 'Xã Liên Trung',
        'loai'=> 3,
        'parent_id'=> 84
        ],
        [
        'ten'=> 'Xã Phương Đình',
        'loai'=> 3,
        'parent_id'=> 84
        ],
        [
        'ten'=> 'Xã Thượng Mỗ',
        'loai'=> 3,
        'parent_id'=> 84
        ],
        [
        'ten'=> 'Xã Tân Hội',
        'loai'=> 3,
        'parent_id'=> 84
        ],
        [
        'ten'=> 'Xã Tân Lập',
        'loai'=> 3,
        'parent_id'=> 84
        ],
        [
        'ten'=> 'Xã Đan Phượng',
        'loai'=> 3,
        'parent_id'=> 84
        ],
        [
        'ten'=> 'Xã Đồng Tháp',
        'loai'=> 3,
        'parent_id'=> 84
        ],
        [
        'ten'=> 'Xã Song Phượng',
        'loai'=> 3,
        'parent_id'=> 84
        ],
        [
        'ten'=> 'Thị trấn Trạm Trôi',
        'loai'=> 3,
        'parent_id'=> 85
        ],
        [
        'ten'=> 'Xã Đức Thượng',
        'loai'=> 3,
        'parent_id'=> 85
        ],
        [
        'ten'=> 'Xã Minh Khai',
        'loai'=> 3,
        'parent_id'=> 85
        ],
        [
        'ten'=> 'Xã Dương Liễu',
        'loai'=> 3,
        'parent_id'=> 85
        ],
        [
        'ten'=> 'Xã Di Trạch',
        'loai'=> 3,
        'parent_id'=> 85
        ],
        [
        'ten'=> 'Xã Đức Giang',
        'loai'=> 3,
        'parent_id'=> 85
        ],
        [
        'ten'=> 'Xã Cát Quế',
        'loai'=> 3,
        'parent_id'=> 85
        ],
        [
        'ten'=> 'Xã Kim Chung',
        'loai'=> 3,
        'parent_id'=> 85
        ],
        [
        'ten'=> 'Xã Yên Sở',
        'loai'=> 3,
        'parent_id'=> 85
        ],
        [
        'ten'=> 'Xã Sơn Đồng',
        'loai'=> 3,
        'parent_id'=> 85
        ],
        [
        'ten'=> 'Xã Vân Canh',
        'loai'=> 3,
        'parent_id'=> 85
        ],
        [
        'ten'=> 'Xã Đắc Sở',
        'loai'=> 3,
        'parent_id'=> 85
        ],
        [
        'ten'=> 'Xã Lại Yên',
        'loai'=> 3,
        'parent_id'=> 85
        ],
        [
        'ten'=> 'Xã Tiền Yên',
        'loai'=> 3,
        'parent_id'=> 85
        ],
        [
        'ten'=> 'Xã Song Phương',
        'loai'=> 3,
        'parent_id'=> 85
        ],
        [
        'ten'=> 'Xã An Khánh',
        'loai'=> 3,
        'parent_id'=> 85
        ],
        [
        'ten'=> 'Xã An Thượng',
        'loai'=> 3,
        'parent_id'=> 85
        ],
        [
        'ten'=> 'Xã Vân Côn',
        'loai'=> 3,
        'parent_id'=> 85
        ],
        [
        'ten'=> 'Xã La Phù',
        'loai'=> 3,
        'parent_id'=> 85
        ],
        [
        'ten'=> 'Xã Đông La',
        'loai'=> 3,
        'parent_id'=> 85
        ],
        [
        'ten'=> 'Xã Đông Xuân',
        'loai'=> 3,
        'parent_id'=> 86
        ],
        [
        'ten'=> 'Thị trấn Quốc Oai',
        'loai'=> 3,
        'parent_id'=> 86
        ],
        [
        'ten'=> 'Xã Sài Sơn',
        'loai'=> 3,
        'parent_id'=> 86
        ],
        [
        'ten'=> 'Xã Phượng Cách',
        'loai'=> 3,
        'parent_id'=> 86
        ],
        [
        'ten'=> 'Xã Yên Sơn',
        'loai'=> 3,
        'parent_id'=> 86
        ],
        [
        'ten'=> 'Xã Ngọc Liệp',
        'loai'=> 3,
        'parent_id'=> 86
        ],
        [
        'ten'=> 'Xã Ngọc Mỹ',
        'loai'=> 3,
        'parent_id'=> 86
        ],
        [
        'ten'=> 'Xã Liệp Tuyết',
        'loai'=> 3,
        'parent_id'=> 86
        ],
        [
        'ten'=> 'Xã Thạch Thán',
        'loai'=> 3,
        'parent_id'=> 86
        ],
        [
        'ten'=> 'Xã Đồng Quang',
        'loai'=> 3,
        'parent_id'=> 86
        ],
        [
        'ten'=> 'Xã Phú Cát',
        'loai'=> 3,
        'parent_id'=> 86
        ],
        [
        'ten'=> 'Xã Tuyết Nghĩa',
        'loai'=> 3,
        'parent_id'=> 86
        ],
        [
        'ten'=> 'Xã Nghĩa Hương',
        'loai'=> 3,
        'parent_id'=> 86
        ],
        [
        'ten'=> 'Xã Cộng Hòa',
        'loai'=> 3,
        'parent_id'=> 86
        ],
        [
        'ten'=> 'Xã Tân Phú',
        'loai'=> 3,
        'parent_id'=> 86
        ],
        [
        'ten'=> 'Xã Đại Thành',
        'loai'=> 3,
        'parent_id'=> 86
        ],
        [
        'ten'=> 'Xã Phú Mãn',
        'loai'=> 3,
        'parent_id'=> 86
        ],
        [
        'ten'=> 'Xã Cấn Hữu',
        'loai'=> 3,
        'parent_id'=> 86
        ],
        [
        'ten'=> 'Xã Tân Hòa',
        'loai'=> 3,
        'parent_id'=> 86
        ],
        [
        'ten'=> 'Xã Hòa Thạch',
        'loai'=> 3,
        'parent_id'=> 86
        ],
        [
        'ten'=> 'Xã Đông Yên',
        'loai'=> 3,
        'parent_id'=> 86
        ],
        [
        'ten'=> 'Xã Yên Trung',
        'loai'=> 3,
        'parent_id'=> 87
        ],
        [
        'ten'=> 'Xã Yên Bình',
        'loai'=> 3,
        'parent_id'=> 87
        ],
        [
        'ten'=> 'Xã Tiến Xuân',
        'loai'=> 3,
        'parent_id'=> 87
        ],
        [
        'ten'=> 'Thị trấn Liên Quan',
        'loai'=> 3,
        'parent_id'=> 87
        ],
        [
        'ten'=> 'Xã Đại Đồng',
        'loai'=> 3,
        'parent_id'=> 87
        ],
        [
        'ten'=> 'Xã Cẩm Yên',
        'loai'=> 3,
        'parent_id'=> 87
        ],
        [
        'ten'=> 'Xã Lại Thượng',
        'loai'=> 3,
        'parent_id'=> 87
        ],
        [
        'ten'=> 'Xã Phú Kim',
        'loai'=> 3,
        'parent_id'=> 87
        ],
        [
        'ten'=> 'Xã Hương Ngải',
        'loai'=> 3,
        'parent_id'=> 87
        ],
        [
        'ten'=> 'Xã Canh Nậu',
        'loai'=> 3,
        'parent_id'=> 87
        ],
        [
        'ten'=> 'Xã Kim Quan',
        'loai'=> 3,
        'parent_id'=> 87
        ],
        [
        'ten'=> 'Xã Dị Nậu',
        'loai'=> 3,
        'parent_id'=> 87
        ],
        [
        'ten'=> 'Xã Bình Yên',
        'loai'=> 3,
        'parent_id'=> 87
        ],
        [
        'ten'=> 'Xã Chàng Sơn',
        'loai'=> 3,
        'parent_id'=> 87
        ],
        [
        'ten'=> 'Xã Thạch Hoà',
        'loai'=> 3,
        'parent_id'=> 87
        ],
        [
        'ten'=> 'Xã Cần Kiệm',
        'loai'=> 3,
        'parent_id'=> 87
        ],
        [
        'ten'=> 'Xã Hữu Bằng',
        'loai'=> 3,
        'parent_id'=> 87
        ],
        [
        'ten'=> 'Xã Phùng Xá',
        'loai'=> 3,
        'parent_id'=> 87
        ],
        [
        'ten'=> 'Xã Tân Xã',
        'loai'=> 3,
        'parent_id'=> 87
        ],
        [
        'ten'=> 'Xã Thạch Xá',
        'loai'=> 3,
        'parent_id'=> 87
        ],
        [
        'ten'=> 'Xã Bình Phú',
        'loai'=> 3,
        'parent_id'=> 87
        ],
        [
        'ten'=> 'Xã Hạ Bằng',
        'loai'=> 3,
        'parent_id'=> 87
        ],
        [
        'ten'=> 'Xã Đồng Trúc',
        'loai'=> 3,
        'parent_id'=> 87
        ],
        [
        'ten'=> 'Thị trấn Chúc Sơn',
        'loai'=> 3,
        'parent_id'=> 88
        ],
        [
        'ten'=> 'Thị trấn Xuân Mai',
        'loai'=> 3,
        'parent_id'=> 88
        ],
        [
        'ten'=> 'Xã Phụng Châu',
        'loai'=> 3,
        'parent_id'=> 88
        ],
        [
        'ten'=> 'Xã Tiên Phương',
        'loai'=> 3,
        'parent_id'=> 88
        ],
        [
        'ten'=> 'Xã Đông Sơn',
        'loai'=> 3,
        'parent_id'=> 88
        ],
        [
        'ten'=> 'Xã Đông Phương Yên',
        'loai'=> 3,
        'parent_id'=> 88
        ],
        [
        'ten'=> 'Xã Phú Nghĩa',
        'loai'=> 3,
        'parent_id'=> 88
        ],
        [
        'ten'=> 'Xã Trường Yên',
        'loai'=> 3,
        'parent_id'=> 88
        ],
        [
        'ten'=> 'Xã Ngọc Hòa',
        'loai'=> 3,
        'parent_id'=> 88
        ],
        [
        'ten'=> 'Xã Thủy Xuân Tiên',
        'loai'=> 3,
        'parent_id'=> 88
        ],
        [
        'ten'=> 'Xã Thanh Bình',
        'loai'=> 3,
        'parent_id'=> 88
        ],
        [
        'ten'=> 'Xã Trung Hòa',
        'loai'=> 3,
        'parent_id'=> 88
        ],
        [
        'ten'=> 'Xã Đại Yên',
        'loai'=> 3,
        'parent_id'=> 88
        ],
        [
        'ten'=> 'Xã Thụy Hương',
        'loai'=> 3,
        'parent_id'=> 88
        ],
        [
        'ten'=> 'Xã Tốt Động',
        'loai'=> 3,
        'parent_id'=> 88
        ],
        [
        'ten'=> 'Xã Lam Điền',
        'loai'=> 3,
        'parent_id'=> 88
        ],
        [
        'ten'=> 'Xã Tân Tiến',
        'loai'=> 3,
        'parent_id'=> 88
        ],
        [
        'ten'=> 'Xã Nam Phương Tiến',
        'loai'=> 3,
        'parent_id'=> 88
        ],
        [
        'ten'=> 'Xã Hợp Đồng',
        'loai'=> 3,
        'parent_id'=> 88
        ],
        [
        'ten'=> 'Xã Hoàng Văn Thụ',
        'loai'=> 3,
        'parent_id'=> 88
        ],
        [
        'ten'=> 'Xã Hoàng Diệu',
        'loai'=> 3,
        'parent_id'=> 88
        ],
        [
        'ten'=> 'Xã Hữu Văn',
        'loai'=> 3,
        'parent_id'=> 88
        ],
        [
        'ten'=> 'Xã Quảng Bị',
        'loai'=> 3,
        'parent_id'=> 88
        ],
        [
        'ten'=> 'Xã Mỹ Lương',
        'loai'=> 3,
        'parent_id'=> 88
        ],
        [
        'ten'=> 'Xã Thượng Vực',
        'loai'=> 3,
        'parent_id'=> 88
        ],
        [
        'ten'=> 'Xã Hồng Phong',
        'loai'=> 3,
        'parent_id'=> 88
        ],
        [
        'ten'=> 'Xã Đồng Phú',
        'loai'=> 3,
        'parent_id'=> 88
        ],
        [
        'ten'=> 'Xã Trần Phú',
        'loai'=> 3,
        'parent_id'=> 88
        ],
        [
        'ten'=> 'Xã Văn Võ',
        'loai'=> 3,
        'parent_id'=> 88
        ],
        [
        'ten'=> 'Xã Đồng Lạc',
        'loai'=> 3,
        'parent_id'=> 88
        ],
        [
        'ten'=> 'Xã Hòa Chính',
        'loai'=> 3,
        'parent_id'=> 88
        ],
        [
        'ten'=> 'Xã Phú Nam An',
        'loai'=> 3,
        'parent_id'=> 88
        ],
        [
        'ten'=> 'Thị trấn Kim Bài',
        'loai'=> 3,
        'parent_id'=> 89
        ],
        [
        'ten'=> 'Xã Cự Khê',
        'loai'=> 3,
        'parent_id'=> 89
        ],
        [
        'ten'=> 'Xã Bích Hòa',
        'loai'=> 3,
        'parent_id'=> 89
        ],
        [
        'ten'=> 'Xã Mỹ Hưng',
        'loai'=> 3,
        'parent_id'=> 89
        ],
        [
        'ten'=> 'Xã Cao Viên',
        'loai'=> 3,
        'parent_id'=> 89
        ],
        [
        'ten'=> 'Xã Bình Minh',
        'loai'=> 3,
        'parent_id'=> 89
        ],
        [
        'ten'=> 'Xã Tam Hưng',
        'loai'=> 3,
        'parent_id'=> 89
        ],
        [
        'ten'=> 'Xã Thanh Cao',
        'loai'=> 3,
        'parent_id'=> 89
        ],
        [
        'ten'=> 'Xã Thanh Thùy',
        'loai'=> 3,
        'parent_id'=> 89
        ],
        [
        'ten'=> 'Xã Thanh Mai',
        'loai'=> 3,
        'parent_id'=> 89
        ],
        [
        'ten'=> 'Xã Thanh Văn',
        'loai'=> 3,
        'parent_id'=> 89
        ],
        [
        'ten'=> 'Xã Đỗ Động',
        'loai'=> 3,
        'parent_id'=> 89
        ],
        [
        'ten'=> 'Xã Kim An',
        'loai'=> 3,
        'parent_id'=> 89
        ],
        [
        'ten'=> 'Xã Kim Thư',
        'loai'=> 3,
        'parent_id'=> 89
        ],
        [
        'ten'=> 'Xã Phương Trung',
        'loai'=> 3,
        'parent_id'=> 89
        ],
        [
        'ten'=> 'Xã Tân Ước',
        'loai'=> 3,
        'parent_id'=> 89
        ],
        [
        'ten'=> 'Xã Dân Hòa',
        'loai'=> 3,
        'parent_id'=> 89
        ],
        [
        'ten'=> 'Xã Liên Châu',
        'loai'=> 3,
        'parent_id'=> 89
        ],
        [
        'ten'=> 'Xã Cao Dương',
        'loai'=> 3,
        'parent_id'=> 89
        ],
        [
        'ten'=> 'Xã Xuân Dương',
        'loai'=> 3,
        'parent_id'=> 89
        ],
        [
        'ten'=> 'Xã Hồng Dương',
        'loai'=> 3,
        'parent_id'=> 89
        ],
        [
        'ten'=> 'Thị trấn Thường Tín',
        'loai'=> 3,
        'parent_id'=> 90
        ],
        [
        'ten'=> 'Xã Ninh Sở',
        'loai'=> 3,
        'parent_id'=> 90
        ],
        [
        'ten'=> 'Xã Nhị Khê',
        'loai'=> 3,
        'parent_id'=> 90
        ],
        [
        'ten'=> 'Xã Duyên Thái',
        'loai'=> 3,
        'parent_id'=> 90
        ],
        [
        'ten'=> 'Xã Khánh Hà',
        'loai'=> 3,
        'parent_id'=> 90
        ],
        [
        'ten'=> 'Xã Hòa Bình',
        'loai'=> 3,
        'parent_id'=> 90
        ],
        [
        'ten'=> 'Xã Văn Bình',
        'loai'=> 3,
        'parent_id'=> 90
        ],
        [
        'ten'=> 'Xã Hiền Giang',
        'loai'=> 3,
        'parent_id'=> 90
        ],
        [
        'ten'=> 'Xã Hồng Vân',
        'loai'=> 3,
        'parent_id'=> 90
        ],
        [
        'ten'=> 'Xã Vân Tảo',
        'loai'=> 3,
        'parent_id'=> 90
        ],
        [
        'ten'=> 'Xã Liên Phương',
        'loai'=> 3,
        'parent_id'=> 90
        ],
        [
        'ten'=> 'Xã Văn Phú',
        'loai'=> 3,
        'parent_id'=> 90
        ],
        [
        'ten'=> 'Xã Tự Nhiên',
        'loai'=> 3,
        'parent_id'=> 90
        ],
        [
        'ten'=> 'Xã Tiền Phong',
        'loai'=> 3,
        'parent_id'=> 90
        ],
        [
        'ten'=> 'Xã Hà Hồi',
        'loai'=> 3,
        'parent_id'=> 90
        ],
        [
        'ten'=> 'Xã Thư Phú',
        'loai'=> 3,
        'parent_id'=> 90
        ],
        [
        'ten'=> 'Xã Nguyễn Trãi',
        'loai'=> 3,
        'parent_id'=> 90
        ],
        [
        'ten'=> 'Xã Quất Động',
        'loai'=> 3,
        'parent_id'=> 90
        ],
        [
        'ten'=> 'Xã Chương Dương',
        'loai'=> 3,
        'parent_id'=> 90
        ],
        [
        'ten'=> 'Xã Tân Minh',
        'loai'=> 3,
        'parent_id'=> 90
        ],
        [
        'ten'=> 'Xã Lê Lợi',
        'loai'=> 3,
        'parent_id'=> 90
        ],
        [
        'ten'=> 'Xã Thắng Lợi',
        'loai'=> 3,
        'parent_id'=> 90
        ],
        [
        'ten'=> 'Xã Dũng Tiến',
        'loai'=> 3,
        'parent_id'=> 90
        ],
        [
        'ten'=> 'Xã Thống Nhất',
        'loai'=> 3,
        'parent_id'=> 90
        ],
        [
        'ten'=> 'Xã Nghiêm Xuyên',
        'loai'=> 3,
        'parent_id'=> 90
        ],
        [
        'ten'=> 'Xã Tô Hiệu',
        'loai'=> 3,
        'parent_id'=> 90
        ],
        [
        'ten'=> 'Xã Văn Tự',
        'loai'=> 3,
        'parent_id'=> 90
        ],
        [
        'ten'=> 'Xã Vạn Điểm',
        'loai'=> 3,
        'parent_id'=> 90
        ],
        [
        'ten'=> 'Xã Minh Cường',
        'loai'=> 3,
        'parent_id'=> 90
        ],
        [
        'ten'=> 'Thị trấn Phú Minh',
        'loai'=> 3,
        'parent_id'=> 91
        ],
        [
        'ten'=> 'Thị trấn Phú Xuyên',
        'loai'=> 3,
        'parent_id'=> 91
        ],
        [
        'ten'=> 'Xã Hồng Minh',
        'loai'=> 3,
        'parent_id'=> 91
        ],
        [
        'ten'=> 'Xã Phượng Dực',
        'loai'=> 3,
        'parent_id'=> 91
        ],
        [
        'ten'=> 'Xã Nam Tiến',
        'loai'=> 3,
        'parent_id'=> 91
        ],
        [
        'ten'=> 'Xã Tri Trung',
        'loai'=> 3,
        'parent_id'=> 91
        ],
        [
        'ten'=> 'Xã Đại Thắng',
        'loai'=> 3,
        'parent_id'=> 91
        ],
        [
        'ten'=> 'Xã Phú Túc',
        'loai'=> 3,
        'parent_id'=> 91
        ],
        [
        'ten'=> 'Xã Văn Hoàng',
        'loai'=> 3,
        'parent_id'=> 91
        ],
        [
        'ten'=> 'Xã Hồng Thái',
        'loai'=> 3,
        'parent_id'=> 91
        ],
        [
        'ten'=> 'Xã Hoàng Long',
        'loai'=> 3,
        'parent_id'=> 91
        ],
        [
        'ten'=> 'Xã Quang Trung',
        'loai'=> 3,
        'parent_id'=> 91
        ],
        [
        'ten'=> 'Xã Nam Phong',
        'loai'=> 3,
        'parent_id'=> 91
        ],
        [
        'ten'=> 'Xã Nam Triều',
        'loai'=> 3,
        'parent_id'=> 91
        ],
        [
        'ten'=> 'Xã Tân Dân',
        'loai'=> 3,
        'parent_id'=> 91
        ],
        [
        'ten'=> 'Xã Sơn Hà',
        'loai'=> 3,
        'parent_id'=> 91
        ],
        [
        'ten'=> 'Xã Chuyên Mỹ',
        'loai'=> 3,
        'parent_id'=> 91
        ],
        [
        'ten'=> 'Xã Khai Thái',
        'loai'=> 3,
        'parent_id'=> 91
        ],
        [
        'ten'=> 'Xã Phúc Tiến',
        'loai'=> 3,
        'parent_id'=> 91
        ],
        [
        'ten'=> 'Xã Vân Từ',
        'loai'=> 3,
        'parent_id'=> 91
        ],
        [
        'ten'=> 'Xã Tri Thủy',
        'loai'=> 3,
        'parent_id'=> 91
        ],
        [
        'ten'=> 'Xã Đại Xuyên',
        'loai'=> 3,
        'parent_id'=> 91
        ],
        [
        'ten'=> 'Xã Phú Yên',
        'loai'=> 3,
        'parent_id'=> 91
        ],
        [
        'ten'=> 'Xã Bạch Hạ',
        'loai'=> 3,
        'parent_id'=> 91
        ],
        [
        'ten'=> 'Xã Quang Lãng',
        'loai'=> 3,
        'parent_id'=> 91
        ],
        [
        'ten'=> 'Xã Châu Can',
        'loai'=> 3,
        'parent_id'=> 91
        ],
        [
        'ten'=> 'Xã Minh Tân',
        'loai'=> 3,
        'parent_id'=> 91
        ],
        [
        'ten'=> 'Thị trấn Vân Đình',
        'loai'=> 3,
        'parent_id'=> 92
        ],
        [
        'ten'=> 'Xã Viên An',
        'loai'=> 3,
        'parent_id'=> 92
        ],
        [
        'ten'=> 'Xã Viên Nội',
        'loai'=> 3,
        'parent_id'=> 92
        ],
        [
        'ten'=> 'Xã Hoa Sơn',
        'loai'=> 3,
        'parent_id'=> 92
        ],
        [
        'ten'=> 'Xã Quảng Phú Cầu',
        'loai'=> 3,
        'parent_id'=> 92
        ],
        [
        'ten'=> 'Xã Trường Thịnh',
        'loai'=> 3,
        'parent_id'=> 92
        ],
        [
        'ten'=> 'Xã Cao Thành',
        'loai'=> 3,
        'parent_id'=> 92
        ],
        [
        'ten'=> 'Xã Liên Bạt',
        'loai'=> 3,
        'parent_id'=> 92
        ],
        [
        'ten'=> 'Xã Sơn Công',
        'loai'=> 3,
        'parent_id'=> 92
        ],
        [
        'ten'=> 'Xã Đồng Tiến',
        'loai'=> 3,
        'parent_id'=> 92
        ],
        [
        'ten'=> 'Xã Phương Tú',
        'loai'=> 3,
        'parent_id'=> 92
        ],
        [
        'ten'=> 'Xã Trung Tú',
        'loai'=> 3,
        'parent_id'=> 92
        ],
        [
        'ten'=> 'Xã Đồng Tân',
        'loai'=> 3,
        'parent_id'=> 92
        ],
        [
        'ten'=> 'Xã Tảo Dương Văn',
        'loai'=> 3,
        'parent_id'=> 92
        ],
        [
        'ten'=> 'Xã Vạn Thái',
        'loai'=> 3,
        'parent_id'=> 92
        ],
        [
        'ten'=> 'Xã Minh Đức',
        'loai'=> 3,
        'parent_id'=> 92
        ],
        [
        'ten'=> 'Xã Hòa Lâm',
        'loai'=> 3,
        'parent_id'=> 92
        ],
        [
        'ten'=> 'Xã Hòa Xá',
        'loai'=> 3,
        'parent_id'=> 92
        ],
        [
        'ten'=> 'Xã Trầm Lộng',
        'loai'=> 3,
        'parent_id'=> 92
        ],
        [
        'ten'=> 'Xã Kim Đường',
        'loai'=> 3,
        'parent_id'=> 92
        ],
        [
        'ten'=> 'Xã Hòa Nam',
        'loai'=> 3,
        'parent_id'=> 92
        ],
        [
        'ten'=> 'Xã Hòa Phú',
        'loai'=> 3,
        'parent_id'=> 92
        ],
        [
        'ten'=> 'Xã Đội Bình',
        'loai'=> 3,
        'parent_id'=> 92
        ],
        [
        'ten'=> 'Xã Đại Hùng',
        'loai'=> 3,
        'parent_id'=> 92
        ],
        [
        'ten'=> 'Xã Đông Lỗ',
        'loai'=> 3,
        'parent_id'=> 92
        ],
        [
        'ten'=> 'Xã Phù Lưu',
        'loai'=> 3,
        'parent_id'=> 92
        ],
        [
        'ten'=> 'Xã Đại Cường',
        'loai'=> 3,
        'parent_id'=> 92
        ],
        [
        'ten'=> 'Xã Lưu Hoàng',
        'loai'=> 3,
        'parent_id'=> 92
        ],
        [
        'ten'=> 'Xã Hồng Quang',
        'loai'=> 3,
        'parent_id'=> 92
        ],
        [
        'ten'=> 'Thị trấn Đại Nghĩa',
        'loai'=> 3,
        'parent_id'=> 93
        ],
        [
        'ten'=> 'Xã Đồng Tâm',
        'loai'=> 3,
        'parent_id'=> 93
        ],
        [
        'ten'=> 'Xã Thượng Lâm',
        'loai'=> 3,
        'parent_id'=> 93
        ],
        [
        'ten'=> 'Xã Tuy Lai',
        'loai'=> 3,
        'parent_id'=> 93
        ],
        [
        'ten'=> 'Xã Phúc Lâm',
        'loai'=> 3,
        'parent_id'=> 93
        ],
        [
        'ten'=> 'Xã Mỹ Thành',
        'loai'=> 3,
        'parent_id'=> 93
        ],
        [
        'ten'=> 'Xã Bột Xuyên',
        'loai'=> 3,
        'parent_id'=> 93
        ],
        [
        'ten'=> 'Xã An Mỹ',
        'loai'=> 3,
        'parent_id'=> 93
        ],
        [
        'ten'=> 'Xã Hồng Sơn',
        'loai'=> 3,
        'parent_id'=> 93
        ],
        [
        'ten'=> 'Xã Lê Thanh',
        'loai'=> 3,
        'parent_id'=> 93
        ],
        [
        'ten'=> 'Xã Xuy Xá',
        'loai'=> 3,
        'parent_id'=> 93
        ],
        [
        'ten'=> 'Xã Phùng Xá',
        'loai'=> 3,
        'parent_id'=> 93
        ],
        [
        'ten'=> 'Xã Phù Lưu Tế',
        'loai'=> 3,
        'parent_id'=> 93
        ],
        [
        'ten'=> 'Xã Đại Hưng',
        'loai'=> 3,
        'parent_id'=> 93
        ],
        [
        'ten'=> 'Xã Vạn Kim',
        'loai'=> 3,
        'parent_id'=> 93
        ],
        [
        'ten'=> 'Xã Đốc Tín',
        'loai'=> 3,
        'parent_id'=> 93
        ],
        [
        'ten'=> 'Xã Hương Sơn',
        'loai'=> 3,
        'parent_id'=> 93
        ],
        [
        'ten'=> 'Xã Hùng Tiến',
        'loai'=> 3,
        'parent_id'=> 93
        ],
        [
        'ten'=> 'Xã An Tiến',
        'loai'=> 3,
        'parent_id'=> 93
        ],
        [
        'ten'=> 'Xã Hợp Tiến',
        'loai'=> 3,
        'parent_id'=> 93
        ],
        [
        'ten'=> 'Xã Hợp Thanh',
        'loai'=> 3,
        'parent_id'=> 93
        ],
        [
        'ten'=> 'Xã An Phú',
        'loai'=> 3,
        'parent_id'=> 93
        ],
        [
        'ten'=> 'Phường Quang Trung',
        'loai'=> 3,
        'parent_id'=> 94
        ],
        [
        'ten'=> 'Phường Trần Phú',
        'loai'=> 3,
        'parent_id'=> 94
        ],
        [
        'ten'=> 'Phường Ngọc Hà',
        'loai'=> 3,
        'parent_id'=> 94
        ],
        [
        'ten'=> 'Phường Nguyễn Trãi',
        'loai'=> 3,
        'parent_id'=> 94
        ],
        [
        'ten'=> 'Phường Minh Khai',
        'loai'=> 3,
        'parent_id'=> 94
        ],
        [
        'ten'=> 'Xã Ngọc Đường',
        'loai'=> 3,
        'parent_id'=> 94
        ],
        [
        'ten'=> 'Xã Phương Độ',
        'loai'=> 3,
        'parent_id'=> 94
        ],
        [
        'ten'=> 'Xã Phương Thiện',
        'loai'=> 3,
        'parent_id'=> 94
        ],
        [
        'ten'=> 'Thị trấn Phó Bảng',
        'loai'=> 3,
        'parent_id'=> 95
        ],
        [
        'ten'=> 'Xã Lũng Cú',
        'loai'=> 3,
        'parent_id'=> 95
        ],
        [
        'ten'=> 'Xã Má Lé',
        'loai'=> 3,
        'parent_id'=> 95
        ],
        [
        'ten'=> 'Thị trấn Đồng Văn',
        'loai'=> 3,
        'parent_id'=> 95
        ],
        [
        'ten'=> 'Xã Lũng Táo',
        'loai'=> 3,
        'parent_id'=> 95
        ],
        [
        'ten'=> 'Xã Phố Là',
        'loai'=> 3,
        'parent_id'=> 95
        ],
        [
        'ten'=> 'Xã Thài Phìn Tủng',
        'loai'=> 3,
        'parent_id'=> 95
        ],
        [
        'ten'=> 'Xã Sủng Là',
        'loai'=> 3,
        'parent_id'=> 95
        ],
        [
        'ten'=> 'Xã Xà Phìn',
        'loai'=> 3,
        'parent_id'=> 95
        ],
        [
        'ten'=> 'Xã Tả Phìn',
        'loai'=> 3,
        'parent_id'=> 95
        ],
        [
        'ten'=> 'Xã Tả Lủng',
        'loai'=> 3,
        'parent_id'=> 95
        ],
        [
        'ten'=> 'Xã Phố Cáo',
        'loai'=> 3,
        'parent_id'=> 95
        ],
        [
        'ten'=> 'Xã Sính Lủng',
        'loai'=> 3,
        'parent_id'=> 95
        ],
        [
        'ten'=> 'Xã Sảng Tủng',
        'loai'=> 3,
        'parent_id'=> 95
        ],
        [
        'ten'=> 'Xã Lũng Thầu',
        'loai'=> 3,
        'parent_id'=> 95
        ],
        [
        'ten'=> 'Xã Hố Quáng Phìn',
        'loai'=> 3,
        'parent_id'=> 95
        ],
        [
        'ten'=> 'Xã Vần Chải',
        'loai'=> 3,
        'parent_id'=> 95
        ],
        [
        'ten'=> 'Xã Lũng Phìn',
        'loai'=> 3,
        'parent_id'=> 95
        ],
        [
        'ten'=> 'Xã Sủng Trái',
        'loai'=> 3,
        'parent_id'=> 95
        ],
        [
        'ten'=> 'Thị trấn Mèo Vạc',
        'loai'=> 3,
        'parent_id'=> 96
        ],
        [
        'ten'=> 'Xã Thượng Phùng',
        'loai'=> 3,
        'parent_id'=> 96
        ],
        [
        'ten'=> 'Xã Pải Lủng',
        'loai'=> 3,
        'parent_id'=> 96
        ],
        [
        'ten'=> 'Xã Xín Cái',
        'loai'=> 3,
        'parent_id'=> 96
        ],
        [
        'ten'=> 'Xã Pả Vi',
        'loai'=> 3,
        'parent_id'=> 96
        ],
        [
        'ten'=> 'Xã Giàng Chu Phìn',
        'loai'=> 3,
        'parent_id'=> 96
        ],
        [
        'ten'=> 'Xã Sủng Trà',
        'loai'=> 3,
        'parent_id'=> 96
        ],
        [
        'ten'=> 'Xã Sủng Máng',
        'loai'=> 3,
        'parent_id'=> 96
        ],
        [
        'ten'=> 'Xã Sơn Vĩ',
        'loai'=> 3,
        'parent_id'=> 96
        ],
        [
        'ten'=> 'Xã Tả Lủng',
        'loai'=> 3,
        'parent_id'=> 96
        ],
        [
        'ten'=> 'Xã Cán Chu Phìn',
        'loai'=> 3,
        'parent_id'=> 96
        ],
        [
        'ten'=> 'Xã Lũng Pù',
        'loai'=> 3,
        'parent_id'=> 96
        ],
        [
        'ten'=> 'Xã Lũng Chinh',
        'loai'=> 3,
        'parent_id'=> 96
        ],
        [
        'ten'=> 'Xã Tát Ngà',
        'loai'=> 3,
        'parent_id'=> 96
        ],
        [
        'ten'=> 'Xã Nậm Ban',
        'loai'=> 3,
        'parent_id'=> 96
        ],
        [
        'ten'=> 'Xã Khâu Vai',
        'loai'=> 3,
        'parent_id'=> 96
        ],
        [
        'ten'=> 'Xã Niêm Tòng',
        'loai'=> 3,
        'parent_id'=> 96
        ],
        [
        'ten'=> 'Xã Niêm Sơn',
        'loai'=> 3,
        'parent_id'=> 96
        ],
        [
        'ten'=> 'Thị trấn Yên Minh',
        'loai'=> 3,
        'parent_id'=> 97
        ],
        [
        'ten'=> 'Xã Thắng Mố',
        'loai'=> 3,
        'parent_id'=> 97
        ],
        [
        'ten'=> 'Xã Phú Lũng',
        'loai'=> 3,
        'parent_id'=> 97
        ],
        [
        'ten'=> 'Xã Sủng Tráng',
        'loai'=> 3,
        'parent_id'=> 97
        ],
        [
        'ten'=> 'Xã Bạch Đích',
        'loai'=> 3,
        'parent_id'=> 97
        ],
        [
        'ten'=> 'Xã Na Khê',
        'loai'=> 3,
        'parent_id'=> 97
        ],
        [
        'ten'=> 'Xã Sủng Thài',
        'loai'=> 3,
        'parent_id'=> 97
        ],
        [
        'ten'=> 'Xã Hữu Vinh',
        'loai'=> 3,
        'parent_id'=> 97
        ],
        [
        'ten'=> 'Xã Lao Và Chải',
        'loai'=> 3,
        'parent_id'=> 97
        ],
        [
        'ten'=> 'Xã Mậu Duệ',
        'loai'=> 3,
        'parent_id'=> 97
        ],
        [
        'ten'=> 'Xã Đông Minh',
        'loai'=> 3,
        'parent_id'=> 97
        ],
        [
        'ten'=> 'Xã Mậu Long',
        'loai'=> 3,
        'parent_id'=> 97
        ],
        [
        'ten'=> 'Xã Ngam La',
        'loai'=> 3,
        'parent_id'=> 97
        ],
        [
        'ten'=> 'Xã Ngọc Long',
        'loai'=> 3,
        'parent_id'=> 97
        ],
        [
        'ten'=> 'Xã Đường Thượng',
        'loai'=> 3,
        'parent_id'=> 97
        ],
        [
        'ten'=> 'Xã Lũng Hồ',
        'loai'=> 3,
        'parent_id'=> 97
        ],
        [
        'ten'=> 'Xã Du Tiến',
        'loai'=> 3,
        'parent_id'=> 97
        ],
        [
        'ten'=> 'Xã Du Già',
        'loai'=> 3,
        'parent_id'=> 97
        ],
        [
        'ten'=> 'Thị trấn Tam Sơn',
        'loai'=> 3,
        'parent_id'=> 98
        ],
        [
        'ten'=> 'Xã Bát Đại Sơn',
        'loai'=> 3,
        'parent_id'=> 98
        ],
        [
        'ten'=> 'Xã Nghĩa Thuận',
        'loai'=> 3,
        'parent_id'=> 98
        ],
        [
        'ten'=> 'Xã Cán Tỷ',
        'loai'=> 3,
        'parent_id'=> 98
        ],
        [
        'ten'=> 'Xã Cao Mã Pờ',
        'loai'=> 3,
        'parent_id'=> 98
        ],
        [
        'ten'=> 'Xã Thanh Vân',
        'loai'=> 3,
        'parent_id'=> 98
        ],
        [
        'ten'=> 'Xã Tùng Vài',
        'loai'=> 3,
        'parent_id'=> 98
        ],
        [
        'ten'=> 'Xã Đông Hà',
        'loai'=> 3,
        'parent_id'=> 98
        ],
        [
        'ten'=> 'Xã Quản Bạ',
        'loai'=> 3,
        'parent_id'=> 98
        ],
        [
        'ten'=> 'Xã Lùng Tám',
        'loai'=> 3,
        'parent_id'=> 98
        ],
        [
        'ten'=> 'Xã Quyết Tiến',
        'loai'=> 3,
        'parent_id'=> 98
        ],
        [
        'ten'=> 'Xã Tả Ván',
        'loai'=> 3,
        'parent_id'=> 98
        ],
        [
        'ten'=> 'Xã Thái An',
        'loai'=> 3,
        'parent_id'=> 98
        ],
        [
        'ten'=> 'Xã Kim Thạch',
        'loai'=> 3,
        'parent_id'=> 99
        ],
        [
        'ten'=> 'Xã Phú Linh',
        'loai'=> 3,
        'parent_id'=> 99
        ],
        [
        'ten'=> 'Xã Kim Linh',
        'loai'=> 3,
        'parent_id'=> 99
        ],
        [
        'ten'=> 'Thị trấn Vị Xuyên',
        'loai'=> 3,
        'parent_id'=> 99
        ],
        [
        'ten'=> 'Thị trấn Nông Trường Việt Lâm',
        'loai'=> 3,
        'parent_id'=> 99
        ],
        [
        'ten'=> 'Xã Minh Tân',
        'loai'=> 3,
        'parent_id'=> 99
        ],
        [
        'ten'=> 'Xã Thuận Hoà',
        'loai'=> 3,
        'parent_id'=> 99
        ],
        [
        'ten'=> 'Xã Tùng Bá',
        'loai'=> 3,
        'parent_id'=> 99
        ],
        [
        'ten'=> 'Xã Thanh Thủy',
        'loai'=> 3,
        'parent_id'=> 99
        ],
        [
        'ten'=> 'Xã Thanh Đức',
        'loai'=> 3,
        'parent_id'=> 99
        ],
        [
        'ten'=> 'Xã Phong Quang',
        'loai'=> 3,
        'parent_id'=> 99
        ],
        [
        'ten'=> 'Xã Xín Chải',
        'loai'=> 3,
        'parent_id'=> 99
        ],
        [
        'ten'=> 'Xã Phương Tiến',
        'loai'=> 3,
        'parent_id'=> 99
        ],
        [
        'ten'=> 'Xã Lao Chải',
        'loai'=> 3,
        'parent_id'=> 99
        ],
        [
        'ten'=> 'Xã Cao Bồ',
        'loai'=> 3,
        'parent_id'=> 99
        ],
        [
        'ten'=> 'Xã Đạo Đức',
        'loai'=> 3,
        'parent_id'=> 99
        ],
        [
        'ten'=> 'Xã Thượng Sơn',
        'loai'=> 3,
        'parent_id'=> 99
        ],
        [
        'ten'=> 'Xã Linh Hồ',
        'loai'=> 3,
        'parent_id'=> 99
        ],
        [
        'ten'=> 'Xã Quảng Ngần',
        'loai'=> 3,
        'parent_id'=> 99
        ],
        [
        'ten'=> 'Xã Việt Lâm',
        'loai'=> 3,
        'parent_id'=> 99
        ],
        [
        'ten'=> 'Xã Ngọc Linh',
        'loai'=> 3,
        'parent_id'=> 99
        ],
        [
        'ten'=> 'Xã Ngọc Minh',
        'loai'=> 3,
        'parent_id'=> 99
        ],
        [
        'ten'=> 'Xã Bạch Ngọc',
        'loai'=> 3,
        'parent_id'=> 99
        ],
        [
        'ten'=> 'Xã Trung Thành',
        'loai'=> 3,
        'parent_id'=> 99
        ],
        [
        'ten'=> 'Xã Minh Sơn',
        'loai'=> 3,
        'parent_id'=> 100
        ],
        [
        'ten'=> 'Xã Giáp Trung',
        'loai'=> 3,
        'parent_id'=> 100
        ],
        [
        'ten'=> 'Xã Yên Định',
        'loai'=> 3,
        'parent_id'=> 100
        ],
        [
        'ten'=> 'Thị trấn Yên Phú',
        'loai'=> 3,
        'parent_id'=> 100
        ],
        [
        'ten'=> 'Xã Minh Ngọc',
        'loai'=> 3,
        'parent_id'=> 100
        ],
        [
        'ten'=> 'Xã Yên Phong',
        'loai'=> 3,
        'parent_id'=> 100
        ],
        [
        'ten'=> 'Xã Lạc Nông',
        'loai'=> 3,
        'parent_id'=> 100
        ],
        [
        'ten'=> 'Xã Phú Nam',
        'loai'=> 3,
        'parent_id'=> 100
        ],
        [
        'ten'=> 'Xã Yên Cường',
        'loai'=> 3,
        'parent_id'=> 100
        ],
        [
        'ten'=> 'Xã Thượng Tân',
        'loai'=> 3,
        'parent_id'=> 100
        ],
        [
        'ten'=> 'Xã Đường Âm',
        'loai'=> 3,
        'parent_id'=> 100
        ],
        [
        'ten'=> 'Xã Đường Hồng',
        'loai'=> 3,
        'parent_id'=> 100
        ],
        [
        'ten'=> 'Xã Phiêng Luông',
        'loai'=> 3,
        'parent_id'=> 100
        ],
        [
        'ten'=> 'Thị trấn Vinh Quang',
        'loai'=> 3,
        'parent_id'=> 101
        ],
        [
        'ten'=> 'Xã Bản Máy',
        'loai'=> 3,
        'parent_id'=> 101
        ],
        [
        'ten'=> 'Xã Thàng Tín',
        'loai'=> 3,
        'parent_id'=> 101
        ],
        [
        'ten'=> 'Xã Thèn Chu Phìn',
        'loai'=> 3,
        'parent_id'=> 101
        ],
        [
        'ten'=> 'Xã Pố Lồ',
        'loai'=> 3,
        'parent_id'=> 101
        ],
        [
        'ten'=> 'Xã Bản Phùng',
        'loai'=> 3,
        'parent_id'=> 101
        ],
        [
        'ten'=> 'Xã Túng Sán',
        'loai'=> 3,
        'parent_id'=> 101
        ],
        [
        'ten'=> 'Xã Chiến Phố',
        'loai'=> 3,
        'parent_id'=> 101
        ],
        [
        'ten'=> 'Xã Đản Ván',
        'loai'=> 3,
        'parent_id'=> 101
        ],
        [
        'ten'=> 'Xã Tụ Nhân',
        'loai'=> 3,
        'parent_id'=> 101
        ],
        [
        'ten'=> 'Xã Tân Tiến',
        'loai'=> 3,
        'parent_id'=> 101
        ],
        [
        'ten'=> 'Xã Nàng Đôn',
        'loai'=> 3,
        'parent_id'=> 101
        ],
        [
        'ten'=> 'Xã Pờ Ly Ngài',
        'loai'=> 3,
        'parent_id'=> 101
        ],
        [
        'ten'=> 'Xã Sán Xả Hồ',
        'loai'=> 3,
        'parent_id'=> 101
        ],
        [
        'ten'=> 'Xã Bản Luốc',
        'loai'=> 3,
        'parent_id'=> 101
        ],
        [
        'ten'=> 'Xã Ngàm Đăng Vài',
        'loai'=> 3,
        'parent_id'=> 101
        ],
        [
        'ten'=> 'Xã Bản Nhùng',
        'loai'=> 3,
        'parent_id'=> 101
        ],
        [
        'ten'=> 'Xã Tả Sử Choóng',
        'loai'=> 3,
        'parent_id'=> 101
        ],
        [
        'ten'=> 'Xã Nậm Dịch',
        'loai'=> 3,
        'parent_id'=> 101
        ],
        [
        'ten'=> 'Xã Hồ Thầu',
        'loai'=> 3,
        'parent_id'=> 101
        ],
        [
        'ten'=> 'Xã Nam Sơn',
        'loai'=> 3,
        'parent_id'=> 101
        ],
        [
        'ten'=> 'Xã Nậm Tỵ',
        'loai'=> 3,
        'parent_id'=> 101
        ],
        [
        'ten'=> 'Xã Thông Nguyên',
        'loai'=> 3,
        'parent_id'=> 101
        ],
        [
        'ten'=> 'Xã Nậm Khòa',
        'loai'=> 3,
        'parent_id'=> 101
        ],
        [
        'ten'=> 'Thị trấn Cốc Pài',
        'loai'=> 3,
        'parent_id'=> 102
        ],
        [
        'ten'=> 'Xã Nàn Xỉn',
        'loai'=> 3,
        'parent_id'=> 102
        ],
        [
        'ten'=> 'Xã Bản Díu',
        'loai'=> 3,
        'parent_id'=> 102
        ],
        [
        'ten'=> 'Xã Chí Cà',
        'loai'=> 3,
        'parent_id'=> 102
        ],
        [
        'ten'=> 'Xã Xín Mần',
        'loai'=> 3,
        'parent_id'=> 102
        ],
        [
        'ten'=> 'Xã Thèn Phàng',
        'loai'=> 3,
        'parent_id'=> 102
        ],
        [
        'ten'=> 'Xã Trung Thịnh',
        'loai'=> 3,
        'parent_id'=> 102
        ],
        [
        'ten'=> 'Xã Pà Vầy Sủ',
        'loai'=> 3,
        'parent_id'=> 102
        ],
        [
        'ten'=> 'Xã Cốc Rế',
        'loai'=> 3,
        'parent_id'=> 102
        ],
        [
        'ten'=> 'Xã Thu Tà',
        'loai'=> 3,
        'parent_id'=> 102
        ],
        [
        'ten'=> 'Xã Nàn Ma',
        'loai'=> 3,
        'parent_id'=> 102
        ],
        [
        'ten'=> 'Xã Tả Nhìu',
        'loai'=> 3,
        'parent_id'=> 102
        ],
        [
        'ten'=> 'Xã Bản Ngò',
        'loai'=> 3,
        'parent_id'=> 102
        ],
        [
        'ten'=> 'Xã Chế Là',
        'loai'=> 3,
        'parent_id'=> 102
        ],
        [
        'ten'=> 'Xã Nấm Dẩn',
        'loai'=> 3,
        'parent_id'=> 102
        ],
        [
        'ten'=> 'Xã Quảng Nguyên',
        'loai'=> 3,
        'parent_id'=> 102
        ],
        [
        'ten'=> 'Xã Nà Chì',
        'loai'=> 3,
        'parent_id'=> 102
        ],
        [
        'ten'=> 'Xã Khuôn Lùng',
        'loai'=> 3,
        'parent_id'=> 102
        ],
        [
        'ten'=> 'Thị trấn Việt Quang',
        'loai'=> 3,
        'parent_id'=> 103
        ],
        [
        'ten'=> 'Thị trấn Vĩnh Tuy',
        'loai'=> 3,
        'parent_id'=> 103
        ],
        [
        'ten'=> 'Xã Tân Lập',
        'loai'=> 3,
        'parent_id'=> 103
        ],
        [
        'ten'=> 'Xã Tân Thành',
        'loai'=> 3,
        'parent_id'=> 103
        ],
        [
        'ten'=> 'Xã Đồng Tiến',
        'loai'=> 3,
        'parent_id'=> 103
        ],
        [
        'ten'=> 'Xã Đồng Tâm',
        'loai'=> 3,
        'parent_id'=> 103
        ],
        [
        'ten'=> 'Xã Tân Quang',
        'loai'=> 3,
        'parent_id'=> 103
        ],
        [
        'ten'=> 'Xã Thượng Bình',
        'loai'=> 3,
        'parent_id'=> 103
        ],
        [
        'ten'=> 'Xã Hữu Sản',
        'loai'=> 3,
        'parent_id'=> 103
        ],
        [
        'ten'=> 'Xã Kim Ngọc',
        'loai'=> 3,
        'parent_id'=> 103
        ],
        [
        'ten'=> 'Xã Việt Vinh',
        'loai'=> 3,
        'parent_id'=> 103
        ],
        [
        'ten'=> 'Xã Bằng Hành',
        'loai'=> 3,
        'parent_id'=> 103
        ],
        [
        'ten'=> 'Xã Quang Minh',
        'loai'=> 3,
        'parent_id'=> 103
        ],
        [
        'ten'=> 'Xã Liên Hiệp',
        'loai'=> 3,
        'parent_id'=> 103
        ],
        [
        'ten'=> 'Xã Vô Điếm',
        'loai'=> 3,
        'parent_id'=> 103
        ],
        [
        'ten'=> 'Xã Việt Hồng',
        'loai'=> 3,
        'parent_id'=> 103
        ],
        [
        'ten'=> 'Xã Hùng An',
        'loai'=> 3,
        'parent_id'=> 103
        ],
        [
        'ten'=> 'Xã Đức Xuân',
        'loai'=> 3,
        'parent_id'=> 103
        ],
        [
        'ten'=> 'Xã Tiên Kiều',
        'loai'=> 3,
        'parent_id'=> 103
        ],
        [
        'ten'=> 'Xã Vĩnh Hảo',
        'loai'=> 3,
        'parent_id'=> 103
        ],
        [
        'ten'=> 'Xã Vĩnh Phúc',
        'loai'=> 3,
        'parent_id'=> 103
        ],
        [
        'ten'=> 'Xã Đồng Yên',
        'loai'=> 3,
        'parent_id'=> 103
        ],
        [
        'ten'=> 'Xã Đông Thành',
        'loai'=> 3,
        'parent_id'=> 103
        ],
        [
        'ten'=> 'Xã Xuân Minh',
        'loai'=> 3,
        'parent_id'=> 104
        ],
        [
        'ten'=> 'Xã Tiên Nguyên',
        'loai'=> 3,
        'parent_id'=> 104
        ],
        [
        'ten'=> 'Xã Tân Nam',
        'loai'=> 3,
        'parent_id'=> 104
        ],
        [
        'ten'=> 'Xã Bản Rịa',
        'loai'=> 3,
        'parent_id'=> 104
        ],
        [
        'ten'=> 'Xã Yên Thành',
        'loai'=> 3,
        'parent_id'=> 104
        ],
        [
        'ten'=> 'Thị trấn Yên Bình',
        'loai'=> 3,
        'parent_id'=> 104
        ],
        [
        'ten'=> 'Xã Tân Trịnh',
        'loai'=> 3,
        'parent_id'=> 104
        ],
        [
        'ten'=> 'Xã Tân Bắc',
        'loai'=> 3,
        'parent_id'=> 104
        ],
        [
        'ten'=> 'Xã Bằng Lang',
        'loai'=> 3,
        'parent_id'=> 104
        ],
        [
        'ten'=> 'Xã Yên Hà',
        'loai'=> 3,
        'parent_id'=> 104
        ],
        [
        'ten'=> 'Xã Hương Sơn',
        'loai'=> 3,
        'parent_id'=> 104
        ],
        [
        'ten'=> 'Xã Xuân Giang',
        'loai'=> 3,
        'parent_id'=> 104
        ],
        [
        'ten'=> 'Xã Nà Khương',
        'loai'=> 3,
        'parent_id'=> 104
        ],
        [
        'ten'=> 'Xã Tiên Yên',
        'loai'=> 3,
        'parent_id'=> 104
        ],
        [
        'ten'=> 'Xã Vĩ Thượng',
        'loai'=> 3,
        'parent_id'=> 104
        ],
        [
        'ten'=> 'Phường Sông Hiến',
        'loai'=> 3,
        'parent_id'=> 105
        ],
        [
        'ten'=> 'Phường Sông Bằng',
        'loai'=> 3,
        'parent_id'=> 105
        ],
        [
        'ten'=> 'Phường Hợp Giang',
        'loai'=> 3,
        'parent_id'=> 105
        ],
        [
        'ten'=> 'Phường Tân Giang',
        'loai'=> 3,
        'parent_id'=> 105
        ],
        [
        'ten'=> 'Phường Ngọc Xuân',
        'loai'=> 3,
        'parent_id'=> 105
        ],
        [
        'ten'=> 'Phường Đề Thám',
        'loai'=> 3,
        'parent_id'=> 105
        ],
        [
        'ten'=> 'Phường Hoà Chung',
        'loai'=> 3,
        'parent_id'=> 105
        ],
        [
        'ten'=> 'Phường Duyệt Trung',
        'loai'=> 3,
        'parent_id'=> 105
        ],
        [
        'ten'=> 'Xã Vĩnh Quang',
        'loai'=> 3,
        'parent_id'=> 105
        ],
        [
        'ten'=> 'Xã Hưng Đạo',
        'loai'=> 3,
        'parent_id'=> 105
        ],
        [
        'ten'=> 'Xã Chu Trinh',
        'loai'=> 3,
        'parent_id'=> 105
        ],
        [
        'ten'=> 'Thị trấn Pác Miầu',
        'loai'=> 3,
        'parent_id'=> 106
        ],
        [
        'ten'=> 'Xã Đức Hạnh',
        'loai'=> 3,
        'parent_id'=> 106
        ],
        [
        'ten'=> 'Xã Lý Bôn',
        'loai'=> 3,
        'parent_id'=> 106
        ],
        [
        'ten'=> 'Xã Nam Cao',
        'loai'=> 3,
        'parent_id'=> 106
        ],
        [
        'ten'=> 'Xã Nam Quang',
        'loai'=> 3,
        'parent_id'=> 106
        ],
        [
        'ten'=> 'Xã Vĩnh Quang',
        'loai'=> 3,
        'parent_id'=> 106
        ],
        [
        'ten'=> 'Xã Quảng Lâm',
        'loai'=> 3,
        'parent_id'=> 106
        ],
        [
        'ten'=> 'Xã Thạch Lâm',
        'loai'=> 3,
        'parent_id'=> 106
        ],
        [
        'ten'=> 'Xã Vĩnh Phong',
        'loai'=> 3,
        'parent_id'=> 106
        ],
        [
        'ten'=> 'Xã Mông Ân',
        'loai'=> 3,
        'parent_id'=> 106
        ],
        [
        'ten'=> 'Xã Thái Học',
        'loai'=> 3,
        'parent_id'=> 106
        ],
        [
        'ten'=> 'Xã Thái Sơn',
        'loai'=> 3,
        'parent_id'=> 106
        ],
        [
        'ten'=> 'Xã Yên Thổ',
        'loai'=> 3,
        'parent_id'=> 106
        ],
        [
        'ten'=> 'Thị trấn Bảo Lạc',
        'loai'=> 3,
        'parent_id'=> 107
        ],
        [
        'ten'=> 'Xã Cốc Pàng',
        'loai'=> 3,
        'parent_id'=> 107
        ],
        [
        'ten'=> 'Xã Thượng Hà',
        'loai'=> 3,
        'parent_id'=> 107
        ],
        [
        'ten'=> 'Xã Cô Ba',
        'loai'=> 3,
        'parent_id'=> 107
        ],
        [
        'ten'=> 'Xã Bảo Toàn',
        'loai'=> 3,
        'parent_id'=> 107
        ],
        [
        'ten'=> 'Xã Khánh Xuân',
        'loai'=> 3,
        'parent_id'=> 107
        ],
        [
        'ten'=> 'Xã Xuân Trường',
        'loai'=> 3,
        'parent_id'=> 107
        ],
        [
        'ten'=> 'Xã Hồng Trị',
        'loai'=> 3,
        'parent_id'=> 107
        ],
        [
        'ten'=> 'Xã Kim Cúc',
        'loai'=> 3,
        'parent_id'=> 107
        ],
        [
        'ten'=> 'Xã Phan Thanh',
        'loai'=> 3,
        'parent_id'=> 107
        ],
        [
        'ten'=> 'Xã Hồng An',
        'loai'=> 3,
        'parent_id'=> 107
        ],
        [
        'ten'=> 'Xã Hưng Đạo',
        'loai'=> 3,
        'parent_id'=> 107
        ],
        [
        'ten'=> 'Xã Hưng Thịnh',
        'loai'=> 3,
        'parent_id'=> 107
        ],
        [
        'ten'=> 'Xã Huy Giáp',
        'loai'=> 3,
        'parent_id'=> 107
        ],
        [
        'ten'=> 'Xã Đình Phùng',
        'loai'=> 3,
        'parent_id'=> 107
        ],
        [
        'ten'=> 'Xã Sơn Lập',
        'loai'=> 3,
        'parent_id'=> 107
        ],
        [
        'ten'=> 'Xã Sơn Lộ',
        'loai'=> 3,
        'parent_id'=> 107
        ],
        [
        'ten'=> 'Thị trấn Thông Nông',
        'loai'=> 3,
        'parent_id'=> 108
        ],
        [
        'ten'=> 'Xã Cần Yên',
        'loai'=> 3,
        'parent_id'=> 108
        ],
        [
        'ten'=> 'Xã Cần Nông',
        'loai'=> 3,
        'parent_id'=> 108
        ],
        [
        'ten'=> 'Xã Lương Thông',
        'loai'=> 3,
        'parent_id'=> 108
        ],
        [
        'ten'=> 'Xã Đa Thông',
        'loai'=> 3,
        'parent_id'=> 108
        ],
        [
        'ten'=> 'Xã Ngọc Động',
        'loai'=> 3,
        'parent_id'=> 108
        ],
        [
        'ten'=> 'Xã Yên Sơn',
        'loai'=> 3,
        'parent_id'=> 108
        ],
        [
        'ten'=> 'Xã Lương Can',
        'loai'=> 3,
        'parent_id'=> 108
        ],
        [
        'ten'=> 'Xã Thanh Long',
        'loai'=> 3,
        'parent_id'=> 108
        ],
        [
        'ten'=> 'Thị trấn Xuân Hòa',
        'loai'=> 3,
        'parent_id'=> 108
        ],
        [
        'ten'=> 'Xã Lũng Nặm',
        'loai'=> 3,
        'parent_id'=> 108
        ],
        [
        'ten'=> 'Xã Trường Hà',
        'loai'=> 3,
        'parent_id'=> 108
        ],
        [
        'ten'=> 'Xã Cải Viên',
        'loai'=> 3,
        'parent_id'=> 108
        ],
        [
        'ten'=> 'Xã Nội Thôn',
        'loai'=> 3,
        'parent_id'=> 108
        ],
        [
        'ten'=> 'Xã Tổng Cọt',
        'loai'=> 3,
        'parent_id'=> 108
        ],
        [
        'ten'=> 'Xã Sóc Hà',
        'loai'=> 3,
        'parent_id'=> 108
        ],
        [
        'ten'=> 'Xã Thượng Thôn',
        'loai'=> 3,
        'parent_id'=> 108
        ],
        [
        'ten'=> 'Xã Hồng Sỹ',
        'loai'=> 3,
        'parent_id'=> 108
        ],
        [
        'ten'=> 'Xã Quý Quân',
        'loai'=> 3,
        'parent_id'=> 108
        ],
        [
        'ten'=> 'Xã Mã Ba',
        'loai'=> 3,
        'parent_id'=> 108
        ],
        [
        'ten'=> 'Xã Ngọc Đào',
        'loai'=> 3,
        'parent_id'=> 108
        ],
        [
        'ten'=> 'Thị trấn Trà Lĩnh',
        'loai'=> 3,
        'parent_id'=> 109
        ],
        [
        'ten'=> 'Xã Tri Phương',
        'loai'=> 3,
        'parent_id'=> 109
        ],
        [
        'ten'=> 'Xã Quang Hán',
        'loai'=> 3,
        'parent_id'=> 109
        ],
        [
        'ten'=> 'Xã Xuân Nội',
        'loai'=> 3,
        'parent_id'=> 109
        ],
        [
        'ten'=> 'Xã Quang Trung',
        'loai'=> 3,
        'parent_id'=> 109
        ],
        [
        'ten'=> 'Xã Quang Vinh',
        'loai'=> 3,
        'parent_id'=> 109
        ],
        [
        'ten'=> 'Xã Cao Chương',
        'loai'=> 3,
        'parent_id'=> 109
        ],
        [
        'ten'=> 'Thị trấn Trùng Khánh',
        'loai'=> 3,
        'parent_id'=> 109
        ],
        [
        'ten'=> 'Xã Ngọc Khê',
        'loai'=> 3,
        'parent_id'=> 109
        ],
        [
        'ten'=> 'Xã Ngọc Côn',
        'loai'=> 3,
        'parent_id'=> 109
        ],
        [
        'ten'=> 'Xã Phong Nậm',
        'loai'=> 3,
        'parent_id'=> 109
        ],
        [
        'ten'=> 'Xã Đình Phong',
        'loai'=> 3,
        'parent_id'=> 109
        ],
        [
        'ten'=> 'Xã Đàm Thuỷ',
        'loai'=> 3,
        'parent_id'=> 109
        ],
        [
        'ten'=> 'Xã Khâm Thành',
        'loai'=> 3,
        'parent_id'=> 109
        ],
        [
        'ten'=> 'Xã Chí Viễn',
        'loai'=> 3,
        'parent_id'=> 109
        ],
        [
        'ten'=> 'Xã Lăng Hiếu',
        'loai'=> 3,
        'parent_id'=> 109
        ],
        [
        'ten'=> 'Xã Phong Châu',
        'loai'=> 3,
        'parent_id'=> 109
        ],
        [
        'ten'=> 'Xã Trung Phúc',
        'loai'=> 3,
        'parent_id'=> 109
        ],
        [
        'ten'=> 'Xã Cao Thăng',
        'loai'=> 3,
        'parent_id'=> 109
        ],
        [
        'ten'=> 'Xã Đức Hồng',
        'loai'=> 3,
        'parent_id'=> 109
        ],
        [
        'ten'=> 'Xã Đoài Dương',
        'loai'=> 3,
        'parent_id'=> 109
        ],
        [
        'ten'=> 'Xã Minh Long',
        'loai'=> 3,
        'parent_id'=> 110
        ],
        [
        'ten'=> 'Xã Lý Quốc',
        'loai'=> 3,
        'parent_id'=> 110
        ],
        [
        'ten'=> 'Xã Thắng Lợi',
        'loai'=> 3,
        'parent_id'=> 110
        ],
        [
        'ten'=> 'Xã Đồng Loan',
        'loai'=> 3,
        'parent_id'=> 110
        ],
        [
        'ten'=> 'Xã Đức Quang',
        'loai'=> 3,
        'parent_id'=> 110
        ],
        [
        'ten'=> 'Xã Kim Loan',
        'loai'=> 3,
        'parent_id'=> 110
        ],
        [
        'ten'=> 'Xã Quang Long',
        'loai'=> 3,
        'parent_id'=> 110
        ],
        [
        'ten'=> 'Xã An Lạc',
        'loai'=> 3,
        'parent_id'=> 110
        ],
        [
        'ten'=> 'Thị trấn Thanh Nhật',
        'loai'=> 3,
        'parent_id'=> 110
        ],
        [
        'ten'=> 'Xã Vinh Quý',
        'loai'=> 3,
        'parent_id'=> 110
        ],
        [
        'ten'=> 'Xã Thống Nhất',
        'loai'=> 3,
        'parent_id'=> 110
        ],
        [
        'ten'=> 'Xã Cô Ngân',
        'loai'=> 3,
        'parent_id'=> 110
        ],
        [
        'ten'=> 'Xã Thị Hoa',
        'loai'=> 3,
        'parent_id'=> 110
        ],
        [
        'ten'=> 'Xã Quốc Toản',
        'loai'=> 3,
        'parent_id'=> 111
        ],
        [
        'ten'=> 'Thị trấn Quảng Uyên',
        'loai'=> 3,
        'parent_id'=> 111
        ],
        [
        'ten'=> 'Xã Phi Hải',
        'loai'=> 3,
        'parent_id'=> 111
        ],
        [
        'ten'=> 'Xã Quảng Hưng',
        'loai'=> 3,
        'parent_id'=> 111
        ],
        [
        'ten'=> 'Xã Độc Lập',
        'loai'=> 3,
        'parent_id'=> 111
        ],
        [
        'ten'=> 'Xã Cai Bộ',
        'loai'=> 3,
        'parent_id'=> 111
        ],
        [
        'ten'=> 'Xã Phúc Sen',
        'loai'=> 3,
        'parent_id'=> 111
        ],
        [
        'ten'=> 'Xã Chí Thảo',
        'loai'=> 3,
        'parent_id'=> 111
        ],
        [
        'ten'=> 'Xã Tự Do',
        'loai'=> 3,
        'parent_id'=> 111
        ],
        [
        'ten'=> 'Xã Hồng Quang',
        'loai'=> 3,
        'parent_id'=> 111
        ],
        [
        'ten'=> 'Xã Ngọc Động',
        'loai'=> 3,
        'parent_id'=> 111
        ],
        [
        'ten'=> 'Xã Hạnh Phúc',
        'loai'=> 3,
        'parent_id'=> 111
        ],
        [
        'ten'=> 'Thị trấn Tà Lùng',
        'loai'=> 3,
        'parent_id'=> 111
        ],
        [
        'ten'=> 'Xã Bế Văn Đàn',
        'loai'=> 3,
        'parent_id'=> 111
        ],
        [
        'ten'=> 'Xã Cách Linh',
        'loai'=> 3,
        'parent_id'=> 111
        ],
        [
        'ten'=> 'Xã Đại Sơn',
        'loai'=> 3,
        'parent_id'=> 111
        ],
        [
        'ten'=> 'Xã Tiên Thành',
        'loai'=> 3,
        'parent_id'=> 111
        ],
        [
        'ten'=> 'Thị trấn Hoà Thuận',
        'loai'=> 3,
        'parent_id'=> 111
        ],
        [
        'ten'=> 'Xã Mỹ Hưng',
        'loai'=> 3,
        'parent_id'=> 111
        ],
        [
        'ten'=> 'Thị trấn Nước Hai',
        'loai'=> 3,
        'parent_id'=> 112
        ],
        [
        'ten'=> 'Xã Dân Chủ',
        'loai'=> 3,
        'parent_id'=> 112
        ],
        [
        'ten'=> 'Xã Nam Tuấn',
        'loai'=> 3,
        'parent_id'=> 112
        ],
        [
        'ten'=> 'Xã Đại Tiến',
        'loai'=> 3,
        'parent_id'=> 112
        ],
        [
        'ten'=> 'Xã Đức Long',
        'loai'=> 3,
        'parent_id'=> 112
        ],
        [
        'ten'=> 'Xã Ngũ Lão',
        'loai'=> 3,
        'parent_id'=> 112
        ],
        [
        'ten'=> 'Xã Trương Lương',
        'loai'=> 3,
        'parent_id'=> 112
        ],
        [
        'ten'=> 'Xã Hồng Việt',
        'loai'=> 3,
        'parent_id'=> 112
        ],
        [
        'ten'=> 'Xã Hoàng Tung',
        'loai'=> 3,
        'parent_id'=> 112
        ],
        [
        'ten'=> 'Xã Nguyễn Huệ',
        'loai'=> 3,
        'parent_id'=> 112
        ],
        [
        'ten'=> 'Xã Quang Trung',
        'loai'=> 3,
        'parent_id'=> 112
        ],
        [
        'ten'=> 'Xã Bạch Đằng',
        'loai'=> 3,
        'parent_id'=> 112
        ],
        [
        'ten'=> 'Xã Bình Dương',
        'loai'=> 3,
        'parent_id'=> 112
        ],
        [
        'ten'=> 'Xã Lê Chung',
        'loai'=> 3,
        'parent_id'=> 112
        ],
        [
        'ten'=> 'Xã Hồng Nam',
        'loai'=> 3,
        'parent_id'=> 112
        ],
        [
        'ten'=> 'Thị trấn Nguyên Bình',
        'loai'=> 3,
        'parent_id'=> 113
        ],
        [
        'ten'=> 'Thị trấn Tĩnh Túc',
        'loai'=> 3,
        'parent_id'=> 113
        ],
        [
        'ten'=> 'Xã Yên Lạc',
        'loai'=> 3,
        'parent_id'=> 113
        ],
        [
        'ten'=> 'Xã Triệu Nguyên',
        'loai'=> 3,
        'parent_id'=> 113
        ],
        [
        'ten'=> 'Xã Ca Thành',
        'loai'=> 3,
        'parent_id'=> 113
        ],
        [
        'ten'=> 'Xã Vũ Nông',
        'loai'=> 3,
        'parent_id'=> 113
        ],
        [
        'ten'=> 'Xã Minh Tâm',
        'loai'=> 3,
        'parent_id'=> 113
        ],
        [
        'ten'=> 'Xã Thể Dục',
        'loai'=> 3,
        'parent_id'=> 113
        ],
        [
        'ten'=> 'Xã Mai Long',
        'loai'=> 3,
        'parent_id'=> 113
        ],
        [
        'ten'=> 'Xã Vũ Minh',
        'loai'=> 3,
        'parent_id'=> 113
        ],
        [
        'ten'=> 'Xã Hoa Thám',
        'loai'=> 3,
        'parent_id'=> 113
        ],
        [
        'ten'=> 'Xã Phan Thanh',
        'loai'=> 3,
        'parent_id'=> 113
        ],
        [
        'ten'=> 'Xã Quang Thành',
        'loai'=> 3,
        'parent_id'=> 113
        ],
        [
        'ten'=> 'Xã Tam Kim',
        'loai'=> 3,
        'parent_id'=> 113
        ],
        [
        'ten'=> 'Xã Thành Công',
        'loai'=> 3,
        'parent_id'=> 113
        ],
        [
        'ten'=> 'Xã Thịnh Vượng',
        'loai'=> 3,
        'parent_id'=> 113
        ],
        [
        'ten'=> 'Xã Hưng Đạo',
        'loai'=> 3,
        'parent_id'=> 113
        ],
        [
        'ten'=> 'Thị trấn Đông Khê',
        'loai'=> 3,
        'parent_id'=> 114
        ],
        [
        'ten'=> 'Xã Canh Tân',
        'loai'=> 3,
        'parent_id'=> 114
        ],
        [
        'ten'=> 'Xã Kim Đồng',
        'loai'=> 3,
        'parent_id'=> 114
        ],
        [
        'ten'=> 'Xã Minh Khai',
        'loai'=> 3,
        'parent_id'=> 114
        ],
        [
        'ten'=> 'Xã Đức Thông',
        'loai'=> 3,
        'parent_id'=> 114
        ],
        [
        'ten'=> 'Xã Thái Cường',
        'loai'=> 3,
        'parent_id'=> 114
        ],
        [
        'ten'=> 'Xã Vân Trình',
        'loai'=> 3,
        'parent_id'=> 114
        ],
        [
        'ten'=> 'Xã Thụy Hùng',
        'loai'=> 3,
        'parent_id'=> 114
        ],
        [
        'ten'=> 'Xã Quang Trọng',
        'loai'=> 3,
        'parent_id'=> 114
        ],
        [
        'ten'=> 'Xã Trọng Con',
        'loai'=> 3,
        'parent_id'=> 114
        ],
        [
        'ten'=> 'Xã Lê Lai',
        'loai'=> 3,
        'parent_id'=> 114
        ],
        [
        'ten'=> 'Xã Đức Long',
        'loai'=> 3,
        'parent_id'=> 114
        ],
        [
        'ten'=> 'Xã Lê Lợi',
        'loai'=> 3,
        'parent_id'=> 114
        ],
        [
        'ten'=> 'Xã Đức Xuân',
        'loai'=> 3,
        'parent_id'=> 114
        ],
        [
        'ten'=> 'Phường Nguyễn Thị Minh Khai',
        'loai'=> 3,
        'parent_id'=> 115
        ],
        [
        'ten'=> 'Phường Sông Cầu',
        'loai'=> 3,
        'parent_id'=> 115
        ],
        [
        'ten'=> 'Phường Đức Xuân',
        'loai'=> 3,
        'parent_id'=> 115
        ],
        [
        'ten'=> 'Phường Phùng Chí Kiên',
        'loai'=> 3,
        'parent_id'=> 115
        ],
        [
        'ten'=> 'Phường Huyền Tụng',
        'loai'=> 3,
        'parent_id'=> 115
        ],
        [
        'ten'=> 'Xã Dương Quang',
        'loai'=> 3,
        'parent_id'=> 115
        ],
        [
        'ten'=> 'Xã Nông Thượng',
        'loai'=> 3,
        'parent_id'=> 115
        ],
        [
        'ten'=> 'Phường Xuất Hóa',
        'loai'=> 3,
        'parent_id'=> 115
        ],
        [
        'ten'=> 'Xã Bằng Thành',
        'loai'=> 3,
        'parent_id'=> 116
        ],
        [
        'ten'=> 'Xã Nhạn Môn',
        'loai'=> 3,
        'parent_id'=> 116
        ],
        [
        'ten'=> 'Xã Bộc Bố',
        'loai'=> 3,
        'parent_id'=> 116
        ],
        [
        'ten'=> 'Xã Công Bằng',
        'loai'=> 3,
        'parent_id'=> 116
        ],
        [
        'ten'=> 'Xã Giáo Hiệu',
        'loai'=> 3,
        'parent_id'=> 116
        ],
        [
        'ten'=> 'Xã Xuân La',
        'loai'=> 3,
        'parent_id'=> 116
        ],
        [
        'ten'=> 'Xã An Thắng',
        'loai'=> 3,
        'parent_id'=> 116
        ],
        [
        'ten'=> 'Xã Cổ Linh',
        'loai'=> 3,
        'parent_id'=> 116
        ],
        [
        'ten'=> 'Xã Nghiên Loan',
        'loai'=> 3,
        'parent_id'=> 116
        ],
        [
        'ten'=> 'Xã Cao Tân',
        'loai'=> 3,
        'parent_id'=> 116
        ],
        [
        'ten'=> 'Thị trấn Chợ Rã',
        'loai'=> 3,
        'parent_id'=> 117
        ],
        [
        'ten'=> 'Xã Bành Trạch',
        'loai'=> 3,
        'parent_id'=> 117
        ],
        [
        'ten'=> 'Xã Phúc Lộc',
        'loai'=> 3,
        'parent_id'=> 117
        ],
        [
        'ten'=> 'Xã Hà Hiệu',
        'loai'=> 3,
        'parent_id'=> 117
        ],
        [
        'ten'=> 'Xã Cao Thượng',
        'loai'=> 3,
        'parent_id'=> 117
        ],
        [
        'ten'=> 'Xã Khang Ninh',
        'loai'=> 3,
        'parent_id'=> 117
        ],
        [
        'ten'=> 'Xã Nam Mẫu',
        'loai'=> 3,
        'parent_id'=> 117
        ],
        [
        'ten'=> 'Xã Thượng Giáo',
        'loai'=> 3,
        'parent_id'=> 117
        ],
        [
        'ten'=> 'Xã Địa Linh',
        'loai'=> 3,
        'parent_id'=> 117
        ],
        [
        'ten'=> 'Xã Yến Dương',
        'loai'=> 3,
        'parent_id'=> 117
        ],
        [
        'ten'=> 'Xã Chu Hương',
        'loai'=> 3,
        'parent_id'=> 117
        ],
        [
        'ten'=> 'Xã Quảng Khê',
        'loai'=> 3,
        'parent_id'=> 117
        ],
        [
        'ten'=> 'Xã Mỹ Phương',
        'loai'=> 3,
        'parent_id'=> 117
        ],
        [
        'ten'=> 'Xã Hoàng Trĩ',
        'loai'=> 3,
        'parent_id'=> 117
        ],
        [
        'ten'=> 'Xã Đồng Phúc',
        'loai'=> 3,
        'parent_id'=> 117
        ],
        [
        'ten'=> 'Thị trấn Nà Phặc',
        'loai'=> 3,
        'parent_id'=> 118
        ],
        [
        'ten'=> 'Xã Thượng Ân',
        'loai'=> 3,
        'parent_id'=> 118
        ],
        [
        'ten'=> 'Xã Bằng Vân',
        'loai'=> 3,
        'parent_id'=> 118
        ],
        [
        'ten'=> 'Xã Cốc Đán',
        'loai'=> 3,
        'parent_id'=> 118
        ],
        [
        'ten'=> 'Xã Trung Hoà',
        'loai'=> 3,
        'parent_id'=> 118
        ],
        [
        'ten'=> 'Xã Đức Vân',
        'loai'=> 3,
        'parent_id'=> 118
        ],
        [
        'ten'=> 'Xã Vân Tùng',
        'loai'=> 3,
        'parent_id'=> 118
        ],
        [
        'ten'=> 'Xã Thượng Quan',
        'loai'=> 3,
        'parent_id'=> 118
        ],
        [
        'ten'=> 'Xã Hiệp Lực',
        'loai'=> 3,
        'parent_id'=> 118
        ],
        [
        'ten'=> 'Xã Thuần Mang',
        'loai'=> 3,
        'parent_id'=> 118
        ],
        [
        'ten'=> 'Thị trấn Phủ Thông',
        'loai'=> 3,
        'parent_id'=> 119
        ],
        [
        'ten'=> 'Xã Vi Hương',
        'loai'=> 3,
        'parent_id'=> 119
        ],
        [
        'ten'=> 'Xã Sĩ Bình',
        'loai'=> 3,
        'parent_id'=> 119
        ],
        [
        'ten'=> 'Xã Vũ Muộn',
        'loai'=> 3,
        'parent_id'=> 119
        ],
        [
        'ten'=> 'Xã Đôn Phong',
        'loai'=> 3,
        'parent_id'=> 119
        ],
        [
        'ten'=> 'Xã Lục Bình',
        'loai'=> 3,
        'parent_id'=> 119
        ],
        [
        'ten'=> 'Xã Tân Tú',
        'loai'=> 3,
        'parent_id'=> 119
        ],
        [
        'ten'=> 'Xã Nguyên Phúc',
        'loai'=> 3,
        'parent_id'=> 119
        ],
        [
        'ten'=> 'Xã Cao Sơn',
        'loai'=> 3,
        'parent_id'=> 119
        ],
        [
        'ten'=> 'Xã Quân Hà',
        'loai'=> 3,
        'parent_id'=> 119
        ],
        [
        'ten'=> 'Xã Cẩm Giàng',
        'loai'=> 3,
        'parent_id'=> 119
        ],
        [
        'ten'=> 'Xã Mỹ Thanh',
        'loai'=> 3,
        'parent_id'=> 119
        ],
        [
        'ten'=> 'Xã Dương Phong',
        'loai'=> 3,
        'parent_id'=> 119
        ],
        [
        'ten'=> 'Xã Quang Thuận',
        'loai'=> 3,
        'parent_id'=> 119
        ],
        [
        'ten'=> 'Thị trấn Bằng Lũng',
        'loai'=> 3,
        'parent_id'=> 120
        ],
        [
        'ten'=> 'Xã Xuân Lạc',
        'loai'=> 3,
        'parent_id'=> 120
        ],
        [
        'ten'=> 'Xã Nam Cường',
        'loai'=> 3,
        'parent_id'=> 120
        ],
        [
        'ten'=> 'Xã Đồng Lạc',
        'loai'=> 3,
        'parent_id'=> 120
        ],
        [
        'ten'=> 'Xã Tân Lập',
        'loai'=> 3,
        'parent_id'=> 120
        ],
        [
        'ten'=> 'Xã Bản Thi',
        'loai'=> 3,
        'parent_id'=> 120
        ],
        [
        'ten'=> 'Xã Quảng Bạch',
        'loai'=> 3,
        'parent_id'=> 120
        ],
        [
        'ten'=> 'Xã Bằng Phúc',
        'loai'=> 3,
        'parent_id'=> 120
        ],
        [
        'ten'=> 'Xã Yên Thịnh',
        'loai'=> 3,
        'parent_id'=> 120
        ],
        [
        'ten'=> 'Xã Yên Thượng',
        'loai'=> 3,
        'parent_id'=> 120
        ],
        [
        'ten'=> 'Xã Phương Viên',
        'loai'=> 3,
        'parent_id'=> 120
        ],
        [
        'ten'=> 'Xã Ngọc Phái',
        'loai'=> 3,
        'parent_id'=> 120
        ],
        [
        'ten'=> 'Xã Đồng Thắng',
        'loai'=> 3,
        'parent_id'=> 120
        ],
        [
        'ten'=> 'Xã Lương Bằng',
        'loai'=> 3,
        'parent_id'=> 120
        ],
        [
        'ten'=> 'Xã Bằng Lãng',
        'loai'=> 3,
        'parent_id'=> 120
        ],
        [
        'ten'=> 'Xã Đại Sảo',
        'loai'=> 3,
        'parent_id'=> 120
        ],
        [
        'ten'=> 'Xã Nghĩa Tá',
        'loai'=> 3,
        'parent_id'=> 120
        ],
        [
        'ten'=> 'Xã Yên Mỹ',
        'loai'=> 3,
        'parent_id'=> 120
        ],
        [
        'ten'=> 'Xã Bình Trung',
        'loai'=> 3,
        'parent_id'=> 120
        ],
        [
        'ten'=> 'Xã Yên Phong',
        'loai'=> 3,
        'parent_id'=> 120
        ],
        [
        'ten'=> 'Thị trấn Đồng Tâm',
        'loai'=> 3,
        'parent_id'=> 121
        ],
        [
        'ten'=> 'Xã Tân Sơn',
        'loai'=> 3,
        'parent_id'=> 121
        ],
        [
        'ten'=> 'Xã Thanh Vận',
        'loai'=> 3,
        'parent_id'=> 121
        ],
        [
        'ten'=> 'Xã Mai Lạp',
        'loai'=> 3,
        'parent_id'=> 121
        ],
        [
        'ten'=> 'Xã Hoà Mục',
        'loai'=> 3,
        'parent_id'=> 121
        ],
        [
        'ten'=> 'Xã Thanh Mai',
        'loai'=> 3,
        'parent_id'=> 121
        ],
        [
        'ten'=> 'Xã Cao Kỳ',
        'loai'=> 3,
        'parent_id'=> 121
        ],
        [
        'ten'=> 'Xã Nông Hạ',
        'loai'=> 3,
        'parent_id'=> 121
        ],
        [
        'ten'=> 'Xã Yên Cư',
        'loai'=> 3,
        'parent_id'=> 121
        ],
        [
        'ten'=> 'Xã Thanh Thịnh',
        'loai'=> 3,
        'parent_id'=> 121
        ],
        [
        'ten'=> 'Xã Yên Hân',
        'loai'=> 3,
        'parent_id'=> 121
        ],
        [
        'ten'=> 'Xã Như Cố',
        'loai'=> 3,
        'parent_id'=> 121
        ],
        [
        'ten'=> 'Xã Bình Văn',
        'loai'=> 3,
        'parent_id'=> 121
        ],
        [
        'ten'=> 'Xã Quảng Chu',
        'loai'=> 3,
        'parent_id'=> 121
        ],
        [
        'ten'=> 'Xã Văn Vũ',
        'loai'=> 3,
        'parent_id'=> 122
        ],
        [
        'ten'=> 'Xã Văn Lang',
        'loai'=> 3,
        'parent_id'=> 122
        ],
        [
        'ten'=> 'Xã Lương Thượng',
        'loai'=> 3,
        'parent_id'=> 122
        ],
        [
        'ten'=> 'Xã Kim Hỷ',
        'loai'=> 3,
        'parent_id'=> 122
        ],
        [
        'ten'=> 'Xã Cường Lợi',
        'loai'=> 3,
        'parent_id'=> 122
        ],
        [
        'ten'=> 'Thị trấn Yến Lạc',
        'loai'=> 3,
        'parent_id'=> 122
        ],
        [
        'ten'=> 'Xã Kim Lư',
        'loai'=> 3,
        'parent_id'=> 122
        ],
        [
        'ten'=> 'Xã Sơn Thành',
        'loai'=> 3,
        'parent_id'=> 122
        ],
        [
        'ten'=> 'Xã Văn Minh',
        'loai'=> 3,
        'parent_id'=> 122
        ],
        [
        'ten'=> 'Xã Côn Minh',
        'loai'=> 3,
        'parent_id'=> 122
        ],
        [
        'ten'=> 'Xã Cư Lễ',
        'loai'=> 3,
        'parent_id'=> 122
        ],
        [
        'ten'=> 'Xã Trần Phú',
        'loai'=> 3,
        'parent_id'=> 122
        ],
        [
        'ten'=> 'Xã Quang Phong',
        'loai'=> 3,
        'parent_id'=> 122
        ],
        [
        'ten'=> 'Xã Dương Sơn',
        'loai'=> 3,
        'parent_id'=> 122
        ],
        [
        'ten'=> 'Xã Xuân Dương',
        'loai'=> 3,
        'parent_id'=> 122
        ],
        [
        'ten'=> 'Xã Đổng Xá',
        'loai'=> 3,
        'parent_id'=> 122
        ],
        [
        'ten'=> 'Xã Liêm Thuỷ',
        'loai'=> 3,
        'parent_id'=> 122
        ],
        [
        'ten'=> 'Phường Phan Thiết',
        'loai'=> 3,
        'parent_id'=> 123
        ],
        [
        'ten'=> 'Phường Minh Xuân',
        'loai'=> 3,
        'parent_id'=> 123
        ],
        [
        'ten'=> 'Phường Tân Quang',
        'loai'=> 3,
        'parent_id'=> 123
        ],
        [
        'ten'=> 'Xã Tràng Đà',
        'loai'=> 3,
        'parent_id'=> 123
        ],
        [
        'ten'=> 'Phường Nông Tiến',
        'loai'=> 3,
        'parent_id'=> 123
        ],
        [
        'ten'=> 'Phường Ỷ La',
        'loai'=> 3,
        'parent_id'=> 123
        ],
        [
        'ten'=> 'Phường Tân Hà',
        'loai'=> 3,
        'parent_id'=> 123
        ],
        [
        'ten'=> 'Phường Hưng Thành',
        'loai'=> 3,
        'parent_id'=> 123
        ],
        [
        'ten'=> 'Xã Kim Phú',
        'loai'=> 3,
        'parent_id'=> 123
        ],
        [
        'ten'=> 'Xã An Khang',
        'loai'=> 3,
        'parent_id'=> 123
        ],
        [
        'ten'=> 'Phường Mỹ Lâm',
        'loai'=> 3,
        'parent_id'=> 123
        ],
        [
        'ten'=> 'Phường An Tường',
        'loai'=> 3,
        'parent_id'=> 123
        ],
        [
        'ten'=> 'Xã Lưỡng Vượng',
        'loai'=> 3,
        'parent_id'=> 123
        ],
        [
        'ten'=> 'Xã Thái Long',
        'loai'=> 3,
        'parent_id'=> 123
        ],
        [
        'ten'=> 'Phường Đội Cấn',
        'loai'=> 3,
        'parent_id'=> 123
        ],
        [
        'ten'=> 'Xã Phúc Yên',
        'loai'=> 3,
        'parent_id'=> 124
        ],
        [
        'ten'=> 'Xã Xuân Lập',
        'loai'=> 3,
        'parent_id'=> 124
        ],
        [
        'ten'=> 'Xã Khuôn Hà',
        'loai'=> 3,
        'parent_id'=> 124
        ],
        [
        'ten'=> 'Thị trấn Lăng Can',
        'loai'=> 3,
        'parent_id'=> 124
        ],
        [
        'ten'=> 'Xã Thượng Lâm',
        'loai'=> 3,
        'parent_id'=> 124
        ],
        [
        'ten'=> 'Xã Bình An',
        'loai'=> 3,
        'parent_id'=> 124
        ],
        [
        'ten'=> 'Xã Hồng Quang',
        'loai'=> 3,
        'parent_id'=> 124
        ],
        [
        'ten'=> 'Xã Thổ Bình',
        'loai'=> 3,
        'parent_id'=> 124
        ],
        [
        'ten'=> 'Xã Phúc Sơn',
        'loai'=> 3,
        'parent_id'=> 124
        ],
        [
        'ten'=> 'Xã Minh Quang',
        'loai'=> 3,
        'parent_id'=> 124
        ],
        [
        'ten'=> 'Thị trấn Na Hang',
        'loai'=> 3,
        'parent_id'=> 125
        ],
        [
        'ten'=> 'Xã Sinh Long',
        'loai'=> 3,
        'parent_id'=> 125
        ],
        [
        'ten'=> 'Xã Thượng Giáp',
        'loai'=> 3,
        'parent_id'=> 125
        ],
        [
        'ten'=> 'Xã Thượng Nông',
        'loai'=> 3,
        'parent_id'=> 125
        ],
        [
        'ten'=> 'Xã Côn Lôn',
        'loai'=> 3,
        'parent_id'=> 125
        ],
        [
        'ten'=> 'Xã Yên Hoa',
        'loai'=> 3,
        'parent_id'=> 125
        ],
        [
        'ten'=> 'Xã Hồng Thái',
        'loai'=> 3,
        'parent_id'=> 125
        ],
        [
        'ten'=> 'Xã Đà Vị',
        'loai'=> 3,
        'parent_id'=> 125
        ],
        [
        'ten'=> 'Xã Khau Tinh',
        'loai'=> 3,
        'parent_id'=> 125
        ],
        [
        'ten'=> 'Xã Sơn Phú',
        'loai'=> 3,
        'parent_id'=> 125
        ],
        [
        'ten'=> 'Xã Năng Khả',
        'loai'=> 3,
        'parent_id'=> 125
        ],
        [
        'ten'=> 'Xã Thanh Tương',
        'loai'=> 3,
        'parent_id'=> 125
        ],
        [
        'ten'=> 'Thị trấn Vĩnh Lộc',
        'loai'=> 3,
        'parent_id'=> 126
        ],
        [
        'ten'=> 'Xã Trung Hà',
        'loai'=> 3,
        'parent_id'=> 126
        ],
        [
        'ten'=> 'Xã Tân Mỹ',
        'loai'=> 3,
        'parent_id'=> 126
        ],
        [
        'ten'=> 'Xã Hà Lang',
        'loai'=> 3,
        'parent_id'=> 126
        ],
        [
        'ten'=> 'Xã Hùng Mỹ',
        'loai'=> 3,
        'parent_id'=> 126
        ],
        [
        'ten'=> 'Xã Yên Lập',
        'loai'=> 3,
        'parent_id'=> 126
        ],
        [
        'ten'=> 'Xã Tân An',
        'loai'=> 3,
        'parent_id'=> 126
        ],
        [
        'ten'=> 'Xã Bình Phú',
        'loai'=> 3,
        'parent_id'=> 126
        ],
        [
        'ten'=> 'Xã Xuân Quang',
        'loai'=> 3,
        'parent_id'=> 126
        ],
        [
        'ten'=> 'Xã Ngọc Hội',
        'loai'=> 3,
        'parent_id'=> 126
        ],
        [
        'ten'=> 'Xã Phú Bình',
        'loai'=> 3,
        'parent_id'=> 126
        ],
        [
        'ten'=> 'Xã Hòa Phú',
        'loai'=> 3,
        'parent_id'=> 126
        ],
        [
        'ten'=> 'Xã Phúc Thịnh',
        'loai'=> 3,
        'parent_id'=> 126
        ],
        [
        'ten'=> 'Xã Kiên Đài',
        'loai'=> 3,
        'parent_id'=> 126
        ],
        [
        'ten'=> 'Xã Tân Thịnh',
        'loai'=> 3,
        'parent_id'=> 126
        ],
        [
        'ten'=> 'Xã Trung Hòa',
        'loai'=> 3,
        'parent_id'=> 126
        ],
        [
        'ten'=> 'Xã Kim Bình',
        'loai'=> 3,
        'parent_id'=> 126
        ],
        [
        'ten'=> 'Xã Hòa An',
        'loai'=> 3,
        'parent_id'=> 126
        ],
        [
        'ten'=> 'Xã Vinh Quang',
        'loai'=> 3,
        'parent_id'=> 126
        ],
        [
        'ten'=> 'Xã Tri Phú',
        'loai'=> 3,
        'parent_id'=> 126
        ],
        [
        'ten'=> 'Xã Nhân Lý',
        'loai'=> 3,
        'parent_id'=> 126
        ],
        [
        'ten'=> 'Xã Yên Nguyên',
        'loai'=> 3,
        'parent_id'=> 126
        ],
        [
        'ten'=> 'Xã Linh Phú',
        'loai'=> 3,
        'parent_id'=> 126
        ],
        [
        'ten'=> 'Xã Bình Nhân',
        'loai'=> 3,
        'parent_id'=> 126
        ],
        [
        'ten'=> 'Thị trấn Tân Yên',
        'loai'=> 3,
        'parent_id'=> 127
        ],
        [
        'ten'=> 'Xã Yên Thuận',
        'loai'=> 3,
        'parent_id'=> 127
        ],
        [
        'ten'=> 'Xã Bạch Xa',
        'loai'=> 3,
        'parent_id'=> 127
        ],
        [
        'ten'=> 'Xã Minh Khương',
        'loai'=> 3,
        'parent_id'=> 127
        ],
        [
        'ten'=> 'Xã Yên Lâm',
        'loai'=> 3,
        'parent_id'=> 127
        ],
        [
        'ten'=> 'Xã Minh Dân',
        'loai'=> 3,
        'parent_id'=> 127
        ],
        [
        'ten'=> 'Xã Phù Lưu',
        'loai'=> 3,
        'parent_id'=> 127
        ],
        [
        'ten'=> 'Xã Minh Hương',
        'loai'=> 3,
        'parent_id'=> 127
        ],
        [
        'ten'=> 'Xã Yên Phú',
        'loai'=> 3,
        'parent_id'=> 127
        ],
        [
        'ten'=> 'Xã Tân Thành',
        'loai'=> 3,
        'parent_id'=> 127
        ],
        [
        'ten'=> 'Xã Bình Xa',
        'loai'=> 3,
        'parent_id'=> 127
        ],
        [
        'ten'=> 'Xã Thái Sơn',
        'loai'=> 3,
        'parent_id'=> 127
        ],
        [
        'ten'=> 'Xã Nhân Mục',
        'loai'=> 3,
        'parent_id'=> 127
        ],
        [
        'ten'=> 'Xã Thành Long',
        'loai'=> 3,
        'parent_id'=> 127
        ],
        [
        'ten'=> 'Xã Bằng Cốc',
        'loai'=> 3,
        'parent_id'=> 127
        ],
        [
        'ten'=> 'Xã Thái Hòa',
        'loai'=> 3,
        'parent_id'=> 127
        ],
        [
        'ten'=> 'Xã Đức Ninh',
        'loai'=> 3,
        'parent_id'=> 127
        ],
        [
        'ten'=> 'Xã Hùng Đức',
        'loai'=> 3,
        'parent_id'=> 127
        ],
        [
        'ten'=> 'Xã Quí Quân',
        'loai'=> 3,
        'parent_id'=> 128
        ],
        [
        'ten'=> 'Xã Lực Hành',
        'loai'=> 3,
        'parent_id'=> 128
        ],
        [
        'ten'=> 'Xã Kiến Thiết',
        'loai'=> 3,
        'parent_id'=> 128
        ],
        [
        'ten'=> 'Xã Trung Minh',
        'loai'=> 3,
        'parent_id'=> 128
        ],
        [
        'ten'=> 'Xã Chiêu Yên',
        'loai'=> 3,
        'parent_id'=> 128
        ],
        [
        'ten'=> 'Xã Trung Trực',
        'loai'=> 3,
        'parent_id'=> 128
        ],
        [
        'ten'=> 'Xã Xuân Vân',
        'loai'=> 3,
        'parent_id'=> 128
        ],
        [
        'ten'=> 'Xã Phúc Ninh',
        'loai'=> 3,
        'parent_id'=> 128
        ],
        [
        'ten'=> 'Xã Hùng Lợi',
        'loai'=> 3,
        'parent_id'=> 128
        ],
        [
        'ten'=> 'Xã Trung Sơn',
        'loai'=> 3,
        'parent_id'=> 128
        ],
        [
        'ten'=> 'Xã Tân Tiến',
        'loai'=> 3,
        'parent_id'=> 128
        ],
        [
        'ten'=> 'Xã Tứ Quận',
        'loai'=> 3,
        'parent_id'=> 128
        ],
        [
        'ten'=> 'Xã Đạo Viện',
        'loai'=> 3,
        'parent_id'=> 128
        ],
        [
        'ten'=> 'Xã Tân Long',
        'loai'=> 3,
        'parent_id'=> 128
        ],
        [
        'ten'=> 'Thị trấn Yên Sơn',
        'loai'=> 3,
        'parent_id'=> 128
        ],
        [
        'ten'=> 'Xã Kim Quan',
        'loai'=> 3,
        'parent_id'=> 128
        ],
        [
        'ten'=> 'Xã Lang Quán',
        'loai'=> 3,
        'parent_id'=> 128
        ],
        [
        'ten'=> 'Xã Phú Thịnh',
        'loai'=> 3,
        'parent_id'=> 128
        ],
        [
        'ten'=> 'Xã Công Đa',
        'loai'=> 3,
        'parent_id'=> 128
        ],
        [
        'ten'=> 'Xã Trung Môn',
        'loai'=> 3,
        'parent_id'=> 128
        ],
        [
        'ten'=> 'Xã Chân Sơn',
        'loai'=> 3,
        'parent_id'=> 128
        ],
        [
        'ten'=> 'Xã Thái Bình',
        'loai'=> 3,
        'parent_id'=> 128
        ],
        [
        'ten'=> 'Xã Tiến Bộ',
        'loai'=> 3,
        'parent_id'=> 128
        ],
        [
        'ten'=> 'Xã Mỹ Bằng',
        'loai'=> 3,
        'parent_id'=> 128
        ],
        [
        'ten'=> 'Xã Hoàng Khai',
        'loai'=> 3,
        'parent_id'=> 128
        ],
        [
        'ten'=> 'Xã Nhữ Hán',
        'loai'=> 3,
        'parent_id'=> 128
        ],
        [
        'ten'=> 'Xã Nhữ Khê',
        'loai'=> 3,
        'parent_id'=> 128
        ],
        [
        'ten'=> 'Xã Đội Bình',
        'loai'=> 3,
        'parent_id'=> 128
        ],
        [
        'ten'=> 'Thị trấn Sơn Dương',
        'loai'=> 3,
        'parent_id'=> 129
        ],
        [
        'ten'=> 'Xã Trung Yên',
        'loai'=> 3,
        'parent_id'=> 129
        ],
        [
        'ten'=> 'Xã Minh Thanh',
        'loai'=> 3,
        'parent_id'=> 129
        ],
        [
        'ten'=> 'Xã Tân Trào',
        'loai'=> 3,
        'parent_id'=> 129
        ],
        [
        'ten'=> 'Xã Vĩnh Lợi',
        'loai'=> 3,
        'parent_id'=> 129
        ],
        [
        'ten'=> 'Xã Thượng Ấm',
        'loai'=> 3,
        'parent_id'=> 129
        ],
        [
        'ten'=> 'Xã Bình Yên',
        'loai'=> 3,
        'parent_id'=> 129
        ],
        [
        'ten'=> 'Xã Lương Thiện',
        'loai'=> 3,
        'parent_id'=> 129
        ],
        [
        'ten'=> 'Xã Tú Thịnh',
        'loai'=> 3,
        'parent_id'=> 129
        ],
        [
        'ten'=> 'Xã Cấp Tiến',
        'loai'=> 3,
        'parent_id'=> 129
        ],
        [
        'ten'=> 'Xã Hợp Thành',
        'loai'=> 3,
        'parent_id'=> 129
        ],
        [
        'ten'=> 'Xã Phúc Ứng',
        'loai'=> 3,
        'parent_id'=> 129
        ],
        [
        'ten'=> 'Xã Đông Thọ',
        'loai'=> 3,
        'parent_id'=> 129
        ],
        [
        'ten'=> 'Xã Kháng Nhật',
        'loai'=> 3,
        'parent_id'=> 129
        ],
        [
        'ten'=> 'Xã Hợp Hòa',
        'loai'=> 3,
        'parent_id'=> 129
        ],
        [
        'ten'=> 'Xã Quyết Thắng',
        'loai'=> 3,
        'parent_id'=> 129
        ],
        [
        'ten'=> 'Xã Đồng Quý',
        'loai'=> 3,
        'parent_id'=> 129
        ],
        [
        'ten'=> 'Xã Tân Thanh',
        'loai'=> 3,
        'parent_id'=> 129
        ],
        [
        'ten'=> 'Xã Vân Sơn',
        'loai'=> 3,
        'parent_id'=> 129
        ],
        [
        'ten'=> 'Xã Văn Phú',
        'loai'=> 3,
        'parent_id'=> 129
        ],
        [
        'ten'=> 'Xã Chi Thiết',
        'loai'=> 3,
        'parent_id'=> 129
        ],
        [
        'ten'=> 'Xã Đông Lợi',
        'loai'=> 3,
        'parent_id'=> 129
        ],
        [
        'ten'=> 'Xã Thiện Kế',
        'loai'=> 3,
        'parent_id'=> 129
        ],
        [
        'ten'=> 'Xã Hồng Lạc',
        'loai'=> 3,
        'parent_id'=> 129
        ],
        [
        'ten'=> 'Xã Phú Lương',
        'loai'=> 3,
        'parent_id'=> 129
        ],
        [
        'ten'=> 'Xã Ninh Lai',
        'loai'=> 3,
        'parent_id'=> 129
        ],
        [
        'ten'=> 'Xã Đại Phú',
        'loai'=> 3,
        'parent_id'=> 129
        ],
        [
        'ten'=> 'Xã Sơn Nam',
        'loai'=> 3,
        'parent_id'=> 129
        ],
        [
        'ten'=> 'Xã Hào Phú',
        'loai'=> 3,
        'parent_id'=> 129
        ],
        [
        'ten'=> 'Xã Tam Đa',
        'loai'=> 3,
        'parent_id'=> 129
        ],
        [
        'ten'=> 'Xã Trường Sinh',
        'loai'=> 3,
        'parent_id'=> 129
        ],
        [
        'ten'=> 'Phường Duyên Hải',
        'loai'=> 3,
        'parent_id'=> 130
        ],
        [
        'ten'=> 'Phường Lào Cai',
        'loai'=> 3,
        'parent_id'=> 130
        ],
        [
        'ten'=> 'Phường Cốc Lếu',
        'loai'=> 3,
        'parent_id'=> 130
        ],
        [
        'ten'=> 'Phường Kim Tân',
        'loai'=> 3,
        'parent_id'=> 130
        ],
        [
        'ten'=> 'Phường Bắc Lệnh',
        'loai'=> 3,
        'parent_id'=> 130
        ],
        [
        'ten'=> 'Phường Pom Hán',
        'loai'=> 3,
        'parent_id'=> 130
        ],
        [
        'ten'=> 'Phường Xuân Tăng',
        'loai'=> 3,
        'parent_id'=> 130
        ],
        [
        'ten'=> 'Phường Bình Minh',
        'loai'=> 3,
        'parent_id'=> 130
        ],
        [
        'ten'=> 'Xã Thống Nhất',
        'loai'=> 3,
        'parent_id'=> 130
        ],
        [
        'ten'=> 'Xã Đồng Tuyển',
        'loai'=> 3,
        'parent_id'=> 130
        ],
        [
        'ten'=> 'Xã Vạn Hoà',
        'loai'=> 3,
        'parent_id'=> 130
        ],
        [
        'ten'=> 'Phường Bắc Cường',
        'loai'=> 3,
        'parent_id'=> 130
        ],
        [
        'ten'=> 'Phường Nam Cường',
        'loai'=> 3,
        'parent_id'=> 130
        ],
        [
        'ten'=> 'Xã Cam Đường',
        'loai'=> 3,
        'parent_id'=> 130
        ],
        [
        'ten'=> 'Xã Tả Phời',
        'loai'=> 3,
        'parent_id'=> 130
        ],
        [
        'ten'=> 'Xã Hợp Thành',
        'loai'=> 3,
        'parent_id'=> 130
        ],
        [
        'ten'=> 'Xã Cốc San',
        'loai'=> 3,
        'parent_id'=> 130
        ],
        [
        'ten'=> 'Thị trấn Bát Xát',
        'loai'=> 3,
        'parent_id'=> 131
        ],
        [
        'ten'=> 'Xã A Mú Sung',
        'loai'=> 3,
        'parent_id'=> 131
        ],
        [
        'ten'=> 'Xã Nậm Chạc',
        'loai'=> 3,
        'parent_id'=> 131
        ],
        [
        'ten'=> 'Xã A Lù',
        'loai'=> 3,
        'parent_id'=> 131
        ],
        [
        'ten'=> 'Xã Trịnh Tường',
        'loai'=> 3,
        'parent_id'=> 131
        ],
        [
        'ten'=> 'Xã Y Tý',
        'loai'=> 3,
        'parent_id'=> 131
        ],
        [
        'ten'=> 'Xã Cốc Mỳ',
        'loai'=> 3,
        'parent_id'=> 131
        ],
        [
        'ten'=> 'Xã Dền Sáng',
        'loai'=> 3,
        'parent_id'=> 131
        ],
        [
        'ten'=> 'Xã Bản Vược',
        'loai'=> 3,
        'parent_id'=> 131
        ],
        [
        'ten'=> 'Xã Sàng Ma Sáo',
        'loai'=> 3,
        'parent_id'=> 131
        ],
        [
        'ten'=> 'Xã Bản Qua',
        'loai'=> 3,
        'parent_id'=> 131
        ],
        [
        'ten'=> 'Xã Mường Vi',
        'loai'=> 3,
        'parent_id'=> 131
        ],
        [
        'ten'=> 'Xã Dền Thàng',
        'loai'=> 3,
        'parent_id'=> 131
        ],
        [
        'ten'=> 'Xã Bản Xèo',
        'loai'=> 3,
        'parent_id'=> 131
        ],
        [
        'ten'=> 'Xã Mường Hum',
        'loai'=> 3,
        'parent_id'=> 131
        ],
        [
        'ten'=> 'Xã Trung Lèng Hồ',
        'loai'=> 3,
        'parent_id'=> 131
        ],
        [
        'ten'=> 'Xã Quang Kim',
        'loai'=> 3,
        'parent_id'=> 131
        ],
        [
        'ten'=> 'Xã Pa Cheo',
        'loai'=> 3,
        'parent_id'=> 131
        ],
        [
        'ten'=> 'Xã Nậm Pung',
        'loai'=> 3,
        'parent_id'=> 131
        ],
        [
        'ten'=> 'Xã Phìn Ngan',
        'loai'=> 3,
        'parent_id'=> 131
        ],
        [
        'ten'=> 'Xã Tòng Sành',
        'loai'=> 3,
        'parent_id'=> 131
        ],
        [
        'ten'=> 'Xã Pha Long',
        'loai'=> 3,
        'parent_id'=> 132
        ],
        [
        'ten'=> 'Xã Tả Ngải Chồ',
        'loai'=> 3,
        'parent_id'=> 132
        ],
        [
        'ten'=> 'Xã Tung Chung Phố',
        'loai'=> 3,
        'parent_id'=> 132
        ],
        [
        'ten'=> 'Thị trấn Mường Khương',
        'loai'=> 3,
        'parent_id'=> 132
        ],
        [
        'ten'=> 'Xã Dìn Chin',
        'loai'=> 3,
        'parent_id'=> 132
        ],
        [
        'ten'=> 'Xã Tả Gia Khâu',
        'loai'=> 3,
        'parent_id'=> 132
        ],
        [
        'ten'=> 'Xã Nậm Chảy',
        'loai'=> 3,
        'parent_id'=> 132
        ],
        [
        'ten'=> 'Xã Nấm Lư',
        'loai'=> 3,
        'parent_id'=> 132
        ],
        [
        'ten'=> 'Xã Lùng Khấu Nhin',
        'loai'=> 3,
        'parent_id'=> 132
        ],
        [
        'ten'=> 'Xã Thanh Bình',
        'loai'=> 3,
        'parent_id'=> 132
        ],
        [
        'ten'=> 'Xã Cao Sơn',
        'loai'=> 3,
        'parent_id'=> 132
        ],
        [
        'ten'=> 'Xã Lùng Vai',
        'loai'=> 3,
        'parent_id'=> 132
        ],
        [
        'ten'=> 'Xã Bản Lầu',
        'loai'=> 3,
        'parent_id'=> 132
        ],
        [
        'ten'=> 'Xã La Pan Tẩn',
        'loai'=> 3,
        'parent_id'=> 132
        ],
        [
        'ten'=> 'Xã Tả Thàng',
        'loai'=> 3,
        'parent_id'=> 132
        ],
        [
        'ten'=> 'Xã Bản Sen',
        'loai'=> 3,
        'parent_id'=> 132
        ],
        [
        'ten'=> 'Xã Nàn Sán',
        'loai'=> 3,
        'parent_id'=> 133
        ],
        [
        'ten'=> 'Xã Thào Chư Phìn',
        'loai'=> 3,
        'parent_id'=> 133
        ],
        [
        'ten'=> 'Xã Bản Mế',
        'loai'=> 3,
        'parent_id'=> 133
        ],
        [
        'ten'=> 'Thị trấn Si Ma Cai',
        'loai'=> 3,
        'parent_id'=> 133
        ],
        [
        'ten'=> 'Xã Sán Chải',
        'loai'=> 3,
        'parent_id'=> 133
        ],
        [
        'ten'=> 'Xã Lùng Thẩn',
        'loai'=> 3,
        'parent_id'=> 133
        ],
        [
        'ten'=> 'Xã Cán Cấu',
        'loai'=> 3,
        'parent_id'=> 133
        ],
        [
        'ten'=> 'Xã Sín Chéng',
        'loai'=> 3,
        'parent_id'=> 133
        ],
        [
        'ten'=> 'Xã Quan Hồ Thẩn',
        'loai'=> 3,
        'parent_id'=> 133
        ],
        [
        'ten'=> 'Xã Nàn Xín',
        'loai'=> 3,
        'parent_id'=> 133
        ],
        [
        'ten'=> 'Thị trấn Bắc Hà',
        'loai'=> 3,
        'parent_id'=> 134
        ],
        [
        'ten'=> 'Xã Lùng Cải',
        'loai'=> 3,
        'parent_id'=> 134
        ],
        [
        'ten'=> 'Xã Lùng Phình',
        'loai'=> 3,
        'parent_id'=> 134
        ],
        [
        'ten'=> 'Xã Tả Van Chư',
        'loai'=> 3,
        'parent_id'=> 134
        ],
        [
        'ten'=> 'Xã Tả Củ Tỷ',
        'loai'=> 3,
        'parent_id'=> 134
        ],
        [
        'ten'=> 'Xã Thải Giàng Phố',
        'loai'=> 3,
        'parent_id'=> 134
        ],
        [
        'ten'=> 'Xã Hoàng Thu Phố',
        'loai'=> 3,
        'parent_id'=> 134
        ],
        [
        'ten'=> 'Xã Bản Phố',
        'loai'=> 3,
        'parent_id'=> 134
        ],
        [
        'ten'=> 'Xã Bản Liền',
        'loai'=> 3,
        'parent_id'=> 134
        ],
        [
        'ten'=> 'Xã Tà Chải',
        'loai'=> 3,
        'parent_id'=> 134
        ],
        [
        'ten'=> 'Xã Na Hối',
        'loai'=> 3,
        'parent_id'=> 134
        ],
        [
        'ten'=> 'Xã Cốc Ly',
        'loai'=> 3,
        'parent_id'=> 134
        ],
        [
        'ten'=> 'Xã Nậm Mòn',
        'loai'=> 3,
        'parent_id'=> 134
        ],
        [
        'ten'=> 'Xã Nậm Đét',
        'loai'=> 3,
        'parent_id'=> 134
        ],
        [
        'ten'=> 'Xã Nậm Khánh',
        'loai'=> 3,
        'parent_id'=> 134
        ],
        [
        'ten'=> 'Xã Bảo Nhai',
        'loai'=> 3,
        'parent_id'=> 134
        ],
        [
        'ten'=> 'Xã Nậm Lúc',
        'loai'=> 3,
        'parent_id'=> 134
        ],
        [
        'ten'=> 'Xã Cốc Lầu',
        'loai'=> 3,
        'parent_id'=> 134
        ],
        [
        'ten'=> 'Xã Bản Cái',
        'loai'=> 3,
        'parent_id'=> 134
        ],
        [
        'ten'=> 'Thị trấn N.T Phong Hải',
        'loai'=> 3,
        'parent_id'=> 135
        ],
        [
        'ten'=> 'Thị trấn Phố Lu',
        'loai'=> 3,
        'parent_id'=> 135
        ],
        [
        'ten'=> 'Thị trấn Tằng Loỏng',
        'loai'=> 3,
        'parent_id'=> 135
        ],
        [
        'ten'=> 'Xã Bản Phiệt',
        'loai'=> 3,
        'parent_id'=> 135
        ],
        [
        'ten'=> 'Xã Bản Cầm',
        'loai'=> 3,
        'parent_id'=> 135
        ],
        [
        'ten'=> 'Xã Thái Niên',
        'loai'=> 3,
        'parent_id'=> 135
        ],
        [
        'ten'=> 'Xã Phong Niên',
        'loai'=> 3,
        'parent_id'=> 135
        ],
        [
        'ten'=> 'Xã Gia Phú',
        'loai'=> 3,
        'parent_id'=> 135
        ],
        [
        'ten'=> 'Xã Xuân Quang',
        'loai'=> 3,
        'parent_id'=> 135
        ],
        [
        'ten'=> 'Xã Sơn Hải',
        'loai'=> 3,
        'parent_id'=> 135
        ],
        [
        'ten'=> 'Xã Xuân Giao',
        'loai'=> 3,
        'parent_id'=> 135
        ],
        [
        'ten'=> 'Xã Trì Quang',
        'loai'=> 3,
        'parent_id'=> 135
        ],
        [
        'ten'=> 'Xã Sơn Hà',
        'loai'=> 3,
        'parent_id'=> 135
        ],
        [
        'ten'=> 'Xã Phú Nhuận',
        'loai'=> 3,
        'parent_id'=> 135
        ],
        [
        'ten'=> 'Thị trấn Phố Ràng',
        'loai'=> 3,
        'parent_id'=> 136
        ],
        [
        'ten'=> 'Xã Tân Tiến',
        'loai'=> 3,
        'parent_id'=> 136
        ],
        [
        'ten'=> 'Xã Nghĩa Đô',
        'loai'=> 3,
        'parent_id'=> 136
        ],
        [
        'ten'=> 'Xã Vĩnh Yên',
        'loai'=> 3,
        'parent_id'=> 136
        ],
        [
        'ten'=> 'Xã Điện Quan',
        'loai'=> 3,
        'parent_id'=> 136
        ],
        [
        'ten'=> 'Xã Xuân Hoà',
        'loai'=> 3,
        'parent_id'=> 136
        ],
        [
        'ten'=> 'Xã Tân Dương',
        'loai'=> 3,
        'parent_id'=> 136
        ],
        [
        'ten'=> 'Xã Thượng Hà',
        'loai'=> 3,
        'parent_id'=> 136
        ],
        [
        'ten'=> 'Xã Kim Sơn',
        'loai'=> 3,
        'parent_id'=> 136
        ],
        [
        'ten'=> 'Xã Cam Cọn',
        'loai'=> 3,
        'parent_id'=> 136
        ],
        [
        'ten'=> 'Xã Minh Tân',
        'loai'=> 3,
        'parent_id'=> 136
        ],
        [
        'ten'=> 'Xã Xuân Thượng',
        'loai'=> 3,
        'parent_id'=> 136
        ],
        [
        'ten'=> 'Xã Việt Tiến',
        'loai'=> 3,
        'parent_id'=> 136
        ],
        [
        'ten'=> 'Xã Yên Sơn',
        'loai'=> 3,
        'parent_id'=> 136
        ],
        [
        'ten'=> 'Xã Bảo Hà',
        'loai'=> 3,
        'parent_id'=> 136
        ],
        [
        'ten'=> 'Xã Lương Sơn',
        'loai'=> 3,
        'parent_id'=> 136
        ],
        [
        'ten'=> 'Xã Phúc Khánh',
        'loai'=> 3,
        'parent_id'=> 136
        ],
        [
        'ten'=> 'Phường Sa Pa',
        'loai'=> 3,
        'parent_id'=> 137
        ],
        [
        'ten'=> 'Phường Sa Pả',
        'loai'=> 3,
        'parent_id'=> 137
        ],
        [
        'ten'=> 'Phường Ô Quý Hồ',
        'loai'=> 3,
        'parent_id'=> 137
        ],
        [
        'ten'=> 'Xã Ngũ Chỉ Sơn',
        'loai'=> 3,
        'parent_id'=> 137
        ],
        [
        'ten'=> 'Phường Phan Si Păng',
        'loai'=> 3,
        'parent_id'=> 137
        ],
        [
        'ten'=> 'Xã Trung Chải',
        'loai'=> 3,
        'parent_id'=> 137
        ],
        [
        'ten'=> 'Xã Tả Phìn',
        'loai'=> 3,
        'parent_id'=> 137
        ],
        [
        'ten'=> 'Phường Hàm Rồng',
        'loai'=> 3,
        'parent_id'=> 137
        ],
        [
        'ten'=> 'Xã Hoàng Liên',
        'loai'=> 3,
        'parent_id'=> 137
        ],
        [
        'ten'=> 'Xã Thanh Bình',
        'loai'=> 3,
        'parent_id'=> 137
        ],
        [
        'ten'=> 'Phường Cầu Mây',
        'loai'=> 3,
        'parent_id'=> 137
        ],
        [
        'ten'=> 'Xã Mường Hoa',
        'loai'=> 3,
        'parent_id'=> 137
        ],
        [
        'ten'=> 'Xã Tả Van',
        'loai'=> 3,
        'parent_id'=> 137
        ],
        [
        'ten'=> 'Xã Mường Bo',
        'loai'=> 3,
        'parent_id'=> 137
        ],
        [
        'ten'=> 'Xã Bản Hồ',
        'loai'=> 3,
        'parent_id'=> 137
        ],
        [
        'ten'=> 'Xã Liên Minh',
        'loai'=> 3,
        'parent_id'=> 137
        ],
        [
        'ten'=> 'Thị trấn Khánh Yên',
        'loai'=> 3,
        'parent_id'=> 138
        ],
        [
        'ten'=> 'Xã Võ Lao',
        'loai'=> 3,
        'parent_id'=> 138
        ],
        [
        'ten'=> 'Xã Sơn Thuỷ',
        'loai'=> 3,
        'parent_id'=> 138
        ],
        [
        'ten'=> 'Xã Nậm Mả',
        'loai'=> 3,
        'parent_id'=> 138
        ],
        [
        'ten'=> 'Xã Tân Thượng',
        'loai'=> 3,
        'parent_id'=> 138
        ],
        [
        'ten'=> 'Xã Nậm Rạng',
        'loai'=> 3,
        'parent_id'=> 138
        ],
        [
        'ten'=> 'Xã Nậm Chầy',
        'loai'=> 3,
        'parent_id'=> 138
        ],
        [
        'ten'=> 'Xã Tân An',
        'loai'=> 3,
        'parent_id'=> 138
        ],
        [
        'ten'=> 'Xã Khánh Yên Thượng',
        'loai'=> 3,
        'parent_id'=> 138
        ],
        [
        'ten'=> 'Xã Nậm Xé',
        'loai'=> 3,
        'parent_id'=> 138
        ],
        [
        'ten'=> 'Xã Dần Thàng',
        'loai'=> 3,
        'parent_id'=> 138
        ],
        [
        'ten'=> 'Xã Chiềng Ken',
        'loai'=> 3,
        'parent_id'=> 138
        ],
        [
        'ten'=> 'Xã Làng Giàng',
        'loai'=> 3,
        'parent_id'=> 138
        ],
        [
        'ten'=> 'Xã Hoà Mạc',
        'loai'=> 3,
        'parent_id'=> 138
        ],
        [
        'ten'=> 'Xã Khánh Yên Trung',
        'loai'=> 3,
        'parent_id'=> 138
        ],
        [
        'ten'=> 'Xã Khánh Yên Hạ',
        'loai'=> 3,
        'parent_id'=> 138
        ],
        [
        'ten'=> 'Xã Dương Quỳ',
        'loai'=> 3,
        'parent_id'=> 138
        ],
        [
        'ten'=> 'Xã Nậm Tha',
        'loai'=> 3,
        'parent_id'=> 138
        ],
        [
        'ten'=> 'Xã Minh Lương',
        'loai'=> 3,
        'parent_id'=> 138
        ],
        [
        'ten'=> 'Xã Thẩm Dương',
        'loai'=> 3,
        'parent_id'=> 138
        ],
        [
        'ten'=> 'Xã Liêm Phú',
        'loai'=> 3,
        'parent_id'=> 138
        ],
        [
        'ten'=> 'Xã Nậm Xây',
        'loai'=> 3,
        'parent_id'=> 138
        ],
        [
        'ten'=> 'Phường Noong Bua',
        'loai'=> 3,
        'parent_id'=> 139
        ],
        [
        'ten'=> 'Phường Him Lam',
        'loai'=> 3,
        'parent_id'=> 139
        ],
        [
        'ten'=> 'Phường Thanh Bình',
        'loai'=> 3,
        'parent_id'=> 139
        ],
        [
        'ten'=> 'Phường Tân Thanh',
        'loai'=> 3,
        'parent_id'=> 139
        ],
        [
        'ten'=> 'Phường Mường Thanh',
        'loai'=> 3,
        'parent_id'=> 139
        ],
        [
        'ten'=> 'Phường Nam Thanh',
        'loai'=> 3,
        'parent_id'=> 139
        ],
        [
        'ten'=> 'Phường Thanh Trường',
        'loai'=> 3,
        'parent_id'=> 139
        ],
        [
        'ten'=> 'Xã Thanh Minh',
        'loai'=> 3,
        'parent_id'=> 139
        ],
        [
        'ten'=> 'Xã Nà Tấu',
        'loai'=> 3,
        'parent_id'=> 139
        ],
        [
        'ten'=> 'Xã Nà Nhạn',
        'loai'=> 3,
        'parent_id'=> 139
        ],
        [
        'ten'=> 'Xã Mường Phăng',
        'loai'=> 3,
        'parent_id'=> 139
        ],
        [
        'ten'=> 'Xã Pá Khoang',
        'loai'=> 3,
        'parent_id'=> 139
        ],
        [
        'ten'=> 'Phường Sông Đà',
        'loai'=> 3,
        'parent_id'=> 140
        ],
        [
        'ten'=> 'Phường Na Lay',
        'loai'=> 3,
        'parent_id'=> 140
        ],
        [
        'ten'=> 'Xã Lay Nưa',
        'loai'=> 3,
        'parent_id'=> 140
        ],
        [
        'ten'=> 'Xã Sín Thầu',
        'loai'=> 3,
        'parent_id'=> 141
        ],
        [
        'ten'=> 'Xã Sen Thượng',
        'loai'=> 3,
        'parent_id'=> 141
        ],
        [
        'ten'=> 'Xã Chung Chải',
        'loai'=> 3,
        'parent_id'=> 141
        ],
        [
        'ten'=> 'Xã Leng Su Sìn',
        'loai'=> 3,
        'parent_id'=> 141
        ],
        [
        'ten'=> 'Xã Pá Mỳ',
        'loai'=> 3,
        'parent_id'=> 141
        ],
        [
        'ten'=> 'Xã Mường Nhé',
        'loai'=> 3,
        'parent_id'=> 141
        ],
        [
        'ten'=> 'Xã Nậm Vì',
        'loai'=> 3,
        'parent_id'=> 141
        ],
        [
        'ten'=> 'Xã Nậm Kè',
        'loai'=> 3,
        'parent_id'=> 141
        ],
        [
        'ten'=> 'Xã Mường Toong',
        'loai'=> 3,
        'parent_id'=> 141
        ],
        [
        'ten'=> 'Xã Quảng Lâm',
        'loai'=> 3,
        'parent_id'=> 141
        ],
        [
        'ten'=> 'Xã Huổi Lếnh',
        'loai'=> 3,
        'parent_id'=> 141
        ],
        [
        'ten'=> 'Thị Trấn Mường Chà',
        'loai'=> 3,
        'parent_id'=> 142
        ],
        [
        'ten'=> 'Xã Xá Tổng',
        'loai'=> 3,
        'parent_id'=> 142
        ],
        [
        'ten'=> 'Xã Mường Tùng',
        'loai'=> 3,
        'parent_id'=> 142
        ],
        [
        'ten'=> 'Xã Hừa Ngài',
        'loai'=> 3,
        'parent_id'=> 142
        ],
        [
        'ten'=> 'Xã Huổi Mí',
        'loai'=> 3,
        'parent_id'=> 142
        ],
        [
        'ten'=> 'Xã Pa Ham',
        'loai'=> 3,
        'parent_id'=> 142
        ],
        [
        'ten'=> 'Xã Nậm Nèn',
        'loai'=> 3,
        'parent_id'=> 142
        ],
        [
        'ten'=> 'Xã Huổi Lèng',
        'loai'=> 3,
        'parent_id'=> 142
        ],
        [
        'ten'=> 'Xã Sa Lông',
        'loai'=> 3,
        'parent_id'=> 142
        ],
        [
        'ten'=> 'Xã Ma Thì Hồ',
        'loai'=> 3,
        'parent_id'=> 142
        ],
        [
        'ten'=> 'Xã Na Sang',
        'loai'=> 3,
        'parent_id'=> 142
        ],
        [
        'ten'=> 'Xã Mường Mươn',
        'loai'=> 3,
        'parent_id'=> 142
        ],
        [
        'ten'=> 'Thị trấn Tủa Chùa',
        'loai'=> 3,
        'parent_id'=> 143
        ],
        [
        'ten'=> 'Xã Huổi Só',
        'loai'=> 3,
        'parent_id'=> 143
        ],
        [
        'ten'=> 'Xã Xín Chải',
        'loai'=> 3,
        'parent_id'=> 143
        ],
        [
        'ten'=> 'Xã Tả Sìn Thàng',
        'loai'=> 3,
        'parent_id'=> 143
        ],
        [
        'ten'=> 'Xã Lao Xả Phình',
        'loai'=> 3,
        'parent_id'=> 143
        ],
        [
        'ten'=> 'Xã Tả Phìn',
        'loai'=> 3,
        'parent_id'=> 143
        ],
        [
        'ten'=> 'Xã Tủa Thàng',
        'loai'=> 3,
        'parent_id'=> 143
        ],
        [
        'ten'=> 'Xã Trung Thu',
        'loai'=> 3,
        'parent_id'=> 143
        ],
        [
        'ten'=> 'Xã Sính Phình',
        'loai'=> 3,
        'parent_id'=> 143
        ],
        [
        'ten'=> 'Xã Sáng Nhè',
        'loai'=> 3,
        'parent_id'=> 143
        ],
        [
        'ten'=> 'Xã Mường Đun',
        'loai'=> 3,
        'parent_id'=> 143
        ],
        [
        'ten'=> 'Xã Mường Báng',
        'loai'=> 3,
        'parent_id'=> 143
        ],
        [
        'ten'=> 'Thị trấn Tuần Giáo',
        'loai'=> 3,
        'parent_id'=> 144
        ],
        [
        'ten'=> 'Xã Phình Sáng',
        'loai'=> 3,
        'parent_id'=> 144
        ],
        [
        'ten'=> 'Xã Rạng Đông',
        'loai'=> 3,
        'parent_id'=> 144
        ],
        [
        'ten'=> 'Xã Mùn Chung',
        'loai'=> 3,
        'parent_id'=> 144
        ],
        [
        'ten'=> 'Xã Nà Tòng',
        'loai'=> 3,
        'parent_id'=> 144
        ],
        [
        'ten'=> 'Xã Ta Ma',
        'loai'=> 3,
        'parent_id'=> 144
        ],
        [
        'ten'=> 'Xã Mường Mùn',
        'loai'=> 3,
        'parent_id'=> 144
        ],
        [
        'ten'=> 'Xã Pú Xi',
        'loai'=> 3,
        'parent_id'=> 144
        ],
        [
        'ten'=> 'Xã Pú Nhung',
        'loai'=> 3,
        'parent_id'=> 144
        ],
        [
        'ten'=> 'Xã Quài Nưa',
        'loai'=> 3,
        'parent_id'=> 144
        ],
        [
        'ten'=> 'Xã Mường Thín',
        'loai'=> 3,
        'parent_id'=> 144
        ],
        [
        'ten'=> 'Xã Tỏa Tình',
        'loai'=> 3,
        'parent_id'=> 144
        ],
        [
        'ten'=> 'Xã Nà Sáy',
        'loai'=> 3,
        'parent_id'=> 144
        ],
        [
        'ten'=> 'Xã Mường Khong',
        'loai'=> 3,
        'parent_id'=> 144
        ],
        [
        'ten'=> 'Xã Quài Cang',
        'loai'=> 3,
        'parent_id'=> 144
        ],
        [
        'ten'=> 'Xã Quài Tở',
        'loai'=> 3,
        'parent_id'=> 144
        ],
        [
        'ten'=> 'Xã Chiềng Sinh',
        'loai'=> 3,
        'parent_id'=> 144
        ],
        [
        'ten'=> 'Xã Chiềng Đông',
        'loai'=> 3,
        'parent_id'=> 144
        ],
        [
        'ten'=> 'Xã Tênh Phông',
        'loai'=> 3,
        'parent_id'=> 144
        ],
        [
        'ten'=> 'Xã Mường Pồn',
        'loai'=> 3,
        'parent_id'=> 145
        ],
        [
        'ten'=> 'Xã Thanh Nưa',
        'loai'=> 3,
        'parent_id'=> 145
        ],
        [
        'ten'=> 'Xã Hua Thanh',
        'loai'=> 3,
        'parent_id'=> 145
        ],
        [
        'ten'=> 'Xã Thanh Luông',
        'loai'=> 3,
        'parent_id'=> 145
        ],
        [
        'ten'=> 'Xã Thanh Hưng',
        'loai'=> 3,
        'parent_id'=> 145
        ],
        [
        'ten'=> 'Xã Thanh Xương',
        'loai'=> 3,
        'parent_id'=> 145
        ],
        [
        'ten'=> 'Xã Thanh Chăn',
        'loai'=> 3,
        'parent_id'=> 145
        ],
        [
        'ten'=> 'Xã Pa Thơm',
        'loai'=> 3,
        'parent_id'=> 145
        ],
        [
        'ten'=> 'Xã Thanh An',
        'loai'=> 3,
        'parent_id'=> 145
        ],
        [
        'ten'=> 'Xã Thanh Yên',
        'loai'=> 3,
        'parent_id'=> 145
        ],
        [
        'ten'=> 'Xã Noong Luống',
        'loai'=> 3,
        'parent_id'=> 145
        ],
        [
        'ten'=> 'Xã Noọng Hẹt',
        'loai'=> 3,
        'parent_id'=> 145
        ],
        [
        'ten'=> 'Xã Sam Mứn',
        'loai'=> 3,
        'parent_id'=> 145
        ],
        [
        'ten'=> 'Xã Pom Lót',
        'loai'=> 3,
        'parent_id'=> 145
        ],
        [
        'ten'=> 'Xã Núa Ngam',
        'loai'=> 3,
        'parent_id'=> 145
        ],
        [
        'ten'=> 'Xã Hẹ Muông',
        'loai'=> 3,
        'parent_id'=> 145
        ],
        [
        'ten'=> 'Xã Na Ư',
        'loai'=> 3,
        'parent_id'=> 145
        ],
        [
        'ten'=> 'Xã Mường Nhà',
        'loai'=> 3,
        'parent_id'=> 145
        ],
        [
        'ten'=> 'Xã Na Tông',
        'loai'=> 3,
        'parent_id'=> 145
        ],
        [
        'ten'=> 'Xã Mường Lói',
        'loai'=> 3,
        'parent_id'=> 145
        ],
        [
        'ten'=> 'Xã Phu Luông',
        'loai'=> 3,
        'parent_id'=> 145
        ],
        [
        'ten'=> 'Thị trấn Điện Biên Đông',
        'loai'=> 3,
        'parent_id'=> 146
        ],
        [
        'ten'=> 'Xã Na Son',
        'loai'=> 3,
        'parent_id'=> 146
        ],
        [
        'ten'=> 'Xã Phì Nhừ',
        'loai'=> 3,
        'parent_id'=> 146
        ],
        [
        'ten'=> 'Xã Chiềng Sơ',
        'loai'=> 3,
        'parent_id'=> 146
        ],
        [
        'ten'=> 'Xã Mường Luân',
        'loai'=> 3,
        'parent_id'=> 146
        ],
        [
        'ten'=> 'Xã Pú Nhi',
        'loai'=> 3,
        'parent_id'=> 146
        ],
        [
        'ten'=> 'Xã Nong U',
        'loai'=> 3,
        'parent_id'=> 146
        ],
        [
        'ten'=> 'Xã Xa Dung',
        'loai'=> 3,
        'parent_id'=> 146
        ],
        [
        'ten'=> 'Xã Keo Lôm',
        'loai'=> 3,
        'parent_id'=> 146
        ],
        [
        'ten'=> 'Xã Luân Giới',
        'loai'=> 3,
        'parent_id'=> 146
        ],
        [
        'ten'=> 'Xã Phình Giàng',
        'loai'=> 3,
        'parent_id'=> 146
        ],
        [
        'ten'=> 'Xã Pú Hồng',
        'loai'=> 3,
        'parent_id'=> 146
        ],
        [
        'ten'=> 'Xã Tìa Dình',
        'loai'=> 3,
        'parent_id'=> 146
        ],
        [
        'ten'=> 'Xã Háng Lìa',
        'loai'=> 3,
        'parent_id'=> 146
        ],
        [
        'ten'=> 'Thị trấn Mường Ảng',
        'loai'=> 3,
        'parent_id'=> 147
        ],
        [
        'ten'=> 'Xã Mường Đăng',
        'loai'=> 3,
        'parent_id'=> 147
        ],
        [
        'ten'=> 'Xã Ngối Cáy',
        'loai'=> 3,
        'parent_id'=> 147
        ],
        [
        'ten'=> 'Xã Ẳng Tở',
        'loai'=> 3,
        'parent_id'=> 147
        ],
        [
        'ten'=> 'Xã Búng Lao',
        'loai'=> 3,
        'parent_id'=> 147
        ],
        [
        'ten'=> 'Xã Xuân Lao',
        'loai'=> 3,
        'parent_id'=> 147
        ],
        [
        'ten'=> 'Xã Ẳng Nưa',
        'loai'=> 3,
        'parent_id'=> 147
        ],
        [
        'ten'=> 'Xã Ẳng Cang',
        'loai'=> 3,
        'parent_id'=> 147
        ],
        [
        'ten'=> 'Xã Nặm Lịch',
        'loai'=> 3,
        'parent_id'=> 147
        ],
        [
        'ten'=> 'Xã Mường Lạn',
        'loai'=> 3,
        'parent_id'=> 147
        ],
        [
        'ten'=> 'Xã Nậm Tin',
        'loai'=> 3,
        'parent_id'=> 148
        ],
        [
        'ten'=> 'Xã Pa Tần',
        'loai'=> 3,
        'parent_id'=> 148
        ],
        [
        'ten'=> 'Xã Chà Cang',
        'loai'=> 3,
        'parent_id'=> 148
        ],
        [
        'ten'=> 'Xã Na Cô Sa',
        'loai'=> 3,
        'parent_id'=> 148
        ],
        [
        'ten'=> 'Xã Nà Khoa',
        'loai'=> 3,
        'parent_id'=> 148
        ],
        [
        'ten'=> 'Xã Nà Hỳ',
        'loai'=> 3,
        'parent_id'=> 148
        ],
        [
        'ten'=> 'Xã Nà Bủng',
        'loai'=> 3,
        'parent_id'=> 148
        ],
        [
        'ten'=> 'Xã Nậm Nhừ',
        'loai'=> 3,
        'parent_id'=> 148
        ],
        [
        'ten'=> 'Xã Nậm Chua',
        'loai'=> 3,
        'parent_id'=> 148
        ],
        [
        'ten'=> 'Xã Nậm Khăn',
        'loai'=> 3,
        'parent_id'=> 148
        ],
        [
        'ten'=> 'Xã Chà Tở',
        'loai'=> 3,
        'parent_id'=> 148
        ],
        [
        'ten'=> 'Xã Vàng Đán',
        'loai'=> 3,
        'parent_id'=> 148
        ],
        [
        'ten'=> 'Xã Chà Nưa',
        'loai'=> 3,
        'parent_id'=> 148
        ],
        [
        'ten'=> 'Xã Phìn Hồ',
        'loai'=> 3,
        'parent_id'=> 148
        ],
        [
        'ten'=> 'Xã Si Pa Phìn',
        'loai'=> 3,
        'parent_id'=> 148
        ],
        [
        'ten'=> 'Phường Quyết Thắng',
        'loai'=> 3,
        'parent_id'=> 149
        ],
        [
        'ten'=> 'Phường Tân Phong',
        'loai'=> 3,
        'parent_id'=> 149
        ],
        [
        'ten'=> 'Phường Quyết Tiến',
        'loai'=> 3,
        'parent_id'=> 149
        ],
        [
        'ten'=> 'Phường Đoàn Kết',
        'loai'=> 3,
        'parent_id'=> 149
        ],
        [
        'ten'=> 'Xã Sùng Phài',
        'loai'=> 3,
        'parent_id'=> 149
        ],
        [
        'ten'=> 'Phường Đông Phong',
        'loai'=> 3,
        'parent_id'=> 149
        ],
        [
        'ten'=> 'Xã San Thàng',
        'loai'=> 3,
        'parent_id'=> 149
        ],
        [
        'ten'=> 'Thị trấn Tam Đường',
        'loai'=> 3,
        'parent_id'=> 150
        ],
        [
        'ten'=> 'Xã Thèn Sin',
        'loai'=> 3,
        'parent_id'=> 150
        ],
        [
        'ten'=> 'Xã Tả Lèng',
        'loai'=> 3,
        'parent_id'=> 150
        ],
        [
        'ten'=> 'Xã Giang Ma',
        'loai'=> 3,
        'parent_id'=> 150
        ],
        [
        'ten'=> 'Xã Hồ Thầu',
        'loai'=> 3,
        'parent_id'=> 150
        ],
        [
        'ten'=> 'Xã Bình Lư',
        'loai'=> 3,
        'parent_id'=> 150
        ],
        [
        'ten'=> 'Xã Sơn Bình',
        'loai'=> 3,
        'parent_id'=> 150
        ],
        [
        'ten'=> 'Xã Nùng Nàng',
        'loai'=> 3,
        'parent_id'=> 150
        ],
        [
        'ten'=> 'Xã Bản Giang',
        'loai'=> 3,
        'parent_id'=> 150
        ],
        [
        'ten'=> 'Xã Bản Hon',
        'loai'=> 3,
        'parent_id'=> 150
        ],
        [
        'ten'=> 'Xã Bản Bo',
        'loai'=> 3,
        'parent_id'=> 150
        ],
        [
        'ten'=> 'Xã Nà Tăm',
        'loai'=> 3,
        'parent_id'=> 150
        ],
        [
        'ten'=> 'Xã Khun Há',
        'loai'=> 3,
        'parent_id'=> 150
        ],
        [
        'ten'=> 'Thị trấn Mường Tè',
        'loai'=> 3,
        'parent_id'=> 151
        ],
        [
        'ten'=> 'Xã Thu Lũm',
        'loai'=> 3,
        'parent_id'=> 151
        ],
        [
        'ten'=> 'Xã Ka Lăng',
        'loai'=> 3,
        'parent_id'=> 151
        ],
        [
        'ten'=> 'Xã Tá Bạ',
        'loai'=> 3,
        'parent_id'=> 151
        ],
        [
        'ten'=> 'Xã Pa ủ',
        'loai'=> 3,
        'parent_id'=> 151
        ],
        [
        'ten'=> 'Xã Mường Tè',
        'loai'=> 3,
        'parent_id'=> 151
        ],
        [
        'ten'=> 'Xã Pa Vệ Sử',
        'loai'=> 3,
        'parent_id'=> 151
        ],
        [
        'ten'=> 'Xã Mù Cả',
        'loai'=> 3,
        'parent_id'=> 151
        ],
        [
        'ten'=> 'Xã Bum Tở',
        'loai'=> 3,
        'parent_id'=> 151
        ],
        [
        'ten'=> 'Xã Nậm Khao',
        'loai'=> 3,
        'parent_id'=> 151
        ],
        [
        'ten'=> 'Xã Tà Tổng',
        'loai'=> 3,
        'parent_id'=> 151
        ],
        [
        'ten'=> 'Xã Bum Nưa',
        'loai'=> 3,
        'parent_id'=> 151
        ],
        [
        'ten'=> 'Xã Vàng San',
        'loai'=> 3,
        'parent_id'=> 151
        ],
        [
        'ten'=> 'Xã Kan Hồ',
        'loai'=> 3,
        'parent_id'=> 151
        ],
        [
        'ten'=> 'Thị trấn Sìn Hồ',
        'loai'=> 3,
        'parent_id'=> 152
        ],
        [
        'ten'=> 'Xã Chăn Nưa',
        'loai'=> 3,
        'parent_id'=> 152
        ],
        [
        'ten'=> 'Xã Pa Tần',
        'loai'=> 3,
        'parent_id'=> 152
        ],
        [
        'ten'=> 'Xã Phìn Hồ',
        'loai'=> 3,
        'parent_id'=> 152
        ],
        [
        'ten'=> 'Xã Hồng Thu',
        'loai'=> 3,
        'parent_id'=> 152
        ],
        [
        'ten'=> 'Xã Phăng Sô Lin',
        'loai'=> 3,
        'parent_id'=> 152
        ],
        [
        'ten'=> 'Xã Ma Quai',
        'loai'=> 3,
        'parent_id'=> 152
        ],
        [
        'ten'=> 'Xã Lùng Thàng',
        'loai'=> 3,
        'parent_id'=> 152
        ],
        [
        'ten'=> 'Xã Tả Phìn',
        'loai'=> 3,
        'parent_id'=> 152
        ],
        [
        'ten'=> 'Xã Sà Dề Phìn',
        'loai'=> 3,
        'parent_id'=> 152
        ],
        [
        'ten'=> 'Xã Nậm Tăm',
        'loai'=> 3,
        'parent_id'=> 152
        ],
        [
        'ten'=> 'Xã Tả Ngảo',
        'loai'=> 3,
        'parent_id'=> 152
        ],
        [
        'ten'=> 'Xã Pu Sam Cáp',
        'loai'=> 3,
        'parent_id'=> 152
        ],
        [
        'ten'=> 'Xã Nậm Cha',
        'loai'=> 3,
        'parent_id'=> 152
        ],
        [
        'ten'=> 'Xã Pa Khoá',
        'loai'=> 3,
        'parent_id'=> 152
        ],
        [
        'ten'=> 'Xã Làng Mô',
        'loai'=> 3,
        'parent_id'=> 152
        ],
        [
        'ten'=> 'Xã Noong Hẻo',
        'loai'=> 3,
        'parent_id'=> 152
        ],
        [
        'ten'=> 'Xã Nậm Mạ',
        'loai'=> 3,
        'parent_id'=> 152
        ],
        [
        'ten'=> 'Xã Căn Co',
        'loai'=> 3,
        'parent_id'=> 152
        ],
        [
        'ten'=> 'Xã Tủa Sín Chải',
        'loai'=> 3,
        'parent_id'=> 152
        ],
        [
        'ten'=> 'Xã Nậm Cuổi',
        'loai'=> 3,
        'parent_id'=> 152
        ],
        [
        'ten'=> 'Xã Nậm Hăn',
        'loai'=> 3,
        'parent_id'=> 152
        ],
        [
        'ten'=> 'Xã Lả Nhì Thàng',
        'loai'=> 3,
        'parent_id'=> 153
        ],
        [
        'ten'=> 'Xã Huổi Luông',
        'loai'=> 3,
        'parent_id'=> 153
        ],
        [
        'ten'=> 'Thị trấn Phong Thổ',
        'loai'=> 3,
        'parent_id'=> 153
        ],
        [
        'ten'=> 'Xã Sì Lở Lầu',
        'loai'=> 3,
        'parent_id'=> 153
        ],
        [
        'ten'=> 'Xã Mồ Sì San',
        'loai'=> 3,
        'parent_id'=> 153
        ],
        [
        'ten'=> 'Xã Pa Vây Sử',
        'loai'=> 3,
        'parent_id'=> 153
        ],
        [
        'ten'=> 'Xã Vàng Ma Chải',
        'loai'=> 3,
        'parent_id'=> 153
        ],
        [
        'ten'=> 'Xã Tông Qua Lìn',
        'loai'=> 3,
        'parent_id'=> 153
        ],
        [
        'ten'=> 'Xã Mù Sang',
        'loai'=> 3,
        'parent_id'=> 153
        ],
        [
        'ten'=> 'Xã Dào San',
        'loai'=> 3,
        'parent_id'=> 153
        ],
        [
        'ten'=> 'Xã Ma Ly Pho',
        'loai'=> 3,
        'parent_id'=> 153
        ],
        [
        'ten'=> 'Xã Bản Lang',
        'loai'=> 3,
        'parent_id'=> 153
        ],
        [
        'ten'=> 'Xã Hoang Thèn',
        'loai'=> 3,
        'parent_id'=> 153
        ],
        [
        'ten'=> 'Xã Khổng Lào',
        'loai'=> 3,
        'parent_id'=> 153
        ],
        [
        'ten'=> 'Xã Nậm Xe',
        'loai'=> 3,
        'parent_id'=> 153
        ],
        [
        'ten'=> 'Xã Mường So',
        'loai'=> 3,
        'parent_id'=> 153
        ],
        [
        'ten'=> 'Xã Sin Suối Hồ',
        'loai'=> 3,
        'parent_id'=> 153
        ],
        [
        'ten'=> 'Thị trấn Than Uyên',
        'loai'=> 3,
        'parent_id'=> 154
        ],
        [
        'ten'=> 'Xã Phúc Than',
        'loai'=> 3,
        'parent_id'=> 154
        ],
        [
        'ten'=> 'Xã Mường Than',
        'loai'=> 3,
        'parent_id'=> 154
        ],
        [
        'ten'=> 'Xã Mường Mít',
        'loai'=> 3,
        'parent_id'=> 154
        ],
        [
        'ten'=> 'Xã Pha Mu',
        'loai'=> 3,
        'parent_id'=> 154
        ],
        [
        'ten'=> 'Xã Mường Cang',
        'loai'=> 3,
        'parent_id'=> 154
        ],
        [
        'ten'=> 'Xã Hua Nà',
        'loai'=> 3,
        'parent_id'=> 154
        ],
        [
        'ten'=> 'Xã Tà Hừa',
        'loai'=> 3,
        'parent_id'=> 154
        ],
        [
        'ten'=> 'Xã Mường Kim',
        'loai'=> 3,
        'parent_id'=> 154
        ],
        [
        'ten'=> 'Xã Tà Mung',
        'loai'=> 3,
        'parent_id'=> 154
        ],
        [
        'ten'=> 'Xã Tà Gia',
        'loai'=> 3,
        'parent_id'=> 154
        ],
        [
        'ten'=> 'Xã Khoen On',
        'loai'=> 3,
        'parent_id'=> 154
        ],
        [
        'ten'=> 'Thị trấn Tân Uyên',
        'loai'=> 3,
        'parent_id'=> 155
        ],
        [
        'ten'=> 'Xã Mường Khoa',
        'loai'=> 3,
        'parent_id'=> 155
        ],
        [
        'ten'=> 'Xã Phúc Khoa',
        'loai'=> 3,
        'parent_id'=> 155
        ],
        [
        'ten'=> 'Xã Thân Thuộc',
        'loai'=> 3,
        'parent_id'=> 155
        ],
        [
        'ten'=> 'Xã Trung Đồng',
        'loai'=> 3,
        'parent_id'=> 155
        ],
        [
        'ten'=> 'Xã Hố Mít',
        'loai'=> 3,
        'parent_id'=> 155
        ],
        [
        'ten'=> 'Xã Nậm Cần',
        'loai'=> 3,
        'parent_id'=> 155
        ],
        [
        'ten'=> 'Xã Nậm Sỏ',
        'loai'=> 3,
        'parent_id'=> 155
        ],
        [
        'ten'=> 'Xã Pắc Ta',
        'loai'=> 3,
        'parent_id'=> 155
        ],
        [
        'ten'=> 'Xã Tà Mít',
        'loai'=> 3,
        'parent_id'=> 155
        ],
        [
        'ten'=> 'Thị trấn Nậm Nhùn',
        'loai'=> 3,
        'parent_id'=> 156
        ],
        [
        'ten'=> 'Xã Hua Bun',
        'loai'=> 3,
        'parent_id'=> 156
        ],
        [
        'ten'=> 'Xã Mường Mô',
        'loai'=> 3,
        'parent_id'=> 156
        ],
        [
        'ten'=> 'Xã Nậm Chà',
        'loai'=> 3,
        'parent_id'=> 156
        ],
        [
        'ten'=> 'Xã Nậm Manh',
        'loai'=> 3,
        'parent_id'=> 156
        ],
        [
        'ten'=> 'Xã Nậm Hàng',
        'loai'=> 3,
        'parent_id'=> 156
        ],
        [
        'ten'=> 'Xã Lê Lợi',
        'loai'=> 3,
        'parent_id'=> 156
        ],
        [
        'ten'=> 'Xã Pú Đao',
        'loai'=> 3,
        'parent_id'=> 156
        ],
        [
        'ten'=> 'Xã Nậm Pì',
        'loai'=> 3,
        'parent_id'=> 156
        ],
        [
        'ten'=> 'Xã Nậm Ban',
        'loai'=> 3,
        'parent_id'=> 156
        ],
        [
        'ten'=> 'Xã Trung Chải',
        'loai'=> 3,
        'parent_id'=> 156
        ],
        [
        'ten'=> 'Phường Chiềng Lề',
        'loai'=> 3,
        'parent_id'=> 157
        ],
        [
        'ten'=> 'Phường Tô Hiệu',
        'loai'=> 3,
        'parent_id'=> 157
        ],
        [
        'ten'=> 'Phường Quyết Thắng',
        'loai'=> 3,
        'parent_id'=> 157
        ],
        [
        'ten'=> 'Phường Quyết Tâm',
        'loai'=> 3,
        'parent_id'=> 157
        ],
        [
        'ten'=> 'Xã Chiềng Cọ',
        'loai'=> 3,
        'parent_id'=> 157
        ],
        [
        'ten'=> 'Xã Chiềng Đen',
        'loai'=> 3,
        'parent_id'=> 157
        ],
        [
        'ten'=> 'Xã Chiềng Xôm',
        'loai'=> 3,
        'parent_id'=> 157
        ],
        [
        'ten'=> 'Phường Chiềng An',
        'loai'=> 3,
        'parent_id'=> 157
        ],
        [
        'ten'=> 'Phường Chiềng Cơi',
        'loai'=> 3,
        'parent_id'=> 157
        ],
        [
        'ten'=> 'Xã Chiềng Ngần',
        'loai'=> 3,
        'parent_id'=> 157
        ],
        [
        'ten'=> 'Xã Hua La',
        'loai'=> 3,
        'parent_id'=> 157
        ],
        [
        'ten'=> 'Phường Chiềng Sinh',
        'loai'=> 3,
        'parent_id'=> 157
        ],
        [
        'ten'=> 'Xã Mường Chiên',
        'loai'=> 3,
        'parent_id'=> 158
        ],
        [
        'ten'=> 'Xã Cà Nàng',
        'loai'=> 3,
        'parent_id'=> 158
        ],
        [
        'ten'=> 'Xã Chiềng Khay',
        'loai'=> 3,
        'parent_id'=> 158
        ],
        [
        'ten'=> 'Xã Mường Giôn',
        'loai'=> 3,
        'parent_id'=> 158
        ],
        [
        'ten'=> 'Xã Pá Ma Pha Khinh',
        'loai'=> 3,
        'parent_id'=> 158
        ],
        [
        'ten'=> 'Xã Chiềng Ơn',
        'loai'=> 3,
        'parent_id'=> 158
        ],
        [
        'ten'=> 'Xã Mường Giàng',
        'loai'=> 3,
        'parent_id'=> 158
        ],
        [
        'ten'=> 'Xã Chiềng Bằng',
        'loai'=> 3,
        'parent_id'=> 158
        ],
        [
        'ten'=> 'Xã Mường Sại',
        'loai'=> 3,
        'parent_id'=> 158
        ],
        [
        'ten'=> 'Xã Nậm ét',
        'loai'=> 3,
        'parent_id'=> 158
        ],
        [
        'ten'=> 'Xã Chiềng Khoang',
        'loai'=> 3,
        'parent_id'=> 158
        ],
        [
        'ten'=> 'Thị trấn Thuận Châu',
        'loai'=> 3,
        'parent_id'=> 159
        ],
        [
        'ten'=> 'Xã Phổng Lái',
        'loai'=> 3,
        'parent_id'=> 159
        ],
        [
        'ten'=> 'Xã Mường é',
        'loai'=> 3,
        'parent_id'=> 159
        ],
        [
        'ten'=> 'Xã Chiềng Pha',
        'loai'=> 3,
        'parent_id'=> 159
        ],
        [
        'ten'=> 'Xã Chiềng La',
        'loai'=> 3,
        'parent_id'=> 159
        ],
        [
        'ten'=> 'Xã Chiềng Ngàm',
        'loai'=> 3,
        'parent_id'=> 159
        ],
        [
        'ten'=> 'Xã Liệp Tè',
        'loai'=> 3,
        'parent_id'=> 159
        ],
        [
        'ten'=> 'Xã é Tòng',
        'loai'=> 3,
        'parent_id'=> 159
        ],
        [
        'ten'=> 'Xã Phổng Lập',
        'loai'=> 3,
        'parent_id'=> 159
        ],
        [
        'ten'=> 'Xã Phổng Lăng',
        'loai'=> 3,
        'parent_id'=> 159
        ],
        [
        'ten'=> 'Xã Chiềng Ly',
        'loai'=> 3,
        'parent_id'=> 159
        ],
        [
        'ten'=> 'Xã Noong Lay',
        'loai'=> 3,
        'parent_id'=> 159
        ],
        [
        'ten'=> 'Xã Mường Khiêng',
        'loai'=> 3,
        'parent_id'=> 159
        ],
        [
        'ten'=> 'Xã Mường Bám',
        'loai'=> 3,
        'parent_id'=> 159
        ],
        [
        'ten'=> 'Xã Long Hẹ',
        'loai'=> 3,
        'parent_id'=> 159
        ],
        [
        'ten'=> 'Xã Chiềng Bôm',
        'loai'=> 3,
        'parent_id'=> 159
        ],
        [
        'ten'=> 'Xã Thôm Mòn',
        'loai'=> 3,
        'parent_id'=> 159
        ],
        [
        'ten'=> 'Xã Tông Lạnh',
        'loai'=> 3,
        'parent_id'=> 159
        ],
        [
        'ten'=> 'Xã Tông Cọ',
        'loai'=> 3,
        'parent_id'=> 159
        ],
        [
        'ten'=> 'Xã Bó Mười',
        'loai'=> 3,
        'parent_id'=> 159
        ],
        [
        'ten'=> 'Xã Co Mạ',
        'loai'=> 3,
        'parent_id'=> 159
        ],
        [
        'ten'=> 'Xã Púng Tra',
        'loai'=> 3,
        'parent_id'=> 159
        ],
        [
        'ten'=> 'Xã Chiềng Pấc',
        'loai'=> 3,
        'parent_id'=> 159
        ],
        [
        'ten'=> 'Xã Nậm Lầu',
        'loai'=> 3,
        'parent_id'=> 159
        ],
        [
        'ten'=> 'Xã Bon Phặng',
        'loai'=> 3,
        'parent_id'=> 159
        ],
        [
        'ten'=> 'Xã Co Tòng',
        'loai'=> 3,
        'parent_id'=> 159
        ],
        [
        'ten'=> 'Xã Muổi Nọi',
        'loai'=> 3,
        'parent_id'=> 159
        ],
        [
        'ten'=> 'Xã Pá Lông',
        'loai'=> 3,
        'parent_id'=> 159
        ],
        [
        'ten'=> 'Xã Bản Lầm',
        'loai'=> 3,
        'parent_id'=> 159
        ],
        [
        'ten'=> 'Thị trấn Ít Ong',
        'loai'=> 3,
        'parent_id'=> 160
        ],
        [
        'ten'=> 'Xã Nậm Giôn',
        'loai'=> 3,
        'parent_id'=> 160
        ],
        [
        'ten'=> 'Xã Chiềng Lao',
        'loai'=> 3,
        'parent_id'=> 160
        ],
        [
        'ten'=> 'Xã Hua Trai',
        'loai'=> 3,
        'parent_id'=> 160
        ],
        [
        'ten'=> 'Xã Ngọc Chiến',
        'loai'=> 3,
        'parent_id'=> 160
        ],
        [
        'ten'=> 'Xã Mường Trai',
        'loai'=> 3,
        'parent_id'=> 160
        ],
        [
        'ten'=> 'Xã Nậm Păm',
        'loai'=> 3,
        'parent_id'=> 160
        ],
        [
        'ten'=> 'Xã Chiềng Muôn',
        'loai'=> 3,
        'parent_id'=> 160
        ],
        [
        'ten'=> 'Xã Chiềng Ân',
        'loai'=> 3,
        'parent_id'=> 160
        ],
        [
        'ten'=> 'Xã Pi Toong',
        'loai'=> 3,
        'parent_id'=> 160
        ],
        [
        'ten'=> 'Xã Chiềng Công',
        'loai'=> 3,
        'parent_id'=> 160
        ],
        [
        'ten'=> 'Xã Tạ Bú',
        'loai'=> 3,
        'parent_id'=> 160
        ],
        [
        'ten'=> 'Xã Chiềng San',
        'loai'=> 3,
        'parent_id'=> 160
        ],
        [
        'ten'=> 'Xã Mường Bú',
        'loai'=> 3,
        'parent_id'=> 160
        ],
        [
        'ten'=> 'Xã Chiềng Hoa',
        'loai'=> 3,
        'parent_id'=> 160
        ],
        [
        'ten'=> 'Xã Mường Chùm',
        'loai'=> 3,
        'parent_id'=> 160
        ],
        [
        'ten'=> 'Thị trấn Bắc Yên',
        'loai'=> 3,
        'parent_id'=> 161
        ],
        [
        'ten'=> 'Xã Phiêng Ban',
        'loai'=> 3,
        'parent_id'=> 161
        ],
        [
        'ten'=> 'Xã Hang Chú',
        'loai'=> 3,
        'parent_id'=> 161
        ],
        [
        'ten'=> 'Xã Xím Vàng',
        'loai'=> 3,
        'parent_id'=> 161
        ],
        [
        'ten'=> 'Xã Tà Xùa',
        'loai'=> 3,
        'parent_id'=> 161
        ],
        [
        'ten'=> 'Xã Háng Đồng',
        'loai'=> 3,
        'parent_id'=> 161
        ],
        [
        'ten'=> 'Xã Pắc Ngà',
        'loai'=> 3,
        'parent_id'=> 161
        ],
        [
        'ten'=> 'Xã Làng Chếu',
        'loai'=> 3,
        'parent_id'=> 161
        ],
        [
        'ten'=> 'Xã Chim Vàn',
        'loai'=> 3,
        'parent_id'=> 161
        ],
        [
        'ten'=> 'Xã Mường Khoa',
        'loai'=> 3,
        'parent_id'=> 161
        ],
        [
        'ten'=> 'Xã Song Pe',
        'loai'=> 3,
        'parent_id'=> 161
        ],
        [
        'ten'=> 'Xã Hồng Ngài',
        'loai'=> 3,
        'parent_id'=> 161
        ],
        [
        'ten'=> 'Xã Tạ Khoa',
        'loai'=> 3,
        'parent_id'=> 161
        ],
        [
        'ten'=> 'Xã Hua Nhàn',
        'loai'=> 3,
        'parent_id'=> 161
        ],
        [
        'ten'=> 'Xã Phiêng Côn',
        'loai'=> 3,
        'parent_id'=> 161
        ],
        [
        'ten'=> 'Xã Chiềng Sại',
        'loai'=> 3,
        'parent_id'=> 161
        ],
        [
        'ten'=> 'Thị trấn Phù Yên',
        'loai'=> 3,
        'parent_id'=> 162
        ],
        [
        'ten'=> 'Xã Suối Tọ',
        'loai'=> 3,
        'parent_id'=> 162
        ],
        [
        'ten'=> 'Xã Mường Thải',
        'loai'=> 3,
        'parent_id'=> 162
        ],
        [
        'ten'=> 'Xã Mường Cơi',
        'loai'=> 3,
        'parent_id'=> 162
        ],
        [
        'ten'=> 'Xã Quang Huy',
        'loai'=> 3,
        'parent_id'=> 162
        ],
        [
        'ten'=> 'Xã Huy Bắc',
        'loai'=> 3,
        'parent_id'=> 162
        ],
        [
        'ten'=> 'Xã Huy Thượng',
        'loai'=> 3,
        'parent_id'=> 162
        ],
        [
        'ten'=> 'Xã Tân Lang',
        'loai'=> 3,
        'parent_id'=> 162
        ],
        [
        'ten'=> 'Xã Gia Phù',
        'loai'=> 3,
        'parent_id'=> 162
        ],
        [
        'ten'=> 'Xã Tường Phù',
        'loai'=> 3,
        'parent_id'=> 162
        ],
        [
        'ten'=> 'Xã Huy Hạ',
        'loai'=> 3,
        'parent_id'=> 162
        ],
        [
        'ten'=> 'Xã Huy Tân',
        'loai'=> 3,
        'parent_id'=> 162
        ],
        [
        'ten'=> 'Xã Mường Lang',
        'loai'=> 3,
        'parent_id'=> 162
        ],
        [
        'ten'=> 'Xã Suối Bau',
        'loai'=> 3,
        'parent_id'=> 162
        ],
        [
        'ten'=> 'Xã Huy Tường',
        'loai'=> 3,
        'parent_id'=> 162
        ],
        [
        'ten'=> 'Xã Mường Do',
        'loai'=> 3,
        'parent_id'=> 162
        ],
        [
        'ten'=> 'Xã Sập Xa',
        'loai'=> 3,
        'parent_id'=> 162
        ],
        [
        'ten'=> 'Xã Tường Thượng',
        'loai'=> 3,
        'parent_id'=> 162
        ],
        [
        'ten'=> 'Xã Tường Tiến',
        'loai'=> 3,
        'parent_id'=> 162
        ],
        [
        'ten'=> 'Xã Tường Phong',
        'loai'=> 3,
        'parent_id'=> 162
        ],
        [
        'ten'=> 'Xã Tường Hạ',
        'loai'=> 3,
        'parent_id'=> 162
        ],
        [
        'ten'=> 'Xã Kim Bon',
        'loai'=> 3,
        'parent_id'=> 162
        ],
        [
        'ten'=> 'Xã Mường Bang',
        'loai'=> 3,
        'parent_id'=> 162
        ],
        [
        'ten'=> 'Xã Đá Đỏ',
        'loai'=> 3,
        'parent_id'=> 162
        ],
        [
        'ten'=> 'Xã Tân Phong',
        'loai'=> 3,
        'parent_id'=> 162
        ],
        [
        'ten'=> 'Xã Nam Phong',
        'loai'=> 3,
        'parent_id'=> 162
        ],
        [
        'ten'=> 'Xã Bắc Phong',
        'loai'=> 3,
        'parent_id'=> 162
        ],
        [
        'ten'=> 'Thị trấn Mộc Châu',
        'loai'=> 3,
        'parent_id'=> 163
        ],
        [
        'ten'=> 'Thị trấn NT Mộc Châu',
        'loai'=> 3,
        'parent_id'=> 163
        ],
        [
        'ten'=> 'Xã Chiềng Sơn',
        'loai'=> 3,
        'parent_id'=> 163
        ],
        [
        'ten'=> 'Xã Tân Hợp',
        'loai'=> 3,
        'parent_id'=> 163
        ],
        [
        'ten'=> 'Xã Qui Hướng',
        'loai'=> 3,
        'parent_id'=> 163
        ],
        [
        'ten'=> 'Xã Tân Lập',
        'loai'=> 3,
        'parent_id'=> 163
        ],
        [
        'ten'=> 'Xã Nà Mường',
        'loai'=> 3,
        'parent_id'=> 163
        ],
        [
        'ten'=> 'Xã Tà Lai',
        'loai'=> 3,
        'parent_id'=> 163
        ],
        [
        'ten'=> 'Xã Chiềng Hắc',
        'loai'=> 3,
        'parent_id'=> 163
        ],
        [
        'ten'=> 'Xã Hua Păng',
        'loai'=> 3,
        'parent_id'=> 163
        ],
        [
        'ten'=> 'Xã Chiềng Khừa',
        'loai'=> 3,
        'parent_id'=> 163
        ],
        [
        'ten'=> 'Xã Mường Sang',
        'loai'=> 3,
        'parent_id'=> 163
        ],
        [
        'ten'=> 'Xã Đông Sang',
        'loai'=> 3,
        'parent_id'=> 163
        ],
        [
        'ten'=> 'Xã Phiêng Luông',
        'loai'=> 3,
        'parent_id'=> 163
        ],
        [
        'ten'=> 'Xã Lóng Sập',
        'loai'=> 3,
        'parent_id'=> 163
        ],
        [
        'ten'=> 'Thị trấn Yên Châu',
        'loai'=> 3,
        'parent_id'=> 164
        ],
        [
        'ten'=> 'Xã Chiềng Đông',
        'loai'=> 3,
        'parent_id'=> 164
        ],
        [
        'ten'=> 'Xã Sập Vạt',
        'loai'=> 3,
        'parent_id'=> 164
        ],
        [
        'ten'=> 'Xã Chiềng Sàng',
        'loai'=> 3,
        'parent_id'=> 164
        ],
        [
        'ten'=> 'Xã Chiềng Pằn',
        'loai'=> 3,
        'parent_id'=> 164
        ],
        [
        'ten'=> 'Xã Viêng Lán',
        'loai'=> 3,
        'parent_id'=> 164
        ],
        [
        'ten'=> 'Xã Chiềng Hặc',
        'loai'=> 3,
        'parent_id'=> 164
        ],
        [
        'ten'=> 'Xã Mường Lựm',
        'loai'=> 3,
        'parent_id'=> 164
        ],
        [
        'ten'=> 'Xã Chiềng On',
        'loai'=> 3,
        'parent_id'=> 164
        ],
        [
        'ten'=> 'Xã Yên Sơn',
        'loai'=> 3,
        'parent_id'=> 164
        ],
        [
        'ten'=> 'Xã Chiềng Khoi',
        'loai'=> 3,
        'parent_id'=> 164
        ],
        [
        'ten'=> 'Xã Tú Nang',
        'loai'=> 3,
        'parent_id'=> 164
        ],
        [
        'ten'=> 'Xã Lóng Phiêng',
        'loai'=> 3,
        'parent_id'=> 164
        ],
        [
        'ten'=> 'Xã Phiêng Khoài',
        'loai'=> 3,
        'parent_id'=> 164
        ],
        [
        'ten'=> 'Xã Chiềng Tương',
        'loai'=> 3,
        'parent_id'=> 164
        ],
        [
        'ten'=> 'Thị trấn Hát Lót',
        'loai'=> 3,
        'parent_id'=> 165
        ],
        [
        'ten'=> 'Xã Chiềng Sung',
        'loai'=> 3,
        'parent_id'=> 165
        ],
        [
        'ten'=> 'Xã Mường Bằng',
        'loai'=> 3,
        'parent_id'=> 165
        ],
        [
        'ten'=> 'Xã Chiềng Chăn',
        'loai'=> 3,
        'parent_id'=> 165
        ],
        [
        'ten'=> 'Xã Mương Chanh',
        'loai'=> 3,
        'parent_id'=> 165
        ],
        [
        'ten'=> 'Xã Chiềng Ban',
        'loai'=> 3,
        'parent_id'=> 165
        ],
        [
        'ten'=> 'Xã Chiềng Mung',
        'loai'=> 3,
        'parent_id'=> 165
        ],
        [
        'ten'=> 'Xã Mường Bon',
        'loai'=> 3,
        'parent_id'=> 165
        ],
        [
        'ten'=> 'Xã Chiềng Chung',
        'loai'=> 3,
        'parent_id'=> 165
        ],
        [
        'ten'=> 'Xã Chiềng Mai',
        'loai'=> 3,
        'parent_id'=> 165
        ],
        [
        'ten'=> 'Xã Hát Lót',
        'loai'=> 3,
        'parent_id'=> 165
        ],
        [
        'ten'=> 'Xã Nà Pó',
        'loai'=> 3,
        'parent_id'=> 165
        ],
        [
        'ten'=> 'Xã Cò  Nòi',
        'loai'=> 3,
        'parent_id'=> 165
        ],
        [
        'ten'=> 'Xã Chiềng Nơi',
        'loai'=> 3,
        'parent_id'=> 165
        ],
        [
        'ten'=> 'Xã Phiêng Cằm',
        'loai'=> 3,
        'parent_id'=> 165
        ],
        [
        'ten'=> 'Xã Chiềng Dong',
        'loai'=> 3,
        'parent_id'=> 165
        ],
        [
        'ten'=> 'Xã Chiềng Kheo',
        'loai'=> 3,
        'parent_id'=> 165
        ],
        [
        'ten'=> 'Xã Chiềng Ve',
        'loai'=> 3,
        'parent_id'=> 165
        ],
        [
        'ten'=> 'Xã Chiềng Lương',
        'loai'=> 3,
        'parent_id'=> 165
        ],
        [
        'ten'=> 'Xã Phiêng Pằn',
        'loai'=> 3,
        'parent_id'=> 165
        ],
        [
        'ten'=> 'Xã Nà Ơt',
        'loai'=> 3,
        'parent_id'=> 165
        ],
        [
        'ten'=> 'Xã Tà Hộc',
        'loai'=> 3,
        'parent_id'=> 165
        ],
        [
        'ten'=> 'Thị trấn Sông Mã',
        'loai'=> 3,
        'parent_id'=> 166
        ],
        [
        'ten'=> 'Xã Bó Sinh',
        'loai'=> 3,
        'parent_id'=> 166
        ],
        [
        'ten'=> 'Xã Pú Pẩu',
        'loai'=> 3,
        'parent_id'=> 166
        ],
        [
        'ten'=> 'Xã Chiềng Phung',
        'loai'=> 3,
        'parent_id'=> 166
        ],
        [
        'ten'=> 'Xã Chiềng En',
        'loai'=> 3,
        'parent_id'=> 166
        ],
        [
        'ten'=> 'Xã Mường Lầm',
        'loai'=> 3,
        'parent_id'=> 166
        ],
        [
        'ten'=> 'Xã Nậm Ty',
        'loai'=> 3,
        'parent_id'=> 166
        ],
        [
        'ten'=> 'Xã Đứa Mòn',
        'loai'=> 3,
        'parent_id'=> 166
        ],
        [
        'ten'=> 'Xã Yên Hưng',
        'loai'=> 3,
        'parent_id'=> 166
        ],
        [
        'ten'=> 'Xã Chiềng Sơ',
        'loai'=> 3,
        'parent_id'=> 166
        ],
        [
        'ten'=> 'Xã Nà Nghịu',
        'loai'=> 3,
        'parent_id'=> 166
        ],
        [
        'ten'=> 'Xã Nậm Mằn',
        'loai'=> 3,
        'parent_id'=> 166
        ],
        [
        'ten'=> 'Xã Chiềng Khoong',
        'loai'=> 3,
        'parent_id'=> 166
        ],
        [
        'ten'=> 'Xã Chiềng Cang',
        'loai'=> 3,
        'parent_id'=> 166
        ],
        [
        'ten'=> 'Xã Huổi Một',
        'loai'=> 3,
        'parent_id'=> 166
        ],
        [
        'ten'=> 'Xã Mường Sai',
        'loai'=> 3,
        'parent_id'=> 166
        ],
        [
        'ten'=> 'Xã Mường Cai',
        'loai'=> 3,
        'parent_id'=> 166
        ],
        [
        'ten'=> 'Xã Mường Hung',
        'loai'=> 3,
        'parent_id'=> 166
        ],
        [
        'ten'=> 'Xã Chiềng Khương',
        'loai'=> 3,
        'parent_id'=> 166
        ],
        [
        'ten'=> 'Xã Sam Kha',
        'loai'=> 3,
        'parent_id'=> 167
        ],
        [
        'ten'=> 'Xã Púng Bánh',
        'loai'=> 3,
        'parent_id'=> 167
        ],
        [
        'ten'=> 'Xã Sốp Cộp',
        'loai'=> 3,
        'parent_id'=> 167
        ],
        [
        'ten'=> 'Xã Dồm Cang',
        'loai'=> 3,
        'parent_id'=> 167
        ],
        [
        'ten'=> 'Xã Nậm Lạnh',
        'loai'=> 3,
        'parent_id'=> 167
        ],
        [
        'ten'=> 'Xã Mường Lèo',
        'loai'=> 3,
        'parent_id'=> 167
        ],
        [
        'ten'=> 'Xã Mường Và',
        'loai'=> 3,
        'parent_id'=> 167
        ],
        [
        'ten'=> 'Xã Mường Lạn',
        'loai'=> 3,
        'parent_id'=> 167
        ],
        [
        'ten'=> 'Xã Suối Bàng',
        'loai'=> 3,
        'parent_id'=> 168
        ],
        [
        'ten'=> 'Xã Song Khủa',
        'loai'=> 3,
        'parent_id'=> 168
        ],
        [
        'ten'=> 'Xã Liên Hoà',
        'loai'=> 3,
        'parent_id'=> 168
        ],
        [
        'ten'=> 'Xã Tô Múa',
        'loai'=> 3,
        'parent_id'=> 168
        ],
        [
        'ten'=> 'Xã Mường Tè',
        'loai'=> 3,
        'parent_id'=> 168
        ],
        [
        'ten'=> 'Xã Chiềng Khoa',
        'loai'=> 3,
        'parent_id'=> 168
        ],
        [
        'ten'=> 'Xã Mường Men',
        'loai'=> 3,
        'parent_id'=> 168
        ],
        [
        'ten'=> 'Xã Quang Minh',
        'loai'=> 3,
        'parent_id'=> 168
        ],
        [
        'ten'=> 'Xã Vân Hồ',
        'loai'=> 3,
        'parent_id'=> 168
        ],
        [
        'ten'=> 'Xã Lóng Luông',
        'loai'=> 3,
        'parent_id'=> 168
        ],
        [
        'ten'=> 'Xã Chiềng Yên',
        'loai'=> 3,
        'parent_id'=> 168
        ],
        [
        'ten'=> 'Xã Chiềng Xuân',
        'loai'=> 3,
        'parent_id'=> 168
        ],
        [
        'ten'=> 'Xã Xuân Nha',
        'loai'=> 3,
        'parent_id'=> 168
        ],
        [
        'ten'=> 'Xã Tân Xuân',
        'loai'=> 3,
        'parent_id'=> 168
        ],
        [
        'ten'=> 'Phường Yên Thịnh',
        'loai'=> 3,
        'parent_id'=> 169
        ],
        [
        'ten'=> 'Phường Yên Ninh',
        'loai'=> 3,
        'parent_id'=> 169
        ],
        [
        'ten'=> 'Phường Minh Tân',
        'loai'=> 3,
        'parent_id'=> 169
        ],
        [
        'ten'=> 'Phường Nguyễn Thái Học',
        'loai'=> 3,
        'parent_id'=> 169
        ],
        [
        'ten'=> 'Phường Đồng Tâm',
        'loai'=> 3,
        'parent_id'=> 169
        ],
        [
        'ten'=> 'Phường Nguyễn Phúc',
        'loai'=> 3,
        'parent_id'=> 169
        ],
        [
        'ten'=> 'Phường Hồng Hà',
        'loai'=> 3,
        'parent_id'=> 169
        ],
        [
        'ten'=> 'Xã Minh Bảo',
        'loai'=> 3,
        'parent_id'=> 169
        ],
        [
        'ten'=> 'Phường Nam Cường',
        'loai'=> 3,
        'parent_id'=> 169
        ],
        [
        'ten'=> 'Xã Tuy Lộc',
        'loai'=> 3,
        'parent_id'=> 169
        ],
        [
        'ten'=> 'Xã Tân Thịnh',
        'loai'=> 3,
        'parent_id'=> 169
        ],
        [
        'ten'=> 'Xã Âu Lâu',
        'loai'=> 3,
        'parent_id'=> 169
        ],
        [
        'ten'=> 'Xã Giới Phiên',
        'loai'=> 3,
        'parent_id'=> 169
        ],
        [
        'ten'=> 'Phường Hợp Minh',
        'loai'=> 3,
        'parent_id'=> 169
        ],
        [
        'ten'=> 'Xã Văn Phú',
        'loai'=> 3,
        'parent_id'=> 169
        ],
        [
        'ten'=> 'Phường Pú Trạng',
        'loai'=> 3,
        'parent_id'=> 170
        ],
        [
        'ten'=> 'Phường Trung Tâm',
        'loai'=> 3,
        'parent_id'=> 170
        ],
        [
        'ten'=> 'Phường Tân An',
        'loai'=> 3,
        'parent_id'=> 170
        ],
        [
        'ten'=> 'Phường Cầu Thia',
        'loai'=> 3,
        'parent_id'=> 170
        ],
        [
        'ten'=> 'Xã Nghĩa Lợi',
        'loai'=> 3,
        'parent_id'=> 170
        ],
        [
        'ten'=> 'Xã Nghĩa Phúc',
        'loai'=> 3,
        'parent_id'=> 170
        ],
        [
        'ten'=> 'Xã Nghĩa An',
        'loai'=> 3,
        'parent_id'=> 170
        ],
        [
        'ten'=> 'Xã Nghĩa Lộ',
        'loai'=> 3,
        'parent_id'=> 170
        ],
        [
        'ten'=> 'Xã Sơn A',
        'loai'=> 3,
        'parent_id'=> 170
        ],
        [
        'ten'=> 'Xã Phù Nham',
        'loai'=> 3,
        'parent_id'=> 170
        ],
        [
        'ten'=> 'Xã Thanh Lương',
        'loai'=> 3,
        'parent_id'=> 170
        ],
        [
        'ten'=> 'Xã Hạnh Sơn',
        'loai'=> 3,
        'parent_id'=> 170
        ],
        [
        'ten'=> 'Xã Phúc Sơn',
        'loai'=> 3,
        'parent_id'=> 170
        ],
        [
        'ten'=> 'Xã Thạch Lương',
        'loai'=> 3,
        'parent_id'=> 170
        ],
        [
        'ten'=> 'Thị trấn Yên Thế',
        'loai'=> 3,
        'parent_id'=> 171
        ],
        [
        'ten'=> 'Xã Tân Phượng',
        'loai'=> 3,
        'parent_id'=> 171
        ],
        [
        'ten'=> 'Xã Lâm Thượng',
        'loai'=> 3,
        'parent_id'=> 171
        ],
        [
        'ten'=> 'Xã Khánh Thiện',
        'loai'=> 3,
        'parent_id'=> 171
        ],
        [
        'ten'=> 'Xã Minh Chuẩn',
        'loai'=> 3,
        'parent_id'=> 171
        ],
        [
        'ten'=> 'Xã Mai Sơn',
        'loai'=> 3,
        'parent_id'=> 171
        ],
        [
        'ten'=> 'Xã Khai Trung',
        'loai'=> 3,
        'parent_id'=> 171
        ],
        [
        'ten'=> 'Xã Mường Lai',
        'loai'=> 3,
        'parent_id'=> 171
        ],
        [
        'ten'=> 'Xã An Lạc',
        'loai'=> 3,
        'parent_id'=> 171
        ],
        [
        'ten'=> 'Xã Minh Xuân',
        'loai'=> 3,
        'parent_id'=> 171
        ],
        [
        'ten'=> 'Xã Tô Mậu',
        'loai'=> 3,
        'parent_id'=> 171
        ],
        [
        'ten'=> 'Xã Tân Lĩnh',
        'loai'=> 3,
        'parent_id'=> 171
        ],
        [
        'ten'=> 'Xã Yên Thắng',
        'loai'=> 3,
        'parent_id'=> 171
        ],
        [
        'ten'=> 'Xã Khánh Hoà',
        'loai'=> 3,
        'parent_id'=> 171
        ],
        [
        'ten'=> 'Xã Vĩnh Lạc',
        'loai'=> 3,
        'parent_id'=> 171
        ],
        [
        'ten'=> 'Xã Liễu Đô',
        'loai'=> 3,
        'parent_id'=> 171
        ],
        [
        'ten'=> 'Xã Động Quan',
        'loai'=> 3,
        'parent_id'=> 171
        ],
        [
        'ten'=> 'Xã Tân Lập',
        'loai'=> 3,
        'parent_id'=> 171
        ],
        [
        'ten'=> 'Xã Minh Tiến',
        'loai'=> 3,
        'parent_id'=> 171
        ],
        [
        'ten'=> 'Xã Trúc Lâu',
        'loai'=> 3,
        'parent_id'=> 171
        ],
        [
        'ten'=> 'Xã Phúc Lợi',
        'loai'=> 3,
        'parent_id'=> 171
        ],
        [
        'ten'=> 'Xã Phan Thanh',
        'loai'=> 3,
        'parent_id'=> 171
        ],
        [
        'ten'=> 'Xã An Phú',
        'loai'=> 3,
        'parent_id'=> 171
        ],
        [
        'ten'=> 'Xã Trung Tâm',
        'loai'=> 3,
        'parent_id'=> 171
        ],
        [
        'ten'=> 'Thị trấn Mậu A',
        'loai'=> 3,
        'parent_id'=> 172
        ],
        [
        'ten'=> 'Xã Lang Thíp',
        'loai'=> 3,
        'parent_id'=> 172
        ],
        [
        'ten'=> 'Xã Lâm Giang',
        'loai'=> 3,
        'parent_id'=> 172
        ],
        [
        'ten'=> 'Xã Châu Quế Thượng',
        'loai'=> 3,
        'parent_id'=> 172
        ],
        [
        'ten'=> 'Xã Châu Quế Hạ',
        'loai'=> 3,
        'parent_id'=> 172
        ],
        [
        'ten'=> 'Xã An Bình',
        'loai'=> 3,
        'parent_id'=> 172
        ],
        [
        'ten'=> 'Xã Quang Minh',
        'loai'=> 3,
        'parent_id'=> 172
        ],
        [
        'ten'=> 'Xã Đông An',
        'loai'=> 3,
        'parent_id'=> 172
        ],
        [
        'ten'=> 'Xã Đông Cuông',
        'loai'=> 3,
        'parent_id'=> 172
        ],
        [
        'ten'=> 'Xã Phong Dụ Hạ',
        'loai'=> 3,
        'parent_id'=> 172
        ],
        [
        'ten'=> 'Xã Mậu Đông',
        'loai'=> 3,
        'parent_id'=> 172
        ],
        [
        'ten'=> 'Xã Ngòi A',
        'loai'=> 3,
        'parent_id'=> 172
        ],
        [
        'ten'=> 'Xã Xuân Tầm',
        'loai'=> 3,
        'parent_id'=> 172
        ],
        [
        'ten'=> 'Xã Tân Hợp',
        'loai'=> 3,
        'parent_id'=> 172
        ],
        [
        'ten'=> 'Xã An Thịnh',
        'loai'=> 3,
        'parent_id'=> 172
        ],
        [
        'ten'=> 'Xã Yên Thái',
        'loai'=> 3,
        'parent_id'=> 172
        ],
        [
        'ten'=> 'Xã Phong Dụ Thượng',
        'loai'=> 3,
        'parent_id'=> 172
        ],
        [
        'ten'=> 'Xã Yên Hợp',
        'loai'=> 3,
        'parent_id'=> 172
        ],
        [
        'ten'=> 'Xã Đại Sơn',
        'loai'=> 3,
        'parent_id'=> 172
        ],
        [
        'ten'=> 'Xã Đại Phác',
        'loai'=> 3,
        'parent_id'=> 172
        ],
        [
        'ten'=> 'Xã Yên Phú',
        'loai'=> 3,
        'parent_id'=> 172
        ],
        [
        'ten'=> 'Xã Xuân Ái',
        'loai'=> 3,
        'parent_id'=> 172
        ],
        [
        'ten'=> 'Xã Viễn Sơn',
        'loai'=> 3,
        'parent_id'=> 172
        ],
        [
        'ten'=> 'Xã Mỏ Vàng',
        'loai'=> 3,
        'parent_id'=> 172
        ],
        [
        'ten'=> 'Xã Nà Hẩu',
        'loai'=> 3,
        'parent_id'=> 172
        ],
        [
        'ten'=> 'Thị trấn Mù Căng Chải',
        'loai'=> 3,
        'parent_id'=> 173
        ],
        [
        'ten'=> 'Xã Hồ Bốn',
        'loai'=> 3,
        'parent_id'=> 173
        ],
        [
        'ten'=> 'Xã Nậm Có',
        'loai'=> 3,
        'parent_id'=> 173
        ],
        [
        'ten'=> 'Xã Khao Mang',
        'loai'=> 3,
        'parent_id'=> 173
        ],
        [
        'ten'=> 'Xã Mồ Dề',
        'loai'=> 3,
        'parent_id'=> 173
        ],
        [
        'ten'=> 'Xã Chế Cu Nha',
        'loai'=> 3,
        'parent_id'=> 173
        ],
        [
        'ten'=> 'Xã Lao Chải',
        'loai'=> 3,
        'parent_id'=> 173
        ],
        [
        'ten'=> 'Xã Kim Nọi',
        'loai'=> 3,
        'parent_id'=> 173
        ],
        [
        'ten'=> 'Xã Cao Phạ',
        'loai'=> 3,
        'parent_id'=> 173
        ],
        [
        'ten'=> 'Xã La Pán Tẩn',
        'loai'=> 3,
        'parent_id'=> 173
        ],
        [
        'ten'=> 'Xã Dế Su Phình',
        'loai'=> 3,
        'parent_id'=> 173
        ],
        [
        'ten'=> 'Xã Chế Tạo',
        'loai'=> 3,
        'parent_id'=> 173
        ],
        [
        'ten'=> 'Xã Púng Luông',
        'loai'=> 3,
        'parent_id'=> 173
        ],
        [
        'ten'=> 'Xã Nậm Khắt',
        'loai'=> 3,
        'parent_id'=> 173
        ],
        [
        'ten'=> 'Thị trấn Cổ Phúc',
        'loai'=> 3,
        'parent_id'=> 174
        ],
        [
        'ten'=> 'Xã Tân Đồng',
        'loai'=> 3,
        'parent_id'=> 174
        ],
        [
        'ten'=> 'Xã Báo Đáp',
        'loai'=> 3,
        'parent_id'=> 174
        ],
        [
        'ten'=> 'Xã Đào Thịnh',
        'loai'=> 3,
        'parent_id'=> 174
        ],
        [
        'ten'=> 'Xã Việt Thành',
        'loai'=> 3,
        'parent_id'=> 174
        ],
        [
        'ten'=> 'Xã Hòa Cuông',
        'loai'=> 3,
        'parent_id'=> 174
        ],
        [
        'ten'=> 'Xã Minh Quán',
        'loai'=> 3,
        'parent_id'=> 174
        ],
        [
        'ten'=> 'Xã Quy Mông',
        'loai'=> 3,
        'parent_id'=> 174
        ],
        [
        'ten'=> 'Xã Cường Thịnh',
        'loai'=> 3,
        'parent_id'=> 174
        ],
        [
        'ten'=> 'Xã Kiên Thành',
        'loai'=> 3,
        'parent_id'=> 174
        ],
        [
        'ten'=> 'Xã Nga Quán',
        'loai'=> 3,
        'parent_id'=> 174
        ],
        [
        'ten'=> 'Xã Y Can',
        'loai'=> 3,
        'parent_id'=> 174
        ],
        [
        'ten'=> 'Xã Lương Thịnh',
        'loai'=> 3,
        'parent_id'=> 174
        ],
        [
        'ten'=> 'Xã Bảo Hưng',
        'loai'=> 3,
        'parent_id'=> 174
        ],
        [
        'ten'=> 'Xã Việt Cường',
        'loai'=> 3,
        'parent_id'=> 174
        ],
        [
        'ten'=> 'Xã Minh Quân',
        'loai'=> 3,
        'parent_id'=> 174
        ],
        [
        'ten'=> 'Xã Hồng Ca',
        'loai'=> 3,
        'parent_id'=> 174
        ],
        [
        'ten'=> 'Xã Hưng Thịnh',
        'loai'=> 3,
        'parent_id'=> 174
        ],
        [
        'ten'=> 'Xã Hưng Khánh',
        'loai'=> 3,
        'parent_id'=> 174
        ],
        [
        'ten'=> 'Xã Việt Hồng',
        'loai'=> 3,
        'parent_id'=> 174
        ],
        [
        'ten'=> 'Xã Vân Hội',
        'loai'=> 3,
        'parent_id'=> 174
        ],
        [
        'ten'=> 'Thị trấn Trạm Tấu',
        'loai'=> 3,
        'parent_id'=> 175
        ],
        [
        'ten'=> 'Xã Túc Đán',
        'loai'=> 3,
        'parent_id'=> 175
        ],
        [
        'ten'=> 'Xã Pá Lau',
        'loai'=> 3,
        'parent_id'=> 175
        ],
        [
        'ten'=> 'Xã Xà Hồ',
        'loai'=> 3,
        'parent_id'=> 175
        ],
        [
        'ten'=> 'Xã Phình Hồ',
        'loai'=> 3,
        'parent_id'=> 175
        ],
        [
        'ten'=> 'Xã Trạm Tấu',
        'loai'=> 3,
        'parent_id'=> 175
        ],
        [
        'ten'=> 'Xã Tà Si Láng',
        'loai'=> 3,
        'parent_id'=> 175
        ],
        [
        'ten'=> 'Xã Pá Hu',
        'loai'=> 3,
        'parent_id'=> 175
        ],
        [
        'ten'=> 'Xã Làng Nhì',
        'loai'=> 3,
        'parent_id'=> 175
        ],
        [
        'ten'=> 'Xã Bản Công',
        'loai'=> 3,
        'parent_id'=> 175
        ],
        [
        'ten'=> 'Xã Bản Mù',
        'loai'=> 3,
        'parent_id'=> 175
        ],
        [
        'ten'=> 'Xã Hát Lìu',
        'loai'=> 3,
        'parent_id'=> 175
        ],
        [
        'ten'=> 'Thị trấn NT Liên Sơn',
        'loai'=> 3,
        'parent_id'=> 176
        ],
        [
        'ten'=> 'Thị trấn NT Trần Phú',
        'loai'=> 3,
        'parent_id'=> 176
        ],
        [
        'ten'=> 'Xã Tú Lệ',
        'loai'=> 3,
        'parent_id'=> 176
        ],
        [
        'ten'=> 'Xã Nậm Búng',
        'loai'=> 3,
        'parent_id'=> 176
        ],
        [
        'ten'=> 'Xã Gia Hội',
        'loai'=> 3,
        'parent_id'=> 176
        ],
        [
        'ten'=> 'Xã Sùng Đô',
        'loai'=> 3,
        'parent_id'=> 176
        ],
        [
        'ten'=> 'Xã Nậm Mười',
        'loai'=> 3,
        'parent_id'=> 176
        ],
        [
        'ten'=> 'Xã An Lương',
        'loai'=> 3,
        'parent_id'=> 176
        ],
        [
        'ten'=> 'Xã Nậm Lành',
        'loai'=> 3,
        'parent_id'=> 176
        ],
        [
        'ten'=> 'Xã Sơn Lương',
        'loai'=> 3,
        'parent_id'=> 176
        ],
        [
        'ten'=> 'Xã Suối Quyền',
        'loai'=> 3,
        'parent_id'=> 176
        ],
        [
        'ten'=> 'Xã Suối Giàng',
        'loai'=> 3,
        'parent_id'=> 176
        ],
        [
        'ten'=> 'Xã Nghĩa Sơn',
        'loai'=> 3,
        'parent_id'=> 176
        ],
        [
        'ten'=> 'Xã Suối Bu',
        'loai'=> 3,
        'parent_id'=> 176
        ],
        [
        'ten'=> 'Thị trấn Sơn Thịnh',
        'loai'=> 3,
        'parent_id'=> 176
        ],
        [
        'ten'=> 'Xã Đại Lịch',
        'loai'=> 3,
        'parent_id'=> 176
        ],
        [
        'ten'=> 'Xã Đồng Khê',
        'loai'=> 3,
        'parent_id'=> 176
        ],
        [
        'ten'=> 'Xã Cát Thịnh',
        'loai'=> 3,
        'parent_id'=> 176
        ],
        [
        'ten'=> 'Xã Tân Thịnh',
        'loai'=> 3,
        'parent_id'=> 176
        ],
        [
        'ten'=> 'Xã Chấn Thịnh',
        'loai'=> 3,
        'parent_id'=> 176
        ],
        [
        'ten'=> 'Xã Bình Thuận',
        'loai'=> 3,
        'parent_id'=> 176
        ],
        [
        'ten'=> 'Xã Thượng Bằng La',
        'loai'=> 3,
        'parent_id'=> 176
        ],
        [
        'ten'=> 'Xã Minh An',
        'loai'=> 3,
        'parent_id'=> 176
        ],
        [
        'ten'=> 'Xã Nghĩa Tâm',
        'loai'=> 3,
        'parent_id'=> 176
        ],
        [
        'ten'=> 'Thị trấn Yên Bình',
        'loai'=> 3,
        'parent_id'=> 177
        ],
        [
        'ten'=> 'Thị trấn Thác Bà',
        'loai'=> 3,
        'parent_id'=> 177
        ],
        [
        'ten'=> 'Xã Xuân Long',
        'loai'=> 3,
        'parent_id'=> 177
        ],
        [
        'ten'=> 'Xã Cảm Nhân',
        'loai'=> 3,
        'parent_id'=> 177
        ],
        [
        'ten'=> 'Xã Ngọc Chấn',
        'loai'=> 3,
        'parent_id'=> 177
        ],
        [
        'ten'=> 'Xã Tân Nguyên',
        'loai'=> 3,
        'parent_id'=> 177
        ],
        [
        'ten'=> 'Xã Phúc Ninh',
        'loai'=> 3,
        'parent_id'=> 177
        ],
        [
        'ten'=> 'Xã Bảo Ái',
        'loai'=> 3,
        'parent_id'=> 177
        ],
        [
        'ten'=> 'Xã Mỹ Gia',
        'loai'=> 3,
        'parent_id'=> 177
        ],
        [
        'ten'=> 'Xã Xuân Lai',
        'loai'=> 3,
        'parent_id'=> 177
        ],
        [
        'ten'=> 'Xã Mông Sơn',
        'loai'=> 3,
        'parent_id'=> 177
        ],
        [
        'ten'=> 'Xã Cảm Ân',
        'loai'=> 3,
        'parent_id'=> 177
        ],
        [
        'ten'=> 'Xã Yên Thành',
        'loai'=> 3,
        'parent_id'=> 177
        ],
        [
        'ten'=> 'Xã Tân Hương',
        'loai'=> 3,
        'parent_id'=> 177
        ],
        [
        'ten'=> 'Xã Phúc An',
        'loai'=> 3,
        'parent_id'=> 177
        ],
        [
        'ten'=> 'Xã Bạch Hà',
        'loai'=> 3,
        'parent_id'=> 177
        ],
        [
        'ten'=> 'Xã Vũ Linh',
        'loai'=> 3,
        'parent_id'=> 177
        ],
        [
        'ten'=> 'Xã Đại Đồng',
        'loai'=> 3,
        'parent_id'=> 177
        ],
        [
        'ten'=> 'Xã Vĩnh Kiên',
        'loai'=> 3,
        'parent_id'=> 177
        ],
        [
        'ten'=> 'Xã Yên Bình',
        'loai'=> 3,
        'parent_id'=> 177
        ],
        [
        'ten'=> 'Xã Thịnh Hưng',
        'loai'=> 3,
        'parent_id'=> 177
        ],
        [
        'ten'=> 'Xã Hán Đà',
        'loai'=> 3,
        'parent_id'=> 177
        ],
        [
        'ten'=> 'Xã Phú Thịnh',
        'loai'=> 3,
        'parent_id'=> 177
        ],
        [
        'ten'=> 'Xã Đại Minh',
        'loai'=> 3,
        'parent_id'=> 177
        ],
        [
        'ten'=> 'Phường Thái Bình',
        'loai'=> 3,
        'parent_id'=> 178
        ],
        [
        'ten'=> 'Phường Tân Hòa',
        'loai'=> 3,
        'parent_id'=> 178
        ],
        [
        'ten'=> 'Phường Thịnh Lang',
        'loai'=> 3,
        'parent_id'=> 178
        ],
        [
        'ten'=> 'Phường Hữu Nghị',
        'loai'=> 3,
        'parent_id'=> 178
        ],
        [
        'ten'=> 'Phường Tân Thịnh',
        'loai'=> 3,
        'parent_id'=> 178
        ],
        [
        'ten'=> 'Phường Đồng Tiến',
        'loai'=> 3,
        'parent_id'=> 178
        ],
        [
        'ten'=> 'Phường Phương Lâm',
        'loai'=> 3,
        'parent_id'=> 178
        ],
        [
        'ten'=> 'Xã Yên Mông',
        'loai'=> 3,
        'parent_id'=> 178
        ],
        [
        'ten'=> 'Phường Quỳnh Lâm',
        'loai'=> 3,
        'parent_id'=> 178
        ],
        [
        'ten'=> 'Phường Dân Chủ',
        'loai'=> 3,
        'parent_id'=> 178
        ],
        [
        'ten'=> 'Xã Hòa Bình',
        'loai'=> 3,
        'parent_id'=> 178
        ],
        [
        'ten'=> 'Phường Thống Nhất',
        'loai'=> 3,
        'parent_id'=> 178
        ],
        [
        'ten'=> 'Phường Kỳ Sơn',
        'loai'=> 3,
        'parent_id'=> 178
        ],
        [
        'ten'=> 'Xã Thịnh Minh',
        'loai'=> 3,
        'parent_id'=> 178
        ],
        [
        'ten'=> 'Xã Hợp Thành',
        'loai'=> 3,
        'parent_id'=> 178
        ],
        [
        'ten'=> 'Xã Quang Tiến',
        'loai'=> 3,
        'parent_id'=> 178
        ],
        [
        'ten'=> 'Xã Mông Hóa',
        'loai'=> 3,
        'parent_id'=> 178
        ],
        [
        'ten'=> 'Phường Trung Minh',
        'loai'=> 3,
        'parent_id'=> 178
        ],
        [
        'ten'=> 'Xã Độc Lập',
        'loai'=> 3,
        'parent_id'=> 178
        ],
        [
        'ten'=> 'Thị trấn Đà Bắc',
        'loai'=> 3,
        'parent_id'=> 179
        ],
        [
        'ten'=> 'Xã Nánh Nghê',
        'loai'=> 3,
        'parent_id'=> 179
        ],
        [
        'ten'=> 'Xã Giáp Đắt',
        'loai'=> 3,
        'parent_id'=> 179
        ],
        [
        'ten'=> 'Xã Mường Chiềng',
        'loai'=> 3,
        'parent_id'=> 179
        ],
        [
        'ten'=> 'Xã Tân Pheo',
        'loai'=> 3,
        'parent_id'=> 179
        ],
        [
        'ten'=> 'Xã Đồng Chum',
        'loai'=> 3,
        'parent_id'=> 179
        ],
        [
        'ten'=> 'Xã Tân Minh',
        'loai'=> 3,
        'parent_id'=> 179
        ],
        [
        'ten'=> 'Xã Đoàn Kết',
        'loai'=> 3,
        'parent_id'=> 179
        ],
        [
        'ten'=> 'Xã Đồng Ruộng',
        'loai'=> 3,
        'parent_id'=> 179
        ],
        [
        'ten'=> 'Xã Tú Lý',
        'loai'=> 3,
        'parent_id'=> 179
        ],
        [
        'ten'=> 'Xã Trung Thành',
        'loai'=> 3,
        'parent_id'=> 179
        ],
        [
        'ten'=> 'Xã Yên Hòa',
        'loai'=> 3,
        'parent_id'=> 179
        ],
        [
        'ten'=> 'Xã Cao Sơn',
        'loai'=> 3,
        'parent_id'=> 179
        ],
        [
        'ten'=> 'Xã Toàn Sơn',
        'loai'=> 3,
        'parent_id'=> 179
        ],
        [
        'ten'=> 'Xã Hiền Lương',
        'loai'=> 3,
        'parent_id'=> 179
        ],
        [
        'ten'=> 'Xã Tiền Phong',
        'loai'=> 3,
        'parent_id'=> 179
        ],
        [
        'ten'=> 'Xã Vầy Nưa',
        'loai'=> 3,
        'parent_id'=> 179
        ],
        [
        'ten'=> 'Thị trấn Lương Sơn',
        'loai'=> 3,
        'parent_id'=> 180
        ],
        [
        'ten'=> 'Xã Lâm Sơn',
        'loai'=> 3,
        'parent_id'=> 180
        ],
        [
        'ten'=> 'Xã Hòa Sơn',
        'loai'=> 3,
        'parent_id'=> 180
        ],
        [
        'ten'=> 'Xã Tân Vinh',
        'loai'=> 3,
        'parent_id'=> 180
        ],
        [
        'ten'=> 'Xã Nhuận Trạch',
        'loai'=> 3,
        'parent_id'=> 180
        ],
        [
        'ten'=> 'Xã Cao Sơn',
        'loai'=> 3,
        'parent_id'=> 180
        ],
        [
        'ten'=> 'Xã Cư Yên',
        'loai'=> 3,
        'parent_id'=> 180
        ],
        [
        'ten'=> 'Xã Liên Sơn',
        'loai'=> 3,
        'parent_id'=> 180
        ],
        [
        'ten'=> 'Xã Cao Dương',
        'loai'=> 3,
        'parent_id'=> 180
        ],
        [
        'ten'=> 'Xã Thanh Sơn',
        'loai'=> 3,
        'parent_id'=> 180
        ],
        [
        'ten'=> 'Xã Thanh Cao',
        'loai'=> 3,
        'parent_id'=> 180
        ],
        [
        'ten'=> 'Thị trấn Bo',
        'loai'=> 3,
        'parent_id'=> 181
        ],
        [
        'ten'=> 'Xã Đú Sáng',
        'loai'=> 3,
        'parent_id'=> 181
        ],
        [
        'ten'=> 'Xã Hùng Sơn',
        'loai'=> 3,
        'parent_id'=> 181
        ],
        [
        'ten'=> 'Xã Bình Sơn',
        'loai'=> 3,
        'parent_id'=> 181
        ],
        [
        'ten'=> 'Xã Tú Sơn',
        'loai'=> 3,
        'parent_id'=> 181
        ],
        [
        'ten'=> 'Xã Vĩnh Tiến',
        'loai'=> 3,
        'parent_id'=> 181
        ],
        [
        'ten'=> 'Xã Đông Bắc',
        'loai'=> 3,
        'parent_id'=> 181
        ],
        [
        'ten'=> 'Xã Xuân Thủy',
        'loai'=> 3,
        'parent_id'=> 181
        ],
        [
        'ten'=> 'Xã Vĩnh Đồng',
        'loai'=> 3,
        'parent_id'=> 181
        ],
        [
        'ten'=> 'Xã Kim Lập',
        'loai'=> 3,
        'parent_id'=> 181
        ],
        [
        'ten'=> 'Xã Hợp Tiến',
        'loai'=> 3,
        'parent_id'=> 181
        ],
        [
        'ten'=> 'Xã Kim Bôi',
        'loai'=> 3,
        'parent_id'=> 181
        ],
        [
        'ten'=> 'Xã Nam Thượng',
        'loai'=> 3,
        'parent_id'=> 181
        ],
        [
        'ten'=> 'Xã Cuối Hạ',
        'loai'=> 3,
        'parent_id'=> 181
        ],
        [
        'ten'=> 'Xã Sào Báy',
        'loai'=> 3,
        'parent_id'=> 181
        ],
        [
        'ten'=> 'Xã Mi Hòa',
        'loai'=> 3,
        'parent_id'=> 181
        ],
        [
        'ten'=> 'Xã Nuông Dăm',
        'loai'=> 3,
        'parent_id'=> 181
        ],
        [
        'ten'=> 'Thị trấn Cao Phong',
        'loai'=> 3,
        'parent_id'=> 182
        ],
        [
        'ten'=> 'Xã Bình Thanh',
        'loai'=> 3,
        'parent_id'=> 182
        ],
        [
        'ten'=> 'Xã Thung Nai',
        'loai'=> 3,
        'parent_id'=> 182
        ],
        [
        'ten'=> 'Xã Bắc Phong',
        'loai'=> 3,
        'parent_id'=> 182
        ],
        [
        'ten'=> 'Xã Thu Phong',
        'loai'=> 3,
        'parent_id'=> 182
        ],
        [
        'ten'=> 'Xã Hợp Phong',
        'loai'=> 3,
        'parent_id'=> 182
        ],
        [
        'ten'=> 'Xã Tây Phong',
        'loai'=> 3,
        'parent_id'=> 182
        ],
        [
        'ten'=> 'Xã Dũng Phong',
        'loai'=> 3,
        'parent_id'=> 182
        ],
        [
        'ten'=> 'Xã Nam Phong',
        'loai'=> 3,
        'parent_id'=> 182
        ],
        [
        'ten'=> 'Xã Thạch Yên',
        'loai'=> 3,
        'parent_id'=> 182
        ],
        [
        'ten'=> 'Thị trấn Mãn Đức',
        'loai'=> 3,
        'parent_id'=> 183
        ],
        [
        'ten'=> 'Xã Suối Hoa',
        'loai'=> 3,
        'parent_id'=> 183
        ],
        [
        'ten'=> 'Xã Phú Vinh',
        'loai'=> 3,
        'parent_id'=> 183
        ],
        [
        'ten'=> 'Xã Phú Cường',
        'loai'=> 3,
        'parent_id'=> 183
        ],
        [
        'ten'=> 'Xã Mỹ Hòa',
        'loai'=> 3,
        'parent_id'=> 183
        ],
        [
        'ten'=> 'Xã Quyết Chiến',
        'loai'=> 3,
        'parent_id'=> 183
        ],
        [
        'ten'=> 'Xã Phong Phú',
        'loai'=> 3,
        'parent_id'=> 183
        ],
        [
        'ten'=> 'Xã Tử Nê',
        'loai'=> 3,
        'parent_id'=> 183
        ],
        [
        'ten'=> 'Xã Thanh Hối',
        'loai'=> 3,
        'parent_id'=> 183
        ],
        [
        'ten'=> 'Xã Ngọc Mỹ',
        'loai'=> 3,
        'parent_id'=> 183
        ],
        [
        'ten'=> 'Xã Đông Lai',
        'loai'=> 3,
        'parent_id'=> 183
        ],
        [
        'ten'=> 'Xã Vân Sơn',
        'loai'=> 3,
        'parent_id'=> 183
        ],
        [
        'ten'=> 'Xã Nhân Mỹ',
        'loai'=> 3,
        'parent_id'=> 183
        ],
        [
        'ten'=> 'Xã Lỗ Sơn',
        'loai'=> 3,
        'parent_id'=> 183
        ],
        [
        'ten'=> 'Xã Ngổ Luông',
        'loai'=> 3,
        'parent_id'=> 183
        ],
        [
        'ten'=> 'Xã Gia Mô',
        'loai'=> 3,
        'parent_id'=> 183
        ],
        [
        'ten'=> 'Xã Tân Thành',
        'loai'=> 3,
        'parent_id'=> 184
        ],
        [
        'ten'=> 'Thị trấn Mai Châu',
        'loai'=> 3,
        'parent_id'=> 184
        ],
        [
        'ten'=> 'Xã Sơn Thủy',
        'loai'=> 3,
        'parent_id'=> 184
        ],
        [
        'ten'=> 'Xã Pà Cò',
        'loai'=> 3,
        'parent_id'=> 184
        ],
        [
        'ten'=> 'Xã Hang Kia',
        'loai'=> 3,
        'parent_id'=> 184
        ],
        [
        'ten'=> 'Xã Đồng Tân',
        'loai'=> 3,
        'parent_id'=> 184
        ],
        [
        'ten'=> 'Xã Cun Pheo',
        'loai'=> 3,
        'parent_id'=> 184
        ],
        [
        'ten'=> 'Xã Bao La',
        'loai'=> 3,
        'parent_id'=> 184
        ],
        [
        'ten'=> 'Xã Tòng Đậu',
        'loai'=> 3,
        'parent_id'=> 184
        ],
        [
        'ten'=> 'Xã Nà Phòn',
        'loai'=> 3,
        'parent_id'=> 184
        ],
        [
        'ten'=> 'Xã Săm Khóe',
        'loai'=> 3,
        'parent_id'=> 184
        ],
        [
        'ten'=> 'Xã Chiềng Châu',
        'loai'=> 3,
        'parent_id'=> 184
        ],
        [
        'ten'=> 'Xã Mai Hạ',
        'loai'=> 3,
        'parent_id'=> 184
        ],
        [
        'ten'=> 'Xã Thành Sơn',
        'loai'=> 3,
        'parent_id'=> 184
        ],
        [
        'ten'=> 'Xã Mai Hịch',
        'loai'=> 3,
        'parent_id'=> 184
        ],
        [
        'ten'=> 'Xã Vạn Mai',
        'loai'=> 3,
        'parent_id'=> 184
        ],
        [
        'ten'=> 'Thị trấn Vụ Bản',
        'loai'=> 3,
        'parent_id'=> 185
        ],
        [
        'ten'=> 'Xã Quý Hòa',
        'loai'=> 3,
        'parent_id'=> 185
        ],
        [
        'ten'=> 'Xã Miền Đồi',
        'loai'=> 3,
        'parent_id'=> 185
        ],
        [
        'ten'=> 'Xã Mỹ Thành',
        'loai'=> 3,
        'parent_id'=> 185
        ],
        [
        'ten'=> 'Xã Tuân Đạo',
        'loai'=> 3,
        'parent_id'=> 185
        ],
        [
        'ten'=> 'Xã Văn Nghĩa',
        'loai'=> 3,
        'parent_id'=> 185
        ],
        [
        'ten'=> 'Xã Văn Sơn',
        'loai'=> 3,
        'parent_id'=> 185
        ],
        [
        'ten'=> 'Xã Tân Lập',
        'loai'=> 3,
        'parent_id'=> 185
        ],
        [
        'ten'=> 'Xã Nhân Nghĩa',
        'loai'=> 3,
        'parent_id'=> 185
        ],
        [
        'ten'=> 'Xã Thượng Cốc',
        'loai'=> 3,
        'parent_id'=> 185
        ],
        [
        'ten'=> 'Xã Quyết Thắng',
        'loai'=> 3,
        'parent_id'=> 185
        ],
        [
        'ten'=> 'Xã Xuất Hóa',
        'loai'=> 3,
        'parent_id'=> 185
        ],
        [
        'ten'=> 'Xã Yên Phú',
        'loai'=> 3,
        'parent_id'=> 185
        ],
        [
        'ten'=> 'Xã Bình Hẻm',
        'loai'=> 3,
        'parent_id'=> 185
        ],
        [
        'ten'=> 'Xã Định Cư',
        'loai'=> 3,
        'parent_id'=> 185
        ],
        [
        'ten'=> 'Xã Chí Đạo',
        'loai'=> 3,
        'parent_id'=> 185
        ],
        [
        'ten'=> 'Xã Ngọc Sơn',
        'loai'=> 3,
        'parent_id'=> 185
        ],
        [
        'ten'=> 'Xã Hương Nhượng',
        'loai'=> 3,
        'parent_id'=> 185
        ],
        [
        'ten'=> 'Xã Vũ Bình',
        'loai'=> 3,
        'parent_id'=> 185
        ],
        [
        'ten'=> 'Xã Tự Do',
        'loai'=> 3,
        'parent_id'=> 185
        ],
        [
        'ten'=> 'Xã Yên Nghiệp',
        'loai'=> 3,
        'parent_id'=> 185
        ],
        [
        'ten'=> 'Xã Tân Mỹ',
        'loai'=> 3,
        'parent_id'=> 185
        ],
        [
        'ten'=> 'Xã Ân Nghĩa',
        'loai'=> 3,
        'parent_id'=> 185
        ],
        [
        'ten'=> 'Xã Ngọc Lâu',
        'loai'=> 3,
        'parent_id'=> 185
        ],
        [
        'ten'=> 'Thị trấn Hàng Trạm',
        'loai'=> 3,
        'parent_id'=> 186
        ],
        [
        'ten'=> 'Xã Lạc Sỹ',
        'loai'=> 3,
        'parent_id'=> 186
        ],
        [
        'ten'=> 'Xã Lạc Lương',
        'loai'=> 3,
        'parent_id'=> 186
        ],
        [
        'ten'=> 'Xã Bảo Hiệu',
        'loai'=> 3,
        'parent_id'=> 186
        ],
        [
        'ten'=> 'Xã Đa Phúc',
        'loai'=> 3,
        'parent_id'=> 186
        ],
        [
        'ten'=> 'Xã Hữu Lợi',
        'loai'=> 3,
        'parent_id'=> 186
        ],
        [
        'ten'=> 'Xã Lạc Thịnh',
        'loai'=> 3,
        'parent_id'=> 186
        ],
        [
        'ten'=> 'Xã Đoàn Kết',
        'loai'=> 3,
        'parent_id'=> 186
        ],
        [
        'ten'=> 'Xã Phú Lai',
        'loai'=> 3,
        'parent_id'=> 186
        ],
        [
        'ten'=> 'Xã Yên Trị',
        'loai'=> 3,
        'parent_id'=> 186
        ],
        [
        'ten'=> 'Xã Ngọc Lương',
        'loai'=> 3,
        'parent_id'=> 186
        ],
        [
        'ten'=> 'Thị trấn Ba Hàng Đồi',
        'loai'=> 3,
        'parent_id'=> 187
        ],
        [
        'ten'=> 'Thị trấn Chi Nê',
        'loai'=> 3,
        'parent_id'=> 187
        ],
        [
        'ten'=> 'Xã Phú Nghĩa',
        'loai'=> 3,
        'parent_id'=> 187
        ],
        [
        'ten'=> 'Xã Phú Thành',
        'loai'=> 3,
        'parent_id'=> 187
        ],
        [
        'ten'=> 'Xã Hưng Thi',
        'loai'=> 3,
        'parent_id'=> 187
        ],
        [
        'ten'=> 'Xã Khoan Dụ',
        'loai'=> 3,
        'parent_id'=> 187
        ],
        [
        'ten'=> 'Xã Đồng Tâm',
        'loai'=> 3,
        'parent_id'=> 187
        ],
        [
        'ten'=> 'Xã Yên Bồng',
        'loai'=> 3,
        'parent_id'=> 187
        ],
        [
        'ten'=> 'Xã Thống Nhất',
        'loai'=> 3,
        'parent_id'=> 187
        ],
        [
        'ten'=> 'Xã An Bình',
        'loai'=> 3,
        'parent_id'=> 187
        ],
        [
        'ten'=> 'Phường Quán Triều',
        'loai'=> 3,
        'parent_id'=> 188
        ],
        [
        'ten'=> 'Phường Quang Vinh',
        'loai'=> 3,
        'parent_id'=> 188
        ],
        [
        'ten'=> 'Phường Túc Duyên',
        'loai'=> 3,
        'parent_id'=> 188
        ],
        [
        'ten'=> 'Phường Hoàng Văn Thụ',
        'loai'=> 3,
        'parent_id'=> 188
        ],
        [
        'ten'=> 'Phường Trưng Vương',
        'loai'=> 3,
        'parent_id'=> 188
        ],
        [
        'ten'=> 'Phường Quang Trung',
        'loai'=> 3,
        'parent_id'=> 188
        ],
        [
        'ten'=> 'Phường Phan Đình Phùng',
        'loai'=> 3,
        'parent_id'=> 188
        ],
        [
        'ten'=> 'Phường Tân Thịnh',
        'loai'=> 3,
        'parent_id'=> 188
        ],
        [
        'ten'=> 'Phường Thịnh Đán',
        'loai'=> 3,
        'parent_id'=> 188
        ],
        [
        'ten'=> 'Phường Đồng Quang',
        'loai'=> 3,
        'parent_id'=> 188
        ],
        [
        'ten'=> 'Phường Gia Sàng',
        'loai'=> 3,
        'parent_id'=> 188
        ],
        [
        'ten'=> 'Phường Tân Lập',
        'loai'=> 3,
        'parent_id'=> 188
        ],
        [
        'ten'=> 'Phường Cam Giá',
        'loai'=> 3,
        'parent_id'=> 188
        ],
        [
        'ten'=> 'Phường Phú Xá',
        'loai'=> 3,
        'parent_id'=> 188
        ],
        [
        'ten'=> 'Phường Hương Sơn',
        'loai'=> 3,
        'parent_id'=> 188
        ],
        [
        'ten'=> 'Phường Trung Thành',
        'loai'=> 3,
        'parent_id'=> 188
        ],
        [
        'ten'=> 'Phường Tân Thành',
        'loai'=> 3,
        'parent_id'=> 188
        ],
        [
        'ten'=> 'Phường Tân Long',
        'loai'=> 3,
        'parent_id'=> 188
        ],
        [
        'ten'=> 'Xã Phúc Hà',
        'loai'=> 3,
        'parent_id'=> 188
        ],
        [
        'ten'=> 'Xã Phúc Xuân',
        'loai'=> 3,
        'parent_id'=> 188
        ],
        [
        'ten'=> 'Xã Quyết Thắng',
        'loai'=> 3,
        'parent_id'=> 188
        ],
        [
        'ten'=> 'Xã Phúc Trìu',
        'loai'=> 3,
        'parent_id'=> 188
        ],
        [
        'ten'=> 'Xã Thịnh Đức',
        'loai'=> 3,
        'parent_id'=> 188
        ],
        [
        'ten'=> 'Phường Tích Lương',
        'loai'=> 3,
        'parent_id'=> 188
        ],
        [
        'ten'=> 'Xã Tân Cương',
        'loai'=> 3,
        'parent_id'=> 188
        ],
        [
        'ten'=> 'Xã Sơn Cẩm',
        'loai'=> 3,
        'parent_id'=> 188
        ],
        [
        'ten'=> 'Phường Chùa Hang',
        'loai'=> 3,
        'parent_id'=> 188
        ],
        [
        'ten'=> 'Xã Cao Ngạn',
        'loai'=> 3,
        'parent_id'=> 188
        ],
        [
        'ten'=> 'Xã Linh Sơn',
        'loai'=> 3,
        'parent_id'=> 188
        ],
        [
        'ten'=> 'Phường Đồng Bẩm',
        'loai'=> 3,
        'parent_id'=> 188
        ],
        [
        'ten'=> 'Xã Huống Thượng',
        'loai'=> 3,
        'parent_id'=> 188
        ],
        [
        'ten'=> 'Xã Đồng Liên',
        'loai'=> 3,
        'parent_id'=> 188
        ],
        [
        'ten'=> 'Phường Lương Sơn',
        'loai'=> 3,
        'parent_id'=> 189
        ],
        [
        'ten'=> 'Phường Châu Sơn',
        'loai'=> 3,
        'parent_id'=> 189
        ],
        [
        'ten'=> 'Phường Mỏ Chè',
        'loai'=> 3,
        'parent_id'=> 189
        ],
        [
        'ten'=> 'Phường Cải Đan',
        'loai'=> 3,
        'parent_id'=> 189
        ],
        [
        'ten'=> 'Phường Thắng Lợi',
        'loai'=> 3,
        'parent_id'=> 189
        ],
        [
        'ten'=> 'Phường Phố Cò',
        'loai'=> 3,
        'parent_id'=> 189
        ],
        [
        'ten'=> 'Xã Tân Quang',
        'loai'=> 3,
        'parent_id'=> 189
        ],
        [
        'ten'=> 'Phường Bách Quang',
        'loai'=> 3,
        'parent_id'=> 189
        ],
        [
        'ten'=> 'Xã Bình Sơn',
        'loai'=> 3,
        'parent_id'=> 189
        ],
        [
        'ten'=> 'Xã Bá Xuyên',
        'loai'=> 3,
        'parent_id'=> 189
        ],
        [
        'ten'=> 'Thị trấn Chợ Chu',
        'loai'=> 3,
        'parent_id'=> 190
        ],
        [
        'ten'=> 'Xã Linh Thông',
        'loai'=> 3,
        'parent_id'=> 190
        ],
        [
        'ten'=> 'Xã Lam Vỹ',
        'loai'=> 3,
        'parent_id'=> 190
        ],
        [
        'ten'=> 'Xã Quy Kỳ',
        'loai'=> 3,
        'parent_id'=> 190
        ],
        [
        'ten'=> 'Xã Tân Thịnh',
        'loai'=> 3,
        'parent_id'=> 190
        ],
        [
        'ten'=> 'Xã Kim Phượng',
        'loai'=> 3,
        'parent_id'=> 190
        ],
        [
        'ten'=> 'Xã Bảo Linh',
        'loai'=> 3,
        'parent_id'=> 190
        ],
        [
        'ten'=> 'Xã Phúc Chu',
        'loai'=> 3,
        'parent_id'=> 190
        ],
        [
        'ten'=> 'Xã Tân Dương',
        'loai'=> 3,
        'parent_id'=> 190
        ],
        [
        'ten'=> 'Xã Phượng Tiến',
        'loai'=> 3,
        'parent_id'=> 190
        ],
        [
        'ten'=> 'Xã Bảo Cường',
        'loai'=> 3,
        'parent_id'=> 190
        ],
        [
        'ten'=> 'Xã Đồng Thịnh',
        'loai'=> 3,
        'parent_id'=> 190
        ],
        [
        'ten'=> 'Xã Định Biên',
        'loai'=> 3,
        'parent_id'=> 190
        ],
        [
        'ten'=> 'Xã Thanh Định',
        'loai'=> 3,
        'parent_id'=> 190
        ],
        [
        'ten'=> 'Xã Trung Hội',
        'loai'=> 3,
        'parent_id'=> 190
        ],
        [
        'ten'=> 'Xã Trung Lương',
        'loai'=> 3,
        'parent_id'=> 190
        ],
        [
        'ten'=> 'Xã Bình Yên',
        'loai'=> 3,
        'parent_id'=> 190
        ],
        [
        'ten'=> 'Xã Điềm Mặc',
        'loai'=> 3,
        'parent_id'=> 190
        ],
        [
        'ten'=> 'Xã Phú Tiến',
        'loai'=> 3,
        'parent_id'=> 190
        ],
        [
        'ten'=> 'Xã Bộc Nhiêu',
        'loai'=> 3,
        'parent_id'=> 190
        ],
        [
        'ten'=> 'Xã Sơn Phú',
        'loai'=> 3,
        'parent_id'=> 190
        ],
        [
        'ten'=> 'Xã Phú Đình',
        'loai'=> 3,
        'parent_id'=> 190
        ],
        [
        'ten'=> 'Xã Bình Thành',
        'loai'=> 3,
        'parent_id'=> 190
        ],
        [
        'ten'=> 'Thị trấn Giang Tiên',
        'loai'=> 3,
        'parent_id'=> 191
        ],
        [
        'ten'=> 'Thị trấn Đu',
        'loai'=> 3,
        'parent_id'=> 191
        ],
        [
        'ten'=> 'Xã Yên Ninh',
        'loai'=> 3,
        'parent_id'=> 191
        ],
        [
        'ten'=> 'Xã Yên Trạch',
        'loai'=> 3,
        'parent_id'=> 191
        ],
        [
        'ten'=> 'Xã Yên Đổ',
        'loai'=> 3,
        'parent_id'=> 191
        ],
        [
        'ten'=> 'Xã Yên Lạc',
        'loai'=> 3,
        'parent_id'=> 191
        ],
        [
        'ten'=> 'Xã Ôn Lương',
        'loai'=> 3,
        'parent_id'=> 191
        ],
        [
        'ten'=> 'Xã Động Đạt',
        'loai'=> 3,
        'parent_id'=> 191
        ],
        [
        'ten'=> 'Xã Phủ Lý',
        'loai'=> 3,
        'parent_id'=> 191
        ],
        [
        'ten'=> 'Xã Phú Đô',
        'loai'=> 3,
        'parent_id'=> 191
        ],
        [
        'ten'=> 'Xã Hợp Thành',
        'loai'=> 3,
        'parent_id'=> 191
        ],
        [
        'ten'=> 'Xã Tức Tranh',
        'loai'=> 3,
        'parent_id'=> 191
        ],
        [
        'ten'=> 'Xã Phấn Mễ',
        'loai'=> 3,
        'parent_id'=> 191
        ],
        [
        'ten'=> 'Xã Vô Tranh',
        'loai'=> 3,
        'parent_id'=> 191
        ],
        [
        'ten'=> 'Xã Cổ Lũng',
        'loai'=> 3,
        'parent_id'=> 191
        ],
        [
        'ten'=> 'Thị trấn Sông Cầu',
        'loai'=> 3,
        'parent_id'=> 192
        ],
        [
        'ten'=> 'Thị trấn Trại Cau',
        'loai'=> 3,
        'parent_id'=> 192
        ],
        [
        'ten'=> 'Xã Văn Lăng',
        'loai'=> 3,
        'parent_id'=> 192
        ],
        [
        'ten'=> 'Xã Tân Long',
        'loai'=> 3,
        'parent_id'=> 192
        ],
        [
        'ten'=> 'Xã Hòa Bình',
        'loai'=> 3,
        'parent_id'=> 192
        ],
        [
        'ten'=> 'Xã Quang Sơn',
        'loai'=> 3,
        'parent_id'=> 192
        ],
        [
        'ten'=> 'Xã Minh Lập',
        'loai'=> 3,
        'parent_id'=> 192
        ],
        [
        'ten'=> 'Xã Văn Hán',
        'loai'=> 3,
        'parent_id'=> 192
        ],
        [
        'ten'=> 'Xã Hóa Trung',
        'loai'=> 3,
        'parent_id'=> 192
        ],
        [
        'ten'=> 'Xã Khe Mo',
        'loai'=> 3,
        'parent_id'=> 192
        ],
        [
        'ten'=> 'Xã Cây Thị',
        'loai'=> 3,
        'parent_id'=> 192
        ],
        [
        'ten'=> 'Xã Hóa Thượng',
        'loai'=> 3,
        'parent_id'=> 192
        ],
        [
        'ten'=> 'Xã Hợp Tiến',
        'loai'=> 3,
        'parent_id'=> 192
        ],
        [
        'ten'=> 'Xã Tân Lợi',
        'loai'=> 3,
        'parent_id'=> 192
        ],
        [
        'ten'=> 'Xã Nam Hòa',
        'loai'=> 3,
        'parent_id'=> 192
        ],
        [
        'ten'=> 'Thị trấn Đình Cả',
        'loai'=> 3,
        'parent_id'=> 193
        ],
        [
        'ten'=> 'Xã Sảng Mộc',
        'loai'=> 3,
        'parent_id'=> 193
        ],
        [
        'ten'=> 'Xã Nghinh Tường',
        'loai'=> 3,
        'parent_id'=> 193
        ],
        [
        'ten'=> 'Xã Thần Xa',
        'loai'=> 3,
        'parent_id'=> 193
        ],
        [
        'ten'=> 'Xã Vũ Chấn',
        'loai'=> 3,
        'parent_id'=> 193
        ],
        [
        'ten'=> 'Xã Thượng Nung',
        'loai'=> 3,
        'parent_id'=> 193
        ],
        [
        'ten'=> 'Xã Phú Thượng',
        'loai'=> 3,
        'parent_id'=> 193
        ],
        [
        'ten'=> 'Xã Cúc Đường',
        'loai'=> 3,
        'parent_id'=> 193
        ],
        [
        'ten'=> 'Xã La Hiên',
        'loai'=> 3,
        'parent_id'=> 193
        ],
        [
        'ten'=> 'Xã Lâu Thượng',
        'loai'=> 3,
        'parent_id'=> 193
        ],
        [
        'ten'=> 'Xã Tràng Xá',
        'loai'=> 3,
        'parent_id'=> 193
        ],
        [
        'ten'=> 'Xã Phương Giao',
        'loai'=> 3,
        'parent_id'=> 193
        ],
        [
        'ten'=> 'Xã Liên Minh',
        'loai'=> 3,
        'parent_id'=> 193
        ],
        [
        'ten'=> 'Xã Dân Tiến',
        'loai'=> 3,
        'parent_id'=> 193
        ],
        [
        'ten'=> 'Xã Bình Long',
        'loai'=> 3,
        'parent_id'=> 193
        ],
        [
        'ten'=> 'Thị trấn Hùng Sơn',
        'loai'=> 3,
        'parent_id'=> 194
        ],
        [
        'ten'=> 'Thị trấn Quân Chu',
        'loai'=> 3,
        'parent_id'=> 194
        ],
        [
        'ten'=> 'Xã Phúc Lương',
        'loai'=> 3,
        'parent_id'=> 194
        ],
        [
        'ten'=> 'Xã Minh Tiến',
        'loai'=> 3,
        'parent_id'=> 194
        ],
        [
        'ten'=> 'Xã Yên Lãng',
        'loai'=> 3,
        'parent_id'=> 194
        ],
        [
        'ten'=> 'Xã Đức Lương',
        'loai'=> 3,
        'parent_id'=> 194
        ],
        [
        'ten'=> 'Xã Phú Cường',
        'loai'=> 3,
        'parent_id'=> 194
        ],
        [
        'ten'=> 'Xã Na Mao',
        'loai'=> 3,
        'parent_id'=> 194
        ],
        [
        'ten'=> 'Xã Phú Lạc',
        'loai'=> 3,
        'parent_id'=> 194
        ],
        [
        'ten'=> 'Xã Tân Linh',
        'loai'=> 3,
        'parent_id'=> 194
        ],
        [
        'ten'=> 'Xã Phú Thịnh',
        'loai'=> 3,
        'parent_id'=> 194
        ],
        [
        'ten'=> 'Xã Phục Linh',
        'loai'=> 3,
        'parent_id'=> 194
        ],
        [
        'ten'=> 'Xã Phú Xuyên',
        'loai'=> 3,
        'parent_id'=> 194
        ],
        [
        'ten'=> 'Xã Bản Ngoại',
        'loai'=> 3,
        'parent_id'=> 194
        ],
        [
        'ten'=> 'Xã Tiên Hội',
        'loai'=> 3,
        'parent_id'=> 194
        ],
        [
        'ten'=> 'Xã Cù Vân',
        'loai'=> 3,
        'parent_id'=> 194
        ],
        [
        'ten'=> 'Xã Hà Thượng',
        'loai'=> 3,
        'parent_id'=> 194
        ],
        [
        'ten'=> 'Xã La Bằng',
        'loai'=> 3,
        'parent_id'=> 194
        ],
        [
        'ten'=> 'Xã Hoàng Nông',
        'loai'=> 3,
        'parent_id'=> 194
        ],
        [
        'ten'=> 'Xã Khôi Kỳ',
        'loai'=> 3,
        'parent_id'=> 194
        ],
        [
        'ten'=> 'Xã An Khánh',
        'loai'=> 3,
        'parent_id'=> 194
        ],
        [
        'ten'=> 'Xã Tân Thái',
        'loai'=> 3,
        'parent_id'=> 194
        ],
        [
        'ten'=> 'Xã Bình Thuận',
        'loai'=> 3,
        'parent_id'=> 194
        ],
        [
        'ten'=> 'Xã Lục Ba',
        'loai'=> 3,
        'parent_id'=> 194
        ],
        [
        'ten'=> 'Xã Mỹ Yên',
        'loai'=> 3,
        'parent_id'=> 194
        ],
        [
        'ten'=> 'Xã Vạn Thọ',
        'loai'=> 3,
        'parent_id'=> 194
        ],
        [
        'ten'=> 'Xã Văn Yên',
        'loai'=> 3,
        'parent_id'=> 194
        ],
        [
        'ten'=> 'Xã Ký Phú',
        'loai'=> 3,
        'parent_id'=> 194
        ],
        [
        'ten'=> 'Xã Cát Nê',
        'loai'=> 3,
        'parent_id'=> 194
        ],
        [
        'ten'=> 'Xã Quân Chu',
        'loai'=> 3,
        'parent_id'=> 194
        ],
        [
        'ten'=> 'Phường Bãi Bông',
        'loai'=> 3,
        'parent_id'=> 195
        ],
        [
        'ten'=> 'Phường Bắc Sơn',
        'loai'=> 3,
        'parent_id'=> 195
        ],
        [
        'ten'=> 'Phường Ba Hàng',
        'loai'=> 3,
        'parent_id'=> 195
        ],
        [
        'ten'=> 'Xã Phúc Tân',
        'loai'=> 3,
        'parent_id'=> 195
        ],
        [
        'ten'=> 'Xã Phúc Thuận',
        'loai'=> 3,
        'parent_id'=> 195
        ],
        [
        'ten'=> 'Phường Hồng Tiến',
        'loai'=> 3,
        'parent_id'=> 195
        ],
        [
        'ten'=> 'Xã Minh Đức',
        'loai'=> 3,
        'parent_id'=> 195
        ],
        [
        'ten'=> 'Phường Đắc Sơn',
        'loai'=> 3,
        'parent_id'=> 195
        ],
        [
        'ten'=> 'Phường Đồng Tiến',
        'loai'=> 3,
        'parent_id'=> 195
        ],
        [
        'ten'=> 'Xã Thành Công',
        'loai'=> 3,
        'parent_id'=> 195
        ],
        [
        'ten'=> 'Phường Tiên Phong',
        'loai'=> 3,
        'parent_id'=> 195
        ],
        [
        'ten'=> 'Xã Vạn Phái',
        'loai'=> 3,
        'parent_id'=> 195
        ],
        [
        'ten'=> 'Phường Nam Tiến',
        'loai'=> 3,
        'parent_id'=> 195
        ],
        [
        'ten'=> 'Phường Tân Hương',
        'loai'=> 3,
        'parent_id'=> 195
        ],
        [
        'ten'=> 'Phường Đông Cao',
        'loai'=> 3,
        'parent_id'=> 195
        ],
        [
        'ten'=> 'Phường Trung Thành',
        'loai'=> 3,
        'parent_id'=> 195
        ],
        [
        'ten'=> 'Phường Tân Phú',
        'loai'=> 3,
        'parent_id'=> 195
        ],
        [
        'ten'=> 'Phường Thuận Thành',
        'loai'=> 3,
        'parent_id'=> 195
        ],
        [
        'ten'=> 'Thị trấn Hương Sơn',
        'loai'=> 3,
        'parent_id'=> 196
        ],
        [
        'ten'=> 'Xã Bàn Đạt',
        'loai'=> 3,
        'parent_id'=> 196
        ],
        [
        'ten'=> 'Xã Tân Khánh',
        'loai'=> 3,
        'parent_id'=> 196
        ],
        [
        'ten'=> 'Xã Tân Kim',
        'loai'=> 3,
        'parent_id'=> 196
        ],
        [
        'ten'=> 'Xã Tân Thành',
        'loai'=> 3,
        'parent_id'=> 196
        ],
        [
        'ten'=> 'Xã Đào Xá',
        'loai'=> 3,
        'parent_id'=> 196
        ],
        [
        'ten'=> 'Xã Bảo Lý',
        'loai'=> 3,
        'parent_id'=> 196
        ],
        [
        'ten'=> 'Xã Thượng Đình',
        'loai'=> 3,
        'parent_id'=> 196
        ],
        [
        'ten'=> 'Xã Tân Hòa',
        'loai'=> 3,
        'parent_id'=> 196
        ],
        [
        'ten'=> 'Xã Nhã Lộng',
        'loai'=> 3,
        'parent_id'=> 196
        ],
        [
        'ten'=> 'Xã Điềm Thụy',
        'loai'=> 3,
        'parent_id'=> 196
        ],
        [
        'ten'=> 'Xã Xuân Phương',
        'loai'=> 3,
        'parent_id'=> 196
        ],
        [
        'ten'=> 'Xã Tân Đức',
        'loai'=> 3,
        'parent_id'=> 196
        ],
        [
        'ten'=> 'Xã Úc Kỳ',
        'loai'=> 3,
        'parent_id'=> 196
        ],
        [
        'ten'=> 'Xã Lương Phú',
        'loai'=> 3,
        'parent_id'=> 196
        ],
        [
        'ten'=> 'Xã Nga My',
        'loai'=> 3,
        'parent_id'=> 196
        ],
        [
        'ten'=> 'Xã Kha Sơn',
        'loai'=> 3,
        'parent_id'=> 196
        ],
        [
        'ten'=> 'Xã Thanh Ninh',
        'loai'=> 3,
        'parent_id'=> 196
        ],
        [
        'ten'=> 'Xã Dương Thành',
        'loai'=> 3,
        'parent_id'=> 196
        ],
        [
        'ten'=> 'Xã Hà Châu',
        'loai'=> 3,
        'parent_id'=> 196
        ],
        [
        'ten'=> 'Phường Hoàng Văn Thụ',
        'loai'=> 3,
        'parent_id'=> 197
        ],
        [
        'ten'=> 'Phường Tam Thanh',
        'loai'=> 3,
        'parent_id'=> 197
        ],
        [
        'ten'=> 'Phường Vĩnh Trại',
        'loai'=> 3,
        'parent_id'=> 197
        ],
        [
        'ten'=> 'Phường Đông Kinh',
        'loai'=> 3,
        'parent_id'=> 197
        ],
        [
        'ten'=> 'Phường Chi Lăng',
        'loai'=> 3,
        'parent_id'=> 197
        ],
        [
        'ten'=> 'Xã Hoàng Đồng',
        'loai'=> 3,
        'parent_id'=> 197
        ],
        [
        'ten'=> 'Xã Quảng Lạc',
        'loai'=> 3,
        'parent_id'=> 197
        ],
        [
        'ten'=> 'Xã Mai Pha',
        'loai'=> 3,
        'parent_id'=> 197
        ],
        [
        'ten'=> 'Thị trấn Thất Khê',
        'loai'=> 3,
        'parent_id'=> 198
        ],
        [
        'ten'=> 'Xã Khánh Long',
        'loai'=> 3,
        'parent_id'=> 198
        ],
        [
        'ten'=> 'Xã Đoàn Kết',
        'loai'=> 3,
        'parent_id'=> 198
        ],
        [
        'ten'=> 'Xã Quốc Khánh',
        'loai'=> 3,
        'parent_id'=> 198
        ],
        [
        'ten'=> 'Xã Vĩnh Tiến',
        'loai'=> 3,
        'parent_id'=> 198
        ],
        [
        'ten'=> 'Xã Cao Minh',
        'loai'=> 3,
        'parent_id'=> 198
        ],
        [
        'ten'=> 'Xã Chí Minh',
        'loai'=> 3,
        'parent_id'=> 198
        ],
        [
        'ten'=> 'Xã Tri Phương',
        'loai'=> 3,
        'parent_id'=> 198
        ],
        [
        'ten'=> 'Xã Tân Tiến',
        'loai'=> 3,
        'parent_id'=> 198
        ],
        [
        'ten'=> 'Xã Tân Yên',
        'loai'=> 3,
        'parent_id'=> 198
        ],
        [
        'ten'=> 'Xã Đội Cấn',
        'loai'=> 3,
        'parent_id'=> 198
        ],
        [
        'ten'=> 'Xã Tân Minh',
        'loai'=> 3,
        'parent_id'=> 198
        ],
        [
        'ten'=> 'Xã Kim Đồng',
        'loai'=> 3,
        'parent_id'=> 198
        ],
        [
        'ten'=> 'Xã Chi Lăng',
        'loai'=> 3,
        'parent_id'=> 198
        ],
        [
        'ten'=> 'Xã Trung Thành',
        'loai'=> 3,
        'parent_id'=> 198
        ],
        [
        'ten'=> 'Xã Đại Đồng',
        'loai'=> 3,
        'parent_id'=> 198
        ],
        [
        'ten'=> 'Xã Đào Viên',
        'loai'=> 3,
        'parent_id'=> 198
        ],
        [
        'ten'=> 'Xã Đề Thám',
        'loai'=> 3,
        'parent_id'=> 198
        ],
        [
        'ten'=> 'Xã Kháng Chiến',
        'loai'=> 3,
        'parent_id'=> 198
        ],
        [
        'ten'=> 'Xã Hùng Sơn',
        'loai'=> 3,
        'parent_id'=> 198
        ],
        [
        'ten'=> 'Xã Quốc Việt',
        'loai'=> 3,
        'parent_id'=> 198
        ],
        [
        'ten'=> 'Xã Hùng Việt',
        'loai'=> 3,
        'parent_id'=> 198
        ],
        [
        'ten'=> 'Xã Hưng Đạo',
        'loai'=> 3,
        'parent_id'=> 199
        ],
        [
        'ten'=> 'Xã Vĩnh Yên',
        'loai'=> 3,
        'parent_id'=> 199
        ],
        [
        'ten'=> 'Xã Hoa Thám',
        'loai'=> 3,
        'parent_id'=> 199
        ],
        [
        'ten'=> 'Xã Quý Hòa',
        'loai'=> 3,
        'parent_id'=> 199
        ],
        [
        'ten'=> 'Xã Hồng Phong',
        'loai'=> 3,
        'parent_id'=> 199
        ],
        [
        'ten'=> 'Xã Yên Lỗ',
        'loai'=> 3,
        'parent_id'=> 199
        ],
        [
        'ten'=> 'Xã Thiện Hòa',
        'loai'=> 3,
        'parent_id'=> 199
        ],
        [
        'ten'=> 'Xã Quang Trung',
        'loai'=> 3,
        'parent_id'=> 199
        ],
        [
        'ten'=> 'Xã Thiện Thuật',
        'loai'=> 3,
        'parent_id'=> 199
        ],
        [
        'ten'=> 'Xã Minh Khai',
        'loai'=> 3,
        'parent_id'=> 199
        ],
        [
        'ten'=> 'Xã Thiện Long',
        'loai'=> 3,
        'parent_id'=> 199
        ],
        [
        'ten'=> 'Xã Hoàng Văn Thụ',
        'loai'=> 3,
        'parent_id'=> 199
        ],
        [
        'ten'=> 'Xã Hòa Bình',
        'loai'=> 3,
        'parent_id'=> 199
        ],
        [
        'ten'=> 'Xã Mông Ân',
        'loai'=> 3,
        'parent_id'=> 199
        ],
        [
        'ten'=> 'Xã Tân Hòa',
        'loai'=> 3,
        'parent_id'=> 199
        ],
        [
        'ten'=> 'Thị trấn Bình Gia',
        'loai'=> 3,
        'parent_id'=> 199
        ],
        [
        'ten'=> 'Xã Hồng Thái',
        'loai'=> 3,
        'parent_id'=> 199
        ],
        [
        'ten'=> 'Xã Bình La',
        'loai'=> 3,
        'parent_id'=> 199
        ],
        [
        'ten'=> 'Xã Tân Văn',
        'loai'=> 3,
        'parent_id'=> 199
        ],
        [
        'ten'=> 'Thị trấn Na Sầm',
        'loai'=> 3,
        'parent_id'=> 200
        ],
        [
        'ten'=> 'Xã Trùng Khánh',
        'loai'=> 3,
        'parent_id'=> 200
        ],
        [
        'ten'=> 'Xã Bắc La',
        'loai'=> 3,
        'parent_id'=> 200
        ],
        [
        'ten'=> 'Xã Thụy Hùng',
        'loai'=> 3,
        'parent_id'=> 200
        ],
        [
        'ten'=> 'Xã Bắc Hùng',
        'loai'=> 3,
        'parent_id'=> 200
        ],
        [
        'ten'=> 'Xã Tân Tác',
        'loai'=> 3,
        'parent_id'=> 200
        ],
        [
        'ten'=> 'Xã Thanh Long',
        'loai'=> 3,
        'parent_id'=> 200
        ],
        [
        'ten'=> 'Xã Hội Hoan',
        'loai'=> 3,
        'parent_id'=> 200
        ],
        [
        'ten'=> 'Xã Bắc Việt',
        'loai'=> 3,
        'parent_id'=> 200
        ],
        [
        'ten'=> 'Xã Hoàng Việt',
        'loai'=> 3,
        'parent_id'=> 200
        ],
        [
        'ten'=> 'Xã Gia Miễn',
        'loai'=> 3,
        'parent_id'=> 200
        ],
        [
        'ten'=> 'Xã Thành Hòa',
        'loai'=> 3,
        'parent_id'=> 200
        ],
        [
        'ten'=> 'Xã Tân Thanh',
        'loai'=> 3,
        'parent_id'=> 200
        ],
        [
        'ten'=> 'Xã Tân Mỹ',
        'loai'=> 3,
        'parent_id'=> 200
        ],
        [
        'ten'=> 'Xã Hồng Thái',
        'loai'=> 3,
        'parent_id'=> 200
        ],
        [
        'ten'=> 'Xã  Hoàng Văn Thụ',
        'loai'=> 3,
        'parent_id'=> 200
        ],
        [
        'ten'=> 'Xã Nhạc Kỳ',
        'loai'=> 3,
        'parent_id'=> 200
        ],
        [
        'ten'=> 'Thị trấn Đồng Đăng',
        'loai'=> 3,
        'parent_id'=> 201
        ],
        [
        'ten'=> 'Thị trấn Cao Lộc',
        'loai'=> 3,
        'parent_id'=> 201
        ],
        [
        'ten'=> 'Xã Bảo Lâm',
        'loai'=> 3,
        'parent_id'=> 201
        ],
        [
        'ten'=> 'Xã Thanh Lòa',
        'loai'=> 3,
        'parent_id'=> 201
        ],
        [
        'ten'=> 'Xã Cao Lâu',
        'loai'=> 3,
        'parent_id'=> 201
        ],
        [
        'ten'=> 'Xã Thạch Đạn',
        'loai'=> 3,
        'parent_id'=> 201
        ],
        [
        'ten'=> 'Xã Xuất Lễ',
        'loai'=> 3,
        'parent_id'=> 201
        ],
        [
        'ten'=> 'Xã Hồng Phong',
        'loai'=> 3,
        'parent_id'=> 201
        ],
        [
        'ten'=> 'Xã Thụy Hùng',
        'loai'=> 3,
        'parent_id'=> 201
        ],
        [
        'ten'=> 'Xã Lộc Yên',
        'loai'=> 3,
        'parent_id'=> 201
        ],
        [
        'ten'=> 'Xã Phú Xá',
        'loai'=> 3,
        'parent_id'=> 201
        ],
        [
        'ten'=> 'Xã Bình Trung',
        'loai'=> 3,
        'parent_id'=> 201
        ],
        [
        'ten'=> 'Xã Hải Yến',
        'loai'=> 3,
        'parent_id'=> 201
        ],
        [
        'ten'=> 'Xã Hòa Cư',
        'loai'=> 3,
        'parent_id'=> 201
        ],
        [
        'ten'=> 'Xã Hợp Thành',
        'loai'=> 3,
        'parent_id'=> 201
        ],
        [
        'ten'=> 'Xã Công Sơn',
        'loai'=> 3,
        'parent_id'=> 201
        ],
        [
        'ten'=> 'Xã Gia Cát',
        'loai'=> 3,
        'parent_id'=> 201
        ],
        [
        'ten'=> 'Xã Mẫu Sơn',
        'loai'=> 3,
        'parent_id'=> 201
        ],
        [
        'ten'=> 'Xã Xuân Long',
        'loai'=> 3,
        'parent_id'=> 201
        ],
        [
        'ten'=> 'Xã Tân Liên',
        'loai'=> 3,
        'parent_id'=> 201
        ],
        [
        'ten'=> 'Xã Yên Trạch',
        'loai'=> 3,
        'parent_id'=> 201
        ],
        [
        'ten'=> 'Xã Tân Thành',
        'loai'=> 3,
        'parent_id'=> 201
        ],
        [
        'ten'=> 'Thị trấn Văn Quan',
        'loai'=> 3,
        'parent_id'=> 202
        ],
        [
        'ten'=> 'Xã Trấn Ninh',
        'loai'=> 3,
        'parent_id'=> 202
        ],
        [
        'ten'=> 'Xã Liên Hội',
        'loai'=> 3,
        'parent_id'=> 202
        ],
        [
        'ten'=> 'Xã Hòa Bình',
        'loai'=> 3,
        'parent_id'=> 202
        ],
        [
        'ten'=> 'Xã Tú Xuyên',
        'loai'=> 3,
        'parent_id'=> 202
        ],
        [
        'ten'=> 'Xã Điềm He',
        'loai'=> 3,
        'parent_id'=> 202
        ],
        [
        'ten'=> 'Xã An Sơn',
        'loai'=> 3,
        'parent_id'=> 202
        ],
        [
        'ten'=> 'Xã Khánh Khê',
        'loai'=> 3,
        'parent_id'=> 202
        ],
        [
        'ten'=> 'Xã Lương Năng',
        'loai'=> 3,
        'parent_id'=> 202
        ],
        [
        'ten'=> 'Xã Đồng Giáp',
        'loai'=> 3,
        'parent_id'=> 202
        ],
        [
        'ten'=> 'Xã Bình Phúc',
        'loai'=> 3,
        'parent_id'=> 202
        ],
        [
        'ten'=> 'Xã Tràng Các',
        'loai'=> 3,
        'parent_id'=> 202
        ],
        [
        'ten'=> 'Xã Tân Đoàn',
        'loai'=> 3,
        'parent_id'=> 202
        ],
        [
        'ten'=> 'Xã Tri Lễ',
        'loai'=> 3,
        'parent_id'=> 202
        ],
        [
        'ten'=> 'Xã Tràng Phái',
        'loai'=> 3,
        'parent_id'=> 202
        ],
        [
        'ten'=> 'Xã Yên Phúc',
        'loai'=> 3,
        'parent_id'=> 202
        ],
        [
        'ten'=> 'Xã Hữu Lễ',
        'loai'=> 3,
        'parent_id'=> 202
        ],
        [
        'ten'=> 'Thị trấn Bắc Sơn',
        'loai'=> 3,
        'parent_id'=> 203
        ],
        [
        'ten'=> 'Xã Long Đống',
        'loai'=> 3,
        'parent_id'=> 203
        ],
        [
        'ten'=> 'Xã Vạn Thủy',
        'loai'=> 3,
        'parent_id'=> 203
        ],
        [
        'ten'=> 'Xã Đồng ý',
        'loai'=> 3,
        'parent_id'=> 203
        ],
        [
        'ten'=> 'Xã Tân Tri',
        'loai'=> 3,
        'parent_id'=> 203
        ],
        [
        'ten'=> 'Xã Bắc Quỳnh',
        'loai'=> 3,
        'parent_id'=> 203
        ],
        [
        'ten'=> 'Xã Hưng Vũ',
        'loai'=> 3,
        'parent_id'=> 203
        ],
        [
        'ten'=> 'Xã Tân Lập',
        'loai'=> 3,
        'parent_id'=> 203
        ],
        [
        'ten'=> 'Xã Vũ Sơn',
        'loai'=> 3,
        'parent_id'=> 203
        ],
        [
        'ten'=> 'Xã Chiêu Vũ',
        'loai'=> 3,
        'parent_id'=> 203
        ],
        [
        'ten'=> 'Xã Tân Hương',
        'loai'=> 3,
        'parent_id'=> 203
        ],
        [
        'ten'=> 'Xã Chiến Thắng',
        'loai'=> 3,
        'parent_id'=> 203
        ],
        [
        'ten'=> 'Xã Vũ Lăng',
        'loai'=> 3,
        'parent_id'=> 203
        ],
        [
        'ten'=> 'Xã Trấn Yên',
        'loai'=> 3,
        'parent_id'=> 203
        ],
        [
        'ten'=> 'Xã Vũ Lễ',
        'loai'=> 3,
        'parent_id'=> 203
        ],
        [
        'ten'=> 'Xã Nhất Hòa',
        'loai'=> 3,
        'parent_id'=> 203
        ],
        [
        'ten'=> 'Xã Tân Thành',
        'loai'=> 3,
        'parent_id'=> 203
        ],
        [
        'ten'=> 'Xã Nhất Tiến',
        'loai'=> 3,
        'parent_id'=> 203
        ],
        [
        'ten'=> 'Thị trấn Hữu Lũng',
        'loai'=> 3,
        'parent_id'=> 204
        ],
        [
        'ten'=> 'Xã Hữu Liên',
        'loai'=> 3,
        'parent_id'=> 204
        ],
        [
        'ten'=> 'Xã Yên Bình',
        'loai'=> 3,
        'parent_id'=> 204
        ],
        [
        'ten'=> 'Xã Quyết Thắng',
        'loai'=> 3,
        'parent_id'=> 204
        ],
        [
        'ten'=> 'Xã Hòa Bình',
        'loai'=> 3,
        'parent_id'=> 204
        ],
        [
        'ten'=> 'Xã Yên Thịnh',
        'loai'=> 3,
        'parent_id'=> 204
        ],
        [
        'ten'=> 'Xã Yên Sơn',
        'loai'=> 3,
        'parent_id'=> 204
        ],
        [
        'ten'=> 'Xã Thiện Tân',
        'loai'=> 3,
        'parent_id'=> 204
        ],
        [
        'ten'=> 'Xã Yên Vượng',
        'loai'=> 3,
        'parent_id'=> 204
        ],
        [
        'ten'=> 'Xã Minh Tiến',
        'loai'=> 3,
        'parent_id'=> 204
        ],
        [
        'ten'=> 'Xã Nhật Tiến',
        'loai'=> 3,
        'parent_id'=> 204
        ],
        [
        'ten'=> 'Xã Thanh Sơn',
        'loai'=> 3,
        'parent_id'=> 204
        ],
        [
        'ten'=> 'Xã Đồng Tân',
        'loai'=> 3,
        'parent_id'=> 204
        ],
        [
        'ten'=> 'Xã Cai Kinh',
        'loai'=> 3,
        'parent_id'=> 204
        ],
        [
        'ten'=> 'Xã Hòa Lạc',
        'loai'=> 3,
        'parent_id'=> 204
        ],
        [
        'ten'=> 'Xã Vân Nham',
        'loai'=> 3,
        'parent_id'=> 204
        ],
        [
        'ten'=> 'Xã Đồng Tiến',
        'loai'=> 3,
        'parent_id'=> 204
        ],
        [
        'ten'=> 'Xã Tân Thành',
        'loai'=> 3,
        'parent_id'=> 204
        ],
        [
        'ten'=> 'Xã Hòa Sơn',
        'loai'=> 3,
        'parent_id'=> 204
        ],
        [
        'ten'=> 'Xã Minh Sơn',
        'loai'=> 3,
        'parent_id'=> 204
        ],
        [
        'ten'=> 'Xã Hồ Sơn',
        'loai'=> 3,
        'parent_id'=> 204
        ],
        [
        'ten'=> 'Xã Sơn Hà',
        'loai'=> 3,
        'parent_id'=> 204
        ],
        [
        'ten'=> 'Xã Minh Hòa',
        'loai'=> 3,
        'parent_id'=> 204
        ],
        [
        'ten'=> 'Xã Hòa Thắng',
        'loai'=> 3,
        'parent_id'=> 204
        ],
        [
        'ten'=> 'Thị trấn Đồng Mỏ',
        'loai'=> 3,
        'parent_id'=> 205
        ],
        [
        'ten'=> 'Thị trấn Chi Lăng',
        'loai'=> 3,
        'parent_id'=> 205
        ],
        [
        'ten'=> 'Xã Vân An',
        'loai'=> 3,
        'parent_id'=> 205
        ],
        [
        'ten'=> 'Xã Vân Thủy',
        'loai'=> 3,
        'parent_id'=> 205
        ],
        [
        'ten'=> 'Xã Gia Lộc',
        'loai'=> 3,
        'parent_id'=> 205
        ],
        [
        'ten'=> 'Xã Bắc Thủy',
        'loai'=> 3,
        'parent_id'=> 205
        ],
        [
        'ten'=> 'Xã Chiến Thắng',
        'loai'=> 3,
        'parent_id'=> 205
        ],
        [
        'ten'=> 'Xã Mai Sao',
        'loai'=> 3,
        'parent_id'=> 205
        ],
        [
        'ten'=> 'Xã Bằng Hữu',
        'loai'=> 3,
        'parent_id'=> 205
        ],
        [
        'ten'=> 'Xã Thượng Cường',
        'loai'=> 3,
        'parent_id'=> 205
        ],
        [
        'ten'=> 'Xã Bằng Mạc',
        'loai'=> 3,
        'parent_id'=> 205
        ],
        [
        'ten'=> 'Xã Nhân Lý',
        'loai'=> 3,
        'parent_id'=> 205
        ],
        [
        'ten'=> 'Xã Lâm Sơn',
        'loai'=> 3,
        'parent_id'=> 205
        ],
        [
        'ten'=> 'Xã Liên Sơn',
        'loai'=> 3,
        'parent_id'=> 205
        ],
        [
        'ten'=> 'Xã Vạn Linh',
        'loai'=> 3,
        'parent_id'=> 205
        ],
        [
        'ten'=> 'Xã Hòa Bình',
        'loai'=> 3,
        'parent_id'=> 205
        ],
        [
        'ten'=> 'Xã Hữu Kiên',
        'loai'=> 3,
        'parent_id'=> 205
        ],
        [
        'ten'=> 'Xã Quan Sơn',
        'loai'=> 3,
        'parent_id'=> 205
        ],
        [
        'ten'=> 'Xã Y Tịch',
        'loai'=> 3,
        'parent_id'=> 205
        ],
        [
        'ten'=> 'Xã Chi Lăng',
        'loai'=> 3,
        'parent_id'=> 205
        ],
        [
        'ten'=> 'Thị trấn Na Dương',
        'loai'=> 3,
        'parent_id'=> 206
        ],
        [
        'ten'=> 'Thị trấn Lộc Bình',
        'loai'=> 3,
        'parent_id'=> 206
        ],
        [
        'ten'=> 'Xã Mẫu Sơn',
        'loai'=> 3,
        'parent_id'=> 206
        ],
        [
        'ten'=> 'Xã Yên Khoái',
        'loai'=> 3,
        'parent_id'=> 206
        ],
        [
        'ten'=> 'Xã Khánh Xuân',
        'loai'=> 3,
        'parent_id'=> 206
        ],
        [
        'ten'=> 'Xã Tú Mịch',
        'loai'=> 3,
        'parent_id'=> 206
        ],
        [
        'ten'=> 'Xã Hữu Khánh',
        'loai'=> 3,
        'parent_id'=> 206
        ],
        [
        'ten'=> 'Xã Đồng Bục',
        'loai'=> 3,
        'parent_id'=> 206
        ],
        [
        'ten'=> 'Xã Tam Gia',
        'loai'=> 3,
        'parent_id'=> 206
        ],
        [
        'ten'=> 'Xã Tú Đoạn',
        'loai'=> 3,
        'parent_id'=> 206
        ],
        [
        'ten'=> 'Xã Khuất Xá',
        'loai'=> 3,
        'parent_id'=> 206
        ],
        [
        'ten'=> 'Xã Tĩnh Bắc',
        'loai'=> 3,
        'parent_id'=> 206
        ],
        [
        'ten'=> 'Xã Thống Nhất',
        'loai'=> 3,
        'parent_id'=> 206
        ],
        [
        'ten'=> 'Xã Sàn Viên',
        'loai'=> 3,
        'parent_id'=> 206
        ],
        [
        'ten'=> 'Xã Đông Quan',
        'loai'=> 3,
        'parent_id'=> 206
        ],
        [
        'ten'=> 'Xã Minh Hiệp',
        'loai'=> 3,
        'parent_id'=> 206
        ],
        [
        'ten'=> 'Xã Hữu Lân',
        'loai'=> 3,
        'parent_id'=> 206
        ],
        [
        'ten'=> 'Xã Lợi Bác',
        'loai'=> 3,
        'parent_id'=> 206
        ],
        [
        'ten'=> 'Xã Nam Quan',
        'loai'=> 3,
        'parent_id'=> 206
        ],
        [
        'ten'=> 'Xã Xuân Dương',
        'loai'=> 3,
        'parent_id'=> 206
        ],
        [
        'ten'=> 'Xã Ái Quốc',
        'loai'=> 3,
        'parent_id'=> 206
        ],
        [
        'ten'=> 'Thị trấn Đình Lập',
        'loai'=> 3,
        'parent_id'=> 207
        ],
        [
        'ten'=> 'Thị trấn NT Thái Bình',
        'loai'=> 3,
        'parent_id'=> 207
        ],
        [
        'ten'=> 'Xã Bắc Xa',
        'loai'=> 3,
        'parent_id'=> 207
        ],
        [
        'ten'=> 'Xã Bính Xá',
        'loai'=> 3,
        'parent_id'=> 207
        ],
        [
        'ten'=> 'Xã Kiên Mộc',
        'loai'=> 3,
        'parent_id'=> 207
        ],
        [
        'ten'=> 'Xã Đình Lập',
        'loai'=> 3,
        'parent_id'=> 207
        ],
        [
        'ten'=> 'Xã Thái Bình',
        'loai'=> 3,
        'parent_id'=> 207
        ],
        [
        'ten'=> 'Xã Cường Lợi',
        'loai'=> 3,
        'parent_id'=> 207
        ],
        [
        'ten'=> 'Xã Châu Sơn',
        'loai'=> 3,
        'parent_id'=> 207
        ],
        [
        'ten'=> 'Xã Lâm Ca',
        'loai'=> 3,
        'parent_id'=> 207
        ],
        [
        'ten'=> 'Xã Đồng Thắng',
        'loai'=> 3,
        'parent_id'=> 207
        ],
        [
        'ten'=> 'Xã Bắc Lãng',
        'loai'=> 3,
        'parent_id'=> 207
        ],
        [
        'ten'=> 'Phường Hà Khánh',
        'loai'=> 3,
        'parent_id'=> 208
        ],
        [
        'ten'=> 'Phường Hà Phong',
        'loai'=> 3,
        'parent_id'=> 208
        ],
        [
        'ten'=> 'Phường Hà Khẩu',
        'loai'=> 3,
        'parent_id'=> 208
        ],
        [
        'ten'=> 'Phường Cao Xanh',
        'loai'=> 3,
        'parent_id'=> 208
        ],
        [
        'ten'=> 'Phường Giếng Đáy',
        'loai'=> 3,
        'parent_id'=> 208
        ],
        [
        'ten'=> 'Phường Hà Tu',
        'loai'=> 3,
        'parent_id'=> 208
        ],
        [
        'ten'=> 'Phường Hà Trung',
        'loai'=> 3,
        'parent_id'=> 208
        ],
        [
        'ten'=> 'Phường Hà Lầm',
        'loai'=> 3,
        'parent_id'=> 208
        ],
        [
        'ten'=> 'Phường Bãi Cháy',
        'loai'=> 3,
        'parent_id'=> 208
        ],
        [
        'ten'=> 'Phường Cao Thắng',
        'loai'=> 3,
        'parent_id'=> 208
        ],
        [
        'ten'=> 'Phường Hùng Thắng',
        'loai'=> 3,
        'parent_id'=> 208
        ],
        [
        'ten'=> 'Phường Yết Kiêu',
        'loai'=> 3,
        'parent_id'=> 208
        ],
        [
        'ten'=> 'Phường Trần Hưng Đạo',
        'loai'=> 3,
        'parent_id'=> 208
        ],
        [
        'ten'=> 'Phường Hồng Hải',
        'loai'=> 3,
        'parent_id'=> 208
        ],
        [
        'ten'=> 'Phường Hồng Gai',
        'loai'=> 3,
        'parent_id'=> 208
        ],
        [
        'ten'=> 'Phường Bạch Đằng',
        'loai'=> 3,
        'parent_id'=> 208
        ],
        [
        'ten'=> 'Phường Hồng Hà',
        'loai'=> 3,
        'parent_id'=> 208
        ],
        [
        'ten'=> 'Phường Tuần Châu',
        'loai'=> 3,
        'parent_id'=> 208
        ],
        [
        'ten'=> 'Phường Việt Hưng',
        'loai'=> 3,
        'parent_id'=> 208
        ],
        [
        'ten'=> 'Phường Đại Yên',
        'loai'=> 3,
        'parent_id'=> 208
        ],
        [
        'ten'=> 'Phường Hoành Bồ',
        'loai'=> 3,
        'parent_id'=> 208
        ],
        [
        'ten'=> 'Xã Kỳ Thượng',
        'loai'=> 3,
        'parent_id'=> 208
        ],
        [
        'ten'=> 'Xã Đồng Sơn',
        'loai'=> 3,
        'parent_id'=> 208
        ],
        [
        'ten'=> 'Xã Tân Dân',
        'loai'=> 3,
        'parent_id'=> 208
        ],
        [
        'ten'=> 'Xã Đồng Lâm',
        'loai'=> 3,
        'parent_id'=> 208
        ],
        [
        'ten'=> 'Xã Hòa Bình',
        'loai'=> 3,
        'parent_id'=> 208
        ],
        [
        'ten'=> 'Xã Vũ Oai',
        'loai'=> 3,
        'parent_id'=> 208
        ],
        [
        'ten'=> 'Xã Dân Chủ',
        'loai'=> 3,
        'parent_id'=> 208
        ],
        [
        'ten'=> 'Xã Quảng La',
        'loai'=> 3,
        'parent_id'=> 208
        ],
        [
        'ten'=> 'Xã Bằng Cả',
        'loai'=> 3,
        'parent_id'=> 208
        ],
        [
        'ten'=> 'Xã Thống Nhất',
        'loai'=> 3,
        'parent_id'=> 208
        ],
        [
        'ten'=> 'Xã Sơn Dương',
        'loai'=> 3,
        'parent_id'=> 208
        ],
        [
        'ten'=> 'Xã Lê Lợi',
        'loai'=> 3,
        'parent_id'=> 208
        ],
        [
        'ten'=> 'Phường Ka Long',
        'loai'=> 3,
        'parent_id'=> 209
        ],
        [
        'ten'=> 'Phường Trần Phú',
        'loai'=> 3,
        'parent_id'=> 209
        ],
        [
        'ten'=> 'Phường Ninh Dương',
        'loai'=> 3,
        'parent_id'=> 209
        ],
        [
        'ten'=> 'Phường Hoà Lạc',
        'loai'=> 3,
        'parent_id'=> 209
        ],
        [
        'ten'=> 'Phường Trà Cổ',
        'loai'=> 3,
        'parent_id'=> 209
        ],
        [
        'ten'=> 'Xã Hải Sơn',
        'loai'=> 3,
        'parent_id'=> 209
        ],
        [
        'ten'=> 'Xã Bắc Sơn',
        'loai'=> 3,
        'parent_id'=> 209
        ],
        [
        'ten'=> 'Xã Hải Đông',
        'loai'=> 3,
        'parent_id'=> 209
        ],
        [
        'ten'=> 'Xã Hải Tiến',
        'loai'=> 3,
        'parent_id'=> 209
        ],
        [
        'ten'=> 'Phường Hải Yên',
        'loai'=> 3,
        'parent_id'=> 209
        ],
        [
        'ten'=> 'Xã Quảng Nghĩa',
        'loai'=> 3,
        'parent_id'=> 209
        ],
        [
        'ten'=> 'Phường Hải Hoà',
        'loai'=> 3,
        'parent_id'=> 209
        ],
        [
        'ten'=> 'Xã Hải Xuân',
        'loai'=> 3,
        'parent_id'=> 209
        ],
        [
        'ten'=> 'Xã Vạn Ninh',
        'loai'=> 3,
        'parent_id'=> 209
        ],
        [
        'ten'=> 'Phường Bình Ngọc',
        'loai'=> 3,
        'parent_id'=> 209
        ],
        [
        'ten'=> 'Xã Vĩnh Trung',
        'loai'=> 3,
        'parent_id'=> 209
        ],
        [
        'ten'=> 'Xã Vĩnh Thực',
        'loai'=> 3,
        'parent_id'=> 209
        ],
        [
        'ten'=> 'Phường Mông Dương',
        'loai'=> 3,
        'parent_id'=> 210
        ],
        [
        'ten'=> 'Phường Cửa Ông',
        'loai'=> 3,
        'parent_id'=> 210
        ],
        [
        'ten'=> 'Phường Cẩm Sơn',
        'loai'=> 3,
        'parent_id'=> 210
        ],
        [
        'ten'=> 'Phường Cẩm Đông',
        'loai'=> 3,
        'parent_id'=> 210
        ],
        [
        'ten'=> 'Phường Cẩm Phú',
        'loai'=> 3,
        'parent_id'=> 210
        ],
        [
        'ten'=> 'Phường Cẩm Tây',
        'loai'=> 3,
        'parent_id'=> 210
        ],
        [
        'ten'=> 'Phường Quang Hanh',
        'loai'=> 3,
        'parent_id'=> 210
        ],
        [
        'ten'=> 'Phường Cẩm Thịnh',
        'loai'=> 3,
        'parent_id'=> 210
        ],
        [
        'ten'=> 'Phường Cẩm Thủy',
        'loai'=> 3,
        'parent_id'=> 210
        ],
        [
        'ten'=> 'Phường Cẩm Thạch',
        'loai'=> 3,
        'parent_id'=> 210
        ],
        [
        'ten'=> 'Phường Cẩm Thành',
        'loai'=> 3,
        'parent_id'=> 210
        ],
        [
        'ten'=> 'Phường Cẩm Trung',
        'loai'=> 3,
        'parent_id'=> 210
        ],
        [
        'ten'=> 'Phường Cẩm Bình',
        'loai'=> 3,
        'parent_id'=> 210
        ],
        [
        'ten'=> 'Xã Cộng Hòa',
        'loai'=> 3,
        'parent_id'=> 210
        ],
        [
        'ten'=> 'Xã Cẩm Hải',
        'loai'=> 3,
        'parent_id'=> 210
        ],
        [
        'ten'=> 'Xã Dương Huy',
        'loai'=> 3,
        'parent_id'=> 210
        ],
        [
        'ten'=> 'Phường Vàng Danh',
        'loai'=> 3,
        'parent_id'=> 211
        ],
        [
        'ten'=> 'Phường Thanh Sơn',
        'loai'=> 3,
        'parent_id'=> 211
        ],
        [
        'ten'=> 'Phường Bắc Sơn',
        'loai'=> 3,
        'parent_id'=> 211
        ],
        [
        'ten'=> 'Phường Quang Trung',
        'loai'=> 3,
        'parent_id'=> 211
        ],
        [
        'ten'=> 'Phường Trưng Vương',
        'loai'=> 3,
        'parent_id'=> 211
        ],
        [
        'ten'=> 'Phường Nam Khê',
        'loai'=> 3,
        'parent_id'=> 211
        ],
        [
        'ten'=> 'Phường Yên Thanh',
        'loai'=> 3,
        'parent_id'=> 211
        ],
        [
        'ten'=> 'Xã Thượng Yên Công',
        'loai'=> 3,
        'parent_id'=> 211
        ],
        [
        'ten'=> 'Phường Phương Đông',
        'loai'=> 3,
        'parent_id'=> 211
        ],
        [
        'ten'=> 'Phường Phương Nam',
        'loai'=> 3,
        'parent_id'=> 211
        ],
        [
        'ten'=> 'Thị trấn Bình Liêu',
        'loai'=> 3,
        'parent_id'=> 212
        ],
        [
        'ten'=> 'Xã Hoành Mô',
        'loai'=> 3,
        'parent_id'=> 212
        ],
        [
        'ten'=> 'Xã Đồng Tâm',
        'loai'=> 3,
        'parent_id'=> 212
        ],
        [
        'ten'=> 'Xã Đồng Văn',
        'loai'=> 3,
        'parent_id'=> 212
        ],
        [
        'ten'=> 'Xã Vô Ngại',
        'loai'=> 3,
        'parent_id'=> 212
        ],
        [
        'ten'=> 'Xã Lục Hồn',
        'loai'=> 3,
        'parent_id'=> 212
        ],
        [
        'ten'=> 'Xã Húc Động',
        'loai'=> 3,
        'parent_id'=> 212
        ],
        [
        'ten'=> 'Thị trấn Tiên Yên',
        'loai'=> 3,
        'parent_id'=> 213
        ],
        [
        'ten'=> 'Xã Hà Lâu',
        'loai'=> 3,
        'parent_id'=> 213
        ],
        [
        'ten'=> 'Xã Đại Dực',
        'loai'=> 3,
        'parent_id'=> 213
        ],
        [
        'ten'=> 'Xã Phong Dụ',
        'loai'=> 3,
        'parent_id'=> 213
        ],
        [
        'ten'=> 'Xã Điền Xá',
        'loai'=> 3,
        'parent_id'=> 213
        ],
        [
        'ten'=> 'Xã Đông Ngũ',
        'loai'=> 3,
        'parent_id'=> 213
        ],
        [
        'ten'=> 'Xã Yên Than',
        'loai'=> 3,
        'parent_id'=> 213
        ],
        [
        'ten'=> 'Xã Đông Hải',
        'loai'=> 3,
        'parent_id'=> 213
        ],
        [
        'ten'=> 'Xã Hải Lạng',
        'loai'=> 3,
        'parent_id'=> 213
        ],
        [
        'ten'=> 'Xã Tiên Lãng',
        'loai'=> 3,
        'parent_id'=> 213
        ],
        [
        'ten'=> 'Xã Đồng Rui',
        'loai'=> 3,
        'parent_id'=> 213
        ],
        [
        'ten'=> 'Thị trấn Đầm Hà',
        'loai'=> 3,
        'parent_id'=> 214
        ],
        [
        'ten'=> 'Xã Quảng Lâm',
        'loai'=> 3,
        'parent_id'=> 214
        ],
        [
        'ten'=> 'Xã Quảng An',
        'loai'=> 3,
        'parent_id'=> 214
        ],
        [
        'ten'=> 'Xã Tân Bình',
        'loai'=> 3,
        'parent_id'=> 214
        ],
        [
        'ten'=> 'Xã Dực Yên',
        'loai'=> 3,
        'parent_id'=> 214
        ],
        [
        'ten'=> 'Xã Quảng Tân',
        'loai'=> 3,
        'parent_id'=> 214
        ],
        [
        'ten'=> 'Xã Đầm Hà',
        'loai'=> 3,
        'parent_id'=> 214
        ],
        [
        'ten'=> 'Xã Tân Lập',
        'loai'=> 3,
        'parent_id'=> 214
        ],
        [
        'ten'=> 'Xã Đại Bình',
        'loai'=> 3,
        'parent_id'=> 214
        ],
        [
        'ten'=> 'Thị trấn Quảng Hà',
        'loai'=> 3,
        'parent_id'=> 215
        ],
        [
        'ten'=> 'Xã Quảng Đức',
        'loai'=> 3,
        'parent_id'=> 215
        ],
        [
        'ten'=> 'Xã Quảng Sơn',
        'loai'=> 3,
        'parent_id'=> 215
        ],
        [
        'ten'=> 'Xã Quảng Thành',
        'loai'=> 3,
        'parent_id'=> 215
        ],
        [
        'ten'=> 'Xã Quảng Thịnh',
        'loai'=> 3,
        'parent_id'=> 215
        ],
        [
        'ten'=> 'Xã Quảng Minh',
        'loai'=> 3,
        'parent_id'=> 215
        ],
        [
        'ten'=> 'Xã Quảng Chính',
        'loai'=> 3,
        'parent_id'=> 215
        ],
        [
        'ten'=> 'Xã Quảng Long',
        'loai'=> 3,
        'parent_id'=> 215
        ],
        [
        'ten'=> 'Xã Đường Hoa',
        'loai'=> 3,
        'parent_id'=> 215
        ],
        [
        'ten'=> 'Xã Quảng Phong',
        'loai'=> 3,
        'parent_id'=> 215
        ],
        [
        'ten'=> 'Xã Cái Chiên',
        'loai'=> 3,
        'parent_id'=> 215
        ],
        [
        'ten'=> 'Thị trấn Ba Chẽ',
        'loai'=> 3,
        'parent_id'=> 216
        ],
        [
        'ten'=> 'Xã Thanh Sơn',
        'loai'=> 3,
        'parent_id'=> 216
        ],
        [
        'ten'=> 'Xã Thanh Lâm',
        'loai'=> 3,
        'parent_id'=> 216
        ],
        [
        'ten'=> 'Xã Đạp Thanh',
        'loai'=> 3,
        'parent_id'=> 216
        ],
        [
        'ten'=> 'Xã Nam Sơn',
        'loai'=> 3,
        'parent_id'=> 216
        ],
        [
        'ten'=> 'Xã Lương Mông',
        'loai'=> 3,
        'parent_id'=> 216
        ],
        [
        'ten'=> 'Xã Đồn Đạc',
        'loai'=> 3,
        'parent_id'=> 216
        ],
        [
        'ten'=> 'Xã Minh Cầm',
        'loai'=> 3,
        'parent_id'=> 216
        ],
        [
        'ten'=> 'Thị trấn Cái Rồng',
        'loai'=> 3,
        'parent_id'=> 217
        ],
        [
        'ten'=> 'Xã Đài Xuyên',
        'loai'=> 3,
        'parent_id'=> 217
        ],
        [
        'ten'=> 'Xã Bình Dân',
        'loai'=> 3,
        'parent_id'=> 217
        ],
        [
        'ten'=> 'Xã Vạn Yên',
        'loai'=> 3,
        'parent_id'=> 217
        ],
        [
        'ten'=> 'Xã Minh Châu',
        'loai'=> 3,
        'parent_id'=> 217
        ],
        [
        'ten'=> 'Xã Đoàn Kết',
        'loai'=> 3,
        'parent_id'=> 217
        ],
        [
        'ten'=> 'Xã Hạ Long',
        'loai'=> 3,
        'parent_id'=> 217
        ],
        [
        'ten'=> 'Xã Đông Xá',
        'loai'=> 3,
        'parent_id'=> 217
        ],
        [
        'ten'=> 'Xã Bản Sen',
        'loai'=> 3,
        'parent_id'=> 217
        ],
        [
        'ten'=> 'Xã Thắng Lợi',
        'loai'=> 3,
        'parent_id'=> 217
        ],
        [
        'ten'=> 'Xã Quan Lạn',
        'loai'=> 3,
        'parent_id'=> 217
        ],
        [
        'ten'=> 'Xã Ngọc Vừng',
        'loai'=> 3,
        'parent_id'=> 217
        ],
        [
        'ten'=> 'Phường Mạo Khê',
        'loai'=> 3,
        'parent_id'=> 218
        ],
        [
        'ten'=> 'Phường Đông Triều',
        'loai'=> 3,
        'parent_id'=> 218
        ],
        [
        'ten'=> 'Xã An Sinh',
        'loai'=> 3,
        'parent_id'=> 218
        ],
        [
        'ten'=> 'Xã Tràng Lương',
        'loai'=> 3,
        'parent_id'=> 218
        ],
        [
        'ten'=> 'Xã Bình Khê',
        'loai'=> 3,
        'parent_id'=> 218
        ],
        [
        'ten'=> 'Xã Việt Dân',
        'loai'=> 3,
        'parent_id'=> 218
        ],
        [
        'ten'=> 'Xã Tân Việt',
        'loai'=> 3,
        'parent_id'=> 218
        ],
        [
        'ten'=> 'Xã Bình Dương',
        'loai'=> 3,
        'parent_id'=> 218
        ],
        [
        'ten'=> 'Phường Đức Chính',
        'loai'=> 3,
        'parent_id'=> 218
        ],
        [
        'ten'=> 'Phường Tràng An',
        'loai'=> 3,
        'parent_id'=> 218
        ],
        [
        'ten'=> 'Xã Nguyễn Huệ',
        'loai'=> 3,
        'parent_id'=> 218
        ],
        [
        'ten'=> 'Xã Thủy An',
        'loai'=> 3,
        'parent_id'=> 218
        ],
        [
        'ten'=> 'Phường Xuân Sơn',
        'loai'=> 3,
        'parent_id'=> 218
        ],
        [
        'ten'=> 'Xã Hồng Thái Tây',
        'loai'=> 3,
        'parent_id'=> 218
        ],
        [
        'ten'=> 'Xã Hồng Thái Đông',
        'loai'=> 3,
        'parent_id'=> 218
        ],
        [
        'ten'=> 'Phường Hoàng Quế',
        'loai'=> 3,
        'parent_id'=> 218
        ],
        [
        'ten'=> 'Phường Yên Thọ',
        'loai'=> 3,
        'parent_id'=> 218
        ],
        [
        'ten'=> 'Phường Hồng Phong',
        'loai'=> 3,
        'parent_id'=> 218
        ],
        [
        'ten'=> 'Phường Kim Sơn',
        'loai'=> 3,
        'parent_id'=> 218
        ],
        [
        'ten'=> 'Phường Hưng Đạo',
        'loai'=> 3,
        'parent_id'=> 218
        ],
        [
        'ten'=> 'Xã Yên Đức',
        'loai'=> 3,
        'parent_id'=> 218
        ],
        [
        'ten'=> 'Phường Quảng Yên',
        'loai'=> 3,
        'parent_id'=> 219
        ],
        [
        'ten'=> 'Phường Đông Mai',
        'loai'=> 3,
        'parent_id'=> 219
        ],
        [
        'ten'=> 'Phường Minh Thành',
        'loai'=> 3,
        'parent_id'=> 219
        ],
        [
        'ten'=> 'Xã Sông Khoai',
        'loai'=> 3,
        'parent_id'=> 219
        ],
        [
        'ten'=> 'Xã Hiệp Hòa',
        'loai'=> 3,
        'parent_id'=> 219
        ],
        [
        'ten'=> 'Phường Cộng Hòa',
        'loai'=> 3,
        'parent_id'=> 219
        ],
        [
        'ten'=> 'Xã Tiền An',
        'loai'=> 3,
        'parent_id'=> 219
        ],
        [
        'ten'=> 'Xã Hoàng Tân',
        'loai'=> 3,
        'parent_id'=> 219
        ],
        [
        'ten'=> 'Phường Tân An',
        'loai'=> 3,
        'parent_id'=> 219
        ],
        [
        'ten'=> 'Phường Yên Giang',
        'loai'=> 3,
        'parent_id'=> 219
        ],
        [
        'ten'=> 'Phường Nam Hoà',
        'loai'=> 3,
        'parent_id'=> 219
        ],
        [
        'ten'=> 'Phường Hà An',
        'loai'=> 3,
        'parent_id'=> 219
        ],
        [
        'ten'=> 'Xã Cẩm La',
        'loai'=> 3,
        'parent_id'=> 219
        ],
        [
        'ten'=> 'Phường Phong Hải',
        'loai'=> 3,
        'parent_id'=> 219
        ],
        [
        'ten'=> 'Phường Yên Hải',
        'loai'=> 3,
        'parent_id'=> 219
        ],
        [
        'ten'=> 'Xã Liên Hòa',
        'loai'=> 3,
        'parent_id'=> 219
        ],
        [
        'ten'=> 'Phường Phong Cốc',
        'loai'=> 3,
        'parent_id'=> 219
        ],
        [
        'ten'=> 'Xã Liên Vị',
        'loai'=> 3,
        'parent_id'=> 219
        ],
        [
        'ten'=> 'Xã Tiền Phong',
        'loai'=> 3,
        'parent_id'=> 219
        ],
        [
        'ten'=> 'Thị trấn Cô Tô',
        'loai'=> 3,
        'parent_id'=> 220
        ],
        [
        'ten'=> 'Xã Đồng Tiến',
        'loai'=> 3,
        'parent_id'=> 220
        ],
        [
        'ten'=> 'Xã Thanh Lân',
        'loai'=> 3,
        'parent_id'=> 220
        ],
        [
        'ten'=> 'Phường Thọ Xương',
        'loai'=> 3,
        'parent_id'=> 221
        ],
        [
        'ten'=> 'Phường Trần Nguyên Hãn',
        'loai'=> 3,
        'parent_id'=> 221
        ],
        [
        'ten'=> 'Phường Ngô Quyền',
        'loai'=> 3,
        'parent_id'=> 221
        ],
        [
        'ten'=> 'Phường Hoàng Văn Thụ',
        'loai'=> 3,
        'parent_id'=> 221
        ],
        [
        'ten'=> 'Phường Trần Phú',
        'loai'=> 3,
        'parent_id'=> 221
        ],
        [
        'ten'=> 'Phường Mỹ Độ',
        'loai'=> 3,
        'parent_id'=> 221
        ],
        [
        'ten'=> 'Phường Lê Lợi',
        'loai'=> 3,
        'parent_id'=> 221
        ],
        [
        'ten'=> 'Xã Song Mai',
        'loai'=> 3,
        'parent_id'=> 221
        ],
        [
        'ten'=> 'Phường Xương Giang',
        'loai'=> 3,
        'parent_id'=> 221
        ],
        [
        'ten'=> 'Phường Đa Mai',
        'loai'=> 3,
        'parent_id'=> 221
        ],
        [
        'ten'=> 'Phường Dĩnh Kế',
        'loai'=> 3,
        'parent_id'=> 221
        ],
        [
        'ten'=> 'Xã Dĩnh Trì',
        'loai'=> 3,
        'parent_id'=> 221
        ],
        [
        'ten'=> 'Xã Tân Mỹ',
        'loai'=> 3,
        'parent_id'=> 221
        ],
        [
        'ten'=> 'Xã Đồng Sơn',
        'loai'=> 3,
        'parent_id'=> 221
        ],
        [
        'ten'=> 'Xã Tân Tiến',
        'loai'=> 3,
        'parent_id'=> 221
        ],
        [
        'ten'=> 'Xã Song Khê',
        'loai'=> 3,
        'parent_id'=> 221
        ],
        [
        'ten'=> 'Xã Đồng Tiến',
        'loai'=> 3,
        'parent_id'=> 222
        ],
        [
        'ten'=> 'Xã Canh Nậu',
        'loai'=> 3,
        'parent_id'=> 222
        ],
        [
        'ten'=> 'Xã Xuân Lương',
        'loai'=> 3,
        'parent_id'=> 222
        ],
        [
        'ten'=> 'Xã Tam Tiến',
        'loai'=> 3,
        'parent_id'=> 222
        ],
        [
        'ten'=> 'Xã Đồng Vương',
        'loai'=> 3,
        'parent_id'=> 222
        ],
        [
        'ten'=> 'Xã Đồng Hưu',
        'loai'=> 3,
        'parent_id'=> 222
        ],
        [
        'ten'=> 'Xã Đồng Tâm',
        'loai'=> 3,
        'parent_id'=> 222
        ],
        [
        'ten'=> 'Xã Tam Hiệp',
        'loai'=> 3,
        'parent_id'=> 222
        ],
        [
        'ten'=> 'Xã Tiến Thắng',
        'loai'=> 3,
        'parent_id'=> 222
        ],
        [
        'ten'=> 'Xã Hồng Kỳ',
        'loai'=> 3,
        'parent_id'=> 222
        ],
        [
        'ten'=> 'Xã Đồng Lạc',
        'loai'=> 3,
        'parent_id'=> 222
        ],
        [
        'ten'=> 'Xã Đông Sơn',
        'loai'=> 3,
        'parent_id'=> 222
        ],
        [
        'ten'=> 'Xã Tân Hiệp',
        'loai'=> 3,
        'parent_id'=> 222
        ],
        [
        'ten'=> 'Xã Hương Vĩ',
        'loai'=> 3,
        'parent_id'=> 222
        ],
        [
        'ten'=> 'Xã Đồng Kỳ',
        'loai'=> 3,
        'parent_id'=> 222
        ],
        [
        'ten'=> 'Xã An Thượng',
        'loai'=> 3,
        'parent_id'=> 222
        ],
        [
        'ten'=> 'Thị trấn Phồn Xương',
        'loai'=> 3,
        'parent_id'=> 222
        ],
        [
        'ten'=> 'Xã Tân Sỏi',
        'loai'=> 3,
        'parent_id'=> 222
        ],
        [
        'ten'=> 'Thị trấn Bố Hạ',
        'loai'=> 3,
        'parent_id'=> 222
        ],
        [
        'ten'=> 'Xã Lan Giới',
        'loai'=> 3,
        'parent_id'=> 223
        ],
        [
        'ten'=> 'Thị trấn Nhã Nam',
        'loai'=> 3,
        'parent_id'=> 223
        ],
        [
        'ten'=> 'Xã Tân Trung',
        'loai'=> 3,
        'parent_id'=> 223
        ],
        [
        'ten'=> 'Xã Đại Hóa',
        'loai'=> 3,
        'parent_id'=> 223
        ],
        [
        'ten'=> 'Xã Quang Tiến',
        'loai'=> 3,
        'parent_id'=> 223
        ],
        [
        'ten'=> 'Xã Phúc Sơn',
        'loai'=> 3,
        'parent_id'=> 223
        ],
        [
        'ten'=> 'Xã An Dương',
        'loai'=> 3,
        'parent_id'=> 223
        ],
        [
        'ten'=> 'Xã Phúc Hòa',
        'loai'=> 3,
        'parent_id'=> 223
        ],
        [
        'ten'=> 'Xã Liên Sơn',
        'loai'=> 3,
        'parent_id'=> 223
        ],
        [
        'ten'=> 'Xã Hợp Đức',
        'loai'=> 3,
        'parent_id'=> 223
        ],
        [
        'ten'=> 'Xã Lam Cốt',
        'loai'=> 3,
        'parent_id'=> 223
        ],
        [
        'ten'=> 'Xã Cao Xá',
        'loai'=> 3,
        'parent_id'=> 223
        ],
        [
        'ten'=> 'Thị trấn Cao Thượng',
        'loai'=> 3,
        'parent_id'=> 223
        ],
        [
        'ten'=> 'Xã Việt Ngọc',
        'loai'=> 3,
        'parent_id'=> 223
        ],
        [
        'ten'=> 'Xã Song Vân',
        'loai'=> 3,
        'parent_id'=> 223
        ],
        [
        'ten'=> 'Xã Ngọc Châu',
        'loai'=> 3,
        'parent_id'=> 223
        ],
        [
        'ten'=> 'Xã Ngọc Vân',
        'loai'=> 3,
        'parent_id'=> 223
        ],
        [
        'ten'=> 'Xã Việt Lập',
        'loai'=> 3,
        'parent_id'=> 223
        ],
        [
        'ten'=> 'Xã Liên Chung',
        'loai'=> 3,
        'parent_id'=> 223
        ],
        [
        'ten'=> 'Xã Ngọc Thiện',
        'loai'=> 3,
        'parent_id'=> 223
        ],
        [
        'ten'=> 'Xã Ngọc Lý',
        'loai'=> 3,
        'parent_id'=> 223
        ],
        [
        'ten'=> 'Xã Quế Nham',
        'loai'=> 3,
        'parent_id'=> 223
        ],
        [
        'ten'=> 'Thị trấn Vôi',
        'loai'=> 3,
        'parent_id'=> 224
        ],
        [
        'ten'=> 'Xã Nghĩa Hòa',
        'loai'=> 3,
        'parent_id'=> 224
        ],
        [
        'ten'=> 'Xã Nghĩa Hưng',
        'loai'=> 3,
        'parent_id'=> 224
        ],
        [
        'ten'=> 'Xã Quang Thịnh',
        'loai'=> 3,
        'parent_id'=> 224
        ],
        [
        'ten'=> 'Xã Hương Sơn',
        'loai'=> 3,
        'parent_id'=> 224
        ],
        [
        'ten'=> 'Xã Đào Mỹ',
        'loai'=> 3,
        'parent_id'=> 224
        ],
        [
        'ten'=> 'Xã Tiên Lục',
        'loai'=> 3,
        'parent_id'=> 224
        ],
        [
        'ten'=> 'Xã An Hà',
        'loai'=> 3,
        'parent_id'=> 224
        ],
        [
        'ten'=> 'Thị trấn Kép',
        'loai'=> 3,
        'parent_id'=> 224
        ],
        [
        'ten'=> 'Xã Mỹ Hà',
        'loai'=> 3,
        'parent_id'=> 224
        ],
        [
        'ten'=> 'Xã Hương Lạc',
        'loai'=> 3,
        'parent_id'=> 224
        ],
        [
        'ten'=> 'Xã Dương Đức',
        'loai'=> 3,
        'parent_id'=> 224
        ],
        [
        'ten'=> 'Xã Tân Thanh',
        'loai'=> 3,
        'parent_id'=> 224
        ],
        [
        'ten'=> 'Xã Yên Mỹ',
        'loai'=> 3,
        'parent_id'=> 224
        ],
        [
        'ten'=> 'Xã Tân Hưng',
        'loai'=> 3,
        'parent_id'=> 224
        ],
        [
        'ten'=> 'Xã Mỹ Thái',
        'loai'=> 3,
        'parent_id'=> 224
        ],
        [
        'ten'=> 'Xã Xương Lâm',
        'loai'=> 3,
        'parent_id'=> 224
        ],
        [
        'ten'=> 'Xã Xuân Hương',
        'loai'=> 3,
        'parent_id'=> 224
        ],
        [
        'ten'=> 'Xã Tân Dĩnh',
        'loai'=> 3,
        'parent_id'=> 224
        ],
        [
        'ten'=> 'Xã Đại Lâm',
        'loai'=> 3,
        'parent_id'=> 224
        ],
        [
        'ten'=> 'Xã Thái Đào',
        'loai'=> 3,
        'parent_id'=> 224
        ],
        [
        'ten'=> 'Thị trấn Đồi Ngô',
        'loai'=> 3,
        'parent_id'=> 225
        ],
        [
        'ten'=> 'Xã Đông Hưng',
        'loai'=> 3,
        'parent_id'=> 225
        ],
        [
        'ten'=> 'Xã Đông Phú',
        'loai'=> 3,
        'parent_id'=> 225
        ],
        [
        'ten'=> 'Xã Tam Dị',
        'loai'=> 3,
        'parent_id'=> 225
        ],
        [
        'ten'=> 'Xã Bảo Sơn',
        'loai'=> 3,
        'parent_id'=> 225
        ],
        [
        'ten'=> 'Xã Bảo Đài',
        'loai'=> 3,
        'parent_id'=> 225
        ],
        [
        'ten'=> 'Xã Thanh Lâm',
        'loai'=> 3,
        'parent_id'=> 225
        ],
        [
        'ten'=> 'Xã Tiên Nha',
        'loai'=> 3,
        'parent_id'=> 225
        ],
        [
        'ten'=> 'Xã Trường Giang',
        'loai'=> 3,
        'parent_id'=> 225
        ],
        [
        'ten'=> 'Thị trấn Phương Sơn',
        'loai'=> 3,
        'parent_id'=> 225
        ],
        [
        'ten'=> 'Xã Chu Điện',
        'loai'=> 3,
        'parent_id'=> 225
        ],
        [
        'ten'=> 'Xã Cương Sơn',
        'loai'=> 3,
        'parent_id'=> 225
        ],
        [
        'ten'=> 'Xã Nghĩa Phương',
        'loai'=> 3,
        'parent_id'=> 225
        ],
        [
        'ten'=> 'Xã Vô Tranh',
        'loai'=> 3,
        'parent_id'=> 225
        ],
        [
        'ten'=> 'Xã Bình Sơn',
        'loai'=> 3,
        'parent_id'=> 225
        ],
        [
        'ten'=> 'Xã Lan Mẫu',
        'loai'=> 3,
        'parent_id'=> 225
        ],
        [
        'ten'=> 'Xã Yên Sơn',
        'loai'=> 3,
        'parent_id'=> 225
        ],
        [
        'ten'=> 'Xã Khám Lạng',
        'loai'=> 3,
        'parent_id'=> 225
        ],
        [
        'ten'=> 'Xã Huyền Sơn',
        'loai'=> 3,
        'parent_id'=> 225
        ],
        [
        'ten'=> 'Xã Trường Sơn',
        'loai'=> 3,
        'parent_id'=> 225
        ],
        [
        'ten'=> 'Xã Lục Sơn',
        'loai'=> 3,
        'parent_id'=> 225
        ],
        [
        'ten'=> 'Xã Bắc Lũng',
        'loai'=> 3,
        'parent_id'=> 225
        ],
        [
        'ten'=> 'Xã Vũ Xá',
        'loai'=> 3,
        'parent_id'=> 225
        ],
        [
        'ten'=> 'Xã Cẩm Lý',
        'loai'=> 3,
        'parent_id'=> 225
        ],
        [
        'ten'=> 'Xã Đan Hội',
        'loai'=> 3,
        'parent_id'=> 225
        ],
        [
        'ten'=> 'Thị trấn Chũ',
        'loai'=> 3,
        'parent_id'=> 226
        ],
        [
        'ten'=> 'Xã Cấm Sơn',
        'loai'=> 3,
        'parent_id'=> 226
        ],
        [
        'ten'=> 'Xã Tân Sơn',
        'loai'=> 3,
        'parent_id'=> 226
        ],
        [
        'ten'=> 'Xã Phong Minh',
        'loai'=> 3,
        'parent_id'=> 226
        ],
        [
        'ten'=> 'Xã Phong Vân',
        'loai'=> 3,
        'parent_id'=> 226
        ],
        [
        'ten'=> 'Xã Xa Lý',
        'loai'=> 3,
        'parent_id'=> 226
        ],
        [
        'ten'=> 'Xã Hộ Đáp',
        'loai'=> 3,
        'parent_id'=> 226
        ],
        [
        'ten'=> 'Xã Sơn Hải',
        'loai'=> 3,
        'parent_id'=> 226
        ],
        [
        'ten'=> 'Xã Thanh Hải',
        'loai'=> 3,
        'parent_id'=> 226
        ],
        [
        'ten'=> 'Xã Kiên Lao',
        'loai'=> 3,
        'parent_id'=> 226
        ],
        [
        'ten'=> 'Xã Biên Sơn',
        'loai'=> 3,
        'parent_id'=> 226
        ],
        [
        'ten'=> 'Xã Kiên Thành',
        'loai'=> 3,
        'parent_id'=> 226
        ],
        [
        'ten'=> 'Xã Hồng Giang',
        'loai'=> 3,
        'parent_id'=> 226
        ],
        [
        'ten'=> 'Xã Kim Sơn',
        'loai'=> 3,
        'parent_id'=> 226
        ],
        [
        'ten'=> 'Xã Tân Hoa',
        'loai'=> 3,
        'parent_id'=> 226
        ],
        [
        'ten'=> 'Xã Giáp Sơn',
        'loai'=> 3,
        'parent_id'=> 226
        ],
        [
        'ten'=> 'Xã Biển Động',
        'loai'=> 3,
        'parent_id'=> 226
        ],
        [
        'ten'=> 'Xã Quý Sơn',
        'loai'=> 3,
        'parent_id'=> 226
        ],
        [
        'ten'=> 'Xã Trù Hựu',
        'loai'=> 3,
        'parent_id'=> 226
        ],
        [
        'ten'=> 'Xã Phì Điền',
        'loai'=> 3,
        'parent_id'=> 226
        ],
        [
        'ten'=> 'Xã Tân Quang',
        'loai'=> 3,
        'parent_id'=> 226
        ],
        [
        'ten'=> 'Xã Đồng Cốc',
        'loai'=> 3,
        'parent_id'=> 226
        ],
        [
        'ten'=> 'Xã Tân Lập',
        'loai'=> 3,
        'parent_id'=> 226
        ],
        [
        'ten'=> 'Xã Phú Nhuận',
        'loai'=> 3,
        'parent_id'=> 226
        ],
        [
        'ten'=> 'Xã Mỹ An',
        'loai'=> 3,
        'parent_id'=> 226
        ],
        [
        'ten'=> 'Xã Nam Dương',
        'loai'=> 3,
        'parent_id'=> 226
        ],
        [
        'ten'=> 'Xã Tân Mộc',
        'loai'=> 3,
        'parent_id'=> 226
        ],
        [
        'ten'=> 'Xã Đèo Gia',
        'loai'=> 3,
        'parent_id'=> 226
        ],
        [
        'ten'=> 'Xã Phượng Sơn',
        'loai'=> 3,
        'parent_id'=> 226
        ],
        [
        'ten'=> 'Thị trấn An Châu',
        'loai'=> 3,
        'parent_id'=> 227
        ],
        [
        'ten'=> 'Thị trấn Tây Yên Tử',
        'loai'=> 3,
        'parent_id'=> 227
        ],
        [
        'ten'=> 'Xã Vân Sơn',
        'loai'=> 3,
        'parent_id'=> 227
        ],
        [
        'ten'=> 'Xã Hữu Sản',
        'loai'=> 3,
        'parent_id'=> 227
        ],
        [
        'ten'=> 'Xã Đại Sơn',
        'loai'=> 3,
        'parent_id'=> 227
        ],
        [
        'ten'=> 'Xã Phúc Sơn',
        'loai'=> 3,
        'parent_id'=> 227
        ],
        [
        'ten'=> 'Xã Giáo Liêm',
        'loai'=> 3,
        'parent_id'=> 227
        ],
        [
        'ten'=> 'Xã Cẩm Đàn',
        'loai'=> 3,
        'parent_id'=> 227
        ],
        [
        'ten'=> 'Xã An Lạc',
        'loai'=> 3,
        'parent_id'=> 227
        ],
        [
        'ten'=> 'Xã Vĩnh An',
        'loai'=> 3,
        'parent_id'=> 227
        ],
        [
        'ten'=> 'Xã Yên Định',
        'loai'=> 3,
        'parent_id'=> 227
        ],
        [
        'ten'=> 'Xã Lệ Viễn',
        'loai'=> 3,
        'parent_id'=> 227
        ],
        [
        'ten'=> 'Xã An Bá',
        'loai'=> 3,
        'parent_id'=> 227
        ],
        [
        'ten'=> 'Xã Tuấn Đạo',
        'loai'=> 3,
        'parent_id'=> 227
        ],
        [
        'ten'=> 'Xã Dương Hưu',
        'loai'=> 3,
        'parent_id'=> 227
        ],
        [
        'ten'=> 'Xã Long Sơn',
        'loai'=> 3,
        'parent_id'=> 227
        ],
        [
        'ten'=> 'Xã Thanh Luận',
        'loai'=> 3,
        'parent_id'=> 227
        ],
        [
        'ten'=> 'Thị trấn Nham Biền',
        'loai'=> 3,
        'parent_id'=> 228
        ],
        [
        'ten'=> 'Thị trấn Tân An',
        'loai'=> 3,
        'parent_id'=> 228
        ],
        [
        'ten'=> 'Xã Lão Hộ',
        'loai'=> 3,
        'parent_id'=> 228
        ],
        [
        'ten'=> 'Xã Hương Gián',
        'loai'=> 3,
        'parent_id'=> 228
        ],
        [
        'ten'=> 'Xã Quỳnh Sơn',
        'loai'=> 3,
        'parent_id'=> 228
        ],
        [
        'ten'=> 'Xã Nội Hoàng',
        'loai'=> 3,
        'parent_id'=> 228
        ],
        [
        'ten'=> 'Xã Tiền Phong',
        'loai'=> 3,
        'parent_id'=> 228
        ],
        [
        'ten'=> 'Xã Xuân Phú',
        'loai'=> 3,
        'parent_id'=> 228
        ],
        [
        'ten'=> 'Xã Tân Liễu',
        'loai'=> 3,
        'parent_id'=> 228
        ],
        [
        'ten'=> 'Xã Trí Yên',
        'loai'=> 3,
        'parent_id'=> 228
        ],
        [
        'ten'=> 'Xã Lãng Sơn',
        'loai'=> 3,
        'parent_id'=> 228
        ],
        [
        'ten'=> 'Xã Yên Lư',
        'loai'=> 3,
        'parent_id'=> 228
        ],
        [
        'ten'=> 'Xã Tiến Dũng',
        'loai'=> 3,
        'parent_id'=> 228
        ],
        [
        'ten'=> 'Xã Đức Giang',
        'loai'=> 3,
        'parent_id'=> 228
        ],
        [
        'ten'=> 'Xã Cảnh Thụy',
        'loai'=> 3,
        'parent_id'=> 228
        ],
        [
        'ten'=> 'Xã Tư Mại',
        'loai'=> 3,
        'parent_id'=> 228
        ],
        [
        'ten'=> 'Xã Đồng Việt',
        'loai'=> 3,
        'parent_id'=> 228
        ],
        [
        'ten'=> 'Xã Đồng Phúc',
        'loai'=> 3,
        'parent_id'=> 228
        ],
        [
        'ten'=> 'Xã Thượng Lan',
        'loai'=> 3,
        'parent_id'=> 229
        ],
        [
        'ten'=> 'Xã Việt Tiến',
        'loai'=> 3,
        'parent_id'=> 229
        ],
        [
        'ten'=> 'Xã Nghĩa Trung',
        'loai'=> 3,
        'parent_id'=> 229
        ],
        [
        'ten'=> 'Xã Minh Đức',
        'loai'=> 3,
        'parent_id'=> 229
        ],
        [
        'ten'=> 'Xã Hương Mai',
        'loai'=> 3,
        'parent_id'=> 229
        ],
        [
        'ten'=> 'Xã Tự Lạn',
        'loai'=> 3,
        'parent_id'=> 229
        ],
        [
        'ten'=> 'Thị trấn Bích Động',
        'loai'=> 3,
        'parent_id'=> 229
        ],
        [
        'ten'=> 'Xã Trung Sơn',
        'loai'=> 3,
        'parent_id'=> 229
        ],
        [
        'ten'=> 'Xã Hồng Thái',
        'loai'=> 3,
        'parent_id'=> 229
        ],
        [
        'ten'=> 'Xã Tiên Sơn',
        'loai'=> 3,
        'parent_id'=> 229
        ],
        [
        'ten'=> 'Xã Tăng Tiến',
        'loai'=> 3,
        'parent_id'=> 229
        ],
        [
        'ten'=> 'Xã Quảng Minh',
        'loai'=> 3,
        'parent_id'=> 229
        ],
        [
        'ten'=> 'Thị trấn Nếnh',
        'loai'=> 3,
        'parent_id'=> 229
        ],
        [
        'ten'=> 'Xã Ninh Sơn',
        'loai'=> 3,
        'parent_id'=> 229
        ],
        [
        'ten'=> 'Xã Vân Trung',
        'loai'=> 3,
        'parent_id'=> 229
        ],
        [
        'ten'=> 'Xã Vân Hà',
        'loai'=> 3,
        'parent_id'=> 229
        ],
        [
        'ten'=> 'Xã Quang Châu',
        'loai'=> 3,
        'parent_id'=> 229
        ],
        [
        'ten'=> 'Xã Đồng Tân',
        'loai'=> 3,
        'parent_id'=> 230
        ],
        [
        'ten'=> 'Xã Thanh Vân',
        'loai'=> 3,
        'parent_id'=> 230
        ],
        [
        'ten'=> 'Xã Hoàng Lương',
        'loai'=> 3,
        'parent_id'=> 230
        ],
        [
        'ten'=> 'Xã Hoàng Vân',
        'loai'=> 3,
        'parent_id'=> 230
        ],
        [
        'ten'=> 'Xã Hoàng Thanh',
        'loai'=> 3,
        'parent_id'=> 230
        ],
        [
        'ten'=> 'Xã Hoàng An',
        'loai'=> 3,
        'parent_id'=> 230
        ],
        [
        'ten'=> 'Xã Ngọc Sơn',
        'loai'=> 3,
        'parent_id'=> 230
        ],
        [
        'ten'=> 'Xã Thái Sơn',
        'loai'=> 3,
        'parent_id'=> 230
        ],
        [
        'ten'=> 'Xã Hòa Sơn',
        'loai'=> 3,
        'parent_id'=> 230
        ],
        [
        'ten'=> 'Thị trấn Thắng',
        'loai'=> 3,
        'parent_id'=> 230
        ],
        [
        'ten'=> 'Xã Quang Minh',
        'loai'=> 3,
        'parent_id'=> 230
        ],
        [
        'ten'=> 'Xã Lương Phong',
        'loai'=> 3,
        'parent_id'=> 230
        ],
        [
        'ten'=> 'Xã Hùng Sơn',
        'loai'=> 3,
        'parent_id'=> 230
        ],
        [
        'ten'=> 'Xã Đại Thành',
        'loai'=> 3,
        'parent_id'=> 230
        ],
        [
        'ten'=> 'Xã Thường Thắng',
        'loai'=> 3,
        'parent_id'=> 230
        ],
        [
        'ten'=> 'Xã Hợp Thịnh',
        'loai'=> 3,
        'parent_id'=> 230
        ],
        [
        'ten'=> 'Xã Danh Thắng',
        'loai'=> 3,
        'parent_id'=> 230
        ],
        [
        'ten'=> 'Xã Mai Trung',
        'loai'=> 3,
        'parent_id'=> 230
        ],
        [
        'ten'=> 'Xã Đoan Bái',
        'loai'=> 3,
        'parent_id'=> 230
        ],
        [
        'ten'=> 'Thị trấn Bắc Lý',
        'loai'=> 3,
        'parent_id'=> 230
        ],
        [
        'ten'=> 'Xã Xuân Cẩm',
        'loai'=> 3,
        'parent_id'=> 230
        ],
        [
        'ten'=> 'Xã Hương Lâm',
        'loai'=> 3,
        'parent_id'=> 230
        ],
        [
        'ten'=> 'Xã Đông Lỗ',
        'loai'=> 3,
        'parent_id'=> 230
        ],
        [
        'ten'=> 'Xã Châu Minh',
        'loai'=> 3,
        'parent_id'=> 230
        ],
        [
        'ten'=> 'Xã Mai Đình',
        'loai'=> 3,
        'parent_id'=> 230
        ],
        [
        'ten'=> 'Phường Dữu Lâu',
        'loai'=> 3,
        'parent_id'=> 231
        ],
        [
        'ten'=> 'Phường Vân Cơ',
        'loai'=> 3,
        'parent_id'=> 231
        ],
        [
        'ten'=> 'Phường Nông Trang',
        'loai'=> 3,
        'parent_id'=> 231
        ],
        [
        'ten'=> 'Phường Tân Dân',
        'loai'=> 3,
        'parent_id'=> 231
        ],
        [
        'ten'=> 'Phường Gia Cẩm',
        'loai'=> 3,
        'parent_id'=> 231
        ],
        [
        'ten'=> 'Phường Tiên Cát',
        'loai'=> 3,
        'parent_id'=> 231
        ],
        [
        'ten'=> 'Phường Thọ Sơn',
        'loai'=> 3,
        'parent_id'=> 231
        ],
        [
        'ten'=> 'Phường Thanh Miếu',
        'loai'=> 3,
        'parent_id'=> 231
        ],
        [
        'ten'=> 'Phường Bạch Hạc',
        'loai'=> 3,
        'parent_id'=> 231
        ],
        [
        'ten'=> 'Phường Bến Gót',
        'loai'=> 3,
        'parent_id'=> 231
        ],
        [
        'ten'=> 'Phường Vân Phú',
        'loai'=> 3,
        'parent_id'=> 231
        ],
        [
        'ten'=> 'Xã Phượng Lâu',
        'loai'=> 3,
        'parent_id'=> 231
        ],
        [
        'ten'=> 'Xã Thụy Vân',
        'loai'=> 3,
        'parent_id'=> 231
        ],
        [
        'ten'=> 'Phường Minh Phương',
        'loai'=> 3,
        'parent_id'=> 231
        ],
        [
        'ten'=> 'Xã Trưng Vương',
        'loai'=> 3,
        'parent_id'=> 231
        ],
        [
        'ten'=> 'Phường Minh Nông',
        'loai'=> 3,
        'parent_id'=> 231
        ],
        [
        'ten'=> 'Xã Sông Lô',
        'loai'=> 3,
        'parent_id'=> 231
        ],
        [
        'ten'=> 'Xã Kim Đức',
        'loai'=> 3,
        'parent_id'=> 231
        ],
        [
        'ten'=> 'Xã Hùng Lô',
        'loai'=> 3,
        'parent_id'=> 231
        ],
        [
        'ten'=> 'Xã Hy Cương',
        'loai'=> 3,
        'parent_id'=> 231
        ],
        [
        'ten'=> 'Xã Chu Hóa',
        'loai'=> 3,
        'parent_id'=> 231
        ],
        [
        'ten'=> 'Xã Thanh Đình',
        'loai'=> 3,
        'parent_id'=> 231
        ],
        [
        'ten'=> 'Phường Hùng Vương',
        'loai'=> 3,
        'parent_id'=> 232
        ],
        [
        'ten'=> 'Phường Phong Châu',
        'loai'=> 3,
        'parent_id'=> 232
        ],
        [
        'ten'=> 'Phường Âu Cơ',
        'loai'=> 3,
        'parent_id'=> 232
        ],
        [
        'ten'=> 'Xã Hà Lộc',
        'loai'=> 3,
        'parent_id'=> 232
        ],
        [
        'ten'=> 'Xã Phú Hộ',
        'loai'=> 3,
        'parent_id'=> 232
        ],
        [
        'ten'=> 'Xã Văn Lung',
        'loai'=> 3,
        'parent_id'=> 232
        ],
        [
        'ten'=> 'Xã Thanh Minh',
        'loai'=> 3,
        'parent_id'=> 232
        ],
        [
        'ten'=> 'Xã Hà Thạch',
        'loai'=> 3,
        'parent_id'=> 232
        ],
        [
        'ten'=> 'Phường Thanh Vinh',
        'loai'=> 3,
        'parent_id'=> 232
        ],
        [
        'ten'=> 'Thị trấn Đoan Hùng',
        'loai'=> 3,
        'parent_id'=> 233
        ],
        [
        'ten'=> 'Xã Hùng Xuyên',
        'loai'=> 3,
        'parent_id'=> 233
        ],
        [
        'ten'=> 'Xã Bằng Luân',
        'loai'=> 3,
        'parent_id'=> 233
        ],
        [
        'ten'=> 'Xã Vân Du',
        'loai'=> 3,
        'parent_id'=> 233
        ],
        [
        'ten'=> 'Xã Phú Lâm',
        'loai'=> 3,
        'parent_id'=> 233
        ],
        [
        'ten'=> 'Xã Minh Lương',
        'loai'=> 3,
        'parent_id'=> 233
        ],
        [
        'ten'=> 'Xã Bằng Doãn',
        'loai'=> 3,
        'parent_id'=> 233
        ],
        [
        'ten'=> 'Xã Chí Đám',
        'loai'=> 3,
        'parent_id'=> 233
        ],
        [
        'ten'=> 'Xã Phúc Lai',
        'loai'=> 3,
        'parent_id'=> 233
        ],
        [
        'ten'=> 'Xã Ngọc Quan',
        'loai'=> 3,
        'parent_id'=> 233
        ],
        [
        'ten'=> 'Xã Hợp Nhất',
        'loai'=> 3,
        'parent_id'=> 233
        ],
        [
        'ten'=> 'Xã Sóc Đăng',
        'loai'=> 3,
        'parent_id'=> 233
        ],
        [
        'ten'=> 'Xã Tây Cốc',
        'loai'=> 3,
        'parent_id'=> 233
        ],
        [
        'ten'=> 'Xã Yên Kiện',
        'loai'=> 3,
        'parent_id'=> 233
        ],
        [
        'ten'=> 'Xã Hùng Long',
        'loai'=> 3,
        'parent_id'=> 233
        ],
        [
        'ten'=> 'Xã Vụ Quang',
        'loai'=> 3,
        'parent_id'=> 233
        ],
        [
        'ten'=> 'Xã Vân Đồn',
        'loai'=> 3,
        'parent_id'=> 233
        ],
        [
        'ten'=> 'Xã Tiêu Sơn',
        'loai'=> 3,
        'parent_id'=> 233
        ],
        [
        'ten'=> 'Xã Minh Tiến',
        'loai'=> 3,
        'parent_id'=> 233
        ],
        [
        'ten'=> 'Xã Minh Phú',
        'loai'=> 3,
        'parent_id'=> 233
        ],
        [
        'ten'=> 'Xã Chân Mộng',
        'loai'=> 3,
        'parent_id'=> 233
        ],
        [
        'ten'=> 'Xã Ca Đình',
        'loai'=> 3,
        'parent_id'=> 233
        ],
        [
        'ten'=> 'Thị trấn Hạ Hoà',
        'loai'=> 3,
        'parent_id'=> 234
        ],
        [
        'ten'=> 'Xã Đại Phạm',
        'loai'=> 3,
        'parent_id'=> 234
        ],
        [
        'ten'=> 'Xã Đan Thượng',
        'loai'=> 3,
        'parent_id'=> 234
        ],
        [
        'ten'=> 'Xã Hà Lương',
        'loai'=> 3,
        'parent_id'=> 234
        ],
        [
        'ten'=> 'Xã Tứ Hiệp',
        'loai'=> 3,
        'parent_id'=> 234
        ],
        [
        'ten'=> 'Xã Hiền Lương',
        'loai'=> 3,
        'parent_id'=> 234
        ],
        [
        'ten'=> 'Xã Phương Viên',
        'loai'=> 3,
        'parent_id'=> 234
        ],
        [
        'ten'=> 'Xã Gia Điền',
        'loai'=> 3,
        'parent_id'=> 234
        ],
        [
        'ten'=> 'Xã Ấm Hạ',
        'loai'=> 3,
        'parent_id'=> 234
        ],
        [
        'ten'=> 'Xã Hương Xạ',
        'loai'=> 3,
        'parent_id'=> 234
        ],
        [
        'ten'=> 'Xã Xuân Áng',
        'loai'=> 3,
        'parent_id'=> 234
        ],
        [
        'ten'=> 'Xã Yên Kỳ',
        'loai'=> 3,
        'parent_id'=> 234
        ],
        [
        'ten'=> 'Xã Minh Hạc',
        'loai'=> 3,
        'parent_id'=> 234
        ],
        [
        'ten'=> 'Xã Lang Sơn',
        'loai'=> 3,
        'parent_id'=> 234
        ],
        [
        'ten'=> 'Xã Bằng Giã',
        'loai'=> 3,
        'parent_id'=> 234
        ],
        [
        'ten'=> 'Xã Yên Luật',
        'loai'=> 3,
        'parent_id'=> 234
        ],
        [
        'ten'=> 'Xã Vô Tranh',
        'loai'=> 3,
        'parent_id'=> 234
        ],
        [
        'ten'=> 'Xã Văn Lang',
        'loai'=> 3,
        'parent_id'=> 234
        ],
        [
        'ten'=> 'Xã Minh Côi',
        'loai'=> 3,
        'parent_id'=> 234
        ],
        [
        'ten'=> 'Xã Vĩnh Chân',
        'loai'=> 3,
        'parent_id'=> 234
        ],
        [
        'ten'=> 'Thị trấn Thanh Ba',
        'loai'=> 3,
        'parent_id'=> 235
        ],
        [
        'ten'=> 'Xã Vân Lĩnh',
        'loai'=> 3,
        'parent_id'=> 235
        ],
        [
        'ten'=> 'Xã Đông Lĩnh',
        'loai'=> 3,
        'parent_id'=> 235
        ],
        [
        'ten'=> 'Xã Đại An',
        'loai'=> 3,
        'parent_id'=> 235
        ],
        [
        'ten'=> 'Xã Hanh Cù',
        'loai'=> 3,
        'parent_id'=> 235
        ],
        [
        'ten'=> 'Xã Đồng Xuân',
        'loai'=> 3,
        'parent_id'=> 235
        ],
        [
        'ten'=> 'Xã Quảng Yên',
        'loai'=> 3,
        'parent_id'=> 235
        ],
        [
        'ten'=> 'Xã Ninh Dân',
        'loai'=> 3,
        'parent_id'=> 235
        ],
        [
        'ten'=> 'Xã Võ Lao',
        'loai'=> 3,
        'parent_id'=> 235
        ],
        [
        'ten'=> 'Xã Khải Xuân',
        'loai'=> 3,
        'parent_id'=> 235
        ],
        [
        'ten'=> 'Xã Mạn Lạn',
        'loai'=> 3,
        'parent_id'=> 235
        ],
        [
        'ten'=> 'Xã Hoàng Cương',
        'loai'=> 3,
        'parent_id'=> 235
        ],
        [
        'ten'=> 'Xã Chí Tiên',
        'loai'=> 3,
        'parent_id'=> 235
        ],
        [
        'ten'=> 'Xã Đông Thành',
        'loai'=> 3,
        'parent_id'=> 235
        ],
        [
        'ten'=> 'Xã Sơn Cương',
        'loai'=> 3,
        'parent_id'=> 235
        ],
        [
        'ten'=> 'Xã Thanh Hà',
        'loai'=> 3,
        'parent_id'=> 235
        ],
        [
        'ten'=> 'Xã Đỗ Sơn',
        'loai'=> 3,
        'parent_id'=> 235
        ],
        [
        'ten'=> 'Xã Đỗ Xuyên',
        'loai'=> 3,
        'parent_id'=> 235
        ],
        [
        'ten'=> 'Xã Lương Lỗ',
        'loai'=> 3,
        'parent_id'=> 235
        ],
        [
        'ten'=> 'Thị trấn Phong Châu',
        'loai'=> 3,
        'parent_id'=> 236
        ],
        [
        'ten'=> 'Xã Phú Mỹ',
        'loai'=> 3,
        'parent_id'=> 236
        ],
        [
        'ten'=> 'Xã Lệ Mỹ',
        'loai'=> 3,
        'parent_id'=> 236
        ],
        [
        'ten'=> 'Xã Liên Hoa',
        'loai'=> 3,
        'parent_id'=> 236
        ],
        [
        'ten'=> 'Xã Trạm Thản',
        'loai'=> 3,
        'parent_id'=> 236
        ],
        [
        'ten'=> 'Xã Trị Quận',
        'loai'=> 3,
        'parent_id'=> 236
        ],
        [
        'ten'=> 'Xã Trung Giáp',
        'loai'=> 3,
        'parent_id'=> 236
        ],
        [
        'ten'=> 'Xã Tiên Phú',
        'loai'=> 3,
        'parent_id'=> 236
        ],
        [
        'ten'=> 'Xã Hạ Giáp',
        'loai'=> 3,
        'parent_id'=> 236
        ],
        [
        'ten'=> 'Xã Bảo Thanh',
        'loai'=> 3,
        'parent_id'=> 236
        ],
        [
        'ten'=> 'Xã Phú Lộc',
        'loai'=> 3,
        'parent_id'=> 236
        ],
        [
        'ten'=> 'Xã Gia Thanh',
        'loai'=> 3,
        'parent_id'=> 236
        ],
        [
        'ten'=> 'Xã Tiên Du',
        'loai'=> 3,
        'parent_id'=> 236
        ],
        [
        'ten'=> 'Xã Phú Nham',
        'loai'=> 3,
        'parent_id'=> 236
        ],
        [
        'ten'=> 'Xã An Đạo',
        'loai'=> 3,
        'parent_id'=> 236
        ],
        [
        'ten'=> 'Xã Bình Phú',
        'loai'=> 3,
        'parent_id'=> 236
        ],
        [
        'ten'=> 'Xã Phù Ninh',
        'loai'=> 3,
        'parent_id'=> 236
        ],
        [
        'ten'=> 'Thị trấn Yên Lập',
        'loai'=> 3,
        'parent_id'=> 237
        ],
        [
        'ten'=> 'Xã Mỹ Lung',
        'loai'=> 3,
        'parent_id'=> 237
        ],
        [
        'ten'=> 'Xã Mỹ Lương',
        'loai'=> 3,
        'parent_id'=> 237
        ],
        [
        'ten'=> 'Xã Lương Sơn',
        'loai'=> 3,
        'parent_id'=> 237
        ],
        [
        'ten'=> 'Xã Xuân An',
        'loai'=> 3,
        'parent_id'=> 237
        ],
        [
        'ten'=> 'Xã Xuân Viên',
        'loai'=> 3,
        'parent_id'=> 237
        ],
        [
        'ten'=> 'Xã Xuân Thủy',
        'loai'=> 3,
        'parent_id'=> 237
        ],
        [
        'ten'=> 'Xã Trung Sơn',
        'loai'=> 3,
        'parent_id'=> 237
        ],
        [
        'ten'=> 'Xã Hưng Long',
        'loai'=> 3,
        'parent_id'=> 237
        ],
        [
        'ten'=> 'Xã Nga Hoàng',
        'loai'=> 3,
        'parent_id'=> 237
        ],
        [
        'ten'=> 'Xã Đồng Lạc',
        'loai'=> 3,
        'parent_id'=> 237
        ],
        [
        'ten'=> 'Xã Thượng Long',
        'loai'=> 3,
        'parent_id'=> 237
        ],
        [
        'ten'=> 'Xã Đồng Thịnh',
        'loai'=> 3,
        'parent_id'=> 237
        ],
        [
        'ten'=> 'Xã Phúc Khánh',
        'loai'=> 3,
        'parent_id'=> 237
        ],
        [
        'ten'=> 'Xã Minh Hòa',
        'loai'=> 3,
        'parent_id'=> 237
        ],
        [
        'ten'=> 'Xã Ngọc Lập',
        'loai'=> 3,
        'parent_id'=> 237
        ],
        [
        'ten'=> 'Xã Ngọc Đồng',
        'loai'=> 3,
        'parent_id'=> 237
        ],
        [
        'ten'=> 'Thị trấn Cẩm Khê',
        'loai'=> 3,
        'parent_id'=> 238
        ],
        [
        'ten'=> 'Xã Tiên Lương',
        'loai'=> 3,
        'parent_id'=> 238
        ],
        [
        'ten'=> 'Xã Tuy Lộc',
        'loai'=> 3,
        'parent_id'=> 238
        ],
        [
        'ten'=> 'Xã Ngô Xá',
        'loai'=> 3,
        'parent_id'=> 238
        ],
        [
        'ten'=> 'Xã Minh Tân',
        'loai'=> 3,
        'parent_id'=> 238
        ],
        [
        'ten'=> 'Xã Phượng Vĩ',
        'loai'=> 3,
        'parent_id'=> 238
        ],
        [
        'ten'=> 'Xã Thụy Liễu',
        'loai'=> 3,
        'parent_id'=> 238
        ],
        [
        'ten'=> 'Xã Tùng Khê',
        'loai'=> 3,
        'parent_id'=> 238
        ],
        [
        'ten'=> 'Xã Tam Sơn',
        'loai'=> 3,
        'parent_id'=> 238
        ],
        [
        'ten'=> 'Xã Văn Bán',
        'loai'=> 3,
        'parent_id'=> 238
        ],
        [
        'ten'=> 'Xã Cấp Dẫn',
        'loai'=> 3,
        'parent_id'=> 238
        ],
        [
        'ten'=> 'Xã Xương Thịnh',
        'loai'=> 3,
        'parent_id'=> 238
        ],
        [
        'ten'=> 'Xã Phú Khê',
        'loai'=> 3,
        'parent_id'=> 238
        ],
        [
        'ten'=> 'Xã Sơn Tình',
        'loai'=> 3,
        'parent_id'=> 238
        ],
        [
        'ten'=> 'Xã Yên Tập',
        'loai'=> 3,
        'parent_id'=> 238
        ],
        [
        'ten'=> 'Xã Hương Lung',
        'loai'=> 3,
        'parent_id'=> 238
        ],
        [
        'ten'=> 'Xã Tạ Xá',
        'loai'=> 3,
        'parent_id'=> 238
        ],
        [
        'ten'=> 'Xã Phú Lạc',
        'loai'=> 3,
        'parent_id'=> 238
        ],
        [
        'ten'=> 'Xã Chương Xá',
        'loai'=> 3,
        'parent_id'=> 238
        ],
        [
        'ten'=> 'Xã Hùng Việt',
        'loai'=> 3,
        'parent_id'=> 238
        ],
        [
        'ten'=> 'Xã Văn Khúc',
        'loai'=> 3,
        'parent_id'=> 238
        ],
        [
        'ten'=> 'Xã Yên Dưỡng',
        'loai'=> 3,
        'parent_id'=> 238
        ],
        [
        'ten'=> 'Xã Điêu Lương',
        'loai'=> 3,
        'parent_id'=> 238
        ],
        [
        'ten'=> 'Xã Đồng Lương',
        'loai'=> 3,
        'parent_id'=> 238
        ],
        [
        'ten'=> 'Thị trấn Hưng Hoá',
        'loai'=> 3,
        'parent_id'=> 239
        ],
        [
        'ten'=> 'Xã Hiền Quan',
        'loai'=> 3,
        'parent_id'=> 239
        ],
        [
        'ten'=> 'Xã Bắc Sơn',
        'loai'=> 3,
        'parent_id'=> 239
        ],
        [
        'ten'=> 'Xã Thanh Uyên',
        'loai'=> 3,
        'parent_id'=> 239
        ],
        [
        'ten'=> 'Xã Lam Sơn',
        'loai'=> 3,
        'parent_id'=> 239
        ],
        [
        'ten'=> 'Xã Vạn Xuân',
        'loai'=> 3,
        'parent_id'=> 239
        ],
        [
        'ten'=> 'Xã Quang Húc',
        'loai'=> 3,
        'parent_id'=> 239
        ],
        [
        'ten'=> 'Xã Hương Nộn',
        'loai'=> 3,
        'parent_id'=> 239
        ],
        [
        'ten'=> 'Xã Tề Lễ',
        'loai'=> 3,
        'parent_id'=> 239
        ],
        [
        'ten'=> 'Xã Thọ Văn',
        'loai'=> 3,
        'parent_id'=> 239
        ],
        [
        'ten'=> 'Xã Dị Nậu',
        'loai'=> 3,
        'parent_id'=> 239
        ],
        [
        'ten'=> 'Xã Dân Quyền',
        'loai'=> 3,
        'parent_id'=> 239
        ],
        [
        'ten'=> 'Thị trấn Lâm Thao',
        'loai'=> 3,
        'parent_id'=> 240
        ],
        [
        'ten'=> 'Xã Tiên Kiên',
        'loai'=> 3,
        'parent_id'=> 240
        ],
        [
        'ten'=> 'Thị trấn Hùng Sơn',
        'loai'=> 3,
        'parent_id'=> 240
        ],
        [
        'ten'=> 'Xã Xuân Lũng',
        'loai'=> 3,
        'parent_id'=> 240
        ],
        [
        'ten'=> 'Xã Xuân Huy',
        'loai'=> 3,
        'parent_id'=> 240
        ],
        [
        'ten'=> 'Xã Thạch Sơn',
        'loai'=> 3,
        'parent_id'=> 240
        ],
        [
        'ten'=> 'Xã Sơn Vi',
        'loai'=> 3,
        'parent_id'=> 240
        ],
        [
        'ten'=> 'Xã Phùng Nguyên',
        'loai'=> 3,
        'parent_id'=> 240
        ],
        [
        'ten'=> 'Xã Cao Xá',
        'loai'=> 3,
        'parent_id'=> 240
        ],
        [
        'ten'=> 'Xã Vĩnh Lại',
        'loai'=> 3,
        'parent_id'=> 240
        ],
        [
        'ten'=> 'Xã Tứ Xã',
        'loai'=> 3,
        'parent_id'=> 240
        ],
        [
        'ten'=> 'Xã Bản Nguyên',
        'loai'=> 3,
        'parent_id'=> 240
        ],
        [
        'ten'=> 'Thị trấn Thanh Sơn',
        'loai'=> 3,
        'parent_id'=> 241
        ],
        [
        'ten'=> 'Xã Sơn Hùng',
        'loai'=> 3,
        'parent_id'=> 241
        ],
        [
        'ten'=> 'Xã Địch Quả',
        'loai'=> 3,
        'parent_id'=> 241
        ],
        [
        'ten'=> 'Xã Giáp Lai',
        'loai'=> 3,
        'parent_id'=> 241
        ],
        [
        'ten'=> 'Xã Thục Luyện',
        'loai'=> 3,
        'parent_id'=> 241
        ],
        [
        'ten'=> 'Xã Võ Miếu',
        'loai'=> 3,
        'parent_id'=> 241
        ],
        [
        'ten'=> 'Xã Thạch Khoán',
        'loai'=> 3,
        'parent_id'=> 241
        ],
        [
        'ten'=> 'Xã Cự Thắng',
        'loai'=> 3,
        'parent_id'=> 241
        ],
        [
        'ten'=> 'Xã Tất Thắng',
        'loai'=> 3,
        'parent_id'=> 241
        ],
        [
        'ten'=> 'Xã Văn Miếu',
        'loai'=> 3,
        'parent_id'=> 241
        ],
        [
        'ten'=> 'Xã Cự Đồng',
        'loai'=> 3,
        'parent_id'=> 241
        ],
        [
        'ten'=> 'Xã Thắng Sơn',
        'loai'=> 3,
        'parent_id'=> 241
        ],
        [
        'ten'=> 'Xã Tân Minh',
        'loai'=> 3,
        'parent_id'=> 241
        ],
        [
        'ten'=> 'Xã Hương Cần',
        'loai'=> 3,
        'parent_id'=> 241
        ],
        [
        'ten'=> 'Xã Khả Cửu',
        'loai'=> 3,
        'parent_id'=> 241
        ],
        [
        'ten'=> 'Xã Đông Cửu',
        'loai'=> 3,
        'parent_id'=> 241
        ],
        [
        'ten'=> 'Xã Tân Lập',
        'loai'=> 3,
        'parent_id'=> 241
        ],
        [
        'ten'=> 'Xã Yên Lãng',
        'loai'=> 3,
        'parent_id'=> 241
        ],
        [
        'ten'=> 'Xã Yên Lương',
        'loai'=> 3,
        'parent_id'=> 241
        ],
        [
        'ten'=> 'Xã Thượng Cửu',
        'loai'=> 3,
        'parent_id'=> 241
        ],
        [
        'ten'=> 'Xã Lương Nha',
        'loai'=> 3,
        'parent_id'=> 241
        ],
        [
        'ten'=> 'Xã Yên Sơn',
        'loai'=> 3,
        'parent_id'=> 241
        ],
        [
        'ten'=> 'Xã Tinh Nhuệ',
        'loai'=> 3,
        'parent_id'=> 241
        ],
        [
        'ten'=> 'Xã Đào Xá',
        'loai'=> 3,
        'parent_id'=> 242
        ],
        [
        'ten'=> 'Xã Thạch Đồng',
        'loai'=> 3,
        'parent_id'=> 242
        ],
        [
        'ten'=> 'Xã Xuân Lộc',
        'loai'=> 3,
        'parent_id'=> 242
        ],
        [
        'ten'=> 'Xã Tân Phương',
        'loai'=> 3,
        'parent_id'=> 242
        ],
        [
        'ten'=> 'Thị trấn Thanh Thủy',
        'loai'=> 3,
        'parent_id'=> 242
        ],
        [
        'ten'=> 'Xã Sơn Thủy',
        'loai'=> 3,
        'parent_id'=> 242
        ],
        [
        'ten'=> 'Xã Bảo Yên',
        'loai'=> 3,
        'parent_id'=> 242
        ],
        [
        'ten'=> 'Xã Đoan Hạ',
        'loai'=> 3,
        'parent_id'=> 242
        ],
        [
        'ten'=> 'Xã Đồng Trung',
        'loai'=> 3,
        'parent_id'=> 242
        ],
        [
        'ten'=> 'Xã Hoàng Xá',
        'loai'=> 3,
        'parent_id'=> 242
        ],
        [
        'ten'=> 'Xã Tu Vũ',
        'loai'=> 3,
        'parent_id'=> 242
        ],
        [
        'ten'=> 'Xã Thu Cúc',
        'loai'=> 3,
        'parent_id'=> 243
        ],
        [
        'ten'=> 'Xã Thạch Kiệt',
        'loai'=> 3,
        'parent_id'=> 243
        ],
        [
        'ten'=> 'Xã Thu Ngạc',
        'loai'=> 3,
        'parent_id'=> 243
        ],
        [
        'ten'=> 'Xã Kiệt Sơn',
        'loai'=> 3,
        'parent_id'=> 243
        ],
        [
        'ten'=> 'Xã Đồng Sơn',
        'loai'=> 3,
        'parent_id'=> 243
        ],
        [
        'ten'=> 'Xã Lai Đồng',
        'loai'=> 3,
        'parent_id'=> 243
        ],
        [
        'ten'=> 'Xã Tân Phú',
        'loai'=> 3,
        'parent_id'=> 243
        ],
        [
        'ten'=> 'Xã Mỹ Thuận',
        'loai'=> 3,
        'parent_id'=> 243
        ],
        [
        'ten'=> 'Xã Tân Sơn',
        'loai'=> 3,
        'parent_id'=> 243
        ],
        [
        'ten'=> 'Xã Xuân Đài',
        'loai'=> 3,
        'parent_id'=> 243
        ],
        [
        'ten'=> 'Xã Minh Đài',
        'loai'=> 3,
        'parent_id'=> 243
        ],
        [
        'ten'=> 'Xã Văn Luông',
        'loai'=> 3,
        'parent_id'=> 243
        ],
        [
        'ten'=> 'Xã Xuân Sơn',
        'loai'=> 3,
        'parent_id'=> 243
        ],
        [
        'ten'=> 'Xã Long Cốc',
        'loai'=> 3,
        'parent_id'=> 243
        ],
        [
        'ten'=> 'Xã Kim Thượng',
        'loai'=> 3,
        'parent_id'=> 243
        ],
        [
        'ten'=> 'Xã Tam Thanh',
        'loai'=> 3,
        'parent_id'=> 243
        ],
        [
        'ten'=> 'Xã Vinh Tiền',
        'loai'=> 3,
        'parent_id'=> 243
        ],
        [
        'ten'=> 'Phường Tích Sơn',
        'loai'=> 3,
        'parent_id'=> 244
        ],
        [
        'ten'=> 'Phường Liên Bảo',
        'loai'=> 3,
        'parent_id'=> 244
        ],
        [
        'ten'=> 'Phường Hội Hợp',
        'loai'=> 3,
        'parent_id'=> 244
        ],
        [
        'ten'=> 'Phường Đống Đa',
        'loai'=> 3,
        'parent_id'=> 244
        ],
        [
        'ten'=> 'Phường Ngô Quyền',
        'loai'=> 3,
        'parent_id'=> 244
        ],
        [
        'ten'=> 'Phường Đồng Tâm',
        'loai'=> 3,
        'parent_id'=> 244
        ],
        [
        'ten'=> 'Xã Định Trung',
        'loai'=> 3,
        'parent_id'=> 244
        ],
        [
        'ten'=> 'Phường Khai Quang',
        'loai'=> 3,
        'parent_id'=> 244
        ],
        [
        'ten'=> 'Xã Thanh Trù',
        'loai'=> 3,
        'parent_id'=> 244
        ],
        [
        'ten'=> 'Phường Trưng Trắc',
        'loai'=> 3,
        'parent_id'=> 245
        ],
        [
        'ten'=> 'Phường Hùng Vương',
        'loai'=> 3,
        'parent_id'=> 245
        ],
        [
        'ten'=> 'Phường Trưng Nhị',
        'loai'=> 3,
        'parent_id'=> 245
        ],
        [
        'ten'=> 'Phường Phúc Thắng',
        'loai'=> 3,
        'parent_id'=> 245
        ],
        [
        'ten'=> 'Phường Xuân Hoà',
        'loai'=> 3,
        'parent_id'=> 245
        ],
        [
        'ten'=> 'Phường Đồng Xuân',
        'loai'=> 3,
        'parent_id'=> 245
        ],
        [
        'ten'=> 'Xã Ngọc Thanh',
        'loai'=> 3,
        'parent_id'=> 245
        ],
        [
        'ten'=> 'Xã Cao Minh',
        'loai'=> 3,
        'parent_id'=> 245
        ],
        [
        'ten'=> 'Phường Nam Viêm',
        'loai'=> 3,
        'parent_id'=> 245
        ],
        [
        'ten'=> 'Phường Tiền Châu',
        'loai'=> 3,
        'parent_id'=> 245
        ],
        [
        'ten'=> 'Thị trấn Lập Thạch',
        'loai'=> 3,
        'parent_id'=> 246
        ],
        [
        'ten'=> 'Xã Quang Sơn',
        'loai'=> 3,
        'parent_id'=> 246
        ],
        [
        'ten'=> 'Xã Ngọc Mỹ',
        'loai'=> 3,
        'parent_id'=> 246
        ],
        [
        'ten'=> 'Xã Hợp Lý',
        'loai'=> 3,
        'parent_id'=> 246
        ],
        [
        'ten'=> 'Xã Bắc Bình',
        'loai'=> 3,
        'parent_id'=> 246
        ],
        [
        'ten'=> 'Xã Thái Hòa',
        'loai'=> 3,
        'parent_id'=> 246
        ],
        [
        'ten'=> 'Thị trấn Hoa Sơn',
        'loai'=> 3,
        'parent_id'=> 246
        ],
        [
        'ten'=> 'Xã Liễn Sơn',
        'loai'=> 3,
        'parent_id'=> 246
        ],
        [
        'ten'=> 'Xã Xuân Hòa',
        'loai'=> 3,
        'parent_id'=> 246
        ],
        [
        'ten'=> 'Xã Vân Trục',
        'loai'=> 3,
        'parent_id'=> 246
        ],
        [
        'ten'=> 'Xã Liên Hòa',
        'loai'=> 3,
        'parent_id'=> 246
        ],
        [
        'ten'=> 'Xã Tử Du',
        'loai'=> 3,
        'parent_id'=> 246
        ],
        [
        'ten'=> 'Xã Bàn Giản',
        'loai'=> 3,
        'parent_id'=> 246
        ],
        [
        'ten'=> 'Xã Xuân Lôi',
        'loai'=> 3,
        'parent_id'=> 246
        ],
        [
        'ten'=> 'Xã Đồng Ích',
        'loai'=> 3,
        'parent_id'=> 246
        ],
        [
        'ten'=> 'Xã Tiên Lữ',
        'loai'=> 3,
        'parent_id'=> 246
        ],
        [
        'ten'=> 'Xã Văn Quán',
        'loai'=> 3,
        'parent_id'=> 246
        ],
        [
        'ten'=> 'Xã Đình Chu',
        'loai'=> 3,
        'parent_id'=> 246
        ],
        [
        'ten'=> 'Xã Triệu Đề',
        'loai'=> 3,
        'parent_id'=> 246
        ],
        [
        'ten'=> 'Xã Sơn Đông',
        'loai'=> 3,
        'parent_id'=> 246
        ],
        [
        'ten'=> 'Thị trấn Hợp Hòa',
        'loai'=> 3,
        'parent_id'=> 247
        ],
        [
        'ten'=> 'Xã Hoàng Hoa',
        'loai'=> 3,
        'parent_id'=> 247
        ],
        [
        'ten'=> 'Xã Đồng Tĩnh',
        'loai'=> 3,
        'parent_id'=> 247
        ],
        [
        'ten'=> 'Xã Kim Long',
        'loai'=> 3,
        'parent_id'=> 247
        ],
        [
        'ten'=> 'Xã Hướng Đạo',
        'loai'=> 3,
        'parent_id'=> 247
        ],
        [
        'ten'=> 'Xã Đạo Tú',
        'loai'=> 3,
        'parent_id'=> 247
        ],
        [
        'ten'=> 'Xã An Hòa',
        'loai'=> 3,
        'parent_id'=> 247
        ],
        [
        'ten'=> 'Xã Thanh Vân',
        'loai'=> 3,
        'parent_id'=> 247
        ],
        [
        'ten'=> 'Xã Duy Phiên',
        'loai'=> 3,
        'parent_id'=> 247
        ],
        [
        'ten'=> 'Xã Hoàng Đan',
        'loai'=> 3,
        'parent_id'=> 247
        ],
        [
        'ten'=> 'Xã Hoàng Lâu',
        'loai'=> 3,
        'parent_id'=> 247
        ],
        [
        'ten'=> 'Xã Vân Hội',
        'loai'=> 3,
        'parent_id'=> 247
        ],
        [
        'ten'=> 'Xã Hợp Thịnh',
        'loai'=> 3,
        'parent_id'=> 247
        ],
        [
        'ten'=> 'Thị trấn Tam Đảo',
        'loai'=> 3,
        'parent_id'=> 248
        ],
        [
        'ten'=> 'Thị trấn Hợp Châu',
        'loai'=> 3,
        'parent_id'=> 248
        ],
        [
        'ten'=> 'Xã Đạo Trù',
        'loai'=> 3,
        'parent_id'=> 248
        ],
        [
        'ten'=> 'Xã Yên Dương',
        'loai'=> 3,
        'parent_id'=> 248
        ],
        [
        'ten'=> 'Xã Bồ Lý',
        'loai'=> 3,
        'parent_id'=> 248
        ],
        [
        'ten'=> 'Thị trấn Đại Đình',
        'loai'=> 3,
        'parent_id'=> 248
        ],
        [
        'ten'=> 'Xã Tam Quan',
        'loai'=> 3,
        'parent_id'=> 248
        ],
        [
        'ten'=> 'Xã Hồ Sơn',
        'loai'=> 3,
        'parent_id'=> 248
        ],
        [
        'ten'=> 'Xã Minh Quang',
        'loai'=> 3,
        'parent_id'=> 248
        ],
        [
        'ten'=> 'Thị trấn Hương Canh',
        'loai'=> 3,
        'parent_id'=> 249
        ],
        [
        'ten'=> 'Thị trấn Gia Khánh',
        'loai'=> 3,
        'parent_id'=> 249
        ],
        [
        'ten'=> 'Xã Trung Mỹ',
        'loai'=> 3,
        'parent_id'=> 249
        ],
        [
        'ten'=> 'Thị trấn Bá Hiến',
        'loai'=> 3,
        'parent_id'=> 249
        ],
        [
        'ten'=> 'Xã Thiện Kế',
        'loai'=> 3,
        'parent_id'=> 249
        ],
        [
        'ten'=> 'Xã Hương Sơn',
        'loai'=> 3,
        'parent_id'=> 249
        ],
        [
        'ten'=> 'Xã Tam Hợp',
        'loai'=> 3,
        'parent_id'=> 249
        ],
        [
        'ten'=> 'Xã Quất Lưu',
        'loai'=> 3,
        'parent_id'=> 249
        ],
        [
        'ten'=> 'Xã Sơn Lôi',
        'loai'=> 3,
        'parent_id'=> 249
        ],
        [
        'ten'=> 'Thị trấn Đạo Đức',
        'loai'=> 3,
        'parent_id'=> 249
        ],
        [
        'ten'=> 'Xã Tân Phong',
        'loai'=> 3,
        'parent_id'=> 249
        ],
        [
        'ten'=> 'Thị trấn Thanh Lãng',
        'loai'=> 3,
        'parent_id'=> 249
        ],
        [
        'ten'=> 'Xã Phú Xuân',
        'loai'=> 3,
        'parent_id'=> 249
        ],
        [
        'ten'=> 'Thị trấn Yên Lạc',
        'loai'=> 3,
        'parent_id'=> 250
        ],
        [
        'ten'=> 'Xã Đồng Cương',
        'loai'=> 3,
        'parent_id'=> 250
        ],
        [
        'ten'=> 'Xã Đồng Văn',
        'loai'=> 3,
        'parent_id'=> 250
        ],
        [
        'ten'=> 'Xã Bình Định',
        'loai'=> 3,
        'parent_id'=> 250
        ],
        [
        'ten'=> 'Xã Trung Nguyên',
        'loai'=> 3,
        'parent_id'=> 250
        ],
        [
        'ten'=> 'Xã Tề Lỗ',
        'loai'=> 3,
        'parent_id'=> 250
        ],
        [
        'ten'=> 'Xã Tam Hồng',
        'loai'=> 3,
        'parent_id'=> 250
        ],
        [
        'ten'=> 'Xã Yên Đồng',
        'loai'=> 3,
        'parent_id'=> 250
        ],
        [
        'ten'=> 'Xã Văn Tiến',
        'loai'=> 3,
        'parent_id'=> 250
        ],
        [
        'ten'=> 'Xã Nguyệt Đức',
        'loai'=> 3,
        'parent_id'=> 250
        ],
        [
        'ten'=> 'Xã Yên Phương',
        'loai'=> 3,
        'parent_id'=> 250
        ],
        [
        'ten'=> 'Xã Hồng Phương',
        'loai'=> 3,
        'parent_id'=> 250
        ],
        [
        'ten'=> 'Xã Trung Kiên',
        'loai'=> 3,
        'parent_id'=> 250
        ],
        [
        'ten'=> 'Xã Liên Châu',
        'loai'=> 3,
        'parent_id'=> 250
        ],
        [
        'ten'=> 'Xã Đại Tự',
        'loai'=> 3,
        'parent_id'=> 250
        ],
        [
        'ten'=> 'Xã Hồng Châu',
        'loai'=> 3,
        'parent_id'=> 250
        ],
        [
        'ten'=> 'Xã Trung Hà',
        'loai'=> 3,
        'parent_id'=> 250
        ],
        [
        'ten'=> 'Thị trấn Vĩnh Tường',
        'loai'=> 3,
        'parent_id'=> 251
        ],
        [
        'ten'=> 'Xã Kim Xá',
        'loai'=> 3,
        'parent_id'=> 251
        ],
        [
        'ten'=> 'Xã Yên Bình',
        'loai'=> 3,
        'parent_id'=> 251
        ],
        [
        'ten'=> 'Xã Chấn Hưng',
        'loai'=> 3,
        'parent_id'=> 251
        ],
        [
        'ten'=> 'Xã Nghĩa Hưng',
        'loai'=> 3,
        'parent_id'=> 251
        ],
        [
        'ten'=> 'Xã Yên Lập',
        'loai'=> 3,
        'parent_id'=> 251
        ],
        [
        'ten'=> 'Xã Việt Xuân',
        'loai'=> 3,
        'parent_id'=> 251
        ],
        [
        'ten'=> 'Xã Bồ Sao',
        'loai'=> 3,
        'parent_id'=> 251
        ],
        [
        'ten'=> 'Xã Đại Đồng',
        'loai'=> 3,
        'parent_id'=> 251
        ],
        [
        'ten'=> 'Xã Tân Tiến',
        'loai'=> 3,
        'parent_id'=> 251
        ],
        [
        'ten'=> 'Xã Lũng Hoà',
        'loai'=> 3,
        'parent_id'=> 251
        ],
        [
        'ten'=> 'Xã Cao Đại',
        'loai'=> 3,
        'parent_id'=> 251
        ],
        [
        'ten'=> 'Thị Trấn Thổ Tang',
        'loai'=> 3,
        'parent_id'=> 251
        ],
        [
        'ten'=> 'Xã Vĩnh Sơn',
        'loai'=> 3,
        'parent_id'=> 251
        ],
        [
        'ten'=> 'Xã Bình Dương',
        'loai'=> 3,
        'parent_id'=> 251
        ],
        [
        'ten'=> 'Xã Tân Phú',
        'loai'=> 3,
        'parent_id'=> 251
        ],
        [
        'ten'=> 'Xã Thượng Trưng',
        'loai'=> 3,
        'parent_id'=> 251
        ],
        [
        'ten'=> 'Xã Vũ Di',
        'loai'=> 3,
        'parent_id'=> 251
        ],
        [
        'ten'=> 'Xã Lý Nhân',
        'loai'=> 3,
        'parent_id'=> 251
        ],
        [
        'ten'=> 'Xã Tuân Chính',
        'loai'=> 3,
        'parent_id'=> 251
        ],
        [
        'ten'=> 'Xã Vân Xuân',
        'loai'=> 3,
        'parent_id'=> 251
        ],
        [
        'ten'=> 'Xã Tam Phúc',
        'loai'=> 3,
        'parent_id'=> 251
        ],
        [
        'ten'=> 'Thị trấn Tứ Trưng',
        'loai'=> 3,
        'parent_id'=> 251
        ],
        [
        'ten'=> 'Xã Ngũ Kiên',
        'loai'=> 3,
        'parent_id'=> 251
        ],
        [
        'ten'=> 'Xã An Tường',
        'loai'=> 3,
        'parent_id'=> 251
        ],
        [
        'ten'=> 'Xã Vĩnh Thịnh',
        'loai'=> 3,
        'parent_id'=> 251
        ],
        [
        'ten'=> 'Xã Phú Đa',
        'loai'=> 3,
        'parent_id'=> 251
        ],
        [
        'ten'=> 'Xã Vĩnh Ninh',
        'loai'=> 3,
        'parent_id'=> 251
        ],
        [
        'ten'=> 'Xã Lãng Công',
        'loai'=> 3,
        'parent_id'=> 252
        ],
        [
        'ten'=> 'Xã Quang Yên',
        'loai'=> 3,
        'parent_id'=> 252
        ],
        [
        'ten'=> 'Xã Bạch Lưu',
        'loai'=> 3,
        'parent_id'=> 252
        ],
        [
        'ten'=> 'Xã Hải Lựu',
        'loai'=> 3,
        'parent_id'=> 252
        ],
        [
        'ten'=> 'Xã Đồng Quế',
        'loai'=> 3,
        'parent_id'=> 252
        ],
        [
        'ten'=> 'Xã Nhân Đạo',
        'loai'=> 3,
        'parent_id'=> 252
        ],
        [
        'ten'=> 'Xã Đôn Nhân',
        'loai'=> 3,
        'parent_id'=> 252
        ],
        [
        'ten'=> 'Xã Phương Khoan',
        'loai'=> 3,
        'parent_id'=> 252
        ],
        [
        'ten'=> 'Xã Tân Lập',
        'loai'=> 3,
        'parent_id'=> 252
        ],
        [
        'ten'=> 'Xã Nhạo Sơn',
        'loai'=> 3,
        'parent_id'=> 252
        ],
        [
        'ten'=> 'Thị trấn Tam Sơn',
        'loai'=> 3,
        'parent_id'=> 252
        ],
        [
        'ten'=> 'Xã Như Thụy',
        'loai'=> 3,
        'parent_id'=> 252
        ],
        [
        'ten'=> 'Xã Yên Thạch',
        'loai'=> 3,
        'parent_id'=> 252
        ],
        [
        'ten'=> 'Xã Đồng Thịnh',
        'loai'=> 3,
        'parent_id'=> 252
        ],
        [
        'ten'=> 'Xã Tứ Yên',
        'loai'=> 3,
        'parent_id'=> 252
        ],
        [
        'ten'=> 'Xã Đức Bác',
        'loai'=> 3,
        'parent_id'=> 252
        ],
        [
        'ten'=> 'Xã Cao Phong',
        'loai'=> 3,
        'parent_id'=> 252
        ],
        [
        'ten'=> 'Phường Vũ Ninh',
        'loai'=> 3,
        'parent_id'=> 253
        ],
        [
        'ten'=> 'Phường Đáp Cầu',
        'loai'=> 3,
        'parent_id'=> 253
        ],
        [
        'ten'=> 'Phường Thị Cầu',
        'loai'=> 3,
        'parent_id'=> 253
        ],
        [
        'ten'=> 'Phường Kinh Bắc',
        'loai'=> 3,
        'parent_id'=> 253
        ],
        [
        'ten'=> 'Phường Vệ An',
        'loai'=> 3,
        'parent_id'=> 253
        ],
        [
        'ten'=> 'Phường Tiền An',
        'loai'=> 3,
        'parent_id'=> 253
        ],
        [
        'ten'=> 'Phường Đại Phúc',
        'loai'=> 3,
        'parent_id'=> 253
        ],
        [
        'ten'=> 'Phường Ninh Xá',
        'loai'=> 3,
        'parent_id'=> 253
        ],
        [
        'ten'=> 'Phường Suối Hoa',
        'loai'=> 3,
        'parent_id'=> 253
        ],
        [
        'ten'=> 'Phường Võ Cường',
        'loai'=> 3,
        'parent_id'=> 253
        ],
        [
        'ten'=> 'Phường Hòa Long',
        'loai'=> 3,
        'parent_id'=> 253
        ],
        [
        'ten'=> 'Phường Vạn An',
        'loai'=> 3,
        'parent_id'=> 253
        ],
        [
        'ten'=> 'Phường Khúc Xuyên',
        'loai'=> 3,
        'parent_id'=> 253
        ],
        [
        'ten'=> 'Phường Phong Khê',
        'loai'=> 3,
        'parent_id'=> 253
        ],
        [
        'ten'=> 'Phường Kim Chân',
        'loai'=> 3,
        'parent_id'=> 253
        ],
        [
        'ten'=> 'Phường Vân Dương',
        'loai'=> 3,
        'parent_id'=> 253
        ],
        [
        'ten'=> 'Phường Nam Sơn',
        'loai'=> 3,
        'parent_id'=> 253
        ],
        [
        'ten'=> 'Phường Khắc Niệm',
        'loai'=> 3,
        'parent_id'=> 253
        ],
        [
        'ten'=> 'Phường Hạp Lĩnh',
        'loai'=> 3,
        'parent_id'=> 253
        ],
        [
        'ten'=> 'Thị trấn Chờ',
        'loai'=> 3,
        'parent_id'=> 254
        ],
        [
        'ten'=> 'Xã Dũng Liệt',
        'loai'=> 3,
        'parent_id'=> 254
        ],
        [
        'ten'=> 'Xã Tam Đa',
        'loai'=> 3,
        'parent_id'=> 254
        ],
        [
        'ten'=> 'Xã Tam Giang',
        'loai'=> 3,
        'parent_id'=> 254
        ],
        [
        'ten'=> 'Xã Yên Trung',
        'loai'=> 3,
        'parent_id'=> 254
        ],
        [
        'ten'=> 'Xã Thụy Hòa',
        'loai'=> 3,
        'parent_id'=> 254
        ],
        [
        'ten'=> 'Xã Hòa Tiến',
        'loai'=> 3,
        'parent_id'=> 254
        ],
        [
        'ten'=> 'Xã Đông Tiến',
        'loai'=> 3,
        'parent_id'=> 254
        ],
        [
        'ten'=> 'Xã Yên Phụ',
        'loai'=> 3,
        'parent_id'=> 254
        ],
        [
        'ten'=> 'Xã Trung Nghĩa',
        'loai'=> 3,
        'parent_id'=> 254
        ],
        [
        'ten'=> 'Xã Đông Phong',
        'loai'=> 3,
        'parent_id'=> 254
        ],
        [
        'ten'=> 'Xã Long Châu',
        'loai'=> 3,
        'parent_id'=> 254
        ],
        [
        'ten'=> 'Xã Văn Môn',
        'loai'=> 3,
        'parent_id'=> 254
        ],
        [
        'ten'=> 'Xã Đông Thọ',
        'loai'=> 3,
        'parent_id'=> 254
        ],
        [
        'ten'=> 'Thị trấn Phố Mới',
        'loai'=> 3,
        'parent_id'=> 255
        ],
        [
        'ten'=> 'Xã Việt Thống',
        'loai'=> 3,
        'parent_id'=> 255
        ],
        [
        'ten'=> 'Xã Đại Xuân',
        'loai'=> 3,
        'parent_id'=> 255
        ],
        [
        'ten'=> 'Xã Nhân Hòa',
        'loai'=> 3,
        'parent_id'=> 255
        ],
        [
        'ten'=> 'Xã Bằng An',
        'loai'=> 3,
        'parent_id'=> 255
        ],
        [
        'ten'=> 'Xã Phương Liễu',
        'loai'=> 3,
        'parent_id'=> 255
        ],
        [
        'ten'=> 'Xã Quế Tân',
        'loai'=> 3,
        'parent_id'=> 255
        ],
        [
        'ten'=> 'Xã Phù Lương',
        'loai'=> 3,
        'parent_id'=> 255
        ],
        [
        'ten'=> 'Xã Phù Lãng',
        'loai'=> 3,
        'parent_id'=> 255
        ],
        [
        'ten'=> 'Xã Phượng Mao',
        'loai'=> 3,
        'parent_id'=> 255
        ],
        [
        'ten'=> 'Xã Việt Hùng',
        'loai'=> 3,
        'parent_id'=> 255
        ],
        [
        'ten'=> 'Xã Ngọc Xá',
        'loai'=> 3,
        'parent_id'=> 255
        ],
        [
        'ten'=> 'Xã Châu Phong',
        'loai'=> 3,
        'parent_id'=> 255
        ],
        [
        'ten'=> 'Xã Bồng Lai',
        'loai'=> 3,
        'parent_id'=> 255
        ],
        [
        'ten'=> 'Xã Cách Bi',
        'loai'=> 3,
        'parent_id'=> 255
        ],
        [
        'ten'=> 'Xã Đào Viên',
        'loai'=> 3,
        'parent_id'=> 255
        ],
        [
        'ten'=> 'Xã Yên Giả',
        'loai'=> 3,
        'parent_id'=> 255
        ],
        [
        'ten'=> 'Xã Mộ Đạo',
        'loai'=> 3,
        'parent_id'=> 255
        ],
        [
        'ten'=> 'Xã Đức Long',
        'loai'=> 3,
        'parent_id'=> 255
        ],
        [
        'ten'=> 'Xã Chi Lăng',
        'loai'=> 3,
        'parent_id'=> 255
        ],
        [
        'ten'=> 'Xã Hán Quảng',
        'loai'=> 3,
        'parent_id'=> 255
        ],
        [
        'ten'=> 'Thị trấn Lim',
        'loai'=> 3,
        'parent_id'=> 256
        ],
        [
        'ten'=> 'Xã Phú Lâm',
        'loai'=> 3,
        'parent_id'=> 256
        ],
        [
        'ten'=> 'Xã Nội Duệ',
        'loai'=> 3,
        'parent_id'=> 256
        ],
        [
        'ten'=> 'Xã Liên Bão',
        'loai'=> 3,
        'parent_id'=> 256
        ],
        [
        'ten'=> 'Xã Hiên Vân',
        'loai'=> 3,
        'parent_id'=> 256
        ],
        [
        'ten'=> 'Xã Hoàn Sơn',
        'loai'=> 3,
        'parent_id'=> 256
        ],
        [
        'ten'=> 'Xã Lạc Vệ',
        'loai'=> 3,
        'parent_id'=> 256
        ],
        [
        'ten'=> 'Xã Việt Đoàn',
        'loai'=> 3,
        'parent_id'=> 256
        ],
        [
        'ten'=> 'Xã Phật Tích',
        'loai'=> 3,
        'parent_id'=> 256
        ],
        [
        'ten'=> 'Xã Tân Chi',
        'loai'=> 3,
        'parent_id'=> 256
        ],
        [
        'ten'=> 'Xã Đại Đồng',
        'loai'=> 3,
        'parent_id'=> 256
        ],
        [
        'ten'=> 'Xã Tri Phương',
        'loai'=> 3,
        'parent_id'=> 256
        ],
        [
        'ten'=> 'Xã Minh Đạo',
        'loai'=> 3,
        'parent_id'=> 256
        ],
        [
        'ten'=> 'Xã Cảnh Hưng',
        'loai'=> 3,
        'parent_id'=> 256
        ],
        [
        'ten'=> 'Phường Đông Ngàn',
        'loai'=> 3,
        'parent_id'=> 257
        ],
        [
        'ten'=> 'Phường Tam Sơn',
        'loai'=> 3,
        'parent_id'=> 257
        ],
        [
        'ten'=> 'Phường Hương Mạc',
        'loai'=> 3,
        'parent_id'=> 257
        ],
        [
        'ten'=> 'Phường Tương Giang',
        'loai'=> 3,
        'parent_id'=> 257
        ],
        [
        'ten'=> 'Phường Phù Khê',
        'loai'=> 3,
        'parent_id'=> 257
        ],
        [
        'ten'=> 'Phường Đồng Kỵ',
        'loai'=> 3,
        'parent_id'=> 257
        ],
        [
        'ten'=> 'Phường Trang Hạ',
        'loai'=> 3,
        'parent_id'=> 257
        ],
        [
        'ten'=> 'Phường Đồng Nguyên',
        'loai'=> 3,
        'parent_id'=> 257
        ],
        [
        'ten'=> 'Phường Châu Khê',
        'loai'=> 3,
        'parent_id'=> 257
        ],
        [
        'ten'=> 'Phường Tân Hồng',
        'loai'=> 3,
        'parent_id'=> 257
        ],
        [
        'ten'=> 'Phường Đình Bảng',
        'loai'=> 3,
        'parent_id'=> 257
        ],
        [
        'ten'=> 'Phường Phù Chẩn',
        'loai'=> 3,
        'parent_id'=> 257
        ],
        [
        'ten'=> 'Thị trấn Hồ',
        'loai'=> 3,
        'parent_id'=> 258
        ],
        [
        'ten'=> 'Xã Hoài Thượng',
        'loai'=> 3,
        'parent_id'=> 258
        ],
        [
        'ten'=> 'Xã Đại Đồng Thành',
        'loai'=> 3,
        'parent_id'=> 258
        ],
        [
        'ten'=> 'Xã Mão Điền',
        'loai'=> 3,
        'parent_id'=> 258
        ],
        [
        'ten'=> 'Xã Song Hồ',
        'loai'=> 3,
        'parent_id'=> 258
        ],
        [
        'ten'=> 'Xã Đình Tổ',
        'loai'=> 3,
        'parent_id'=> 258
        ],
        [
        'ten'=> 'Xã An Bình',
        'loai'=> 3,
        'parent_id'=> 258
        ],
        [
        'ten'=> 'Xã Trí Quả',
        'loai'=> 3,
        'parent_id'=> 258
        ],
        [
        'ten'=> 'Xã Gia Đông',
        'loai'=> 3,
        'parent_id'=> 258
        ],
        [
        'ten'=> 'Xã Thanh Khương',
        'loai'=> 3,
        'parent_id'=> 258
        ],
        [
        'ten'=> 'Xã Trạm Lộ',
        'loai'=> 3,
        'parent_id'=> 258
        ],
        [
        'ten'=> 'Xã Xuân Lâm',
        'loai'=> 3,
        'parent_id'=> 258
        ],
        [
        'ten'=> 'Xã Hà Mãn',
        'loai'=> 3,
        'parent_id'=> 258
        ],
        [
        'ten'=> 'Xã Ngũ Thái',
        'loai'=> 3,
        'parent_id'=> 258
        ],
        [
        'ten'=> 'Xã Nguyệt Đức',
        'loai'=> 3,
        'parent_id'=> 258
        ],
        [
        'ten'=> 'Xã Ninh Xá',
        'loai'=> 3,
        'parent_id'=> 258
        ],
        [
        'ten'=> 'Xã Nghĩa Đạo',
        'loai'=> 3,
        'parent_id'=> 258
        ],
        [
        'ten'=> 'Xã Song Liễu',
        'loai'=> 3,
        'parent_id'=> 258
        ],
        [
        'ten'=> 'Thị trấn Gia Bình',
        'loai'=> 3,
        'parent_id'=> 259
        ],
        [
        'ten'=> 'Xã Vạn Ninh',
        'loai'=> 3,
        'parent_id'=> 259
        ],
        [
        'ten'=> 'Xã Thái Bảo',
        'loai'=> 3,
        'parent_id'=> 259
        ],
        [
        'ten'=> 'Xã Giang Sơn',
        'loai'=> 3,
        'parent_id'=> 259
        ],
        [
        'ten'=> 'Xã Cao Đức',
        'loai'=> 3,
        'parent_id'=> 259
        ],
        [
        'ten'=> 'Xã Đại Lai',
        'loai'=> 3,
        'parent_id'=> 259
        ],
        [
        'ten'=> 'Xã Song Giang',
        'loai'=> 3,
        'parent_id'=> 259
        ],
        [
        'ten'=> 'Xã Bình Dương',
        'loai'=> 3,
        'parent_id'=> 259
        ],
        [
        'ten'=> 'Xã Lãng Ngâm',
        'loai'=> 3,
        'parent_id'=> 259
        ],
        [
        'ten'=> 'Xã Nhân Thắng',
        'loai'=> 3,
        'parent_id'=> 259
        ],
        [
        'ten'=> 'Xã Xuân Lai',
        'loai'=> 3,
        'parent_id'=> 259
        ],
        [
        'ten'=> 'Xã Đông Cứu',
        'loai'=> 3,
        'parent_id'=> 259
        ],
        [
        'ten'=> 'Xã Đại Bái',
        'loai'=> 3,
        'parent_id'=> 259
        ],
        [
        'ten'=> 'Xã Quỳnh Phú',
        'loai'=> 3,
        'parent_id'=> 259
        ],
        [
        'ten'=> 'Thị trấn Thứa',
        'loai'=> 3,
        'parent_id'=> 260
        ],
        [
        'ten'=> 'Xã An Thịnh',
        'loai'=> 3,
        'parent_id'=> 260
        ],
        [
        'ten'=> 'Xã Trung Kênh',
        'loai'=> 3,
        'parent_id'=> 260
        ],
        [
        'ten'=> 'Xã Phú Hòa',
        'loai'=> 3,
        'parent_id'=> 260
        ],
        [
        'ten'=> 'Xã Mỹ Hương',
        'loai'=> 3,
        'parent_id'=> 260
        ],
        [
        'ten'=> 'Xã Tân Lãng',
        'loai'=> 3,
        'parent_id'=> 260
        ],
        [
        'ten'=> 'Xã Quảng Phú',
        'loai'=> 3,
        'parent_id'=> 260
        ],
        [
        'ten'=> 'Xã Trừng Xá',
        'loai'=> 3,
        'parent_id'=> 260
        ],
        [
        'ten'=> 'Xã Lai Hạ',
        'loai'=> 3,
        'parent_id'=> 260
        ],
        [
        'ten'=> 'Xã Trung Chính',
        'loai'=> 3,
        'parent_id'=> 260
        ],
        [
        'ten'=> 'Xã Minh Tân',
        'loai'=> 3,
        'parent_id'=> 260
        ],
        [
        'ten'=> 'Xã Bình Định',
        'loai'=> 3,
        'parent_id'=> 260
        ],
        [
        'ten'=> 'Xã Phú Lương',
        'loai'=> 3,
        'parent_id'=> 260
        ],
        [
        'ten'=> 'Xã Lâm Thao',
        'loai'=> 3,
        'parent_id'=> 260
        ],
        [
        'ten'=> 'Phường Cẩm Thượng',
        'loai'=> 3,
        'parent_id'=> 261
        ],
        [
        'ten'=> 'Phường Bình Hàn',
        'loai'=> 3,
        'parent_id'=> 261
        ],
        [
        'ten'=> 'Phường Ngọc Châu',
        'loai'=> 3,
        'parent_id'=> 261
        ],
        [
        'ten'=> 'Phường Nhị Châu',
        'loai'=> 3,
        'parent_id'=> 261
        ],
        [
        'ten'=> 'Phường Quang Trung',
        'loai'=> 3,
        'parent_id'=> 261
        ],
        [
        'ten'=> 'Phường Nguyễn Trãi',
        'loai'=> 3,
        'parent_id'=> 261
        ],
        [
        'ten'=> 'Phường Phạm Ngũ Lão',
        'loai'=> 3,
        'parent_id'=> 261
        ],
        [
        'ten'=> 'Phường Trần Hưng Đạo',
        'loai'=> 3,
        'parent_id'=> 261
        ],
        [
        'ten'=> 'Phường Trần Phú',
        'loai'=> 3,
        'parent_id'=> 261
        ],
        [
        'ten'=> 'Phường Thanh Bình',
        'loai'=> 3,
        'parent_id'=> 261
        ],
        [
        'ten'=> 'Phường Tân Bình',
        'loai'=> 3,
        'parent_id'=> 261
        ],
        [
        'ten'=> 'Phường Lê Thanh Nghị',
        'loai'=> 3,
        'parent_id'=> 261
        ],
        [
        'ten'=> 'Phường Hải Tân',
        'loai'=> 3,
        'parent_id'=> 261
        ],
        [
        'ten'=> 'Phường Tứ Minh',
        'loai'=> 3,
        'parent_id'=> 261
        ],
        [
        'ten'=> 'Phường Việt Hoà',
        'loai'=> 3,
        'parent_id'=> 261
        ],
        [
        'ten'=> 'Phường Ái Quốc',
        'loai'=> 3,
        'parent_id'=> 261
        ],
        [
        'ten'=> 'Xã An Thượng',
        'loai'=> 3,
        'parent_id'=> 261
        ],
        [
        'ten'=> 'Phường Nam Đồng',
        'loai'=> 3,
        'parent_id'=> 261
        ],
        [
        'ten'=> 'Xã Quyết Thắng',
        'loai'=> 3,
        'parent_id'=> 261
        ],
        [
        'ten'=> 'Xã Tiền Tiến',
        'loai'=> 3,
        'parent_id'=> 261
        ],
        [
        'ten'=> 'Phường Thạch Khôi',
        'loai'=> 3,
        'parent_id'=> 261
        ],
        [
        'ten'=> 'Xã Liên Hồng',
        'loai'=> 3,
        'parent_id'=> 261
        ],
        [
        'ten'=> 'Phường Tân Hưng',
        'loai'=> 3,
        'parent_id'=> 261
        ],
        [
        'ten'=> 'Xã Gia Xuyên',
        'loai'=> 3,
        'parent_id'=> 261
        ],
        [
        'ten'=> 'Xã Ngọc Sơn',
        'loai'=> 3,
        'parent_id'=> 261
        ],
        [
        'ten'=> 'Phường Phả Lại',
        'loai'=> 3,
        'parent_id'=> 262
        ],
        [
        'ten'=> 'Phường Sao Đỏ',
        'loai'=> 3,
        'parent_id'=> 262
        ],
        [
        'ten'=> 'Phường Bến Tắm',
        'loai'=> 3,
        'parent_id'=> 262
        ],
        [
        'ten'=> 'Xã Hoàng Hoa Thám',
        'loai'=> 3,
        'parent_id'=> 262
        ],
        [
        'ten'=> 'Xã Bắc An',
        'loai'=> 3,
        'parent_id'=> 262
        ],
        [
        'ten'=> 'Xã Hưng Đạo',
        'loai'=> 3,
        'parent_id'=> 262
        ],
        [
        'ten'=> 'Xã Lê Lợi',
        'loai'=> 3,
        'parent_id'=> 262
        ],
        [
        'ten'=> 'Phường Hoàng Tiến',
        'loai'=> 3,
        'parent_id'=> 262
        ],
        [
        'ten'=> 'Phường Cộng Hoà',
        'loai'=> 3,
        'parent_id'=> 262
        ],
        [
        'ten'=> 'Phường Hoàng Tân',
        'loai'=> 3,
        'parent_id'=> 262
        ],
        [
        'ten'=> 'Phường Cổ Thành',
        'loai'=> 3,
        'parent_id'=> 262
        ],
        [
        'ten'=> 'Phường Văn An',
        'loai'=> 3,
        'parent_id'=> 262
        ],
        [
        'ten'=> 'Phường Chí Minh',
        'loai'=> 3,
        'parent_id'=> 262
        ],
        [
        'ten'=> 'Phường Văn Đức',
        'loai'=> 3,
        'parent_id'=> 262
        ],
        [
        'ten'=> 'Phường Thái Học',
        'loai'=> 3,
        'parent_id'=> 262
        ],
        [
        'ten'=> 'Xã Nhân Huệ',
        'loai'=> 3,
        'parent_id'=> 262
        ],
        [
        'ten'=> 'Phường An Lạc',
        'loai'=> 3,
        'parent_id'=> 262
        ],
        [
        'ten'=> 'Phường Đồng Lạc',
        'loai'=> 3,
        'parent_id'=> 262
        ],
        [
        'ten'=> 'Phường Tân Dân',
        'loai'=> 3,
        'parent_id'=> 262
        ],
        [
        'ten'=> 'Thị trấn Nam Sách',
        'loai'=> 3,
        'parent_id'=> 263
        ],
        [
        'ten'=> 'Xã Nam Hưng',
        'loai'=> 3,
        'parent_id'=> 263
        ],
        [
        'ten'=> 'Xã Nam Tân',
        'loai'=> 3,
        'parent_id'=> 263
        ],
        [
        'ten'=> 'Xã Hợp Tiến',
        'loai'=> 3,
        'parent_id'=> 263
        ],
        [
        'ten'=> 'Xã Hiệp Cát',
        'loai'=> 3,
        'parent_id'=> 263
        ],
        [
        'ten'=> 'Xã Thanh Quang',
        'loai'=> 3,
        'parent_id'=> 263
        ],
        [
        'ten'=> 'Xã Quốc Tuấn',
        'loai'=> 3,
        'parent_id'=> 263
        ],
        [
        'ten'=> 'Xã Nam Chính',
        'loai'=> 3,
        'parent_id'=> 263
        ],
        [
        'ten'=> 'Xã An Bình',
        'loai'=> 3,
        'parent_id'=> 263
        ],
        [
        'ten'=> 'Xã Nam Trung',
        'loai'=> 3,
        'parent_id'=> 263
        ],
        [
        'ten'=> 'Xã An Sơn',
        'loai'=> 3,
        'parent_id'=> 263
        ],
        [
        'ten'=> 'Xã Cộng Hòa',
        'loai'=> 3,
        'parent_id'=> 263
        ],
        [
        'ten'=> 'Xã Thái Tân',
        'loai'=> 3,
        'parent_id'=> 263
        ],
        [
        'ten'=> 'Xã An Lâm',
        'loai'=> 3,
        'parent_id'=> 263
        ],
        [
        'ten'=> 'Xã Phú Điền',
        'loai'=> 3,
        'parent_id'=> 263
        ],
        [
        'ten'=> 'Xã Nam Hồng',
        'loai'=> 3,
        'parent_id'=> 263
        ],
        [
        'ten'=> 'Xã Hồng Phong',
        'loai'=> 3,
        'parent_id'=> 263
        ],
        [
        'ten'=> 'Xã Đồng Lạc',
        'loai'=> 3,
        'parent_id'=> 263
        ],
        [
        'ten'=> 'Xã Minh Tân',
        'loai'=> 3,
        'parent_id'=> 263
        ],
        [
        'ten'=> 'Phường An Lưu',
        'loai'=> 3,
        'parent_id'=> 264
        ],
        [
        'ten'=> 'Xã Bạch Đằng',
        'loai'=> 3,
        'parent_id'=> 264
        ],
        [
        'ten'=> 'Phường Thất Hùng',
        'loai'=> 3,
        'parent_id'=> 264
        ],
        [
        'ten'=> 'Xã Lê Ninh',
        'loai'=> 3,
        'parent_id'=> 264
        ],
        [
        'ten'=> 'Xã Hoành Sơn',
        'loai'=> 3,
        'parent_id'=> 264
        ],
        [
        'ten'=> 'Phường Phạm Thái',
        'loai'=> 3,
        'parent_id'=> 264
        ],
        [
        'ten'=> 'Phường Duy Tân',
        'loai'=> 3,
        'parent_id'=> 264
        ],
        [
        'ten'=> 'Phường Tân Dân',
        'loai'=> 3,
        'parent_id'=> 264
        ],
        [
        'ten'=> 'Phường Minh Tân',
        'loai'=> 3,
        'parent_id'=> 264
        ],
        [
        'ten'=> 'Xã Quang Thành',
        'loai'=> 3,
        'parent_id'=> 264
        ],
        [
        'ten'=> 'Xã Hiệp Hòa',
        'loai'=> 3,
        'parent_id'=> 264
        ],
        [
        'ten'=> 'Phường Phú Thứ',
        'loai'=> 3,
        'parent_id'=> 264
        ],
        [
        'ten'=> 'Xã Thăng Long',
        'loai'=> 3,
        'parent_id'=> 264
        ],
        [
        'ten'=> 'Xã Lạc Long',
        'loai'=> 3,
        'parent_id'=> 264
        ],
        [
        'ten'=> 'Phường An Sinh',
        'loai'=> 3,
        'parent_id'=> 264
        ],
        [
        'ten'=> 'Phường Hiệp Sơn',
        'loai'=> 3,
        'parent_id'=> 264
        ],
        [
        'ten'=> 'Xã Thượng Quận',
        'loai'=> 3,
        'parent_id'=> 264
        ],
        [
        'ten'=> 'Phường An Phụ',
        'loai'=> 3,
        'parent_id'=> 264
        ],
        [
        'ten'=> 'Phường Hiệp An',
        'loai'=> 3,
        'parent_id'=> 264
        ],
        [
        'ten'=> 'Phường Long Xuyên',
        'loai'=> 3,
        'parent_id'=> 264
        ],
        [
        'ten'=> 'Phường Thái Thịnh',
        'loai'=> 3,
        'parent_id'=> 264
        ],
        [
        'ten'=> 'Phường Hiến Thành',
        'loai'=> 3,
        'parent_id'=> 264
        ],
        [
        'ten'=> 'Xã Minh Hòa',
        'loai'=> 3,
        'parent_id'=> 264
        ],
        [
        'ten'=> 'Thị trấn Phú Thái',
        'loai'=> 3,
        'parent_id'=> 265
        ],
        [
        'ten'=> 'Xã Lai Vu',
        'loai'=> 3,
        'parent_id'=> 265
        ],
        [
        'ten'=> 'Xã Cộng Hòa',
        'loai'=> 3,
        'parent_id'=> 265
        ],
        [
        'ten'=> 'Xã Thượng Vũ',
        'loai'=> 3,
        'parent_id'=> 265
        ],
        [
        'ten'=> 'Xã Cổ Dũng',
        'loai'=> 3,
        'parent_id'=> 265
        ],
        [
        'ten'=> 'Xã Tuấn Việt',
        'loai'=> 3,
        'parent_id'=> 265
        ],
        [
        'ten'=> 'Xã Kim Xuyên',
        'loai'=> 3,
        'parent_id'=> 265
        ],
        [
        'ten'=> 'Xã Phúc Thành A',
        'loai'=> 3,
        'parent_id'=> 265
        ],
        [
        'ten'=> 'Xã Ngũ Phúc',
        'loai'=> 3,
        'parent_id'=> 265
        ],
        [
        'ten'=> 'Xã Kim Anh',
        'loai'=> 3,
        'parent_id'=> 265
        ],
        [
        'ten'=> 'Xã Kim Liên',
        'loai'=> 3,
        'parent_id'=> 265
        ],
        [
        'ten'=> 'Xã Kim Tân',
        'loai'=> 3,
        'parent_id'=> 265
        ],
        [
        'ten'=> 'Xã Kim Đính',
        'loai'=> 3,
        'parent_id'=> 265
        ],
        [
        'ten'=> 'Xã Bình Dân',
        'loai'=> 3,
        'parent_id'=> 265
        ],
        [
        'ten'=> 'Xã Tam Kỳ',
        'loai'=> 3,
        'parent_id'=> 265
        ],
        [
        'ten'=> 'Xã Đồng Cẩm',
        'loai'=> 3,
        'parent_id'=> 265
        ],
        [
        'ten'=> 'Xã Liên Hòa',
        'loai'=> 3,
        'parent_id'=> 265
        ],
        [
        'ten'=> 'Xã Đại Đức',
        'loai'=> 3,
        'parent_id'=> 265
        ],
        [
        'ten'=> 'Thị trấn Thanh Hà',
        'loai'=> 3,
        'parent_id'=> 266
        ],
        [
        'ten'=> 'Xã Hồng Lạc',
        'loai'=> 3,
        'parent_id'=> 266
        ],
        [
        'ten'=> 'Xã Việt Hồng',
        'loai'=> 3,
        'parent_id'=> 266
        ],
        [
        'ten'=> 'Xã Tân Việt',
        'loai'=> 3,
        'parent_id'=> 266
        ],
        [
        'ten'=> 'Xã Cẩm Chế',
        'loai'=> 3,
        'parent_id'=> 266
        ],
        [
        'ten'=> 'Xã Thanh An',
        'loai'=> 3,
        'parent_id'=> 266
        ],
        [
        'ten'=> 'Xã Thanh Lang',
        'loai'=> 3,
        'parent_id'=> 266
        ],
        [
        'ten'=> 'Xã Tân An',
        'loai'=> 3,
        'parent_id'=> 266
        ],
        [
        'ten'=> 'Xã Liên Mạc',
        'loai'=> 3,
        'parent_id'=> 266
        ],
        [
        'ten'=> 'Xã Thanh Hải',
        'loai'=> 3,
        'parent_id'=> 266
        ],
        [
        'ten'=> 'Xã Thanh Khê',
        'loai'=> 3,
        'parent_id'=> 266
        ],
        [
        'ten'=> 'Xã Thanh Xá',
        'loai'=> 3,
        'parent_id'=> 266
        ],
        [
        'ten'=> 'Xã Thanh Xuân',
        'loai'=> 3,
        'parent_id'=> 266
        ],
        [
        'ten'=> 'Xã Thanh Thủy',
        'loai'=> 3,
        'parent_id'=> 266
        ],
        [
        'ten'=> 'Xã An Phượng',
        'loai'=> 3,
        'parent_id'=> 266
        ],
        [
        'ten'=> 'Xã Thanh Sơn',
        'loai'=> 3,
        'parent_id'=> 266
        ],
        [
        'ten'=> 'Xã Thanh Quang',
        'loai'=> 3,
        'parent_id'=> 266
        ],
        [
        'ten'=> 'Xã Thanh Hồng',
        'loai'=> 3,
        'parent_id'=> 266
        ],
        [
        'ten'=> 'Xã Thanh Cường',
        'loai'=> 3,
        'parent_id'=> 266
        ],
        [
        'ten'=> 'Xã Vĩnh Lập',
        'loai'=> 3,
        'parent_id'=> 266
        ],
        [
        'ten'=> 'Thị trấn Cẩm Giang',
        'loai'=> 3,
        'parent_id'=> 267
        ],
        [
        'ten'=> 'Thị trấn Lai Cách',
        'loai'=> 3,
        'parent_id'=> 267
        ],
        [
        'ten'=> 'Xã Cẩm Hưng',
        'loai'=> 3,
        'parent_id'=> 267
        ],
        [
        'ten'=> 'Xã Cẩm Hoàng',
        'loai'=> 3,
        'parent_id'=> 267
        ],
        [
        'ten'=> 'Xã Cẩm Văn',
        'loai'=> 3,
        'parent_id'=> 267
        ],
        [
        'ten'=> 'Xã Ngọc Liên',
        'loai'=> 3,
        'parent_id'=> 267
        ],
        [
        'ten'=> 'Xã Thạch Lỗi',
        'loai'=> 3,
        'parent_id'=> 267
        ],
        [
        'ten'=> 'Xã Cẩm Vũ',
        'loai'=> 3,
        'parent_id'=> 267
        ],
        [
        'ten'=> 'Xã Đức Chính',
        'loai'=> 3,
        'parent_id'=> 267
        ],
        [
        'ten'=> 'Xã Định Sơn',
        'loai'=> 3,
        'parent_id'=> 267
        ],
        [
        'ten'=> 'Xã Lương Điền',
        'loai'=> 3,
        'parent_id'=> 267
        ],
        [
        'ten'=> 'Xã Cao An',
        'loai'=> 3,
        'parent_id'=> 267
        ],
        [
        'ten'=> 'Xã Tân Trường',
        'loai'=> 3,
        'parent_id'=> 267
        ],
        [
        'ten'=> 'Xã Cẩm Phúc',
        'loai'=> 3,
        'parent_id'=> 267
        ],
        [
        'ten'=> 'Xã Cẩm Điền',
        'loai'=> 3,
        'parent_id'=> 267
        ],
        [
        'ten'=> 'Xã Cẩm Đông',
        'loai'=> 3,
        'parent_id'=> 267
        ],
        [
        'ten'=> 'Xã Cẩm Đoài',
        'loai'=> 3,
        'parent_id'=> 267
        ],
        [
        'ten'=> 'Thị trấn Kẻ Sặt',
        'loai'=> 3,
        'parent_id'=> 268
        ],
        [
        'ten'=> 'Xã Vĩnh Hưng',
        'loai'=> 3,
        'parent_id'=> 268
        ],
        [
        'ten'=> 'Xã Hùng Thắng',
        'loai'=> 3,
        'parent_id'=> 268
        ],
        [
        'ten'=> 'Xã Vĩnh Hồng',
        'loai'=> 3,
        'parent_id'=> 268
        ],
        [
        'ten'=> 'Xã Long Xuyên',
        'loai'=> 3,
        'parent_id'=> 268
        ],
        [
        'ten'=> 'Xã Tân Việt',
        'loai'=> 3,
        'parent_id'=> 268
        ],
        [
        'ten'=> 'Xã Thúc Kháng',
        'loai'=> 3,
        'parent_id'=> 268
        ],
        [
        'ten'=> 'Xã Tân Hồng',
        'loai'=> 3,
        'parent_id'=> 268
        ],
        [
        'ten'=> 'Xã Bình Minh',
        'loai'=> 3,
        'parent_id'=> 268
        ],
        [
        'ten'=> 'Xã Hồng Khê',
        'loai'=> 3,
        'parent_id'=> 268
        ],
        [
        'ten'=> 'Xã Thái Học',
        'loai'=> 3,
        'parent_id'=> 268
        ],
        [
        'ten'=> 'Xã Cổ Bì',
        'loai'=> 3,
        'parent_id'=> 268
        ],
        [
        'ten'=> 'Xã Nhân Quyền',
        'loai'=> 3,
        'parent_id'=> 268
        ],
        [
        'ten'=> 'Xã Thái Dương',
        'loai'=> 3,
        'parent_id'=> 268
        ],
        [
        'ten'=> 'Xã Thái Hòa',
        'loai'=> 3,
        'parent_id'=> 268
        ],
        [
        'ten'=> 'Xã Bình Xuyên',
        'loai'=> 3,
        'parent_id'=> 268
        ],
        [
        'ten'=> 'Thị trấn Gia Lộc',
        'loai'=> 3,
        'parent_id'=> 269
        ],
        [
        'ten'=> 'Xã Thống Nhất',
        'loai'=> 3,
        'parent_id'=> 269
        ],
        [
        'ten'=> 'Xã Yết Kiêu',
        'loai'=> 3,
        'parent_id'=> 269
        ],
        [
        'ten'=> 'Xã Gia Tân',
        'loai'=> 3,
        'parent_id'=> 269
        ],
        [
        'ten'=> 'Xã Tân Tiến',
        'loai'=> 3,
        'parent_id'=> 269
        ],
        [
        'ten'=> 'Xã Gia Khánh',
        'loai'=> 3,
        'parent_id'=> 269
        ],
        [
        'ten'=> 'Xã Gia Lương',
        'loai'=> 3,
        'parent_id'=> 269
        ],
        [
        'ten'=> 'Xã Lê Lợi',
        'loai'=> 3,
        'parent_id'=> 269
        ],
        [
        'ten'=> 'Xã Toàn Thắng',
        'loai'=> 3,
        'parent_id'=> 269
        ],
        [
        'ten'=> 'Xã Hoàng Diệu',
        'loai'=> 3,
        'parent_id'=> 269
        ],
        [
        'ten'=> 'Xã Hồng Hưng',
        'loai'=> 3,
        'parent_id'=> 269
        ],
        [
        'ten'=> 'Xã Phạm Trấn',
        'loai'=> 3,
        'parent_id'=> 269
        ],
        [
        'ten'=> 'Xã Đoàn Thượng',
        'loai'=> 3,
        'parent_id'=> 269
        ],
        [
        'ten'=> 'Xã Thống Kênh',
        'loai'=> 3,
        'parent_id'=> 269
        ],
        [
        'ten'=> 'Xã Quang Minh',
        'loai'=> 3,
        'parent_id'=> 269
        ],
        [
        'ten'=> 'Xã Đồng Quang',
        'loai'=> 3,
        'parent_id'=> 269
        ],
        [
        'ten'=> 'Xã Nhật Tân',
        'loai'=> 3,
        'parent_id'=> 269
        ],
        [
        'ten'=> 'Xã Đức Xương',
        'loai'=> 3,
        'parent_id'=> 269
        ],
        [
        'ten'=> 'Thị trấn Tứ Kỳ',
        'loai'=> 3,
        'parent_id'=> 270
        ],
        [
        'ten'=> 'Xã Đại Sơn',
        'loai'=> 3,
        'parent_id'=> 270
        ],
        [
        'ten'=> 'Xã Hưng Đạo',
        'loai'=> 3,
        'parent_id'=> 270
        ],
        [
        'ten'=> 'Xã Ngọc Kỳ',
        'loai'=> 3,
        'parent_id'=> 270
        ],
        [
        'ten'=> 'Xã Bình Lăng',
        'loai'=> 3,
        'parent_id'=> 270
        ],
        [
        'ten'=> 'Xã Chí Minh',
        'loai'=> 3,
        'parent_id'=> 270
        ],
        [
        'ten'=> 'Xã Tái Sơn',
        'loai'=> 3,
        'parent_id'=> 270
        ],
        [
        'ten'=> 'Xã Quang Phục',
        'loai'=> 3,
        'parent_id'=> 270
        ],
        [
        'ten'=> 'Xã Dân Chủ',
        'loai'=> 3,
        'parent_id'=> 270
        ],
        [
        'ten'=> 'Xã Tân Kỳ',
        'loai'=> 3,
        'parent_id'=> 270
        ],
        [
        'ten'=> 'Xã Quang Khải',
        'loai'=> 3,
        'parent_id'=> 270
        ],
        [
        'ten'=> 'Xã Đại Hợp',
        'loai'=> 3,
        'parent_id'=> 270
        ],
        [
        'ten'=> 'Xã Quảng Nghiệp',
        'loai'=> 3,
        'parent_id'=> 270
        ],
        [
        'ten'=> 'Xã An Thanh',
        'loai'=> 3,
        'parent_id'=> 270
        ],
        [
        'ten'=> 'Xã Minh Đức',
        'loai'=> 3,
        'parent_id'=> 270
        ],
        [
        'ten'=> 'Xã Văn Tố',
        'loai'=> 3,
        'parent_id'=> 270
        ],
        [
        'ten'=> 'Xã Quang Trung',
        'loai'=> 3,
        'parent_id'=> 270
        ],
        [
        'ten'=> 'Xã Phượng Kỳ',
        'loai'=> 3,
        'parent_id'=> 270
        ],
        [
        'ten'=> 'Xã Cộng Lạc',
        'loai'=> 3,
        'parent_id'=> 270
        ],
        [
        'ten'=> 'Xã Tiên Động',
        'loai'=> 3,
        'parent_id'=> 270
        ],
        [
        'ten'=> 'Xã Nguyên Giáp',
        'loai'=> 3,
        'parent_id'=> 270
        ],
        [
        'ten'=> 'Xã Hà Kỳ',
        'loai'=> 3,
        'parent_id'=> 270
        ],
        [
        'ten'=> 'Xã Hà Thanh',
        'loai'=> 3,
        'parent_id'=> 270
        ],
        [
        'ten'=> 'Thị trấn Ninh Giang',
        'loai'=> 3,
        'parent_id'=> 271
        ],
        [
        'ten'=> 'Xã Ứng Hoè',
        'loai'=> 3,
        'parent_id'=> 271
        ],
        [
        'ten'=> 'Xã Nghĩa An',
        'loai'=> 3,
        'parent_id'=> 271
        ],
        [
        'ten'=> 'Xã Hồng Đức',
        'loai'=> 3,
        'parent_id'=> 271
        ],
        [
        'ten'=> 'Xã An Đức',
        'loai'=> 3,
        'parent_id'=> 271
        ],
        [
        'ten'=> 'Xã Vạn Phúc',
        'loai'=> 3,
        'parent_id'=> 271
        ],
        [
        'ten'=> 'Xã Tân Hương',
        'loai'=> 3,
        'parent_id'=> 271
        ],
        [
        'ten'=> 'Xã Vĩnh Hòa',
        'loai'=> 3,
        'parent_id'=> 271
        ],
        [
        'ten'=> 'Xã Đông Xuyên',
        'loai'=> 3,
        'parent_id'=> 271
        ],
        [
        'ten'=> 'Xã Tân Phong',
        'loai'=> 3,
        'parent_id'=> 271
        ],
        [
        'ten'=> 'Xã Ninh Hải',
        'loai'=> 3,
        'parent_id'=> 271
        ],
        [
        'ten'=> 'Xã Đồng Tâm',
        'loai'=> 3,
        'parent_id'=> 271
        ],
        [
        'ten'=> 'Xã Tân Quang',
        'loai'=> 3,
        'parent_id'=> 271
        ],
        [
        'ten'=> 'Xã Kiến Quốc',
        'loai'=> 3,
        'parent_id'=> 271
        ],
        [
        'ten'=> 'Xã Hồng Dụ',
        'loai'=> 3,
        'parent_id'=> 271
        ],
        [
        'ten'=> 'Xã Văn Hội',
        'loai'=> 3,
        'parent_id'=> 271
        ],
        [
        'ten'=> 'Xã Hồng Phong',
        'loai'=> 3,
        'parent_id'=> 271
        ],
        [
        'ten'=> 'Xã Hiệp Lực',
        'loai'=> 3,
        'parent_id'=> 271
        ],
        [
        'ten'=> 'Xã Hồng Phúc',
        'loai'=> 3,
        'parent_id'=> 271
        ],
        [
        'ten'=> 'Xã Hưng Long',
        'loai'=> 3,
        'parent_id'=> 271
        ],
        [
        'ten'=> 'Thị trấn Thanh Miện',
        'loai'=> 3,
        'parent_id'=> 272
        ],
        [
        'ten'=> 'Xã Thanh Tùng',
        'loai'=> 3,
        'parent_id'=> 272
        ],
        [
        'ten'=> 'Xã Phạm Kha',
        'loai'=> 3,
        'parent_id'=> 272
        ],
        [
        'ten'=> 'Xã Ngô Quyền',
        'loai'=> 3,
        'parent_id'=> 272
        ],
        [
        'ten'=> 'Xã Đoàn Tùng',
        'loai'=> 3,
        'parent_id'=> 272
        ],
        [
        'ten'=> 'Xã Hồng Quang',
        'loai'=> 3,
        'parent_id'=> 272
        ],
        [
        'ten'=> 'Xã Tân Trào',
        'loai'=> 3,
        'parent_id'=> 272
        ],
        [
        'ten'=> 'Xã Lam Sơn',
        'loai'=> 3,
        'parent_id'=> 272
        ],
        [
        'ten'=> 'Xã Đoàn Kết',
        'loai'=> 3,
        'parent_id'=> 272
        ],
        [
        'ten'=> 'Xã Lê Hồng',
        'loai'=> 3,
        'parent_id'=> 272
        ],
        [
        'ten'=> 'Xã Tứ Cường',
        'loai'=> 3,
        'parent_id'=> 272
        ],
        [
        'ten'=> 'Xã Ngũ Hùng',
        'loai'=> 3,
        'parent_id'=> 272
        ],
        [
        'ten'=> 'Xã Cao Thắng',
        'loai'=> 3,
        'parent_id'=> 272
        ],
        [
        'ten'=> 'Xã Chi Lăng Bắc',
        'loai'=> 3,
        'parent_id'=> 272
        ],
        [
        'ten'=> 'Xã Chi Lăng Nam',
        'loai'=> 3,
        'parent_id'=> 272
        ],
        [
        'ten'=> 'Xã Thanh Giang',
        'loai'=> 3,
        'parent_id'=> 272
        ],
        [
        'ten'=> 'Xã Hồng Phong',
        'loai'=> 3,
        'parent_id'=> 272
        ],
        [
        'ten'=> 'Phường Quán Toan',
        'loai'=> 3,
        'parent_id'=> 273
        ],
        [
        'ten'=> 'Phường Hùng Vương',
        'loai'=> 3,
        'parent_id'=> 273
        ],
        [
        'ten'=> 'Phường Sở Dầu',
        'loai'=> 3,
        'parent_id'=> 273
        ],
        [
        'ten'=> 'Phường Thượng Lý',
        'loai'=> 3,
        'parent_id'=> 273
        ],
        [
        'ten'=> 'Phường Hạ Lý',
        'loai'=> 3,
        'parent_id'=> 273
        ],
        [
        'ten'=> 'Phường Minh Khai',
        'loai'=> 3,
        'parent_id'=> 273
        ],
        [
        'ten'=> 'Phường Trại Chuối',
        'loai'=> 3,
        'parent_id'=> 273
        ],
        [
        'ten'=> 'Phường Hoàng Văn Thụ',
        'loai'=> 3,
        'parent_id'=> 273
        ],
        [
        'ten'=> 'Phường Phan Bội Châu',
        'loai'=> 3,
        'parent_id'=> 273
        ],
        [
        'ten'=> 'Phường Máy Chai',
        'loai'=> 3,
        'parent_id'=> 274
        ],
        [
        'ten'=> 'Phường Máy Tơ',
        'loai'=> 3,
        'parent_id'=> 274
        ],
        [
        'ten'=> 'Phường Vạn Mỹ',
        'loai'=> 3,
        'parent_id'=> 274
        ],
        [
        'ten'=> 'Phường Cầu Tre',
        'loai'=> 3,
        'parent_id'=> 274
        ],
        [
        'ten'=> 'Phường Lạc Viên',
        'loai'=> 3,
        'parent_id'=> 274
        ],
        [
        'ten'=> 'Phường Cầu Đất',
        'loai'=> 3,
        'parent_id'=> 274
        ],
        [
        'ten'=> 'Phường Gia Viên',
        'loai'=> 3,
        'parent_id'=> 274
        ],
        [
        'ten'=> 'Phường Đông Khê',
        'loai'=> 3,
        'parent_id'=> 274
        ],
        [
        'ten'=> 'Phường Lê Lợi',
        'loai'=> 3,
        'parent_id'=> 274
        ],
        [
        'ten'=> 'Phường Đằng Giang',
        'loai'=> 3,
        'parent_id'=> 274
        ],
        [
        'ten'=> 'Phường Lạch Tray',
        'loai'=> 3,
        'parent_id'=> 274
        ],
        [
        'ten'=> 'Phường Đổng Quốc Bình',
        'loai'=> 3,
        'parent_id'=> 274
        ],
        [
        'ten'=> 'Phường Cát Dài',
        'loai'=> 3,
        'parent_id'=> 275
        ],
        [
        'ten'=> 'Phường An Biên',
        'loai'=> 3,
        'parent_id'=> 275
        ],
        [
        'ten'=> 'Phường Lam Sơn',
        'loai'=> 3,
        'parent_id'=> 275
        ],
        [
        'ten'=> 'Phường An Dương',
        'loai'=> 3,
        'parent_id'=> 275
        ],
        [
        'ten'=> 'Phường Trần Nguyên Hãn',
        'loai'=> 3,
        'parent_id'=> 275
        ],
        [
        'ten'=> 'Phường Hồ Nam',
        'loai'=> 3,
        'parent_id'=> 275
        ],
        [
        'ten'=> 'Phường Trại Cau',
        'loai'=> 3,
        'parent_id'=> 275
        ],
        [
        'ten'=> 'Phường Dư Hàng',
        'loai'=> 3,
        'parent_id'=> 275
        ],
        [
        'ten'=> 'Phường Hàng Kênh',
        'loai'=> 3,
        'parent_id'=> 275
        ],
        [
        'ten'=> 'Phường Đông Hải',
        'loai'=> 3,
        'parent_id'=> 275
        ],
        [
        'ten'=> 'Phường Niệm Nghĩa',
        'loai'=> 3,
        'parent_id'=> 275
        ],
        [
        'ten'=> 'Phường Nghĩa Xá',
        'loai'=> 3,
        'parent_id'=> 275
        ],
        [
        'ten'=> 'Phường Dư Hàng Kênh',
        'loai'=> 3,
        'parent_id'=> 275
        ],
        [
        'ten'=> 'Phường Kênh Dương',
        'loai'=> 3,
        'parent_id'=> 275
        ],
        [
        'ten'=> 'Phường Vĩnh Niệm',
        'loai'=> 3,
        'parent_id'=> 275
        ],
        [
        'ten'=> 'Phường Đông Hải 1',
        'loai'=> 3,
        'parent_id'=> 276
        ],
        [
        'ten'=> 'Phường Đông Hải 2',
        'loai'=> 3,
        'parent_id'=> 276
        ],
        [
        'ten'=> 'Phường Đằng Lâm',
        'loai'=> 3,
        'parent_id'=> 276
        ],
        [
        'ten'=> 'Phường Thành Tô',
        'loai'=> 3,
        'parent_id'=> 276
        ],
        [
        'ten'=> 'Phường Đằng Hải',
        'loai'=> 3,
        'parent_id'=> 276
        ],
        [
        'ten'=> 'Phường Nam Hải',
        'loai'=> 3,
        'parent_id'=> 276
        ],
        [
        'ten'=> 'Phường Cát Bi',
        'loai'=> 3,
        'parent_id'=> 276
        ],
        [
        'ten'=> 'Phường Tràng Cát',
        'loai'=> 3,
        'parent_id'=> 276
        ],
        [
        'ten'=> 'Phường Quán Trữ',
        'loai'=> 3,
        'parent_id'=> 277
        ],
        [
        'ten'=> 'Phường Lãm Hà',
        'loai'=> 3,
        'parent_id'=> 277
        ],
        [
        'ten'=> 'Phường Đồng Hoà',
        'loai'=> 3,
        'parent_id'=> 277
        ],
        [
        'ten'=> 'Phường Bắc Sơn',
        'loai'=> 3,
        'parent_id'=> 277
        ],
        [
        'ten'=> 'Phường Nam Sơn',
        'loai'=> 3,
        'parent_id'=> 277
        ],
        [
        'ten'=> 'Phường Ngọc Sơn',
        'loai'=> 3,
        'parent_id'=> 277
        ],
        [
        'ten'=> 'Phường Trần Thành Ngọ',
        'loai'=> 3,
        'parent_id'=> 277
        ],
        [
        'ten'=> 'Phường Văn Đẩu',
        'loai'=> 3,
        'parent_id'=> 277
        ],
        [
        'ten'=> 'Phường Phù Liễn',
        'loai'=> 3,
        'parent_id'=> 277
        ],
        [
        'ten'=> 'Phường Tràng Minh',
        'loai'=> 3,
        'parent_id'=> 277
        ],
        [
        'ten'=> 'Phường Ngọc Xuyên',
        'loai'=> 3,
        'parent_id'=> 278
        ],
        [
        'ten'=> 'Phường Hải Sơn',
        'loai'=> 3,
        'parent_id'=> 278
        ],
        [
        'ten'=> 'Phường Vạn Hương',
        'loai'=> 3,
        'parent_id'=> 278
        ],
        [
        'ten'=> 'Phường Minh Đức',
        'loai'=> 3,
        'parent_id'=> 278
        ],
        [
        'ten'=> 'Phường Bàng La',
        'loai'=> 3,
        'parent_id'=> 278
        ],
        [
        'ten'=> 'Phường Hợp Đức',
        'loai'=> 3,
        'parent_id'=> 278
        ],
        [
        'ten'=> 'Phường Đa Phúc',
        'loai'=> 3,
        'parent_id'=> 279
        ],
        [
        'ten'=> 'Phường Hưng Đạo',
        'loai'=> 3,
        'parent_id'=> 279
        ],
        [
        'ten'=> 'Phường Anh Dũng',
        'loai'=> 3,
        'parent_id'=> 279
        ],
        [
        'ten'=> 'Phường Hải Thành',
        'loai'=> 3,
        'parent_id'=> 279
        ],
        [
        'ten'=> 'Phường Hoà Nghĩa',
        'loai'=> 3,
        'parent_id'=> 279
        ],
        [
        'ten'=> 'Phường Tân Thành',
        'loai'=> 3,
        'parent_id'=> 279
        ],
        [
        'ten'=> 'Thị trấn Núi Đèo',
        'loai'=> 3,
        'parent_id'=> 280
        ],
        [
        'ten'=> 'Thị trấn Minh Đức',
        'loai'=> 3,
        'parent_id'=> 280
        ],
        [
        'ten'=> 'Xã Lại Xuân',
        'loai'=> 3,
        'parent_id'=> 280
        ],
        [
        'ten'=> 'Xã An Sơn',
        'loai'=> 3,
        'parent_id'=> 280
        ],
        [
        'ten'=> 'Xã Kỳ Sơn',
        'loai'=> 3,
        'parent_id'=> 280
        ],
        [
        'ten'=> 'Xã Liên Khê',
        'loai'=> 3,
        'parent_id'=> 280
        ],
        [
        'ten'=> 'Xã Lưu Kiếm',
        'loai'=> 3,
        'parent_id'=> 280
        ],
        [
        'ten'=> 'Xã Lưu Kỳ',
        'loai'=> 3,
        'parent_id'=> 280
        ],
        [
        'ten'=> 'Xã Gia Minh',
        'loai'=> 3,
        'parent_id'=> 280
        ],
        [
        'ten'=> 'Xã Gia Đức',
        'loai'=> 3,
        'parent_id'=> 280
        ],
        [
        'ten'=> 'Xã Minh Tân',
        'loai'=> 3,
        'parent_id'=> 280
        ],
        [
        'ten'=> 'Xã Phù Ninh',
        'loai'=> 3,
        'parent_id'=> 280
        ],
        [
        'ten'=> 'Xã Quảng Thanh',
        'loai'=> 3,
        'parent_id'=> 280
        ],
        [
        'ten'=> 'Xã Chính Mỹ',
        'loai'=> 3,
        'parent_id'=> 280
        ],
        [
        'ten'=> 'Xã Kênh Giang',
        'loai'=> 3,
        'parent_id'=> 280
        ],
        [
        'ten'=> 'Xã Hợp Thành',
        'loai'=> 3,
        'parent_id'=> 280
        ],
        [
        'ten'=> 'Xã Cao Nhân',
        'loai'=> 3,
        'parent_id'=> 280
        ],
        [
        'ten'=> 'Xã Mỹ Đồng',
        'loai'=> 3,
        'parent_id'=> 280
        ],
        [
        'ten'=> 'Xã Đông Sơn',
        'loai'=> 3,
        'parent_id'=> 280
        ],
        [
        'ten'=> 'Xã Hoà Bình',
        'loai'=> 3,
        'parent_id'=> 280
        ],
        [
        'ten'=> 'Xã Trung Hà',
        'loai'=> 3,
        'parent_id'=> 280
        ],
        [
        'ten'=> 'Xã An Lư',
        'loai'=> 3,
        'parent_id'=> 280
        ],
        [
        'ten'=> 'Xã Thuỷ Triều',
        'loai'=> 3,
        'parent_id'=> 280
        ],
        [
        'ten'=> 'Xã Ngũ Lão',
        'loai'=> 3,
        'parent_id'=> 280
        ],
        [
        'ten'=> 'Xã Phục Lễ',
        'loai'=> 3,
        'parent_id'=> 280
        ],
        [
        'ten'=> 'Xã Tam Hưng',
        'loai'=> 3,
        'parent_id'=> 280
        ],
        [
        'ten'=> 'Xã Phả Lễ',
        'loai'=> 3,
        'parent_id'=> 280
        ],
        [
        'ten'=> 'Xã Lập Lễ',
        'loai'=> 3,
        'parent_id'=> 280
        ],
        [
        'ten'=> 'Xã Kiền Bái',
        'loai'=> 3,
        'parent_id'=> 280
        ],
        [
        'ten'=> 'Xã Thiên Hương',
        'loai'=> 3,
        'parent_id'=> 280
        ],
        [
        'ten'=> 'Xã Thuỷ Sơn',
        'loai'=> 3,
        'parent_id'=> 280
        ],
        [
        'ten'=> 'Xã Thuỷ Đường',
        'loai'=> 3,
        'parent_id'=> 280
        ],
        [
        'ten'=> 'Xã Hoàng Động',
        'loai'=> 3,
        'parent_id'=> 280
        ],
        [
        'ten'=> 'Xã Lâm Động',
        'loai'=> 3,
        'parent_id'=> 280
        ],
        [
        'ten'=> 'Xã Hoa Động',
        'loai'=> 3,
        'parent_id'=> 280
        ],
        [
        'ten'=> 'Xã Tân Dương',
        'loai'=> 3,
        'parent_id'=> 280
        ],
        [
        'ten'=> 'Xã Dương Quan',
        'loai'=> 3,
        'parent_id'=> 280
        ],
        [
        'ten'=> 'Thị trấn An Dương',
        'loai'=> 3,
        'parent_id'=> 281
        ],
        [
        'ten'=> 'Xã Lê Thiện',
        'loai'=> 3,
        'parent_id'=> 281
        ],
        [
        'ten'=> 'Xã Đại Bản',
        'loai'=> 3,
        'parent_id'=> 281
        ],
        [
        'ten'=> 'Xã An Hoà',
        'loai'=> 3,
        'parent_id'=> 281
        ],
        [
        'ten'=> 'Xã Hồng Phong',
        'loai'=> 3,
        'parent_id'=> 281
        ],
        [
        'ten'=> 'Xã Tân Tiến',
        'loai'=> 3,
        'parent_id'=> 281
        ],
        [
        'ten'=> 'Xã An Hưng',
        'loai'=> 3,
        'parent_id'=> 281
        ],
        [
        'ten'=> 'Xã An Hồng',
        'loai'=> 3,
        'parent_id'=> 281
        ],
        [
        'ten'=> 'Xã Bắc Sơn',
        'loai'=> 3,
        'parent_id'=> 281
        ],
        [
        'ten'=> 'Xã Nam Sơn',
        'loai'=> 3,
        'parent_id'=> 281
        ],
        [
        'ten'=> 'Xã Lê Lợi',
        'loai'=> 3,
        'parent_id'=> 281
        ],
        [
        'ten'=> 'Xã Đặng Cương',
        'loai'=> 3,
        'parent_id'=> 281
        ],
        [
        'ten'=> 'Xã Đồng Thái',
        'loai'=> 3,
        'parent_id'=> 281
        ],
        [
        'ten'=> 'Xã Quốc Tuấn',
        'loai'=> 3,
        'parent_id'=> 281
        ],
        [
        'ten'=> 'Xã An Đồng',
        'loai'=> 3,
        'parent_id'=> 281
        ],
        [
        'ten'=> 'Xã Hồng Thái',
        'loai'=> 3,
        'parent_id'=> 281
        ],
        [
        'ten'=> 'Thị trấn An Lão',
        'loai'=> 3,
        'parent_id'=> 282
        ],
        [
        'ten'=> 'Xã Bát Trang',
        'loai'=> 3,
        'parent_id'=> 282
        ],
        [
        'ten'=> 'Xã Trường Thọ',
        'loai'=> 3,
        'parent_id'=> 282
        ],
        [
        'ten'=> 'Xã Trường Thành',
        'loai'=> 3,
        'parent_id'=> 282
        ],
        [
        'ten'=> 'Xã An Tiến',
        'loai'=> 3,
        'parent_id'=> 282
        ],
        [
        'ten'=> 'Xã Quang Hưng',
        'loai'=> 3,
        'parent_id'=> 282
        ],
        [
        'ten'=> 'Xã Quang Trung',
        'loai'=> 3,
        'parent_id'=> 282
        ],
        [
        'ten'=> 'Xã Quốc Tuấn',
        'loai'=> 3,
        'parent_id'=> 282
        ],
        [
        'ten'=> 'Xã An Thắng',
        'loai'=> 3,
        'parent_id'=> 282
        ],
        [
        'ten'=> 'Thị trấn Trường Sơn',
        'loai'=> 3,
        'parent_id'=> 282
        ],
        [
        'ten'=> 'Xã Tân Dân',
        'loai'=> 3,
        'parent_id'=> 282
        ],
        [
        'ten'=> 'Xã Thái Sơn',
        'loai'=> 3,
        'parent_id'=> 282
        ],
        [
        'ten'=> 'Xã Tân Viên',
        'loai'=> 3,
        'parent_id'=> 282
        ],
        [
        'ten'=> 'Xã Mỹ Đức',
        'loai'=> 3,
        'parent_id'=> 282
        ],
        [
        'ten'=> 'Xã Chiến Thắng',
        'loai'=> 3,
        'parent_id'=> 282
        ],
        [
        'ten'=> 'Xã An Thọ',
        'loai'=> 3,
        'parent_id'=> 282
        ],
        [
        'ten'=> 'Xã An Thái',
        'loai'=> 3,
        'parent_id'=> 282
        ],
        [
        'ten'=> 'Thị trấn Núi Đối',
        'loai'=> 3,
        'parent_id'=> 283
        ],
        [
        'ten'=> 'Xã Đông Phương',
        'loai'=> 3,
        'parent_id'=> 283
        ],
        [
        'ten'=> 'Xã Thuận Thiên',
        'loai'=> 3,
        'parent_id'=> 283
        ],
        [
        'ten'=> 'Xã Hữu Bằng',
        'loai'=> 3,
        'parent_id'=> 283
        ],
        [
        'ten'=> 'Xã Đại Đồng',
        'loai'=> 3,
        'parent_id'=> 283
        ],
        [
        'ten'=> 'Xã Ngũ Phúc',
        'loai'=> 3,
        'parent_id'=> 283
        ],
        [
        'ten'=> 'Xã Kiến Quốc',
        'loai'=> 3,
        'parent_id'=> 283
        ],
        [
        'ten'=> 'Xã Du Lễ',
        'loai'=> 3,
        'parent_id'=> 283
        ],
        [
        'ten'=> 'Xã Thuỵ Hương',
        'loai'=> 3,
        'parent_id'=> 283
        ],
        [
        'ten'=> 'Xã Thanh Sơn',
        'loai'=> 3,
        'parent_id'=> 283
        ],
        [
        'ten'=> 'Xã Minh Tân',
        'loai'=> 3,
        'parent_id'=> 283
        ],
        [
        'ten'=> 'Xã Đại Hà',
        'loai'=> 3,
        'parent_id'=> 283
        ],
        [
        'ten'=> 'Xã Ngũ Đoan',
        'loai'=> 3,
        'parent_id'=> 283
        ],
        [
        'ten'=> 'Xã Tân Phong',
        'loai'=> 3,
        'parent_id'=> 283
        ],
        [
        'ten'=> 'Xã Tân Trào',
        'loai'=> 3,
        'parent_id'=> 283
        ],
        [
        'ten'=> 'Xã Đoàn Xá',
        'loai'=> 3,
        'parent_id'=> 283
        ],
        [
        'ten'=> 'Xã Tú Sơn',
        'loai'=> 3,
        'parent_id'=> 283
        ],
        [
        'ten'=> 'Xã Đại Hợp',
        'loai'=> 3,
        'parent_id'=> 283
        ],
        [
        'ten'=> 'Thị trấn Tiên Lãng',
        'loai'=> 3,
        'parent_id'=> 284
        ],
        [
        'ten'=> 'Xã Đại Thắng',
        'loai'=> 3,
        'parent_id'=> 284
        ],
        [
        'ten'=> 'Xã Tiên Cường',
        'loai'=> 3,
        'parent_id'=> 284
        ],
        [
        'ten'=> 'Xã Tự Cường',
        'loai'=> 3,
        'parent_id'=> 284
        ],
        [
        'ten'=> 'Xã Quyết Tiến',
        'loai'=> 3,
        'parent_id'=> 284
        ],
        [
        'ten'=> 'Xã Khởi Nghĩa',
        'loai'=> 3,
        'parent_id'=> 284
        ],
        [
        'ten'=> 'Xã Tiên Thanh',
        'loai'=> 3,
        'parent_id'=> 284
        ],
        [
        'ten'=> 'Xã Cấp Tiến',
        'loai'=> 3,
        'parent_id'=> 284
        ],
        [
        'ten'=> 'Xã Kiến Thiết',
        'loai'=> 3,
        'parent_id'=> 284
        ],
        [
        'ten'=> 'Xã Đoàn Lập',
        'loai'=> 3,
        'parent_id'=> 284
        ],
        [
        'ten'=> 'Xã Bạch Đằng',
        'loai'=> 3,
        'parent_id'=> 284
        ],
        [
        'ten'=> 'Xã Quang Phục',
        'loai'=> 3,
        'parent_id'=> 284
        ],
        [
        'ten'=> 'Xã Toàn Thắng',
        'loai'=> 3,
        'parent_id'=> 284
        ],
        [
        'ten'=> 'Xã Tiên Thắng',
        'loai'=> 3,
        'parent_id'=> 284
        ],
        [
        'ten'=> 'Xã Tiên Minh',
        'loai'=> 3,
        'parent_id'=> 284
        ],
        [
        'ten'=> 'Xã Bắc Hưng',
        'loai'=> 3,
        'parent_id'=> 284
        ],
        [
        'ten'=> 'Xã Nam Hưng',
        'loai'=> 3,
        'parent_id'=> 284
        ],
        [
        'ten'=> 'Xã Hùng Thắng',
        'loai'=> 3,
        'parent_id'=> 284
        ],
        [
        'ten'=> 'Xã Tây Hưng',
        'loai'=> 3,
        'parent_id'=> 284
        ],
        [
        'ten'=> 'Xã Đông Hưng',
        'loai'=> 3,
        'parent_id'=> 284
        ],
        [
        'ten'=> 'Xã Vinh Quang',
        'loai'=> 3,
        'parent_id'=> 284
        ],
        [
        'ten'=> 'Thị trấn Vĩnh Bảo',
        'loai'=> 3,
        'parent_id'=> 285
        ],
        [
        'ten'=> 'Xã Dũng Tiến',
        'loai'=> 3,
        'parent_id'=> 285
        ],
        [
        'ten'=> 'Xã Giang Biên',
        'loai'=> 3,
        'parent_id'=> 285
        ],
        [
        'ten'=> 'Xã Thắng Thuỷ',
        'loai'=> 3,
        'parent_id'=> 285
        ],
        [
        'ten'=> 'Xã Trung Lập',
        'loai'=> 3,
        'parent_id'=> 285
        ],
        [
        'ten'=> 'Xã Việt Tiến',
        'loai'=> 3,
        'parent_id'=> 285
        ],
        [
        'ten'=> 'Xã Vĩnh An',
        'loai'=> 3,
        'parent_id'=> 285
        ],
        [
        'ten'=> 'Xã Vĩnh Long',
        'loai'=> 3,
        'parent_id'=> 285
        ],
        [
        'ten'=> 'Xã Hiệp Hoà',
        'loai'=> 3,
        'parent_id'=> 285
        ],
        [
        'ten'=> 'Xã Hùng Tiến',
        'loai'=> 3,
        'parent_id'=> 285
        ],
        [
        'ten'=> 'Xã An Hoà',
        'loai'=> 3,
        'parent_id'=> 285
        ],
        [
        'ten'=> 'Xã Tân Hưng',
        'loai'=> 3,
        'parent_id'=> 285
        ],
        [
        'ten'=> 'Xã Tân Liên',
        'loai'=> 3,
        'parent_id'=> 285
        ],
        [
        'ten'=> 'Xã Nhân Hoà',
        'loai'=> 3,
        'parent_id'=> 285
        ],
        [
        'ten'=> 'Xã Tam Đa',
        'loai'=> 3,
        'parent_id'=> 285
        ],
        [
        'ten'=> 'Xã Hưng Nhân',
        'loai'=> 3,
        'parent_id'=> 285
        ],
        [
        'ten'=> 'Xã Vinh Quang',
        'loai'=> 3,
        'parent_id'=> 285
        ],
        [
        'ten'=> 'Xã Đồng Minh',
        'loai'=> 3,
        'parent_id'=> 285
        ],
        [
        'ten'=> 'Xã Thanh Lương',
        'loai'=> 3,
        'parent_id'=> 285
        ],
        [
        'ten'=> 'Xã Liên Am',
        'loai'=> 3,
        'parent_id'=> 285
        ],
        [
        'ten'=> 'Xã Lý Học',
        'loai'=> 3,
        'parent_id'=> 285
        ],
        [
        'ten'=> 'Xã Tam Cường',
        'loai'=> 3,
        'parent_id'=> 285
        ],
        [
        'ten'=> 'Xã Hoà Bình',
        'loai'=> 3,
        'parent_id'=> 285
        ],
        [
        'ten'=> 'Xã Tiền Phong',
        'loai'=> 3,
        'parent_id'=> 285
        ],
        [
        'ten'=> 'Xã Vĩnh Phong',
        'loai'=> 3,
        'parent_id'=> 285
        ],
        [
        'ten'=> 'Xã Cộng Hiền',
        'loai'=> 3,
        'parent_id'=> 285
        ],
        [
        'ten'=> 'Xã Cao Minh',
        'loai'=> 3,
        'parent_id'=> 285
        ],
        [
        'ten'=> 'Xã Cổ Am',
        'loai'=> 3,
        'parent_id'=> 285
        ],
        [
        'ten'=> 'Xã Vĩnh Tiến',
        'loai'=> 3,
        'parent_id'=> 285
        ],
        [
        'ten'=> 'Xã Trấn Dương',
        'loai'=> 3,
        'parent_id'=> 285
        ],
        [
        'ten'=> 'Thị trấn Cát Bà',
        'loai'=> 3,
        'parent_id'=> 286
        ],
        [
        'ten'=> 'Thị trấn Cát Hải',
        'loai'=> 3,
        'parent_id'=> 286
        ],
        [
        'ten'=> 'Xã Nghĩa Lộ',
        'loai'=> 3,
        'parent_id'=> 286
        ],
        [
        'ten'=> 'Xã Đồng Bài',
        'loai'=> 3,
        'parent_id'=> 286
        ],
        [
        'ten'=> 'Xã Hoàng Châu',
        'loai'=> 3,
        'parent_id'=> 286
        ],
        [
        'ten'=> 'Xã Văn Phong',
        'loai'=> 3,
        'parent_id'=> 286
        ],
        [
        'ten'=> 'Xã Phù Long',
        'loai'=> 3,
        'parent_id'=> 286
        ],
        [
        'ten'=> 'Xã Gia Luận',
        'loai'=> 3,
        'parent_id'=> 286
        ],
        [
        'ten'=> 'Xã Hiền Hào',
        'loai'=> 3,
        'parent_id'=> 286
        ],
        [
        'ten'=> 'Xã Trân Châu',
        'loai'=> 3,
        'parent_id'=> 286
        ],
        [
        'ten'=> 'Xã Việt Hải',
        'loai'=> 3,
        'parent_id'=> 286
        ],
        [
        'ten'=> 'Xã Xuân Đám',
        'loai'=> 3,
        'parent_id'=> 286
        ],
        [
        'ten'=> 'Phường Lam Sơn',
        'loai'=> 3,
        'parent_id'=> 288
        ],
        [
        'ten'=> 'Phường Hiến Nam',
        'loai'=> 3,
        'parent_id'=> 288
        ],
        [
        'ten'=> 'Phường An Tảo',
        'loai'=> 3,
        'parent_id'=> 288
        ],
        [
        'ten'=> 'Phường Lê Lợi',
        'loai'=> 3,
        'parent_id'=> 288
        ],
        [
        'ten'=> 'Phường Minh Khai',
        'loai'=> 3,
        'parent_id'=> 288
        ],
        [
        'ten'=> 'Phường Quang Trung',
        'loai'=> 3,
        'parent_id'=> 288
        ],
        [
        'ten'=> 'Phường Hồng Châu',
        'loai'=> 3,
        'parent_id'=> 288
        ],
        [
        'ten'=> 'Xã Trung Nghĩa',
        'loai'=> 3,
        'parent_id'=> 288
        ],
        [
        'ten'=> 'Xã Liên Phương',
        'loai'=> 3,
        'parent_id'=> 288
        ],
        [
        'ten'=> 'Xã Hồng Nam',
        'loai'=> 3,
        'parent_id'=> 288
        ],
        [
        'ten'=> 'Xã Quảng Châu',
        'loai'=> 3,
        'parent_id'=> 288
        ],
        [
        'ten'=> 'Xã Bảo Khê',
        'loai'=> 3,
        'parent_id'=> 288
        ],
        [
        'ten'=> 'Xã Phú Cường',
        'loai'=> 3,
        'parent_id'=> 288
        ],
        [
        'ten'=> 'Xã Hùng Cường',
        'loai'=> 3,
        'parent_id'=> 288
        ],
        [
        'ten'=> 'Xã Phương Chiểu',
        'loai'=> 3,
        'parent_id'=> 288
        ],
        [
        'ten'=> 'Xã Tân Hưng',
        'loai'=> 3,
        'parent_id'=> 288
        ],
        [
        'ten'=> 'Xã Hoàng Hanh',
        'loai'=> 3,
        'parent_id'=> 288
        ],
        [
        'ten'=> 'Thị trấn Như Quỳnh',
        'loai'=> 3,
        'parent_id'=> 289
        ],
        [
        'ten'=> 'Xã Lạc Đạo',
        'loai'=> 3,
        'parent_id'=> 289
        ],
        [
        'ten'=> 'Xã Chỉ Đạo',
        'loai'=> 3,
        'parent_id'=> 289
        ],
        [
        'ten'=> 'Xã Đại Đồng',
        'loai'=> 3,
        'parent_id'=> 289
        ],
        [
        'ten'=> 'Xã Việt Hưng',
        'loai'=> 3,
        'parent_id'=> 289
        ],
        [
        'ten'=> 'Xã Tân Quang',
        'loai'=> 3,
        'parent_id'=> 289
        ],
        [
        'ten'=> 'Xã Đình Dù',
        'loai'=> 3,
        'parent_id'=> 289
        ],
        [
        'ten'=> 'Xã Minh Hải',
        'loai'=> 3,
        'parent_id'=> 289
        ],
        [
        'ten'=> 'Xã Lương Tài',
        'loai'=> 3,
        'parent_id'=> 289
        ],
        [
        'ten'=> 'Xã Trưng Trắc',
        'loai'=> 3,
        'parent_id'=> 289
        ],
        [
        'ten'=> 'Xã Lạc Hồng',
        'loai'=> 3,
        'parent_id'=> 289
        ],
        [
        'ten'=> 'Thị trấn Văn Giang',
        'loai'=> 3,
        'parent_id'=> 290
        ],
        [
        'ten'=> 'Xã Xuân Quan',
        'loai'=> 3,
        'parent_id'=> 290
        ],
        [
        'ten'=> 'Xã Cửu Cao',
        'loai'=> 3,
        'parent_id'=> 290
        ],
        [
        'ten'=> 'Xã Phụng Công',
        'loai'=> 3,
        'parent_id'=> 290
        ],
        [
        'ten'=> 'Xã Nghĩa Trụ',
        'loai'=> 3,
        'parent_id'=> 290
        ],
        [
        'ten'=> 'Xã Long Hưng',
        'loai'=> 3,
        'parent_id'=> 290
        ],
        [
        'ten'=> 'Xã Vĩnh Khúc',
        'loai'=> 3,
        'parent_id'=> 290
        ],
        [
        'ten'=> 'Xã Liên Nghĩa',
        'loai'=> 3,
        'parent_id'=> 290
        ],
        [
        'ten'=> 'Xã Tân Tiến',
        'loai'=> 3,
        'parent_id'=> 290
        ],
        [
        'ten'=> 'Xã Thắng Lợi',
        'loai'=> 3,
        'parent_id'=> 290
        ],
        [
        'ten'=> 'Xã Mễ Sở',
        'loai'=> 3,
        'parent_id'=> 290
        ],
        [
        'ten'=> 'Thị trấn Yên Mỹ',
        'loai'=> 3,
        'parent_id'=> 291
        ],
        [
        'ten'=> 'Xã Giai Phạm',
        'loai'=> 3,
        'parent_id'=> 291
        ],
        [
        'ten'=> 'Xã Nghĩa Hiệp',
        'loai'=> 3,
        'parent_id'=> 291
        ],
        [
        'ten'=> 'Xã Đồng Than',
        'loai'=> 3,
        'parent_id'=> 291
        ],
        [
        'ten'=> 'Xã Ngọc Long',
        'loai'=> 3,
        'parent_id'=> 291
        ],
        [
        'ten'=> 'Xã Liêu Xá',
        'loai'=> 3,
        'parent_id'=> 291
        ],
        [
        'ten'=> 'Xã Hoàn Long',
        'loai'=> 3,
        'parent_id'=> 291
        ],
        [
        'ten'=> 'Xã Tân Lập',
        'loai'=> 3,
        'parent_id'=> 291
        ],
        [
        'ten'=> 'Xã Thanh Long',
        'loai'=> 3,
        'parent_id'=> 291
        ],
        [
        'ten'=> 'Xã Yên Phú',
        'loai'=> 3,
        'parent_id'=> 291
        ],
        [
        'ten'=> 'Xã Việt Cường',
        'loai'=> 3,
        'parent_id'=> 291
        ],
        [
        'ten'=> 'Xã Trung Hòa',
        'loai'=> 3,
        'parent_id'=> 291
        ],
        [
        'ten'=> 'Xã Yên Hòa',
        'loai'=> 3,
        'parent_id'=> 291
        ],
        [
        'ten'=> 'Xã Minh Châu',
        'loai'=> 3,
        'parent_id'=> 291
        ],
        [
        'ten'=> 'Xã Trung Hưng',
        'loai'=> 3,
        'parent_id'=> 291
        ],
        [
        'ten'=> 'Xã Lý Thường Kiệt',
        'loai'=> 3,
        'parent_id'=> 291
        ],
        [
        'ten'=> 'Xã Tân Việt',
        'loai'=> 3,
        'parent_id'=> 291
        ],
        [
        'ten'=> 'Phường Bần Yên Nhân',
        'loai'=> 3,
        'parent_id'=> 292
        ],
        [
        'ten'=> 'Phường Phan Đình Phùng',
        'loai'=> 3,
        'parent_id'=> 292
        ],
        [
        'ten'=> 'Xã Cẩm Xá',
        'loai'=> 3,
        'parent_id'=> 292
        ],
        [
        'ten'=> 'Xã Dương Quang',
        'loai'=> 3,
        'parent_id'=> 292
        ],
        [
        'ten'=> 'Xã Hòa Phong',
        'loai'=> 3,
        'parent_id'=> 292
        ],
        [
        'ten'=> 'Phường Nhân Hòa',
        'loai'=> 3,
        'parent_id'=> 292
        ],
        [
        'ten'=> 'Phường Dị Sử',
        'loai'=> 3,
        'parent_id'=> 292
        ],
        [
        'ten'=> 'Phường Bạch Sam',
        'loai'=> 3,
        'parent_id'=> 292
        ],
        [
        'ten'=> 'Phường Minh Đức',
        'loai'=> 3,
        'parent_id'=> 292
        ],
        [
        'ten'=> 'Phường Phùng Chí Kiên',
        'loai'=> 3,
        'parent_id'=> 292
        ],
        [
        'ten'=> 'Xã Xuân Dục',
        'loai'=> 3,
        'parent_id'=> 292
        ],
        [
        'ten'=> 'Xã Ngọc Lâm',
        'loai'=> 3,
        'parent_id'=> 292
        ],
        [
        'ten'=> 'Xã Hưng Long',
        'loai'=> 3,
        'parent_id'=> 292
        ],
        [
        'ten'=> 'Thị trấn Ân Thi',
        'loai'=> 3,
        'parent_id'=> 293
        ],
        [
        'ten'=> 'Xã Phù Ủng',
        'loai'=> 3,
        'parent_id'=> 293
        ],
        [
        'ten'=> 'Xã Bắc Sơn',
        'loai'=> 3,
        'parent_id'=> 293
        ],
        [
        'ten'=> 'Xã Bãi Sậy',
        'loai'=> 3,
        'parent_id'=> 293
        ],
        [
        'ten'=> 'Xã Đào Dương',
        'loai'=> 3,
        'parent_id'=> 293
        ],
        [
        'ten'=> 'Xã Tân Phúc',
        'loai'=> 3,
        'parent_id'=> 293
        ],
        [
        'ten'=> 'Xã Vân Du',
        'loai'=> 3,
        'parent_id'=> 293
        ],
        [
        'ten'=> 'Xã Quang Vinh',
        'loai'=> 3,
        'parent_id'=> 293
        ],
        [
        'ten'=> 'Xã Xuân Trúc',
        'loai'=> 3,
        'parent_id'=> 293
        ],
        [
        'ten'=> 'Xã Hoàng Hoa Thám',
        'loai'=> 3,
        'parent_id'=> 293
        ],
        [
        'ten'=> 'Xã Quảng Lãng',
        'loai'=> 3,
        'parent_id'=> 293
        ],
        [
        'ten'=> 'Xã Văn Nhuệ',
        'loai'=> 3,
        'parent_id'=> 293
        ],
        [
        'ten'=> 'Xã Đặng Lễ',
        'loai'=> 3,
        'parent_id'=> 293
        ],
        [
        'ten'=> 'Xã Cẩm Ninh',
        'loai'=> 3,
        'parent_id'=> 293
        ],
        [
        'ten'=> 'Xã Nguyễn Trãi',
        'loai'=> 3,
        'parent_id'=> 293
        ],
        [
        'ten'=> 'Xã Đa Lộc',
        'loai'=> 3,
        'parent_id'=> 293
        ],
        [
        'ten'=> 'Xã Hồ Tùng Mậu',
        'loai'=> 3,
        'parent_id'=> 293
        ],
        [
        'ten'=> 'Xã Tiền Phong',
        'loai'=> 3,
        'parent_id'=> 293
        ],
        [
        'ten'=> 'Xã Hồng Vân',
        'loai'=> 3,
        'parent_id'=> 293
        ],
        [
        'ten'=> 'Xã Hồng Quang',
        'loai'=> 3,
        'parent_id'=> 293
        ],
        [
        'ten'=> 'Xã Hạ Lễ',
        'loai'=> 3,
        'parent_id'=> 293
        ],
        [
        'ten'=> 'Thị trấn Khoái Châu',
        'loai'=> 3,
        'parent_id'=> 294
        ],
        [
        'ten'=> 'Xã Đông Tảo',
        'loai'=> 3,
        'parent_id'=> 294
        ],
        [
        'ten'=> 'Xã Bình Minh',
        'loai'=> 3,
        'parent_id'=> 294
        ],
        [
        'ten'=> 'Xã Dạ Trạch',
        'loai'=> 3,
        'parent_id'=> 294
        ],
        [
        'ten'=> 'Xã Hàm Tử',
        'loai'=> 3,
        'parent_id'=> 294
        ],
        [
        'ten'=> 'Xã Ông Đình',
        'loai'=> 3,
        'parent_id'=> 294
        ],
        [
        'ten'=> 'Xã Tân Dân',
        'loai'=> 3,
        'parent_id'=> 294
        ],
        [
        'ten'=> 'Xã Tứ Dân',
        'loai'=> 3,
        'parent_id'=> 294
        ],
        [
        'ten'=> 'Xã An Vĩ',
        'loai'=> 3,
        'parent_id'=> 294
        ],
        [
        'ten'=> 'Xã Đông Kết',
        'loai'=> 3,
        'parent_id'=> 294
        ],
        [
        'ten'=> 'Xã Bình Kiều',
        'loai'=> 3,
        'parent_id'=> 294
        ],
        [
        'ten'=> 'Xã Dân Tiến',
        'loai'=> 3,
        'parent_id'=> 294
        ],
        [
        'ten'=> 'Xã Đồng Tiến',
        'loai'=> 3,
        'parent_id'=> 294
        ],
        [
        'ten'=> 'Xã Hồng Tiến',
        'loai'=> 3,
        'parent_id'=> 294
        ],
        [
        'ten'=> 'Xã Tân Châu',
        'loai'=> 3,
        'parent_id'=> 294
        ],
        [
        'ten'=> 'Xã Liên Khê',
        'loai'=> 3,
        'parent_id'=> 294
        ],
        [
        'ten'=> 'Xã Phùng Hưng',
        'loai'=> 3,
        'parent_id'=> 294
        ],
        [
        'ten'=> 'Xã Việt Hòa',
        'loai'=> 3,
        'parent_id'=> 294
        ],
        [
        'ten'=> 'Xã Đông Ninh',
        'loai'=> 3,
        'parent_id'=> 294
        ],
        [
        'ten'=> 'Xã Đại Tập',
        'loai'=> 3,
        'parent_id'=> 294
        ],
        [
        'ten'=> 'Xã Chí Tân',
        'loai'=> 3,
        'parent_id'=> 294
        ],
        [
        'ten'=> 'Xã Đại Hưng',
        'loai'=> 3,
        'parent_id'=> 294
        ],
        [
        'ten'=> 'Xã Thuần Hưng',
        'loai'=> 3,
        'parent_id'=> 294
        ],
        [
        'ten'=> 'Xã Thành Công',
        'loai'=> 3,
        'parent_id'=> 294
        ],
        [
        'ten'=> 'Xã Nhuế Dương',
        'loai'=> 3,
        'parent_id'=> 294
        ],
        [
        'ten'=> 'Thị trấn Lương Bằng',
        'loai'=> 3,
        'parent_id'=> 295
        ],
        [
        'ten'=> 'Xã Nghĩa Dân',
        'loai'=> 3,
        'parent_id'=> 295
        ],
        [
        'ten'=> 'Xã Toàn Thắng',
        'loai'=> 3,
        'parent_id'=> 295
        ],
        [
        'ten'=> 'Xã Vĩnh Xá',
        'loai'=> 3,
        'parent_id'=> 295
        ],
        [
        'ten'=> 'Xã Phạm Ngũ Lão',
        'loai'=> 3,
        'parent_id'=> 295
        ],
        [
        'ten'=> 'Xã Thọ Vinh',
        'loai'=> 3,
        'parent_id'=> 295
        ],
        [
        'ten'=> 'Xã Đồng Thanh',
        'loai'=> 3,
        'parent_id'=> 295
        ],
        [
        'ten'=> 'Xã Song Mai',
        'loai'=> 3,
        'parent_id'=> 295
        ],
        [
        'ten'=> 'Xã Chính Nghĩa',
        'loai'=> 3,
        'parent_id'=> 295
        ],
        [
        'ten'=> 'Xã Nhân La',
        'loai'=> 3,
        'parent_id'=> 295
        ],
        [
        'ten'=> 'Xã Phú Thịnh',
        'loai'=> 3,
        'parent_id'=> 295
        ],
        [
        'ten'=> 'Xã Mai Động',
        'loai'=> 3,
        'parent_id'=> 295
        ],
        [
        'ten'=> 'Xã Đức Hợp',
        'loai'=> 3,
        'parent_id'=> 295
        ],
        [
        'ten'=> 'Xã Hùng An',
        'loai'=> 3,
        'parent_id'=> 295
        ],
        [
        'ten'=> 'Xã Ngọc Thanh',
        'loai'=> 3,
        'parent_id'=> 295
        ],
        [
        'ten'=> 'Xã Vũ Xá',
        'loai'=> 3,
        'parent_id'=> 295
        ],
        [
        'ten'=> 'Xã Hiệp Cường',
        'loai'=> 3,
        'parent_id'=> 295
        ],
        [
        'ten'=> 'Thị trấn Vương',
        'loai'=> 3,
        'parent_id'=> 296
        ],
        [
        'ten'=> 'Xã Hưng Đạo',
        'loai'=> 3,
        'parent_id'=> 296
        ],
        [
        'ten'=> 'Xã Ngô Quyền',
        'loai'=> 3,
        'parent_id'=> 296
        ],
        [
        'ten'=> 'Xã Nhật Tân',
        'loai'=> 3,
        'parent_id'=> 296
        ],
        [
        'ten'=> 'Xã Dị Chế',
        'loai'=> 3,
        'parent_id'=> 296
        ],
        [
        'ten'=> 'Xã Lệ Xá',
        'loai'=> 3,
        'parent_id'=> 296
        ],
        [
        'ten'=> 'Xã An Viên',
        'loai'=> 3,
        'parent_id'=> 296
        ],
        [
        'ten'=> 'Xã Đức Thắng',
        'loai'=> 3,
        'parent_id'=> 296
        ],
        [
        'ten'=> 'Xã Trung Dũng',
        'loai'=> 3,
        'parent_id'=> 296
        ],
        [
        'ten'=> 'Xã Hải Triều',
        'loai'=> 3,
        'parent_id'=> 296
        ],
        [
        'ten'=> 'Xã Thủ Sỹ',
        'loai'=> 3,
        'parent_id'=> 296
        ],
        [
        'ten'=> 'Xã Thiện Phiến',
        'loai'=> 3,
        'parent_id'=> 296
        ],
        [
        'ten'=> 'Xã Thụy Lôi',
        'loai'=> 3,
        'parent_id'=> 296
        ],
        [
        'ten'=> 'Xã Cương Chính',
        'loai'=> 3,
        'parent_id'=> 296
        ],
        [
        'ten'=> 'Xã Minh Phượng',
        'loai'=> 3,
        'parent_id'=> 296
        ],
        [
        'ten'=> 'Thị trấn Trần Cao',
        'loai'=> 3,
        'parent_id'=> 297
        ],
        [
        'ten'=> 'Xã Minh Tân',
        'loai'=> 3,
        'parent_id'=> 297
        ],
        [
        'ten'=> 'Xã Phan Sào Nam',
        'loai'=> 3,
        'parent_id'=> 297
        ],
        [
        'ten'=> 'Xã Quang Hưng',
        'loai'=> 3,
        'parent_id'=> 297
        ],
        [
        'ten'=> 'Xã Minh Hoàng',
        'loai'=> 3,
        'parent_id'=> 297
        ],
        [
        'ten'=> 'Xã Đoàn Đào',
        'loai'=> 3,
        'parent_id'=> 297
        ],
        [
        'ten'=> 'Xã Tống Phan',
        'loai'=> 3,
        'parent_id'=> 297
        ],
        [
        'ten'=> 'Xã Đình Cao',
        'loai'=> 3,
        'parent_id'=> 297
        ],
        [
        'ten'=> 'Xã Nhật Quang',
        'loai'=> 3,
        'parent_id'=> 297
        ],
        [
        'ten'=> 'Xã Tiền Tiến',
        'loai'=> 3,
        'parent_id'=> 297
        ],
        [
        'ten'=> 'Xã Tam Đa',
        'loai'=> 3,
        'parent_id'=> 297
        ],
        [
        'ten'=> 'Xã Minh Tiến',
        'loai'=> 3,
        'parent_id'=> 297
        ],
        [
        'ten'=> 'Xã Nguyên Hòa',
        'loai'=> 3,
        'parent_id'=> 297
        ],
        [
        'ten'=> 'Xã Tống Trân',
        'loai'=> 3,
        'parent_id'=> 297
        ],
        [
        'ten'=> 'Phường Lê Hồng Phong',
        'loai'=> 3,
        'parent_id'=> 298
        ],
        [
        'ten'=> 'Phường Bồ Xuyên',
        'loai'=> 3,
        'parent_id'=> 298
        ],
        [
        'ten'=> 'Phường Đề Thám',
        'loai'=> 3,
        'parent_id'=> 298
        ],
        [
        'ten'=> 'Phường Kỳ Bá',
        'loai'=> 3,
        'parent_id'=> 298
        ],
        [
        'ten'=> 'Phường Quang Trung',
        'loai'=> 3,
        'parent_id'=> 298
        ],
        [
        'ten'=> 'Phường Phú Khánh',
        'loai'=> 3,
        'parent_id'=> 298
        ],
        [
        'ten'=> 'Phường Tiền Phong',
        'loai'=> 3,
        'parent_id'=> 298
        ],
        [
        'ten'=> 'Phường Trần Hưng Đạo',
        'loai'=> 3,
        'parent_id'=> 298
        ],
        [
        'ten'=> 'Phường Trần Lãm',
        'loai'=> 3,
        'parent_id'=> 298
        ],
        [
        'ten'=> 'Xã Đông Hòa',
        'loai'=> 3,
        'parent_id'=> 298
        ],
        [
        'ten'=> 'Phường Hoàng Diệu',
        'loai'=> 3,
        'parent_id'=> 298
        ],
        [
        'ten'=> 'Xã Phú Xuân',
        'loai'=> 3,
        'parent_id'=> 298
        ],
        [
        'ten'=> 'Xã Vũ Phúc',
        'loai'=> 3,
        'parent_id'=> 298
        ],
        [
        'ten'=> 'Xã Vũ Chính',
        'loai'=> 3,
        'parent_id'=> 298
        ],
        [
        'ten'=> 'Xã Đông Mỹ',
        'loai'=> 3,
        'parent_id'=> 298
        ],
        [
        'ten'=> 'Xã Đông Thọ',
        'loai'=> 3,
        'parent_id'=> 298
        ],
        [
        'ten'=> 'Xã Vũ Đông',
        'loai'=> 3,
        'parent_id'=> 298
        ],
        [
        'ten'=> 'Xã Vũ Lạc',
        'loai'=> 3,
        'parent_id'=> 298
        ],
        [
        'ten'=> 'Xã Tân Bình',
        'loai'=> 3,
        'parent_id'=> 298
        ],
        [
        'ten'=> 'Thị trấn Quỳnh Côi',
        'loai'=> 3,
        'parent_id'=> 299
        ],
        [
        'ten'=> 'Xã An Khê',
        'loai'=> 3,
        'parent_id'=> 299
        ],
        [
        'ten'=> 'Xã An Đồng',
        'loai'=> 3,
        'parent_id'=> 299
        ],
        [
        'ten'=> 'Xã Quỳnh Hoa',
        'loai'=> 3,
        'parent_id'=> 299
        ],
        [
        'ten'=> 'Xã Quỳnh Lâm',
        'loai'=> 3,
        'parent_id'=> 299
        ],
        [
        'ten'=> 'Xã Quỳnh Thọ',
        'loai'=> 3,
        'parent_id'=> 299
        ],
        [
        'ten'=> 'Xã An Hiệp',
        'loai'=> 3,
        'parent_id'=> 299
        ],
        [
        'ten'=> 'Xã Quỳnh Hoàng',
        'loai'=> 3,
        'parent_id'=> 299
        ],
        [
        'ten'=> 'Xã Quỳnh Giao',
        'loai'=> 3,
        'parent_id'=> 299
        ],
        [
        'ten'=> 'Xã An Thái',
        'loai'=> 3,
        'parent_id'=> 299
        ],
        [
        'ten'=> 'Xã An Cầu',
        'loai'=> 3,
        'parent_id'=> 299
        ],
        [
        'ten'=> 'Xã Quỳnh Hồng',
        'loai'=> 3,
        'parent_id'=> 299
        ],
        [
        'ten'=> 'Xã Quỳnh Khê',
        'loai'=> 3,
        'parent_id'=> 299
        ],
        [
        'ten'=> 'Xã Quỳnh Minh',
        'loai'=> 3,
        'parent_id'=> 299
        ],
        [
        'ten'=> 'Xã An Ninh',
        'loai'=> 3,
        'parent_id'=> 299
        ],
        [
        'ten'=> 'Xã Quỳnh Ngọc',
        'loai'=> 3,
        'parent_id'=> 299
        ],
        [
        'ten'=> 'Xã Quỳnh Hải',
        'loai'=> 3,
        'parent_id'=> 299
        ],
        [
        'ten'=> 'Thị trấn An Bài',
        'loai'=> 3,
        'parent_id'=> 299
        ],
        [
        'ten'=> 'Xã An Ấp',
        'loai'=> 3,
        'parent_id'=> 299
        ],
        [
        'ten'=> 'Xã Quỳnh Hội',
        'loai'=> 3,
        'parent_id'=> 299
        ],
        [
        'ten'=> 'Xã Châu Sơn',
        'loai'=> 3,
        'parent_id'=> 299
        ],
        [
        'ten'=> 'Xã Quỳnh Mỹ',
        'loai'=> 3,
        'parent_id'=> 299
        ],
        [
        'ten'=> 'Xã An Quí',
        'loai'=> 3,
        'parent_id'=> 299
        ],
        [
        'ten'=> 'Xã An Thanh',
        'loai'=> 3,
        'parent_id'=> 299
        ],
        [
        'ten'=> 'Xã An Vũ',
        'loai'=> 3,
        'parent_id'=> 299
        ],
        [
        'ten'=> 'Xã An Lễ',
        'loai'=> 3,
        'parent_id'=> 299
        ],
        [
        'ten'=> 'Xã Quỳnh Hưng',
        'loai'=> 3,
        'parent_id'=> 299
        ],
        [
        'ten'=> 'Xã Quỳnh Bảo',
        'loai'=> 3,
        'parent_id'=> 299
        ],
        [
        'ten'=> 'Xã An Mỹ',
        'loai'=> 3,
        'parent_id'=> 299
        ],
        [
        'ten'=> 'Xã Quỳnh Nguyên',
        'loai'=> 3,
        'parent_id'=> 299
        ],
        [
        'ten'=> 'Xã An Vinh',
        'loai'=> 3,
        'parent_id'=> 299
        ],
        [
        'ten'=> 'Xã Quỳnh Xá',
        'loai'=> 3,
        'parent_id'=> 299
        ],
        [
        'ten'=> 'Xã An Dục',
        'loai'=> 3,
        'parent_id'=> 299
        ],
        [
        'ten'=> 'Xã Đông Hải',
        'loai'=> 3,
        'parent_id'=> 299
        ],
        [
        'ten'=> 'Xã Quỳnh Trang',
        'loai'=> 3,
        'parent_id'=> 299
        ],
        [
        'ten'=> 'Xã An Tràng',
        'loai'=> 3,
        'parent_id'=> 299
        ],
        [
        'ten'=> 'Xã Đồng Tiến',
        'loai'=> 3,
        'parent_id'=> 299
        ],
        [
        'ten'=> 'Thị trấn Hưng Hà',
        'loai'=> 3,
        'parent_id'=> 300
        ],
        [
        'ten'=> 'Xã Điệp Nông',
        'loai'=> 3,
        'parent_id'=> 300
        ],
        [
        'ten'=> 'Xã Tân Lễ',
        'loai'=> 3,
        'parent_id'=> 300
        ],
        [
        'ten'=> 'Xã Cộng Hòa',
        'loai'=> 3,
        'parent_id'=> 300
        ],
        [
        'ten'=> 'Xã Dân Chủ',
        'loai'=> 3,
        'parent_id'=> 300
        ],
        [
        'ten'=> 'Xã Canh Tân',
        'loai'=> 3,
        'parent_id'=> 300
        ],
        [
        'ten'=> 'Xã Hòa Tiến',
        'loai'=> 3,
        'parent_id'=> 300
        ],
        [
        'ten'=> 'Xã Hùng Dũng',
        'loai'=> 3,
        'parent_id'=> 300
        ],
        [
        'ten'=> 'Xã Tân Tiến',
        'loai'=> 3,
        'parent_id'=> 300
        ],
        [
        'ten'=> 'Thị trấn Hưng Nhân',
        'loai'=> 3,
        'parent_id'=> 300
        ],
        [
        'ten'=> 'Xã Đoan Hùng',
        'loai'=> 3,
        'parent_id'=> 300
        ],
        [
        'ten'=> 'Xã Duyên Hải',
        'loai'=> 3,
        'parent_id'=> 300
        ],
        [
        'ten'=> 'Xã Tân Hòa',
        'loai'=> 3,
        'parent_id'=> 300
        ],
        [
        'ten'=> 'Xã Văn Cẩm',
        'loai'=> 3,
        'parent_id'=> 300
        ],
        [
        'ten'=> 'Xã Bắc Sơn',
        'loai'=> 3,
        'parent_id'=> 300
        ],
        [
        'ten'=> 'Xã Đông Đô',
        'loai'=> 3,
        'parent_id'=> 300
        ],
        [
        'ten'=> 'Xã Phúc Khánh',
        'loai'=> 3,
        'parent_id'=> 300
        ],
        [
        'ten'=> 'Xã Liên Hiệp',
        'loai'=> 3,
        'parent_id'=> 300
        ],
        [
        'ten'=> 'Xã Tây Đô',
        'loai'=> 3,
        'parent_id'=> 300
        ],
        [
        'ten'=> 'Xã Thống Nhất',
        'loai'=> 3,
        'parent_id'=> 300
        ],
        [
        'ten'=> 'Xã Tiến Đức',
        'loai'=> 3,
        'parent_id'=> 300
        ],
        [
        'ten'=> 'Xã Thái Hưng',
        'loai'=> 3,
        'parent_id'=> 300
        ],
        [
        'ten'=> 'Xã Thái Phương',
        'loai'=> 3,
        'parent_id'=> 300
        ],
        [
        'ten'=> 'Xã Hòa Bình',
        'loai'=> 3,
        'parent_id'=> 300
        ],
        [
        'ten'=> 'Xã Chi Lăng',
        'loai'=> 3,
        'parent_id'=> 300
        ],
        [
        'ten'=> 'Xã Minh Khai',
        'loai'=> 3,
        'parent_id'=> 300
        ],
        [
        'ten'=> 'Xã Hồng An',
        'loai'=> 3,
        'parent_id'=> 300
        ],
        [
        'ten'=> 'Xã Kim Chung',
        'loai'=> 3,
        'parent_id'=> 300
        ],
        [
        'ten'=> 'Xã Hồng Lĩnh',
        'loai'=> 3,
        'parent_id'=> 300
        ],
        [
        'ten'=> 'Xã Minh Tân',
        'loai'=> 3,
        'parent_id'=> 300
        ],
        [
        'ten'=> 'Xã Văn Lang',
        'loai'=> 3,
        'parent_id'=> 300
        ],
        [
        'ten'=> 'Xã Độc Lập',
        'loai'=> 3,
        'parent_id'=> 300
        ],
        [
        'ten'=> 'Xã Chí Hòa',
        'loai'=> 3,
        'parent_id'=> 300
        ],
        [
        'ten'=> 'Xã Minh Hòa',
        'loai'=> 3,
        'parent_id'=> 300
        ],
        [
        'ten'=> 'Xã Hồng Minh',
        'loai'=> 3,
        'parent_id'=> 300
        ],
        [
        'ten'=> 'Thị trấn Đông Hưng',
        'loai'=> 3,
        'parent_id'=> 301
        ],
        [
        'ten'=> 'Xã Đô Lương',
        'loai'=> 3,
        'parent_id'=> 301
        ],
        [
        'ten'=> 'Xã Đông Phương',
        'loai'=> 3,
        'parent_id'=> 301
        ],
        [
        'ten'=> 'Xã Liên Giang',
        'loai'=> 3,
        'parent_id'=> 301
        ],
        [
        'ten'=> 'Xã An Châu',
        'loai'=> 3,
        'parent_id'=> 301
        ],
        [
        'ten'=> 'Xã Đông Sơn',
        'loai'=> 3,
        'parent_id'=> 301
        ],
        [
        'ten'=> 'Xã Đông Cường',
        'loai'=> 3,
        'parent_id'=> 301
        ],
        [
        'ten'=> 'Xã Phú Lương',
        'loai'=> 3,
        'parent_id'=> 301
        ],
        [
        'ten'=> 'Xã Mê Linh',
        'loai'=> 3,
        'parent_id'=> 301
        ],
        [
        'ten'=> 'Xã Lô Giang',
        'loai'=> 3,
        'parent_id'=> 301
        ],
        [
        'ten'=> 'Xã Đông La',
        'loai'=> 3,
        'parent_id'=> 301
        ],
        [
        'ten'=> 'Xã Minh Tân',
        'loai'=> 3,
        'parent_id'=> 301
        ],
        [
        'ten'=> 'Xã Đông Xá',
        'loai'=> 3,
        'parent_id'=> 301
        ],
        [
        'ten'=> 'Xã Chương Dương',
        'loai'=> 3,
        'parent_id'=> 301
        ],
        [
        'ten'=> 'Xã Nguyên Xá',
        'loai'=> 3,
        'parent_id'=> 301
        ],
        [
        'ten'=> 'Xã Phong Châu',
        'loai'=> 3,
        'parent_id'=> 301
        ],
        [
        'ten'=> 'Xã Hợp Tiến',
        'loai'=> 3,
        'parent_id'=> 301
        ],
        [
        'ten'=> 'Xã Hồng Việt',
        'loai'=> 3,
        'parent_id'=> 301
        ],
        [
        'ten'=> 'Xã Hà Giang',
        'loai'=> 3,
        'parent_id'=> 301
        ],
        [
        'ten'=> 'Xã Đông Kinh',
        'loai'=> 3,
        'parent_id'=> 301
        ],
        [
        'ten'=> 'Xã Đông Hợp',
        'loai'=> 3,
        'parent_id'=> 301
        ],
        [
        'ten'=> 'Xã Thăng Long',
        'loai'=> 3,
        'parent_id'=> 301
        ],
        [
        'ten'=> 'Xã Đông Các',
        'loai'=> 3,
        'parent_id'=> 301
        ],
        [
        'ten'=> 'Xã Phú Châu',
        'loai'=> 3,
        'parent_id'=> 301
        ],
        [
        'ten'=> 'Xã Liên Hoa',
        'loai'=> 3,
        'parent_id'=> 301
        ],
        [
        'ten'=> 'Xã Đông Tân',
        'loai'=> 3,
        'parent_id'=> 301
        ],
        [
        'ten'=> 'Xã Đông Vinh',
        'loai'=> 3,
        'parent_id'=> 301
        ],
        [
        'ten'=> 'Xã Đông Động',
        'loai'=> 3,
        'parent_id'=> 301
        ],
        [
        'ten'=> 'Xã Hồng Bạch',
        'loai'=> 3,
        'parent_id'=> 301
        ],
        [
        'ten'=> 'Xã Trọng Quan',
        'loai'=> 3,
        'parent_id'=> 301
        ],
        [
        'ten'=> 'Xã Hồng Giang',
        'loai'=> 3,
        'parent_id'=> 301
        ],
        [
        'ten'=> 'Xã Đông Quan',
        'loai'=> 3,
        'parent_id'=> 301
        ],
        [
        'ten'=> 'Xã Đông Quang',
        'loai'=> 3,
        'parent_id'=> 301
        ],
        [
        'ten'=> 'Xã Đông Xuân',
        'loai'=> 3,
        'parent_id'=> 301
        ],
        [
        'ten'=> 'Xã Đông Á',
        'loai'=> 3,
        'parent_id'=> 301
        ],
        [
        'ten'=> 'Xã Đông Hoàng',
        'loai'=> 3,
        'parent_id'=> 301
        ],
        [
        'ten'=> 'Xã Đông Dương',
        'loai'=> 3,
        'parent_id'=> 301
        ],
        [
        'ten'=> 'Xã Minh Phú',
        'loai'=> 3,
        'parent_id'=> 301
        ],
        [
        'ten'=> 'Thị trấn Diêm Điền',
        'loai'=> 3,
        'parent_id'=> 302
        ],
        [
        'ten'=> 'Xã Thụy Trường',
        'loai'=> 3,
        'parent_id'=> 302
        ],
        [
        'ten'=> 'Xã Hồng Dũng',
        'loai'=> 3,
        'parent_id'=> 302
        ],
        [
        'ten'=> 'Xã Thụy Quỳnh',
        'loai'=> 3,
        'parent_id'=> 302
        ],
        [
        'ten'=> 'Xã An Tân',
        'loai'=> 3,
        'parent_id'=> 302
        ],
        [
        'ten'=> 'Xã Thụy Ninh',
        'loai'=> 3,
        'parent_id'=> 302
        ],
        [
        'ten'=> 'Xã Thụy Hưng',
        'loai'=> 3,
        'parent_id'=> 302
        ],
        [
        'ten'=> 'Xã Thụy Việt',
        'loai'=> 3,
        'parent_id'=> 302
        ],
        [
        'ten'=> 'Xã Thụy Văn',
        'loai'=> 3,
        'parent_id'=> 302
        ],
        [
        'ten'=> 'Xã Thụy Xuân',
        'loai'=> 3,
        'parent_id'=> 302
        ],
        [
        'ten'=> 'Xã Dương Phúc',
        'loai'=> 3,
        'parent_id'=> 302
        ],
        [
        'ten'=> 'Xã Thụy Trình',
        'loai'=> 3,
        'parent_id'=> 302
        ],
        [
        'ten'=> 'Xã Thụy Bình',
        'loai'=> 3,
        'parent_id'=> 302
        ],
        [
        'ten'=> 'Xã Thụy Chính',
        'loai'=> 3,
        'parent_id'=> 302
        ],
        [
        'ten'=> 'Xã Thụy Dân',
        'loai'=> 3,
        'parent_id'=> 302
        ],
        [
        'ten'=> 'Xã Thụy Hải',
        'loai'=> 3,
        'parent_id'=> 302
        ],
        [
        'ten'=> 'Xã Thụy Liên',
        'loai'=> 3,
        'parent_id'=> 302
        ],
        [
        'ten'=> 'Xã Thụy Duyên',
        'loai'=> 3,
        'parent_id'=> 302
        ],
        [
        'ten'=> 'Xã Thụy Thanh',
        'loai'=> 3,
        'parent_id'=> 302
        ],
        [
        'ten'=> 'Xã Thụy Sơn',
        'loai'=> 3,
        'parent_id'=> 302
        ],
        [
        'ten'=> 'Xã Thụy Phong',
        'loai'=> 3,
        'parent_id'=> 302
        ],
        [
        'ten'=> 'Xã Thái Thượng',
        'loai'=> 3,
        'parent_id'=> 302
        ],
        [
        'ten'=> 'Xã Thái Nguyên',
        'loai'=> 3,
        'parent_id'=> 302
        ],
        [
        'ten'=> 'Xã Dương Hồng  Thủy',
        'loai'=> 3,
        'parent_id'=> 302
        ],
        [
        'ten'=> 'Xã Thái Giang',
        'loai'=> 3,
        'parent_id'=> 302
        ],
        [
        'ten'=> 'Xã Hòa An',
        'loai'=> 3,
        'parent_id'=> 302
        ],
        [
        'ten'=> 'Xã Sơn Hà',
        'loai'=> 3,
        'parent_id'=> 302
        ],
        [
        'ten'=> 'Xã Thái Phúc',
        'loai'=> 3,
        'parent_id'=> 302
        ],
        [
        'ten'=> 'Xã Thái Hưng',
        'loai'=> 3,
        'parent_id'=> 302
        ],
        [
        'ten'=> 'Xã Thái Đô',
        'loai'=> 3,
        'parent_id'=> 302
        ],
        [
        'ten'=> 'Xã Thái Xuyên',
        'loai'=> 3,
        'parent_id'=> 302
        ],
        [
        'ten'=> 'Xã  Mỹ Lộc',
        'loai'=> 3,
        'parent_id'=> 302
        ],
        [
        'ten'=> 'Xã Tân Học',
        'loai'=> 3,
        'parent_id'=> 302
        ],
        [
        'ten'=> 'Xã Thái Thịnh',
        'loai'=> 3,
        'parent_id'=> 302
        ],
        [
        'ten'=> 'Xã Thuần Thành',
        'loai'=> 3,
        'parent_id'=> 302
        ],
        [
        'ten'=> 'Xã Thái Thọ',
        'loai'=> 3,
        'parent_id'=> 302
        ],
        [
        'ten'=> 'Thị trấn Tiền Hải',
        'loai'=> 3,
        'parent_id'=> 303
        ],
        [
        'ten'=> 'Xã Đông Trà',
        'loai'=> 3,
        'parent_id'=> 303
        ],
        [
        'ten'=> 'Xã Đông Long',
        'loai'=> 3,
        'parent_id'=> 303
        ],
        [
        'ten'=> 'Xã Đông Quí',
        'loai'=> 3,
        'parent_id'=> 303
        ],
        [
        'ten'=> 'Xã Vũ Lăng',
        'loai'=> 3,
        'parent_id'=> 303
        ],
        [
        'ten'=> 'Xã Đông Xuyên',
        'loai'=> 3,
        'parent_id'=> 303
        ],
        [
        'ten'=> 'Xã Tây Lương',
        'loai'=> 3,
        'parent_id'=> 303
        ],
        [
        'ten'=> 'Xã Tây Ninh',
        'loai'=> 3,
        'parent_id'=> 303
        ],
        [
        'ten'=> 'Xã Đông Trung',
        'loai'=> 3,
        'parent_id'=> 303
        ],
        [
        'ten'=> 'Xã Đông Hoàng',
        'loai'=> 3,
        'parent_id'=> 303
        ],
        [
        'ten'=> 'Xã Đông Minh',
        'loai'=> 3,
        'parent_id'=> 303
        ],
        [
        'ten'=> 'Xã Đông Phong',
        'loai'=> 3,
        'parent_id'=> 303
        ],
        [
        'ten'=> 'Xã An Ninh',
        'loai'=> 3,
        'parent_id'=> 303
        ],
        [
        'ten'=> 'Xã Đông Cơ',
        'loai'=> 3,
        'parent_id'=> 303
        ],
        [
        'ten'=> 'Xã Tây Giang',
        'loai'=> 3,
        'parent_id'=> 303
        ],
        [
        'ten'=> 'Xã Đông Lâm',
        'loai'=> 3,
        'parent_id'=> 303
        ],
        [
        'ten'=> 'Xã Phương Công',
        'loai'=> 3,
        'parent_id'=> 303
        ],
        [
        'ten'=> 'Xã Tây Phong',
        'loai'=> 3,
        'parent_id'=> 303
        ],
        [
        'ten'=> 'Xã Tây Tiến',
        'loai'=> 3,
        'parent_id'=> 303
        ],
        [
        'ten'=> 'Xã Nam Cường',
        'loai'=> 3,
        'parent_id'=> 303
        ],
        [
        'ten'=> 'Xã Vân Trường',
        'loai'=> 3,
        'parent_id'=> 303
        ],
        [
        'ten'=> 'Xã Nam Thắng',
        'loai'=> 3,
        'parent_id'=> 303
        ],
        [
        'ten'=> 'Xã Nam Chính',
        'loai'=> 3,
        'parent_id'=> 303
        ],
        [
        'ten'=> 'Xã Bắc Hải',
        'loai'=> 3,
        'parent_id'=> 303
        ],
        [
        'ten'=> 'Xã Nam Thịnh',
        'loai'=> 3,
        'parent_id'=> 303
        ],
        [
        'ten'=> 'Xã Nam Hà',
        'loai'=> 3,
        'parent_id'=> 303
        ],
        [
        'ten'=> 'Xã Nam Thanh',
        'loai'=> 3,
        'parent_id'=> 303
        ],
        [
        'ten'=> 'Xã Nam Trung',
        'loai'=> 3,
        'parent_id'=> 303
        ],
        [
        'ten'=> 'Xã Nam Hồng',
        'loai'=> 3,
        'parent_id'=> 303
        ],
        [
        'ten'=> 'Xã Nam Hưng',
        'loai'=> 3,
        'parent_id'=> 303
        ],
        [
        'ten'=> 'Xã Nam Hải',
        'loai'=> 3,
        'parent_id'=> 303
        ],
        [
        'ten'=> 'Xã Nam Phú',
        'loai'=> 3,
        'parent_id'=> 303
        ],
        [
        'ten'=> 'Thị trấn Kiến Xương',
        'loai'=> 3,
        'parent_id'=> 304
        ],
        [
        'ten'=> 'Xã Trà Giang',
        'loai'=> 3,
        'parent_id'=> 304
        ],
        [
        'ten'=> 'Xã Quốc Tuấn',
        'loai'=> 3,
        'parent_id'=> 304
        ],
        [
        'ten'=> 'Xã An Bình',
        'loai'=> 3,
        'parent_id'=> 304
        ],
        [
        'ten'=> 'Xã Tây Sơn',
        'loai'=> 3,
        'parent_id'=> 304
        ],
        [
        'ten'=> 'Xã Hồng Thái',
        'loai'=> 3,
        'parent_id'=> 304
        ],
        [
        'ten'=> 'Xã Bình Nguyên',
        'loai'=> 3,
        'parent_id'=> 304
        ],
        [
        'ten'=> 'Xã Lê Lợi',
        'loai'=> 3,
        'parent_id'=> 304
        ],
        [
        'ten'=> 'Xã Vũ Lễ',
        'loai'=> 3,
        'parent_id'=> 304
        ],
        [
        'ten'=> 'Xã Thanh Tân',
        'loai'=> 3,
        'parent_id'=> 304
        ],
        [
        'ten'=> 'Xã Thượng Hiền',
        'loai'=> 3,
        'parent_id'=> 304
        ],
        [
        'ten'=> 'Xã Nam Cao',
        'loai'=> 3,
        'parent_id'=> 304
        ],
        [
        'ten'=> 'Xã Đình Phùng',
        'loai'=> 3,
        'parent_id'=> 304
        ],
        [
        'ten'=> 'Xã Vũ Ninh',
        'loai'=> 3,
        'parent_id'=> 304
        ],
        [
        'ten'=> 'Xã Vũ An',
        'loai'=> 3,
        'parent_id'=> 304
        ],
        [
        'ten'=> 'Xã Quang Lịch',
        'loai'=> 3,
        'parent_id'=> 304
        ],
        [
        'ten'=> 'Xã Hòa Bình',
        'loai'=> 3,
        'parent_id'=> 304
        ],
        [
        'ten'=> 'Xã Bình Minh',
        'loai'=> 3,
        'parent_id'=> 304
        ],
        [
        'ten'=> 'Xã Vũ Quí',
        'loai'=> 3,
        'parent_id'=> 304
        ],
        [
        'ten'=> 'Xã Quang Bình',
        'loai'=> 3,
        'parent_id'=> 304
        ],
        [
        'ten'=> 'Xã Vũ Trung',
        'loai'=> 3,
        'parent_id'=> 304
        ],
        [
        'ten'=> 'Xã Vũ Thắng',
        'loai'=> 3,
        'parent_id'=> 304
        ],
        [
        'ten'=> 'Xã Vũ Công',
        'loai'=> 3,
        'parent_id'=> 304
        ],
        [
        'ten'=> 'Xã Vũ Hòa',
        'loai'=> 3,
        'parent_id'=> 304
        ],
        [
        'ten'=> 'Xã Quang Minh',
        'loai'=> 3,
        'parent_id'=> 304
        ],
        [
        'ten'=> 'Xã Quang Trung',
        'loai'=> 3,
        'parent_id'=> 304
        ],
        [
        'ten'=> 'Xã Minh Quang',
        'loai'=> 3,
        'parent_id'=> 304
        ],
        [
        'ten'=> 'Xã Vũ Bình',
        'loai'=> 3,
        'parent_id'=> 304
        ],
        [
        'ten'=> 'Xã Minh Tân',
        'loai'=> 3,
        'parent_id'=> 304
        ],
        [
        'ten'=> 'Xã Nam Bình',
        'loai'=> 3,
        'parent_id'=> 304
        ],
        [
        'ten'=> 'Xã Bình Thanh',
        'loai'=> 3,
        'parent_id'=> 304
        ],
        [
        'ten'=> 'Xã Bình Định',
        'loai'=> 3,
        'parent_id'=> 304
        ],
        [
        'ten'=> 'Xã Hồng Tiến',
        'loai'=> 3,
        'parent_id'=> 304
        ],
        [
        'ten'=> 'Thị trấn Vũ Thư',
        'loai'=> 3,
        'parent_id'=> 305
        ],
        [
        'ten'=> 'Xã Hồng Lý',
        'loai'=> 3,
        'parent_id'=> 305
        ],
        [
        'ten'=> 'Xã Đồng Thanh',
        'loai'=> 3,
        'parent_id'=> 305
        ],
        [
        'ten'=> 'Xã Xuân Hòa',
        'loai'=> 3,
        'parent_id'=> 305
        ],
        [
        'ten'=> 'Xã Hiệp Hòa',
        'loai'=> 3,
        'parent_id'=> 305
        ],
        [
        'ten'=> 'Xã Phúc Thành',
        'loai'=> 3,
        'parent_id'=> 305
        ],
        [
        'ten'=> 'Xã Tân Phong',
        'loai'=> 3,
        'parent_id'=> 305
        ],
        [
        'ten'=> 'Xã Song Lãng',
        'loai'=> 3,
        'parent_id'=> 305
        ],
        [
        'ten'=> 'Xã Tân Hòa',
        'loai'=> 3,
        'parent_id'=> 305
        ],
        [
        'ten'=> 'Xã Việt Hùng',
        'loai'=> 3,
        'parent_id'=> 305
        ],
        [
        'ten'=> 'Xã Minh Lãng',
        'loai'=> 3,
        'parent_id'=> 305
        ],
        [
        'ten'=> 'Xã Minh Khai',
        'loai'=> 3,
        'parent_id'=> 305
        ],
        [
        'ten'=> 'Xã Dũng Nghĩa',
        'loai'=> 3,
        'parent_id'=> 305
        ],
        [
        'ten'=> 'Xã Minh Quang',
        'loai'=> 3,
        'parent_id'=> 305
        ],
        [
        'ten'=> 'Xã Tam Quang',
        'loai'=> 3,
        'parent_id'=> 305
        ],
        [
        'ten'=> 'Xã Tân Lập',
        'loai'=> 3,
        'parent_id'=> 305
        ],
        [
        'ten'=> 'Xã Bách Thuận',
        'loai'=> 3,
        'parent_id'=> 305
        ],
        [
        'ten'=> 'Xã Tự Tân',
        'loai'=> 3,
        'parent_id'=> 305
        ],
        [
        'ten'=> 'Xã Song An',
        'loai'=> 3,
        'parent_id'=> 305
        ],
        [
        'ten'=> 'Xã Trung An',
        'loai'=> 3,
        'parent_id'=> 305
        ],
        [
        'ten'=> 'Xã Vũ Hội',
        'loai'=> 3,
        'parent_id'=> 305
        ],
        [
        'ten'=> 'Xã Hòa Bình',
        'loai'=> 3,
        'parent_id'=> 305
        ],
        [
        'ten'=> 'Xã Nguyên Xá',
        'loai'=> 3,
        'parent_id'=> 305
        ],
        [
        'ten'=> 'Xã Việt Thuận',
        'loai'=> 3,
        'parent_id'=> 305
        ],
        [
        'ten'=> 'Xã Vũ Vinh',
        'loai'=> 3,
        'parent_id'=> 305
        ],
        [
        'ten'=> 'Xã Vũ Đoài',
        'loai'=> 3,
        'parent_id'=> 305
        ],
        [
        'ten'=> 'Xã Vũ Tiến',
        'loai'=> 3,
        'parent_id'=> 305
        ],
        [
        'ten'=> 'Xã Vũ Vân',
        'loai'=> 3,
        'parent_id'=> 305
        ],
        [
        'ten'=> 'Xã Duy Nhất',
        'loai'=> 3,
        'parent_id'=> 305
        ],
        [
        'ten'=> 'Xã Hồng Phong',
        'loai'=> 3,
        'parent_id'=> 305
        ],
        [
        'ten'=> 'Phường Quang Trung',
        'loai'=> 3,
        'parent_id'=> 306
        ],
        [
        'ten'=> 'Phường Lương Khánh Thiện',
        'loai'=> 3,
        'parent_id'=> 306
        ],
        [
        'ten'=> 'Phường Lê Hồng Phong',
        'loai'=> 3,
        'parent_id'=> 306
        ],
        [
        'ten'=> 'Phường Minh Khai',
        'loai'=> 3,
        'parent_id'=> 306
        ],
        [
        'ten'=> 'Phường Hai Bà Trưng',
        'loai'=> 3,
        'parent_id'=> 306
        ],
        [
        'ten'=> 'Phường Trần Hưng Đạo',
        'loai'=> 3,
        'parent_id'=> 306
        ],
        [
        'ten'=> 'Phường Lam Hạ',
        'loai'=> 3,
        'parent_id'=> 306
        ],
        [
        'ten'=> 'Xã Phù Vân',
        'loai'=> 3,
        'parent_id'=> 306
        ],
        [
        'ten'=> 'Phường Liêm Chính',
        'loai'=> 3,
        'parent_id'=> 306
        ],
        [
        'ten'=> 'Xã Liêm Chung',
        'loai'=> 3,
        'parent_id'=> 306
        ],
        [
        'ten'=> 'Phường Thanh Châu',
        'loai'=> 3,
        'parent_id'=> 306
        ],
        [
        'ten'=> 'Phường Châu Sơn',
        'loai'=> 3,
        'parent_id'=> 306
        ],
        [
        'ten'=> 'Xã Tiên Tân',
        'loai'=> 3,
        'parent_id'=> 306
        ],
        [
        'ten'=> 'Xã Tiên Hiệp',
        'loai'=> 3,
        'parent_id'=> 306
        ],
        [
        'ten'=> 'Xã Tiên Hải',
        'loai'=> 3,
        'parent_id'=> 306
        ],
        [
        'ten'=> 'Xã Kim Bình',
        'loai'=> 3,
        'parent_id'=> 306
        ],
        [
        'ten'=> 'Xã Liêm Tuyền',
        'loai'=> 3,
        'parent_id'=> 306
        ],
        [
        'ten'=> 'Xã Liêm Tiết',
        'loai'=> 3,
        'parent_id'=> 306
        ],
        [
        'ten'=> 'Phường Thanh Tuyền',
        'loai'=> 3,
        'parent_id'=> 306
        ],
        [
        'ten'=> 'Xã Đinh Xá',
        'loai'=> 3,
        'parent_id'=> 306
        ],
        [
        'ten'=> 'Xã Trịnh Xá',
        'loai'=> 3,
        'parent_id'=> 306
        ],
        [
        'ten'=> 'Phường Đồng Văn',
        'loai'=> 3,
        'parent_id'=> 307
        ],
        [
        'ten'=> 'Phường Hòa Mạc',
        'loai'=> 3,
        'parent_id'=> 307
        ],
        [
        'ten'=> 'Xã Mộc Bắc',
        'loai'=> 3,
        'parent_id'=> 307
        ],
        [
        'ten'=> 'Phường Châu Giang',
        'loai'=> 3,
        'parent_id'=> 307
        ],
        [
        'ten'=> 'Phường Bạch Thượng',
        'loai'=> 3,
        'parent_id'=> 307
        ],
        [
        'ten'=> 'Phường Duy Minh',
        'loai'=> 3,
        'parent_id'=> 307
        ],
        [
        'ten'=> 'Xã Mộc Nam',
        'loai'=> 3,
        'parent_id'=> 307
        ],
        [
        'ten'=> 'Phường Duy Hải',
        'loai'=> 3,
        'parent_id'=> 307
        ],
        [
        'ten'=> 'Xã Chuyên Ngoại',
        'loai'=> 3,
        'parent_id'=> 307
        ],
        [
        'ten'=> 'Phường Yên Bắc',
        'loai'=> 3,
        'parent_id'=> 307
        ],
        [
        'ten'=> 'Xã Trác Văn',
        'loai'=> 3,
        'parent_id'=> 307
        ],
        [
        'ten'=> 'Phường Tiên Nội',
        'loai'=> 3,
        'parent_id'=> 307
        ],
        [
        'ten'=> 'Phường Hoàng Đông',
        'loai'=> 3,
        'parent_id'=> 307
        ],
        [
        'ten'=> 'Xã Yên Nam',
        'loai'=> 3,
        'parent_id'=> 307
        ],
        [
        'ten'=> 'Xã Tiên Ngoại',
        'loai'=> 3,
        'parent_id'=> 307
        ],
        [
        'ten'=> 'Xã Tiên Sơn',
        'loai'=> 3,
        'parent_id'=> 307
        ],
        [
        'ten'=> 'Thị trấn Quế',
        'loai'=> 3,
        'parent_id'=> 308
        ],
        [
        'ten'=> 'Xã Nguyễn Úy',
        'loai'=> 3,
        'parent_id'=> 308
        ],
        [
        'ten'=> 'Xã Đại Cương',
        'loai'=> 3,
        'parent_id'=> 308
        ],
        [
        'ten'=> 'Xã Lê Hồ',
        'loai'=> 3,
        'parent_id'=> 308
        ],
        [
        'ten'=> 'Xã Tượng Lĩnh',
        'loai'=> 3,
        'parent_id'=> 308
        ],
        [
        'ten'=> 'Xã Nhật Tựu',
        'loai'=> 3,
        'parent_id'=> 308
        ],
        [
        'ten'=> 'Xã Nhật Tân',
        'loai'=> 3,
        'parent_id'=> 308
        ],
        [
        'ten'=> 'Xã Đồng Hóa',
        'loai'=> 3,
        'parent_id'=> 308
        ],
        [
        'ten'=> 'Xã Hoàng Tây',
        'loai'=> 3,
        'parent_id'=> 308
        ],
        [
        'ten'=> 'Xã Tân Sơn',
        'loai'=> 3,
        'parent_id'=> 308
        ],
        [
        'ten'=> 'Xã Thụy Lôi',
        'loai'=> 3,
        'parent_id'=> 308
        ],
        [
        'ten'=> 'Xã Văn Xá',
        'loai'=> 3,
        'parent_id'=> 308
        ],
        [
        'ten'=> 'Xã Khả Phong',
        'loai'=> 3,
        'parent_id'=> 308
        ],
        [
        'ten'=> 'Xã Ngọc Sơn',
        'loai'=> 3,
        'parent_id'=> 308
        ],
        [
        'ten'=> 'Thị trấn Ba Sao',
        'loai'=> 3,
        'parent_id'=> 308
        ],
        [
        'ten'=> 'Xã Liên Sơn',
        'loai'=> 3,
        'parent_id'=> 308
        ],
        [
        'ten'=> 'Xã Thi Sơn',
        'loai'=> 3,
        'parent_id'=> 308
        ],
        [
        'ten'=> 'Xã Thanh Sơn',
        'loai'=> 3,
        'parent_id'=> 308
        ],
        [
        'ten'=> 'Thị trấn Kiện Khê',
        'loai'=> 3,
        'parent_id'=> 309
        ],
        [
        'ten'=> 'Xã Liêm Phong',
        'loai'=> 3,
        'parent_id'=> 309
        ],
        [
        'ten'=> 'Xã Thanh Hà',
        'loai'=> 3,
        'parent_id'=> 309
        ],
        [
        'ten'=> 'Xã Liêm Cần',
        'loai'=> 3,
        'parent_id'=> 309
        ],
        [
        'ten'=> 'Xã Liêm Thuận',
        'loai'=> 3,
        'parent_id'=> 309
        ],
        [
        'ten'=> 'Xã Thanh Thủy',
        'loai'=> 3,
        'parent_id'=> 309
        ],
        [
        'ten'=> 'Xã Thanh Phong',
        'loai'=> 3,
        'parent_id'=> 309
        ],
        [
        'ten'=> 'Thị trấn Tân Thanh',
        'loai'=> 3,
        'parent_id'=> 309
        ],
        [
        'ten'=> 'Xã Thanh Tân',
        'loai'=> 3,
        'parent_id'=> 309
        ],
        [
        'ten'=> 'Xã Liêm Túc',
        'loai'=> 3,
        'parent_id'=> 309
        ],
        [
        'ten'=> 'Xã Liêm Sơn',
        'loai'=> 3,
        'parent_id'=> 309
        ],
        [
        'ten'=> 'Xã Thanh Hương',
        'loai'=> 3,
        'parent_id'=> 309
        ],
        [
        'ten'=> 'Xã Thanh Nghị',
        'loai'=> 3,
        'parent_id'=> 309
        ],
        [
        'ten'=> 'Xã Thanh Tâm',
        'loai'=> 3,
        'parent_id'=> 309
        ],
        [
        'ten'=> 'Xã Thanh Nguyên',
        'loai'=> 3,
        'parent_id'=> 309
        ],
        [
        'ten'=> 'Xã Thanh Hải',
        'loai'=> 3,
        'parent_id'=> 309
        ],
        [
        'ten'=> 'Thị trấn Bình Mỹ',
        'loai'=> 3,
        'parent_id'=> 310
        ],
        [
        'ten'=> 'Xã Bình Nghĩa',
        'loai'=> 3,
        'parent_id'=> 310
        ],
        [
        'ten'=> 'Xã Tràng An',
        'loai'=> 3,
        'parent_id'=> 310
        ],
        [
        'ten'=> 'Xã Đồng Du',
        'loai'=> 3,
        'parent_id'=> 310
        ],
        [
        'ten'=> 'Xã Ngọc Lũ',
        'loai'=> 3,
        'parent_id'=> 310
        ],
        [
        'ten'=> 'Xã Hưng Công',
        'loai'=> 3,
        'parent_id'=> 310
        ],
        [
        'ten'=> 'Xã Đồn Xá',
        'loai'=> 3,
        'parent_id'=> 310
        ],
        [
        'ten'=> 'Xã An Ninh',
        'loai'=> 3,
        'parent_id'=> 310
        ],
        [
        'ten'=> 'Xã Bồ Đề',
        'loai'=> 3,
        'parent_id'=> 310
        ],
        [
        'ten'=> 'Xã Bối Cầu',
        'loai'=> 3,
        'parent_id'=> 310
        ],
        [
        'ten'=> 'Xã An Nội',
        'loai'=> 3,
        'parent_id'=> 310
        ],
        [
        'ten'=> 'Xã Vũ Bản',
        'loai'=> 3,
        'parent_id'=> 310
        ],
        [
        'ten'=> 'Xã Trung Lương',
        'loai'=> 3,
        'parent_id'=> 310
        ],
        [
        'ten'=> 'Xã An Đổ',
        'loai'=> 3,
        'parent_id'=> 310
        ],
        [
        'ten'=> 'Xã La Sơn',
        'loai'=> 3,
        'parent_id'=> 310
        ],
        [
        'ten'=> 'Xã Tiêu Động',
        'loai'=> 3,
        'parent_id'=> 310
        ],
        [
        'ten'=> 'Xã An Lão',
        'loai'=> 3,
        'parent_id'=> 310
        ],
        [
        'ten'=> 'Xã Hợp Lý',
        'loai'=> 3,
        'parent_id'=> 311
        ],
        [
        'ten'=> 'Xã Nguyên Lý',
        'loai'=> 3,
        'parent_id'=> 311
        ],
        [
        'ten'=> 'Xã Chính Lý',
        'loai'=> 3,
        'parent_id'=> 311
        ],
        [
        'ten'=> 'Xã Chân Lý',
        'loai'=> 3,
        'parent_id'=> 311
        ],
        [
        'ten'=> 'Xã Đạo Lý',
        'loai'=> 3,
        'parent_id'=> 311
        ],
        [
        'ten'=> 'Xã Công Lý',
        'loai'=> 3,
        'parent_id'=> 311
        ],
        [
        'ten'=> 'Xã Văn Lý',
        'loai'=> 3,
        'parent_id'=> 311
        ],
        [
        'ten'=> 'Xã Bắc Lý',
        'loai'=> 3,
        'parent_id'=> 311
        ],
        [
        'ten'=> 'Xã Đức Lý',
        'loai'=> 3,
        'parent_id'=> 311
        ],
        [
        'ten'=> 'Xã Trần Hưng Đạo',
        'loai'=> 3,
        'parent_id'=> 311
        ],
        [
        'ten'=> 'Thị trấn Vĩnh Trụ',
        'loai'=> 3,
        'parent_id'=> 311
        ],
        [
        'ten'=> 'Xã Nhân Thịnh',
        'loai'=> 3,
        'parent_id'=> 311
        ],
        [
        'ten'=> 'Xã Nhân Khang',
        'loai'=> 3,
        'parent_id'=> 311
        ],
        [
        'ten'=> 'Xã Nhân Mỹ',
        'loai'=> 3,
        'parent_id'=> 311
        ],
        [
        'ten'=> 'Xã Nhân Nghĩa',
        'loai'=> 3,
        'parent_id'=> 311
        ],
        [
        'ten'=> 'Xã Nhân Chính',
        'loai'=> 3,
        'parent_id'=> 311
        ],
        [
        'ten'=> 'Xã Nhân Bình',
        'loai'=> 3,
        'parent_id'=> 311
        ],
        [
        'ten'=> 'Xã Phú Phúc',
        'loai'=> 3,
        'parent_id'=> 311
        ],
        [
        'ten'=> 'Xã Xuân Khê',
        'loai'=> 3,
        'parent_id'=> 311
        ],
        [
        'ten'=> 'Xã Tiến Thắng',
        'loai'=> 3,
        'parent_id'=> 311
        ],
        [
        'ten'=> 'Xã Hòa Hậu',
        'loai'=> 3,
        'parent_id'=> 311
        ],
        [
        'ten'=> 'Phường Hạ Long',
        'loai'=> 3,
        'parent_id'=> 312
        ],
        [
        'ten'=> 'Phường Trần Tế Xương',
        'loai'=> 3,
        'parent_id'=> 312
        ],
        [
        'ten'=> 'Phường Vị Hoàng',
        'loai'=> 3,
        'parent_id'=> 312
        ],
        [
        'ten'=> 'Phường Vị Xuyên',
        'loai'=> 3,
        'parent_id'=> 312
        ],
        [
        'ten'=> 'Phường Quang Trung',
        'loai'=> 3,
        'parent_id'=> 312
        ],
        [
        'ten'=> 'Phường Cửa Bắc',
        'loai'=> 3,
        'parent_id'=> 312
        ],
        [
        'ten'=> 'Phường Nguyễn Du',
        'loai'=> 3,
        'parent_id'=> 312
        ],
        [
        'ten'=> 'Phường Bà Triệu',
        'loai'=> 3,
        'parent_id'=> 312
        ],
        [
        'ten'=> 'Phường Trường Thi',
        'loai'=> 3,
        'parent_id'=> 312
        ],
        [
        'ten'=> 'Phường Phan Đình Phùng',
        'loai'=> 3,
        'parent_id'=> 312
        ],
        [
        'ten'=> 'Phường Ngô Quyền',
        'loai'=> 3,
        'parent_id'=> 312
        ],
        [
        'ten'=> 'Phường Trần Hưng Đạo',
        'loai'=> 3,
        'parent_id'=> 312
        ],
        [
        'ten'=> 'Phường Trần Đăng Ninh',
        'loai'=> 3,
        'parent_id'=> 312
        ],
        [
        'ten'=> 'Phường Năng Tĩnh',
        'loai'=> 3,
        'parent_id'=> 312
        ],
        [
        'ten'=> 'Phường Văn Miếu',
        'loai'=> 3,
        'parent_id'=> 312
        ],
        [
        'ten'=> 'Phường Trần Quang Khải',
        'loai'=> 3,
        'parent_id'=> 312
        ],
        [
        'ten'=> 'Phường Thống Nhất',
        'loai'=> 3,
        'parent_id'=> 312
        ],
        [
        'ten'=> 'Phường Lộc Hạ',
        'loai'=> 3,
        'parent_id'=> 312
        ],
        [
        'ten'=> 'Phường Lộc Vượng',
        'loai'=> 3,
        'parent_id'=> 312
        ],
        [
        'ten'=> 'Phường Cửa Nam',
        'loai'=> 3,
        'parent_id'=> 312
        ],
        [
        'ten'=> 'Phường Lộc Hòa',
        'loai'=> 3,
        'parent_id'=> 312
        ],
        [
        'ten'=> 'Xã Nam Phong',
        'loai'=> 3,
        'parent_id'=> 312
        ],
        [
        'ten'=> 'Phường Mỹ Xá',
        'loai'=> 3,
        'parent_id'=> 312
        ],
        [
        'ten'=> 'Xã Lộc An',
        'loai'=> 3,
        'parent_id'=> 312
        ],
        [
        'ten'=> 'Xã Nam Vân',
        'loai'=> 3,
        'parent_id'=> 312
        ],
        [
        'ten'=> 'Thị trấn Mỹ Lộc',
        'loai'=> 3,
        'parent_id'=> 313
        ],
        [
        'ten'=> 'Xã Mỹ Hà',
        'loai'=> 3,
        'parent_id'=> 313
        ],
        [
        'ten'=> 'Xã Mỹ Tiến',
        'loai'=> 3,
        'parent_id'=> 313
        ],
        [
        'ten'=> 'Xã Mỹ Thắng',
        'loai'=> 3,
        'parent_id'=> 313
        ],
        [
        'ten'=> 'Xã Mỹ Trung',
        'loai'=> 3,
        'parent_id'=> 313
        ],
        [
        'ten'=> 'Xã Mỹ Tân',
        'loai'=> 3,
        'parent_id'=> 313
        ],
        [
        'ten'=> 'Xã Mỹ Phúc',
        'loai'=> 3,
        'parent_id'=> 313
        ],
        [
        'ten'=> 'Xã Mỹ Hưng',
        'loai'=> 3,
        'parent_id'=> 313
        ],
        [
        'ten'=> 'Xã Mỹ Thuận',
        'loai'=> 3,
        'parent_id'=> 313
        ],
        [
        'ten'=> 'Xã Mỹ Thịnh',
        'loai'=> 3,
        'parent_id'=> 313
        ],
        [
        'ten'=> 'Xã Mỹ Thành',
        'loai'=> 3,
        'parent_id'=> 313
        ],
        [
        'ten'=> 'Thị trấn Gôi',
        'loai'=> 3,
        'parent_id'=> 314
        ],
        [
        'ten'=> 'Xã Minh Thuận',
        'loai'=> 3,
        'parent_id'=> 314
        ],
        [
        'ten'=> 'Xã Hiển Khánh',
        'loai'=> 3,
        'parent_id'=> 314
        ],
        [
        'ten'=> 'Xã Tân Khánh',
        'loai'=> 3,
        'parent_id'=> 314
        ],
        [
        'ten'=> 'Xã Hợp Hưng',
        'loai'=> 3,
        'parent_id'=> 314
        ],
        [
        'ten'=> 'Xã Đại An',
        'loai'=> 3,
        'parent_id'=> 314
        ],
        [
        'ten'=> 'Xã Tân Thành',
        'loai'=> 3,
        'parent_id'=> 314
        ],
        [
        'ten'=> 'Xã Cộng Hòa',
        'loai'=> 3,
        'parent_id'=> 314
        ],
        [
        'ten'=> 'Xã Trung Thành',
        'loai'=> 3,
        'parent_id'=> 314
        ],
        [
        'ten'=> 'Xã Quang Trung',
        'loai'=> 3,
        'parent_id'=> 314
        ],
        [
        'ten'=> 'Xã Minh Tân',
        'loai'=> 3,
        'parent_id'=> 314
        ],
        [
        'ten'=> 'Xã Liên Bảo',
        'loai'=> 3,
        'parent_id'=> 314
        ],
        [
        'ten'=> 'Xã Thành Lợi',
        'loai'=> 3,
        'parent_id'=> 314
        ],
        [
        'ten'=> 'Xã Kim Thái',
        'loai'=> 3,
        'parent_id'=> 314
        ],
        [
        'ten'=> 'Xã Liên Minh',
        'loai'=> 3,
        'parent_id'=> 314
        ],
        [
        'ten'=> 'Xã Đại Thắng',
        'loai'=> 3,
        'parent_id'=> 314
        ],
        [
        'ten'=> 'Xã Tam Thanh',
        'loai'=> 3,
        'parent_id'=> 314
        ],
        [
        'ten'=> 'Xã Vĩnh Hào',
        'loai'=> 3,
        'parent_id'=> 314
        ],
        [
        'ten'=> 'Thị trấn Lâm',
        'loai'=> 3,
        'parent_id'=> 315
        ],
        [
        'ten'=> 'Xã Yên Trung',
        'loai'=> 3,
        'parent_id'=> 315
        ],
        [
        'ten'=> 'Xã Yên Thành',
        'loai'=> 3,
        'parent_id'=> 315
        ],
        [
        'ten'=> 'Xã Yên Tân',
        'loai'=> 3,
        'parent_id'=> 315
        ],
        [
        'ten'=> 'Xã Yên Lợi',
        'loai'=> 3,
        'parent_id'=> 315
        ],
        [
        'ten'=> 'Xã Yên Thọ',
        'loai'=> 3,
        'parent_id'=> 315
        ],
        [
        'ten'=> 'Xã Yên Nghĩa',
        'loai'=> 3,
        'parent_id'=> 315
        ],
        [
        'ten'=> 'Xã Yên Minh',
        'loai'=> 3,
        'parent_id'=> 315
        ],
        [
        'ten'=> 'Xã Yên Phương',
        'loai'=> 3,
        'parent_id'=> 315
        ],
        [
        'ten'=> 'Xã Yên Chính',
        'loai'=> 3,
        'parent_id'=> 315
        ],
        [
        'ten'=> 'Xã Yên Bình',
        'loai'=> 3,
        'parent_id'=> 315
        ],
        [
        'ten'=> 'Xã Yên Phú',
        'loai'=> 3,
        'parent_id'=> 315
        ],
        [
        'ten'=> 'Xã Yên Mỹ',
        'loai'=> 3,
        'parent_id'=> 315
        ],
        [
        'ten'=> 'Xã Yên Dương',
        'loai'=> 3,
        'parent_id'=> 315
        ],
        [
        'ten'=> 'Xã Yên Hưng',
        'loai'=> 3,
        'parent_id'=> 315
        ],
        [
        'ten'=> 'Xã Yên Khánh',
        'loai'=> 3,
        'parent_id'=> 315
        ],
        [
        'ten'=> 'Xã Yên Phong',
        'loai'=> 3,
        'parent_id'=> 315
        ],
        [
        'ten'=> 'Xã Yên Ninh',
        'loai'=> 3,
        'parent_id'=> 315
        ],
        [
        'ten'=> 'Xã Yên Lương',
        'loai'=> 3,
        'parent_id'=> 315
        ],
        [
        'ten'=> 'Xã Yên Hồng',
        'loai'=> 3,
        'parent_id'=> 315
        ],
        [
        'ten'=> 'Xã Yên Quang',
        'loai'=> 3,
        'parent_id'=> 315
        ],
        [
        'ten'=> 'Xã Yên Tiến',
        'loai'=> 3,
        'parent_id'=> 315
        ],
        [
        'ten'=> 'Xã Yên Thắng',
        'loai'=> 3,
        'parent_id'=> 315
        ],
        [
        'ten'=> 'Xã Yên Phúc',
        'loai'=> 3,
        'parent_id'=> 315
        ],
        [
        'ten'=> 'Xã Yên Cường',
        'loai'=> 3,
        'parent_id'=> 315
        ],
        [
        'ten'=> 'Xã Yên Lộc',
        'loai'=> 3,
        'parent_id'=> 315
        ],
        [
        'ten'=> 'Xã Yên Bằng',
        'loai'=> 3,
        'parent_id'=> 315
        ],
        [
        'ten'=> 'Xã Yên Đồng',
        'loai'=> 3,
        'parent_id'=> 315
        ],
        [
        'ten'=> 'Xã Yên Khang',
        'loai'=> 3,
        'parent_id'=> 315
        ],
        [
        'ten'=> 'Xã Yên Nhân',
        'loai'=> 3,
        'parent_id'=> 315
        ],
        [
        'ten'=> 'Xã Yên Trị',
        'loai'=> 3,
        'parent_id'=> 315
        ],
        [
        'ten'=> 'Thị trấn Liễu Đề',
        'loai'=> 3,
        'parent_id'=> 316
        ],
        [
        'ten'=> 'Thị trấn Rạng Đông',
        'loai'=> 3,
        'parent_id'=> 316
        ],
        [
        'ten'=> 'Xã Nghĩa Đồng',
        'loai'=> 3,
        'parent_id'=> 316
        ],
        [
        'ten'=> 'Xã Nghĩa Thịnh',
        'loai'=> 3,
        'parent_id'=> 316
        ],
        [
        'ten'=> 'Xã Nghĩa Minh',
        'loai'=> 3,
        'parent_id'=> 316
        ],
        [
        'ten'=> 'Xã Nghĩa Thái',
        'loai'=> 3,
        'parent_id'=> 316
        ],
        [
        'ten'=> 'Xã Hoàng Nam',
        'loai'=> 3,
        'parent_id'=> 316
        ],
        [
        'ten'=> 'Xã Nghĩa Châu',
        'loai'=> 3,
        'parent_id'=> 316
        ],
        [
        'ten'=> 'Xã Nghĩa Trung',
        'loai'=> 3,
        'parent_id'=> 316
        ],
        [
        'ten'=> 'Xã Nghĩa Sơn',
        'loai'=> 3,
        'parent_id'=> 316
        ],
        [
        'ten'=> 'Xã Nghĩa Lạc',
        'loai'=> 3,
        'parent_id'=> 316
        ],
        [
        'ten'=> 'Xã Nghĩa Hồng',
        'loai'=> 3,
        'parent_id'=> 316
        ],
        [
        'ten'=> 'Xã Nghĩa Phong',
        'loai'=> 3,
        'parent_id'=> 316
        ],
        [
        'ten'=> 'Xã Nghĩa Phú',
        'loai'=> 3,
        'parent_id'=> 316
        ],
        [
        'ten'=> 'Xã Nghĩa Bình',
        'loai'=> 3,
        'parent_id'=> 316
        ],
        [
        'ten'=> 'Thị trấn Quỹ Nhất',
        'loai'=> 3,
        'parent_id'=> 316
        ],
        [
        'ten'=> 'Xã Nghĩa Tân',
        'loai'=> 3,
        'parent_id'=> 316
        ],
        [
        'ten'=> 'Xã Nghĩa Hùng',
        'loai'=> 3,
        'parent_id'=> 316
        ],
        [
        'ten'=> 'Xã Nghĩa Lâm',
        'loai'=> 3,
        'parent_id'=> 316
        ],
        [
        'ten'=> 'Xã Nghĩa Thành',
        'loai'=> 3,
        'parent_id'=> 316
        ],
        [
        'ten'=> 'Xã Phúc Thắng',
        'loai'=> 3,
        'parent_id'=> 316
        ],
        [
        'ten'=> 'Xã Nghĩa Lợi',
        'loai'=> 3,
        'parent_id'=> 316
        ],
        [
        'ten'=> 'Xã Nghĩa Hải',
        'loai'=> 3,
        'parent_id'=> 316
        ],
        [
        'ten'=> 'Xã Nam Điền',
        'loai'=> 3,
        'parent_id'=> 316
        ],
        [
        'ten'=> 'Thị trấn Nam Giang',
        'loai'=> 3,
        'parent_id'=> 317
        ],
        [
        'ten'=> 'Xã Nam Mỹ',
        'loai'=> 3,
        'parent_id'=> 317
        ],
        [
        'ten'=> 'Xã Điền Xá',
        'loai'=> 3,
        'parent_id'=> 317
        ],
        [
        'ten'=> 'Xã Nghĩa An',
        'loai'=> 3,
        'parent_id'=> 317
        ],
        [
        'ten'=> 'Xã Nam Thắng',
        'loai'=> 3,
        'parent_id'=> 317
        ],
        [
        'ten'=> 'Xã Nam Toàn',
        'loai'=> 3,
        'parent_id'=> 317
        ],
        [
        'ten'=> 'Xã Hồng Quang',
        'loai'=> 3,
        'parent_id'=> 317
        ],
        [
        'ten'=> 'Xã Tân Thịnh',
        'loai'=> 3,
        'parent_id'=> 317
        ],
        [
        'ten'=> 'Xã Nam Cường',
        'loai'=> 3,
        'parent_id'=> 317
        ],
        [
        'ten'=> 'Xã Nam Hồng',
        'loai'=> 3,
        'parent_id'=> 317
        ],
        [
        'ten'=> 'Xã Nam Hùng',
        'loai'=> 3,
        'parent_id'=> 317
        ],
        [
        'ten'=> 'Xã Nam Hoa',
        'loai'=> 3,
        'parent_id'=> 317
        ],
        [
        'ten'=> 'Xã Nam Dương',
        'loai'=> 3,
        'parent_id'=> 317
        ],
        [
        'ten'=> 'Xã Nam Thanh',
        'loai'=> 3,
        'parent_id'=> 317
        ],
        [
        'ten'=> 'Xã Nam Lợi',
        'loai'=> 3,
        'parent_id'=> 317
        ],
        [
        'ten'=> 'Xã Bình Minh',
        'loai'=> 3,
        'parent_id'=> 317
        ],
        [
        'ten'=> 'Xã Đồng Sơn',
        'loai'=> 3,
        'parent_id'=> 317
        ],
        [
        'ten'=> 'Xã Nam Tiến',
        'loai'=> 3,
        'parent_id'=> 317
        ],
        [
        'ten'=> 'Xã Nam Hải',
        'loai'=> 3,
        'parent_id'=> 317
        ],
        [
        'ten'=> 'Xã Nam Thái',
        'loai'=> 3,
        'parent_id'=> 317
        ],
        [
        'ten'=> 'Thị trấn Cổ Lễ',
        'loai'=> 3,
        'parent_id'=> 318
        ],
        [
        'ten'=> 'Xã Phương Định',
        'loai'=> 3,
        'parent_id'=> 318
        ],
        [
        'ten'=> 'Xã Trực Chính',
        'loai'=> 3,
        'parent_id'=> 318
        ],
        [
        'ten'=> 'Xã Trung Đông',
        'loai'=> 3,
        'parent_id'=> 318
        ],
        [
        'ten'=> 'Xã Liêm Hải',
        'loai'=> 3,
        'parent_id'=> 318
        ],
        [
        'ten'=> 'Xã Trực Tuấn',
        'loai'=> 3,
        'parent_id'=> 318
        ],
        [
        'ten'=> 'Xã Việt Hùng',
        'loai'=> 3,
        'parent_id'=> 318
        ],
        [
        'ten'=> 'Xã Trực Đạo',
        'loai'=> 3,
        'parent_id'=> 318
        ],
        [
        'ten'=> 'Xã Trực Hưng',
        'loai'=> 3,
        'parent_id'=> 318
        ],
        [
        'ten'=> 'Xã Trực Nội',
        'loai'=> 3,
        'parent_id'=> 318
        ],
        [
        'ten'=> 'Thị trấn Cát Thành',
        'loai'=> 3,
        'parent_id'=> 318
        ],
        [
        'ten'=> 'Xã Trực Thanh',
        'loai'=> 3,
        'parent_id'=> 318
        ],
        [
        'ten'=> 'Xã Trực Khang',
        'loai'=> 3,
        'parent_id'=> 318
        ],
        [
        'ten'=> 'Xã Trực Thuận',
        'loai'=> 3,
        'parent_id'=> 318
        ],
        [
        'ten'=> 'Xã Trực Mỹ',
        'loai'=> 3,
        'parent_id'=> 318
        ],
        [
        'ten'=> 'Xã Trực Đại',
        'loai'=> 3,
        'parent_id'=> 318
        ],
        [
        'ten'=> 'Xã Trực Cường',
        'loai'=> 3,
        'parent_id'=> 318
        ],
        [
        'ten'=> 'Thị trấn Ninh Cường',
        'loai'=> 3,
        'parent_id'=> 318
        ],
        [
        'ten'=> 'Xã Trực Thái',
        'loai'=> 3,
        'parent_id'=> 318
        ],
        [
        'ten'=> 'Xã Trực Hùng',
        'loai'=> 3,
        'parent_id'=> 318
        ],
        [
        'ten'=> 'Xã Trực Thắng',
        'loai'=> 3,
        'parent_id'=> 318
        ],
        [
        'ten'=> 'Thị trấn Xuân Trường',
        'loai'=> 3,
        'parent_id'=> 319
        ],
        [
        'ten'=> 'Xã Xuân Châu',
        'loai'=> 3,
        'parent_id'=> 319
        ],
        [
        'ten'=> 'Xã Xuân Hồng',
        'loai'=> 3,
        'parent_id'=> 319
        ],
        [
        'ten'=> 'Xã Xuân Thành',
        'loai'=> 3,
        'parent_id'=> 319
        ],
        [
        'ten'=> 'Xã Xuân Thượng',
        'loai'=> 3,
        'parent_id'=> 319
        ],
        [
        'ten'=> 'Xã Xuân Phong',
        'loai'=> 3,
        'parent_id'=> 319
        ],
        [
        'ten'=> 'Xã Xuân Đài',
        'loai'=> 3,
        'parent_id'=> 319
        ],
        [
        'ten'=> 'Xã Xuân Tân',
        'loai'=> 3,
        'parent_id'=> 319
        ],
        [
        'ten'=> 'Xã Xuân Thủy',
        'loai'=> 3,
        'parent_id'=> 319
        ],
        [
        'ten'=> 'Xã Xuân Ngọc',
        'loai'=> 3,
        'parent_id'=> 319
        ],
        [
        'ten'=> 'Xã Xuân Bắc',
        'loai'=> 3,
        'parent_id'=> 319
        ],
        [
        'ten'=> 'Xã Xuân Phương',
        'loai'=> 3,
        'parent_id'=> 319
        ],
        [
        'ten'=> 'Xã Thọ Nghiệp',
        'loai'=> 3,
        'parent_id'=> 319
        ],
        [
        'ten'=> 'Xã Xuân Phú',
        'loai'=> 3,
        'parent_id'=> 319
        ],
        [
        'ten'=> 'Xã Xuân Trung',
        'loai'=> 3,
        'parent_id'=> 319
        ],
        [
        'ten'=> 'Xã Xuân Vinh',
        'loai'=> 3,
        'parent_id'=> 319
        ],
        [
        'ten'=> 'Xã Xuân Kiên',
        'loai'=> 3,
        'parent_id'=> 319
        ],
        [
        'ten'=> 'Xã Xuân Tiến',
        'loai'=> 3,
        'parent_id'=> 319
        ],
        [
        'ten'=> 'Xã Xuân Ninh',
        'loai'=> 3,
        'parent_id'=> 319
        ],
        [
        'ten'=> 'Xã Xuân Hòa',
        'loai'=> 3,
        'parent_id'=> 319
        ],
        [
        'ten'=> 'Thị trấn Ngô Đồng',
        'loai'=> 3,
        'parent_id'=> 320
        ],
        [
        'ten'=> 'Thị trấn Quất Lâm',
        'loai'=> 3,
        'parent_id'=> 320
        ],
        [
        'ten'=> 'Xã Giao Hương',
        'loai'=> 3,
        'parent_id'=> 320
        ],
        [
        'ten'=> 'Xã Hồng Thuận',
        'loai'=> 3,
        'parent_id'=> 320
        ],
        [
        'ten'=> 'Xã Giao Thiện',
        'loai'=> 3,
        'parent_id'=> 320
        ],
        [
        'ten'=> 'Xã Giao Thanh',
        'loai'=> 3,
        'parent_id'=> 320
        ],
        [
        'ten'=> 'Xã Hoành Sơn',
        'loai'=> 3,
        'parent_id'=> 320
        ],
        [
        'ten'=> 'Xã Bình Hòa',
        'loai'=> 3,
        'parent_id'=> 320
        ],
        [
        'ten'=> 'Xã Giao Tiến',
        'loai'=> 3,
        'parent_id'=> 320
        ],
        [
        'ten'=> 'Xã Giao Hà',
        'loai'=> 3,
        'parent_id'=> 320
        ],
        [
        'ten'=> 'Xã Giao Nhân',
        'loai'=> 3,
        'parent_id'=> 320
        ],
        [
        'ten'=> 'Xã Giao An',
        'loai'=> 3,
        'parent_id'=> 320
        ],
        [
        'ten'=> 'Xã Giao Lạc',
        'loai'=> 3,
        'parent_id'=> 320
        ],
        [
        'ten'=> 'Xã Giao Châu',
        'loai'=> 3,
        'parent_id'=> 320
        ],
        [
        'ten'=> 'Xã Giao Tân',
        'loai'=> 3,
        'parent_id'=> 320
        ],
        [
        'ten'=> 'Xã Giao Yến',
        'loai'=> 3,
        'parent_id'=> 320
        ],
        [
        'ten'=> 'Xã Giao Xuân',
        'loai'=> 3,
        'parent_id'=> 320
        ],
        [
        'ten'=> 'Xã Giao Thịnh',
        'loai'=> 3,
        'parent_id'=> 320
        ],
        [
        'ten'=> 'Xã Giao Hải',
        'loai'=> 3,
        'parent_id'=> 320
        ],
        [
        'ten'=> 'Xã Bạch Long',
        'loai'=> 3,
        'parent_id'=> 320
        ],
        [
        'ten'=> 'Xã Giao Long',
        'loai'=> 3,
        'parent_id'=> 320
        ],
        [
        'ten'=> 'Xã Giao Phong',
        'loai'=> 3,
        'parent_id'=> 320
        ],
        [
        'ten'=> 'Thị trấn Yên Định',
        'loai'=> 3,
        'parent_id'=> 321
        ],
        [
        'ten'=> 'Thị trấn Cồn',
        'loai'=> 3,
        'parent_id'=> 321
        ],
        [
        'ten'=> 'Thị trấn Thịnh Long',
        'loai'=> 3,
        'parent_id'=> 321
        ],
        [
        'ten'=> 'Xã Hải Nam',
        'loai'=> 3,
        'parent_id'=> 321
        ],
        [
        'ten'=> 'Xã Hải Trung',
        'loai'=> 3,
        'parent_id'=> 321
        ],
        [
        'ten'=> 'Xã Hải Vân',
        'loai'=> 3,
        'parent_id'=> 321
        ],
        [
        'ten'=> 'Xã Hải Minh',
        'loai'=> 3,
        'parent_id'=> 321
        ],
        [
        'ten'=> 'Xã Hải Anh',
        'loai'=> 3,
        'parent_id'=> 321
        ],
        [
        'ten'=> 'Xã Hải Hưng',
        'loai'=> 3,
        'parent_id'=> 321
        ],
        [
        'ten'=> 'Xã Hải Bắc',
        'loai'=> 3,
        'parent_id'=> 321
        ],
        [
        'ten'=> 'Xã Hải Phúc',
        'loai'=> 3,
        'parent_id'=> 321
        ],
        [
        'ten'=> 'Xã Hải Thanh',
        'loai'=> 3,
        'parent_id'=> 321
        ],
        [
        'ten'=> 'Xã Hải Hà',
        'loai'=> 3,
        'parent_id'=> 321
        ],
        [
        'ten'=> 'Xã Hải Long',
        'loai'=> 3,
        'parent_id'=> 321
        ],
        [
        'ten'=> 'Xã Hải Phương',
        'loai'=> 3,
        'parent_id'=> 321
        ],
        [
        'ten'=> 'Xã Hải Đường',
        'loai'=> 3,
        'parent_id'=> 321
        ],
        [
        'ten'=> 'Xã Hải Lộc',
        'loai'=> 3,
        'parent_id'=> 321
        ],
        [
        'ten'=> 'Xã Hải Quang',
        'loai'=> 3,
        'parent_id'=> 321
        ],
        [
        'ten'=> 'Xã Hải Đông',
        'loai'=> 3,
        'parent_id'=> 321
        ],
        [
        'ten'=> 'Xã Hải Sơn',
        'loai'=> 3,
        'parent_id'=> 321
        ],
        [
        'ten'=> 'Xã Hải Tân',
        'loai'=> 3,
        'parent_id'=> 321
        ],
        [
        'ten'=> 'Xã Hải Phong',
        'loai'=> 3,
        'parent_id'=> 321
        ],
        [
        'ten'=> 'Xã Hải An',
        'loai'=> 3,
        'parent_id'=> 321
        ],
        [
        'ten'=> 'Xã Hải Tây',
        'loai'=> 3,
        'parent_id'=> 321
        ],
        [
        'ten'=> 'Xã Hải Lý',
        'loai'=> 3,
        'parent_id'=> 321
        ],
        [
        'ten'=> 'Xã Hải Phú',
        'loai'=> 3,
        'parent_id'=> 321
        ],
        [
        'ten'=> 'Xã Hải Giang',
        'loai'=> 3,
        'parent_id'=> 321
        ],
        [
        'ten'=> 'Xã Hải Cường',
        'loai'=> 3,
        'parent_id'=> 321
        ],
        [
        'ten'=> 'Xã Hải Ninh',
        'loai'=> 3,
        'parent_id'=> 321
        ],
        [
        'ten'=> 'Xã Hải Chính',
        'loai'=> 3,
        'parent_id'=> 321
        ],
        [
        'ten'=> 'Xã Hải Xuân',
        'loai'=> 3,
        'parent_id'=> 321
        ],
        [
        'ten'=> 'Xã Hải Châu',
        'loai'=> 3,
        'parent_id'=> 321
        ],
        [
        'ten'=> 'Xã Hải Triều',
        'loai'=> 3,
        'parent_id'=> 321
        ],
        [
        'ten'=> 'Xã Hải Hòa',
        'loai'=> 3,
        'parent_id'=> 321
        ],
        [
        'ten'=> 'Phường Đông Thành',
        'loai'=> 3,
        'parent_id'=> 322
        ],
        [
        'ten'=> 'Phường Tân Thành',
        'loai'=> 3,
        'parent_id'=> 322
        ],
        [
        'ten'=> 'Phường Thanh Bình',
        'loai'=> 3,
        'parent_id'=> 322
        ],
        [
        'ten'=> 'Phường Vân Giang',
        'loai'=> 3,
        'parent_id'=> 322
        ],
        [
        'ten'=> 'Phường Bích Đào',
        'loai'=> 3,
        'parent_id'=> 322
        ],
        [
        'ten'=> 'Phường Phúc Thành',
        'loai'=> 3,
        'parent_id'=> 322
        ],
        [
        'ten'=> 'Phường Nam Bình',
        'loai'=> 3,
        'parent_id'=> 322
        ],
        [
        'ten'=> 'Phường Nam Thành',
        'loai'=> 3,
        'parent_id'=> 322
        ],
        [
        'ten'=> 'Phường Ninh Khánh',
        'loai'=> 3,
        'parent_id'=> 322
        ],
        [
        'ten'=> 'Xã Ninh Nhất',
        'loai'=> 3,
        'parent_id'=> 322
        ],
        [
        'ten'=> 'Xã Ninh Tiến',
        'loai'=> 3,
        'parent_id'=> 322
        ],
        [
        'ten'=> 'Xã Ninh Phúc',
        'loai'=> 3,
        'parent_id'=> 322
        ],
        [
        'ten'=> 'Phường Ninh Sơn',
        'loai'=> 3,
        'parent_id'=> 322
        ],
        [
        'ten'=> 'Phường Ninh Phong',
        'loai'=> 3,
        'parent_id'=> 322
        ],
        [
        'ten'=> 'Phường Bắc Sơn',
        'loai'=> 3,
        'parent_id'=> 323
        ],
        [
        'ten'=> 'Phường Trung Sơn',
        'loai'=> 3,
        'parent_id'=> 323
        ],
        [
        'ten'=> 'Phường Nam Sơn',
        'loai'=> 3,
        'parent_id'=> 323
        ],
        [
        'ten'=> 'Phường Tây Sơn',
        'loai'=> 3,
        'parent_id'=> 323
        ],
        [
        'ten'=> 'Xã Yên Sơn',
        'loai'=> 3,
        'parent_id'=> 323
        ],
        [
        'ten'=> 'Phường Yên Bình',
        'loai'=> 3,
        'parent_id'=> 323
        ],
        [
        'ten'=> 'Phường Tân Bình',
        'loai'=> 3,
        'parent_id'=> 323
        ],
        [
        'ten'=> 'Xã Quang Sơn',
        'loai'=> 3,
        'parent_id'=> 323
        ],
        [
        'ten'=> 'Xã Đông Sơn',
        'loai'=> 3,
        'parent_id'=> 323
        ],
        [
        'ten'=> 'Thị trấn Nho Quan',
        'loai'=> 3,
        'parent_id'=> 324
        ],
        [
        'ten'=> 'Xã Xích Thổ',
        'loai'=> 3,
        'parent_id'=> 324
        ],
        [
        'ten'=> 'Xã Gia Lâm',
        'loai'=> 3,
        'parent_id'=> 324
        ],
        [
        'ten'=> 'Xã Gia Sơn',
        'loai'=> 3,
        'parent_id'=> 324
        ],
        [
        'ten'=> 'Xã Thạch Bình',
        'loai'=> 3,
        'parent_id'=> 324
        ],
        [
        'ten'=> 'Xã Gia Thủy',
        'loai'=> 3,
        'parent_id'=> 324
        ],
        [
        'ten'=> 'Xã Gia Tường',
        'loai'=> 3,
        'parent_id'=> 324
        ],
        [
        'ten'=> 'Xã Cúc Phương',
        'loai'=> 3,
        'parent_id'=> 324
        ],
        [
        'ten'=> 'Xã Phú Sơn',
        'loai'=> 3,
        'parent_id'=> 324
        ],
        [
        'ten'=> 'Xã Đức Long',
        'loai'=> 3,
        'parent_id'=> 324
        ],
        [
        'ten'=> 'Xã Lạc Vân',
        'loai'=> 3,
        'parent_id'=> 324
        ],
        [
        'ten'=> 'Xã Đồng Phong',
        'loai'=> 3,
        'parent_id'=> 324
        ],
        [
        'ten'=> 'Xã Yên Quang',
        'loai'=> 3,
        'parent_id'=> 324
        ],
        [
        'ten'=> 'Xã Lạng Phong',
        'loai'=> 3,
        'parent_id'=> 324
        ],
        [
        'ten'=> 'Xã Thượng Hòa',
        'loai'=> 3,
        'parent_id'=> 324
        ],
        [
        'ten'=> 'Xã Văn Phong',
        'loai'=> 3,
        'parent_id'=> 324
        ],
        [
        'ten'=> 'Xã Văn Phương',
        'loai'=> 3,
        'parent_id'=> 324
        ],
        [
        'ten'=> 'Xã Thanh Lạc',
        'loai'=> 3,
        'parent_id'=> 324
        ],
        [
        'ten'=> 'Xã Sơn Lai',
        'loai'=> 3,
        'parent_id'=> 324
        ],
        [
        'ten'=> 'Xã Sơn Thành',
        'loai'=> 3,
        'parent_id'=> 324
        ],
        [
        'ten'=> 'Xã Văn Phú',
        'loai'=> 3,
        'parent_id'=> 324
        ],
        [
        'ten'=> 'Xã Phú Lộc',
        'loai'=> 3,
        'parent_id'=> 324
        ],
        [
        'ten'=> 'Xã Kỳ Phú',
        'loai'=> 3,
        'parent_id'=> 324
        ],
        [
        'ten'=> 'Xã Quỳnh Lưu',
        'loai'=> 3,
        'parent_id'=> 324
        ],
        [
        'ten'=> 'Xã Sơn Hà',
        'loai'=> 3,
        'parent_id'=> 324
        ],
        [
        'ten'=> 'Xã Phú Long',
        'loai'=> 3,
        'parent_id'=> 324
        ],
        [
        'ten'=> 'Xã Quảng Lạc',
        'loai'=> 3,
        'parent_id'=> 324
        ],
        [
        'ten'=> 'Thị trấn Me',
        'loai'=> 3,
        'parent_id'=> 325
        ],
        [
        'ten'=> 'Xã Gia Hòa',
        'loai'=> 3,
        'parent_id'=> 325
        ],
        [
        'ten'=> 'Xã Gia Hưng',
        'loai'=> 3,
        'parent_id'=> 325
        ],
        [
        'ten'=> 'Xã Liên Sơn',
        'loai'=> 3,
        'parent_id'=> 325
        ],
        [
        'ten'=> 'Xã Gia Thanh',
        'loai'=> 3,
        'parent_id'=> 325
        ],
        [
        'ten'=> 'Xã Gia Vân',
        'loai'=> 3,
        'parent_id'=> 325
        ],
        [
        'ten'=> 'Xã Gia Phú',
        'loai'=> 3,
        'parent_id'=> 325
        ],
        [
        'ten'=> 'Xã Gia Xuân',
        'loai'=> 3,
        'parent_id'=> 325
        ],
        [
        'ten'=> 'Xã Gia Lập',
        'loai'=> 3,
        'parent_id'=> 325
        ],
        [
        'ten'=> 'Xã Gia Vượng',
        'loai'=> 3,
        'parent_id'=> 325
        ],
        [
        'ten'=> 'Xã Gia Trấn',
        'loai'=> 3,
        'parent_id'=> 325
        ],
        [
        'ten'=> 'Xã Gia Thịnh',
        'loai'=> 3,
        'parent_id'=> 325
        ],
        [
        'ten'=> 'Xã Gia Phương',
        'loai'=> 3,
        'parent_id'=> 325
        ],
        [
        'ten'=> 'Xã Gia Tân',
        'loai'=> 3,
        'parent_id'=> 325
        ],
        [
        'ten'=> 'Xã Gia Thắng',
        'loai'=> 3,
        'parent_id'=> 325
        ],
        [
        'ten'=> 'Xã Gia Trung',
        'loai'=> 3,
        'parent_id'=> 325
        ],
        [
        'ten'=> 'Xã Gia Minh',
        'loai'=> 3,
        'parent_id'=> 325
        ],
        [
        'ten'=> 'Xã Gia Lạc',
        'loai'=> 3,
        'parent_id'=> 325
        ],
        [
        'ten'=> 'Xã Gia Tiến',
        'loai'=> 3,
        'parent_id'=> 325
        ],
        [
        'ten'=> 'Xã Gia Sinh',
        'loai'=> 3,
        'parent_id'=> 325
        ],
        [
        'ten'=> 'Xã Gia Phong',
        'loai'=> 3,
        'parent_id'=> 325
        ],
        [
        'ten'=> 'Thị trấn Thiên Tôn',
        'loai'=> 3,
        'parent_id'=> 326
        ],
        [
        'ten'=> 'Xã Ninh Giang',
        'loai'=> 3,
        'parent_id'=> 326
        ],
        [
        'ten'=> 'Xã Trường Yên',
        'loai'=> 3,
        'parent_id'=> 326
        ],
        [
        'ten'=> 'Xã Ninh Khang',
        'loai'=> 3,
        'parent_id'=> 326
        ],
        [
        'ten'=> 'Xã Ninh Mỹ',
        'loai'=> 3,
        'parent_id'=> 326
        ],
        [
        'ten'=> 'Xã Ninh Hòa',
        'loai'=> 3,
        'parent_id'=> 326
        ],
        [
        'ten'=> 'Xã Ninh Xuân',
        'loai'=> 3,
        'parent_id'=> 326
        ],
        [
        'ten'=> 'Xã Ninh Hải',
        'loai'=> 3,
        'parent_id'=> 326
        ],
        [
        'ten'=> 'Xã Ninh Thắng',
        'loai'=> 3,
        'parent_id'=> 326
        ],
        [
        'ten'=> 'Xã Ninh Vân',
        'loai'=> 3,
        'parent_id'=> 326
        ],
        [
        'ten'=> 'Xã Ninh An',
        'loai'=> 3,
        'parent_id'=> 326
        ],
        [
        'ten'=> 'Thị trấn Yên Ninh',
        'loai'=> 3,
        'parent_id'=> 327
        ],
        [
        'ten'=> 'Xã Khánh Tiên',
        'loai'=> 3,
        'parent_id'=> 327
        ],
        [
        'ten'=> 'Xã Khánh Phú',
        'loai'=> 3,
        'parent_id'=> 327
        ],
        [
        'ten'=> 'Xã Khánh Hòa',
        'loai'=> 3,
        'parent_id'=> 327
        ],
        [
        'ten'=> 'Xã Khánh Lợi',
        'loai'=> 3,
        'parent_id'=> 327
        ],
        [
        'ten'=> 'Xã Khánh An',
        'loai'=> 3,
        'parent_id'=> 327
        ],
        [
        'ten'=> 'Xã Khánh Cường',
        'loai'=> 3,
        'parent_id'=> 327
        ],
        [
        'ten'=> 'Xã Khánh Cư',
        'loai'=> 3,
        'parent_id'=> 327
        ],
        [
        'ten'=> 'Xã Khánh Thiện',
        'loai'=> 3,
        'parent_id'=> 327
        ],
        [
        'ten'=> 'Xã Khánh Hải',
        'loai'=> 3,
        'parent_id'=> 327
        ],
        [
        'ten'=> 'Xã Khánh Trung',
        'loai'=> 3,
        'parent_id'=> 327
        ],
        [
        'ten'=> 'Xã Khánh Mậu',
        'loai'=> 3,
        'parent_id'=> 327
        ],
        [
        'ten'=> 'Xã Khánh Vân',
        'loai'=> 3,
        'parent_id'=> 327
        ],
        [
        'ten'=> 'Xã Khánh Hội',
        'loai'=> 3,
        'parent_id'=> 327
        ],
        [
        'ten'=> 'Xã Khánh Công',
        'loai'=> 3,
        'parent_id'=> 327
        ],
        [
        'ten'=> 'Xã Khánh Thành',
        'loai'=> 3,
        'parent_id'=> 327
        ],
        [
        'ten'=> 'Xã Khánh Nhạc',
        'loai'=> 3,
        'parent_id'=> 327
        ],
        [
        'ten'=> 'Xã Khánh Thủy',
        'loai'=> 3,
        'parent_id'=> 327
        ],
        [
        'ten'=> 'Xã Khánh Hồng',
        'loai'=> 3,
        'parent_id'=> 327
        ],
        [
        'ten'=> 'Thị trấn Phát Diệm',
        'loai'=> 3,
        'parent_id'=> 328
        ],
        [
        'ten'=> 'Thị trấn Bình Minh',
        'loai'=> 3,
        'parent_id'=> 328
        ],
        [
        'ten'=> 'Xã Hồi Ninh',
        'loai'=> 3,
        'parent_id'=> 328
        ],
        [
        'ten'=> 'Xã Xuân Chính',
        'loai'=> 3,
        'parent_id'=> 328
        ],
        [
        'ten'=> 'Xã Kim Định',
        'loai'=> 3,
        'parent_id'=> 328
        ],
        [
        'ten'=> 'Xã Ân Hòa',
        'loai'=> 3,
        'parent_id'=> 328
        ],
        [
        'ten'=> 'Xã Hùng Tiến',
        'loai'=> 3,
        'parent_id'=> 328
        ],
        [
        'ten'=> 'Xã Quang Thiện',
        'loai'=> 3,
        'parent_id'=> 328
        ],
        [
        'ten'=> 'Xã Như Hòa',
        'loai'=> 3,
        'parent_id'=> 328
        ],
        [
        'ten'=> 'Xã Chất Bình',
        'loai'=> 3,
        'parent_id'=> 328
        ],
        [
        'ten'=> 'Xã Đồng Hướng',
        'loai'=> 3,
        'parent_id'=> 328
        ],
        [
        'ten'=> 'Xã Kim Chính',
        'loai'=> 3,
        'parent_id'=> 328
        ],
        [
        'ten'=> 'Xã Thượng Kiệm',
        'loai'=> 3,
        'parent_id'=> 328
        ],
        [
        'ten'=> 'Xã Lưu Phương',
        'loai'=> 3,
        'parent_id'=> 328
        ],
        [
        'ten'=> 'Xã Tân Thành',
        'loai'=> 3,
        'parent_id'=> 328
        ],
        [
        'ten'=> 'Xã Yên Lộc',
        'loai'=> 3,
        'parent_id'=> 328
        ],
        [
        'ten'=> 'Xã Lai Thành',
        'loai'=> 3,
        'parent_id'=> 328
        ],
        [
        'ten'=> 'Xã Định Hóa',
        'loai'=> 3,
        'parent_id'=> 328
        ],
        [
        'ten'=> 'Xã Văn Hải',
        'loai'=> 3,
        'parent_id'=> 328
        ],
        [
        'ten'=> 'Xã Kim Tân',
        'loai'=> 3,
        'parent_id'=> 328
        ],
        [
        'ten'=> 'Xã Kim Mỹ',
        'loai'=> 3,
        'parent_id'=> 328
        ],
        [
        'ten'=> 'Xã Cồn Thoi',
        'loai'=> 3,
        'parent_id'=> 328
        ],
        [
        'ten'=> 'Xã Kim Hải',
        'loai'=> 3,
        'parent_id'=> 328
        ],
        [
        'ten'=> 'Xã Kim Trung',
        'loai'=> 3,
        'parent_id'=> 328
        ],
        [
        'ten'=> 'Xã Kim Đông',
        'loai'=> 3,
        'parent_id'=> 328
        ],
        [
        'ten'=> 'Thị trấn Yên Thịnh',
        'loai'=> 3,
        'parent_id'=> 329
        ],
        [
        'ten'=> 'Xã Khánh Thượng',
        'loai'=> 3,
        'parent_id'=> 329
        ],
        [
        'ten'=> 'Xã Khánh Dương',
        'loai'=> 3,
        'parent_id'=> 329
        ],
        [
        'ten'=> 'Xã Mai Sơn',
        'loai'=> 3,
        'parent_id'=> 329
        ],
        [
        'ten'=> 'Xã Khánh Thịnh',
        'loai'=> 3,
        'parent_id'=> 329
        ],
        [
        'ten'=> 'Xã Yên Phong',
        'loai'=> 3,
        'parent_id'=> 329
        ],
        [
        'ten'=> 'Xã Yên Hòa',
        'loai'=> 3,
        'parent_id'=> 329
        ],
        [
        'ten'=> 'Xã Yên Thắng',
        'loai'=> 3,
        'parent_id'=> 329
        ],
        [
        'ten'=> 'Xã Yên Từ',
        'loai'=> 3,
        'parent_id'=> 329
        ],
        [
        'ten'=> 'Xã Yên Hưng',
        'loai'=> 3,
        'parent_id'=> 329
        ],
        [
        'ten'=> 'Xã Yên Thành',
        'loai'=> 3,
        'parent_id'=> 329
        ],
        [
        'ten'=> 'Xã Yên Nhân',
        'loai'=> 3,
        'parent_id'=> 329
        ],
        [
        'ten'=> 'Xã Yên Mỹ',
        'loai'=> 3,
        'parent_id'=> 329
        ],
        [
        'ten'=> 'Xã Yên Mạc',
        'loai'=> 3,
        'parent_id'=> 329
        ],
        [
        'ten'=> 'Xã Yên Đồng',
        'loai'=> 3,
        'parent_id'=> 329
        ],
        [
        'ten'=> 'Xã Yên Thái',
        'loai'=> 3,
        'parent_id'=> 329
        ],
        [
        'ten'=> 'Xã Yên Lâm',
        'loai'=> 3,
        'parent_id'=> 329
        ],
        [
        'ten'=> 'Phường Hàm Rồng',
        'loai'=> 3,
        'parent_id'=> 330
        ],
        [
        'ten'=> 'Phường Đông Thọ',
        'loai'=> 3,
        'parent_id'=> 330
        ],
        [
        'ten'=> 'Phường Nam Ngạn',
        'loai'=> 3,
        'parent_id'=> 330
        ],
        [
        'ten'=> 'Phường Trường Thi',
        'loai'=> 3,
        'parent_id'=> 330
        ],
        [
        'ten'=> 'Phường Điện Biên',
        'loai'=> 3,
        'parent_id'=> 330
        ],
        [
        'ten'=> 'Phường Phú Sơn',
        'loai'=> 3,
        'parent_id'=> 330
        ],
        [
        'ten'=> 'Phường Lam Sơn',
        'loai'=> 3,
        'parent_id'=> 330
        ],
        [
        'ten'=> 'Phường Ba Đình',
        'loai'=> 3,
        'parent_id'=> 330
        ],
        [
        'ten'=> 'Phường Ngọc Trạo',
        'loai'=> 3,
        'parent_id'=> 330
        ],
        [
        'ten'=> 'Phường Đông Vệ',
        'loai'=> 3,
        'parent_id'=> 330
        ],
        [
        'ten'=> 'Phường Đông Sơn',
        'loai'=> 3,
        'parent_id'=> 330
        ],
        [
        'ten'=> 'Phường Tân Sơn',
        'loai'=> 3,
        'parent_id'=> 330
        ],
        [
        'ten'=> 'Phường Đông Cương',
        'loai'=> 3,
        'parent_id'=> 330
        ],
        [
        'ten'=> 'Phường Đông Hương',
        'loai'=> 3,
        'parent_id'=> 330
        ],
        [
        'ten'=> 'Phường Đông Hải',
        'loai'=> 3,
        'parent_id'=> 330
        ],
        [
        'ten'=> 'Phường Quảng Hưng',
        'loai'=> 3,
        'parent_id'=> 330
        ],
        [
        'ten'=> 'Phường Quảng Thắng',
        'loai'=> 3,
        'parent_id'=> 330
        ],
        [
        'ten'=> 'Phường Quảng Thành',
        'loai'=> 3,
        'parent_id'=> 330
        ],
        [
        'ten'=> 'Xã Thiệu Vân',
        'loai'=> 3,
        'parent_id'=> 330
        ],
        [
        'ten'=> 'Phường Thiệu Khánh',
        'loai'=> 3,
        'parent_id'=> 330
        ],
        [
        'ten'=> 'Phường Thiệu Dương',
        'loai'=> 3,
        'parent_id'=> 330
        ],
        [
        'ten'=> 'Phường Tào Xuyên',
        'loai'=> 3,
        'parent_id'=> 330
        ],
        [
        'ten'=> 'Phường Long Anh',
        'loai'=> 3,
        'parent_id'=> 330
        ],
        [
        'ten'=> 'Xã Hoằng Quang',
        'loai'=> 3,
        'parent_id'=> 330
        ],
        [
        'ten'=> 'Xã Hoằng Đại',
        'loai'=> 3,
        'parent_id'=> 330
        ],
        [
        'ten'=> 'Phường Đông Lĩnh',
        'loai'=> 3,
        'parent_id'=> 330
        ],
        [
        'ten'=> 'Xã Đông Vinh',
        'loai'=> 3,
        'parent_id'=> 330
        ],
        [
        'ten'=> 'Phường Đông Tân',
        'loai'=> 3,
        'parent_id'=> 330
        ],
        [
        'ten'=> 'Phường An Hưng',
        'loai'=> 3,
        'parent_id'=> 330
        ],
        [
        'ten'=> 'Phường Quảng Thịnh',
        'loai'=> 3,
        'parent_id'=> 330
        ],
        [
        'ten'=> 'Phường Quảng Đông',
        'loai'=> 3,
        'parent_id'=> 330
        ],
        [
        'ten'=> 'Phường Quảng Cát',
        'loai'=> 3,
        'parent_id'=> 330
        ],
        [
        'ten'=> 'Phường Quảng Phú',
        'loai'=> 3,
        'parent_id'=> 330
        ],
        [
        'ten'=> 'Phường Quảng Tâm',
        'loai'=> 3,
        'parent_id'=> 330
        ],
        [
        'ten'=> 'Phường Bắc Sơn',
        'loai'=> 3,
        'parent_id'=> 331
        ],
        [
        'ten'=> 'Phường Ba Đình',
        'loai'=> 3,
        'parent_id'=> 331
        ],
        [
        'ten'=> 'Phường Lam Sơn',
        'loai'=> 3,
        'parent_id'=> 331
        ],
        [
        'ten'=> 'Phường Ngọc Trạo',
        'loai'=> 3,
        'parent_id'=> 331
        ],
        [
        'ten'=> 'Phường Đông Sơn',
        'loai'=> 3,
        'parent_id'=> 331
        ],
        [
        'ten'=> 'Phường Phú Sơn',
        'loai'=> 3,
        'parent_id'=> 331
        ],
        [
        'ten'=> 'Xã Quang Trung',
        'loai'=> 3,
        'parent_id'=> 331
        ],
        [
        'ten'=> 'Phường Trung Sơn',
        'loai'=> 3,
        'parent_id'=> 332
        ],
        [
        'ten'=> 'Phường Bắc Sơn',
        'loai'=> 3,
        'parent_id'=> 332
        ],
        [
        'ten'=> 'Phường Trường Sơn',
        'loai'=> 3,
        'parent_id'=> 332
        ],
        [
        'ten'=> 'Phường Quảng Cư',
        'loai'=> 3,
        'parent_id'=> 332
        ],
        [
        'ten'=> 'Phường Quảng Tiến',
        'loai'=> 3,
        'parent_id'=> 332
        ],
        [
        'ten'=> 'Xã Quảng Minh',
        'loai'=> 3,
        'parent_id'=> 332
        ],
        [
        'ten'=> 'Xã Quảng Hùng',
        'loai'=> 3,
        'parent_id'=> 332
        ],
        [
        'ten'=> 'Phường Quảng Thọ',
        'loai'=> 3,
        'parent_id'=> 332
        ],
        [
        'ten'=> 'Phường Quảng Châu',
        'loai'=> 3,
        'parent_id'=> 332
        ],
        [
        'ten'=> 'Phường Quảng Vinh',
        'loai'=> 3,
        'parent_id'=> 332
        ],
        [
        'ten'=> 'Xã Quảng Đại',
        'loai'=> 3,
        'parent_id'=> 332
        ],
        [
        'ten'=> 'Thị trấn Mường Lát',
        'loai'=> 3,
        'parent_id'=> 333
        ],
        [
        'ten'=> 'Xã Tam Chung',
        'loai'=> 3,
        'parent_id'=> 333
        ],
        [
        'ten'=> 'Xã Mường Lý',
        'loai'=> 3,
        'parent_id'=> 333
        ],
        [
        'ten'=> 'Xã Trung Lý',
        'loai'=> 3,
        'parent_id'=> 333
        ],
        [
        'ten'=> 'Xã Quang Chiểu',
        'loai'=> 3,
        'parent_id'=> 333
        ],
        [
        'ten'=> 'Xã Pù Nhi',
        'loai'=> 3,
        'parent_id'=> 333
        ],
        [
        'ten'=> 'Xã Nhi Sơn',
        'loai'=> 3,
        'parent_id'=> 333
        ],
        [
        'ten'=> 'Xã Mường Chanh',
        'loai'=> 3,
        'parent_id'=> 333
        ],
        [
        'ten'=> 'Thị trấn Hồi Xuân',
        'loai'=> 3,
        'parent_id'=> 334
        ],
        [
        'ten'=> 'Xã Thành Sơn',
        'loai'=> 3,
        'parent_id'=> 334
        ],
        [
        'ten'=> 'Xã Trung Sơn',
        'loai'=> 3,
        'parent_id'=> 334
        ],
        [
        'ten'=> 'Xã Phú Thanh',
        'loai'=> 3,
        'parent_id'=> 334
        ],
        [
        'ten'=> 'Xã Trung Thành',
        'loai'=> 3,
        'parent_id'=> 334
        ],
        [
        'ten'=> 'Xã Phú Lệ',
        'loai'=> 3,
        'parent_id'=> 334
        ],
        [
        'ten'=> 'Xã Phú Sơn',
        'loai'=> 3,
        'parent_id'=> 334
        ],
        [
        'ten'=> 'Xã Phú Xuân',
        'loai'=> 3,
        'parent_id'=> 334
        ],
        [
        'ten'=> 'Xã Hiền Chung',
        'loai'=> 3,
        'parent_id'=> 334
        ],
        [
        'ten'=> 'Xã Hiền Kiệt',
        'loai'=> 3,
        'parent_id'=> 334
        ],
        [
        'ten'=> 'Xã Nam Tiến',
        'loai'=> 3,
        'parent_id'=> 334
        ],
        [
        'ten'=> 'Xã Thiên Phủ',
        'loai'=> 3,
        'parent_id'=> 334
        ],
        [
        'ten'=> 'Xã Phú Nghiêm',
        'loai'=> 3,
        'parent_id'=> 334
        ],
        [
        'ten'=> 'Xã Nam Xuân',
        'loai'=> 3,
        'parent_id'=> 334
        ],
        [
        'ten'=> 'Xã Nam Động',
        'loai'=> 3,
        'parent_id'=> 334
        ],
        [
        'ten'=> 'Thị trấn Cành Nàng',
        'loai'=> 3,
        'parent_id'=> 335
        ],
        [
        'ten'=> 'Xã Điền Thượng',
        'loai'=> 3,
        'parent_id'=> 335
        ],
        [
        'ten'=> 'Xã Điền Hạ',
        'loai'=> 3,
        'parent_id'=> 335
        ],
        [
        'ten'=> 'Xã Điền Quang',
        'loai'=> 3,
        'parent_id'=> 335
        ],
        [
        'ten'=> 'Xã Điền Trung',
        'loai'=> 3,
        'parent_id'=> 335
        ],
        [
        'ten'=> 'Xã Thành Sơn',
        'loai'=> 3,
        'parent_id'=> 335
        ],
        [
        'ten'=> 'Xã Lương Ngoại',
        'loai'=> 3,
        'parent_id'=> 335
        ],
        [
        'ten'=> 'Xã Ái Thượng',
        'loai'=> 3,
        'parent_id'=> 335
        ],
        [
        'ten'=> 'Xã Lương Nội',
        'loai'=> 3,
        'parent_id'=> 335
        ],
        [
        'ten'=> 'Xã Điền Lư',
        'loai'=> 3,
        'parent_id'=> 335
        ],
        [
        'ten'=> 'Xã Lương Trung',
        'loai'=> 3,
        'parent_id'=> 335
        ],
        [
        'ten'=> 'Xã Lũng Niêm',
        'loai'=> 3,
        'parent_id'=> 335
        ],
        [
        'ten'=> 'Xã Lũng Cao',
        'loai'=> 3,
        'parent_id'=> 335
        ],
        [
        'ten'=> 'Xã Hạ Trung',
        'loai'=> 3,
        'parent_id'=> 335
        ],
        [
        'ten'=> 'Xã Cổ Lũng',
        'loai'=> 3,
        'parent_id'=> 335
        ],
        [
        'ten'=> 'Xã Thành Lâm',
        'loai'=> 3,
        'parent_id'=> 335
        ],
        [
        'ten'=> 'Xã Ban Công',
        'loai'=> 3,
        'parent_id'=> 335
        ],
        [
        'ten'=> 'Xã Kỳ Tân',
        'loai'=> 3,
        'parent_id'=> 335
        ],
        [
        'ten'=> 'Xã Văn Nho',
        'loai'=> 3,
        'parent_id'=> 335
        ],
        [
        'ten'=> 'Xã Thiết Ống',
        'loai'=> 3,
        'parent_id'=> 335
        ],
        [
        'ten'=> 'Xã Thiết Kế',
        'loai'=> 3,
        'parent_id'=> 335
        ],
        [
        'ten'=> 'Xã Trung Xuân',
        'loai'=> 3,
        'parent_id'=> 336
        ],
        [
        'ten'=> 'Xã Trung Thượng',
        'loai'=> 3,
        'parent_id'=> 336
        ],
        [
        'ten'=> 'Xã Trung Tiến',
        'loai'=> 3,
        'parent_id'=> 336
        ],
        [
        'ten'=> 'Xã Trung Hạ',
        'loai'=> 3,
        'parent_id'=> 336
        ],
        [
        'ten'=> 'Xã Sơn Hà',
        'loai'=> 3,
        'parent_id'=> 336
        ],
        [
        'ten'=> 'Xã Tam Thanh',
        'loai'=> 3,
        'parent_id'=> 336
        ],
        [
        'ten'=> 'Xã Sơn Thủy',
        'loai'=> 3,
        'parent_id'=> 336
        ],
        [
        'ten'=> 'Xã Na Mèo',
        'loai'=> 3,
        'parent_id'=> 336
        ],
        [
        'ten'=> 'Thị trấn Sơn Lư',
        'loai'=> 3,
        'parent_id'=> 336
        ],
        [
        'ten'=> 'Xã Tam Lư',
        'loai'=> 3,
        'parent_id'=> 336
        ],
        [
        'ten'=> 'Xã Sơn Điện',
        'loai'=> 3,
        'parent_id'=> 336
        ],
        [
        'ten'=> 'Xã Mường Mìn',
        'loai'=> 3,
        'parent_id'=> 336
        ],
        [
        'ten'=> 'Xã Yên Khương',
        'loai'=> 3,
        'parent_id'=> 337
        ],
        [
        'ten'=> 'Xã Yên Thắng',
        'loai'=> 3,
        'parent_id'=> 337
        ],
        [
        'ten'=> 'Xã Trí Nang',
        'loai'=> 3,
        'parent_id'=> 337
        ],
        [
        'ten'=> 'Xã Giao An',
        'loai'=> 3,
        'parent_id'=> 337
        ],
        [
        'ten'=> 'Xã Giao Thiện',
        'loai'=> 3,
        'parent_id'=> 337
        ],
        [
        'ten'=> 'Xã Tân Phúc',
        'loai'=> 3,
        'parent_id'=> 337
        ],
        [
        'ten'=> 'Xã Tam Văn',
        'loai'=> 3,
        'parent_id'=> 337
        ],
        [
        'ten'=> 'Xã Lâm Phú',
        'loai'=> 3,
        'parent_id'=> 337
        ],
        [
        'ten'=> 'Thị trấn Lang Chánh',
        'loai'=> 3,
        'parent_id'=> 337
        ],
        [
        'ten'=> 'Xã Đồng Lương',
        'loai'=> 3,
        'parent_id'=> 337
        ],
        [
        'ten'=> 'Thị Trấn Ngọc Lặc',
        'loai'=> 3,
        'parent_id'=> 338
        ],
        [
        'ten'=> 'Xã Lam Sơn',
        'loai'=> 3,
        'parent_id'=> 338
        ],
        [
        'ten'=> 'Xã Mỹ Tân',
        'loai'=> 3,
        'parent_id'=> 338
        ],
        [
        'ten'=> 'Xã Thúy Sơn',
        'loai'=> 3,
        'parent_id'=> 338
        ],
        [
        'ten'=> 'Xã Thạch Lập',
        'loai'=> 3,
        'parent_id'=> 338
        ],
        [
        'ten'=> 'Xã Vân Âm',
        'loai'=> 3,
        'parent_id'=> 338
        ],
        [
        'ten'=> 'Xã Cao Ngọc',
        'loai'=> 3,
        'parent_id'=> 338
        ],
        [
        'ten'=> 'Xã Quang Trung',
        'loai'=> 3,
        'parent_id'=> 338
        ],
        [
        'ten'=> 'Xã Đồng Thịnh',
        'loai'=> 3,
        'parent_id'=> 338
        ],
        [
        'ten'=> 'Xã Ngọc Liên',
        'loai'=> 3,
        'parent_id'=> 338
        ],
        [
        'ten'=> 'Xã Ngọc Sơn',
        'loai'=> 3,
        'parent_id'=> 338
        ],
        [
        'ten'=> 'Xã Lộc Thịnh',
        'loai'=> 3,
        'parent_id'=> 338
        ],
        [
        'ten'=> 'Xã Cao Thịnh',
        'loai'=> 3,
        'parent_id'=> 338
        ],
        [
        'ten'=> 'Xã Ngọc Trung',
        'loai'=> 3,
        'parent_id'=> 338
        ],
        [
        'ten'=> 'Xã Phùng Giáo',
        'loai'=> 3,
        'parent_id'=> 338
        ],
        [
        'ten'=> 'Xã Phùng Minh',
        'loai'=> 3,
        'parent_id'=> 338
        ],
        [
        'ten'=> 'Xã Phúc Thịnh',
        'loai'=> 3,
        'parent_id'=> 338
        ],
        [
        'ten'=> 'Xã Nguyệt Ấn',
        'loai'=> 3,
        'parent_id'=> 338
        ],
        [
        'ten'=> 'Xã Kiên Thọ',
        'loai'=> 3,
        'parent_id'=> 338
        ],
        [
        'ten'=> 'Xã Minh Tiến',
        'loai'=> 3,
        'parent_id'=> 338
        ],
        [
        'ten'=> 'Xã Minh Sơn',
        'loai'=> 3,
        'parent_id'=> 338
        ],
        [
        'ten'=> 'Thị trấn Phong Sơn',
        'loai'=> 3,
        'parent_id'=> 339
        ],
        [
        'ten'=> 'Xã Cẩm Thành',
        'loai'=> 3,
        'parent_id'=> 339
        ],
        [
        'ten'=> 'Xã Cẩm Quý',
        'loai'=> 3,
        'parent_id'=> 339
        ],
        [
        'ten'=> 'Xã Cẩm Lương',
        'loai'=> 3,
        'parent_id'=> 339
        ],
        [
        'ten'=> 'Xã Cẩm Thạch',
        'loai'=> 3,
        'parent_id'=> 339
        ],
        [
        'ten'=> 'Xã Cẩm Liên',
        'loai'=> 3,
        'parent_id'=> 339
        ],
        [
        'ten'=> 'Xã Cẩm Giang',
        'loai'=> 3,
        'parent_id'=> 339
        ],
        [
        'ten'=> 'Xã Cẩm Bình',
        'loai'=> 3,
        'parent_id'=> 339
        ],
        [
        'ten'=> 'Xã Cẩm Tú',
        'loai'=> 3,
        'parent_id'=> 339
        ],
        [
        'ten'=> 'Xã Cẩm Châu',
        'loai'=> 3,
        'parent_id'=> 339
        ],
        [
        'ten'=> 'Xã Cẩm Tâm',
        'loai'=> 3,
        'parent_id'=> 339
        ],
        [
        'ten'=> 'Xã Cẩm Ngọc',
        'loai'=> 3,
        'parent_id'=> 339
        ],
        [
        'ten'=> 'Xã Cẩm Long',
        'loai'=> 3,
        'parent_id'=> 339
        ],
        [
        'ten'=> 'Xã Cẩm Yên',
        'loai'=> 3,
        'parent_id'=> 339
        ],
        [
        'ten'=> 'Xã Cẩm Tân',
        'loai'=> 3,
        'parent_id'=> 339
        ],
        [
        'ten'=> 'Xã Cẩm Phú',
        'loai'=> 3,
        'parent_id'=> 339
        ],
        [
        'ten'=> 'Xã Cẩm Vân',
        'loai'=> 3,
        'parent_id'=> 339
        ],
        [
        'ten'=> 'Thị trấn Kim Tân',
        'loai'=> 3,
        'parent_id'=> 340
        ],
        [
        'ten'=> 'Thị trấn Vân Du',
        'loai'=> 3,
        'parent_id'=> 340
        ],
        [
        'ten'=> 'Xã Thạch Lâm',
        'loai'=> 3,
        'parent_id'=> 340
        ],
        [
        'ten'=> 'Xã Thạch Quảng',
        'loai'=> 3,
        'parent_id'=> 340
        ],
        [
        'ten'=> 'Xã Thạch Tượng',
        'loai'=> 3,
        'parent_id'=> 340
        ],
        [
        'ten'=> 'Xã Thạch Cẩm',
        'loai'=> 3,
        'parent_id'=> 340
        ],
        [
        'ten'=> 'Xã Thạch Sơn',
        'loai'=> 3,
        'parent_id'=> 340
        ],
        [
        'ten'=> 'Xã Thạch Bình',
        'loai'=> 3,
        'parent_id'=> 340
        ],
        [
        'ten'=> 'Xã Thạch Định',
        'loai'=> 3,
        'parent_id'=> 340
        ],
        [
        'ten'=> 'Xã Thạch Đồng',
        'loai'=> 3,
        'parent_id'=> 340
        ],
        [
        'ten'=> 'Xã Thạch Long',
        'loai'=> 3,
        'parent_id'=> 340
        ],
        [
        'ten'=> 'Xã Thành Mỹ',
        'loai'=> 3,
        'parent_id'=> 340
        ],
        [
        'ten'=> 'Xã Thành Yên',
        'loai'=> 3,
        'parent_id'=> 340
        ],
        [
        'ten'=> 'Xã Thành Vinh',
        'loai'=> 3,
        'parent_id'=> 340
        ],
        [
        'ten'=> 'Xã Thành Minh',
        'loai'=> 3,
        'parent_id'=> 340
        ],
        [
        'ten'=> 'Xã Thành Công',
        'loai'=> 3,
        'parent_id'=> 340
        ],
        [
        'ten'=> 'Xã Thành Tân',
        'loai'=> 3,
        'parent_id'=> 340
        ],
        [
        'ten'=> 'Xã Thành Trực',
        'loai'=> 3,
        'parent_id'=> 340
        ],
        [
        'ten'=> 'Xã Thành Tâm',
        'loai'=> 3,
        'parent_id'=> 340
        ],
        [
        'ten'=> 'Xã Thành An',
        'loai'=> 3,
        'parent_id'=> 340
        ],
        [
        'ten'=> 'Xã Thành Thọ',
        'loai'=> 3,
        'parent_id'=> 340
        ],
        [
        'ten'=> 'Xã Thành Tiến',
        'loai'=> 3,
        'parent_id'=> 340
        ],
        [
        'ten'=> 'Xã Thành Long',
        'loai'=> 3,
        'parent_id'=> 340
        ],
        [
        'ten'=> 'Xã Thành Hưng',
        'loai'=> 3,
        'parent_id'=> 340
        ],
        [
        'ten'=> 'Xã Ngọc Trạo',
        'loai'=> 3,
        'parent_id'=> 340
        ],
        [
        'ten'=> 'Thị trấn Hà Trung',
        'loai'=> 3,
        'parent_id'=> 341
        ],
        [
        'ten'=> 'Xã Hà Long',
        'loai'=> 3,
        'parent_id'=> 341
        ],
        [
        'ten'=> 'Xã Hà Vinh',
        'loai'=> 3,
        'parent_id'=> 341
        ],
        [
        'ten'=> 'Xã Hà Bắc',
        'loai'=> 3,
        'parent_id'=> 341
        ],
        [
        'ten'=> 'Xã Hoạt Giang',
        'loai'=> 3,
        'parent_id'=> 341
        ],
        [
        'ten'=> 'Xã Yên Dương',
        'loai'=> 3,
        'parent_id'=> 341
        ],
        [
        'ten'=> 'Xã Hà Giang',
        'loai'=> 3,
        'parent_id'=> 341
        ],
        [
        'ten'=> 'Xã Lĩnh Toại',
        'loai'=> 3,
        'parent_id'=> 341
        ],
        [
        'ten'=> 'Xã Hà Ngọc',
        'loai'=> 3,
        'parent_id'=> 341
        ],
        [
        'ten'=> 'Xã Yến Sơn',
        'loai'=> 3,
        'parent_id'=> 341
        ],
        [
        'ten'=> 'Xã Hà Sơn',
        'loai'=> 3,
        'parent_id'=> 341
        ],
        [
        'ten'=> 'Xã Hà Lĩnh',
        'loai'=> 3,
        'parent_id'=> 341
        ],
        [
        'ten'=> 'Xã Hà Đông',
        'loai'=> 3,
        'parent_id'=> 341
        ],
        [
        'ten'=> 'Xã Hà Tân',
        'loai'=> 3,
        'parent_id'=> 341
        ],
        [
        'ten'=> 'Xã Hà Tiến',
        'loai'=> 3,
        'parent_id'=> 341
        ],
        [
        'ten'=> 'Xã Hà Bình',
        'loai'=> 3,
        'parent_id'=> 341
        ],
        [
        'ten'=> 'Xã Hà Lai',
        'loai'=> 3,
        'parent_id'=> 341
        ],
        [
        'ten'=> 'Xã Hà Châu',
        'loai'=> 3,
        'parent_id'=> 341
        ],
        [
        'ten'=> 'Xã Hà Thái',
        'loai'=> 3,
        'parent_id'=> 341
        ],
        [
        'ten'=> 'Xã Hà Hải',
        'loai'=> 3,
        'parent_id'=> 341
        ],
        [
        'ten'=> 'Thị trấn Vĩnh Lộc',
        'loai'=> 3,
        'parent_id'=> 342
        ],
        [
        'ten'=> 'Xã Vĩnh Quang',
        'loai'=> 3,
        'parent_id'=> 342
        ],
        [
        'ten'=> 'Xã Vĩnh Yên',
        'loai'=> 3,
        'parent_id'=> 342
        ],
        [
        'ten'=> 'Xã Vĩnh Tiến',
        'loai'=> 3,
        'parent_id'=> 342
        ],
        [
        'ten'=> 'Xã Vĩnh Long',
        'loai'=> 3,
        'parent_id'=> 342
        ],
        [
        'ten'=> 'Xã Vĩnh Phúc',
        'loai'=> 3,
        'parent_id'=> 342
        ],
        [
        'ten'=> 'Xã Vĩnh Hưng',
        'loai'=> 3,
        'parent_id'=> 342
        ],
        [
        'ten'=> 'Xã Vĩnh Hòa',
        'loai'=> 3,
        'parent_id'=> 342
        ],
        [
        'ten'=> 'Xã Vĩnh Hùng',
        'loai'=> 3,
        'parent_id'=> 342
        ],
        [
        'ten'=> 'Xã Minh Tân',
        'loai'=> 3,
        'parent_id'=> 342
        ],
        [
        'ten'=> 'Xã Ninh Khang',
        'loai'=> 3,
        'parent_id'=> 342
        ],
        [
        'ten'=> 'Xã Vĩnh Thịnh',
        'loai'=> 3,
        'parent_id'=> 342
        ],
        [
        'ten'=> 'Xã Vĩnh An',
        'loai'=> 3,
        'parent_id'=> 342
        ],
        [
        'ten'=> 'Thị trấn Thống Nhất',
        'loai'=> 3,
        'parent_id'=> 343
        ],
        [
        'ten'=> 'Thị trấn Yên Lâm',
        'loai'=> 3,
        'parent_id'=> 343
        ],
        [
        'ten'=> 'Xã Yên Tâm',
        'loai'=> 3,
        'parent_id'=> 343
        ],
        [
        'ten'=> 'Xã Yên Phú',
        'loai'=> 3,
        'parent_id'=> 343
        ],
        [
        'ten'=> 'Thị trấn Quý Lộc',
        'loai'=> 3,
        'parent_id'=> 343
        ],
        [
        'ten'=> 'Xã Yên Thọ',
        'loai'=> 3,
        'parent_id'=> 343
        ],
        [
        'ten'=> 'Xã Yên Trung',
        'loai'=> 3,
        'parent_id'=> 343
        ],
        [
        'ten'=> 'Xã Yên Trường',
        'loai'=> 3,
        'parent_id'=> 343
        ],
        [
        'ten'=> 'Xã Yên Phong',
        'loai'=> 3,
        'parent_id'=> 343
        ],
        [
        'ten'=> 'Xã Yên Thái',
        'loai'=> 3,
        'parent_id'=> 343
        ],
        [
        'ten'=> 'Xã Yên Hùng',
        'loai'=> 3,
        'parent_id'=> 343
        ],
        [
        'ten'=> 'Xã Yên Thịnh',
        'loai'=> 3,
        'parent_id'=> 343
        ],
        [
        'ten'=> 'Xã Yên Ninh',
        'loai'=> 3,
        'parent_id'=> 343
        ],
        [
        'ten'=> 'Xã Yên Lạc',
        'loai'=> 3,
        'parent_id'=> 343
        ],
        [
        'ten'=> 'Xã Định Tăng',
        'loai'=> 3,
        'parent_id'=> 343
        ],
        [
        'ten'=> 'Xã Định Hòa',
        'loai'=> 3,
        'parent_id'=> 343
        ],
        [
        'ten'=> 'Xã Định Thành',
        'loai'=> 3,
        'parent_id'=> 343
        ],
        [
        'ten'=> 'Xã Định Công',
        'loai'=> 3,
        'parent_id'=> 343
        ],
        [
        'ten'=> 'Xã Định Tân',
        'loai'=> 3,
        'parent_id'=> 343
        ],
        [
        'ten'=> 'Xã Định Tiến',
        'loai'=> 3,
        'parent_id'=> 343
        ],
        [
        'ten'=> 'Xã Định Long',
        'loai'=> 3,
        'parent_id'=> 343
        ],
        [
        'ten'=> 'Xã Định Liên',
        'loai'=> 3,
        'parent_id'=> 343
        ],
        [
        'ten'=> 'Thị trấn Quán Lào',
        'loai'=> 3,
        'parent_id'=> 343
        ],
        [
        'ten'=> 'Xã Định Hưng',
        'loai'=> 3,
        'parent_id'=> 343
        ],
        [
        'ten'=> 'Xã Định Hải',
        'loai'=> 3,
        'parent_id'=> 343
        ],
        [
        'ten'=> 'Xã Định Bình',
        'loai'=> 3,
        'parent_id'=> 343
        ],
        [
        'ten'=> 'Xã Xuân Hồng',
        'loai'=> 3,
        'parent_id'=> 344
        ],
        [
        'ten'=> 'Thị trấn Thọ Xuân',
        'loai'=> 3,
        'parent_id'=> 344
        ],
        [
        'ten'=> 'Xã Bắc Lương',
        'loai'=> 3,
        'parent_id'=> 344
        ],
        [
        'ten'=> 'Xã Nam Giang',
        'loai'=> 3,
        'parent_id'=> 344
        ],
        [
        'ten'=> 'Xã Xuân Phong',
        'loai'=> 3,
        'parent_id'=> 344
        ],
        [
        'ten'=> 'Xã Thọ Lộc',
        'loai'=> 3,
        'parent_id'=> 344
        ],
        [
        'ten'=> 'Xã Xuân Trường',
        'loai'=> 3,
        'parent_id'=> 344
        ],
        [
        'ten'=> 'Xã Xuân Hòa',
        'loai'=> 3,
        'parent_id'=> 344
        ],
        [
        'ten'=> 'Xã Thọ Hải',
        'loai'=> 3,
        'parent_id'=> 344
        ],
        [
        'ten'=> 'Xã Tây Hồ',
        'loai'=> 3,
        'parent_id'=> 344
        ],
        [
        'ten'=> 'Xã Xuân Giang',
        'loai'=> 3,
        'parent_id'=> 344
        ],
        [
        'ten'=> 'Xã Xuân Sinh',
        'loai'=> 3,
        'parent_id'=> 344
        ],
        [
        'ten'=> 'Xã Xuân Hưng',
        'loai'=> 3,
        'parent_id'=> 344
        ],
        [
        'ten'=> 'Xã Thọ Diên',
        'loai'=> 3,
        'parent_id'=> 344
        ],
        [
        'ten'=> 'Xã Thọ Lâm',
        'loai'=> 3,
        'parent_id'=> 344
        ],
        [
        'ten'=> 'Xã Thọ Xương',
        'loai'=> 3,
        'parent_id'=> 344
        ],
        [
        'ten'=> 'Xã Xuân Bái',
        'loai'=> 3,
        'parent_id'=> 344
        ],
        [
        'ten'=> 'Xã Xuân Phú',
        'loai'=> 3,
        'parent_id'=> 344
        ],
        [
        'ten'=> 'Thị trấn Sao Vàng',
        'loai'=> 3,
        'parent_id'=> 344
        ],
        [
        'ten'=> 'Thị trấn Lam Sơn',
        'loai'=> 3,
        'parent_id'=> 344
        ],
        [
        'ten'=> 'Xã Xuân Thiên',
        'loai'=> 3,
        'parent_id'=> 344
        ],
        [
        'ten'=> 'Xã Thuận Minh',
        'loai'=> 3,
        'parent_id'=> 344
        ],
        [
        'ten'=> 'Xã Thọ Lập',
        'loai'=> 3,
        'parent_id'=> 344
        ],
        [
        'ten'=> 'Xã Quảng Phú',
        'loai'=> 3,
        'parent_id'=> 344
        ],
        [
        'ten'=> 'Xã Xuân Tín',
        'loai'=> 3,
        'parent_id'=> 344
        ],
        [
        'ten'=> 'Xã Phú Xuân',
        'loai'=> 3,
        'parent_id'=> 344
        ],
        [
        'ten'=> 'Xã Xuân Lai',
        'loai'=> 3,
        'parent_id'=> 344
        ],
        [
        'ten'=> 'Xã Xuân Lập',
        'loai'=> 3,
        'parent_id'=> 344
        ],
        [
        'ten'=> 'Xã Xuân Minh',
        'loai'=> 3,
        'parent_id'=> 344
        ],
        [
        'ten'=> 'Xã Trường Xuân',
        'loai'=> 3,
        'parent_id'=> 344
        ],
        [
        'ten'=> 'Xã Bát Mọt',
        'loai'=> 3,
        'parent_id'=> 345
        ],
        [
        'ten'=> 'Xã Yên Nhân',
        'loai'=> 3,
        'parent_id'=> 345
        ],
        [
        'ten'=> 'Xã Xuân Lẹ',
        'loai'=> 3,
        'parent_id'=> 345
        ],
        [
        'ten'=> 'Xã Vạn Xuân',
        'loai'=> 3,
        'parent_id'=> 345
        ],
        [
        'ten'=> 'Xã Lương Sơn',
        'loai'=> 3,
        'parent_id'=> 345
        ],
        [
        'ten'=> 'Xã Xuân Cao',
        'loai'=> 3,
        'parent_id'=> 345
        ],
        [
        'ten'=> 'Xã Luận Thành',
        'loai'=> 3,
        'parent_id'=> 345
        ],
        [
        'ten'=> 'Xã Luận Khê',
        'loai'=> 3,
        'parent_id'=> 345
        ],
        [
        'ten'=> 'Xã Xuân Thắng',
        'loai'=> 3,
        'parent_id'=> 345
        ],
        [
        'ten'=> 'Xã Xuân Lộc',
        'loai'=> 3,
        'parent_id'=> 345
        ],
        [
        'ten'=> 'Thị trấn Thường Xuân',
        'loai'=> 3,
        'parent_id'=> 345
        ],
        [
        'ten'=> 'Xã Xuân Dương',
        'loai'=> 3,
        'parent_id'=> 345
        ],
        [
        'ten'=> 'Xã Thọ Thanh',
        'loai'=> 3,
        'parent_id'=> 345
        ],
        [
        'ten'=> 'Xã Ngọc Phụng',
        'loai'=> 3,
        'parent_id'=> 345
        ],
        [
        'ten'=> 'Xã Xuân Chinh',
        'loai'=> 3,
        'parent_id'=> 345
        ],
        [
        'ten'=> 'Xã Tân Thành',
        'loai'=> 3,
        'parent_id'=> 345
        ],
        [
        'ten'=> 'Thị trấn Triệu Sơn',
        'loai'=> 3,
        'parent_id'=> 346
        ],
        [
        'ten'=> 'Xã Thọ Sơn',
        'loai'=> 3,
        'parent_id'=> 346
        ],
        [
        'ten'=> 'Xã Thọ Bình',
        'loai'=> 3,
        'parent_id'=> 346
        ],
        [
        'ten'=> 'Xã Thọ Tiến',
        'loai'=> 3,
        'parent_id'=> 346
        ],
        [
        'ten'=> 'Xã Hợp Lý',
        'loai'=> 3,
        'parent_id'=> 346
        ],
        [
        'ten'=> 'Xã Hợp Tiến',
        'loai'=> 3,
        'parent_id'=> 346
        ],
        [
        'ten'=> 'Xã Hợp Thành',
        'loai'=> 3,
        'parent_id'=> 346
        ],
        [
        'ten'=> 'Xã Triệu Thành',
        'loai'=> 3,
        'parent_id'=> 346
        ],
        [
        'ten'=> 'Xã Hợp Thắng',
        'loai'=> 3,
        'parent_id'=> 346
        ],
        [
        'ten'=> 'Xã Minh Sơn',
        'loai'=> 3,
        'parent_id'=> 346
        ],
        [
        'ten'=> 'Xã Dân Lực',
        'loai'=> 3,
        'parent_id'=> 346
        ],
        [
        'ten'=> 'Xã Dân Lý',
        'loai'=> 3,
        'parent_id'=> 346
        ],
        [
        'ten'=> 'Xã Dân Quyền',
        'loai'=> 3,
        'parent_id'=> 346
        ],
        [
        'ten'=> 'Xã An Nông',
        'loai'=> 3,
        'parent_id'=> 346
        ],
        [
        'ten'=> 'Xã Văn Sơn',
        'loai'=> 3,
        'parent_id'=> 346
        ],
        [
        'ten'=> 'Xã Thái Hòa',
        'loai'=> 3,
        'parent_id'=> 346
        ],
        [
        'ten'=> 'Thị trấn Nưa',
        'loai'=> 3,
        'parent_id'=> 346
        ],
        [
        'ten'=> 'Xã Đồng Lợi',
        'loai'=> 3,
        'parent_id'=> 346
        ],
        [
        'ten'=> 'Xã Đồng Tiến',
        'loai'=> 3,
        'parent_id'=> 346
        ],
        [
        'ten'=> 'Xã Đồng Thắng',
        'loai'=> 3,
        'parent_id'=> 346
        ],
        [
        'ten'=> 'Xã Tiến Nông',
        'loai'=> 3,
        'parent_id'=> 346
        ],
        [
        'ten'=> 'Xã Khuyến Nông',
        'loai'=> 3,
        'parent_id'=> 346
        ],
        [
        'ten'=> 'Xã Xuân Thịnh',
        'loai'=> 3,
        'parent_id'=> 346
        ],
        [
        'ten'=> 'Xã Xuân Lộc',
        'loai'=> 3,
        'parent_id'=> 346
        ],
        [
        'ten'=> 'Xã Thọ Dân',
        'loai'=> 3,
        'parent_id'=> 346
        ],
        [
        'ten'=> 'Xã Xuân Thọ',
        'loai'=> 3,
        'parent_id'=> 346
        ],
        [
        'ten'=> 'Xã Thọ Tân',
        'loai'=> 3,
        'parent_id'=> 346
        ],
        [
        'ten'=> 'Xã Thọ Ngọc',
        'loai'=> 3,
        'parent_id'=> 346
        ],
        [
        'ten'=> 'Xã Thọ Cường',
        'loai'=> 3,
        'parent_id'=> 346
        ],
        [
        'ten'=> 'Xã Thọ Phú',
        'loai'=> 3,
        'parent_id'=> 346
        ],
        [
        'ten'=> 'Xã Thọ Vực',
        'loai'=> 3,
        'parent_id'=> 346
        ],
        [
        'ten'=> 'Xã Thọ Thế',
        'loai'=> 3,
        'parent_id'=> 346
        ],
        [
        'ten'=> 'Xã Nông Trường',
        'loai'=> 3,
        'parent_id'=> 346
        ],
        [
        'ten'=> 'Xã Bình Sơn',
        'loai'=> 3,
        'parent_id'=> 346
        ],
        [
        'ten'=> 'Thị trấn Thiệu Hóa',
        'loai'=> 3,
        'parent_id'=> 347
        ],
        [
        'ten'=> 'Xã Thiệu Ngọc',
        'loai'=> 3,
        'parent_id'=> 347
        ],
        [
        'ten'=> 'Xã Thiệu Vũ',
        'loai'=> 3,
        'parent_id'=> 347
        ],
        [
        'ten'=> 'Xã Thiệu Phúc',
        'loai'=> 3,
        'parent_id'=> 347
        ],
        [
        'ten'=> 'Xã Thiệu Tiến',
        'loai'=> 3,
        'parent_id'=> 347
        ],
        [
        'ten'=> 'Xã Thiệu Công',
        'loai'=> 3,
        'parent_id'=> 347
        ],
        [
        'ten'=> 'Xã Thiệu Phú',
        'loai'=> 3,
        'parent_id'=> 347
        ],
        [
        'ten'=> 'Xã Thiệu Long',
        'loai'=> 3,
        'parent_id'=> 347
        ],
        [
        'ten'=> 'Xã Thiệu Giang',
        'loai'=> 3,
        'parent_id'=> 347
        ],
        [
        'ten'=> 'Xã Thiệu Duy',
        'loai'=> 3,
        'parent_id'=> 347
        ],
        [
        'ten'=> 'Xã Thiệu Nguyên',
        'loai'=> 3,
        'parent_id'=> 347
        ],
        [
        'ten'=> 'Xã Thiệu Hợp',
        'loai'=> 3,
        'parent_id'=> 347
        ],
        [
        'ten'=> 'Xã Thiệu Thịnh',
        'loai'=> 3,
        'parent_id'=> 347
        ],
        [
        'ten'=> 'Xã Thiệu Quang',
        'loai'=> 3,
        'parent_id'=> 347
        ],
        [
        'ten'=> 'Xã Thiệu Thành',
        'loai'=> 3,
        'parent_id'=> 347
        ],
        [
        'ten'=> 'Xã Thiệu Toán',
        'loai'=> 3,
        'parent_id'=> 347
        ],
        [
        'ten'=> 'Xã Thiệu Chính',
        'loai'=> 3,
        'parent_id'=> 347
        ],
        [
        'ten'=> 'Xã Thiệu Hòa',
        'loai'=> 3,
        'parent_id'=> 347
        ],
        [
        'ten'=> 'Xã Minh Tâm',
        'loai'=> 3,
        'parent_id'=> 347
        ],
        [
        'ten'=> 'Xã Thiệu Viên',
        'loai'=> 3,
        'parent_id'=> 347
        ],
        [
        'ten'=> 'Xã Thiệu Lý',
        'loai'=> 3,
        'parent_id'=> 347
        ],
        [
        'ten'=> 'Xã Thiệu Vận',
        'loai'=> 3,
        'parent_id'=> 347
        ],
        [
        'ten'=> 'Xã Thiệu Trung',
        'loai'=> 3,
        'parent_id'=> 347
        ],
        [
        'ten'=> 'Xã Tân Châu',
        'loai'=> 3,
        'parent_id'=> 347
        ],
        [
        'ten'=> 'Xã Thiệu Giao',
        'loai'=> 3,
        'parent_id'=> 347
        ],
        [
        'ten'=> 'Thị trấn Bút Sơn',
        'loai'=> 3,
        'parent_id'=> 348
        ],
        [
        'ten'=> 'Xã Hoằng Giang',
        'loai'=> 3,
        'parent_id'=> 348
        ],
        [
        'ten'=> 'Xã Hoằng Xuân',
        'loai'=> 3,
        'parent_id'=> 348
        ],
        [
        'ten'=> 'Xã Hoằng Phượng',
        'loai'=> 3,
        'parent_id'=> 348
        ],
        [
        'ten'=> 'Xã Hoằng Phú',
        'loai'=> 3,
        'parent_id'=> 348
        ],
        [
        'ten'=> 'Xã Hoằng Quỳ',
        'loai'=> 3,
        'parent_id'=> 348
        ],
        [
        'ten'=> 'Xã Hoằng Kim',
        'loai'=> 3,
        'parent_id'=> 348
        ],
        [
        'ten'=> 'Xã Hoằng Trung',
        'loai'=> 3,
        'parent_id'=> 348
        ],
        [
        'ten'=> 'Xã Hoằng Trinh',
        'loai'=> 3,
        'parent_id'=> 348
        ],
        [
        'ten'=> 'Xã Hoằng Sơn',
        'loai'=> 3,
        'parent_id'=> 348
        ],
        [
        'ten'=> 'Xã Hoằng Cát',
        'loai'=> 3,
        'parent_id'=> 348
        ],
        [
        'ten'=> 'Xã Hoằng Xuyên',
        'loai'=> 3,
        'parent_id'=> 348
        ],
        [
        'ten'=> 'Xã Hoằng Quý',
        'loai'=> 3,
        'parent_id'=> 348
        ],
        [
        'ten'=> 'Xã Hoằng Hợp',
        'loai'=> 3,
        'parent_id'=> 348
        ],
        [
        'ten'=> 'Xã Hoằng Đức',
        'loai'=> 3,
        'parent_id'=> 348
        ],
        [
        'ten'=> 'Xã Hoằng Hà',
        'loai'=> 3,
        'parent_id'=> 348
        ],
        [
        'ten'=> 'Xã Hoằng Đạt',
        'loai'=> 3,
        'parent_id'=> 348
        ],
        [
        'ten'=> 'Xã Hoằng Đạo',
        'loai'=> 3,
        'parent_id'=> 348
        ],
        [
        'ten'=> 'Xã Hoằng Thắng',
        'loai'=> 3,
        'parent_id'=> 348
        ],
        [
        'ten'=> 'Xã Hoằng Đồng',
        'loai'=> 3,
        'parent_id'=> 348
        ],
        [
        'ten'=> 'Xã Hoằng Thái',
        'loai'=> 3,
        'parent_id'=> 348
        ],
        [
        'ten'=> 'Xã Hoằng Thịnh',
        'loai'=> 3,
        'parent_id'=> 348
        ],
        [
        'ten'=> 'Xã Hoằng Thành',
        'loai'=> 3,
        'parent_id'=> 348
        ],
        [
        'ten'=> 'Xã Hoằng Lộc',
        'loai'=> 3,
        'parent_id'=> 348
        ],
        [
        'ten'=> 'Xã Hoằng Trạch',
        'loai'=> 3,
        'parent_id'=> 348
        ],
        [
        'ten'=> 'Xã Hoằng Phong',
        'loai'=> 3,
        'parent_id'=> 348
        ],
        [
        'ten'=> 'Xã Hoằng Lưu',
        'loai'=> 3,
        'parent_id'=> 348
        ],
        [
        'ten'=> 'Xã Hoằng Châu',
        'loai'=> 3,
        'parent_id'=> 348
        ],
        [
        'ten'=> 'Xã Hoằng Tân',
        'loai'=> 3,
        'parent_id'=> 348
        ],
        [
        'ten'=> 'Xã Hoằng Yến',
        'loai'=> 3,
        'parent_id'=> 348
        ],
        [
        'ten'=> 'Xã Hoằng Tiến',
        'loai'=> 3,
        'parent_id'=> 348
        ],
        [
        'ten'=> 'Xã Hoằng Hải',
        'loai'=> 3,
        'parent_id'=> 348
        ],
        [
        'ten'=> 'Xã Hoằng Ngọc',
        'loai'=> 3,
        'parent_id'=> 348
        ],
        [
        'ten'=> 'Xã Hoằng Đông',
        'loai'=> 3,
        'parent_id'=> 348
        ],
        [
        'ten'=> 'Xã Hoằng Thanh',
        'loai'=> 3,
        'parent_id'=> 348
        ],
        [
        'ten'=> 'Xã Hoằng Phụ',
        'loai'=> 3,
        'parent_id'=> 348
        ],
        [
        'ten'=> 'Xã Hoằng Trường',
        'loai'=> 3,
        'parent_id'=> 348
        ],
        [
        'ten'=> 'Thị trấn Hậu Lộc',
        'loai'=> 3,
        'parent_id'=> 349
        ],
        [
        'ten'=> 'Xã Đồng Lộc',
        'loai'=> 3,
        'parent_id'=> 349
        ],
        [
        'ten'=> 'Xã Đại Lộc',
        'loai'=> 3,
        'parent_id'=> 349
        ],
        [
        'ten'=> 'Xã Triệu Lộc',
        'loai'=> 3,
        'parent_id'=> 349
        ],
        [
        'ten'=> 'Xã Tiến Lộc',
        'loai'=> 3,
        'parent_id'=> 349
        ],
        [
        'ten'=> 'Xã Lộc Sơn',
        'loai'=> 3,
        'parent_id'=> 349
        ],
        [
        'ten'=> 'Xã Cầu Lộc',
        'loai'=> 3,
        'parent_id'=> 349
        ],
        [
        'ten'=> 'Xã Thành Lộc',
        'loai'=> 3,
        'parent_id'=> 349
        ],
        [
        'ten'=> 'Xã Tuy Lộc',
        'loai'=> 3,
        'parent_id'=> 349
        ],
        [
        'ten'=> 'Xã Phong Lộc',
        'loai'=> 3,
        'parent_id'=> 349
        ],
        [
        'ten'=> 'Xã Mỹ Lộc',
        'loai'=> 3,
        'parent_id'=> 349
        ],
        [
        'ten'=> 'Xã Thuần Lộc',
        'loai'=> 3,
        'parent_id'=> 349
        ],
        [
        'ten'=> 'Xã Xuân Lộc',
        'loai'=> 3,
        'parent_id'=> 349
        ],
        [
        'ten'=> 'Xã Hoa Lộc',
        'loai'=> 3,
        'parent_id'=> 349
        ],
        [
        'ten'=> 'Xã Liên Lộc',
        'loai'=> 3,
        'parent_id'=> 349
        ],
        [
        'ten'=> 'Xã Quang Lộc',
        'loai'=> 3,
        'parent_id'=> 349
        ],
        [
        'ten'=> 'Xã Phú Lộc',
        'loai'=> 3,
        'parent_id'=> 349
        ],
        [
        'ten'=> 'Xã Hòa Lộc',
        'loai'=> 3,
        'parent_id'=> 349
        ],
        [
        'ten'=> 'Xã Minh Lộc',
        'loai'=> 3,
        'parent_id'=> 349
        ],
        [
        'ten'=> 'Xã Hưng Lộc',
        'loai'=> 3,
        'parent_id'=> 349
        ],
        [
        'ten'=> 'Xã Hải Lộc',
        'loai'=> 3,
        'parent_id'=> 349
        ],
        [
        'ten'=> 'Xã Đa Lộc',
        'loai'=> 3,
        'parent_id'=> 349
        ],
        [
        'ten'=> 'Xã Ngư Lộc',
        'loai'=> 3,
        'parent_id'=> 349
        ],
        [
        'ten'=> 'Thị trấn Nga Sơn',
        'loai'=> 3,
        'parent_id'=> 350
        ],
        [
        'ten'=> 'Xã Ba Đình',
        'loai'=> 3,
        'parent_id'=> 350
        ],
        [
        'ten'=> 'Xã Nga Vịnh',
        'loai'=> 3,
        'parent_id'=> 350
        ],
        [
        'ten'=> 'Xã Nga Văn',
        'loai'=> 3,
        'parent_id'=> 350
        ],
        [
        'ten'=> 'Xã Nga Thiện',
        'loai'=> 3,
        'parent_id'=> 350
        ],
        [
        'ten'=> 'Xã Nga Tiến',
        'loai'=> 3,
        'parent_id'=> 350
        ],
        [
        'ten'=> 'Xã Nga Phượng',
        'loai'=> 3,
        'parent_id'=> 350
        ],
        [
        'ten'=> 'Xã Nga Trung',
        'loai'=> 3,
        'parent_id'=> 350
        ],
        [
        'ten'=> 'Xã Nga Bạch',
        'loai'=> 3,
        'parent_id'=> 350
        ],
        [
        'ten'=> 'Xã Nga Thanh',
        'loai'=> 3,
        'parent_id'=> 350
        ],
        [
        'ten'=> 'Xã Nga Yên',
        'loai'=> 3,
        'parent_id'=> 350
        ],
        [
        'ten'=> 'Xã Nga Giáp',
        'loai'=> 3,
        'parent_id'=> 350
        ],
        [
        'ten'=> 'Xã Nga Hải',
        'loai'=> 3,
        'parent_id'=> 350
        ],
        [
        'ten'=> 'Xã Nga Thành',
        'loai'=> 3,
        'parent_id'=> 350
        ],
        [
        'ten'=> 'Xã Nga An',
        'loai'=> 3,
        'parent_id'=> 350
        ],
        [
        'ten'=> 'Xã Nga Phú',
        'loai'=> 3,
        'parent_id'=> 350
        ],
        [
        'ten'=> 'Xã Nga Điền',
        'loai'=> 3,
        'parent_id'=> 350
        ],
        [
        'ten'=> 'Xã Nga Tân',
        'loai'=> 3,
        'parent_id'=> 350
        ],
        [
        'ten'=> 'Xã Nga Thủy',
        'loai'=> 3,
        'parent_id'=> 350
        ],
        [
        'ten'=> 'Xã Nga Liên',
        'loai'=> 3,
        'parent_id'=> 350
        ],
        [
        'ten'=> 'Xã Nga Thái',
        'loai'=> 3,
        'parent_id'=> 350
        ],
        [
        'ten'=> 'Xã Nga Thạch',
        'loai'=> 3,
        'parent_id'=> 350
        ],
        [
        'ten'=> 'Xã Nga Thắng',
        'loai'=> 3,
        'parent_id'=> 350
        ],
        [
        'ten'=> 'Xã Nga Trường',
        'loai'=> 3,
        'parent_id'=> 350
        ],
        [
        'ten'=> 'Thị trấn Yên Cát',
        'loai'=> 3,
        'parent_id'=> 351
        ],
        [
        'ten'=> 'Xã Bãi Trành',
        'loai'=> 3,
        'parent_id'=> 351
        ],
        [
        'ten'=> 'Xã Xuân Hòa',
        'loai'=> 3,
        'parent_id'=> 351
        ],
        [
        'ten'=> 'Xã Xuân Bình',
        'loai'=> 3,
        'parent_id'=> 351
        ],
        [
        'ten'=> 'Xã Hóa Quỳ',
        'loai'=> 3,
        'parent_id'=> 351
        ],
        [
        'ten'=> 'Xã Cát Vân',
        'loai'=> 3,
        'parent_id'=> 351
        ],
        [
        'ten'=> 'Xã Cát Tân',
        'loai'=> 3,
        'parent_id'=> 351
        ],
        [
        'ten'=> 'Xã Tân Bình',
        'loai'=> 3,
        'parent_id'=> 351
        ],
        [
        'ten'=> 'Xã Bình Lương',
        'loai'=> 3,
        'parent_id'=> 351
        ],
        [
        'ten'=> 'Xã Thanh Quân',
        'loai'=> 3,
        'parent_id'=> 351
        ],
        [
        'ten'=> 'Xã Thanh Xuân',
        'loai'=> 3,
        'parent_id'=> 351
        ],
        [
        'ten'=> 'Xã Thanh Hòa',
        'loai'=> 3,
        'parent_id'=> 351
        ],
        [
        'ten'=> 'Xã Thanh Phong',
        'loai'=> 3,
        'parent_id'=> 351
        ],
        [
        'ten'=> 'Xã Thanh Lâm',
        'loai'=> 3,
        'parent_id'=> 351
        ],
        [
        'ten'=> 'Xã Thanh Sơn',
        'loai'=> 3,
        'parent_id'=> 351
        ],
        [
        'ten'=> 'Xã Thượng Ninh',
        'loai'=> 3,
        'parent_id'=> 351
        ],
        [
        'ten'=> 'Thị trấn Bến Sung',
        'loai'=> 3,
        'parent_id'=> 352
        ],
        [
        'ten'=> 'Xã Cán Khê',
        'loai'=> 3,
        'parent_id'=> 352
        ],
        [
        'ten'=> 'Xã Xuân Du',
        'loai'=> 3,
        'parent_id'=> 352
        ],
        [
        'ten'=> 'Xã Phượng Nghi',
        'loai'=> 3,
        'parent_id'=> 352
        ],
        [
        'ten'=> 'Xã Mậu Lâm',
        'loai'=> 3,
        'parent_id'=> 352
        ],
        [
        'ten'=> 'Xã Xuân Khang',
        'loai'=> 3,
        'parent_id'=> 352
        ],
        [
        'ten'=> 'Xã Phú Nhuận',
        'loai'=> 3,
        'parent_id'=> 352
        ],
        [
        'ten'=> 'Xã Hải Long',
        'loai'=> 3,
        'parent_id'=> 352
        ],
        [
        'ten'=> 'Xã Xuân Thái',
        'loai'=> 3,
        'parent_id'=> 352
        ],
        [
        'ten'=> 'Xã Xuân Phúc',
        'loai'=> 3,
        'parent_id'=> 352
        ],
        [
        'ten'=> 'Xã Yên Thọ',
        'loai'=> 3,
        'parent_id'=> 352
        ],
        [
        'ten'=> 'Xã Yên Lạc',
        'loai'=> 3,
        'parent_id'=> 352
        ],
        [
        'ten'=> 'Xã Thanh Tân',
        'loai'=> 3,
        'parent_id'=> 352
        ],
        [
        'ten'=> 'Xã Thanh Kỳ',
        'loai'=> 3,
        'parent_id'=> 352
        ],
        [
        'ten'=> 'Thị trấn Nông Cống',
        'loai'=> 3,
        'parent_id'=> 353
        ],
        [
        'ten'=> 'Xã Tân Phúc',
        'loai'=> 3,
        'parent_id'=> 353
        ],
        [
        'ten'=> 'Xã Tân Thọ',
        'loai'=> 3,
        'parent_id'=> 353
        ],
        [
        'ten'=> 'Xã Hoàng Sơn',
        'loai'=> 3,
        'parent_id'=> 353
        ],
        [
        'ten'=> 'Xã Tân Khang',
        'loai'=> 3,
        'parent_id'=> 353
        ],
        [
        'ten'=> 'Xã Hoàng Giang',
        'loai'=> 3,
        'parent_id'=> 353
        ],
        [
        'ten'=> 'Xã Trung Chính',
        'loai'=> 3,
        'parent_id'=> 353
        ],
        [
        'ten'=> 'Xã Trung Thành',
        'loai'=> 3,
        'parent_id'=> 353
        ],
        [
        'ten'=> 'Xã Tế Thắng',
        'loai'=> 3,
        'parent_id'=> 353
        ],
        [
        'ten'=> 'Xã Tế Lợi',
        'loai'=> 3,
        'parent_id'=> 353
        ],
        [
        'ten'=> 'Xã Tế Nông',
        'loai'=> 3,
        'parent_id'=> 353
        ],
        [
        'ten'=> 'Xã Minh Nghĩa',
        'loai'=> 3,
        'parent_id'=> 353
        ],
        [
        'ten'=> 'Xã Minh Khôi',
        'loai'=> 3,
        'parent_id'=> 353
        ],
        [
        'ten'=> 'Xã Vạn Hòa',
        'loai'=> 3,
        'parent_id'=> 353
        ],
        [
        'ten'=> 'Xã Trường Trung',
        'loai'=> 3,
        'parent_id'=> 353
        ],
        [
        'ten'=> 'Xã Vạn Thắng',
        'loai'=> 3,
        'parent_id'=> 353
        ],
        [
        'ten'=> 'Xã Trường Giang',
        'loai'=> 3,
        'parent_id'=> 353
        ],
        [
        'ten'=> 'Xã Vạn Thiện',
        'loai'=> 3,
        'parent_id'=> 353
        ],
        [
        'ten'=> 'Xã Thăng Long',
        'loai'=> 3,
        'parent_id'=> 353
        ],
        [
        'ten'=> 'Xã Trường Minh',
        'loai'=> 3,
        'parent_id'=> 353
        ],
        [
        'ten'=> 'Xã Trường Sơn',
        'loai'=> 3,
        'parent_id'=> 353
        ],
        [
        'ten'=> 'Xã Thăng Bình',
        'loai'=> 3,
        'parent_id'=> 353
        ],
        [
        'ten'=> 'Xã Công Liêm',
        'loai'=> 3,
        'parent_id'=> 353
        ],
        [
        'ten'=> 'Xã Tượng Văn',
        'loai'=> 3,
        'parent_id'=> 353
        ],
        [
        'ten'=> 'Xã Thăng Thọ',
        'loai'=> 3,
        'parent_id'=> 353
        ],
        [
        'ten'=> 'Xã Tượng Lĩnh',
        'loai'=> 3,
        'parent_id'=> 353
        ],
        [
        'ten'=> 'Xã Tượng Sơn',
        'loai'=> 3,
        'parent_id'=> 353
        ],
        [
        'ten'=> 'Xã Công Chính',
        'loai'=> 3,
        'parent_id'=> 353
        ],
        [
        'ten'=> 'Xã Yên Mỹ',
        'loai'=> 3,
        'parent_id'=> 353
        ],
        [
        'ten'=> 'Thị trấn Rừng Thông',
        'loai'=> 3,
        'parent_id'=> 354
        ],
        [
        'ten'=> 'Xã Đông Hoàng',
        'loai'=> 3,
        'parent_id'=> 354
        ],
        [
        'ten'=> 'Xã Đông Ninh',
        'loai'=> 3,
        'parent_id'=> 354
        ],
        [
        'ten'=> 'Xã Đông Hòa',
        'loai'=> 3,
        'parent_id'=> 354
        ],
        [
        'ten'=> 'Xã Đông Yên',
        'loai'=> 3,
        'parent_id'=> 354
        ],
        [
        'ten'=> 'Xã Đông Minh',
        'loai'=> 3,
        'parent_id'=> 354
        ],
        [
        'ten'=> 'Xã Đông Thanh',
        'loai'=> 3,
        'parent_id'=> 354
        ],
        [
        'ten'=> 'Xã Đông Tiến',
        'loai'=> 3,
        'parent_id'=> 354
        ],
        [
        'ten'=> 'Xã Đông Khê',
        'loai'=> 3,
        'parent_id'=> 354
        ],
        [
        'ten'=> 'Xã Đông Thịnh',
        'loai'=> 3,
        'parent_id'=> 354
        ],
        [
        'ten'=> 'Xã Đông Văn',
        'loai'=> 3,
        'parent_id'=> 354
        ],
        [
        'ten'=> 'Xã Đông Phú',
        'loai'=> 3,
        'parent_id'=> 354
        ],
        [
        'ten'=> 'Xã Đông Nam',
        'loai'=> 3,
        'parent_id'=> 354
        ],
        [
        'ten'=> 'Xã Đông Quang',
        'loai'=> 3,
        'parent_id'=> 354
        ],
        [
        'ten'=> 'Thị trấn Tân Phong',
        'loai'=> 3,
        'parent_id'=> 355
        ],
        [
        'ten'=> 'Xã Quảng Trạch',
        'loai'=> 3,
        'parent_id'=> 355
        ],
        [
        'ten'=> 'Xã Quảng Đức',
        'loai'=> 3,
        'parent_id'=> 355
        ],
        [
        'ten'=> 'Xã Quảng Định',
        'loai'=> 3,
        'parent_id'=> 355
        ],
        [
        'ten'=> 'Xã Quảng Nhân',
        'loai'=> 3,
        'parent_id'=> 355
        ],
        [
        'ten'=> 'Xã Quảng Ninh',
        'loai'=> 3,
        'parent_id'=> 355
        ],
        [
        'ten'=> 'Xã Quảng Bình',
        'loai'=> 3,
        'parent_id'=> 355
        ],
        [
        'ten'=> 'Xã Quảng Hợp',
        'loai'=> 3,
        'parent_id'=> 355
        ],
        [
        'ten'=> 'Xã Quảng Văn',
        'loai'=> 3,
        'parent_id'=> 355
        ],
        [
        'ten'=> 'Xã Quảng Long',
        'loai'=> 3,
        'parent_id'=> 355
        ],
        [
        'ten'=> 'Xã Quảng Yên',
        'loai'=> 3,
        'parent_id'=> 355
        ],
        [
        'ten'=> 'Xã Quảng Hòa',
        'loai'=> 3,
        'parent_id'=> 355
        ],
        [
        'ten'=> 'Xã Quảng Khê',
        'loai'=> 3,
        'parent_id'=> 355
        ],
        [
        'ten'=> 'Xã Quảng Trung',
        'loai'=> 3,
        'parent_id'=> 355
        ],
        [
        'ten'=> 'Xã Quảng Chính',
        'loai'=> 3,
        'parent_id'=> 355
        ],
        [
        'ten'=> 'Xã Quảng Ngọc',
        'loai'=> 3,
        'parent_id'=> 355
        ],
        [
        'ten'=> 'Xã Quảng Trường',
        'loai'=> 3,
        'parent_id'=> 355
        ],
        [
        'ten'=> 'Xã Quảng Phúc',
        'loai'=> 3,
        'parent_id'=> 355
        ],
        [
        'ten'=> 'Xã Quảng Giao',
        'loai'=> 3,
        'parent_id'=> 355
        ],
        [
        'ten'=> 'Xã Quảng Hải',
        'loai'=> 3,
        'parent_id'=> 355
        ],
        [
        'ten'=> 'Xã Quảng Lưu',
        'loai'=> 3,
        'parent_id'=> 355
        ],
        [
        'ten'=> 'Xã Quảng Lộc',
        'loai'=> 3,
        'parent_id'=> 355
        ],
        [
        'ten'=> 'Xã Tiên Trang',
        'loai'=> 3,
        'parent_id'=> 355
        ],
        [
        'ten'=> 'Xã Quảng Nham',
        'loai'=> 3,
        'parent_id'=> 355
        ],
        [
        'ten'=> 'Xã Quảng Thạch',
        'loai'=> 3,
        'parent_id'=> 355
        ],
        [
        'ten'=> 'Xã Quảng Thái',
        'loai'=> 3,
        'parent_id'=> 355
        ],
        [
        'ten'=> 'Phường Hải Hòa',
        'loai'=> 3,
        'parent_id'=> 356
        ],
        [
        'ten'=> 'Phường Hải Châu',
        'loai'=> 3,
        'parent_id'=> 356
        ],
        [
        'ten'=> 'Xã Thanh Thủy',
        'loai'=> 3,
        'parent_id'=> 356
        ],
        [
        'ten'=> 'Xã Thanh Sơn',
        'loai'=> 3,
        'parent_id'=> 356
        ],
        [
        'ten'=> 'Phường Hải Ninh',
        'loai'=> 3,
        'parent_id'=> 356
        ],
        [
        'ten'=> 'Xã Anh Sơn',
        'loai'=> 3,
        'parent_id'=> 356
        ],
        [
        'ten'=> 'Xã Ngọc Lĩnh',
        'loai'=> 3,
        'parent_id'=> 356
        ],
        [
        'ten'=> 'Phường Hải An',
        'loai'=> 3,
        'parent_id'=> 356
        ],
        [
        'ten'=> 'Xã Các Sơn',
        'loai'=> 3,
        'parent_id'=> 356
        ],
        [
        'ten'=> 'Phường Tân Dân',
        'loai'=> 3,
        'parent_id'=> 356
        ],
        [
        'ten'=> 'Phường Hải Lĩnh',
        'loai'=> 3,
        'parent_id'=> 356
        ],
        [
        'ten'=> 'Xã Định Hải',
        'loai'=> 3,
        'parent_id'=> 356
        ],
        [
        'ten'=> 'Xã Phú Sơn',
        'loai'=> 3,
        'parent_id'=> 356
        ],
        [
        'ten'=> 'Phường Ninh Hải',
        'loai'=> 3,
        'parent_id'=> 356
        ],
        [
        'ten'=> 'Phường Nguyên Bình',
        'loai'=> 3,
        'parent_id'=> 356
        ],
        [
        'ten'=> 'Xã Hải Nhân',
        'loai'=> 3,
        'parent_id'=> 356
        ],
        [
        'ten'=> 'Phường Bình Minh',
        'loai'=> 3,
        'parent_id'=> 356
        ],
        [
        'ten'=> 'Phường Hải Thanh',
        'loai'=> 3,
        'parent_id'=> 356
        ],
        [
        'ten'=> 'Xã Phú Lâm',
        'loai'=> 3,
        'parent_id'=> 356
        ],
        [
        'ten'=> 'Phường Xuân Lâm',
        'loai'=> 3,
        'parent_id'=> 356
        ],
        [
        'ten'=> 'Phường Trúc Lâm',
        'loai'=> 3,
        'parent_id'=> 356
        ],
        [
        'ten'=> 'Phường Hải Bình',
        'loai'=> 3,
        'parent_id'=> 356
        ],
        [
        'ten'=> 'Xã Tân Trường',
        'loai'=> 3,
        'parent_id'=> 356
        ],
        [
        'ten'=> 'Xã Tùng Lâm',
        'loai'=> 3,
        'parent_id'=> 356
        ],
        [
        'ten'=> 'Phường Tĩnh Hải',
        'loai'=> 3,
        'parent_id'=> 356
        ],
        [
        'ten'=> 'Phường Mai Lâm',
        'loai'=> 3,
        'parent_id'=> 356
        ],
        [
        'ten'=> 'Xã Trường Lâm',
        'loai'=> 3,
        'parent_id'=> 356
        ],
        [
        'ten'=> 'Xã Hải Yến',
        'loai'=> 3,
        'parent_id'=> 356
        ],
        [
        'ten'=> 'Phường Hải Thượng',
        'loai'=> 3,
        'parent_id'=> 356
        ],
        [
        'ten'=> 'Xã Nghi Sơn',
        'loai'=> 3,
        'parent_id'=> 356
        ],
        [
        'ten'=> 'Xã Hải Hà',
        'loai'=> 3,
        'parent_id'=> 356
        ],
        [
        'ten'=> 'Phường Đông Vĩnh',
        'loai'=> 3,
        'parent_id'=> 357
        ],
        [
        'ten'=> 'Phường Hà Huy Tập',
        'loai'=> 3,
        'parent_id'=> 357
        ],
        [
        'ten'=> 'Phường Lê Lợi',
        'loai'=> 3,
        'parent_id'=> 357
        ],
        [
        'ten'=> 'Phường Quán Bàu',
        'loai'=> 3,
        'parent_id'=> 357
        ],
        [
        'ten'=> 'Phường Hưng Bình',
        'loai'=> 3,
        'parent_id'=> 357
        ],
        [
        'ten'=> 'Phường Hưng Phúc',
        'loai'=> 3,
        'parent_id'=> 357
        ],
        [
        'ten'=> 'Phường Hưng Dũng',
        'loai'=> 3,
        'parent_id'=> 357
        ],
        [
        'ten'=> 'Phường Cửa Nam',
        'loai'=> 3,
        'parent_id'=> 357
        ],
        [
        'ten'=> 'Phường Quang Trung',
        'loai'=> 3,
        'parent_id'=> 357
        ],
        [
        'ten'=> 'Phường Đội Cung',
        'loai'=> 3,
        'parent_id'=> 357
        ],
        [
        'ten'=> 'Phường Lê Mao',
        'loai'=> 3,
        'parent_id'=> 357
        ],
        [
        'ten'=> 'Phường Trường Thi',
        'loai'=> 3,
        'parent_id'=> 357
        ],
        [
        'ten'=> 'Phường Bến Thủy',
        'loai'=> 3,
        'parent_id'=> 357
        ],
        [
        'ten'=> 'Phường Hồng Sơn',
        'loai'=> 3,
        'parent_id'=> 357
        ],
        [
        'ten'=> 'Phường Trung Đô',
        'loai'=> 3,
        'parent_id'=> 357
        ],
        [
        'ten'=> 'Xã Nghi Phú',
        'loai'=> 3,
        'parent_id'=> 357
        ],
        [
        'ten'=> 'Xã Hưng Đông',
        'loai'=> 3,
        'parent_id'=> 357
        ],
        [
        'ten'=> 'Xã Hưng Lộc',
        'loai'=> 3,
        'parent_id'=> 357
        ],
        [
        'ten'=> 'Xã Hưng Hòa',
        'loai'=> 3,
        'parent_id'=> 357
        ],
        [
        'ten'=> 'Phường Vinh Tân',
        'loai'=> 3,
        'parent_id'=> 357
        ],
        [
        'ten'=> 'Xã Nghi Liên',
        'loai'=> 3,
        'parent_id'=> 357
        ],
        [
        'ten'=> 'Xã Nghi Ân',
        'loai'=> 3,
        'parent_id'=> 357
        ],
        [
        'ten'=> 'Xã Nghi Kim',
        'loai'=> 3,
        'parent_id'=> 357
        ],
        [
        'ten'=> 'Xã Nghi Đức',
        'loai'=> 3,
        'parent_id'=> 357
        ],
        [
        'ten'=> 'Xã Hưng Chính',
        'loai'=> 3,
        'parent_id'=> 357
        ],
        [
        'ten'=> 'Phường Nghi Thuỷ',
        'loai'=> 3,
        'parent_id'=> 358
        ],
        [
        'ten'=> 'Phường Nghi Tân',
        'loai'=> 3,
        'parent_id'=> 358
        ],
        [
        'ten'=> 'Phường Thu Thuỷ',
        'loai'=> 3,
        'parent_id'=> 358
        ],
        [
        'ten'=> 'Phường Nghi Hòa',
        'loai'=> 3,
        'parent_id'=> 358
        ],
        [
        'ten'=> 'Phường Nghi Hải',
        'loai'=> 3,
        'parent_id'=> 358
        ],
        [
        'ten'=> 'Phường Nghi Hương',
        'loai'=> 3,
        'parent_id'=> 358
        ],
        [
        'ten'=> 'Phường Nghi Thu',
        'loai'=> 3,
        'parent_id'=> 358
        ],
        [
        'ten'=> 'Phường Hoà Hiếu',
        'loai'=> 3,
        'parent_id'=> 359
        ],
        [
        'ten'=> 'Phường Quang Phong',
        'loai'=> 3,
        'parent_id'=> 359
        ],
        [
        'ten'=> 'Phường Quang Tiến',
        'loai'=> 3,
        'parent_id'=> 359
        ],
        [
        'ten'=> 'Phường Long Sơn',
        'loai'=> 3,
        'parent_id'=> 359
        ],
        [
        'ten'=> 'Xã Nghĩa Tiến',
        'loai'=> 3,
        'parent_id'=> 359
        ],
        [
        'ten'=> 'Xã Nghĩa Mỹ',
        'loai'=> 3,
        'parent_id'=> 359
        ],
        [
        'ten'=> 'Xã Tây Hiếu',
        'loai'=> 3,
        'parent_id'=> 359
        ],
        [
        'ten'=> 'Xã Nghĩa Thuận',
        'loai'=> 3,
        'parent_id'=> 359
        ],
        [
        'ten'=> 'Xã Đông Hiếu',
        'loai'=> 3,
        'parent_id'=> 359
        ],
        [
        'ten'=> 'Thị trấn Kim Sơn',
        'loai'=> 3,
        'parent_id'=> 360
        ],
        [
        'ten'=> 'Xã Thông Thụ',
        'loai'=> 3,
        'parent_id'=> 360
        ],
        [
        'ten'=> 'Xã Đồng Văn',
        'loai'=> 3,
        'parent_id'=> 360
        ],
        [
        'ten'=> 'Xã Hạnh Dịch',
        'loai'=> 3,
        'parent_id'=> 360
        ],
        [
        'ten'=> 'Xã Tiền Phong',
        'loai'=> 3,
        'parent_id'=> 360
        ],
        [
        'ten'=> 'Xã Nậm Giải',
        'loai'=> 3,
        'parent_id'=> 360
        ],
        [
        'ten'=> 'Xã Tri Lễ',
        'loai'=> 3,
        'parent_id'=> 360
        ],
        [
        'ten'=> 'Xã Châu Kim',
        'loai'=> 3,
        'parent_id'=> 360
        ],
        [
        'ten'=> 'Xã Mường Nọc',
        'loai'=> 3,
        'parent_id'=> 360
        ],
        [
        'ten'=> 'Xã Châu Thôn',
        'loai'=> 3,
        'parent_id'=> 360
        ],
        [
        'ten'=> 'Xã Nậm Nhoóng',
        'loai'=> 3,
        'parent_id'=> 360
        ],
        [
        'ten'=> 'Xã Quang Phong',
        'loai'=> 3,
        'parent_id'=> 360
        ],
        [
        'ten'=> 'Xã Căm Muộn',
        'loai'=> 3,
        'parent_id'=> 360
        ],
        [
        'ten'=> 'Thị trấn Tân Lạc',
        'loai'=> 3,
        'parent_id'=> 361
        ],
        [
        'ten'=> 'Xã Châu Bính',
        'loai'=> 3,
        'parent_id'=> 361
        ],
        [
        'ten'=> 'Xã Châu Thuận',
        'loai'=> 3,
        'parent_id'=> 361
        ],
        [
        'ten'=> 'Xã Châu Hội',
        'loai'=> 3,
        'parent_id'=> 361
        ],
        [
        'ten'=> 'Xã Châu Nga',
        'loai'=> 3,
        'parent_id'=> 361
        ],
        [
        'ten'=> 'Xã Châu Tiến',
        'loai'=> 3,
        'parent_id'=> 361
        ],
        [
        'ten'=> 'Xã Châu Hạnh',
        'loai'=> 3,
        'parent_id'=> 361
        ],
        [
        'ten'=> 'Xã Châu Thắng',
        'loai'=> 3,
        'parent_id'=> 361
        ],
        [
        'ten'=> 'Xã Châu Phong',
        'loai'=> 3,
        'parent_id'=> 361
        ],
        [
        'ten'=> 'Xã Châu Bình',
        'loai'=> 3,
        'parent_id'=> 361
        ],
        [
        'ten'=> 'Xã Châu Hoàn',
        'loai'=> 3,
        'parent_id'=> 361
        ],
        [
        'ten'=> 'Xã Diên Lãm',
        'loai'=> 3,
        'parent_id'=> 361
        ],
        [
        'ten'=> 'Thị trấn Mường Xén',
        'loai'=> 3,
        'parent_id'=> 362
        ],
        [
        'ten'=> 'Xã Mỹ Lý',
        'loai'=> 3,
        'parent_id'=> 362
        ],
        [
        'ten'=> 'Xã Bắc Lý',
        'loai'=> 3,
        'parent_id'=> 362
        ],
        [
        'ten'=> 'Xã Keng Đu',
        'loai'=> 3,
        'parent_id'=> 362
        ],
        [
        'ten'=> 'Xã Đoọc Mạy',
        'loai'=> 3,
        'parent_id'=> 362
        ],
        [
        'ten'=> 'Xã Huồi Tụ',
        'loai'=> 3,
        'parent_id'=> 362
        ],
        [
        'ten'=> 'Xã Mường Lống',
        'loai'=> 3,
        'parent_id'=> 362
        ],
        [
        'ten'=> 'Xã Na Loi',
        'loai'=> 3,
        'parent_id'=> 362
        ],
        [
        'ten'=> 'Xã Nậm Cắn',
        'loai'=> 3,
        'parent_id'=> 362
        ],
        [
        'ten'=> 'Xã Bảo Nam',
        'loai'=> 3,
        'parent_id'=> 362
        ],
        [
        'ten'=> 'Xã Phà Đánh',
        'loai'=> 3,
        'parent_id'=> 362
        ],
        [
        'ten'=> 'Xã Bảo Thắng',
        'loai'=> 3,
        'parent_id'=> 362
        ],
        [
        'ten'=> 'Xã Hữu Lập',
        'loai'=> 3,
        'parent_id'=> 362
        ],
        [
        'ten'=> 'Xã Tà Cạ',
        'loai'=> 3,
        'parent_id'=> 362
        ],
        [
        'ten'=> 'Xã Chiêu Lưu',
        'loai'=> 3,
        'parent_id'=> 362
        ],
        [
        'ten'=> 'Xã Mường Típ',
        'loai'=> 3,
        'parent_id'=> 362
        ],
        [
        'ten'=> 'Xã Hữu Kiệm',
        'loai'=> 3,
        'parent_id'=> 362
        ],
        [
        'ten'=> 'Xã Tây Sơn',
        'loai'=> 3,
        'parent_id'=> 362
        ],
        [
        'ten'=> 'Xã Mường Ải',
        'loai'=> 3,
        'parent_id'=> 362
        ],
        [
        'ten'=> 'Xã Na Ngoi',
        'loai'=> 3,
        'parent_id'=> 362
        ],
        [
        'ten'=> 'Xã Nậm Càn',
        'loai'=> 3,
        'parent_id'=> 362
        ],
        [
        'ten'=> 'Thị trấn Thạch Giám',
        'loai'=> 3,
        'parent_id'=> 363
        ],
        [
        'ten'=> 'Xã Mai Sơn',
        'loai'=> 3,
        'parent_id'=> 363
        ],
        [
        'ten'=> 'Xã Nhôn Mai',
        'loai'=> 3,
        'parent_id'=> 363
        ],
        [
        'ten'=> 'Xã Hữu Khuông',
        'loai'=> 3,
        'parent_id'=> 363
        ],
        [
        'ten'=> 'Xã Yên Tĩnh',
        'loai'=> 3,
        'parent_id'=> 363
        ],
        [
        'ten'=> 'Xã Nga My',
        'loai'=> 3,
        'parent_id'=> 363
        ],
        [
        'ten'=> 'Xã Xiêng My',
        'loai'=> 3,
        'parent_id'=> 363
        ],
        [
        'ten'=> 'Xã Lưỡng Minh',
        'loai'=> 3,
        'parent_id'=> 363
        ],
        [
        'ten'=> 'Xã Yên Hòa',
        'loai'=> 3,
        'parent_id'=> 363
        ],
        [
        'ten'=> 'Xã Yên Na',
        'loai'=> 3,
        'parent_id'=> 363
        ],
        [
        'ten'=> 'Xã Lưu Kiền',
        'loai'=> 3,
        'parent_id'=> 363
        ],
        [
        'ten'=> 'Xã Xá Lượng',
        'loai'=> 3,
        'parent_id'=> 363
        ],
        [
        'ten'=> 'Xã Tam Thái',
        'loai'=> 3,
        'parent_id'=> 363
        ],
        [
        'ten'=> 'Xã Tam Đình',
        'loai'=> 3,
        'parent_id'=> 363
        ],
        [
        'ten'=> 'Xã Yên Thắng',
        'loai'=> 3,
        'parent_id'=> 363
        ],
        [
        'ten'=> 'Xã Tam Quang',
        'loai'=> 3,
        'parent_id'=> 363
        ],
        [
        'ten'=> 'Xã Tam Hợp',
        'loai'=> 3,
        'parent_id'=> 363
        ],
        [
        'ten'=> 'Thị trấn Nghĩa Đàn',
        'loai'=> 3,
        'parent_id'=> 364
        ],
        [
        'ten'=> 'Xã Nghĩa Mai',
        'loai'=> 3,
        'parent_id'=> 364
        ],
        [
        'ten'=> 'Xã Nghĩa Yên',
        'loai'=> 3,
        'parent_id'=> 364
        ],
        [
        'ten'=> 'Xã Nghĩa Lạc',
        'loai'=> 3,
        'parent_id'=> 364
        ],
        [
        'ten'=> 'Xã Nghĩa Lâm',
        'loai'=> 3,
        'parent_id'=> 364
        ],
        [
        'ten'=> 'Xã Nghĩa Sơn',
        'loai'=> 3,
        'parent_id'=> 364
        ],
        [
        'ten'=> 'Xã Nghĩa Lợi',
        'loai'=> 3,
        'parent_id'=> 364
        ],
        [
        'ten'=> 'Xã Nghĩa Bình',
        'loai'=> 3,
        'parent_id'=> 364
        ],
        [
        'ten'=> 'Xã Nghĩa Thọ',
        'loai'=> 3,
        'parent_id'=> 364
        ],
        [
        'ten'=> 'Xã Nghĩa Minh',
        'loai'=> 3,
        'parent_id'=> 364
        ],
        [
        'ten'=> 'Xã Nghĩa Phú',
        'loai'=> 3,
        'parent_id'=> 364
        ],
        [
        'ten'=> 'Xã Nghĩa Hưng',
        'loai'=> 3,
        'parent_id'=> 364
        ],
        [
        'ten'=> 'Xã Nghĩa Hồng',
        'loai'=> 3,
        'parent_id'=> 364
        ],
        [
        'ten'=> 'Xã Nghĩa Thịnh',
        'loai'=> 3,
        'parent_id'=> 364
        ],
        [
        'ten'=> 'Xã Nghĩa Trung',
        'loai'=> 3,
        'parent_id'=> 364
        ],
        [
        'ten'=> 'Xã Nghĩa Hội',
        'loai'=> 3,
        'parent_id'=> 364
        ],
        [
        'ten'=> 'Xã Nghĩa Thành',
        'loai'=> 3,
        'parent_id'=> 364
        ],
        [
        'ten'=> 'Xã Nghĩa Hiếu',
        'loai'=> 3,
        'parent_id'=> 364
        ],
        [
        'ten'=> 'Xã Nghĩa Đức',
        'loai'=> 3,
        'parent_id'=> 364
        ],
        [
        'ten'=> 'Xã Nghĩa An',
        'loai'=> 3,
        'parent_id'=> 364
        ],
        [
        'ten'=> 'Xã Nghĩa Long',
        'loai'=> 3,
        'parent_id'=> 364
        ],
        [
        'ten'=> 'Xã Nghĩa Lộc',
        'loai'=> 3,
        'parent_id'=> 364
        ],
        [
        'ten'=> 'Xã Nghĩa Khánh',
        'loai'=> 3,
        'parent_id'=> 364
        ],
        [
        'ten'=> 'Thị trấn Quỳ Hợp',
        'loai'=> 3,
        'parent_id'=> 365
        ],
        [
        'ten'=> 'Xã Yên Hợp',
        'loai'=> 3,
        'parent_id'=> 365
        ],
        [
        'ten'=> 'Xã Châu Tiến',
        'loai'=> 3,
        'parent_id'=> 365
        ],
        [
        'ten'=> 'Xã Châu Hồng',
        'loai'=> 3,
        'parent_id'=> 365
        ],
        [
        'ten'=> 'Xã Đồng Hợp',
        'loai'=> 3,
        'parent_id'=> 365
        ],
        [
        'ten'=> 'Xã Châu Thành',
        'loai'=> 3,
        'parent_id'=> 365
        ],
        [
        'ten'=> 'Xã Liên Hợp',
        'loai'=> 3,
        'parent_id'=> 365
        ],
        [
        'ten'=> 'Xã Châu Lộc',
        'loai'=> 3,
        'parent_id'=> 365
        ],
        [
        'ten'=> 'Xã Tam Hợp',
        'loai'=> 3,
        'parent_id'=> 365
        ],
        [
        'ten'=> 'Xã Châu Cường',
        'loai'=> 3,
        'parent_id'=> 365
        ],
        [
        'ten'=> 'Xã Châu Quang',
        'loai'=> 3,
        'parent_id'=> 365
        ],
        [
        'ten'=> 'Xã Thọ Hợp',
        'loai'=> 3,
        'parent_id'=> 365
        ],
        [
        'ten'=> 'Xã Minh Hợp',
        'loai'=> 3,
        'parent_id'=> 365
        ],
        [
        'ten'=> 'Xã Nghĩa Xuân',
        'loai'=> 3,
        'parent_id'=> 365
        ],
        [
        'ten'=> 'Xã Châu Thái',
        'loai'=> 3,
        'parent_id'=> 365
        ],
        [
        'ten'=> 'Xã Châu Đình',
        'loai'=> 3,
        'parent_id'=> 365
        ],
        [
        'ten'=> 'Xã Văn Lợi',
        'loai'=> 3,
        'parent_id'=> 365
        ],
        [
        'ten'=> 'Xã Nam Sơn',
        'loai'=> 3,
        'parent_id'=> 365
        ],
        [
        'ten'=> 'Xã Châu Lý',
        'loai'=> 3,
        'parent_id'=> 365
        ],
        [
        'ten'=> 'Xã Hạ Sơn',
        'loai'=> 3,
        'parent_id'=> 365
        ],
        [
        'ten'=> 'Xã Bắc Sơn',
        'loai'=> 3,
        'parent_id'=> 365
        ],
        [
        'ten'=> 'Thị trấn Cầu Giát',
        'loai'=> 3,
        'parent_id'=> 366
        ],
        [
        'ten'=> 'Xã Quỳnh Thắng',
        'loai'=> 3,
        'parent_id'=> 366
        ],
        [
        'ten'=> 'Xã Quỳnh Tân',
        'loai'=> 3,
        'parent_id'=> 366
        ],
        [
        'ten'=> 'Xã Quỳnh Châu',
        'loai'=> 3,
        'parent_id'=> 366
        ],
        [
        'ten'=> 'Xã Tân Sơn',
        'loai'=> 3,
        'parent_id'=> 366
        ],
        [
        'ten'=> 'Xã Quỳnh Văn',
        'loai'=> 3,
        'parent_id'=> 366
        ],
        [
        'ten'=> 'Xã Ngọc Sơn',
        'loai'=> 3,
        'parent_id'=> 366
        ],
        [
        'ten'=> 'Xã Quỳnh Tam',
        'loai'=> 3,
        'parent_id'=> 366
        ],
        [
        'ten'=> 'Xã Quỳnh Hoa',
        'loai'=> 3,
        'parent_id'=> 366
        ],
        [
        'ten'=> 'Xã Quỳnh Thạch',
        'loai'=> 3,
        'parent_id'=> 366
        ],
        [
        'ten'=> 'Xã Quỳnh Bảng',
        'loai'=> 3,
        'parent_id'=> 366
        ],
        [
        'ten'=> 'Xã Quỳnh Mỹ',
        'loai'=> 3,
        'parent_id'=> 366
        ],
        [
        'ten'=> 'Xã Quỳnh Thanh',
        'loai'=> 3,
        'parent_id'=> 366
        ],
        [
        'ten'=> 'Xã Quỳnh Hậu',
        'loai'=> 3,
        'parent_id'=> 366
        ],
        [
        'ten'=> 'Xã Quỳnh Lâm',
        'loai'=> 3,
        'parent_id'=> 366
        ],
        [
        'ten'=> 'Xã Quỳnh Đôi',
        'loai'=> 3,
        'parent_id'=> 366
        ],
        [
        'ten'=> 'Xã Quỳnh Lương',
        'loai'=> 3,
        'parent_id'=> 366
        ],
        [
        'ten'=> 'Xã Quỳnh Hồng',
        'loai'=> 3,
        'parent_id'=> 366
        ],
        [
        'ten'=> 'Xã Quỳnh Yên',
        'loai'=> 3,
        'parent_id'=> 366
        ],
        [
        'ten'=> 'Xã Quỳnh Bá',
        'loai'=> 3,
        'parent_id'=> 366
        ],
        [
        'ten'=> 'Xã Quỳnh Minh',
        'loai'=> 3,
        'parent_id'=> 366
        ],
        [
        'ten'=> 'Xã Quỳnh Diễn',
        'loai'=> 3,
        'parent_id'=> 366
        ],
        [
        'ten'=> 'Xã Quỳnh Hưng',
        'loai'=> 3,
        'parent_id'=> 366
        ],
        [
        'ten'=> 'Xã Quỳnh Giang',
        'loai'=> 3,
        'parent_id'=> 366
        ],
        [
        'ten'=> 'Xã Quỳnh Ngọc',
        'loai'=> 3,
        'parent_id'=> 366
        ],
        [
        'ten'=> 'Xã Quỳnh Nghĩa',
        'loai'=> 3,
        'parent_id'=> 366
        ],
        [
        'ten'=> 'Xã An Hòa',
        'loai'=> 3,
        'parent_id'=> 366
        ],
        [
        'ten'=> 'Xã Tiến Thủy',
        'loai'=> 3,
        'parent_id'=> 366
        ],
        [
        'ten'=> 'Xã Sơn Hải',
        'loai'=> 3,
        'parent_id'=> 366
        ],
        [
        'ten'=> 'Xã Quỳnh Thọ',
        'loai'=> 3,
        'parent_id'=> 366
        ],
        [
        'ten'=> 'Xã Quỳnh Thuận',
        'loai'=> 3,
        'parent_id'=> 366
        ],
        [
        'ten'=> 'Xã Quỳnh Long',
        'loai'=> 3,
        'parent_id'=> 366
        ],
        [
        'ten'=> 'Xã Tân Thắng',
        'loai'=> 3,
        'parent_id'=> 366
        ],
        [
        'ten'=> 'Thị trấn Con Cuông',
        'loai'=> 3,
        'parent_id'=> 367
        ],
        [
        'ten'=> 'Xã Bình Chuẩn',
        'loai'=> 3,
        'parent_id'=> 367
        ],
        [
        'ten'=> 'Xã Lạng Khê',
        'loai'=> 3,
        'parent_id'=> 367
        ],
        [
        'ten'=> 'Xã Cam Lâm',
        'loai'=> 3,
        'parent_id'=> 367
        ],
        [
        'ten'=> 'Xã Thạch Ngàn',
        'loai'=> 3,
        'parent_id'=> 367
        ],
        [
        'ten'=> 'Xã Đôn Phục',
        'loai'=> 3,
        'parent_id'=> 367
        ],
        [
        'ten'=> 'Xã Mậu Đức',
        'loai'=> 3,
        'parent_id'=> 367
        ],
        [
        'ten'=> 'Xã Châu Khê',
        'loai'=> 3,
        'parent_id'=> 367
        ],
        [
        'ten'=> 'Xã Chi Khê',
        'loai'=> 3,
        'parent_id'=> 367
        ],
        [
        'ten'=> 'Xã Bồng Khê',
        'loai'=> 3,
        'parent_id'=> 367
        ],
        [
        'ten'=> 'Xã Yên Khê',
        'loai'=> 3,
        'parent_id'=> 367
        ],
        [
        'ten'=> 'Xã Lục Dạ',
        'loai'=> 3,
        'parent_id'=> 367
        ],
        [
        'ten'=> 'Xã Môn Sơn',
        'loai'=> 3,
        'parent_id'=> 367
        ],
        [
        'ten'=> 'Thị trấn Tân Kỳ',
        'loai'=> 3,
        'parent_id'=> 368
        ],
        [
        'ten'=> 'Xã Tân Hợp',
        'loai'=> 3,
        'parent_id'=> 368
        ],
        [
        'ten'=> 'Xã Tân Phú',
        'loai'=> 3,
        'parent_id'=> 368
        ],
        [
        'ten'=> 'Xã Tân Xuân',
        'loai'=> 3,
        'parent_id'=> 368
        ],
        [
        'ten'=> 'Xã Giai Xuân',
        'loai'=> 3,
        'parent_id'=> 368
        ],
        [
        'ten'=> 'Xã Nghĩa Bình',
        'loai'=> 3,
        'parent_id'=> 368
        ],
        [
        'ten'=> 'Xã Nghĩa Đồng',
        'loai'=> 3,
        'parent_id'=> 368
        ],
        [
        'ten'=> 'Xã Đồng Văn',
        'loai'=> 3,
        'parent_id'=> 368
        ],
        [
        'ten'=> 'Xã Nghĩa Thái',
        'loai'=> 3,
        'parent_id'=> 368
        ],
        [
        'ten'=> 'Xã Nghĩa Hợp',
        'loai'=> 3,
        'parent_id'=> 368
        ],
        [
        'ten'=> 'Xã Nghĩa Hoàn',
        'loai'=> 3,
        'parent_id'=> 368
        ],
        [
        'ten'=> 'Xã Nghĩa Phúc',
        'loai'=> 3,
        'parent_id'=> 368
        ],
        [
        'ten'=> 'Xã Tiên Kỳ',
        'loai'=> 3,
        'parent_id'=> 368
        ],
        [
        'ten'=> 'Xã Tân An',
        'loai'=> 3,
        'parent_id'=> 368
        ],
        [
        'ten'=> 'Xã Nghĩa Dũng',
        'loai'=> 3,
        'parent_id'=> 368
        ],
        [
        'ten'=> 'Xã Tân Long',
        'loai'=> 3,
        'parent_id'=> 368
        ],
        [
        'ten'=> 'Xã Kỳ Sơn',
        'loai'=> 3,
        'parent_id'=> 368
        ],
        [
        'ten'=> 'Xã Hương Sơn',
        'loai'=> 3,
        'parent_id'=> 368
        ],
        [
        'ten'=> 'Xã Kỳ Tân',
        'loai'=> 3,
        'parent_id'=> 368
        ],
        [
        'ten'=> 'Xã Phú Sơn',
        'loai'=> 3,
        'parent_id'=> 368
        ],
        [
        'ten'=> 'Xã Tân Hương',
        'loai'=> 3,
        'parent_id'=> 368
        ],
        [
        'ten'=> 'Xã Nghĩa Hành',
        'loai'=> 3,
        'parent_id'=> 368
        ],
        [
        'ten'=> 'Thị trấn Anh Sơn',
        'loai'=> 3,
        'parent_id'=> 369
        ],
        [
        'ten'=> 'Xã Thọ Sơn',
        'loai'=> 3,
        'parent_id'=> 369
        ],
        [
        'ten'=> 'Xã Thành Sơn',
        'loai'=> 3,
        'parent_id'=> 369
        ],
        [
        'ten'=> 'Xã Bình Sơn',
        'loai'=> 3,
        'parent_id'=> 369
        ],
        [
        'ten'=> 'Xã Tam Sơn',
        'loai'=> 3,
        'parent_id'=> 369
        ],
        [
        'ten'=> 'Xã Đỉnh Sơn',
        'loai'=> 3,
        'parent_id'=> 369
        ],
        [
        'ten'=> 'Xã Hùng Sơn',
        'loai'=> 3,
        'parent_id'=> 369
        ],
        [
        'ten'=> 'Xã Cẩm Sơn',
        'loai'=> 3,
        'parent_id'=> 369
        ],
        [
        'ten'=> 'Xã Đức Sơn',
        'loai'=> 3,
        'parent_id'=> 369
        ],
        [
        'ten'=> 'Xã Tường Sơn',
        'loai'=> 3,
        'parent_id'=> 369
        ],
        [
        'ten'=> 'Xã Hoa Sơn',
        'loai'=> 3,
        'parent_id'=> 369
        ],
        [
        'ten'=> 'Xã Tào Sơn',
        'loai'=> 3,
        'parent_id'=> 369
        ],
        [
        'ten'=> 'Xã Vĩnh Sơn',
        'loai'=> 3,
        'parent_id'=> 369
        ],
        [
        'ten'=> 'Xã Lạng Sơn',
        'loai'=> 3,
        'parent_id'=> 369
        ],
        [
        'ten'=> 'Xã Hội Sơn',
        'loai'=> 3,
        'parent_id'=> 369
        ],
        [
        'ten'=> 'Xã Thạch Sơn',
        'loai'=> 3,
        'parent_id'=> 369
        ],
        [
        'ten'=> 'Xã Phúc Sơn',
        'loai'=> 3,
        'parent_id'=> 369
        ],
        [
        'ten'=> 'Xã Long Sơn',
        'loai'=> 3,
        'parent_id'=> 369
        ],
        [
        'ten'=> 'Xã Khai Sơn',
        'loai'=> 3,
        'parent_id'=> 369
        ],
        [
        'ten'=> 'Xã Lĩnh Sơn',
        'loai'=> 3,
        'parent_id'=> 369
        ],
        [
        'ten'=> 'Xã Cao Sơn',
        'loai'=> 3,
        'parent_id'=> 369
        ],
        [
        'ten'=> 'Thị trấn Diễn Châu',
        'loai'=> 3,
        'parent_id'=> 370
        ],
        [
        'ten'=> 'Xã Diễn Lâm',
        'loai'=> 3,
        'parent_id'=> 370
        ],
        [
        'ten'=> 'Xã Diễn Đoài',
        'loai'=> 3,
        'parent_id'=> 370
        ],
        [
        'ten'=> 'Xã Diễn Trường',
        'loai'=> 3,
        'parent_id'=> 370
        ],
        [
        'ten'=> 'Xã Diễn Yên',
        'loai'=> 3,
        'parent_id'=> 370
        ],
        [
        'ten'=> 'Xã Diễn Hoàng',
        'loai'=> 3,
        'parent_id'=> 370
        ],
        [
        'ten'=> 'Xã Diễn Hùng',
        'loai'=> 3,
        'parent_id'=> 370
        ],
        [
        'ten'=> 'Xã Diễn Mỹ',
        'loai'=> 3,
        'parent_id'=> 370
        ],
        [
        'ten'=> 'Xã Diễn Hồng',
        'loai'=> 3,
        'parent_id'=> 370
        ],
        [
        'ten'=> 'Xã Diễn Phong',
        'loai'=> 3,
        'parent_id'=> 370
        ],
        [
        'ten'=> 'Xã Diễn Hải',
        'loai'=> 3,
        'parent_id'=> 370
        ],
        [
        'ten'=> 'Xã Diễn Tháp',
        'loai'=> 3,
        'parent_id'=> 370
        ],
        [
        'ten'=> 'Xã Diễn Liên',
        'loai'=> 3,
        'parent_id'=> 370
        ],
        [
        'ten'=> 'Xã Diễn Vạn',
        'loai'=> 3,
        'parent_id'=> 370
        ],
        [
        'ten'=> 'Xã Diễn Kim',
        'loai'=> 3,
        'parent_id'=> 370
        ],
        [
        'ten'=> 'Xã Diễn Kỷ',
        'loai'=> 3,
        'parent_id'=> 370
        ],
        [
        'ten'=> 'Xã Diễn Xuân',
        'loai'=> 3,
        'parent_id'=> 370
        ],
        [
        'ten'=> 'Xã Diễn Thái',
        'loai'=> 3,
        'parent_id'=> 370
        ],
        [
        'ten'=> 'Xã Diễn Đồng',
        'loai'=> 3,
        'parent_id'=> 370
        ],
        [
        'ten'=> 'Xã Diễn Bích',
        'loai'=> 3,
        'parent_id'=> 370
        ],
        [
        'ten'=> 'Xã Diễn Hạnh',
        'loai'=> 3,
        'parent_id'=> 370
        ],
        [
        'ten'=> 'Xã Diễn Ngọc',
        'loai'=> 3,
        'parent_id'=> 370
        ],
        [
        'ten'=> 'Xã Diễn Quảng',
        'loai'=> 3,
        'parent_id'=> 370
        ],
        [
        'ten'=> 'Xã Diễn Nguyên',
        'loai'=> 3,
        'parent_id'=> 370
        ],
        [
        'ten'=> 'Xã Diễn Hoa',
        'loai'=> 3,
        'parent_id'=> 370
        ],
        [
        'ten'=> 'Xã Diễn Thành',
        'loai'=> 3,
        'parent_id'=> 370
        ],
        [
        'ten'=> 'Xã Diễn Phúc',
        'loai'=> 3,
        'parent_id'=> 370
        ],
        [
        'ten'=> 'Xã Diễn Cát',
        'loai'=> 3,
        'parent_id'=> 370
        ],
        [
        'ten'=> 'Xã Diễn Thịnh',
        'loai'=> 3,
        'parent_id'=> 370
        ],
        [
        'ten'=> 'Xã Diễn Tân',
        'loai'=> 3,
        'parent_id'=> 370
        ],
        [
        'ten'=> 'Xã Minh Châu',
        'loai'=> 3,
        'parent_id'=> 370
        ],
        [
        'ten'=> 'Xã Diễn Thọ',
        'loai'=> 3,
        'parent_id'=> 370
        ],
        [
        'ten'=> 'Xã Diễn Lợi',
        'loai'=> 3,
        'parent_id'=> 370
        ],
        [
        'ten'=> 'Xã Diễn Lộc',
        'loai'=> 3,
        'parent_id'=> 370
        ],
        [
        'ten'=> 'Xã Diễn Trung',
        'loai'=> 3,
        'parent_id'=> 370
        ],
        [
        'ten'=> 'Xã Diễn An',
        'loai'=> 3,
        'parent_id'=> 370
        ],
        [
        'ten'=> 'Xã Diễn Phú',
        'loai'=> 3,
        'parent_id'=> 370
        ],
        [
        'ten'=> 'Thị trấn Yên Thành',
        'loai'=> 3,
        'parent_id'=> 371
        ],
        [
        'ten'=> 'Xã Mã Thành',
        'loai'=> 3,
        'parent_id'=> 371
        ],
        [
        'ten'=> 'Xã Tiến Thành',
        'loai'=> 3,
        'parent_id'=> 371
        ],
        [
        'ten'=> 'Xã Lăng Thành',
        'loai'=> 3,
        'parent_id'=> 371
        ],
        [
        'ten'=> 'Xã Tân Thành',
        'loai'=> 3,
        'parent_id'=> 371
        ],
        [
        'ten'=> 'Xã Đức Thành',
        'loai'=> 3,
        'parent_id'=> 371
        ],
        [
        'ten'=> 'Xã Kim Thành',
        'loai'=> 3,
        'parent_id'=> 371
        ],
        [
        'ten'=> 'Xã Hậu Thành',
        'loai'=> 3,
        'parent_id'=> 371
        ],
        [
        'ten'=> 'Xã Hùng Thành',
        'loai'=> 3,
        'parent_id'=> 371
        ],
        [
        'ten'=> 'Xã Đô Thành',
        'loai'=> 3,
        'parent_id'=> 371
        ],
        [
        'ten'=> 'Xã Thọ Thành',
        'loai'=> 3,
        'parent_id'=> 371
        ],
        [
        'ten'=> 'Xã Quang Thành',
        'loai'=> 3,
        'parent_id'=> 371
        ],
        [
        'ten'=> 'Xã Tây Thành',
        'loai'=> 3,
        'parent_id'=> 371
        ],
        [
        'ten'=> 'Xã Phúc Thành',
        'loai'=> 3,
        'parent_id'=> 371
        ],
        [
        'ten'=> 'Xã Hồng Thành',
        'loai'=> 3,
        'parent_id'=> 371
        ],
        [
        'ten'=> 'Xã Đồng Thành',
        'loai'=> 3,
        'parent_id'=> 371
        ],
        [
        'ten'=> 'Xã Phú Thành',
        'loai'=> 3,
        'parent_id'=> 371
        ],
        [
        'ten'=> 'Xã Hoa Thành',
        'loai'=> 3,
        'parent_id'=> 371
        ],
        [
        'ten'=> 'Xã Tăng Thành',
        'loai'=> 3,
        'parent_id'=> 371
        ],
        [
        'ten'=> 'Xã Văn Thành',
        'loai'=> 3,
        'parent_id'=> 371
        ],
        [
        'ten'=> 'Xã Thịnh Thành',
        'loai'=> 3,
        'parent_id'=> 371
        ],
        [
        'ten'=> 'Xã Hợp Thành',
        'loai'=> 3,
        'parent_id'=> 371
        ],
        [
        'ten'=> 'Xã Xuân Thành',
        'loai'=> 3,
        'parent_id'=> 371
        ],
        [
        'ten'=> 'Xã Bắc Thành',
        'loai'=> 3,
        'parent_id'=> 371
        ],
        [
        'ten'=> 'Xã Nhân Thành',
        'loai'=> 3,
        'parent_id'=> 371
        ],
        [
        'ten'=> 'Xã Trung Thành',
        'loai'=> 3,
        'parent_id'=> 371
        ],
        [
        'ten'=> 'Xã Long Thành',
        'loai'=> 3,
        'parent_id'=> 371
        ],
        [
        'ten'=> 'Xã Minh Thành',
        'loai'=> 3,
        'parent_id'=> 371
        ],
        [
        'ten'=> 'Xã Nam Thành',
        'loai'=> 3,
        'parent_id'=> 371
        ],
        [
        'ten'=> 'Xã Vĩnh Thành',
        'loai'=> 3,
        'parent_id'=> 371
        ],
        [
        'ten'=> 'Xã Lý Thành',
        'loai'=> 3,
        'parent_id'=> 371
        ],
        [
        'ten'=> 'Xã Khánh Thành',
        'loai'=> 3,
        'parent_id'=> 371
        ],
        [
        'ten'=> 'Xã Viên Thành',
        'loai'=> 3,
        'parent_id'=> 371
        ],
        [
        'ten'=> 'Xã Đại Thành',
        'loai'=> 3,
        'parent_id'=> 371
        ],
        [
        'ten'=> 'Xã Liên Thành',
        'loai'=> 3,
        'parent_id'=> 371
        ],
        [
        'ten'=> 'Xã Bảo Thành',
        'loai'=> 3,
        'parent_id'=> 371
        ],
        [
        'ten'=> 'Xã Mỹ Thành',
        'loai'=> 3,
        'parent_id'=> 371
        ],
        [
        'ten'=> 'Xã Công Thành',
        'loai'=> 3,
        'parent_id'=> 371
        ],
        [
        'ten'=> 'Xã Sơn Thành',
        'loai'=> 3,
        'parent_id'=> 371
        ],
        [
        'ten'=> 'Thị trấn Đô Lương',
        'loai'=> 3,
        'parent_id'=> 372
        ],
        [
        'ten'=> 'Xã Giang Sơn Đông',
        'loai'=> 3,
        'parent_id'=> 372
        ],
        [
        'ten'=> 'Xã Giang Sơn Tây',
        'loai'=> 3,
        'parent_id'=> 372
        ],
        [
        'ten'=> 'Xã Lam Sơn',
        'loai'=> 3,
        'parent_id'=> 372
        ],
        [
        'ten'=> 'Xã Bồi Sơn',
        'loai'=> 3,
        'parent_id'=> 372
        ],
        [
        'ten'=> 'Xã Hồng Sơn',
        'loai'=> 3,
        'parent_id'=> 372
        ],
        [
        'ten'=> 'Xã Bài Sơn',
        'loai'=> 3,
        'parent_id'=> 372
        ],
        [
        'ten'=> 'Xã Ngọc Sơn',
        'loai'=> 3,
        'parent_id'=> 372
        ],
        [
        'ten'=> 'Xã Bắc Sơn',
        'loai'=> 3,
        'parent_id'=> 372
        ],
        [
        'ten'=> 'Xã Tràng Sơn',
        'loai'=> 3,
        'parent_id'=> 372
        ],
        [
        'ten'=> 'Xã Thượng Sơn',
        'loai'=> 3,
        'parent_id'=> 372
        ],
        [
        'ten'=> 'Xã Hòa Sơn',
        'loai'=> 3,
        'parent_id'=> 372
        ],
        [
        'ten'=> 'Xã Đặng Sơn',
        'loai'=> 3,
        'parent_id'=> 372
        ],
        [
        'ten'=> 'Xã Đông Sơn',
        'loai'=> 3,
        'parent_id'=> 372
        ],
        [
        'ten'=> 'Xã Nam Sơn',
        'loai'=> 3,
        'parent_id'=> 372
        ],
        [
        'ten'=> 'Xã Lưu Sơn',
        'loai'=> 3,
        'parent_id'=> 372
        ],
        [
        'ten'=> 'Xã Yên Sơn',
        'loai'=> 3,
        'parent_id'=> 372
        ],
        [
        'ten'=> 'Xã Văn Sơn',
        'loai'=> 3,
        'parent_id'=> 372
        ],
        [
        'ten'=> 'Xã Đà Sơn',
        'loai'=> 3,
        'parent_id'=> 372
        ],
        [
        'ten'=> 'Xã Lạc Sơn',
        'loai'=> 3,
        'parent_id'=> 372
        ],
        [
        'ten'=> 'Xã Tân Sơn',
        'loai'=> 3,
        'parent_id'=> 372
        ],
        [
        'ten'=> 'Xã Thái Sơn',
        'loai'=> 3,
        'parent_id'=> 372
        ],
        [
        'ten'=> 'Xã Quang Sơn',
        'loai'=> 3,
        'parent_id'=> 372
        ],
        [
        'ten'=> 'Xã Thịnh Sơn',
        'loai'=> 3,
        'parent_id'=> 372
        ],
        [
        'ten'=> 'Xã Trung Sơn',
        'loai'=> 3,
        'parent_id'=> 372
        ],
        [
        'ten'=> 'Xã Xuân Sơn',
        'loai'=> 3,
        'parent_id'=> 372
        ],
        [
        'ten'=> 'Xã Minh Sơn',
        'loai'=> 3,
        'parent_id'=> 372
        ],
        [
        'ten'=> 'Xã Thuận Sơn',
        'loai'=> 3,
        'parent_id'=> 372
        ],
        [
        'ten'=> 'Xã Nhân Sơn',
        'loai'=> 3,
        'parent_id'=> 372
        ],
        [
        'ten'=> 'Xã Hiến Sơn',
        'loai'=> 3,
        'parent_id'=> 372
        ],
        [
        'ten'=> 'Xã Mỹ Sơn',
        'loai'=> 3,
        'parent_id'=> 372
        ],
        [
        'ten'=> 'Xã Trù Sơn',
        'loai'=> 3,
        'parent_id'=> 372
        ],
        [
        'ten'=> 'Xã Đại Sơn',
        'loai'=> 3,
        'parent_id'=> 372
        ],
        [
        'ten'=> 'Thị trấn Thanh Chương',
        'loai'=> 3,
        'parent_id'=> 373
        ],
        [
        'ten'=> 'Xã Cát Văn',
        'loai'=> 3,
        'parent_id'=> 373
        ],
        [
        'ten'=> 'Xã Thanh Nho',
        'loai'=> 3,
        'parent_id'=> 373
        ],
        [
        'ten'=> 'Xã Hạnh Lâm',
        'loai'=> 3,
        'parent_id'=> 373
        ],
        [
        'ten'=> 'Xã Thanh Sơn',
        'loai'=> 3,
        'parent_id'=> 373
        ],
        [
        'ten'=> 'Xã Thanh Hòa',
        'loai'=> 3,
        'parent_id'=> 373
        ],
        [
        'ten'=> 'Xã Phong Thịnh',
        'loai'=> 3,
        'parent_id'=> 373
        ],
        [
        'ten'=> 'Xã Thanh Phong',
        'loai'=> 3,
        'parent_id'=> 373
        ],
        [
        'ten'=> 'Xã Thanh Mỹ',
        'loai'=> 3,
        'parent_id'=> 373
        ],
        [
        'ten'=> 'Xã Thanh Tiên',
        'loai'=> 3,
        'parent_id'=> 373
        ],
        [
        'ten'=> 'Xã Thanh Liên',
        'loai'=> 3,
        'parent_id'=> 373
        ],
        [
        'ten'=> 'Xã Đại Đồng',
        'loai'=> 3,
        'parent_id'=> 373
        ],
        [
        'ten'=> 'Xã Thanh Đồng',
        'loai'=> 3,
        'parent_id'=> 373
        ],
        [
        'ten'=> 'Xã Thanh Ngọc',
        'loai'=> 3,
        'parent_id'=> 373
        ],
        [
        'ten'=> 'Xã Thanh Hương',
        'loai'=> 3,
        'parent_id'=> 373
        ],
        [
        'ten'=> 'Xã Ngọc Lâm',
        'loai'=> 3,
        'parent_id'=> 373
        ],
        [
        'ten'=> 'Xã Thanh Lĩnh',
        'loai'=> 3,
        'parent_id'=> 373
        ],
        [
        'ten'=> 'Xã Đồng Văn',
        'loai'=> 3,
        'parent_id'=> 373
        ],
        [
        'ten'=> 'Xã Ngọc Sơn',
        'loai'=> 3,
        'parent_id'=> 373
        ],
        [
        'ten'=> 'Xã Thanh Thịnh',
        'loai'=> 3,
        'parent_id'=> 373
        ],
        [
        'ten'=> 'Xã Thanh An',
        'loai'=> 3,
        'parent_id'=> 373
        ],
        [
        'ten'=> 'Xã Thanh Chi',
        'loai'=> 3,
        'parent_id'=> 373
        ],
        [
        'ten'=> 'Xã Xuân Tường',
        'loai'=> 3,
        'parent_id'=> 373
        ],
        [
        'ten'=> 'Xã Thanh Dương',
        'loai'=> 3,
        'parent_id'=> 373
        ],
        [
        'ten'=> 'Xã Thanh Lương',
        'loai'=> 3,
        'parent_id'=> 373
        ],
        [
        'ten'=> 'Xã Thanh Khê',
        'loai'=> 3,
        'parent_id'=> 373
        ],
        [
        'ten'=> 'Xã Võ Liệt',
        'loai'=> 3,
        'parent_id'=> 373
        ],
        [
        'ten'=> 'Xã Thanh Long',
        'loai'=> 3,
        'parent_id'=> 373
        ],
        [
        'ten'=> 'Xã Thanh Thủy',
        'loai'=> 3,
        'parent_id'=> 373
        ],
        [
        'ten'=> 'Xã Thanh Khai',
        'loai'=> 3,
        'parent_id'=> 373
        ],
        [
        'ten'=> 'Xã Thanh Yên',
        'loai'=> 3,
        'parent_id'=> 373
        ],
        [
        'ten'=> 'Xã Thanh Hà',
        'loai'=> 3,
        'parent_id'=> 373
        ],
        [
        'ten'=> 'Xã Thanh Giang',
        'loai'=> 3,
        'parent_id'=> 373
        ],
        [
        'ten'=> 'Xã Thanh Tùng',
        'loai'=> 3,
        'parent_id'=> 373
        ],
        [
        'ten'=> 'Xã Thanh Lâm',
        'loai'=> 3,
        'parent_id'=> 373
        ],
        [
        'ten'=> 'Xã Thanh Mai',
        'loai'=> 3,
        'parent_id'=> 373
        ],
        [
        'ten'=> 'Xã Thanh Xuân',
        'loai'=> 3,
        'parent_id'=> 373
        ],
        [
        'ten'=> 'Xã Thanh Đức',
        'loai'=> 3,
        'parent_id'=> 373
        ],
        [
        'ten'=> 'Thị trấn Quán Hành',
        'loai'=> 3,
        'parent_id'=> 374
        ],
        [
        'ten'=> 'Xã Nghi Văn',
        'loai'=> 3,
        'parent_id'=> 374
        ],
        [
        'ten'=> 'Xã Nghi Yên',
        'loai'=> 3,
        'parent_id'=> 374
        ],
        [
        'ten'=> 'Xã Nghi Tiến',
        'loai'=> 3,
        'parent_id'=> 374
        ],
        [
        'ten'=> 'Xã Nghi Hưng',
        'loai'=> 3,
        'parent_id'=> 374
        ],
        [
        'ten'=> 'Xã Nghi Đồng',
        'loai'=> 3,
        'parent_id'=> 374
        ],
        [
        'ten'=> 'Xã Nghi Thiết',
        'loai'=> 3,
        'parent_id'=> 374
        ],
        [
        'ten'=> 'Xã Nghi Lâm',
        'loai'=> 3,
        'parent_id'=> 374
        ],
        [
        'ten'=> 'Xã Nghi Quang',
        'loai'=> 3,
        'parent_id'=> 374
        ],
        [
        'ten'=> 'Xã Nghi Kiều',
        'loai'=> 3,
        'parent_id'=> 374
        ],
        [
        'ten'=> 'Xã Nghi Mỹ',
        'loai'=> 3,
        'parent_id'=> 374
        ],
        [
        'ten'=> 'Xã Nghi Phương',
        'loai'=> 3,
        'parent_id'=> 374
        ],
        [
        'ten'=> 'Xã Nghi Thuận',
        'loai'=> 3,
        'parent_id'=> 374
        ],
        [
        'ten'=> 'Xã Nghi Long',
        'loai'=> 3,
        'parent_id'=> 374
        ],
        [
        'ten'=> 'Xã Nghi Xá',
        'loai'=> 3,
        'parent_id'=> 374
        ],
        [
        'ten'=> 'Xã Nghi Hoa',
        'loai'=> 3,
        'parent_id'=> 374
        ],
        [
        'ten'=> 'Xã Khánh Hợp',
        'loai'=> 3,
        'parent_id'=> 374
        ],
        [
        'ten'=> 'Xã Nghi Thịnh',
        'loai'=> 3,
        'parent_id'=> 374
        ],
        [
        'ten'=> 'Xã Nghi Công Bắc',
        'loai'=> 3,
        'parent_id'=> 374
        ],
        [
        'ten'=> 'Xã Nghi Công Nam',
        'loai'=> 3,
        'parent_id'=> 374
        ],
        [
        'ten'=> 'Xã Nghi Thạch',
        'loai'=> 3,
        'parent_id'=> 374
        ],
        [
        'ten'=> 'Xã Nghi Trung',
        'loai'=> 3,
        'parent_id'=> 374
        ],
        [
        'ten'=> 'Xã Nghi Trường',
        'loai'=> 3,
        'parent_id'=> 374
        ],
        [
        'ten'=> 'Xã Nghi Diên',
        'loai'=> 3,
        'parent_id'=> 374
        ],
        [
        'ten'=> 'Xã Nghi Phong',
        'loai'=> 3,
        'parent_id'=> 374
        ],
        [
        'ten'=> 'Xã Nghi Xuân',
        'loai'=> 3,
        'parent_id'=> 374
        ],
        [
        'ten'=> 'Xã Nghi Vạn',
        'loai'=> 3,
        'parent_id'=> 374
        ],
        [
        'ten'=> 'Xã Phúc Thọ',
        'loai'=> 3,
        'parent_id'=> 374
        ],
        [
        'ten'=> 'Xã Nghi Thái',
        'loai'=> 3,
        'parent_id'=> 374
        ],
        [
        'ten'=> 'Xã Nam Hưng',
        'loai'=> 3,
        'parent_id'=> 375
        ],
        [
        'ten'=> 'Xã Nam Nghĩa',
        'loai'=> 3,
        'parent_id'=> 375
        ],
        [
        'ten'=> 'Xã Nam Thanh',
        'loai'=> 3,
        'parent_id'=> 375
        ],
        [
        'ten'=> 'Xã Nam Anh',
        'loai'=> 3,
        'parent_id'=> 375
        ],
        [
        'ten'=> 'Xã Nam Xuân',
        'loai'=> 3,
        'parent_id'=> 375
        ],
        [
        'ten'=> 'Xã Nam Thái',
        'loai'=> 3,
        'parent_id'=> 375
        ],
        [
        'ten'=> 'Thị trấn Nam Đàn',
        'loai'=> 3,
        'parent_id'=> 375
        ],
        [
        'ten'=> 'Xã Nam Lĩnh',
        'loai'=> 3,
        'parent_id'=> 375
        ],
        [
        'ten'=> 'Xã Nam Giang',
        'loai'=> 3,
        'parent_id'=> 375
        ],
        [
        'ten'=> 'Xã Xuân Hòa',
        'loai'=> 3,
        'parent_id'=> 375
        ],
        [
        'ten'=> 'Xã Hùng Tiến',
        'loai'=> 3,
        'parent_id'=> 375
        ],
        [
        'ten'=> 'Xã Thượng Tân Lộc',
        'loai'=> 3,
        'parent_id'=> 375
        ],
        [
        'ten'=> 'Xã Kim Liên',
        'loai'=> 3,
        'parent_id'=> 375
        ],
        [
        'ten'=> 'Xã Hồng Long',
        'loai'=> 3,
        'parent_id'=> 375
        ],
        [
        'ten'=> 'Xã Xuân Lâm',
        'loai'=> 3,
        'parent_id'=> 375
        ],
        [
        'ten'=> 'Xã Nam Cát',
        'loai'=> 3,
        'parent_id'=> 375
        ],
        [
        'ten'=> 'Xã Khánh Sơn',
        'loai'=> 3,
        'parent_id'=> 375
        ],
        [
        'ten'=> 'Xã Trung Phúc Cường',
        'loai'=> 3,
        'parent_id'=> 375
        ],
        [
        'ten'=> 'Xã Nam Kim',
        'loai'=> 3,
        'parent_id'=> 375
        ],
        [
        'ten'=> 'Thị trấn Hưng Nguyên',
        'loai'=> 3,
        'parent_id'=> 376
        ],
        [
        'ten'=> 'Xã Hưng Trung',
        'loai'=> 3,
        'parent_id'=> 376
        ],
        [
        'ten'=> 'Xã Hưng Yên',
        'loai'=> 3,
        'parent_id'=> 376
        ],
        [
        'ten'=> 'Xã Hưng Yên Bắc',
        'loai'=> 3,
        'parent_id'=> 376
        ],
        [
        'ten'=> 'Xã Hưng Tây',
        'loai'=> 3,
        'parent_id'=> 376
        ],
        [
        'ten'=> 'Xã Hưng Đạo',
        'loai'=> 3,
        'parent_id'=> 376
        ],
        [
        'ten'=> 'Xã Hưng Mỹ',
        'loai'=> 3,
        'parent_id'=> 376
        ],
        [
        'ten'=> 'Xã Hưng Thịnh',
        'loai'=> 3,
        'parent_id'=> 376
        ],
        [
        'ten'=> 'Xã Hưng Lĩnh',
        'loai'=> 3,
        'parent_id'=> 376
        ],
        [
        'ten'=> 'Xã Hưng Thông',
        'loai'=> 3,
        'parent_id'=> 376
        ],
        [
        'ten'=> 'Xã Hưng Tân',
        'loai'=> 3,
        'parent_id'=> 376
        ],
        [
        'ten'=> 'Xã Hưng Lợi',
        'loai'=> 3,
        'parent_id'=> 376
        ],
        [
        'ten'=> 'Xã Hưng Nghĩa',
        'loai'=> 3,
        'parent_id'=> 376
        ],
        [
        'ten'=> 'Xã Hưng Phúc',
        'loai'=> 3,
        'parent_id'=> 376
        ],
        [
        'ten'=> 'Xã Long Xá',
        'loai'=> 3,
        'parent_id'=> 376
        ],
        [
        'ten'=> 'Xã Châu Nhân',
        'loai'=> 3,
        'parent_id'=> 376
        ],
        [
        'ten'=> 'Xã Xuân Lam',
        'loai'=> 3,
        'parent_id'=> 376
        ],
        [
        'ten'=> 'Xã Hưng Thành',
        'loai'=> 3,
        'parent_id'=> 376
        ],
        [
        'ten'=> 'Xã Quỳnh Vinh',
        'loai'=> 3,
        'parent_id'=> 377
        ],
        [
        'ten'=> 'Xã Quỳnh Lộc',
        'loai'=> 3,
        'parent_id'=> 377
        ],
        [
        'ten'=> 'Phường Quỳnh Thiện',
        'loai'=> 3,
        'parent_id'=> 377
        ],
        [
        'ten'=> 'Xã Quỳnh Lập',
        'loai'=> 3,
        'parent_id'=> 377
        ],
        [
        'ten'=> 'Xã Quỳnh Trang',
        'loai'=> 3,
        'parent_id'=> 377
        ],
        [
        'ten'=> 'Phường Mai Hùng',
        'loai'=> 3,
        'parent_id'=> 377
        ],
        [
        'ten'=> 'Phường Quỳnh Dị',
        'loai'=> 3,
        'parent_id'=> 377
        ],
        [
        'ten'=> 'Phường Quỳnh Xuân',
        'loai'=> 3,
        'parent_id'=> 377
        ],
        [
        'ten'=> 'Phường Quỳnh Phương',
        'loai'=> 3,
        'parent_id'=> 377
        ],
        [
        'ten'=> 'Xã Quỳnh Liên',
        'loai'=> 3,
        'parent_id'=> 377
        ],
        [
        'ten'=> 'Phường Trần Phú',
        'loai'=> 3,
        'parent_id'=> 378
        ],
        [
        'ten'=> 'Phường Nam Hà',
        'loai'=> 3,
        'parent_id'=> 378
        ],
        [
        'ten'=> 'Phường Bắc Hà',
        'loai'=> 3,
        'parent_id'=> 378
        ],
        [
        'ten'=> 'Phường Nguyễn Du',
        'loai'=> 3,
        'parent_id'=> 378
        ],
        [
        'ten'=> 'Phường Tân Giang',
        'loai'=> 3,
        'parent_id'=> 378
        ],
        [
        'ten'=> 'Phường Đại Nài',
        'loai'=> 3,
        'parent_id'=> 378
        ],
        [
        'ten'=> 'Phường Hà Huy Tập',
        'loai'=> 3,
        'parent_id'=> 378
        ],
        [
        'ten'=> 'Xã Thạch Trung',
        'loai'=> 3,
        'parent_id'=> 378
        ],
        [
        'ten'=> 'Phường Thạch Quý',
        'loai'=> 3,
        'parent_id'=> 378
        ],
        [
        'ten'=> 'Phường Thạch Linh',
        'loai'=> 3,
        'parent_id'=> 378
        ],
        [
        'ten'=> 'Phường Văn Yên',
        'loai'=> 3,
        'parent_id'=> 378
        ],
        [
        'ten'=> 'Xã Thạch Hạ',
        'loai'=> 3,
        'parent_id'=> 378
        ],
        [
        'ten'=> 'Xã Đồng Môn',
        'loai'=> 3,
        'parent_id'=> 378
        ],
        [
        'ten'=> 'Xã Thạch Hưng',
        'loai'=> 3,
        'parent_id'=> 378
        ],
        [
        'ten'=> 'Xã Thạch Bình',
        'loai'=> 3,
        'parent_id'=> 378
        ],
        [
        'ten'=> 'Phường Bắc Hồng',
        'loai'=> 3,
        'parent_id'=> 379
        ],
        [
        'ten'=> 'Phường Nam Hồng',
        'loai'=> 3,
        'parent_id'=> 379
        ],
        [
        'ten'=> 'Phường Trung Lương',
        'loai'=> 3,
        'parent_id'=> 379
        ],
        [
        'ten'=> 'Phường Đức Thuận',
        'loai'=> 3,
        'parent_id'=> 379
        ],
        [
        'ten'=> 'Phường Đậu Liêu',
        'loai'=> 3,
        'parent_id'=> 379
        ],
        [
        'ten'=> 'Xã Thuận Lộc',
        'loai'=> 3,
        'parent_id'=> 379
        ],
        [
        'ten'=> 'Thị trấn Phố Châu',
        'loai'=> 3,
        'parent_id'=> 380
        ],
        [
        'ten'=> 'Thị trấn  Tây Sơn',
        'loai'=> 3,
        'parent_id'=> 380
        ],
        [
        'ten'=> 'Xã Sơn Hồng',
        'loai'=> 3,
        'parent_id'=> 380
        ],
        [
        'ten'=> 'Xã Sơn Tiến',
        'loai'=> 3,
        'parent_id'=> 380
        ],
        [
        'ten'=> 'Xã Sơn Lâm',
        'loai'=> 3,
        'parent_id'=> 380
        ],
        [
        'ten'=> 'Xã Sơn Lễ',
        'loai'=> 3,
        'parent_id'=> 380
        ],
        [
        'ten'=> 'Xã Sơn Giang',
        'loai'=> 3,
        'parent_id'=> 380
        ],
        [
        'ten'=> 'Xã Sơn Lĩnh',
        'loai'=> 3,
        'parent_id'=> 380
        ],
        [
        'ten'=> 'Xã An Hòa Thịnh',
        'loai'=> 3,
        'parent_id'=> 380
        ],
        [
        'ten'=> 'Xã Sơn Tây',
        'loai'=> 3,
        'parent_id'=> 380
        ],
        [
        'ten'=> 'Xã Sơn Ninh',
        'loai'=> 3,
        'parent_id'=> 380
        ],
        [
        'ten'=> 'Xã Sơn Châu',
        'loai'=> 3,
        'parent_id'=> 380
        ],
        [
        'ten'=> 'Xã Tân Mỹ Hà',
        'loai'=> 3,
        'parent_id'=> 380
        ],
        [
        'ten'=> 'Xã Quang Diệm',
        'loai'=> 3,
        'parent_id'=> 380
        ],
        [
        'ten'=> 'Xã Sơn Trung',
        'loai'=> 3,
        'parent_id'=> 380
        ],
        [
        'ten'=> 'Xã Sơn Bằng',
        'loai'=> 3,
        'parent_id'=> 380
        ],
        [
        'ten'=> 'Xã Sơn Bình',
        'loai'=> 3,
        'parent_id'=> 380
        ],
        [
        'ten'=> 'Xã Sơn Kim 1',
        'loai'=> 3,
        'parent_id'=> 380
        ],
        [
        'ten'=> 'Xã Sơn Kim 2',
        'loai'=> 3,
        'parent_id'=> 380
        ],
        [
        'ten'=> 'Xã Sơn Trà',
        'loai'=> 3,
        'parent_id'=> 380
        ],
        [
        'ten'=> 'Xã Sơn Long',
        'loai'=> 3,
        'parent_id'=> 380
        ],
        [
        'ten'=> 'Xã Kim Hoa',
        'loai'=> 3,
        'parent_id'=> 380
        ],
        [
        'ten'=> 'Xã Sơn Hàm',
        'loai'=> 3,
        'parent_id'=> 380
        ],
        [
        'ten'=> 'Xã Sơn Phú',
        'loai'=> 3,
        'parent_id'=> 380
        ],
        [
        'ten'=> 'Xã Sơn Trường',
        'loai'=> 3,
        'parent_id'=> 380
        ],
        [
        'ten'=> 'Thị trấn Đức Thọ',
        'loai'=> 3,
        'parent_id'=> 381
        ],
        [
        'ten'=> 'Xã Quang Vĩnh',
        'loai'=> 3,
        'parent_id'=> 381
        ],
        [
        'ten'=> 'Xã Tùng Châu',
        'loai'=> 3,
        'parent_id'=> 381
        ],
        [
        'ten'=> 'Xã Trường Sơn',
        'loai'=> 3,
        'parent_id'=> 381
        ],
        [
        'ten'=> 'Xã Liên Minh',
        'loai'=> 3,
        'parent_id'=> 381
        ],
        [
        'ten'=> 'Xã Yên Hồ',
        'loai'=> 3,
        'parent_id'=> 381
        ],
        [
        'ten'=> 'Xã Tùng Ảnh',
        'loai'=> 3,
        'parent_id'=> 381
        ],
        [
        'ten'=> 'Xã Bùi La Nhân',
        'loai'=> 3,
        'parent_id'=> 381
        ],
        [
        'ten'=> 'Xã Thanh Bình Thịnh',
        'loai'=> 3,
        'parent_id'=> 381
        ],
        [
        'ten'=> 'Xã Lâm Trung Thủy',
        'loai'=> 3,
        'parent_id'=> 381
        ],
        [
        'ten'=> 'Xã Hòa Lạc',
        'loai'=> 3,
        'parent_id'=> 381
        ],
        [
        'ten'=> 'Xã Tân Dân',
        'loai'=> 3,
        'parent_id'=> 381
        ],
        [
        'ten'=> 'Xã An Dũng',
        'loai'=> 3,
        'parent_id'=> 381
        ],
        [
        'ten'=> 'Xã Đức Đồng',
        'loai'=> 3,
        'parent_id'=> 381
        ],
        [
        'ten'=> 'Xã Đức Lạng',
        'loai'=> 3,
        'parent_id'=> 381
        ],
        [
        'ten'=> 'Xã Tân Hương',
        'loai'=> 3,
        'parent_id'=> 381
        ],
        [
        'ten'=> 'Thị trấn Vũ Quang',
        'loai'=> 3,
        'parent_id'=> 382
        ],
        [
        'ten'=> 'Xã Ân Phú',
        'loai'=> 3,
        'parent_id'=> 382
        ],
        [
        'ten'=> 'Xã Đức Giang',
        'loai'=> 3,
        'parent_id'=> 382
        ],
        [
        'ten'=> 'Xã Đức Lĩnh',
        'loai'=> 3,
        'parent_id'=> 382
        ],
        [
        'ten'=> 'Xã Thọ Điền',
        'loai'=> 3,
        'parent_id'=> 382
        ],
        [
        'ten'=> 'Xã Đức Hương',
        'loai'=> 3,
        'parent_id'=> 382
        ],
        [
        'ten'=> 'Xã Đức Bồng',
        'loai'=> 3,
        'parent_id'=> 382
        ],
        [
        'ten'=> 'Xã Đức Liên',
        'loai'=> 3,
        'parent_id'=> 382
        ],
        [
        'ten'=> 'Xã Hương Minh',
        'loai'=> 3,
        'parent_id'=> 382
        ],
        [
        'ten'=> 'Xã Quang Thọ',
        'loai'=> 3,
        'parent_id'=> 382
        ],
        [
        'ten'=> 'Thị trấn Xuân An',
        'loai'=> 3,
        'parent_id'=> 383
        ],
        [
        'ten'=> 'Xã Xuân Hội',
        'loai'=> 3,
        'parent_id'=> 383
        ],
        [
        'ten'=> 'Xã Đan Trường',
        'loai'=> 3,
        'parent_id'=> 383
        ],
        [
        'ten'=> 'Xã Xuân Phổ',
        'loai'=> 3,
        'parent_id'=> 383
        ],
        [
        'ten'=> 'Xã Xuân Hải',
        'loai'=> 3,
        'parent_id'=> 383
        ],
        [
        'ten'=> 'Xã Xuân Giang',
        'loai'=> 3,
        'parent_id'=> 383
        ],
        [
        'ten'=> 'Thị trấn Tiên Điền',
        'loai'=> 3,
        'parent_id'=> 383
        ],
        [
        'ten'=> 'Xã Xuân Yên',
        'loai'=> 3,
        'parent_id'=> 383
        ],
        [
        'ten'=> 'Xã Xuân Mỹ',
        'loai'=> 3,
        'parent_id'=> 383
        ],
        [
        'ten'=> 'Xã Xuân Thành',
        'loai'=> 3,
        'parent_id'=> 383
        ],
        [
        'ten'=> 'Xã Xuân Viên',
        'loai'=> 3,
        'parent_id'=> 383
        ],
        [
        'ten'=> 'Xã Xuân Hồng',
        'loai'=> 3,
        'parent_id'=> 383
        ],
        [
        'ten'=> 'Xã Cỗ Đạm',
        'loai'=> 3,
        'parent_id'=> 383
        ],
        [
        'ten'=> 'Xã Xuân Liên',
        'loai'=> 3,
        'parent_id'=> 383
        ],
        [
        'ten'=> 'Xã Xuân Lĩnh',
        'loai'=> 3,
        'parent_id'=> 383
        ],
        [
        'ten'=> 'Xã Xuân Lam',
        'loai'=> 3,
        'parent_id'=> 383
        ],
        [
        'ten'=> 'Xã Cương Gián',
        'loai'=> 3,
        'parent_id'=> 383
        ],
        [
        'ten'=> 'Thị trấn Nghèn',
        'loai'=> 3,
        'parent_id'=> 384
        ],
        [
        'ten'=> 'Xã Thiên Lộc',
        'loai'=> 3,
        'parent_id'=> 384
        ],
        [
        'ten'=> 'Xã Thuần Thiện',
        'loai'=> 3,
        'parent_id'=> 384
        ],
        [
        'ten'=> 'Xã Vượng Lộc',
        'loai'=> 3,
        'parent_id'=> 384
        ],
        [
        'ten'=> 'Xã Thanh Lộc',
        'loai'=> 3,
        'parent_id'=> 384
        ],
        [
        'ten'=> 'Xã Kim Song Trường',
        'loai'=> 3,
        'parent_id'=> 384
        ],
        [
        'ten'=> 'Xã Thường Nga',
        'loai'=> 3,
        'parent_id'=> 384
        ],
        [
        'ten'=> 'Xã Tùng Lộc',
        'loai'=> 3,
        'parent_id'=> 384
        ],
        [
        'ten'=> 'Xã Phú Lộc',
        'loai'=> 3,
        'parent_id'=> 384
        ],
        [
        'ten'=> 'Xã Gia Hanh',
        'loai'=> 3,
        'parent_id'=> 384
        ],
        [
        'ten'=> 'Xã Khánh Vĩnh Yên',
        'loai'=> 3,
        'parent_id'=> 384
        ],
        [
        'ten'=> 'Xã Trung Lộc',
        'loai'=> 3,
        'parent_id'=> 384
        ],
        [
        'ten'=> 'Xã Xuân Lộc',
        'loai'=> 3,
        'parent_id'=> 384
        ],
        [
        'ten'=> 'Xã Thượng Lộc',
        'loai'=> 3,
        'parent_id'=> 384
        ],
        [
        'ten'=> 'Xã Quang Lộc',
        'loai'=> 3,
        'parent_id'=> 384
        ],
        [
        'ten'=> 'Thị trấn Đồng Lộc',
        'loai'=> 3,
        'parent_id'=> 384
        ],
        [
        'ten'=> 'Xã Mỹ Lộc',
        'loai'=> 3,
        'parent_id'=> 384
        ],
        [
        'ten'=> 'Xã Sơn Lộc',
        'loai'=> 3,
        'parent_id'=> 384
        ],
        [
        'ten'=> 'Thị trấn Hương Khê',
        'loai'=> 3,
        'parent_id'=> 385
        ],
        [
        'ten'=> 'Xã Điền Mỹ',
        'loai'=> 3,
        'parent_id'=> 385
        ],
        [
        'ten'=> 'Xã Hà Linh',
        'loai'=> 3,
        'parent_id'=> 385
        ],
        [
        'ten'=> 'Xã Hương Thủy',
        'loai'=> 3,
        'parent_id'=> 385
        ],
        [
        'ten'=> 'Xã Hòa Hải',
        'loai'=> 3,
        'parent_id'=> 385
        ],
        [
        'ten'=> 'Xã Phúc Đồng',
        'loai'=> 3,
        'parent_id'=> 385
        ],
        [
        'ten'=> 'Xã Hương Giang',
        'loai'=> 3,
        'parent_id'=> 385
        ],
        [
        'ten'=> 'Xã Lộc Yên',
        'loai'=> 3,
        'parent_id'=> 385
        ],
        [
        'ten'=> 'Xã Hương Bình',
        'loai'=> 3,
        'parent_id'=> 385
        ],
        [
        'ten'=> 'Xã Hương Long',
        'loai'=> 3,
        'parent_id'=> 385
        ],
        [
        'ten'=> 'Xã Phú Gia',
        'loai'=> 3,
        'parent_id'=> 385
        ],
        [
        'ten'=> 'Xã Gia Phố',
        'loai'=> 3,
        'parent_id'=> 385
        ],
        [
        'ten'=> 'Xã Phú Phong',
        'loai'=> 3,
        'parent_id'=> 385
        ],
        [
        'ten'=> 'Xã Hương Đô',
        'loai'=> 3,
        'parent_id'=> 385
        ],
        [
        'ten'=> 'Xã Hương Vĩnh',
        'loai'=> 3,
        'parent_id'=> 385
        ],
        [
        'ten'=> 'Xã Hương Xuân',
        'loai'=> 3,
        'parent_id'=> 385
        ],
        [
        'ten'=> 'Xã Phúc Trạch',
        'loai'=> 3,
        'parent_id'=> 385
        ],
        [
        'ten'=> 'Xã Hương Trà',
        'loai'=> 3,
        'parent_id'=> 385
        ],
        [
        'ten'=> 'Xã Hương Trạch',
        'loai'=> 3,
        'parent_id'=> 385
        ],
        [
        'ten'=> 'Xã Hương Lâm',
        'loai'=> 3,
        'parent_id'=> 385
        ],
        [
        'ten'=> 'Xã Hương Liên',
        'loai'=> 3,
        'parent_id'=> 385
        ],
        [
        'ten'=> 'Thị trấn Thạch Hà',
        'loai'=> 3,
        'parent_id'=> 386
        ],
        [
        'ten'=> 'Xã Ngọc Sơn',
        'loai'=> 3,
        'parent_id'=> 386
        ],
        [
        'ten'=> 'Xã Thạch Hải',
        'loai'=> 3,
        'parent_id'=> 386
        ],
        [
        'ten'=> 'Xã Thạch Kênh',
        'loai'=> 3,
        'parent_id'=> 386
        ],
        [
        'ten'=> 'Xã Thạch Sơn',
        'loai'=> 3,
        'parent_id'=> 386
        ],
        [
        'ten'=> 'Xã Thạch Liên',
        'loai'=> 3,
        'parent_id'=> 386
        ],
        [
        'ten'=> 'Xã Đỉnh Bàn',
        'loai'=> 3,
        'parent_id'=> 386
        ],
        [
        'ten'=> 'Xã Việt Tiến',
        'loai'=> 3,
        'parent_id'=> 386
        ],
        [
        'ten'=> 'Xã Thạch Khê',
        'loai'=> 3,
        'parent_id'=> 386
        ],
        [
        'ten'=> 'Xã Thạch Long',
        'loai'=> 3,
        'parent_id'=> 386
        ],
        [
        'ten'=> 'Xã Thạch Trị',
        'loai'=> 3,
        'parent_id'=> 386
        ],
        [
        'ten'=> 'Xã Thạch Lạc',
        'loai'=> 3,
        'parent_id'=> 386
        ],
        [
        'ten'=> 'Xã Thạch Ngọc',
        'loai'=> 3,
        'parent_id'=> 386
        ],
        [
        'ten'=> 'Xã Tượng Sơn',
        'loai'=> 3,
        'parent_id'=> 386
        ],
        [
        'ten'=> 'Xã Thạch Văn',
        'loai'=> 3,
        'parent_id'=> 386
        ],
        [
        'ten'=> 'Xã Lưu Vĩnh Sơn',
        'loai'=> 3,
        'parent_id'=> 386
        ],
        [
        'ten'=> 'Xã Thạch Thắng',
        'loai'=> 3,
        'parent_id'=> 386
        ],
        [
        'ten'=> 'Xã Thạch Đài',
        'loai'=> 3,
        'parent_id'=> 386
        ],
        [
        'ten'=> 'Xã Thạch Hội',
        'loai'=> 3,
        'parent_id'=> 386
        ],
        [
        'ten'=> 'Xã Tân Lâm Hương',
        'loai'=> 3,
        'parent_id'=> 386
        ],
        [
        'ten'=> 'Xã Thạch Xuân',
        'loai'=> 3,
        'parent_id'=> 386
        ],
        [
        'ten'=> 'Xã Nam Điền',
        'loai'=> 3,
        'parent_id'=> 386
        ],
        [
        'ten'=> 'Thị trấn Cẩm Xuyên',
        'loai'=> 3,
        'parent_id'=> 387
        ],
        [
        'ten'=> 'Thị trấn Thiên Cầm',
        'loai'=> 3,
        'parent_id'=> 387
        ],
        [
        'ten'=> 'Xã Yên Hòa',
        'loai'=> 3,
        'parent_id'=> 387
        ],
        [
        'ten'=> 'Xã Cẩm Dương',
        'loai'=> 3,
        'parent_id'=> 387
        ],
        [
        'ten'=> 'Xã Cẩm Bình',
        'loai'=> 3,
        'parent_id'=> 387
        ],
        [
        'ten'=> 'Xã Cẩm Vĩnh',
        'loai'=> 3,
        'parent_id'=> 387
        ],
        [
        'ten'=> 'Xã Cẩm Thành',
        'loai'=> 3,
        'parent_id'=> 387
        ],
        [
        'ten'=> 'Xã Cẩm Quang',
        'loai'=> 3,
        'parent_id'=> 387
        ],
        [
        'ten'=> 'Xã Cẩm Thạch',
        'loai'=> 3,
        'parent_id'=> 387
        ],
        [
        'ten'=> 'Xã Cẩm Nhượng',
        'loai'=> 3,
        'parent_id'=> 387
        ],
        [
        'ten'=> 'Xã Nam Phúc Thăng',
        'loai'=> 3,
        'parent_id'=> 387
        ],
        [
        'ten'=> 'Xã Cẩm Duệ',
        'loai'=> 3,
        'parent_id'=> 387
        ],
        [
        'ten'=> 'Xã Cẩm Lĩnh',
        'loai'=> 3,
        'parent_id'=> 387
        ],
        [
        'ten'=> 'Xã Cẩm Quan',
        'loai'=> 3,
        'parent_id'=> 387
        ],
        [
        'ten'=> 'Xã Cẩm Hà',
        'loai'=> 3,
        'parent_id'=> 387
        ],
        [
        'ten'=> 'Xã Cẩm Lộc',
        'loai'=> 3,
        'parent_id'=> 387
        ],
        [
        'ten'=> 'Xã Cẩm Hưng',
        'loai'=> 3,
        'parent_id'=> 387
        ],
        [
        'ten'=> 'Xã Cẩm Thịnh',
        'loai'=> 3,
        'parent_id'=> 387
        ],
        [
        'ten'=> 'Xã Cẩm Mỹ',
        'loai'=> 3,
        'parent_id'=> 387
        ],
        [
        'ten'=> 'Xã Cẩm Trung',
        'loai'=> 3,
        'parent_id'=> 387
        ],
        [
        'ten'=> 'Xã Cẩm Sơn',
        'loai'=> 3,
        'parent_id'=> 387
        ],
        [
        'ten'=> 'Xã Cẩm Lạc',
        'loai'=> 3,
        'parent_id'=> 387
        ],
        [
        'ten'=> 'Xã Cẩm Minh',
        'loai'=> 3,
        'parent_id'=> 387
        ],
        [
        'ten'=> 'Xã Kỳ Xuân',
        'loai'=> 3,
        'parent_id'=> 388
        ],
        [
        'ten'=> 'Xã Kỳ Bắc',
        'loai'=> 3,
        'parent_id'=> 388
        ],
        [
        'ten'=> 'Xã Kỳ Phú',
        'loai'=> 3,
        'parent_id'=> 388
        ],
        [
        'ten'=> 'Xã Kỳ Phong',
        'loai'=> 3,
        'parent_id'=> 388
        ],
        [
        'ten'=> 'Xã Kỳ Tiến',
        'loai'=> 3,
        'parent_id'=> 388
        ],
        [
        'ten'=> 'Xã Kỳ Giang',
        'loai'=> 3,
        'parent_id'=> 388
        ],
        [
        'ten'=> 'Xã Kỳ Đồng',
        'loai'=> 3,
        'parent_id'=> 388
        ],
        [
        'ten'=> 'Xã Kỳ Khang',
        'loai'=> 3,
        'parent_id'=> 388
        ],
        [
        'ten'=> 'Xã Kỳ Văn',
        'loai'=> 3,
        'parent_id'=> 388
        ],
        [
        'ten'=> 'Xã Kỳ Trung',
        'loai'=> 3,
        'parent_id'=> 388
        ],
        [
        'ten'=> 'Xã Kỳ Thọ',
        'loai'=> 3,
        'parent_id'=> 388
        ],
        [
        'ten'=> 'Xã Kỳ Tây',
        'loai'=> 3,
        'parent_id'=> 388
        ],
        [
        'ten'=> 'Xã Kỳ Thượng',
        'loai'=> 3,
        'parent_id'=> 388
        ],
        [
        'ten'=> 'Xã Kỳ Hải',
        'loai'=> 3,
        'parent_id'=> 388
        ],
        [
        'ten'=> 'Xã Kỳ Thư',
        'loai'=> 3,
        'parent_id'=> 388
        ],
        [
        'ten'=> 'Xã Kỳ Châu',
        'loai'=> 3,
        'parent_id'=> 388
        ],
        [
        'ten'=> 'Xã Kỳ Tân',
        'loai'=> 3,
        'parent_id'=> 388
        ],
        [
        'ten'=> 'Xã Lâm Hợp',
        'loai'=> 3,
        'parent_id'=> 388
        ],
        [
        'ten'=> 'Xã Kỳ Sơn',
        'loai'=> 3,
        'parent_id'=> 388
        ],
        [
        'ten'=> 'Xã Kỳ Lạc',
        'loai'=> 3,
        'parent_id'=> 388
        ],
        [
        'ten'=> 'Xã Tân Lộc',
        'loai'=> 3,
        'parent_id'=> 389
        ],
        [
        'ten'=> 'Xã Hồng Lộc',
        'loai'=> 3,
        'parent_id'=> 389
        ],
        [
        'ten'=> 'Xã Thịnh Lộc',
        'loai'=> 3,
        'parent_id'=> 389
        ],
        [
        'ten'=> 'Xã Bình An',
        'loai'=> 3,
        'parent_id'=> 389
        ],
        [
        'ten'=> 'Xã Ích Hậu',
        'loai'=> 3,
        'parent_id'=> 389
        ],
        [
        'ten'=> 'Xã Phù Lưu',
        'loai'=> 3,
        'parent_id'=> 389
        ],
        [
        'ten'=> 'Thị trấn Lộc Hà',
        'loai'=> 3,
        'parent_id'=> 389
        ],
        [
        'ten'=> 'Xã Thạch Mỹ',
        'loai'=> 3,
        'parent_id'=> 389
        ],
        [
        'ten'=> 'Xã Thạch Kim',
        'loai'=> 3,
        'parent_id'=> 389
        ],
        [
        'ten'=> 'Xã Thạch Châu',
        'loai'=> 3,
        'parent_id'=> 389
        ],
        [
        'ten'=> 'Xã Hộ Độ',
        'loai'=> 3,
        'parent_id'=> 389
        ],
        [
        'ten'=> 'Xã Mai Phụ',
        'loai'=> 3,
        'parent_id'=> 389
        ],
        [
        'ten'=> 'Phường Hưng Trí',
        'loai'=> 3,
        'parent_id'=> 390
        ],
        [
        'ten'=> 'Xã Kỳ Ninh',
        'loai'=> 3,
        'parent_id'=> 390
        ],
        [
        'ten'=> 'Xã Kỳ Lợi',
        'loai'=> 3,
        'parent_id'=> 390
        ],
        [
        'ten'=> 'Xã Kỳ Hà',
        'loai'=> 3,
        'parent_id'=> 390
        ],
        [
        'ten'=> 'Phường Kỳ Trinh',
        'loai'=> 3,
        'parent_id'=> 390
        ],
        [
        'ten'=> 'Phường Kỳ Thịnh',
        'loai'=> 3,
        'parent_id'=> 390
        ],
        [
        'ten'=> 'Xã Kỳ Hoa',
        'loai'=> 3,
        'parent_id'=> 390
        ],
        [
        'ten'=> 'Phường Kỳ Phương',
        'loai'=> 3,
        'parent_id'=> 390
        ],
        [
        'ten'=> 'Phường Kỳ Long',
        'loai'=> 3,
        'parent_id'=> 390
        ],
        [
        'ten'=> 'Phường Kỳ Liên',
        'loai'=> 3,
        'parent_id'=> 390
        ],
        [
        'ten'=> 'Xã Kỳ Nam',
        'loai'=> 3,
        'parent_id'=> 390
        ],
        [
        'ten'=> 'Phường Hải Thành',
        'loai'=> 3,
        'parent_id'=> 391
        ],
        [
        'ten'=> 'Phường Đồng Phú',
        'loai'=> 3,
        'parent_id'=> 391
        ],
        [
        'ten'=> 'Phường Bắc Lý',
        'loai'=> 3,
        'parent_id'=> 391
        ],
        [
        'ten'=> 'Phường Nam Lý',
        'loai'=> 3,
        'parent_id'=> 391
        ],
        [
        'ten'=> 'Phường Đồng Hải',
        'loai'=> 3,
        'parent_id'=> 391
        ],
        [
        'ten'=> 'Phường Đồng Sơn',
        'loai'=> 3,
        'parent_id'=> 391
        ],
        [
        'ten'=> 'Phường Phú Hải',
        'loai'=> 3,
        'parent_id'=> 391
        ],
        [
        'ten'=> 'Phường Bắc Nghĩa',
        'loai'=> 3,
        'parent_id'=> 391
        ],
        [
        'ten'=> 'Phường Đức Ninh Đông',
        'loai'=> 3,
        'parent_id'=> 391
        ],
        [
        'ten'=> 'Xã Quang Phú',
        'loai'=> 3,
        'parent_id'=> 391
        ],
        [
        'ten'=> 'Xã Lộc Ninh',
        'loai'=> 3,
        'parent_id'=> 391
        ],
        [
        'ten'=> 'Xã Bảo Ninh',
        'loai'=> 3,
        'parent_id'=> 391
        ],
        [
        'ten'=> 'Xã Nghĩa Ninh',
        'loai'=> 3,
        'parent_id'=> 391
        ],
        [
        'ten'=> 'Xã Thuận Đức',
        'loai'=> 3,
        'parent_id'=> 391
        ],
        [
        'ten'=> 'Xã Đức Ninh',
        'loai'=> 3,
        'parent_id'=> 391
        ],
        [
        'ten'=> 'Thị trấn Quy Đạt',
        'loai'=> 3,
        'parent_id'=> 392
        ],
        [
        'ten'=> 'Xã Dân Hóa',
        'loai'=> 3,
        'parent_id'=> 392
        ],
        [
        'ten'=> 'Xã Trọng Hóa',
        'loai'=> 3,
        'parent_id'=> 392
        ],
        [
        'ten'=> 'Xã Hóa Phúc',
        'loai'=> 3,
        'parent_id'=> 392
        ],
        [
        'ten'=> 'Xã Hồng Hóa',
        'loai'=> 3,
        'parent_id'=> 392
        ],
        [
        'ten'=> 'Xã Hóa Thanh',
        'loai'=> 3,
        'parent_id'=> 392
        ],
        [
        'ten'=> 'Xã Hóa Tiến',
        'loai'=> 3,
        'parent_id'=> 392
        ],
        [
        'ten'=> 'Xã Hóa Hợp',
        'loai'=> 3,
        'parent_id'=> 392
        ],
        [
        'ten'=> 'Xã Xuân Hóa',
        'loai'=> 3,
        'parent_id'=> 392
        ],
        [
        'ten'=> 'Xã Yên Hóa',
        'loai'=> 3,
        'parent_id'=> 392
        ],
        [
        'ten'=> 'Xã Minh Hóa',
        'loai'=> 3,
        'parent_id'=> 392
        ],
        [
        'ten'=> 'Xã Tân Hóa',
        'loai'=> 3,
        'parent_id'=> 392
        ],
        [
        'ten'=> 'Xã Hóa Sơn',
        'loai'=> 3,
        'parent_id'=> 392
        ],
        [
        'ten'=> 'Xã Trung Hóa',
        'loai'=> 3,
        'parent_id'=> 392
        ],
        [
        'ten'=> 'Xã Thượng Hóa',
        'loai'=> 3,
        'parent_id'=> 392
        ],
        [
        'ten'=> 'Thị trấn Đồng Lê',
        'loai'=> 3,
        'parent_id'=> 393
        ],
        [
        'ten'=> 'Xã Hương Hóa',
        'loai'=> 3,
        'parent_id'=> 393
        ],
        [
        'ten'=> 'Xã Kim Hóa',
        'loai'=> 3,
        'parent_id'=> 393
        ],
        [
        'ten'=> 'Xã Thanh Hóa',
        'loai'=> 3,
        'parent_id'=> 393
        ],
        [
        'ten'=> 'Xã Thanh Thạch',
        'loai'=> 3,
        'parent_id'=> 393
        ],
        [
        'ten'=> 'Xã Thuận Hóa',
        'loai'=> 3,
        'parent_id'=> 393
        ],
        [
        'ten'=> 'Xã Lâm Hóa',
        'loai'=> 3,
        'parent_id'=> 393
        ],
        [
        'ten'=> 'Xã Lê Hóa',
        'loai'=> 3,
        'parent_id'=> 393
        ],
        [
        'ten'=> 'Xã Sơn Hóa',
        'loai'=> 3,
        'parent_id'=> 393
        ],
        [
        'ten'=> 'Xã Đồng Hóa',
        'loai'=> 3,
        'parent_id'=> 393
        ],
        [
        'ten'=> 'Xã Ngư Hóa',
        'loai'=> 3,
        'parent_id'=> 393
        ],
        [
        'ten'=> 'Xã Thạch Hóa',
        'loai'=> 3,
        'parent_id'=> 393
        ],
        [
        'ten'=> 'Xã Đức Hóa',
        'loai'=> 3,
        'parent_id'=> 393
        ],
        [
        'ten'=> 'Xã Phong Hóa',
        'loai'=> 3,
        'parent_id'=> 393
        ],
        [
        'ten'=> 'Xã Mai Hóa',
        'loai'=> 3,
        'parent_id'=> 393
        ],
        [
        'ten'=> 'Xã Tiến Hóa',
        'loai'=> 3,
        'parent_id'=> 393
        ],
        [
        'ten'=> 'Xã Châu Hóa',
        'loai'=> 3,
        'parent_id'=> 393
        ],
        [
        'ten'=> 'Xã Cao Quảng',
        'loai'=> 3,
        'parent_id'=> 393
        ],
        [
        'ten'=> 'Xã Văn Hóa',
        'loai'=> 3,
        'parent_id'=> 393
        ],
        [
        'ten'=> 'Xã Quảng Hợp',
        'loai'=> 3,
        'parent_id'=> 394
        ],
        [
        'ten'=> 'Xã Quảng Kim',
        'loai'=> 3,
        'parent_id'=> 394
        ],
        [
        'ten'=> 'Xã Quảng Đông',
        'loai'=> 3,
        'parent_id'=> 394
        ],
        [
        'ten'=> 'Xã Quảng Phú',
        'loai'=> 3,
        'parent_id'=> 394
        ],
        [
        'ten'=> 'Xã Quảng Châu',
        'loai'=> 3,
        'parent_id'=> 394
        ],
        [
        'ten'=> 'Xã Quảng Thạch',
        'loai'=> 3,
        'parent_id'=> 394
        ],
        [
        'ten'=> 'Xã Quảng Lưu',
        'loai'=> 3,
        'parent_id'=> 394
        ],
        [
        'ten'=> 'Xã Quảng Tùng',
        'loai'=> 3,
        'parent_id'=> 394
        ],
        [
        'ten'=> 'Xã Cảnh Dương',
        'loai'=> 3,
        'parent_id'=> 394
        ],
        [
        'ten'=> 'Xã Quảng Tiến',
        'loai'=> 3,
        'parent_id'=> 394
        ],
        [
        'ten'=> 'Xã Quảng Hưng',
        'loai'=> 3,
        'parent_id'=> 394
        ],
        [
        'ten'=> 'Xã Quảng Xuân',
        'loai'=> 3,
        'parent_id'=> 394
        ],
        [
        'ten'=> 'Xã Cảnh Hóa',
        'loai'=> 3,
        'parent_id'=> 394
        ],
        [
        'ten'=> 'Xã Liên Trường',
        'loai'=> 3,
        'parent_id'=> 394
        ],
        [
        'ten'=> 'Xã Quảng Phương',
        'loai'=> 3,
        'parent_id'=> 394
        ],
        [
        'ten'=> 'Xã Phù Hóa',
        'loai'=> 3,
        'parent_id'=> 394
        ],
        [
        'ten'=> 'Xã Quảng Thanh',
        'loai'=> 3,
        'parent_id'=> 394
        ],
        [
        'ten'=> 'Thị trấn Hoàn Lão',
        'loai'=> 3,
        'parent_id'=> 395
        ],
        [
        'ten'=> 'Thị trấn NT Việt Trung',
        'loai'=> 3,
        'parent_id'=> 395
        ],
        [
        'ten'=> 'Xã Xuân Trạch',
        'loai'=> 3,
        'parent_id'=> 395
        ],
        [
        'ten'=> 'Xã Mỹ Trạch',
        'loai'=> 3,
        'parent_id'=> 395
        ],
        [
        'ten'=> 'Xã Hạ Trạch',
        'loai'=> 3,
        'parent_id'=> 395
        ],
        [
        'ten'=> 'Xã Bắc Trạch',
        'loai'=> 3,
        'parent_id'=> 395
        ],
        [
        'ten'=> 'Xã Lâm Trạch',
        'loai'=> 3,
        'parent_id'=> 395
        ],
        [
        'ten'=> 'Xã Thanh Trạch',
        'loai'=> 3,
        'parent_id'=> 395
        ],
        [
        'ten'=> 'Xã Liên Trạch',
        'loai'=> 3,
        'parent_id'=> 395
        ],
        [
        'ten'=> 'Xã Phúc Trạch',
        'loai'=> 3,
        'parent_id'=> 395
        ],
        [
        'ten'=> 'Xã Cự Nẫm',
        'loai'=> 3,
        'parent_id'=> 395
        ],
        [
        'ten'=> 'Xã Hải Phú',
        'loai'=> 3,
        'parent_id'=> 395
        ],
        [
        'ten'=> 'Xã Thượng Trạch',
        'loai'=> 3,
        'parent_id'=> 395
        ],
        [
        'ten'=> 'Xã Sơn Lộc',
        'loai'=> 3,
        'parent_id'=> 395
        ],
        [
        'ten'=> 'Xã Hưng Trạch',
        'loai'=> 3,
        'parent_id'=> 395
        ],
        [
        'ten'=> 'Xã Đồng Trạch',
        'loai'=> 3,
        'parent_id'=> 395
        ],
        [
        'ten'=> 'Xã Đức Trạch',
        'loai'=> 3,
        'parent_id'=> 395
        ],
        [
        'ten'=> 'Thị trấn Phong Nha',
        'loai'=> 3,
        'parent_id'=> 395
        ],
        [
        'ten'=> 'Xã Vạn Trạch',
        'loai'=> 3,
        'parent_id'=> 395
        ],
        [
        'ten'=> 'Xã Phú Định',
        'loai'=> 3,
        'parent_id'=> 395
        ],
        [
        'ten'=> 'Xã Trung Trạch',
        'loai'=> 3,
        'parent_id'=> 395
        ],
        [
        'ten'=> 'Xã Tây Trạch',
        'loai'=> 3,
        'parent_id'=> 395
        ],
        [
        'ten'=> 'Xã Hòa Trạch',
        'loai'=> 3,
        'parent_id'=> 395
        ],
        [
        'ten'=> 'Xã Đại Trạch',
        'loai'=> 3,
        'parent_id'=> 395
        ],
        [
        'ten'=> 'Xã Nhân Trạch',
        'loai'=> 3,
        'parent_id'=> 395
        ],
        [
        'ten'=> 'Xã Tân Trạch',
        'loai'=> 3,
        'parent_id'=> 395
        ],
        [
        'ten'=> 'Xã Nam Trạch',
        'loai'=> 3,
        'parent_id'=> 395
        ],
        [
        'ten'=> 'Xã Lý Trạch',
        'loai'=> 3,
        'parent_id'=> 395
        ],
        [
        'ten'=> 'Thị trấn Quán Hàu',
        'loai'=> 3,
        'parent_id'=> 396
        ],
        [
        'ten'=> 'Xã Trường Sơn',
        'loai'=> 3,
        'parent_id'=> 396
        ],
        [
        'ten'=> 'Xã Lương Ninh',
        'loai'=> 3,
        'parent_id'=> 396
        ],
        [
        'ten'=> 'Xã Vĩnh Ninh',
        'loai'=> 3,
        'parent_id'=> 396
        ],
        [
        'ten'=> 'Xã Võ Ninh',
        'loai'=> 3,
        'parent_id'=> 396
        ],
        [
        'ten'=> 'Xã Hải Ninh',
        'loai'=> 3,
        'parent_id'=> 396
        ],
        [
        'ten'=> 'Xã Hàm Ninh',
        'loai'=> 3,
        'parent_id'=> 396
        ],
        [
        'ten'=> 'Xã Duy Ninh',
        'loai'=> 3,
        'parent_id'=> 396
        ],
        [
        'ten'=> 'Xã Gia Ninh',
        'loai'=> 3,
        'parent_id'=> 396
        ],
        [
        'ten'=> 'Xã Trường Xuân',
        'loai'=> 3,
        'parent_id'=> 396
        ],
        [
        'ten'=> 'Xã Hiền Ninh',
        'loai'=> 3,
        'parent_id'=> 396
        ],
        [
        'ten'=> 'Xã Tân Ninh',
        'loai'=> 3,
        'parent_id'=> 396
        ],
        [
        'ten'=> 'Xã Xuân Ninh',
        'loai'=> 3,
        'parent_id'=> 396
        ],
        [
        'ten'=> 'Xã An Ninh',
        'loai'=> 3,
        'parent_id'=> 396
        ],
        [
        'ten'=> 'Xã Vạn Ninh',
        'loai'=> 3,
        'parent_id'=> 396
        ],
        [
        'ten'=> 'Thị trấn NT Lệ Ninh',
        'loai'=> 3,
        'parent_id'=> 397
        ],
        [
        'ten'=> 'Thị trấn Kiến Giang',
        'loai'=> 3,
        'parent_id'=> 397
        ],
        [
        'ten'=> 'Xã Hồng Thủy',
        'loai'=> 3,
        'parent_id'=> 397
        ],
        [
        'ten'=> 'Xã Ngư Thủy Bắc',
        'loai'=> 3,
        'parent_id'=> 397
        ],
        [
        'ten'=> 'Xã Hoa Thủy',
        'loai'=> 3,
        'parent_id'=> 397
        ],
        [
        'ten'=> 'Xã Thanh Thủy',
        'loai'=> 3,
        'parent_id'=> 397
        ],
        [
        'ten'=> 'Xã An Thủy',
        'loai'=> 3,
        'parent_id'=> 397
        ],
        [
        'ten'=> 'Xã Phong Thủy',
        'loai'=> 3,
        'parent_id'=> 397
        ],
        [
        'ten'=> 'Xã Cam Thủy',
        'loai'=> 3,
        'parent_id'=> 397
        ],
        [
        'ten'=> 'Xã Ngân Thủy',
        'loai'=> 3,
        'parent_id'=> 397
        ],
        [
        'ten'=> 'Xã Sơn Thủy',
        'loai'=> 3,
        'parent_id'=> 397
        ],
        [
        'ten'=> 'Xã Lộc Thủy',
        'loai'=> 3,
        'parent_id'=> 397
        ],
        [
        'ten'=> 'Xã Liên Thủy',
        'loai'=> 3,
        'parent_id'=> 397
        ],
        [
        'ten'=> 'Xã Hưng Thủy',
        'loai'=> 3,
        'parent_id'=> 397
        ],
        [
        'ten'=> 'Xã Dương Thủy',
        'loai'=> 3,
        'parent_id'=> 397
        ],
        [
        'ten'=> 'Xã Tân Thủy',
        'loai'=> 3,
        'parent_id'=> 397
        ],
        [
        'ten'=> 'Xã Phú Thủy',
        'loai'=> 3,
        'parent_id'=> 397
        ],
        [
        'ten'=> 'Xã Xuân Thủy',
        'loai'=> 3,
        'parent_id'=> 397
        ],
        [
        'ten'=> 'Xã Mỹ Thủy',
        'loai'=> 3,
        'parent_id'=> 397
        ],
        [
        'ten'=> 'Xã Ngư Thủy ',
        'loai'=> 3,
        'parent_id'=> 397
        ],
        [
        'ten'=> 'Xã Mai Thủy',
        'loai'=> 3,
        'parent_id'=> 397
        ],
        [
        'ten'=> 'Xã Sen Thủy',
        'loai'=> 3,
        'parent_id'=> 397
        ],
        [
        'ten'=> 'Xã Thái Thủy',
        'loai'=> 3,
        'parent_id'=> 397
        ],
        [
        'ten'=> 'Xã Kim Thủy',
        'loai'=> 3,
        'parent_id'=> 397
        ],
        [
        'ten'=> 'Xã Trường Thủy',
        'loai'=> 3,
        'parent_id'=> 397
        ],
        [
        'ten'=> 'Xã Lâm Thủy',
        'loai'=> 3,
        'parent_id'=> 397
        ],
        [
        'ten'=> 'Phường Ba Đồn',
        'loai'=> 3,
        'parent_id'=> 398
        ],
        [
        'ten'=> 'Phường Quảng Long',
        'loai'=> 3,
        'parent_id'=> 398
        ],
        [
        'ten'=> 'Phường Quảng Thọ',
        'loai'=> 3,
        'parent_id'=> 398
        ],
        [
        'ten'=> 'Xã Quảng Tiên',
        'loai'=> 3,
        'parent_id'=> 398
        ],
        [
        'ten'=> 'Xã Quảng Trung',
        'loai'=> 3,
        'parent_id'=> 398
        ],
        [
        'ten'=> 'Phường Quảng Phong',
        'loai'=> 3,
        'parent_id'=> 398
        ],
        [
        'ten'=> 'Phường Quảng Thuận',
        'loai'=> 3,
        'parent_id'=> 398
        ],
        [
        'ten'=> 'Xã Quảng Tân',
        'loai'=> 3,
        'parent_id'=> 398
        ],
        [
        'ten'=> 'Xã Quảng Hải',
        'loai'=> 3,
        'parent_id'=> 398
        ],
        [
        'ten'=> 'Xã Quảng Sơn',
        'loai'=> 3,
        'parent_id'=> 398
        ],
        [
        'ten'=> 'Xã Quảng Lộc',
        'loai'=> 3,
        'parent_id'=> 398
        ],
        [
        'ten'=> 'Xã Quảng Thủy',
        'loai'=> 3,
        'parent_id'=> 398
        ],
        [
        'ten'=> 'Xã Quảng Văn',
        'loai'=> 3,
        'parent_id'=> 398
        ],
        [
        'ten'=> 'Phường Quảng Phúc',
        'loai'=> 3,
        'parent_id'=> 398
        ],
        [
        'ten'=> 'Xã Quảng Hòa',
        'loai'=> 3,
        'parent_id'=> 398
        ],
        [
        'ten'=> 'Xã Quảng Minh',
        'loai'=> 3,
        'parent_id'=> 398
        ],
        [
        'ten'=> 'Phường Đông Giang',
        'loai'=> 3,
        'parent_id'=> 399
        ],
        [
        'ten'=> 'Phường 1',
        'loai'=> 3,
        'parent_id'=> 399
        ],
        [
        'ten'=> 'Phường Đông Lễ',
        'loai'=> 3,
        'parent_id'=> 399
        ],
        [
        'ten'=> 'Phường Đông Thanh',
        'loai'=> 3,
        'parent_id'=> 399
        ],
        [
        'ten'=> 'Phường 2',
        'loai'=> 3,
        'parent_id'=> 399
        ],
        [
        'ten'=> 'Phường 4',
        'loai'=> 3,
        'parent_id'=> 399
        ],
        [
        'ten'=> 'Phường 5',
        'loai'=> 3,
        'parent_id'=> 399
        ],
        [
        'ten'=> 'Phường Đông Lương',
        'loai'=> 3,
        'parent_id'=> 399
        ],
        [
        'ten'=> 'Phường 3',
        'loai'=> 3,
        'parent_id'=> 399
        ],
        [
        'ten'=> 'Phường 1',
        'loai'=> 3,
        'parent_id'=> 400
        ],
        [
        'ten'=> 'Phường An Đôn',
        'loai'=> 3,
        'parent_id'=> 400
        ],
        [
        'ten'=> 'Phường 2',
        'loai'=> 3,
        'parent_id'=> 400
        ],
        [
        'ten'=> 'Phường 3',
        'loai'=> 3,
        'parent_id'=> 400
        ],
        [
        'ten'=> 'Xã Hải Lệ',
        'loai'=> 3,
        'parent_id'=> 400
        ],
        [
        'ten'=> 'Thị trấn Hồ Xá',
        'loai'=> 3,
        'parent_id'=> 401
        ],
        [
        'ten'=> 'Thị trấn Bến Quan',
        'loai'=> 3,
        'parent_id'=> 401
        ],
        [
        'ten'=> 'Xã Vĩnh Thái',
        'loai'=> 3,
        'parent_id'=> 401
        ],
        [
        'ten'=> 'Xã Vĩnh Tú',
        'loai'=> 3,
        'parent_id'=> 401
        ],
        [
        'ten'=> 'Xã Vĩnh Chấp',
        'loai'=> 3,
        'parent_id'=> 401
        ],
        [
        'ten'=> 'Xã Trung Nam',
        'loai'=> 3,
        'parent_id'=> 401
        ],
        [
        'ten'=> 'Xã Kim Thạch',
        'loai'=> 3,
        'parent_id'=> 401
        ],
        [
        'ten'=> 'Xã Vĩnh Long',
        'loai'=> 3,
        'parent_id'=> 401
        ],
        [
        'ten'=> 'Xã Vĩnh Khê',
        'loai'=> 3,
        'parent_id'=> 401
        ],
        [
        'ten'=> 'Xã Vĩnh Hòa',
        'loai'=> 3,
        'parent_id'=> 401
        ],
        [
        'ten'=> 'Xã Vĩnh Thủy',
        'loai'=> 3,
        'parent_id'=> 401
        ],
        [
        'ten'=> 'Xã Vĩnh Lâm',
        'loai'=> 3,
        'parent_id'=> 401
        ],
        [
        'ten'=> 'Xã Hiền Thành',
        'loai'=> 3,
        'parent_id'=> 401
        ],
        [
        'ten'=> 'Thị trấn Cửa Tùng',
        'loai'=> 3,
        'parent_id'=> 401
        ],
        [
        'ten'=> 'Xã Vĩnh Hà',
        'loai'=> 3,
        'parent_id'=> 401
        ],
        [
        'ten'=> 'Xã Vĩnh Sơn',
        'loai'=> 3,
        'parent_id'=> 401
        ],
        [
        'ten'=> 'Xã Vĩnh Giang',
        'loai'=> 3,
        'parent_id'=> 401
        ],
        [
        'ten'=> 'Xã Vĩnh Ô',
        'loai'=> 3,
        'parent_id'=> 401
        ],
        [
        'ten'=> 'Thị trấn Khe Sanh',
        'loai'=> 3,
        'parent_id'=> 402
        ],
        [
        'ten'=> 'Thị trấn Lao Bảo',
        'loai'=> 3,
        'parent_id'=> 402
        ],
        [
        'ten'=> 'Xã Hướng Lập',
        'loai'=> 3,
        'parent_id'=> 402
        ],
        [
        'ten'=> 'Xã Hướng Việt',
        'loai'=> 3,
        'parent_id'=> 402
        ],
        [
        'ten'=> 'Xã Hướng Phùng',
        'loai'=> 3,
        'parent_id'=> 402
        ],
        [
        'ten'=> 'Xã Hướng Sơn',
        'loai'=> 3,
        'parent_id'=> 402
        ],
        [
        'ten'=> 'Xã Hướng Linh',
        'loai'=> 3,
        'parent_id'=> 402
        ],
        [
        'ten'=> 'Xã Tân Hợp',
        'loai'=> 3,
        'parent_id'=> 402
        ],
        [
        'ten'=> 'Xã Hướng Tân',
        'loai'=> 3,
        'parent_id'=> 402
        ],
        [
        'ten'=> 'Xã Tân Thành',
        'loai'=> 3,
        'parent_id'=> 402
        ],
        [
        'ten'=> 'Xã Tân Long',
        'loai'=> 3,
        'parent_id'=> 402
        ],
        [
        'ten'=> 'Xã Tân Lập',
        'loai'=> 3,
        'parent_id'=> 402
        ],
        [
        'ten'=> 'Xã Tân Liên',
        'loai'=> 3,
        'parent_id'=> 402
        ],
        [
        'ten'=> 'Xã Húc',
        'loai'=> 3,
        'parent_id'=> 402
        ],
        [
        'ten'=> 'Xã Thuận',
        'loai'=> 3,
        'parent_id'=> 402
        ],
        [
        'ten'=> 'Xã Hướng Lộc',
        'loai'=> 3,
        'parent_id'=> 402
        ],
        [
        'ten'=> 'Xã Ba Tầng',
        'loai'=> 3,
        'parent_id'=> 402
        ],
        [
        'ten'=> 'Xã Thanh',
        'loai'=> 3,
        'parent_id'=> 402
        ],
        [
        'ten'=> 'Xã  A Dơi',
        'loai'=> 3,
        'parent_id'=> 402
        ],
        [
        'ten'=> 'Xã Lìa',
        'loai'=> 3,
        'parent_id'=> 402
        ],
        [
        'ten'=> 'Xã Xy',
        'loai'=> 3,
        'parent_id'=> 402
        ],
        [
        'ten'=> 'Thị trấn Gio Linh',
        'loai'=> 3,
        'parent_id'=> 403
        ],
        [
        'ten'=> 'Thị trấn Cửa Việt',
        'loai'=> 3,
        'parent_id'=> 403
        ],
        [
        'ten'=> 'Xã Trung Giang',
        'loai'=> 3,
        'parent_id'=> 403
        ],
        [
        'ten'=> 'Xã Trung Hải',
        'loai'=> 3,
        'parent_id'=> 403
        ],
        [
        'ten'=> 'Xã Trung Sơn',
        'loai'=> 3,
        'parent_id'=> 403
        ],
        [
        'ten'=> 'Xã Phong Bình',
        'loai'=> 3,
        'parent_id'=> 403
        ],
        [
        'ten'=> 'Xã Gio Mỹ',
        'loai'=> 3,
        'parent_id'=> 403
        ],
        [
        'ten'=> 'Xã Gio Hải',
        'loai'=> 3,
        'parent_id'=> 403
        ],
        [
        'ten'=> 'Xã Gio An',
        'loai'=> 3,
        'parent_id'=> 403
        ],
        [
        'ten'=> 'Xã Gio Châu',
        'loai'=> 3,
        'parent_id'=> 403
        ],
        [
        'ten'=> 'Xã Gio Việt',
        'loai'=> 3,
        'parent_id'=> 403
        ],
        [
        'ten'=> 'Xã Linh Trường',
        'loai'=> 3,
        'parent_id'=> 403
        ],
        [
        'ten'=> 'Xã Gio Sơn',
        'loai'=> 3,
        'parent_id'=> 403
        ],
        [
        'ten'=> 'Xã Gio Mai',
        'loai'=> 3,
        'parent_id'=> 403
        ],
        [
        'ten'=> 'Xã Hải Thái',
        'loai'=> 3,
        'parent_id'=> 403
        ],
        [
        'ten'=> 'Xã Linh Hải',
        'loai'=> 3,
        'parent_id'=> 403
        ],
        [
        'ten'=> 'Xã Gio Quang',
        'loai'=> 3,
        'parent_id'=> 403
        ],
        [
        'ten'=> 'Thị trấn Krông Klang',
        'loai'=> 3,
        'parent_id'=> 404
        ],
        [
        'ten'=> 'Xã Mò Ó',
        'loai'=> 3,
        'parent_id'=> 404
        ],
        [
        'ten'=> 'Xã Hướng Hiệp',
        'loai'=> 3,
        'parent_id'=> 404
        ],
        [
        'ten'=> 'Xã Đa Krông',
        'loai'=> 3,
        'parent_id'=> 404
        ],
        [
        'ten'=> 'Xã Triệu Nguyên',
        'loai'=> 3,
        'parent_id'=> 404
        ],
        [
        'ten'=> 'Xã Ba Lòng',
        'loai'=> 3,
        'parent_id'=> 404
        ],
        [
        'ten'=> 'Xã Ba Nang',
        'loai'=> 3,
        'parent_id'=> 404
        ],
        [
        'ten'=> 'Xã Tà Long',
        'loai'=> 3,
        'parent_id'=> 404
        ],
        [
        'ten'=> 'Xã Húc Nghì',
        'loai'=> 3,
        'parent_id'=> 404
        ],
        [
        'ten'=> 'Xã A Vao',
        'loai'=> 3,
        'parent_id'=> 404
        ],
        [
        'ten'=> 'Xã Tà Rụt',
        'loai'=> 3,
        'parent_id'=> 404
        ],
        [
        'ten'=> 'Xã A Bung',
        'loai'=> 3,
        'parent_id'=> 404
        ],
        [
        'ten'=> 'Xã A Ngo',
        'loai'=> 3,
        'parent_id'=> 404
        ],
        [
        'ten'=> 'Thị trấn Cam Lộ',
        'loai'=> 3,
        'parent_id'=> 405
        ],
        [
        'ten'=> 'Xã Cam Tuyền',
        'loai'=> 3,
        'parent_id'=> 405
        ],
        [
        'ten'=> 'Xã Thanh An',
        'loai'=> 3,
        'parent_id'=> 405
        ],
        [
        'ten'=> 'Xã Cam Thủy',
        'loai'=> 3,
        'parent_id'=> 405
        ],
        [
        'ten'=> 'Xã Cam Thành',
        'loai'=> 3,
        'parent_id'=> 405
        ],
        [
        'ten'=> 'Xã Cam Hiếu',
        'loai'=> 3,
        'parent_id'=> 405
        ],
        [
        'ten'=> 'Xã Cam Chính',
        'loai'=> 3,
        'parent_id'=> 405
        ],
        [
        'ten'=> 'Xã Cam Nghĩa',
        'loai'=> 3,
        'parent_id'=> 405
        ],
        [
        'ten'=> 'Thị Trấn Ái Tử',
        'loai'=> 3,
        'parent_id'=> 406
        ],
        [
        'ten'=> 'Xã Triệu An',
        'loai'=> 3,
        'parent_id'=> 406
        ],
        [
        'ten'=> 'Xã Triệu Vân',
        'loai'=> 3,
        'parent_id'=> 406
        ],
        [
        'ten'=> 'Xã Triệu Phước',
        'loai'=> 3,
        'parent_id'=> 406
        ],
        [
        'ten'=> 'Xã Triệu Độ',
        'loai'=> 3,
        'parent_id'=> 406
        ],
        [
        'ten'=> 'Xã Triệu Trạch',
        'loai'=> 3,
        'parent_id'=> 406
        ],
        [
        'ten'=> 'Xã Triệu Thuận',
        'loai'=> 3,
        'parent_id'=> 406
        ],
        [
        'ten'=> 'Xã Triệu Đại',
        'loai'=> 3,
        'parent_id'=> 406
        ],
        [
        'ten'=> 'Xã Triệu Hòa',
        'loai'=> 3,
        'parent_id'=> 406
        ],
        [
        'ten'=> 'Xã Triệu Lăng',
        'loai'=> 3,
        'parent_id'=> 406
        ],
        [
        'ten'=> 'Xã Triệu Sơn',
        'loai'=> 3,
        'parent_id'=> 406
        ],
        [
        'ten'=> 'Xã Triệu Long',
        'loai'=> 3,
        'parent_id'=> 406
        ],
        [
        'ten'=> 'Xã Triệu Tài',
        'loai'=> 3,
        'parent_id'=> 406
        ],
        [
        'ten'=> 'Xã Triệu Trung',
        'loai'=> 3,
        'parent_id'=> 406
        ],
        [
        'ten'=> 'Xã Triệu Ái',
        'loai'=> 3,
        'parent_id'=> 406
        ],
        [
        'ten'=> 'Xã Triệu Thượng',
        'loai'=> 3,
        'parent_id'=> 406
        ],
        [
        'ten'=> 'Xã Triệu Giang',
        'loai'=> 3,
        'parent_id'=> 406
        ],
        [
        'ten'=> 'Xã Triệu Thành',
        'loai'=> 3,
        'parent_id'=> 406
        ],
        [
        'ten'=> 'Thị trấn Diên Sanh',
        'loai'=> 3,
        'parent_id'=> 407
        ],
        [
        'ten'=> 'Xã Hải An',
        'loai'=> 3,
        'parent_id'=> 407
        ],
        [
        'ten'=> 'Xã Hải Ba',
        'loai'=> 3,
        'parent_id'=> 407
        ],
        [
        'ten'=> 'Xã Hải Quy',
        'loai'=> 3,
        'parent_id'=> 407
        ],
        [
        'ten'=> 'Xã Hải Quế',
        'loai'=> 3,
        'parent_id'=> 407
        ],
        [
        'ten'=> 'Xã Hải Hưng',
        'loai'=> 3,
        'parent_id'=> 407
        ],
        [
        'ten'=> 'Xã Hải Phú',
        'loai'=> 3,
        'parent_id'=> 407
        ],
        [
        'ten'=> 'Xã Hải Thượng',
        'loai'=> 3,
        'parent_id'=> 407
        ],
        [
        'ten'=> 'Xã Hải Dương',
        'loai'=> 3,
        'parent_id'=> 407
        ],
        [
        'ten'=> 'Xã Hải Định',
        'loai'=> 3,
        'parent_id'=> 407
        ],
        [
        'ten'=> 'Xã Hải Lâm',
        'loai'=> 3,
        'parent_id'=> 407
        ],
        [
        'ten'=> 'Xã Hải Phong',
        'loai'=> 3,
        'parent_id'=> 407
        ],
        [
        'ten'=> 'Xã Hải Trường',
        'loai'=> 3,
        'parent_id'=> 407
        ],
        [
        'ten'=> 'Xã Hải Sơn',
        'loai'=> 3,
        'parent_id'=> 407
        ],
        [
        'ten'=> 'Xã Hải Chánh',
        'loai'=> 3,
        'parent_id'=> 407
        ],
        [
        'ten'=> 'Xã Hải Khê',
        'loai'=> 3,
        'parent_id'=> 407
        ],
        [
        'ten'=> 'Phường Tây Lộc',
        'loai'=> 3,
        'parent_id'=> 409
        ],
        [
        'ten'=> 'Phường Thuận Lộc',
        'loai'=> 3,
        'parent_id'=> 409
        ],
        [
        'ten'=> 'Phường Gia Hội',
        'loai'=> 3,
        'parent_id'=> 409
        ],
        [
        'ten'=> 'Phường Phú Hậu',
        'loai'=> 3,
        'parent_id'=> 409
        ],
        [
        'ten'=> 'Phường Thuận Hòa',
        'loai'=> 3,
        'parent_id'=> 409
        ],
        [
        'ten'=> 'Phường Đông Ba',
        'loai'=> 3,
        'parent_id'=> 409
        ],
        [
        'ten'=> 'Phường Kim Long',
        'loai'=> 3,
        'parent_id'=> 409
        ],
        [
        'ten'=> 'Phường Vỹ Dạ',
        'loai'=> 3,
        'parent_id'=> 409
        ],
        [
        'ten'=> 'Phường Phường Đúc',
        'loai'=> 3,
        'parent_id'=> 409
        ],
        [
        'ten'=> 'Phường Vĩnh Ninh',
        'loai'=> 3,
        'parent_id'=> 409
        ],
        [
        'ten'=> 'Phường Phú Hội',
        'loai'=> 3,
        'parent_id'=> 409
        ],
        [
        'ten'=> 'Phường Phú Nhuận',
        'loai'=> 3,
        'parent_id'=> 409
        ],
        [
        'ten'=> 'Phường Xuân Phú',
        'loai'=> 3,
        'parent_id'=> 409
        ],
        [
        'ten'=> 'Phường Trường An',
        'loai'=> 3,
        'parent_id'=> 409
        ],
        [
        'ten'=> 'Phường Phước Vĩnh',
        'loai'=> 3,
        'parent_id'=> 409
        ],
        [
        'ten'=> 'Phường An Cựu',
        'loai'=> 3,
        'parent_id'=> 409
        ],
        [
        'ten'=> 'Phường An Hòa',
        'loai'=> 3,
        'parent_id'=> 409
        ],
        [
        'ten'=> 'Phường Hương Sơ',
        'loai'=> 3,
        'parent_id'=> 409
        ],
        [
        'ten'=> 'Phường Thuỷ Biều',
        'loai'=> 3,
        'parent_id'=> 409
        ],
        [
        'ten'=> 'Phường Hương Long',
        'loai'=> 3,
        'parent_id'=> 409
        ],
        [
        'ten'=> 'Phường Thuỷ Xuân',
        'loai'=> 3,
        'parent_id'=> 409
        ],
        [
        'ten'=> 'Phường An Đông',
        'loai'=> 3,
        'parent_id'=> 409
        ],
        [
        'ten'=> 'Phường An Tây',
        'loai'=> 3,
        'parent_id'=> 409
        ],
        [
        'ten'=> 'Phường Thuận An',
        'loai'=> 3,
        'parent_id'=> 409
        ],
        [
        'ten'=> 'Xã Phú Dương',
        'loai'=> 3,
        'parent_id'=> 409
        ],
        [
        'ten'=> 'Xã Phú Mậu',
        'loai'=> 3,
        'parent_id'=> 409
        ],
        [
        'ten'=> 'Xã Phú Thanh',
        'loai'=> 3,
        'parent_id'=> 409
        ],
        [
        'ten'=> 'Phường Phú Thượng',
        'loai'=> 3,
        'parent_id'=> 409
        ],
        [
        'ten'=> 'Phường Thủy Vân',
        'loai'=> 3,
        'parent_id'=> 409
        ],
        [
        'ten'=> 'Xã Thủy Bằng',
        'loai'=> 3,
        'parent_id'=> 409
        ],
        [
        'ten'=> 'Xã Hải Dương',
        'loai'=> 3,
        'parent_id'=> 409
        ],
        [
        'ten'=> 'Xã Hương Phong',
        'loai'=> 3,
        'parent_id'=> 409
        ],
        [
        'ten'=> 'Phường Hương Vinh',
        'loai'=> 3,
        'parent_id'=> 409
        ],
        [
        'ten'=> 'Phường Hương An',
        'loai'=> 3,
        'parent_id'=> 409
        ],
        [
        'ten'=> 'Phường Hương Hồ',
        'loai'=> 3,
        'parent_id'=> 409
        ],
        [
        'ten'=> 'Xã Hương Thọ',
        'loai'=> 3,
        'parent_id'=> 409
        ],
        [
        'ten'=> 'Thị trấn Phong Điền',
        'loai'=> 3,
        'parent_id'=> 410
        ],
        [
        'ten'=> 'Xã Điền Hương',
        'loai'=> 3,
        'parent_id'=> 410
        ],
        [
        'ten'=> 'Xã Điền Môn',
        'loai'=> 3,
        'parent_id'=> 410
        ],
        [
        'ten'=> 'Xã Điền Lộc',
        'loai'=> 3,
        'parent_id'=> 410
        ],
        [
        'ten'=> 'Xã Phong Bình',
        'loai'=> 3,
        'parent_id'=> 410
        ],
        [
        'ten'=> 'Xã Điền Hòa',
        'loai'=> 3,
        'parent_id'=> 410
        ],
        [
        'ten'=> 'Xã Phong Chương',
        'loai'=> 3,
        'parent_id'=> 410
        ],
        [
        'ten'=> 'Xã Phong Hải',
        'loai'=> 3,
        'parent_id'=> 410
        ],
        [
        'ten'=> 'Xã Điền Hải',
        'loai'=> 3,
        'parent_id'=> 410
        ],
        [
        'ten'=> 'Xã Phong Hòa',
        'loai'=> 3,
        'parent_id'=> 410
        ],
        [
        'ten'=> 'Xã Phong Thu',
        'loai'=> 3,
        'parent_id'=> 410
        ],
        [
        'ten'=> 'Xã Phong Hiền',
        'loai'=> 3,
        'parent_id'=> 410
        ],
        [
        'ten'=> 'Xã Phong Mỹ',
        'loai'=> 3,
        'parent_id'=> 410
        ],
        [
        'ten'=> 'Xã Phong An',
        'loai'=> 3,
        'parent_id'=> 410
        ],
        [
        'ten'=> 'Xã Phong Xuân',
        'loai'=> 3,
        'parent_id'=> 410
        ],
        [
        'ten'=> 'Xã Phong Sơn',
        'loai'=> 3,
        'parent_id'=> 410
        ],
        [
        'ten'=> 'Thị trấn Sịa',
        'loai'=> 3,
        'parent_id'=> 411
        ],
        [
        'ten'=> 'Xã Quảng Thái',
        'loai'=> 3,
        'parent_id'=> 411
        ],
        [
        'ten'=> 'Xã Quảng Ngạn',
        'loai'=> 3,
        'parent_id'=> 411
        ],
        [
        'ten'=> 'Xã Quảng Lợi',
        'loai'=> 3,
        'parent_id'=> 411
        ],
        [
        'ten'=> 'Xã Quảng Công',
        'loai'=> 3,
        'parent_id'=> 411
        ],
        [
        'ten'=> 'Xã Quảng Phước',
        'loai'=> 3,
        'parent_id'=> 411
        ],
        [
        'ten'=> 'Xã Quảng Vinh',
        'loai'=> 3,
        'parent_id'=> 411
        ],
        [
        'ten'=> 'Xã Quảng An',
        'loai'=> 3,
        'parent_id'=> 411
        ],
        [
        'ten'=> 'Xã Quảng Thành',
        'loai'=> 3,
        'parent_id'=> 411
        ],
        [
        'ten'=> 'Xã Quảng Thọ',
        'loai'=> 3,
        'parent_id'=> 411
        ],
        [
        'ten'=> 'Xã Quảng Phú',
        'loai'=> 3,
        'parent_id'=> 411
        ],
        [
        'ten'=> 'Xã Phú Thuận',
        'loai'=> 3,
        'parent_id'=> 412
        ],
        [
        'ten'=> 'Xã Phú An',
        'loai'=> 3,
        'parent_id'=> 412
        ],
        [
        'ten'=> 'Xã Phú Hải',
        'loai'=> 3,
        'parent_id'=> 412
        ],
        [
        'ten'=> 'Xã Phú Xuân',
        'loai'=> 3,
        'parent_id'=> 412
        ],
        [
        'ten'=> 'Xã Phú Diên',
        'loai'=> 3,
        'parent_id'=> 412
        ],
        [
        'ten'=> 'Xã Phú Mỹ',
        'loai'=> 3,
        'parent_id'=> 412
        ],
        [
        'ten'=> 'Xã Phú Hồ',
        'loai'=> 3,
        'parent_id'=> 412
        ],
        [
        'ten'=> 'Xã Vinh Xuân',
        'loai'=> 3,
        'parent_id'=> 412
        ],
        [
        'ten'=> 'Xã Phú Lương',
        'loai'=> 3,
        'parent_id'=> 412
        ],
        [
        'ten'=> 'Thị trấn Phú Đa',
        'loai'=> 3,
        'parent_id'=> 412
        ],
        [
        'ten'=> 'Xã Vinh Thanh',
        'loai'=> 3,
        'parent_id'=> 412
        ],
        [
        'ten'=> 'Xã Vinh An',
        'loai'=> 3,
        'parent_id'=> 412
        ],
        [
        'ten'=> 'Xã Phú Gia',
        'loai'=> 3,
        'parent_id'=> 412
        ],
        [
        'ten'=> 'Xã Vinh Hà',
        'loai'=> 3,
        'parent_id'=> 412
        ],
        [
        'ten'=> 'Phường Phú Bài',
        'loai'=> 3,
        'parent_id'=> 413
        ],
        [
        'ten'=> 'Xã Thủy Thanh',
        'loai'=> 3,
        'parent_id'=> 413
        ],
        [
        'ten'=> 'Phường Thủy Dương',
        'loai'=> 3,
        'parent_id'=> 413
        ],
        [
        'ten'=> 'Phường Thủy Phương',
        'loai'=> 3,
        'parent_id'=> 413
        ],
        [
        'ten'=> 'Phường Thủy Châu',
        'loai'=> 3,
        'parent_id'=> 413
        ],
        [
        'ten'=> 'Phường Thủy Lương',
        'loai'=> 3,
        'parent_id'=> 413
        ],
        [
        'ten'=> 'Xã Thủy Tân',
        'loai'=> 3,
        'parent_id'=> 413
        ],
        [
        'ten'=> 'Xã Thủy Phù',
        'loai'=> 3,
        'parent_id'=> 413
        ],
        [
        'ten'=> 'Xã Phú Sơn',
        'loai'=> 3,
        'parent_id'=> 413
        ],
        [
        'ten'=> 'Xã Dương Hòa',
        'loai'=> 3,
        'parent_id'=> 413
        ],
        [
        'ten'=> 'Phường Tứ Hạ',
        'loai'=> 3,
        'parent_id'=> 414
        ],
        [
        'ten'=> 'Xã Hương Toàn',
        'loai'=> 3,
        'parent_id'=> 414
        ],
        [
        'ten'=> 'Phường Hương Vân',
        'loai'=> 3,
        'parent_id'=> 414
        ],
        [
        'ten'=> 'Phường Hương Văn',
        'loai'=> 3,
        'parent_id'=> 414
        ],
        [
        'ten'=> 'Phường Hương Xuân',
        'loai'=> 3,
        'parent_id'=> 414
        ],
        [
        'ten'=> 'Phường Hương Chữ',
        'loai'=> 3,
        'parent_id'=> 414
        ],
        [
        'ten'=> 'Xã Hương Bình',
        'loai'=> 3,
        'parent_id'=> 414
        ],
        [
        'ten'=> 'Xã Bình Tiến',
        'loai'=> 3,
        'parent_id'=> 414
        ],
        [
        'ten'=> 'Xã Bình Thành',
        'loai'=> 3,
        'parent_id'=> 414
        ],
        [
        'ten'=> 'Thị trấn A Lưới',
        'loai'=> 3,
        'parent_id'=> 415
        ],
        [
        'ten'=> 'Xã Hồng Vân',
        'loai'=> 3,
        'parent_id'=> 415
        ],
        [
        'ten'=> 'Xã Hồng Hạ',
        'loai'=> 3,
        'parent_id'=> 415
        ],
        [
        'ten'=> 'Xã Hồng Kim',
        'loai'=> 3,
        'parent_id'=> 415
        ],
        [
        'ten'=> 'Xã Trung Sơn',
        'loai'=> 3,
        'parent_id'=> 415
        ],
        [
        'ten'=> 'Xã Hương Nguyên',
        'loai'=> 3,
        'parent_id'=> 415
        ],
        [
        'ten'=> 'Xã Hồng Bắc',
        'loai'=> 3,
        'parent_id'=> 415
        ],
        [
        'ten'=> 'Xã A Ngo',
        'loai'=> 3,
        'parent_id'=> 415
        ],
        [
        'ten'=> 'Xã Sơn Thủy',
        'loai'=> 3,
        'parent_id'=> 415
        ],
        [
        'ten'=> 'Xã Phú Vinh',
        'loai'=> 3,
        'parent_id'=> 415
        ],
        [
        'ten'=> 'Xã Hương Phong',
        'loai'=> 3,
        'parent_id'=> 415
        ],
        [
        'ten'=> 'Xã Quảng Nhâm',
        'loai'=> 3,
        'parent_id'=> 415
        ],
        [
        'ten'=> 'Xã Hồng Thượng',
        'loai'=> 3,
        'parent_id'=> 415
        ],
        [
        'ten'=> 'Xã Hồng Thái',
        'loai'=> 3,
        'parent_id'=> 415
        ],
        [
        'ten'=> 'Xã A Roàng',
        'loai'=> 3,
        'parent_id'=> 415
        ],
        [
        'ten'=> 'Xã Đông Sơn',
        'loai'=> 3,
        'parent_id'=> 415
        ],
        [
        'ten'=> 'Xã Lâm Đớt',
        'loai'=> 3,
        'parent_id'=> 415
        ],
        [
        'ten'=> 'Xã Hồng Thủy',
        'loai'=> 3,
        'parent_id'=> 415
        ],
        [
        'ten'=> 'Thị trấn Phú Lộc',
        'loai'=> 3,
        'parent_id'=> 416
        ],
        [
        'ten'=> 'Thị trấn Lăng Cô',
        'loai'=> 3,
        'parent_id'=> 416
        ],
        [
        'ten'=> 'Xã Vinh Mỹ',
        'loai'=> 3,
        'parent_id'=> 416
        ],
        [
        'ten'=> 'Xã Vinh Hưng',
        'loai'=> 3,
        'parent_id'=> 416
        ],
        [
        'ten'=> 'Xã Giang Hải',
        'loai'=> 3,
        'parent_id'=> 416
        ],
        [
        'ten'=> 'Xã Vinh Hiền',
        'loai'=> 3,
        'parent_id'=> 416
        ],
        [
        'ten'=> 'Xã Lộc Bổn',
        'loai'=> 3,
        'parent_id'=> 416
        ],
        [
        'ten'=> 'Xã Lộc Sơn',
        'loai'=> 3,
        'parent_id'=> 416
        ],
        [
        'ten'=> 'Xã Lộc Bình',
        'loai'=> 3,
        'parent_id'=> 416
        ],
        [
        'ten'=> 'Xã Lộc Vĩnh',
        'loai'=> 3,
        'parent_id'=> 416
        ],
        [
        'ten'=> 'Xã Lộc An',
        'loai'=> 3,
        'parent_id'=> 416
        ],
        [
        'ten'=> 'Xã Lộc Điền',
        'loai'=> 3,
        'parent_id'=> 416
        ],
        [
        'ten'=> 'Xã Lộc Thủy',
        'loai'=> 3,
        'parent_id'=> 416
        ],
        [
        'ten'=> 'Xã Lộc Trì',
        'loai'=> 3,
        'parent_id'=> 416
        ],
        [
        'ten'=> 'Xã Lộc Tiến',
        'loai'=> 3,
        'parent_id'=> 416
        ],
        [
        'ten'=> 'Xã Lộc Hòa',
        'loai'=> 3,
        'parent_id'=> 416
        ],
        [
        'ten'=> 'Xã Xuân Lộc',
        'loai'=> 3,
        'parent_id'=> 416
        ],
        [
        'ten'=> 'Thị trấn Khe Tre',
        'loai'=> 3,
        'parent_id'=> 417
        ],
        [
        'ten'=> 'Xã Hương Phú',
        'loai'=> 3,
        'parent_id'=> 417
        ],
        [
        'ten'=> 'Xã Hương Sơn',
        'loai'=> 3,
        'parent_id'=> 417
        ],
        [
        'ten'=> 'Xã Hương Lộc',
        'loai'=> 3,
        'parent_id'=> 417
        ],
        [
        'ten'=> 'Xã Thượng Quảng',
        'loai'=> 3,
        'parent_id'=> 417
        ],
        [
        'ten'=> 'Xã Hương Xuân',
        'loai'=> 3,
        'parent_id'=> 417
        ],
        [
        'ten'=> 'Xã Hương Hữu',
        'loai'=> 3,
        'parent_id'=> 417
        ],
        [
        'ten'=> 'Xã Thượng Lộ',
        'loai'=> 3,
        'parent_id'=> 417
        ],
        [
        'ten'=> 'Xã Thượng Long',
        'loai'=> 3,
        'parent_id'=> 417
        ],
        [
        'ten'=> 'Xã Thượng Nhật',
        'loai'=> 3,
        'parent_id'=> 417
        ],
        [
        'ten'=> 'Phường Hòa Hiệp Bắc',
        'loai'=> 3,
        'parent_id'=> 418
        ],
        [
        'ten'=> 'Phường Hòa Hiệp Nam',
        'loai'=> 3,
        'parent_id'=> 418
        ],
        [
        'ten'=> 'Phường Hòa Khánh Bắc',
        'loai'=> 3,
        'parent_id'=> 418
        ],
        [
        'ten'=> 'Phường Hòa Khánh Nam',
        'loai'=> 3,
        'parent_id'=> 418
        ],
        [
        'ten'=> 'Phường Hòa Minh',
        'loai'=> 3,
        'parent_id'=> 418
        ],
        [
        'ten'=> 'Phường Tam Thuận',
        'loai'=> 3,
        'parent_id'=> 419
        ],
        [
        'ten'=> 'Phường Thanh Khê Tây',
        'loai'=> 3,
        'parent_id'=> 419
        ],
        [
        'ten'=> 'Phường Thanh Khê Đông',
        'loai'=> 3,
        'parent_id'=> 419
        ],
        [
        'ten'=> 'Phường Xuân Hà',
        'loai'=> 3,
        'parent_id'=> 419
        ],
        [
        'ten'=> 'Phường Tân Chính',
        'loai'=> 3,
        'parent_id'=> 419
        ],
        [
        'ten'=> 'Phường Chính Gián',
        'loai'=> 3,
        'parent_id'=> 419
        ],
        [
        'ten'=> 'Phường Vĩnh Trung',
        'loai'=> 3,
        'parent_id'=> 419
        ],
        [
        'ten'=> 'Phường Thạc Gián',
        'loai'=> 3,
        'parent_id'=> 419
        ],
        [
        'ten'=> 'Phường An Khê',
        'loai'=> 3,
        'parent_id'=> 419
        ],
        [
        'ten'=> 'Phường Hòa Khê',
        'loai'=> 3,
        'parent_id'=> 419
        ],
        [
        'ten'=> 'Phường Thanh Bình',
        'loai'=> 3,
        'parent_id'=> 420
        ],
        [
        'ten'=> 'Phường Thuận Phước',
        'loai'=> 3,
        'parent_id'=> 420
        ],
        [
        'ten'=> 'Phường Thạch Thang',
        'loai'=> 3,
        'parent_id'=> 420
        ],
        [
        'ten'=> 'Phường Hải Châu  I',
        'loai'=> 3,
        'parent_id'=> 420
        ],
        [
        'ten'=> 'Phường Hải Châu II',
        'loai'=> 3,
        'parent_id'=> 420
        ],
        [
        'ten'=> 'Phường Phước Ninh',
        'loai'=> 3,
        'parent_id'=> 420
        ],
        [
        'ten'=> 'Phường Hòa Thuận Tây',
        'loai'=> 3,
        'parent_id'=> 420
        ],
        [
        'ten'=> 'Phường Hòa Thuận Đông',
        'loai'=> 3,
        'parent_id'=> 420
        ],
        [
        'ten'=> 'Phường Nam Dương',
        'loai'=> 3,
        'parent_id'=> 420
        ],
        [
        'ten'=> 'Phường Bình Hiên',
        'loai'=> 3,
        'parent_id'=> 420
        ],
        [
        'ten'=> 'Phường Bình Thuận',
        'loai'=> 3,
        'parent_id'=> 420
        ],
        [
        'ten'=> 'Phường Hòa Cường Bắc',
        'loai'=> 3,
        'parent_id'=> 420
        ],
        [
        'ten'=> 'Phường Hòa Cường Nam',
        'loai'=> 3,
        'parent_id'=> 420
        ],
        [
        'ten'=> 'Phường Thọ Quang',
        'loai'=> 3,
        'parent_id'=> 421
        ],
        [
        'ten'=> 'Phường Nại Hiên Đông',
        'loai'=> 3,
        'parent_id'=> 421
        ],
        [
        'ten'=> 'Phường Mân Thái',
        'loai'=> 3,
        'parent_id'=> 421
        ],
        [
        'ten'=> 'Phường An Hải Bắc',
        'loai'=> 3,
        'parent_id'=> 421
        ],
        [
        'ten'=> 'Phường Phước Mỹ',
        'loai'=> 3,
        'parent_id'=> 421
        ],
        [
        'ten'=> 'Phường An Hải Tây',
        'loai'=> 3,
        'parent_id'=> 421
        ],
        [
        'ten'=> 'Phường An Hải Đông',
        'loai'=> 3,
        'parent_id'=> 421
        ],
        [
        'ten'=> 'Phường Mỹ An',
        'loai'=> 3,
        'parent_id'=> 422
        ],
        [
        'ten'=> 'Phường Khuê Mỹ',
        'loai'=> 3,
        'parent_id'=> 422
        ],
        [
        'ten'=> 'Phường Hoà Quý',
        'loai'=> 3,
        'parent_id'=> 422
        ],
        [
        'ten'=> 'Phường Hoà Hải',
        'loai'=> 3,
        'parent_id'=> 422
        ],
        [
        'ten'=> 'Phường Khuê Trung',
        'loai'=> 3,
        'parent_id'=> 423
        ],
        [
        'ten'=> 'Phường Hòa Phát',
        'loai'=> 3,
        'parent_id'=> 423
        ],
        [
        'ten'=> 'Phường Hòa An',
        'loai'=> 3,
        'parent_id'=> 423
        ],
        [
        'ten'=> 'Phường Hòa Thọ Tây',
        'loai'=> 3,
        'parent_id'=> 423
        ],
        [
        'ten'=> 'Phường Hòa Thọ Đông',
        'loai'=> 3,
        'parent_id'=> 423
        ],
        [
        'ten'=> 'Phường Hòa Xuân',
        'loai'=> 3,
        'parent_id'=> 423
        ],
        [
        'ten'=> 'Xã Hòa Bắc',
        'loai'=> 3,
        'parent_id'=> 424
        ],
        [
        'ten'=> 'Xã Hòa Liên',
        'loai'=> 3,
        'parent_id'=> 424
        ],
        [
        'ten'=> 'Xã Hòa Ninh',
        'loai'=> 3,
        'parent_id'=> 424
        ],
        [
        'ten'=> 'Xã Hòa Sơn',
        'loai'=> 3,
        'parent_id'=> 424
        ],
        [
        'ten'=> 'Xã Hòa Nhơn',
        'loai'=> 3,
        'parent_id'=> 424
        ],
        [
        'ten'=> 'Xã Hòa Phú',
        'loai'=> 3,
        'parent_id'=> 424
        ],
        [
        'ten'=> 'Xã Hòa Phong',
        'loai'=> 3,
        'parent_id'=> 424
        ],
        [
        'ten'=> 'Xã Hòa Châu',
        'loai'=> 3,
        'parent_id'=> 424
        ],
        [
        'ten'=> 'Xã Hòa Tiến',
        'loai'=> 3,
        'parent_id'=> 424
        ],
        [
        'ten'=> 'Xã Hòa Phước',
        'loai'=> 3,
        'parent_id'=> 424
        ],
        [
        'ten'=> 'Xã Hòa Khương',
        'loai'=> 3,
        'parent_id'=> 424
        ],
        [
        'ten'=> 'Phường Tân Thạnh',
        'loai'=> 3,
        'parent_id'=> 426
        ],
        [
        'ten'=> 'Phường Phước Hòa',
        'loai'=> 3,
        'parent_id'=> 426
        ],
        [
        'ten'=> 'Phường An Mỹ',
        'loai'=> 3,
        'parent_id'=> 426
        ],
        [
        'ten'=> 'Phường Hòa Hương',
        'loai'=> 3,
        'parent_id'=> 426
        ],
        [
        'ten'=> 'Phường An Xuân',
        'loai'=> 3,
        'parent_id'=> 426
        ],
        [
        'ten'=> 'Phường An Sơn',
        'loai'=> 3,
        'parent_id'=> 426
        ],
        [
        'ten'=> 'Phường Trường Xuân',
        'loai'=> 3,
        'parent_id'=> 426
        ],
        [
        'ten'=> 'Phường An Phú',
        'loai'=> 3,
        'parent_id'=> 426
        ],
        [
        'ten'=> 'Xã Tam Thanh',
        'loai'=> 3,
        'parent_id'=> 426
        ],
        [
        'ten'=> 'Xã Tam Thăng',
        'loai'=> 3,
        'parent_id'=> 426
        ],
        [
        'ten'=> 'Xã Tam Phú',
        'loai'=> 3,
        'parent_id'=> 426
        ],
        [
        'ten'=> 'Phường Hoà Thuận',
        'loai'=> 3,
        'parent_id'=> 426
        ],
        [
        'ten'=> 'Xã Tam Ngọc',
        'loai'=> 3,
        'parent_id'=> 426
        ],
        [
        'ten'=> 'Phường Minh An',
        'loai'=> 3,
        'parent_id'=> 427
        ],
        [
        'ten'=> 'Phường Tân An',
        'loai'=> 3,
        'parent_id'=> 427
        ],
        [
        'ten'=> 'Phường Cẩm Phô',
        'loai'=> 3,
        'parent_id'=> 427
        ],
        [
        'ten'=> 'Phường Thanh Hà',
        'loai'=> 3,
        'parent_id'=> 427
        ],
        [
        'ten'=> 'Phường Sơn Phong',
        'loai'=> 3,
        'parent_id'=> 427
        ],
        [
        'ten'=> 'Phường Cẩm Châu',
        'loai'=> 3,
        'parent_id'=> 427
        ],
        [
        'ten'=> 'Phường Cửa Đại',
        'loai'=> 3,
        'parent_id'=> 427
        ],
        [
        'ten'=> 'Phường Cẩm An',
        'loai'=> 3,
        'parent_id'=> 427
        ],
        [
        'ten'=> 'Xã Cẩm Hà',
        'loai'=> 3,
        'parent_id'=> 427
        ],
        [
        'ten'=> 'Xã Cẩm Kim',
        'loai'=> 3,
        'parent_id'=> 427
        ],
        [
        'ten'=> 'Phường Cẩm Nam',
        'loai'=> 3,
        'parent_id'=> 427
        ],
        [
        'ten'=> 'Xã Cẩm Thanh',
        'loai'=> 3,
        'parent_id'=> 427
        ],
        [
        'ten'=> 'Xã Tân Hiệp',
        'loai'=> 3,
        'parent_id'=> 427
        ],
        [
        'ten'=> 'Xã Ch\'ơm',
        'loai'=> 3,
        'parent_id'=> 428
        ],
        [
        'ten'=> 'Xã Ga Ri',
        'loai'=> 3,
        'parent_id'=> 428
        ],
        [
        'ten'=> 'Xã A Xan',
        'loai'=> 3,
        'parent_id'=> 428
        ],
        [
        'ten'=> 'Xã Tr\'Hy',
        'loai'=> 3,
        'parent_id'=> 428
        ],
        [
        'ten'=> 'Xã Lăng',
        'loai'=> 3,
        'parent_id'=> 428
        ],
        [
        'ten'=> 'Xã A Nông',
        'loai'=> 3,
        'parent_id'=> 428
        ],
        [
        'ten'=> 'Xã A Tiêng',
        'loai'=> 3,
        'parent_id'=> 428
        ],
        [
        'ten'=> 'Xã Bha Lê',
        'loai'=> 3,
        'parent_id'=> 428
        ],
        [
        'ten'=> 'Xã A Vương',
        'loai'=> 3,
        'parent_id'=> 428
        ],
        [
        'ten'=> 'Xã Dang',
        'loai'=> 3,
        'parent_id'=> 428
        ],
        [
        'ten'=> 'Thị trấn P Rao',
        'loai'=> 3,
        'parent_id'=> 429
        ],
        [
        'ten'=> 'Xã Tà Lu',
        'loai'=> 3,
        'parent_id'=> 429
        ],
        [
        'ten'=> 'Xã Sông Kôn',
        'loai'=> 3,
        'parent_id'=> 429
        ],
        [
        'ten'=> 'Xã Jơ Ngây',
        'loai'=> 3,
        'parent_id'=> 429
        ],
        [
        'ten'=> 'Xã A Ting',
        'loai'=> 3,
        'parent_id'=> 429
        ],
        [
        'ten'=> 'Xã  Tư',
        'loai'=> 3,
        'parent_id'=> 429
        ],
        [
        'ten'=> 'Xã Ba',
        'loai'=> 3,
        'parent_id'=> 429
        ],
        [
        'ten'=> 'Xã A Rooi',
        'loai'=> 3,
        'parent_id'=> 429
        ],
        [
        'ten'=> 'Xã Za Hung',
        'loai'=> 3,
        'parent_id'=> 429
        ],
        [
        'ten'=> 'Xã Mà Cooi',
        'loai'=> 3,
        'parent_id'=> 429
        ],
        [
        'ten'=> 'Xã Ka Dăng',
        'loai'=> 3,
        'parent_id'=> 429
        ],
        [
        'ten'=> 'Thị Trấn Ái Nghĩa',
        'loai'=> 3,
        'parent_id'=> 430
        ],
        [
        'ten'=> 'Xã Đại Sơn',
        'loai'=> 3,
        'parent_id'=> 430
        ],
        [
        'ten'=> 'Xã Đại Lãnh',
        'loai'=> 3,
        'parent_id'=> 430
        ],
        [
        'ten'=> 'Xã Đại Hưng',
        'loai'=> 3,
        'parent_id'=> 430
        ],
        [
        'ten'=> 'Xã Đại Hồng',
        'loai'=> 3,
        'parent_id'=> 430
        ],
        [
        'ten'=> 'Xã Đại Đồng',
        'loai'=> 3,
        'parent_id'=> 430
        ],
        [
        'ten'=> 'Xã Đại Quang',
        'loai'=> 3,
        'parent_id'=> 430
        ],
        [
        'ten'=> 'Xã Đại Nghĩa',
        'loai'=> 3,
        'parent_id'=> 430
        ],
        [
        'ten'=> 'Xã Đại Hiệp',
        'loai'=> 3,
        'parent_id'=> 430
        ],
        [
        'ten'=> 'Xã Đại Thạnh',
        'loai'=> 3,
        'parent_id'=> 430
        ],
        [
        'ten'=> 'Xã Đại Chánh',
        'loai'=> 3,
        'parent_id'=> 430
        ],
        [
        'ten'=> 'Xã Đại Tân',
        'loai'=> 3,
        'parent_id'=> 430
        ],
        [
        'ten'=> 'Xã Đại Phong',
        'loai'=> 3,
        'parent_id'=> 430
        ],
        [
        'ten'=> 'Xã Đại Minh',
        'loai'=> 3,
        'parent_id'=> 430
        ],
        [
        'ten'=> 'Xã Đại Thắng',
        'loai'=> 3,
        'parent_id'=> 430
        ],
        [
        'ten'=> 'Xã Đại Cường',
        'loai'=> 3,
        'parent_id'=> 430
        ],
        [
        'ten'=> 'Xã Đại An',
        'loai'=> 3,
        'parent_id'=> 430
        ],
        [
        'ten'=> 'Xã Đại Hòa',
        'loai'=> 3,
        'parent_id'=> 430
        ],
        [
        'ten'=> 'Phường Vĩnh Điện',
        'loai'=> 3,
        'parent_id'=> 431
        ],
        [
        'ten'=> 'Xã Điện Tiến',
        'loai'=> 3,
        'parent_id'=> 431
        ],
        [
        'ten'=> 'Xã Điện Hòa',
        'loai'=> 3,
        'parent_id'=> 431
        ],
        [
        'ten'=> 'Xã Điện Thắng Bắc',
        'loai'=> 3,
        'parent_id'=> 431
        ],
        [
        'ten'=> 'Xã Điện Thắng Trung',
        'loai'=> 3,
        'parent_id'=> 431
        ],
        [
        'ten'=> 'Xã Điện Thắng Nam',
        'loai'=> 3,
        'parent_id'=> 431
        ],
        [
        'ten'=> 'Phường Điện Ngọc',
        'loai'=> 3,
        'parent_id'=> 431
        ],
        [
        'ten'=> 'Xã Điện Hồng',
        'loai'=> 3,
        'parent_id'=> 431
        ],
        [
        'ten'=> 'Xã Điện Thọ',
        'loai'=> 3,
        'parent_id'=> 431
        ],
        [
        'ten'=> 'Xã Điện Phước',
        'loai'=> 3,
        'parent_id'=> 431
        ],
        [
        'ten'=> 'Phường Điện An',
        'loai'=> 3,
        'parent_id'=> 431
        ],
        [
        'ten'=> 'Phường Điện Nam Bắc',
        'loai'=> 3,
        'parent_id'=> 431
        ],
        [
        'ten'=> 'Phường Điện Nam Trung',
        'loai'=> 3,
        'parent_id'=> 431
        ],
        [
        'ten'=> 'Phường Điện Nam Đông',
        'loai'=> 3,
        'parent_id'=> 431
        ],
        [
        'ten'=> 'Phường Điện Dương',
        'loai'=> 3,
        'parent_id'=> 431
        ],
        [
        'ten'=> 'Xã Điện Quang',
        'loai'=> 3,
        'parent_id'=> 431
        ],
        [
        'ten'=> 'Xã Điện Trung',
        'loai'=> 3,
        'parent_id'=> 431
        ],
        [
        'ten'=> 'Xã Điện Phong',
        'loai'=> 3,
        'parent_id'=> 431
        ],
        [
        'ten'=> 'Xã Điện Minh',
        'loai'=> 3,
        'parent_id'=> 431
        ],
        [
        'ten'=> 'Xã Điện Phương',
        'loai'=> 3,
        'parent_id'=> 431
        ],
        [
        'ten'=> 'Thị trấn Nam Phước',
        'loai'=> 3,
        'parent_id'=> 432
        ],
        [
        'ten'=> 'Xã Duy Thu',
        'loai'=> 3,
        'parent_id'=> 432
        ],
        [
        'ten'=> 'Xã Duy Phú',
        'loai'=> 3,
        'parent_id'=> 432
        ],
        [
        'ten'=> 'Xã Duy Tân',
        'loai'=> 3,
        'parent_id'=> 432
        ],
        [
        'ten'=> 'Xã Duy Hòa',
        'loai'=> 3,
        'parent_id'=> 432
        ],
        [
        'ten'=> 'Xã Duy Châu',
        'loai'=> 3,
        'parent_id'=> 432
        ],
        [
        'ten'=> 'Xã Duy Trinh',
        'loai'=> 3,
        'parent_id'=> 432
        ],
        [
        'ten'=> 'Xã Duy Sơn',
        'loai'=> 3,
        'parent_id'=> 432
        ],
        [
        'ten'=> 'Xã Duy Trung',
        'loai'=> 3,
        'parent_id'=> 432
        ],
        [
        'ten'=> 'Xã Duy Phước',
        'loai'=> 3,
        'parent_id'=> 432
        ],
        [
        'ten'=> 'Xã Duy Thành',
        'loai'=> 3,
        'parent_id'=> 432
        ],
        [
        'ten'=> 'Xã Duy Vinh',
        'loai'=> 3,
        'parent_id'=> 432
        ],
        [
        'ten'=> 'Xã Duy Nghĩa',
        'loai'=> 3,
        'parent_id'=> 432
        ],
        [
        'ten'=> 'Xã Duy Hải',
        'loai'=> 3,
        'parent_id'=> 432
        ],
        [
        'ten'=> 'Thị trấn Đông Phú',
        'loai'=> 3,
        'parent_id'=> 433
        ],
        [
        'ten'=> 'Xã Quế Xuân 1',
        'loai'=> 3,
        'parent_id'=> 433
        ],
        [
        'ten'=> 'Xã Quế Xuân 2',
        'loai'=> 3,
        'parent_id'=> 433
        ],
        [
        'ten'=> 'Xã Quế Phú',
        'loai'=> 3,
        'parent_id'=> 433
        ],
        [
        'ten'=> 'Thị trấn Hương An',
        'loai'=> 3,
        'parent_id'=> 433
        ],
        [
        'ten'=> 'Xã Quế Hiệp',
        'loai'=> 3,
        'parent_id'=> 433
        ],
        [
        'ten'=> 'Xã Quế Thuận',
        'loai'=> 3,
        'parent_id'=> 433
        ],
        [
        'ten'=> 'Xã Quế Mỹ',
        'loai'=> 3,
        'parent_id'=> 433
        ],
        [
        'ten'=> 'Xã Quế Long',
        'loai'=> 3,
        'parent_id'=> 433
        ],
        [
        'ten'=> 'Xã Quế Châu',
        'loai'=> 3,
        'parent_id'=> 433
        ],
        [
        'ten'=> 'Xã Quế Phong',
        'loai'=> 3,
        'parent_id'=> 433
        ],
        [
        'ten'=> 'Xã Quế An',
        'loai'=> 3,
        'parent_id'=> 433
        ],
        [
        'ten'=> 'Xã Quế Minh',
        'loai'=> 3,
        'parent_id'=> 433
        ],
        [
        'ten'=> 'Thị trấn Thạnh Mỹ',
        'loai'=> 3,
        'parent_id'=> 434
        ],
        [
        'ten'=> 'Xã Laêê',
        'loai'=> 3,
        'parent_id'=> 434
        ],
        [
        'ten'=> 'Xã Chơ Chun',
        'loai'=> 3,
        'parent_id'=> 434
        ],
        [
        'ten'=> 'Xã Zuôich',
        'loai'=> 3,
        'parent_id'=> 434
        ],
        [
        'ten'=> 'Xã Tà Pơơ',
        'loai'=> 3,
        'parent_id'=> 434
        ],
        [
        'ten'=> 'Xã La Dêê',
        'loai'=> 3,
        'parent_id'=> 434
        ],
        [
        'ten'=> 'Xã Đắc Tôi',
        'loai'=> 3,
        'parent_id'=> 434
        ],
        [
        'ten'=> 'Xã Chà Vàl',
        'loai'=> 3,
        'parent_id'=> 434
        ],
        [
        'ten'=> 'Xã Tà Bhinh',
        'loai'=> 3,
        'parent_id'=> 434
        ],
        [
        'ten'=> 'Xã Cà Dy',
        'loai'=> 3,
        'parent_id'=> 434
        ],
        [
        'ten'=> 'Xã Đắc Pre',
        'loai'=> 3,
        'parent_id'=> 434
        ],
        [
        'ten'=> 'Xã Đắc Pring',
        'loai'=> 3,
        'parent_id'=> 434
        ],
        [
        'ten'=> 'Thị trấn Khâm Đức',
        'loai'=> 3,
        'parent_id'=> 435
        ],
        [
        'ten'=> 'Xã Phước Xuân',
        'loai'=> 3,
        'parent_id'=> 435
        ],
        [
        'ten'=> 'Xã Phước Hiệp',
        'loai'=> 3,
        'parent_id'=> 435
        ],
        [
        'ten'=> 'Xã Phước Hoà',
        'loai'=> 3,
        'parent_id'=> 435
        ],
        [
        'ten'=> 'Xã Phước Đức',
        'loai'=> 3,
        'parent_id'=> 435
        ],
        [
        'ten'=> 'Xã Phước Năng',
        'loai'=> 3,
        'parent_id'=> 435
        ],
        [
        'ten'=> 'Xã Phước Mỹ',
        'loai'=> 3,
        'parent_id'=> 435
        ],
        [
        'ten'=> 'Xã Phước Chánh',
        'loai'=> 3,
        'parent_id'=> 435
        ],
        [
        'ten'=> 'Xã Phước Công',
        'loai'=> 3,
        'parent_id'=> 435
        ],
        [
        'ten'=> 'Xã Phước Kim',
        'loai'=> 3,
        'parent_id'=> 435
        ],
        [
        'ten'=> 'Xã Phước Lộc',
        'loai'=> 3,
        'parent_id'=> 435
        ],
        [
        'ten'=> 'Xã Phước Thành',
        'loai'=> 3,
        'parent_id'=> 435
        ],
        [
        'ten'=> 'Xã Hiệp Hòa',
        'loai'=> 3,
        'parent_id'=> 436
        ],
        [
        'ten'=> 'Xã Hiệp Thuận',
        'loai'=> 3,
        'parent_id'=> 436
        ],
        [
        'ten'=> 'Xã Quế Thọ',
        'loai'=> 3,
        'parent_id'=> 436
        ],
        [
        'ten'=> 'Xã Bình Lâm',
        'loai'=> 3,
        'parent_id'=> 436
        ],
        [
        'ten'=> 'Xã Sông Trà',
        'loai'=> 3,
        'parent_id'=> 436
        ],
        [
        'ten'=> 'Xã Phước Trà',
        'loai'=> 3,
        'parent_id'=> 436
        ],
        [
        'ten'=> 'Xã Phước Gia',
        'loai'=> 3,
        'parent_id'=> 436
        ],
        [
        'ten'=> 'Thị trấn Tân Bình',
        'loai'=> 3,
        'parent_id'=> 436
        ],
        [
        'ten'=> 'Xã Quế Lưu',
        'loai'=> 3,
        'parent_id'=> 436
        ],
        [
        'ten'=> 'Xã Thăng Phước',
        'loai'=> 3,
        'parent_id'=> 436
        ],
        [
        'ten'=> 'Xã Bình Sơn',
        'loai'=> 3,
        'parent_id'=> 436
        ],
        [
        'ten'=> 'Thị trấn Hà Lam',
        'loai'=> 3,
        'parent_id'=> 437
        ],
        [
        'ten'=> 'Xã Bình Dương',
        'loai'=> 3,
        'parent_id'=> 437
        ],
        [
        'ten'=> 'Xã Bình Giang',
        'loai'=> 3,
        'parent_id'=> 437
        ],
        [
        'ten'=> 'Xã Bình Nguyên',
        'loai'=> 3,
        'parent_id'=> 437
        ],
        [
        'ten'=> 'Xã Bình Phục',
        'loai'=> 3,
        'parent_id'=> 437
        ],
        [
        'ten'=> 'Xã Bình Triều',
        'loai'=> 3,
        'parent_id'=> 437
        ],
        [
        'ten'=> 'Xã Bình Đào',
        'loai'=> 3,
        'parent_id'=> 437
        ],
        [
        'ten'=> 'Xã Bình Minh',
        'loai'=> 3,
        'parent_id'=> 437
        ],
        [
        'ten'=> 'Xã Bình Lãnh',
        'loai'=> 3,
        'parent_id'=> 437
        ],
        [
        'ten'=> 'Xã Bình Trị',
        'loai'=> 3,
        'parent_id'=> 437
        ],
        [
        'ten'=> 'Xã Bình Định Bắc',
        'loai'=> 3,
        'parent_id'=> 437
        ],
        [
        'ten'=> 'Xã Bình Định Nam',
        'loai'=> 3,
        'parent_id'=> 437
        ],
        [
        'ten'=> 'Xã Bình Quý',
        'loai'=> 3,
        'parent_id'=> 437
        ],
        [
        'ten'=> 'Xã Bình Phú',
        'loai'=> 3,
        'parent_id'=> 437
        ],
        [
        'ten'=> 'Xã Bình Chánh',
        'loai'=> 3,
        'parent_id'=> 437
        ],
        [
        'ten'=> 'Xã Bình Tú',
        'loai'=> 3,
        'parent_id'=> 437
        ],
        [
        'ten'=> 'Xã Bình Sa',
        'loai'=> 3,
        'parent_id'=> 437
        ],
        [
        'ten'=> 'Xã Bình Hải',
        'loai'=> 3,
        'parent_id'=> 437
        ],
        [
        'ten'=> 'Xã Bình Quế',
        'loai'=> 3,
        'parent_id'=> 437
        ],
        [
        'ten'=> 'Xã Bình An',
        'loai'=> 3,
        'parent_id'=> 437
        ],
        [
        'ten'=> 'Xã Bình Trung',
        'loai'=> 3,
        'parent_id'=> 437
        ],
        [
        'ten'=> 'Xã Bình Nam',
        'loai'=> 3,
        'parent_id'=> 437
        ],
        [
        'ten'=> 'Thị trấn Tiên Kỳ',
        'loai'=> 3,
        'parent_id'=> 438
        ],
        [
        'ten'=> 'Xã Tiên Sơn',
        'loai'=> 3,
        'parent_id'=> 438
        ],
        [
        'ten'=> 'Xã Tiên Hà',
        'loai'=> 3,
        'parent_id'=> 438
        ],
        [
        'ten'=> 'Xã Tiên Cẩm',
        'loai'=> 3,
        'parent_id'=> 438
        ],
        [
        'ten'=> 'Xã Tiên Châu',
        'loai'=> 3,
        'parent_id'=> 438
        ],
        [
        'ten'=> 'Xã Tiên Lãnh',
        'loai'=> 3,
        'parent_id'=> 438
        ],
        [
        'ten'=> 'Xã Tiên Ngọc',
        'loai'=> 3,
        'parent_id'=> 438
        ],
        [
        'ten'=> 'Xã Tiên Hiệp',
        'loai'=> 3,
        'parent_id'=> 438
        ],
        [
        'ten'=> 'Xã Tiên Cảnh',
        'loai'=> 3,
        'parent_id'=> 438
        ],
        [
        'ten'=> 'Xã Tiên Mỹ',
        'loai'=> 3,
        'parent_id'=> 438
        ],
        [
        'ten'=> 'Xã Tiên Phong',
        'loai'=> 3,
        'parent_id'=> 438
        ],
        [
        'ten'=> 'Xã Tiên Thọ',
        'loai'=> 3,
        'parent_id'=> 438
        ],
        [
        'ten'=> 'Xã Tiên An',
        'loai'=> 3,
        'parent_id'=> 438
        ],
        [
        'ten'=> 'Xã Tiên Lộc',
        'loai'=> 3,
        'parent_id'=> 438
        ],
        [
        'ten'=> 'Xã Tiên Lập',
        'loai'=> 3,
        'parent_id'=> 438
        ],
        [
        'ten'=> 'Thị trấn Trà My',
        'loai'=> 3,
        'parent_id'=> 439
        ],
        [
        'ten'=> 'Xã Trà Sơn',
        'loai'=> 3,
        'parent_id'=> 439
        ],
        [
        'ten'=> 'Xã Trà Kót',
        'loai'=> 3,
        'parent_id'=> 439
        ],
        [
        'ten'=> 'Xã Trà Nú',
        'loai'=> 3,
        'parent_id'=> 439
        ],
        [
        'ten'=> 'Xã Trà Đông',
        'loai'=> 3,
        'parent_id'=> 439
        ],
        [
        'ten'=> 'Xã Trà Dương',
        'loai'=> 3,
        'parent_id'=> 439
        ],
        [
        'ten'=> 'Xã Trà Giang',
        'loai'=> 3,
        'parent_id'=> 439
        ],
        [
        'ten'=> 'Xã Trà Bui',
        'loai'=> 3,
        'parent_id'=> 439
        ],
        [
        'ten'=> 'Xã Trà Đốc',
        'loai'=> 3,
        'parent_id'=> 439
        ],
        [
        'ten'=> 'Xã Trà Tân',
        'loai'=> 3,
        'parent_id'=> 439
        ],
        [
        'ten'=> 'Xã Trà Giác',
        'loai'=> 3,
        'parent_id'=> 439
        ],
        [
        'ten'=> 'Xã Trà Giáp',
        'loai'=> 3,
        'parent_id'=> 439
        ],
        [
        'ten'=> 'Xã Trà Ka',
        'loai'=> 3,
        'parent_id'=> 439
        ],
        [
        'ten'=> 'Xã Trà Leng',
        'loai'=> 3,
        'parent_id'=> 440
        ],
        [
        'ten'=> 'Xã Trà Dơn',
        'loai'=> 3,
        'parent_id'=> 440
        ],
        [
        'ten'=> 'Xã Trà Tập',
        'loai'=> 3,
        'parent_id'=> 440
        ],
        [
        'ten'=> 'Xã Trà Mai',
        'loai'=> 3,
        'parent_id'=> 440
        ],
        [
        'ten'=> 'Xã Trà Cang',
        'loai'=> 3,
        'parent_id'=> 440
        ],
        [
        'ten'=> 'Xã Trà Linh',
        'loai'=> 3,
        'parent_id'=> 440
        ],
        [
        'ten'=> 'Xã Trà Nam',
        'loai'=> 3,
        'parent_id'=> 440
        ],
        [
        'ten'=> 'Xã Trà Don',
        'loai'=> 3,
        'parent_id'=> 440
        ],
        [
        'ten'=> 'Xã Trà Vân',
        'loai'=> 3,
        'parent_id'=> 440
        ],
        [
        'ten'=> 'Xã Trà Vinh',
        'loai'=> 3,
        'parent_id'=> 440
        ],
        [
        'ten'=> 'Thị trấn Núi Thành',
        'loai'=> 3,
        'parent_id'=> 441
        ],
        [
        'ten'=> 'Xã Tam Xuân I',
        'loai'=> 3,
        'parent_id'=> 441
        ],
        [
        'ten'=> 'Xã Tam Xuân II',
        'loai'=> 3,
        'parent_id'=> 441
        ],
        [
        'ten'=> 'Xã Tam Tiến',
        'loai'=> 3,
        'parent_id'=> 441
        ],
        [
        'ten'=> 'Xã Tam Sơn',
        'loai'=> 3,
        'parent_id'=> 441
        ],
        [
        'ten'=> 'Xã Tam Thạnh',
        'loai'=> 3,
        'parent_id'=> 441
        ],
        [
        'ten'=> 'Xã Tam Anh Bắc',
        'loai'=> 3,
        'parent_id'=> 441
        ],
        [
        'ten'=> 'Xã Tam Anh Nam',
        'loai'=> 3,
        'parent_id'=> 441
        ],
        [
        'ten'=> 'Xã Tam Hòa',
        'loai'=> 3,
        'parent_id'=> 441
        ],
        [
        'ten'=> 'Xã Tam Hiệp',
        'loai'=> 3,
        'parent_id'=> 441
        ],
        [
        'ten'=> 'Xã Tam Hải',
        'loai'=> 3,
        'parent_id'=> 441
        ],
        [
        'ten'=> 'Xã Tam Giang',
        'loai'=> 3,
        'parent_id'=> 441
        ],
        [
        'ten'=> 'Xã Tam Quang',
        'loai'=> 3,
        'parent_id'=> 441
        ],
        [
        'ten'=> 'Xã Tam Nghĩa',
        'loai'=> 3,
        'parent_id'=> 441
        ],
        [
        'ten'=> 'Xã Tam Mỹ Tây',
        'loai'=> 3,
        'parent_id'=> 441
        ],
        [
        'ten'=> 'Xã Tam Mỹ Đông',
        'loai'=> 3,
        'parent_id'=> 441
        ],
        [
        'ten'=> 'Xã Tam Trà',
        'loai'=> 3,
        'parent_id'=> 441
        ],
        [
        'ten'=> 'Thị trấn Phú Thịnh',
        'loai'=> 3,
        'parent_id'=> 442
        ],
        [
        'ten'=> 'Xã Tam Thành',
        'loai'=> 3,
        'parent_id'=> 442
        ],
        [
        'ten'=> 'Xã Tam An',
        'loai'=> 3,
        'parent_id'=> 442
        ],
        [
        'ten'=> 'Xã Tam Đàn',
        'loai'=> 3,
        'parent_id'=> 442
        ],
        [
        'ten'=> 'Xã Tam Lộc',
        'loai'=> 3,
        'parent_id'=> 442
        ],
        [
        'ten'=> 'Xã Tam Phước',
        'loai'=> 3,
        'parent_id'=> 442
        ],
        [
        'ten'=> 'Xã Tam Vinh',
        'loai'=> 3,
        'parent_id'=> 442
        ],
        [
        'ten'=> 'Xã Tam Thái',
        'loai'=> 3,
        'parent_id'=> 442
        ],
        [
        'ten'=> 'Xã Tam Đại',
        'loai'=> 3,
        'parent_id'=> 442
        ],
        [
        'ten'=> 'Xã Tam Dân',
        'loai'=> 3,
        'parent_id'=> 442
        ],
        [
        'ten'=> 'Xã Tam Lãnh',
        'loai'=> 3,
        'parent_id'=> 442
        ],
        [
        'ten'=> 'Xã Quế Trung',
        'loai'=> 3,
        'parent_id'=> 443
        ],
        [
        'ten'=> 'Xã Ninh Phước',
        'loai'=> 3,
        'parent_id'=> 443
        ],
        [
        'ten'=> 'Xã Phước Ninh',
        'loai'=> 3,
        'parent_id'=> 443
        ],
        [
        'ten'=> 'Xã Quế Lộc',
        'loai'=> 3,
        'parent_id'=> 443
        ],
        [
        'ten'=> 'Xã Sơn Viên',
        'loai'=> 3,
        'parent_id'=> 443
        ],
        [
        'ten'=> 'Xã Quế Lâm',
        'loai'=> 3,
        'parent_id'=> 443
        ],
        [
        'ten'=> 'Phường Lê Hồng Phong',
        'loai'=> 3,
        'parent_id'=> 444
        ],
        [
        'ten'=> 'Phường Trần Phú',
        'loai'=> 3,
        'parent_id'=> 444
        ],
        [
        'ten'=> 'Phường Quảng Phú',
        'loai'=> 3,
        'parent_id'=> 444
        ],
        [
        'ten'=> 'Phường Nghĩa Chánh',
        'loai'=> 3,
        'parent_id'=> 444
        ],
        [
        'ten'=> 'Phường Trần Hưng Đạo',
        'loai'=> 3,
        'parent_id'=> 444
        ],
        [
        'ten'=> 'Phường Nguyễn Nghiêm',
        'loai'=> 3,
        'parent_id'=> 444
        ],
        [
        'ten'=> 'Phường Nghĩa Lộ',
        'loai'=> 3,
        'parent_id'=> 444
        ],
        [
        'ten'=> 'Phường Chánh Lộ',
        'loai'=> 3,
        'parent_id'=> 444
        ],
        [
        'ten'=> 'Xã Nghĩa Dũng',
        'loai'=> 3,
        'parent_id'=> 444
        ],
        [
        'ten'=> 'Xã Nghĩa Dõng',
        'loai'=> 3,
        'parent_id'=> 444
        ],
        [
        'ten'=> 'Phường Trương Quang Trọng',
        'loai'=> 3,
        'parent_id'=> 444
        ],
        [
        'ten'=> 'Xã Tịnh Hòa',
        'loai'=> 3,
        'parent_id'=> 444
        ],
        [
        'ten'=> 'Xã Tịnh Kỳ',
        'loai'=> 3,
        'parent_id'=> 444
        ],
        [
        'ten'=> 'Xã Tịnh Thiện',
        'loai'=> 3,
        'parent_id'=> 444
        ],
        [
        'ten'=> 'Xã Tịnh Ấn Đông',
        'loai'=> 3,
        'parent_id'=> 444
        ],
        [
        'ten'=> 'Xã Tịnh Châu',
        'loai'=> 3,
        'parent_id'=> 444
        ],
        [
        'ten'=> 'Xã Tịnh Khê',
        'loai'=> 3,
        'parent_id'=> 444
        ],
        [
        'ten'=> 'Xã Tịnh Long',
        'loai'=> 3,
        'parent_id'=> 444
        ],
        [
        'ten'=> 'Xã Tịnh Ấn Tây',
        'loai'=> 3,
        'parent_id'=> 444
        ],
        [
        'ten'=> 'Xã Tịnh An',
        'loai'=> 3,
        'parent_id'=> 444
        ],
        [
        'ten'=> 'Xã Nghĩa Phú',
        'loai'=> 3,
        'parent_id'=> 444
        ],
        [
        'ten'=> 'Xã Nghĩa Hà',
        'loai'=> 3,
        'parent_id'=> 444
        ],
        [
        'ten'=> 'Xã Nghĩa An',
        'loai'=> 3,
        'parent_id'=> 444
        ],
        [
        'ten'=> 'Thị Trấn Châu Ổ',
        'loai'=> 3,
        'parent_id'=> 445
        ],
        [
        'ten'=> 'Xã Bình Thuận',
        'loai'=> 3,
        'parent_id'=> 445
        ],
        [
        'ten'=> 'Xã Bình Thạnh',
        'loai'=> 3,
        'parent_id'=> 445
        ],
        [
        'ten'=> 'Xã Bình Đông',
        'loai'=> 3,
        'parent_id'=> 445
        ],
        [
        'ten'=> 'Xã Bình Chánh',
        'loai'=> 3,
        'parent_id'=> 445
        ],
        [
        'ten'=> 'Xã Bình Nguyên',
        'loai'=> 3,
        'parent_id'=> 445
        ],
        [
        'ten'=> 'Xã Bình Khương',
        'loai'=> 3,
        'parent_id'=> 445
        ],
        [
        'ten'=> 'Xã Bình Trị',
        'loai'=> 3,
        'parent_id'=> 445
        ],
        [
        'ten'=> 'Xã Bình An',
        'loai'=> 3,
        'parent_id'=> 445
        ],
        [
        'ten'=> 'Xã Bình Hải',
        'loai'=> 3,
        'parent_id'=> 445
        ],
        [
        'ten'=> 'Xã Bình Dương',
        'loai'=> 3,
        'parent_id'=> 445
        ],
        [
        'ten'=> 'Xã Bình Phước',
        'loai'=> 3,
        'parent_id'=> 445
        ],
        [
        'ten'=> 'Xã Bình Hòa',
        'loai'=> 3,
        'parent_id'=> 445
        ],
        [
        'ten'=> 'Xã Bình Trung',
        'loai'=> 3,
        'parent_id'=> 445
        ],
        [
        'ten'=> 'Xã Bình Minh',
        'loai'=> 3,
        'parent_id'=> 445
        ],
        [
        'ten'=> 'Xã Bình Long',
        'loai'=> 3,
        'parent_id'=> 445
        ],
        [
        'ten'=> 'Xã Bình Thanh ',
        'loai'=> 3,
        'parent_id'=> 445
        ],
        [
        'ten'=> 'Xã Bình Chương',
        'loai'=> 3,
        'parent_id'=> 445
        ],
        [
        'ten'=> 'Xã Bình Hiệp',
        'loai'=> 3,
        'parent_id'=> 445
        ],
        [
        'ten'=> 'Xã Bình Mỹ',
        'loai'=> 3,
        'parent_id'=> 445
        ],
        [
        'ten'=> 'Xã Bình Tân Phú',
        'loai'=> 3,
        'parent_id'=> 445
        ],
        [
        'ten'=> 'Xã Bình Châu',
        'loai'=> 3,
        'parent_id'=> 445
        ],
        [
        'ten'=> 'Thị trấn Trà Xuân',
        'loai'=> 3,
        'parent_id'=> 446
        ],
        [
        'ten'=> 'Xã Trà Giang',
        'loai'=> 3,
        'parent_id'=> 446
        ],
        [
        'ten'=> 'Xã Trà Thủy',
        'loai'=> 3,
        'parent_id'=> 446
        ],
        [
        'ten'=> 'Xã Trà Hiệp',
        'loai'=> 3,
        'parent_id'=> 446
        ],
        [
        'ten'=> 'Xã Trà Bình',
        'loai'=> 3,
        'parent_id'=> 446
        ],
        [
        'ten'=> 'Xã Trà Phú',
        'loai'=> 3,
        'parent_id'=> 446
        ],
        [
        'ten'=> 'Xã Trà Lâm',
        'loai'=> 3,
        'parent_id'=> 446
        ],
        [
        'ten'=> 'Xã Trà Tân',
        'loai'=> 3,
        'parent_id'=> 446
        ],
        [
        'ten'=> 'Xã Trà Sơn',
        'loai'=> 3,
        'parent_id'=> 446
        ],
        [
        'ten'=> 'Xã Trà Bùi',
        'loai'=> 3,
        'parent_id'=> 446
        ],
        [
        'ten'=> 'Xã Trà Thanh',
        'loai'=> 3,
        'parent_id'=> 446
        ],
        [
        'ten'=> 'Xã Sơn Trà',
        'loai'=> 3,
        'parent_id'=> 446
        ],
        [
        'ten'=> 'Xã Trà Phong',
        'loai'=> 3,
        'parent_id'=> 446
        ],
        [
        'ten'=> 'Xã Hương Trà',
        'loai'=> 3,
        'parent_id'=> 446
        ],
        [
        'ten'=> 'Xã Trà Xinh',
        'loai'=> 3,
        'parent_id'=> 446
        ],
        [
        'ten'=> 'Xã Trà Tây',
        'loai'=> 3,
        'parent_id'=> 446
        ],
        [
        'ten'=> 'Xã Tịnh Thọ',
        'loai'=> 3,
        'parent_id'=> 447
        ],
        [
        'ten'=> 'Xã Tịnh Trà',
        'loai'=> 3,
        'parent_id'=> 447
        ],
        [
        'ten'=> 'Xã Tịnh Phong',
        'loai'=> 3,
        'parent_id'=> 447
        ],
        [
        'ten'=> 'Xã Tịnh Hiệp',
        'loai'=> 3,
        'parent_id'=> 447
        ],
        [
        'ten'=> 'Xã Tịnh Bình',
        'loai'=> 3,
        'parent_id'=> 447
        ],
        [
        'ten'=> 'Xã Tịnh Đông',
        'loai'=> 3,
        'parent_id'=> 447
        ],
        [
        'ten'=> 'Xã Tịnh Bắc',
        'loai'=> 3,
        'parent_id'=> 447
        ],
        [
        'ten'=> 'Xã Tịnh Sơn',
        'loai'=> 3,
        'parent_id'=> 447
        ],
        [
        'ten'=> 'Xã Tịnh Hà',
        'loai'=> 3,
        'parent_id'=> 447
        ],
        [
        'ten'=> 'Xã Tịnh Giang',
        'loai'=> 3,
        'parent_id'=> 447
        ],
        [
        'ten'=> 'Xã Tịnh Minh',
        'loai'=> 3,
        'parent_id'=> 447
        ],
        [
        'ten'=> 'Thị trấn La Hà',
        'loai'=> 3,
        'parent_id'=> 448
        ],
        [
        'ten'=> 'Thị trấn Sông Vệ',
        'loai'=> 3,
        'parent_id'=> 448
        ],
        [
        'ten'=> 'Xã Nghĩa Lâm',
        'loai'=> 3,
        'parent_id'=> 448
        ],
        [
        'ten'=> 'Xã Nghĩa Thắng',
        'loai'=> 3,
        'parent_id'=> 448
        ],
        [
        'ten'=> 'Xã Nghĩa Thuận',
        'loai'=> 3,
        'parent_id'=> 448
        ],
        [
        'ten'=> 'Xã Nghĩa Kỳ',
        'loai'=> 3,
        'parent_id'=> 448
        ],
        [
        'ten'=> 'Xã Nghĩa Sơn',
        'loai'=> 3,
        'parent_id'=> 448
        ],
        [
        'ten'=> 'Xã Nghĩa Hòa',
        'loai'=> 3,
        'parent_id'=> 448
        ],
        [
        'ten'=> 'Xã Nghĩa Điền',
        'loai'=> 3,
        'parent_id'=> 448
        ],
        [
        'ten'=> 'Xã Nghĩa Thương',
        'loai'=> 3,
        'parent_id'=> 448
        ],
        [
        'ten'=> 'Xã Nghĩa Trung',
        'loai'=> 3,
        'parent_id'=> 448
        ],
        [
        'ten'=> 'Xã Nghĩa Hiệp',
        'loai'=> 3,
        'parent_id'=> 448
        ],
        [
        'ten'=> 'Xã Nghĩa Phương',
        'loai'=> 3,
        'parent_id'=> 448
        ],
        [
        'ten'=> 'Xã Nghĩa Mỹ',
        'loai'=> 3,
        'parent_id'=> 448
        ],
        [
        'ten'=> 'Thị trấn Di Lăng',
        'loai'=> 3,
        'parent_id'=> 449
        ],
        [
        'ten'=> 'Xã Sơn Hạ',
        'loai'=> 3,
        'parent_id'=> 449
        ],
        [
        'ten'=> 'Xã Sơn Thành',
        'loai'=> 3,
        'parent_id'=> 449
        ],
        [
        'ten'=> 'Xã Sơn Nham',
        'loai'=> 3,
        'parent_id'=> 449
        ],
        [
        'ten'=> 'Xã Sơn Bao',
        'loai'=> 3,
        'parent_id'=> 449
        ],
        [
        'ten'=> 'Xã Sơn Linh',
        'loai'=> 3,
        'parent_id'=> 449
        ],
        [
        'ten'=> 'Xã Sơn Giang',
        'loai'=> 3,
        'parent_id'=> 449
        ],
        [
        'ten'=> 'Xã Sơn Trung',
        'loai'=> 3,
        'parent_id'=> 449
        ],
        [
        'ten'=> 'Xã Sơn Thượng',
        'loai'=> 3,
        'parent_id'=> 449
        ],
        [
        'ten'=> 'Xã Sơn Cao',
        'loai'=> 3,
        'parent_id'=> 449
        ],
        [
        'ten'=> 'Xã Sơn Hải',
        'loai'=> 3,
        'parent_id'=> 449
        ],
        [
        'ten'=> 'Xã Sơn Thủy',
        'loai'=> 3,
        'parent_id'=> 449
        ],
        [
        'ten'=> 'Xã Sơn Kỳ',
        'loai'=> 3,
        'parent_id'=> 449
        ],
        [
        'ten'=> 'Xã Sơn Ba',
        'loai'=> 3,
        'parent_id'=> 449
        ],
        [
        'ten'=> 'Xã Sơn Bua',
        'loai'=> 3,
        'parent_id'=> 450
        ],
        [
        'ten'=> 'Xã Sơn Mùa',
        'loai'=> 3,
        'parent_id'=> 450
        ],
        [
        'ten'=> 'Xã Sơn Liên',
        'loai'=> 3,
        'parent_id'=> 450
        ],
        [
        'ten'=> 'Xã Sơn Tân',
        'loai'=> 3,
        'parent_id'=> 450
        ],
        [
        'ten'=> 'Xã Sơn Màu',
        'loai'=> 3,
        'parent_id'=> 450
        ],
        [
        'ten'=> 'Xã Sơn Dung',
        'loai'=> 3,
        'parent_id'=> 450
        ],
        [
        'ten'=> 'Xã Sơn Long',
        'loai'=> 3,
        'parent_id'=> 450
        ],
        [
        'ten'=> 'Xã Sơn Tinh',
        'loai'=> 3,
        'parent_id'=> 450
        ],
        [
        'ten'=> 'Xã Sơn Lập',
        'loai'=> 3,
        'parent_id'=> 450
        ],
        [
        'ten'=> 'Xã Long Sơn',
        'loai'=> 3,
        'parent_id'=> 451
        ],
        [
        'ten'=> 'Xã Long Mai',
        'loai'=> 3,
        'parent_id'=> 451
        ],
        [
        'ten'=> 'Xã Thanh An',
        'loai'=> 3,
        'parent_id'=> 451
        ],
        [
        'ten'=> 'Xã Long Môn',
        'loai'=> 3,
        'parent_id'=> 451
        ],
        [
        'ten'=> 'Xã Long Hiệp',
        'loai'=> 3,
        'parent_id'=> 451
        ],
        [
        'ten'=> 'Thị trấn Chợ Chùa',
        'loai'=> 3,
        'parent_id'=> 452
        ],
        [
        'ten'=> 'Xã Hành Thuận',
        'loai'=> 3,
        'parent_id'=> 452
        ],
        [
        'ten'=> 'Xã Hành Dũng',
        'loai'=> 3,
        'parent_id'=> 452
        ],
        [
        'ten'=> 'Xã Hành Trung',
        'loai'=> 3,
        'parent_id'=> 452
        ],
        [
        'ten'=> 'Xã Hành Nhân',
        'loai'=> 3,
        'parent_id'=> 452
        ],
        [
        'ten'=> 'Xã Hành Đức',
        'loai'=> 3,
        'parent_id'=> 452
        ],
        [
        'ten'=> 'Xã Hành Minh',
        'loai'=> 3,
        'parent_id'=> 452
        ],
        [
        'ten'=> 'Xã Hành Phước',
        'loai'=> 3,
        'parent_id'=> 452
        ],
        [
        'ten'=> 'Xã Hành Thiện',
        'loai'=> 3,
        'parent_id'=> 452
        ],
        [
        'ten'=> 'Xã Hành Thịnh',
        'loai'=> 3,
        'parent_id'=> 452
        ],
        [
        'ten'=> 'Xã Hành Tín Tây',
        'loai'=> 3,
        'parent_id'=> 452
        ],
        [
        'ten'=> 'Xã Hành Tín  Đông',
        'loai'=> 3,
        'parent_id'=> 452
        ],
        [
        'ten'=> 'Thị trấn Mộ Đức',
        'loai'=> 3,
        'parent_id'=> 453
        ],
        [
        'ten'=> 'Xã Đức Lợi',
        'loai'=> 3,
        'parent_id'=> 453
        ],
        [
        'ten'=> 'Xã Đức Thắng',
        'loai'=> 3,
        'parent_id'=> 453
        ],
        [
        'ten'=> 'Xã Đức Nhuận',
        'loai'=> 3,
        'parent_id'=> 453
        ],
        [
        'ten'=> 'Xã Đức Chánh',
        'loai'=> 3,
        'parent_id'=> 453
        ],
        [
        'ten'=> 'Xã Đức Hiệp',
        'loai'=> 3,
        'parent_id'=> 453
        ],
        [
        'ten'=> 'Xã Đức Minh',
        'loai'=> 3,
        'parent_id'=> 453
        ],
        [
        'ten'=> 'Xã Đức Thạnh',
        'loai'=> 3,
        'parent_id'=> 453
        ],
        [
        'ten'=> 'Xã Đức Hòa',
        'loai'=> 3,
        'parent_id'=> 453
        ],
        [
        'ten'=> 'Xã Đức Tân',
        'loai'=> 3,
        'parent_id'=> 453
        ],
        [
        'ten'=> 'Xã Đức Phú',
        'loai'=> 3,
        'parent_id'=> 453
        ],
        [
        'ten'=> 'Xã Đức Phong',
        'loai'=> 3,
        'parent_id'=> 453
        ],
        [
        'ten'=> 'Xã Đức Lân',
        'loai'=> 3,
        'parent_id'=> 453
        ],
        [
        'ten'=> 'Phường Nguyễn Nghiêm',
        'loai'=> 3,
        'parent_id'=> 454
        ],
        [
        'ten'=> 'Xã Phổ An',
        'loai'=> 3,
        'parent_id'=> 454
        ],
        [
        'ten'=> 'Xã Phổ Phong',
        'loai'=> 3,
        'parent_id'=> 454
        ],
        [
        'ten'=> 'Xã Phổ Thuận',
        'loai'=> 3,
        'parent_id'=> 454
        ],
        [
        'ten'=> 'Phường Phổ Văn',
        'loai'=> 3,
        'parent_id'=> 454
        ],
        [
        'ten'=> 'Phường Phổ Quang',
        'loai'=> 3,
        'parent_id'=> 454
        ],
        [
        'ten'=> 'Xã Phổ Nhơn',
        'loai'=> 3,
        'parent_id'=> 454
        ],
        [
        'ten'=> 'Phường Phổ Ninh',
        'loai'=> 3,
        'parent_id'=> 454
        ],
        [
        'ten'=> 'Phường Phổ Minh',
        'loai'=> 3,
        'parent_id'=> 454
        ],
        [
        'ten'=> 'Phường Phổ Vinh',
        'loai'=> 3,
        'parent_id'=> 454
        ],
        [
        'ten'=> 'Phường Phổ Hòa',
        'loai'=> 3,
        'parent_id'=> 454
        ],
        [
        'ten'=> 'Xã Phổ Cường',
        'loai'=> 3,
        'parent_id'=> 454
        ],
        [
        'ten'=> 'Xã Phổ Khánh',
        'loai'=> 3,
        'parent_id'=> 454
        ],
        [
        'ten'=> 'Phường Phổ Thạnh',
        'loai'=> 3,
        'parent_id'=> 454
        ],
        [
        'ten'=> 'Xã Phổ Châu',
        'loai'=> 3,
        'parent_id'=> 454
        ],
        [
        'ten'=> 'Thị trấn Ba Tơ',
        'loai'=> 3,
        'parent_id'=> 455
        ],
        [
        'ten'=> 'Xã Ba Điền',
        'loai'=> 3,
        'parent_id'=> 455
        ],
        [
        'ten'=> 'Xã Ba Vinh',
        'loai'=> 3,
        'parent_id'=> 455
        ],
        [
        'ten'=> 'Xã Ba Thành',
        'loai'=> 3,
        'parent_id'=> 455
        ],
        [
        'ten'=> 'Xã Ba Động',
        'loai'=> 3,
        'parent_id'=> 455
        ],
        [
        'ten'=> 'Xã Ba Dinh',
        'loai'=> 3,
        'parent_id'=> 455
        ],
        [
        'ten'=> 'Xã Ba Giang',
        'loai'=> 3,
        'parent_id'=> 455
        ],
        [
        'ten'=> 'Xã Ba Liên',
        'loai'=> 3,
        'parent_id'=> 455
        ],
        [
        'ten'=> 'Xã Ba Ngạc',
        'loai'=> 3,
        'parent_id'=> 455
        ],
        [
        'ten'=> 'Xã Ba Khâm',
        'loai'=> 3,
        'parent_id'=> 455
        ],
        [
        'ten'=> 'Xã Ba Cung',
        'loai'=> 3,
        'parent_id'=> 455
        ],
        [
        'ten'=> 'Xã Ba Tiêu',
        'loai'=> 3,
        'parent_id'=> 455
        ],
        [
        'ten'=> 'Xã Ba Trang',
        'loai'=> 3,
        'parent_id'=> 455
        ],
        [
        'ten'=> 'Xã Ba Tô',
        'loai'=> 3,
        'parent_id'=> 455
        ],
        [
        'ten'=> 'Xã Ba Bích',
        'loai'=> 3,
        'parent_id'=> 455
        ],
        [
        'ten'=> 'Xã Ba Vì',
        'loai'=> 3,
        'parent_id'=> 455
        ],
        [
        'ten'=> 'Xã Ba Lế',
        'loai'=> 3,
        'parent_id'=> 455
        ],
        [
        'ten'=> 'Xã Ba Nam',
        'loai'=> 3,
        'parent_id'=> 455
        ],
        [
        'ten'=> 'Xã Ba Xa',
        'loai'=> 3,
        'parent_id'=> 455
        ],
        [
        'ten'=> 'Phường Nhơn Bình',
        'loai'=> 3,
        'parent_id'=> 457
        ],
        [
        'ten'=> 'Phường Nhơn Phú',
        'loai'=> 3,
        'parent_id'=> 457
        ],
        [
        'ten'=> 'Phường Đống Đa',
        'loai'=> 3,
        'parent_id'=> 457
        ],
        [
        'ten'=> 'Phường Trần Quang Diệu',
        'loai'=> 3,
        'parent_id'=> 457
        ],
        [
        'ten'=> 'Phường Hải Cảng',
        'loai'=> 3,
        'parent_id'=> 457
        ],
        [
        'ten'=> 'Phường Quang Trung',
        'loai'=> 3,
        'parent_id'=> 457
        ],
        [
        'ten'=> 'Phường Thị Nại',
        'loai'=> 3,
        'parent_id'=> 457
        ],
        [
        'ten'=> 'Phường Lê Hồng Phong',
        'loai'=> 3,
        'parent_id'=> 457
        ],
        [
        'ten'=> 'Phường Trần Hưng Đạo',
        'loai'=> 3,
        'parent_id'=> 457
        ],
        [
        'ten'=> 'Phường Ngô Mây',
        'loai'=> 3,
        'parent_id'=> 457
        ],
        [
        'ten'=> 'Phường Lý Thường Kiệt',
        'loai'=> 3,
        'parent_id'=> 457
        ],
        [
        'ten'=> 'Phường Lê Lợi',
        'loai'=> 3,
        'parent_id'=> 457
        ],
        [
        'ten'=> 'Phường Trần Phú',
        'loai'=> 3,
        'parent_id'=> 457
        ],
        [
        'ten'=> 'Phường Bùi Thị Xuân',
        'loai'=> 3,
        'parent_id'=> 457
        ],
        [
        'ten'=> 'Phường Nguyễn Văn Cừ',
        'loai'=> 3,
        'parent_id'=> 457
        ],
        [
        'ten'=> 'Phường Ghềnh Ráng',
        'loai'=> 3,
        'parent_id'=> 457
        ],
        [
        'ten'=> 'Xã Nhơn Lý',
        'loai'=> 3,
        'parent_id'=> 457
        ],
        [
        'ten'=> 'Xã Nhơn Hội',
        'loai'=> 3,
        'parent_id'=> 457
        ],
        [
        'ten'=> 'Xã Nhơn Hải',
        'loai'=> 3,
        'parent_id'=> 457
        ],
        [
        'ten'=> 'Xã Nhơn Châu',
        'loai'=> 3,
        'parent_id'=> 457
        ],
        [
        'ten'=> 'Xã Phước Mỹ',
        'loai'=> 3,
        'parent_id'=> 457
        ],
        [
        'ten'=> 'Thị trấn An Lão',
        'loai'=> 3,
        'parent_id'=> 282
        ],
        [
        'ten'=> 'Xã An Hưng',
        'loai'=> 3,
        'parent_id'=> 282
        ],
        [
        'ten'=> 'Xã An Trung',
        'loai'=> 3,
        'parent_id'=> 282
        ],
        [
        'ten'=> 'Xã An Dũng',
        'loai'=> 3,
        'parent_id'=> 282
        ],
        [
        'ten'=> 'Xã An Vinh',
        'loai'=> 3,
        'parent_id'=> 282
        ],
        [
        'ten'=> 'Xã An Toàn',
        'loai'=> 3,
        'parent_id'=> 282
        ],
        [
        'ten'=> 'Xã An Tân',
        'loai'=> 3,
        'parent_id'=> 282
        ],
        [
        'ten'=> 'Xã An Hòa',
        'loai'=> 3,
        'parent_id'=> 282
        ],
        [
        'ten'=> 'Xã An Quang',
        'loai'=> 3,
        'parent_id'=> 282
        ],
        [
        'ten'=> 'Xã An Nghĩa',
        'loai'=> 3,
        'parent_id'=> 282
        ],
        [
        'ten'=> 'Phường Tam Quan',
        'loai'=> 3,
        'parent_id'=> 459
        ],
        [
        'ten'=> 'Phường Bồng Sơn',
        'loai'=> 3,
        'parent_id'=> 459
        ],
        [
        'ten'=> 'Xã Hoài Sơn',
        'loai'=> 3,
        'parent_id'=> 459
        ],
        [
        'ten'=> 'Xã Hoài Châu Bắc',
        'loai'=> 3,
        'parent_id'=> 459
        ],
        [
        'ten'=> 'Xã Hoài Châu',
        'loai'=> 3,
        'parent_id'=> 459
        ],
        [
        'ten'=> 'Xã Hoài Phú',
        'loai'=> 3,
        'parent_id'=> 459
        ],
        [
        'ten'=> 'Phường Tam Quan Bắc',
        'loai'=> 3,
        'parent_id'=> 459
        ],
        [
        'ten'=> 'Phường Tam Quan Nam',
        'loai'=> 3,
        'parent_id'=> 459
        ],
        [
        'ten'=> 'Phường Hoài Hảo',
        'loai'=> 3,
        'parent_id'=> 459
        ],
        [
        'ten'=> 'Phường Hoài Thanh Tây',
        'loai'=> 3,
        'parent_id'=> 459
        ],
        [
        'ten'=> 'Phường Hoài Thanh',
        'loai'=> 3,
        'parent_id'=> 459
        ],
        [
        'ten'=> 'Phường Hoài Hương',
        'loai'=> 3,
        'parent_id'=> 459
        ],
        [
        'ten'=> 'Phường Hoài Tân',
        'loai'=> 3,
        'parent_id'=> 459
        ],
        [
        'ten'=> 'Xã Hoài Hải',
        'loai'=> 3,
        'parent_id'=> 459
        ],
        [
        'ten'=> 'Phường Hoài Xuân',
        'loai'=> 3,
        'parent_id'=> 459
        ],
        [
        'ten'=> 'Xã Hoài Mỹ',
        'loai'=> 3,
        'parent_id'=> 459
        ],
        [
        'ten'=> 'Phường Hoài Đức',
        'loai'=> 3,
        'parent_id'=> 459
        ],
        [
        'ten'=> 'Thị trấn Tăng Bạt Hổ',
        'loai'=> 3,
        'parent_id'=> 460
        ],
        [
        'ten'=> 'Xã Ân Hảo Tây',
        'loai'=> 3,
        'parent_id'=> 460
        ],
        [
        'ten'=> 'Xã Ân Hảo Đông',
        'loai'=> 3,
        'parent_id'=> 460
        ],
        [
        'ten'=> 'Xã Ân Sơn',
        'loai'=> 3,
        'parent_id'=> 460
        ],
        [
        'ten'=> 'Xã Ân Mỹ',
        'loai'=> 3,
        'parent_id'=> 460
        ],
        [
        'ten'=> 'Xã Đak Mang',
        'loai'=> 3,
        'parent_id'=> 460
        ],
        [
        'ten'=> 'Xã Ân Tín',
        'loai'=> 3,
        'parent_id'=> 460
        ],
        [
        'ten'=> 'Xã Ân Thạnh',
        'loai'=> 3,
        'parent_id'=> 460
        ],
        [
        'ten'=> 'Xã Ân Phong',
        'loai'=> 3,
        'parent_id'=> 460
        ],
        [
        'ten'=> 'Xã Ân Đức',
        'loai'=> 3,
        'parent_id'=> 460
        ],
        [
        'ten'=> 'Xã Ân Hữu',
        'loai'=> 3,
        'parent_id'=> 460
        ],
        [
        'ten'=> 'Xã Bok Tới',
        'loai'=> 3,
        'parent_id'=> 460
        ],
        [
        'ten'=> 'Xã Ân Tường Tây',
        'loai'=> 3,
        'parent_id'=> 460
        ],
        [
        'ten'=> 'Xã Ân Tường Đông',
        'loai'=> 3,
        'parent_id'=> 460
        ],
        [
        'ten'=> 'Xã Ân Nghĩa',
        'loai'=> 3,
        'parent_id'=> 460
        ],
        [
        'ten'=> 'Thị trấn Phù Mỹ',
        'loai'=> 3,
        'parent_id'=> 461
        ],
        [
        'ten'=> 'Thị trấn Bình Dương',
        'loai'=> 3,
        'parent_id'=> 461
        ],
        [
        'ten'=> 'Xã Mỹ Đức',
        'loai'=> 3,
        'parent_id'=> 461
        ],
        [
        'ten'=> 'Xã Mỹ Châu',
        'loai'=> 3,
        'parent_id'=> 461
        ],
        [
        'ten'=> 'Xã Mỹ Thắng',
        'loai'=> 3,
        'parent_id'=> 461
        ],
        [
        'ten'=> 'Xã Mỹ Lộc',
        'loai'=> 3,
        'parent_id'=> 461
        ],
        [
        'ten'=> 'Xã Mỹ Lợi',
        'loai'=> 3,
        'parent_id'=> 461
        ],
        [
        'ten'=> 'Xã Mỹ An',
        'loai'=> 3,
        'parent_id'=> 461
        ],
        [
        'ten'=> 'Xã Mỹ Phong',
        'loai'=> 3,
        'parent_id'=> 461
        ],
        [
        'ten'=> 'Xã Mỹ Trinh',
        'loai'=> 3,
        'parent_id'=> 461
        ],
        [
        'ten'=> 'Xã Mỹ Thọ',
        'loai'=> 3,
        'parent_id'=> 461
        ],
        [
        'ten'=> 'Xã Mỹ Hòa',
        'loai'=> 3,
        'parent_id'=> 461
        ],
        [
        'ten'=> 'Xã Mỹ Thành',
        'loai'=> 3,
        'parent_id'=> 461
        ],
        [
        'ten'=> 'Xã Mỹ Chánh',
        'loai'=> 3,
        'parent_id'=> 461
        ],
        [
        'ten'=> 'Xã Mỹ Quang',
        'loai'=> 3,
        'parent_id'=> 461
        ],
        [
        'ten'=> 'Xã Mỹ Hiệp',
        'loai'=> 3,
        'parent_id'=> 461
        ],
        [
        'ten'=> 'Xã Mỹ Tài',
        'loai'=> 3,
        'parent_id'=> 461
        ],
        [
        'ten'=> 'Xã Mỹ Cát',
        'loai'=> 3,
        'parent_id'=> 461
        ],
        [
        'ten'=> 'Xã Mỹ Chánh Tây',
        'loai'=> 3,
        'parent_id'=> 461
        ],
        [
        'ten'=> 'Thị trấn Vĩnh Thạnh',
        'loai'=> 3,
        'parent_id'=> 462
        ],
        [
        'ten'=> 'Xã Vĩnh Sơn',
        'loai'=> 3,
        'parent_id'=> 462
        ],
        [
        'ten'=> 'Xã Vĩnh Kim',
        'loai'=> 3,
        'parent_id'=> 462
        ],
        [
        'ten'=> 'Xã Vĩnh Hiệp',
        'loai'=> 3,
        'parent_id'=> 462
        ],
        [
        'ten'=> 'Xã Vĩnh Hảo',
        'loai'=> 3,
        'parent_id'=> 462
        ],
        [
        'ten'=> 'Xã Vĩnh Hòa',
        'loai'=> 3,
        'parent_id'=> 462
        ],
        [
        'ten'=> 'Xã Vĩnh Thịnh',
        'loai'=> 3,
        'parent_id'=> 462
        ],
        [
        'ten'=> 'Xã Vĩnh Thuận',
        'loai'=> 3,
        'parent_id'=> 462
        ],
        [
        'ten'=> 'Xã Vĩnh Quang',
        'loai'=> 3,
        'parent_id'=> 462
        ],
        [
        'ten'=> 'Thị trấn Phú Phong',
        'loai'=> 3,
        'parent_id'=> 463
        ],
        [
        'ten'=> 'Xã Bình Tân',
        'loai'=> 3,
        'parent_id'=> 463
        ],
        [
        'ten'=> 'Xã Tây Thuận',
        'loai'=> 3,
        'parent_id'=> 463
        ],
        [
        'ten'=> 'Xã Bình Thuận',
        'loai'=> 3,
        'parent_id'=> 463
        ],
        [
        'ten'=> 'Xã Tây Giang',
        'loai'=> 3,
        'parent_id'=> 463
        ],
        [
        'ten'=> 'Xã Bình Thành',
        'loai'=> 3,
        'parent_id'=> 463
        ],
        [
        'ten'=> 'Xã Tây An',
        'loai'=> 3,
        'parent_id'=> 463
        ],
        [
        'ten'=> 'Xã Bình Hòa',
        'loai'=> 3,
        'parent_id'=> 463
        ],
        [
        'ten'=> 'Xã Tây Bình',
        'loai'=> 3,
        'parent_id'=> 463
        ],
        [
        'ten'=> 'Xã Bình Tường',
        'loai'=> 3,
        'parent_id'=> 463
        ],
        [
        'ten'=> 'Xã Tây Vinh',
        'loai'=> 3,
        'parent_id'=> 463
        ],
        [
        'ten'=> 'Xã Vĩnh An',
        'loai'=> 3,
        'parent_id'=> 463
        ],
        [
        'ten'=> 'Xã Tây Xuân',
        'loai'=> 3,
        'parent_id'=> 463
        ],
        [
        'ten'=> 'Xã Bình Nghi',
        'loai'=> 3,
        'parent_id'=> 463
        ],
        [
        'ten'=> 'Xã Tây Phú',
        'loai'=> 3,
        'parent_id'=> 463
        ],
        [
        'ten'=> 'Thị trấn Ngô Mây',
        'loai'=> 3,
        'parent_id'=> 464
        ],
        [
        'ten'=> 'Xã Cát Sơn',
        'loai'=> 3,
        'parent_id'=> 464
        ],
        [
        'ten'=> 'Xã Cát Minh',
        'loai'=> 3,
        'parent_id'=> 464
        ],
        [
        'ten'=> 'Xã Cát Khánh',
        'loai'=> 3,
        'parent_id'=> 464
        ],
        [
        'ten'=> 'Xã Cát Tài',
        'loai'=> 3,
        'parent_id'=> 464
        ],
        [
        'ten'=> 'Xã Cát Lâm',
        'loai'=> 3,
        'parent_id'=> 464
        ],
        [
        'ten'=> 'Xã Cát Hanh',
        'loai'=> 3,
        'parent_id'=> 464
        ],
        [
        'ten'=> 'Xã Cát Thành',
        'loai'=> 3,
        'parent_id'=> 464
        ],
        [
        'ten'=> 'Xã Cát Trinh',
        'loai'=> 3,
        'parent_id'=> 464
        ],
        [
        'ten'=> 'Xã Cát Hải',
        'loai'=> 3,
        'parent_id'=> 464
        ],
        [
        'ten'=> 'Xã Cát Hiệp',
        'loai'=> 3,
        'parent_id'=> 464
        ],
        [
        'ten'=> 'Xã Cát Nhơn',
        'loai'=> 3,
        'parent_id'=> 464
        ],
        [
        'ten'=> 'Xã Cát Hưng',
        'loai'=> 3,
        'parent_id'=> 464
        ],
        [
        'ten'=> 'Xã Cát Tường',
        'loai'=> 3,
        'parent_id'=> 464
        ],
        [
        'ten'=> 'Xã Cát Tân',
        'loai'=> 3,
        'parent_id'=> 464
        ],
        [
        'ten'=> 'Thị trấn Cát Tiến',
        'loai'=> 3,
        'parent_id'=> 464
        ],
        [
        'ten'=> 'Xã Cát Thắng',
        'loai'=> 3,
        'parent_id'=> 464
        ],
        [
        'ten'=> 'Xã Cát Chánh',
        'loai'=> 3,
        'parent_id'=> 464
        ],
        [
        'ten'=> 'Phường Bình Định',
        'loai'=> 3,
        'parent_id'=> 465
        ],
        [
        'ten'=> 'Phường Đập Đá',
        'loai'=> 3,
        'parent_id'=> 465
        ],
        [
        'ten'=> 'Xã Nhơn Mỹ',
        'loai'=> 3,
        'parent_id'=> 465
        ],
        [
        'ten'=> 'Phường Nhơn Thành',
        'loai'=> 3,
        'parent_id'=> 465
        ],
        [
        'ten'=> 'Xã Nhơn Hạnh',
        'loai'=> 3,
        'parent_id'=> 465
        ],
        [
        'ten'=> 'Xã Nhơn Hậu',
        'loai'=> 3,
        'parent_id'=> 465
        ],
        [
        'ten'=> 'Xã Nhơn Phong',
        'loai'=> 3,
        'parent_id'=> 465
        ],
        [
        'ten'=> 'Xã Nhơn An',
        'loai'=> 3,
        'parent_id'=> 465
        ],
        [
        'ten'=> 'Xã Nhơn Phúc',
        'loai'=> 3,
        'parent_id'=> 465
        ],
        [
        'ten'=> 'Phường Nhơn Hưng',
        'loai'=> 3,
        'parent_id'=> 465
        ],
        [
        'ten'=> 'Xã Nhơn Khánh',
        'loai'=> 3,
        'parent_id'=> 465
        ],
        [
        'ten'=> 'Xã Nhơn Lộc',
        'loai'=> 3,
        'parent_id'=> 465
        ],
        [
        'ten'=> 'Phường Nhơn Hoà',
        'loai'=> 3,
        'parent_id'=> 465
        ],
        [
        'ten'=> 'Xã Nhơn Tân',
        'loai'=> 3,
        'parent_id'=> 465
        ],
        [
        'ten'=> 'Xã Nhơn Thọ',
        'loai'=> 3,
        'parent_id'=> 465
        ],
        [
        'ten'=> 'Thị trấn Tuy Phước',
        'loai'=> 3,
        'parent_id'=> 466
        ],
        [
        'ten'=> 'Thị trấn Diêu Trì',
        'loai'=> 3,
        'parent_id'=> 466
        ],
        [
        'ten'=> 'Xã Phước Thắng',
        'loai'=> 3,
        'parent_id'=> 466
        ],
        [
        'ten'=> 'Xã Phước Hưng',
        'loai'=> 3,
        'parent_id'=> 466
        ],
        [
        'ten'=> 'Xã Phước Quang',
        'loai'=> 3,
        'parent_id'=> 466
        ],
        [
        'ten'=> 'Xã Phước Hòa',
        'loai'=> 3,
        'parent_id'=> 466
        ],
        [
        'ten'=> 'Xã Phước Sơn',
        'loai'=> 3,
        'parent_id'=> 466
        ],
        [
        'ten'=> 'Xã Phước Hiệp',
        'loai'=> 3,
        'parent_id'=> 466
        ],
        [
        'ten'=> 'Xã Phước Lộc',
        'loai'=> 3,
        'parent_id'=> 466
        ],
        [
        'ten'=> 'Xã Phước Nghĩa',
        'loai'=> 3,
        'parent_id'=> 466
        ],
        [
        'ten'=> 'Xã Phước Thuận',
        'loai'=> 3,
        'parent_id'=> 466
        ],
        [
        'ten'=> 'Xã Phước An',
        'loai'=> 3,
        'parent_id'=> 466
        ],
        [
        'ten'=> 'Xã Phước Thành',
        'loai'=> 3,
        'parent_id'=> 466
        ],
        [
        'ten'=> 'Thị trấn Vân Canh',
        'loai'=> 3,
        'parent_id'=> 467
        ],
        [
        'ten'=> 'Xã Canh Liên',
        'loai'=> 3,
        'parent_id'=> 467
        ],
        [
        'ten'=> 'Xã Canh Hiệp',
        'loai'=> 3,
        'parent_id'=> 467
        ],
        [
        'ten'=> 'Xã Canh Vinh',
        'loai'=> 3,
        'parent_id'=> 467
        ],
        [
        'ten'=> 'Xã Canh Hiển',
        'loai'=> 3,
        'parent_id'=> 467
        ],
        [
        'ten'=> 'Xã Canh Thuận',
        'loai'=> 3,
        'parent_id'=> 467
        ],
        [
        'ten'=> 'Xã Canh Hòa',
        'loai'=> 3,
        'parent_id'=> 467
        ],
        [
        'ten'=> 'Phường 1',
        'loai'=> 3,
        'parent_id'=> 468
        ],
        [
        'ten'=> 'Phường 8',
        'loai'=> 3,
        'parent_id'=> 468
        ],
        [
        'ten'=> 'Phường 2',
        'loai'=> 3,
        'parent_id'=> 468
        ],
        [
        'ten'=> 'Phường 9',
        'loai'=> 3,
        'parent_id'=> 468
        ],
        [
        'ten'=> 'Phường 3',
        'loai'=> 3,
        'parent_id'=> 468
        ],
        [
        'ten'=> 'Phường 4',
        'loai'=> 3,
        'parent_id'=> 468
        ],
        [
        'ten'=> 'Phường 5',
        'loai'=> 3,
        'parent_id'=> 468
        ],
        [
        'ten'=> 'Phường 7',
        'loai'=> 3,
        'parent_id'=> 468
        ],
        [
        'ten'=> 'Phường 6',
        'loai'=> 3,
        'parent_id'=> 468
        ],
        [
        'ten'=> 'Phường Phú Thạnh',
        'loai'=> 3,
        'parent_id'=> 468
        ],
        [
        'ten'=> 'Phường Phú Đông',
        'loai'=> 3,
        'parent_id'=> 468
        ],
        [
        'ten'=> 'Xã Hòa Kiến',
        'loai'=> 3,
        'parent_id'=> 468
        ],
        [
        'ten'=> 'Xã Bình Kiến',
        'loai'=> 3,
        'parent_id'=> 468
        ],
        [
        'ten'=> 'Xã Bình Ngọc',
        'loai'=> 3,
        'parent_id'=> 468
        ],
        [
        'ten'=> 'Xã An Phú',
        'loai'=> 3,
        'parent_id'=> 468
        ],
        [
        'ten'=> 'Phường Phú Lâm',
        'loai'=> 3,
        'parent_id'=> 468
        ],
        [
        'ten'=> 'Phường Xuân Phú',
        'loai'=> 3,
        'parent_id'=> 469
        ],
        [
        'ten'=> 'Xã Xuân Lâm',
        'loai'=> 3,
        'parent_id'=> 469
        ],
        [
        'ten'=> 'Phường Xuân Thành',
        'loai'=> 3,
        'parent_id'=> 469
        ],
        [
        'ten'=> 'Xã Xuân Hải',
        'loai'=> 3,
        'parent_id'=> 469
        ],
        [
        'ten'=> 'Xã Xuân Lộc',
        'loai'=> 3,
        'parent_id'=> 469
        ],
        [
        'ten'=> 'Xã Xuân Bình',
        'loai'=> 3,
        'parent_id'=> 469
        ],
        [
        'ten'=> 'Xã Xuân Cảnh',
        'loai'=> 3,
        'parent_id'=> 469
        ],
        [
        'ten'=> 'Xã Xuân Thịnh',
        'loai'=> 3,
        'parent_id'=> 469
        ],
        [
        'ten'=> 'Xã Xuân Phương',
        'loai'=> 3,
        'parent_id'=> 469
        ],
        [
        'ten'=> 'Phường Xuân Yên',
        'loai'=> 3,
        'parent_id'=> 469
        ],
        [
        'ten'=> 'Xã Xuân Thọ 1',
        'loai'=> 3,
        'parent_id'=> 469
        ],
        [
        'ten'=> 'Phường Xuân Đài',
        'loai'=> 3,
        'parent_id'=> 469
        ],
        [
        'ten'=> 'Xã Xuân Thọ 2',
        'loai'=> 3,
        'parent_id'=> 469
        ],
        [
        'ten'=> 'Thị trấn La Hai',
        'loai'=> 3,
        'parent_id'=> 470
        ],
        [
        'ten'=> 'Xã Đa Lộc',
        'loai'=> 3,
        'parent_id'=> 470
        ],
        [
        'ten'=> 'Xã Phú Mỡ',
        'loai'=> 3,
        'parent_id'=> 470
        ],
        [
        'ten'=> 'Xã Xuân Lãnh',
        'loai'=> 3,
        'parent_id'=> 470
        ],
        [
        'ten'=> 'Xã Xuân Long',
        'loai'=> 3,
        'parent_id'=> 470
        ],
        [
        'ten'=> 'Xã Xuân Quang 1',
        'loai'=> 3,
        'parent_id'=> 470
        ],
        [
        'ten'=> 'Xã Xuân Sơn Bắc',
        'loai'=> 3,
        'parent_id'=> 470
        ],
        [
        'ten'=> 'Xã Xuân Quang 2',
        'loai'=> 3,
        'parent_id'=> 470
        ],
        [
        'ten'=> 'Xã Xuân Sơn Nam',
        'loai'=> 3,
        'parent_id'=> 470
        ],
        [
        'ten'=> 'Xã Xuân Quang 3',
        'loai'=> 3,
        'parent_id'=> 470
        ],
        [
        'ten'=> 'Xã Xuân Phước',
        'loai'=> 3,
        'parent_id'=> 470
        ],
        [
        'ten'=> 'Thị trấn Chí Thạnh',
        'loai'=> 3,
        'parent_id'=> 471
        ],
        [
        'ten'=> 'Xã An Dân',
        'loai'=> 3,
        'parent_id'=> 471
        ],
        [
        'ten'=> 'Xã An Ninh Tây',
        'loai'=> 3,
        'parent_id'=> 471
        ],
        [
        'ten'=> 'Xã An Ninh Đông',
        'loai'=> 3,
        'parent_id'=> 471
        ],
        [
        'ten'=> 'Xã An Thạch',
        'loai'=> 3,
        'parent_id'=> 471
        ],
        [
        'ten'=> 'Xã An Định',
        'loai'=> 3,
        'parent_id'=> 471
        ],
        [
        'ten'=> 'Xã An Nghiệp',
        'loai'=> 3,
        'parent_id'=> 471
        ],
        [
        'ten'=> 'Xã An Cư',
        'loai'=> 3,
        'parent_id'=> 471
        ],
        [
        'ten'=> 'Xã An Xuân',
        'loai'=> 3,
        'parent_id'=> 471
        ],
        [
        'ten'=> 'Xã An Lĩnh',
        'loai'=> 3,
        'parent_id'=> 471
        ],
        [
        'ten'=> 'Xã An Hòa Hải',
        'loai'=> 3,
        'parent_id'=> 471
        ],
        [
        'ten'=> 'Xã An Hiệp',
        'loai'=> 3,
        'parent_id'=> 471
        ],
        [
        'ten'=> 'Xã An Mỹ',
        'loai'=> 3,
        'parent_id'=> 471
        ],
        [
        'ten'=> 'Xã An Chấn',
        'loai'=> 3,
        'parent_id'=> 471
        ],
        [
        'ten'=> 'Xã An Thọ',
        'loai'=> 3,
        'parent_id'=> 471
        ],
        [
        'ten'=> 'Thị trấn Củng Sơn',
        'loai'=> 3,
        'parent_id'=> 472
        ],
        [
        'ten'=> 'Xã Phước Tân',
        'loai'=> 3,
        'parent_id'=> 472
        ],
        [
        'ten'=> 'Xã Sơn Hội',
        'loai'=> 3,
        'parent_id'=> 472
        ],
        [
        'ten'=> 'Xã Sơn Định',
        'loai'=> 3,
        'parent_id'=> 472
        ],
        [
        'ten'=> 'Xã Sơn Long',
        'loai'=> 3,
        'parent_id'=> 472
        ],
        [
        'ten'=> 'Xã Cà Lúi',
        'loai'=> 3,
        'parent_id'=> 472
        ],
        [
        'ten'=> 'Xã Sơn Phước',
        'loai'=> 3,
        'parent_id'=> 472
        ],
        [
        'ten'=> 'Xã Sơn Xuân',
        'loai'=> 3,
        'parent_id'=> 472
        ],
        [
        'ten'=> 'Xã Sơn Nguyên',
        'loai'=> 3,
        'parent_id'=> 472
        ],
        [
        'ten'=> 'Xã Eachà Rang',
        'loai'=> 3,
        'parent_id'=> 472
        ],
        [
        'ten'=> 'Xã Krông Pa',
        'loai'=> 3,
        'parent_id'=> 472
        ],
        [
        'ten'=> 'Xã Suối Bạc',
        'loai'=> 3,
        'parent_id'=> 472
        ],
        [
        'ten'=> 'Xã Sơn Hà',
        'loai'=> 3,
        'parent_id'=> 472
        ],
        [
        'ten'=> 'Xã Suối Trai',
        'loai'=> 3,
        'parent_id'=> 472
        ],
        [
        'ten'=> 'Thị trấn Hai Riêng',
        'loai'=> 3,
        'parent_id'=> 473
        ],
        [
        'ten'=> 'Xã Ea Lâm',
        'loai'=> 3,
        'parent_id'=> 473
        ],
        [
        'ten'=> 'Xã Đức Bình Tây',
        'loai'=> 3,
        'parent_id'=> 473
        ],
        [
        'ten'=> 'Xã Ea Bá',
        'loai'=> 3,
        'parent_id'=> 473
        ],
        [
        'ten'=> 'Xã Sơn Giang',
        'loai'=> 3,
        'parent_id'=> 473
        ],
        [
        'ten'=> 'Xã Đức Bình Đông',
        'loai'=> 3,
        'parent_id'=> 473
        ],
        [
        'ten'=> 'Xã EaBar',
        'loai'=> 3,
        'parent_id'=> 473
        ],
        [
        'ten'=> 'Xã EaBia',
        'loai'=> 3,
        'parent_id'=> 473
        ],
        [
        'ten'=> 'Xã EaTrol',
        'loai'=> 3,
        'parent_id'=> 473
        ],
        [
        'ten'=> 'Xã Sông Hinh',
        'loai'=> 3,
        'parent_id'=> 473
        ],
        [
        'ten'=> 'Xã Ealy',
        'loai'=> 3,
        'parent_id'=> 473
        ],
        [
        'ten'=> 'Xã Sơn Thành Tây',
        'loai'=> 3,
        'parent_id'=> 474
        ],
        [
        'ten'=> 'Xã Sơn Thành Đông',
        'loai'=> 3,
        'parent_id'=> 474
        ],
        [
        'ten'=> 'Xã Hòa Bình 1',
        'loai'=> 3,
        'parent_id'=> 474
        ],
        [
        'ten'=> 'Thị trấn Phú Thứ',
        'loai'=> 3,
        'parent_id'=> 474
        ],
        [
        'ten'=> 'Xã Hòa Phong',
        'loai'=> 3,
        'parent_id'=> 474
        ],
        [
        'ten'=> 'Xã Hòa Phú',
        'loai'=> 3,
        'parent_id'=> 474
        ],
        [
        'ten'=> 'Xã Hòa Tân Tây',
        'loai'=> 3,
        'parent_id'=> 474
        ],
        [
        'ten'=> 'Xã Hòa Đồng',
        'loai'=> 3,
        'parent_id'=> 474
        ],
        [
        'ten'=> 'Xã Hòa Mỹ Đông',
        'loai'=> 3,
        'parent_id'=> 474
        ],
        [
        'ten'=> 'Xã Hòa Mỹ Tây',
        'loai'=> 3,
        'parent_id'=> 474
        ],
        [
        'ten'=> 'Xã Hòa Thịnh',
        'loai'=> 3,
        'parent_id'=> 474
        ],
        [
        'ten'=> 'Xã Hòa Quang Bắc',
        'loai'=> 3,
        'parent_id'=> 475
        ],
        [
        'ten'=> 'Xã Hòa Quang Nam',
        'loai'=> 3,
        'parent_id'=> 475
        ],
        [
        'ten'=> 'Xã Hòa Hội',
        'loai'=> 3,
        'parent_id'=> 475
        ],
        [
        'ten'=> 'Xã Hòa Trị',
        'loai'=> 3,
        'parent_id'=> 475
        ],
        [
        'ten'=> 'Xã Hòa An',
        'loai'=> 3,
        'parent_id'=> 475
        ],
        [
        'ten'=> 'Xã Hòa Định Đông',
        'loai'=> 3,
        'parent_id'=> 475
        ],
        [
        'ten'=> 'Thị Trấn Phú Hoà',
        'loai'=> 3,
        'parent_id'=> 475
        ],
        [
        'ten'=> 'Xã Hòa Định Tây',
        'loai'=> 3,
        'parent_id'=> 475
        ],
        [
        'ten'=> 'Xã Hòa Thắng',
        'loai'=> 3,
        'parent_id'=> 475
        ],
        [
        'ten'=> 'Xã Hòa Thành',
        'loai'=> 3,
        'parent_id'=> 476
        ],
        [
        'ten'=> 'Phường Hòa Hiệp Bắc',
        'loai'=> 3,
        'parent_id'=> 476
        ],
        [
        'ten'=> 'Phường Hoà Vinh',
        'loai'=> 3,
        'parent_id'=> 476
        ],
        [
        'ten'=> 'Phường Hoà Hiệp Trung',
        'loai'=> 3,
        'parent_id'=> 476
        ],
        [
        'ten'=> 'Xã Hòa Tân Đông',
        'loai'=> 3,
        'parent_id'=> 476
        ],
        [
        'ten'=> 'Phường Hòa Xuân Tây',
        'loai'=> 3,
        'parent_id'=> 476
        ],
        [
        'ten'=> 'Phường Hòa Hiệp Nam',
        'loai'=> 3,
        'parent_id'=> 476
        ],
        [
        'ten'=> 'Xã Hòa Xuân Đông',
        'loai'=> 3,
        'parent_id'=> 476
        ],
        [
        'ten'=> 'Xã Hòa Tâm',
        'loai'=> 3,
        'parent_id'=> 476
        ],
        [
        'ten'=> 'Xã Hòa Xuân Nam',
        'loai'=> 3,
        'parent_id'=> 476
        ],
        [
        'ten'=> 'Phường Vĩnh Hòa',
        'loai'=> 3,
        'parent_id'=> 477
        ],
        [
        'ten'=> 'Phường Vĩnh Hải',
        'loai'=> 3,
        'parent_id'=> 477
        ],
        [
        'ten'=> 'Phường Vĩnh Phước',
        'loai'=> 3,
        'parent_id'=> 477
        ],
        [
        'ten'=> 'Phường Ngọc Hiệp',
        'loai'=> 3,
        'parent_id'=> 477
        ],
        [
        'ten'=> 'Phường Vĩnh Thọ',
        'loai'=> 3,
        'parent_id'=> 477
        ],
        [
        'ten'=> 'Phường Xương Huân',
        'loai'=> 3,
        'parent_id'=> 477
        ],
        [
        'ten'=> 'Phường Vạn Thắng',
        'loai'=> 3,
        'parent_id'=> 477
        ],
        [
        'ten'=> 'Phường Vạn Thạnh',
        'loai'=> 3,
        'parent_id'=> 477
        ],
        [
        'ten'=> 'Phường Phương Sài',
        'loai'=> 3,
        'parent_id'=> 477
        ],
        [
        'ten'=> 'Phường Phương Sơn',
        'loai'=> 3,
        'parent_id'=> 477
        ],
        [
        'ten'=> 'Phường Phước Hải',
        'loai'=> 3,
        'parent_id'=> 477
        ],
        [
        'ten'=> 'Phường Phước Tân',
        'loai'=> 3,
        'parent_id'=> 477
        ],
        [
        'ten'=> 'Phường Lộc Thọ',
        'loai'=> 3,
        'parent_id'=> 477
        ],
        [
        'ten'=> 'Phường Phước Tiến',
        'loai'=> 3,
        'parent_id'=> 477
        ],
        [
        'ten'=> 'Phường Tân Lập',
        'loai'=> 3,
        'parent_id'=> 477
        ],
        [
        'ten'=> 'Phường Phước Hòa',
        'loai'=> 3,
        'parent_id'=> 477
        ],
        [
        'ten'=> 'Phường Vĩnh Nguyên',
        'loai'=> 3,
        'parent_id'=> 477
        ],
        [
        'ten'=> 'Phường Phước Long',
        'loai'=> 3,
        'parent_id'=> 477
        ],
        [
        'ten'=> 'Phường Vĩnh Trường',
        'loai'=> 3,
        'parent_id'=> 477
        ],
        [
        'ten'=> 'Xã Vĩnh Lương',
        'loai'=> 3,
        'parent_id'=> 477
        ],
        [
        'ten'=> 'Xã Vĩnh Phương',
        'loai'=> 3,
        'parent_id'=> 477
        ],
        [
        'ten'=> 'Xã Vĩnh Ngọc',
        'loai'=> 3,
        'parent_id'=> 477
        ],
        [
        'ten'=> 'Xã Vĩnh Thạnh',
        'loai'=> 3,
        'parent_id'=> 477
        ],
        [
        'ten'=> 'Xã Vĩnh Trung',
        'loai'=> 3,
        'parent_id'=> 477
        ],
        [
        'ten'=> 'Xã Vĩnh Hiệp',
        'loai'=> 3,
        'parent_id'=> 477
        ],
        [
        'ten'=> 'Xã Vĩnh Thái',
        'loai'=> 3,
        'parent_id'=> 477
        ],
        [
        'ten'=> 'Xã Phước Đồng',
        'loai'=> 3,
        'parent_id'=> 477
        ],
        [
        'ten'=> 'Phường Cam Nghĩa',
        'loai'=> 3,
        'parent_id'=> 478
        ],
        [
        'ten'=> 'Phường Cam Phúc Bắc',
        'loai'=> 3,
        'parent_id'=> 478
        ],
        [
        'ten'=> 'Phường Cam Phúc Nam',
        'loai'=> 3,
        'parent_id'=> 478
        ],
        [
        'ten'=> 'Phường Cam Lộc',
        'loai'=> 3,
        'parent_id'=> 478
        ],
        [
        'ten'=> 'Phường Cam Phú',
        'loai'=> 3,
        'parent_id'=> 478
        ],
        [
        'ten'=> 'Phường Ba Ngòi',
        'loai'=> 3,
        'parent_id'=> 478
        ],
        [
        'ten'=> 'Phường Cam Thuận',
        'loai'=> 3,
        'parent_id'=> 478
        ],
        [
        'ten'=> 'Phường Cam Lợi',
        'loai'=> 3,
        'parent_id'=> 478
        ],
        [
        'ten'=> 'Phường Cam Linh',
        'loai'=> 3,
        'parent_id'=> 478
        ],
        [
        'ten'=> 'Xã Cam Thành Nam',
        'loai'=> 3,
        'parent_id'=> 478
        ],
        [
        'ten'=> 'Xã Cam Phước Đông',
        'loai'=> 3,
        'parent_id'=> 478
        ],
        [
        'ten'=> 'Xã Cam Thịnh Tây',
        'loai'=> 3,
        'parent_id'=> 478
        ],
        [
        'ten'=> 'Xã Cam Thịnh Đông',
        'loai'=> 3,
        'parent_id'=> 478
        ],
        [
        'ten'=> 'Xã Cam Lập',
        'loai'=> 3,
        'parent_id'=> 478
        ],
        [
        'ten'=> 'Xã Cam Bình',
        'loai'=> 3,
        'parent_id'=> 478
        ],
        [
        'ten'=> 'Xã Cam Tân',
        'loai'=> 3,
        'parent_id'=> 479
        ],
        [
        'ten'=> 'Xã Cam Hòa',
        'loai'=> 3,
        'parent_id'=> 479
        ],
        [
        'ten'=> 'Xã Cam Hải Đông',
        'loai'=> 3,
        'parent_id'=> 479
        ],
        [
        'ten'=> 'Xã Cam Hải Tây',
        'loai'=> 3,
        'parent_id'=> 479
        ],
        [
        'ten'=> 'Xã Sơn Tân',
        'loai'=> 3,
        'parent_id'=> 479
        ],
        [
        'ten'=> 'Xã Cam Hiệp Bắc',
        'loai'=> 3,
        'parent_id'=> 479
        ],
        [
        'ten'=> 'Thị trấn Cam Đức',
        'loai'=> 3,
        'parent_id'=> 479
        ],
        [
        'ten'=> 'Xã Cam Hiệp Nam',
        'loai'=> 3,
        'parent_id'=> 479
        ],
        [
        'ten'=> 'Xã Cam Phước Tây',
        'loai'=> 3,
        'parent_id'=> 479
        ],
        [
        'ten'=> 'Xã Cam Thành Bắc',
        'loai'=> 3,
        'parent_id'=> 479
        ],
        [
        'ten'=> 'Xã Cam An Bắc',
        'loai'=> 3,
        'parent_id'=> 479
        ],
        [
        'ten'=> 'Xã Cam An Nam',
        'loai'=> 3,
        'parent_id'=> 479
        ],
        [
        'ten'=> 'Xã Suối Cát',
        'loai'=> 3,
        'parent_id'=> 479
        ],
        [
        'ten'=> 'Xã Suối Tân',
        'loai'=> 3,
        'parent_id'=> 479
        ],
        [
        'ten'=> 'Thị trấn Vạn Giã',
        'loai'=> 3,
        'parent_id'=> 480
        ],
        [
        'ten'=> 'Xã Đại Lãnh',
        'loai'=> 3,
        'parent_id'=> 480
        ],
        [
        'ten'=> 'Xã Vạn Phước',
        'loai'=> 3,
        'parent_id'=> 480
        ],
        [
        'ten'=> 'Xã Vạn Long',
        'loai'=> 3,
        'parent_id'=> 480
        ],
        [
        'ten'=> 'Xã Vạn Bình',
        'loai'=> 3,
        'parent_id'=> 480
        ],
        [
        'ten'=> 'Xã Vạn Thọ',
        'loai'=> 3,
        'parent_id'=> 480
        ],
        [
        'ten'=> 'Xã Vạn Khánh',
        'loai'=> 3,
        'parent_id'=> 480
        ],
        [
        'ten'=> 'Xã Vạn Phú',
        'loai'=> 3,
        'parent_id'=> 480
        ],
        [
        'ten'=> 'Xã Vạn Lương',
        'loai'=> 3,
        'parent_id'=> 480
        ],
        [
        'ten'=> 'Xã Vạn Thắng',
        'loai'=> 3,
        'parent_id'=> 480
        ],
        [
        'ten'=> 'Xã Vạn Thạnh',
        'loai'=> 3,
        'parent_id'=> 480
        ],
        [
        'ten'=> 'Xã Xuân Sơn',
        'loai'=> 3,
        'parent_id'=> 480
        ],
        [
        'ten'=> 'Xã Vạn Hưng',
        'loai'=> 3,
        'parent_id'=> 480
        ],
        [
        'ten'=> 'Phường Ninh Hiệp',
        'loai'=> 3,
        'parent_id'=> 481
        ],
        [
        'ten'=> 'Xã Ninh Sơn',
        'loai'=> 3,
        'parent_id'=> 481
        ],
        [
        'ten'=> 'Xã Ninh Tây',
        'loai'=> 3,
        'parent_id'=> 481
        ],
        [
        'ten'=> 'Xã Ninh Thượng',
        'loai'=> 3,
        'parent_id'=> 481
        ],
        [
        'ten'=> 'Xã Ninh An',
        'loai'=> 3,
        'parent_id'=> 481
        ],
        [
        'ten'=> 'Phường Ninh Hải',
        'loai'=> 3,
        'parent_id'=> 481
        ],
        [
        'ten'=> 'Xã Ninh Thọ',
        'loai'=> 3,
        'parent_id'=> 481
        ],
        [
        'ten'=> 'Xã Ninh Trung',
        'loai'=> 3,
        'parent_id'=> 481
        ],
        [
        'ten'=> 'Xã Ninh Sim',
        'loai'=> 3,
        'parent_id'=> 481
        ],
        [
        'ten'=> 'Xã Ninh Xuân',
        'loai'=> 3,
        'parent_id'=> 481
        ],
        [
        'ten'=> 'Xã Ninh Thân',
        'loai'=> 3,
        'parent_id'=> 481
        ],
        [
        'ten'=> 'Phường Ninh Diêm',
        'loai'=> 3,
        'parent_id'=> 481
        ],
        [
        'ten'=> 'Xã Ninh Đông',
        'loai'=> 3,
        'parent_id'=> 481
        ],
        [
        'ten'=> 'Phường Ninh Thủy',
        'loai'=> 3,
        'parent_id'=> 481
        ],
        [
        'ten'=> 'Phường Ninh Đa',
        'loai'=> 3,
        'parent_id'=> 481
        ],
        [
        'ten'=> 'Xã Ninh Phụng',
        'loai'=> 3,
        'parent_id'=> 481
        ],
        [
        'ten'=> 'Xã Ninh Bình',
        'loai'=> 3,
        'parent_id'=> 481
        ],
        [
        'ten'=> 'Xã Ninh Phước',
        'loai'=> 3,
        'parent_id'=> 481
        ],
        [
        'ten'=> 'Xã Ninh Phú',
        'loai'=> 3,
        'parent_id'=> 481
        ],
        [
        'ten'=> 'Xã Ninh Tân',
        'loai'=> 3,
        'parent_id'=> 481
        ],
        [
        'ten'=> 'Xã Ninh Quang',
        'loai'=> 3,
        'parent_id'=> 481
        ],
        [
        'ten'=> 'Phường Ninh Giang',
        'loai'=> 3,
        'parent_id'=> 481
        ],
        [
        'ten'=> 'Phường Ninh Hà',
        'loai'=> 3,
        'parent_id'=> 481
        ],
        [
        'ten'=> 'Xã Ninh Hưng',
        'loai'=> 3,
        'parent_id'=> 481
        ],
        [
        'ten'=> 'Xã Ninh Lộc',
        'loai'=> 3,
        'parent_id'=> 481
        ],
        [
        'ten'=> 'Xã Ninh Ích',
        'loai'=> 3,
        'parent_id'=> 481
        ],
        [
        'ten'=> 'Xã Ninh Vân',
        'loai'=> 3,
        'parent_id'=> 481
        ],
        [
        'ten'=> 'Thị trấn Khánh Vĩnh',
        'loai'=> 3,
        'parent_id'=> 482
        ],
        [
        'ten'=> 'Xã Khánh Hiệp',
        'loai'=> 3,
        'parent_id'=> 482
        ],
        [
        'ten'=> 'Xã Khánh Bình',
        'loai'=> 3,
        'parent_id'=> 482
        ],
        [
        'ten'=> 'Xã Khánh Trung',
        'loai'=> 3,
        'parent_id'=> 482
        ],
        [
        'ten'=> 'Xã Khánh Đông',
        'loai'=> 3,
        'parent_id'=> 482
        ],
        [
        'ten'=> 'Xã Khánh Thượng',
        'loai'=> 3,
        'parent_id'=> 482
        ],
        [
        'ten'=> 'Xã Khánh Nam',
        'loai'=> 3,
        'parent_id'=> 482
        ],
        [
        'ten'=> 'Xã Sông Cầu',
        'loai'=> 3,
        'parent_id'=> 482
        ],
        [
        'ten'=> 'Xã Giang Ly',
        'loai'=> 3,
        'parent_id'=> 482
        ],
        [
        'ten'=> 'Xã Cầu Bà',
        'loai'=> 3,
        'parent_id'=> 482
        ],
        [
        'ten'=> 'Xã Liên Sang',
        'loai'=> 3,
        'parent_id'=> 482
        ],
        [
        'ten'=> 'Xã Khánh Thành',
        'loai'=> 3,
        'parent_id'=> 482
        ],
        [
        'ten'=> 'Xã Khánh Phú',
        'loai'=> 3,
        'parent_id'=> 482
        ],
        [
        'ten'=> 'Xã Sơn Thái',
        'loai'=> 3,
        'parent_id'=> 482
        ],
        [
        'ten'=> 'Thị trấn Diên Khánh',
        'loai'=> 3,
        'parent_id'=> 483
        ],
        [
        'ten'=> 'Xã Diên Lâm',
        'loai'=> 3,
        'parent_id'=> 483
        ],
        [
        'ten'=> 'Xã Diên Điền',
        'loai'=> 3,
        'parent_id'=> 483
        ],
        [
        'ten'=> 'Xã Diên Xuân',
        'loai'=> 3,
        'parent_id'=> 483
        ],
        [
        'ten'=> 'Xã Diên Sơn',
        'loai'=> 3,
        'parent_id'=> 483
        ],
        [
        'ten'=> 'Xã Diên Đồng',
        'loai'=> 3,
        'parent_id'=> 483
        ],
        [
        'ten'=> 'Xã Diên Phú',
        'loai'=> 3,
        'parent_id'=> 483
        ],
        [
        'ten'=> 'Xã Diên Thọ',
        'loai'=> 3,
        'parent_id'=> 483
        ],
        [
        'ten'=> 'Xã Diên Phước',
        'loai'=> 3,
        'parent_id'=> 483
        ],
        [
        'ten'=> 'Xã Diên Lạc',
        'loai'=> 3,
        'parent_id'=> 483
        ],
        [
        'ten'=> 'Xã Diên Tân',
        'loai'=> 3,
        'parent_id'=> 483
        ],
        [
        'ten'=> 'Xã Diên Hòa',
        'loai'=> 3,
        'parent_id'=> 483
        ],
        [
        'ten'=> 'Xã Diên Thạnh',
        'loai'=> 3,
        'parent_id'=> 483
        ],
        [
        'ten'=> 'Xã Diên Toàn',
        'loai'=> 3,
        'parent_id'=> 483
        ],
        [
        'ten'=> 'Xã Diên An',
        'loai'=> 3,
        'parent_id'=> 483
        ],
        [
        'ten'=> 'Xã Bình Lộc',
        'loai'=> 3,
        'parent_id'=> 483
        ],
        [
        'ten'=> 'Xã Suối Hiệp',
        'loai'=> 3,
        'parent_id'=> 483
        ],
        [
        'ten'=> 'Xã Suối Tiên',
        'loai'=> 3,
        'parent_id'=> 483
        ],
        [
        'ten'=> 'Thị trấn Tô Hạp',
        'loai'=> 3,
        'parent_id'=> 484
        ],
        [
        'ten'=> 'Xã Thành Sơn',
        'loai'=> 3,
        'parent_id'=> 484
        ],
        [
        'ten'=> 'Xã Sơn Lâm',
        'loai'=> 3,
        'parent_id'=> 484
        ],
        [
        'ten'=> 'Xã Sơn Hiệp',
        'loai'=> 3,
        'parent_id'=> 484
        ],
        [
        'ten'=> 'Xã Sơn Bình',
        'loai'=> 3,
        'parent_id'=> 484
        ],
        [
        'ten'=> 'Xã Sơn Trung',
        'loai'=> 3,
        'parent_id'=> 484
        ],
        [
        'ten'=> 'Xã Ba Cụm Bắc',
        'loai'=> 3,
        'parent_id'=> 484
        ],
        [
        'ten'=> 'Xã Ba Cụm Nam',
        'loai'=> 3,
        'parent_id'=> 484
        ],
        [
        'ten'=> 'Thị trấn Trường Sa',
        'loai'=> 3,
        'parent_id'=> 485
        ],
        [
        'ten'=> 'Xã Song Tử Tây',
        'loai'=> 3,
        'parent_id'=> 485
        ],
        [
        'ten'=> 'Xã Sinh Tồn',
        'loai'=> 3,
        'parent_id'=> 485
        ],
        [
        'ten'=> 'Phường Đô Vinh',
        'loai'=> 3,
        'parent_id'=> 486
        ],
        [
        'ten'=> 'Phường Phước Mỹ',
        'loai'=> 3,
        'parent_id'=> 486
        ],
        [
        'ten'=> 'Phường Bảo An',
        'loai'=> 3,
        'parent_id'=> 486
        ],
        [
        'ten'=> 'Phường Phủ Hà',
        'loai'=> 3,
        'parent_id'=> 486
        ],
        [
        'ten'=> 'Phường Thanh Sơn',
        'loai'=> 3,
        'parent_id'=> 486
        ],
        [
        'ten'=> 'Phường Mỹ Hương',
        'loai'=> 3,
        'parent_id'=> 486
        ],
        [
        'ten'=> 'Phường Tấn Tài',
        'loai'=> 3,
        'parent_id'=> 486
        ],
        [
        'ten'=> 'Phường Kinh Dinh',
        'loai'=> 3,
        'parent_id'=> 486
        ],
        [
        'ten'=> 'Phường Đạo Long',
        'loai'=> 3,
        'parent_id'=> 486
        ],
        [
        'ten'=> 'Phường Đài Sơn',
        'loai'=> 3,
        'parent_id'=> 486
        ],
        [
        'ten'=> 'Phường Đông Hải',
        'loai'=> 3,
        'parent_id'=> 486
        ],
        [
        'ten'=> 'Phường Mỹ Đông',
        'loai'=> 3,
        'parent_id'=> 486
        ],
        [
        'ten'=> 'Xã Thành Hải',
        'loai'=> 3,
        'parent_id'=> 486
        ],
        [
        'ten'=> 'Phường Văn Hải',
        'loai'=> 3,
        'parent_id'=> 486
        ],
        [
        'ten'=> 'Phường Mỹ Bình',
        'loai'=> 3,
        'parent_id'=> 486
        ],
        [
        'ten'=> 'Phường Mỹ Hải',
        'loai'=> 3,
        'parent_id'=> 486
        ],
        [
        'ten'=> 'Xã Phước Bình',
        'loai'=> 3,
        'parent_id'=> 487
        ],
        [
        'ten'=> 'Xã Phước Hòa',
        'loai'=> 3,
        'parent_id'=> 487
        ],
        [
        'ten'=> 'Xã Phước Tân',
        'loai'=> 3,
        'parent_id'=> 487
        ],
        [
        'ten'=> 'Xã Phước Tiến',
        'loai'=> 3,
        'parent_id'=> 487
        ],
        [
        'ten'=> 'Xã Phước Thắng',
        'loai'=> 3,
        'parent_id'=> 487
        ],
        [
        'ten'=> 'Xã Phước Thành',
        'loai'=> 3,
        'parent_id'=> 487
        ],
        [
        'ten'=> 'Xã Phước Đại',
        'loai'=> 3,
        'parent_id'=> 487
        ],
        [
        'ten'=> 'Xã Phước Chính',
        'loai'=> 3,
        'parent_id'=> 487
        ],
        [
        'ten'=> 'Xã Phước Trung',
        'loai'=> 3,
        'parent_id'=> 487
        ],
        [
        'ten'=> 'Thị trấn Tân Sơn',
        'loai'=> 3,
        'parent_id'=> 488
        ],
        [
        'ten'=> 'Xã Lâm Sơn',
        'loai'=> 3,
        'parent_id'=> 488
        ],
        [
        'ten'=> 'Xã Lương Sơn',
        'loai'=> 3,
        'parent_id'=> 488
        ],
        [
        'ten'=> 'Xã Quảng Sơn',
        'loai'=> 3,
        'parent_id'=> 488
        ],
        [
        'ten'=> 'Xã Mỹ Sơn',
        'loai'=> 3,
        'parent_id'=> 488
        ],
        [
        'ten'=> 'Xã Hòa Sơn',
        'loai'=> 3,
        'parent_id'=> 488
        ],
        [
        'ten'=> 'Xã Ma Nới',
        'loai'=> 3,
        'parent_id'=> 488
        ],
        [
        'ten'=> 'Xã Nhơn Sơn',
        'loai'=> 3,
        'parent_id'=> 488
        ],
        [
        'ten'=> 'Thị trấn Khánh Hải',
        'loai'=> 3,
        'parent_id'=> 489
        ],
        [
        'ten'=> 'Xã Vĩnh Hải',
        'loai'=> 3,
        'parent_id'=> 489
        ],
        [
        'ten'=> 'Xã Phương Hải',
        'loai'=> 3,
        'parent_id'=> 489
        ],
        [
        'ten'=> 'Xã Tân Hải',
        'loai'=> 3,
        'parent_id'=> 489
        ],
        [
        'ten'=> 'Xã Xuân Hải',
        'loai'=> 3,
        'parent_id'=> 489
        ],
        [
        'ten'=> 'Xã Hộ Hải',
        'loai'=> 3,
        'parent_id'=> 489
        ],
        [
        'ten'=> 'Xã Tri Hải',
        'loai'=> 3,
        'parent_id'=> 489
        ],
        [
        'ten'=> 'Xã Nhơn Hải',
        'loai'=> 3,
        'parent_id'=> 489
        ],
        [
        'ten'=> 'Xã Thanh Hải',
        'loai'=> 3,
        'parent_id'=> 489
        ],
        [
        'ten'=> 'Thị trấn Phước Dân',
        'loai'=> 3,
        'parent_id'=> 490
        ],
        [
        'ten'=> 'Xã Phước Sơn',
        'loai'=> 3,
        'parent_id'=> 490
        ],
        [
        'ten'=> 'Xã Phước Thái',
        'loai'=> 3,
        'parent_id'=> 490
        ],
        [
        'ten'=> 'Xã Phước Hậu',
        'loai'=> 3,
        'parent_id'=> 490
        ],
        [
        'ten'=> 'Xã Phước Thuận',
        'loai'=> 3,
        'parent_id'=> 490
        ],
        [
        'ten'=> 'Xã An Hải',
        'loai'=> 3,
        'parent_id'=> 490
        ],
        [
        'ten'=> 'Xã Phước Hữu',
        'loai'=> 3,
        'parent_id'=> 490
        ],
        [
        'ten'=> 'Xã Phước Hải',
        'loai'=> 3,
        'parent_id'=> 490
        ],
        [
        'ten'=> 'Xã Phước Vinh',
        'loai'=> 3,
        'parent_id'=> 490
        ],
        [
        'ten'=> 'Xã Phước Chiến',
        'loai'=> 3,
        'parent_id'=> 491
        ],
        [
        'ten'=> 'Xã Công Hải',
        'loai'=> 3,
        'parent_id'=> 491
        ],
        [
        'ten'=> 'Xã Phước Kháng',
        'loai'=> 3,
        'parent_id'=> 491
        ],
        [
        'ten'=> 'Xã Lợi Hải',
        'loai'=> 3,
        'parent_id'=> 491
        ],
        [
        'ten'=> 'Xã Bắc Sơn',
        'loai'=> 3,
        'parent_id'=> 491
        ],
        [
        'ten'=> 'Xã Bắc Phong',
        'loai'=> 3,
        'parent_id'=> 491
        ],
        [
        'ten'=> 'Xã Phước Hà',
        'loai'=> 3,
        'parent_id'=> 492
        ],
        [
        'ten'=> 'Xã Phước Nam',
        'loai'=> 3,
        'parent_id'=> 492
        ],
        [
        'ten'=> 'Xã Phước Ninh',
        'loai'=> 3,
        'parent_id'=> 492
        ],
        [
        'ten'=> 'Xã Nhị Hà',
        'loai'=> 3,
        'parent_id'=> 492
        ],
        [
        'ten'=> 'Xã Phước Dinh',
        'loai'=> 3,
        'parent_id'=> 492
        ],
        [
        'ten'=> 'Xã Phước Minh',
        'loai'=> 3,
        'parent_id'=> 492
        ],
        [
        'ten'=> 'Xã Phước Diêm',
        'loai'=> 3,
        'parent_id'=> 492
        ],
        [
        'ten'=> 'Xã Cà Ná',
        'loai'=> 3,
        'parent_id'=> 492
        ],
        [
        'ten'=> 'Phường Mũi Né',
        'loai'=> 3,
        'parent_id'=> 493
        ],
        [
        'ten'=> 'Phường Hàm Tiến',
        'loai'=> 3,
        'parent_id'=> 493
        ],
        [
        'ten'=> 'Phường Phú Hài',
        'loai'=> 3,
        'parent_id'=> 493
        ],
        [
        'ten'=> 'Phường Phú Thủy',
        'loai'=> 3,
        'parent_id'=> 493
        ],
        [
        'ten'=> 'Phường Phú Tài',
        'loai'=> 3,
        'parent_id'=> 493
        ],
        [
        'ten'=> 'Phường Phú Trinh',
        'loai'=> 3,
        'parent_id'=> 493
        ],
        [
        'ten'=> 'Phường Xuân An',
        'loai'=> 3,
        'parent_id'=> 493
        ],
        [
        'ten'=> 'Phường Thanh Hải',
        'loai'=> 3,
        'parent_id'=> 493
        ],
        [
        'ten'=> 'Phường Bình Hưng',
        'loai'=> 3,
        'parent_id'=> 493
        ],
        [
        'ten'=> 'Phường Đức Nghĩa',
        'loai'=> 3,
        'parent_id'=> 493
        ],
        [
        'ten'=> 'Phường Lạc Đạo',
        'loai'=> 3,
        'parent_id'=> 493
        ],
        [
        'ten'=> 'Phường Đức Thắng',
        'loai'=> 3,
        'parent_id'=> 493
        ],
        [
        'ten'=> 'Phường Hưng Long',
        'loai'=> 3,
        'parent_id'=> 493
        ],
        [
        'ten'=> 'Phường Đức Long',
        'loai'=> 3,
        'parent_id'=> 493
        ],
        [
        'ten'=> 'Xã Thiện Nghiệp',
        'loai'=> 3,
        'parent_id'=> 493
        ],
        [
        'ten'=> 'Xã Phong Nẫm',
        'loai'=> 3,
        'parent_id'=> 493
        ],
        [
        'ten'=> 'Xã Tiến Lợi',
        'loai'=> 3,
        'parent_id'=> 493
        ],
        [
        'ten'=> 'Xã Tiến Thành',
        'loai'=> 3,
        'parent_id'=> 493
        ],
        [
        'ten'=> 'Phường Phước Hội',
        'loai'=> 3,
        'parent_id'=> 494
        ],
        [
        'ten'=> 'Phường Phước Lộc',
        'loai'=> 3,
        'parent_id'=> 494
        ],
        [
        'ten'=> 'Phường Tân Thiện',
        'loai'=> 3,
        'parent_id'=> 494
        ],
        [
        'ten'=> 'Phường Tân An',
        'loai'=> 3,
        'parent_id'=> 494
        ],
        [
        'ten'=> 'Phường Bình Tân',
        'loai'=> 3,
        'parent_id'=> 494
        ],
        [
        'ten'=> 'Xã Tân Hải',
        'loai'=> 3,
        'parent_id'=> 494
        ],
        [
        'ten'=> 'Xã Tân Tiến',
        'loai'=> 3,
        'parent_id'=> 494
        ],
        [
        'ten'=> 'Xã Tân Bình',
        'loai'=> 3,
        'parent_id'=> 494
        ],
        [
        'ten'=> 'Xã Tân Phước',
        'loai'=> 3,
        'parent_id'=> 494
        ],
        [
        'ten'=> 'Thị trấn Liên Hương',
        'loai'=> 3,
        'parent_id'=> 495
        ],
        [
        'ten'=> 'Thị trấn Phan Rí Cửa',
        'loai'=> 3,
        'parent_id'=> 495
        ],
        [
        'ten'=> 'Xã Phan Dũng',
        'loai'=> 3,
        'parent_id'=> 495
        ],
        [
        'ten'=> 'Xã Phong Phú',
        'loai'=> 3,
        'parent_id'=> 495
        ],
        [
        'ten'=> 'Xã Vĩnh Hảo',
        'loai'=> 3,
        'parent_id'=> 495
        ],
        [
        'ten'=> 'Xã Vĩnh Tân',
        'loai'=> 3,
        'parent_id'=> 495
        ],
        [
        'ten'=> 'Xã Phú Lạc',
        'loai'=> 3,
        'parent_id'=> 495
        ],
        [
        'ten'=> 'Xã Phước Thể',
        'loai'=> 3,
        'parent_id'=> 495
        ],
        [
        'ten'=> 'Xã Hòa Minh',
        'loai'=> 3,
        'parent_id'=> 495
        ],
        [
        'ten'=> 'Xã Chí Công',
        'loai'=> 3,
        'parent_id'=> 495
        ],
        [
        'ten'=> 'Xã Bình Thạnh',
        'loai'=> 3,
        'parent_id'=> 495
        ],
        [
        'ten'=> 'Thị trấn Chợ Lầu',
        'loai'=> 3,
        'parent_id'=> 496
        ],
        [
        'ten'=> 'Xã Phan Sơn',
        'loai'=> 3,
        'parent_id'=> 496
        ],
        [
        'ten'=> 'Xã Phan Lâm',
        'loai'=> 3,
        'parent_id'=> 496
        ],
        [
        'ten'=> 'Xã Bình An',
        'loai'=> 3,
        'parent_id'=> 496
        ],
        [
        'ten'=> 'Xã Phan Điền',
        'loai'=> 3,
        'parent_id'=> 496
        ],
        [
        'ten'=> 'Xã Hải Ninh',
        'loai'=> 3,
        'parent_id'=> 496
        ],
        [
        'ten'=> 'Xã Sông Lũy',
        'loai'=> 3,
        'parent_id'=> 496
        ],
        [
        'ten'=> 'Xã Phan Tiến',
        'loai'=> 3,
        'parent_id'=> 496
        ],
        [
        'ten'=> 'Xã Sông Bình',
        'loai'=> 3,
        'parent_id'=> 496
        ],
        [
        'ten'=> 'Thị trấn Lương Sơn',
        'loai'=> 3,
        'parent_id'=> 496
        ],
        [
        'ten'=> 'Xã Phan Hòa',
        'loai'=> 3,
        'parent_id'=> 496
        ],
        [
        'ten'=> 'Xã Phan Thanh',
        'loai'=> 3,
        'parent_id'=> 496
        ],
        [
        'ten'=> 'Xã Hồng Thái',
        'loai'=> 3,
        'parent_id'=> 496
        ],
        [
        'ten'=> 'Xã Phan Hiệp',
        'loai'=> 3,
        'parent_id'=> 496
        ],
        [
        'ten'=> 'Xã Bình Tân',
        'loai'=> 3,
        'parent_id'=> 496
        ],
        [
        'ten'=> 'Xã Phan Rí Thành',
        'loai'=> 3,
        'parent_id'=> 496
        ],
        [
        'ten'=> 'Xã Hòa Thắng',
        'loai'=> 3,
        'parent_id'=> 496
        ],
        [
        'ten'=> 'Xã Hồng Phong',
        'loai'=> 3,
        'parent_id'=> 496
        ],
        [
        'ten'=> 'Thị trấn Ma Lâm',
        'loai'=> 3,
        'parent_id'=> 497
        ],
        [
        'ten'=> 'Thị trấn Phú Long',
        'loai'=> 3,
        'parent_id'=> 497
        ],
        [
        'ten'=> 'Xã La Dạ',
        'loai'=> 3,
        'parent_id'=> 497
        ],
        [
        'ten'=> 'Xã Đông Tiến',
        'loai'=> 3,
        'parent_id'=> 497
        ],
        [
        'ten'=> 'Xã Thuận Hòa',
        'loai'=> 3,
        'parent_id'=> 497
        ],
        [
        'ten'=> 'Xã Đông Giang',
        'loai'=> 3,
        'parent_id'=> 497
        ],
        [
        'ten'=> 'Xã Hàm Phú',
        'loai'=> 3,
        'parent_id'=> 497
        ],
        [
        'ten'=> 'Xã Hồng Liêm',
        'loai'=> 3,
        'parent_id'=> 497
        ],
        [
        'ten'=> 'Xã Thuận Minh',
        'loai'=> 3,
        'parent_id'=> 497
        ],
        [
        'ten'=> 'Xã Hồng Sơn',
        'loai'=> 3,
        'parent_id'=> 497
        ],
        [
        'ten'=> 'Xã Hàm Trí',
        'loai'=> 3,
        'parent_id'=> 497
        ],
        [
        'ten'=> 'Xã Hàm Đức',
        'loai'=> 3,
        'parent_id'=> 497
        ],
        [
        'ten'=> 'Xã Hàm Liêm',
        'loai'=> 3,
        'parent_id'=> 497
        ],
        [
        'ten'=> 'Xã Hàm Chính',
        'loai'=> 3,
        'parent_id'=> 497
        ],
        [
        'ten'=> 'Xã Hàm Hiệp',
        'loai'=> 3,
        'parent_id'=> 497
        ],
        [
        'ten'=> 'Xã Hàm Thắng',
        'loai'=> 3,
        'parent_id'=> 497
        ],
        [
        'ten'=> 'Xã Đa Mi',
        'loai'=> 3,
        'parent_id'=> 497
        ],
        [
        'ten'=> 'Thị trấn Thuận Nam',
        'loai'=> 3,
        'parent_id'=> 498
        ],
        [
        'ten'=> 'Xã Mỹ Thạnh',
        'loai'=> 3,
        'parent_id'=> 498
        ],
        [
        'ten'=> 'Xã Hàm Cần',
        'loai'=> 3,
        'parent_id'=> 498
        ],
        [
        'ten'=> 'Xã Mương Mán',
        'loai'=> 3,
        'parent_id'=> 498
        ],
        [
        'ten'=> 'Xã Hàm Thạnh',
        'loai'=> 3,
        'parent_id'=> 498
        ],
        [
        'ten'=> 'Xã Hàm Kiệm',
        'loai'=> 3,
        'parent_id'=> 498
        ],
        [
        'ten'=> 'Xã Hàm Cường',
        'loai'=> 3,
        'parent_id'=> 498
        ],
        [
        'ten'=> 'Xã Hàm Mỹ',
        'loai'=> 3,
        'parent_id'=> 498
        ],
        [
        'ten'=> 'Xã Tân Lập',
        'loai'=> 3,
        'parent_id'=> 498
        ],
        [
        'ten'=> 'Xã Hàm Minh',
        'loai'=> 3,
        'parent_id'=> 498
        ],
        [
        'ten'=> 'Xã Thuận Quí',
        'loai'=> 3,
        'parent_id'=> 498
        ],
        [
        'ten'=> 'Xã Tân Thuận',
        'loai'=> 3,
        'parent_id'=> 498
        ],
        [
        'ten'=> 'Xã Tân Thành',
        'loai'=> 3,
        'parent_id'=> 498
        ],
        [
        'ten'=> 'Thị trấn Lạc Tánh',
        'loai'=> 3,
        'parent_id'=> 499
        ],
        [
        'ten'=> 'Xã Bắc Ruộng',
        'loai'=> 3,
        'parent_id'=> 499
        ],
        [
        'ten'=> 'Xã Nghị Đức',
        'loai'=> 3,
        'parent_id'=> 499
        ],
        [
        'ten'=> 'Xã La Ngâu',
        'loai'=> 3,
        'parent_id'=> 499
        ],
        [
        'ten'=> 'Xã Huy Khiêm',
        'loai'=> 3,
        'parent_id'=> 499
        ],
        [
        'ten'=> 'Xã Măng Tố',
        'loai'=> 3,
        'parent_id'=> 499
        ],
        [
        'ten'=> 'Xã Đức Phú',
        'loai'=> 3,
        'parent_id'=> 499
        ],
        [
        'ten'=> 'Xã Đồng Kho',
        'loai'=> 3,
        'parent_id'=> 499
        ],
        [
        'ten'=> 'Xã Gia An',
        'loai'=> 3,
        'parent_id'=> 499
        ],
        [
        'ten'=> 'Xã Đức Bình',
        'loai'=> 3,
        'parent_id'=> 499
        ],
        [
        'ten'=> 'Xã Gia Huynh',
        'loai'=> 3,
        'parent_id'=> 499
        ],
        [
        'ten'=> 'Xã Đức Thuận',
        'loai'=> 3,
        'parent_id'=> 499
        ],
        [
        'ten'=> 'Xã Suối Kiết',
        'loai'=> 3,
        'parent_id'=> 499
        ],
        [
        'ten'=> 'Thị trấn Võ Xu',
        'loai'=> 3,
        'parent_id'=> 500
        ],
        [
        'ten'=> 'Thị trấn Đức Tài',
        'loai'=> 3,
        'parent_id'=> 500
        ],
        [
        'ten'=> 'Xã Đa Kai',
        'loai'=> 3,
        'parent_id'=> 500
        ],
        [
        'ten'=> 'Xã Sùng Nhơn',
        'loai'=> 3,
        'parent_id'=> 500
        ],
        [
        'ten'=> 'Xã Mê Pu',
        'loai'=> 3,
        'parent_id'=> 500
        ],
        [
        'ten'=> 'Xã Nam Chính',
        'loai'=> 3,
        'parent_id'=> 500
        ],
        [
        'ten'=> 'Xã Đức Hạnh',
        'loai'=> 3,
        'parent_id'=> 500
        ],
        [
        'ten'=> 'Xã Đức Tín',
        'loai'=> 3,
        'parent_id'=> 500
        ],
        [
        'ten'=> 'Xã Vũ Hoà',
        'loai'=> 3,
        'parent_id'=> 500
        ],
        [
        'ten'=> 'Xã Tân Hà',
        'loai'=> 3,
        'parent_id'=> 500
        ],
        [
        'ten'=> 'Xã Đông Hà',
        'loai'=> 3,
        'parent_id'=> 500
        ],
        [
        'ten'=> 'Xã Trà Tân',
        'loai'=> 3,
        'parent_id'=> 500
        ],
        [
        'ten'=> 'Thị trấn Tân Minh',
        'loai'=> 3,
        'parent_id'=> 501
        ],
        [
        'ten'=> 'Thị trấn Tân Nghĩa',
        'loai'=> 3,
        'parent_id'=> 501
        ],
        [
        'ten'=> 'Xã Sông Phan',
        'loai'=> 3,
        'parent_id'=> 501
        ],
        [
        'ten'=> 'Xã Tân Phúc',
        'loai'=> 3,
        'parent_id'=> 501
        ],
        [
        'ten'=> 'Xã Tân Đức',
        'loai'=> 3,
        'parent_id'=> 501
        ],
        [
        'ten'=> 'Xã Tân Thắng',
        'loai'=> 3,
        'parent_id'=> 501
        ],
        [
        'ten'=> 'Xã Thắng Hải',
        'loai'=> 3,
        'parent_id'=> 501
        ],
        [
        'ten'=> 'Xã Tân Hà',
        'loai'=> 3,
        'parent_id'=> 501
        ],
        [
        'ten'=> 'Xã Tân Xuân',
        'loai'=> 3,
        'parent_id'=> 501
        ],
        [
        'ten'=> 'Xã Sơn Mỹ',
        'loai'=> 3,
        'parent_id'=> 501
        ],
        [
        'ten'=> 'Xã Ngũ Phụng',
        'loai'=> 3,
        'parent_id'=> 502
        ],
        [
        'ten'=> 'Xã Long Hải',
        'loai'=> 3,
        'parent_id'=> 502
        ],
        [
        'ten'=> 'Xã Tam Thanh',
        'loai'=> 3,
        'parent_id'=> 502
        ],
        [
        'ten'=> 'Phường Quang Trung',
        'loai'=> 3,
        'parent_id'=> 503
        ],
        [
        'ten'=> 'Phường Duy Tân',
        'loai'=> 3,
        'parent_id'=> 503
        ],
        [
        'ten'=> 'Phường Quyết Thắng',
        'loai'=> 3,
        'parent_id'=> 503
        ],
        [
        'ten'=> 'Phường Trường Chinh',
        'loai'=> 3,
        'parent_id'=> 503
        ],
        [
        'ten'=> 'Phường Thắng Lợi',
        'loai'=> 3,
        'parent_id'=> 503
        ],
        [
        'ten'=> 'Phường Ngô Mây',
        'loai'=> 3,
        'parent_id'=> 503
        ],
        [
        'ten'=> 'Phường Thống Nhất',
        'loai'=> 3,
        'parent_id'=> 503
        ],
        [
        'ten'=> 'Phường Lê Lợi',
        'loai'=> 3,
        'parent_id'=> 503
        ],
        [
        'ten'=> 'Phường Nguyễn Trãi',
        'loai'=> 3,
        'parent_id'=> 503
        ],
        [
        'ten'=> 'Phường Trần Hưng Đạo',
        'loai'=> 3,
        'parent_id'=> 503
        ],
        [
        'ten'=> 'Xã Đắk Cấm',
        'loai'=> 3,
        'parent_id'=> 503
        ],
        [
        'ten'=> 'Xã Kroong',
        'loai'=> 3,
        'parent_id'=> 503
        ],
        [
        'ten'=> 'Xã Ngọk Bay',
        'loai'=> 3,
        'parent_id'=> 503
        ],
        [
        'ten'=> 'Xã Vinh Quang',
        'loai'=> 3,
        'parent_id'=> 503
        ],
        [
        'ten'=> 'Xã Đắk Blà',
        'loai'=> 3,
        'parent_id'=> 503
        ],
        [
        'ten'=> 'Xã Ia Chim',
        'loai'=> 3,
        'parent_id'=> 503
        ],
        [
        'ten'=> 'Xã Đăk Năng',
        'loai'=> 3,
        'parent_id'=> 503
        ],
        [
        'ten'=> 'Xã Đoàn Kết',
        'loai'=> 3,
        'parent_id'=> 503
        ],
        [
        'ten'=> 'Xã Chư Hreng',
        'loai'=> 3,
        'parent_id'=> 503
        ],
        [
        'ten'=> 'Xã Đắk Rơ Wa',
        'loai'=> 3,
        'parent_id'=> 503
        ],
        [
        'ten'=> 'Xã Hòa Bình',
        'loai'=> 3,
        'parent_id'=> 503
        ],
        [
        'ten'=> 'Thị trấn Đắk Glei',
        'loai'=> 3,
        'parent_id'=> 504
        ],
        [
        'ten'=> 'Xã Đắk Blô',
        'loai'=> 3,
        'parent_id'=> 504
        ],
        [
        'ten'=> 'Xã Đắk Man',
        'loai'=> 3,
        'parent_id'=> 504
        ],
        [
        'ten'=> 'Xã Đắk Nhoong',
        'loai'=> 3,
        'parent_id'=> 504
        ],
        [
        'ten'=> 'Xã Đắk Pék',
        'loai'=> 3,
        'parent_id'=> 504
        ],
        [
        'ten'=> 'Xã Đắk Choong',
        'loai'=> 3,
        'parent_id'=> 504
        ],
        [
        'ten'=> 'Xã Xốp',
        'loai'=> 3,
        'parent_id'=> 504
        ],
        [
        'ten'=> 'Xã Mường Hoong',
        'loai'=> 3,
        'parent_id'=> 504
        ],
        [
        'ten'=> 'Xã Ngọc Linh',
        'loai'=> 3,
        'parent_id'=> 504
        ],
        [
        'ten'=> 'Xã Đắk Long',
        'loai'=> 3,
        'parent_id'=> 504
        ],
        [
        'ten'=> 'Xã Đắk KRoong',
        'loai'=> 3,
        'parent_id'=> 504
        ],
        [
        'ten'=> 'Xã Đắk Môn',
        'loai'=> 3,
        'parent_id'=> 504
        ],
        [
        'ten'=> 'Thị trấn Plei Kần',
        'loai'=> 3,
        'parent_id'=> 505
        ],
        [
        'ten'=> 'Xã Đắk Ang',
        'loai'=> 3,
        'parent_id'=> 505
        ],
        [
        'ten'=> 'Xã Đắk Dục',
        'loai'=> 3,
        'parent_id'=> 505
        ],
        [
        'ten'=> 'Xã Đắk Nông',
        'loai'=> 3,
        'parent_id'=> 505
        ],
        [
        'ten'=> 'Xã Đắk Xú',
        'loai'=> 3,
        'parent_id'=> 505
        ],
        [
        'ten'=> 'Xã Đắk Kan',
        'loai'=> 3,
        'parent_id'=> 505
        ],
        [
        'ten'=> 'Xã Bờ Y',
        'loai'=> 3,
        'parent_id'=> 505
        ],
        [
        'ten'=> 'Xã Sa Loong',
        'loai'=> 3,
        'parent_id'=> 505
        ],
        [
        'ten'=> 'Thị trấn Đắk Tô',
        'loai'=> 3,
        'parent_id'=> 506
        ],
        [
        'ten'=> 'Xã Đắk Rơ Nga',
        'loai'=> 3,
        'parent_id'=> 506
        ],
        [
        'ten'=> 'Xã Ngọk Tụ',
        'loai'=> 3,
        'parent_id'=> 506
        ],
        [
        'ten'=> 'Xã Đắk Trăm',
        'loai'=> 3,
        'parent_id'=> 506
        ],
        [
        'ten'=> 'Xã Văn Lem',
        'loai'=> 3,
        'parent_id'=> 506
        ],
        [
        'ten'=> 'Xã Kon Đào',
        'loai'=> 3,
        'parent_id'=> 506
        ],
        [
        'ten'=> 'Xã Tân Cảnh',
        'loai'=> 3,
        'parent_id'=> 506
        ],
        [
        'ten'=> 'Xã Diên Bình',
        'loai'=> 3,
        'parent_id'=> 506
        ],
        [
        'ten'=> 'Xã Pô Kô',
        'loai'=> 3,
        'parent_id'=> 506
        ],
        [
        'ten'=> 'Xã Đắk Nên',
        'loai'=> 3,
        'parent_id'=> 507
        ],
        [
        'ten'=> 'Xã Đắk Ring',
        'loai'=> 3,
        'parent_id'=> 507
        ],
        [
        'ten'=> 'Xã Măng Buk',
        'loai'=> 3,
        'parent_id'=> 507
        ],
        [
        'ten'=> 'Xã Đắk Tăng',
        'loai'=> 3,
        'parent_id'=> 507
        ],
        [
        'ten'=> 'Xã Ngok Tem',
        'loai'=> 3,
        'parent_id'=> 507
        ],
        [
        'ten'=> 'Xã Pờ Ê',
        'loai'=> 3,
        'parent_id'=> 507
        ],
        [
        'ten'=> 'Xã Măng Cành',
        'loai'=> 3,
        'parent_id'=> 507
        ],
        [
        'ten'=> 'Thị trấn Măng Đen',
        'loai'=> 3,
        'parent_id'=> 507
        ],
        [
        'ten'=> 'Xã Hiếu',
        'loai'=> 3,
        'parent_id'=> 507
        ],
        [
        'ten'=> 'Thị trấn Đắk Rve',
        'loai'=> 3,
        'parent_id'=> 508
        ],
        [
        'ten'=> 'Xã Đắk Kôi',
        'loai'=> 3,
        'parent_id'=> 508
        ],
        [
        'ten'=> 'Xã Đắk Tơ Lung',
        'loai'=> 3,
        'parent_id'=> 508
        ],
        [
        'ten'=> 'Xã Đắk Ruồng',
        'loai'=> 3,
        'parent_id'=> 508
        ],
        [
        'ten'=> 'Xã Đắk Pne',
        'loai'=> 3,
        'parent_id'=> 508
        ],
        [
        'ten'=> 'Xã Đắk Tờ Re',
        'loai'=> 3,
        'parent_id'=> 508
        ],
        [
        'ten'=> 'Xã Tân Lập',
        'loai'=> 3,
        'parent_id'=> 508
        ],
        [
        'ten'=> 'Thị trấn Đắk Hà',
        'loai'=> 3,
        'parent_id'=> 509
        ],
        [
        'ten'=> 'Xã Đắk PXi',
        'loai'=> 3,
        'parent_id'=> 509
        ],
        [
        'ten'=> 'Xã Đăk Long',
        'loai'=> 3,
        'parent_id'=> 509
        ],
        [
        'ten'=> 'Xã Đắk HRing',
        'loai'=> 3,
        'parent_id'=> 509
        ],
        [
        'ten'=> 'Xã Đắk Ui',
        'loai'=> 3,
        'parent_id'=> 509
        ],
        [
        'ten'=> 'Xã Đăk Ngọk',
        'loai'=> 3,
        'parent_id'=> 509
        ],
        [
        'ten'=> 'Xã Đắk Mar',
        'loai'=> 3,
        'parent_id'=> 509
        ],
        [
        'ten'=> 'Xã Ngok Wang',
        'loai'=> 3,
        'parent_id'=> 509
        ],
        [
        'ten'=> 'Xã Ngok Réo',
        'loai'=> 3,
        'parent_id'=> 509
        ],
        [
        'ten'=> 'Xã Hà Mòn',
        'loai'=> 3,
        'parent_id'=> 509
        ],
        [
        'ten'=> 'Xã Đắk La',
        'loai'=> 3,
        'parent_id'=> 509
        ],
        [
        'ten'=> 'Thị trấn Sa Thầy',
        'loai'=> 3,
        'parent_id'=> 510
        ],
        [
        'ten'=> 'Xã Rơ Kơi',
        'loai'=> 3,
        'parent_id'=> 510
        ],
        [
        'ten'=> 'Xã Sa Nhơn',
        'loai'=> 3,
        'parent_id'=> 510
        ],
        [
        'ten'=> 'Xã Hơ Moong',
        'loai'=> 3,
        'parent_id'=> 510
        ],
        [
        'ten'=> 'Xã Mô Rai',
        'loai'=> 3,
        'parent_id'=> 510
        ],
        [
        'ten'=> 'Xã Sa Sơn',
        'loai'=> 3,
        'parent_id'=> 510
        ],
        [
        'ten'=> 'Xã Sa Nghĩa',
        'loai'=> 3,
        'parent_id'=> 510
        ],
        [
        'ten'=> 'Xã Sa Bình',
        'loai'=> 3,
        'parent_id'=> 510
        ],
        [
        'ten'=> 'Xã Ya Xiêr',
        'loai'=> 3,
        'parent_id'=> 510
        ],
        [
        'ten'=> 'Xã Ya Tăng',
        'loai'=> 3,
        'parent_id'=> 510
        ],
        [
        'ten'=> 'Xã Ya ly',
        'loai'=> 3,
        'parent_id'=> 510
        ],
        [
        'ten'=> 'Xã Ngọc Lây',
        'loai'=> 3,
        'parent_id'=> 511
        ],
        [
        'ten'=> 'Xã Đắk Na',
        'loai'=> 3,
        'parent_id'=> 511
        ],
        [
        'ten'=> 'Xã Măng Ri',
        'loai'=> 3,
        'parent_id'=> 511
        ],
        [
        'ten'=> 'Xã Ngọc Yêu',
        'loai'=> 3,
        'parent_id'=> 511
        ],
        [
        'ten'=> 'Xã Đắk Sao',
        'loai'=> 3,
        'parent_id'=> 511
        ],
        [
        'ten'=> 'Xã Đắk Rơ Ông',
        'loai'=> 3,
        'parent_id'=> 511
        ],
        [
        'ten'=> 'Xã Đắk Tờ Kan',
        'loai'=> 3,
        'parent_id'=> 511
        ],
        [
        'ten'=> 'Xã Tu Mơ Rông',
        'loai'=> 3,
        'parent_id'=> 511
        ],
        [
        'ten'=> 'Xã Đắk Hà',
        'loai'=> 3,
        'parent_id'=> 511
        ],
        [
        'ten'=> 'Xã Tê Xăng',
        'loai'=> 3,
        'parent_id'=> 511
        ],
        [
        'ten'=> 'Xã Văn Xuôi',
        'loai'=> 3,
        'parent_id'=> 511
        ],
        [
        'ten'=> 'Xã Ia Đal',
        'loai'=> 3,
        'parent_id'=> 512
        ],
        [
        'ten'=> 'Xã Ia Dom',
        'loai'=> 3,
        'parent_id'=> 512
        ],
        [
        'ten'=> 'Xã Ia Tơi',
        'loai'=> 3,
        'parent_id'=> 512
        ],
        [
        'ten'=> 'Phường Yên Đỗ',
        'loai'=> 3,
        'parent_id'=> 513
        ],
        [
        'ten'=> 'Phường Diên Hồng',
        'loai'=> 3,
        'parent_id'=> 513
        ],
        [
        'ten'=> 'Phường Ia Kring',
        'loai'=> 3,
        'parent_id'=> 513
        ],
        [
        'ten'=> 'Phường Hội Thương',
        'loai'=> 3,
        'parent_id'=> 513
        ],
        [
        'ten'=> 'Phường Hội Phú',
        'loai'=> 3,
        'parent_id'=> 513
        ],
        [
        'ten'=> 'Phường Phù Đổng',
        'loai'=> 3,
        'parent_id'=> 513
        ],
        [
        'ten'=> 'Phường Hoa Lư',
        'loai'=> 3,
        'parent_id'=> 513
        ],
        [
        'ten'=> 'Phường Tây Sơn',
        'loai'=> 3,
        'parent_id'=> 513
        ],
        [
        'ten'=> 'Phường Thống Nhất',
        'loai'=> 3,
        'parent_id'=> 513
        ],
        [
        'ten'=> 'Phường Đống Đa',
        'loai'=> 3,
        'parent_id'=> 513
        ],
        [
        'ten'=> 'Phường Trà Bá',
        'loai'=> 3,
        'parent_id'=> 513
        ],
        [
        'ten'=> 'Phường Thắng Lợi',
        'loai'=> 3,
        'parent_id'=> 513
        ],
        [
        'ten'=> 'Phường Yên Thế',
        'loai'=> 3,
        'parent_id'=> 513
        ],
        [
        'ten'=> 'Phường Chi Lăng',
        'loai'=> 3,
        'parent_id'=> 513
        ],
        [
        'ten'=> 'Xã Biển Hồ',
        'loai'=> 3,
        'parent_id'=> 513
        ],
        [
        'ten'=> 'Xã Tân Sơn',
        'loai'=> 3,
        'parent_id'=> 513
        ],
        [
        'ten'=> 'Xã Trà Đa',
        'loai'=> 3,
        'parent_id'=> 513
        ],
        [
        'ten'=> 'Xã Chư Á',
        'loai'=> 3,
        'parent_id'=> 513
        ],
        [
        'ten'=> 'Xã An Phú',
        'loai'=> 3,
        'parent_id'=> 513
        ],
        [
        'ten'=> 'Xã Diên Phú',
        'loai'=> 3,
        'parent_id'=> 513
        ],
        [
        'ten'=> 'Xã Ia Kênh',
        'loai'=> 3,
        'parent_id'=> 513
        ],
        [
        'ten'=> 'Xã Gào',
        'loai'=> 3,
        'parent_id'=> 513
        ],
        [
        'ten'=> 'Phường An Bình',
        'loai'=> 3,
        'parent_id'=> 514
        ],
        [
        'ten'=> 'Phường Tây Sơn',
        'loai'=> 3,
        'parent_id'=> 514
        ],
        [
        'ten'=> 'Phường An Phú',
        'loai'=> 3,
        'parent_id'=> 514
        ],
        [
        'ten'=> 'Phường An Tân',
        'loai'=> 3,
        'parent_id'=> 514
        ],
        [
        'ten'=> 'Xã Tú An',
        'loai'=> 3,
        'parent_id'=> 514
        ],
        [
        'ten'=> 'Xã Xuân An',
        'loai'=> 3,
        'parent_id'=> 514
        ],
        [
        'ten'=> 'Xã Cửu An',
        'loai'=> 3,
        'parent_id'=> 514
        ],
        [
        'ten'=> 'Phường An Phước',
        'loai'=> 3,
        'parent_id'=> 514
        ],
        [
        'ten'=> 'Xã Song An',
        'loai'=> 3,
        'parent_id'=> 514
        ],
        [
        'ten'=> 'Phường Ngô Mây',
        'loai'=> 3,
        'parent_id'=> 514
        ],
        [
        'ten'=> 'Xã Thành An',
        'loai'=> 3,
        'parent_id'=> 514
        ],
        [
        'ten'=> 'Phường Cheo Reo',
        'loai'=> 3,
        'parent_id'=> 515
        ],
        [
        'ten'=> 'Phường Hòa Bình',
        'loai'=> 3,
        'parent_id'=> 515
        ],
        [
        'ten'=> 'Phường Đoàn Kết',
        'loai'=> 3,
        'parent_id'=> 515
        ],
        [
        'ten'=> 'Phường Sông Bờ',
        'loai'=> 3,
        'parent_id'=> 515
        ],
        [
        'ten'=> 'Xã Ia RBol',
        'loai'=> 3,
        'parent_id'=> 515
        ],
        [
        'ten'=> 'Xã Chư Băh',
        'loai'=> 3,
        'parent_id'=> 515
        ],
        [
        'ten'=> 'Xã Ia RTô',
        'loai'=> 3,
        'parent_id'=> 515
        ],
        [
        'ten'=> 'Xã Ia Sao',
        'loai'=> 3,
        'parent_id'=> 515
        ],
        [
        'ten'=> 'Thị trấn KBang',
        'loai'=> 3,
        'parent_id'=> 516
        ],
        [
        'ten'=> 'Xã Kon Pne',
        'loai'=> 3,
        'parent_id'=> 516
        ],
        [
        'ten'=> 'Xã Đăk Roong',
        'loai'=> 3,
        'parent_id'=> 516
        ],
        [
        'ten'=> 'Xã Sơn Lang',
        'loai'=> 3,
        'parent_id'=> 516
        ],
        [
        'ten'=> 'Xã KRong',
        'loai'=> 3,
        'parent_id'=> 516
        ],
        [
        'ten'=> 'Xã Sơ Pai',
        'loai'=> 3,
        'parent_id'=> 516
        ],
        [
        'ten'=> 'Xã Lơ Ku',
        'loai'=> 3,
        'parent_id'=> 516
        ],
        [
        'ten'=> 'Xã Đông',
        'loai'=> 3,
        'parent_id'=> 516
        ],
        [
        'ten'=> 'Xã Đak SMar',
        'loai'=> 3,
        'parent_id'=> 516
        ],
        [
        'ten'=> 'Xã Nghĩa An',
        'loai'=> 3,
        'parent_id'=> 516
        ],
        [
        'ten'=> 'Xã Tơ Tung',
        'loai'=> 3,
        'parent_id'=> 516
        ],
        [
        'ten'=> 'Xã Kông Lơng Khơng',
        'loai'=> 3,
        'parent_id'=> 516
        ],
        [
        'ten'=> 'Xã Kông Pla',
        'loai'=> 3,
        'parent_id'=> 516
        ],
        [
        'ten'=> 'Xã Đăk HLơ',
        'loai'=> 3,
        'parent_id'=> 516
        ],
        [
        'ten'=> 'Thị trấn Đăk Đoa',
        'loai'=> 3,
        'parent_id'=> 517
        ],
        [
        'ten'=> 'Xã Hà Đông',
        'loai'=> 3,
        'parent_id'=> 517
        ],
        [
        'ten'=> 'Xã Đăk Sơmei',
        'loai'=> 3,
        'parent_id'=> 517
        ],
        [
        'ten'=> 'Xã Đăk Krong',
        'loai'=> 3,
        'parent_id'=> 517
        ],
        [
        'ten'=> 'Xã Hải Yang',
        'loai'=> 3,
        'parent_id'=> 517
        ],
        [
        'ten'=> 'Xã Kon Gang',
        'loai'=> 3,
        'parent_id'=> 517
        ],
        [
        'ten'=> 'Xã Hà Bầu',
        'loai'=> 3,
        'parent_id'=> 517
        ],
        [
        'ten'=> 'Xã Nam Yang',
        'loai'=> 3,
        'parent_id'=> 517
        ],
        [
        'ten'=> 'Xã K\' Dang',
        'loai'=> 3,
        'parent_id'=> 517
        ],
        [
        'ten'=> 'Xã H\' Neng',
        'loai'=> 3,
        'parent_id'=> 517
        ],
        [
        'ten'=> 'Xã Tân Bình',
        'loai'=> 3,
        'parent_id'=> 517
        ],
        [
        'ten'=> 'Xã Glar',
        'loai'=> 3,
        'parent_id'=> 517
        ],
        [
        'ten'=> 'Xã A Dơk',
        'loai'=> 3,
        'parent_id'=> 517
        ],
        [
        'ten'=> 'Xã Trang',
        'loai'=> 3,
        'parent_id'=> 517
        ],
        [
        'ten'=> 'Xã HNol',
        'loai'=> 3,
        'parent_id'=> 517
        ],
        [
        'ten'=> 'Xã Ia Pết',
        'loai'=> 3,
        'parent_id'=> 517
        ],
        [
        'ten'=> 'Xã Ia Băng',
        'loai'=> 3,
        'parent_id'=> 517
        ],
        [
        'ten'=> 'Thị trấn Phú Hòa',
        'loai'=> 3,
        'parent_id'=> 518
        ],
        [
        'ten'=> 'Xã Hà Tây',
        'loai'=> 3,
        'parent_id'=> 518
        ],
        [
        'ten'=> 'Xã Ia Khươl',
        'loai'=> 3,
        'parent_id'=> 518
        ],
        [
        'ten'=> 'Xã Ia Phí',
        'loai'=> 3,
        'parent_id'=> 518
        ],
        [
        'ten'=> 'Thị trấn Ia Ly',
        'loai'=> 3,
        'parent_id'=> 518
        ],
        [
        'ten'=> 'Xã Ia Mơ Nông',
        'loai'=> 3,
        'parent_id'=> 518
        ],
        [
        'ten'=> 'Xã Ia Kreng',
        'loai'=> 3,
        'parent_id'=> 518
        ],
        [
        'ten'=> 'Xã Đăk Tơ Ver',
        'loai'=> 3,
        'parent_id'=> 518
        ],
        [
        'ten'=> 'Xã Hòa Phú',
        'loai'=> 3,
        'parent_id'=> 518
        ],
        [
        'ten'=> 'Xã Chư Đăng Ya',
        'loai'=> 3,
        'parent_id'=> 518
        ],
        [
        'ten'=> 'Xã Ia Ka',
        'loai'=> 3,
        'parent_id'=> 518
        ],
        [
        'ten'=> 'Xã Ia Nhin',
        'loai'=> 3,
        'parent_id'=> 518
        ],
        [
        'ten'=> 'Xã Nghĩa Hòa',
        'loai'=> 3,
        'parent_id'=> 518
        ],
        [
        'ten'=> 'Xã Nghĩa Hưng',
        'loai'=> 3,
        'parent_id'=> 518
        ],
        [
        'ten'=> 'Thị trấn Ia Kha',
        'loai'=> 3,
        'parent_id'=> 519
        ],
        [
        'ten'=> 'Xã Ia Sao',
        'loai'=> 3,
        'parent_id'=> 519
        ],
        [
        'ten'=> 'Xã Ia Yok',
        'loai'=> 3,
        'parent_id'=> 519
        ],
        [
        'ten'=> 'Xã Ia Hrung',
        'loai'=> 3,
        'parent_id'=> 519
        ],
        [
        'ten'=> 'Xã Ia Bă',
        'loai'=> 3,
        'parent_id'=> 519
        ],
        [
        'ten'=> 'Xã Ia Khai',
        'loai'=> 3,
        'parent_id'=> 519
        ],
        [
        'ten'=> 'Xã Ia KRai',
        'loai'=> 3,
        'parent_id'=> 519
        ],
        [
        'ten'=> 'Xã Ia Grăng',
        'loai'=> 3,
        'parent_id'=> 519
        ],
        [
        'ten'=> 'Xã Ia Tô',
        'loai'=> 3,
        'parent_id'=> 519
        ],
        [
        'ten'=> 'Xã Ia O',
        'loai'=> 3,
        'parent_id'=> 519
        ],
        [
        'ten'=> 'Xã Ia Dêr',
        'loai'=> 3,
        'parent_id'=> 519
        ],
        [
        'ten'=> 'Xã Ia Chia',
        'loai'=> 3,
        'parent_id'=> 519
        ],
        [
        'ten'=> 'Xã Ia Pếch',
        'loai'=> 3,
        'parent_id'=> 519
        ],
        [
        'ten'=> 'Thị trấn Kon Dơng',
        'loai'=> 3,
        'parent_id'=> 520
        ],
        [
        'ten'=> 'Xã Ayun',
        'loai'=> 3,
        'parent_id'=> 520
        ],
        [
        'ten'=> 'Xã Đak Jơ Ta',
        'loai'=> 3,
        'parent_id'=> 520
        ],
        [
        'ten'=> 'Xã Đak Ta Ley',
        'loai'=> 3,
        'parent_id'=> 520
        ],
        [
        'ten'=> 'Xã Hra',
        'loai'=> 3,
        'parent_id'=> 520
        ],
        [
        'ten'=> 'Xã Đăk Yă',
        'loai'=> 3,
        'parent_id'=> 520
        ],
        [
        'ten'=> 'Xã Đăk Djrăng',
        'loai'=> 3,
        'parent_id'=> 520
        ],
        [
        'ten'=> 'Xã Lơ Pang',
        'loai'=> 3,
        'parent_id'=> 520
        ],
        [
        'ten'=> 'Xã Kon Thụp',
        'loai'=> 3,
        'parent_id'=> 520
        ],
        [
        'ten'=> 'Xã Đê Ar',
        'loai'=> 3,
        'parent_id'=> 520
        ],
        [
        'ten'=> 'Xã Kon Chiêng',
        'loai'=> 3,
        'parent_id'=> 520
        ],
        [
        'ten'=> 'Xã Đăk Trôi',
        'loai'=> 3,
        'parent_id'=> 520
        ],
        [
        'ten'=> 'Thị trấn Kông Chro',
        'loai'=> 3,
        'parent_id'=> 521
        ],
        [
        'ten'=> 'Xã Chư Krêy',
        'loai'=> 3,
        'parent_id'=> 521
        ],
        [
        'ten'=> 'Xã An Trung',
        'loai'=> 3,
        'parent_id'=> 521
        ],
        [
        'ten'=> 'Xã Kông Yang',
        'loai'=> 3,
        'parent_id'=> 521
        ],
        [
        'ten'=> 'Xã Đăk Tơ Pang',
        'loai'=> 3,
        'parent_id'=> 521
        ],
        [
        'ten'=> 'Xã SRó',
        'loai'=> 3,
        'parent_id'=> 521
        ],
        [
        'ten'=> 'Xã Đắk Kơ Ning',
        'loai'=> 3,
        'parent_id'=> 521
        ],
        [
        'ten'=> 'Xã Đăk Song',
        'loai'=> 3,
        'parent_id'=> 521
        ],
        [
        'ten'=> 'Xã Đăk Pling',
        'loai'=> 3,
        'parent_id'=> 521
        ],
        [
        'ten'=> 'Xã Yang Trung',
        'loai'=> 3,
        'parent_id'=> 521
        ],
        [
        'ten'=> 'Xã Đăk Pơ Pho',
        'loai'=> 3,
        'parent_id'=> 521
        ],
        [
        'ten'=> 'Xã Ya Ma',
        'loai'=> 3,
        'parent_id'=> 521
        ],
        [
        'ten'=> 'Xã Chơ Long',
        'loai'=> 3,
        'parent_id'=> 521
        ],
        [
        'ten'=> 'Xã Yang Nam',
        'loai'=> 3,
        'parent_id'=> 521
        ],
        [
        'ten'=> 'Thị trấn Chư Ty',
        'loai'=> 3,
        'parent_id'=> 522
        ],
        [
        'ten'=> 'Xã Ia Dơk',
        'loai'=> 3,
        'parent_id'=> 522
        ],
        [
        'ten'=> 'Xã Ia Krêl',
        'loai'=> 3,
        'parent_id'=> 522
        ],
        [
        'ten'=> 'Xã Ia Din',
        'loai'=> 3,
        'parent_id'=> 522
        ],
        [
        'ten'=> 'Xã Ia Kla',
        'loai'=> 3,
        'parent_id'=> 522
        ],
        [
        'ten'=> 'Xã Ia Dom',
        'loai'=> 3,
        'parent_id'=> 522
        ],
        [
        'ten'=> 'Xã Ia Lang',
        'loai'=> 3,
        'parent_id'=> 522
        ],
        [
        'ten'=> 'Xã Ia Kriêng',
        'loai'=> 3,
        'parent_id'=> 522
        ],
        [
        'ten'=> 'Xã Ia Pnôn',
        'loai'=> 3,
        'parent_id'=> 522
        ],
        [
        'ten'=> 'Xã Ia Nan',
        'loai'=> 3,
        'parent_id'=> 522
        ],
        [
        'ten'=> 'Thị trấn Chư Prông',
        'loai'=> 3,
        'parent_id'=> 523
        ],
        [
        'ten'=> 'Xã Ia Kly',
        'loai'=> 3,
        'parent_id'=> 523
        ],
        [
        'ten'=> 'Xã Bình Giáo',
        'loai'=> 3,
        'parent_id'=> 523
        ],
        [
        'ten'=> 'Xã Ia Drăng',
        'loai'=> 3,
        'parent_id'=> 523
        ],
        [
        'ten'=> 'Xã Thăng Hưng',
        'loai'=> 3,
        'parent_id'=> 523
        ],
        [
        'ten'=> 'Xã Bàu Cạn',
        'loai'=> 3,
        'parent_id'=> 523
        ],
        [
        'ten'=> 'Xã Ia Phìn',
        'loai'=> 3,
        'parent_id'=> 523
        ],
        [
        'ten'=> 'Xã Ia Băng',
        'loai'=> 3,
        'parent_id'=> 523
        ],
        [
        'ten'=> 'Xã Ia Tôr',
        'loai'=> 3,
        'parent_id'=> 523
        ],
        [
        'ten'=> 'Xã Ia Boòng',
        'loai'=> 3,
        'parent_id'=> 523
        ],
        [
        'ten'=> 'Xã Ia O',
        'loai'=> 3,
        'parent_id'=> 523
        ],
        [
        'ten'=> 'Xã Ia Púch',
        'loai'=> 3,
        'parent_id'=> 523
        ],
        [
        'ten'=> 'Xã Ia Me',
        'loai'=> 3,
        'parent_id'=> 523
        ],
        [
        'ten'=> 'Xã Ia Vê',
        'loai'=> 3,
        'parent_id'=> 523
        ],
        [
        'ten'=> 'Xã Ia Bang',
        'loai'=> 3,
        'parent_id'=> 523
        ],
        [
        'ten'=> 'Xã Ia Pia',
        'loai'=> 3,
        'parent_id'=> 523
        ],
        [
        'ten'=> 'Xã Ia Ga',
        'loai'=> 3,
        'parent_id'=> 523
        ],
        [
        'ten'=> 'Xã Ia Lâu',
        'loai'=> 3,
        'parent_id'=> 523
        ],
        [
        'ten'=> 'Xã Ia Piơr',
        'loai'=> 3,
        'parent_id'=> 523
        ],
        [
        'ten'=> 'Xã Ia Mơ',
        'loai'=> 3,
        'parent_id'=> 523
        ],
        [
        'ten'=> 'Thị trấn Chư Sê',
        'loai'=> 3,
        'parent_id'=> 524
        ],
        [
        'ten'=> 'Xã Ia Tiêm',
        'loai'=> 3,
        'parent_id'=> 524
        ],
        [
        'ten'=> 'Xã Chư Pơng',
        'loai'=> 3,
        'parent_id'=> 524
        ],
        [
        'ten'=> 'Xã Bar Măih',
        'loai'=> 3,
        'parent_id'=> 524
        ],
        [
        'ten'=> 'Xã Bờ Ngoong',
        'loai'=> 3,
        'parent_id'=> 524
        ],
        [
        'ten'=> 'Xã Ia Glai',
        'loai'=> 3,
        'parent_id'=> 524
        ],
        [
        'ten'=> 'Xã AL Bá',
        'loai'=> 3,
        'parent_id'=> 524
        ],
        [
        'ten'=> 'Xã Kông HTok',
        'loai'=> 3,
        'parent_id'=> 524
        ],
        [
        'ten'=> 'Xã AYun',
        'loai'=> 3,
        'parent_id'=> 524
        ],
        [
        'ten'=> 'Xã Ia HLốp',
        'loai'=> 3,
        'parent_id'=> 524
        ],
        [
        'ten'=> 'Xã Ia Blang',
        'loai'=> 3,
        'parent_id'=> 524
        ],
        [
        'ten'=> 'Xã Dun',
        'loai'=> 3,
        'parent_id'=> 524
        ],
        [
        'ten'=> 'Xã Ia Pal',
        'loai'=> 3,
        'parent_id'=> 524
        ],
        [
        'ten'=> 'Xã H Bông',
        'loai'=> 3,
        'parent_id'=> 524
        ],
        [
        'ten'=> 'Xã Ia Ko',
        'loai'=> 3,
        'parent_id'=> 524
        ],
        [
        'ten'=> 'Xã Hà Tam',
        'loai'=> 3,
        'parent_id'=> 525
        ],
        [
        'ten'=> 'Xã An Thành',
        'loai'=> 3,
        'parent_id'=> 525
        ],
        [
        'ten'=> 'Thị trấn Đak Pơ',
        'loai'=> 3,
        'parent_id'=> 525
        ],
        [
        'ten'=> 'Xã Yang Bắc',
        'loai'=> 3,
        'parent_id'=> 525
        ],
        [
        'ten'=> 'Xã Cư An',
        'loai'=> 3,
        'parent_id'=> 525
        ],
        [
        'ten'=> 'Xã Tân An',
        'loai'=> 3,
        'parent_id'=> 525
        ],
        [
        'ten'=> 'Xã Phú An',
        'loai'=> 3,
        'parent_id'=> 525
        ],
        [
        'ten'=> 'Xã Ya Hội',
        'loai'=> 3,
        'parent_id'=> 525
        ],
        [
        'ten'=> 'Xã Pờ Tó',
        'loai'=> 3,
        'parent_id'=> 526
        ],
        [
        'ten'=> 'Xã Chư Răng',
        'loai'=> 3,
        'parent_id'=> 526
        ],
        [
        'ten'=> 'Xã Ia KDăm',
        'loai'=> 3,
        'parent_id'=> 526
        ],
        [
        'ten'=> 'Xã Kim Tân',
        'loai'=> 3,
        'parent_id'=> 526
        ],
        [
        'ten'=> 'Xã Chư Mố',
        'loai'=> 3,
        'parent_id'=> 526
        ],
        [
        'ten'=> 'Xã Ia Tul',
        'loai'=> 3,
        'parent_id'=> 526
        ],
        [
        'ten'=> 'Xã Ia Ma Rơn',
        'loai'=> 3,
        'parent_id'=> 526
        ],
        [
        'ten'=> 'Xã Ia Broăi',
        'loai'=> 3,
        'parent_id'=> 526
        ],
        [
        'ten'=> 'Xã Ia Trok',
        'loai'=> 3,
        'parent_id'=> 526
        ],
        [
        'ten'=> 'Thị trấn Phú Túc',
        'loai'=> 3,
        'parent_id'=> 527
        ],
        [
        'ten'=> 'Xã Ia RSai',
        'loai'=> 3,
        'parent_id'=> 527
        ],
        [
        'ten'=> 'Xã Ia RSươm',
        'loai'=> 3,
        'parent_id'=> 527
        ],
        [
        'ten'=> 'Xã Chư Gu',
        'loai'=> 3,
        'parent_id'=> 527
        ],
        [
        'ten'=> 'Xã Đất Bằng',
        'loai'=> 3,
        'parent_id'=> 527
        ],
        [
        'ten'=> 'Xã Ia Mláh',
        'loai'=> 3,
        'parent_id'=> 527
        ],
        [
        'ten'=> 'Xã Chư Drăng',
        'loai'=> 3,
        'parent_id'=> 527
        ],
        [
        'ten'=> 'Xã Phú Cần',
        'loai'=> 3,
        'parent_id'=> 527
        ],
        [
        'ten'=> 'Xã Ia HDreh',
        'loai'=> 3,
        'parent_id'=> 527
        ],
        [
        'ten'=> 'Xã Ia RMok',
        'loai'=> 3,
        'parent_id'=> 527
        ],
        [
        'ten'=> 'Xã Chư Ngọc',
        'loai'=> 3,
        'parent_id'=> 527
        ],
        [
        'ten'=> 'Xã Uar',
        'loai'=> 3,
        'parent_id'=> 527
        ],
        [
        'ten'=> 'Xã Chư Rcăm',
        'loai'=> 3,
        'parent_id'=> 527
        ],
        [
        'ten'=> 'Xã Krông Năng',
        'loai'=> 3,
        'parent_id'=> 527
        ],
        [
        'ten'=> 'Thị trấn Phú Thiện',
        'loai'=> 3,
        'parent_id'=> 528
        ],
        [
        'ten'=> 'Xã Chư A Thai',
        'loai'=> 3,
        'parent_id'=> 528
        ],
        [
        'ten'=> 'Xã Ayun Hạ',
        'loai'=> 3,
        'parent_id'=> 528
        ],
        [
        'ten'=> 'Xã Ia Ake',
        'loai'=> 3,
        'parent_id'=> 528
        ],
        [
        'ten'=> 'Xã Ia Sol',
        'loai'=> 3,
        'parent_id'=> 528
        ],
        [
        'ten'=> 'Xã Ia Piar',
        'loai'=> 3,
        'parent_id'=> 528
        ],
        [
        'ten'=> 'Xã Ia Peng',
        'loai'=> 3,
        'parent_id'=> 528
        ],
        [
        'ten'=> 'Xã Chrôh Pơnan',
        'loai'=> 3,
        'parent_id'=> 528
        ],
        [
        'ten'=> 'Xã Ia Hiao',
        'loai'=> 3,
        'parent_id'=> 528
        ],
        [
        'ten'=> 'Xã Ia Yeng',
        'loai'=> 3,
        'parent_id'=> 528
        ],
        [
        'ten'=> 'Thị trấn Nhơn Hoà',
        'loai'=> 3,
        'parent_id'=> 529
        ],
        [
        'ten'=> 'Xã Ia Hrú',
        'loai'=> 3,
        'parent_id'=> 529
        ],
        [
        'ten'=> 'Xã Ia Rong',
        'loai'=> 3,
        'parent_id'=> 529
        ],
        [
        'ten'=> 'Xã Ia Dreng',
        'loai'=> 3,
        'parent_id'=> 529
        ],
        [
        'ten'=> 'Xã Ia Hla',
        'loai'=> 3,
        'parent_id'=> 529
        ],
        [
        'ten'=> 'Xã Chư Don',
        'loai'=> 3,
        'parent_id'=> 529
        ],
        [
        'ten'=> 'Xã Ia Phang',
        'loai'=> 3,
        'parent_id'=> 529
        ],
        [
        'ten'=> 'Xã Ia Le',
        'loai'=> 3,
        'parent_id'=> 529
        ],
        [
        'ten'=> 'Xã Ia BLứ',
        'loai'=> 3,
        'parent_id'=> 529
        ],
        [
        'ten'=> 'Phường Tân Lập',
        'loai'=> 3,
        'parent_id'=> 530
        ],
        [
        'ten'=> 'Phường Tân Hòa',
        'loai'=> 3,
        'parent_id'=> 530
        ],
        [
        'ten'=> 'Phường Tân An',
        'loai'=> 3,
        'parent_id'=> 530
        ],
        [
        'ten'=> 'Phường Thống Nhất',
        'loai'=> 3,
        'parent_id'=> 530
        ],
        [
        'ten'=> 'Phường Thành Nhất',
        'loai'=> 3,
        'parent_id'=> 530
        ],
        [
        'ten'=> 'Phường Thắng Lợi',
        'loai'=> 3,
        'parent_id'=> 530
        ],
        [
        'ten'=> 'Phường Tân Lợi',
        'loai'=> 3,
        'parent_id'=> 530
        ],
        [
        'ten'=> 'Phường Thành Công',
        'loai'=> 3,
        'parent_id'=> 530
        ],
        [
        'ten'=> 'Phường Tân Thành',
        'loai'=> 3,
        'parent_id'=> 530
        ],
        [
        'ten'=> 'Phường Tân Tiến',
        'loai'=> 3,
        'parent_id'=> 530
        ],
        [
        'ten'=> 'Phường Tự An',
        'loai'=> 3,
        'parent_id'=> 530
        ],
        [
        'ten'=> 'Phường Ea Tam',
        'loai'=> 3,
        'parent_id'=> 530
        ],
        [
        'ten'=> 'Phường Khánh Xuân',
        'loai'=> 3,
        'parent_id'=> 530
        ],
        [
        'ten'=> 'Xã Hòa Thuận',
        'loai'=> 3,
        'parent_id'=> 530
        ],
        [
        'ten'=> 'Xã Cư ÊBur',
        'loai'=> 3,
        'parent_id'=> 530
        ],
        [
        'ten'=> 'Xã Ea Tu',
        'loai'=> 3,
        'parent_id'=> 530
        ],
        [
        'ten'=> 'Xã Hòa Thắng',
        'loai'=> 3,
        'parent_id'=> 530
        ],
        [
        'ten'=> 'Xã Ea Kao',
        'loai'=> 3,
        'parent_id'=> 530
        ],
        [
        'ten'=> 'Xã Hòa Phú',
        'loai'=> 3,
        'parent_id'=> 530
        ],
        [
        'ten'=> 'Xã Hòa Khánh',
        'loai'=> 3,
        'parent_id'=> 530
        ],
        [
        'ten'=> 'Xã Hòa Xuân',
        'loai'=> 3,
        'parent_id'=> 530
        ],
        [
        'ten'=> 'Phường An Lạc',
        'loai'=> 3,
        'parent_id'=> 531
        ],
        [
        'ten'=> 'Phường An Bình',
        'loai'=> 3,
        'parent_id'=> 531
        ],
        [
        'ten'=> 'Phường Thiện An',
        'loai'=> 3,
        'parent_id'=> 531
        ],
        [
        'ten'=> 'Phường Đạt Hiếu',
        'loai'=> 3,
        'parent_id'=> 531
        ],
        [
        'ten'=> 'Phường Đoàn Kết',
        'loai'=> 3,
        'parent_id'=> 531
        ],
        [
        'ten'=> 'Xã Ea Blang',
        'loai'=> 3,
        'parent_id'=> 531
        ],
        [
        'ten'=> 'Xã Ea Drông',
        'loai'=> 3,
        'parent_id'=> 531
        ],
        [
        'ten'=> 'Phường Thống Nhất',
        'loai'=> 3,
        'parent_id'=> 531
        ],
        [
        'ten'=> 'Phường Bình Tân',
        'loai'=> 3,
        'parent_id'=> 531
        ],
        [
        'ten'=> 'Xã Ea Siên',
        'loai'=> 3,
        'parent_id'=> 531
        ],
        [
        'ten'=> 'Xã Bình Thuận',
        'loai'=> 3,
        'parent_id'=> 531
        ],
        [
        'ten'=> 'Xã Cư Bao',
        'loai'=> 3,
        'parent_id'=> 531
        ],
        [
        'ten'=> 'Thị trấn Ea Drăng',
        'loai'=> 3,
        'parent_id'=> 532
        ],
        [
        'ten'=> 'Xã Ea H\'leo',
        'loai'=> 3,
        'parent_id'=> 532
        ],
        [
        'ten'=> 'Xã Ea Sol',
        'loai'=> 3,
        'parent_id'=> 532
        ],
        [
        'ten'=> 'Xã Ea Ral',
        'loai'=> 3,
        'parent_id'=> 532
        ],
        [
        'ten'=> 'Xã Ea Wy',
        'loai'=> 3,
        'parent_id'=> 532
        ],
        [
        'ten'=> 'Xã Cư A Mung',
        'loai'=> 3,
        'parent_id'=> 532
        ],
        [
        'ten'=> 'Xã Cư Mốt',
        'loai'=> 3,
        'parent_id'=> 532
        ],
        [
        'ten'=> 'Xã Ea Hiao',
        'loai'=> 3,
        'parent_id'=> 532
        ],
        [
        'ten'=> 'Xã Ea Khal',
        'loai'=> 3,
        'parent_id'=> 532
        ],
        [
        'ten'=> 'Xã Dliê Yang',
        'loai'=> 3,
        'parent_id'=> 532
        ],
        [
        'ten'=> 'Xã Ea Tir',
        'loai'=> 3,
        'parent_id'=> 532
        ],
        [
        'ten'=> 'Xã Ea Nam',
        'loai'=> 3,
        'parent_id'=> 532
        ],
        [
        'ten'=> 'Thị trấn Ea Súp',
        'loai'=> 3,
        'parent_id'=> 533
        ],
        [
        'ten'=> 'Xã Ia Lốp',
        'loai'=> 3,
        'parent_id'=> 533
        ],
        [
        'ten'=> 'Xã Ia JLơi',
        'loai'=> 3,
        'parent_id'=> 533
        ],
        [
        'ten'=> 'Xã Ea Rốk',
        'loai'=> 3,
        'parent_id'=> 533
        ],
        [
        'ten'=> 'Xã Ya Tờ Mốt',
        'loai'=> 3,
        'parent_id'=> 533
        ],
        [
        'ten'=> 'Xã Ia RVê',
        'loai'=> 3,
        'parent_id'=> 533
        ],
        [
        'ten'=> 'Xã Ea Lê',
        'loai'=> 3,
        'parent_id'=> 533
        ],
        [
        'ten'=> 'Xã Cư KBang',
        'loai'=> 3,
        'parent_id'=> 533
        ],
        [
        'ten'=> 'Xã Ea Bung',
        'loai'=> 3,
        'parent_id'=> 533
        ],
        [
        'ten'=> 'Xã Cư M\'Lan',
        'loai'=> 3,
        'parent_id'=> 533
        ],
        [
        'ten'=> 'Xã Krông Na',
        'loai'=> 3,
        'parent_id'=> 534
        ],
        [
        'ten'=> 'Xã Ea Huar',
        'loai'=> 3,
        'parent_id'=> 534
        ],
        [
        'ten'=> 'Xã Ea Wer',
        'loai'=> 3,
        'parent_id'=> 534
        ],
        [
        'ten'=> 'Xã Tân Hoà',
        'loai'=> 3,
        'parent_id'=> 534
        ],
        [
        'ten'=> 'Xã Cuôr KNia',
        'loai'=> 3,
        'parent_id'=> 534
        ],
        [
        'ten'=> 'Xã Ea Bar',
        'loai'=> 3,
        'parent_id'=> 534
        ],
        [
        'ten'=> 'Xã Ea Nuôl',
        'loai'=> 3,
        'parent_id'=> 534
        ],
        [
        'ten'=> 'Thị trấn Ea Pốk',
        'loai'=> 3,
        'parent_id'=> 535
        ],
        [
        'ten'=> 'Thị trấn Quảng Phú',
        'loai'=> 3,
        'parent_id'=> 535
        ],
        [
        'ten'=> 'Xã Quảng Tiến',
        'loai'=> 3,
        'parent_id'=> 535
        ],
        [
        'ten'=> 'Xã Ea Kuêh',
        'loai'=> 3,
        'parent_id'=> 535
        ],
        [
        'ten'=> 'Xã Ea Kiết',
        'loai'=> 3,
        'parent_id'=> 535
        ],
        [
        'ten'=> 'Xã Ea Tar',
        'loai'=> 3,
        'parent_id'=> 535
        ],
        [
        'ten'=> 'Xã Cư Dliê M\'nông',
        'loai'=> 3,
        'parent_id'=> 535
        ],
        [
        'ten'=> 'Xã Ea H\'đinh',
        'loai'=> 3,
        'parent_id'=> 535
        ],
        [
        'ten'=> 'Xã Ea Tul',
        'loai'=> 3,
        'parent_id'=> 535
        ],
        [
        'ten'=> 'Xã Ea KPam',
        'loai'=> 3,
        'parent_id'=> 535
        ],
        [
        'ten'=> 'Xã Ea M\'DRóh',
        'loai'=> 3,
        'parent_id'=> 535
        ],
        [
        'ten'=> 'Xã Quảng Hiệp',
        'loai'=> 3,
        'parent_id'=> 535
        ],
        [
        'ten'=> 'Xã Cư M\'gar',
        'loai'=> 3,
        'parent_id'=> 535
        ],
        [
        'ten'=> 'Xã Ea D\'Rơng',
        'loai'=> 3,
        'parent_id'=> 535
        ],
        [
        'ten'=> 'Xã Ea M\'nang',
        'loai'=> 3,
        'parent_id'=> 535
        ],
        [
        'ten'=> 'Xã Cư Suê',
        'loai'=> 3,
        'parent_id'=> 535
        ],
        [
        'ten'=> 'Xã Cuor Đăng',
        'loai'=> 3,
        'parent_id'=> 535
        ],
        [
        'ten'=> 'Xã Cư Né',
        'loai'=> 3,
        'parent_id'=> 536
        ],
        [
        'ten'=> 'Xã Chư KBô',
        'loai'=> 3,
        'parent_id'=> 536
        ],
        [
        'ten'=> 'Xã Cư Pơng',
        'loai'=> 3,
        'parent_id'=> 536
        ],
        [
        'ten'=> 'Xã Ea Sin',
        'loai'=> 3,
        'parent_id'=> 536
        ],
        [
        'ten'=> 'Xã Pơng Drang',
        'loai'=> 3,
        'parent_id'=> 536
        ],
        [
        'ten'=> 'Xã Tân Lập',
        'loai'=> 3,
        'parent_id'=> 536
        ],
        [
        'ten'=> 'Xã Ea Ngai',
        'loai'=> 3,
        'parent_id'=> 536
        ],
        [
        'ten'=> 'Thị trấn Krông Năng',
        'loai'=> 3,
        'parent_id'=> 537
        ],
        [
        'ten'=> 'Xã ĐLiê Ya',
        'loai'=> 3,
        'parent_id'=> 537
        ],
        [
        'ten'=> 'Xã Ea Tóh',
        'loai'=> 3,
        'parent_id'=> 537
        ],
        [
        'ten'=> 'Xã Ea Tam',
        'loai'=> 3,
        'parent_id'=> 537
        ],
        [
        'ten'=> 'Xã Phú Lộc',
        'loai'=> 3,
        'parent_id'=> 537
        ],
        [
        'ten'=> 'Xã Tam Giang',
        'loai'=> 3,
        'parent_id'=> 537
        ],
        [
        'ten'=> 'Xã Ea Puk',
        'loai'=> 3,
        'parent_id'=> 537
        ],
        [
        'ten'=> 'Xã Ea Dăh',
        'loai'=> 3,
        'parent_id'=> 537
        ],
        [
        'ten'=> 'Xã Ea Hồ',
        'loai'=> 3,
        'parent_id'=> 537
        ],
        [
        'ten'=> 'Xã Phú Xuân',
        'loai'=> 3,
        'parent_id'=> 537
        ],
        [
        'ten'=> 'Xã Cư Klông',
        'loai'=> 3,
        'parent_id'=> 537
        ],
        [
        'ten'=> 'Xã Ea Tân',
        'loai'=> 3,
        'parent_id'=> 537
        ],
        [
        'ten'=> 'Thị trấn Ea Kar',
        'loai'=> 3,
        'parent_id'=> 538
        ],
        [
        'ten'=> 'Thị trấn Ea Knốp',
        'loai'=> 3,
        'parent_id'=> 538
        ],
        [
        'ten'=> 'Xã Ea Sô',
        'loai'=> 3,
        'parent_id'=> 538
        ],
        [
        'ten'=> 'Xã Ea Sar',
        'loai'=> 3,
        'parent_id'=> 538
        ],
        [
        'ten'=> 'Xã Xuân Phú',
        'loai'=> 3,
        'parent_id'=> 538
        ],
        [
        'ten'=> 'Xã Cư Huê',
        'loai'=> 3,
        'parent_id'=> 538
        ],
        [
        'ten'=> 'Xã Ea Tih',
        'loai'=> 3,
        'parent_id'=> 538
        ],
        [
        'ten'=> 'Xã Ea Đar',
        'loai'=> 3,
        'parent_id'=> 538
        ],
        [
        'ten'=> 'Xã Ea Kmút',
        'loai'=> 3,
        'parent_id'=> 538
        ],
        [
        'ten'=> 'Xã Cư Ni',
        'loai'=> 3,
        'parent_id'=> 538
        ],
        [
        'ten'=> 'Xã Ea Păl',
        'loai'=> 3,
        'parent_id'=> 538
        ],
        [
        'ten'=> 'Xã Cư Prông',
        'loai'=> 3,
        'parent_id'=> 538
        ],
        [
        'ten'=> 'Xã Ea Ô',
        'loai'=> 3,
        'parent_id'=> 538
        ],
        [
        'ten'=> 'Xã Cư ELang',
        'loai'=> 3,
        'parent_id'=> 538
        ],
        [
        'ten'=> 'Xã Cư Bông',
        'loai'=> 3,
        'parent_id'=> 538
        ],
        [
        'ten'=> 'Xã Cư Jang',
        'loai'=> 3,
        'parent_id'=> 538
        ],
        [
        'ten'=> 'Thị trấn M\'Đrắk',
        'loai'=> 3,
        'parent_id'=> 539
        ],
        [
        'ten'=> 'Xã Cư Prao',
        'loai'=> 3,
        'parent_id'=> 539
        ],
        [
        'ten'=> 'Xã Ea Pil',
        'loai'=> 3,
        'parent_id'=> 539
        ],
        [
        'ten'=> 'Xã Ea Lai',
        'loai'=> 3,
        'parent_id'=> 539
        ],
        [
        'ten'=> 'Xã Ea H\'MLay',
        'loai'=> 3,
        'parent_id'=> 539
        ],
        [
        'ten'=> 'Xã Krông Jing',
        'loai'=> 3,
        'parent_id'=> 539
        ],
        [
        'ten'=> 'Xã Ea M\' Doal',
        'loai'=> 3,
        'parent_id'=> 539
        ],
        [
        'ten'=> 'Xã Ea Riêng',
        'loai'=> 3,
        'parent_id'=> 539
        ],
        [
        'ten'=> 'Xã Cư M\'ta',
        'loai'=> 3,
        'parent_id'=> 539
        ],
        [
        'ten'=> 'Xã Cư K Róa',
        'loai'=> 3,
        'parent_id'=> 539
        ],
        [
        'ten'=> 'Xã Krông Á',
        'loai'=> 3,
        'parent_id'=> 539
        ],
        [
        'ten'=> 'Xã Cư San',
        'loai'=> 3,
        'parent_id'=> 539
        ],
        [
        'ten'=> 'Xã Ea Trang',
        'loai'=> 3,
        'parent_id'=> 539
        ],
        [
        'ten'=> 'Thị trấn Krông Kmar',
        'loai'=> 3,
        'parent_id'=> 540
        ],
        [
        'ten'=> 'Xã Dang Kang',
        'loai'=> 3,
        'parent_id'=> 540
        ],
        [
        'ten'=> 'Xã Cư KTy',
        'loai'=> 3,
        'parent_id'=> 540
        ],
        [
        'ten'=> 'Xã Hòa Thành',
        'loai'=> 3,
        'parent_id'=> 540
        ],
        [
        'ten'=> 'Xã Hòa Tân',
        'loai'=> 3,
        'parent_id'=> 540
        ],
        [
        'ten'=> 'Xã Hòa Phong',
        'loai'=> 3,
        'parent_id'=> 540
        ],
        [
        'ten'=> 'Xã Hòa Lễ',
        'loai'=> 3,
        'parent_id'=> 540
        ],
        [
        'ten'=> 'Xã Yang Reh',
        'loai'=> 3,
        'parent_id'=> 540
        ],
        [
        'ten'=> 'Xã Ea Trul',
        'loai'=> 3,
        'parent_id'=> 540
        ],
        [
        'ten'=> 'Xã Khuê Ngọc Điền',
        'loai'=> 3,
        'parent_id'=> 540
        ],
        [
        'ten'=> 'Xã Cư Pui',
        'loai'=> 3,
        'parent_id'=> 540
        ],
        [
        'ten'=> 'Xã Hòa Sơn',
        'loai'=> 3,
        'parent_id'=> 540
        ],
        [
        'ten'=> 'Xã Cư Drăm',
        'loai'=> 3,
        'parent_id'=> 540
        ],
        [
        'ten'=> 'Xã Yang Mao',
        'loai'=> 3,
        'parent_id'=> 540
        ],
        [
        'ten'=> 'Thị trấn Phước An',
        'loai'=> 3,
        'parent_id'=> 541
        ],
        [
        'ten'=> 'Xã KRông Búk',
        'loai'=> 3,
        'parent_id'=> 541
        ],
        [
        'ten'=> 'Xã Ea Kly',
        'loai'=> 3,
        'parent_id'=> 541
        ],
        [
        'ten'=> 'Xã Ea Kênh',
        'loai'=> 3,
        'parent_id'=> 541
        ],
        [
        'ten'=> 'Xã Ea Phê',
        'loai'=> 3,
        'parent_id'=> 541
        ],
        [
        'ten'=> 'Xã Ea KNuec',
        'loai'=> 3,
        'parent_id'=> 541
        ],
        [
        'ten'=> 'Xã Ea Yông',
        'loai'=> 3,
        'parent_id'=> 541
        ],
        [
        'ten'=> 'Xã Hòa An',
        'loai'=> 3,
        'parent_id'=> 541
        ],
        [
        'ten'=> 'Xã Ea Kuăng',
        'loai'=> 3,
        'parent_id'=> 541
        ],
        [
        'ten'=> 'Xã Hòa Đông',
        'loai'=> 3,
        'parent_id'=> 541
        ],
        [
        'ten'=> 'Xã Ea Hiu',
        'loai'=> 3,
        'parent_id'=> 541
        ],
        [
        'ten'=> 'Xã Hòa Tiến',
        'loai'=> 3,
        'parent_id'=> 541
        ],
        [
        'ten'=> 'Xã Tân Tiến',
        'loai'=> 3,
        'parent_id'=> 541
        ],
        [
        'ten'=> 'Xã Vụ Bổn',
        'loai'=> 3,
        'parent_id'=> 541
        ],
        [
        'ten'=> 'Xã Ea Uy',
        'loai'=> 3,
        'parent_id'=> 541
        ],
        [
        'ten'=> 'Xã Ea Yiêng',
        'loai'=> 3,
        'parent_id'=> 541
        ],
        [
        'ten'=> 'Thị trấn Buôn Trấp',
        'loai'=> 3,
        'parent_id'=> 542
        ],
        [
        'ten'=> 'Xã Dray Sáp',
        'loai'=> 3,
        'parent_id'=> 542
        ],
        [
        'ten'=> 'Xã Ea Na',
        'loai'=> 3,
        'parent_id'=> 542
        ],
        [
        'ten'=> 'Xã Ea Bông',
        'loai'=> 3,
        'parent_id'=> 542
        ],
        [
        'ten'=> 'Xã Băng A Drênh',
        'loai'=> 3,
        'parent_id'=> 542
        ],
        [
        'ten'=> 'Xã Dur KMăl',
        'loai'=> 3,
        'parent_id'=> 542
        ],
        [
        'ten'=> 'Xã Bình Hòa',
        'loai'=> 3,
        'parent_id'=> 542
        ],
        [
        'ten'=> 'Xã Quảng Điền',
        'loai'=> 3,
        'parent_id'=> 542
        ],
        [
        'ten'=> 'Thị trấn Liên Sơn',
        'loai'=> 3,
        'parent_id'=> 543
        ],
        [
        'ten'=> 'Xã Yang Tao',
        'loai'=> 3,
        'parent_id'=> 543
        ],
        [
        'ten'=> 'Xã Bông Krang',
        'loai'=> 3,
        'parent_id'=> 543
        ],
        [
        'ten'=> 'Xã Đắk Liêng',
        'loai'=> 3,
        'parent_id'=> 543
        ],
        [
        'ten'=> 'Xã Buôn Triết',
        'loai'=> 3,
        'parent_id'=> 543
        ],
        [
        'ten'=> 'Xã Buôn Tría',
        'loai'=> 3,
        'parent_id'=> 543
        ],
        [
        'ten'=> 'Xã Đắk Phơi',
        'loai'=> 3,
        'parent_id'=> 543
        ],
        [
        'ten'=> 'Xã Đắk Nuê',
        'loai'=> 3,
        'parent_id'=> 543
        ],
        [
        'ten'=> 'Xã Krông Nô',
        'loai'=> 3,
        'parent_id'=> 543
        ],
        [
        'ten'=> 'Xã Nam Ka',
        'loai'=> 3,
        'parent_id'=> 543
        ],
        [
        'ten'=> 'Xã Ea R\'Bin',
        'loai'=> 3,
        'parent_id'=> 543
        ],
        [
        'ten'=> 'Xã Ea Ning',
        'loai'=> 3,
        'parent_id'=> 544
        ],
        [
        'ten'=> 'Xã Cư Ê Wi',
        'loai'=> 3,
        'parent_id'=> 544
        ],
        [
        'ten'=> 'Xã Ea Ktur',
        'loai'=> 3,
        'parent_id'=> 544
        ],
        [
        'ten'=> 'Xã Ea Tiêu',
        'loai'=> 3,
        'parent_id'=> 544
        ],
        [
        'ten'=> 'Xã Ea BHốk',
        'loai'=> 3,
        'parent_id'=> 544
        ],
        [
        'ten'=> 'Xã Ea Hu',
        'loai'=> 3,
        'parent_id'=> 544
        ],
        [
        'ten'=> 'Xã Dray Bhăng',
        'loai'=> 3,
        'parent_id'=> 544
        ],
        [
        'ten'=> 'Xã Hòa Hiệp',
        'loai'=> 3,
        'parent_id'=> 544
        ],
        [
        'ten'=> 'Phường Nghĩa Đức',
        'loai'=> 3,
        'parent_id'=> 545
        ],
        [
        'ten'=> 'Phường Nghĩa Thành',
        'loai'=> 3,
        'parent_id'=> 545
        ],
        [
        'ten'=> 'Phường Nghĩa Phú',
        'loai'=> 3,
        'parent_id'=> 545
        ],
        [
        'ten'=> 'Phường Nghĩa Tân',
        'loai'=> 3,
        'parent_id'=> 545
        ],
        [
        'ten'=> 'Phường Nghĩa Trung',
        'loai'=> 3,
        'parent_id'=> 545
        ],
        [
        'ten'=> 'Xã Đăk R\'Moan',
        'loai'=> 3,
        'parent_id'=> 545
        ],
        [
        'ten'=> 'Phường Quảng Thành',
        'loai'=> 3,
        'parent_id'=> 545
        ],
        [
        'ten'=> 'Xã Đắk Nia',
        'loai'=> 3,
        'parent_id'=> 545
        ],
        [
        'ten'=> 'Xã Quảng Sơn',
        'loai'=> 3,
        'parent_id'=> 546
        ],
        [
        'ten'=> 'Xã Quảng Hoà',
        'loai'=> 3,
        'parent_id'=> 546
        ],
        [
        'ten'=> 'Xã Đắk Ha',
        'loai'=> 3,
        'parent_id'=> 546
        ],
        [
        'ten'=> 'Xã Đắk R\'Măng',
        'loai'=> 3,
        'parent_id'=> 546
        ],
        [
        'ten'=> 'Xã Quảng Khê',
        'loai'=> 3,
        'parent_id'=> 546
        ],
        [
        'ten'=> 'Xã Đắk Plao',
        'loai'=> 3,
        'parent_id'=> 546
        ],
        [
        'ten'=> 'Xã Đắk Som',
        'loai'=> 3,
        'parent_id'=> 546
        ],
        [
        'ten'=> 'Thị trấn Ea T\'Ling',
        'loai'=> 3,
        'parent_id'=> 547
        ],
        [
        'ten'=> 'Xã Đắk Wil',
        'loai'=> 3,
        'parent_id'=> 547
        ],
        [
        'ten'=> 'Xã Ea Pô',
        'loai'=> 3,
        'parent_id'=> 547
        ],
        [
        'ten'=> 'Xã Nam Dong',
        'loai'=> 3,
        'parent_id'=> 547
        ],
        [
        'ten'=> 'Xã Đắk DRông',
        'loai'=> 3,
        'parent_id'=> 547
        ],
        [
        'ten'=> 'Xã Tâm Thắng',
        'loai'=> 3,
        'parent_id'=> 547
        ],
        [
        'ten'=> 'Xã Cư Knia',
        'loai'=> 3,
        'parent_id'=> 547
        ],
        [
        'ten'=> 'Xã Trúc Sơn',
        'loai'=> 3,
        'parent_id'=> 547
        ],
        [
        'ten'=> 'Thị trấn Đắk Mil',
        'loai'=> 3,
        'parent_id'=> 548
        ],
        [
        'ten'=> 'Xã  Đắk Lao',
        'loai'=> 3,
        'parent_id'=> 548
        ],
        [
        'ten'=> 'Xã Đắk R\'La',
        'loai'=> 3,
        'parent_id'=> 548
        ],
        [
        'ten'=> 'Xã Đắk Gằn',
        'loai'=> 3,
        'parent_id'=> 548
        ],
        [
        'ten'=> 'Xã Đức Mạnh',
        'loai'=> 3,
        'parent_id'=> 548
        ],
        [
        'ten'=> 'Xã Đắk N\'Drót',
        'loai'=> 3,
        'parent_id'=> 548
        ],
        [
        'ten'=> 'Xã Long Sơn',
        'loai'=> 3,
        'parent_id'=> 548
        ],
        [
        'ten'=> 'Xã Đắk Sắk',
        'loai'=> 3,
        'parent_id'=> 548
        ],
        [
        'ten'=> 'Xã Thuận An',
        'loai'=> 3,
        'parent_id'=> 548
        ],
        [
        'ten'=> 'Xã Đức Minh',
        'loai'=> 3,
        'parent_id'=> 548
        ],
        [
        'ten'=> 'Thị trấn Đắk Mâm',
        'loai'=> 3,
        'parent_id'=> 549
        ],
        [
        'ten'=> 'Xã Đắk Sôr',
        'loai'=> 3,
        'parent_id'=> 549
        ],
        [
        'ten'=> 'Xã Nam Xuân',
        'loai'=> 3,
        'parent_id'=> 549
        ],
        [
        'ten'=> 'Xã Buôn Choah',
        'loai'=> 3,
        'parent_id'=> 549
        ],
        [
        'ten'=> 'Xã Nam Đà',
        'loai'=> 3,
        'parent_id'=> 549
        ],
        [
        'ten'=> 'Xã Tân Thành',
        'loai'=> 3,
        'parent_id'=> 549
        ],
        [
        'ten'=> 'Xã Đắk Drô',
        'loai'=> 3,
        'parent_id'=> 549
        ],
        [
        'ten'=> 'Xã Nâm Nung',
        'loai'=> 3,
        'parent_id'=> 549
        ],
        [
        'ten'=> 'Xã Đức Xuyên',
        'loai'=> 3,
        'parent_id'=> 549
        ],
        [
        'ten'=> 'Xã Đắk Nang',
        'loai'=> 3,
        'parent_id'=> 549
        ],
        [
        'ten'=> 'Xã Quảng Phú',
        'loai'=> 3,
        'parent_id'=> 549
        ],
        [
        'ten'=> 'Xã Nâm N\'Đir',
        'loai'=> 3,
        'parent_id'=> 549
        ],
        [
        'ten'=> 'Thị trấn Đức An',
        'loai'=> 3,
        'parent_id'=> 550
        ],
        [
        'ten'=> 'Xã Đắk Môl',
        'loai'=> 3,
        'parent_id'=> 550
        ],
        [
        'ten'=> 'Xã Đắk Hòa',
        'loai'=> 3,
        'parent_id'=> 550
        ],
        [
        'ten'=> 'Xã Nam Bình',
        'loai'=> 3,
        'parent_id'=> 550
        ],
        [
        'ten'=> 'Xã Thuận Hà',
        'loai'=> 3,
        'parent_id'=> 550
        ],
        [
        'ten'=> 'Xã Thuận Hạnh',
        'loai'=> 3,
        'parent_id'=> 550
        ],
        [
        'ten'=> 'Xã Đắk N\'Dung',
        'loai'=> 3,
        'parent_id'=> 550
        ],
        [
        'ten'=> 'Xã Nâm N\'Jang',
        'loai'=> 3,
        'parent_id'=> 550
        ],
        [
        'ten'=> 'Xã Trường Xuân',
        'loai'=> 3,
        'parent_id'=> 550
        ],
        [
        'ten'=> 'Thị trấn Kiến Đức',
        'loai'=> 3,
        'parent_id'=> 551
        ],
        [
        'ten'=> 'Xã Quảng Tín',
        'loai'=> 3,
        'parent_id'=> 551
        ],
        [
        'ten'=> 'Xã Đắk Wer',
        'loai'=> 3,
        'parent_id'=> 551
        ],
        [
        'ten'=> 'Xã Nhân Cơ',
        'loai'=> 3,
        'parent_id'=> 551
        ],
        [
        'ten'=> 'Xã Kiến Thành',
        'loai'=> 3,
        'parent_id'=> 551
        ],
        [
        'ten'=> 'Xã Nghĩa Thắng',
        'loai'=> 3,
        'parent_id'=> 551
        ],
        [
        'ten'=> 'Xã Đạo Nghĩa',
        'loai'=> 3,
        'parent_id'=> 551
        ],
        [
        'ten'=> 'Xã Đắk Sin',
        'loai'=> 3,
        'parent_id'=> 551
        ],
        [
        'ten'=> 'Xã Hưng Bình',
        'loai'=> 3,
        'parent_id'=> 551
        ],
        [
        'ten'=> 'Xã Đắk Ru',
        'loai'=> 3,
        'parent_id'=> 551
        ],
        [
        'ten'=> 'Xã Nhân Đạo',
        'loai'=> 3,
        'parent_id'=> 551
        ],
        [
        'ten'=> 'Xã Quảng Trực',
        'loai'=> 3,
        'parent_id'=> 552
        ],
        [
        'ten'=> 'Xã Đắk Búk So',
        'loai'=> 3,
        'parent_id'=> 552
        ],
        [
        'ten'=> 'Xã Quảng Tâm',
        'loai'=> 3,
        'parent_id'=> 552
        ],
        [
        'ten'=> 'Xã Đắk R\'Tíh',
        'loai'=> 3,
        'parent_id'=> 552
        ],
        [
        'ten'=> 'Xã Đắk Ngo',
        'loai'=> 3,
        'parent_id'=> 552
        ],
        [
        'ten'=> 'Xã Quảng Tân',
        'loai'=> 3,
        'parent_id'=> 552
        ],
        [
        'ten'=> 'Phường 7',
        'loai'=> 3,
        'parent_id'=> 553
        ],
        [
        'ten'=> 'Phường 8',
        'loai'=> 3,
        'parent_id'=> 553
        ],
        [
        'ten'=> 'Phường 12',
        'loai'=> 3,
        'parent_id'=> 553
        ],
        [
        'ten'=> 'Phường 9',
        'loai'=> 3,
        'parent_id'=> 553
        ],
        [
        'ten'=> 'Phường 2',
        'loai'=> 3,
        'parent_id'=> 553
        ],
        [
        'ten'=> 'Phường 1',
        'loai'=> 3,
        'parent_id'=> 553
        ],
        [
        'ten'=> 'Phường 6',
        'loai'=> 3,
        'parent_id'=> 553
        ],
        [
        'ten'=> 'Phường 5',
        'loai'=> 3,
        'parent_id'=> 553
        ],
        [
        'ten'=> 'Phường 4',
        'loai'=> 3,
        'parent_id'=> 553
        ],
        [
        'ten'=> 'Phường 10',
        'loai'=> 3,
        'parent_id'=> 553
        ],
        [
        'ten'=> 'Phường 11',
        'loai'=> 3,
        'parent_id'=> 553
        ],
        [
        'ten'=> 'Phường 3',
        'loai'=> 3,
        'parent_id'=> 553
        ],
        [
        'ten'=> 'Xã Xuân Thọ',
        'loai'=> 3,
        'parent_id'=> 553
        ],
        [
        'ten'=> 'Xã Tà Nung',
        'loai'=> 3,
        'parent_id'=> 553
        ],
        [
        'ten'=> 'Xã Trạm Hành',
        'loai'=> 3,
        'parent_id'=> 553
        ],
        [
        'ten'=> 'Xã Xuân Trường',
        'loai'=> 3,
        'parent_id'=> 553
        ],
        [
        'ten'=> 'Phường Lộc Phát',
        'loai'=> 3,
        'parent_id'=> 554
        ],
        [
        'ten'=> 'Phường Lộc Tiến',
        'loai'=> 3,
        'parent_id'=> 554
        ],
        [
        'ten'=> 'Phường 2',
        'loai'=> 3,
        'parent_id'=> 554
        ],
        [
        'ten'=> 'Phường 1',
        'loai'=> 3,
        'parent_id'=> 554
        ],
        [
        'ten'=> 'Phường B\'lao',
        'loai'=> 3,
        'parent_id'=> 554
        ],
        [
        'ten'=> 'Phường Lộc Sơn',
        'loai'=> 3,
        'parent_id'=> 554
        ],
        [
        'ten'=> 'Xã Đạm Bri',
        'loai'=> 3,
        'parent_id'=> 554
        ],
        [
        'ten'=> 'Xã Lộc Thanh',
        'loai'=> 3,
        'parent_id'=> 554
        ],
        [
        'ten'=> 'Xã Lộc Nga',
        'loai'=> 3,
        'parent_id'=> 554
        ],
        [
        'ten'=> 'Xã Lộc Châu',
        'loai'=> 3,
        'parent_id'=> 554
        ],
        [
        'ten'=> 'Xã Đại Lào',
        'loai'=> 3,
        'parent_id'=> 554
        ],
        [
        'ten'=> 'Xã Đạ Tông',
        'loai'=> 3,
        'parent_id'=> 555
        ],
        [
        'ten'=> 'Xã Đạ Long',
        'loai'=> 3,
        'parent_id'=> 555
        ],
        [
        'ten'=> 'Xã Đạ M\' Rong',
        'loai'=> 3,
        'parent_id'=> 555
        ],
        [
        'ten'=> 'Xã Liêng Srônh',
        'loai'=> 3,
        'parent_id'=> 555
        ],
        [
        'ten'=> 'Xã Đạ Rsal',
        'loai'=> 3,
        'parent_id'=> 555
        ],
        [
        'ten'=> 'Xã Rô Men',
        'loai'=> 3,
        'parent_id'=> 555
        ],
        [
        'ten'=> 'Xã Phi Liêng',
        'loai'=> 3,
        'parent_id'=> 555
        ],
        [
        'ten'=> 'Xã Đạ K\' Nàng',
        'loai'=> 3,
        'parent_id'=> 555
        ],
        [
        'ten'=> 'Thị trấn Lạc Dương',
        'loai'=> 3,
        'parent_id'=> 556
        ],
        [
        'ten'=> 'Xã Đạ Chais',
        'loai'=> 3,
        'parent_id'=> 556
        ],
        [
        'ten'=> 'Xã Đạ Nhim',
        'loai'=> 3,
        'parent_id'=> 556
        ],
        [
        'ten'=> 'Xã Đưng KNớ',
        'loai'=> 3,
        'parent_id'=> 556
        ],
        [
        'ten'=> 'Xã Lát',
        'loai'=> 3,
        'parent_id'=> 556
        ],
        [
        'ten'=> 'Xã Đạ Sar',
        'loai'=> 3,
        'parent_id'=> 556
        ],
        [
        'ten'=> 'Thị trấn Nam Ban',
        'loai'=> 3,
        'parent_id'=> 557
        ],
        [
        'ten'=> 'Thị trấn Đinh Văn',
        'loai'=> 3,
        'parent_id'=> 557
        ],
        [
        'ten'=> 'Xã Phú Sơn',
        'loai'=> 3,
        'parent_id'=> 557
        ],
        [
        'ten'=> 'Xã Phi Tô',
        'loai'=> 3,
        'parent_id'=> 557
        ],
        [
        'ten'=> 'Xã Mê Linh',
        'loai'=> 3,
        'parent_id'=> 557
        ],
        [
        'ten'=> 'Xã Đạ Đờn',
        'loai'=> 3,
        'parent_id'=> 557
        ],
        [
        'ten'=> 'Xã Phúc Thọ',
        'loai'=> 3,
        'parent_id'=> 557
        ],
        [
        'ten'=> 'Xã Đông Thanh',
        'loai'=> 3,
        'parent_id'=> 557
        ],
        [
        'ten'=> 'Xã Gia Lâm',
        'loai'=> 3,
        'parent_id'=> 557
        ],
        [
        'ten'=> 'Xã Tân Thanh',
        'loai'=> 3,
        'parent_id'=> 557
        ],
        [
        'ten'=> 'Xã Tân Văn',
        'loai'=> 3,
        'parent_id'=> 557
        ],
        [
        'ten'=> 'Xã Hoài Đức',
        'loai'=> 3,
        'parent_id'=> 557
        ],
        [
        'ten'=> 'Xã Tân Hà',
        'loai'=> 3,
        'parent_id'=> 557
        ],
        [
        'ten'=> 'Xã Liên Hà',
        'loai'=> 3,
        'parent_id'=> 557
        ],
        [
        'ten'=> 'Xã Đan Phượng',
        'loai'=> 3,
        'parent_id'=> 557
        ],
        [
        'ten'=> 'Xã Nam Hà',
        'loai'=> 3,
        'parent_id'=> 557
        ],
        [
        'ten'=> 'Thị trấn D\'Ran',
        'loai'=> 3,
        'parent_id'=> 558
        ],
        [
        'ten'=> 'Thị trấn Thạnh Mỹ',
        'loai'=> 3,
        'parent_id'=> 558
        ],
        [
        'ten'=> 'Xã Lạc Xuân',
        'loai'=> 3,
        'parent_id'=> 558
        ],
        [
        'ten'=> 'Xã Đạ Ròn',
        'loai'=> 3,
        'parent_id'=> 558
        ],
        [
        'ten'=> 'Xã Lạc Lâm',
        'loai'=> 3,
        'parent_id'=> 558
        ],
        [
        'ten'=> 'Xã Ka Đô',
        'loai'=> 3,
        'parent_id'=> 558
        ],
        [
        'ten'=> 'Xã Quảng Lập',
        'loai'=> 3,
        'parent_id'=> 558
        ],
        [
        'ten'=> 'Xã Ka Đơn',
        'loai'=> 3,
        'parent_id'=> 558
        ],
        [
        'ten'=> 'Xã Tu Tra',
        'loai'=> 3,
        'parent_id'=> 558
        ],
        [
        'ten'=> 'Xã Pró',
        'loai'=> 3,
        'parent_id'=> 558
        ],
        [
        'ten'=> 'Thị trấn Liên Nghĩa',
        'loai'=> 3,
        'parent_id'=> 559
        ],
        [
        'ten'=> 'Xã Hiệp An',
        'loai'=> 3,
        'parent_id'=> 559
        ],
        [
        'ten'=> 'Xã Liên Hiệp',
        'loai'=> 3,
        'parent_id'=> 559
        ],
        [
        'ten'=> 'Xã Hiệp Thạnh',
        'loai'=> 3,
        'parent_id'=> 559
        ],
        [
        'ten'=> 'Xã Bình Thạnh',
        'loai'=> 3,
        'parent_id'=> 559
        ],
        [
        'ten'=> 'Xã N\'Thol Hạ',
        'loai'=> 3,
        'parent_id'=> 559
        ],
        [
        'ten'=> 'Xã Tân Hội',
        'loai'=> 3,
        'parent_id'=> 559
        ],
        [
        'ten'=> 'Xã Tân Thành',
        'loai'=> 3,
        'parent_id'=> 559
        ],
        [
        'ten'=> 'Xã Phú Hội',
        'loai'=> 3,
        'parent_id'=> 559
        ],
        [
        'ten'=> 'Xã Ninh Gia',
        'loai'=> 3,
        'parent_id'=> 559
        ],
        [
        'ten'=> 'Xã Tà Năng',
        'loai'=> 3,
        'parent_id'=> 559
        ],
        [
        'ten'=> 'Xã Đa Quyn',
        'loai'=> 3,
        'parent_id'=> 559
        ],
        [
        'ten'=> 'Xã Tà Hine',
        'loai'=> 3,
        'parent_id'=> 559
        ],
        [
        'ten'=> 'Xã Đà Loan',
        'loai'=> 3,
        'parent_id'=> 559
        ],
        [
        'ten'=> 'Xã Ninh Loan',
        'loai'=> 3,
        'parent_id'=> 559
        ],
        [
        'ten'=> 'Thị trấn Di Linh',
        'loai'=> 3,
        'parent_id'=> 560
        ],
        [
        'ten'=> 'Xã Đinh Trang Thượng',
        'loai'=> 3,
        'parent_id'=> 560
        ],
        [
        'ten'=> 'Xã Tân Thượng',
        'loai'=> 3,
        'parent_id'=> 560
        ],
        [
        'ten'=> 'Xã Tân Lâm',
        'loai'=> 3,
        'parent_id'=> 560
        ],
        [
        'ten'=> 'Xã Tân Châu',
        'loai'=> 3,
        'parent_id'=> 560
        ],
        [
        'ten'=> 'Xã Tân Nghĩa',
        'loai'=> 3,
        'parent_id'=> 560
        ],
        [
        'ten'=> 'Xã Gia Hiệp',
        'loai'=> 3,
        'parent_id'=> 560
        ],
        [
        'ten'=> 'Xã Đinh Lạc',
        'loai'=> 3,
        'parent_id'=> 560
        ],
        [
        'ten'=> 'Xã Tam Bố',
        'loai'=> 3,
        'parent_id'=> 560
        ],
        [
        'ten'=> 'Xã Đinh Trang Hòa',
        'loai'=> 3,
        'parent_id'=> 560
        ],
        [
        'ten'=> 'Xã Liên Đầm',
        'loai'=> 3,
        'parent_id'=> 560
        ],
        [
        'ten'=> 'Xã Gung Ré',
        'loai'=> 3,
        'parent_id'=> 560
        ],
        [
        'ten'=> 'Xã Bảo Thuận',
        'loai'=> 3,
        'parent_id'=> 560
        ],
        [
        'ten'=> 'Xã Hòa Ninh',
        'loai'=> 3,
        'parent_id'=> 560
        ],
        [
        'ten'=> 'Xã Hòa Trung',
        'loai'=> 3,
        'parent_id'=> 560
        ],
        [
        'ten'=> 'Xã Hòa Nam',
        'loai'=> 3,
        'parent_id'=> 560
        ],
        [
        'ten'=> 'Xã Hòa Bắc',
        'loai'=> 3,
        'parent_id'=> 560
        ],
        [
        'ten'=> 'Xã Sơn Điền',
        'loai'=> 3,
        'parent_id'=> 560
        ],
        [
        'ten'=> 'Xã Gia Bắc',
        'loai'=> 3,
        'parent_id'=> 560
        ],
        [
        'ten'=> 'Thị trấn Lộc Thắng',
        'loai'=> 3,
        'parent_id'=> 106
        ],
        [
        'ten'=> 'Xã Lộc Bảo',
        'loai'=> 3,
        'parent_id'=> 106
        ],
        [
        'ten'=> 'Xã Lộc Lâm',
        'loai'=> 3,
        'parent_id'=> 106
        ],
        [
        'ten'=> 'Xã Lộc Phú',
        'loai'=> 3,
        'parent_id'=> 106
        ],
        [
        'ten'=> 'Xã Lộc Bắc',
        'loai'=> 3,
        'parent_id'=> 106
        ],
        [
        'ten'=> 'Xã B\' Lá',
        'loai'=> 3,
        'parent_id'=> 106
        ],
        [
        'ten'=> 'Xã Lộc Ngãi',
        'loai'=> 3,
        'parent_id'=> 106
        ],
        [
        'ten'=> 'Xã Lộc Quảng',
        'loai'=> 3,
        'parent_id'=> 106
        ],
        [
        'ten'=> 'Xã Lộc Tân',
        'loai'=> 3,
        'parent_id'=> 106
        ],
        [
        'ten'=> 'Xã Lộc Đức',
        'loai'=> 3,
        'parent_id'=> 106
        ],
        [
        'ten'=> 'Xã Lộc An',
        'loai'=> 3,
        'parent_id'=> 106
        ],
        [
        'ten'=> 'Xã Tân Lạc',
        'loai'=> 3,
        'parent_id'=> 106
        ],
        [
        'ten'=> 'Xã Lộc Thành',
        'loai'=> 3,
        'parent_id'=> 106
        ],
        [
        'ten'=> 'Xã Lộc Nam',
        'loai'=> 3,
        'parent_id'=> 106
        ],
        [
        'ten'=> 'Thị trấn Đạ M\'ri',
        'loai'=> 3,
        'parent_id'=> 562
        ],
        [
        'ten'=> 'Thị trấn Ma Đa Guôi',
        'loai'=> 3,
        'parent_id'=> 562
        ],
        [
        'ten'=> 'Xã Hà Lâm',
        'loai'=> 3,
        'parent_id'=> 562
        ],
        [
        'ten'=> 'Xã Đạ Tồn',
        'loai'=> 3,
        'parent_id'=> 562
        ],
        [
        'ten'=> 'Xã Đạ Oai',
        'loai'=> 3,
        'parent_id'=> 562
        ],
        [
        'ten'=> 'Xã Đạ Ploa',
        'loai'=> 3,
        'parent_id'=> 562
        ],
        [
        'ten'=> 'Xã Ma Đa Guôi',
        'loai'=> 3,
        'parent_id'=> 562
        ],
        [
        'ten'=> 'Xã Đoàn Kết',
        'loai'=> 3,
        'parent_id'=> 562
        ],
        [
        'ten'=> 'Xã Phước Lộc',
        'loai'=> 3,
        'parent_id'=> 562
        ],
        [
        'ten'=> 'Thị trấn Đạ Tẻh',
        'loai'=> 3,
        'parent_id'=> 563
        ],
        [
        'ten'=> 'Xã An Nhơn',
        'loai'=> 3,
        'parent_id'=> 563
        ],
        [
        'ten'=> 'Xã Quốc Oai',
        'loai'=> 3,
        'parent_id'=> 563
        ],
        [
        'ten'=> 'Xã Mỹ Đức',
        'loai'=> 3,
        'parent_id'=> 563
        ],
        [
        'ten'=> 'Xã Quảng Trị',
        'loai'=> 3,
        'parent_id'=> 563
        ],
        [
        'ten'=> 'Xã Đạ Lây',
        'loai'=> 3,
        'parent_id'=> 563
        ],
        [
        'ten'=> 'Xã Triệu Hải',
        'loai'=> 3,
        'parent_id'=> 563
        ],
        [
        'ten'=> 'Xã Đạ Kho',
        'loai'=> 3,
        'parent_id'=> 563
        ],
        [
        'ten'=> 'Xã Đạ Pal',
        'loai'=> 3,
        'parent_id'=> 563
        ],
        [
        'ten'=> 'Thị trấn Cát Tiên',
        'loai'=> 3,
        'parent_id'=> 564
        ],
        [
        'ten'=> 'Xã Tiên Hoàng',
        'loai'=> 3,
        'parent_id'=> 564
        ],
        [
        'ten'=> 'Xã Phước Cát 2',
        'loai'=> 3,
        'parent_id'=> 564
        ],
        [
        'ten'=> 'Xã Gia Viễn',
        'loai'=> 3,
        'parent_id'=> 564
        ],
        [
        'ten'=> 'Xã Nam Ninh',
        'loai'=> 3,
        'parent_id'=> 564
        ],
        [
        'ten'=> 'Thị trấn Phước Cát ',
        'loai'=> 3,
        'parent_id'=> 564
        ],
        [
        'ten'=> 'Xã Đức Phổ',
        'loai'=> 3,
        'parent_id'=> 564
        ],
        [
        'ten'=> 'Xã Quảng Ngãi',
        'loai'=> 3,
        'parent_id'=> 564
        ],
        [
        'ten'=> 'Xã Đồng Nai Thượng',
        'loai'=> 3,
        'parent_id'=> 564
        ],
        [
        'ten'=> 'Phường Thác Mơ',
        'loai'=> 3,
        'parent_id'=> 565
        ],
        [
        'ten'=> 'Phường Long Thủy',
        'loai'=> 3,
        'parent_id'=> 565
        ],
        [
        'ten'=> 'Phường Phước Bình',
        'loai'=> 3,
        'parent_id'=> 565
        ],
        [
        'ten'=> 'Phường Long Phước',
        'loai'=> 3,
        'parent_id'=> 565
        ],
        [
        'ten'=> 'Phường Sơn Giang',
        'loai'=> 3,
        'parent_id'=> 565
        ],
        [
        'ten'=> 'Xã Long Giang',
        'loai'=> 3,
        'parent_id'=> 565
        ],
        [
        'ten'=> 'Xã Phước Tín',
        'loai'=> 3,
        'parent_id'=> 565
        ],
        [
        'ten'=> 'Phường Tân Phú',
        'loai'=> 3,
        'parent_id'=> 566
        ],
        [
        'ten'=> 'Phường Tân Đồng',
        'loai'=> 3,
        'parent_id'=> 566
        ],
        [
        'ten'=> 'Phường Tân Bình',
        'loai'=> 3,
        'parent_id'=> 566
        ],
        [
        'ten'=> 'Phường Tân Xuân',
        'loai'=> 3,
        'parent_id'=> 566
        ],
        [
        'ten'=> 'Phường Tân Thiện',
        'loai'=> 3,
        'parent_id'=> 566
        ],
        [
        'ten'=> 'Xã Tân Thành',
        'loai'=> 3,
        'parent_id'=> 566
        ],
        [
        'ten'=> 'Phường Tiến Thành',
        'loai'=> 3,
        'parent_id'=> 566
        ],
        [
        'ten'=> 'Xã Tiến Hưng',
        'loai'=> 3,
        'parent_id'=> 566
        ],
        [
        'ten'=> 'Phường Hưng Chiến',
        'loai'=> 3,
        'parent_id'=> 567
        ],
        [
        'ten'=> 'Phường An Lộc',
        'loai'=> 3,
        'parent_id'=> 567
        ],
        [
        'ten'=> 'Phường Phú Thịnh',
        'loai'=> 3,
        'parent_id'=> 567
        ],
        [
        'ten'=> 'Phường Phú Đức',
        'loai'=> 3,
        'parent_id'=> 567
        ],
        [
        'ten'=> 'Xã Thanh Lương',
        'loai'=> 3,
        'parent_id'=> 567
        ],
        [
        'ten'=> 'Xã Thanh Phú',
        'loai'=> 3,
        'parent_id'=> 567
        ],
        [
        'ten'=> 'Xã Bù Gia Mập',
        'loai'=> 3,
        'parent_id'=> 568
        ],
        [
        'ten'=> 'Xã Đak Ơ',
        'loai'=> 3,
        'parent_id'=> 568
        ],
        [
        'ten'=> 'Xã Đức Hạnh',
        'loai'=> 3,
        'parent_id'=> 568
        ],
        [
        'ten'=> 'Xã Phú Văn',
        'loai'=> 3,
        'parent_id'=> 568
        ],
        [
        'ten'=> 'Xã Đa Kia',
        'loai'=> 3,
        'parent_id'=> 568
        ],
        [
        'ten'=> 'Xã Phước Minh',
        'loai'=> 3,
        'parent_id'=> 568
        ],
        [
        'ten'=> 'Xã Bình Thắng',
        'loai'=> 3,
        'parent_id'=> 568
        ],
        [
        'ten'=> 'Xã Phú Nghĩa',
        'loai'=> 3,
        'parent_id'=> 568
        ],
        [
        'ten'=> 'Thị trấn Lộc Ninh',
        'loai'=> 3,
        'parent_id'=> 569
        ],
        [
        'ten'=> 'Xã Lộc Hòa',
        'loai'=> 3,
        'parent_id'=> 569
        ],
        [
        'ten'=> 'Xã Lộc An',
        'loai'=> 3,
        'parent_id'=> 569
        ],
        [
        'ten'=> 'Xã Lộc Tấn',
        'loai'=> 3,
        'parent_id'=> 569
        ],
        [
        'ten'=> 'Xã Lộc Thạnh',
        'loai'=> 3,
        'parent_id'=> 569
        ],
        [
        'ten'=> 'Xã Lộc Hiệp',
        'loai'=> 3,
        'parent_id'=> 569
        ],
        [
        'ten'=> 'Xã Lộc Thiện',
        'loai'=> 3,
        'parent_id'=> 569
        ],
        [
        'ten'=> 'Xã Lộc Thuận',
        'loai'=> 3,
        'parent_id'=> 569
        ],
        [
        'ten'=> 'Xã Lộc Quang',
        'loai'=> 3,
        'parent_id'=> 569
        ],
        [
        'ten'=> 'Xã Lộc Phú',
        'loai'=> 3,
        'parent_id'=> 569
        ],
        [
        'ten'=> 'Xã Lộc Thành',
        'loai'=> 3,
        'parent_id'=> 569
        ],
        [
        'ten'=> 'Xã Lộc Thái',
        'loai'=> 3,
        'parent_id'=> 569
        ],
        [
        'ten'=> 'Xã Lộc Điền',
        'loai'=> 3,
        'parent_id'=> 569
        ],
        [
        'ten'=> 'Xã Lộc Hưng',
        'loai'=> 3,
        'parent_id'=> 569
        ],
        [
        'ten'=> 'Xã Lộc Thịnh',
        'loai'=> 3,
        'parent_id'=> 569
        ],
        [
        'ten'=> 'Xã Lộc Khánh',
        'loai'=> 3,
        'parent_id'=> 569
        ],
        [
        'ten'=> 'Thị trấn Thanh Bình',
        'loai'=> 3,
        'parent_id'=> 570
        ],
        [
        'ten'=> 'Xã Hưng Phước',
        'loai'=> 3,
        'parent_id'=> 570
        ],
        [
        'ten'=> 'Xã Phước Thiện',
        'loai'=> 3,
        'parent_id'=> 570
        ],
        [
        'ten'=> 'Xã Thiện Hưng',
        'loai'=> 3,
        'parent_id'=> 570
        ],
        [
        'ten'=> 'Xã Thanh Hòa',
        'loai'=> 3,
        'parent_id'=> 570
        ],
        [
        'ten'=> 'Xã Tân Thành',
        'loai'=> 3,
        'parent_id'=> 570
        ],
        [
        'ten'=> 'Xã Tân Tiến',
        'loai'=> 3,
        'parent_id'=> 570
        ],
        [
        'ten'=> 'Xã Thanh An',
        'loai'=> 3,
        'parent_id'=> 571
        ],
        [
        'ten'=> 'Xã An Khương',
        'loai'=> 3,
        'parent_id'=> 571
        ],
        [
        'ten'=> 'Xã An Phú',
        'loai'=> 3,
        'parent_id'=> 571
        ],
        [
        'ten'=> 'Xã Tân Lợi',
        'loai'=> 3,
        'parent_id'=> 571
        ],
        [
        'ten'=> 'Xã Tân Hưng',
        'loai'=> 3,
        'parent_id'=> 571
        ],
        [
        'ten'=> 'Xã Minh Đức',
        'loai'=> 3,
        'parent_id'=> 571
        ],
        [
        'ten'=> 'Xã Minh Tâm',
        'loai'=> 3,
        'parent_id'=> 571
        ],
        [
        'ten'=> 'Xã Phước An',
        'loai'=> 3,
        'parent_id'=> 571
        ],
        [
        'ten'=> 'Xã Thanh Bình',
        'loai'=> 3,
        'parent_id'=> 571
        ],
        [
        'ten'=> 'Thị trấn Tân Khai',
        'loai'=> 3,
        'parent_id'=> 571
        ],
        [
        'ten'=> 'Xã Đồng Nơ',
        'loai'=> 3,
        'parent_id'=> 571
        ],
        [
        'ten'=> 'Xã Tân Hiệp',
        'loai'=> 3,
        'parent_id'=> 571
        ],
        [
        'ten'=> 'Xã Tân Quan',
        'loai'=> 3,
        'parent_id'=> 571
        ],
        [
        'ten'=> 'Thị trấn Tân Phú',
        'loai'=> 3,
        'parent_id'=> 572
        ],
        [
        'ten'=> 'Xã Thuận Lợi',
        'loai'=> 3,
        'parent_id'=> 572
        ],
        [
        'ten'=> 'Xã Đồng Tâm',
        'loai'=> 3,
        'parent_id'=> 572
        ],
        [
        'ten'=> 'Xã Tân Phước',
        'loai'=> 3,
        'parent_id'=> 572
        ],
        [
        'ten'=> 'Xã Tân Hưng',
        'loai'=> 3,
        'parent_id'=> 572
        ],
        [
        'ten'=> 'Xã Tân Lợi',
        'loai'=> 3,
        'parent_id'=> 572
        ],
        [
        'ten'=> 'Xã Tân Lập',
        'loai'=> 3,
        'parent_id'=> 572
        ],
        [
        'ten'=> 'Xã Tân Hòa',
        'loai'=> 3,
        'parent_id'=> 572
        ],
        [
        'ten'=> 'Xã Thuận Phú',
        'loai'=> 3,
        'parent_id'=> 572
        ],
        [
        'ten'=> 'Xã Đồng Tiến',
        'loai'=> 3,
        'parent_id'=> 572
        ],
        [
        'ten'=> 'Xã Tân Tiến',
        'loai'=> 3,
        'parent_id'=> 572
        ],
        [
        'ten'=> 'Thị trấn Đức Phong',
        'loai'=> 3,
        'parent_id'=> 573
        ],
        [
        'ten'=> 'Xã Đường 10',
        'loai'=> 3,
        'parent_id'=> 573
        ],
        [
        'ten'=> 'Xã Đak Nhau',
        'loai'=> 3,
        'parent_id'=> 573
        ],
        [
        'ten'=> 'Xã Phú Sơn',
        'loai'=> 3,
        'parent_id'=> 573
        ],
        [
        'ten'=> 'Xã Thọ Sơn',
        'loai'=> 3,
        'parent_id'=> 573
        ],
        [
        'ten'=> 'Xã Bình Minh',
        'loai'=> 3,
        'parent_id'=> 573
        ],
        [
        'ten'=> 'Xã Bom Bo',
        'loai'=> 3,
        'parent_id'=> 573
        ],
        [
        'ten'=> 'Xã Minh Hưng',
        'loai'=> 3,
        'parent_id'=> 573
        ],
        [
        'ten'=> 'Xã Đoàn Kết',
        'loai'=> 3,
        'parent_id'=> 573
        ],
        [
        'ten'=> 'Xã Đồng Nai',
        'loai'=> 3,
        'parent_id'=> 573
        ],
        [
        'ten'=> 'Xã Đức Liễu',
        'loai'=> 3,
        'parent_id'=> 573
        ],
        [
        'ten'=> 'Xã Thống Nhất',
        'loai'=> 3,
        'parent_id'=> 573
        ],
        [
        'ten'=> 'Xã Nghĩa Trung',
        'loai'=> 3,
        'parent_id'=> 573
        ],
        [
        'ten'=> 'Xã Nghĩa Bình',
        'loai'=> 3,
        'parent_id'=> 573
        ],
        [
        'ten'=> 'Xã Đăng Hà',
        'loai'=> 3,
        'parent_id'=> 573
        ],
        [
        'ten'=> 'Xã Phước Sơn',
        'loai'=> 3,
        'parent_id'=> 573
        ],
        [
        'ten'=> 'Phường Hưng Long',
        'loai'=> 3,
        'parent_id'=> 574
        ],
        [
        'ten'=> 'Phường Thành Tâm',
        'loai'=> 3,
        'parent_id'=> 574
        ],
        [
        'ten'=> 'Xã Minh Lập',
        'loai'=> 3,
        'parent_id'=> 574
        ],
        [
        'ten'=> 'Xã Quang Minh',
        'loai'=> 3,
        'parent_id'=> 574
        ],
        [
        'ten'=> 'Phường Minh Hưng',
        'loai'=> 3,
        'parent_id'=> 574
        ],
        [
        'ten'=> 'Phường Minh Long',
        'loai'=> 3,
        'parent_id'=> 574
        ],
        [
        'ten'=> 'Phường Minh Thành',
        'loai'=> 3,
        'parent_id'=> 574
        ],
        [
        'ten'=> 'Xã Nha Bích',
        'loai'=> 3,
        'parent_id'=> 574
        ],
        [
        'ten'=> 'Xã Minh Thắng',
        'loai'=> 3,
        'parent_id'=> 574
        ],
        [
        'ten'=> 'Xã Long Bình',
        'loai'=> 3,
        'parent_id'=> 575
        ],
        [
        'ten'=> 'Xã Bình Tân',
        'loai'=> 3,
        'parent_id'=> 575
        ],
        [
        'ten'=> 'Xã Bình Sơn',
        'loai'=> 3,
        'parent_id'=> 575
        ],
        [
        'ten'=> 'Xã Long Hưng',
        'loai'=> 3,
        'parent_id'=> 575
        ],
        [
        'ten'=> 'Xã Phước Tân',
        'loai'=> 3,
        'parent_id'=> 575
        ],
        [
        'ten'=> 'Xã Bù Nho',
        'loai'=> 3,
        'parent_id'=> 575
        ],
        [
        'ten'=> 'Xã Long Hà',
        'loai'=> 3,
        'parent_id'=> 575
        ],
        [
        'ten'=> 'Xã Long Tân',
        'loai'=> 3,
        'parent_id'=> 575
        ],
        [
        'ten'=> 'Xã Phú Trung',
        'loai'=> 3,
        'parent_id'=> 575
        ],
        [
        'ten'=> 'Xã Phú Riềng',
        'loai'=> 3,
        'parent_id'=> 575
        ],
        [
        'ten'=> 'Phường 1',
        'loai'=> 3,
        'parent_id'=> 576
        ],
        [
        'ten'=> 'Phường 3',
        'loai'=> 3,
        'parent_id'=> 576
        ],
        [
        'ten'=> 'Phường 4',
        'loai'=> 3,
        'parent_id'=> 576
        ],
        [
        'ten'=> 'Phường Hiệp Ninh',
        'loai'=> 3,
        'parent_id'=> 576
        ],
        [
        'ten'=> 'Phường 2',
        'loai'=> 3,
        'parent_id'=> 576
        ],
        [
        'ten'=> 'Xã Thạnh Tân',
        'loai'=> 3,
        'parent_id'=> 576
        ],
        [
        'ten'=> 'Xã Tân Bình',
        'loai'=> 3,
        'parent_id'=> 576
        ],
        [
        'ten'=> 'Xã Bình Minh',
        'loai'=> 3,
        'parent_id'=> 576
        ],
        [
        'ten'=> 'Phường Ninh Sơn',
        'loai'=> 3,
        'parent_id'=> 576
        ],
        [
        'ten'=> 'Phường Ninh Thạnh',
        'loai'=> 3,
        'parent_id'=> 576
        ],
        [
        'ten'=> 'Thị trấn Tân Biên',
        'loai'=> 3,
        'parent_id'=> 577
        ],
        [
        'ten'=> 'Xã Tân Lập',
        'loai'=> 3,
        'parent_id'=> 577
        ],
        [
        'ten'=> 'Xã Thạnh Bắc',
        'loai'=> 3,
        'parent_id'=> 577
        ],
        [
        'ten'=> 'Xã Tân Bình',
        'loai'=> 3,
        'parent_id'=> 577
        ],
        [
        'ten'=> 'Xã Thạnh Bình',
        'loai'=> 3,
        'parent_id'=> 577
        ],
        [
        'ten'=> 'Xã Thạnh Tây',
        'loai'=> 3,
        'parent_id'=> 577
        ],
        [
        'ten'=> 'Xã Hòa Hiệp',
        'loai'=> 3,
        'parent_id'=> 577
        ],
        [
        'ten'=> 'Xã Tân Phong',
        'loai'=> 3,
        'parent_id'=> 577
        ],
        [
        'ten'=> 'Xã Mỏ Công',
        'loai'=> 3,
        'parent_id'=> 577
        ],
        [
        'ten'=> 'Xã Trà Vong',
        'loai'=> 3,
        'parent_id'=> 577
        ],
        [
        'ten'=> 'Thị trấn Tân Châu',
        'loai'=> 3,
        'parent_id'=> 578
        ],
        [
        'ten'=> 'Xã Tân Hà',
        'loai'=> 3,
        'parent_id'=> 578
        ],
        [
        'ten'=> 'Xã Tân Đông',
        'loai'=> 3,
        'parent_id'=> 578
        ],
        [
        'ten'=> 'Xã Tân Hội',
        'loai'=> 3,
        'parent_id'=> 578
        ],
        [
        'ten'=> 'Xã Tân Hòa',
        'loai'=> 3,
        'parent_id'=> 578
        ],
        [
        'ten'=> 'Xã Suối Ngô',
        'loai'=> 3,
        'parent_id'=> 578
        ],
        [
        'ten'=> 'Xã Suối Dây',
        'loai'=> 3,
        'parent_id'=> 578
        ],
        [
        'ten'=> 'Xã Tân Hiệp',
        'loai'=> 3,
        'parent_id'=> 578
        ],
        [
        'ten'=> 'Xã Thạnh Đông',
        'loai'=> 3,
        'parent_id'=> 578
        ],
        [
        'ten'=> 'Xã Tân Thành',
        'loai'=> 3,
        'parent_id'=> 578
        ],
        [
        'ten'=> 'Xã Tân Phú',
        'loai'=> 3,
        'parent_id'=> 578
        ],
        [
        'ten'=> 'Xã Tân Hưng',
        'loai'=> 3,
        'parent_id'=> 578
        ],
        [
        'ten'=> 'Thị trấn Dương Minh Châu',
        'loai'=> 3,
        'parent_id'=> 579
        ],
        [
        'ten'=> 'Xã Suối Đá',
        'loai'=> 3,
        'parent_id'=> 579
        ],
        [
        'ten'=> 'Xã Phan',
        'loai'=> 3,
        'parent_id'=> 579
        ],
        [
        'ten'=> 'Xã Phước Ninh',
        'loai'=> 3,
        'parent_id'=> 579
        ],
        [
        'ten'=> 'Xã Phước Minh',
        'loai'=> 3,
        'parent_id'=> 579
        ],
        [
        'ten'=> 'Xã Bàu Năng',
        'loai'=> 3,
        'parent_id'=> 579
        ],
        [
        'ten'=> 'Xã Chà Là',
        'loai'=> 3,
        'parent_id'=> 579
        ],
        [
        'ten'=> 'Xã Cầu Khởi',
        'loai'=> 3,
        'parent_id'=> 579
        ],
        [
        'ten'=> 'Xã Bến Củi',
        'loai'=> 3,
        'parent_id'=> 579
        ],
        [
        'ten'=> 'Xã Lộc Ninh',
        'loai'=> 3,
        'parent_id'=> 579
        ],
        [
        'ten'=> 'Xã Truông Mít',
        'loai'=> 3,
        'parent_id'=> 579
        ],
        [
        'ten'=> 'Thị trấn Châu Thành',
        'loai'=> 3,
        'parent_id'=> 580
        ],
        [
        'ten'=> 'Xã Hảo Đước',
        'loai'=> 3,
        'parent_id'=> 580
        ],
        [
        'ten'=> 'Xã Phước Vinh',
        'loai'=> 3,
        'parent_id'=> 580
        ],
        [
        'ten'=> 'Xã Đồng Khởi',
        'loai'=> 3,
        'parent_id'=> 580
        ],
        [
        'ten'=> 'Xã Thái Bình',
        'loai'=> 3,
        'parent_id'=> 580
        ],
        [
        'ten'=> 'Xã An Cơ',
        'loai'=> 3,
        'parent_id'=> 580
        ],
        [
        'ten'=> 'Xã Biên Giới',
        'loai'=> 3,
        'parent_id'=> 580
        ],
        [
        'ten'=> 'Xã Hòa Thạnh',
        'loai'=> 3,
        'parent_id'=> 580
        ],
        [
        'ten'=> 'Xã Trí Bình',
        'loai'=> 3,
        'parent_id'=> 580
        ],
        [
        'ten'=> 'Xã Hòa Hội',
        'loai'=> 3,
        'parent_id'=> 580
        ],
        [
        'ten'=> 'Xã An Bình',
        'loai'=> 3,
        'parent_id'=> 580
        ],
        [
        'ten'=> 'Xã Thanh Điền',
        'loai'=> 3,
        'parent_id'=> 580
        ],
        [
        'ten'=> 'Xã Thành Long',
        'loai'=> 3,
        'parent_id'=> 580
        ],
        [
        'ten'=> 'Xã Ninh Điền',
        'loai'=> 3,
        'parent_id'=> 580
        ],
        [
        'ten'=> 'Xã Long Vĩnh',
        'loai'=> 3,
        'parent_id'=> 580
        ],
        [
        'ten'=> 'Phường Long Hoa',
        'loai'=> 3,
        'parent_id'=> 581
        ],
        [
        'ten'=> 'Phường Hiệp Tân',
        'loai'=> 3,
        'parent_id'=> 581
        ],
        [
        'ten'=> 'Phường Long Thành Bắc',
        'loai'=> 3,
        'parent_id'=> 581
        ],
        [
        'ten'=> 'Xã Trường Hòa',
        'loai'=> 3,
        'parent_id'=> 581
        ],
        [
        'ten'=> 'Xã Trường Đông',
        'loai'=> 3,
        'parent_id'=> 581
        ],
        [
        'ten'=> 'Phường Long Thành Trung',
        'loai'=> 3,
        'parent_id'=> 581
        ],
        [
        'ten'=> 'Xã Trường Tây',
        'loai'=> 3,
        'parent_id'=> 581
        ],
        [
        'ten'=> 'Xã Long Thành Nam',
        'loai'=> 3,
        'parent_id'=> 581
        ],
        [
        'ten'=> 'Thị trấn Gò Dầu',
        'loai'=> 3,
        'parent_id'=> 582
        ],
        [
        'ten'=> 'Xã Thạnh Đức',
        'loai'=> 3,
        'parent_id'=> 582
        ],
        [
        'ten'=> 'Xã Cẩm Giang',
        'loai'=> 3,
        'parent_id'=> 582
        ],
        [
        'ten'=> 'Xã Hiệp Thạnh',
        'loai'=> 3,
        'parent_id'=> 582
        ],
        [
        'ten'=> 'Xã Bàu Đồn',
        'loai'=> 3,
        'parent_id'=> 582
        ],
        [
        'ten'=> 'Xã Phước Thạnh',
        'loai'=> 3,
        'parent_id'=> 582
        ],
        [
        'ten'=> 'Xã Phước Đông',
        'loai'=> 3,
        'parent_id'=> 582
        ],
        [
        'ten'=> 'Xã Phước Trạch',
        'loai'=> 3,
        'parent_id'=> 582
        ],
        [
        'ten'=> 'Xã Thanh Phước',
        'loai'=> 3,
        'parent_id'=> 582
        ],
        [
        'ten'=> 'Thị trấn Bến Cầu',
        'loai'=> 3,
        'parent_id'=> 583
        ],
        [
        'ten'=> 'Xã Long Chữ',
        'loai'=> 3,
        'parent_id'=> 583
        ],
        [
        'ten'=> 'Xã Long Phước',
        'loai'=> 3,
        'parent_id'=> 583
        ],
        [
        'ten'=> 'Xã Long Giang',
        'loai'=> 3,
        'parent_id'=> 583
        ],
        [
        'ten'=> 'Xã Tiên Thuận',
        'loai'=> 3,
        'parent_id'=> 583
        ],
        [
        'ten'=> 'Xã Long Khánh',
        'loai'=> 3,
        'parent_id'=> 583
        ],
        [
        'ten'=> 'Xã Lợi Thuận',
        'loai'=> 3,
        'parent_id'=> 583
        ],
        [
        'ten'=> 'Xã Long Thuận',
        'loai'=> 3,
        'parent_id'=> 583
        ],
        [
        'ten'=> 'Xã An Thạnh',
        'loai'=> 3,
        'parent_id'=> 583
        ],
        [
        'ten'=> 'Phường Trảng Bàng',
        'loai'=> 3,
        'parent_id'=> 584
        ],
        [
        'ten'=> 'Xã Đôn Thuận',
        'loai'=> 3,
        'parent_id'=> 584
        ],
        [
        'ten'=> 'Xã Hưng Thuận',
        'loai'=> 3,
        'parent_id'=> 584
        ],
        [
        'ten'=> 'Phường Lộc Hưng',
        'loai'=> 3,
        'parent_id'=> 584
        ],
        [
        'ten'=> 'Phường Gia Lộc',
        'loai'=> 3,
        'parent_id'=> 584
        ],
        [
        'ten'=> 'Phường Gia Bình',
        'loai'=> 3,
        'parent_id'=> 584
        ],
        [
        'ten'=> 'Xã Phước Bình',
        'loai'=> 3,
        'parent_id'=> 584
        ],
        [
        'ten'=> 'Phường An Tịnh',
        'loai'=> 3,
        'parent_id'=> 584
        ],
        [
        'ten'=> 'Phường An Hòa',
        'loai'=> 3,
        'parent_id'=> 584
        ],
        [
        'ten'=> 'Xã Phước Chỉ',
        'loai'=> 3,
        'parent_id'=> 584
        ],
        [
        'ten'=> 'Phường Hiệp Thành',
        'loai'=> 3,
        'parent_id'=> 585
        ],
        [
        'ten'=> 'Phường Phú Lợi',
        'loai'=> 3,
        'parent_id'=> 585
        ],
        [
        'ten'=> 'Phường Phú Cường',
        'loai'=> 3,
        'parent_id'=> 585
        ],
        [
        'ten'=> 'Phường Phú Hòa',
        'loai'=> 3,
        'parent_id'=> 585
        ],
        [
        'ten'=> 'Phường Phú Thọ',
        'loai'=> 3,
        'parent_id'=> 585
        ],
        [
        'ten'=> 'Phường Chánh Nghĩa',
        'loai'=> 3,
        'parent_id'=> 585
        ],
        [
        'ten'=> 'Phường Định Hoà',
        'loai'=> 3,
        'parent_id'=> 585
        ],
        [
        'ten'=> 'Phường Hoà Phú',
        'loai'=> 3,
        'parent_id'=> 585
        ],
        [
        'ten'=> 'Phường Phú Mỹ',
        'loai'=> 3,
        'parent_id'=> 585
        ],
        [
        'ten'=> 'Phường Phú Tân',
        'loai'=> 3,
        'parent_id'=> 585
        ],
        [
        'ten'=> 'Phường Tân An',
        'loai'=> 3,
        'parent_id'=> 585
        ],
        [
        'ten'=> 'Phường Hiệp An',
        'loai'=> 3,
        'parent_id'=> 585
        ],
        [
        'ten'=> 'Phường Tương Bình Hiệp',
        'loai'=> 3,
        'parent_id'=> 585
        ],
        [
        'ten'=> 'Phường Chánh Mỹ',
        'loai'=> 3,
        'parent_id'=> 585
        ],
        [
        'ten'=> 'Xã Trừ Văn Thố',
        'loai'=> 3,
        'parent_id'=> 586
        ],
        [
        'ten'=> 'Xã Cây Trường II',
        'loai'=> 3,
        'parent_id'=> 586
        ],
        [
        'ten'=> 'Thị trấn Lai Uyên',
        'loai'=> 3,
        'parent_id'=> 586
        ],
        [
        'ten'=> 'Xã Tân Hưng',
        'loai'=> 3,
        'parent_id'=> 586
        ],
        [
        'ten'=> 'Xã Long Nguyên',
        'loai'=> 3,
        'parent_id'=> 586
        ],
        [
        'ten'=> 'Xã Hưng Hòa',
        'loai'=> 3,
        'parent_id'=> 586
        ],
        [
        'ten'=> 'Xã Lai Hưng',
        'loai'=> 3,
        'parent_id'=> 586
        ],
        [
        'ten'=> 'Thị trấn Dầu Tiếng',
        'loai'=> 3,
        'parent_id'=> 587
        ],
        [
        'ten'=> 'Xã Minh Hoà',
        'loai'=> 3,
        'parent_id'=> 587
        ],
        [
        'ten'=> 'Xã Minh Thạnh',
        'loai'=> 3,
        'parent_id'=> 587
        ],
        [
        'ten'=> 'Xã Minh Tân',
        'loai'=> 3,
        'parent_id'=> 587
        ],
        [
        'ten'=> 'Xã Định An',
        'loai'=> 3,
        'parent_id'=> 587
        ],
        [
        'ten'=> 'Xã Long Hoà',
        'loai'=> 3,
        'parent_id'=> 587
        ],
        [
        'ten'=> 'Xã Định Thành',
        'loai'=> 3,
        'parent_id'=> 587
        ],
        [
        'ten'=> 'Xã Định Hiệp',
        'loai'=> 3,
        'parent_id'=> 587
        ],
        [
        'ten'=> 'Xã An Lập',
        'loai'=> 3,
        'parent_id'=> 587
        ],
        [
        'ten'=> 'Xã Long Tân',
        'loai'=> 3,
        'parent_id'=> 587
        ],
        [
        'ten'=> 'Xã Thanh An',
        'loai'=> 3,
        'parent_id'=> 587
        ],
        [
        'ten'=> 'Xã Thanh Tuyền',
        'loai'=> 3,
        'parent_id'=> 587
        ],
        [
        'ten'=> 'Phường Mỹ Phước',
        'loai'=> 3,
        'parent_id'=> 588
        ],
        [
        'ten'=> 'Phường Chánh Phú Hòa',
        'loai'=> 3,
        'parent_id'=> 588
        ],
        [
        'ten'=> 'Xã An Điền',
        'loai'=> 3,
        'parent_id'=> 588
        ],
        [
        'ten'=> 'Xã An Tây',
        'loai'=> 3,
        'parent_id'=> 588
        ],
        [
        'ten'=> 'Phường Thới Hòa',
        'loai'=> 3,
        'parent_id'=> 588
        ],
        [
        'ten'=> 'Phường Hòa Lợi',
        'loai'=> 3,
        'parent_id'=> 588
        ],
        [
        'ten'=> 'Phường Tân Định',
        'loai'=> 3,
        'parent_id'=> 588
        ],
        [
        'ten'=> 'Xã Phú An',
        'loai'=> 3,
        'parent_id'=> 588
        ],
        [
        'ten'=> 'Thị trấn Phước Vĩnh',
        'loai'=> 3,
        'parent_id'=> 589
        ],
        [
        'ten'=> 'Xã An Linh',
        'loai'=> 3,
        'parent_id'=> 589
        ],
        [
        'ten'=> 'Xã Phước Sang',
        'loai'=> 3,
        'parent_id'=> 589
        ],
        [
        'ten'=> 'Xã An Thái',
        'loai'=> 3,
        'parent_id'=> 589
        ],
        [
        'ten'=> 'Xã An Long',
        'loai'=> 3,
        'parent_id'=> 589
        ],
        [
        'ten'=> 'Xã An Bình',
        'loai'=> 3,
        'parent_id'=> 589
        ],
        [
        'ten'=> 'Xã Tân Hiệp',
        'loai'=> 3,
        'parent_id'=> 589
        ],
        [
        'ten'=> 'Xã Tam Lập',
        'loai'=> 3,
        'parent_id'=> 589
        ],
        [
        'ten'=> 'Xã Tân Long',
        'loai'=> 3,
        'parent_id'=> 589
        ],
        [
        'ten'=> 'Xã Vĩnh Hoà',
        'loai'=> 3,
        'parent_id'=> 589
        ],
        [
        'ten'=> 'Xã Phước Hoà',
        'loai'=> 3,
        'parent_id'=> 589
        ],
        [
        'ten'=> 'Phường Uyên Hưng',
        'loai'=> 3,
        'parent_id'=> 590
        ],
        [
        'ten'=> 'Phường Tân Phước Khánh',
        'loai'=> 3,
        'parent_id'=> 590
        ],
        [
        'ten'=> 'Phường Vĩnh Tân',
        'loai'=> 3,
        'parent_id'=> 590
        ],
        [
        'ten'=> 'Phường Hội Nghĩa',
        'loai'=> 3,
        'parent_id'=> 590
        ],
        [
        'ten'=> 'Phường Tân Hiệp',
        'loai'=> 3,
        'parent_id'=> 590
        ],
        [
        'ten'=> 'Phường Khánh Bình',
        'loai'=> 3,
        'parent_id'=> 590
        ],
        [
        'ten'=> 'Phường Phú Chánh',
        'loai'=> 3,
        'parent_id'=> 590
        ],
        [
        'ten'=> 'Xã Bạch Đằng',
        'loai'=> 3,
        'parent_id'=> 590
        ],
        [
        'ten'=> 'Phường Tân Vĩnh Hiệp',
        'loai'=> 3,
        'parent_id'=> 590
        ],
        [
        'ten'=> 'Phường Thạnh Phước',
        'loai'=> 3,
        'parent_id'=> 590
        ],
        [
        'ten'=> 'Xã Thạnh Hội',
        'loai'=> 3,
        'parent_id'=> 590
        ],
        [
        'ten'=> 'Phường Thái Hòa',
        'loai'=> 3,
        'parent_id'=> 590
        ],
        [
        'ten'=> 'Phường Dĩ An',
        'loai'=> 3,
        'parent_id'=> 591
        ],
        [
        'ten'=> 'Phường Tân Bình',
        'loai'=> 3,
        'parent_id'=> 591
        ],
        [
        'ten'=> 'Phường Tân Đông Hiệp',
        'loai'=> 3,
        'parent_id'=> 591
        ],
        [
        'ten'=> 'Phường Bình An',
        'loai'=> 3,
        'parent_id'=> 591
        ],
        [
        'ten'=> 'Phường Bình Thắng',
        'loai'=> 3,
        'parent_id'=> 591
        ],
        [
        'ten'=> 'Phường Đông Hòa',
        'loai'=> 3,
        'parent_id'=> 591
        ],
        [
        'ten'=> 'Phường An Bình',
        'loai'=> 3,
        'parent_id'=> 591
        ],
        [
        'ten'=> 'Phường An Thạnh',
        'loai'=> 3,
        'parent_id'=> 592
        ],
        [
        'ten'=> 'Phường Lái Thiêu',
        'loai'=> 3,
        'parent_id'=> 592
        ],
        [
        'ten'=> 'Phường Bình Chuẩn',
        'loai'=> 3,
        'parent_id'=> 592
        ],
        [
        'ten'=> 'Phường Thuận Giao',
        'loai'=> 3,
        'parent_id'=> 592
        ],
        [
        'ten'=> 'Phường An Phú',
        'loai'=> 3,
        'parent_id'=> 592
        ],
        [
        'ten'=> 'Phường Hưng Định',
        'loai'=> 3,
        'parent_id'=> 592
        ],
        [
        'ten'=> 'Xã An Sơn',
        'loai'=> 3,
        'parent_id'=> 592
        ],
        [
        'ten'=> 'Phường Bình Nhâm',
        'loai'=> 3,
        'parent_id'=> 592
        ],
        [
        'ten'=> 'Phường Bình Hòa',
        'loai'=> 3,
        'parent_id'=> 592
        ],
        [
        'ten'=> 'Phường Vĩnh Phú',
        'loai'=> 3,
        'parent_id'=> 592
        ],
        [
        'ten'=> 'Xã Tân Định',
        'loai'=> 3,
        'parent_id'=> 593
        ],
        [
        'ten'=> 'Xã Bình Mỹ',
        'loai'=> 3,
        'parent_id'=> 593
        ],
        [
        'ten'=> 'Thị trấn Tân Bình',
        'loai'=> 3,
        'parent_id'=> 593
        ],
        [
        'ten'=> 'Xã Tân Lập',
        'loai'=> 3,
        'parent_id'=> 593
        ],
        [
        'ten'=> 'Thị trấn Tân Thành',
        'loai'=> 3,
        'parent_id'=> 593
        ],
        [
        'ten'=> 'Xã Đất Cuốc',
        'loai'=> 3,
        'parent_id'=> 593
        ],
        [
        'ten'=> 'Xã Hiếu Liêm',
        'loai'=> 3,
        'parent_id'=> 593
        ],
        [
        'ten'=> 'Xã Lạc An',
        'loai'=> 3,
        'parent_id'=> 593
        ],
        [
        'ten'=> 'Xã Tân Mỹ',
        'loai'=> 3,
        'parent_id'=> 593
        ],
        [
        'ten'=> 'Xã Thường Tân',
        'loai'=> 3,
        'parent_id'=> 593
        ],
        [
        'ten'=> 'Phường Trảng Dài',
        'loai'=> 3,
        'parent_id'=> 594
        ],
        [
        'ten'=> 'Phường Tân Phong',
        'loai'=> 3,
        'parent_id'=> 594
        ],
        [
        'ten'=> 'Phường Tân Biên',
        'loai'=> 3,
        'parent_id'=> 594
        ],
        [
        'ten'=> 'Phường Hố Nai',
        'loai'=> 3,
        'parent_id'=> 594
        ],
        [
        'ten'=> 'Phường Tân Hòa',
        'loai'=> 3,
        'parent_id'=> 594
        ],
        [
        'ten'=> 'Phường Tân Hiệp',
        'loai'=> 3,
        'parent_id'=> 594
        ],
        [
        'ten'=> 'Phường Bửu Long',
        'loai'=> 3,
        'parent_id'=> 594
        ],
        [
        'ten'=> 'Phường Tân Tiến',
        'loai'=> 3,
        'parent_id'=> 594
        ],
        [
        'ten'=> 'Phường Tam Hiệp',
        'loai'=> 3,
        'parent_id'=> 594
        ],
        [
        'ten'=> 'Phường Long Bình',
        'loai'=> 3,
        'parent_id'=> 594
        ],
        [
        'ten'=> 'Phường Quang Vinh',
        'loai'=> 3,
        'parent_id'=> 594
        ],
        [
        'ten'=> 'Phường Tân Mai',
        'loai'=> 3,
        'parent_id'=> 594
        ],
        [
        'ten'=> 'Phường Thống Nhất',
        'loai'=> 3,
        'parent_id'=> 594
        ],
        [
        'ten'=> 'Phường Trung Dũng',
        'loai'=> 3,
        'parent_id'=> 594
        ],
        [
        'ten'=> 'Phường Tam Hòa',
        'loai'=> 3,
        'parent_id'=> 594
        ],
        [
        'ten'=> 'Phường Hòa Bình',
        'loai'=> 3,
        'parent_id'=> 594
        ],
        [
        'ten'=> 'Phường Quyết Thắng',
        'loai'=> 3,
        'parent_id'=> 594
        ],
        [
        'ten'=> 'Phường Thanh Bình',
        'loai'=> 3,
        'parent_id'=> 594
        ],
        [
        'ten'=> 'Phường Bình Đa',
        'loai'=> 3,
        'parent_id'=> 594
        ],
        [
        'ten'=> 'Phường An Bình',
        'loai'=> 3,
        'parent_id'=> 594
        ],
        [
        'ten'=> 'Phường Bửu Hòa',
        'loai'=> 3,
        'parent_id'=> 594
        ],
        [
        'ten'=> 'Phường Long Bình Tân',
        'loai'=> 3,
        'parent_id'=> 594
        ],
        [
        'ten'=> 'Phường Tân Vạn',
        'loai'=> 3,
        'parent_id'=> 594
        ],
        [
        'ten'=> 'Phường Tân Hạnh',
        'loai'=> 3,
        'parent_id'=> 594
        ],
        [
        'ten'=> 'Phường Hiệp Hòa',
        'loai'=> 3,
        'parent_id'=> 594
        ],
        [
        'ten'=> 'Phường Hóa An',
        'loai'=> 3,
        'parent_id'=> 594
        ],
        [
        'ten'=> 'Phường An Hòa',
        'loai'=> 3,
        'parent_id'=> 594
        ],
        [
        'ten'=> 'Phường Tam Phước',
        'loai'=> 3,
        'parent_id'=> 594
        ],
        [
        'ten'=> 'Phường Phước Tân',
        'loai'=> 3,
        'parent_id'=> 594
        ],
        [
        'ten'=> 'Xã Long Hưng',
        'loai'=> 3,
        'parent_id'=> 594
        ],
        [
        'ten'=> 'Phường Xuân Trung',
        'loai'=> 3,
        'parent_id'=> 595
        ],
        [
        'ten'=> 'Phường Xuân Thanh',
        'loai'=> 3,
        'parent_id'=> 595
        ],
        [
        'ten'=> 'Phường Xuân Bình',
        'loai'=> 3,
        'parent_id'=> 595
        ],
        [
        'ten'=> 'Phường Xuân An',
        'loai'=> 3,
        'parent_id'=> 595
        ],
        [
        'ten'=> 'Phường Xuân Hoà',
        'loai'=> 3,
        'parent_id'=> 595
        ],
        [
        'ten'=> 'Phường Phú Bình',
        'loai'=> 3,
        'parent_id'=> 595
        ],
        [
        'ten'=> 'Xã Bình Lộc',
        'loai'=> 3,
        'parent_id'=> 595
        ],
        [
        'ten'=> 'Xã Bảo Quang',
        'loai'=> 3,
        'parent_id'=> 595
        ],
        [
        'ten'=> 'Phường Suối Tre',
        'loai'=> 3,
        'parent_id'=> 595
        ],
        [
        'ten'=> 'Phường Bảo Vinh',
        'loai'=> 3,
        'parent_id'=> 595
        ],
        [
        'ten'=> 'Phường Xuân Lập',
        'loai'=> 3,
        'parent_id'=> 595
        ],
        [
        'ten'=> 'Phường Bàu Sen',
        'loai'=> 3,
        'parent_id'=> 595
        ],
        [
        'ten'=> 'Xã Bàu Trâm',
        'loai'=> 3,
        'parent_id'=> 595
        ],
        [
        'ten'=> 'Phường Xuân Tân',
        'loai'=> 3,
        'parent_id'=> 595
        ],
        [
        'ten'=> 'Xã Hàng Gòn',
        'loai'=> 3,
        'parent_id'=> 595
        ],
        [
        'ten'=> 'Thị trấn Tân Phú',
        'loai'=> 3,
        'parent_id'=> 596
        ],
        [
        'ten'=> 'Xã Dak Lua',
        'loai'=> 3,
        'parent_id'=> 596
        ],
        [
        'ten'=> 'Xã Nam Cát Tiên',
        'loai'=> 3,
        'parent_id'=> 596
        ],
        [
        'ten'=> 'Xã Phú An',
        'loai'=> 3,
        'parent_id'=> 596
        ],
        [
        'ten'=> 'Xã Núi Tượng',
        'loai'=> 3,
        'parent_id'=> 596
        ],
        [
        'ten'=> 'Xã Tà Lài',
        'loai'=> 3,
        'parent_id'=> 596
        ],
        [
        'ten'=> 'Xã Phú Lập',
        'loai'=> 3,
        'parent_id'=> 596
        ],
        [
        'ten'=> 'Xã Phú Sơn',
        'loai'=> 3,
        'parent_id'=> 596
        ],
        [
        'ten'=> 'Xã Phú Thịnh',
        'loai'=> 3,
        'parent_id'=> 596
        ],
        [
        'ten'=> 'Xã Thanh Sơn',
        'loai'=> 3,
        'parent_id'=> 596
        ],
        [
        'ten'=> 'Xã Phú Trung',
        'loai'=> 3,
        'parent_id'=> 596
        ],
        [
        'ten'=> 'Xã Phú Xuân',
        'loai'=> 3,
        'parent_id'=> 596
        ],
        [
        'ten'=> 'Xã Phú Lộc',
        'loai'=> 3,
        'parent_id'=> 596
        ],
        [
        'ten'=> 'Xã Phú Lâm',
        'loai'=> 3,
        'parent_id'=> 596
        ],
        [
        'ten'=> 'Xã Phú Bình',
        'loai'=> 3,
        'parent_id'=> 596
        ],
        [
        'ten'=> 'Xã Phú Thanh',
        'loai'=> 3,
        'parent_id'=> 596
        ],
        [
        'ten'=> 'Xã Trà Cổ',
        'loai'=> 3,
        'parent_id'=> 596
        ],
        [
        'ten'=> 'Xã Phú Điền',
        'loai'=> 3,
        'parent_id'=> 596
        ],
        [
        'ten'=> 'Thị trấn Vĩnh An',
        'loai'=> 3,
        'parent_id'=> 597
        ],
        [
        'ten'=> 'Xã Phú Lý',
        'loai'=> 3,
        'parent_id'=> 597
        ],
        [
        'ten'=> 'Xã Trị An',
        'loai'=> 3,
        'parent_id'=> 597
        ],
        [
        'ten'=> 'Xã Tân An',
        'loai'=> 3,
        'parent_id'=> 597
        ],
        [
        'ten'=> 'Xã Vĩnh Tân',
        'loai'=> 3,
        'parent_id'=> 597
        ],
        [
        'ten'=> 'Xã Bình Lợi',
        'loai'=> 3,
        'parent_id'=> 597
        ],
        [
        'ten'=> 'Xã Thạnh Phú',
        'loai'=> 3,
        'parent_id'=> 597
        ],
        [
        'ten'=> 'Xã Thiện Tân',
        'loai'=> 3,
        'parent_id'=> 597
        ],
        [
        'ten'=> 'Xã Tân Bình',
        'loai'=> 3,
        'parent_id'=> 597
        ],
        [
        'ten'=> 'Xã Bình Hòa',
        'loai'=> 3,
        'parent_id'=> 597
        ],
        [
        'ten'=> 'Xã Mã Đà',
        'loai'=> 3,
        'parent_id'=> 597
        ],
        [
        'ten'=> 'Xã Hiếu Liêm',
        'loai'=> 3,
        'parent_id'=> 597
        ],
        [
        'ten'=> 'Thị trấn Định Quán',
        'loai'=> 3,
        'parent_id'=> 598
        ],
        [
        'ten'=> 'Xã Thanh Sơn',
        'loai'=> 3,
        'parent_id'=> 598
        ],
        [
        'ten'=> 'Xã Phú Tân',
        'loai'=> 3,
        'parent_id'=> 598
        ],
        [
        'ten'=> 'Xã Phú Vinh',
        'loai'=> 3,
        'parent_id'=> 598
        ],
        [
        'ten'=> 'Xã Phú Lợi',
        'loai'=> 3,
        'parent_id'=> 598
        ],
        [
        'ten'=> 'Xã Phú Hòa',
        'loai'=> 3,
        'parent_id'=> 598
        ],
        [
        'ten'=> 'Xã Ngọc Định',
        'loai'=> 3,
        'parent_id'=> 598
        ],
        [
        'ten'=> 'Xã La Ngà',
        'loai'=> 3,
        'parent_id'=> 598
        ],
        [
        'ten'=> 'Xã Gia Canh',
        'loai'=> 3,
        'parent_id'=> 598
        ],
        [
        'ten'=> 'Xã Phú Ngọc',
        'loai'=> 3,
        'parent_id'=> 598
        ],
        [
        'ten'=> 'Xã Phú Cường',
        'loai'=> 3,
        'parent_id'=> 598
        ],
        [
        'ten'=> 'Xã Túc Trưng',
        'loai'=> 3,
        'parent_id'=> 598
        ],
        [
        'ten'=> 'Xã Phú Túc',
        'loai'=> 3,
        'parent_id'=> 598
        ],
        [
        'ten'=> 'Xã Suối Nho',
        'loai'=> 3,
        'parent_id'=> 598
        ],
        [
        'ten'=> 'Thị trấn Trảng Bom',
        'loai'=> 3,
        'parent_id'=> 599
        ],
        [
        'ten'=> 'Xã Thanh Bình',
        'loai'=> 3,
        'parent_id'=> 599
        ],
        [
        'ten'=> 'Xã Cây Gáo',
        'loai'=> 3,
        'parent_id'=> 599
        ],
        [
        'ten'=> 'Xã Bàu Hàm',
        'loai'=> 3,
        'parent_id'=> 599
        ],
        [
        'ten'=> 'Xã Sông Thao',
        'loai'=> 3,
        'parent_id'=> 599
        ],
        [
        'ten'=> 'Xã Sông Trầu',
        'loai'=> 3,
        'parent_id'=> 599
        ],
        [
        'ten'=> 'Xã Đông Hoà',
        'loai'=> 3,
        'parent_id'=> 599
        ],
        [
        'ten'=> 'Xã Bắc Sơn',
        'loai'=> 3,
        'parent_id'=> 599
        ],
        [
        'ten'=> 'Xã Hố Nai 3',
        'loai'=> 3,
        'parent_id'=> 599
        ],
        [
        'ten'=> 'Xã Tây Hoà',
        'loai'=> 3,
        'parent_id'=> 599
        ],
        [
        'ten'=> 'Xã Bình Minh',
        'loai'=> 3,
        'parent_id'=> 599
        ],
        [
        'ten'=> 'Xã Trung Hoà',
        'loai'=> 3,
        'parent_id'=> 599
        ],
        [
        'ten'=> 'Xã Đồi 61',
        'loai'=> 3,
        'parent_id'=> 599
        ],
        [
        'ten'=> 'Xã Hưng Thịnh',
        'loai'=> 3,
        'parent_id'=> 599
        ],
        [
        'ten'=> 'Xã Quảng Tiến',
        'loai'=> 3,
        'parent_id'=> 599
        ],
        [
        'ten'=> 'Xã Giang Điền',
        'loai'=> 3,
        'parent_id'=> 599
        ],
        [
        'ten'=> 'Xã An Viễn',
        'loai'=> 3,
        'parent_id'=> 599
        ],
        [
        'ten'=> 'Xã Gia Tân 1',
        'loai'=> 3,
        'parent_id'=> 600
        ],
        [
        'ten'=> 'Xã Gia Tân 2',
        'loai'=> 3,
        'parent_id'=> 600
        ],
        [
        'ten'=> 'Xã Gia Tân 3',
        'loai'=> 3,
        'parent_id'=> 600
        ],
        [
        'ten'=> 'Xã Gia Kiệm',
        'loai'=> 3,
        'parent_id'=> 600
        ],
        [
        'ten'=> 'Xã Quang Trung',
        'loai'=> 3,
        'parent_id'=> 600
        ],
        [
        'ten'=> 'Xã Bàu Hàm 2',
        'loai'=> 3,
        'parent_id'=> 600
        ],
        [
        'ten'=> 'Xã Hưng Lộc',
        'loai'=> 3,
        'parent_id'=> 600
        ],
        [
        'ten'=> 'Xã Lộ 25',
        'loai'=> 3,
        'parent_id'=> 600
        ],
        [
        'ten'=> 'Xã Xuân Thiện',
        'loai'=> 3,
        'parent_id'=> 600
        ],
        [
        'ten'=> 'Thị trấn Dầu Giây',
        'loai'=> 3,
        'parent_id'=> 600
        ],
        [
        'ten'=> 'Xã Sông Nhạn',
        'loai'=> 3,
        'parent_id'=> 601
        ],
        [
        'ten'=> 'Xã Xuân Quế',
        'loai'=> 3,
        'parent_id'=> 601
        ],
        [
        'ten'=> 'Xã Nhân Nghĩa',
        'loai'=> 3,
        'parent_id'=> 601
        ],
        [
        'ten'=> 'Xã Xuân Đường',
        'loai'=> 3,
        'parent_id'=> 601
        ],
        [
        'ten'=> 'Thị trấn Long Giao',
        'loai'=> 3,
        'parent_id'=> 601
        ],
        [
        'ten'=> 'Xã Xuân Mỹ',
        'loai'=> 3,
        'parent_id'=> 601
        ],
        [
        'ten'=> 'Xã Thừa Đức',
        'loai'=> 3,
        'parent_id'=> 601
        ],
        [
        'ten'=> 'Xã Bảo Bình',
        'loai'=> 3,
        'parent_id'=> 601
        ],
        [
        'ten'=> 'Xã Xuân Bảo',
        'loai'=> 3,
        'parent_id'=> 601
        ],
        [
        'ten'=> 'Xã Xuân Tây',
        'loai'=> 3,
        'parent_id'=> 601
        ],
        [
        'ten'=> 'Xã Xuân Đông',
        'loai'=> 3,
        'parent_id'=> 601
        ],
        [
        'ten'=> 'Xã Sông Ray',
        'loai'=> 3,
        'parent_id'=> 601
        ],
        [
        'ten'=> 'Xã Lâm San',
        'loai'=> 3,
        'parent_id'=> 601
        ],
        [
        'ten'=> 'Thị trấn Long Thành',
        'loai'=> 3,
        'parent_id'=> 602
        ],
        [
        'ten'=> 'Xã An Phước',
        'loai'=> 3,
        'parent_id'=> 602
        ],
        [
        'ten'=> 'Xã Bình An',
        'loai'=> 3,
        'parent_id'=> 602
        ],
        [
        'ten'=> 'Xã Long Đức',
        'loai'=> 3,
        'parent_id'=> 602
        ],
        [
        'ten'=> 'Xã Lộc An',
        'loai'=> 3,
        'parent_id'=> 602
        ],
        [
        'ten'=> 'Xã Bình Sơn',
        'loai'=> 3,
        'parent_id'=> 602
        ],
        [
        'ten'=> 'Xã Tam An',
        'loai'=> 3,
        'parent_id'=> 602
        ],
        [
        'ten'=> 'Xã Cẩm Đường',
        'loai'=> 3,
        'parent_id'=> 602
        ],
        [
        'ten'=> 'Xã Long An',
        'loai'=> 3,
        'parent_id'=> 602
        ],
        [
        'ten'=> 'Xã Bàu Cạn',
        'loai'=> 3,
        'parent_id'=> 602
        ],
        [
        'ten'=> 'Xã Long Phước',
        'loai'=> 3,
        'parent_id'=> 602
        ],
        [
        'ten'=> 'Xã Phước Bình',
        'loai'=> 3,
        'parent_id'=> 602
        ],
        [
        'ten'=> 'Xã Tân Hiệp',
        'loai'=> 3,
        'parent_id'=> 602
        ],
        [
        'ten'=> 'Xã Phước Thái',
        'loai'=> 3,
        'parent_id'=> 602
        ],
        [
        'ten'=> 'Thị trấn Gia Ray',
        'loai'=> 3,
        'parent_id'=> 603
        ],
        [
        'ten'=> 'Xã Xuân Bắc',
        'loai'=> 3,
        'parent_id'=> 603
        ],
        [
        'ten'=> 'Xã Suối Cao',
        'loai'=> 3,
        'parent_id'=> 603
        ],
        [
        'ten'=> 'Xã Xuân Thành',
        'loai'=> 3,
        'parent_id'=> 603
        ],
        [
        'ten'=> 'Xã Xuân Thọ',
        'loai'=> 3,
        'parent_id'=> 603
        ],
        [
        'ten'=> 'Xã Xuân Trường',
        'loai'=> 3,
        'parent_id'=> 603
        ],
        [
        'ten'=> 'Xã Xuân Hòa',
        'loai'=> 3,
        'parent_id'=> 603
        ],
        [
        'ten'=> 'Xã Xuân Hưng',
        'loai'=> 3,
        'parent_id'=> 603
        ],
        [
        'ten'=> 'Xã Xuân Tâm',
        'loai'=> 3,
        'parent_id'=> 603
        ],
        [
        'ten'=> 'Xã Suối Cát',
        'loai'=> 3,
        'parent_id'=> 603
        ],
        [
        'ten'=> 'Xã Xuân Hiệp',
        'loai'=> 3,
        'parent_id'=> 603
        ],
        [
        'ten'=> 'Xã Xuân Phú',
        'loai'=> 3,
        'parent_id'=> 603
        ],
        [
        'ten'=> 'Xã Xuân Định',
        'loai'=> 3,
        'parent_id'=> 603
        ],
        [
        'ten'=> 'Xã Bảo Hoà',
        'loai'=> 3,
        'parent_id'=> 603
        ],
        [
        'ten'=> 'Xã Lang Minh',
        'loai'=> 3,
        'parent_id'=> 603
        ],
        [
        'ten'=> 'Xã Phước Thiền',
        'loai'=> 3,
        'parent_id'=> 604
        ],
        [
        'ten'=> 'Xã Long Tân',
        'loai'=> 3,
        'parent_id'=> 604
        ],
        [
        'ten'=> 'Xã Đại Phước',
        'loai'=> 3,
        'parent_id'=> 604
        ],
        [
        'ten'=> 'Thị trấn Hiệp Phước',
        'loai'=> 3,
        'parent_id'=> 604
        ],
        [
        'ten'=> 'Xã Phú Hữu',
        'loai'=> 3,
        'parent_id'=> 604
        ],
        [
        'ten'=> 'Xã Phú Hội',
        'loai'=> 3,
        'parent_id'=> 604
        ],
        [
        'ten'=> 'Xã Phú Thạnh',
        'loai'=> 3,
        'parent_id'=> 604
        ],
        [
        'ten'=> 'Xã Phú Đông',
        'loai'=> 3,
        'parent_id'=> 604
        ],
        [
        'ten'=> 'Xã Long Thọ',
        'loai'=> 3,
        'parent_id'=> 604
        ],
        [
        'ten'=> 'Xã Vĩnh Thanh',
        'loai'=> 3,
        'parent_id'=> 604
        ],
        [
        'ten'=> 'Xã Phước Khánh',
        'loai'=> 3,
        'parent_id'=> 604
        ],
        [
        'ten'=> 'Xã Phước An',
        'loai'=> 3,
        'parent_id'=> 604
        ],
        [
        'ten'=> 'Phường 1',
        'loai'=> 3,
        'parent_id'=> 605
        ],
        [
        'ten'=> 'Phường Thắng Tam',
        'loai'=> 3,
        'parent_id'=> 605
        ],
        [
        'ten'=> 'Phường 2',
        'loai'=> 3,
        'parent_id'=> 605
        ],
        [
        'ten'=> 'Phường 3',
        'loai'=> 3,
        'parent_id'=> 605
        ],
        [
        'ten'=> 'Phường 4',
        'loai'=> 3,
        'parent_id'=> 605
        ],
        [
        'ten'=> 'Phường 5',
        'loai'=> 3,
        'parent_id'=> 605
        ],
        [
        'ten'=> 'Phường Thắng Nhì',
        'loai'=> 3,
        'parent_id'=> 605
        ],
        [
        'ten'=> 'Phường 7',
        'loai'=> 3,
        'parent_id'=> 605
        ],
        [
        'ten'=> 'Phường Nguyễn An Ninh',
        'loai'=> 3,
        'parent_id'=> 605
        ],
        [
        'ten'=> 'Phường 8',
        'loai'=> 3,
        'parent_id'=> 605
        ],
        [
        'ten'=> 'Phường 9',
        'loai'=> 3,
        'parent_id'=> 605
        ],
        [
        'ten'=> 'Phường Thắng Nhất',
        'loai'=> 3,
        'parent_id'=> 605
        ],
        [
        'ten'=> 'Phường Rạch Dừa',
        'loai'=> 3,
        'parent_id'=> 605
        ],
        [
        'ten'=> 'Phường 10',
        'loai'=> 3,
        'parent_id'=> 605
        ],
        [
        'ten'=> 'Phường 11',
        'loai'=> 3,
        'parent_id'=> 605
        ],
        [
        'ten'=> 'Phường 12',
        'loai'=> 3,
        'parent_id'=> 605
        ],
        [
        'ten'=> 'Xã Long Sơn',
        'loai'=> 3,
        'parent_id'=> 605
        ],
        [
        'ten'=> 'Phường Phước Hưng',
        'loai'=> 3,
        'parent_id'=> 606
        ],
        [
        'ten'=> 'Phường Phước Hiệp',
        'loai'=> 3,
        'parent_id'=> 606
        ],
        [
        'ten'=> 'Phường Phước Nguyên',
        'loai'=> 3,
        'parent_id'=> 606
        ],
        [
        'ten'=> 'Phường Long Toàn',
        'loai'=> 3,
        'parent_id'=> 606
        ],
        [
        'ten'=> 'Phường Long Tâm',
        'loai'=> 3,
        'parent_id'=> 606
        ],
        [
        'ten'=> 'Phường Phước Trung',
        'loai'=> 3,
        'parent_id'=> 606
        ],
        [
        'ten'=> 'Phường Long Hương',
        'loai'=> 3,
        'parent_id'=> 606
        ],
        [
        'ten'=> 'Phường Kim Dinh',
        'loai'=> 3,
        'parent_id'=> 606
        ],
        [
        'ten'=> 'Xã Tân Hưng',
        'loai'=> 3,
        'parent_id'=> 606
        ],
        [
        'ten'=> 'Xã Long Phước',
        'loai'=> 3,
        'parent_id'=> 606
        ],
        [
        'ten'=> 'Xã Hoà Long',
        'loai'=> 3,
        'parent_id'=> 606
        ],
        [
        'ten'=> 'Xã Bàu Chinh',
        'loai'=> 3,
        'parent_id'=> 607
        ],
        [
        'ten'=> 'Thị trấn Ngãi Giao',
        'loai'=> 3,
        'parent_id'=> 607
        ],
        [
        'ten'=> 'Xã Bình Ba',
        'loai'=> 3,
        'parent_id'=> 607
        ],
        [
        'ten'=> 'Xã Suối Nghệ',
        'loai'=> 3,
        'parent_id'=> 607
        ],
        [
        'ten'=> 'Xã Xuân Sơn',
        'loai'=> 3,
        'parent_id'=> 607
        ],
        [
        'ten'=> 'Xã Sơn Bình',
        'loai'=> 3,
        'parent_id'=> 607
        ],
        [
        'ten'=> 'Xã Bình Giã',
        'loai'=> 3,
        'parent_id'=> 607
        ],
        [
        'ten'=> 'Xã Bình Trung',
        'loai'=> 3,
        'parent_id'=> 607
        ],
        [
        'ten'=> 'Xã Xà Bang',
        'loai'=> 3,
        'parent_id'=> 607
        ],
        [
        'ten'=> 'Xã Cù Bị',
        'loai'=> 3,
        'parent_id'=> 607
        ],
        [
        'ten'=> 'Xã Láng Lớn',
        'loai'=> 3,
        'parent_id'=> 607
        ],
        [
        'ten'=> 'Xã Quảng Thành',
        'loai'=> 3,
        'parent_id'=> 607
        ],
        [
        'ten'=> 'Xã Kim Long',
        'loai'=> 3,
        'parent_id'=> 607
        ],
        [
        'ten'=> 'Xã Suối Rao',
        'loai'=> 3,
        'parent_id'=> 607
        ],
        [
        'ten'=> 'Xã Đá Bạc',
        'loai'=> 3,
        'parent_id'=> 607
        ],
        [
        'ten'=> 'Xã Nghĩa Thành',
        'loai'=> 3,
        'parent_id'=> 607
        ],
        [
        'ten'=> 'Thị trấn Phước Bửu',
        'loai'=> 3,
        'parent_id'=> 608
        ],
        [
        'ten'=> 'Xã Phước Thuận',
        'loai'=> 3,
        'parent_id'=> 608
        ],
        [
        'ten'=> 'Xã Phước Tân',
        'loai'=> 3,
        'parent_id'=> 608
        ],
        [
        'ten'=> 'Xã Xuyên Mộc',
        'loai'=> 3,
        'parent_id'=> 608
        ],
        [
        'ten'=> 'Xã Bông Trang',
        'loai'=> 3,
        'parent_id'=> 608
        ],
        [
        'ten'=> 'Xã Tân Lâm',
        'loai'=> 3,
        'parent_id'=> 608
        ],
        [
        'ten'=> 'Xã Bàu Lâm',
        'loai'=> 3,
        'parent_id'=> 608
        ],
        [
        'ten'=> 'Xã Hòa Bình',
        'loai'=> 3,
        'parent_id'=> 608
        ],
        [
        'ten'=> 'Xã Hòa Hưng',
        'loai'=> 3,
        'parent_id'=> 608
        ],
        [
        'ten'=> 'Xã Hòa Hiệp',
        'loai'=> 3,
        'parent_id'=> 608
        ],
        [
        'ten'=> 'Xã Hòa Hội',
        'loai'=> 3,
        'parent_id'=> 608
        ],
        [
        'ten'=> 'Xã Bưng Riềng',
        'loai'=> 3,
        'parent_id'=> 608
        ],
        [
        'ten'=> 'Xã Bình Châu',
        'loai'=> 3,
        'parent_id'=> 608
        ],
        [
        'ten'=> 'Thị trấn Long Điền',
        'loai'=> 3,
        'parent_id'=> 609
        ],
        [
        'ten'=> 'Thị trấn Long Hải',
        'loai'=> 3,
        'parent_id'=> 609
        ],
        [
        'ten'=> 'Xã An Ngãi',
        'loai'=> 3,
        'parent_id'=> 609
        ],
        [
        'ten'=> 'Xã Tam Phước',
        'loai'=> 3,
        'parent_id'=> 609
        ],
        [
        'ten'=> 'Xã An Nhứt',
        'loai'=> 3,
        'parent_id'=> 609
        ],
        [
        'ten'=> 'Xã Phước Tỉnh',
        'loai'=> 3,
        'parent_id'=> 609
        ],
        [
        'ten'=> 'Xã Phước Hưng',
        'loai'=> 3,
        'parent_id'=> 609
        ],
        [
        'ten'=> 'Thị trấn Đất Đỏ',
        'loai'=> 3,
        'parent_id'=> 610
        ],
        [
        'ten'=> 'Xã Phước Long Thọ',
        'loai'=> 3,
        'parent_id'=> 610
        ],
        [
        'ten'=> 'Xã Phước Hội',
        'loai'=> 3,
        'parent_id'=> 610
        ],
        [
        'ten'=> 'Xã Long Mỹ',
        'loai'=> 3,
        'parent_id'=> 610
        ],
        [
        'ten'=> 'Thị trấn Phước Hải',
        'loai'=> 3,
        'parent_id'=> 610
        ],
        [
        'ten'=> 'Xã Long Tân',
        'loai'=> 3,
        'parent_id'=> 610
        ],
        [
        'ten'=> 'Xã Láng Dài',
        'loai'=> 3,
        'parent_id'=> 610
        ],
        [
        'ten'=> 'Xã Lộc An',
        'loai'=> 3,
        'parent_id'=> 610
        ],
        [
        'ten'=> 'Phường Phú Mỹ',
        'loai'=> 3,
        'parent_id'=> 611
        ],
        [
        'ten'=> 'Xã Tân Hoà',
        'loai'=> 3,
        'parent_id'=> 611
        ],
        [
        'ten'=> 'Xã Tân Hải',
        'loai'=> 3,
        'parent_id'=> 611
        ],
        [
        'ten'=> 'Phường Phước Hoà',
        'loai'=> 3,
        'parent_id'=> 611
        ],
        [
        'ten'=> 'Phường Tân Phước',
        'loai'=> 3,
        'parent_id'=> 611
        ],
        [
        'ten'=> 'Phường Mỹ Xuân',
        'loai'=> 3,
        'parent_id'=> 611
        ],
        [
        'ten'=> 'Xã Sông Xoài',
        'loai'=> 3,
        'parent_id'=> 611
        ],
        [
        'ten'=> 'Phường Hắc Dịch',
        'loai'=> 3,
        'parent_id'=> 611
        ],
        [
        'ten'=> 'Xã Châu Pha',
        'loai'=> 3,
        'parent_id'=> 611
        ],
        [
        'ten'=> 'Xã Tóc Tiên',
        'loai'=> 3,
        'parent_id'=> 611
        ],
        [
        'ten'=> 'Phường Tân Định',
        'loai'=> 3,
        'parent_id'=> 613
        ],
        [
        'ten'=> 'Phường Đa Kao',
        'loai'=> 3,
        'parent_id'=> 613
        ],
        [
        'ten'=> 'Phường Bến Nghé',
        'loai'=> 3,
        'parent_id'=> 613
        ],
        [
        'ten'=> 'Phường Bến Thành',
        'loai'=> 3,
        'parent_id'=> 613
        ],
        [
        'ten'=> 'Phường Nguyễn Thái Bình',
        'loai'=> 3,
        'parent_id'=> 613
        ],
        [
        'ten'=> 'Phường Phạm Ngũ Lão',
        'loai'=> 3,
        'parent_id'=> 613
        ],
        [
        'ten'=> 'Phường Cầu Ông Lãnh',
        'loai'=> 3,
        'parent_id'=> 613
        ],
        [
        'ten'=> 'Phường Cô Giang',
        'loai'=> 3,
        'parent_id'=> 613
        ],
        [
        'ten'=> 'Phường Nguyễn Cư Trinh',
        'loai'=> 3,
        'parent_id'=> 613
        ],
        [
        'ten'=> 'Phường Cầu Kho',
        'loai'=> 3,
        'parent_id'=> 613
        ],
        [
        'ten'=> 'Phường Thạnh Xuân',
        'loai'=> 3,
        'parent_id'=> 614
        ],
        [
        'ten'=> 'Phường Thạnh Lộc',
        'loai'=> 3,
        'parent_id'=> 614
        ],
        [
        'ten'=> 'Phường Hiệp Thành',
        'loai'=> 3,
        'parent_id'=> 614
        ],
        [
        'ten'=> 'Phường Thới An',
        'loai'=> 3,
        'parent_id'=> 614
        ],
        [
        'ten'=> 'Phường Tân Chánh Hiệp',
        'loai'=> 3,
        'parent_id'=> 614
        ],
        [
        'ten'=> 'Phường An Phú Đông',
        'loai'=> 3,
        'parent_id'=> 614
        ],
        [
        'ten'=> 'Phường Tân Thới Hiệp',
        'loai'=> 3,
        'parent_id'=> 614
        ],
        [
        'ten'=> 'Phường Trung Mỹ Tây',
        'loai'=> 3,
        'parent_id'=> 614
        ],
        [
        'ten'=> 'Phường Tân Hưng Thuận',
        'loai'=> 3,
        'parent_id'=> 614
        ],
        [
        'ten'=> 'Phường Đông Hưng Thuận',
        'loai'=> 3,
        'parent_id'=> 614
        ],
        [
        'ten'=> 'Phường Tân Thới Nhất',
        'loai'=> 3,
        'parent_id'=> 614
        ],
        [
        'ten'=> 'Phường 15',
        'loai'=> 3,
        'parent_id'=> 615
        ],
        [
        'ten'=> 'Phường 13',
        'loai'=> 3,
        'parent_id'=> 615
        ],
        [
        'ten'=> 'Phường 17',
        'loai'=> 3,
        'parent_id'=> 615
        ],
        [
        'ten'=> 'Phường 6',
        'loai'=> 3,
        'parent_id'=> 615
        ],
        [
        'ten'=> 'Phường 16',
        'loai'=> 3,
        'parent_id'=> 615
        ],
        [
        'ten'=> 'Phường 12',
        'loai'=> 3,
        'parent_id'=> 615
        ],
        [
        'ten'=> 'Phường 14',
        'loai'=> 3,
        'parent_id'=> 615
        ],
        [
        'ten'=> 'Phường 10',
        'loai'=> 3,
        'parent_id'=> 615
        ],
        [
        'ten'=> 'Phường 05',
        'loai'=> 3,
        'parent_id'=> 615
        ],
        [
        'ten'=> 'Phường 07',
        'loai'=> 3,
        'parent_id'=> 615
        ],
        [
        'ten'=> 'Phường 04',
        'loai'=> 3,
        'parent_id'=> 615
        ],
        [
        'ten'=> 'Phường 01',
        'loai'=> 3,
        'parent_id'=> 615
        ],
        [
        'ten'=> 'Phường 9',
        'loai'=> 3,
        'parent_id'=> 615
        ],
        [
        'ten'=> 'Phường 8',
        'loai'=> 3,
        'parent_id'=> 615
        ],
        [
        'ten'=> 'Phường 11',
        'loai'=> 3,
        'parent_id'=> 615
        ],
        [
        'ten'=> 'Phường 03',
        'loai'=> 3,
        'parent_id'=> 615
        ],
        [
        'ten'=> 'Phường 13',
        'loai'=> 3,
        'parent_id'=> 616
        ],
        [
        'ten'=> 'Phường 11',
        'loai'=> 3,
        'parent_id'=> 616
        ],
        [
        'ten'=> 'Phường 27',
        'loai'=> 3,
        'parent_id'=> 616
        ],
        [
        'ten'=> 'Phường 26',
        'loai'=> 3,
        'parent_id'=> 616
        ],
        [
        'ten'=> 'Phường 12',
        'loai'=> 3,
        'parent_id'=> 616
        ],
        [
        'ten'=> 'Phường 25',
        'loai'=> 3,
        'parent_id'=> 616
        ],
        [
        'ten'=> 'Phường 05',
        'loai'=> 3,
        'parent_id'=> 616
        ],
        [
        'ten'=> 'Phường 07',
        'loai'=> 3,
        'parent_id'=> 616
        ],
        [
        'ten'=> 'Phường 24',
        'loai'=> 3,
        'parent_id'=> 616
        ],
        [
        'ten'=> 'Phường 06',
        'loai'=> 3,
        'parent_id'=> 616
        ],
        [
        'ten'=> 'Phường 14',
        'loai'=> 3,
        'parent_id'=> 616
        ],
        [
        'ten'=> 'Phường 15',
        'loai'=> 3,
        'parent_id'=> 616
        ],
        [
        'ten'=> 'Phường 02',
        'loai'=> 3,
        'parent_id'=> 616
        ],
        [
        'ten'=> 'Phường 01',
        'loai'=> 3,
        'parent_id'=> 616
        ],
        [
        'ten'=> 'Phường 03',
        'loai'=> 3,
        'parent_id'=> 616
        ],
        [
        'ten'=> 'Phường 17',
        'loai'=> 3,
        'parent_id'=> 616
        ],
        [
        'ten'=> 'Phường 21',
        'loai'=> 3,
        'parent_id'=> 616
        ],
        [
        'ten'=> 'Phường 22',
        'loai'=> 3,
        'parent_id'=> 616
        ],
        [
        'ten'=> 'Phường 19',
        'loai'=> 3,
        'parent_id'=> 616
        ],
        [
        'ten'=> 'Phường 28',
        'loai'=> 3,
        'parent_id'=> 616
        ],
        [
        'ten'=> 'Phường 02',
        'loai'=> 3,
        'parent_id'=> 617
        ],
        [
        'ten'=> 'Phường 04',
        'loai'=> 3,
        'parent_id'=> 617
        ],
        [
        'ten'=> 'Phường 12',
        'loai'=> 3,
        'parent_id'=> 617
        ],
        [
        'ten'=> 'Phường 13',
        'loai'=> 3,
        'parent_id'=> 617
        ],
        [
        'ten'=> 'Phường 01',
        'loai'=> 3,
        'parent_id'=> 617
        ],
        [
        'ten'=> 'Phường 03',
        'loai'=> 3,
        'parent_id'=> 617
        ],
        [
        'ten'=> 'Phường 11',
        'loai'=> 3,
        'parent_id'=> 617
        ],
        [
        'ten'=> 'Phường 07',
        'loai'=> 3,
        'parent_id'=> 617
        ],
        [
        'ten'=> 'Phường 05',
        'loai'=> 3,
        'parent_id'=> 617
        ],
        [
        'ten'=> 'Phường 10',
        'loai'=> 3,
        'parent_id'=> 617
        ],
        [
        'ten'=> 'Phường 06',
        'loai'=> 3,
        'parent_id'=> 617
        ],
        [
        'ten'=> 'Phường 08',
        'loai'=> 3,
        'parent_id'=> 617
        ],
        [
        'ten'=> 'Phường 09',
        'loai'=> 3,
        'parent_id'=> 617
        ],
        [
        'ten'=> 'Phường 14',
        'loai'=> 3,
        'parent_id'=> 617
        ],
        [
        'ten'=> 'Phường 15',
        'loai'=> 3,
        'parent_id'=> 617
        ],
        [
        'ten'=> 'Phường Tân Sơn Nhì',
        'loai'=> 3,
        'parent_id'=> 618
        ],
        [
        'ten'=> 'Phường Tây Thạnh',
        'loai'=> 3,
        'parent_id'=> 618
        ],
        [
        'ten'=> 'Phường Sơn Kỳ',
        'loai'=> 3,
        'parent_id'=> 618
        ],
        [
        'ten'=> 'Phường Tân Quý',
        'loai'=> 3,
        'parent_id'=> 618
        ],
        [
        'ten'=> 'Phường Tân Thành',
        'loai'=> 3,
        'parent_id'=> 618
        ],
        [
        'ten'=> 'Phường Phú Thọ Hòa',
        'loai'=> 3,
        'parent_id'=> 618
        ],
        [
        'ten'=> 'Phường Phú Thạnh',
        'loai'=> 3,
        'parent_id'=> 618
        ],
        [
        'ten'=> 'Phường Phú Trung',
        'loai'=> 3,
        'parent_id'=> 618
        ],
        [
        'ten'=> 'Phường Hòa Thạnh',
        'loai'=> 3,
        'parent_id'=> 618
        ],
        [
        'ten'=> 'Phường Hiệp Tân',
        'loai'=> 3,
        'parent_id'=> 618
        ],
        [
        'ten'=> 'Phường Tân Thới Hòa',
        'loai'=> 3,
        'parent_id'=> 618
        ],
        [
        'ten'=> 'Phường 04',
        'loai'=> 3,
        'parent_id'=> 619
        ],
        [
        'ten'=> 'Phường 05',
        'loai'=> 3,
        'parent_id'=> 619
        ],
        [
        'ten'=> 'Phường 09',
        'loai'=> 3,
        'parent_id'=> 619
        ],
        [
        'ten'=> 'Phường 07',
        'loai'=> 3,
        'parent_id'=> 619
        ],
        [
        'ten'=> 'Phường 03',
        'loai'=> 3,
        'parent_id'=> 619
        ],
        [
        'ten'=> 'Phường 01',
        'loai'=> 3,
        'parent_id'=> 619
        ],
        [
        'ten'=> 'Phường 02',
        'loai'=> 3,
        'parent_id'=> 619
        ],
        [
        'ten'=> 'Phường 08',
        'loai'=> 3,
        'parent_id'=> 619
        ],
        [
        'ten'=> 'Phường 15',
        'loai'=> 3,
        'parent_id'=> 619
        ],
        [
        'ten'=> 'Phường 10',
        'loai'=> 3,
        'parent_id'=> 619
        ],
        [
        'ten'=> 'Phường 11',
        'loai'=> 3,
        'parent_id'=> 619
        ],
        [
        'ten'=> 'Phường 17',
        'loai'=> 3,
        'parent_id'=> 619
        ],
        [
        'ten'=> 'Phường 13',
        'loai'=> 3,
        'parent_id'=> 619
        ],
        [
        'ten'=> 'Phường Linh Xuân',
        'loai'=> 3,
        'parent_id'=> 620
        ],
        [
        'ten'=> 'Phường Bình Chiểu',
        'loai'=> 3,
        'parent_id'=> 620
        ],
        [
        'ten'=> 'Phường Linh Trung',
        'loai'=> 3,
        'parent_id'=> 620
        ],
        [
        'ten'=> 'Phường Tam Bình',
        'loai'=> 3,
        'parent_id'=> 620
        ],
        [
        'ten'=> 'Phường Tam Phú',
        'loai'=> 3,
        'parent_id'=> 620
        ],
        [
        'ten'=> 'Phường Hiệp Bình Phước',
        'loai'=> 3,
        'parent_id'=> 620
        ],
        [
        'ten'=> 'Phường Hiệp Bình Chánh',
        'loai'=> 3,
        'parent_id'=> 620
        ],
        [
        'ten'=> 'Phường Linh Chiểu',
        'loai'=> 3,
        'parent_id'=> 620
        ],
        [
        'ten'=> 'Phường Linh Tây',
        'loai'=> 3,
        'parent_id'=> 620
        ],
        [
        'ten'=> 'Phường Linh Đông',
        'loai'=> 3,
        'parent_id'=> 620
        ],
        [
        'ten'=> 'Phường Bình Thọ',
        'loai'=> 3,
        'parent_id'=> 620
        ],
        [
        'ten'=> 'Phường Trường Thọ',
        'loai'=> 3,
        'parent_id'=> 620
        ],
        [
        'ten'=> 'Phường Long Bình',
        'loai'=> 3,
        'parent_id'=> 620
        ],
        [
        'ten'=> 'Phường Long Thạnh Mỹ',
        'loai'=> 3,
        'parent_id'=> 620
        ],
        [
        'ten'=> 'Phường Tân Phú',
        'loai'=> 3,
        'parent_id'=> 620
        ],
        [
        'ten'=> 'Phường Hiệp Phú',
        'loai'=> 3,
        'parent_id'=> 620
        ],
        [
        'ten'=> 'Phường Tăng Nhơn Phú A',
        'loai'=> 3,
        'parent_id'=> 620
        ],
        [
        'ten'=> 'Phường Tăng Nhơn Phú B',
        'loai'=> 3,
        'parent_id'=> 620
        ],
        [
        'ten'=> 'Phường Phước Long B',
        'loai'=> 3,
        'parent_id'=> 620
        ],
        [
        'ten'=> 'Phường Phước Long A',
        'loai'=> 3,
        'parent_id'=> 620
        ],
        [
        'ten'=> 'Phường Trường Thạnh',
        'loai'=> 3,
        'parent_id'=> 620
        ],
        [
        'ten'=> 'Phường Long Phước',
        'loai'=> 3,
        'parent_id'=> 620
        ],
        [
        'ten'=> 'Phường Long Trường',
        'loai'=> 3,
        'parent_id'=> 620
        ],
        [
        'ten'=> 'Phường Phước Bình',
        'loai'=> 3,
        'parent_id'=> 620
        ],
        [
        'ten'=> 'Phường Phú Hữu',
        'loai'=> 3,
        'parent_id'=> 620
        ],
        [
        'ten'=> 'Phường Thảo Điền',
        'loai'=> 3,
        'parent_id'=> 620
        ],
        [
        'ten'=> 'Phường An Phú',
        'loai'=> 3,
        'parent_id'=> 620
        ],
        [
        'ten'=> 'Phường An Khánh',
        'loai'=> 3,
        'parent_id'=> 620
        ],
        [
        'ten'=> 'Phường Bình Trưng Đông',
        'loai'=> 3,
        'parent_id'=> 620
        ],
        [
        'ten'=> 'Phường Bình Trưng Tây',
        'loai'=> 3,
        'parent_id'=> 620
        ],
        [
        'ten'=> 'Phường Cát Lái',
        'loai'=> 3,
        'parent_id'=> 620
        ],
        [
        'ten'=> 'Phường Thạnh Mỹ Lợi',
        'loai'=> 3,
        'parent_id'=> 620
        ],
        [
        'ten'=> 'Phường An Lợi Đông',
        'loai'=> 3,
        'parent_id'=> 620
        ],
        [
        'ten'=> 'Phường Thủ Thiêm',
        'loai'=> 3,
        'parent_id'=> 620
        ],
        [
        'ten'=> 'Phường 14',
        'loai'=> 3,
        'parent_id'=> 621
        ],
        [
        'ten'=> 'Phường 12',
        'loai'=> 3,
        'parent_id'=> 621
        ],
        [
        'ten'=> 'Phường 11',
        'loai'=> 3,
        'parent_id'=> 621
        ],
        [
        'ten'=> 'Phường 13',
        'loai'=> 3,
        'parent_id'=> 621
        ],
        [
        'ten'=> 'Phường Võ Thị Sáu',
        'loai'=> 3,
        'parent_id'=> 621
        ],
        [
        'ten'=> 'Phường 09',
        'loai'=> 3,
        'parent_id'=> 621
        ],
        [
        'ten'=> 'Phường 10',
        'loai'=> 3,
        'parent_id'=> 621
        ],
        [
        'ten'=> 'Phường 04',
        'loai'=> 3,
        'parent_id'=> 621
        ],
        [
        'ten'=> 'Phường 05',
        'loai'=> 3,
        'parent_id'=> 621
        ],
        [
        'ten'=> 'Phường 03',
        'loai'=> 3,
        'parent_id'=> 621
        ],
        [
        'ten'=> 'Phường 02',
        'loai'=> 3,
        'parent_id'=> 621
        ],
        [
        'ten'=> 'Phường 01',
        'loai'=> 3,
        'parent_id'=> 621
        ],
        [
        'ten'=> 'Phường 15',
        'loai'=> 3,
        'parent_id'=> 622
        ],
        [
        'ten'=> 'Phường 13',
        'loai'=> 3,
        'parent_id'=> 622
        ],
        [
        'ten'=> 'Phường 14',
        'loai'=> 3,
        'parent_id'=> 622
        ],
        [
        'ten'=> 'Phường 12',
        'loai'=> 3,
        'parent_id'=> 622
        ],
        [
        'ten'=> 'Phường 11',
        'loai'=> 3,
        'parent_id'=> 622
        ],
        [
        'ten'=> 'Phường 10',
        'loai'=> 3,
        'parent_id'=> 622
        ],
        [
        'ten'=> 'Phường 09',
        'loai'=> 3,
        'parent_id'=> 622
        ],
        [
        'ten'=> 'Phường 01',
        'loai'=> 3,
        'parent_id'=> 622
        ],
        [
        'ten'=> 'Phường 08',
        'loai'=> 3,
        'parent_id'=> 622
        ],
        [
        'ten'=> 'Phường 02',
        'loai'=> 3,
        'parent_id'=> 622
        ],
        [
        'ten'=> 'Phường 04',
        'loai'=> 3,
        'parent_id'=> 622
        ],
        [
        'ten'=> 'Phường 07',
        'loai'=> 3,
        'parent_id'=> 622
        ],
        [
        'ten'=> 'Phường 05',
        'loai'=> 3,
        'parent_id'=> 622
        ],
        [
        'ten'=> 'Phường 06',
        'loai'=> 3,
        'parent_id'=> 622
        ],
        [
        'ten'=> 'Phường 15',
        'loai'=> 3,
        'parent_id'=> 623
        ],
        [
        'ten'=> 'Phường 05',
        'loai'=> 3,
        'parent_id'=> 623
        ],
        [
        'ten'=> 'Phường 14',
        'loai'=> 3,
        'parent_id'=> 623
        ],
        [
        'ten'=> 'Phường 11',
        'loai'=> 3,
        'parent_id'=> 623
        ],
        [
        'ten'=> 'Phường 03',
        'loai'=> 3,
        'parent_id'=> 623
        ],
        [
        'ten'=> 'Phường 10',
        'loai'=> 3,
        'parent_id'=> 623
        ],
        [
        'ten'=> 'Phường 13',
        'loai'=> 3,
        'parent_id'=> 623
        ],
        [
        'ten'=> 'Phường 08',
        'loai'=> 3,
        'parent_id'=> 623
        ],
        [
        'ten'=> 'Phường 09',
        'loai'=> 3,
        'parent_id'=> 623
        ],
        [
        'ten'=> 'Phường 12',
        'loai'=> 3,
        'parent_id'=> 623
        ],
        [
        'ten'=> 'Phường 07',
        'loai'=> 3,
        'parent_id'=> 623
        ],
        [
        'ten'=> 'Phường 06',
        'loai'=> 3,
        'parent_id'=> 623
        ],
        [
        'ten'=> 'Phường 04',
        'loai'=> 3,
        'parent_id'=> 623
        ],
        [
        'ten'=> 'Phường 01',
        'loai'=> 3,
        'parent_id'=> 623
        ],
        [
        'ten'=> 'Phường 02',
        'loai'=> 3,
        'parent_id'=> 623
        ],
        [
        'ten'=> 'Phường 16',
        'loai'=> 3,
        'parent_id'=> 623
        ],
        [
        'ten'=> 'Phường 13',
        'loai'=> 3,
        'parent_id'=> 624
        ],
        [
        'ten'=> 'Phường 09',
        'loai'=> 3,
        'parent_id'=> 624
        ],
        [
        'ten'=> 'Phường 06',
        'loai'=> 3,
        'parent_id'=> 624
        ],
        [
        'ten'=> 'Phường 08',
        'loai'=> 3,
        'parent_id'=> 624
        ],
        [
        'ten'=> 'Phường 10',
        'loai'=> 3,
        'parent_id'=> 624
        ],
        [
        'ten'=> 'Phường 18',
        'loai'=> 3,
        'parent_id'=> 624
        ],
        [
        'ten'=> 'Phường 14',
        'loai'=> 3,
        'parent_id'=> 624
        ],
        [
        'ten'=> 'Phường 04',
        'loai'=> 3,
        'parent_id'=> 624
        ],
        [
        'ten'=> 'Phường 03',
        'loai'=> 3,
        'parent_id'=> 624
        ],
        [
        'ten'=> 'Phường 16',
        'loai'=> 3,
        'parent_id'=> 624
        ],
        [
        'ten'=> 'Phường 02',
        'loai'=> 3,
        'parent_id'=> 624
        ],
        [
        'ten'=> 'Phường 15',
        'loai'=> 3,
        'parent_id'=> 624
        ],
        [
        'ten'=> 'Phường 01',
        'loai'=> 3,
        'parent_id'=> 624
        ],
        [
        'ten'=> 'Phường 04',
        'loai'=> 3,
        'parent_id'=> 625
        ],
        [
        'ten'=> 'Phường 09',
        'loai'=> 3,
        'parent_id'=> 625
        ],
        [
        'ten'=> 'Phường 03',
        'loai'=> 3,
        'parent_id'=> 625
        ],
        [
        'ten'=> 'Phường 12',
        'loai'=> 3,
        'parent_id'=> 625
        ],
        [
        'ten'=> 'Phường 02',
        'loai'=> 3,
        'parent_id'=> 625
        ],
        [
        'ten'=> 'Phường 08',
        'loai'=> 3,
        'parent_id'=> 625
        ],
        [
        'ten'=> 'Phường 07',
        'loai'=> 3,
        'parent_id'=> 625
        ],
        [
        'ten'=> 'Phường 01',
        'loai'=> 3,
        'parent_id'=> 625
        ],
        [
        'ten'=> 'Phường 11',
        'loai'=> 3,
        'parent_id'=> 625
        ],
        [
        'ten'=> 'Phường 14',
        'loai'=> 3,
        'parent_id'=> 625
        ],
        [
        'ten'=> 'Phường 05',
        'loai'=> 3,
        'parent_id'=> 625
        ],
        [
        'ten'=> 'Phường 06',
        'loai'=> 3,
        'parent_id'=> 625
        ],
        [
        'ten'=> 'Phường 10',
        'loai'=> 3,
        'parent_id'=> 625
        ],
        [
        'ten'=> 'Phường 13',
        'loai'=> 3,
        'parent_id'=> 625
        ],
        [
        'ten'=> 'Phường 14',
        'loai'=> 3,
        'parent_id'=> 626
        ],
        [
        'ten'=> 'Phường 13',
        'loai'=> 3,
        'parent_id'=> 626
        ],
        [
        'ten'=> 'Phường 09',
        'loai'=> 3,
        'parent_id'=> 626
        ],
        [
        'ten'=> 'Phường 06',
        'loai'=> 3,
        'parent_id'=> 626
        ],
        [
        'ten'=> 'Phường 12',
        'loai'=> 3,
        'parent_id'=> 626
        ],
        [
        'ten'=> 'Phường 05',
        'loai'=> 3,
        'parent_id'=> 626
        ],
        [
        'ten'=> 'Phường 11',
        'loai'=> 3,
        'parent_id'=> 626
        ],
        [
        'ten'=> 'Phường 02',
        'loai'=> 3,
        'parent_id'=> 626
        ],
        [
        'ten'=> 'Phường 01',
        'loai'=> 3,
        'parent_id'=> 626
        ],
        [
        'ten'=> 'Phường 04',
        'loai'=> 3,
        'parent_id'=> 626
        ],
        [
        'ten'=> 'Phường 08',
        'loai'=> 3,
        'parent_id'=> 626
        ],
        [
        'ten'=> 'Phường 03',
        'loai'=> 3,
        'parent_id'=> 626
        ],
        [
        'ten'=> 'Phường 07',
        'loai'=> 3,
        'parent_id'=> 626
        ],
        [
        'ten'=> 'Phường 10',
        'loai'=> 3,
        'parent_id'=> 626
        ],
        [
        'ten'=> 'Phường 08',
        'loai'=> 3,
        'parent_id'=> 627
        ],
        [
        'ten'=> 'Phường 02',
        'loai'=> 3,
        'parent_id'=> 627
        ],
        [
        'ten'=> 'Phường 01',
        'loai'=> 3,
        'parent_id'=> 627
        ],
        [
        'ten'=> 'Phường 03',
        'loai'=> 3,
        'parent_id'=> 627
        ],
        [
        'ten'=> 'Phường 11',
        'loai'=> 3,
        'parent_id'=> 627
        ],
        [
        'ten'=> 'Phường 09',
        'loai'=> 3,
        'parent_id'=> 627
        ],
        [
        'ten'=> 'Phường 10',
        'loai'=> 3,
        'parent_id'=> 627
        ],
        [
        'ten'=> 'Phường 04',
        'loai'=> 3,
        'parent_id'=> 627
        ],
        [
        'ten'=> 'Phường 13',
        'loai'=> 3,
        'parent_id'=> 627
        ],
        [
        'ten'=> 'Phường 12',
        'loai'=> 3,
        'parent_id'=> 627
        ],
        [
        'ten'=> 'Phường 05',
        'loai'=> 3,
        'parent_id'=> 627
        ],
        [
        'ten'=> 'Phường 14',
        'loai'=> 3,
        'parent_id'=> 627
        ],
        [
        'ten'=> 'Phường 06',
        'loai'=> 3,
        'parent_id'=> 627
        ],
        [
        'ten'=> 'Phường 15',
        'loai'=> 3,
        'parent_id'=> 627
        ],
        [
        'ten'=> 'Phường 16',
        'loai'=> 3,
        'parent_id'=> 627
        ],
        [
        'ten'=> 'Phường 07',
        'loai'=> 3,
        'parent_id'=> 627
        ],
        [
        'ten'=> 'Phường Bình Hưng Hòa',
        'loai'=> 3,
        'parent_id'=> 628
        ],
        [
        'ten'=> 'Phường Bình Hưng Hoà A',
        'loai'=> 3,
        'parent_id'=> 628
        ],
        [
        'ten'=> 'Phường Bình Hưng Hoà B',
        'loai'=> 3,
        'parent_id'=> 628
        ],
        [
        'ten'=> 'Phường Bình Trị Đông',
        'loai'=> 3,
        'parent_id'=> 628
        ],
        [
        'ten'=> 'Phường Bình Trị Đông A',
        'loai'=> 3,
        'parent_id'=> 628
        ],
        [
        'ten'=> 'Phường Bình Trị Đông B',
        'loai'=> 3,
        'parent_id'=> 628
        ],
        [
        'ten'=> 'Phường Tân Tạo',
        'loai'=> 3,
        'parent_id'=> 628
        ],
        [
        'ten'=> 'Phường Tân Tạo A',
        'loai'=> 3,
        'parent_id'=> 628
        ],
        [
        'ten'=> 'Phường  An Lạc',
        'loai'=> 3,
        'parent_id'=> 628
        ],
        [
        'ten'=> 'Phường An Lạc A',
        'loai'=> 3,
        'parent_id'=> 628
        ],
        [
        'ten'=> 'Phường Tân Thuận Đông',
        'loai'=> 3,
        'parent_id'=> 629
        ],
        [
        'ten'=> 'Phường Tân Thuận Tây',
        'loai'=> 3,
        'parent_id'=> 629
        ],
        [
        'ten'=> 'Phường Tân Kiểng',
        'loai'=> 3,
        'parent_id'=> 629
        ],
        [
        'ten'=> 'Phường Tân Hưng',
        'loai'=> 3,
        'parent_id'=> 629
        ],
        [
        'ten'=> 'Phường Bình Thuận',
        'loai'=> 3,
        'parent_id'=> 629
        ],
        [
        'ten'=> 'Phường Tân Quy',
        'loai'=> 3,
        'parent_id'=> 629
        ],
        [
        'ten'=> 'Phường Phú Thuận',
        'loai'=> 3,
        'parent_id'=> 629
        ],
        [
        'ten'=> 'Phường Tân Phú',
        'loai'=> 3,
        'parent_id'=> 629
        ],
        [
        'ten'=> 'Phường Tân Phong',
        'loai'=> 3,
        'parent_id'=> 629
        ],
        [
        'ten'=> 'Phường Phú Mỹ',
        'loai'=> 3,
        'parent_id'=> 629
        ],
        [
        'ten'=> 'Thị trấn Củ Chi',
        'loai'=> 3,
        'parent_id'=> 630
        ],
        [
        'ten'=> 'Xã Phú Mỹ Hưng',
        'loai'=> 3,
        'parent_id'=> 630
        ],
        [
        'ten'=> 'Xã An Phú',
        'loai'=> 3,
        'parent_id'=> 630
        ],
        [
        'ten'=> 'Xã Trung Lập Thượng',
        'loai'=> 3,
        'parent_id'=> 630
        ],
        [
        'ten'=> 'Xã An Nhơn Tây',
        'loai'=> 3,
        'parent_id'=> 630
        ],
        [
        'ten'=> 'Xã Nhuận Đức',
        'loai'=> 3,
        'parent_id'=> 630
        ],
        [
        'ten'=> 'Xã Phạm Văn Cội',
        'loai'=> 3,
        'parent_id'=> 630
        ],
        [
        'ten'=> 'Xã Phú Hòa Đông',
        'loai'=> 3,
        'parent_id'=> 630
        ],
        [
        'ten'=> 'Xã Trung Lập Hạ',
        'loai'=> 3,
        'parent_id'=> 630
        ],
        [
        'ten'=> 'Xã Trung An',
        'loai'=> 3,
        'parent_id'=> 630
        ],
        [
        'ten'=> 'Xã Phước Thạnh',
        'loai'=> 3,
        'parent_id'=> 630
        ],
        [
        'ten'=> 'Xã Phước Hiệp',
        'loai'=> 3,
        'parent_id'=> 630
        ],
        [
        'ten'=> 'Xã Tân An Hội',
        'loai'=> 3,
        'parent_id'=> 630
        ],
        [
        'ten'=> 'Xã Phước Vĩnh An',
        'loai'=> 3,
        'parent_id'=> 630
        ],
        [
        'ten'=> 'Xã Thái Mỹ',
        'loai'=> 3,
        'parent_id'=> 630
        ],
        [
        'ten'=> 'Xã Tân Thạnh Tây',
        'loai'=> 3,
        'parent_id'=> 630
        ],
        [
        'ten'=> 'Xã Hòa Phú',
        'loai'=> 3,
        'parent_id'=> 630
        ],
        [
        'ten'=> 'Xã Tân Thạnh Đông',
        'loai'=> 3,
        'parent_id'=> 630
        ],
        [
        'ten'=> 'Xã Bình Mỹ',
        'loai'=> 3,
        'parent_id'=> 630
        ],
        [
        'ten'=> 'Xã Tân Phú Trung',
        'loai'=> 3,
        'parent_id'=> 630
        ],
        [
        'ten'=> 'Xã Tân Thông Hội',
        'loai'=> 3,
        'parent_id'=> 630
        ],
        [
        'ten'=> 'Thị trấn Hóc Môn',
        'loai'=> 3,
        'parent_id'=> 631
        ],
        [
        'ten'=> 'Xã Tân Hiệp',
        'loai'=> 3,
        'parent_id'=> 631
        ],
        [
        'ten'=> 'Xã Nhị Bình',
        'loai'=> 3,
        'parent_id'=> 631
        ],
        [
        'ten'=> 'Xã Đông Thạnh',
        'loai'=> 3,
        'parent_id'=> 631
        ],
        [
        'ten'=> 'Xã Tân Thới Nhì',
        'loai'=> 3,
        'parent_id'=> 631
        ],
        [
        'ten'=> 'Xã Thới Tam Thôn',
        'loai'=> 3,
        'parent_id'=> 631
        ],
        [
        'ten'=> 'Xã Xuân Thới Sơn',
        'loai'=> 3,
        'parent_id'=> 631
        ],
        [
        'ten'=> 'Xã Tân Xuân',
        'loai'=> 3,
        'parent_id'=> 631
        ],
        [
        'ten'=> 'Xã Xuân Thới Đông',
        'loai'=> 3,
        'parent_id'=> 631
        ],
        [
        'ten'=> 'Xã Trung Chánh',
        'loai'=> 3,
        'parent_id'=> 631
        ],
        [
        'ten'=> 'Xã Xuân Thới Thượng',
        'loai'=> 3,
        'parent_id'=> 631
        ],
        [
        'ten'=> 'Xã Bà Điểm',
        'loai'=> 3,
        'parent_id'=> 631
        ],
        [
        'ten'=> 'Thị trấn Tân Túc',
        'loai'=> 3,
        'parent_id'=> 632
        ],
        [
        'ten'=> 'Xã Phạm Văn Hai',
        'loai'=> 3,
        'parent_id'=> 632
        ],
        [
        'ten'=> 'Xã Vĩnh Lộc A',
        'loai'=> 3,
        'parent_id'=> 632
        ],
        [
        'ten'=> 'Xã Vĩnh Lộc B',
        'loai'=> 3,
        'parent_id'=> 632
        ],
        [
        'ten'=> 'Xã Bình Lợi',
        'loai'=> 3,
        'parent_id'=> 632
        ],
        [
        'ten'=> 'Xã Lê Minh Xuân',
        'loai'=> 3,
        'parent_id'=> 632
        ],
        [
        'ten'=> 'Xã Tân Nhựt',
        'loai'=> 3,
        'parent_id'=> 632
        ],
        [
        'ten'=> 'Xã Tân Kiên',
        'loai'=> 3,
        'parent_id'=> 632
        ],
        [
        'ten'=> 'Xã Bình Hưng',
        'loai'=> 3,
        'parent_id'=> 632
        ],
        [
        'ten'=> 'Xã Phong Phú',
        'loai'=> 3,
        'parent_id'=> 632
        ],
        [
        'ten'=> 'Xã An Phú Tây',
        'loai'=> 3,
        'parent_id'=> 632
        ],
        [
        'ten'=> 'Xã Hưng Long',
        'loai'=> 3,
        'parent_id'=> 632
        ],
        [
        'ten'=> 'Xã Đa Phước',
        'loai'=> 3,
        'parent_id'=> 632
        ],
        [
        'ten'=> 'Xã Tân Quý Tây',
        'loai'=> 3,
        'parent_id'=> 632
        ],
        [
        'ten'=> 'Xã Bình Chánh',
        'loai'=> 3,
        'parent_id'=> 632
        ],
        [
        'ten'=> 'Xã Quy Đức',
        'loai'=> 3,
        'parent_id'=> 632
        ],
        [
        'ten'=> 'Thị trấn Nhà Bè',
        'loai'=> 3,
        'parent_id'=> 633
        ],
        [
        'ten'=> 'Xã Phước Kiển',
        'loai'=> 3,
        'parent_id'=> 633
        ],
        [
        'ten'=> 'Xã Phước Lộc',
        'loai'=> 3,
        'parent_id'=> 633
        ],
        [
        'ten'=> 'Xã Nhơn Đức',
        'loai'=> 3,
        'parent_id'=> 633
        ],
        [
        'ten'=> 'Xã Phú Xuân',
        'loai'=> 3,
        'parent_id'=> 633
        ],
        [
        'ten'=> 'Xã Long Thới',
        'loai'=> 3,
        'parent_id'=> 633
        ],
        [
        'ten'=> 'Xã Hiệp Phước',
        'loai'=> 3,
        'parent_id'=> 633
        ],
        [
        'ten'=> 'Thị trấn Cần Thạnh',
        'loai'=> 3,
        'parent_id'=> 634
        ],
        [
        'ten'=> 'Xã Bình Khánh',
        'loai'=> 3,
        'parent_id'=> 634
        ],
        [
        'ten'=> 'Xã Tam Thôn Hiệp',
        'loai'=> 3,
        'parent_id'=> 634
        ],
        [
        'ten'=> 'Xã An Thới Đông',
        'loai'=> 3,
        'parent_id'=> 634
        ],
        [
        'ten'=> 'Xã Thạnh An',
        'loai'=> 3,
        'parent_id'=> 634
        ],
        [
        'ten'=> 'Xã Long Hòa',
        'loai'=> 3,
        'parent_id'=> 634
        ],
        [
        'ten'=> 'Xã Lý Nhơn',
        'loai'=> 3,
        'parent_id'=> 634
        ],
        [
        'ten'=> 'Phường 5',
        'loai'=> 3,
        'parent_id'=> 635
        ],
        [
        'ten'=> 'Phường 2',
        'loai'=> 3,
        'parent_id'=> 635
        ],
        [
        'ten'=> 'Phường 4',
        'loai'=> 3,
        'parent_id'=> 635
        ],
        [
        'ten'=> 'Phường Tân Khánh',
        'loai'=> 3,
        'parent_id'=> 635
        ],
        [
        'ten'=> 'Phường 1',
        'loai'=> 3,
        'parent_id'=> 635
        ],
        [
        'ten'=> 'Phường 3',
        'loai'=> 3,
        'parent_id'=> 635
        ],
        [
        'ten'=> 'Phường 7',
        'loai'=> 3,
        'parent_id'=> 635
        ],
        [
        'ten'=> 'Phường 6',
        'loai'=> 3,
        'parent_id'=> 635
        ],
        [
        'ten'=> 'Xã Hướng Thọ Phú',
        'loai'=> 3,
        'parent_id'=> 635
        ],
        [
        'ten'=> 'Xã Nhơn Thạnh Trung',
        'loai'=> 3,
        'parent_id'=> 635
        ],
        [
        'ten'=> 'Xã Lợi Bình Nhơn',
        'loai'=> 3,
        'parent_id'=> 635
        ],
        [
        'ten'=> 'Xã Bình Tâm',
        'loai'=> 3,
        'parent_id'=> 635
        ],
        [
        'ten'=> 'Phường Khánh Hậu',
        'loai'=> 3,
        'parent_id'=> 635
        ],
        [
        'ten'=> 'Xã An Vĩnh Ngãi',
        'loai'=> 3,
        'parent_id'=> 635
        ],
        [
        'ten'=> 'Phường 1',
        'loai'=> 3,
        'parent_id'=> 636
        ],
        [
        'ten'=> 'Phường 2',
        'loai'=> 3,
        'parent_id'=> 636
        ],
        [
        'ten'=> 'Xã Thạnh Trị',
        'loai'=> 3,
        'parent_id'=> 636
        ],
        [
        'ten'=> 'Xã Bình Hiệp',
        'loai'=> 3,
        'parent_id'=> 636
        ],
        [
        'ten'=> 'Xã Bình Tân',
        'loai'=> 3,
        'parent_id'=> 636
        ],
        [
        'ten'=> 'Xã Tuyên Thạnh',
        'loai'=> 3,
        'parent_id'=> 636
        ],
        [
        'ten'=> 'Phường 3',
        'loai'=> 3,
        'parent_id'=> 636
        ],
        [
        'ten'=> 'Xã Thạnh Hưng',
        'loai'=> 3,
        'parent_id'=> 636
        ],
        [
        'ten'=> 'Thị trấn Tân Hưng',
        'loai'=> 3,
        'parent_id'=> 637
        ],
        [
        'ten'=> 'Xã Hưng Hà',
        'loai'=> 3,
        'parent_id'=> 637
        ],
        [
        'ten'=> 'Xã Hưng Điền B',
        'loai'=> 3,
        'parent_id'=> 637
        ],
        [
        'ten'=> 'Xã Hưng Điền',
        'loai'=> 3,
        'parent_id'=> 637
        ],
        [
        'ten'=> 'Xã Thạnh Hưng',
        'loai'=> 3,
        'parent_id'=> 637
        ],
        [
        'ten'=> 'Xã Hưng Thạnh',
        'loai'=> 3,
        'parent_id'=> 637
        ],
        [
        'ten'=> 'Xã Vĩnh Thạnh',
        'loai'=> 3,
        'parent_id'=> 637
        ],
        [
        'ten'=> 'Xã Vĩnh Châu B',
        'loai'=> 3,
        'parent_id'=> 637
        ],
        [
        'ten'=> 'Xã Vĩnh Lợi',
        'loai'=> 3,
        'parent_id'=> 637
        ],
        [
        'ten'=> 'Xã Vĩnh Đại',
        'loai'=> 3,
        'parent_id'=> 637
        ],
        [
        'ten'=> 'Xã Vĩnh Châu A',
        'loai'=> 3,
        'parent_id'=> 637
        ],
        [
        'ten'=> 'Xã Vĩnh Bửu',
        'loai'=> 3,
        'parent_id'=> 637
        ],
        [
        'ten'=> 'Thị trấn Vĩnh Hưng',
        'loai'=> 3,
        'parent_id'=> 638
        ],
        [
        'ten'=> 'Xã Hưng Điền A',
        'loai'=> 3,
        'parent_id'=> 638
        ],
        [
        'ten'=> 'Xã Khánh Hưng',
        'loai'=> 3,
        'parent_id'=> 638
        ],
        [
        'ten'=> 'Xã Thái Trị',
        'loai'=> 3,
        'parent_id'=> 638
        ],
        [
        'ten'=> 'Xã Vĩnh Trị',
        'loai'=> 3,
        'parent_id'=> 638
        ],
        [
        'ten'=> 'Xã Thái Bình Trung',
        'loai'=> 3,
        'parent_id'=> 638
        ],
        [
        'ten'=> 'Xã Vĩnh Bình',
        'loai'=> 3,
        'parent_id'=> 638
        ],
        [
        'ten'=> 'Xã Vĩnh Thuận',
        'loai'=> 3,
        'parent_id'=> 638
        ],
        [
        'ten'=> 'Xã Tuyên Bình',
        'loai'=> 3,
        'parent_id'=> 638
        ],
        [
        'ten'=> 'Xã Tuyên Bình Tây',
        'loai'=> 3,
        'parent_id'=> 638
        ],
        [
        'ten'=> 'Xã Bình Hòa Tây',
        'loai'=> 3,
        'parent_id'=> 639
        ],
        [
        'ten'=> 'Xã Bình Thạnh',
        'loai'=> 3,
        'parent_id'=> 639
        ],
        [
        'ten'=> 'Xã Bình Hòa Trung',
        'loai'=> 3,
        'parent_id'=> 639
        ],
        [
        'ten'=> 'Xã Bình Hòa Đông',
        'loai'=> 3,
        'parent_id'=> 639
        ],
        [
        'ten'=> 'Thị trấn Bình Phong Thạnh',
        'loai'=> 3,
        'parent_id'=> 639
        ],
        [
        'ten'=> 'Xã Tân Lập',
        'loai'=> 3,
        'parent_id'=> 639
        ],
        [
        'ten'=> 'Xã Tân Thành',
        'loai'=> 3,
        'parent_id'=> 639
        ],
        [
        'ten'=> 'Thị trấn Tân Thạnh',
        'loai'=> 3,
        'parent_id'=> 640
        ],
        [
        'ten'=> 'Xã Bắc Hòa',
        'loai'=> 3,
        'parent_id'=> 640
        ],
        [
        'ten'=> 'Xã Hậu Thạnh Tây',
        'loai'=> 3,
        'parent_id'=> 640
        ],
        [
        'ten'=> 'Xã Nhơn Hòa Lập',
        'loai'=> 3,
        'parent_id'=> 640
        ],
        [
        'ten'=> 'Xã Tân Lập',
        'loai'=> 3,
        'parent_id'=> 640
        ],
        [
        'ten'=> 'Xã Hậu Thạnh Đông',
        'loai'=> 3,
        'parent_id'=> 640
        ],
        [
        'ten'=> 'Xã Nhơn Hoà',
        'loai'=> 3,
        'parent_id'=> 640
        ],
        [
        'ten'=> 'Xã Kiến Bình',
        'loai'=> 3,
        'parent_id'=> 640
        ],
        [
        'ten'=> 'Xã Tân Thành',
        'loai'=> 3,
        'parent_id'=> 640
        ],
        [
        'ten'=> 'Xã Tân Bình',
        'loai'=> 3,
        'parent_id'=> 640
        ],
        [
        'ten'=> 'Xã Tân Ninh',
        'loai'=> 3,
        'parent_id'=> 640
        ],
        [
        'ten'=> 'Xã Nhơn Ninh',
        'loai'=> 3,
        'parent_id'=> 640
        ],
        [
        'ten'=> 'Xã Tân Hòa',
        'loai'=> 3,
        'parent_id'=> 640
        ],
        [
        'ten'=> 'Thị trấn Thạnh Hóa',
        'loai'=> 3,
        'parent_id'=> 641
        ],
        [
        'ten'=> 'Xã Tân Hiệp',
        'loai'=> 3,
        'parent_id'=> 641
        ],
        [
        'ten'=> 'Xã Thuận Bình',
        'loai'=> 3,
        'parent_id'=> 641
        ],
        [
        'ten'=> 'Xã Thạnh Phước',
        'loai'=> 3,
        'parent_id'=> 641
        ],
        [
        'ten'=> 'Xã Thạnh Phú',
        'loai'=> 3,
        'parent_id'=> 641
        ],
        [
        'ten'=> 'Xã Thuận Nghĩa Hòa',
        'loai'=> 3,
        'parent_id'=> 641
        ],
        [
        'ten'=> 'Xã Thủy Đông',
        'loai'=> 3,
        'parent_id'=> 641
        ],
        [
        'ten'=> 'Xã Thủy Tây',
        'loai'=> 3,
        'parent_id'=> 641
        ],
        [
        'ten'=> 'Xã Tân Tây',
        'loai'=> 3,
        'parent_id'=> 641
        ],
        [
        'ten'=> 'Xã Tân Đông',
        'loai'=> 3,
        'parent_id'=> 641
        ],
        [
        'ten'=> 'Xã Thạnh An',
        'loai'=> 3,
        'parent_id'=> 641
        ],
        [
        'ten'=> 'Thị trấn Đông Thành',
        'loai'=> 3,
        'parent_id'=> 642
        ],
        [
        'ten'=> 'Xã Mỹ Quý Đông',
        'loai'=> 3,
        'parent_id'=> 642
        ],
        [
        'ten'=> 'Xã Mỹ Thạnh Bắc',
        'loai'=> 3,
        'parent_id'=> 642
        ],
        [
        'ten'=> 'Xã Mỹ Quý Tây',
        'loai'=> 3,
        'parent_id'=> 642
        ],
        [
        'ten'=> 'Xã Mỹ Thạnh Tây',
        'loai'=> 3,
        'parent_id'=> 642
        ],
        [
        'ten'=> 'Xã Mỹ Thạnh Đông',
        'loai'=> 3,
        'parent_id'=> 642
        ],
        [
        'ten'=> 'Xã Bình Thành',
        'loai'=> 3,
        'parent_id'=> 642
        ],
        [
        'ten'=> 'Xã Bình Hòa Bắc',
        'loai'=> 3,
        'parent_id'=> 642
        ],
        [
        'ten'=> 'Xã Bình Hòa Hưng',
        'loai'=> 3,
        'parent_id'=> 642
        ],
        [
        'ten'=> 'Xã Bình Hòa Nam',
        'loai'=> 3,
        'parent_id'=> 642
        ],
        [
        'ten'=> 'Xã Mỹ Bình',
        'loai'=> 3,
        'parent_id'=> 642
        ],
        [
        'ten'=> 'Thị trấn Hậu Nghĩa',
        'loai'=> 3,
        'parent_id'=> 643
        ],
        [
        'ten'=> 'Thị trấn Hiệp Hòa',
        'loai'=> 3,
        'parent_id'=> 643
        ],
        [
        'ten'=> 'Thị trấn Đức Hòa',
        'loai'=> 3,
        'parent_id'=> 643
        ],
        [
        'ten'=> 'Xã Lộc Giang',
        'loai'=> 3,
        'parent_id'=> 643
        ],
        [
        'ten'=> 'Xã An Ninh Đông',
        'loai'=> 3,
        'parent_id'=> 643
        ],
        [
        'ten'=> 'Xã An Ninh Tây',
        'loai'=> 3,
        'parent_id'=> 643
        ],
        [
        'ten'=> 'Xã Tân Mỹ',
        'loai'=> 3,
        'parent_id'=> 643
        ],
        [
        'ten'=> 'Xã Hiệp Hòa',
        'loai'=> 3,
        'parent_id'=> 643
        ],
        [
        'ten'=> 'Xã Đức Lập Thượng',
        'loai'=> 3,
        'parent_id'=> 643
        ],
        [
        'ten'=> 'Xã Đức Lập Hạ',
        'loai'=> 3,
        'parent_id'=> 643
        ],
        [
        'ten'=> 'Xã Tân Phú',
        'loai'=> 3,
        'parent_id'=> 643
        ],
        [
        'ten'=> 'Xã Mỹ Hạnh Bắc',
        'loai'=> 3,
        'parent_id'=> 643
        ],
        [
        'ten'=> 'Xã Đức Hòa Thượng',
        'loai'=> 3,
        'parent_id'=> 643
        ],
        [
        'ten'=> 'Xã Hòa Khánh Tây',
        'loai'=> 3,
        'parent_id'=> 643
        ],
        [
        'ten'=> 'Xã Hòa Khánh Đông',
        'loai'=> 3,
        'parent_id'=> 643
        ],
        [
        'ten'=> 'Xã Mỹ Hạnh Nam',
        'loai'=> 3,
        'parent_id'=> 643
        ],
        [
        'ten'=> 'Xã Hòa Khánh Nam',
        'loai'=> 3,
        'parent_id'=> 643
        ],
        [
        'ten'=> 'Xã Đức Hòa Đông',
        'loai'=> 3,
        'parent_id'=> 643
        ],
        [
        'ten'=> 'Xã Đức Hòa Hạ',
        'loai'=> 3,
        'parent_id'=> 643
        ],
        [
        'ten'=> 'Xã Hựu Thạnh',
        'loai'=> 3,
        'parent_id'=> 643
        ],
        [
        'ten'=> 'Thị trấn Bến Lức',
        'loai'=> 3,
        'parent_id'=> 644
        ],
        [
        'ten'=> 'Xã Thạnh Lợi',
        'loai'=> 3,
        'parent_id'=> 644
        ],
        [
        'ten'=> 'Xã Lương Bình',
        'loai'=> 3,
        'parent_id'=> 644
        ],
        [
        'ten'=> 'Xã Thạnh Hòa',
        'loai'=> 3,
        'parent_id'=> 644
        ],
        [
        'ten'=> 'Xã Lương Hòa',
        'loai'=> 3,
        'parent_id'=> 644
        ],
        [
        'ten'=> 'Xã Tân Hòa',
        'loai'=> 3,
        'parent_id'=> 644
        ],
        [
        'ten'=> 'Xã Tân Bửu',
        'loai'=> 3,
        'parent_id'=> 644
        ],
        [
        'ten'=> 'Xã An Thạnh',
        'loai'=> 3,
        'parent_id'=> 644
        ],
        [
        'ten'=> 'Xã Bình Đức',
        'loai'=> 3,
        'parent_id'=> 644
        ],
        [
        'ten'=> 'Xã Mỹ Yên',
        'loai'=> 3,
        'parent_id'=> 644
        ],
        [
        'ten'=> 'Xã Thanh Phú',
        'loai'=> 3,
        'parent_id'=> 644
        ],
        [
        'ten'=> 'Xã Long Hiệp',
        'loai'=> 3,
        'parent_id'=> 644
        ],
        [
        'ten'=> 'Xã Thạnh Đức',
        'loai'=> 3,
        'parent_id'=> 644
        ],
        [
        'ten'=> 'Xã Phước Lợi',
        'loai'=> 3,
        'parent_id'=> 644
        ],
        [
        'ten'=> 'Xã Nhựt Chánh',
        'loai'=> 3,
        'parent_id'=> 644
        ],
        [
        'ten'=> 'Thị trấn Thủ Thừa',
        'loai'=> 3,
        'parent_id'=> 645
        ],
        [
        'ten'=> 'Xã Long Thạnh',
        'loai'=> 3,
        'parent_id'=> 645
        ],
        [
        'ten'=> 'Xã Tân Thành',
        'loai'=> 3,
        'parent_id'=> 645
        ],
        [
        'ten'=> 'Xã Long Thuận',
        'loai'=> 3,
        'parent_id'=> 645
        ],
        [
        'ten'=> 'Xã Mỹ Lạc',
        'loai'=> 3,
        'parent_id'=> 645
        ],
        [
        'ten'=> 'Xã Mỹ Thạnh',
        'loai'=> 3,
        'parent_id'=> 645
        ],
        [
        'ten'=> 'Xã Bình An',
        'loai'=> 3,
        'parent_id'=> 645
        ],
        [
        'ten'=> 'Xã Nhị Thành',
        'loai'=> 3,
        'parent_id'=> 645
        ],
        [
        'ten'=> 'Xã Mỹ An',
        'loai'=> 3,
        'parent_id'=> 645
        ],
        [
        'ten'=> 'Xã Bình Thạnh',
        'loai'=> 3,
        'parent_id'=> 645
        ],
        [
        'ten'=> 'Xã Mỹ Phú',
        'loai'=> 3,
        'parent_id'=> 645
        ],
        [
        'ten'=> 'Xã Tân Long',
        'loai'=> 3,
        'parent_id'=> 645
        ],
        [
        'ten'=> 'Thị trấn Tân Trụ',
        'loai'=> 3,
        'parent_id'=> 646
        ],
        [
        'ten'=> 'Xã Tân Bình',
        'loai'=> 3,
        'parent_id'=> 646
        ],
        [
        'ten'=> 'Xã Quê Mỹ Thạnh',
        'loai'=> 3,
        'parent_id'=> 646
        ],
        [
        'ten'=> 'Xã Lạc Tấn',
        'loai'=> 3,
        'parent_id'=> 646
        ],
        [
        'ten'=> 'Xã Bình Trinh Đông',
        'loai'=> 3,
        'parent_id'=> 646
        ],
        [
        'ten'=> 'Xã Tân Phước Tây',
        'loai'=> 3,
        'parent_id'=> 646
        ],
        [
        'ten'=> 'Xã Bình Lãng',
        'loai'=> 3,
        'parent_id'=> 646
        ],
        [
        'ten'=> 'Xã Bình Tịnh',
        'loai'=> 3,
        'parent_id'=> 646
        ],
        [
        'ten'=> 'Xã Đức Tân',
        'loai'=> 3,
        'parent_id'=> 646
        ],
        [
        'ten'=> 'Xã Nhựt Ninh',
        'loai'=> 3,
        'parent_id'=> 646
        ],
        [
        'ten'=> 'Thị trấn Cần Đước',
        'loai'=> 3,
        'parent_id'=> 647
        ],
        [
        'ten'=> 'Xã Long Trạch',
        'loai'=> 3,
        'parent_id'=> 647
        ],
        [
        'ten'=> 'Xã Long Khê',
        'loai'=> 3,
        'parent_id'=> 647
        ],
        [
        'ten'=> 'Xã Long Định',
        'loai'=> 3,
        'parent_id'=> 647
        ],
        [
        'ten'=> 'Xã Phước Vân',
        'loai'=> 3,
        'parent_id'=> 647
        ],
        [
        'ten'=> 'Xã Long Hòa',
        'loai'=> 3,
        'parent_id'=> 647
        ],
        [
        'ten'=> 'Xã Long Cang',
        'loai'=> 3,
        'parent_id'=> 647
        ],
        [
        'ten'=> 'Xã Long Sơn',
        'loai'=> 3,
        'parent_id'=> 647
        ],
        [
        'ten'=> 'Xã Tân Trạch',
        'loai'=> 3,
        'parent_id'=> 647
        ],
        [
        'ten'=> 'Xã Mỹ Lệ',
        'loai'=> 3,
        'parent_id'=> 647
        ],
        [
        'ten'=> 'Xã Tân Lân',
        'loai'=> 3,
        'parent_id'=> 647
        ],
        [
        'ten'=> 'Xã Phước Tuy',
        'loai'=> 3,
        'parent_id'=> 647
        ],
        [
        'ten'=> 'Xã Long Hựu Đông',
        'loai'=> 3,
        'parent_id'=> 647
        ],
        [
        'ten'=> 'Xã Tân Ân',
        'loai'=> 3,
        'parent_id'=> 647
        ],
        [
        'ten'=> 'Xã Phước Đông',
        'loai'=> 3,
        'parent_id'=> 647
        ],
        [
        'ten'=> 'Xã Long Hựu Tây',
        'loai'=> 3,
        'parent_id'=> 647
        ],
        [
        'ten'=> 'Xã Tân Chánh',
        'loai'=> 3,
        'parent_id'=> 647
        ],
        [
        'ten'=> 'Thị trấn Cần Giuộc',
        'loai'=> 3,
        'parent_id'=> 648
        ],
        [
        'ten'=> 'Xã Phước Lý',
        'loai'=> 3,
        'parent_id'=> 648
        ],
        [
        'ten'=> 'Xã Long Thượng',
        'loai'=> 3,
        'parent_id'=> 648
        ],
        [
        'ten'=> 'Xã Long Hậu',
        'loai'=> 3,
        'parent_id'=> 648
        ],
        [
        'ten'=> 'Xã Phước Hậu',
        'loai'=> 3,
        'parent_id'=> 648
        ],
        [
        'ten'=> 'Xã Mỹ Lộc',
        'loai'=> 3,
        'parent_id'=> 648
        ],
        [
        'ten'=> 'Xã Phước Lại',
        'loai'=> 3,
        'parent_id'=> 648
        ],
        [
        'ten'=> 'Xã Phước Lâm',
        'loai'=> 3,
        'parent_id'=> 648
        ],
        [
        'ten'=> 'Xã Thuận Thành',
        'loai'=> 3,
        'parent_id'=> 648
        ],
        [
        'ten'=> 'Xã Phước Vĩnh Tây',
        'loai'=> 3,
        'parent_id'=> 648
        ],
        [
        'ten'=> 'Xã Phước Vĩnh Đông',
        'loai'=> 3,
        'parent_id'=> 648
        ],
        [
        'ten'=> 'Xã Long An',
        'loai'=> 3,
        'parent_id'=> 648
        ],
        [
        'ten'=> 'Xã Long Phụng',
        'loai'=> 3,
        'parent_id'=> 648
        ],
        [
        'ten'=> 'Xã Đông Thạnh',
        'loai'=> 3,
        'parent_id'=> 648
        ],
        [
        'ten'=> 'Xã Tân Tập',
        'loai'=> 3,
        'parent_id'=> 648
        ],
        [
        'ten'=> 'Thị trấn Tầm Vu',
        'loai'=> 3,
        'parent_id'=> 580
        ],
        [
        'ten'=> 'Xã Bình Quới',
        'loai'=> 3,
        'parent_id'=> 580
        ],
        [
        'ten'=> 'Xã Hòa Phú',
        'loai'=> 3,
        'parent_id'=> 580
        ],
        [
        'ten'=> 'Xã Phú Ngãi Trị',
        'loai'=> 3,
        'parent_id'=> 580
