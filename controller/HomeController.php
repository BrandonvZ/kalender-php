<?php

require(ROOT . "model/HomeModel.php");

function index()
{
	render("home/index", array(
		'birthdays' => getBirthdays(),
		'months' => getMonths()
	));	
}

function delete($id) 
{
    render("home/delete", array(
        'id' => $id,
        'current' => getUser($id)
    ));
}

function create()
{
	render("home/create", array(
        'day' => $_POST['day'],
        'month' => $_POST['month'],
        'name' => $_POST['name'],
        'birth' => $_POST['birth']
    ));
}

function edit($id)
{
	render("home/edit", array(
		'id' => $id,
		'user' => getUser($id)
    ));
}

function editConfirm($id)
{
	$day = $_POST['day'];
    $month = $_POST['month'];
    $name = $_POST['name'];
    $birth = $_POST['birth'];

    editRow($id, $day, $month, $name, $birth);
}