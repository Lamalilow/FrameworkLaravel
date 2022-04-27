<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function lessonOne() {
        return 'Моя первая программа';
    }
    public function lessonTow(Request $request) {
        $data = [ ];
        if($request->has('text'))
            $data['text'] = $request->input('text');
        $data['token'] = $request->input('token', 'none-token');
        return $data;
    }
    public function lessonTemplateOne($detach) {
        $detachment = 'Нет отряда';
        switch($detach) {
            case 1: $detachment = 'Отряд 287'; break;
            case 2: $detachment = 'Отряд 54'; break;
            case 3: $detachment = 'Отряд 925'; break;
            case 4: $detachment = 'Отряд 9'; break;
            default: $detachment = '-';
        }
        $user = [];
        $user[] = 'Иванов Иван Иванович';
        $user[] = 'Петров Аркадий Иванович';
        $user[] = 'Люлькин Акакий Романович';
        return view('template', compact('detachment', 'user'));
    }

    public function sectionOneTask1(){
        return "Я люблю учится в ЧРТ";
    }
    public function sectionOneTask2(Request $request){
        if($request->has('name'))
        {
            $name = $request->name;
            return "Меня зовут ".$name;
        }
        else{
            return "Укажите параметр name в запросе";
        }

    }
    public function sectionOneTask3(Request $request){
        if($request->has('name'))
            $name = $request->name;
        if($request->has('food'))
            $food = $request->food;
        return "Меня зовут ".$name . " и я люблю есть " . $food;
    }
    public function sectionOneTask4(){
        $num1 = 1;
        $num2 = 999;
        return "Сумма ". $num1 ." и " . $num2 . " равна ".$num1+$num2;
    }
    public function sectionOneTask5(Request $request){
        if($request->has('num1'))
            $num1 = $request->num1;
        if($request->has('num2'))
            $num2 = $request->num2;
        return "Сумма ". $num1 ." и " . $num2 . " равна ".$num1+$num2;
    }
    public function sectionOneTask6(Request $request){
        if($request->has('cipher'))
            if($request->cipher == 'keyOneTest')
                return "Я взломал шифр!";
            else
                return "У тебя нет доступа";
    }

    public function sectionTwoTask1(){
        return view('sec2t1');
    }
    public function sectionTwoTask2(){
        $organization = "ШПИЦ";
        return view('sec2t2', compact('organization'));
    }
    public function sectionTwoTask3(){
        $text = "Некоторые бесконечности больше других бесконечностей.";
        $name ='Джон Грин "Виноваты звезды"';
        return view('sec2t3', compact('text', 'name'));
    }
    public function sectionTwoTask4(){
        $li = ['dog', 'cat', 'monke'];
        return view('sec2t4', compact('li'));
    }
    public function sectionTwoTask5(){
        $div=['dog', 'cat', 'monkey', 'cat', 'monkey', 'cat', 'monkey'];
        return view('sec2t5', compact('div'));
    }

    public function sectionTwoTask6(){
        $span=[1,2,2,4,6,4,3,6,84,3475466,65666,63,4346,34,6,34,424367673];
        return view('sec2t6', compact('span'));
    }
}
