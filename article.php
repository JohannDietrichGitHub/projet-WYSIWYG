<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Créer un article</title>
  <script src="/tinymce/tinymce.min.js"></script>
  <script>
    tinymce.init({
      selector: '#contenu',
      plugins: 'advlist autolink lists link image charmap print preview hr anchor pagebreak',
      toolbar: 'undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image'
    });
  </script>
</head>
<body>
  <h1>Créer un article</h1>
  <form action="creer-article.php" method="post">
    <label for="titre">Titre :</label>
    <input type="text" name="titre" id="titre"><br><br>
    <label for="contenu">Contenu :</label>
    <textarea name="contenu" id="contenu"></textarea><br><br>
    <input type="submit" value="Enregistrer">
  </form>
</body>
</html>