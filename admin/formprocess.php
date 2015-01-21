<?php
require 'classes/Authentication.php';
require 'classes/News.php';
require 'classes/Goldbook.php';
require 'classes/Goldbookpro.php';
require 'classes/Contact.php';
session_start();

$authentication = new Authentication();
//Security
if (!isset($_SESSION['accessGranted']) || !$_SESSION['accessGranted']) {
	$result = $storageManager->grantAccess($_POST['login'], $_POST['mdp']);
	if (!$result){
		header('Location: /admin/?action=error');
	} else {
		$_SESSION['accessGranted'] = true;
	}
}

//print_r($_POST);
//exit();
//Forms processing
if (!empty($_POST)){
	
	// traitement des news
	$news = new News();
	if ($_POST['reference'] == 'news'){
		if ($_POST['action'] == 'modif') { //Modifier la news
			try {
				$result = $news->newsModify($_POST);
				header('Location: /admin/news-list.php');
			} catch (Exception $e) {
				echo 'Erreur contactez votre administrateur <br> :',  $e->getMessage(), "\n";
				exit();
			}
			
		} else {  //ajouter une news
			try {
				$result = $news->newsAdd($_POST);
				header('Location: /admin/news-edit.php?id='.$result);
			} catch (Exception $e) {
				echo 'Erreur contactez votre administrateur <br> :',  $e->getMessage(), "\n";
				exit();
			}
		}
		
	}
	
	
	// traitement des livre d'or asso
	if ($_POST['reference'] == 'goldbook'){
		$goldbook = new Goldbook();
		if ($_POST['action'] == 'modif') { //Modifier 
			try {
				$result = $goldbook->goldbookModify($_POST);
				$goldbook = null;
				header('Location: /admin/goldbook-list.php');
			} catch (Exception $e) {
				echo 'Erreur contactez votre administrateur <br> :',  $e->getMessage(), "\n";
				$goldbook = null;
				exit();
			}
				
		} else {  //ajouter 
			try {
				$result = $goldbook->goldbookAdd($_POST);
				$goldbook = null;
				header('Location: /admin/goldbook-edit.php?id='.$result);
			} catch (Exception $e) {
				echo 'Erreur contactez votre administrateur <br> :',  $e->getMessage(), "\n";
				$goldbook = null;
				exit();
			}
		}
	}
	
	// traitement des livre d'or pro
	if ($_POST['reference'] == 'goldbookpro'){
		$goldbookpro = new Goldbookpro();
		if ($_POST['action'] == 'modif') { //Modifier
			try {
				$result = $goldbookpro->goldbookproModify($_POST);
				$goldbookpro = null;
				header('Location: /admin/goldbookpro-list.php');
			} catch (Exception $e) {
				echo 'Erreur contactez votre administrateur <br> :',  $e->getMessage(), "\n";
				$goldbookpro = null;
				exit();
			}
	
		} else {  //ajouter
			try {
				$result = $goldbookpro->goldbookproAdd($_POST);
				$goldbookpro = null;
				header('Location: /admin/goldbookpro-edit.php?id='.$result);
			} catch (Exception $e) {
				echo 'Erreur contactez votre administrateur <br> :',  $e->getMessage(), "\n";
				$goldbookpro = null;
				exit();
			}
		}
	}
	
	
} elseif (!empty($_GET)) { // GET GET GET
	if ($_GET['reference'] == 'news'){ //supprimer
		$news = new News();
		if ($_GET['action'] == 'delete'){
			try {
				$result = $news->newsDelete($_GET['id']);
				$news = null;
				header('Location: /admin/news-list.php');
			} catch (Exception $e) {
				echo 'Erreur contactez votre administrateur <br> :',  $e->getMessage(), "\n";
				$news = null;
				exit();
			}
		}	
	}
	
	if ($_GET['reference'] == 'newspro'){ //supprimer
		$newspro = new Newspro();
		if ($_GET['action'] == 'delete'){
			try {
				$result = $newspro->newsproDelete($_GET['id']);
				$news = null;
				header('Location: /admin/newspro-list.php');
			} catch (Exception $e) {
				echo 'Erreur contactez votre administrateur <br> :',  $e->getMessage(), "\n";
				$news = null;
				exit();
			}
		}
	}
	
	if ($_GET['reference'] == 'goldbook'){ //supprimer
		$goldbook = new Goldbook();
		if ($_GET['action'] == 'delete'){
			try {
				$result = $goldbook->goldbookDelete($_GET['id']);
				$goldbook = null;
				header('Location: /admin/goldbook-list.php');
			} catch (Exception $e) {
				echo 'Erreur contactez votre administrateur <br> :',  $e->getMessage(), "\n";
				$goldbook = null;
				exit();
			}
		}
	}
	if ($_GET['reference'] == 'goldbookpro'){ //supprimer
		$goldbookpro = new Goldbookpro();
		if ($_GET['action'] == 'delete'){
			try {
				$result = $goldbookpro->goldbookproDelete($_GET['id']);
				$goldbook = null;
				header('Location: /admin/goldbookpro-list.php');
			} catch (Exception $e) {
				echo 'Erreur contactez votre administrateur <br> :',  $e->getMessage(), "\n";
				$goldbook = null;
				exit();
			}
		}
	}
	
} else {
	header('Location: /admin/');
}

?>