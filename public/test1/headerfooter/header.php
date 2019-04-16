<?php
/**
 * Created by PhpStorm.
 * User: Heylon
 * Date: 16/04/2019
 * Time: 7:39 PM
 */
?>
<style>
    a {
        background-color: hsl(160, 100%, 66%);
        border-radius: 4px;
        width: 50px;
        height: 25px;
        display: inline-block;
        margin-left: 10px;
        margin-right: 10px;
        margin-bottom: 3px;
        margin-top: 3px;
    }
    a:hover {
        background-color: hsl(160, 100%, 50%);
    }
    #headerContainer {
        width: 100%;
        height: 145px;
        background-color: aquamarine;
    }
    #titleContainer{
        margin-left: 15px;
    }
    nav {
        margin-left: 25px;
        background-color: hsl(160, 100%, 83%);
        border-radius: 4px;
        margin-right: 25px;
    }
</style>
<div id="headerContainer">
    <div id="titleContainer">
        <h1>Heylon's special PHP website</h1>
        <p>Good things happen here</p>
    </div>

    <nav>
        <a href="index.php">Home</a>
        <a href="about.php">About</a>
    </nav>
</div>
