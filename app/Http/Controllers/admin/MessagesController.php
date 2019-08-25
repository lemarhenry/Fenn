<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\contact;
use App\reply;
use App\Mail\Reply as r;
use Illuminate\Support\Facades\Mail;

class MessagesController extends Controller
{
    public function __construct()
    {
        $this->middleware("auth");
    }


    public function Messages()
    {
        return contact::orderBy("created_at", "desc")->get();
    }

    public function Mvpage()
    {
        return view('admin.message/index');
    }

    public function seen(contact $id)
    {
        $id->seen = 1;
        $id->save();
        return ['status' => 200];
    }

    public function messageSingle(contact $id)
    {
        return $id;
    }

    public function messageDelete(contact $id)
    {
        $reply = reply::where('message_id', $id->id)->get();
        foreach ($reply as $r) {
            $r->delete();
        }
        $id->delete();
        return ['status' => 200];
    }

    public function messageSearch(Request $request)
    {
        $search = htmlentities($request->search);
        $res = contact::where('email', 'LIKE', '%' . $search . '%')
            ->orwhere('name', 'LIKE', '%' . $search . '%')
            ->orwhere('subject', 'LIKE', '%' . $search . '%')
            ->orderBy('created_at', 'desc')->get();
        return $res;
    }

    public function messageReply(Request $request, contact $id)
    {
        $this->validate($request, [
            'subject' => 'required',
            'body' => 'required'
        ]);
        $reply = new reply;
        $reply->subject = htmlentities($request->subject);
        $reply->body = htmlentities($request->body);
        $reply->message_id = $id->id;
        // Mail::to($id->email)->send(new r($request->subject, $request->body));
        $reply->save();
        return ['status' => 200];
    }

    public function messageReplies($id)
    {
        return reply::where('message_id', $id)
            ->orderBy('created_at', 'desc')
            ->get();
    }

    public function replyDelete(reply $id)
    {
        $id->delete();
        return ['status' => 200];
    }
}
