<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\FoodRequest;
use App\Models\Food;

class FoodController extends Controller
{
    public function store(FoodRequest $request)
    {
        // Lấy dữ liệu đã validate từ request
        $data = $request->validated();
        
        // Tạo mới món ăn
        Food::create($data);

        // Quay lại trang trước với thông báo thành công
        return redirect()->back()->with('success', 'Thêm món ăn thành công!');
    }
}
