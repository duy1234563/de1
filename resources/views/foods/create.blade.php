@extends('layouts.app')

@section('title', 'Thêm món ăn')

@section('content')
    <h1>Thêm món ăn mới</h1>

    {{-- Hiển thị thông báo lỗi --}}
    @if ($errors->any())
        <div style="color: red; border: 1px solid red; padding: 10px; margin-bottom: 10px;">
            <strong>Lỗi nhập liệu:</strong>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {{-- Form nhập liệu --}}
    <form action="{{ route('foods.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <label for="ten">Tên món ăn:</label>
        <input type="text" name="ten" value="{{ old('ten') }}">
        @error('ten') <span style="color: red;">{{ $message }}</span> @enderror
        <br>

        <label for="gia">Giá:</label>
        <input type="number" name="gia" value="{{ old('gia') }}">
        @error('gia') <span style="color: red;">{{ $message }}</span> @enderror
        <br>

        <label for="mo_ta">Mô tả:</label>
        <textarea name="mo_ta">{{ old('mo_ta') }}</textarea>
        @error('mo_ta') <span style="color: red;">{{ $message }}</span> @enderror
        <br>

        <label for="hinh_anh">Hình ảnh:</label>
        <input type="file" name="hinh_anh">
        @error('hinh_anh') <span style="color: red;">{{ $message }}</span> @enderror
        <br>

        <label for="loai">Loại:</label>
        <select name="loai">
            <option value="mon_chinh" {{ old('loai') == 'mon_chinh' ? 'selected' : '' }}>Món chính</option>
            <option value="mon_phu" {{ old('loai') == 'mon_phu' ? 'selected' : '' }}>Món phụ</option>
            <option value="do_uong" {{ old('loai') == 'do_uong' ? 'selected' : '' }}>Đồ uống</option>
        </select>
        @error('loai') <span style="color: red;">{{ $message }}</span> @enderror
        <br>

        <label for="trang_thai">Trạng thái:</label>
        <select name="trang_thai">
            <option value="1" {{ old('trang_thai') == '1' ? 'selected' : '' }}>Hiển thị</option>
            <option value="0" {{ old('trang_thai') == '0' ? 'selected' : '' }}>Ẩn</option>
        </select>
        @error('trang_thai') <span style="color: red;">{{ $message }}</span> @enderror
        <br>

        <button type="submit">Lưu</button>
    </form>
@endsection
