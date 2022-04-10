    <form action = "?oldal=belep" method = "post">
      <fieldset>
        <legend>Bejlentkezés</legend>
        <br>
        <input type="text" name="username" placeholder="felhasználó" required><br><br>
        <input type="password" name="password" placeholder="jelszó" required><br><br>
        <input type="submit" name="belepes" value="Belépés">
        <br>&nbsp;
      </fieldset>
    </form>
    <h2>Regisztrálja magát, ha még nem felhasználó!</h2>
    <form action = "?oldal=regisztral" method = "post">
      <fieldset>
        <legend>Regisztráció</legend>
        <br>
        <input type="text" name="lastname" placeholder="vezetéknév" required><br><br>
        <input type="text" name="firstname" placeholder="utónév" required><br><br>
        <input type="text" name="username" placeholder="felhasználói név" required><br><br>
        <input type="email" name="emailadd" placeholder="email cím" required><br><br>
        <input type="password" name="password" placeholder="jelszó" required><br><br>
        <input type="submit" name="regisztracio" value="Regisztráció">
        <br>&nbsp;
      </fieldset>
    </form>
