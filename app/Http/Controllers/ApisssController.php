gv5g  <?php

namespace App\Http\Controllers;

use App\Apisss;
use Illuminate\Http\Request;
use App\User;
use App\Http\Resources\UserapiResource as Usersource;
class ApisssController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user= User::all();
        return Usersource::collection($user);
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
    public function store(Request $request)
    {
        $user = new User([
         'name'=> $request->name,
         'email'=>$request->email,
         'password' =>\Hash::make($request->password),
        ]);
        if($user->save()){
            return response()->json([
            'status'=>'200',
            'message'=>'successfully added to the Database'
            ]);
        }else{
            return response()->json([
                'status'=>'500',
                'message'=>'operation failed'

            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Apisss  $apisss
     * @return \Illuminate\Http\Response
     */
    public function show($apisss)
    {
        $user=User::whereId($apisss)->first();
        // echo $apisss;
        if(!$user){
            return response()->json([
             'status'=>'404',
             'message' => 'This user is not found in the database'
            ]);
        }
        return response()->json([
            'status'=>'200',
             'message' => 'Successful',
             'result' => [
                 'Id'=>$user->id,
                 'name'=>$user->name,
                 'email'=>$user->email
             ]
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Apisss  $apisss
     * @return \Illuminate\Http\Response
     */
    public function edit(Apisss $apisss)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Apisss  $apisss
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Apisss $apisss)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Apisss  $apisss
     * @return \Illuminate\Http\Response
     */
    public function destroy(Apisss $apisss)
    {
        //
    }
}
