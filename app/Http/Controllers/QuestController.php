<?php

namespace App\Http\Controllers;

//use Illuminate\Routing\Controller as BaseController;

use App\Models\Author;
use Illuminate\Http\Request;
use App\Models\Quest;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;
class QuestController extends Controller
{

    public function list()
    {
        return Quest::query()
                ->limit(30)
                ->get();
 
    }

    public function info($id)
    {
    $quest = Quest::query()
            ->join('Authors', 'Quests.id_at', '=', 'Authors.id')
            ->where(['Quests.id'=> $id])
            ->first();

    if ($quest === null) {
        throw new NotFoundHttpException('вопрос не найден');
    }
        return $quest;       
    }

    public function add(Request $request)
    {
        $name = $request->get('name');
        $desc = $request->get('desc');
        $name_at = $request->get('name_at');
        if ($name === null) {
            throw new BadRequestHttpException('в имени пусто');
        }
        if ($desc === null) {
            throw new BadRequestHttpException('описание пустое');
        }
        if ($name_at === null) {
            throw new BadRequestHttpException('имя автора не указано');
        }
        if(Author::query()->where(['name'=> $name_at])->first() === null)
        {
            $author = new Author();
            $author->name = $name_at;
            $author->save();
        }
        $id_at = Author::query()->where(['name'=> $name_at])->first(['id']);
        $quest = new Quest();
        $quest->name = $name;
        $quest->desc = $desc;
        $quest->id_at = $id_at->id;
        if ($quest->save())
        {
            return "successfully";
        }
        else
        {
            return "failed";
        }        

    }
}
