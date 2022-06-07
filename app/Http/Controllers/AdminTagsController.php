<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminTagsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $path = storage_path() . "/json/tags_list.json";

        $json = json_decode(file_get_contents($path), true);

        return view('admin.crud.tags.index', [
            "title" => 'List Tags',
            "tag" => $json
        ]);
    }

    public function create()
    {

        return view('admin.crud.tags.create', [
            "title" => 'Add Tags'

        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $path = storage_path() . "/json/tags_list.json";

        $json = json_decode(file_get_contents($path), true);

        if (isset($_POST["add"])) {
            unset($_POST["add"]);
            $json = array_values($json);
            array_push($json, $_POST);
            file_put_contents($path, json_encode($json));
        }

        return redirect('/admin/listtags')->with('success', 'New Tags added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
    }


    public function edit($id)
    {
        $path = storage_path() . "/json/tags_list.json";

        $json = json_decode(file_get_contents($path), true);

        return view('admin.crud.tags.edit', [
            "title" => "Edit Tags",
            "tag" => $json[$id],
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
    public function update($id)
    {
        $path = storage_path() . "/json/tags_list.json";

        $json = json_decode(file_get_contents($path), true);

        $index = 0;
        foreach ($json as $data) {
            if ($index == $id) {
                unset($_POST["add"]);
                $json[$index] = array_replace($data, $_POST);
            }
            $index++;
        }

        file_put_contents($path, json_encode($json));
        return redirect('/admin/listtags')->with('success', 'Tags Succesfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $path = storage_path() . "/json/tags_list.json";

        $json = json_decode(file_get_contents($path), true);

        $index = 0;
        foreach ($json as $data) {
            if ($index == $id) {
                unset($json[$index]);
            }
            $index++;
        }

        file_put_contents($path, json_encode($json));
        return redirect('/admin/listtags')->with('success', 'Tags Succesfully Deleted');
    }
}
