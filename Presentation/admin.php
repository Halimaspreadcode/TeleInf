<?php include './Layout/adminHeader.php'; ?>


<main>
    <section class="admin-panel">
        <h2>Panneau d'administration</h2>



        <div class="admin-selector">
            <label for="admin-select">Choisissez une section:</label>
            <select id="admin-select" class="admin-selector">
                <option value="adminUser">Admin User</option>
                <option value="adminCategories">Admin Categories</option>
                <option value="adminArticle">Admin Article</option>
            </select>
        </div>



        <!-- The Modal -->
        <div id="myModal" class="modal">

            <!-- Modal content -->
            <div class="modal-content">
                <span class="close">&times;</span>
                <form id="modalForm">
                    <!-- The form fields will be dynamically added here -->
                </form>
            </div>

        </div>



        <!-- Section Admin User -->
        <div id="adminUser" class="admin-section">
            <h3>Gestion des utilisateurs</h3>
            <table class="admin-table">
                <!-- Table Header -->
                <tr>
                    <th>Nom d'utilisateur</th>
                    <th>Email</th>
                    <th>Actions</th>
                </tr>

                <!-- Table Data -->
                <!-- You should fetch data from your database and populate this table -->
                <tr>
                    <td>Halima GUEYE</td>
                    <td>halima@example.com</td>
                    <td>
                        <button class="admin-button edit">Modifier</button>
                        <button class="admin-button delete">Supprimer</button>
                    </td>
                </tr>
                <tr>
                    <td>Thierno Ismaila DIALLO</td>
                    <td>isBongo@example.com</td>
                    <td>
                        <button class="admin-button edit">Modifier</button>
                        <button class="admin-button delete">Supprimer</button>
                    </td>
                </tr>
            </table>

            <h3>Jetons d'authentification</h3>
            <table class="admin-table">
                <!-- Table Header -->
                <tr>
                    <th>Jetons</th>
                    <th>Actions</th>
                </tr>

                <!-- Table Data -->
                <!-- You should fetch data from your database and populate this table -->
                <tr>
                    <td>abcd1234efgh5678</td>
                    <td>
                        <button class="admin-button delete">Supprimer</button>
                    </td>
                </tr>
            </table>

            <button class="admin-button add">Ajouter un utilisateur</button>

        </div>

        <!-- Section Admin Categories -->
        <div id="adminCategories" class="admin-section" style="display: none;">
            <h3>Gestion des catégories</h3>
            <table class="admin-table">
                <!-- Table Header -->
                <tr>
                    <th>Nom de la catégorie</th>
                    <th>Actions</th>
                </tr>

                <!-- Table Data -->
                <!-- You should fetch data from your database and populate this table -->
                <tr>
                    <td>Politique</td>
                    <td>
                        <button class="admin-button edit">Modifier</button>
                        <button class="admin-button delete">Supprimer</button>
                    </td>
                </tr>
                <tr>
                    <td>Economie</td>
                    <td>
                        <button class="admin-button edit">Modifier</button>
                        <button class="admin-button delete">Supprimer</button>
                    </td>
                </tr>
            </table>
            <button class="admin-button add">Ajouter une catégorie</button>
        </div>

        <!-- Section Admin Article -->
        <div id="adminArticle" class="admin-section" style="display: none;">
            <h3>Gestion des articles</h3>
            <table class="admin-table">
                <!-- Table Header -->
                <tr>
                    <th>Titre de l'article</th>
                    <th>Actions</th>
                    <th>Contenu</th>
                </tr>

                <!-- Table Data -->
                <!-- You should fetch data from your database and populate this table -->
                <tr>
                    <td>« ÉCHEC » DU MARIAGE AVEC LE BAYERN SADIO MANÉ REFUSE DE SIGNER LES PAPIERS DU DIVORCE</td>
                    <td>
                        En prélude à sa tournée nationale pour le parrainage dans le cadre de l’élection présidentielle du 25 février 2024, Déthié Fall a effectué son Ziar à Ndiassane. À cette occasion, il a présenté ses condoléances au Khalife suite au rappel à Dieu le 16 Mai 2023 du défunt Khalife Cheikh Becaye El Becaye Kounta.
                        “J’en ai profité aussi pour solliciter des prières auprès des autorités religieuses de la ville pour ma candidature à la présidentielle de 2024 et pour l’organisation d’élections libres, transparentes avec la participation de tous les candidats”, déclare le Président du PRP.
                    <td>
                        <button class="admin-button edit">Modifier</button>
                        <button class="admin-button delete">Supprimer</button>
                    </td>
                </tr>
                <tr>
                    <td>Tournée nationale pour le parrainage : Déthié Fall s’est rendu à Ndiassane</td>
                    <td>
                        En prélude à sa tournée nationale pour le parrainage dans le cadre de l’élection présidentielle du 25 février 2024, Déthié Fall a effectué son Ziar à Ndiassane. À cette occasion, il a présenté ses condoléances au Khalife suite au rappel à Dieu le 16 Mai 2023 du défunt Khalife Cheikh Becaye El Becaye Kounta.
                        “J’en ai profité aussi pour solliciter des prières auprès des autorités religieuses de la ville pour ma candidature à la présidentielle de 2024 et pour l’organisation d’élections libres, transparentes avec la participation de tous les candidats”, déclare le Président du PRP.
                    </td>
                    <td>
                        <button class="admin-button edit">Modifier</button>
                        <button class="admin-button delete">Supprimer</button>
                    </td>
                </tr>
            </table>
            <button class="admin-button add">Ajouter un article</button>
        </div>



    </section>
</main>

<?php include './Layout/footer.php'; ?>
<script>
    window.addEventListener('DOMContentLoaded', (event) => {
        const adminSelect = document.getElementById('admin-select');
        const adminUser = document.getElementById('adminUser');
        const adminCategories = document.getElementById('adminCategories');

        adminSelect.addEventListener('change', (event) => {
            switch (event.target.value) {
                case 'adminUser':
                    adminUser.style.display = 'block';
                    adminCategories.style.display = 'none';
                    adminArticle.style.display = 'none';
                    break;
                case 'adminCategories':
                    adminUser.style.display = 'none';
                    adminCategories.style.display = 'block';
                    adminArticle.style.display = 'none';
                    break;
                case 'adminArticle':
                    adminUser.style.display = 'none';
                    adminCategories.style.display = 'none';
                    adminArticle.style.display = 'block';
                    break;
            }

        });
    });
</script>
<script>
    // Get the modal
    var modal = document.getElementById("myModal");

    // Get the button that opens the modal
    var btns = document.getElementsByClassName("admin-button");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks the button, open the modal 
    for (var i = 0; i < btns.length; i++) {
        btns[i].onclick = function() {
            var btnType = this.innerHTML;
            var form = document.getElementById("modalForm");
            form.innerHTML = ''; // Reset the form

            if (btnType == 'Ajouter un utilisateur') {
                // Add user fields
                form.innerHTML += '<h3">Ajout utilisateur</h3><br>';
                form.innerHTML += '<label class="modal-label" for="username">Nom d\'utilisateur:</label><br>';
                form.innerHTML += '<input  class="modal-input" type="text" id="username" name="username" placeholder="Saisir le nom d\'utilisateur"><br>';
                form.innerHTML += '<label class="modal-label" for="pwd">Mot de passe:</label><br>';
                form.innerHTML += '<input class="modal-input" type="password" id="pwd" name="pwd"  placeholder="Saisir le mot de passe"><br>';
                form.innerHTML += '<label class="modal-label" for="type">Type:</label><br>';
                form.innerHTML += '<div>     <select class="modal-selector" id="type" name="type">     <option value="admin">Admin</option><option value="editeur">Éditeur</option>     </select><button class="modal-button" id="generateToken">Générer un jeton</button><br></div>';
                form.innerHTML += '<div id="tokenBlock" class="modal-tokenBlock"></div>';
                form.innerHTML += '<button class="modal-submit" id="addUser">Ajouter</button>';
            } else if (btnType == 'Ajouter une catégorie') {
                // Add category fields
                form.innerHTML += '<h3">Ajout catégories</h3><br>';

                form.innerHTML += '<label class="modal-label" for="category">Nom de la catégorie:</label><br>';
                form.innerHTML += '<input class="modal-input" type="text" id="category" name="category"><br>';
                form.innerHTML += '<button class="modal-submit" id="addCategory">Ajouter</button>';

            } else if (btnType == 'Ajouter un article') {
                // Add article fields
                form.innerHTML += '<h3">Ajout articles</h3><br>';

                form.innerHTML += '<label class="modal-label" for="title">Titre:</label><br>';
                form.innerHTML += '<input class="modal-input" type="text" id="title" name="title"><br>';
                form.innerHTML += '<label class="modal-label for="date">Date:</label><br>';
                form.innerHTML += '<input class="modal-input" type="date" id="date" name="date" value="' + new Date().toISOString().substring(0, 10) + '" disabled><br>';
                form.innerHTML += '<label class="modal-label for="content">Contenu:</label><br>';
                form.innerHTML += '<textarea class="modal-textarea" id="content" name="content"></textarea><br>';
                form.innerHTML += '<label class="modal-label for="category">Catégories:</label><br>';
                form.innerHTML += '<select class="modal-selector" id="category" name="category"><option value="politique">Politique</option><option value="economie">Économie</option><option value="culture">Culture</option><option value="sport">Sport</option><option value="sante">Santé</option><option value="technologie">Technologie</option><option value="education">Éducation</option><option value="environnement">Environnement</option></select><br>';
                form.innerHTML += '<button class="modal-submit" id="addArticles">Ajouter</button>';
            }


            modal.style.display = "block";
        }
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>
</body>

</html>