<?php

namespace App\Http\Controllers;

use App\Models\Category\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $Categories = Category::without("images", 'addedBy')
            ->select("id")
            ->ListsTranslations("name")
            ->pluck('name', 'id')->toArray();


        return view('dashboard.Categories.index', compact('Categories'));
    }

    public function create()
    {

        return view('dashboard.Categories.create');
    }

    // public function store(DepartmentRequest $request, Department $department)
    // {
    //     if (!request()->ajax()) {
    //         $department->fill($request->validated() + ['added_by_id' => auth()->id()])->save();
    //         return redirect()->back()->withSuccess(__('dashboard.general.success_add'));
    //     }
    // }

    // public function show(Request $request, $id)
    // {
    //     $department = Department::withTrashed()->findOrFail($id);
    //     $sortingColumns = [
    //         'id',
    //         'employee',
    //         'main_program',
    //         'created_at',
    //         'action_type',
    //         'reason'
    //     ];
    //     if (isset($request->order[0]['column'])) {
    //         $request['sort'] = ['column' => $sortingColumns[$request->order[0]['column']], 'dir' => $request->order[0]['dir']];
    //     }

    //     $activitiesQuery  = $department->activity()
    //         ->sortBy($request);
    //     if ($request->ajax()) {
    //         $activityCount = $activitiesQuery->count();
    //         $activities = $activitiesQuery->skip($request->start)->take($request->length == -1 ? $activityCount : $request->length)->get();

    //         return ActivityLogCollection::make($activities)
    //             ->additional(['total_count' => $activityCount]);
    //     }

    //     return view('dashboard.department.show', compact('department'));
    // }

    // public function edit($id)
    // {
    //     $previousUrl = url()->previous();
    //     (strpos($previousUrl, 'department')) ? session(['perviousPage' => 'department']) : session(['perviousPage' => 'home']);
    //     $department = Department::withTrashed()->findOrFail($id);
    //     $departments = Department::with('parent.translations')->ListsTranslations('name')->where(['is_active' => 1])->where('departments.id', '!=', $id)->pluck('name', 'id')->toArray();

    //     $departments = array_merge([null => trans('dashboard.department.without_parent')], $departments);

    //     $locales = config('translatable.locales');
    //     return view('dashboard.department.edit', compact('departments', 'department', 'locales', 'previousUrl'));
    // }


    // public function update(DepartmentRequest $request,  $department)
    // {

    //     if (!request()->ajax()) {
    //         $dep = Department::withTrashed()->findOrFail($department);
    //         $dep->fill($request->validated() + ['updated_at' => now()])->save();
    //         return redirect()->route('dashboard.department.index')->withSuccess(__('dashboard.general.success_update'));
    //     }
    // }
    // public function archive(Request $request)
    // {
    //     $sortingColumns = [
    //         'id',
    //         'name',
    //         'parent',
    //         'deleted_at',
    //         'is_active'
    //     ];

    //     if (isset($request->order[0]['column'])) {
    //         $request['sort'] = ['column' => $sortingColumns[$request->order[0]['column']], 'dir' => $request->order[0]['dir']];
    //     }

    //     $departmentsQuery = Department::onlyTrashed()
    //         ->search($request)
    //         ->customDateFromTo($request)
    //         ->customDateFromTo($request, 'deleted_at', 'deleted_from', 'deleted_to')
    //         ->with('parent.translations')
    //         ->ListsTranslations('name')
    //         ->addSelect('departments.deleted_at', 'departments.parent_id', 'departments.is_active')
    //         ->orderBy('deleted_at', 'desc')->sortBy($request);

    //     if ($request->ajax()) {
    //         $departmentCount = $departmentsQuery->count();
    //         $departments = $departmentsQuery->skip($request->start)
    //             ->take(($request->length == -1) ? $departmentCount : $request->length)
    //             ->get();

    //         return DepartmentCollection::make($departments)
    //             ->additional(['total_count' => $departmentCount]);
    //     }

    //     $parentDepartments = Department::has("children")
    //         ->orWhere(function ($q) {
    //             $q->doesntHave('children')
    //                 ->WhereNull('parent_id');
    //         })
    //         // ->without("images", 'addedBy')
    //         ->select("id")
    //         ->ListsTranslations("name")
    //         ->pluck('name', 'id')->toArray();

    //     return view('dashboard.archive.department.index', compact('parentDepartments'));
    // }

    // public function destroy(ReasonRequest $request, Department $department)
    // {
    //     if ($request->ajax()) {
    //         $department->delete();
    //         return response()->json([
    //             'message' => __('dashboard.general.success_archive')
    //         ]);
    //     }
    // }


    // public function restore(ReasonRequest $request, $id)
    // {
    //     if ($request->ajax()) {
    //         $department = Department::onlyTrashed()->findOrFail($id);
    //         $department->restore();
    //         return response()->json([
    //             'message' => __('dashboard.general.success_restore')
    //         ]);
    //     }
    // }

    // public function forceDelete(ReasonRequest $request, $id)
    // {
    //     if ($request->ajax()) {

    //         $department = Department::onlyTrashed()->findOrFail($id);
    //         $department->forceDelete();
    //         return response()->json([
    //             'message' => __('dashboard.general.success_delete')
    //         ]);
    //     }
    // }
}
