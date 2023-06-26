<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Data;
use Carbon\Carbon;
use Exception;

class DashboardController extends Controller
{
    public function index(Request $request)
    {

        if ($request->has('search')) {
            $data = Data::where('summary', 'LIKE', '%' . $request->search . '%')
                ->orWhere('name_project', 'LIKE', '%' . $request->search . '%')
                ->orWhere('assignee', 'LIKE', '%' . $request->search . '%')
                ->orWhere('reporter', 'LIKE', '%' . $request->search . '%')
                ->orWhere('priority', 'LIKE', '%' . $request->search . '%')
                ->orWhere('status', 'LIKE', '%' . $request->search . '%')
                ->orWhere('created', 'LIKE', '%' . $request->search . '%')
                ->orWhere('squad', 'LIKE', '%' . $request->search . '%')->paginate(10)->withQueryString();
            // if($data->where('summary', 'LIKE', '%' .$request->search.'%')
            // ->orWhere('name_project', 'LIKE', '%' .$request->search.'%')
            // ->orWhere('assignee', 'LIKE', '%' .$request->search.'%')
            // ->orWhere('reporter', 'LIKE', '%' .$request->search.'%')
            // ->orWhere('priority', 'LIKE', '%' .$request->search.'%')
            // ->orWhere('status', 'LIKE', '%' .$request->search.'%')
            // ->orWhere('created', 'LIKE', '%' .$request->search.'%')
            // ->orWhere('squad', 'LIKE', '%' .$request->search.'%')){
            //     return redirect()->route('dashboard')->with('zeroData,', '0 Data Found');
            // }
            // $this->alert=$data->count();
            // if($alert==0){
            //     return redirect()->route('dashboard')->with('danger', '0 Data Found');
            //     // echo "0 Data Found";
            // }else{
            //     return redirect()->route('dashboard')->with('danger', '0 Data Found');;
            // }
            $projects = Data::count();
            $done = Data::where('status', '=', 'Done')->count();
            $squad = Data::whereNot('squad', 'LIKE', '%' . ';' . '%')->distinct()->get(['squad'])->count();
            $january = Data::where('created', 'LIKE', '%' . '-01-' . '%')->count();
            $february = Data::where('created', 'LIKE', '%' . '-02-' . '%')->count();
            $march = Data::where('created', 'LIKE', '%' . '-03-' . '%')->count();
            $april = Data::where('created', 'LIKE', '%' . '-04-' . '%')->count();
            $may = Data::where('created', 'LIKE', '%' . '-05-' . '%')->count();
            $june = Data::where('created', 'LIKE', '%' . '-06-' . '%')->count();
            $july = Data::where('created', 'LIKE', '%' . '-07-' . '%')->count();
            $august = Data::where('created', 'LIKE', '%' . '-08-' . '%')->count();
            $september = Data::where('created', 'LIKE', '%' . '-09-' . '%')->count();
            $october = Data::where('created', 'LIKE', '%' . '-10-' . '%')->count();
            $november = Data::where('created', 'LIKE', '%' . '-11-' . '%')->count();
            $december = Data::where('created', 'LIKE', '%' . '-12-' . '%')->count();
            $screening = Data::where('status', '=', 'Screening')->count();
            $live = Data::where('status', '=', 'Live')->count();
            $development = Data::where('status', '=', 'Development')->count();
            $testing = Data::where('status', '=', 'Testing')->count();
            $deployment = Data::where('status', '=', 'Deployment')->count();
            $submission = Data::where('status', '=', 'Submission')->count();
            $donea = Data::where('status', '=', 'Done')->count();
            $verification = Data::where('status', '=', 'Verification')->count();
            $drop = Data::where('status', '=', 'Drop')->count();
            $onHold = Data::where('status', '=', 'On Hold')->count();
        } elseif ($request->has('searchlagi') && $request->has('searchtahun')) {
            $data = Data::paginate(10);
            $projects = Data::count();
            $done = Data::where('status', '=', 'Done')->count();
            $squad = Data::whereNot('squad', 'LIKE', '%' . ';' . '%')->distinct()->get(['squad'])->count();
            $january = Data::where('created', 'LIKE', '%' . '-01-' . '%')->where('squad', 'LIKE', '%' . $request->searchlagi . '%')->where('created', 'LIKE', '%' . $request->searchtahun . '%')->count();
            $february = Data::where('created', 'LIKE', '%' . '-02-' . '%')->where('squad', 'LIKE', '%' . $request->searchlagi . '%')->where('created', 'LIKE', '%' . $request->searchtahun . '%')->count();
            $march = Data::where('created', 'LIKE', '%' . '-03-' . '%')->where('squad', 'LIKE', '%' . $request->searchlagi . '%')->where('created', 'LIKE', '%' . $request->searchtahun . '%')->count();
            $april = Data::where('created', 'LIKE', '%' . '-04-' . '%')->where('squad', 'LIKE', '%' . $request->searchlagi . '%')->where('created', 'LIKE', '%' . $request->searchtahun . '%')->count();
            $may = Data::where('created', 'LIKE', '%' . '-05-' . '%')->where('squad', 'LIKE', '%' . $request->searchlagi . '%')->where('created', 'LIKE', '%' . $request->searchtahun . '%')->count();
            $june = Data::where('created', 'LIKE', '%' . '-06-' . '%')->where('squad', 'LIKE', '%' . $request->searchlagi . '%')->where('created', 'LIKE', '%' . $request->searchtahun . '%')->count();
            $july = Data::where('created', 'LIKE', '%' . '-07-' . '%')->where('squad', 'LIKE', '%' . $request->searchlagi . '%')->where('created', 'LIKE', '%' . $request->searchtahun . '%')->count();
            $august = Data::where('created', 'LIKE', '%' . '-08-' . '%')->where('squad', 'LIKE', '%' . $request->searchlagi . '%')->where('created', 'LIKE', '%' . $request->searchtahun . '%')->count();
            $september = Data::where('created', 'LIKE', '%' . '-09-' . '%')->where('squad', 'LIKE', '%' . $request->searchlagi . '%')->where('created', 'LIKE', '%' . $request->searchtahun . '%')->count();
            $october = Data::where('created', 'LIKE', '%' . '-10-' . '%')->where('squad', 'LIKE', '%' . $request->searchlagi . '%')->where('created', 'LIKE', '%' . $request->searchtahun . '%')->count();
            $november = Data::where('created', 'LIKE', '%' . '-11-' . '%')->where('squad', 'LIKE', '%' . $request->searchlagi . '%')->where('created', 'LIKE', '%' . $request->searchtahun . '%')->count();
            $december = Data::where('created', 'LIKE', '%' . '-12-' . '%')->where('squad', 'LIKE', '%' . $request->searchlagi . '%')->where('created', 'LIKE', '%' . $request->searchtahun . '%')->count();
            $screening = Data::where('status', '=', 'Screening')->count();
            $live = Data::where('status', '=', 'Live')->count();
            $development = Data::where('status', '=', 'Development')->count();
            $testing = Data::where('status', '=', 'Testing')->count();
            $deployment = Data::where('status', '=', 'Deployment')->count();
            $submission = Data::where('status', '=', 'Submission')->count();
            $donea = Data::where('status', '=', 'Done')->count();
            $verification = Data::where('status', '=', 'Verification')->count();
            $drop = Data::where('status', '=', 'Drop')->count();
            $onHold = Data::where('status', '=', 'On Hold')->count();
        } else {
            $data = Data::paginate(10);
            $projects = Data::count();
            $done = Data::where('status', '=', 'Done')->count();
            $squad = Data::whereNot('squad', 'LIKE', '%' . ';' . '%')->distinct()->get(['squad'])->count();
            $january = Data::where('created', 'LIKE', '%' . '-01-' . '%')->count();
            $february = Data::where('created', 'LIKE', '%' . '-02-' . '%')->count();
            $march = Data::where('created', 'LIKE', '%' . '-03-' . '%')->count();
            $april = Data::where('created', 'LIKE', '%' . '-04-' . '%')->count();
            $may = Data::where('created', 'LIKE', '%' . '-05-' . '%')->count();
            $june = Data::where('created', 'LIKE', '%' . '-06-' . '%')->count();
            $july = Data::where('created', 'LIKE', '%' . '-07-' . '%')->count();
            $august = Data::where('created', 'LIKE', '%' . '-08-' . '%')->count();
            $september = Data::where('created', 'LIKE', '%' . '-09-' . '%')->count();
            $october = Data::where('created', 'LIKE', '%' . '-10-' . '%')->count();
            $november = Data::where('created', 'LIKE', '%' . '-11-' . '%')->count();
            $december = Data::where('created', 'LIKE', '%' . '-12-' . '%')->count();
            $screening = Data::where('status', '=', 'Screening')->count();
            $live = Data::where('status', '=', 'Live')->count();
            $development = Data::where('status', '=', 'Development')->count();
            $testing = Data::where('status', '=', 'Testing')->count();
            $deployment = Data::where('status', '=', 'Deployment')->count();
            $submission = Data::where('status', '=', 'Submission')->count();
            $donea = Data::where('status', '=', 'Done')->count();
            $verification = Data::where('status', '=', 'Verification')->count();
            $drop = Data::where('status', '=', 'Drop')->count();
            $onHold = Data::where('status', '=', 'On Hold')->count();
        }
        $alert = $data->count();
        // if(empty($alert)){
        return view('pages.admin.dashboard', compact('data', 'projects', 'done', 'squad', 'january', 'february', 'march', 'april', 'may', 'june', 'july', 'august', 'september', 'october', 'november', 'december', 'screening', 'live', 'development', 'testing', 'deployment', 'submission', 'donea', 'verification', 'drop', 'onHold'))->with('danger', '0 Data Found');
        // return redirect()->view('pages.admin.dashboard', compact('data','projects', 'done', 'squad', 'january', 'february', 'march', 'april', 'may', 'june', 'july', 'august', 'september', 'october', 'november', 'december', 'screening', 'live', 'development', 'testing', 'deployment', 'submission', 'donea', 'verification', 'drop', 'onHold'))->with(['message' => 'A message to display']);
        //     return redirect()->route('dashboard')->with('zeroData,', '0 Data Found');
        //     // echo "0 Data Found";
        // }elseif(!empty($alert)){
        // return view('pages.admin.dashboard', compact('data','projects', 'done', 'squad', 'january', 'february', 'march', 'april', 'may', 'june', 'july', 'august', 'september', 'october', 'november', 'december', 'screening', 'live', 'development', 'testing', 'deployment', 'submission', 'donea', 'verification', 'drop', 'onHold'))->with('danger', '0 Data Found');
        // return redirect()->view('pages.admin.dashboard', compact('data','projects', 'done', 'squad', 'january', 'february', 'march', 'april', 'may', 'june', 'july', 'august', 'september', 'october', 'november', 'december', 'screening', 'live', 'development', 'testing', 'deployment', 'submission', 'donea', 'verification', 'drop', 'onHold'))->with(['message' => 'A message to display']);
        //     return redirect()->route('dashboard')->with('zeroData,', '0 Data Found');;
        // }
        // $data = Data::paginate(10);
        // $projects= Data::count();
        // $done= Data::where('status', '=', 'Done')->count();
        // $squad= Data::distinct()->get(['squad'])->count();

        // return view('pages.admin.dashboard', compact('data','projects', 'done', 'squad', 'january', 'february', 'march', 'april', 'may', 'june', 'july', 'august', 'september', 'october', 'november', 'december', 'screening', 'live', 'development', 'testing', 'deployment', 'submission', 'donea', 'verification', 'drop', 'onHold'))->with('danger', '0 Data Found');

    }

    public function filterData(Request $request)
    {
        $query = Data::query();

        // Filter data berdasarkan squad
        if ($request->has('squad')) {
            $query->where('squad', $request->input('squad'));
        }

        // Filter data berdasarkan status
        if ($request->has('status')) {
            $query->where('status', $request->input('status'));
        }

        // Filter data berdasarkan bulan dan tahun
        if ($request->has('bulan') && $request->has('tahun')) {
            $bulan = $request->input('bulan');
            $tahun = $request->input('tahun');

            $query->whereMonth('created', $bulan)
                ->whereYear('created', $tahun);
        }

        // Eksekusi query dan ambil data yang difilter
        $data = $query->get();

        // Mengembalikan data dalam bentuk response JSON
        // return response()->json($data);
        return view('pages.admin.dashboard', compact('data'));
    }
    public function squad(Request $request)
    {
        if ($request->has('search')) {
            $data = Data::select('squad')->where('squad', 'LIKE', '%' . $request->search . '%')->whereNot('squad', 'LIKE', '%' . ';' . '%')->groupBy('squad')->paginate(10)->withQueryString();
            // $data=Data::where('squad', 'LIKE', '%' .$request->search.'%')->whereNot('squad', 'LIKE', '%' .';'.'%')->distinct()->paginate(10, ['squad']);
        } else {
            $data = Data::select('squad')->whereNot('squad', 'LIKE', '%' . ';' . '%')->groupBy('squad')->paginate(10)->withQueryString();
        }
        return view('pages.admin.squad', compact('data'));
        // return redirect()->route('squad', compact('data'));
    }

    public function squadDetail($squad)
    {
        $data = Data::where('squad', 'LIKE', '%' . $squad . '%')->paginate(10)->withQueryString();
        $total = Data::where('squad', 'LIKE', '%' . $squad . '%')->count();
        return view('pages.admin.squadDetail', compact('data', 'squad', 'total'));
    }

    public function priority()
    {
        $data = Data::distinct()->get(['priority']);
        return view('pages.admin.priority', compact('data'));
    }

    public function priorityDetail($priority, Request $request)
    {
        if ($request->has('search')) {
            $data = Data::where([['priority', '=', $priority], ['summary', 'LIKE', '%' . $request->search . '%']])
                ->orWhere([['priority', '=', $priority], ['name_project', 'LIKE', '%' . $request->search . '%']])
                ->orWhere([['priority', '=', $priority], ['assignee', 'LIKE', '%' . $request->search . '%']])
                ->orWhere([['priority', '=', $priority], ['reporter', 'LIKE', '%' . $request->search . '%']])
                ->orWhere([['priority', '=', $priority], ['priority', 'LIKE', '%' . $request->search . '%']])
                ->orWhere([['priority', '=', $priority], ['status', 'LIKE', '%' . $request->search . '%']])
                ->orWhere([['priority', '=', $priority], ['created', 'LIKE', '%' . $request->search . '%']])
                ->orWhere([['priority', '=', $priority], ['squad', 'LIKE', '%' . $request->search . '%']])->paginate(10)->withQueryString();
        } else {
            $data = Data::where('priority', '=', $priority)->paginate(10)->withQueryString();
        }
        return view('pages.admin.priorityDetail', compact('data', 'priority'));
    }

    public function status()
    {
        $data = Data::distinct()->get(['status']);
        return view('pages.admin.status', compact('data'));
    }

    public function statusDetail($status, Request $request)
    {
        if ($request->has('search')) {
            $data = Data::where('status', '=', $status)->where('squad', 'LIKE', '%' . $request->search . '%')->paginate(10)->withQueryString();
        } else {
            $data = Data::where('status', '=', $status)->paginate(10)->withQueryString();
        }
        return view('pages.admin.statusDetail', compact('data', 'status'));
    }

    // public function scoreCard()
// {
//     $projects= Data::count();
//     $done= Data::where('status', '=', 'Done')->count();
//     $squad= Data::distinct()->get(['status'])->count();

    //     return view('pages.admin.dashboard', compact('projects', 'done', 'squad'));
// }
}