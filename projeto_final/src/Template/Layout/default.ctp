<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
       
    </title>
    <?= $this->Html->meta('icon') ?>
     <?= $this->Html->css('bootstrap-social') ?>
     <?= $this->Html->css('bootstrap') ?>
     <?= $this->Html->css('font-awesome') ?>
     <?= $this->Html->script('bootstrap')?>
     <?= $this->Html->script('bootstrap.min')?>
     <?= $this->Html->script('docs')?>
     <?= $this->Html->script('jquery-3.2.1.min')?>
     <?= $this->Html->script('jquery')?>


    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
    <style>
  body {
      position: relative; 
  }
  .navbar, .navbar-inverse, .navbar-fixed-top{
    background-color: black;
  }
  #section1 {padding-top:50px;height:870px;color: black; background-color: white;}
  #section2 {padding-top:50px;height:870px;color: black; background-color: yellow;}
  #section3 {padding-top:50px;height:870px;color: black; background-color: white;}
  #section4 {padding-top:50px;height:870px;color: black; background-color: white;}
  #section5 {padding-top:50px;height:870px;color: black; background-color: white;}
  .img-responsive{
    position: absolute;
    left: 
  }
  .btn-group {
    background-color: black;
  }
  </style>
</head>
<body>
   <nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>                        
      </button>
     
    </div>
    <div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          
          <li class="btn-group btn-info btn-lg">

            <a href="#section1">
            <span class="glyphicon glyphicon-education"></span>Quem Somos
            </a>

          </li>

          <li class="btn-group btn-info btn-lg">
            <a href="#section2 ">
              <span class="glyphicon glyphicon-list-alt"></span>Dicas
            </a>
          </li>

          <li class="btn-group btn-info btn-lg">

          <a href="#section3">
          <span class="glyphicon glyphicon-piggy-bank"></span>Doações</a>
          </li>

             
        </ul>
         <ul class="nav navbar-nav navbar-right">
      <li class="btn-group btn-info btn-lg"><?= $this->Html->link(__('Cadastro'), ['action' => 'add']) ?></li>
      <li class="btn-group btn-info btn-lg"><a href="#section4"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>  
        
      </div>
    </div>
  </div>

</nav>    
    <?= $this->Flash->render() ?>
    <div class="container clearfix">
        <?= $this->fetch('content') ?>
    </div>
    <footer>
    </footer>
</body>
</html>
