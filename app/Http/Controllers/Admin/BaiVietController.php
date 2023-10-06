<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Carbon\Carbon;
use App\Models\bai_viet;
use App\Models\dia_diem;
use App\Models\User;


class baivietController extends Controller
{
     //Quản lí bài viết
    public function index(Request $request){
        //$lstintuc = bai_viet::orderBy('created_at','ASC')->paginate(15);

        $query = bai_viet::query();
        $query = $query->where('loai_bai_viet','bai-viet');
        $totaltintucs = $query->count();
        $user = User::all();
        $query= $this->handleFilters($query, $request);

        $lsbaiviet = $query->paginate(15);

        $data= [
            'pageTitle' => "Tin tức",
            'lsbaiviet' => $lsbaiviet,
            'user'=> $user,
            'title'=>trans('public.user'),

        ];
        return view('admin.bai-viet.baiviet-ds', $data);
    }

    //tìm kiếm
    private function handleFilters($query, $request){
        $form = $request->get('form', null);
        $to = $request->get('to', null);
        $title = $request->get('title', null);
        //$author_id = $request->get('author_id', null);
        $hien = $request->get('hien', null);
        $noi_bat = $request->get('noi-bat', null);
        $query = fromAndToDateFilter($form, $to, $query, 'created_at');

        if (!empty($title)) {
            $query->where('tieu_de', 'like', '%' . $title . '%');
        }

        // if (!empty($author_id) and count($author_id)) {
        //     $query->whereIn('nguoi_dung_id', $author_id);
        // }

        if (!empty($hien)) {
            $query->where('hien', '=', '1');
        }
        if (!empty($noi_bat)) {
            $query->where('noi_bat', '=', 1);
        }
        return $query;
    }

    //thêm Bài viết
    public function create(){
        $ls_dia_diem = dia_diem::get();
          $data = [
            'pageTitle' => trans('public.create_post'),
            'title'=> trans('public.post'),
            'ls_dia_diem'=>$ls_dia_diem,
        ];

        return view('admin.bai-viet.baiviet-them', $data);
    }

    public function store(Request $request){
        $rule = [
            'hinhtintuc' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'tieude' => 'required',
            'noidung' => 'required',
        ];
        $message =[
            'required' => ':attribute không được để trống',
            'min' => ':attribute phải lớn hơn :min', // lớn hơn  (không phải độ dài)
            'max' => ':attribute phải nhỏ hơn :max', // nhỏ hơn
            'numeric' => ':attribute phải là số',
            'unique' => ':attribute đã tồn tại',
            'image' => ':attribute không đúng định dạng',
            'mimes' => ':attribute không đúng định dạng',

        ];
        $attribute = [
            'hinhtintuc' => 'Hình bài viêt',
            'noidung' => 'Nội dung',
            'tieude' => 'Tiêu đề',
        ];
        $request->validate($rule, $message, $attribute);
        $hinh_bai_viet = $request->file('hinhtintuc');
        $dia_diem_id = $request->input('dia_diem_id') ?? null;
        $noidung = $request->input('noidung');
        $tieude = $request->input('tieude');
        $bai_viet_moi = new bai_viet;
        $bai_viet_moi->fill([
            'tieu_de'=> $tieude,
            'dia_diem_id'=>$dia_diem_id,
            'loai_bai_viet'=>'bai-viet',
            'noi_dung'=>$noidung,
            'hien'=> 1,
         ]);
         $bai_viet_moi->save();
        if($hinh_bai_viet != null){
            //$file_name = time().Str::random(10).'.'.$hinhtintuc->getClientOriginalExtension();
            $file_name = $hinh_bai_viet->getClientOriginalName();
            $imagePath = $hinh_bai_viet->move(public_path('img/inh_anh_bai_viet/'), $file_name);
            $ten_file = 'img/hinh_anh_bai_viet/'.$file_name;
            $bai_viet_moi->hinh_anh_bai_viet = $ten_file;
            $bai_viet_moi->save();
        }
        return Redirect::route('admin.bai-viet.index')->with('success','Thêm thành công');
    }

    //sửa bài viết
    public function edit($id){
        $baiviet = bai_viet::where('loai_bai_viet','bai-viet')->find($id);
        $ls_dia_diem = dia_diem::get();
        if (!empty($bundle)) {
            abort(404);
        }
        $data = [
            'pageTitle'=>trans('edit_post'),
            'baiviet' => $baiviet,
            'ls_dia_diem'=>$ls_dia_diem,
            'title'=> trans('public.post')
        ];
        return view('admin.bai-viet.baiviet-sua', $data);
    }

    public function update(Request $request,$id){
        $rule = [
            'hinhtintuc' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'tieude' => 'required',
            'noidung' => 'required',
        ];
        $message =[
            'required' => ':attribute không được để trống',
            'min' => ':attribute phải lớn hơn :min', // lớn hơn  (không phải độ dài)
            'max' => ':attribute phải nhỏ hơn :max', // nhỏ hơn
            'numeric' => ':attribute phải là số',
            'unique' => ':attribute đã tồn tại',
            'image' => ':attribute không đúng định dạng',
            'mimes' => ':attribute không đúng định dạng',

        ];
        $attribute = [
            'hinhtintuc' => 'Hình bài viêt',
            'noidung' => 'Nội dung',
            'tieude' => 'Tiêu đề',
        ];
        $request->validate($rule, $message, $attribute);
        $hinh_bai_viet = $request->file('hinhtintuc');
        $dia_diem_id = $request->input('dia_diem_id');
        $noidung = $request->input('noidung');
        $tieude = $request->input('tieude');

        $bai_viet = bai_viet::find($id);

        $bai_viet->fill([
            'tieu_de'=> $tieude,
            'dia_diem_id'=>$dia_diem_id,
            'noi_dung'=>$noidung,
            'hien'=> 1,
        ]);

        if($hinh_bai_viet != null){
            //$file_name = time().Str::random(10).'.'.$hinhtintuc->getClientOriginalExtension();
            $file_name = $hinh_bai_viet->getClientOriginalName();
            $imagePath = $hinh_bai_viet->move(public_path('img/hinh_anh_bai_viet/'), $file_name);
            $ten_file = 'img/hinh_anh_bai_viet/'.$file_name;
            $bai_viet->hinh_anh_bai_viet = $ten_file;
            $bai_viet->save();
        }
        $bai_viet->save();
        return Redirect::route('admin.bai-viet.index')->with('success','sửa thành công');
    }

    //xóa bài viết
    public function destroy(Request $request, $id){
        $tintuc = bai_viet::find($id);

        if (!empty($tintuc)) {
            $tintuc->delete();
        }
        $toastData = [
            'title' => trans('public.request_success'),
            'msg' => trans('public.delete_success'),
            'status' => 'success'
        ];
        return Redirect::route('admin.bai-viet.index')->with(['toast'=>$toastData,'success'=>'xóa thành công']);
    }

    // radio

    public function hien(Request $request,$id){
        $check = $request->check;
        $tintuc = bai_viet::find($id);
        if($check=="true"){
            $tintuc->fill([
                'hien'=>1
            ]);
        }else{
            $tintuc->fill([
                'hien'=>0
            ]);
        }
        $tintuc->save();
        return response()->json([
            'status'=>200,
            'mess'=>  'sửa thành công',
        ]);
    }

    public function noi_bat(Request $request,$id){
        $check = $request->check;
        $tintuc = bai_viet::find($id);
        if($check=="true"){
            $tintuc->fill([
                'noi_bat'=>1
            ]);
        }else{
            $tintuc->fill([
                'noi_bat'=>0
            ]);
        }
        $tintuc->save();
        return response()->json([
            'status'=>200,
            'mess'=>  'sửa thành công',
        ]);
    }




    // kết quản lí bài viết

    // quản lí lí bình luận bài viết
    public function binh_luan_bai_viet(){
        $lsbinhluan = tintuc_binhluan::join('nguoidungs','nguoidungs.id', '=','tintuc_binhluans.ma_nguoi_dung')
                                        ->join('tintucs','tintucs.id', '=','tintuc_binhluans.ma_bai_viet')
                                        ->select('tintuc_binhluans.*','nguoidungs.ten','tintucs.tieu_de')
                                        ->paginate(10);
        return view('admin.tintuc.tintuc-binhluan')->with(['lsbinhluan'=>$lsbinhluan]);
    }

    public function binh_luan_bai_viet_hien(Request $request,$id){
        $check = $request->check;
        $tintuc = tintuc_binhluan::find($id);
        if($check=="true"){
            $tintuc->fill([
                'hien'=>1
            ]);
        }else{
            $tintuc->fill([
                'hien'=>0
            ]);
        }
        $tintuc->save();
        return response()->json([
            'status'=>200,
            'mess'=>  'sửa thành công',
        ]);
    }

    public function binh_luan_bai_viet_noi_bat(Request $request,$id){
        $check = $request->check;
        $tintuc = tintuc_binhluan::find($id);
        if($check=="true"){
            $tintuc->fill([
                'noi_bat'=>1
            ]);
        }else{
            $tintuc->fill([
                'noi_bat'=>0
            ]);
        }
        $tintuc->save();
        return response()->json([
            'status'=>200,
            'mess'=>  'sửa thành công',
        ]);
    }

    public function binh_luan_bai_viet_xoa($id){
        $binhluan_tintuc = tintuc_binhluan::find($id);
        $binhluan_tintuc->delete();
        return  Redirect::route('admin.binh-luan-bai-viet')->with('success','Xóa thành công');
    }

    // kết thúc quản lí bình luận bài viết
}
