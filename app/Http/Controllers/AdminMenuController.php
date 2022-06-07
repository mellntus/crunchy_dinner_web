<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class AdminMenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $path = storage_path() . "/json/menu_list.json";

        $json = json_decode(file_get_contents($path), true);

        // dd($json);
        return view('admin.crud.menu.index', [
            "title" => 'List Menu',
            "menu" => $json
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $path = storage_path() . "/json/tags_list.json";
        $tagjson = json_decode(file_get_contents($path), true);

        return view('admin.crud.menu.create', [
            "title" => 'Add Menu',
            "tag" => $tagjson

        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // Menu JSON
        $menupath = storage_path() . "/json/menu_list.json";
        $menujson = json_decode(file_get_contents($menupath), true);

        if ($request->hasFile('image')) {

            // RULE
            $this->validate(request(), [
                'image' => 'image|file|max:1024',
            ]);

            if (isset($_POST["add"])) {
                unset($_POST["add"]);

                $ext = $request->file('image')->extension();

                $filename = $request->file('image')->storeAs('menu/', 'menu' . $_POST['id'] . '.' . $ext);

                $_POST['picture'] = 'menu/menu' . $_POST["id"] . '.' . $ext;

                unset($_POST["image"]);

                $menujson = array_values($menujson);
                array_push($menujson, $_POST);
                file_put_contents($menupath, json_encode($menujson));
            }
        }

        return redirect('/admin/listmenu')->with('success', 'New Menu added');
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
        // Menu JSON
        $menupath = storage_path() . "/json/menu_list.json";
        $menujson = json_decode(file_get_contents($menupath), true);

        // Tags JSON
        $tagspath = storage_path() . "/json/tags_list.json";
        $tagsjson = json_decode(file_get_contents($tagspath), true);

        return view('admin.crud.menu.edit', [
            "title" => "Edit Menu",
            "menu" => $menujson[$id],
            "tag" => $tagsjson,
            "id" => $id
        ]);
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
        // Menu JSON
        $menupath = storage_path() . "/json/menu_list.json";
        $menujson = json_decode(file_get_contents($menupath), true);

        $index = 0;
        foreach ($menujson as $data) {
            if ($index == $id) {
                if ($request->hasFile('image')) {

                    // RULE
                    $this->validate(request(), [
                        'image' => 'image|file|max:1024',
                    ]);

                    if (isset($_POST["add"])) {
                        unset($_POST["add"]);

                        $ext = $request->file('image')->extension();

                        $filename = $request->file('image')->storeAs('menu/', 'menu' . $_POST['id'] . '.' . $ext);

                        $_POST['picture'] = 'menu/menu' . $_POST["id"] . '.' . $ext;

                        unset($_POST["image"]);

                        if (File::exists('storage/public' . $menujson[$index]['picture'])) {
                            File::delete('storage/public' . $menujson[$index]['picture']);
                        }
                    }
                } else {
                    if (isset($_POST["add"])) {
                        unset($_POST["add"]);

                        $_POST['picture'] = $menujson[$index]['picture'];

                        unset($_POST["image"]);
                    }
                }
                $menujson[$index] = array_replace($data, $_POST);
            }
            $index++;
        }

        // dd($request);

        file_put_contents($menupath, json_encode($menujson));
        return redirect('/admin/listmenu')->with('success', 'Menu Succesfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Menu JSON
        $menupath = storage_path() . "/json/menu_list.json";
        $menujson = json_decode(file_get_contents($menupath), true);

        $index = 0;
        foreach ($menujson as $data) {
            if ($index == $id) {
                if ($menujson[$index]['picture'] != null) {
                    if (File::exists('storage/' . $menujson[$index]['picture'])) {
                        File::delete('storage/' . $menujson[$index]['picture']);
                    }
                }
                unset($menujson[$index]);
            }
            $index++;
        }

        file_put_contents($menupath, json_encode($menujson));
        return redirect('/admin/listmenu')->with('success', 'Menu Succesfully Deleted');
    }
}
