<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\FacilityGalleriesRequest;
use App\Models\facility;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use illuminate\Support\Str;

use App\Http\Requests\Admin\facilityRequest;
use App\Models\FacilityGallery;
use Yajra\DataTables\Facades\DataTables;

class FacilityGalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {        

         if (request()->ajax()) {
            $query = FacilityGallery::with(['facility']);

            return Datatables::of($query)
                ->addColumn('action', function ($item) {
                    return '
                    <div class="btn-group">
                            <div class="dropdown">
                                <button class="btn btn-primary dropdown-toggle mr-1 mb-1" 
                                    type="button" id="action' .  $item->id . '"
                                        data-toggle="dropdown" 
                                        aria-haspopup="true"
                                        aria-expanded="false">
                                        Aksi
                                </button>
                                <div class="dropdown-menu" aria-labelledby="action' .  $item->id . '">
                                    <a class="dropdown-item" href="' . route('facility.edit', $item->id) . '">
                                        Sunting
                                    </a>
                                    <form action="' . route('facility.destroy', $item->id) . '" method="POST">
                                        ' . method_field('delete') . csrf_field() . '
                                        <button type="submit" class="dropdown-item text-danger">
                                            Hapus
                                        </button>
                                    </form>
                                </div>
                            </div>
                    </div>';
                })
                 ->editColumn('photos', function ($item) {
                    return $item->photos ? '<img src="' . Storage::url($item->photos) . '" style="max-height: 40px;"/>' : '';
                 })
                ->rawColumns(['action','photos'])
                ->make();
        }

        return view('pages.admin.facility-gallery.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {    
            $facilities = facility::all();
            
            return view('pages.admin.facility-gallery.create',[                
                'facilities' => $facilities
            ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FacilityGalleriesRequest $request)
    {
        $data = $request->all();        

        $data['photos'] = $request->file('photos')->store('assets/facility', 'public');

        FacilityGallery::create($data);

        return redirect()->route('facility.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(FacilityGalleriesRequest $request, $id)
    {
        // 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = facility::findOrFail($id);

        $item->delete();

        return redirect()->route('facility.index');
    }
}
