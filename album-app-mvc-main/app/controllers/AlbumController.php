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

    public function store()
    {
        // Enrégistrer un nouvel album dans la BDD
    }

    public function show(int $id)
    {
        // Afficher les détails d'un album spécifique
    }

    public function edit(int $id)
    {
        // Afficher le formulaire d'édition d'album
    }

    public function update( string $title, string $artiste)
    {
        // Mettre à jour un album existant dans la BDD
    }

    public function destroy(int $id)
    {
        // Supprimer un album de la BDD
    }
}