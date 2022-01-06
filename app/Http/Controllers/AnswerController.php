<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Answer;
use App\Models\Author;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;
class AnswerController extends Controller
{

    public function list($id)
    {
        $arr[0][0][0]="author 1";
        $arr[0][0][1]="text answer on quest 1";
        $arr[0][1][0]="author 2";
        $arr[0][1][1]="text 2 answer on quest 1 abc";
        $arr[0][2][0]="author 3";
        $arr[0][2][1]="text 3 answer on quest 1 def";
        $arr[1][0][0]="author 1";
        $arr[1][0][1]="text answer on quest 2";
        $arr[1][1][0]="author 2";
        $arr[1][1][1]="text 2 answer on quest 2 abc";
        $arr[1][2][0]="author 3";
        $arr[1][2][1]="text 3 answer on quest 2 def";
        $arr[2][0][0]="author 1";
        $arr[2][0][1]="text answer on quest 3";
        $arr[2][1][0]="author 2";
        $arr[2][1][1]="text 2 answer on quest 3 abc";
        $arr[2][2][0]="author 3";
        $arr[2][2][1]="text 3 answer on quest 3 def";
/*
        if ($id > 2) {
            throw new NotFoundHttpException('вопрос не найден');
        }

        return $arr[$id];   */

        $answer =  Answer::query()
                    ->where(['id_qt'=> $id])
                    ->get();
        if ($answer === null) {
            throw new NotFoundHttpException('вопрос не найден');
        }
        return $answer;

    }   

    public function add(Request $request)
    {
        $id_q = $request->get('id_q');
        $text = $request->get('text');
        $name_at = $request->get('name_at');
        if ($id_q === null) {
            throw new BadRequestHttpException('не указан id вопроса');
        }
        if ($text === null) {
            throw new BadRequestHttpException('текст ответа пуст');
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
        $id_at = Author::query()->where(['name'=> $name_at])->first();
        $answer = new Answer();
        $answer->id_qt = $id_q;
        $answer->text = $text;
        $answer->id_at = $id_at->id;
        if ($answer->save())
        {
            return "successfully";
        }
        else
        {
            return "failed";
        } 
    }
}
