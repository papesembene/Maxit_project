<?php
namespace App\Core;

class FileService
{
    public static function uploadFile($fichier, $dossier = 'images/uploads')
    {
        // Vérifier si le fichier est valide
        if (!isset($fichier) || $fichier['error'] !== UPLOAD_ERR_OK) {
            throw new \Exception("Fichier invalide ou erreur d'upload.");
        }

        $publicPath = realpath(__DIR__ . '/../../public');

        if (!$publicPath) {
            throw new \Exception("Le dossier public est introuvable.");
        }

        $uploadPath = $publicPath . '/' . $dossier;

      
        if (!is_dir($uploadPath)) 
        {
            if (!mkdir($uploadPath, 0755, true)) {
                throw new \Exception("Impossible de créer le dossier d'upload: " . $uploadPath);
            }
        }

       
        if (!is_writable($uploadPath)) {
            throw new \Exception("Le dossier d'upload n'est pas accessible en écriture: " . $uploadPath);
        }

        $extension = pathinfo($fichier['name'], PATHINFO_EXTENSION);
        $filename = uniqid('cni_', true) . '.' . $extension;
        $targetFile = $uploadPath . '/' . $filename;      
        if (move_uploaded_file($fichier['tmp_name'], $targetFile)) {
           
            return $dossier . '/' . $filename;
        } else {
            throw new \Exception("Échec de l'envoi du fichier vers: " . $targetFile);
        }
    }
}
