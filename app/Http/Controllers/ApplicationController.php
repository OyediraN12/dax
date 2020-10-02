<?php

namespace App\Http\Controllers;

use App\User;
use App\Message;
use App\Email;
use Illuminate\Http\Request;
use App\Services\UserRequestService;
use Illuminate\Support\Facades\Auth;

use App\Mail\EmailNotification;
use Illuminate\Support\Facades\Mail;

class ApplicationController extends Controller
{
    protected $userRequestService;

    public function __construct(UserRequestService $userRequestService)
    {
        $this->userRequestService = $userRequestService;
    }

    //email App
    public function emailApplication(){
        $pageConfigs = ['isContentSidebar' => true, 'bodyCustomClass' => 'email-application'];

        $userRequests = $this->userRequestService->index();

        if(Auth::user()->role != "Admin")
        {
          return redirect()->back();
        }

        return view('pages.app-email', ['pageConfigs' => $pageConfigs, 'userRequests'=> $userRequests]);
    }

    //email App show
    public function emailApplicationShow($email){
      $pageConfigs = ['isContentSidebar' => true, 'bodyCustomClass' => 'email-application'];

      $email = decodeId($email);
      $userRequest = $this->userRequestService->find($email);
      $userRequest['requests'] = json_decode($userRequest->requests);

      return view('pages.app-email-show', ['pageConfigs' => $pageConfigs, 'userRequest'=> $userRequest]);
  }

    // chat App
    public function chatApplication(){
        $pageConfigs = ['isContentSidebar' => true, 'bodyCustomClass' => 'chat-application'];

        $clients = User::where('id','!=',auth()->user()->id)->get();

        return view('pages.app-chat', ['pageConfigs' => $pageConfigs, 'clients' => $clients]);
    }

    // chat App show
    public function chatApplicationShow($user){
      $pageConfigs = ['isContentSidebar' => true, 'bodyCustomClass' => 'chat-application'];

      $auth_user = Auth::user()->id;

      // check if user and auth already have a message if not create
      if(Message::where(['sender_id'=> $auth_user, 'receiver_id'=> $user])->first()){
          // return response("found");
          $message_info = Message::where(['sender_id'=> $auth_user, 'receiver_id'=> $user])->first();
      }else if(Message::where(['sender_id'=> $user, 'receiver_id'=> $auth_user])->first()){
        // return response("found1");
        $message_info = Message::where(['sender_id'=> $user, 'receiver_id'=> $auth_user])->first();
      }
      else {
        // return response("not found");
        $message_info = Message::create(
          [
            'sender_id' => auth()->user()->id,
            'receiver_id' => $user
          ]
        );
      }
      $clients = User::where('id','!=',auth()->user()->id)->get();
      $user = User::where('id', $user)->first();

      return view('pages.app-chat-show', ['pageConfigs' => $pageConfigs, 'clients' => $clients, 'user' => $user, 'message_info' => $message_info ]);
    }

    // Todo App
    public function todoApplication(){
        $pageConfigs = ['isContentSidebar' => true, 'bodyCustomClass' => 'todo-application'];
        return view('pages.app-todo', ['pageConfigs' => $pageConfigs]);
    }
    // calendar App
    public function calendarApplication(){
        $pageConfigs = ['bodyCustomClass' => 'calendar-application'];
        return view('pages.app-calendar', ['pageConfigs' => $pageConfigs]);
    }
    // calendar App
    public function kanbanApplication(){
      $pageConfigs = ['isMenuCollapsed' => true];
        return view('pages.app-kanban',['pageConfigs'=>$pageConfigs]);
    }
     // invoice App
     public function invoiceListApplication(){
       
      return view('pages.app-invoice-list');
  }
   // invoice App
   public function invoiceApplication(){
    return view('pages.app-invoice');
  }
   // invoice edit App
   public function invoiceEditApplication(){
    return view('pages.app-invoice-edit');
  }
  // invoice add App
  public function invoiceAddApplication(){
    return view('pages.app-invoice-add');
  }
  // invoice add App
  public function fileManagerApplication(){
    $pageConfigs = ['isContentSidebar' => true, 'bodyCustomClass' => 'file-manager-application'];
    return view('pages.app-file-manager',['pageConfigs' => $pageConfigs]);
  }
  // Send email 
  public function sendEmail(Request $request)
  {
    $email = Email::create([
        'from' => Auth::user()->id,
        'to' => $request->to,
        'subject' => $request->subject,
        'message' => $request->message,
      ]);

    retry(5, function() use ($email){
      Mail::to($email->to)->send(new EmailNotification($email));
    }, 100);

    return response("success");
  }

  /**
   * Change Request Status 
   */
  public function changeRequestStatus(Request $request, $id)
  {
      $data = [
        "status" => $request->get('status')
    ];

    $userRequest = $this->userRequestService->update($id, $data);

    return redirect()->back();
  }
}
