<?php

namespace App\Http\Controllers\Backend\Roles;
use App\Models\User;
use App\Http\Controllers\Controller;
// use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesController extends Controller
{
    public $user;


    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            $this->user = Auth::guard('admin')->user();
            return $next($request);
        });
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (is_null($this->user) || !$this->user->can('role.view')) {
            abort(403, 'Sorry !! You are Unauthorized to view any role !');
        }

        $roles = Role::all();
        return view('backend.role&permission.index', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (is_null($this->user) || !$this->user->can('role.create')) {
            abort(403, 'Sorry !! You are Unauthorized to create any role !');
        }

        $all_permissions = Permission::all();
        $permission_groups = User::getpermissionGroups();
        // dd($permission_groups);
        return view('backend.role&permission.create', compact('all_permissions', 'permission_groups'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (is_null($this->user) || !$this->user->can('role.create')) {
            abort(403, 'Sorry !! You are Unauthorized to create any role !');
        }

        $request->validate([
            'name' => 'required|max:100|unique:roles'
        ], [
            'name.required' => 'please give a role name'
        ]);

        $role = Role::create(['name' => $request->name, 'guard_name' => 'admin']);

        $permissions = $request->input('permissions');
        if (!empty($permissions)) {
            $role->syncPermissions($permissions);
        }
        return redirect()->route('roles.index')->with('success', 'successfully data added');
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
        if (is_null($this->user) || !$this->user->can('role.edit')) {
            abort(403, 'Sorry !! You are Unauthorized to edit any role !');
        }

        $role = Role::findById($id, 'admin');
        $all_permissions = Permission::all();
        $permission_groups = User::getpermissionGroups();
        // dd($permission_groups);
        return view('backend.role&permission.edit', compact('role', 'all_permissions', 'permission_groups'));




    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if (is_null($this->user) || !$this->user->can('role.edit')) {
            abort(403, 'Sorry !! You are Unauthorized to edit any role !');
        }

        $request->validate([
            'name' => 'required|max:100|unique:roles,name,' . $id
        ], [
            'name.required' => 'please give a role name'
        ]);

        // $role = Role::create(['name' => $request->name]);
        $role = Role::findById($id,'admin');
        $permissions = $request->input('permissions');

        if (!empty($permissions)) {
            $role->name = $request->name;
            $role->save();
            $role->syncPermissions($permissions);
        }
        session()->flash('success', 'Role has been Updated !!');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (is_null($this->user) || !$this->user->can('role.delete')) {
            abort(403, 'Sorry !! You are Unauthorized to delete any role !');
        }

        $role = Role::findById($id,'admin');
        if (!is_null($role)) {
            $role->delete();
        }
        session()->flash('success', 'Role has been deleted !!');
        return back();
    }
}
