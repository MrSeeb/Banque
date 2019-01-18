<?php
require "view/template/header.php";
?>

<?php echo $message; ?><br>
<a <?php setHref("ajouterCompte") ?>>Ajouter un compte</a><br>
<a <?php setHref("virement") ?>>Faire un virement</a> ||
<a <?php setHref("versement") ?>>Faire un versement</a> ||
<a <?php setHref("retrait") ?>>Faire un retrait</a>

<table class="table table-light">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">N°de compte</th>
      <th scope="col">Type de compte</th>
      <th scope="col">Solde</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php
        foreach ($comptes as $key => $compte) {
    ?>
        <tr>
          <th scope="row"><?php echo $compte->getId(); ?></th>
          <td><?php echo $compte->getNumero(); ?></td>
          <td><?php echo $compte->getType(); ?></td>
          <td><?php echo $compte->getSolde(); ?></td>
          <td><a href="deleteCompte?id=<?php echo $compte->getId(); ?>" class="btn btn-danger">Supprimer</a></td>
        </tr>
    <?php
        }
    ?>

  </tbody>
</table>


<?php
require "view/template/footer.php";
?>
