<?php
require APP_ROOT . "/app/models/AlbumModel.php";
class AlbumController
{

    public function home()
    {
        $albums = AlbumModel::getAlbums();
        // Afficher la liste de tous les albums
        require(APP_ROOT. "/app/views/home.phtml");
    }

    public function create()
    {
        // Afficher le formulaire de création d'album
    }

    public function store(string $title, string $artiste)
    {
        // Enrégistrer un nouvel album dans la BDD
        AlbumModel::addAlbum( $title,  $artiste);
        // require APP_ROOT."/app/views/addAlbum.phtml";
        
    }

    public function show(int $id)
    {
        // Afficher les détails d'un album spécifique
    }

    public function edit(int $id)
    {
        // Afficher le formulaire d'édition d'album
        // Réchercher l'album à modifier dans la BDD
        $album = AlbumModel::getAlbumById($id);
        // Re
        require(APP_ROOT . "/app/views/editAlbum.phtml");
    }

    public function update( int $id,string $title, string $artiste)
    {
        // Mettre à jour un album existant dans la BDD
        AlbumModel::updateAlbum($id, $title, $artiste);
        header("HTTP/1.1 302 Found");
        header("Location: /");
    }

    public function destroy(int $id)
    {
        // Supprimer un album de la BDD
        AlbumModel::deleteAlbum($id);
        // Redirection sur la page d'accueil
        header("HTTP/1.1 302 Found");
        header("Location : /");
    }
}