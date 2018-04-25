# Singleton Pattern

This is one of the most popular patterns. When developing web applications, it often makes sense conceptually and architecturally to allow access to only one instance of a particluar class (during runtime). The singleton pattern enables us to do this.

## Singleton objasnjenje

Pri razvoju web aplikacija, cesto ima smisla konceptualno i arhitekturalno omoguciti koriscenje samo jedne instance odredjene klase. Singleton patern omogucava upravo tako nesto. Singleton patern je koristan u situacijama kada treba da obezbedimo da imamo samo jednu instancu neke klase u toku jednog kompletnog ciklusa u aplikaciji. Tipican primer su globalni objekti (kao sto je neka Configuration klasa) ili deljeni resursi (kao sto je event queue).
