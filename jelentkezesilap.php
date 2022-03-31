<!DOCTYPE html>
<html lang="HU">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body style="background-color:#F8BBD0;">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-5-strong justify-content-center">
  <div class="collapse navbar-collapse">
    <ul class="nav navbar-nav">
      <li class="active"><a href="jelentkezesilap.php">Bejelentkezés</a></li>
    </ul>
  </div>
</nav>
<div class="my-4">
<h1 class="text-center">Futó verseny jelentkezési lap</h1></div>
<div class="d-flex flex-column w-75 my-auto mx-auto" style="border: solid blue 1px; background-color:#FFFFFF">
<div class="row">
<div class="col-sm">
    <h2>Adatok</h2><br>
    <form action="regisztraciok.php" method = "post">  
                <label> Név: </label>  
                <input type = "text" class="form-control" name  = "nev" required/><br>  
                <label> Email: </label>  
                <input type = "email" class="form-control" name  = "email" required/><br>
                <label> Születési idő: </label>  
                <input type = "date" class="form-control" name  = "datum" required/><br>
                <label> Nem: </label><br>
                <input type = "radio"  name  = "nem" value="Férfi"/>Férfi<br>  
                <input type = "radio"  name  = "nem" value="Nő"/>Nő<br><br>
                <input type = "submit" class="btn mb-2" style="background-color:#228B22; color:white;" value = "Küldés" name="kuldes"/>   
        </form>  
</div>
<div class="col-sm">
<h2>Fontos</h2>
<p>A versenyfelkészülés részeként olvassuk el alaposan a versenykiírást, legyünk tisztában az alapvető információkkal: melyik nap, pontosan hol van a verseny, mikor van a rajt, milyen lesz az útvonal, mikor lehet átvenni a rajtszámot, mit tartalmaz a rajtcsomag, hol lesznek a frissítőállomások, mi lesz a kirakott frissítés. Tervezzük meg, hogyan jutunk el a versenyre, mikor kell elindulni a biztonságos érkezéshez, hogy ne kelljen a rajt előtt kapkodni, legyen idő minden előkészületre, megfelelő bemelegítésre, ráhangolódásra. Legyen listánk arról, mit viszünk magunkkal, milyen felszerelésre, frissítésre, kiegészítőkre lesz szükségünk, hogy semmilyen fontos dolog ne maradjon otthon.</p>

<p>A megfelelő, minden körülményre kiterjedő felkészülés segít abban, hogy sikeres és élvezetes futóversenyeket teljesíthessünk, megéri ezekre odafigyelni!</p>

<p>Forrás: <a href="https://www.spurifutobolt.hu/felkeszules-futoversenyre/">https://www.spurifutobolt.hu/felkeszules-futoversenyre/</a></p>
</div>
<div class="col-sm">
    <div style="background-color:#F8BBD0;">
    <b>Start:<b><br>
    <b>17:00</b><br>
</div>
</div>
</div>
</body>
</html>

