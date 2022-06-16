<?php
// namespace: khai báo đường dẫn, tạo Controller
namespace App\Http\Controllers;
// use: khai báo thư viện dễ sử dụng
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
// Khai báo class
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
