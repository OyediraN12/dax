<?php

namespace App\Http\Controllers;

use App\User;
use App\UserRequest;
use App\Http\Requests\UserRequestRequest;
use Illuminate\Http\Request;
use App\Services\UserService;
use App\Services\UserRequestService;
use Illuminate\Support\Facades\Hash;

use App\Mail\UserRequestNotification;
use Illuminate\Support\Facades\Mail;

class UserRequestController extends Controller
{
    protected $userService, $userRequestService;

    public function __construct(UserService $userService, UserRequestService $userRequestService)
    {
        $this->userService = $userService;
        $this->userRequestService = $userRequestService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequestRequest $request)
    {
        try {
            # create data
            $data = [
                "name" => $request->get('name'),
                "last_name" => $request->get('last_name'),
                "email" => $request->get('email'),
                "phone_number" => $request->get('phone_number'),
                "password" => "secret"
            ];

            # hash password
            $data["password"] = Hash::make($data["password"]);
            $data["role"] = "User";

            # find or create user
            if(User::where('email', $request->get('email'))->first()){
                $user = User::where('email', $request->get('email'))->first();
            }else {
                $user = $this->userService->create($data);
            }

            if($request->has('request_type'))
            {
                if($request->get('request_type') == "Rent" || $request->get('request_type') == "Buy")
                {
                    # if rent and buy
                    $requests = (object) [   
                        "state_of_residence" => $request->state_of_residence, 
                        "state_of_interest" => $request->state_of_interest,
                        "area_of_interest" => $request->area_of_interest,
                        "duration" => $request->duration,
                        "property_type" => $request->property_type,
                        "budget" => $request->budget,
                        "comment" => $request->comment,
                        "deposit" => $request->deposit,
                    ];
                }else if($request->get('request_type') == "Construction")
                {
                    #if construction
                    $requests = (object) [   
                        "country" => $request->country, 
                        "about_project" => $request->about_project,
                        "have_land" => $request->have_land
                    ];
                }else if($request->get('request_type') == "Rental" || 
                        $request->get('request_type') == "Sales" || 
                        $request->get('request_type') == "Distress Sales")
                {
                    # if makeoffer - rental
                    $requests = (object) [   
                        "role" => $request->role, # if sales: i am selling, buying
                        "location" => $request->location, 
                        "facilities" => $request->facilities,
                        "property_type" => $request->property_type,
                        "duration" => $request->duration,
                        "price" => $request->price,
                        "comment" => $request->comment,
                    ];
                }
            }
            
            $requests =  json_encode($requests);

            $user_request = $this->userRequestService->create([
                'user_id' => $user->id,
                'request_type' => $request->get('request_type'), 
                'requests' => $requests
            ]);

            retry(5, function() use ($user_request){
                Mail::to($user_request->user->email)->send(new UserRequestNotification($user_request));
            }, 100);

            # Return Back with message
            $success = "Customer Created";
            return redirect()->back()->with(['data' => $success]);
       
        } catch (\Exception $ex) {
            dump($ex);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\UserRequest  $userRequest
     * @return \Illuminate\Http\Response
     */
    public function show(UserRequest $userRequest)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\UserRequest  $userRequest
     * @return \Illuminate\Http\Response
     */
    public function edit(UserRequest $userRequest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\UserRequest  $userRequest
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserRequest $userRequest)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\UserRequest  $userRequest
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserRequest $userRequest)
    {
        //
    }
}
