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
        $answer =  Answer::query()
                    ->where(['id'=> $id])
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
        $id_at = Author::query()->where(['name'=> $name_at])->first(['id']);
        $answer = new Answer();
        $answer->id_q = $id_q;
        $answer->text = $text;
        $answer->id_at = $id_at;
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
