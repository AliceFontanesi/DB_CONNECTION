select p.id, p.titolo, p.codice
from conerto.concerti c
inner join concerto.concerto_pezzo cp
on c.id = cp.concerto_id
inner join concerto.pezzi p
on p.id = cp.pezzo_id;
