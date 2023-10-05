<form id="optInForm" method="post" action="./api.php">
    <div>
        <label for="email">Email</label>
        <input id="email" type="email" required>
    </div>
    <div>
        <label for="name">Name</label>
        <input id="name" type="name" required>
    </div>
    <select id="nieuwsbrief">
        <option value="Telegraaf">Telegraaf</option>
        <option value="ad">AD.nl</option>
    </select>
    <div>
        <input class="submit" type="submit" value="Verzenden">
    </div>
</form>