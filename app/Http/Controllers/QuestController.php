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
        $arr[0][0]="quest 1";
        $arr[0][1]="text descritpion about quest 1 ";
        $arr[1][0]="quest 2";
        $arr[1][1]="text descritpion about quest 2 ";
        $arr[2][0]="quest 3";
        $arr[2][1]="text descritpion about quest 3 ";

        //return $arr; 
        //4 lab        
        
        return Quest::query()
                ->limit(30)
                ->get();
 
    }

    public function info($id)
    {/*
        $product = Product::query()
            ->where(['id' => $id])
            ->first();

        if ($product === null) {
            throw new NotFoundHttpException('Товар не найден');
        }
*/
    $arr[0][0]="quest 1";
    $arr[0][1]="text descritpion about quest 1 ";
    $arr[1][0]="quest 2";
    $arr[1][1]="text descritpion about quest 2 ";
    $arr[2][0]="quest 3";
    $arr[2][1]="text descritpion about quest 3 ";

/*
    if ($id > 2) {
        throw new NotFoundHttpException('вопрос не найден');
    }
    
    return $arr[$id];
*/
    //4 lab
    $quest = Quest::query()
            ->where(['id'=> $id])
            ->first();

    if ($quest === null) {
        throw new NotFoundHttpException('вопрос не найден');
    }

        return $quest;
        //return [$arr[$id]];
        /*return Quest::query()
                ->whhere(['id'=> $id])
                ->first(); */
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

        if ($id_at === null)
        {
            return "search author failed";
        }
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
