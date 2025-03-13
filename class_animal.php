<?php
class Animal {
    public $animals;
    public function __construct($ar_animal)
    {
        $this->animals = $ar_animal;    
    }
    public function index()
    {
        foreach ($this->animals as $animal) {
            echo "- $animal <br/> ";
            }
}

public function store($animal) 
{
    $this->animals[] = $animal;
}

public function update($index, $animal) 
{
    $this->animals[$index] = $animal;
}

public function destroy($index) 
{
    unset($this->animals[$index]);
}
}

$animals = new Animal(["Ayam", "Ikan"]);

echo "index - Menampilkan Seluruh Hewan <br/>";   
$animals->index();
echo "<br/>" ;

echo "store - Menambahkan Hewan Baru (burung) <br/>";   
$animals->store("Burung");
$animals->index();
echo "<br/>" ;

echo "Update - Mengupdate Hewan<br/>";   
$animals->update(0, "Kucing Anggora");
$animals->index();
echo "<br/>" ;

echo "Destroy - Menghapus hewan <br/>";   
$animals->destroy(1);
$animals->index();
echo "<br/>" ;

