<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FoodRequest extends FormRequest
{
    public function authorize()
    {
        return true; // Cho phép request được thực thi
    }

    public function rules()
    {
        return [
            'ten' => 'required|string|max:255',
            'gia' => 'required|numeric|min:1000', // Giá tối thiểu 1000
            'mo_ta' => 'nullable|string|max:500', // Mô tả không bắt buộc
            'hinh_anh' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Hình ảnh (2MB max)
            'loai' => 'required|in:mon_chinh,mon_phu,do_uong', // Chỉ cho phép các loại hợp lệ
            'trang_thai' => 'required|boolean', // 1: Hiển thị, 0: Ẩn
        ];
    }

    public function messages()
    {
        return [
            'ten.required' => 'Vui lòng nhập tên món ăn.',
            'ten.string' => 'Tên món ăn phải là chuỗi ký tự.',
            'ten.max' => 'Tên món ăn không được vượt quá 255 ký tự.',
            
            'gia.required' => 'Vui lòng nhập giá món ăn.',
            'gia.numeric' => 'Giá phải là một số.',
            'gia.min' => 'Giá tối thiểu là 1000 VNĐ.',
            
            'mo_ta.string' => 'Mô tả phải là chuỗi ký tự.',
            'mo_ta.max' => 'Mô tả không được vượt quá 500 ký tự.',
            
            'hinh_anh.image' => 'File tải lên phải là hình ảnh.',
            'hinh_anh.mimes' => 'Hình ảnh phải có định dạng: jpeg, png, jpg, gif.',
            'hinh_anh.max' => 'Kích thước hình ảnh tối đa là 2MB.',
            
            'loai.required' => 'Vui lòng chọn loại món ăn.',
            'loai.in' => 'Loại món ăn không hợp lệ.',
            
            'trang_thai.required' => 'Vui lòng chọn trạng thái.',
            'trang_thai.boolean' => 'Trạng thái không hợp lệ.',
        ];
    }
}
