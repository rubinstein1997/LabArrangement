<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:83:"C:\SoftWare\xampp\htdocs\thinkphp\public/../application/admin\view\entry\index.html";i:1503407407;s:76:"C:\SoftWare\xampp\htdocs\thinkphp\public/../application/admin\view\base.html";i:1503407364;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="../../favicon.ico">

  <title>Dashboard Template for Bootstrap</title>

  <!-- Bootstrap core CSS -->
  <link href="__STATIC__/admin/css/bootstrap.min.css" rel="stylesheet">

  <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  <link href="__STATIC__/admin/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="__STATIC__/admin/dashboard.css" rel="stylesheet">

  <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
  <!--[if lt IE 9]>
  <script src="__STATIC__/admin/js/ie8-responsive-file-warning.js"></script><![endif]-->
  <script src="__STATIC__/admin/js/ie-emulation-modes-warning.js"></script>

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <style>
    /*.secondmenu a {*/
      /*font-size: 15px;*/
      /*color: #4A515B;*/
      /*text-align: center;*/
    /*}*/

    #main-nav {
      margin-left: 1px;
    }
    #main-nav.nav-tabs.nav-stacked > li > a {
      padding: 10px 8px;
      font-size: 12px;
      font-weight: 600;
      color: #4A515B;
      background: #E9E9E9;
      background: -moz-linear-gradient(top, #FAFAFA 0%, #E9E9E9 100%);
      background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#FAFAFA), color-stop(100%,#E9E9E9));
      background: -webkit-linear-gradient(top, #FAFAFA 0%,#E9E9E9 100%);
      background: -o-linear-gradient(top, #FAFAFA 0%,#E9E9E9 100%);
      background: -ms-linear-gradient(top, #FAFAFA 0%,#E9E9E9 100%);
      background: linear-gradient(top, #FAFAFA 0%,#E9E9E9 100%);
      filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#FAFAFA', endColorstr='#E9E9E9');
      -ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr='#FAFAFA', endColorstr='#E9E9E9')";
      border: 1px solid #D5D5D5;
      border-radius: 4px;
    }
    #main-nav.nav-tabs.nav-stacked > li > a > span {
      color: #4A515B;
    }
    #main-nav.nav-tabs.nav-stacked > li.active > a, #main-nav.nav-tabs.nav-stacked > li > a:hover {
      color: #FFF;
      background: #3C4049;
      background: -moz-linear-gradient(top, #4A515B 0%, #3C4049 100%);
      background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#4A515B), color-stop(100%,#3C4049));
      background: -webkit-linear-gradient(top, #4A515B 0%,#3C4049 100%);
      background: -o-linear-gradient(top, #4A515B 0%,#3C4049 100%);
      background: -ms-linear-gradient(top, #4A515B 0%,#3C4049 100%);
      background: linear-gradient(top, #4A515B 0%,#3C4049 100%);
      filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#4A515B', endColorstr='#3C4049');
      -ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr='#4A515B', endColorstr='#3C4049')";
      border-color: #2B2E33;
    }
    #main-nav.nav-tabs.nav-stacked > li.active > a, #main-nav.nav-tabs.nav-stacked > li > a:hover > span {
      color: #FFF;
    }
    #main-nav.nav-tabs.nav-stacked > li {
      margin-bottom: 4px;
    }
    /*定义二级菜单样式*/
    .secondmenu a {
    font-size: 15px;
    color: #4A515B;
    text-align: center;
    }
    .navbar-static-top {
      background-color: #212121;
      margin-bottom: 5px;
    }
    .navbar-brand {
      background: url('') no-repeat 10px 8px;
      display: inline-block;
      vertical-align: middle;
      padding-left: 50px;
      color: #fff;
    }
  </style>
</head>

<body>
<div style="height: 50px">
  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
      <div class="navbar-header">
        <h3 style="color: white">实 验 室 管 理 系 统</h3>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#">Dashboard</a></li>
          <li><a href="#">Settings</a></li>
          <li><a href="#">Profile</a></li>
          <li><a href="<?php echo url('/quit'); ?>" style="color: white">退出</a></li>
        </ul>

      </div>
    </div>
  </nav>
</div>

<div class="container-fluid" style="margin: 30px auto 30px">
  <div class="row">
    <div class="col-md-2" id="sidebar">
      <ul id="main-nav" class="nav nav-tabs nav-stacked" style="">
        <li class="active">
          <a href="<?php echo url('/admin'); ?>">
            <i class="glyphicon glyphicon-credit-card"></i>
            课表查询
          </a>
        </li>



        <li>
          <a href="./plans.html">
            <i class="glyphicon glyphicon-calendar"></i>
            课程审批
          </a>
        </li>
        <li>
          <a href="./plans.html">
            <i class="glyphicon glyphicon-calendar"></i>
            审批历史
          </a>
        </li>

        <li>
          <a href="#systemSetting" class="nav-header collapsed" data-toggle="collapse">
            <i class="glyphicon glyphicon-cog"></i>
            信息管理
            <span class="pull-right glyphicon glyphicon-chevron-down"></span>
          </a>
          <ul id="systemSetting" class="nav nav-list collapse secondmenu" style="height: 0px;">
            <li><a href="#"><i class="glyphicon glyphicon-user"></i>实验室管理</a></li>
            <li><a href="#"><i class="glyphicon glyphicon-th-list"></i>教师管理</a></li>
            <li><a href="#"><i class="glyphicon glyphicon-asterisk"></i>课程管理</a></li>
            <li><a href="#"><i class="glyphicon glyphicon-edit"></i>联系方式修改</a></li>
          </ul>
        </li>


      </ul>
    </div>
    <div class="col-md-10" >

      
<div class="row" style="margin: 10px 0 20px 20px">
  <form class="form-inline" action="<?php echo url('/admin'); ?>" method="post">
    <!--<div class="col-lg-3">-->
    <div class="form-group" style="margin-right: 20px">
      <label style="margin-right: 10px">实验室 </label>


      <select id = "lab" class="form-control" name="lab">
        <?php foreach($lab as $vo): ?>
          <option value="<?php echo $vo['laboratory_id']; ?>"><?php echo $vo['laboratory_id']; ?></option>
        <?php endforeach; ?>
      </select>
    </div>

    <div class="form-group" style="margin-right: 10px">
      <label style="margin-right: 10px">周</label>
      <select id = "week1" class="form-control" name="week1">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
        <option value="11">11</option>
        <option value="12">12</option>
        <option value="13">13</option>
        <option value="14">14</option>
        <option value="15">15</option>
        <option value="16">16</option>
        <option value="17">17</option>
        <option value="18">18</option>

      </select>
    </div>

    <div class="form-group" style="margin-right: 20px;">
      <label style="margin-right: 10px">至</label>
      <select id="week2" class="form-control" name="week2">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
        <option value="11">11</option>
        <option value="12">12</option>
        <option value="13">13</option>
        <option value="14">14</option>
        <option value="15">15</option>
        <option value="16">16</option>
        <option value="17">17</option>
        <option value="18">18</option>
      </select>
    </div>

    <button type="submit"  class="btn btn-info" >查询</button>


    <label style="margin-left: 50px;: 10px">网页加载完点击课表中具体框格可预约课程</label>

    <!--</div>-->
    <!--<div class="col-lg-3">-->
    <!--<div>-->
    <!--<select class="form-control" style="width: 100px">-->
    <!--<option>1</option>-->
    <!--<option>2</option>-->
    <!--<option>3</option>-->
    <!--<option>4</option>-->
    <!--<option>5</option>-->
    <!--</select>-->
    <!--</div>-->
    <!--</div>-->
    <!--<div class="col-lg-3">-->
    <!--<select class="form-control" style="width: 100px">-->
    <!--<option>1</option>-->
    <!--<option>2</option>-->
    <!--<option>3</option>-->
    <!--<option>4</option>-->
    <!--<option>5</option>-->
    <!--</select>-->
    <!--</div>-->

  </form>
</div>

<!--<h2 class="sub-header">Section title</h2>-->
<div class="table-responsive">
  <table class="table table-bordered table-striped table-hover">
    <thead>
    <tr>
      <th width="50"  class="text-center"></th>
      <th width="120" class="text-center">星期一</th>
      <th width="120" class="text-center">星期二</th>
      <th width="120" class="text-center">星期三</th>
      <th width="120" class="text-center">星期四</th>
      <th width="120" class="text-center">星期五</th>
      <th width="120" class="text-center">星期六</th>
      <th width="120" class="text-center">星期日</th>

    </tr>
    </thead>
    <tbody>
    <tr style="height: 100px">
      <td align="center">0102</td>

      <td align="center" data-toggle="modal" data-target="#exampleModal" data-section="0102" data-week="星期一">
        <?php foreach($course['0102']['week1'] as $vo): ?>
          <?php echo $vo['course']; ?><br><?php echo $vo['week']; ?><br><?php echo $vo['class']; ?><br><?php echo !empty($vo['course_id'])?'------------------------':''; ?><br>
        <?php endforeach; ?>
      </td>

      <td align="center" data-toggle="modal" data-target="#exampleModal" data-section="0102" data-week="星期二">
        <?php foreach($course['0102']['week2'] as $vo): ?>
          <?php echo $vo['course']; ?><br><?php echo $vo['week']; ?><br><?php echo $vo['class']; ?><br><?php echo !empty($vo['course_id'])?'------------------------':''; ?><br>
        <?php endforeach; ?>
      </td>

      <td align="center" data-toggle="modal" data-target="#exampleModal" data-section="0102" data-week="星期三">
        <?php foreach($course['0102']['week3'] as $vo): ?>
          <?php echo $vo['course']; ?><br><?php echo $vo['week']; ?><br><?php echo $vo['class']; ?><br><?php echo !empty($vo['course_id'])?'------------------------':''; ?><br>
        <?php endforeach; ?>
      </td>

      <td align="center" data-toggle="modal" data-target="#exampleModal" data-section="0102" data-week="星期四">
        <?php foreach($course['0102']['week4'] as $vo): ?>
          <?php echo $vo['course']; ?><br><?php echo $vo['week']; ?><br><?php echo $vo['class']; ?><br><?php echo !empty($vo['course_id'])?'------------------------':''; ?><br>
        <?php endforeach; ?>
      </td>

      <td align="center" data-toggle="modal" data-target="#exampleModal" data-section="0102" data-week="星期五">
        <?php foreach($course['0102']['week5'] as $vo): ?>
          <?php echo $vo['course']; ?><br><?php echo $vo['week']; ?><br><?php echo $vo['class']; ?><br><?php echo !empty($vo['course_id'])?'------------------------':''; ?><br>
        <?php endforeach; ?>
      </td>

      <td align="center" data-toggle="modal" data-target="#exampleModal" data-section="0102" data-week="星期六">
        <?php foreach($course['0102']['week6'] as $vo): ?>
          <?php echo $vo['course']; ?><br><?php echo $vo['week']; ?><br><?php echo $vo['class']; ?><br><?php echo !empty($vo['course_id'])?'------------------------':''; ?><br>
        <?php endforeach; ?>
      </td>

      <td align="center" data-toggle="modal" data-target="#exampleModal" data-section="0102" data-week="星期日">
        <?php foreach($course['0102']['week7'] as $vo): ?>
          <?php echo $vo['course']; ?><br><?php echo $vo['week']; ?><br><?php echo $vo['class']; ?><br><?php echo !empty($vo['course_id'])?'------------------------':''; ?><br>
        <?php endforeach; ?>
      </td>

    </tr>
    <tr style="height: 100px">
      <td align="center">0304</td>
      <td align="center" data-toggle="modal" data-target="#exampleModal" data-section="0304" data-week="星期一">
        <?php foreach($course['0304']['week1'] as $vo): ?>
        <?php echo $vo['course']; ?><br><?php echo $vo['week']; ?><br><?php echo $vo['class']; ?><br><?php echo !empty($vo['course_id'])?'------------------------':''; ?><br>
        <?php endforeach; ?>
      </td>

      <td align="center" data-toggle="modal" data-target="#exampleModal" data-section="0304" data-week="星期二">
        <?php foreach($course['0304']['week2'] as $vo): ?>
        <?php echo $vo['course']; ?><br><?php echo $vo['week']; ?><br><?php echo $vo['class']; ?><br><?php echo !empty($vo['course_id'])?'------------------------':''; ?><br>
        <?php endforeach; ?>
      </td>

      <td align="center" data-toggle="modal" data-target="#exampleModal" data-section="0304" data-week="星期三">
        <?php foreach($course['0304']['week3'] as $vo): ?>
        <?php echo $vo['course']; ?><br><?php echo $vo['week']; ?><br><?php echo $vo['class']; ?><br><?php echo !empty($vo['course_id'])?'------------------------':''; ?><br>
        <?php endforeach; ?>
      </td>

      <td align="center" data-toggle="modal" data-target="#exampleModal" data-section="0304" data-week="星期四">
        <?php foreach($course['0304']['week4'] as $vo): ?>
        <?php echo $vo['course']; ?><br><?php echo $vo['week']; ?><br><?php echo $vo['class']; ?><br><?php echo !empty($vo['course_id'])?'------------------------':''; ?><br>
        <?php endforeach; ?>
      </td>

      <td align="center" data-toggle="modal" data-target="#exampleModal" data-section="0304" data-week="星期五">
        <?php foreach($course['0304']['week5'] as $vo): ?>
        <?php echo $vo['course']; ?><br><?php echo $vo['week']; ?><br><?php echo $vo['class']; ?><br><?php echo !empty($vo['course_id'])?'------------------------':''; ?><br>
        <?php endforeach; ?>
      </td>

      <td align="center" data-toggle="modal" data-target="#exampleModal" data-section="0304" data-week="星期六">
        <?php foreach($course['0304']['week6'] as $vo): ?>
        <?php echo $vo['course']; ?><br><?php echo $vo['week']; ?><br><?php echo $vo['class']; ?><br><?php echo !empty($vo['course_id'])?'------------------------':''; ?><br>
        <?php endforeach; ?>
      </td>

      <td align="center" data-toggle="modal" data-target="#exampleModal" data-section="0304" data-week="星期日">
        <?php foreach($course['0304']['week7'] as $vo): ?>
        <?php echo $vo['course']; ?><br><?php echo $vo['week']; ?><br><?php echo $vo['class']; ?><br><?php echo !empty($vo['course_id'])?'------------------------':''; ?><br>
        <?php endforeach; ?>
      </td>
    </tr>
    <tr style="height: 100px">
      <td align="center">0506</td>
      <td align="center" data-toggle="modal" data-target="#exampleModal" data-section="0506" data-week="星期一">
        <?php foreach($course['0506']['week1'] as $vo): ?>
        <?php echo $vo['course']; ?><br><?php echo $vo['week']; ?><br><?php echo $vo['class']; ?><br><?php echo !empty($vo['course_id'])?'------------------------':''; ?><br>
        <?php endforeach; ?>
      </td>

      <td align="center" data-toggle="modal" data-target="#exampleModal" data-section="0506" data-week="星期二">
        <?php foreach($course['0506']['week2'] as $vo): ?>
        <?php echo $vo['course']; ?><br><?php echo $vo['week']; ?><br><?php echo $vo['class']; ?><br><?php echo !empty($vo['course_id'])?'------------------------':''; ?><br>
        <?php endforeach; ?>
      </td>

      <td align="center" data-toggle="modal" data-target="#exampleModal" data-section="0506" data-week="星期三">
        <?php foreach($course['0506']['week3'] as $vo): ?>
        <?php echo $vo['course']; ?><br><?php echo $vo['week']; ?><br><?php echo $vo['class']; ?><br><?php echo !empty($vo['course_id'])?'------------------------':''; ?><br>
        <?php endforeach; ?>
      </td>

      <td align="center" data-toggle="modal" data-target="#exampleModal" data-section="0506" data-week="星期四">
        <?php foreach($course['0506']['week4'] as $vo): ?>
        <?php echo $vo['course']; ?><br><?php echo $vo['week']; ?><br><?php echo $vo['class']; ?><br><?php echo !empty($vo['course_id'])?'------------------------':''; ?><br>
        <?php endforeach; ?>
      </td>

      <td align="center" data-toggle="modal" data-target="#exampleModal" data-section="0506" data-week="星期五">
        <?php foreach($course['0506']['week5'] as $vo): ?>
        <?php echo $vo['course']; ?><br><?php echo $vo['week']; ?><br><?php echo $vo['class']; ?><br><?php echo !empty($vo['course_id'])?'------------------------':''; ?><br>
        <?php endforeach; ?>
      </td>

      <td align="center" data-toggle="modal" data-target="#exampleModal" data-section="0506" data-week="星期六">
        <?php foreach($course['0506']['week6'] as $vo): ?>
        <?php echo $vo['course']; ?><br><?php echo $vo['week']; ?><br><?php echo $vo['class']; ?><br><?php echo !empty($vo['course_id'])?'------------------------':''; ?><br>
        <?php endforeach; ?>
      </td>

      <td align="center" data-toggle="modal" data-target="#exampleModal" data-section="0506" data-week="星期日">
        <?php foreach($course['0506']['week7'] as $vo): ?>
        <?php echo $vo['course']; ?><br><?php echo $vo['week']; ?><br><?php echo $vo['class']; ?><br><?php echo !empty($vo['course_id'])?'------------------------':''; ?><br>
        <?php endforeach; ?>
      </td>
    </tr>
    <tr style="height: 100px">
      <td align="center">0708</td>
      <td align="center" data-toggle="modal" data-target="#exampleModal" data-section="0708" data-week="星期一">
        <?php foreach($course['0708']['week1'] as $vo): ?>
        <?php echo $vo['course']; ?><br><?php echo $vo['week']; ?><br><?php echo $vo['class']; ?><br><?php echo !empty($vo['course_id'])?'------------------------':''; ?><br>
        <?php endforeach; ?>
      </td>

      <td align="center" data-toggle="modal" data-target="#exampleModal" data-section="0708" data-week="星期二">
        <?php foreach($course['0708']['week2'] as $vo): ?>
        <?php echo $vo['course']; ?><br><?php echo $vo['week']; ?><br><?php echo $vo['class']; ?><br><?php echo !empty($vo['course_id'])?'------------------------':''; ?><br>
        <?php endforeach; ?>
      </td>

      <td align="center" data-toggle="modal" data-target="#exampleModal" data-section="0708" data-week="星期三">
        <?php foreach($course['0708']['week3'] as $vo): ?>
        <?php echo $vo['course']; ?><br><?php echo $vo['week']; ?><br><?php echo $vo['class']; ?><br><?php echo !empty($vo['course_id'])?'------------------------':''; ?><br>
        <?php endforeach; ?>
      </td>

      <td align="center" data-toggle="modal" data-target="#exampleModal" data-section="0708" data-week="星期四">
        <?php foreach($course['0708']['week4'] as $vo): ?>
        <?php echo $vo['course']; ?><br><?php echo $vo['week']; ?><br><?php echo $vo['class']; ?><br><?php echo !empty($vo['course_id'])?'------------------------':''; ?><br>
        <?php endforeach; ?>
      </td>

      <td align="center" data-toggle="modal" data-target="#exampleModal" data-section="0708" data-week="星期五">
        <?php foreach($course['0708']['week5'] as $vo): ?>
        <?php echo $vo['course']; ?><br><?php echo $vo['week']; ?><br><?php echo $vo['class']; ?><br><?php echo !empty($vo['course_id'])?'------------------------':''; ?><br>
        <?php endforeach; ?>
      </td>

      <td align="center" data-toggle="modal" data-target="#exampleModal" data-section="0708" data-week="星期六">
        <?php foreach($course['0708']['week6'] as $vo): ?>
        <?php echo $vo['course']; ?><br><?php echo $vo['week']; ?><br><?php echo $vo['class']; ?><br><?php echo !empty($vo['course_id'])?'------------------------':''; ?><br>
        <?php endforeach; ?>
      </td>

      <td align="center" data-toggle="modal" data-target="#exampleModal" data-section="0708" data-week="星期日">
        <?php foreach($course['0708']['week7'] as $vo): ?>
        <?php echo $vo['course']; ?><br><?php echo $vo['week']; ?><br><?php echo $vo['class']; ?><br><?php echo !empty($vo['course_id'])?'------------------------':''; ?><br>
        <?php endforeach; ?>
      </td>
    </tr>
    <tr style="height: 100px">
      <td align="center">0910</td>
      <td align="center" data-toggle="modal" data-target="#exampleModal" data-section="0910" data-week="星期一">
        <?php foreach($course['0910']['week1'] as $vo): ?>
        <?php echo $vo['course']; ?><br><?php echo $vo['week']; ?><br><?php echo $vo['class']; ?><br><?php echo !empty($vo['course_id'])?'------------------------':''; ?><br>
        <?php endforeach; ?>
      </td>

      <td align="center" data-toggle="modal" data-target="#exampleModal" data-section="0910" data-week="星期二">
        <?php foreach($course['0102']['week2'] as $vo): ?>
        <?php echo $vo['course']; ?><br><?php echo $vo['week']; ?><br><?php echo $vo['class']; ?><br><?php echo !empty($vo['course_id'])?'------------------------':''; ?><br>
        <?php endforeach; ?>
      </td>

      <td align="center" data-toggle="modal" data-target="#exampleModal" data-section="0910" data-week="星期三">
        <?php foreach($course['0102']['week3'] as $vo): ?>
        <?php echo $vo['course']; ?><br><?php echo $vo['week']; ?><br><?php echo $vo['class']; ?><br><?php echo !empty($vo['course_id'])?'------------------------':''; ?><br>
        <?php endforeach; ?>
      </td>

      <td align="center" data-toggle="modal" data-target="#exampleModal" data-section="0910" data-week="星期四">
        <?php foreach($course['0102']['week4'] as $vo): ?>
        <?php echo $vo['course']; ?><br><?php echo $vo['week']; ?><br><?php echo $vo['class']; ?><br><?php echo !empty($vo['course_id'])?'------------------------':''; ?><br>
        <?php endforeach; ?>
      </td>

      <td align="center" data-toggle="modal" data-target="#exampleModal" data-section="0910" data-week="星期五">
        <?php foreach($course['0102']['week5'] as $vo): ?>
        <?php echo $vo['course']; ?><br><?php echo $vo['week']; ?><br><?php echo $vo['class']; ?><br><?php echo !empty($vo['course_id'])?'------------------------':''; ?><br>
        <?php endforeach; ?>
      </td>

      <td align="center" data-toggle="modal" data-target="#exampleModal" data-section="0910" data-week="星期六">
        <?php foreach($course['0102']['week6'] as $vo): ?>
        <?php echo $vo['course']; ?><br><?php echo $vo['week']; ?><br><?php echo $vo['class']; ?><br><?php echo !empty($vo['course_id'])?'------------------------':''; ?><br>
        <?php endforeach; ?>
      </td>

      <td align="center" data-toggle="modal" data-target="#exampleModal" data-section="0910" data-week="星期日">
        <?php foreach($course['0102']['week7'] as $vo): ?>
        <?php echo $vo['course']; ?><br><?php echo $vo['week']; ?><br><?php echo $vo['class']; ?><br><?php echo !empty($vo['course_id'])?'------------------------':''; ?><br>
        <?php endforeach; ?>
      </td>
    </tr>

    </tbody>

  </table>

</div>



    </div>
  </div>
</div>


<!--</div>-->


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="__STATIC__/admin/js/vendor/jquery.min.js"><\/script>')</script>
<script src="__STATIC__/admin/js/bootstrap.min.js"></script>
<!-- Just to make our placeholder images work. Don't actually copy the next line! -->
<script src="__STATIC__/admin/js/vendor/holder.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="__STATIC__/admin/js/ie10-viewport-bug-workaround.js"></script>

</body>
</html>
<script>

    (function () {
        var lab = document.getElementById("lab");
        for(var i=0; i<lab.options.length; i++){
            console.debug(lab.options[i].innerHTML +" " +<?php echo $select['lab']; ?>);
            if(lab.options[i].innerHTML ==<?php echo $select['lab']; ?>){
                lab.options[i].selected = true;
                console.debug("ok");
            }
            else
            {
                lab.options[i].selected = false;
                console.debug("not ok");
            }
        }
    })();

    (function () {
        var week = document.getElementById("week1");
        for(var i=0; i<week.options.length; i++){
            console.debug(week.options[i].innerHTML +" " +<?php echo $select['weekstart']; ?>);
            if(week.options[i].innerHTML ==<?php echo $select['weekstart']; ?>){
                week.options[i].selected = true;
                console.debug("ok");
            }
            else
            {
                week.options[i].selected = false;
                console.debug("not ok");
            }
        }
    })();


    (function () {
        var week2 = document.getElementById("week2");
        for(var i=0; i<week2.options.length; i++){
            console.debug(week2.options[i].innerHTML +" " +<?php echo $select['weekend']; ?>);
            if(week2.options[i].innerHTML == <?php echo $select['weekend']; ?>){
                week2.options[i].selected = true;
                console.debug("ok");
            }
            else
            {
                week2.options[i].selected = false;
                console.debug("not ok");
            }
        }
    })();
</script>
