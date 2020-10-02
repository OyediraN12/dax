<?php

namespace App\Services;

use App\UserRequest;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Auth;

class UserRequestService
{
    public function index()
    {
        return UserRequest::orderBy('id', 'desc')->paginate(15);
    }

    public function create(array $data)
    {
        return UserRequest::create($data);
    }

    public function find(int $request_id)
    {
        return UserRequest::find($request_id);
    }

    public function update(int $request_id, array $data)
    {
        return UserRequest::where('id', $request_id)->update($data);
    }  

    public function destroy(int $request_id)
    {
        return UserRequest::find($request_id)->delete();
    }
}