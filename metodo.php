<?php
public function pezzi()
    {
        DbManager::initialize("localhost", "concerto", "file.txt");
        $query = "SELECT p.id, p.titolo, p.codice from concerto.concerti c inner join concerto.concerto_pezzo cp on c.id = cp.concerto_id inner join concerto.pezzi p on p.id = cp.pezzo_id;";
        try {
            //Eseguo la query preparata precedentemente, restituisce oggetti della classe Concerto
            $stmt = DbManager::getPdo()->prepare($query);
            $stmt->execute();
            $pezzi = $stmt->fetchAll(PDO::FETCH_CLASS, "Pezzo");

            if (!empty($pezzi)) {
                    return $pezzi
                }
            } else {
                    return null;
            }
        } catch (PDOException $e) {
            die("Errore nella ricerca di tutti i record: " . $e->getMessage());
        }
    }
?>
