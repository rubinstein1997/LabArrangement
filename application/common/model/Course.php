<?php

namespace app\common\model;

use think\Db;
use think\Model;
use think\Session;

class Course extends Model
{
    protected $pk = 'course_id';

    protected $table = 'course';

    public function courseview($requirements)
    {
        $select_lab = $requirements['lab'];
//        (new Course())->courseview($requirements);
//        $course['0102']['week1'] = $this->where('laboratory_id', 201)->select();
//        dump($course['0102']['week1']);
//
        $coursesection = array("0102", "0304", "0506", "0708", "0910");
        $courseweek = array("week1", "week2", "week3", "week4", "week5", "week6", "week7");
        $courseall = array();
//        for($i = 0; $i < 5; $i++) {
//            for($j = 0 ; $j < 7; $j++)
//            $courseall[$coursesection[$i]][$courseweek[$j]] = $j;
//        }
//        halt($courseall);


        for ($i = 0; $i < 5; $i++) {
            for ($j = 0; $j < 7; $j++) {
                $coursetiny[0] = array("course" => "", "week" => "", "teacher_id" => "", "class" => "", "cut" => "");

                //从开始周到结束周循环遍历,符合条件的课程push进入$coursetiny
                for ($select_week = $requirements['weekstart']; $select_week <= $requirements['weekend']; $select_week++) {

                    if ($select_week % 2 == 0) {
                        $select_weekstate = "双";
                    } else {
                        $select_weekstate = "单";
                    }
                    $select_weekstateall = "全";

                    $day = $j + 1;
                    $course = $this->where("laboratory_id=$select_lab and time=$coursesection[$i] and day=$day")->order("day ASC")->select();
//                    dump($course['0102']['week1']['0']['course_id']);
                    for ($k = 0; $k < count($course); $k++) {
                        if (($select_weekstate != substr($course[$k]["week"], 0, 3)) && $select_weekstateall != substr($course[$k]["week"], 0, 3)) {
                            continue;

                        }
                        $pos = strpos($course[$k]["week"], "-");
                        $num1 = substr($course[$k]["week"], 3, "$pos" - 3);
                        $num3 = explode('-', $course[$k]["week"]);
                        $num2 = $num3[1];
                        if ($select_week < $num1 || $select_week > $num2) {
                            continue;
                        }
                        if ($coursetiny[0]['course'] == "") {
                            $teacher_id = $course[$k]['teacher_id'];

                            $course[$k]['teacher_id']=Db::table('teacher')->where("teacher_id = $teacher_id")->value('teacher_name');
                            $coursetiny[0] = $course[$k];

                        } else {
                            for($co = 0; $co < count($coursetiny); $co ++){
                                if($coursetiny[$co]["course_id"] == $course[$k]["course_id"]){
                                    break;

                                }
                                if($co == count($coursetiny)-1)
                                {
//                                    $course[$k]['cut'] = "----------------";
                                    $teacher_id = $course[$k]['teacher_id'];

                                    $course[$k]['teacher_id']=Db::table('teacher')->where("teacher_id = $teacher_id")->value('teacher_name');
//                                    halt($course[$k]['teacher']);
                                    array_push($coursetiny, $course[$k]);
                                }
                            }
                        }

                    }
                }
                $courseall[$coursesection[$i]][$courseweek[$j]] = $coursetiny;
                unset($coursetiny);

            }
        }
        return $courseall;
    }

    public function courseapply($applydata)
    {


        $class = $applydata['class'];
        $laboratory = $applydata['lab'];
        $course = $applydata['coursename'];
        $day = substr($applydata['week'],6,3);
        $time = $applydata['section'];

        switch($day) {
            case "一":
                $day = 1;
                break;
            case "二":
                $day = 2;
                break;
            case "三":
                $day = 3;
                break;
            case "四":
                $day = 4;
                break;
            case "五":
                $day = 5;
                break;
            case "六":
                $day = 6;
                break;
            case "日":
                $day = 7;
                break;
            default:
                return 3;
        }

        $weekstateall = "全";

        //数据库检索同实验室同星期同节

        $samecourse = $this->where("laboratory_id = $laboratory and day = $day and time = $time")->select();

        //检索是否有冲突的课时

        $weekfirst = $applydata['weekstatus'];
        $num1 = $applydata['weekstart'];
        $num2 = $applydata['weekend'];
        if ($weekfirst == "单" && $num1 % 2 == 0)
            $num1++;

        if ($weekfirst == "单" && $num2 % 2 == 0)
            $num2--;

        if ($weekfirst == "双" && $num1 % 1 == 1)
            $num1++;

        if ($weekfirst == "双" && $num2 % 2 == 1)
            $num2--;
        $week = $weekfirst . $num1 . "-" . $num2;
        $flag = 1;

        for ($i = 0; $i < count($samecourse); $i++) {
            if ($weekfirst != substr($samecourse[$i]['week'], 0, 3) && $weekfirst != $weekstateall)
                continue;
            $weekpos = strpos($samecourse[$i]['week'], "-");
            $weeknum1 = substr($samecourse[$i]['week'], 3, "$weekpos" - 3);
            $weeknum3 = explode('-', $samecourse[$i]['week']);
            $weeknum2 = $weeknum3[1];
            if (($num1 < $weeknum1 && $num2 < $weeknum1) || ($num1 > $weeknum2 && $num2 > $weeknum2))
                continue;
            else {
                $flag = 0;
            }
        }


        if ($flag == 1) {
            //生成将要添加进数据库的数据
            $course = array(
                "class" => $class,
                "week" => $week,
                "time" => $time,
                "day" => $day,
                "laboratory_id" => $laboratory,
                "course" => $course,
                "teacher_id" => session('user_id'),
                "state" => '0'
            );

            //写入数据库
            $result = $this->save($course);
        }


        return $flag;
    }


    public function mycourse($requirements)
    {
        $coursesection = array("0102", "0304", "0506", "0708", "0910");
        $courseweek = array("week1", "week2", "week3", "week4", "week5", "week6", "week7");
        $courseall = array();

        $teacher_id =  Session::get('user_id');

        for ($i = 0; $i < 5; $i++) {
            for ($j = 0; $j < 7; $j++) {
                $coursetiny[0] = array("course" => "", "week" => "", "teacher" => "", "class" => "", "cut" => "");

                //从开始周到结束周循环遍历,符合条件的课程push进入$coursetiny
                for ($select_week = $requirements['weekstart']; $select_week <= $requirements['weekend']; $select_week++) {

                    if ($select_week % 2 == 0) {
                        $select_weekstate = "双";
                    } else {
                        $select_weekstate = "单";
                    }
                    $select_weekstateall = "全";

                    $day = $j + 1;
                    $course = $this->where("time=$coursesection[$i] and day=$day and teacher_id=$teacher_id")->order("day ASC")->select();
//                    dump($course['0102']['week1']['0']['course_id']);
                    for ($k = 0; $k < count($course); $k++) {
                        if (($select_weekstate != substr($course[$k]["week"], 0, 3)) && $select_weekstateall != substr($course[$k]["week"], 0, 3)) {
                            continue;

                        }
                        $pos = strpos($course[$k]["week"], "-");
                        $num1 = substr($course[$k]["week"], 3, "$pos" - 3);
                        $num3 = explode('-', $course[$k]["week"]);
                        $num2 = $num3[1];
                        if ($select_week < $num1 || $select_week > $num2) {
                            continue;
                        }
                        if ($coursetiny[0]['course'] == "") {
                            $coursetiny[0] = $course[$k];

                        } else {
                            for($co = 0; $co < count($coursetiny); $co ++){
                                if($coursetiny[$co]["course_id"] == $course[$k]["course_id"]){
                                    break;

                                }
                                if($co == count($coursetiny)-1)
                                {
//                                    $course[$k]['cut'] = "----------------";
                                    array_push($coursetiny, $course[$k]);
                                }
                            }
                        }

                    }
                }
                $courseall[$coursesection[$i]][$courseweek[$j]] = $coursetiny;
                unset($coursetiny);

            }
        }
        return $courseall;
    }

}
