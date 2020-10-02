<?php

namespace App\Services;

use App\HowWork;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Auth;

class HowWorkService
{
    public function index()
    {
        return HowWork::orderBy('id', 'desc')->paginate(15);
    }

    public function create(array $data)
    {
        return HowWork::create($data);
    }

    public function find($id)
    {
        return HowWork::where('name', $id)->first();
    }

    public function update(int $id, array $data)
    {
        return HowWork::where('id', $id)->update($data);
    }  

    public function destroy(int $id)
    {
        return HowWork::find($id)->delete();
    }
}