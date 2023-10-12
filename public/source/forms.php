<form id="optInForm" method="POST" action="./api.php">
    <div>
        <label for="email">Email</label>
        <input class="input" type="email" name="email" placeholder="Email">
    </div>
    <div>
        <label for="fname">Name</label>
        <input class="input" type="text" name="fname" placeholder="Naam" required>
    </div>
    <div>
        <label for="lastname"></label>
        <input class="input" type="text" name="lastname" placeholder="Achternaam" required>
    </div>
    
    <select name="nieuwsbrief" id="nieuwsbrief">
        <option value="Telegraaf">Telegraaf</option>
        <option value="ad">AD.nl</option>
    </select>
    <div>
        <input class="submit" type="submit" value="Verzenden">
    </div>
</form>