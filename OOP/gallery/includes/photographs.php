<?php

/**
 * Created by PhpStorm.
 * User: petar
 * Date: 15.8.2016
 * Time: 15:43
 */
require_once dirname(__FILE__) . '\php-activerecord\ActiveRecord.php';

class photographSQL extends ActiveRecord\Model
{
    static $table = "photographs";
}

class photograph
{

//    promenljive iz baze

    public $id;
    public $filename;
    public $size;
    public $type;
    public $caption;

//    promenljive vezane za upload

    private $tmp_dir;
    protected $upload_dir = "images";
    private $upload_errors = array(
        UPLOAD_ERR_OK => "Nema greške.",
        UPLOAD_ERR_INI_SIZE => "Pokušavate da učitate preveliki fajl. Max 1MB.",
        UPLOAD_ERR_FORM_SIZE => "Preveliki fajl.",
        UPLOAD_ERR_PARTIAL => "Učitavanje iz delova.",
        UPLOAD_ERR_NO_FILE => "Niste izabrali fajl",
        UPLOAD_ERR_NO_TMP_DIR => "Nema privremenog foldera",
        UPLOAD_ERR_CANT_WRITE => "Ne može da upiše na disk",
        UPLOAD_ERR_EXTENSION => "Ne može da učita fajl sa izabranom ekstenzijom."
    );

    public $photo_errors = array();

    public function image_path($ds = DS)
    {
        return $this->upload_dir . $ds . $this->filename;
    }

    public function size_as_text()
    {
        if ($this->size < 1024) {
            return "{$this->size} B";
        } elseif ($this->size < 1048576) {
            $sizeKB = round($this->size / 1024);
            return "{$sizeKB} KB";
        } else {
            $sizeMB = round($this->size / (1048576));
            return "{$sizeMB} MB";
        }
    }

//$_FILES["file_name"]
    public function attach_file($file)
    {

        if (!$file && !empty($file) && !is_array($file)) {
            $this->photo_errors[] = "There is no file.";
            return false;
        } elseif ($file["error"] != 0) {
            $this->photo_errors[] = $this->upload_errors[$file["error"]];
            return false;
        } else {
            $this->filename = basename($file["name"]);
            $this->temp_dir = $file["tmp_name"];
            $this->size = $file["size"];
            $this->type = $file["type"];

            return false;
        }
    }

    public function save()
    {
        if (!empty($this->photo_errors)) {
            return false;
        }

        if (empty($this->filename) || empty($this->temp_dir)) {
            $this->photo_errors[] = "Fajl nije postavljen";
            return false;
        }

        if (strlen($this->caption) > 255) {
            $this->photo_errors[] = "Opis slike je predugacak";
            return false;
        }

        $target_path = SITE_ROOT . DS . "public" . DS . $this->upload_dir . DS . $this->filename;

        if (file_exists($target_path)) {
            $this->photo_errors[] = "Slika sa tim imenom vec postoji";
            return false;
        }

        if (move_uploaded_file($this->temp_dir, $target_path)) {
            $fotka = new photographSQL();
            $fotka->filename = $this->filename;
            $fotka->type = $this->type;
            $fotka->size = $this->size;
            $fotka->caption = $this->caption;
            $rezultat = $fotka->save();
            if ($rezultat) {
                unset($this->tmp_dir);
                return true;
            }
//            else {
            $this->photo_errors[] = "Fajl nije upisan u bazu";
            return false;
//            }
        } else {
            $this->photo_errors[] = "Fajl nije uspešno prebačen u folder {$this->upload_dir}";
            return false;
        }
    }


}