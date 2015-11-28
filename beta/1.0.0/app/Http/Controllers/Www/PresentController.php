<?php

    namespace App\Http\Controllers\Www;

    use App\Classe;
    use App\Cour;
    use App\Occurrence;
    use App\Present;
    use Illuminate\Http\Request;

    use App\Http\Requests;
    use App\Http\Controllers\Controller;
    use Illuminate\Support\Facades\Auth;

    class PresentController extends Controller
    {

        /**
         * PresentController constructor.
         */
        public function __construct()
        {
            $this->middleware('auth');
        }

        /**
         * Display a listing of the resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function index()
        {
            $occurrences = \Auth::user()->occurrences;

            return view('occurrences.index', compact('occurrences'));
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
         * @param  \Illuminate\Http\Request $request
         *
         * @return \Illuminate\Http\Response
         */
        public function store(Request $request)
        {
            //
        }

        /**
         * Display the specified resource.
         *
         * @param  int $id
         *
         * @return \Illuminate\Http\Response
         */
        public function show($id)
        {
            //
        }

        /**
         * Show the form for editing the specified resource.
         *
         * @param  int $id
         *
         * @return \Illuminate\Http\Response
         */
        public function edit($id)
        {
            //
        }

        /**
         * Update the specified resource in storage.
         *
         * @param  \Illuminate\Http\Request $request
         * @param  int                      $id
         *
         * @return \Illuminate\Http\Response
         */
        public function update(Request $request, $id)
        {
            //
        }

        /**
         * Remove the specified resource from storage.
         *
         * @param  int $id
         *
         * @return \Illuminate\Http\Response
         */
        public function destroy($id)
        {
            //
        }

        public function getAllStudentfromOneOccurrence($id)
        {
            $occurrence = Occurrence::findOrfail($id);
            $cours_id = $occurrence->cour_id;
            $cour = Cour::findOrFail($cours_id);
            $classe_id = Occurrence::findOrfail($id)->classe_id;
            $students = Classe::findOrFail($classe_id)->students;

            return view('occurrences.occurrence', compact('cour', 'students', 'occurrence'));
        }

        public function storeOneStudentAbsent(Requests\StoreOneStudentAbsentRequest $request)
        {
            Present::create($request->all());
            \Flash::success('L’élève à été mis absent');

            return \Redirect::back();
        }

    }