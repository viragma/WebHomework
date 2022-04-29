    <form action = "?oldal=belep" method = "post">
      <fieldset>
        <legend>Bejlentkezés</legend>
        <br>
        <input type="text" name="username" placeholder="Felhasználónév" ><br><br>
        <input type="password" name="password" placeholder="Jelszó" ><br><br>
        <input type="submit" name="belepes" value="Belépés">
        <br>&nbsp;
      </fieldset>
    </form>
    <h2>Regisztrálja magát, ha még nem felhasználó!</h2>
    <form  action="?oldal=regisztral" onsubmit="return ellen();" method = "post">
      <fieldset>
        <legend>Regisztráció</legend>
        <br>
        <input type="text" id="ln" name="lastname" placeholder="Vezetéknév" >
        <input type="text" id="fn" name="firstname" placeholder="Keresztnév" ><br><br>
        <input type="text" id="un"name="username" placeholder="Felhasználónév" ><br><br>
        <input type="email" id="email" name="emailadd" placeholder="E-mail cím" ><br><br>
        <input type="password" id="pass1" name="password" placeholder="Jelszó" ><br><br>
        <input type="password" id="pass2" name="password2" placeholder="Jelszó megerősítése" ><br><br>
        <button onclick="ellen()" type="button">Ellenőriz</button>
        <input type="submit" id="reg" name="regisztracio" value="Regisztráció">
        <br>&nbsp;
      </fieldset>
    </form>
