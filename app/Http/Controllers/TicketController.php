<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;
class TicketController extends Controller
{
    public function index()
    {
        $ticket = Ticket::get();
        return view('index', compact('ticket'));
    }
}
