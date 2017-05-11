# Konfiguracja środowiska:
W celu uruchomienia projektu wymagane jest posiadanie **php w wersji >= 5.6**. Aby skonfigurować środowisko należy wykonać poniższą instrukcję.

## Instalacja zależności
1. Pobierz composer zgodnie z instrukcją: https://getcomposer.org/download/
2. Wykonaj polecenie `php composer.phar create-project lukaskolista/i-systems-unit-tests nazwa-katalogu-docelowego dev-master`

Od tej pory możesz uruchamiać testy w utworzonym projekcie (nazwa-katalogu-docelowego) za pomocą polecenia `php vendor/bin/phpunit`

## Konfiguracja runnera w PhpStorm:

### Konfiguracja runnera PHPUnit
1. W prawym górnym rogu rozwiń listę skonfigurowanych runnerów i kliknij "Edit Configuration..." http://q.i-systems.pl/file/d8363ee2.png
2. W otwartym oknie naciśnij ikonę "+" a następnie wybierz opcję "PHPUnit" http://q.i-systems.pl/file/82ebf4a0.png
3. W konfiguracji runnera PHPUnit wpisz dowolną nazwę, a następnie wybierz następujące ustawienia test runnera: "Defined in configuration file" oraz "Use alternative configuration file" i ustaw ścieżkę do pliku phpunit.xml.dist w projekcie http://q.i-systems.pl/file/13532385.png
4. Kliknij w ikonę konfiguracji PHPUnit (ikona koła zembatego i klucza po prawej od opcji "Use alternative configuration file"
5. W sekcji "PHPUnit library" zaznacz opcję "Use custom autoloader" a następnie podaj ścieżkę do pliku vendor/bin/phpunit w projekcie. http://q.i-systems.pl/file/ca55e897.png

### Jeżeli nie masz skonfigurowanej ścieżki do php, to należy ją skonfigurować:
1. PhpStorm->Preferences...
2. W meny po lewej stronie otwartego okna wybierz: Languages & Frameworks->PHP
3. W opcjach konfiguracji ustaw "PHP language level" oraz "Interpreter" http://q.i-systems.pl/file/54c746c6.png

Po wykonaniu powyższej konfiguracji możesz uruchamiać testy w PHP Storm za pomocą runnera (zielona strzałka): http://q.i-systems.pl/file/6a349fa5.png
Aby sprawdzić poprawność konfiguracji uruchom testy - powinien uruchomić się 1 test z 1 asercją.